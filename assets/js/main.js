// Main JavaScript for Extraordinary Portfolio

// Project data
const projectData = {
    'ml-1': {
        title: 'Laptop Price Prediction',
        category: 'Machine Learning',
        image: 'assets/img/portfolio/ml-1.png',
        description: 'A comprehensive machine learning project that analyzes various laptop specifications and predicts their prices using regression algorithms. The model considers factors like RAM, storage, processor, brand, and other features to provide accurate price estimates.',
        technologies: ['Python', 'Scikit-Learn', 'Pandas', 'NumPy', 'Matplotlib', 'Jupyter Notebook'],
        client: 'Academic Project',
        date: '2023',
        features: [
            'Data preprocessing and cleaning',
            'Feature engineering and selection',
            'Multiple regression models comparison',
            'Hyperparameter tuning',
            'Model evaluation and validation',
            'Interactive visualization dashboard'
        ],
        links: [
            { name: 'GitHub', url: '#' },
            { name: 'Live Demo', url: '#' }
        ]
    },
    'data-1': {
        title: 'WhatsApp Chat Analysis',
        category: 'Data Analysis',
        image: 'assets/img/portfolio/data-1.png',
        description: 'Advanced data analysis tool for WhatsApp chat exports that provides insights into messaging patterns, user activity, sentiment analysis, and communication trends. Uses regex patterns and natural language processing to extract meaningful information from chat data.',
        technologies: ['Python', 'Regex', 'Matplotlib', 'Seaborn', 'Pandas', 'NLTK'],
        client: 'Personal Project',
        date: '2023',
        features: [
            'Message frequency analysis',
            'User activity patterns',
            'Word cloud generation',
            'Sentiment analysis',
            'Peak activity time identification',
            'Emoji usage statistics'
        ],
        links: [
            { name: 'GitHub', url: '#' },
            { name: 'Live Demo', url: '#' }
        ]
    },
    'web-1': {
        title: 'Personal Portfolio Website',
        category: 'Web Development',
        image: 'assets/img/portfolio/web-1.png',
        description: 'A modern, responsive portfolio website built with cutting-edge web technologies. Features smooth animations, dark mode support, SEO optimization, and exceptional performance. Showcases projects, skills, and professional experience in an elegant and engaging manner.',
        technologies: ['HTML5', 'CSS3', 'JavaScript', 'Tailwind CSS', 'AOS', 'Typed.js'],
        client: 'Personal Project',
        date: '2024',
        features: [
            'Responsive design for all devices',
            'Dark/light mode toggle',
            'Smooth scroll animations',
            'SEO optimization',
            'Performance optimization',
            'Interactive portfolio filtering'
        ],
        links: [
            { name: 'GitHub', url: '#' },
            { name: 'Live Demo', url: '#' }
        ]
    },
    'web-2': {
        title: 'ASBots — Artificial Systems & Robotics Web Platform',
        category: 'Web Development',
        image: 'assets/img/portfolio/asbots-platform.png',
        description: 'Flagship enterprise web platform for ASBots (Artificial Systems & Robotics). Features high-precision automation portal architecture, Google OAuth 2.0 and credential authentication, dynamic circuit vector backgrounds, glassmorphism UI components, and real-time dashboard controls.',
        technologies: ['PHP', 'Tailwind CSS', 'MySQL', 'JavaScript', 'Google OAuth', 'REST APIs'],
        client: 'ASBots (asbots.com)',
        date: '2024',
        features: [
            'Enterprise AI robotics web portal architecture',
            'Google OAuth 2.0 & secure credential login flows',
            'High-performance glassmorphism interface with Tailwind',
            'Interactive circuit SVG animations and micro-interactions',
            'Role-based access control and session management',
            'Full mobile-first responsiveness and PWA readiness'
        ],
        links: [
            { name: 'Live Platform ↗', url: 'https://asbots.com' },
            { name: 'Portal Login', url: 'https://asbots.com' }
        ]
    },
    'graphics-1': {
        title: 'Graphics Design Portfolio',
        category: 'Graphic Design',
        image: 'assets/img/portfolio/graphics-1.png',
        description: 'A comprehensive collection of graphic design work including social media graphics, UI/UX mockups, brand identity materials, and digital illustrations. Demonstrates proficiency in modern design tools and creative visual communication.',
        technologies: ['Canva', 'Adobe Photoshop', 'Figma', 'Illustrator', 'UI/UX Design'],
        client: 'Various Clients',
        date: '2023-2024',
        features: [
            'Social media design packages',
            'Brand identity development',
            'UI/UX mockups and prototypes',
            'Digital illustrations',
            'Marketing materials',
            'Logo design concepts'
        ],
        links: [
            { name: 'View Gallery', url: '#' },
            { name: 'Behance', url: '#' }
        ]
    },
    'graphics-2': {
        title: 'CertifAI — Design System & SVG Asset Showcase',
        category: 'Graphic Design & Vector Motion',
        image: 'assets/img/portfolio/certifai-showcase.png',
        description: 'A comprehensive, production-grade vector design system and asset showcase for CertifAI (powered by asbots.com). Comprises 25 bespoke vector assets including dark/light brand wordmarks, live SMIL animated circuit shield icons with seamless trace particle motion, 512px app squircles, interactive mobile splash screen prototypes with laser choreography, and an interactive 14-theme Gradient Studio with real-time CSS/SVG export.',
        technologies: ['SVG Vector', 'SMIL Motion', 'Brand Identity', 'UI/UX Design', 'Design Systems', 'CSS Gradients'],
        client: 'CertifAI (asbots.com)',
        date: '2024',
        features: [
            '25 scalable SVG brand assets with dark & light themes',
            'Live SMIL animated circuit node shields with trace motion',
            'Interactive mobile splash choreography with laser effects',
            'Interactive Gradient Studio with 14 themes & angle tuner',
            'iOS & Android 512×512 app squircles and mono marks',
            'Instant 1-click CSS and SVG code copy workflows'
        ],
        links: [
            { name: 'Live Showcase ↗', url: 'https://graphics-certifai.netlify.app/' },
            { name: 'Browse Assets', url: 'https://graphics-certifai.netlify.app/#logos' }
        ]
    },
    'ml-2': {
        title: 'Handwritten Digit Recognition',
        category: 'Machine Learning',
        image: 'assets/img/portfolio/ml-2.png',
        description: 'Deep learning project implementing Convolutional Neural Networks (CNN) to recognize handwritten digits with high accuracy. Uses the MNIST dataset and achieves state-of-the-art performance through advanced neural network architecture.',
        technologies: ['TensorFlow', 'Keras', 'Python', 'CNN', 'NumPy', 'Matplotlib'],
        client: 'Academic Project',
        date: '2023',
        features: [
            'CNN architecture implementation',
            'Data augmentation techniques',
            'Model training and validation',
            'Real-time digit prediction',
            'Performance metrics visualization',
            'Confusion matrix analysis'
        ],
        links: [
            { name: 'GitHub', url: '#' },
            { name: 'Live Demo', url: '#' }
        ]
    },
    'ml-3': {
        title: 'Email Spam Detector',
        category: 'Machine Learning',
        image: 'assets/img/portfolio/ml-3.png',
        description: 'Natural Language Processing project that classifies emails as spam or legitimate using machine learning algorithms. Implements text preprocessing, feature extraction, and multiple classification models with high accuracy.',
        technologies: ['Python', 'NLTK', 'Scikit-Learn', 'Pandas', 'Machine Learning', 'NLP'],
        client: 'Academic Project',
        date: '2023',
        features: [
            'Text preprocessing and tokenization',
            'Feature extraction from email content',
            'Multiple classification algorithms',
            'Model performance comparison',
            'Real-time email classification',
            'Confusion matrix and metrics'
        ],
        links: [
            { name: 'GitHub', url: '#' },
            { name: 'Live Demo', url: '#' }
        ]
    },
    'iot-hotel-1': {
        title: 'ESP32 Waiter-Less Hotel System',
        category: 'IoT & Robotics',
        image: 'assets/img/portfolio/iot-hotel-system.png',
        description: 'A fully autonomous, multi-node restaurant automation system built using three ESP32 microcontrollers communicating over the ESP-NOW wireless protocol — eliminating the need for a central server or internet connection. The system digitizes the entire food ordering and delivery workflow: customers use a Table Unit (ESP32 + 4×4 keypad + OLED display) to enter their Table ID, a security code, and their order. The order is instantly wirelessly transmitted to the Kitchen Unit (ESP32 + LCD), where staff see all orders in real time. With one button press, the kitchen relays the order to the Delivery Robot (an ESP32-powered autonomous vehicle) which navigates to the correct table and delivers the food — all without any human waiter.',
        technologies: ['ESP32 ×3', 'ESP-NOW Protocol', 'OLED Display', 'LCD Display', '4×4 Keypad', 'L298N Motor Driver', 'DC Motors', 'C++ / Arduino IDE'],
        client: 'Academic / Innovation Project',
        date: '2024',
        features: [
            'Server-free ESP-NOW peer-to-peer mesh communication',
            'Secure Table ID + PIN code order verification',
            'Real-time multi-order display on kitchen LCD',
            'One-click kitchen-to-robot order dispatching',
            'Autonomous robot navigation to customer table',
            'Zero internet or Wi-Fi router dependency',
            'Scalable architecture for multiple tables',
            'Low-cost hardware implementation under $30'
        ],
        links: [
            { name: 'GitHub', url: '#' },
            { name: 'Demo Video', url: '#' }
        ]
    },
    'solar-1': {
        title: 'AI Intelligent Dual Axis Autonomous Solar Harvesting System',
        category: 'IoT & Robotics',
        image: 'assets/img/portfolio/solar-harvesting.png',
        description: 'AI-driven dual-axis solar tracker that maximizes energy harvest by autonomously aligning panels to the sun using computer vision and motor control.',
        technologies: ['Computer Vision', 'Motor Control', 'AI', 'ESP32'],
        client: 'Research Project',
        date: '2024',
        features: [
            'Dual-axis tracking',
            'Computer vision based sun detection',
            'Motor control for panel alignment',
            'Energy optimization algorithms'
        ],
        links: [
            { name: 'GitHub', url: '#' },
            { name: 'Demo Video', url: '#' }
        ]
    },
    // Existing closing
};

