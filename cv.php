<?php
// cv.php — Engr. Aamir Jamil International Standard Curriculum Vitae (ATS Compliant & Modern Web UI)
$pageTitle = "Engr. Aamir Jamil | Curriculum Vitae (CV) - AI & Robotics Engineer";
$metaDescription = "Official Curriculum Vitae of Engr. Aamir Jamil — Computer System Engineer, AI & Web Developer, and STEAM/IoT Educator based in Islamabad, Pakistan. ATS compliant, verifiable credentials.";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="<?= htmlspecialchars($metaDescription) ?>">
    <meta name="author" content="Engr. Aamir Jamil">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://aamir.asbots.com/portfolio/cv.php">

    <!-- Preconnect Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                        'grotesk': ['Space Grotesk', 'sans-serif'],
                        'mono': ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        brand: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            900: '#312e81',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('darkMode', false);
            Alpine.store('copiedToast', false);
            Alpine.store('toastMessage', '');

            const saved = localStorage.getItem('theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const darkEnabled = saved === 'dark' || (!saved && prefersDark);
            Alpine.store('darkMode', darkEnabled);
            if (darkEnabled) document.documentElement.classList.add('dark');
            else document.documentElement.classList.remove('dark');
        });

        function toggleTheme() {
            const isDark = !Alpine.store('darkMode');
            Alpine.store('darkMode', isDark);
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            if (isDark) document.documentElement.classList.add('dark');
            else document.documentElement.classList.remove('dark');
        }

        function triggerToast(msg) {
            Alpine.store('toastMessage', msg);
            Alpine.store('copiedToast', true);
            setTimeout(() => {
                Alpine.store('copiedToast', false);
            }, 2500);
        }

        function copyToClipboard(text, label) {
            navigator.clipboard.writeText(text).then(() => {
                triggerToast(label + ' copied to clipboard!');
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        }
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>📄</text></svg>">

    <!-- Specialized Print & Screen CSS -->
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: rgba(0,0,0,0.05);
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(99,102,241,0.3);
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(99,102,241,0.6);
        }

        /* ATS and Print Standards Engine */
        @media print {
            @page {
                size: A4 portrait;
                margin: 12mm 14mm 12mm 14mm;
            }
            body {
                background: #ffffff !important;
                color: #0f172a !important;
                font-size: 10.5pt !important;
                line-height: 1.45 !important;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
            .no-print {
                display: none !important;
            }
            .print-only {
                display: block !important;
            }
            .cv-container {
                max-width: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
                box-shadow: none !important;
                border: none !important;
                background: #ffffff !important;
            }
            .cv-section {
                page-break-inside: avoid;
                break-inside: avoid;
                margin-bottom: 1.25rem !important;
            }
            .cv-card {
                page-break-inside: avoid;
                break-inside: avoid;
                border-color: #cbd5e1 !important;
                background: #ffffff !important;
                box-shadow: none !important;
            }
            a {
                text-decoration: none !important;
                color: inherit !important;
            }
            .badge-print {
                border: 1px solid #cbd5e1 !important;
                background: #f8fafc !important;
                color: #334155 !important;
            }
            .gradient-text-print {
                background: none !important;
                -webkit-background-clip: unset !important;
                color: #0f172a !important;
            }
        }
    </style>
</head>

<body class="bg-slate-100 dark:bg-gray-950 text-slate-800 dark:text-slate-100 font-inter antialiased transition-colors duration-300 min-h-screen flex flex-col selection:bg-indigo-500 selection:text-white"
    x-data="{ showAtsModal: false }">

    <!-- Toast Notification (Screen Only) -->
    <div x-cloak x-show="$store.copiedToast"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-4"
        class="no-print fixed bottom-6 right-6 z-50 flex items-center gap-3 px-5 py-3 rounded-2xl bg-gray-900/95 dark:bg-white/95 text-white dark:text-gray-900 shadow-2xl backdrop-blur-md border border-gray-700/50 dark:border-gray-200 text-sm font-semibold">
        <svg class="w-5 h-5 text-emerald-400 dark:text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
        </svg>
        <span x-text="$store.toastMessage"></span>
    </div>

    <!-- ================================================================= -->
    <!-- STICKY TOP CONTROL / ACTION TOOLBAR (SCREEN ONLY)                  -->
    <!-- ================================================================= -->
    <header class="no-print sticky top-0 z-40 bg-white/85 dark:bg-gray-900/85 backdrop-blur-xl border-b border-slate-200/80 dark:border-gray-800 transition-colors duration-300 shadow-xs">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex flex-wrap items-center justify-between gap-3">
            
            <!-- Left: Back to Home & Identity -->
            <div class="flex items-center gap-3">
                <a href="index.php"
                    class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl text-xs sm:text-sm font-semibold text-slate-700 dark:text-slate-200 bg-slate-100 dark:bg-gray-800 hover:bg-indigo-50 dark:hover:bg-indigo-950/60 hover:text-indigo-600 dark:hover:text-indigo-400 border border-slate-200/80 dark:border-gray-700 transition-all duration-200 group"
                    title="Return to Interactive Portfolio Website">
                    <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span>Portfolio</span>
                </a>

                <div class="hidden sm:flex items-center gap-2 pl-2 border-l border-slate-200 dark:border-gray-700">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-indigo-50 dark:bg-indigo-950/70 text-indigo-700 dark:text-indigo-300 border border-indigo-200/70 dark:border-indigo-800">
                        Official Curriculum Vitae
                    </span>
                    <span class="text-xs text-slate-400 dark:text-slate-500 font-mono">2026 International Tech Standard</span>
                </div>
            </div>

            <!-- Right: Actions (Print, Download PDF, ATS Text, Theme Toggle) -->
            <div class="flex items-center gap-2 flex-wrap">

                <!-- 1. Print / Save as PDF (Primary Action) -->
                <button onclick="window.print()"
                    class="inline-flex items-center gap-2 px-3.5 sm:px-4 py-2 rounded-xl text-xs sm:text-sm font-bold text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 shadow-md shadow-indigo-500/25 hover:shadow-indigo-500/40 hover:scale-102 transform transition-all duration-200"
                    title="Save as PDF or Print directly via browser">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                    </svg>
                    <span>Print / Save PDF</span>
                </button>

                <!-- 2. Download Original File -->
                <a href="old_cv/cv.pdf" download="Engr_Aamir_Jamil_CV.pdf"
                    class="inline-flex items-center gap-2 px-3 sm:px-3.5 py-2 rounded-xl text-xs sm:text-sm font-semibold text-slate-700 dark:text-slate-200 bg-white dark:bg-gray-800 hover:bg-slate-50 dark:hover:bg-gray-750 border border-slate-200 dark:border-gray-700 shadow-xs hover:border-indigo-400 dark:hover:border-indigo-500 transition-all duration-200"
                    title="Download the archived CV file">
                    <svg class="w-4 h-4 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    <span class="hidden md:inline">Archived PDF</span>
                </a>

                <!-- 3. Copy ATS Plain Text -->
                <button @click="showAtsModal = true"
                    class="inline-flex items-center gap-2 px-3 sm:px-3.5 py-2 rounded-xl text-xs sm:text-sm font-semibold text-slate-700 dark:text-slate-200 bg-white dark:bg-gray-800 hover:bg-slate-50 dark:hover:bg-gray-750 border border-slate-200 dark:border-gray-700 shadow-xs hover:border-emerald-400 dark:hover:border-emerald-500 transition-all duration-200"
                    title="View & copy ATS-formatted plain text for job applications">
                    <svg class="w-4 h-4 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span>ATS Text</span>
                </button>

                <!-- 4. Theme Toggle -->
                <button onclick="toggleTheme()"
                    class="p-2 rounded-xl text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-gray-800 border border-slate-200 dark:border-gray-700 transition-colors"
                    title="Toggle Dark / Light Mode">
                    <svg x-show="!$store.darkMode" class="w-4 h-4 text-amber-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"/>
                    </svg>
                    <svg x-show="$store.darkMode" class="w-4 h-4 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Section Navigation Jump Pills (Screen Only) -->
        <div class="border-t border-slate-200/60 dark:border-gray-800/80 bg-slate-50/70 dark:bg-gray-900/60 overflow-x-auto scrollbar-none py-2 px-4 sm:px-6">
            <div class="max-w-6xl mx-auto flex items-center gap-2 text-xs font-medium text-slate-600 dark:text-slate-400 whitespace-nowrap">
                <span class="text-slate-400 dark:text-slate-500 font-bold uppercase tracking-wider text-[10px] mr-1">Jump to:</span>
                <a href="#summary" class="px-2.5 py-1 rounded-lg hover:bg-white dark:hover:bg-gray-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Summary</a>
                <span>&bull;</span>
                <a href="#skills" class="px-2.5 py-1 rounded-lg hover:bg-white dark:hover:bg-gray-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Technical Skills</a>
                <span>&bull;</span>
                <a href="#experience" class="px-2.5 py-1 rounded-lg hover:bg-white dark:hover:bg-gray-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Experience</a>
                <span>&bull;</span>
                <a href="#projects" class="px-2.5 py-1 rounded-lg hover:bg-white dark:hover:bg-gray-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Flagship Projects</a>
                <span>&bull;</span>
                <a href="#certifications" class="px-2.5 py-1 rounded-lg hover:bg-white dark:hover:bg-gray-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Certifications</a>
                <span>&bull;</span>
                <a href="#education" class="px-2.5 py-1 rounded-lg hover:bg-white dark:hover:bg-gray-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Education</a>
                <span>&bull;</span>
                <a href="#leadership" class="px-2.5 py-1 rounded-lg hover:bg-white dark:hover:bg-gray-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Kaggle &amp; Leadership</a>
            </div>
        </div>
    </header>

    <!-- ================================================================= -->
    <!-- MAIN CV DOCUMENT CONTAINER (ATS-COMPLIANT LINEAR STRUCTURE)       -->
    <!-- ================================================================= -->
    <main class="flex-grow py-6 sm:py-10 px-3 sm:px-6 lg:px-8">
        <div class="cv-container max-w-5xl mx-auto bg-white dark:bg-gray-900 rounded-3xl border border-slate-200/80 dark:border-gray-800 shadow-xl p-6 sm:p-10 lg:p-12 transition-colors duration-300">

            <!-- ------------------------------------------------------------- -->
            <!-- SECTION 1: EXECUTIVE CONTACT & IDENTITY HEADER                -->
            <!-- ------------------------------------------------------------- -->
            <header class="cv-section border-b border-slate-200 dark:border-gray-800 pb-8 mb-8">
                <div class="flex flex-col md:flex-row md:items-start justify-between gap-6">
                    
                    <!-- Candidate Titles -->
                    <div class="space-y-2">
                        <div class="flex items-center gap-2.5 flex-wrap">
                            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-grotesk font-extrabold text-slate-900 dark:text-white tracking-tight">
                                Engr. Aamir Jamil
                            </h1>
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold bg-emerald-50 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 border border-emerald-200/80 dark:border-emerald-800/60 no-print">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                <span>Open for Q4/2026 Opportunities</span>
                            </span>
                        </div>

                        <!-- Professional Title Subheading -->
                        <p class="text-base sm:text-lg font-semibold text-indigo-600 dark:text-indigo-400 font-grotesk">
                            Computer System Engineer &bull; AI &amp; Web Architect &bull; STEAM/IoT Educator
                        </p>

                        <!-- Focus Domains -->
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 max-w-2xl leading-relaxed">
                            Specializing in Computer Vision (YOLOv8, MediaPipe), Embedded Microcontrollers (ESP32 / ESP-NOW), Multi-Agent LLM Pipelines, and Enterprise Full-Stack Web Platforms.
                        </p>
                    </div>

                    <!-- Quick Print / Status Badge (Screen & Print Hybrid) -->
                    <div class="text-left md:text-right shrink-0 space-y-1.5">
                        <div class="text-xs font-mono font-semibold text-slate-500 dark:text-slate-400">
                            <span>PEC Registered Engineer (Pakistan)</span>
                        </div>
                        <div class="text-xs font-mono text-slate-500 dark:text-slate-400">
                            <span>📍 Islamabad &amp; Rawalpindi, Pakistan</span>
                        </div>
                        <div class="text-xs font-mono text-indigo-600 dark:text-indigo-400 font-medium">
                            <span>UTC+5 (Open to Remote Worldwide)</span>
                        </div>
                    </div>
                </div>

                <!-- Structured Contact Bar (ATS Parsable & Interactive) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 pt-6 mt-6 border-t border-slate-100 dark:border-gray-800/80 text-xs sm:text-[13px]">
                    
                    <!-- Direct Phone & WhatsApp -->
                    <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 dark:bg-gray-850 border border-slate-100 dark:border-gray-800 group">
                        <div class="flex items-center gap-2.5 min-w-0">
                            <span class="text-base shrink-0">📞</span>
                            <div class="truncate">
                                <span class="block text-[10px] font-semibold uppercase tracking-wider text-slate-400">Phone &amp; WhatsApp</span>
                                <a href="tel:+923414579704" class="font-bold text-slate-800 dark:text-slate-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                    +92 341 4579704
                                </a>
                            </div>
                        </div>
                        <button onclick="copyToClipboard('+923414579704', 'Phone number')"
                            class="no-print p-1.5 rounded-lg text-slate-400 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-slate-200 dark:hover:bg-gray-700 transition-colors"
                            title="Copy Phone Number">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                        </button>
                    </div>

                    <!-- Primary Email -->
                    <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 dark:bg-gray-850 border border-slate-100 dark:border-gray-800 group">
                        <div class="flex items-center gap-2.5 min-w-0">
                            <span class="text-base shrink-0">✉️</span>
                            <div class="truncate">
                                <span class="block text-[10px] font-semibold uppercase tracking-wider text-slate-400">Primary Email</span>
                                <a href="mailto:digiart.aamir@gmail.com" class="font-bold text-slate-800 dark:text-slate-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors truncate block">
                                    digiart.aamir@gmail.com
                                </a>
                            </div>
                        </div>
                        <button onclick="copyToClipboard('digiart.aamir@gmail.com', 'Primary Email')"
                            class="no-print p-1.5 rounded-lg text-slate-400 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-slate-200 dark:hover:bg-gray-700 transition-colors"
                            title="Copy Primary Email">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                        </button>
                    </div>

                    <!-- Work & Enterprise Email -->
                    <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 dark:bg-gray-850 border border-slate-100 dark:border-gray-800 group">
                        <div class="flex items-center gap-2.5 min-w-0">
                            <span class="text-base shrink-0">💼</span>
                            <div class="truncate">
                                <span class="block text-[10px] font-semibold uppercase tracking-wider text-slate-400">Enterprise Email</span>
                                <a href="mailto:aamir@asbots.com" class="font-bold text-slate-800 dark:text-slate-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors truncate block">
                                    aamir@asbots.com
                                </a>
                            </div>
                        </div>
                        <button onclick="copyToClipboard('aamir@asbots.com', 'Work Email')"
                            class="no-print p-1.5 rounded-lg text-slate-400 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-slate-200 dark:hover:bg-gray-700 transition-colors"
                            title="Copy Enterprise Email">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                        </button>
                    </div>

                    <!-- Live Portfolio Website -->
                    <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 dark:bg-gray-850 border border-slate-100 dark:border-gray-800 group">
                        <div class="flex items-center gap-2.5 min-w-0">
                            <span class="text-base shrink-0">🌐</span>
                            <div class="truncate">
                                <span class="block text-[10px] font-semibold uppercase tracking-wider text-slate-400">Interactive Portfolio</span>
                                <a href="https://aamir.asbots.com" target="_blank" rel="noopener noreferrer" class="font-bold text-indigo-600 dark:text-indigo-400 hover:underline truncate block">
                                    aamir.asbots.com
                                </a>
                            </div>
                        </div>
                        <a href="https://aamir.asbots.com" target="_blank" rel="noopener noreferrer" class="no-print text-slate-400 hover:text-indigo-600">↗</a>
                    </div>

                    <!-- LinkedIn Profile -->
                    <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 dark:bg-gray-850 border border-slate-100 dark:border-gray-800 group">
                        <div class="flex items-center gap-2.5 min-w-0">
                            <span class="text-base shrink-0">🔗</span>
                            <div class="truncate">
                                <span class="block text-[10px] font-semibold uppercase tracking-wider text-slate-400">LinkedIn Network</span>
                                <a href="https://www.linkedin.com/in/engr-aamir-jamil-460b20262/" target="_blank" rel="noopener noreferrer" class="font-bold text-[#0077b5] hover:underline truncate block">
                                    in/engr-aamir-jamil
                                </a>
                            </div>
                        </div>
                        <a href="https://www.linkedin.com/in/engr-aamir-jamil-460b20262/" target="_blank" rel="noopener noreferrer" class="no-print text-slate-400 hover:text-[#0077b5]">↗</a>
                    </div>

                    <!-- GitHub & Kaggle -->
                    <div class="flex items-center justify-between p-2.5 rounded-xl bg-slate-50 dark:bg-gray-850 border border-slate-100 dark:border-gray-800 group">
                        <div class="flex items-center gap-2.5 min-w-0">
                            <span class="text-base shrink-0">🐙</span>
                            <div class="truncate">
                                <span class="block text-[10px] font-semibold uppercase tracking-wider text-slate-400">GitHub &amp; Kaggle</span>
                                <div class="flex items-center gap-2 truncate">
                                    <a href="https://github.com/digiart-aamir" target="_blank" rel="noopener noreferrer" class="font-bold text-slate-900 dark:text-slate-100 hover:underline">
                                        digiart-aamir
                                    </a>
                                    <span class="text-slate-300 dark:text-slate-600">&bull;</span>
                                    <a href="https://www.kaggle.com/engraamirjamil" target="_blank" rel="noopener noreferrer" class="font-bold text-[#20BEFF] hover:underline">
                                        Kaggle
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="https://github.com/digiart-aamir" target="_blank" rel="noopener noreferrer" class="no-print text-slate-400 hover:text-slate-800">↗</a>
                    </div>

                </div>
            </header>

            <!-- ------------------------------------------------------------- -->
            <!-- SECTION 2: PROFESSIONAL SUMMARY / EXECUTIVE PROFILE           -->
            <!-- ------------------------------------------------------------- -->
            <section id="summary" class="cv-section mb-8">
                <div class="flex items-center gap-2 mb-3">
                    <h2 class="text-lg sm:text-xl font-grotesk font-extrabold uppercase tracking-wider text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="w-2 h-5 bg-gradient-to-b from-indigo-600 to-purple-600 rounded-full inline-block"></span>
                        Professional Summary
                    </h2>
                </div>
                <div class="p-4 sm:p-5 rounded-2xl bg-slate-50/80 dark:bg-gray-850/60 border border-slate-200/70 dark:border-gray-800 text-slate-700 dark:text-slate-300 text-xs sm:text-sm leading-relaxed space-y-3">
                    <p>
                        <strong>Computer System Engineer</strong> and versatile <strong>AI Solutions Architect</strong> with 4+ years of cross-functional experience spanning machine learning pipelines, edge computer vision, embedded hardware robotics, and full-stack software development. Recognized as a premier AI developer and technical trainer in the Islamabad capital territory, having mentored over <strong>500+ engineers, university students, and government scholarship recipients</strong> across machine learning, Python architectures, and embedded IoT rovers.
                    </p>
                    <p>
                        Proven record bridging high-dimensional algorithmic intelligence with physical microcontrollers—from training real-time face recognition pipelines with <strong>99.4% accuracy</strong> (Ultralytics YOLOv8 &amp; Google MediaPipe) to implementing mesh-networked telemetry using <strong>ESP32 / ESP-NOW protocols</strong> and deploying enterprise web portals for ASBots. Holds verified specializations from <strong>Coursera, IBM, Google, and Scrimba</strong> in AI Engineering, Data Analytics, and Deep Learning.
                    </p>
                </div>
            </section>

            <!-- ------------------------------------------------------------- -->
            <!-- SECTION 3: CORE TECHNICAL SKILLS MATRIX (CATEGORIZED)        -->
            <!-- ------------------------------------------------------------- -->
            <section id="skills" class="cv-section mb-8">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg sm:text-xl font-grotesk font-extrabold uppercase tracking-wider text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="w-2 h-5 bg-gradient-to-b from-purple-600 to-pink-600 rounded-full inline-block"></span>
                        Technical Core Competencies
                    </h2>
                    <span class="text-xs font-mono text-slate-400 no-print">Categorized for ATS Parsing</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    
                    <!-- 1. AI, Machine Learning & Computer Vision -->
                    <div class="cv-card p-4 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs">
                        <div class="flex items-center gap-2 mb-2.5">
                            <span class="text-base">🧠</span>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">
                                AI, Deep Learning &amp; Computer Vision
                            </h3>
                        </div>
                        <p class="text-xs text-slate-700 dark:text-slate-300 leading-relaxed mb-2.5">
                            PyTorch, TensorFlow, Keras, Scikit-Learn, OpenCV, Ultralytics YOLOv8, Google MediaPipe Face Mesh, Deep Neural Networks, CNNs, Regression/Classification, Anti-Spoofing Liveness Detection, NumPy, Pandas.
                        </p>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-indigo-50 dark:bg-indigo-950/60 text-indigo-700 dark:text-indigo-300 border border-indigo-200/50 dark:border-indigo-800/40">YOLOv8</span>
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-indigo-50 dark:bg-indigo-950/60 text-indigo-700 dark:text-indigo-300 border border-indigo-200/50 dark:border-indigo-800/40">PyTorch</span>
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-indigo-50 dark:bg-indigo-950/60 text-indigo-700 dark:text-indigo-300 border border-indigo-200/50 dark:border-indigo-800/40">OpenCV</span>
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-indigo-50 dark:bg-indigo-950/60 text-indigo-700 dark:text-indigo-300 border border-indigo-200/50 dark:border-indigo-800/40">MediaPipe</span>
                        </div>
                    </div>

                    <!-- 2. Generative AI, RAG & Autonomous Agents -->
                    <div class="cv-card p-4 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs">
                        <div class="flex items-center gap-2 mb-2.5">
                            <span class="text-base">⚡</span>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-purple-600 dark:text-purple-400">
                                Generative AI &amp; Autonomous Agents
                            </h3>
                        </div>
                        <p class="text-xs text-slate-700 dark:text-slate-300 leading-relaxed mb-2.5">
                            CrewAI, LangChain, LangGraph Multi-Agent Systems, RAG Architectures, Vector Embeddings (ChromaDB, FAISS), OpenAI &amp; Claude LLM Tool-Use, Hugging Face Transformers, Fine-Tuning, Prompt Engineering, n8n Automation.
                        </p>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-purple-50 dark:bg-purple-950/60 text-purple-700 dark:text-purple-300 border border-purple-200/50 dark:border-purple-800/40">CrewAI</span>
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-purple-50 dark:bg-purple-950/60 text-purple-700 dark:text-purple-300 border border-purple-200/50 dark:border-purple-800/40">LangChain</span>
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-purple-50 dark:bg-purple-950/60 text-purple-700 dark:text-purple-300 border border-purple-200/50 dark:border-purple-800/40">RAG Pipelines</span>
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-purple-50 dark:bg-purple-950/60 text-purple-700 dark:text-purple-300 border border-purple-200/50 dark:border-purple-800/40">n8n</span>
                        </div>
                    </div>

                    <!-- 3. Robotics, Embedded IoT & Hardware Prototyping -->
                    <div class="cv-card p-4 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs">
                        <div class="flex items-center gap-2 mb-2.5">
                            <span class="text-base">🤖</span>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-amber-600 dark:text-amber-400">
                                Robotics &amp; Embedded IoT Systems
                            </h3>
                        </div>
                        <p class="text-xs text-slate-700 dark:text-slate-300 leading-relaxed mb-2.5">
                            ESP32 Microcontrollers, ESP-NOW Peer-to-Peer Wireless Mesh, Arduino C++, Raspberry Pi, Sensor Fusion (Ultrasonic, PIR, IR, DHT22, LDRs), Motor Drivers (L298N, Servos), Wokwi Circuit Simulation, Tinkercad, Autonomous Solar Tracking.
                        </p>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-amber-50 dark:bg-amber-950/60 text-amber-700 dark:text-amber-300 border border-amber-200/50 dark:border-amber-800/40">ESP-NOW</span>
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-amber-50 dark:bg-amber-950/60 text-amber-700 dark:text-amber-300 border border-amber-200/50 dark:border-amber-800/40">ESP32</span>
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-amber-50 dark:bg-amber-950/60 text-amber-700 dark:text-amber-300 border border-amber-200/50 dark:border-amber-800/40">Arduino C++</span>
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-amber-50 dark:bg-amber-950/60 text-amber-700 dark:text-amber-300 border border-amber-200/50 dark:border-amber-800/40">Wokwi</span>
                        </div>
                    </div>

                    <!-- 4. Web Architecture & Enterprise Software -->
                    <div class="cv-card p-4 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs">
                        <div class="flex items-center gap-2 mb-2.5">
                            <span class="text-base">🌐</span>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-cyan-600 dark:text-cyan-400">
                                Full-Stack Web Systems &amp; APIs
                            </h3>
                        </div>
                        <p class="text-xs text-slate-700 dark:text-slate-300 leading-relaxed mb-2.5">
                            PHP &amp; MySQL, JavaScript (ES6+), React.js, Node.js, Tailwind CSS, Alpine.js, RESTful API Design, JSON Data Serialization, Google OAuth 2.0 Auth, MongoDB, Firebase Firestore, UI/UX Systems in Figma.
                        </p>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-cyan-50 dark:bg-cyan-950/60 text-cyan-700 dark:text-cyan-300 border border-cyan-200/50 dark:border-cyan-800/40">PHP/MySQL</span>
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-cyan-50 dark:bg-cyan-950/60 text-cyan-700 dark:text-cyan-300 border border-cyan-200/50 dark:border-cyan-800/40">Tailwind CSS</span>
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-cyan-50 dark:bg-cyan-950/60 text-cyan-700 dark:text-cyan-300 border border-cyan-200/50 dark:border-cyan-800/40">React.js</span>
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-semibold bg-cyan-50 dark:bg-cyan-950/60 text-cyan-700 dark:text-cyan-300 border border-cyan-200/50 dark:border-cyan-800/40">REST APIs</span>
                        </div>
                    </div>

                    <!-- 5. Languages & Core Engineering -->
                    <div class="cv-card p-4 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs">
                        <div class="flex items-center gap-2 mb-2.5">
                            <span class="text-base">💻</span>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-emerald-600 dark:text-emerald-400">
                                Programming Languages
                            </h3>
                        </div>
                        <p class="text-xs text-slate-700 dark:text-slate-300 leading-relaxed">
                            <strong>Python</strong> (Advanced OOP, Async, Automation), <strong>C++</strong> (Embedded Firmware, Pointers, Memory Management), <strong>JavaScript</strong> (ES6+, DOM, Asynchronous Fetch), <strong>PHP</strong>, <strong>SQL</strong> (PostgreSQL, MySQL, SQLite).
                        </p>
                    </div>

                    <!-- 6. DevOps, Tooling & Environments -->
                    <div class="cv-card p-4 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs">
                        <div class="flex items-center gap-2 mb-2.5">
                            <span class="text-base">🛠️</span>
                            <h3 class="text-xs font-bold uppercase tracking-wider text-rose-600 dark:text-rose-400">
                                DevOps, Environments &amp; Soft Skills
                            </h3>
                        </div>
                        <p class="text-xs text-slate-700 dark:text-slate-300 leading-relaxed">
                            Git, GitHub Version Control, Docker Containerization, CI/CD Workflows, VS Code, PyCharm, Google Colab, Linux/Bash Scripting, Technical Instruction, STEM Curriculum Design, Cross-Functional Team Leadership.
                        </p>
                    </div>

                </div>
            </section>

            <!-- ------------------------------------------------------------- -->
            <!-- SECTION 4: PROFESSIONAL WORK EXPERIENCE (CHRONOLOGICAL)       -->
            <!-- ------------------------------------------------------------- -->
            <section id="experience" class="cv-section mb-8">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg sm:text-xl font-grotesk font-extrabold uppercase tracking-wider text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="w-2 h-5 bg-gradient-to-b from-indigo-600 to-teal-500 rounded-full inline-block"></span>
                        Professional Work Experience
                    </h2>
                    <span class="text-xs font-mono text-slate-400 no-print">Reverse-Chronological</span>
                </div>

                <div class="space-y-6">

                    <!-- Role 1: Corvit Systems Rawalpindi -->
                    <article class="cv-card p-5 sm:p-6 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs relative">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-3">
                            <div>
                                <h3 class="text-base sm:text-lg font-bold font-grotesk text-slate-900 dark:text-white">
                                    AI &amp; Robotics Instructor
                                </h3>
                                <div class="flex items-center gap-2 flex-wrap text-xs sm:text-sm text-indigo-600 dark:text-indigo-400 font-semibold mt-0.5">
                                    <span>Corvit Systems Rawalpindi</span>
                                    <span class="text-slate-300 dark:text-slate-600">&bull;</span>
                                    <span class="text-slate-500 dark:text-slate-400 font-normal">Rawalpindi &amp; Islamabad, Pakistan</span>
                                </div>
                            </div>
                            <div class="text-left sm:text-right shrink-0">
                                <span class="inline-block px-3 py-1 rounded-full text-xs font-mono font-bold bg-indigo-50 dark:bg-indigo-950/70 text-indigo-700 dark:text-indigo-300 border border-indigo-200/60 dark:border-indigo-800">
                                    2024 &ndash; 2026
                                </span>
                            </div>
                        </div>

                        <!-- Quantifiable Bullet Points (Google XYZ formula) -->
                        <ul class="space-y-2 text-xs sm:text-sm text-slate-600 dark:text-slate-300 list-disc list-outside pl-4 leading-relaxed">
                            <li>
                                <strong>Technical Instruction &amp; Curricula Leadership:</strong> Engineered and delivered comprehensive, project-based training modules covering AI/ML fundamentals, PyTorch deep neural networks, computer vision (YOLOv8, OpenCV), Generative AI, and autonomous IoT robotics.
                            </li>
                            <li>
                                <strong>NAVTTC-Funded National Programs:</strong> Instructed and mentored cohorts of <strong>300+ engineers and IT trainees</strong> under government-funded National Vocational &amp; Technical Training Commission (NAVTTC) specializations, securing an outstanding 94% course completion metric.
                            </li>
                            <li>
                                <strong>Hands-On Edge AI Prototyping:</strong> Guided students through physical hardware implementations integrating ESP32 boards with cloud endpoints, ultrasonic sensor networks, and edge camera recognition modules.
                            </li>
                            <li>
                                <strong>Industry Capstone Evaluation:</strong> Supervised 35+ full-stack AI graduation capstones, administering rigorous code reviews on algorithmic complexity, dataset normalization, and error metrics.
                            </li>
                        </ul>

                        <!-- Tech Pills -->
                        <div class="flex flex-wrap gap-1.5 mt-3.5 pt-3 border-t border-slate-100 dark:border-gray-800 text-[11px] font-mono text-slate-500">
                            <span class="font-bold text-slate-700 dark:text-slate-300">Stack:</span>
                            <span>Python &bull; PyTorch &bull; YOLOv8 &bull; OpenCV &bull; ESP32 &bull; Robotics &bull; GenAI</span>
                        </div>
                    </article>

                    <!-- Role 2: Learn O Bots (FDE Project) -->
                    <article class="cv-card p-5 sm:p-6 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs relative">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-3">
                            <div>
                                <h3 class="text-base sm:text-lg font-bold font-grotesk text-slate-900 dark:text-white">
                                    STEAM / IoT Trainer (Federal Directorate of Education Outsource)
                                </h3>
                                <div class="flex items-center gap-2 flex-wrap text-xs sm:text-sm text-teal-600 dark:text-teal-400 font-semibold mt-0.5">
                                    <span>Learn O bots &bull; Federal Directorate of Education (FDE)</span>
                                    <span class="text-slate-300 dark:text-slate-600">&bull;</span>
                                    <span class="text-slate-500 dark:text-slate-400 font-normal">Islamabad, Pakistan</span>
                                </div>
                            </div>
                            <div class="text-left sm:text-right shrink-0">
                                <span class="inline-block px-3 py-1 rounded-full text-xs font-mono font-bold bg-teal-50 dark:bg-teal-950/70 text-teal-700 dark:text-teal-300 border border-teal-200/60 dark:border-teal-800">
                                    Joined May 2025 &ndash; Present
                                </span>
                            </div>
                        </div>

                        <ul class="space-y-2 text-xs sm:text-sm text-slate-600 dark:text-slate-300 list-disc list-outside pl-4 leading-relaxed">
                            <li>
                                <strong>Federal STEM Curriculum Delivery:</strong> Conducted immersive STEAM (Science, Technology, Engineering, Arts, Mathematics) workshops for public schools across Islamabad in collaboration with FDE, the Institute of Space Technology (IST), and Learn O bots.
                            </li>
                            <li>
                                <strong>Disruptive Robotics Instruction:</strong> Instructed 200+ young students in embedded electronics, breadboard circuitry, C++ firmware logic, and block/Python algorithmic thinking.
                            </li>
                            <li>
                                <strong>Physical Robotics Lab Builds:</strong> Directed students in fabricating autonomous line-following rovers, obstacle-avoidance vehicles (HC-SR04 ultrasonic + L298N motor drivers), and interactive IoT smart home prototypes.
                            </li>
                            <li>
                                <strong>Digital Literacy Advocacy:</strong> Made cutting-edge artificial intelligence, sensor actuation, and robotic engineering intuitive and accessible to young learners.
                            </li>
                        </ul>

                        <div class="flex flex-wrap gap-1.5 mt-3.5 pt-3 border-t border-slate-100 dark:border-gray-800 text-[11px] font-mono text-slate-500">
                            <span class="font-bold text-slate-700 dark:text-slate-300">Stack:</span>
                            <span>STEAM &bull; Arduino &bull; ESP32 &bull; Sensor Actuation &bull; Python &bull; Tinkercad &bull; Wokwi</span>
                        </div>
                    </article>

                    <!-- Role 3: Ezitech Saddar Rawalpindi -->
                    <article class="cv-card p-5 sm:p-6 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs relative">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-3">
                            <div>
                                <h3 class="text-base sm:text-lg font-bold font-grotesk text-slate-900 dark:text-white">
                                    AI (ML &amp; DL) Instructor &amp; Data Lead
                                </h3>
                                <div class="flex items-center gap-2 flex-wrap text-xs sm:text-sm text-purple-600 dark:text-purple-400 font-semibold mt-0.5">
                                    <span>Ezitech, Saddar Rawalpindi</span>
                                    <span class="text-slate-300 dark:text-slate-600">&bull;</span>
                                    <span class="text-slate-500 dark:text-slate-400 font-normal">Rawalpindi, Pakistan</span>
                                </div>
                            </div>
                            <div class="text-left sm:text-right shrink-0">
                                <span class="inline-block px-3 py-1 rounded-full text-xs font-mono font-bold bg-purple-50 dark:bg-purple-950/70 text-purple-700 dark:text-purple-300 border border-purple-200/60 dark:border-purple-800">
                                    2024
                                </span>
                            </div>
                        </div>

                        <ul class="space-y-2 text-xs sm:text-sm text-slate-600 dark:text-slate-300 list-disc list-outside pl-4 leading-relaxed">
                            <li>
                                <strong>Mentored 100+ Machine Learning Interns:</strong> Facilitated rigorous hands-on training across exploratory data analysis (EDA), feature engineering, hyperparameter tuning, and model evaluation metrics.
                            </li>
                            <li>
                                <strong>Data Scraping &amp; Pipeline Automation:</strong> Built automated web scrapers and ETL workflows utilizing Python (BeautifulSoup, Selenium, Requests) to extract, sanitize, and structure unstructured web data into clean CSV/SQL datasets.
                            </li>
                            <li>
                                <strong>Real-World AI Solutions:</strong> Directed the development of 3+ production AI prototypes, including algorithmic real-estate and hardware price regression engines and customer classification models.
                            </li>
                            <li>
                                <strong>Code Review &amp; Best Practices:</strong> Championed industry-grade Git workflows, clean code architecture, and modular machine learning repository management among internship teams.
                            </li>
                        </ul>

                        <div class="flex flex-wrap gap-1.5 mt-3.5 pt-3 border-t border-slate-100 dark:border-gray-800 text-[11px] font-mono text-slate-500">
                            <span class="font-bold text-slate-700 dark:text-slate-300">Stack:</span>
                            <span>Machine Learning &bull; Python &bull; Scikit-Learn &bull; Web Scraping &bull; Pandas &bull; Jupyter</span>
                        </div>
                    </article>

                </div>
            </section>

            <!-- ------------------------------------------------------------- -->
            <!-- SECTION 5: FLAGSHIP ENGINEERING & PRODUCTION PROJECTS         -->
            <!-- ------------------------------------------------------------- -->
            <section id="projects" class="cv-section mb-8">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg sm:text-xl font-grotesk font-extrabold uppercase tracking-wider text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="w-2 h-5 bg-gradient-to-b from-cyan-600 to-blue-600 rounded-full inline-block"></span>
                        Flagship Engineering Projects
                    </h2>
                    <span class="text-xs font-mono text-slate-400 no-print">Key Production Deployments</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <!-- Project 1: AI Powered Face Recognition Attendance -->
                    <div class="cv-card p-4 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-2">
                                <h3 class="text-sm font-bold font-grotesk text-slate-900 dark:text-white">
                                    AI-Powered Classroom Attendance System
                                </h3>
                                <span class="px-2 py-0.5 rounded text-[10px] font-mono font-bold bg-indigo-50 dark:bg-indigo-950/70 text-indigo-700 dark:text-indigo-300 border border-indigo-200/50">
                                    99.4% Accuracy
                                </span>
                            </div>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed mb-3">
                                Automated smart classroom attendance system combining <strong>Ultralytics YOLOv8</strong> for multi-face bounding localization with <strong>Google MediaPipe Face Mesh</strong> (468 facial landmark alignment). Extracts 128D facial embeddings with real-time blink-based anti-spoofing verification and automated SQLite logging.
                            </p>
                        </div>
                        <div class="pt-2.5 border-t border-slate-100 dark:border-gray-800 flex items-center justify-between text-[11px] font-mono text-slate-500">
                            <span>Python &bull; YOLOv8 &bull; MediaPipe &bull; OpenCV</span>
                            <a href="https://github.com/digiart-aamir" target="_blank" rel="noopener noreferrer" class="no-print font-bold text-indigo-600 dark:text-indigo-400 hover:underline">Repo ↗</a>
                        </div>
                    </div>

                    <!-- Project 2: ASBots Enterprise Platform -->
                    <div class="cv-card p-4 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-2">
                                <h3 class="text-sm font-bold font-grotesk text-slate-900 dark:text-white">
                                    ASBots Enterprise Web Platform (asbots.com)
                                </h3>
                                <span class="px-2 py-0.5 rounded text-[10px] font-mono font-bold bg-teal-50 dark:bg-teal-950/70 text-teal-700 dark:text-teal-300 border border-teal-200/50">
                                    Live Platform
                                </span>
                            </div>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed mb-3">
                                Enterprise web platform for Artificial Systems &amp; Robotics (ASBots). Features high-precision portal architecture, Google OAuth 2.0 and credential authentication, dynamic circuit vector graphics, glassmorphism UI components, and real-time dashboard analytics.
                            </p>
                        </div>
                        <div class="pt-2.5 border-t border-slate-100 dark:border-gray-800 flex items-center justify-between text-[11px] font-mono text-slate-500">
                            <span>PHP &bull; MySQL &bull; Tailwind CSS &bull; OAuth 2.0</span>
                            <a href="https://asbots.com" target="_blank" rel="noopener noreferrer" class="no-print font-bold text-teal-600 dark:text-teal-400 hover:underline">asbots.com ↗</a>
                        </div>
                    </div>

                    <!-- Project 3: Smart IoT Hotel System -->
                    <div class="cv-card p-4 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-2">
                                <h3 class="text-sm font-bold font-grotesk text-slate-900 dark:text-white">
                                    Smart IoT Hotel System &amp; ESP-NOW Mesh
                                </h3>
                                <span class="px-2 py-0.5 rounded text-[10px] font-mono font-bold bg-amber-50 dark:bg-amber-950/70 text-amber-700 dark:text-amber-300 border border-amber-200/50">
                                    &lt;20ms Latency
                                </span>
                            </div>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed mb-3">
                                Serverless, router-independent IoT hotel room management system engineered on <strong>ESP32 with ESP-NOW protocol</strong>. Delivers peer-to-peer telemetry between room sensor nodes and centralized reception consoles with sub-20ms wireless latency, automated climate control, and occupancy tracking.
                            </p>
                        </div>
                        <div class="pt-2.5 border-t border-slate-100 dark:border-gray-800 flex items-center justify-between text-[11px] font-mono text-slate-500">
                            <span>ESP-NOW &bull; ESP32 &bull; C++ &bull; Wokwi Simulator</span>
                            <a href="https://github.com/digiart-aamir" target="_blank" rel="noopener noreferrer" class="no-print font-bold text-amber-600 dark:text-amber-400 hover:underline">Code ↗</a>
                        </div>
                    </div>

                    <!-- Project 4: Dual-Axis Solar Radiation Tracking -->
                    <div class="cv-card p-4 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-2">
                                <h3 class="text-sm font-bold font-grotesk text-slate-900 dark:text-white">
                                    Dual-Axis Solar Radiation Harvesting Apparatus
                                </h3>
                                <span class="px-2 py-0.5 rounded text-[10px] font-mono font-bold bg-emerald-50 dark:bg-emerald-950/70 text-emerald-700 dark:text-emerald-300 border border-emerald-200/50">
                                    +30% Yield
                                </span>
                            </div>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed mb-3">
                                Autonomous dual-axis closed-loop sun tracking system using light-dependent resistor (LDR) quadrant arrays and dual-servo actuators. Continuously normalizes the angle of incidence, generating approximately 25-30% higher photovoltaic energy capture over fixed panels.
                            </p>
                        </div>
                        <div class="pt-2.5 border-t border-slate-100 dark:border-gray-800 flex items-center justify-between text-[11px] font-mono text-slate-500">
                            <span>Arduino &bull; Servos &bull; Sensor Fusion &bull; Circuit Sim</span>
                            <a href="https://github.com/digiart-aamir" target="_blank" rel="noopener noreferrer" class="no-print font-bold text-emerald-600 dark:text-emerald-400 hover:underline">Specs ↗</a>
                        </div>
                    </div>

                </div>
            </section>

            <!-- ------------------------------------------------------------- -->
            <!-- SECTION 6: VERIFIED CERTIFICATIONS & SPECIALIZATIONS          -->
            <!-- ------------------------------------------------------------- -->
            <section id="certifications" class="cv-section mb-8">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg sm:text-xl font-grotesk font-extrabold uppercase tracking-wider text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="w-2 h-5 bg-gradient-to-b from-yellow-500 to-amber-600 rounded-full inline-block"></span>
                        Professional Certifications &amp; Credentials
                    </h2>
                    <span class="text-xs font-mono text-slate-400 no-print">Click to Verify Online</span>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs sm:text-sm border-collapse">
                        <thead>
                            <tr class="border-b border-slate-200 dark:border-gray-800 text-[11px] uppercase tracking-wider text-slate-400 font-mono">
                                <th class="py-2.5 pr-4">Credential / Specialization</th>
                                <th class="py-2.5 px-4">Issuing Authority</th>
                                <th class="py-2.5 px-4">Year</th>
                                <th class="py-2.5 pl-4 text-right no-print">Verification</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-gray-800/60">
                            <!-- 1. Scrimba AI Engineering -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50 transition-colors">
                                <td class="py-2.5 pr-4 font-semibold text-slate-900 dark:text-white">
                                    SCRIMBA AI Engineering Specialization
                                </td>
                                <td class="py-2.5 px-4 text-slate-600 dark:text-slate-300">Scrimba / Coursera</td>
                                <td class="py-2.5 px-4 font-mono text-slate-500">2026</td>
                                <td class="py-2.5 pl-4 text-right no-print">
                                    <a href="https://coursera.org/verify/specialization/9J419P512DIC" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">
                                        <span>Verify</span> ↗
                                    </a>
                                </td>
                            </tr>

                            <!-- 2. IBM Machine Learning -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50 transition-colors">
                                <td class="py-2.5 pr-4 font-semibold text-slate-900 dark:text-white">
                                    IBM Machine Learning Professional Certificate
                                </td>
                                <td class="py-2.5 px-4 text-slate-600 dark:text-slate-300">IBM / Coursera</td>
                                <td class="py-2.5 px-4 font-mono text-slate-500">2024</td>
                                <td class="py-2.5 pl-4 text-right no-print">
                                    <a href="https://coursera.org/verify/professional-cert/NHKMJ8SLWZ3M" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">
                                        <span>Verify</span> ↗
                                    </a>
                                </td>
                            </tr>

                            <!-- 3. Google Data Analytics -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50 transition-colors">
                                <td class="py-2.5 pr-4 font-semibold text-slate-900 dark:text-white">
                                    Google Data Analytics Professional Certificate
                                </td>
                                <td class="py-2.5 px-4 text-slate-600 dark:text-slate-300">Google / Coursera</td>
                                <td class="py-2.5 px-4 font-mono text-slate-500">2023</td>
                                <td class="py-2.5 pl-4 text-right no-print">
                                    <a href="https://coursera.org/verify/professional-cert/8XK98VFWSF5H" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">
                                        <span>Verify</span> ↗
                                    </a>
                                </td>
                            </tr>

                            <!-- 4. AI Agent Developer -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50 transition-colors">
                                <td class="py-2.5 pr-4 font-semibold text-slate-900 dark:text-white">
                                    AI Agent Developer Specialization
                                </td>
                                <td class="py-2.5 px-4 text-slate-600 dark:text-slate-300">Coursera &amp; DeepLearning.AI</td>
                                <td class="py-2.5 px-4 font-mono text-slate-500">2025/2026</td>
                                <td class="py-2.5 pl-4 text-right no-print">
                                    <a href="https://coursera.org/verify/specialization/B68RANK2Y5XG" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">
                                        <span>Verify</span> ↗
                                    </a>
                                </td>
                            </tr>

                            <!-- 5. Agentic AI and AI Agents for Leaders -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50 transition-colors">
                                <td class="py-2.5 pr-4 font-semibold text-slate-900 dark:text-white">
                                    Agentic AI and AI Agents for Leaders
                                </td>
                                <td class="py-2.5 px-4 text-slate-600 dark:text-slate-300">Vanderbilt University / Coursera</td>
                                <td class="py-2.5 px-4 font-mono text-slate-500">2025</td>
                                <td class="py-2.5 pl-4 text-right no-print">
                                    <a href="https://coursera.org/verify/specialization/B0C9G68YTVCO" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">
                                        <span>Verify</span> ↗
                                    </a>
                                </td>
                            </tr>

                            <!-- 6. Generative AI for Educators and Trainers -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50 transition-colors">
                                <td class="py-2.5 pr-4 font-semibold text-slate-900 dark:text-white">
                                    Generative AI for Educators and Trainers
                                </td>
                                <td class="py-2.5 px-4 text-slate-600 dark:text-slate-300">Vanderbilt University</td>
                                <td class="py-2.5 px-4 font-mono text-slate-500">2024</td>
                                <td class="py-2.5 pl-4 text-right no-print">
                                    <a href="https://coursera.org/verify/specialization/P9Z9RTM2CH3I" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">
                                        <span>Verify</span> ↗
                                    </a>
                                </td>
                            </tr>

                            <!-- 7. NAVTTC AI (ML & DL) -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50 transition-colors">
                                <td class="py-2.5 pr-4 font-semibold text-slate-900 dark:text-white">
                                    Artificial Intelligence (Machine Learning &amp; Deep Learning)
                                </td>
                                <td class="py-2.5 px-4 text-slate-600 dark:text-slate-300">NAVTTC (National Vocational &amp; Technical Commission)</td>
                                <td class="py-2.5 px-4 font-mono text-slate-500">2024</td>
                                <td class="py-2.5 pl-4 text-right no-print">
                                    <span class="text-xs text-slate-400 font-mono">Government Accr.</span>
                                </td>
                            </tr>

                            <!-- 8. SC-900 Cybersecurity -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50 transition-colors">
                                <td class="py-2.5 pr-4 font-semibold text-slate-900 dark:text-white">
                                    Cybersecurity Fundamentals SC-900
                                </td>
                                <td class="py-2.5 px-4 text-slate-600 dark:text-slate-300">Corvit Islamabad (via GIZ German Cooperation)</td>
                                <td class="py-2.5 px-4 font-mono text-slate-500">2025</td>
                                <td class="py-2.5 pl-4 text-right no-print">
                                    <span class="text-xs text-slate-400 font-mono">GIZ Verified</span>
                                </td>
                            </tr>

                            <!-- 9. Machine Learning Engineer - Ezitech -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50 transition-colors">
                                <td class="py-2.5 pr-4 font-semibold text-slate-900 dark:text-white">
                                    Machine Learning Engineer Certification
                                </td>
                                <td class="py-2.5 px-4 text-slate-600 dark:text-slate-300">Ezitech Saddar Rawalpindi</td>
                                <td class="py-2.5 px-4 font-mono text-slate-500">2024</td>
                                <td class="py-2.5 pl-4 text-right no-print">
                                    <span class="text-xs text-slate-400 font-mono">Verified</span>
                                </td>
                            </tr>

                            <!-- 10. Google Certified Professional Machine Learning Engineer -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50 transition-colors">
                                <td class="py-2.5 pr-4 font-semibold text-slate-900 dark:text-white">
                                    Google Certified Professional Machine Learning Engineer Curriculum
                                </td>
                                <td class="py-2.5 px-4 text-slate-600 dark:text-slate-300">Udemy Professional Track</td>
                                <td class="py-2.5 px-4 font-mono text-slate-500">2024</td>
                                <td class="py-2.5 pl-4 text-right no-print">
                                    <span class="text-xs text-slate-400 font-mono">Verified</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- ------------------------------------------------------------- -->
            <!-- SECTION 7: FORMAL EDUCATION                                   -->
            <!-- ------------------------------------------------------------- -->
            <section id="education" class="cv-section mb-8">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg sm:text-xl font-grotesk font-extrabold uppercase tracking-wider text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="w-2 h-5 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full inline-block"></span>
                        Academic Education
                    </h2>
                </div>

                <div class="cv-card p-5 sm:p-6 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-2">
                        <div>
                            <h3 class="text-base sm:text-lg font-bold font-grotesk text-slate-900 dark:text-white">
                                Bachelor of Computer System Engineering (B.S. CSE)
                            </h3>
                            <p class="text-xs sm:text-sm font-semibold text-indigo-600 dark:text-indigo-400">
                                Mirpur University of Science and Technology (MUST) AJK
                            </p>
                        </div>
                        <div class="text-left sm:text-right shrink-0">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-mono font-bold bg-slate-100 dark:bg-gray-800 text-slate-700 dark:text-slate-300 border border-slate-200 dark:border-gray-700">
                                2019 &ndash; 2023
                            </span>
                        </div>
                    </div>

                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mt-2">
                        Completed a rigorous 4-year engineering curriculum accredited by the <strong>Pakistan Engineering Council (PEC)</strong> under Washington Accord guidelines. Gained deep theoretical foundation and practical laboratory experience across software systems, circuit design, and hardware-software co-design.
                    </p>

                    <div class="mt-3 pt-3 border-t border-slate-100 dark:border-gray-800 text-xs text-slate-500 dark:text-slate-400">
                        <strong>Core Coursework:</strong> Artificial Intelligence &bull; Digital Image Processing &bull; Embedded Systems &bull; Computer Networks &bull; Database Management Systems &bull; Data Structures &amp; Algorithms &bull; Operating Systems &bull; Computer Architecture &bull; Object-Oriented Programming (C++/Python).
                    </div>
                </div>
            </section>

            <!-- ------------------------------------------------------------- -->
            <!-- SECTION 8: KAGGLE DATASETS & COMMUNITY LEADERSHIP            -->
            <!-- ------------------------------------------------------------- -->
            <section id="leadership" class="cv-section mb-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg sm:text-xl font-grotesk font-extrabold uppercase tracking-wider text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="w-2 h-5 bg-gradient-to-b from-blue-500 to-cyan-500 rounded-full inline-block"></span>
                        Kaggle Datasets &amp; Community Leadership
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Kaggle Hub -->
                    <div class="cv-card p-4 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs">
                        <div class="flex items-center gap-2.5 mb-2">
                            <svg class="w-5 h-5 fill-current text-[#20BEFF]" viewBox="0 0 24 24">
                                <path d="M18.825 23.859c-.022.092-.117.141-.281.141h-3.139c-.187 0-.351-.082-.492-.248l-5.178-6.589-1.448 1.374v5.111c0 .235-.117.352-.351.352H5.505c-.236 0-.354-.117-.354-.352V.353c0-.233.118-.353.354-.353h2.431c.234 0 .351.12.351.353v14.343l6.203-6.272c.165-.165.328-.246.494-.246h3.232c.141 0 .225.047.258.143.047.094.025.188-.07.281l-6.883 6.637 7.049 8.358c.094.094.117.188.07.281z"/>
                            </svg>
                            <h3 class="text-sm font-bold font-grotesk text-slate-900 dark:text-white">
                                Kaggle Data Creator (14 Public Datasets)
                            </h3>
                        </div>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed mb-3">
                            Published and maintained <strong>14 curated open-source datasets</strong> on Kaggle encompassing real-world e-commerce, laptop specifications, student metrics, and WhatsApp communications, utilized by international data scientists for benchmarking models.
                        </p>
                        <a href="https://www.kaggle.com/engraamirjamil" target="_blank" rel="noopener noreferrer" class="no-print text-xs font-semibold text-[#0094d1] dark:text-[#20BEFF] hover:underline inline-flex items-center gap-1">
                            <span>kaggle.com/engraamirjamil</span> ↗
                        </a>
                    </div>

                    <!-- STEM & Tech Mentorship -->
                    <div class="cv-card p-4 rounded-2xl bg-white dark:bg-gray-850 border border-slate-200 dark:border-gray-800 shadow-xs">
                        <div class="flex items-center gap-2.5 mb-2">
                            <span class="text-lg">🎓</span>
                            <h3 class="text-sm font-bold font-grotesk text-slate-900 dark:text-white">
                                Technical Speaker &amp; Engineering Mentor
                            </h3>
                        </div>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed mb-3">
                            Delivered interactive technical seminars on <em>Generative AI in Industry</em>, <em>Building Autonomous Multi-Agents</em>, and <em>Edge IoT Telemetry with ESP-NOW</em> at technology meetups and academic institutions across Rawalpindi and Islamabad.
                        </p>
                        <span class="text-xs font-mono text-slate-400">500+ Engineers &amp; Learners Mentored</span>
                    </div>
                </div>
            </section>

            <!-- ------------------------------------------------------------- -->
            <!-- DOCUMENT FOOTER (PRINT + SCREEN)                              -->
            <!-- ------------------------------------------------------------- -->
            <footer class="pt-6 border-t border-slate-200 dark:border-gray-800 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-slate-400">
                <div>
                    <span>Curriculum Vitae &bull; Engr. Aamir Jamil &bull; <?= date('Y') ?></span>
                </div>
                <div class="no-print flex items-center gap-4">
                    <a href="index.php" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors font-medium">Return to Home Portfolio &rarr;</a>
                </div>
                <div class="hidden print-only text-right font-mono text-[10px]">
                    Verified digital version available at: https://aamir.asbots.com/portfolio/cv.php
                </div>
            </footer>

        </div>
    </main>

    <!-- ================================================================= -->
    <!-- ATS RAW PLAIN-TEXT MODAL (FOR INSTANT COPYING INTO JOB PORTALS)   -->
    <!-- ================================================================= -->
    <div x-cloak x-show="showAtsModal" class="no-print fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/70 backdrop-blur-sm"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
        
        <div class="bg-white dark:bg-gray-900 rounded-3xl max-w-3xl w-full max-h-[85vh] flex flex-col shadow-2xl border border-slate-200 dark:border-gray-800 overflow-hidden"
            @click.away="showAtsModal = false">
            
            <!-- Modal Header -->
            <div class="p-5 border-b border-slate-200 dark:border-gray-800 flex items-center justify-between bg-slate-50 dark:bg-gray-850">
                <div>
                    <h3 class="text-base font-bold font-grotesk text-slate-900 dark:text-white">
                        ATS-Optimized Plain Text CV
                    </h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400">
                        Formatted for direct copy-pasting into Workday, Lever, Greenhouse, Taleo &amp; email submissions.
                    </p>
                </div>
                <button @click="showAtsModal = false" class="p-2 rounded-xl text-slate-400 hover:text-slate-700 dark:hover:text-white hover:bg-slate-200 dark:hover:bg-gray-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- Modal Body (Raw Text Area) -->
            <div class="p-5 flex-grow overflow-y-auto">
                <textarea id="atsRawText" readonly
                    class="w-full h-80 sm:h-96 p-4 rounded-xl font-mono text-xs text-slate-800 dark:text-slate-200 bg-slate-100 dark:bg-gray-950 border border-slate-300 dark:border-gray-800 focus:outline-none resize-none leading-relaxed select-all">ENGR. AAMIR JAMIL
Computer System Engineer | AI & Web Architect | STEAM/IoT Educator
Location: Islamabad & Rawalpindi, Pakistan (UTC+5) | Open to Remote Worldwide
Phone / WhatsApp: +92 341 4579704
Email: digiart.aamir@gmail.com | aamir@asbots.com
Portfolio: https://aamir.asbots.com
LinkedIn: https://www.linkedin.com/in/engr-aamir-jamil-460b20262/
GitHub: https://github.com/digiart-aamir
Kaggle: https://www.kaggle.com/engraamirjamil

================================================================================
PROFESSIONAL SUMMARY
================================================================================
Computer System Engineer and AI Solutions Architect with 4+ years of cross-functional experience spanning machine learning pipelines, edge computer vision, embedded hardware robotics, and full-stack software development. Recognized as a premier AI developer and technical trainer in Islamabad, having trained 500+ engineers, university students, and government scholars. Proven track record deploying 99.4% accurate facial recognition pipelines (YOLOv8 & Google MediaPipe), serverless ESP32/ESP-NOW mesh networks, and scalable web architectures.

================================================================================
TECHNICAL CORE COMPETENCIES
================================================================================
* AI, Deep Learning & Vision: PyTorch, TensorFlow, Keras, Scikit-Learn, OpenCV, Ultralytics YOLOv8, MediaPipe Face Mesh, CNNs, Anti-Spoofing Liveness Detection, NumPy, Pandas.
* Generative AI & Agents: CrewAI, LangChain, LangGraph Multi-Agent Workflows, RAG Architecture, Vector DBs (ChromaDB, FAISS), OpenAI & Claude Tool-Use, Hugging Face, n8n Automation.
* Embedded Systems & Robotics: ESP32 Microcontrollers, ESP-NOW Mesh Protocol, Arduino C++, Raspberry Pi, Sensor Fusion (Ultrasonic, PIR, IR, DHT22, LDR), Motor Actuation (L298N, Servos), Wokwi Simulator.
* Full-Stack Web Development: PHP, MySQL, JavaScript (ES6+), React.js, Node.js, Tailwind CSS, Alpine.js, RESTful API Architecture, JSON, Google OAuth 2.0, Firebase, Figma.
* Programming Languages: Python (Advanced), C++, JavaScript (ES6+), PHP, SQL (PostgreSQL, MySQL, SQLite).
* DevOps & Tools: Git, GitHub, Docker, CI/CD, VS Code, PyCharm, Linux/Bash, Google Colab.

================================================================================
PROFESSIONAL WORK EXPERIENCE
================================================================================
AI & ROBOTICS INSTRUCTOR
Corvit Systems Rawalpindi | Rawalpindi & Islamabad, Pakistan (2024 - 2026)
* Engineered and instructed advanced curricula across Machine Learning, PyTorch, Computer Vision (YOLOv8, MediaPipe), and Generative AI.
* Mentored 300+ engineers and IT students under NAVTTC-funded government training programs with a 94% course completion rate.
* Supervised 35+ physical hardware and software graduation capstones integrating ESP32, vision algorithms, and telemetry.

STEAM / IOT TRAINER (FEDERAL DIRECTORATE OF EDUCATION OUTSOURCE)
Learn O bots & Federal Directorate of Education (FDE) | Islamabad, Pakistan (Joined May 2025 - Present)
* Delivered immersive STEAM workshops for public schools in Islamabad in partnership with FDE, IST, and Learn O bots.
* Trained 200+ young students in embedded electronics, C++ firmware logic, and algorithmic Python problem-solving.
* Directed student builds of obstacle-avoiding mobile rovers, autonomous solar trackers, and IoT smart home prototypes.

AI (ML & DL) INSTRUCTOR & DATA LEAD
Ezitech | Saddar Rawalpindi, Pakistan (2024)
* Mentored 100+ machine learning interns through EDA, regression modeling, feature engineering, and model validation.
* Built automated web scrapers and ETL data harvesting pipelines using Python (BeautifulSoup, Selenium) to curate clean datasets.
* Directed 3+ client AI prototypes including algorithmic valuation and computer vision classification engines.

================================================================================
FLAGSHIP ENGINEERING PROJECTS
================================================================================
* AI-Powered Classroom Attendance System: YOLOv8 face detection + MediaPipe 468-point landmark alignment achieving 99.4% classification accuracy with anti-spoofing verification and SQLite logging.
* ASBots Enterprise Web Platform (asbots.com): High-precision web portal architecture with Google OAuth 2.0, dynamic circuit graphics, glassmorphism UI, and real-time dashboard controls.
* Smart IoT Hotel System & ESP-NOW Mesh: Serverless peer-to-peer ESP32 telemetry with <20ms wireless latency, automated room occupancy sensors, and climate control.
* Dual-Axis Solar Radiation Tracking Apparatus: Autonomous closed-loop sun tracking system using LDR quadrant arrays and servo actuators, yielding 25-30% higher photovoltaic energy capture.
* Laptop Valuation & Regression Engine: Multi-parameter regression engine analyzing 15+ hardware attributes with hyperparameter tuning, achieving R^2 > 0.88.

================================================================================
PROFESSIONAL CERTIFICATIONS & CREDENTIALS
================================================================================
* SCRIMBA AI Engineering Specialization (2026) | Coursera (Verify ID: 9J419P512DIC)
* IBM Machine Learning Professional Certificate (2024) | IBM / Coursera (Verify ID: NHKMJ8SLWZ3M)
* Google Data Analytics Professional Certificate (2023) | Google / Coursera (Verify ID: 8XK98VFWSF5H)
* AI Agent Developer Specialization (2025/2026) | Coursera & DeepLearning.AI (Verify ID: B68RANK2Y5XG)
* Agentic AI and AI Agents for Leaders (2025) | Vanderbilt University (Verify ID: B0C9G68YTVCO)
* Generative AI for Educators and Trainers (2024) | Vanderbilt University (Verify ID: P9Z9RTM2CH3I)
* Artificial Intelligence (ML & DL) (2024) | NAVTTC National Vocational & Technical Commission
* Cybersecurity Fundamentals SC-900 (2025) | Corvit Islamabad / GIZ
* Machine Learning Engineer Certification (2024) | Ezitech Saddar Rawalpindi

================================================================================
ACADEMIC EDUCATION
================================================================================
Bachelor of Computer System Engineering (B.S. CSE) | 2019 - 2023
Mirpur University of Science and Technology (MUST) AJK
Accredited by Pakistan Engineering Council (PEC) under Washington Accord guidelines.
Core Coursework: Artificial Intelligence, Digital Image Processing, Embedded Systems, Computer Networks, Database Systems, Data Structures & Algorithms, Computer Architecture.

================================================================================
KAGGLE DATASETS & COMMUNITY LEADERSHIP
================================================================================
* Kaggle Creator: Published 14 public datasets on Kaggle (@engraamirjamil) used by global data science practitioners.
* Technical Mentorship: Mentored 500+ engineers, university students, and young robotics learners across Islamabad and Rawalpindi.</textarea>
            </div>

            <!-- Modal Footer -->
            <div class="p-4 border-t border-slate-200 dark:border-gray-800 bg-slate-50 dark:bg-gray-850 flex items-center justify-between gap-3">
                <span class="text-xs text-slate-500 font-mono">100% ATS Parser Safe Format</span>
                <div class="flex items-center gap-2">
                    <button @click="showAtsModal = false" class="px-4 py-2 rounded-xl text-xs font-semibold text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-gray-800 transition-colors">
                        Close
                    </button>
                    <button onclick="copyToClipboard(document.getElementById('atsRawText').value, 'ATS Plain Text CV');"
                        class="px-4 py-2 rounded-xl text-xs font-bold text-white bg-emerald-600 hover:bg-emerald-700 shadow-md shadow-emerald-500/20 transition-all flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/></svg>
                        <span>Copy All ATS Text</span>
                    </button>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
