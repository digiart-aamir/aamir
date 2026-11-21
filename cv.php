<?php
// cv.php — Engr. Aamir Jamil Executive Curriculum Vitae (ATS-Compliant International Standard)
// Engineered for Flawless A4 PDF Printing (Strict 2-Page Standard & 3-Page Detailed Modes)
$pageTitle = "Engr. Aamir Jamil | Executive Curriculum Vitae (CV) - AI & Robotics Engineer";
$metaDescription = "Curriculum Vitae of Engr. Aamir Jamil — Computer System Engineer, AI Solutions Architect, and STEAM/IoT Educator. Calibrated for 2-Page and 3-Page ATS-compliant PDF export.";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>

    <!-- SEO & Social Meta Tags -->
    <meta name="description" content="<?= htmlspecialchars($metaDescription) ?>">
    <meta name="keywords" content="Engr Aamir Jamil CV, AI Engineer resume, Computer System Engineer CV, AI Trainer Islamabad resume, Robotics Engineer CV Pakistan, ATS friendly AI resume">
    <meta name="author" content="Engr. Aamir Jamil">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://aamir.asbots.com/portfolio/cv.php">

    <!-- Open Graph (Facebook, LinkedIn, Discord) -->
    <meta property="og:type" content="profile">
    <meta property="og:title" content="Engr. Aamir Jamil | Executive Curriculum Vitae (CV)">
    <meta property="og:description" content="Executive CV of Engr. Aamir Jamil — Computer System Engineer, AI Solutions Architect, and STEAM/IoT Educator in Islamabad.">
    <meta property="og:url" content="https://aamir.asbots.com/portfolio/cv.php">
    <meta property="og:image" content="https://aamir.asbots.com/portfolio/assets/img/my-profile-img.png">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Engr. Aamir Jamil | Executive Curriculum Vitae (CV)">
    <meta name="twitter:description" content="Executive CV of Engr. Aamir Jamil — Computer System Engineer, AI Solutions Architect, and STEAM/IoT Educator in Islamabad.">
    <meta name="twitter:image" content="https://aamir.asbots.com/portfolio/assets/img/my-profile-img.png">

    <!-- Preconnect Google Fonts (Strict 2 Origins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Space+Grotesk:wght@600;700;800&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">

    <!-- Schema.org JSON-LD ProfilePage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfilePage",
        "name": "Engr. Aamir Jamil Executive Curriculum Vitae",
        "url": "https://aamir.asbots.com/portfolio/cv.php",
        "description": "Executive Curriculum Vitae of Engr. Aamir Jamil — AI Engineer, Solutions Architect, and Computer Trainer in Islamabad, Pakistan.",
        "mainEntity": {
            "@type": "Person",
            "name": "Engr. Aamir Jamil",
            "jobTitle": "Computer System Engineer & AI Solutions Architect",
            "email": "digiart.aamir@gmail.com",
            "telephone": "+92 341 4579704",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Islamabad",
                "addressCountry": "PK"
            },
            "sameAs": [
                "https://www.linkedin.com/in/engr-aamir-jamil-460b20262/",
                "https://github.com/digiart-aamir",
                "https://www.kaggle.com/engraamirjamil",
                "https://asbots.com"
            ]
        }
    }
    </script>

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
            }, 2200);
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
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%234f46e5'><path d='M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z'/><path d='M14 3v5h5' fill='%236366f1'/></svg>">

    <!-- ============================================================= -->
    <!-- MASTER PRINT & HIGH-DENSITY SCREEN STYLES                      -->
    <!-- ============================================================= -->
    <style>
        /* Compact Clean Scrollbars */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: rgba(0,0,0,0.03);
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(99,102,241,0.3);
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(99,102,241,0.6);
        }

        /* Screen Styles */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0.5rem;
        }
        @media (min-width: 640px) {
            .contact-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }
        @media (min-width: 1024px) {
            .contact-grid {
                grid-template-columns: repeat(6, minmax(0, 1fr));
            }
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(1, minmax(0, 1fr));
            gap: 0.5rem;
        }
        @media (min-width: 768px) {
            .skills-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(1, minmax(0, 1fr));
            gap: 0.6rem;
        }
        @media (min-width: 768px) {
            .projects-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        .dual-columns {
            display: grid;
            grid-template-columns: repeat(1, minmax(0, 1fr));
            gap: 0.6rem;
        }
        @media (min-width: 768px) {
            .dual-columns {
                grid-template-columns: 7fr 5fr;
            }
        }

        /* ========================================================= */
        /* ATS & STRICT A4 PRINT ENGINE (2-PAGE & 3-PAGE CALIBRATED) */
        /* ========================================================= */
        @media print {
            @page {
                size: A4 portrait;
                margin: 14mm 10mm 12mm 10mm; /* Professional executive margin with generous top spacing */
            }

            *, *::before, *::after {
                box-shadow: none !important;
                text-shadow: none !important;
                filter: none !important;
            }

            body {
                background: #ffffff !important;
                color: #0f172a !important;
                font-size: 8pt !important;
                line-height: 1.25 !important;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
                padding: 0 !important;
                margin: 0 !important;
            }

            .no-print {
                display: none !important;
            }

            .print-only {
                display: block !important;
            }

            .cv-main-wrapper {
                padding: 0 !important;
                margin: 0 !important;
            }

            .cv-container {
                max-width: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
                border: none !important;
                background: #ffffff !important;
                box-shadow: none !important;
            }

            /* Header spacing in print */
            header.cv-section {
                padding-top: 2mm !important;
                padding-bottom: 0.25rem !important;
                margin-bottom: 0.35rem !important;
            }

            /* Force Horizontal Layouts in Print regardless of screen queries */
            .contact-grid {
                display: grid !important;
                grid-template-columns: repeat(6, 1fr) !important;
                gap: 4px !important;
                margin-top: 0.2rem !important;
                padding-top: 0.2rem !important;
            }

            .skills-grid {
                display: grid !important;
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 5px !important;
            }

            .projects-grid {
                display: grid !important;
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 5px !important;
            }

            .dual-columns {
                display: grid !important;
                grid-template-columns: 7fr 5fr !important;
                gap: 5px !important;
            }

            /* Section & Card Spacing Control */
            .cv-section {
                margin-bottom: 0.35rem !important;
                break-inside: auto;
            }

            .cv-card {
                page-break-inside: avoid !important;
                break-inside: avoid !important;
                border: 1px solid #e2e8f0 !important;
                background: #ffffff !important;
                padding: 0.24rem 0.45rem !important;
                margin-bottom: 0.2rem !important;
                border-radius: 5px !important;
            }

            /* Headings must NEVER be separated from their content */
            h1, h2, h3, .section-title {
                page-break-after: avoid !important;
                break-after: avoid !important;
            }

            /* Typography Scaling in Print */
            h1 {
                font-size: 15pt !important;
                line-height: 1.12 !important;
                margin-bottom: 0.02rem !important;
            }

            .section-title {
                font-size: 8.5pt !important;
                margin-bottom: 0.12rem !important;
            }

            h3 {
                font-size: 7.9pt !important;
                line-height: 1.15 !important;
            }

            p, li, td, th {
                font-size: 7.15pt !important;
                line-height: 1.2 !important;
            }

            ul {
                margin-top: 0.05rem !important;
                margin-bottom: 0.05rem !important;
            }

            .contact-tag {
                background: #f8fafc !important;
                border: 1px solid #e2e8f0 !important;
                padding: 0.08rem 0.22rem !important;
                font-size: 6.8pt !important;
                border-radius: 4px !important;
            }

            a {
                text-decoration: none !important;
                color: inherit !important;
            }

            /* Table Optimization */
            table {
                width: 100% !important;
                border-collapse: collapse !important;
            }

            tr {
                page-break-inside: avoid !important;
                break-inside: avoid !important;
            }

            td, th {
                padding: 0.08rem 0.22rem !important;
                font-size: 7pt !important;
                line-height: 1.18 !important;
            }

            /* Strict 2-Page International Standard Boundary */
            .page-break-2page {
                display: block !important;
                page-break-before: always !important;
                break-before: page !important;
                height: 0 !important;
                margin: 0 !important;
                padding: 0 !important;
            }

            .page-break-2page + section {
                padding-top: 3mm !important;
            }
        }
    </style>
</head>

<body class="bg-slate-100 dark:bg-gray-950 text-slate-800 dark:text-slate-100 font-inter antialiased transition-colors duration-300 min-h-screen flex flex-col selection:bg-indigo-500 selection:text-white"
    x-data="{ showAtsModal: false }">

    <!-- Toast Notification (Screen Only) -->
    <div x-cloak x-show="$store.copiedToast"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-3"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-3"
        class="no-print fixed bottom-5 right-5 z-50 flex items-center gap-2.5 px-4 py-2.5 rounded-xl bg-gray-900/95 dark:bg-white/95 text-white dark:text-gray-900 shadow-2xl backdrop-blur-md border border-gray-700/50 dark:border-gray-200 text-xs font-semibold">
        <svg class="w-4 h-4 text-emerald-400 dark:text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
        </svg>
        <span x-text="$store.toastMessage"></span>
    </div>

    <!-- ================================================================= -->
    <!-- STICKY TOP CONTROL / PDF EXPORT TOOLBAR (SCREEN ONLY)             -->
    <!-- ================================================================= -->
    <header class="no-print sticky top-0 z-40 bg-white/95 dark:bg-gray-900/95 backdrop-blur-xl border-b border-slate-200/80 dark:border-gray-800 transition-colors duration-300 shadow-xs">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-2.5 flex flex-wrap items-center justify-between gap-3">
            
            <!-- Left: Back to Home & Info -->
            <div class="flex items-center gap-2.5">
                <a href="index.php"
                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold text-slate-700 dark:text-slate-200 bg-slate-100 dark:bg-gray-800 hover:bg-indigo-50 dark:hover:bg-indigo-950/60 hover:text-indigo-600 dark:hover:text-indigo-400 border border-slate-200/80 dark:border-gray-700 transition-all duration-200 group"
                    title="Return to Portfolio Homepage">
                    <svg class="w-3.5 h-3.5 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span>Portfolio</span>
                </a>

                <div class="hidden sm:flex items-center gap-2 pl-2 border-l border-slate-200 dark:border-gray-700">
                    <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-bold bg-indigo-50 dark:bg-indigo-950/70 text-indigo-700 dark:text-indigo-300 border border-indigo-200/70 dark:border-indigo-800">
                        Official CV
                    </span>
                    <span class="text-[11px] text-slate-500 font-mono">2-Page Calibrated PDF</span>
                </div>
            </div>

            <!-- Center: Format Indicator Badge -->
            <div class="hidden sm:flex items-center gap-1.5 px-3 py-1 rounded-lg bg-slate-100 dark:bg-gray-800 border border-slate-200 dark:border-gray-700 text-xs text-slate-600 dark:text-slate-300 font-medium">
                <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                <span class="font-bold text-slate-900 dark:text-white font-grotesk">Format:</span>
                <span>Strict 2-Page International Standard</span>
            </div>

            <!-- Right: Action Buttons -->
            <div class="flex items-center gap-2">
                <!-- 1. Print / Save as PDF -->
                <button onclick="window.print()"
                    class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg text-xs font-bold text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 shadow-sm shadow-indigo-500/25 hover:shadow-indigo-500/40 hover:scale-102 transform transition-all duration-200"
                    title="Print or Save as PDF">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                    </svg>
                    <span>Save as PDF</span>
                </button>

                <!-- 2. Copy ATS Plain Text -->
                <button @click="showAtsModal = true"
                    class="inline-flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-semibold text-slate-700 dark:text-slate-200 bg-white dark:bg-gray-800 hover:bg-slate-50 dark:hover:bg-gray-750 border border-slate-200 dark:border-gray-700 transition-all duration-200"
                    title="View & copy raw text for ATS portals">
                    <svg class="w-3.5 h-3.5 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span>ATS Text</span>
                </button>

                <!-- 3. Theme Toggle -->
                <button onclick="toggleTheme()"
                    class="p-1.5 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-gray-800 border border-slate-200 dark:border-gray-700 transition-colors"
                    title="Toggle Theme">
                    <svg x-show="!$store.darkMode" class="w-3.5 h-3.5 text-amber-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"/>
                    </svg>
                    <svg x-show="$store.darkMode" class="w-3.5 h-3.5 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Section Navigation Jump Pills (Screen Only) -->
        <div class="border-t border-slate-200/60 dark:border-gray-800/80 bg-slate-50/70 dark:bg-gray-900/60 overflow-x-auto scrollbar-none py-1 px-4 sm:px-6">
            <div class="max-w-5xl mx-auto flex items-center justify-between gap-2 text-[11px] font-medium text-slate-600 dark:text-slate-400">
                <div class="flex items-center gap-1.5 whitespace-nowrap">
                    <span class="text-slate-400 font-bold uppercase tracking-wider text-[9px] mr-1">Sections:</span>
                    <a href="#summary" class="px-2 py-0.5 rounded hover:bg-white dark:hover:bg-gray-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Summary</a>
                    <span>&bull;</span>
                    <a href="#skills" class="px-2 py-0.5 rounded hover:bg-white dark:hover:bg-gray-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Skills</a>
                    <span>&bull;</span>
                    <a href="#experience" class="px-2 py-0.5 rounded hover:bg-white dark:hover:bg-gray-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Experience</a>
                    <span>&bull;</span>
                    <a href="#projects" class="px-2 py-0.5 rounded hover:bg-white dark:hover:bg-gray-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Projects</a>
                    <span>&bull;</span>
                    <a href="#certifications" class="px-2 py-0.5 rounded hover:bg-white dark:hover:bg-gray-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Certifications</a>
                    <span>&bull;</span>
                    <a href="#education" class="px-2 py-0.5 rounded hover:bg-white dark:hover:bg-gray-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Education</a>
                </div>

                <div class="hidden md:flex items-center gap-2">
                    <span class="text-[10px] text-slate-400 font-mono">
                        Standard: <strong class="text-indigo-600 dark:text-indigo-400">Strict 2 Pages</strong>
                    </span>
                </div>
            </div>
        </div>
    </header>

    <!-- ================================================================= -->
    <!-- MAIN CV DOCUMENT CONTAINER                                        -->
    <!-- ================================================================= -->
    <main class="cv-main-wrapper flex-grow py-4 sm:py-6 px-3 sm:px-6">
        <div class="cv-container max-w-4xl mx-auto bg-white dark:bg-gray-900 rounded-2xl border border-slate-200/80 dark:border-gray-800 shadow-xl p-5 sm:p-7 transition-colors duration-300">

            <!-- ------------------------------------------------------------- -->
            <!-- SECTION 1: EXECUTIVE CONTACT & IDENTITY HEADER                -->
            <!-- ------------------------------------------------------------- -->
            <header class="cv-section border-b border-slate-200 dark:border-gray-800 pb-2.5 mb-2.5">
                <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-1.5">
                    
                    <!-- Candidate Titles -->
                    <div>
                        <div class="flex items-center gap-2 flex-wrap">
                            <h1 class="text-2xl sm:text-3xl font-grotesk font-extrabold text-slate-900 dark:text-white tracking-tight">
                                Engr. Aamir Jamil
                            </h1>
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-50 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 border border-emerald-200/80 dark:border-emerald-800/60 no-print">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                <span>Open to Opportunities</span>
                            </span>
                        </div>

                        <!-- Professional Title Subheading -->
                        <p class="text-xs sm:text-sm font-semibold text-indigo-600 dark:text-indigo-400 font-grotesk mt-0.5">
                            Computer System Engineer &bull; AI Solutions Architect &bull; STEAM/IoT Educator
                        </p>
                    </div>

                    <!-- Location & Credentials -->
                    <div class="text-left sm:text-right shrink-0 text-[11px] font-mono text-slate-500 dark:text-slate-400 space-y-0.5">
                        <div>Islamabad &amp; Rawalpindi, Pakistan</div>
                        <div class="text-indigo-600 dark:text-indigo-400 font-medium">PEC Registered &bull; UTC+5 (Remote Ready)</div>
                    </div>
                </div>

                <!-- Sleek Horizontal Contact Bar -->
                <div class="contact-grid pt-2 mt-2 border-t border-slate-100 dark:border-gray-800/80 text-[11px]">
                    
                    <!-- Phone -->
                    <div class="contact-tag p-1 rounded-md bg-slate-50 dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800 flex items-center justify-between">
                        <a href="tel:+923414579704" class="font-bold text-slate-700 dark:text-slate-200 hover:text-indigo-600 truncate">
                            +92 341 4579704
                        </a>
                        <button onclick="copyToClipboard('+923414579704', 'Phone')" class="no-print text-slate-400 hover:text-indigo-600 ml-1" title="Copy Phone">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/></svg>
                        </button>
                    </div>

                    <!-- Email -->
                    <div class="contact-tag p-1 rounded-md bg-slate-50 dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800 flex items-center justify-between">
                        <a href="mailto:digiart.aamir@gmail.com" class="font-bold text-slate-700 dark:text-slate-200 hover:text-indigo-600 truncate" title="digiart.aamir@gmail.com">
                            digiart.aamir@gmail.com
                        </a>
                        <button onclick="copyToClipboard('digiart.aamir@gmail.com', 'Email')" class="no-print text-slate-400 hover:text-indigo-600 ml-1" title="Copy Email">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/></svg>
                        </button>
                    </div>

                    <!-- Portfolio -->
                    <div class="contact-tag p-1 rounded-md bg-slate-50 dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800 flex items-center justify-between">
                        <a href="https://aamir.asbots.com" target="_blank" rel="noopener noreferrer" class="font-bold text-indigo-600 dark:text-indigo-400 hover:underline truncate">
                            aamir.asbots.com
                        </a>
                        <span class="no-print text-slate-400">↗</span>
                    </div>

                    <!-- LinkedIn -->
                    <div class="contact-tag p-1 rounded-md bg-slate-50 dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800 flex items-center justify-between">
                        <a href="https://www.linkedin.com/in/engr-aamir-jamil-460b20262/" target="_blank" rel="noopener noreferrer" class="font-bold text-[#0077b5] hover:underline truncate">
                            in/engr-aamir-jamil
                        </a>
                        <span class="no-print text-slate-400">↗</span>
                    </div>

                    <!-- GitHub -->
                    <div class="contact-tag p-1 rounded-md bg-slate-50 dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800 flex items-center justify-between">
                        <a href="https://github.com/digiart-aamir" target="_blank" rel="noopener noreferrer" class="font-bold text-slate-800 dark:text-slate-100 hover:underline truncate">
                            digiart-aamir
                        </a>
                        <span class="no-print text-slate-400">↗</span>
                    </div>

                    <!-- Kaggle -->
                    <div class="contact-tag p-1 rounded-md bg-slate-50 dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800 flex items-center justify-between">
                        <a href="https://www.kaggle.com/engraamirjamil" target="_blank" rel="noopener noreferrer" class="font-bold text-[#20BEFF] hover:underline truncate">
                            kaggle.com/engraamirjamil
                        </a>
                        <span class="no-print text-slate-400">↗</span>
                    </div>

                </div>
            </header>

            <!-- ------------------------------------------------------------- -->
            <!-- SECTION 2: PROFESSIONAL SUMMARY                               -->
            <!-- ------------------------------------------------------------- -->
            <section id="summary" class="cv-section mb-2.5">
                <div class="section-title flex items-center gap-1.5 font-grotesk font-extrabold uppercase tracking-wider text-xs sm:text-sm text-slate-900 dark:text-white mb-1">
                    <span class="w-1.5 h-3 bg-gradient-to-b from-indigo-600 to-purple-600 rounded-full inline-block"></span>
                    <span>Professional Summary</span>
                </div>
                <div class="p-2 sm:p-2.5 rounded-lg bg-slate-50/70 dark:bg-gray-850/60 border border-slate-200/60 dark:border-gray-800 text-slate-700 dark:text-slate-300 text-xs leading-relaxed">
                    <p>
                        <strong>Computer System Engineer &amp; AI Developer</strong> with 4+ years of cross-functional experience bridging deep neural models with physical microcontrollers, web architectures, and engineering training. Mentored <strong>500+ engineers, university students, and government scholars</strong> across machine learning, Python development, and robotics. Engineered <strong>99.4% accurate facial recognition pipelines</strong> (YOLOv8 + MediaPipe), serverless <strong>ESP32/ESP-NOW wireless mesh networks</strong>, and enterprise web platforms. Certified <strong>Huawei ICT Academy Trainer</strong> holding 9 enterprise accreditations alongside credentials from <strong>Coursera, IBM, Google, and Scrimba</strong>.
                    </p>
                </div>
            </section>

            <!-- ------------------------------------------------------------- -->
            <!-- SECTION 3: TECHNICAL COMPETENCIES (HIGH-DENSITY MATRIX)       -->
            <!-- ------------------------------------------------------------- -->
            <section id="skills" class="cv-section mb-2.5">
                <div class="flex items-center justify-between mb-1">
                    <div class="section-title flex items-center gap-1.5 font-grotesk font-extrabold uppercase tracking-wider text-xs sm:text-sm text-slate-900 dark:text-white">
                        <span class="w-1.5 h-3 bg-gradient-to-b from-purple-600 to-pink-600 rounded-full inline-block"></span>
                        <span>Technical Core Competencies</span>
                    </div>
                    <span class="text-[10px] font-mono text-slate-400 no-print">Categorized for ATS</span>
                </div>

                <div class="skills-grid text-xs">
                    
                    <!-- 1. AI & Vision -->
                    <div class="cv-card p-1.5 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800">
                        <span class="font-bold text-indigo-600 dark:text-indigo-400 block text-[11px] mb-0.5">
                            AI, Machine Learning &amp; Computer Vision:
                        </span>
                        <p class="text-slate-600 dark:text-slate-300 leading-tight">
                            PyTorch, TensorFlow, Keras, Scikit-Learn, OpenCV, Ultralytics YOLOv8, MediaPipe Face Mesh, CNNs, Liveness Detection, Scipy, NumPy, Pandas.
                        </p>
                    </div>

                    <!-- 2. GenAI & Multi-Agents -->
                    <div class="cv-card p-1.5 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800">
                        <span class="font-bold text-purple-600 dark:text-purple-400 block text-[11px] mb-0.5">
                            Generative AI &amp; Autonomous Multi-Agents:
                        </span>
                        <p class="text-slate-600 dark:text-slate-300 leading-tight">
                            CrewAI, LangChain, LangGraph, RAG Architecture, Vector DBs (ChromaDB, FAISS), OpenAI &amp; Claude Tool-Use, Hugging Face, Prompt Tuning, n8n.
                        </p>
                    </div>

                    <!-- 3. Robotics & IoT -->
                    <div class="cv-card p-1.5 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800">
                        <span class="font-bold text-amber-600 dark:text-amber-400 block text-[11px] mb-0.5">
                            Robotics &amp; Embedded IoT Systems:
                        </span>
                        <p class="text-slate-600 dark:text-slate-300 leading-tight">
                            ESP32 Microcontrollers, ESP-NOW Mesh Protocol, Arduino C++, Raspberry Pi, Sensor Fusion (Ultrasonic, PIR, DHT22, LDR), Motor Actuation, Wokwi.
                        </p>
                    </div>

                    <!-- 4. Web & APIs -->
                    <div class="cv-card p-1.5 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800">
                        <span class="font-bold text-cyan-600 dark:text-cyan-400 block text-[11px] mb-0.5">
                            Full-Stack Web &amp; API Architecture:
                        </span>
                        <p class="text-slate-600 dark:text-slate-300 leading-tight">
                            PHP &amp; MySQL, JavaScript (ES6+), React.js, Node.js, Tailwind CSS, Alpine.js, RESTful APIs, JSON, Google OAuth 2.0, Firebase, Figma UI/UX.
                        </p>
                    </div>

                    <!-- 5. Languages -->
                    <div class="cv-card p-1.5 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800">
                        <span class="font-bold text-emerald-600 dark:text-emerald-400 block text-[11px] mb-0.5">
                            Programming Languages:
                        </span>
                        <p class="text-slate-600 dark:text-slate-300 leading-tight">
                            <strong>Python</strong> (Advanced OOP/Async), <strong>C++</strong> (Firmware &amp; Pointers), <strong>JavaScript</strong> (ES6+), <strong>PHP</strong>, <strong>SQL</strong> (PostgreSQL, MySQL, SQLite).
                        </p>
                    </div>

                    <!-- 6. DevOps & Tools -->
                    <div class="cv-card p-1.5 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800">
                        <span class="font-bold text-rose-600 dark:text-rose-400 block text-[11px] mb-0.5">
                            DevOps, Environments &amp; Leadership:
                        </span>
                        <p class="text-slate-600 dark:text-slate-300 leading-tight">
                            Git, GitHub, Docker, CI/CD, Linux/Bash, VS Code, Google Colab, Technical Instruction, STEM Curriculum Design, Team Leadership.
                        </p>
                    </div>

                </div>
            </section>

            <!-- ------------------------------------------------------------- -->
            <!-- SECTION 4: PROFESSIONAL WORK EXPERIENCE                       -->
            <!-- ------------------------------------------------------------- -->
            <section id="experience" class="cv-section mb-2.5">
                <div class="flex items-center justify-between mb-1">
                    <div class="section-title flex items-center gap-1.5 font-grotesk font-extrabold uppercase tracking-wider text-xs sm:text-sm text-slate-900 dark:text-white">
                        <span class="w-1.5 h-3 bg-gradient-to-b from-indigo-600 to-teal-500 rounded-full inline-block"></span>
                        <span>Professional Work Experience</span>
                    </div>
                    <span class="text-[10px] font-mono text-slate-400 no-print">Reverse-Chronological</span>
                </div>

                <div class="space-y-1.5">

                    <!-- Role 1: CS Technologies (Rawalpindi) -->
                    <article class="cv-card p-2 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-0.5 mb-1">
                            <div>
                                <h3 class="text-xs sm:text-sm font-bold font-grotesk text-slate-900 dark:text-white">
                                    AI &amp; Huawei Trainer &bull; <span class="text-indigo-600 dark:text-indigo-400 font-semibold">CS Technologies</span>
                                </h3>
                                <p class="text-[11px] text-slate-500 dark:text-slate-400">Rawalpindi, Pakistan</p>
                            </div>
                            <span class="px-1.5 py-0.5 rounded text-[10px] font-mono font-bold bg-emerald-50 dark:bg-emerald-950/70 text-emerald-700 dark:text-emerald-300 border border-emerald-200/60 self-start sm:self-auto">
                                June 2026 &ndash; Present
                            </span>
                        </div>

                        <ul class="text-xs text-slate-600 dark:text-slate-300 list-disc list-outside pl-4 space-y-0.5 leading-snug">
                            <li>
                                Leading Artificial Intelligence, Machine Learning, and Deep Learning training modules for national <strong>NAVTTC-funded cohorts</strong>.
                            </li>
                            <li>
                                Certified <strong>Huawei Trainer</strong> instructing enterprise ICT, cloud AI workflows, and neural network model training.
                            </li>
                            <li>
                                Mentoring students on real-world AI pipelines, exploratory data analysis, and edge computer vision inference projects.
                            </li>
                        </ul>
                        <div class="text-[10px] font-mono text-slate-500 mt-1 pt-0.5 border-t border-slate-100 dark:border-gray-800">
                            <strong>Stack:</strong> Python &bull; Deep Learning &bull; Huawei AI &bull; NAVTTC &bull; PyTorch &bull; Computer Vision &bull; Model Training
                        </div>
                    </article>

                    <!-- Role 2: Corvit Systems Rawalpindi -->
                    <article class="cv-card p-2 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-0.5 mb-1">
                            <div>
                                <h3 class="text-xs sm:text-sm font-bold font-grotesk text-slate-900 dark:text-white">
                                    AI, Robotics &amp; Huawei Trainer &bull; <span class="text-indigo-600 dark:text-indigo-400 font-semibold">Corvit Systems Rawalpindi</span>
                                </h3>
                                <p class="text-[11px] text-slate-500 dark:text-slate-400">Rawalpindi &amp; Islamabad, Pakistan</p>
                            </div>
                            <span class="px-1.5 py-0.5 rounded text-[10px] font-mono font-bold bg-indigo-50 dark:bg-indigo-950/70 text-indigo-700 dark:text-indigo-300 border border-indigo-200/60 self-start sm:self-auto">
                                2024 &ndash; Present
                            </span>
                        </div>

                        <ul class="text-xs text-slate-600 dark:text-slate-300 list-disc list-outside pl-4 space-y-0.5 leading-snug">
                            <li>
                                Directing advanced AI and physical robotics instruction (ESP32, autonomous rovers, sensor fusion) and serving as <strong>Huawei Trainer</strong> for enterprise ICT modules.
                            </li>
                            <li>
                                Mentored <strong>300+ engineers and IT students</strong> under government-funded NAVTTC initiatives, maintaining a 94% course completion rate.
                            </li>
                            <li>
                                Supervised 35+ physical hardware and AI capstones integrating ESP32 telemetry, obstacle-avoiding rovers, and edge computer vision cameras.
                            </li>
                        </ul>
                        <div class="text-[10px] font-mono text-slate-500 mt-1 pt-0.5 border-t border-slate-100 dark:border-gray-800">
                            <strong>Stack:</strong> Python &bull; PyTorch &bull; YOLOv8 &bull; OpenCV &bull; ESP32 &bull; Robotics &bull; Huawei ICT &bull; GenAI
                        </div>
                    </article>

                    <!-- Role 3: Learn O Bots (FDE Project) -->
                    <article class="cv-card p-2 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-0.5 mb-1">
                            <div>
                                <h3 class="text-xs sm:text-sm font-bold font-grotesk text-slate-900 dark:text-white">
                                    STEAM / IoT Trainer &bull; <span class="text-teal-600 dark:text-teal-400 font-semibold">Learn O bots &bull; Federal Directorate of Education (FDE)</span>
                                </h3>
                                <p class="text-[11px] text-slate-500 dark:text-slate-400">Islamabad, Pakistan</p>
                            </div>
                            <span class="px-1.5 py-0.5 rounded text-[10px] font-mono font-bold bg-teal-50 dark:bg-teal-950/70 text-teal-700 dark:text-teal-300 border border-teal-200/60 self-start sm:self-auto">
                                May 2025 &ndash; June 2026
                            </span>
                        </div>

                        <ul class="text-xs text-slate-600 dark:text-slate-300 list-disc list-outside pl-4 space-y-0.5 leading-snug">
                            <li>
                                Conducted immersive STEAM workshops across public schools in Islamabad in partnership with FDE, the Institute of Space Technology (IST), and Learn O bots.
                            </li>
                            <li>
                                Trained <strong>200+ young learners</strong> in embedded circuitry, C++ firmware logic, and algorithmic Python problem-solving.
                            </li>
                            <li>
                                Directed student builds of obstacle-avoiding mobile rovers (HC-SR04 ultrasonic + L298N drivers) and interactive IoT smart home prototypes.
                            </li>
                        </ul>
                        <div class="text-[10px] font-mono text-slate-500 mt-1 pt-0.5 border-t border-slate-100 dark:border-gray-800">
                            <strong>Stack:</strong> STEAM &bull; Arduino &bull; ESP32 &bull; C++ &bull; Python &bull; Tinkercad &bull; Wokwi Simulator
                        </div>
                    </article>

                    <!-- Role 4: Ezitech Saddar Rawalpindi -->
                    <article class="cv-card p-2 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-0.5 mb-1">
                            <div>
                                <h3 class="text-xs sm:text-sm font-bold font-grotesk text-slate-900 dark:text-white">
                                    AI (ML &amp; DL) Instructor &amp; Data Lead &bull; <span class="text-purple-600 dark:text-purple-400 font-semibold">Ezitech</span>
                                </h3>
                                <p class="text-[11px] text-slate-500 dark:text-slate-400">Saddar Rawalpindi, Pakistan</p>
                            </div>
                            <span class="px-1.5 py-0.5 rounded text-[10px] font-mono font-bold bg-purple-50 dark:bg-purple-950/70 text-purple-700 dark:text-purple-300 border border-purple-200/60 self-start sm:self-auto">
                                2024
                            </span>
                        </div>

                        <ul class="text-xs text-slate-600 dark:text-slate-300 list-disc list-outside pl-4 space-y-0.5 leading-snug">
                            <li>
                                Mentored <strong>100+ machine learning interns</strong> through exploratory data analysis, predictive regression modeling, and hyperparameter tuning.
                            </li>
                            <li>
                                Architected automated data scraping ETL pipelines using Python (BeautifulSoup, Selenium) to curate high-quality structured datasets.
                            </li>
                            <li>
                                Directed 3+ client AI prototypes including algorithmic valuation and computer vision classification engines.
                            </li>
                        </ul>
                        <div class="text-[10px] font-mono text-slate-500 mt-1 pt-0.5 border-t border-slate-100 dark:border-gray-800">
                            <strong>Stack:</strong> Python &bull; Scikit-Learn &bull; Web Scraping &bull; Pandas &bull; Jupyter Notebook &bull; Git
                        </div>
                    </article>

                </div>
            </section>

            <!-- ============================================================= -->
            <!-- STRICT 2-PAGE PRINT BOUNDARY (Page 1 Ends Here)                -->
            <!-- ============================================================= -->
            <div class="page-break-2page"></div>

            <!-- ------------------------------------------------------------- -->
            <!-- SECTION 5: FLAGSHIP ENGINEERING & PRODUCTION PROJECTS         -->
            <!-- ------------------------------------------------------------- -->
            <section id="projects" class="cv-section mb-2.5">
                <div class="flex items-center justify-between mb-1">
                    <div class="section-title flex items-center gap-1.5 font-grotesk font-extrabold uppercase tracking-wider text-xs sm:text-sm text-slate-900 dark:text-white">
                        <span class="w-1.5 h-3 bg-gradient-to-b from-cyan-600 to-blue-600 rounded-full inline-block"></span>
                        <span>Flagship Engineering Projects</span>
                    </div>
                    <span class="text-[10px] font-mono text-slate-400 no-print">Key Production Deployments</span>
                </div>

                <div class="projects-grid text-xs">

                    <!-- Project 1: SNGPL Gas Monitoring & Automation (Featured Full Width) -->
                    <div class="cv-card p-2 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800 flex flex-col justify-between md:col-span-2 col-span-1">
                        <div>
                            <div class="flex items-center justify-between gap-1 mb-1">
                                <h3 class="font-bold font-grotesk text-slate-900 dark:text-white text-xs flex items-center gap-1.5">
                                    SNGPL Rawalpindi — Smart Gas Monitoring Dashboards &amp; Automation System
                                </h3>
                                <span class="px-1.5 py-0.2 rounded text-[9px] font-mono font-bold bg-amber-50 dark:bg-amber-950/70 text-amber-700 dark:text-amber-300 border border-amber-200/50">
                                    Industrial SCADA / IoT
                                </span>
                            </div>
                            <p class="text-slate-600 dark:text-slate-300 leading-snug mb-1">
                                Comprehensive industrial telemetry and web dashboard ecosystem engineered for <strong>Sui Northern Gas Pipelines Limited (SNGPL)</strong> Rawalpindi network. Continuously acquires real-time line pressure and volumetric flow data from field transducers via edge microcontrollers. Features automated threshold breach detection with instant stakeholder alerts (SMS/Email/Webhooks) and automated compliance reporting pipelines.
                            </p>
                        </div>
                        <div class="pt-1 border-t border-slate-100 dark:border-gray-800 flex items-center justify-between text-[10px] font-mono text-slate-500">
                            <span>Python &bull; ESP32 &bull; Modbus/RS485 &bull; PHP &bull; MySQL &bull; Real-time Telemetry &bull; Automated Reports</span>
                            <span class="text-indigo-600 dark:text-indigo-400 font-semibold font-mono">SNGPL Rawalpindi</span>
                        </div>
                    </div>

                    <!-- Project 2: AI Attendance -->
                    <div class="cv-card p-2 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between gap-1 mb-1">
                                <h3 class="font-bold font-grotesk text-slate-900 dark:text-white text-xs">
                                    AI-Powered Classroom Attendance System
                                </h3>
                                <span class="px-1 py-0.2 rounded text-[9px] font-mono font-bold bg-indigo-50 dark:bg-indigo-950/70 text-indigo-700 dark:text-indigo-300 border border-indigo-200/50">
                                    99.4% Acc
                                </span>
                            </div>
                            <p class="text-slate-600 dark:text-slate-300 leading-snug mb-1">
                                Real-time vision pipeline combining <strong>YOLOv8</strong> multi-face localization with <strong>MediaPipe</strong> 468-point landmark alignment. Extracts 128D facial embeddings with anti-spoofing blink verification and automated SQLite logging.
                            </p>
                        </div>
                        <div class="pt-1 border-t border-slate-100 dark:border-gray-800 flex items-center justify-between text-[10px] font-mono text-slate-500">
                            <span>Python &bull; YOLOv8 &bull; MediaPipe &bull; OpenCV</span>
                            <a href="https://github.com/digiart-aamir" target="_blank" rel="noopener noreferrer" class="no-print font-bold text-indigo-600 dark:text-indigo-400 hover:underline">Repo ↗</a>
                        </div>
                    </div>

                    <!-- Project 3: ASBots Platform -->
                    <div class="cv-card p-2 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between gap-1 mb-1">
                                <h3 class="font-bold font-grotesk text-slate-900 dark:text-white text-xs">
                                    ASBots Enterprise Web Platform (asbots.com)
                                </h3>
                                <span class="px-1 py-0.2 rounded text-[9px] font-mono font-bold bg-teal-50 dark:bg-teal-950/70 text-teal-700 dark:text-teal-300 border border-teal-200/50">
                                    Live
                                </span>
                            </div>
                            <p class="text-slate-600 dark:text-slate-300 leading-snug mb-1">
                                Enterprise web platform for Artificial Systems &amp; Robotics (ASBots). Features high-precision portal architecture, Google OAuth 2.0 authentication, dynamic circuit vector graphics, glassmorphism UI, and real-time client analytics.
                            </p>
                        </div>
                        <div class="pt-1 border-t border-slate-100 dark:border-gray-800 flex items-center justify-between text-[10px] font-mono text-slate-500">
                            <span>PHP &bull; MySQL &bull; Tailwind &bull; OAuth 2.0</span>
                            <a href="https://asbots.com" target="_blank" rel="noopener noreferrer" class="no-print font-bold text-teal-600 dark:text-teal-400 hover:underline">asbots.com ↗</a>
                        </div>
                    </div>

                    <!-- Project 4: Smart IoT Hotel System -->
                    <div class="cv-card p-2 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between gap-1 mb-1">
                                <h3 class="font-bold font-grotesk text-slate-900 dark:text-white text-xs">
                                    Smart IoT Hotel System &amp; ESP-NOW Mesh
                                </h3>
                                <span class="px-1 py-0.2 rounded text-[9px] font-mono font-bold bg-amber-50 dark:bg-amber-950/70 text-amber-700 dark:text-amber-300 border border-amber-200/50">
                                    &lt;20ms Latency
                                </span>
                            </div>
                            <p class="text-slate-600 dark:text-slate-300 leading-snug mb-1">
                                Serverless, router-independent IoT hotel room management system engineered on <strong>ESP32 with ESP-NOW protocol</strong>. Transmits peer-to-peer room telemetry with sub-20ms wireless latency, automated climate control, and occupancy tracking.
                            </p>
                        </div>
                        <div class="pt-1 border-t border-slate-100 dark:border-gray-800 flex items-center justify-between text-[10px] font-mono text-slate-500">
                            <span>ESP-NOW &bull; ESP32 &bull; C++ &bull; Wokwi</span>
                            <a href="https://github.com/digiart-aamir" target="_blank" rel="noopener noreferrer" class="no-print font-bold text-amber-600 dark:text-amber-400 hover:underline">Code ↗</a>
                        </div>
                    </div>

                    <!-- Project 5: Dual-Axis Solar Tracker -->
                    <div class="cv-card p-2 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between gap-1 mb-1">
                                <h3 class="font-bold font-grotesk text-slate-900 dark:text-white text-xs">
                                    Dual-Axis Solar Radiation Tracking Apparatus
                                </h3>
                                <span class="px-1 py-0.2 rounded text-[9px] font-mono font-bold bg-emerald-50 dark:bg-emerald-950/70 text-emerald-700 dark:text-emerald-300 border border-emerald-200/50">
                                    +30% Energy
                                </span>
                            </div>
                            <p class="text-slate-600 dark:text-slate-300 leading-snug mb-1">
                                Closed-loop sun tracking system using LDR quadrant arrays and dual-servo actuators. Continuously normalizes the angle of incidence, generating a 25-30% boost in photovoltaic energy capture over static panels.
                            </p>
                        </div>
                        <div class="pt-1 border-t border-slate-100 dark:border-gray-800 flex items-center justify-between text-[10px] font-mono text-slate-500">
                            <span>Arduino &bull; Servos &bull; Sensor Fusion &bull; C++</span>
                            <a href="https://github.com/digiart-aamir" target="_blank" rel="noopener noreferrer" class="no-print font-bold text-emerald-600 dark:text-emerald-400 hover:underline">Specs ↗</a>
                        </div>
                    </div>

                    <!-- Project 6: CertifAI Document & Vector Design System -->
                    <div class="cv-card p-2 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between gap-1 mb-1">
                                <h3 class="font-bold font-grotesk text-slate-900 dark:text-white text-xs">
                                    CertifAI — Document Platform &amp; Vector System
                                </h3>
                                <span class="px-1 py-0.2 rounded text-[9px] font-mono font-bold bg-purple-50 dark:bg-purple-950/70 text-purple-700 dark:text-purple-300 border border-purple-200/50">
                                    Scalable SVG
                                </span>
                            </div>
                            <p class="text-slate-600 dark:text-slate-300 leading-snug mb-1">
                                High-fidelity automated document generation and verification platform. Features animated SMIL vector certificate architecture, dynamic QR cryptoseals, and multi-tenant PDF rendering pipelines.
                            </p>
                        </div>
                        <div class="pt-1 border-t border-slate-100 dark:border-gray-800 flex items-center justify-between text-[10px] font-mono text-slate-500">
                            <span>Python &bull; Vector SVG &bull; DOM &bull; Automated PDF &bull; QR</span>
                            <a href="https://github.com/digiart-aamir" target="_blank" rel="noopener noreferrer" class="no-print font-bold text-purple-600 dark:text-purple-400 hover:underline">Code ↗</a>
                        </div>
                    </div>

                </div>
            </section>

            <!-- ------------------------------------------------------------- -->
            <!-- SECTION 6: VERIFIED CERTIFICATIONS & CREDENTIALS              -->
            <!-- ------------------------------------------------------------- -->
            <section id="certifications" class="cv-section mb-2.5">
                <div class="flex items-center justify-between mb-1">
                    <div class="section-title flex items-center gap-1.5 font-grotesk font-extrabold uppercase tracking-wider text-xs sm:text-sm text-slate-900 dark:text-white">
                        <span class="w-1.5 h-3 bg-gradient-to-b from-yellow-500 to-amber-600 rounded-full inline-block"></span>
                        <span>Professional Certifications &amp; Verified Credentials</span>
                    </div>
                    <span class="text-[10px] font-mono text-slate-400 no-print">Click to Verify Online</span>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs border-collapse">
                        <thead>
                            <tr class="border-b border-slate-200 dark:border-gray-800 text-[10px] uppercase tracking-wider text-slate-400 font-mono">
                                <th class="py-1 pr-3">Credential / Specialization</th>
                                <th class="py-1 px-3">Issuer</th>
                                <th class="py-1 px-3">Year</th>
                                <th class="py-1 pl-3 text-right no-print">Verification</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-gray-800/60 leading-tight">
                            <!-- 1. Huawei ICT Trainer -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50">
                                <td class="py-1 pr-3 font-semibold text-slate-900 dark:text-white">Huawei Certified ICT Academy Trainer (5G, AI &amp; Cloud)</td>
                                <td class="py-1 px-3 text-slate-600 dark:text-slate-300">Huawei Technologies &bull; ICT Academy</td>
                                <td class="py-1 px-3 font-mono text-slate-500">2024&ndash;2026</td>
                                <td class="py-1 pl-3 text-right no-print">
                                    <a href="index.php#huawei-academy" class="font-semibold text-red-600 dark:text-red-400 hover:underline">Official HCIA ↗</a>
                                </td>
                            </tr>
                            <!-- 2. Scrimba -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50">
                                <td class="py-1 pr-3 font-semibold text-slate-900 dark:text-white">SCRIMBA AI Engineering Specialization</td>
                                <td class="py-1 px-3 text-slate-600 dark:text-slate-300">Scrimba / Coursera</td>
                                <td class="py-1 px-3 font-mono text-slate-500">2026</td>
                                <td class="py-1 pl-3 text-right no-print">
                                    <a href="https://coursera.org/verify/specialization/9J419P512DIC" target="_blank" rel="noopener noreferrer" class="font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">Verify ↗</a>
                                </td>
                            </tr>
                            <!-- 2. IBM ML -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50">
                                <td class="py-1 pr-3 font-semibold text-slate-900 dark:text-white">IBM Machine Learning Professional Certificate</td>
                                <td class="py-1 px-3 text-slate-600 dark:text-slate-300">IBM / Coursera</td>
                                <td class="py-1 px-3 font-mono text-slate-500">2024</td>
                                <td class="py-1 pl-3 text-right no-print">
                                    <a href="https://coursera.org/verify/professional-cert/NHKMJ8SLWZ3M" target="_blank" rel="noopener noreferrer" class="font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">Verify ↗</a>
                                </td>
                            </tr>
                            <!-- 3. Google Analytics -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50">
                                <td class="py-1 pr-3 font-semibold text-slate-900 dark:text-white">Google Data Analytics Professional Certificate</td>
                                <td class="py-1 px-3 text-slate-600 dark:text-slate-300">Google / Coursera</td>
                                <td class="py-1 px-3 font-mono text-slate-500">2023</td>
                                <td class="py-1 pl-3 text-right no-print">
                                    <a href="https://coursera.org/verify/professional-cert/8XK98VFWSF5H" target="_blank" rel="noopener noreferrer" class="font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">Verify ↗</a>
                                </td>
                            </tr>
                            <!-- 4. AI Agent Developer -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50">
                                <td class="py-1 pr-3 font-semibold text-slate-900 dark:text-white">AI Agent Developer Specialization</td>
                                <td class="py-1 px-3 text-slate-600 dark:text-slate-300">Coursera &amp; DeepLearning.AI</td>
                                <td class="py-1 px-3 font-mono text-slate-500">2025/2026</td>
                                <td class="py-1 pl-3 text-right no-print">
                                    <a href="https://coursera.org/verify/specialization/B68RANK2Y5XG" target="_blank" rel="noopener noreferrer" class="font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">Verify ↗</a>
                                </td>
                            </tr>
                            <!-- 5. Agentic AI for Leaders -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50">
                                <td class="py-1 pr-3 font-semibold text-slate-900 dark:text-white">Agentic AI and AI Agents for Leaders</td>
                                <td class="py-1 px-3 text-slate-600 dark:text-slate-300">Vanderbilt / Coursera</td>
                                <td class="py-1 px-3 font-mono text-slate-500">2025</td>
                                <td class="py-1 pl-3 text-right no-print">
                                    <a href="https://coursera.org/verify/specialization/B0C9G68YTVCO" target="_blank" rel="noopener noreferrer" class="font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">Verify ↗</a>
                                </td>
                            </tr>
                            <!-- 6. GenAI for Educators -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50">
                                <td class="py-1 pr-3 font-semibold text-slate-900 dark:text-white">Generative AI for Educators and Trainers</td>
                                <td class="py-1 px-3 text-slate-600 dark:text-slate-300">Vanderbilt University</td>
                                <td class="py-1 px-3 font-mono text-slate-500">2024</td>
                                <td class="py-1 pl-3 text-right no-print">
                                    <a href="https://coursera.org/verify/specialization/P9Z9RTM2CH3I" target="_blank" rel="noopener noreferrer" class="font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">Verify ↗</a>
                                </td>
                            </tr>
                            <!-- 7. NAVTTC -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50">
                                <td class="py-1 pr-3 font-semibold text-slate-900 dark:text-white">Artificial Intelligence (Machine Learning &amp; Deep Learning)</td>
                                <td class="py-1 px-3 text-slate-600 dark:text-slate-300">NAVTTC Commission</td>
                                <td class="py-1 px-3 font-mono text-slate-500">2024</td>
                                <td class="py-1 pl-3 text-right no-print text-[10px] text-slate-400 font-mono">Government Accr.</td>
                            </tr>
                            <!-- 8. SC-900 -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50">
                                <td class="py-1 pr-3 font-semibold text-slate-900 dark:text-white">Cybersecurity Fundamentals SC-900</td>
                                <td class="py-1 px-3 text-slate-600 dark:text-slate-300">Corvit / GIZ German Cooperation</td>
                                <td class="py-1 px-3 font-mono text-slate-500">2025</td>
                                <td class="py-1 pl-3 text-right no-print text-[10px] text-slate-400 font-mono">GIZ Verified</td>
                            </tr>
                            <!-- 9. Machine Learning Engineer -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-gray-850/50">
                                <td class="py-1 pr-3 font-semibold text-slate-900 dark:text-white">Machine Learning Engineer Certification</td>
                                <td class="py-1 px-3 text-slate-600 dark:text-slate-300">Ezitech Saddar Rawalpindi</td>
                                <td class="py-1 px-3 font-mono text-slate-500">2024</td>
                                <td class="py-1 pl-3 text-right no-print text-[10px] text-slate-400 font-mono">Verified</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- ------------------------------------------------------------- -->
            <!-- SECTION 7: ACADEMIC EDUCATION & KAGGLE/LEADERSHIP             -->
            <!-- ------------------------------------------------------------- -->
            <section id="education" class="cv-section mb-2">
                <div class="dual-columns">
                    
                    <!-- Left: Education -->
                    <div class="cv-card p-2 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800">
                        <div class="flex items-center justify-between mb-0.5">
                            <div class="section-title flex items-center gap-1.5 font-grotesk font-extrabold uppercase tracking-wider text-xs text-slate-900 dark:text-white">
                                <span class="w-1.5 h-3 bg-gradient-to-b from-emerald-500 to-teal-600 rounded-full inline-block"></span>
                                <span>Academic Education</span>
                            </div>
                            <span class="px-1.5 py-0.2 rounded text-[10px] font-mono font-bold bg-slate-100 dark:bg-gray-800 text-slate-700 dark:text-slate-300 border border-slate-200 dark:border-gray-700">
                                2019 &ndash; 2023
                            </span>
                        </div>
                        <h3 class="text-xs font-bold font-grotesk text-slate-900 dark:text-white">
                            Bachelor of Computer System Engineering (B.S. CSE)
                        </h3>
                        <p class="text-[11px] font-semibold text-indigo-600 dark:text-indigo-400 mb-0.5">
                            Mirpur University of Science and Technology (MUST) AJK &bull; Accredited by Pakistan Engineering Council (PEC)
                        </p>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-snug">
                            4-year accredited engineering curriculum under Washington Accord guidelines. Solid foundation in hardware-software co-design, embedded systems, and algorithms.
                        </p>
                    </div>

                    <!-- Right: Kaggle & Leadership -->
                    <div class="cv-card p-2 rounded-lg bg-white dark:bg-gray-850 border border-slate-200/70 dark:border-gray-800 flex flex-col justify-between">
                        <div>
                            <div class="section-title flex items-center gap-1.5 font-grotesk font-extrabold uppercase tracking-wider text-xs text-slate-900 dark:text-white mb-0.5">
                                <span class="w-1.5 h-3 bg-gradient-to-b from-blue-500 to-cyan-500 rounded-full inline-block"></span>
                                <span>Kaggle &amp; Community</span>
                            </div>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-snug">
                                <strong>Kaggle Creator (14 Datasets):</strong> Open datasets used globally.<br>
                                <strong>Technical Speaker:</strong> Delivered workshops for 500+ engineers.
                            </p>
                        </div>
                        <div class="pt-0.5 mt-0.5 border-t border-slate-100 dark:border-gray-800 text-[10px] font-mono text-slate-400 flex items-center justify-between">
                            <span>@engraamirjamil</span>
                            <span class="text-indigo-600 dark:text-indigo-400 font-bold">500+ Mentored</span>
                        </div>
                    </div>

                </div>
            </section>

            <!-- ------------------------------------------------------------- -->
            <!-- DOCUMENT FOOTER (PRINT + SCREEN)                              -->
            <!-- ------------------------------------------------------------- -->
            <footer class="pt-2 border-t border-slate-200 dark:border-gray-800 flex flex-col sm:flex-row items-center justify-between gap-1 text-[11px] text-slate-400">
                <div>
                    <span>Curriculum Vitae &bull; Engr. Aamir Jamil &bull; <?= date('Y') ?></span>
                </div>
                <div class="no-print">
                    <a href="index.php" class="hover:text-indigo-600 dark:hover:text-indigo-400 font-medium">Return to Home Portfolio &rarr;</a>
                </div>
                <div class="hidden print-only text-right font-mono text-[8pt]">
                    Verified digital credentials: https://aamir.asbots.com/portfolio/cv.php
                </div>
            </footer>

        </div>
    </main>

    <!-- ================================================================= -->
    <!-- ATS RAW PLAIN-TEXT MODAL (FOR INSTANT COPYING INTO JOB PORTALS)   -->
    <!-- ================================================================= -->
    <div x-cloak x-show="showAtsModal" class="no-print fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/70 backdrop-blur-sm"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
        
        <div class="bg-white dark:bg-gray-900 rounded-2xl max-w-2xl w-full max-h-[85vh] flex flex-col shadow-2xl border border-slate-200 dark:border-gray-800 overflow-hidden"
            @click.away="showAtsModal = false">
            
            <!-- Modal Header -->
            <div class="p-4 border-b border-slate-200 dark:border-gray-800 flex items-center justify-between bg-slate-50 dark:bg-gray-850">
                <div>
                    <h3 class="text-sm font-bold font-grotesk text-slate-900 dark:text-white">
                        ATS Plain-Text Format (1-Click Copy)
                    </h3>
                    <p class="text-[11px] text-slate-500 dark:text-slate-400">
                        Optimized for Workday, Greenhouse, Lever, Taleo, and direct email submissions.
                    </p>
                </div>
                <button @click="showAtsModal = false" class="p-1.5 rounded-lg text-slate-400 hover:text-slate-700 dark:hover:text-white hover:bg-slate-200 dark:hover:bg-gray-800 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="p-4 flex-grow overflow-y-auto">
                <textarea id="atsRawText" readonly
                    class="w-full h-80 p-3 rounded-lg font-mono text-[11px] text-slate-800 dark:text-slate-200 bg-slate-100 dark:bg-gray-950 border border-slate-300 dark:border-gray-800 focus:outline-none resize-none leading-relaxed select-all">ENGR. AAMIR JAMIL
Computer System Engineer | AI Solutions Architect | STEAM/IoT Educator
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
Computer System Engineer and AI Developer with 4+ years of cross-functional expertise bridging deep learning algorithms with physical microcontrollers, web architectures, and technical training. Mentored 500+ engineers and students across machine learning, Python development, and robotics. Proven track record deploying 99.4% accurate facial recognition pipelines (YOLOv8 + MediaPipe), serverless ESP32/ESP-NOW wireless mesh networks, and enterprise web platforms. Holds verified credentials from Coursera, IBM, Google, and Scrimba.

================================================================================
TECHNICAL CORE COMPETENCIES
================================================================================
* AI, Deep Learning & Vision: PyTorch, TensorFlow, Keras, Scikit-Learn, OpenCV, Ultralytics YOLOv8, MediaPipe Face Mesh, CNNs, Liveness Detection, NumPy, Pandas.
* Generative AI & Agents: CrewAI, LangChain, LangGraph, RAG Architecture, Vector DBs (ChromaDB, FAISS), OpenAI & Claude Tool-Use, Hugging Face, n8n.
* Embedded Systems & Robotics: ESP32 Microcontrollers, ESP-NOW Mesh Protocol, Arduino C++, Raspberry Pi, Sensor Fusion, Motor Actuation, Wokwi Simulator.
* Full-Stack Web Development: PHP, MySQL, JavaScript (ES6+), React.js, Node.js, Tailwind CSS, Alpine.js, RESTful APIs, JSON, Google OAuth 2.0, Firebase, Figma.
* Programming Languages: Python (Advanced), C++, JavaScript (ES6+), PHP, SQL (PostgreSQL, MySQL, SQLite).
* DevOps & Tools: Git, GitHub, Docker, CI/CD, Linux/Bash, VS Code, Google Colab.

================================================================================
PROFESSIONAL WORK EXPERIENCE
================================================================================
AI & HUAWEI TRAINER
CS Technologies | Rawalpindi, Pakistan (June 2026 - Present)
* Leading AI, Machine Learning, and Deep Learning training modules for NAVTTC national cohorts.
* Certified Huawei Trainer instructing enterprise ICT, cloud AI workflows, and model deployment pipelines.
* Mentoring students on real-world AI pipelines, computer vision inference, and practical industry workflows.

AI, ROBOTICS & HUAWEI TRAINER
Corvit Systems Rawalpindi | Rawalpindi & Islamabad, Pakistan (2024 - Present, Continuing)
* Directing AI and physical robotics instruction (ESP32, autonomous rovers, sensor fusion) and serving as Huawei Trainer for enterprise ICT.
* Mentored 300+ engineers and IT students under government-funded NAVTTC initiatives with a 94% course completion rate.
* Supervised 35+ physical hardware and AI capstones integrating ESP32 telemetry, vision algorithms, and edge cameras.

STEAM / IOT TRAINER (FEDERAL DIRECTORATE OF EDUCATION OUTSOURCE)
Learn O bots & Federal Directorate of Education (FDE) | Islamabad, Pakistan (May 2025 - June 2026)
* Conducted immersive STEAM workshops across public schools in Islamabad in partnership with FDE, IST, and Learn O bots.
* Trained 200+ young students in embedded electronics, C++ firmware logic, and algorithmic Python problem-solving.
* Directed student builds of obstacle-avoiding mobile rovers, autonomous solar trackers, and IoT prototypes.

AI (ML & DL) INSTRUCTOR & DATA LEAD
Ezitech | Saddar Rawalpindi, Pakistan (2024)
* Mentored 100+ machine learning interns through EDA, regression modeling, feature engineering, and model validation.
* Built automated web scrapers and ETL data harvesting pipelines using Python (BeautifulSoup, Selenium) to curate clean datasets.
* Directed 3+ client AI prototypes including algorithmic valuation and computer vision classification engines.

================================================================================
FLAGSHIP ENGINEERING PROJECTS
================================================================================
* SNGPL Rawalpindi — Smart Gas Monitoring Dashboards & Automation System: Industrial telemetry and SCADA dashboard ecosystem for Sui Northern Gas Pipelines Limited (SNGPL) Rawalpindi network. Acquires real-time line pressure and volumetric flow data from field transducers via edge microcontrollers with automated threshold breach alerts (SMS/Email) and automated stakeholder compliance reporting.
* AI-Powered Classroom Attendance System: YOLOv8 face detection + MediaPipe 468-point landmark alignment achieving 99.4% accuracy with anti-spoofing verification and SQLite logging.
* ASBots Enterprise Web Platform (asbots.com): High-precision web portal architecture with Google OAuth 2.0, dynamic circuit graphics, glassmorphism UI, and real-time dashboard controls.
* Smart IoT Hotel System & ESP-NOW Mesh: Serverless peer-to-peer ESP32 telemetry with <20ms wireless latency, automated room occupancy sensors, and climate control.
* Dual-Axis Solar Radiation Tracking Apparatus: Autonomous closed-loop sun tracking system using LDR quadrant arrays and servo actuators, yielding 25-30% higher photovoltaic energy capture.

================================================================================
PROFESSIONAL CERTIFICATIONS & CREDENTIALS
================================================================================
HUAWEI ICT ACADEMY ACCREDITATIONS & TRAINER STATUS:
* Huawei Certified ICT Academy Trainer (5G, AI & Cloud) | Huawei Technologies (2024-2026)
* 5G Basics: What It's All About (HCIA-5G-B) | Huawei ICT Academy (2024)
* 5G Network Architecture & Key Technologies (HCIA-5G-NET) | Huawei ICT Academy (2024)
* Enterprise Computer Networks & Protocols (HCIA-DATANET) | Huawei ICT Academy (2024)
* Artificial Intelligence Overview & Foundations (HCIA-AI-FOUND) | Huawei ICT Academy (2024)
* Heuristic Search & Intelligent Decision AI (HCIA-AI-SEARCH) | Huawei ICT Academy (2024)
* Algorithm Design & Computational Complexity (HCIA-ALG-PROG) | Huawei ICT Academy (2024)
* Internet of Things (IoT) Technologies & Sensors (HCIA-IOT-ARCH) | Huawei ICT Academy (2024)
* Cloud Computing Concepts & Virtualization (HCIA-CLOUD-SYS) | Huawei ICT Academy (2024)
* Data Management & Enterprise Analytics (HCIA-DATA-ANLY) | Huawei ICT Academy (2024)

GLOBAL INDUSTRY & UNIVERSITY SPECIALIZATIONS:
* SCRIMBA AI Engineering Specialization (2026) | Coursera (Verify ID: 9J419P512DIC)
* IBM Machine Learning Professional Certificate (2024) | IBM / Coursera (Verify ID: NHKMJ8SLWZ3M)
* Google Data Analytics Professional Certificate (2023) | Google / Coursera (Verify ID: 8XK98VFWSF5H)
* AI Agent Developer Specialization (2025/2026) | Coursera & DeepLearning.AI (Verify ID: B68RANK2Y5XG)
* Agentic AI and AI Agents for Leaders (2025) | Vanderbilt University (Verify ID: B0C9G68YTVCO)
* Generative AI for Educators and Trainers (2024) | Vanderbilt University (Verify ID: P9Z9RTM2CH3I)
* Artificial Intelligence (ML & DL) (2024) | NAVTTC Commission
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
* Kaggle Creator: Published 14 public datasets on Kaggle (@engraamirjamil).
* Technical Mentorship: Mentored 500+ engineers and students across Islamabad and Rawalpindi.</textarea>
            </div>

            <!-- Modal Footer -->
            <div class="p-3 border-t border-slate-200 dark:border-gray-800 bg-slate-50 dark:bg-gray-850 flex items-center justify-between gap-2">
                <span class="text-[10px] text-slate-500 font-mono">100% ATS Parser Safe Format</span>
                <div class="flex items-center gap-2">
                    <button @click="showAtsModal = false" class="px-3 py-1.5 rounded-lg text-xs font-semibold text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-gray-800 transition-colors">
                        Close
                    </button>
                    <button onclick="copyToClipboard(document.getElementById('atsRawText').value, 'ATS Plain Text CV');"
                        class="px-3 py-1.5 rounded-lg text-xs font-bold text-white bg-emerald-600 hover:bg-emerald-700 shadow-sm transition-all flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/></svg>
                        <span>Copy ATS Text</span>
                    </button>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