// Register Alpine.js stores
document.addEventListener('alpine:init', () => {
    Alpine.store('darkMode', {
        on: localStorage.getItem('theme') === 'dark' ||
            (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches),
        toggle() {
            this.on = !this.on;
            localStorage.setItem('theme', this.on ? 'dark' : 'light');
            if (this.on) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    });

    Alpine.store('menuOpen', {
        on: false,
        toggle() {
            this.on = !this.on;
        },
        close() {
            this.on = false;
        }
    });
});

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', function () {
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    // Initialize Typed.js
    const typed = new Typed('#typed-text', {
        strings: [
            'Computer System Engineer',
            'AI & Web Developer',
            'STEAM/IOT/AI Educator'
        ],
        typeSpeed: 50,
        backSpeed: 30,
        backDelay: 2000,
        loop: true,
        showCursor: false
    });

    // Hide loader
    setTimeout(() => {
        const loader = document.getElementById('loader');
        loader.classList.add('hidden');
        setTimeout(() => loader.remove(), 500);
    }, 1500);

    // Initialize particles
    createParticles();

    // Initialize smooth scroll
    initSmoothScroll();

    // Initialize scroll effects
    initScrollEffects();

    // Initialize magnetic buttons
    initMagneticButtons();

    // Initialize 3D card tilt & glare
    init3DTiltEffect();

    // Initialize animated counters
    initAnimatedCounters();

    // Initialize parallax effects
    initParallax();

    // Initialize theme detection
    detectTheme();

    // Initialize neural network canvas background
    initNeuralNetCanvas();

    // Initialize portfolio filtering
    initPortfolioFilter();

    // Initialize contact form
    initContactForm();
});

