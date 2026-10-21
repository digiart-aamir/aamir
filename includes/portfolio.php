    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-white dark:bg-gray-800 relative overflow-hidden">
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
                    <span class="bg-gradient-to-r from-green-600 to-teal-600 bg-clip-text text-transparent">
                        Portfolio
                    </span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    I have various projects related to machine learning, graphics, web development, and more. Here is
                    the list of all the projects:
                </p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up" data-aos-delay="100">
                <button
                    class="filter-btn active px-6 py-3 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-300"
                    data-filter="all">
                    All Projects
                </button>
                <button
                    class="filter-btn px-6 py-3 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 font-semibold hover:bg-gray-300 dark:hover:bg-gray-600 transform hover:scale-105 transition-all duration-300"
                    data-filter="ml">
                    Machine Learning
                </button>
                <button
                    class="filter-btn px-6 py-3 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 font-semibold hover:bg-gray-300 dark:hover:bg-gray-600 transform hover:scale-105 transition-all duration-300"
                    data-filter="web">
                    Web Development
                </button>
                <button
                    class="filter-btn px-6 py-3 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 font-semibold hover:bg-gray-300 dark:hover:bg-gray-600 transform hover:scale-105 transition-all duration-300"
                    data-filter="data">
                    Data Analysis
                </button>
                <button
                    class="filter-btn px-6 py-3 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 font-semibold hover:bg-gray-300 dark:hover:bg-gray-600 transform hover:scale-105 transition-all duration-300"
                    data-filter="graphics">
                    Graphics Design
                </button>
                <button
                    class="filter-btn px-6 py-3 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 font-semibold hover:bg-gray-300 dark:hover:bg-gray-600 transform hover:scale-105 transition-all duration-300"
                    data-filter="iot">
                    IoT & Robotics
                </button>
            </div>

            <!-- Portfolio Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 w-full">
                <!-- Laptop Price Prediction -->
                <div class="portfolio-item group" data-category="ml" data-aos="fade-up" data-aos-delay="200">
                    <div class="tilt-card bento-card rounded-3xl overflow-hidden shadow-xl hover:shadow-indigo-500/15 transition-all duration-300">
                        <div class="card-glare"></div>
                        <div class="tilt-inner">
                            <div class="aspect-w-16 aspect-h-12 relative overflow-hidden bg-gray-200 dark:bg-gray-700/50">
                                <img src="assets/img/portfolio/ml-1.png" alt="Laptop Price Prediction"
                                    class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-700 filter blur-md opacity-0" loading="lazy" decoding="async" width="400"
                                    height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-950/80 via-transparent to-transparent"></div>
                                <div class="absolute bottom-4 left-4 right-4 text-white">
                                    <span class="text-xs uppercase tracking-wider text-indigo-300 font-bold">Regression AI</span>
                                    <h3 class="text-xl font-bold leading-snug">Laptop Price Prediction</h3>
                                </div>
                            </div>
                            <div class="p-6 space-y-4">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2.5 py-1 bg-blue-50 dark:bg-blue-950/60 text-blue-600 dark:text-blue-300 text-xs font-semibold rounded-full border border-blue-200 dark:border-blue-800/40">Python</span>
                                    <span class="px-2.5 py-1 bg-indigo-50 dark:bg-indigo-950/60 text-indigo-600 dark:text-indigo-300 text-xs font-semibold rounded-full border border-indigo-200 dark:border-indigo-800/40">Scikit-Learn</span>
                                    <span class="px-2.5 py-1 bg-purple-50 dark:bg-purple-950/60 text-purple-600 dark:text-purple-300 text-xs font-semibold rounded-full border border-purple-200 dark:border-purple-800/40">Pandas</span>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">Analyze hardware specifications and predict market valuation with multiple machine learning regression models.</p>
                                <div>
                                    <button onclick="openProjectModal('ml-1')"
                                        class="btn-shimmer px-5 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl hover:shadow-lg shadow-indigo-500/25 transform hover:scale-105 transition-all duration-300">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- WhatsApp Chat Analysis -->
                <div class="portfolio-item group" data-category="data" data-aos="fade-up" data-aos-delay="300">
                    <div class="tilt-card bento-card rounded-3xl overflow-hidden shadow-xl hover:shadow-emerald-500/15 transition-all duration-300">
                        <div class="card-glare"></div>
                        <div class="tilt-inner">
                            <div class="aspect-w-16 aspect-h-12 relative overflow-hidden bg-gray-200 dark:bg-gray-700/50">
                                <img src="assets/img/portfolio/data-1.png" alt="WhatsApp Chat Analysis"
                                    class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-700 filter blur-md opacity-0" loading="lazy" decoding="async" width="400"
                                    height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-950/80 via-transparent to-transparent"></div>
                                <div class="absolute bottom-4 left-4 right-4 text-white">
                                    <span class="text-xs uppercase tracking-wider text-emerald-300 font-bold">Data Science</span>
                                    <h3 class="text-xl font-bold leading-snug">WhatsApp Chat Analysis</h3>
                                </div>
                            </div>
                            <div class="p-6 space-y-4">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2.5 py-1 bg-green-50 dark:bg-green-950/60 text-green-600 dark:text-green-300 text-xs font-semibold rounded-full border border-green-200 dark:border-green-800/40">Python</span>
                                    <span class="px-2.5 py-1 bg-teal-50 dark:bg-teal-950/60 text-teal-600 dark:text-teal-300 text-xs font-semibold rounded-full border border-teal-200 dark:border-teal-800/40">Regex</span>
                                    <span class="px-2.5 py-1 bg-cyan-50 dark:bg-cyan-950/60 text-cyan-600 dark:text-cyan-300 text-xs font-semibold rounded-full border border-cyan-200 dark:border-cyan-800/40">Matplotlib</span>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">Comprehensive analytics pipeline uncovering temporal communication patterns, sentiment trends, and user statistics.</p>
                                <div>
                                    <button onclick="openProjectModal('data-1')"
                                        class="btn-shimmer px-5 py-2.5 bg-gradient-to-r from-emerald-600 to-teal-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl hover:shadow-lg shadow-emerald-500/25 transform hover:scale-105 transition-all duration-300">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Personal Portfolio Website -->
                <div class="portfolio-item group" data-category="web" data-aos="fade-up" data-aos-delay="400">
                    <div class="tilt-card bento-card rounded-3xl overflow-hidden shadow-xl hover:shadow-purple-500/15 transition-all duration-300">
                        <div class="card-glare"></div>
                        <div class="tilt-inner">
                            <div class="aspect-w-16 aspect-h-12 relative overflow-hidden bg-gray-200 dark:bg-gray-700/50">
                                <img src="assets/img/portfolio/web-1.png" alt="Personal Portfolio Website"
                                    class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-700 filter blur-md opacity-0" loading="lazy" decoding="async" width="400"
                                    height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-950/80 via-transparent to-transparent"></div>
                                <div class="absolute bottom-4 left-4 right-4 text-white">
                                    <span class="text-xs uppercase tracking-wider text-purple-300 font-bold">Web Architecture</span>
                                    <h3 class="text-xl font-bold leading-snug">Personal Portfolio Showcase</h3>
                                </div>
                            </div>
                            <div class="p-6 space-y-4">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2.5 py-1 bg-purple-50 dark:bg-purple-950/60 text-purple-600 dark:text-purple-300 text-xs font-semibold rounded-full border border-purple-200 dark:border-purple-800/40">HTML5</span>
                                    <span class="px-2.5 py-1 bg-pink-50 dark:bg-pink-950/60 text-pink-600 dark:text-pink-300 text-xs font-semibold rounded-full border border-pink-200 dark:border-pink-800/40">Tailwind</span>
                                    <span class="px-2.5 py-1 bg-rose-50 dark:bg-rose-950/60 text-rose-600 dark:text-rose-300 text-xs font-semibold rounded-full border border-rose-200 dark:border-rose-800/40">JavaScript</span>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">High-performance engineering portfolio built with responsive micro-interactions, dark mode, and SEO optimization.</p>
                                <div>
                                    <button onclick="openProjectModal('web-1')"
                                        class="btn-shimmer px-5 py-2.5 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl hover:shadow-lg shadow-purple-500/25 transform hover:scale-105 transition-all duration-300">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Graphics Design Portfolio -->
                <div class="portfolio-item group" data-category="graphics" data-aos="fade-up" data-aos-delay="500">
                    <div class="tilt-card bento-card rounded-3xl overflow-hidden shadow-xl hover:shadow-orange-500/15 transition-all duration-300">
                        <div class="card-glare"></div>
                        <div class="tilt-inner">
                            <div class="aspect-w-16 aspect-h-12 relative overflow-hidden bg-gray-200 dark:bg-gray-700/50">
                                <img src="assets/img/portfolio/graphics-1.png" alt="Graphics Design Portfolio"
                                    class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-700 filter blur-md opacity-0" loading="lazy" decoding="async" width="400"
                                    height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-950/80 via-transparent to-transparent"></div>
                                <div class="absolute bottom-4 left-4 right-4 text-white">
                                    <span class="text-xs uppercase tracking-wider text-orange-300 font-bold">Creative Media</span>
                                    <h3 class="text-xl font-bold leading-snug">Visual &amp; Brand Design</h3>
                                </div>
                            </div>
                            <div class="p-6 space-y-4">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2.5 py-1 bg-orange-50 dark:bg-orange-950/60 text-orange-600 dark:text-orange-300 text-xs font-semibold rounded-full border border-orange-200 dark:border-orange-800/40">Canva</span>
                                    <span class="px-2.5 py-1 bg-red-50 dark:bg-red-950/60 text-red-600 dark:text-red-300 text-xs font-semibold rounded-full border border-red-200 dark:border-red-800/40">Photoshop</span>
                                    <span class="px-2.5 py-1 bg-amber-50 dark:bg-amber-950/60 text-amber-600 dark:text-amber-300 text-xs font-semibold rounded-full border border-amber-200 dark:border-amber-800/40">UI/UX</span>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">Creative visual communication including UI mockups, brand assets, social media branding, and digital illustrations.</p>
                                <div>
                                    <button onclick="openProjectModal('graphics-1')"
                                        class="btn-shimmer px-5 py-2.5 bg-gradient-to-r from-orange-600 to-red-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl hover:shadow-lg shadow-orange-500/25 transform hover:scale-105 transition-all duration-300">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Handwritten Digit Recognition -->
                <div class="portfolio-item group" data-category="ml" data-aos="fade-up" data-aos-delay="600">
                    <div class="tilt-card bento-card rounded-3xl overflow-hidden shadow-xl hover:shadow-cyan-500/15 transition-all duration-300">
                        <div class="card-glare"></div>
                        <div class="tilt-inner">
                            <div class="aspect-w-16 aspect-h-12 relative overflow-hidden bg-gray-200 dark:bg-gray-700/50">
                                <img src="assets/img/portfolio/ml-2.png" alt="Handwritten Digit Recognition"
                                    class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-700 filter blur-md opacity-0" loading="lazy" decoding="async" width="400"
                                    height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-950/80 via-transparent to-transparent"></div>
                                <div class="absolute bottom-4 left-4 right-4 text-white">
                                    <span class="text-xs uppercase tracking-wider text-cyan-300 font-bold">Deep Learning</span>
                                    <h3 class="text-xl font-bold leading-snug">Handwritten Digit Recognition</h3>
                                </div>
                            </div>
                            <div class="p-6 space-y-4">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2.5 py-1 bg-cyan-50 dark:bg-cyan-950/60 text-cyan-600 dark:text-cyan-300 text-xs font-semibold rounded-full border border-cyan-200 dark:border-cyan-800/40">TensorFlow</span>
                                    <span class="px-2.5 py-1 bg-blue-50 dark:bg-blue-950/60 text-blue-600 dark:text-blue-300 text-xs font-semibold rounded-full border border-blue-200 dark:border-blue-800/40">Keras</span>
                                    <span class="px-2.5 py-1 bg-indigo-50 dark:bg-indigo-950/60 text-indigo-600 dark:text-indigo-300 text-xs font-semibold rounded-full border border-indigo-200 dark:border-indigo-800/40">CNN</span>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">Convolutional neural network architecture trained on MNIST for accurate real-time numerical image classification.</p>
                                <div>
                                    <button onclick="openProjectModal('ml-2')"
                                        class="btn-shimmer px-5 py-2.5 bg-gradient-to-r from-cyan-600 to-blue-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl hover:shadow-lg shadow-cyan-500/25 transform hover:scale-105 transition-all duration-300">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Email Spam Detector -->
                <div class="portfolio-item group" data-category="ml" data-aos="fade-up" data-aos-delay="700">
                    <div class="tilt-card bento-card rounded-3xl overflow-hidden shadow-xl hover:shadow-emerald-500/15 transition-all duration-300">
                        <div class="card-glare"></div>
                        <div class="tilt-inner">
                            <div class="aspect-w-16 aspect-h-12 relative overflow-hidden bg-gray-200 dark:bg-gray-700/50">
                                <img src="assets/img/portfolio/ml-3.png" alt="Email Spam Detector"
                                    class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-700 filter blur-md opacity-0" loading="lazy" decoding="async" width="400"
                                    height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-950/80 via-transparent to-transparent"></div>
                                <div class="absolute bottom-4 left-4 right-4 text-white">
                                    <span class="text-xs uppercase tracking-wider text-emerald-300 font-bold">NLP &amp; ML</span>
                                    <h3 class="text-xl font-bold leading-snug">Email Spam Classification</h3>
                                </div>
                            </div>
                            <div class="p-6 space-y-4">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2.5 py-1 bg-green-50 dark:bg-green-950/60 text-green-600 dark:text-green-300 text-xs font-semibold rounded-full border border-green-200 dark:border-green-800/40">Python</span>
                                    <span class="px-2.5 py-1 bg-emerald-50 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-300 text-xs font-semibold rounded-full border border-emerald-200 dark:border-emerald-800/40">NLP</span>
                                    <span class="px-2.5 py-1 bg-teal-50 dark:bg-teal-950/60 text-teal-600 dark:text-teal-300 text-xs font-semibold rounded-full border border-teal-200 dark:border-teal-800/40">Scikit-Learn</span>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">Natural Language Processing model leveraging TF-IDF vectorization and Naive Bayes / SVM to filter unsolicited emails.</p>
                                <div>
                                    <button onclick="openProjectModal('ml-3')"
                                        class="btn-shimmer px-5 py-2.5 bg-gradient-to-r from-green-600 to-emerald-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl hover:shadow-lg shadow-green-500/25 transform hover:scale-105 transition-all duration-300">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ESP32 Waiter-Less Hotel System -->
                <div class="portfolio-item group" data-category="iot" data-aos="fade-up" data-aos-delay="600">
                    <div class="tilt-card bento-card rounded-3xl overflow-hidden shadow-xl hover:shadow-indigo-500/15 transition-all duration-300">
                        <div class="card-glare"></div>
                        <div class="tilt-inner">
                            <div class="aspect-w-16 aspect-h-12 relative overflow-hidden bg-gray-200 dark:bg-gray-700/50">
                                <img src="assets/img/portfolio/iot-hotel-system.png"
                                    alt="ESP32 Waiter-Less Hotel System" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-700 filter blur-md opacity-0" loading="lazy"
                                    decoding="async" width="400" height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-950/80 via-transparent to-transparent"></div>
                                <div class="absolute bottom-4 left-4 right-4 text-white">
                                    <span class="text-xs uppercase tracking-wider text-indigo-300 font-bold">IoT Robotics</span>
                                    <h3 class="text-xl font-bold leading-snug">ESP32 Waiter-Less System</h3>
                                </div>
                            </div>
                            <div class="p-6 space-y-4">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2.5 py-1 bg-indigo-50 dark:bg-indigo-950/60 text-indigo-600 dark:text-indigo-300 text-xs font-semibold rounded-full border border-indigo-200 dark:border-indigo-800/40">ESP32</span>
                                    <span class="px-2.5 py-1 bg-green-50 dark:bg-green-950/60 text-green-600 dark:text-green-300 text-xs font-semibold rounded-full border border-green-200 dark:border-green-800/40">ESP-NOW</span>
                                    <span class="px-2.5 py-1 bg-blue-50 dark:bg-blue-950/60 text-blue-600 dark:text-blue-300 text-xs font-semibold rounded-full border border-blue-200 dark:border-blue-800/40">Motor Control</span>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">Fully autonomous, multi-node restaurant automation system using ESP-NOW mesh networking and robotic food delivery.</p>
                                <div>
                                    <button onclick="openProjectModal('iot-hotel-1')"
                                        class="btn-shimmer px-5 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl hover:shadow-lg shadow-indigo-500/25 transform hover:scale-105 transition-all duration-300">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AI Intelligent Dual Axis Autonomous Solar Harvesting System -->
                <div class="portfolio-item group" data-category="iot" data-aos="fade-up" data-aos-delay="700">
                    <div class="tilt-card bento-card rounded-3xl overflow-hidden shadow-xl hover:shadow-emerald-500/15 transition-all duration-300">
                        <div class="card-glare"></div>
                        <div class="tilt-inner">
                            <div class="aspect-w-16 aspect-h-12 relative overflow-hidden bg-gray-200 dark:bg-gray-700/50">
                                <img src="assets/img/portfolio/solar-harvesting.png"
                                    alt="AI Intelligent Dual Axis Autonomous Solar Harvesting System"
                                    class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-700 filter blur-md opacity-0" loading="lazy" decoding="async" width="400"
                                    height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-950/80 via-transparent to-transparent"></div>
                                <div class="absolute bottom-4 left-4 right-4 text-white">
                                    <span class="text-xs uppercase tracking-wider text-emerald-300 font-bold">Autonomous Hardware</span>
                                    <h3 class="text-xl font-bold leading-snug">AI Dual-Axis Solar Tracker</h3>
                                </div>
                            </div>
                            <div class="p-6 space-y-4">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2.5 py-1 bg-indigo-50 dark:bg-indigo-950/60 text-indigo-600 dark:text-indigo-300 text-xs font-semibold rounded-full border border-indigo-200 dark:border-indigo-800/40">AI Vision</span>
                                    <span class="px-2.5 py-1 bg-green-50 dark:bg-green-950/60 text-green-600 dark:text-green-300 text-xs font-semibold rounded-full border border-green-200 dark:border-green-800/40">Computer Vision</span>
                                    <span class="px-2.5 py-1 bg-blue-50 dark:bg-blue-950/60 text-blue-600 dark:text-blue-300 text-xs font-semibold rounded-full border border-blue-200 dark:border-blue-800/40">Dual Servos</span>
                                </div>
                                <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">AI-driven dual-axis solar harvesting system that autonomously aligns photovoltaic cells with maximum solar irradiance.</p>
                                <div>
                                    <button onclick="openProjectModal('solar-1')"
                                        class="btn-shimmer px-5 py-2.5 bg-gradient-to-r from-green-600 to-emerald-600 text-white text-xs font-bold uppercase tracking-wider rounded-xl hover:shadow-lg shadow-green-500/25 transform hover:scale-105 transition-all duration-300">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
