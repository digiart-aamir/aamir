<?php
/**
 * Developer & Engineering Hub - Live GitHub & Verified LinkedIn Showcase
 * Engr. Aamir Jamil Portfolio
 * Features:
 * - Live GitHub API stats with resilient file-caching and offline fallback
 * - Top languages distribution and featured repositories
 * - Live contribution activity heatmap
 * - Verified LinkedIn professional network credentials
 */

function get_github_live_stats() {
    $cache_file = __DIR__ . '/../assets/data/github_cache.json';
    $chart_cache_file = __DIR__ . '/../assets/data/github_chart_cache.svg';
    $cache_ttl = 21600; // 6 hours

    // Fallback data if network/API is unavailable
    $fallback_data = [
        'updated_at' => date('c'),
        'user' => [
            'login' => 'digiart-aamir',
            'name' => 'Engr. Aamir Jamil',
            'public_repos' => 52,
            'followers' => 0,
            'following' => 0,
            'avatar_url' => 'https://avatars.githubusercontent.com/u/123136262?v=4',
            'html_url' => 'https://github.com/digiart-aamir'
        ],
        'metrics' => [
            'total_repos' => 52,
            'total_stars' => 1,
            'total_forks' => 0,
            'languages' => [
                'HTML' => 14,
                'Python' => 12,
                'Jupyter Notebook' => 12,
                'Java' => 2,
                'Kotlin' => 1,
                'Hack' => 1
            ]
        ],
        'featured_repos' => [
            [
                'name' => 'CertifAI',
                'description' => 'Modern, interactive AI learning and certification platform designed to help learners progress from basics to advanced AI.',
                'language' => 'HTML / JS',
                'stars' => 0,
                'forks' => 0,
                'url' => 'https://github.com/digiart-aamir/CertifAI',
                'updated' => '2026-10-22'
            ],
            [
                'name' => 'demo-Streamlit-dashboard',
                'description' => 'Interactive data analytics and machine learning dashboard built with Python and Streamlit.',
                'language' => 'Python',
                'stars' => 0,
                'forks' => 0,
                'url' => 'https://github.com/digiart-aamir/demo-Streamlit-dashboard',
                'updated' => '2026-10-18'
            ],
            [
                'name' => 'ID-Card-Scan-and-Copy',
                'description' => 'Android utility app to convert, crop, and format ID card scans into clean printable documents.',
                'language' => 'Kotlin',
                'stars' => 0,
                'forks' => 0,
                'url' => 'https://github.com/digiart-aamir/ID-Card-Scan-and-Copy',
                'updated' => '2026-10-14'
            ],
            [
                'name' => 'shoe_size',
                'description' => 'Predictive machine learning classification pipeline for physical biometric attribute modeling.',
                'language' => 'Python',
                'stars' => 0,
                'forks' => 0,
                'url' => 'https://github.com/digiart-aamir/shoe_size',
                'updated' => '2026-08-13'
            ]
        ]
    ];

    $cache_dir = dirname($cache_file);
    if (!is_dir($cache_dir)) {
        @mkdir($cache_dir, 0777, true);
    }

    $should_refresh = false;
    if (!file_exists($cache_file) || (time() - filemtime($cache_file) > $cache_ttl)) {
        $should_refresh = true;
    }

    if ($should_refresh) {
        $ctx = stream_context_create([
            'http' => [
                'timeout' => 3.0,
                'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) EngrAamirPortfolio/2.0\r\nAccept: application/json\r\n"
            ]
        ]);

        $user_raw = @file_get_contents('https://api.github.com/users/digiart-aamir', false, $ctx);
        $repos_raw = @file_get_contents('https://api.github.com/users/digiart-aamir/repos?per_page=100&sort=updated', false, $ctx);

        if ($user_raw && $repos_raw) {
            $user = json_decode($user_raw, true);
            $repos = json_decode($repos_raw, true);

            if (is_array($user) && is_array($repos)) {
                $stars = 0;
                $forks = 0;
                $languages = [];
                $featured_repos = [];

                foreach ($repos as $r) {
                    $stars += $r['stargazers_count'] ?? 0;
                    $forks += $r['forks_count'] ?? 0;
                    $lang = $r['language'] ?? null;
                    if ($lang) {
                        $languages[$lang] = ($languages[$lang] ?? 0) + 1;
                    }
                }
                arsort($languages);

                $picked_names = ['CertifAI', 'demo-Streamlit-dashboard', 'ID-Card-Scan-and-Copy', 'shoe_size', 'graphic-certifAI', 'aamir'];
                foreach ($repos as $r) {
                    if (in_array($r['name'], $picked_names)) {
                        $featured_repos[] = [
                            'name' => $r['name'],
                            'description' => $r['description'] ?? 'Open-source repository by Engr. Aamir Jamil',
                            'language' => $r['language'] ?? 'Code',
                            'stars' => $r['stargazers_count'] ?? 0,
                            'forks' => $r['forks_count'] ?? 0,
                            'url' => $r['html_url'],
                            'updated' => substr($r['updated_at'] ?? '', 0, 10)
                        ];
                    }
                }

                // Cache heatmap chart if possible
                $chart_svg = @file_get_contents('https://ghchart.rshah.org/6366f1/digiart-aamir', false, $ctx);
                if ($chart_svg && strpos($chart_svg, '<svg') !== false) {
                    @file_put_contents($chart_cache_file, $chart_svg);
                }

                $payload = [
                    'updated_at' => date('c'),
                    'user' => [
                        'login' => $user['login'] ?? 'digiart-aamir',
                        'name' => $user['name'] ?? 'Engr. Aamir Jamil',
                        'public_repos' => $user['public_repos'] ?? 52,
                        'followers' => $user['followers'] ?? 0,
                        'following' => $user['following'] ?? 0,
                        'avatar_url' => $user['avatar_url'] ?? 'https://avatars.githubusercontent.com/u/123136262?v=4',
                        'html_url' => 'https://github.com/digiart-aamir'
                    ],
                    'metrics' => [
                        'total_repos' => $user['public_repos'] ?? 52,
                        'total_stars' => $stars,
                        'total_forks' => $forks,
                        'languages' => $languages
                    ],
                    'featured_repos' => array_slice($featured_repos, 0, 4)
                ];

                @file_put_contents($cache_file, json_encode($payload));
                return $payload;
            }
        }
    }

    // Try loading from existing cache file
    if (file_exists($cache_file)) {
        $raw = @file_get_contents($cache_file);
        $decoded = json_decode($raw, true);
        if (is_array($decoded) && !empty($decoded['user'])) {
            return $decoded;
        }
    }

    return $fallback_data;
}

