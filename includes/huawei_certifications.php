<?php
/**
 * Huawei ICT Academy Certifications Section
 * Showcases 9 verified enterprise accreditations across 5G, AI, and Cloud/IoT ecosystems.
 */
$huaweiCerts = [
    [
        'id' => '5g-basics',
        'title' => '5G Basics: What It\'s All About',
        'file' => 'assets/huawei ICT academy/5G Basics_ What it\'s all about.png',
        'pillar' => '5g',
        'pillar_name' => '5G & Telecom',
        'badge' => 'eMBB, URLLC & mMTC',
        'code' => 'HCIA-5G-B',
        'color' => 'from-red-600 to-rose-600',
        'accent' => 'red',
        'topics' => ['Next-Gen Wireless', 'eMBB High Throughput', 'URLLC Ultra-Low Latency', 'Massive IoT'],
        'summary' => 'Fundamental architecture of 5G New Radio, high-band millimeter spectrum, and enterprise vertical use cases.'
    ],
    [
        'id' => '5g-network-arch',
        'title' => '5G Network Architecture & Key Technologies',
        'file' => 'assets/huawei ICT academy/5G Network Architecture and Key Technologies.png',
        'pillar' => '5g',
        'pillar_name' => '5G & Telecom',
        'badge' => 'Cloud RAN & Slicing',
        'code' => 'HCIA-5G-NET',
        'color' => 'from-rose-600 to-red-700',
        'accent' => 'rose',
        'topics' => ['Service-Based Arch (SBA)', 'Cloud RAN', 'Network Slicing', 'NFV Virtualization'],
        'summary' => 'End-to-end 5G core network protocols, disaggregated RAN topology, and multi-tenant slice isolation.'
    ],
    [
        'id' => 'computer-network',
        'title' => 'Enterprise Computer Networks & Protocols',
        'file' => 'assets/huawei ICT academy/Computer Network.png',
        'pillar' => '5g',
        'pillar_name' => '5G & Telecom',
        'badge' => 'TCP/IP & Routing',
        'code' => 'HCIA-DATANET',
        'color' => 'from-red-700 to-amber-700',
        'accent' => 'amber',
        'topics' => ['OSI & TCP/IP Reference', 'IP Subnetting', 'VLAN Segmentation', 'Layer 2/3 Routing'],
        'summary' => 'Enterprise data communications, switched Ethernet topologies, IP packet routing, and network segmentation.'
    ],
    [
        'id' => 'ai-overview',
        'title' => 'Artificial Intelligence Overview & Foundations',
        'file' => 'assets/huawei ICT academy/Overview of AI.png',
        'pillar' => 'ai',
        'pillar_name' => 'AI & Algorithms',
        'badge' => 'Neural Nets & ML',
        'code' => 'HCIA-AI-FOUND',
        'color' => 'from-rose-600 to-purple-600',
        'accent' => 'purple',
        'topics' => ['Machine Learning Pipelines', 'Deep Neural Networks', 'Loss Optimization', 'Model Validation'],
        'summary' => 'Computational linear algebra foundations, forward/backpropagation, and deep neural model deployment.'
    ],
    [
        'id' => 'search-ai',
        'title' => 'Heuristic Search & Intelligent Decision AI',
        'file' => 'assets/huawei ICT academy/Search and AI.png',
        'pillar' => 'ai',
        'pillar_name' => 'AI & Algorithms',
        'badge' => 'Heuristics & Graphs',
        'code' => 'HCIA-AI-SEARCH',
        'color' => 'from-red-600 to-pink-600',
        'accent' => 'pink',
        'topics' => ['A* State-Space Search', 'Minimax & Alpha-Beta', 'Heuristic Evaluation', 'Graph Traversal'],
        'summary' => 'Algorithmic state exploration, informed heuristic evaluation, and multi-agent game-tree optimization.'
    ],
    [
        'id' => 'algorithm-design',
        'title' => 'Algorithm Design & Computational Complexity',
        'file' => 'assets/huawei ICT academy/Algorithm and Program Design.png',
        'pillar' => 'ai',
        'pillar_name' => 'AI & Algorithms',
        'badge' => 'Data Structures & Big-O',
        'code' => 'HCIA-ALG-PROG',
        'color' => 'from-red-700 to-indigo-700',
        'accent' => 'indigo',
        'topics' => ['Divide & Conquer', 'Dynamic Programming', 'Greedy Optimization', 'Asymptotic Complexity'],
        'summary' => 'Computational complexity analysis, memory-efficient data structuring, and scalable algorithm synthesis.'
    ],
    [
        'id' => 'iot-technologies',
        'title' => 'Internet of Things (IoT) Technologies & Sensors',
        'file' => 'assets/huawei ICT academy/Overview of IoT Technologies.png',
        'pillar' => 'cloud',
        'pillar_name' => 'Cloud, Data & IoT',
        'badge' => 'Sensor Fusion & Edge',
        'code' => 'HCIA-IOT-ARCH',
        'color' => 'from-amber-600 to-red-600',
        'accent' => 'amber',
        'topics' => ['Edge Transducers', 'NB-IoT & LPWAN', 'Microcontroller Telemetry', 'Sensor Fusion'],
        'summary' => 'Industrial IoT physical transducer interfaces, low-power long-range protocols, and edge microcontroller telemetry.'
    ],
    [
        'id' => 'cloud-computing',
        'title' => 'Cloud Computing Concepts & Virtualization',
        'file' => 'assets/huawei ICT academy/Development and Basic Concepts of Cloud Computing.png',
        'pillar' => 'cloud',
        'pillar_name' => 'Cloud, Data & IoT',
        'badge' => 'IaaS / PaaS / SaaS',
        'code' => 'HCIA-CLOUD-SYS',
        'color' => 'from-red-600 to-cyan-700',
        'accent' => 'cyan',
        'topics' => ['Hypervisor Virtualization', 'Distributed Storage', 'Elastic Cluster Compute', 'Cloud Security'],
        'summary' => 'Cloud delivery infrastructure, hardware abstraction layers, scalable multi-tenant clusters, and cloud storage.'
    ],
    [
        'id' => 'data-analytics',
        'title' => 'Data Management & Enterprise Analytics',
        'file' => 'assets/huawei ICT academy/Data Management and Analytics.png',
        'pillar' => 'cloud',
        'pillar_name' => 'Cloud, Data & IoT',
        'badge' => 'Big Data & ETL',
        'code' => 'HCIA-DATA-ANLY',
        'color' => 'from-rose-600 to-amber-600',
        'accent' => 'rose',
        'topics' => ['Relational & NoSQL', 'ETL Data Pipelines', 'Data Warehousing', 'BI Visualization'],
        'summary' => 'Structured data ingestion workflows, analytics pipelines, data normalization, and stakeholder metrics reporting.'
    ]
];
?>