// ─── Neural Network Canvas Background ──────────────────────────────────────
function initNeuralNetCanvas() {
    const canvas = document.getElementById('neural-net-canvas');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');

    // ── Config ────────────────────────────────────────────────────────────────
    const NODE_COUNT_BASE = 90;   // scales with area
    const MAX_DIST = 160;  // max px between connected nodes
    const MOUSE_DIST = 200;  // mouse attract radius
    const NODE_SPEED = 0.35;
    const NODE_RADIUS = 2.2;
    const PULSE_SPEED = 0.025;

    let W, H, nodes, mouse = { x: -9999, y: -9999 }, animId;
    let hue = 237;   // indigo base

    // ── Theme helpers ─────────────────────────────────────────────────────────
    const isDark = () => document.documentElement.classList.contains('dark');

    function themeColors() {
        return isDark()
            ? { node: 'rgba(139,92,246,', line: 'rgba(99,102,241,', accent: 'rgba(168,85,247,' }
            : { node: 'rgba(79,70,229,', line: 'rgba(99,102,241,', accent: 'rgba(139,92,246,' };
    }

    // ── Node factory ─────────────────────────────────────────────────────────
    function makeNode() {
        const angle = Math.random() * Math.PI * 2;
        return {
            x: Math.random() * W,
            y: Math.random() * H,
            vx: Math.cos(angle) * NODE_SPEED * (0.4 + Math.random() * 0.6),
            vy: Math.sin(angle) * NODE_SPEED * (0.4 + Math.random() * 0.6),
            r: NODE_RADIUS * (0.6 + Math.random() * 0.8),
            pulse: Math.random() * Math.PI * 2,
            layer: Math.floor(Math.random() * 3),   // 0=input, 1=hidden, 2=output
        };
    }

    // ── Resize ────────────────────────────────────────────────────────────────
    function resize() {
        const dpr = window.devicePixelRatio || 1;
        const rect = canvas.parentElement.getBoundingClientRect();
        W = rect.width;
        H = rect.height;
        canvas.width = W * dpr;
        canvas.height = H * dpr;
        canvas.style.width = W + 'px';
        canvas.style.height = H + 'px';
        ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

        const targetCount = Math.round(NODE_COUNT_BASE * (W * H) / (1440 * 900));
        const count = Math.max(40, Math.min(targetCount, 150));

        // keep existing nodes if resizing, or create fresh
        if (!nodes) {
            nodes = Array.from({ length: count }, makeNode);
        } else {
            while (nodes.length < count) nodes.push(makeNode());
            nodes.length = count;
        }
    }

    // ── Draw one frame ────────────────────────────────────────────────────────
    function draw() {
        ctx.clearRect(0, 0, W, H);
        const col = themeColors();
        const now = performance.now() * 0.001;

        // ── Draw connections ─────────────────────────────────────────────────
        for (let i = 0; i < nodes.length; i++) {
            const a = nodes[i];

            // mouse connection
            const mdx = mouse.x - a.x, mdy = mouse.y - a.y;
            const md = Math.hypot(mdx, mdy);
            if (md < MOUSE_DIST) {
                const alpha = (1 - md / MOUSE_DIST) * 0.7;
                ctx.beginPath();
                ctx.moveTo(a.x, a.y);
                ctx.lineTo(mouse.x, mouse.y);
                // pulsing glow line
                const grd = ctx.createLinearGradient(a.x, a.y, mouse.x, mouse.y);
                grd.addColorStop(0, col.accent + alpha + ')');
                grd.addColorStop(1, col.accent + '0)');
                ctx.strokeStyle = grd;
                ctx.lineWidth = 1.2;
                ctx.shadowBlur = 8;
                ctx.shadowColor = col.accent + '0.5)';
                ctx.stroke();
                ctx.shadowBlur = 0;
            }

            // node-to-node connections
            for (let j = i + 1; j < nodes.length; j++) {
                const b = nodes[j];
                const dx = b.x - a.x, dy = b.y - a.y;
                const dist = Math.hypot(dx, dy);
                if (dist >= MAX_DIST) continue;

                const alpha = (1 - dist / MAX_DIST) * 0.55;
                // give different colours to different layer combos
                const lineCol = (a.layer !== b.layer) ? col.accent : col.line;

                ctx.beginPath();
                ctx.moveTo(a.x, a.y);
                ctx.lineTo(b.x, b.y);
                ctx.strokeStyle = lineCol + alpha + ')';
                ctx.lineWidth = alpha * 1.8;
                ctx.stroke();
            }
        }

        // ── Draw nodes ───────────────────────────────────────────────────────
        for (const n of nodes) {
            n.pulse += PULSE_SPEED;
            const pulse = 0.6 + 0.4 * Math.sin(n.pulse);
            const radius = n.r * pulse;

            // outer glow
            const grd = ctx.createRadialGradient(n.x, n.y, 0, n.x, n.y, radius * 3.5);
            const nodeCol = n.layer === 0 ? col.node
                : n.layer === 1 ? col.accent
                    : col.line;
            grd.addColorStop(0, nodeCol + (0.8 * pulse) + ')');
            grd.addColorStop(0.5, nodeCol + (0.3 * pulse) + ')');
            grd.addColorStop(1, nodeCol + '0)');
            ctx.beginPath();
            ctx.arc(n.x, n.y, radius * 3.5, 0, Math.PI * 2);
            ctx.fillStyle = grd;
            ctx.fill();

            // solid core
            ctx.beginPath();
            ctx.arc(n.x, n.y, radius, 0, Math.PI * 2);
            ctx.fillStyle = nodeCol + '1)';
            ctx.fill();

            // move
            n.x += n.vx;
            n.y += n.vy;
            if (n.x < -10) n.x = W + 10;
            if (n.x > W + 10) n.x = -10;
            if (n.y < -10) n.y = H + 10;
            if (n.y > H + 10) n.y = -10;
        }

        animId = requestAnimationFrame(draw);
    }

    // ── Events ────────────────────────────────────────────────────────────────
    const section = document.getElementById('home');
    section.addEventListener('mousemove', e => {
        const rect = canvas.getBoundingClientRect();
        mouse.x = e.clientX - rect.left;
        mouse.y = e.clientY - rect.top;
    });
    section.addEventListener('mouseleave', () => {
        mouse.x = -9999;
        mouse.y = -9999;
    });

    // touch support
    section.addEventListener('touchmove', e => {
        if (!e.touches[0]) return;
        const rect = canvas.getBoundingClientRect();
        mouse.x = e.touches[0].clientX - rect.left;
        mouse.y = e.touches[0].clientY - rect.top;
    }, { passive: true });

    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(resize, 150);
    });

    // Watch theme changes to recolor without restarting animation
    const themeObserver = new MutationObserver(() => { /* colors are read live per-frame */ });
    themeObserver.observe(document.documentElement, { attributes: true, attributeFilter: ['class'] });

    // ── Bootstrap ─────────────────────────────────────────────────────────────
    resize();
    draw();
}
// ─────────────────────────────────────────────────────────────────────────────