$gh_data = get_github_live_stats();
$gh_user = $gh_data['user'];
$gh_metrics = $gh_data['metrics'];
$gh_featured = $gh_data['featured_repos'];
$total_repos = $gh_metrics['total_repos'] ?? 52;
$languages = $gh_metrics['languages'] ?? ['HTML' => 14, 'Python' => 12, 'Jupyter Notebook' => 12, 'Java' => 2];
$total_lang_count = array_sum(array_slice($languages, 0, 4));

// Calculate language percentages for visual progress bar
$lang_percentages = [];
foreach (array_slice($languages, 0, 4, true) as $lang => $count) {
    $pct = $total_lang_count > 0 ? round(($count / $total_lang_count) * 100) : 25;
    $lang_percentages[$lang] = [
        'count' => $count,
        'pct' => $pct
    ];
}
?>

<!-- ========================================================================= -->
<!-- Developer Hub & Professional Ecosystem Section                           -->
<!-- ========================================================================= -->
<section id="dev-hub" class="py-16 sm:py-20 bg-white dark:bg-gray-800 relative overflow-hidden transition-colors duration-300">
    <!-- Ambient Neon Background Glows -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute -top-40 right-1/4 w-96 h-96 bg-indigo-500/10 dark:bg-indigo-500/15 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 left-1/4 w-96 h-96 bg-blue-600/10 dark:bg-blue-600/15 rounded-full blur-3xl"></div>
        <div class="absolute inset-0 opacity-5"
            style="background-image: url('data:image/svg+xml,%3Csvg width=%2260%22 height=%2260%22 viewBox=%220 0 60 60%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%234F46E5%22 fill-opacity=%220.15%22%3E%3Cpath d=%22M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header -->
        <div class="text-center mb-12 sm:mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-50 dark:bg-indigo-950/70 border border-indigo-200 dark:border-indigo-800/60 text-indigo-700 dark:text-indigo-300 text-xs sm:text-sm font-semibold mb-3 shadow-sm backdrop-blur-sm">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <span>Live Open Source &amp; Professional Pulse</span>
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-grotesk font-bold mb-3">
                <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-blue-600 bg-clip-text text-transparent">
                    Code Activity &amp; Industry Network
                </span>
            </h2>
            <p class="text-base sm:text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Real-time engineering metrics synchronized directly from GitHub alongside verified industry credentials from LinkedIn.
            </p>
        </div>

        <!-- Dual Bento Showcase: GitHub Hub (Left) & LinkedIn Hub (Right) -->
        <div class="grid lg:grid-cols-12 gap-6 sm:gap-8 items-stretch">

            <!-- ============================================================= -->
            <!-- GITHUB LIVE HUB CARD (7 Cols)                                 -->
            <!-- ============================================================= -->
            <div class="lg:col-span-7 flex flex-col" data-aos="fade-right">
                <div class="tilt-card bento-card rounded-3xl p-6 sm:p-8 flex-1 flex flex-col justify-between relative overflow-hidden group">
                    <div class="card-glare"></div>
                    <div class="tilt-inner space-y-6">

                        <!-- Top Header Row -->
                        <div class="flex flex-wrap items-center justify-between gap-3 pb-5 border-b border-gray-100 dark:border-gray-700/60">
                            <div class="flex items-center gap-3.5">
                                <div class="w-12 h-12 rounded-2xl bg-gray-900 dark:bg-gray-700 text-white flex items-center justify-center shadow-md group-hover:scale-105 transition-transform">
                                    <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24">
                                        <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h3 class="text-xl font-bold font-grotesk text-gray-900 dark:text-white">GitHub Developer Pulse</h3>
                                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-700 dark:text-emerald-300 text-[11px] font-semibold">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span> Live API
                                        </span>
                                    </div>
                                    <a href="https://github.com/digiart-aamir" target="_blank" rel="noopener noreferrer"
                                        class="text-xs font-mono text-indigo-600 dark:text-indigo-400 hover:underline">
                                        @digiart-aamir
                                    </a>
                                </div>
                            </div>

                            <a href="https://github.com/digiart-aamir" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-xl bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-800 dark:text-gray-200 text-xs font-semibold transition-all">
                                <span>Follow</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </div>

                        <!-- Language Breakdown Visual Progress Bar -->
                        <div class="space-y-2.5">
                            <div class="flex items-center justify-between text-xs font-semibold text-gray-700 dark:text-gray-300">
                                <span>Primary Languages &amp; Stack Distribution</span>
                                <span class="text-gray-500 dark:text-gray-400"><?= (int)$total_repos ?> Active Repos</span>
                            </div>

                            <!-- Multi-segment Colored Bar -->
                            <div class="w-full h-3 rounded-full bg-gray-100 dark:bg-gray-700 overflow-hidden flex shadow-inner">
                                <div class="h-full bg-orange-500 transition-all duration-1000" style="width: <?= $lang_percentages['HTML']['pct'] ?? 30 ?>%" title="HTML / Web (<?= $lang_percentages['HTML']['pct'] ?? 30 ?>%)"></div>
                                <div class="h-full bg-blue-500 transition-all duration-1000" style="width: <?= $lang_percentages['Python']['pct'] ?? 25 ?>%" title="Python / AI (<?= $lang_percentages['Python']['pct'] ?? 25 ?>%)"></div>
                                <div class="h-full bg-amber-500 transition-all duration-1000" style="width: <?= $lang_percentages['Jupyter Notebook']['pct'] ?? 25 ?>%" title="Jupyter Notebook (<?= $lang_percentages['Jupyter Notebook']['pct'] ?? 25 ?>%)"></div>
                                <div class="h-full bg-red-500 transition-all duration-1000" style="width: <?= $lang_percentages['Java']['pct'] ?? 10 ?>%" title="Java / Kotlin (<?= $lang_percentages['Java']['pct'] ?? 10 ?>%)"></div>
                                <div class="h-full bg-emerald-500 transition-all duration-1000" style="width: 10%" title="Other / Configs"></div>
                            </div>

                            <!-- Legend Badges -->
                            <div class="flex flex-wrap gap-2 pt-1 text-[11px]">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-orange-50 dark:bg-orange-950/40 text-orange-700 dark:text-orange-300 font-medium">
                                    <span class="w-2 h-2 rounded-full bg-orange-500"></span> HTML/Web (<?= $lang_percentages['HTML']['count'] ?? 14 ?>)
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-blue-50 dark:bg-blue-950/40 text-blue-700 dark:text-blue-300 font-medium">
                                    <span class="w-2 h-2 rounded-full bg-blue-500"></span> Python (<?= $lang_percentages['Python']['count'] ?? 12 ?>)
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-amber-50 dark:bg-amber-950/40 text-amber-700 dark:text-amber-300 font-medium">
                                    <span class="w-2 h-2 rounded-full bg-amber-500"></span> Jupyter Notebooks (<?= $lang_percentages['Jupyter Notebook']['count'] ?? 12 ?>)
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-red-50 dark:bg-red-950/40 text-red-700 dark:text-red-300 font-medium">
                                    <span class="w-2 h-2 rounded-full bg-red-500"></span> Java / Android
                                </span>
                            </div>
                        </div>

                        <!-- Featured Open Source Repositories (2x2 Grid) -->
                        <div class="space-y-2.5">
                            <div class="text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                                Featured Public Repositories
                            </div>
                            <div class="grid sm:grid-cols-2 gap-3">
                                <?php foreach ($gh_featured as $repo): ?>
                                    <a href="<?= htmlspecialchars($repo['url']) ?>" target="_blank" rel="noopener noreferrer"
                                        class="p-3.5 rounded-2xl bg-gray-50/80 dark:bg-gray-900/60 border border-gray-100 dark:border-gray-700/60 hover:border-indigo-400 dark:hover:border-indigo-500 transition-all group/repo flex flex-col justify-between">
                                        <div>
                                            <div class="flex items-center justify-between gap-2 mb-1">
                                                <h4 class="font-bold text-xs sm:text-sm text-gray-900 dark:text-white group-hover/repo:text-indigo-600 dark:group-hover/repo:text-indigo-400 transition-colors flex items-center gap-1.5 truncate">
                                                    <svg class="w-3.5 h-3.5 text-gray-400 group-hover/repo:text-indigo-500 shrink-0" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M2 2.5A2.5 2.5 0 014.5 0h8.75a.75.75 0 01.75.75v12.5a.75.75 0 01-.75.75h-2.5a.75.75 0 110-1.5h1.75v-2h-8a1 1 0 00-.714 1.7.75.75 0 01-1.072 1.05A2.495 2.495 0 012 11.5v-9zm10.5-1V9h-8c-.356 0-.694.074-1 .208V2.5a1 1 0 011-1h8zM5 12.25v3.25a.25.25 0 00.4.2l1.45-1.087a.25.25 0 01.3 0L8.6 15.7a.25.25 0 00.4-.2v-3.25a.25.25 0 00-.25-.25h-3.5a.25.25 0 00-.25.25z" />
                                                    </svg>
                                                    <span class="truncate"><?= htmlspecialchars($repo['name']) ?></span>
                                                </h4>
                                                <span class="text-[10px] px-2 py-0.5 rounded-full bg-indigo-50 dark:bg-indigo-950/60 text-indigo-600 dark:text-indigo-400 font-mono font-medium shrink-0">
                                                    <?= htmlspecialchars($repo['language']) ?>
                                                </span>
                                            </div>
                                            <p class="text-[11px] text-gray-500 dark:text-gray-400 line-clamp-2 leading-relaxed">
                                                <?= htmlspecialchars($repo['description']) ?>
                                            </p>
                                        </div>
                                        <div class="flex items-center justify-between pt-2 mt-2 border-t border-gray-100 dark:border-gray-800 text-[10px] text-gray-400">
                                            <span>Updated <?= htmlspecialchars($repo['updated']) ?></span>
                                            <span class="text-indigo-500 font-semibold group-hover/repo:translate-x-1 transition-transform inline-flex items-center gap-0.5">
                                                Code →
                                            </span>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Live Contribution Activity Heatmap -->
                        <div class="space-y-2 pt-2">
                            <div class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 font-semibold">
                                <span>Annual Contribution Heatmap</span>
                                <span class="text-[10px] font-mono text-emerald-600 dark:text-emerald-400">Continuous 2026 Commit Stream</span>
                            </div>
                            <div class="p-3 rounded-2xl bg-gray-50/80 dark:bg-gray-900/60 border border-gray-100 dark:border-gray-700/60 overflow-x-auto shadow-inner scrollbar-thin">
                                <img src="https://ghchart.rshah.org/6366f1/digiart-aamir" 
                                    alt="Engr. Aamir Jamil GitHub Contribution Graph" 
                                    class="w-full min-w-[650px] dark:filter dark:brightness-90 dark:contrast-125"
                                    loading="lazy">
                            </div>
                        </div>

                        <!-- Primary GitHub CTA -->
                        <div class="pt-2">
                            <a href="https://github.com/digiart-aamir?tab=repositories" target="_blank" rel="noopener noreferrer"
                                class="w-full py-3 px-5 rounded-2xl bg-gray-900 dark:bg-gray-700 hover:bg-black dark:hover:bg-gray-600 text-white font-semibold text-xs sm:text-sm flex items-center justify-center gap-2 shadow-md hover:shadow-lg transition-all group/btn">
                                <span>Explore All 52 Repositories on GitHub</span>
                                <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ============================================================= -->
            <!-- LINKEDIN VERIFIED NETWORK HUB (5 Cols)                         -->
            <!-- ============================================================= -->
            <div class="lg:col-span-5 flex flex-col" data-aos="fade-left">
                <div class="tilt-card bento-card rounded-3xl p-6 sm:p-8 flex-1 flex flex-col justify-between relative overflow-hidden group">
                    <div class="card-glare"></div>
                    <div class="tilt-inner space-y-6">

                        <!-- Top Header Row -->
                        <div class="flex items-center justify-between pb-5 border-b border-gray-100 dark:border-gray-700/60">
                            <div class="flex items-center gap-3.5">
                                <div class="w-12 h-12 rounded-2xl bg-[#0077b5] text-white flex items-center justify-center shadow-md group-hover:scale-105 transition-transform">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="flex items-center gap-1.5">
                                        <h3 class="text-xl font-bold font-grotesk text-gray-900 dark:text-white">LinkedIn Network</h3>
                                        <span class="inline-flex items-center text-blue-600 dark:text-blue-400" title="Verified Professional Identity">
                                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 font-medium">Verified System Engineer</p>
                                </div>
                            </div>

                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-blue-50 dark:bg-blue-950/70 border border-blue-200 dark:border-blue-800 text-blue-700 dark:text-blue-300 text-[11px] font-semibold">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500 animate-pulse"></span> Active
                            </span>
                        </div>

                        <!-- Profile Hero Badge -->
                        <div class="p-4 rounded-2xl bg-gradient-to-br from-blue-50/70 to-indigo-50/70 dark:from-blue-950/40 dark:to-indigo-950/40 border border-blue-100 dark:border-blue-900/40 space-y-3">
                            <div class="flex items-center gap-3">
                                <img src="assets/img/hero%20section.png" alt="Engr. Aamir Jamil"
                                    class="w-12 h-12 rounded-full object-cover border-2 border-white dark:border-gray-800 shadow">
                                <div>
                                    <h4 class="font-bold text-sm text-gray-900 dark:text-white flex items-center gap-1.5">
                                        Engr. Aamir Jamil
                                        <span class="text-[10px] px-1.5 py-0.2 rounded bg-blue-600 text-white font-bold">1st</span>
                                    </h4>
                                    <p class="text-xs text-gray-600 dark:text-gray-300 line-clamp-1">
                                        Computer System Engineer | AI, Robotics &amp; Web
                                    </p>
                                    <p class="text-[11px] text-gray-500 dark:text-gray-400 flex items-center gap-1 mt-0.5">
                                        <span>📍 Islamabad, Pakistan</span> • <span class="text-blue-600 dark:text-blue-400 font-bold">2,000+ Connections</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Professional Highlights & Roles -->
                        <div class="space-y-3">
                            <div class="text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                                Professional Leadership &amp; Endorsements
                            </div>

                            <div class="space-y-2.5">
                                <!-- Role 1: ASBots Founder -->
                                <div class="p-3 rounded-xl bg-gray-50/80 dark:bg-gray-900/60 border border-gray-100 dark:border-gray-700/60 flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-teal-100 dark:bg-teal-900/60 text-teal-600 dark:text-teal-400 flex items-center justify-center shrink-0 font-bold text-xs">
                                        ⚡
                                    </div>
                                    <div>
                                        <h5 class="text-xs font-bold text-gray-900 dark:text-white">Founder &amp; Chief Architect</h5>
                                        <p class="text-[11px] text-gray-500 dark:text-gray-400">
                                            <a href="https://asbots.com" target="_blank" class="text-teal-600 dark:text-teal-400 hover:underline font-semibold">ASBots.com</a> — Artificial systems, robotics platform, and automated web solutions.
                                        </p>
                                    </div>
                                </div>

                                <!-- Role 2: STEAM Educator -->
                                <div class="p-3 rounded-xl bg-gray-50/80 dark:bg-gray-900/60 border border-gray-100 dark:border-gray-700/60 flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-purple-100 dark:bg-purple-900/60 text-purple-600 dark:text-purple-400 flex items-center justify-center shrink-0 font-bold text-xs">
                                        🎓
                                    </div>
                                    <div>
                                        <h5 class="text-xs font-bold text-gray-900 dark:text-white">STEAM &amp; AI Educator</h5>
                                        <p class="text-[11px] text-gray-500 dark:text-gray-400">
                                            Mentored 500+ students and conducted 200+ workshops across IoT, AI models, and robotics.
                                        </p>
                                    </div>
                                </div>

                                <!-- Role 3: Kaggle & Open Source Author -->
                                <div class="p-3 rounded-xl bg-gray-50/80 dark:bg-gray-900/60 border border-gray-100 dark:border-gray-700/60 flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-sky-100 dark:bg-sky-900/60 text-sky-600 dark:text-sky-400 flex items-center justify-center shrink-0 font-bold text-xs">
                                        📊
                                    </div>
                                    <div>
                                        <h5 class="text-xs font-bold text-gray-900 dark:text-white">Open Source AI Publisher</h5>
                                        <p class="text-[11px] text-gray-500 dark:text-gray-400">
                                            14 public machine learning datasets published on Kaggle with 8,000+ views and downloads.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Direct Connection Action Buttons -->
                        <div class="pt-2 space-y-2.5">
                            <a href="https://www.linkedin.com/in/engr-aamir-jamil-460b20262/" target="_blank" rel="noopener noreferrer"
                                class="w-full py-3 px-5 rounded-2xl bg-[#0077b5] hover:bg-[#006097] text-white font-semibold text-xs sm:text-sm flex items-center justify-center gap-2 shadow-md hover:shadow-lg transition-all group/btn">
                                <span>Connect on LinkedIn (2,000+ Network)</span>
                                <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>

                            <a href="#contact"
                                class="w-full py-2.5 px-4 rounded-xl border border-gray-200 dark:border-gray-700 hover:border-indigo-400 dark:hover:border-indigo-500 text-gray-700 dark:text-gray-300 font-semibold text-xs flex items-center justify-center gap-1.5 transition-all">
                                <span>Send Direct Message or Inquiry</span>
                                <span>💬</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
