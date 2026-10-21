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

if (is_dir($baseDir)) {
    // Get all directories inside baseDir
    $dirs = array_filter(glob($baseDir . '/*'), 'is_dir');
    natsort($dirs); // Sort naturally so 1, 2, 10 order correctly
    
    foreach ($dirs as $dir) {
        $folderName = basename($dir);
        // Strip the number and dot prefix, e.g., "1. SCRIMBA AI Engineering" -> "SCRIMBA AI Engineering"
        $title = preg_replace('/^\d+\.\s*/', '', $folderName);
        
        $imagesDir = $dir . '/images';
        $mainImage = '';
        $courseImages = [];
        
        if (is_dir($imagesDir)) {
            // Get all images
            $images = glob($imagesDir . '/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
            
            // Fallback if GLOB_BRACE is not supported on this OS
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
        
        // If mainImage wasn't found in images/ but we have the folder, maybe look in parent dir?
        // The user has some "Final" images in the main 'assets/coursera specializations/' folder.
        if (empty($mainImage)) {
            // Try to find a match in root assets/coursera specializations/
            $rootImages = glob($baseDir . '/*final*.{png,jpg,jpeg}', GLOB_BRACE);
            if ($rootImages !== false) {
                foreach ($rootImages as $rootImg) {
                    // Very simple heuristic: check if any word from title is in the root image name
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

        // Only add if we have at least one image to show
        if (!empty($mainImage) || !empty($courseImages)) {
            $specializations[] = [
                'title' => $title,
                'main_image' => $mainImage,
                'course_images' => $courseImages,
                'verify_link' => isset($verifyLinks[$title]) ? $verifyLinks[$title] : ''
            ];
        }
    }
}
?>

<!-- Coursera Specializations Section -->
<section id="specializations" class="py-20 bg-gray-50 dark:bg-gray-900 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0"
            style="background-image: url('data:image/svg+xml,%3Csvg width=%2260%22 height=%2260%22 viewBox=%220 0 60 60%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%23000000%22 fill-opacity=%220.1%22%3E%3Cpath d=%22M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-grotesk font-bold mb-4">
                <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                    Coursera Specializations
                </span>
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                Professional certifications and specializations achieved through continuous learning and dedication.
            </p>
        </div>

        <!-- Specializations Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach($specializations as $spec): ?>
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden group hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up">
                    <div class="p-6 flex flex-col h-full">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 text-center font-grotesk">
                            <?= htmlspecialchars($spec['title']) ?>
                        </h3>
                        
                        <!-- Main Final Certificate -->
                        <?php if(!empty($spec['main_image'])): ?>
                            <div class="mb-4 rounded-xl overflow-hidden border-2 border-indigo-100 dark:border-indigo-900/30 flex-shrink-0 relative group/main">
                                <img src="<?= htmlspecialchars($spec['main_image']) ?>" alt="Final Certificate" class="w-full object-contain group-hover/main:scale-105 transition-transform duration-500">
                                <?php if(!empty($spec['verify_link'])): ?>
                                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover/main:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                        <a href="<?= htmlspecialchars($spec['verify_link']) ?>" target="_blank" rel="noopener noreferrer" class="px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-bold rounded-full transform scale-90 group-hover/main:scale-100 transition-all duration-300 hover:shadow-lg hover:shadow-indigo-500/50 flex items-center gap-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            Verify Certificate
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Course Certificates Row -->
                        <?php if(!empty($spec['course_images'])): ?>
                            <div class="mt-auto">
                                <div class="flex flex-row justify-between gap-1 sm:gap-2 w-full">
                                    <?php foreach($spec['course_images'] as $img): ?>
                                        <div class="flex-1 min-w-0">
                                            <div class="relative group/img">
                                                <img src="<?= htmlspecialchars($img) ?>" alt="Course Certificate" class="w-full h-auto object-contain rounded shadow-sm border border-gray-100 dark:border-gray-700 group-hover/img:scale-150 group-hover/img:z-20 transition-transform duration-300 relative z-10 bg-white dark:bg-gray-800">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            
            <?php if(empty($specializations)): ?>
                <div class="col-span-full text-center text-gray-500 dark:text-gray-400 py-10">
                    <p>No specializations found. Add some certificates to the assets directory.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