// Create floating particles
function createParticles() {
    const particlesContainer = document.createElement('div');
    particlesContainer.className = 'particles';
    document.body.appendChild(particlesContainer);

    for (let i = 0; i < 50; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 15 + 's';
        particle.style.animationDuration = (15 + Math.random() * 10) + 's';
        particlesContainer.appendChild(particle);
    }
}

// Smooth scroll for navigation links
function initSmoothScroll() {
    const navLinks = document.querySelectorAll('a[href^="#"]');

    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (!href || href === '#' || !href.startsWith('#')) return;

            const targetId = href.substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                e.preventDefault();
                const offsetTop = targetElement.getBoundingClientRect().top + window.pageYOffset - 80;

                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });

                // Update active nav link if it's a nav-link
                if (this.classList.contains('nav-link')) {
                    document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                }

                // Close mobile menu if open
                if (window.Alpine && typeof Alpine.store === 'function') {
                    try {
                        Alpine.store('menuOpen', false);
                    } catch (err) {
                        // ignore
                    }
                }
            }
        });
    });
}

// Scroll effects
function initScrollEffects() {
    const navbar = document.querySelector('nav');
    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;

        // Navbar background on scroll
        if (currentScroll > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        // Hide/show navbar on scroll
        if (currentScroll > lastScroll && currentScroll > 100) {
            navbar.style.transform = 'translateY(-100%)';
        } else {
            navbar.style.transform = 'translateY(0)';
        }

        lastScroll = currentScroll;

        // Update active nav link based on scroll position
        updateActiveNavLink();
    });
}

