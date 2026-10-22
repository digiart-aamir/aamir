    <!-- Portfolio Section -->
    <section id="portfolio" class="py-16 sm:py-20 bg-white dark:bg-gray-800 relative overflow-hidden transition-colors duration-300">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5 pointer-events-none">
            <div class="absolute inset-0"
                style="background-image: url('data:image/svg+xml,%3Csvg width=%2260%22 height=%2260%22 viewBox=%220 0 60 60%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%23000000%22 fill-opacity=%220.1%22%3E%3Cpath d=%22M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-10 sm:mb-12" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-teal-50 dark:bg-teal-950/70 border border-teal-200 dark:border-teal-800/60 text-teal-700 dark:text-teal-300 text-xs sm:text-sm font-semibold mb-3 shadow-sm backdrop-blur-sm">
                    <span class="w-2 h-2 rounded-full bg-teal-500 animate-pulse"></span>
                    <span>Featured Works &amp; Systems</span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-grotesk font-bold mb-3">
                    <span class="bg-gradient-to-r from-green-600 via-teal-600 to-indigo-600 bg-clip-text text-transparent">
                        Selected Projects
                    </span>
                </h2>
                <p class="text-base sm:text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto leading-relaxed">
                    A curated showcase of artificial intelligence, web architectures, data pipelines, and embedded hardware engineering.
                </p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-2 sm:gap-2.5 mb-8 sm:mb-10" data-aos="fade-up" data-aos-delay="100">
                <button
                    class="filter-btn active px-4 sm:px-5 py-2 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-xs sm:text-sm font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300"
                    data-filter="all">
                    All Projects
                </button>
                <button
                    class="filter-btn px-4 sm:px-5 py-2 rounded-full bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600 text-xs sm:text-sm font-semibold hover:bg-gray-200 dark:hover:bg-gray-600 transform hover:scale-105 transition-all duration-300"
                    data-filter="ml">
                    Machine Learning
                </button>
                <button
                    class="filter-btn px-4 sm:px-5 py-2 rounded-full bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600 text-xs sm:text-sm font-semibold hover:bg-gray-200 dark:hover:bg-gray-600 transform hover:scale-105 transition-all duration-300"
                    data-filter="web">
                    Web Development
                </button>
                <button
                    class="filter-btn px-4 sm:px-5 py-2 rounded-full bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600 text-xs sm:text-sm font-semibold hover:bg-gray-200 dark:hover:bg-gray-600 transform hover:scale-105 transition-all duration-300"
                    data-filter="data">
                    Data Analysis
                </button>
                <button
                    class="filter-btn px-4 sm:px-5 py-2 rounded-full bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600 text-xs sm:text-sm font-semibold hover:bg-gray-200 dark:hover:bg-gray-600 transform hover:scale-105 transition-all duration-300"
                    data-filter="graphics">
                    Graphics Design
                </button>
                <button
                    class="filter-btn px-4 sm:px-5 py-2 rounded-full bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600 text-xs sm:text-sm font-semibold hover:bg-gray-200 dark:hover:bg-gray-600 transform hover:scale-105 transition-all duration-300"
                    data-filter="iot">
                    IoT &amp; Robotics
                </button>
            </div>

            <!-- Balanced 4-Column Grid: 2 Clean Rows of 4 Cards (Optimized VH) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 w-full">

                <!-- 01: Laptop Price Prediction -->
                <div class="portfolio-item group flex flex-col" data-category="ml" data-aos="fade-up" data-aos-delay="100">
                    <div class="bento-card rounded-2xl overflow-hidden shadow-md hover:shadow-xl hover:border-indigo-500/40 transition-all duration-300 border border-gray-200/70 dark:border-gray-700/70 bg-white/90 dark:bg-gray-800/90 flex flex-col h-full group">
                        <!-- Card Image Header -->
                        <div class="relative h-40 overflow-hidden bg-gray-100 dark:bg-gray-900">
                            <img src="assets/img/portfolio/ml-1.png" alt="Laptop Price Prediction"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 filter blur-md opacity-0"
                                loading="lazy" decoding="async" width="400" height="160"
                                onload="this.classList.remove('blur-md', 'opacity-0');">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-950/85 via-gray-950/20 to-transparent"></div>
                            <div class="absolute top-2.5 left-2.5">
                                <span class="px-2 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wider bg-indigo-600 text-white shadow">
                                    Regression AI
                                </span>
                            </div>
                            <div class="absolute bottom-2.5 left-3 right-3 text-white">
                                <h3 class="text-sm sm:text-base font-bold font-grotesk leading-tight truncate">Laptop Price Prediction</h3>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-4 flex flex-col flex-grow justify-between space-y-3">
                            <p class="text-gray-600 dark:text-gray-300 text-xs sm:text-[13px] leading-relaxed line-clamp-2">
                                Machine learning regression engine analyzing hardware specs to predict market valuation.
                            </p>

                            <div class="flex flex-wrap gap-1">
                                <span class="px-2 py-0.5 bg-blue-50 dark:bg-blue-950/60 text-blue-600 dark:text-blue-300 text-[10px] font-semibold rounded border border-blue-200/60 dark:border-blue-800/40">Python</span>
                                <span class="px-2 py-0.5 bg-indigo-50 dark:bg-indigo-950/60 text-indigo-600 dark:text-indigo-300 text-[10px] font-semibold rounded border border-indigo-200/60 dark:border-indigo-800/40">Scikit-Learn</span>
                                <span class="px-2 py-0.5 bg-purple-50 dark:bg-purple-950/60 text-purple-600 dark:text-purple-300 text-[10px] font-semibold rounded border border-purple-200/60 dark:border-purple-800/40">Pandas</span>
                            </div>

                            <div class="pt-2 border-t border-gray-100 dark:border-gray-700/60 flex items-center justify-between">
                                <span class="text-[11px] text-gray-400 font-medium">ML Model</span>
                                <button onclick="openProjectModal('ml-1')"
                                    class="px-3.5 py-1.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-xs font-bold rounded-lg hover:shadow shadow-indigo-500/20 hover:scale-105 transform transition-all duration-200">
                                    Details &rarr;
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 02: WhatsApp Chat Analysis -->
                <div class="portfolio-item group flex flex-col" data-category="data" data-aos="fade-up" data-aos-delay="150">
                    <div class="bento-card rounded-2xl overflow-hidden shadow-md hover:shadow-xl hover:border-emerald-500/40 transition-all duration-300 border border-gray-200/70 dark:border-gray-700/70 bg-white/90 dark:bg-gray-800/90 flex flex-col h-full group">
                        <!-- Card Image Header -->
                        <div class="relative h-40 overflow-hidden bg-gray-100 dark:bg-gray-900">
                            <img src="assets/img/portfolio/data-1.png" alt="WhatsApp Chat Analysis"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 filter blur-md opacity-0"
                                loading="lazy" decoding="async" width="400" height="160"
                                onload="this.classList.remove('blur-md', 'opacity-0');">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-950/85 via-gray-950/20 to-transparent"></div>
                            <div class="absolute top-2.5 left-2.5">
                                <span class="px-2 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wider bg-emerald-600 text-white shadow">
                                    Data Science
                                </span>
                            </div>
                            <div class="absolute bottom-2.5 left-3 right-3 text-white">
                                <h3 class="text-sm sm:text-base font-bold font-grotesk leading-tight truncate">WhatsApp Chat Analysis</h3>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-4 flex flex-col flex-grow justify-between space-y-3">
                            <p class="text-gray-600 dark:text-gray-300 text-xs sm:text-[13px] leading-relaxed line-clamp-2">
                                Analytics pipeline parsing text patterns, sentiment trends, peak hours, and user engagement.
                            </p>

                            <div class="flex flex-wrap gap-1">
                                <span class="px-2 py-0.5 bg-green-50 dark:bg-green-950/60 text-green-600 dark:text-green-300 text-[10px] font-semibold rounded border border-green-200/60 dark:border-green-800/40">Python</span>
                                <span class="px-2 py-0.5 bg-teal-50 dark:bg-teal-950/60 text-teal-600 dark:text-teal-300 text-[10px] font-semibold rounded border border-teal-200/60 dark:border-teal-800/40">Regex</span>
                                <span class="px-2 py-0.5 bg-cyan-50 dark:bg-cyan-950/60 text-cyan-600 dark:text-cyan-300 text-[10px] font-semibold rounded border border-cyan-200/60 dark:border-cyan-800/40">Matplotlib</span>
                            </div>

                            <div class="pt-2 border-t border-gray-100 dark:border-gray-700/60 flex items-center justify-between">
                                <span class="text-[11px] text-gray-400 font-medium">NLP &amp; EDA</span>
                                <button onclick="openProjectModal('data-1')"
                                    class="px-3.5 py-1.5 bg-gradient-to-r from-emerald-600 to-teal-600 text-white text-xs font-bold rounded-lg hover:shadow shadow-emerald-500/20 hover:scale-105 transform transition-all duration-200">
                                    Details &rarr;
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 03: Personal Portfolio Website -->
                <div class="portfolio-item group flex flex-col" data-category="web" data-aos="fade-up" data-aos-delay="200">
                    <div class="bento-card rounded-2xl overflow-hidden shadow-md hover:shadow-xl hover:border-purple-500/40 transition-all duration-300 border border-gray-200/70 dark:border-gray-700/70 bg-white/90 dark:bg-gray-800/90 flex flex-col h-full group">
                        <!-- Card Image Header -->
                        <div class="relative h-40 overflow-hidden bg-gray-100 dark:bg-gray-900">
                            <img src="assets/img/portfolio/web-1.png" alt="Personal Portfolio Website"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 filter blur-md opacity-0"
                                loading="lazy" decoding="async" width="400" height="160"
                                onload="this.classList.remove('blur-md', 'opacity-0');">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-950/85 via-gray-950/20 to-transparent"></div>
                            <div class="absolute top-2.5 left-2.5">
                                <span class="px-2 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wider bg-purple-600 text-white shadow">
                                    Web Architecture
                                </span>
                            </div>
                            <div class="absolute bottom-2.5 left-3 right-3 text-white">
                                <h3 class="text-sm sm:text-base font-bold font-grotesk leading-tight truncate">Personal Portfolio Site</h3>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-4 flex flex-col flex-grow justify-between space-y-3">
                            <p class="text-gray-600 dark:text-gray-300 text-xs sm:text-[13px] leading-relaxed line-clamp-2">
                                High-performance portfolio engineered with Tailwind, dark mode, rich micro-interactions, and SEO.
                            </p>

                            <div class="flex flex-wrap gap-1">
                                <span class="px-2 py-0.5 bg-purple-50 dark:bg-purple-950/60 text-purple-600 dark:text-purple-300 text-[10px] font-semibold rounded border border-purple-200/60 dark:border-purple-800/40">HTML5</span>
                                <span class="px-2 py-0.5 bg-pink-50 dark:bg-pink-950/60 text-pink-600 dark:text-pink-300 text-[10px] font-semibold rounded border border-pink-200/60 dark:border-pink-800/40">Tailwind</span>
                                <span class="px-2 py-0.5 bg-rose-50 dark:bg-rose-950/60 text-rose-600 dark:text-rose-300 text-[10px] font-semibold rounded border border-rose-200/60 dark:border-rose-800/40">JavaScript</span>
                            </div>

                            <div class="pt-2 border-t border-gray-100 dark:border-gray-700/60 flex items-center justify-between">
                                <span class="text-[11px] text-gray-400 font-medium">Responsive</span>
                                <button onclick="openProjectModal('web-1')"
                                    class="px-3.5 py-1.5 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-xs font-bold rounded-lg hover:shadow shadow-purple-500/20 hover:scale-105 transform transition-all duration-200">
                                    Details &rarr;
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 04: Graphics Design Portfolio -->
                <div class="portfolio-item group flex flex-col" data-category="graphics" data-aos="fade-up" data-aos-delay="250">
                    <div class="bento-card rounded-2xl overflow-hidden shadow-md hover:shadow-xl hover:border-orange-500/40 transition-all duration-300 border border-gray-200/70 dark:border-gray-700/70 bg-white/90 dark:bg-gray-800/90 flex flex-col h-full group">
                        <!-- Card Image Header -->
                        <div class="relative h-40 overflow-hidden bg-gray-100 dark:bg-gray-900">
                            <img src="assets/img/portfolio/graphics-1.png" alt="Graphics Design Portfolio"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 filter blur-md opacity-0"
                                loading="lazy" decoding="async" width="400" height="160"
                                onload="this.classList.remove('blur-md', 'opacity-0');">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-950/85 via-gray-950/20 to-transparent"></div>
                            <div class="absolute top-2.5 left-2.5">
                                <span class="px-2 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wider bg-orange-600 text-white shadow">
                                    Creative Media
                                </span>
                            </div>
                            <div class="absolute bottom-2.5 left-3 right-3 text-white">
                                <h3 class="text-sm sm:text-base font-bold font-grotesk leading-tight truncate">Visual &amp; Brand Design</h3>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-4 flex flex-col flex-grow justify-between space-y-3">
                            <p class="text-gray-600 dark:text-gray-300 text-xs sm:text-[13px] leading-relaxed line-clamp-2">
                                Modern visual communication packages: social media kits, branding guidelines, and UI mockups.
                            </p>

                            <div class="flex flex-wrap gap-1">
                                <span class="px-2 py-0.5 bg-orange-50 dark:bg-orange-950/60 text-orange-600 dark:text-orange-300 text-[10px] font-semibold rounded border border-orange-200/60 dark:border-orange-800/40">Canva</span>
                                <span class="px-2 py-0.5 bg-red-50 dark:bg-red-950/60 text-red-600 dark:text-red-300 text-[10px] font-semibold rounded border border-red-200/60 dark:border-red-800/40">Photoshop</span>
                                <span class="px-2 py-0.5 bg-amber-50 dark:bg-amber-950/60 text-amber-600 dark:text-amber-300 text-[10px] font-semibold rounded border border-amber-200/60 dark:border-amber-800/40">UI/UX</span>
                            </div>

                            <div class="pt-2 border-t border-gray-100 dark:border-gray-700/60 flex items-center justify-between">
                                <span class="text-[11px] text-gray-400 font-medium">Design</span>
                                <button onclick="openProjectModal('graphics-1')"
                                    class="px-3.5 py-1.5 bg-gradient-to-r from-orange-600 to-red-600 text-white text-xs font-bold rounded-lg hover:shadow shadow-orange-500/20 hover:scale-105 transform transition-all duration-200">
                                    Details &rarr;
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 05: Handwritten Digit Recognition -->
                <div class="portfolio-item group flex flex-col" data-category="ml" data-aos="fade-up" data-aos-delay="100">
                    <div class="bento-card rounded-2xl overflow-hidden shadow-md hover:shadow-xl hover:border-cyan-500/40 transition-all duration-300 border border-gray-200/70 dark:border-gray-700/70 bg-white/90 dark:bg-gray-800/90 flex flex-col h-full group">
                        <!-- Card Image Header -->
                        <div class="relative h-40 overflow-hidden bg-gray-100 dark:bg-gray-900">
                            <img src="assets/img/portfolio/ml-2.png" alt="Handwritten Digit Recognition"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 filter blur-md opacity-0"
                                loading="lazy" decoding="async" width="400" height="160"
                                onload="this.classList.remove('blur-md', 'opacity-0');">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-950/85 via-gray-950/20 to-transparent"></div>
                            <div class="absolute top-2.5 left-2.5">
                                <span class="px-2 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wider bg-cyan-600 text-white shadow">
                                    Deep Learning
                                </span>
                            </div>
                            <div class="absolute bottom-2.5 left-3 right-3 text-white">
                                <h3 class="text-sm sm:text-base font-bold font-grotesk leading-tight truncate">Digit Recognition CNN</h3>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-4 flex flex-col flex-grow justify-between space-y-3">
                            <p class="text-gray-600 dark:text-gray-300 text-xs sm:text-[13px] leading-relaxed line-clamp-2">
                                Convolutional neural network trained on MNIST achieving high accuracy for real-time digit classification.
                            </p>

                            <div class="flex flex-wrap gap-1">
                                <span class="px-2 py-0.5 bg-cyan-50 dark:bg-cyan-950/60 text-cyan-600 dark:text-cyan-300 text-[10px] font-semibold rounded border border-cyan-200/60 dark:border-cyan-800/40">TensorFlow</span>
                                <span class="px-2 py-0.5 bg-blue-50 dark:bg-blue-950/60 text-blue-600 dark:text-blue-300 text-[10px] font-semibold rounded border border-blue-200/60 dark:border-blue-800/40">Keras</span>
                                <span class="px-2 py-0.5 bg-indigo-50 dark:bg-indigo-950/60 text-indigo-600 dark:text-indigo-300 text-[10px] font-semibold rounded border border-indigo-200/60 dark:border-indigo-800/40">CNN</span>
                            </div>

                            <div class="pt-2 border-t border-gray-100 dark:border-gray-700/60 flex items-center justify-between">
                                <span class="text-[11px] text-gray-400 font-medium">Computer Vision</span>
                                <button onclick="openProjectModal('ml-2')"
                                    class="px-3.5 py-1.5 bg-gradient-to-r from-cyan-600 to-blue-600 text-white text-xs font-bold rounded-lg hover:shadow shadow-cyan-500/20 hover:scale-105 transform transition-all duration-200">
                                    Details &rarr;
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 06: Email Spam Detector -->
                <div class="portfolio-item group flex flex-col" data-category="ml" data-aos="fade-up" data-aos-delay="150">
                    <div class="bento-card rounded-2xl overflow-hidden shadow-md hover:shadow-xl hover:border-emerald-500/40 transition-all duration-300 border border-gray-200/70 dark:border-gray-700/70 bg-white/90 dark:bg-gray-800/90 flex flex-col h-full group">
                        <!-- Card Image Header -->
                        <div class="relative h-40 overflow-hidden bg-gray-100 dark:bg-gray-900">
                            <img src="assets/img/portfolio/ml-3.png" alt="Email Spam Detector"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 filter blur-md opacity-0"
                                loading="lazy" decoding="async" width="400" height="160"
                                onload="this.classList.remove('blur-md', 'opacity-0');">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-950/85 via-gray-950/20 to-transparent"></div>
                            <div class="absolute top-2.5 left-2.5">
                                <span class="px-2 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wider bg-emerald-600 text-white shadow">
                                    NLP &amp; ML
                                </span>
                            </div>
                            <div class="absolute bottom-2.5 left-3 right-3 text-white">
                                <h3 class="text-sm sm:text-base font-bold font-grotesk leading-tight truncate">Email Spam Classification</h3>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-4 flex flex-col flex-grow justify-between space-y-3">
                            <p class="text-gray-600 dark:text-gray-300 text-xs sm:text-[13px] leading-relaxed line-clamp-2">
                                NLP classification pipeline utilizing TF-IDF and Naive Bayes / SVM to detect spam messages.
                            </p>

                            <div class="flex flex-wrap gap-1">
                                <span class="px-2 py-0.5 bg-green-50 dark:bg-green-950/60 text-green-600 dark:text-green-300 text-[10px] font-semibold rounded border border-green-200/60 dark:border-green-800/40">Python</span>
                                <span class="px-2 py-0.5 bg-emerald-50 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-300 text-[10px] font-semibold rounded border border-emerald-200/60 dark:border-emerald-800/40">NLP</span>
                                <span class="px-2 py-0.5 bg-teal-50 dark:bg-teal-950/60 text-teal-600 dark:text-teal-300 text-[10px] font-semibold rounded border border-teal-200/60 dark:border-teal-800/40">Scikit-Learn</span>
                            </div>

                            <div class="pt-2 border-t border-gray-100 dark:border-gray-700/60 flex items-center justify-between">
                                <span class="text-[11px] text-gray-400 font-medium">Text NLP</span>
                                <button onclick="openProjectModal('ml-3')"
                                    class="px-3.5 py-1.5 bg-gradient-to-r from-green-600 to-emerald-600 text-white text-xs font-bold rounded-lg hover:shadow shadow-green-500/20 hover:scale-105 transform transition-all duration-200">
                                    Details &rarr;
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 07: ESP32 Waiter-Less Hotel System -->
                <div class="portfolio-item group flex flex-col" data-category="iot" data-aos="fade-up" data-aos-delay="200">
                    <div class="bento-card rounded-2xl overflow-hidden shadow-md hover:shadow-xl hover:border-indigo-500/40 transition-all duration-300 border border-gray-200/70 dark:border-gray-700/70 bg-white/90 dark:bg-gray-800/90 flex flex-col h-full group">
                        <!-- Card Image Header -->
                        <div class="relative h-40 overflow-hidden bg-gray-100 dark:bg-gray-900">
                            <img src="assets/img/portfolio/iot-hotel-system.png" alt="ESP32 Waiter-Less Hotel System"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 filter blur-md opacity-0"
                                loading="lazy" decoding="async" width="400" height="160"
                                onload="this.classList.remove('blur-md', 'opacity-0');">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-950/85 via-gray-950/20 to-transparent"></div>
                            <div class="absolute top-2.5 left-2.5">
                                <span class="px-2 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wider bg-indigo-600 text-white shadow">
                                    IoT Robotics
                                </span>
                            </div>
                            <div class="absolute bottom-2.5 left-3 right-3 text-white">
                                <h3 class="text-sm sm:text-base font-bold font-grotesk leading-tight truncate">ESP32 Waiter-Less System</h3>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-4 flex flex-col flex-grow justify-between space-y-3">
                            <p class="text-gray-600 dark:text-gray-300 text-xs sm:text-[13px] leading-relaxed line-clamp-2">
                                Autonomous multi-node restaurant automation system powered by ESP-NOW wireless mesh protocols.
                            </p>

                            <div class="flex flex-wrap gap-1">
                                <span class="px-2 py-0.5 bg-indigo-50 dark:bg-indigo-950/60 text-indigo-600 dark:text-indigo-300 text-[10px] font-semibold rounded border border-indigo-200/60 dark:border-indigo-800/40">ESP32</span>
                                <span class="px-2 py-0.5 bg-green-50 dark:bg-green-950/60 text-green-600 dark:text-green-300 text-[10px] font-semibold rounded border border-green-200/60 dark:border-green-800/40">ESP-NOW</span>
                                <span class="px-2 py-0.5 bg-blue-50 dark:bg-blue-950/60 text-blue-600 dark:text-blue-300 text-[10px] font-semibold rounded border border-blue-200/60 dark:border-blue-800/40">Robotics</span>
                            </div>

                            <div class="pt-2 border-t border-gray-100 dark:border-gray-700/60 flex items-center justify-between">
                                <span class="text-[11px] text-gray-400 font-medium">Embedded</span>
                                <button onclick="openProjectModal('iot-hotel-1')"
                                    class="px-3.5 py-1.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-xs font-bold rounded-lg hover:shadow shadow-indigo-500/20 hover:scale-105 transform transition-all duration-200">
                                    Details &rarr;
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 08: AI Dual Axis Autonomous Solar Harvesting System -->
                <div class="portfolio-item group flex flex-col" data-category="iot" data-aos="fade-up" data-aos-delay="250">
                    <div class="bento-card rounded-2xl overflow-hidden shadow-md hover:shadow-xl hover:border-emerald-500/40 transition-all duration-300 border border-gray-200/70 dark:border-gray-700/70 bg-white/90 dark:bg-gray-800/90 flex flex-col h-full group">
                        <!-- Card Image Header -->
                        <div class="relative h-40 overflow-hidden bg-gray-100 dark:bg-gray-900">
                            <img src="assets/img/portfolio/solar-harvesting.png" alt="AI Dual Axis Autonomous Solar Harvesting System"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 filter blur-md opacity-0"
                                loading="lazy" decoding="async" width="400" height="160"
                                onload="this.classList.remove('blur-md', 'opacity-0');">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-950/85 via-gray-950/20 to-transparent"></div>
                            <div class="absolute top-2.5 left-2.5">
                                <span class="px-2 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wider bg-emerald-600 text-white shadow">
                                    Autonomous Hardware
                                </span>
                            </div>
                            <div class="absolute bottom-2.5 left-3 right-3 text-white">
                                <h3 class="text-sm sm:text-base font-bold font-grotesk leading-tight truncate">AI Dual-Axis Solar Tracker</h3>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-4 flex flex-col flex-grow justify-between space-y-3">
                            <p class="text-gray-600 dark:text-gray-300 text-xs sm:text-[13px] leading-relaxed line-clamp-2">
                                AI-driven dual-axis harvesting system autonomously aligning solar panels with peak irradiance.
                            </p>

                            <div class="flex flex-wrap gap-1">
                                <span class="px-2 py-0.5 bg-indigo-50 dark:bg-indigo-950/60 text-indigo-600 dark:text-indigo-300 text-[10px] font-semibold rounded border border-indigo-200/60 dark:border-indigo-800/40">AI Vision</span>
                                <span class="px-2 py-0.5 bg-green-50 dark:bg-green-950/60 text-green-600 dark:text-green-300 text-[10px] font-semibold rounded border border-green-200/60 dark:border-green-800/40">OpenCV</span>
                                <span class="px-2 py-0.5 bg-blue-50 dark:bg-blue-950/60 text-blue-600 dark:text-blue-300 text-[10px] font-semibold rounded border border-blue-200/60 dark:border-blue-800/40">Dual Servos</span>
                            </div>

                            <div class="pt-2 border-t border-gray-100 dark:border-gray-700/60 flex items-center justify-between">
                                <span class="text-[11px] text-gray-400 font-medium">CleanTech</span>
                                <button onclick="openProjectModal('solar-1')"
                                    class="px-3.5 py-1.5 bg-gradient-to-r from-green-600 to-emerald-600 text-white text-xs font-bold rounded-lg hover:shadow shadow-green-500/20 hover:scale-105 transform transition-all duration-200">
                                    Details &rarr;
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
