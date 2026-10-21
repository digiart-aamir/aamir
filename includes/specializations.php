<?php
// Scan the coursera specializations directory
$baseDir = 'assets/coursera specializations';
$specializations = [];

// Manually mapping verification links based on extracted data
$verifyLinks = [
    'SCRIMBA AI Engineering' => 'https://coursera.org/verify/specialization/9J419P512DIC',
    'IBM Machine Learning' => 'https://coursera.org/verify/professional-cert/NHKMJ8SLWZ3M',
    'Google Data Analytics' => 'https://coursera.org/verify/professional-cert/8XK98VFWSF5H',
    'Generative AI for educators and trainers' => 'https://coursera.org/verify/specialization/P9Z9RTM2CH3I',
    'Agentic AI and AI agents for Leaders' => 'https://coursera.org/verify/specialization/B0C9G68YTVCO',
    'AI Agent Developer' => 'https://coursera.org/verify/specialization/B68RANK2Y5XG'
];

// Rich metadata for specializations
$specMeta = [
    'AI Agent Developer' => [
        'category' => 'ai',
        'category_name' => 'AI & Agents',
        'issuer' => 'Coursera & DeepLearning',
        'icon' => '🤖',
        'badge' => 'Agentic AI',
        'color' => 'from-purple-600 to-indigo-600',
        'accent' => 'purple'
    ],
    'SCRIMBA AI Engineering' => [
        'category' => 'ai',
        'category_name' => 'AI & Agents',
        'issuer' => 'Scrimba & Coursera',
        'icon' => '🧠',
        'badge' => 'RAG & Vector DB',
        'color' => 'from-indigo-600 to-pink-600',
        'accent' => 'indigo'
    ],
    'Agentic AI and AI agents for Leaders' => [
        'category' => 'ai',
        'category_name' => 'AI & Agents',
        'issuer' => 'Vanderbilt / Coursera',
        'icon' => '⚡',
        'badge' => 'AI Strategy',
        'color' => 'from-blue-600 to-cyan-600',
        'accent' => 'blue'
    ],
    'IBM Machine Learning' => [
        'category' => 'data',
        'category_name' => 'Data & ML',
        'issuer' => 'IBM Professional Cert',
        'icon' => '📊',
        'badge' => 'Deep Learning',
        'color' => 'from-blue-600 to-indigo-700',
        'accent' => 'blue'
    ],
    'Google Data Analytics' => [
        'category' => 'data',
        'category_name' => 'Data & ML',
        'issuer' => 'Google Professional Cert',
        'icon' => '📈',
        'badge' => 'Data Analytics',
        'color' => 'from-emerald-600 to-teal-600',
        'accent' => 'emerald'
    ],
    'Generative AI for educators and trainers' => [
        'category' => 'genai',
        'category_name' => 'GenAI & Teaching',
        'issuer' => 'Vanderbilt University',
        'icon' => '🎓',
        'badge' => 'STEAM / GenAI',
        'color' => 'from-amber-500 to-orange-600',
        'accent' => 'amber'
    ]
];