// Update active navigation link
function updateActiveNavLink() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('a[href^="#"]');

    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (window.pageYOffset >= (sectionTop - 200)) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
}

// Magnetic button effect
function initMagneticButtons() {
    const buttons = document.querySelectorAll('.magnetic-btn');

    buttons.forEach(button => {
        button.addEventListener('mousemove', (e) => {
            const rect = button.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            button.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
        });

        button.addEventListener('mouseleave', () => {
            button.style.transform = 'translate(0, 0)';
        });
    });
}

// ─── 3D Card Tilt & Specular Dynamic Glare Effect ─────────────────────────────
function init3DTiltEffect() {
    // Only run on desktop/pointing devices to preserve smooth touch scrolling
    if (window.matchMedia('(pointer: coarse)').matches) return;

    const cards = document.querySelectorAll('.tilt-card');
    cards.forEach(card => {
        let bounds = null;
        let rafId = null;

        function onMouseMove(e) {
            if (!bounds) bounds = card.getBoundingClientRect();

            const mouseX = e.clientX - bounds.left;
            const mouseY = e.clientY - bounds.top;

            const xPct = Math.max(0, Math.min(100, (mouseX / bounds.width) * 100));
            const yPct = Math.max(0, Math.min(100, (mouseY / bounds.height) * 100));

            // Set specular reflection spotlight coords
            card.style.setProperty('--mouse-x', `${xPct}%`);
            card.style.setProperty('--mouse-y', `${yPct}%`);

            // Subtle rotation angles (-8 to +8 deg)
            const rotateX = ((mouseY / bounds.height) - 0.5) * -12;
            const rotateY = ((mouseX / bounds.width) - 0.5) * 12;

            card.style.transform = `perspective(1000px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) scale3d(1.02, 1.02, 1.02)`;
        }

        card.addEventListener('mouseenter', () => {
            bounds = card.getBoundingClientRect();
            card.style.transition = 'transform 0.12s ease-out, box-shadow 0.25s ease-out';
        });

        card.addEventListener('mousemove', (e) => {
            if (rafId) cancelAnimationFrame(rafId);
            rafId = requestAnimationFrame(() => onMouseMove(e));
        });

        card.addEventListener('mouseleave', () => {
            if (rafId) cancelAnimationFrame(rafId);
            bounds = null;
            card.style.transition = 'transform 0.5s cubic-bezier(0.23, 1, 0.32, 1), box-shadow 0.5s ease';
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
            card.style.setProperty('--mouse-x', '50%');
            card.style.setProperty('--mouse-y', '50%');
        });
    });
}