<!-- Huawei ICT Academy Certifications Section (Ultra-Compact High-Density Grid) -->
<section id="huawei-academy" class="py-6 sm:py-8 bg-white dark:bg-gray-950 relative overflow-hidden transition-colors duration-300"
    x-data="{ 
        activeFilter: 'all',
        modalOpen: false,
        activeCert: null,
        openModal(cert) {
            this.activeCert = cert;
            this.modalOpen = true;
        }
    }">

    <!-- Background Ambient Subtle Tech Elements -->
    <div class="absolute inset-0 pointer-events-none opacity-25 dark:opacity-35">
        <div class="absolute top-6 right-10 w-72 h-72 bg-red-600/10 dark:bg-red-600/15 rounded-full blur-3xl"></div>
        <div class="absolute bottom-6 left-10 w-72 h-72 bg-rose-600/10 dark:bg-rose-600/15 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header (Ultra-Compact) -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-4 sm:mb-5 gap-3" data-aos="fade-up">
            <div>
                <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-red-50 dark:bg-red-950/60 text-red-700 dark:text-red-300 text-[11px] font-semibold mb-1 border border-red-200/80 dark:border-red-900/60">
                    <span class="w-1.5 h-1.5 rounded-full bg-red-600 animate-pulse"></span>
                    <span>Huawei Authorized ICT Academy &bull; Certified Trainer</span>
                </div>
                <h2 class="text-2xl sm:text-3xl font-grotesk font-extrabold text-gray-900 dark:text-white tracking-tight">
                    Huawei ICT <span class="bg-gradient-to-r from-red-600 via-rose-500 to-amber-500 bg-clip-text text-transparent">Academy Certifications</span>
                </h2>
                <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5 max-w-xl line-clamp-1">
                    9 verified enterprise credentials in 5G, AI, and Cloud infrastructure validating technical competence as Huawei Trainer.
                </p>
            </div>

            <!-- Dynamic Filter Pills (Compact) -->
            <div class="flex flex-wrap items-center gap-1 p-0.5 rounded-xl bg-gray-100/80 dark:bg-gray-900/80 border border-gray-200 dark:border-gray-800 backdrop-blur-md shadow-xs">
                <button @click="activeFilter = 'all'"
                    :class="activeFilter === 'all' ? 'bg-gradient-to-r from-red-600 to-rose-600 text-white shadow-xs font-bold' : 'text-gray-600 dark:text-gray-400 hover:text-red-600 dark:hover:text-red-400 font-medium'"
                    class="px-2.5 py-1 rounded-lg text-xs transition-all duration-200 flex items-center gap-1">
                    <span>All (<?= count($huaweiCerts) ?>)</span>
                </button>
                <button @click="activeFilter = '5g'"
                    :class="activeFilter === '5g' ? 'bg-gradient-to-r from-red-600 to-rose-600 text-white shadow-xs font-bold' : 'text-gray-600 dark:text-gray-400 hover:text-red-600 dark:hover:text-red-400 font-medium'"
                    class="px-2.5 py-1 rounded-lg text-xs transition-all duration-200 flex items-center gap-1">
                    <span>5G &amp; Telecom (3)</span>
                </button>
                <button @click="activeFilter = 'ai'"
                    :class="activeFilter === 'ai' ? 'bg-gradient-to-r from-red-600 to-rose-600 text-white shadow-xs font-bold' : 'text-gray-600 dark:text-gray-400 hover:text-red-600 dark:hover:text-red-400 font-medium'"
                    class="px-2.5 py-1 rounded-lg text-xs transition-all duration-200 flex items-center gap-1">
                    <span>AI &amp; Algorithms (3)</span>
                </button>
                <button @click="activeFilter = 'cloud'"
                    :class="activeFilter === 'cloud' ? 'bg-gradient-to-r from-red-600 to-rose-600 text-white shadow-xs font-bold' : 'text-gray-600 dark:text-gray-400 hover:text-red-600 dark:hover:text-red-400 font-medium'"
                    class="px-2.5 py-1 rounded-lg text-xs transition-all duration-200 flex items-center gap-1">
                    <span>Cloud &amp; IoT (3)</span>
                </button>
            </div>
        </div>

        <!-- 3-Column Interactive Bento Grid (Compact Cards) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4">
            <?php foreach($huaweiCerts as $cert): ?>
                <div x-show="activeFilter === 'all' || activeFilter === '<?= $cert['pillar'] ?>'"
                    x-transition:enter="transition ease-out duration-250"
                    x-transition:enter-start="opacity-0 translate-y-2 scale-[0.98]"
                    x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                    class="group relative rounded-xl bg-white dark:bg-gray-900 border border-gray-200/80 dark:border-gray-800 hover:border-red-500/50 dark:hover:border-red-500/50 shadow-xs hover:shadow-lg hover:shadow-red-500/10 hover:-translate-y-1 transition-all duration-200 flex flex-col justify-between overflow-hidden">
                    
                    <!-- Top Gradient Line Accent -->
                    <div class="h-0.5 w-full bg-gradient-to-r <?= $cert['color'] ?> opacity-80 group-hover:opacity-100 transition-opacity"></div>

                    <div class="p-2.5 sm:p-3 flex flex-col justify-between flex-grow">
                        
                        <!-- Top Metadata Row -->
                        <div class="flex items-center justify-between gap-1.5 mb-1.5">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[9px] font-mono font-bold bg-red-50 dark:bg-red-950/70 text-red-700 dark:text-red-300 border border-red-200/70 dark:border-red-900/60 truncate max-w-[170px]">
                                <?= htmlspecialchars($cert['badge']) ?>
                            </span>
                            <span class="text-[9px] font-mono text-gray-400 dark:text-gray-500 flex-shrink-0">
                                <?= htmlspecialchars($cert['code']) ?>
                            </span>
                        </div>

                        <!-- Certificate Image Preview Frame (Compact Landscape) -->
                        <div class="relative rounded-lg overflow-hidden border border-gray-200/90 dark:border-gray-800 bg-gray-50 dark:bg-gray-950 cursor-pointer mb-2 group/img h-24 sm:h-26 flex items-center justify-center p-1"
                            @click="openModal(<?= htmlspecialchars(json_encode($cert), ENT_QUOTES, 'UTF-8') ?>)">
                            <img src="<?= htmlspecialchars($cert['file']) ?>" 
                                 alt="<?= htmlspecialchars($cert['title']) ?>" 
                                 class="w-full h-full object-contain rounded group-hover/img:scale-105 transition-transform duration-300"
                                 loading="lazy" decoding="async" width="300" height="104">
                            
                            <!-- Hover Glass Overlay -->
                            <div class="absolute inset-0 bg-gray-950/60 backdrop-blur-xs opacity-0 group-hover/img:opacity-100 transition-opacity duration-200 flex items-center justify-center gap-1.5">
                                <span class="px-2.5 py-1 rounded-lg bg-white/95 dark:bg-gray-900/95 text-gray-900 dark:text-white font-bold text-[11px] shadow-md flex items-center gap-1 transform scale-95 group-hover/img:scale-100 transition-transform">
                                    <svg class="w-3 h-3 text-red-600" width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                    </svg>
                                    <span>Inspect</span>
                                </span>
                            </div>
                        </div>

                        <!-- Certificate Title & Summary -->
                        <div>
                            <h3 class="text-xs sm:text-sm font-bold font-grotesk text-gray-900 dark:text-white leading-tight group-hover:text-red-600 dark:group-hover:text-red-400 transition-colors mb-0.5 truncate" title="<?= htmlspecialchars($cert['title']) ?>">
                                <?= htmlspecialchars($cert['title']) ?>
                            </h3>
                            <p class="text-[11px] text-gray-500 dark:text-gray-400 line-clamp-1 leading-snug mb-1.5">
                                <?= htmlspecialchars($cert['summary']) ?>
                            </p>
                        </div>

                        <!-- Micro Topics Tags (Single-line truncated chips) -->
                        <div class="pt-1.5 border-t border-gray-100 dark:border-gray-800/80 flex items-center gap-1 overflow-hidden">
                            <?php foreach(array_slice($cert['topics'], 0, 3) as $topic): ?>
                                <span class="text-[9px] font-mono px-1.5 py-0.2 rounded bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 truncate max-w-[100px]">
                                    <?= htmlspecialchars($topic) ?>
                                </span>
                            <?php endforeach; ?>
                        </div>

                    </div>

                    <!-- Card Footer Strip (Ultra-Compact) -->
                    <div class="px-3 py-1.5 bg-gray-50/80 dark:bg-gray-850/80 border-t border-gray-100 dark:border-gray-800 flex items-center justify-between text-[10px]">
                        <div class="flex items-center gap-1 text-emerald-600 dark:text-emerald-400 font-medium">
                            <svg class="w-3 h-3" width="12" height="12" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span>Verified</span>
                        </div>
                        <button @click="openModal(<?= htmlspecialchars(json_encode($cert), ENT_QUOTES, 'UTF-8') ?>)"
                            class="text-red-600 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300 font-bold flex items-center gap-0.5 transition-colors">
                            <span>View</span>
                            <span class="transform group-hover:translate-x-0.5 transition-transform">&rarr;</span>
                        </button>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

        <!-- Section Bottom Authority Badge (Compact) -->
        <div class="mt-4 p-2 sm:p-2.5 rounded-xl bg-gray-50 dark:bg-gray-900 border border-gray-200/80 dark:border-gray-800 flex flex-col sm:flex-row items-center justify-between gap-2 text-[11px] text-gray-500 dark:text-gray-400">
            <div class="flex items-center gap-1.5">
                <span class="w-2 h-2 rounded-full bg-red-600 flex-shrink-0"></span>
                <span>Issued by <strong>Huawei Technologies Co., Ltd. &amp; Huawei ICT Academy</strong></span>
            </div>
            <div class="flex items-center gap-2 font-mono text-[10px]">
                <span class="text-red-600 dark:text-red-400 font-medium">CS Technologies AI Trainer</span>
                <span>&bull;</span>
                <span class="text-red-600 dark:text-red-400 font-medium">Corvit Systems Huawei Trainer</span>
            </div>
        </div>

    </div>

    <!-- High-Resolution Lightbox Modal (Alpine.js) -->
    <div x-show="modalOpen" 
         x-transition:enter="transition ease-out duration-200" 
         x-transition:enter-start="opacity-0" 
         x-transition:enter-end="opacity-100" 
         x-transition:leave="transition ease-in duration-150" 
         x-transition:leave-start="opacity-100" 
         x-transition:leave-end="opacity-0" 
         @keydown.escape.window="modalOpen = false"
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/85 backdrop-blur-md"
         style="display: none;">
        
        <div class="relative max-w-4xl w-full bg-gray-900 rounded-3xl border border-gray-800 shadow-2xl overflow-hidden flex flex-col max-h-[92vh]"
             @click.outside="modalOpen = false">
            
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-4 border-b border-gray-800 bg-gray-950/70">
                <div class="flex items-center gap-2.5 min-w-0">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-600"></span>
                    <div class="min-w-0">
                        <h4 class="text-sm sm:text-base font-bold text-white truncate" x-text="activeCert ? activeCert.title : ''"></h4>
                        <p class="text-[11px] text-gray-400 font-mono truncate">
                            Issuer: Huawei ICT Academy &bull; Huawei Technologies Co., Ltd.
                        </p>
                    </div>
                </div>
                
                <div class="flex items-center gap-2 flex-shrink-0">
                    <button @click="modalOpen = false" 
                            class="p-1.5 rounded-xl bg-gray-800 hover:bg-gray-700 text-gray-300 hover:text-white transition-colors"
                            title="Close Preview (ESC)">
                        <svg class="w-5 h-5" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Modal Image Body -->
            <div class="p-3 sm:p-5 flex items-center justify-center overflow-auto bg-gray-950/90 flex-grow">
                <img :src="activeCert ? activeCert.file : ''" 
                     :alt="activeCert ? activeCert.title : 'Huawei Certificate'" 
                     class="max-h-[75vh] w-auto max-w-full object-contain rounded-xl shadow-2xl border border-gray-800">
            </div>

            <!-- Modal Footer -->
            <div class="p-3 border-t border-gray-800 bg-gray-950/80 flex items-center justify-between text-xs text-gray-400">
                <span class="font-mono text-[11px]" x-text="activeCert ? activeCert.badge + ' • ' + activeCert.pillar_name : ''"></span>
                <span class="text-red-400 font-semibold">Official Huawei Credential</span>
            </div>

        </div>
    </div>

</section>
