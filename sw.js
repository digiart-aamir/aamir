// Portfolio Service Worker
// Optimized for SEO and Performance

const CACHE_NAME = 'portfolio-v3';
const STATIC_CACHE = 'portfolio-static-v3';
const DYNAMIC_CACHE = 'portfolio-dynamic-v3';

// Files to cache immediately
const STATIC_ASSETS = [
    './',
    'index.php',
    'assets/css/style.css',
    'assets/js/main.js',
    'assets/img/navbar.png',
    'assets/img/my-profile-img.png',
    'assets/img/portfolio/ml-1.png',
    'assets/img/portfolio/data-1.png',
    'assets/img/portfolio/web-1.png',
    'assets/img/portfolio/graphics-1.png',
    'assets/img/portfolio/ml-2.png',
    'assets/img/portfolio/ml-3.png',
    'assets/img/portfolio/iot-hotel-system.png',
    'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap',
    'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700;800;900&display=swap',
    'https://unpkg.com/aos@2.3.1/dist/aos.css',
    'https://unpkg.com/aos@2.3.1/dist/aos.js',
    'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js',
    'https://cdn.tailwindcss.com'
];

// Install event - cache static assets
self.addEventListener('install', (event) => {
    console.log('Service Worker: Installing...');
    
    event.waitUntil(
        caches.open(STATIC_CACHE)
            .then((cache) => {
                console.log('Service Worker: Caching static assets');
                return cache.addAll(STATIC_ASSETS);
            })
            .then(() => {
                console.log('Service Worker: Static assets cached');
                return self.skipWaiting();
            })
            .catch((error) => {
                console.error('Service Worker: Failed to cache static assets', error);
            })
    );
});

// Activate event - clean up old caches
self.addEventListener('activate', (event) => {
    console.log('Service Worker: Activating...');
    
    event.waitUntil(
        caches.keys()
            .then((cacheNames) => {
                return Promise.all(
                    cacheNames.map((cacheName) => {
                        if (cacheName !== STATIC_CACHE && cacheName !== DYNAMIC_CACHE) {
                            console.log('Service Worker: Deleting old cache', cacheName);
                            return caches.delete(cacheName);
                        }
                    })
                );
            })
            .then(() => {
                console.log('Service Worker: Activated');
                return self.clients.claim();
            })
    );
});

// Fetch event - serve from cache with network fallback
self.addEventListener('fetch', (event) => {
    const { request } = event;
    const url = new URL(request.url);
    
    // Skip non-GET requests
    if (request.method !== 'GET') {
        return;
    }
    
    // Skip external requests (except CDNs)
    if (url.origin !== location.origin && !isCDN(url.origin)) {
        return;
    }
    
    event.respondWith(
        caches.match(request)
            .then((response) => {
                // Return cached version if available
                if (response) {
                    // Update cache in background
                    updateCache(request);
                    return response;
                }
                
                // Otherwise fetch from network
                return fetch(request)
                    .then((networkResponse) => {
                        // Cache successful responses
                        if (networkResponse.ok) {
                            const responseClone = networkResponse.clone();
                            caches.open(DYNAMIC_CACHE)
                                .then((cache) => {
                                    cache.put(request, responseClone);
                                });
                        }
                        return networkResponse;
                    })
                    .catch(() => {
                        // Offline fallback for specific requests
                        return getOfflineFallback(request);
                    });
            })
    );
});

// Background sync for cache updates
self.addEventListener('sync', (event) => {
    if (event.tag === 'cache-update') {
        event.waitUntil(updateAllCaches());
    }
});

// Push notification handler
self.addEventListener('push', (event) => {
    if (event.data) {
        const data = event.data.json();
        const options = {
            body: data.body,
            icon: '/assets/img/my-profile-img.png',
            badge: '/assets/img/my-profile-img.png',
            vibrate: [100, 50, 100],
            data: {
                dateOfArrival: Date.now(),
                primaryKey: 1
            },
            actions: [
                {
                    action: 'explore',
                    title: 'Explore Portfolio',
                    icon: '/assets/img/my-profile-img.png'
                },
                {
                    action: 'close',
                    title: 'Close',
                    icon: '/assets/img/my-profile-img.png'
                }
            ]
        };
        
        event.waitUntil(
            self.registration.showNotification(data.title, options)
        );
    }
});

// Notification click handler
self.addEventListener('notificationclick', (event) => {
    event.notification.close();
    
    if (event.action === 'explore') {
        event.waitUntil(
            clients.openWindow('/')
        );
    }
});

// Helper functions
function isCDN(origin) {
    const cdnOrigins = [
        'https://fonts.googleapis.com',
        'https://fonts.gstatic.com',
        'https://unpkg.com',
        'https://cdn.jsdelivr.net',
        'https://cdn.tailwindcss.com'
    ];
    return cdnOrigins.some(cdn => origin.startsWith(cdn));
}

function updateCache(request) {
    return fetch(request)
        .then((response) => {
            if (response.ok) {
                return caches.open(DYNAMIC_CACHE)
                    .then((cache) => {
                        cache.put(request, response);
                    });
            }
        })
        .catch(() => {
            // Silently fail cache updates
        });
}

function updateAllCaches() {
    return caches.open(STATIC_CACHE)
        .then((cache) => {
            return cache.addAll(STATIC_ASSETS);
        });
}

function getOfflineFallback(request) {
    const url = new URL(request.url);
    
    // Fallback for images
    if (request.destination === 'image') {
        return new Response(
            '<svg width="400" height="300" xmlns="http://www.w3.org/2000/svg"><rect width="100%" height="100%" fill="#f3f4f6"/><text x="50%" y="50%" text-anchor="middle" dy=".3em" fill="#6b7280">Image Offline</text></svg>',
            { headers: { 'Content-Type': 'image/svg+xml' } }
        );
    }
    
    // Fallback for pages
    if (request.destination === 'document') {
        return caches.match('/');
    }
    
    // Default fallback
    return new Response('Offline', { status: 503 });
}

// Cache management
self.addEventListener('message', (event) => {
    if (event.data && event.data.type === 'SKIP_WAITING') {
        self.skipWaiting();
    }
    
    if (event.data && event.data.type === 'CACHE_UPDATE') {
        event.waitUntil(updateAllCaches());
    }
});

// Periodic background sync (if supported)
if ('periodicSync' in self.registration) {
    self.addEventListener('periodicSync', (event) => {
        if (event.tag === 'update-cache') {
            event.waitUntil(updateAllCaches());
        }
    });
}

// Network status monitoring
self.addEventListener('online', () => {
    console.log('Service Worker: Online - updating caches');
    updateAllCaches();
});

self.addEventListener('offline', () => {
    console.log('Service Worker: Offline - serving from cache');
});