// ─── Stat Counter Rollup Animation ───────────────────────────────────────────
function initAnimatedCounters() {
    const counters = document.querySelectorAll('.stat-counter');
    if (!counters.length) return;

    function startCounter(el) {
        if (el.dataset.animated === 'true') return;
        el.dataset.animated = 'true';
        const target = parseInt(el.getAttribute('data-target'), 10);
        if (isNaN(target)) return;

        const duration = 1600; // 1.6s
        const startTime = performance.now();

        function step(now) {
            const elapsed = now - startTime;
            const progress = Math.min(elapsed / duration, 1);
            // easeOutExpo easing curve
            const ease = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
            const current = Math.floor(ease * target);

            el.textContent = current;

            if (progress < 1) {
                requestAnimationFrame(step);
            } else {
                el.textContent = target;
            }
        }

        requestAnimationFrame(step);
    }

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounter(entry.target);
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    counters.forEach(c => {
        observer.observe(c);
        // Trigger immediately if already visible in initial viewport
        const rect = c.getBoundingClientRect();
        if (rect.top >= 0 && rect.top <= (window.innerHeight || document.documentElement.clientHeight)) {
            setTimeout(() => startCounter(c), 600);
        }
    });
}

// Parallax effects
function initParallax() {
    const parallaxElements = document.querySelectorAll('.parallax');

    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;

        parallaxElements.forEach(element => {
            const speed = element.dataset.speed || 0.5;
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });
}