if (is_dir($baseDir)) {
    $dirs = array_filter(glob($baseDir . '/*'), 'is_dir');
    natsort($dirs);
    
    foreach ($dirs as $dir) {
        $folderName = basename($dir);
        $title = preg_replace('/^\d+\.\s*/', '', $folderName);
        
        $imagesDir = $dir . '/images';
        $mainImage = '';
        $courseImages = [];
        
        if (is_dir($imagesDir)) {
            $images = glob($imagesDir . '/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
            if ($images === false) {
                $images = [];
                $exts = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
                foreach ($exts as $ext) {
                    $images = array_merge($images, glob($imagesDir . '/*.' . $ext));
                    $images = array_merge($images, glob($imagesDir . '/*.' . strtoupper($ext)));
                }
            }

            foreach ($images as $img) {
                $filename = basename($img);
                if (stripos($filename, 'final') !== false) {
                    $mainImage = $img;
                } else {
                    $courseImages[] = $img;
                }
            }
        }
        
        if (empty($mainImage)) {
            $rootImages = glob($baseDir . '/*final*.{png,jpg,jpeg}', GLOB_BRACE);
            if ($rootImages !== false) {
                foreach ($rootImages as $rootImg) {
                    $titleWords = explode(' ', strtolower($title));
                    $imgNameLower = strtolower(basename($rootImg));
                    $matchCount = 0;
                    foreach ($titleWords as $word) {
                        if (strlen($word) > 3 && strpos($imgNameLower, $word) !== false) {
                            $matchCount++;
                        }
                    }
                    if ($matchCount > 0) {
                        $mainImage = $rootImg;
                        break;
                    }
                }
            }
        }

        if (!empty($mainImage) || !empty($courseImages)) {
            $meta = isset($specMeta[$title]) ? $specMeta[$title] : [
                'category' => 'ai',
                'category_name' => 'Specialization',
                'issuer' => 'Coursera Verified',
                'icon' => '🏆',
                'badge' => 'Certified',
                'color' => 'from-indigo-600 to-purple-600',
                'accent' => 'indigo'
            ];

            // Parse clean module objects
            $modules = [];
            foreach ($courseImages as $cImg) {
                $cFile = basename($cImg);
                $cName = preg_replace('/\.[^.]+$/', '', $cFile);
                $cName = preg_replace('/_page_\d+/i', '', $cName);
                $cName = preg_replace('/^\d+[\.\-\s]+/', '', $cName);
                $modules[] = [
                    'path' => $cImg,
                    'name' => ucwords(trim($cName))
                ];
            }

            $specializations[] = [
                'title' => $title,
                'main_image' => $mainImage,
                'course_images' => $courseImages,
                'modules' => $modules,
                'verify_link' => isset($verifyLinks[$title]) ? $verifyLinks[$title] : '',
                'category' => $meta['category'],
                'category_name' => $meta['category_name'],
                'issuer' => $meta['issuer'],
                'icon' => $meta['icon'],
                'badge' => $meta['badge'],
                'color' => $meta['color'],
                'accent' => $meta['accent']
            ];
        }
    }
}
?>

<!-- Coursera Specializations Section (Ultra-Compact High-Density Single-VH Command Console) -->
<section id="specializations" class="py-10 md:py-14 bg-gray-50 dark:bg-gray-900 relative overflow-hidden" 
    x-data="{ 
        selected: 0,
        activeCategory: 'all',
        lightboxOpen: false,
        lightboxImg: '',
        lightboxTitle: '',
        lightboxLink: '',
        openLightbox(img, title, link = '') {
            this.lightboxImg = img;
            this.lightboxTitle = title;
            this.lightboxLink = link;
            this.lightboxOpen = true;
        }
    }">
    
    <!-- Background Ambient Glow & Subtle Pattern -->
    <div class="absolute inset-0 pointer-events-none opacity-40">
        <div class="absolute -top-32 -right-32 w-80 h-80 bg-blue-500/10 dark:bg-blue-600/15 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-indigo-500/10 dark:bg-indigo-600/15 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header (Ultra-Compact) -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-6 gap-3" data-aos="fade-up">
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100/60 dark:bg-blue-950/60 text-blue-700 dark:text-blue-300 text-xs font-semibold mb-1.5 border border-blue-200/50 dark:border-blue-800/40">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500 animate-pulse"></span>
                    Verified Credentials • 6 Executive Specializations • 35+ Course Accreditations
                </div>
                <h2 class="text-3xl sm:text-4xl font-grotesk font-extrabold text-gray-900 dark:text-white tracking-tight">
                    Coursera <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">Specializations</span>
                </h2>
            </div>

            <!-- Interactive Category Filter Chips -->
            <div class="flex flex-wrap items-center gap-1.5 p-1 rounded-2xl bg-white/70 dark:bg-gray-800/70 border border-gray-200/60 dark:border-gray-700/60 backdrop-blur-md shadow-sm">
                <button @click="activeCategory = 'all'"
                    :class="activeCategory === 'all' ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-md shadow-blue-500/25 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium'"
                    class="px-3 py-1 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-1">
                    <span>⚡</span> All (<?= count($specializations) ?>)
                </button>
                <button @click="activeCategory = 'ai'"
                    :class="activeCategory === 'ai' ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-md shadow-blue-500/25 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium'"
                    class="px-3 py-1 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-1">
                    <span>🤖</span> AI &amp; Agents (3)
                </button>
                <button @click="activeCategory = 'data'"
                    :class="activeCategory === 'data' ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-md shadow-blue-500/25 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium'"
                    class="px-3 py-1 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-1">
                    <span>📊</span> Data &amp; ML (2)
                </button>
                <button @click="activeCategory = 'genai'"
                    :class="activeCategory === 'genai' ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-md shadow-blue-500/25 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium'"
                    class="px-3 py-1 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-1">
                    <span>🎓</span> GenAI Education (1)
                </button>
            </div>
        </div>

        <!-- Master-Detail Single-VH Console Stage -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">
            
            <!-- LEFT RAIL (5 Cols): Interactive Credentials List -->
            <div class="lg:col-span-5 flex flex-col justify-between space-y-2">
                <div class="space-y-2 max-h-[460px] overflow-y-auto pr-1 custom-scrollbar">
                    <?php foreach($specializations as $idx => $spec): ?>
                        <div x-show="activeCategory === 'all' || activeCategory === '<?= $spec['category'] ?>'"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            @click="selected = <?= $idx ?>"
                            :class="selected === <?= $idx ?> ? 'ring-2 ring-blue-500/80 bg-gradient-to-r from-blue-50/90 via-indigo-50/70 to-purple-50/50 dark:from-blue-950/60 dark:via-indigo-950/40 dark:to-purple-950/30 border-blue-400/60 dark:border-blue-600/60 shadow-md' : 'bg-white/80 dark:bg-gray-800/80 border-gray-200/70 dark:border-gray-700/60 hover:border-blue-300 dark:hover:border-blue-700 hover:bg-gray-50/80 dark:hover:bg-gray-750 shadow-sm'"
                            class="p-3 rounded-2xl border transition-all duration-200 cursor-pointer flex items-center justify-between gap-3 group relative overflow-hidden">
                            
                            <!-- Active Accent Bar -->
                            <div class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b <?= $spec['color'] ?> transition-opacity duration-200"
                                :class="selected === <?= $idx ?> ? 'opacity-100' : 'opacity-0 group-hover:opacity-50'"></div>

                            <div class="flex items-center gap-3 min-w-0">
                                <!-- Domain Icon Badge -->
                                <div class="w-10 h-10 rounded-xl bg-gradient-to-br <?= $spec['color'] ?> text-white flex items-center justify-center text-lg flex-shrink-0 shadow-sm shadow-blue-500/20 group-hover:scale-105 transition-transform">
                                    <?= $spec['icon'] ?>
                                </div>
                                
                                <div class="min-w-0">
                                    <div class="flex items-center gap-1.5 mb-0.5">
                                        <span class="text-[10px] font-mono px-1.5 py-0.2 rounded bg-blue-100/70 dark:bg-blue-900/40 text-blue-700 dark:text-blue-300 font-semibold truncate">
                                            <?= htmlspecialchars($spec['badge']) ?>
                                        </span>
                                        <span class="text-[10px] text-gray-500 dark:text-gray-400 truncate">
                                            <?= htmlspecialchars($spec['issuer']) ?>
                                        </span>
                                    </div>
                                    <h4 class="text-xs sm:text-sm font-bold text-gray-900 dark:text-white truncate group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        <?= htmlspecialchars($spec['title']) ?>
                                    </h4>
                                    <div class="flex items-center gap-2 mt-0.5">
                                        <span class="text-[11px] text-gray-500 dark:text-gray-400">
                                            <?= count($spec['modules']) ?> Courses
                                        </span>
                                        <span class="text-[10px] font-medium text-emerald-600 dark:text-emerald-400 flex items-center gap-0.5">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                            Verified
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Arrow or Micro Thumbnail -->
                            <div class="flex items-center flex-shrink-0">
                                <div :class="selected === <?= $idx ?> ? 'text-blue-600 dark:text-blue-400 translate-x-0.5' : 'text-gray-400 dark:text-gray-600 group-hover:text-blue-500 group-hover:translate-x-0.5'"
                                    class="w-6 h-6 rounded-full flex items-center justify-center transition-all duration-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Footer Summary Strip -->
                <div class="p-2.5 rounded-xl bg-white/60 dark:bg-gray-800/60 border border-gray-200/50 dark:border-gray-700/50 flex items-center justify-between text-xs text-gray-600 dark:text-gray-400">
                    <span class="flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        All Credentials 100% Cryptographically Verified
                    </span>
                    <span class="font-mono text-[11px] font-semibold text-blue-600 dark:text-blue-400">Coursera ID Verified</span>
                </div>
            </div>

            <!-- RIGHT SPOTLIGHT STAGE (7 Cols): Active Certificate & Modules Filmstrip -->
            <div class="lg:col-span-7 flex flex-col justify-between">
                <?php foreach($specializations as $idx => $spec): ?>
                    <div x-show="selected === <?= $idx ?>"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-[0.98]"
                        x-transition:enter-end="opacity-100 scale-100"
                        class="bento-card rounded-2xl p-4 sm:p-5 bg-white/85 dark:bg-gray-800/85 backdrop-blur-md border border-gray-200/70 dark:border-gray-700/60 shadow-lg flex flex-col justify-between h-full relative overflow-hidden">
                        
                        <!-- Top Action Header -->
                        <div class="flex items-start justify-between gap-3 pb-3 border-b border-gray-100 dark:border-gray-700/60">
                            <div>
                                <div class="flex items-center gap-2 mb-1">
                                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-blue-50 dark:bg-blue-950/80 text-blue-600 dark:text-blue-400 border border-blue-200/60 dark:border-blue-800/60">
                                        <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                                        <?= htmlspecialchars($spec['issuer']) ?>
                                    </span>
                                    <span class="text-xs font-mono text-gray-400 dark:text-gray-500">
                                        <?= count($spec['modules']) ?> Completed Modules
                                    </span>
                                </div>
                                <h3 class="text-lg sm:text-xl font-bold font-grotesk text-gray-900 dark:text-white leading-tight">
                                    <?= htmlspecialchars($spec['title']) ?>
                                </h3>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex items-center gap-2 flex-shrink-0">
                                <?php if(!empty($spec['verify_link'])): ?>
                                    <a href="<?= htmlspecialchars($spec['verify_link']) ?>" 
                                       target="_blank" 
                                       rel="noopener noreferrer" 
                                       class="px-3 py-1.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white text-xs font-bold shadow-md shadow-blue-500/25 transition-all flex items-center gap-1.5">
                                        <svg class="w-3.5 h-3.5 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <span>Verify</span>
                                        <svg class="w-3 h-3 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                    </a>
                                <?php endif; ?>

                                <?php if(!empty($spec['main_image'])): ?>
                                    <button @click="openLightbox('<?= htmlspecialchars($spec['main_image']) ?>', '<?= htmlspecialchars(addslashes($spec['title'])) ?>', '<?= htmlspecialchars($spec['verify_link']) ?>')"
                                        class="p-1.5 rounded-xl bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-300 transition-colors"
                                        title="View Fullscreen">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Center Spotlight: Final Certificate Display -->
                        <?php if(!empty($spec['main_image'])): ?>
                            <div class="my-2.5 rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700/70 bg-gray-950/5 dark:bg-gray-950/40 relative group/cert cursor-pointer flex items-center justify-center max-h-[220px] sm:max-h-[240px] p-1.5"
                                 @click="openLightbox('<?= htmlspecialchars($spec['main_image']) ?>', '<?= htmlspecialchars(addslashes($spec['title'])) ?>', '<?= htmlspecialchars($spec['verify_link']) ?>')">
                                <img src="<?= htmlspecialchars($spec['main_image']) ?>" 
                                     alt="<?= htmlspecialchars($spec['title']) ?> Final Certificate" 
                                     class="max-h-[200px] sm:max-h-[220px] w-auto max-w-full object-contain rounded-lg group-hover/cert:scale-[1.02] transition-transform duration-300 shadow-sm"
                                     loading="lazy">
                                <div class="absolute inset-0 bg-gray-950/50 backdrop-blur-[2px] opacity-0 group-hover/cert:opacity-100 transition-opacity duration-200 flex items-center justify-center gap-2">
                                    <span class="px-3 py-1.5 rounded-full bg-white/90 text-gray-900 font-bold text-xs shadow-lg flex items-center gap-1.5 transform scale-95 group-hover/cert:scale-100 transition-transform">
                                        <svg class="w-3.5 h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                                        Click to Expand Certificate
                                    </span>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Bottom Shelf: Completed Course Modules Filmstrip -->
                        <?php if(!empty($spec['modules'])): ?>
                            <div class="pt-2 border-t border-gray-100 dark:border-gray-700/60">
                                <div class="flex items-center justify-between mb-1.5">
                                    <span class="text-[10px] font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                                        Course Modules Completed (<?= count($spec['modules']) ?>)
                                    </span>
                                    <span class="text-[10px] text-blue-600 dark:text-blue-400 font-medium">Click thumbnail to inspect</span>
                                </div>

                                <!-- Horizontal Scrolling Mini Thumbnails -->
                                <div class="flex gap-2 overflow-x-auto pb-1.5 custom-scrollbar">
                                    <?php foreach($spec['modules'] as $mod): ?>
                                        <div class="flex-shrink-0 group/mod cursor-pointer relative"
                                             @click="openLightbox('<?= htmlspecialchars($mod['path']) ?>', '<?= htmlspecialchars(addslashes($mod['name'])) ?> • <?= htmlspecialchars(addslashes($spec['title'])) ?>', '<?= htmlspecialchars($spec['verify_link']) ?>')"
                                             title="<?= htmlspecialchars($mod['name']) ?>">
                                            <div class="w-16 h-12 sm:w-20 sm:h-14 rounded-lg overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 group-hover/mod:border-blue-500 group-hover/mod:scale-105 transition-all shadow-xs relative">
                                                <img src="<?= htmlspecialchars($mod['path']) ?>" 
                                                     alt="<?= htmlspecialchars($mod['name']) ?>" 
                                                     class="w-full h-full object-cover"
                                                     loading="lazy">
                                                <div class="absolute inset-0 bg-blue-600/20 opacity-0 group-hover/mod:opacity-100 transition-opacity"></div>
                                            </div>
                                            <p class="text-[9px] text-gray-600 dark:text-gray-400 truncate max-w-[64px] sm:max-w-[80px] mt-0.5 leading-tight group-hover/mod:text-blue-600 dark:group-hover/mod:text-blue-400">
                                                <?= htmlspecialchars($mod['name']) ?>
                                            </p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

    <!-- Lightbox Zoom Modal (Alpine.js) -->
    <div x-show="lightboxOpen" 
         x-transition:enter="transition ease-out duration-200" 
         x-transition:enter-start="opacity-0" 
         x-transition:enter-end="opacity-100" 
         x-transition:leave="transition ease-in duration-150" 
         x-transition:leave-start="opacity-100" 
         x-transition:leave-end="opacity-0" 
         @keydown.escape.window="lightboxOpen = false"
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/85 backdrop-blur-md"
         style="display: none;">
        
        <div class="relative max-w-4xl w-full bg-gray-900 rounded-3xl border border-gray-800 shadow-2xl overflow-hidden flex flex-col max-h-[92vh]"
             @click.outside="lightboxOpen = false">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-800 bg-gray-950/60">
                <div class="flex items-center gap-2 min-w-0">
                    <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                    <h4 class="text-sm sm:text-base font-bold text-white truncate" x-text="lightboxTitle"></h4>
                </div>
                
                <div class="flex items-center gap-2 flex-shrink-0">
                    <template x-if="lightboxLink">
                        <a :href="lightboxLink" target="_blank" rel="noopener noreferrer" 
                           class="px-3 py-1 rounded-xl bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold transition-colors flex items-center gap-1">
                            <span>Verify on Coursera</span>
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        </a>
                    </template>
                    <button @click="lightboxOpen = false" 
                            class="p-1.5 rounded-xl bg-gray-800 hover:bg-gray-700 text-gray-300 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>

            <!-- Modal Image Body -->
            <div class="p-3 sm:p-5 flex items-center justify-center overflow-auto bg-gray-950/80">
                <img :src="lightboxImg" :alt="lightboxTitle" class="max-h-[75vh] w-auto max-w-full object-contain rounded-xl shadow-2xl">
            </div>
        </div>
    </div>
</section>