// Detect system theme preference
function detectTheme() {
    // Theme detection and application is handled by the Alpine.js 'darkMode' store.
}

// Portfolio filtering
function initPortfolioFilter() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.dataset.filter;

            // Update active button
            filterButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-gradient-to-r', 'from-indigo-600', 'to-purple-600', 'text-white');
                btn.classList.add('bg-gray-200', 'dark:bg-gray-700', 'text-gray-700', 'dark:text-gray-300');
            });
            button.classList.remove('bg-gray-200', 'dark:bg-gray-700', 'text-gray-700', 'dark:text-gray-300');
            button.classList.add('active', 'bg-gradient-to-r', 'from-indigo-600', 'to-purple-600', 'text-white');

            // Filter items
            portfolioItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = 'flex';
                    setTimeout(() => item.classList.add('show'), 10);
                } else {
                    item.classList.remove('show');
                    setTimeout(() => item.style.display = 'none', 300);
                }
            });
        });
    });
}

// Contact form handling
function initContactForm() {
    const form = document.getElementById('contact-form');

    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            // Get form data
            const formData = new FormData(form);
            const data = Object.fromEntries(formData);

            // Show loading state
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalHTML = submitBtn.innerHTML;
            submitBtn.innerHTML = `
                <svg class="w-4 h-4 animate-spin shrink-0" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                <span>Transmitting Inquiry...</span>
            `;
            submitBtn.disabled = true;

            // Simulate form submission with rich feedback
            setTimeout(() => {
                // Show success state on button
                submitBtn.innerHTML = `
                    <svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Inquiry Sent Successfully!</span>
                `;
                submitBtn.classList.remove('from-indigo-600', 'via-purple-600', 'to-cyan-600');
                submitBtn.classList.add('bg-emerald-600');

                // Show notification
                showNotification(`Thank you, ${data.name || 'there'}! Your inquiry was delivered. I'll reply within 24 hours.`, 'success');

                // Reset form & counter
                form.reset();
                const counter = document.getElementById('char-counter');
                if (counter) counter.textContent = '0 / 1000';

                // Reset interest pills
                document.querySelectorAll('.interest-pill').forEach(p => {
                    p.classList.remove('active-pill', 'bg-gradient-to-r', 'from-indigo-600', 'to-purple-600', 'text-white', 'border-transparent', 'shadow-sm');
                    p.classList.add('bg-gray-50/70', 'dark:bg-gray-800/50', 'text-gray-700', 'dark:text-gray-300', 'border-gray-200', 'dark:border-gray-700');
                });

                // Restore button after 3.5s
                setTimeout(() => {
                    submitBtn.innerHTML = originalHTML;
                    submitBtn.classList.remove('bg-emerald-600');
                    submitBtn.classList.add('from-indigo-600', 'via-purple-600', 'to-cyan-600');
                    submitBtn.disabled = false;
                }, 3500);
            }, 1200);
        });
    }
}

// Project modal functions
function openProjectModal(projectId) {
    const project = projectData[projectId];
    if (!project) return;

    const modal = document.getElementById('projectModal');
    const modalBody = document.getElementById('modalBody');
    const modalContent = document.getElementById('modalContent');

    // Generate modal content
    modalBody.innerHTML = `
        <div class="relative">
            <img src="${project.image}" alt="${project.title}" class="w-full h-80 object-cover rounded-t-2xl">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent rounded-t-2xl"></div>
            <div class="absolute bottom-4 left-4 right-4 text-white">
                <h2 class="text-3xl font-bold mb-2">${project.title}</h2>
                <p class="text-lg opacity-90">${project.category}</p>
            </div>
        </div>
        
        <div class="p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Project Information</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between py-2 border-b border-gray-200 dark:border-gray-700">
                            <span class="text-gray-600 dark:text-gray-400">Category</span>
                            <span class="font-semibold text-gray-900 dark:text-white">${project.category}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-200 dark:border-gray-700">
                            <span class="text-gray-600 dark:text-gray-400">Client</span>
                            <span class="font-semibold text-gray-900 dark:text-white">${project.client}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-200 dark:border-gray-700">
                            <span class="text-gray-600 dark:text-gray-400">Project Date</span>
                            <span class="font-semibold text-gray-900 dark:text-white">${project.date}</span>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Technologies Used</h3>
                    <div class="flex flex-wrap gap-2">
                        ${project.technologies.map(tech => `
                            <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-sm font-semibold rounded-full">
                                ${tech}
                            </span>
                        `).join('')}
                    </div>
                </div>
            </div>
            
            <div class="mb-8">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Project Description</h3>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">${project.description}</p>
            </div>
            
            <div class="mb-8">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Key Features</h3>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    ${project.features.map(feature => `
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-600 dark:text-gray-300">${feature}</span>
                        </li>
                    `).join('')}
                </ul>
            </div>
            
            <div>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Project Links</h3>
                <div class="flex flex-wrap gap-4">
                    ${project.links.map(link => `
                        <a href="${link.url}" target="_blank" rel="noopener noreferrer" class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300 inline-flex items-center gap-2">
                            ${link.name}
                        </a>
                    `).join('')}
                </div>
            </div>
        </div>
    `;

    // Show modal
    modal.classList.remove('hidden');
    setTimeout(() => {
        modalContent.classList.remove('scale-95', 'opacity-0');
        modalContent.classList.add('scale-100', 'opacity-100');
    }, 10);

    // Prevent body scroll
    document.body.style.overflow = 'hidden';
}

function closeProjectModal() {
    const modal = document.getElementById('projectModal');
    const modalContent = document.getElementById('modalContent');

    modalContent.classList.remove('scale-100', 'opacity-100');
    modalContent.classList.add('scale-95', 'opacity-0');

    setTimeout(() => {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    }, 300);
}

// Notification system
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `fixed top-20 right-4 z-50 p-4 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 ${type === 'success' ? 'bg-green-500' :
            type === 'error' ? 'bg-red-500' :
                'bg-blue-500'
        } text-white`;
    notification.textContent = message;

    document.body.appendChild(notification);

    // Animate in
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
    }, 100);

    // Remove after 3 seconds
    setTimeout(() => {
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Intersection Observer for animations
function initIntersectionObserver() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');

                // Stagger animation for multiple items
                if (entry.target.classList.contains('stagger-container')) {
                    const items = entry.target.querySelectorAll('.stagger-item');
                    items.forEach((item, index) => {
                        setTimeout(() => {
                            item.classList.add('animate');
                        }, index * 100);
                    });
                }
            }
        });
    }, observerOptions);

    // Observe elements
    document.querySelectorAll('.stagger-item, .stagger-container').forEach(el => {
        observer.observe(el);
    });
}

// Skill progress animation
function animateSkillProgress() {
    const skillBars = document.querySelectorAll('.skill-progress');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const progress = entry.target;
                const targetWidth = progress.dataset.progress;

                progress.style.width = targetWidth + '%';
                observer.unobserve(progress);
            }
        });
    });

    skillBars.forEach(bar => observer.observe(bar));
}

// Initialize all functions
initIntersectionObserver();
animateSkillProgress();

// Scroll Progress Bar
const scrollProgressBar = document.getElementById('scroll-progress-bar');
function updateScrollProgress() {
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
    if (scrollProgressBar) scrollProgressBar.style.width = progress + '%';
}

// Performance optimization
let ticking = false;
function requestTick() {
    if (!ticking) {
        requestAnimationFrame(updateAnimations);
        ticking = true;
    }
}

function updateAnimations() {
    ticking = false;
    updateScrollProgress();
}

window.addEventListener('scroll', requestTick, { passive: true });
window.addEventListener('resize', requestTick, { passive: true });

// Make functions global for onclick handlers
window.openProjectModal = openProjectModal;
window.closeProjectModal = closeProjectModal;
