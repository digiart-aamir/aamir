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
                    <div
                        class="relative overflow-hidden rounded-2xl shadow-lg hover-lift card-hover bg-white dark:bg-gray-800">
                        <div class="aspect-w-16 aspect-h-12 relative bg-gray-200 dark:bg-gray-700/50 animate-pulse">
                            <img src="assets/img/portfolio/ml-1.png" alt="Laptop Price Prediction"
                                class="w-full h-64 object-cover transition-all duration-700 filter blur-md opacity-0" loading="lazy" decoding="async" width="400"
                                height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h3 class="text-xl font-bold mb-1">Laptop Price Prediction</h3>
                                <p class="text-sm opacity-90">Machine Learning (Regression)</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs font-semibold rounded-full">Python</span>
                                <span
                                    class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs font-semibold rounded-full">Scikit-Learn</span>
                                <span
                                    class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 text-xs font-semibold rounded-full">Pandas</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">Analyze different properties of laptops and
                                predict prices based on various parameters using machine learning regression models.</p>
                            <div class="flex gap-3">
                                <button onclick="openProjectModal('ml-1')"
                                    class="px-4 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-sm font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- WhatsApp Chat Analysis -->
                <div class="portfolio-item group" data-category="data" data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="relative overflow-hidden rounded-2xl shadow-lg hover-lift card-hover bg-white dark:bg-gray-800">
                        <div class="aspect-w-16 aspect-h-12 relative bg-gray-200 dark:bg-gray-700/50 animate-pulse">
                            <img src="assets/img/portfolio/data-1.png" alt="WhatsApp Chat Analysis"
                                class="w-full h-64 object-cover transition-all duration-700 filter blur-md opacity-0" loading="lazy" decoding="async" width="400"
                                height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h3 class="text-xl font-bold mb-1">WhatsApp Chat Analysis</h3>
                                <p class="text-sm opacity-90">Data Analysis</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs font-semibold rounded-full">Python</span>
                                <span
                                    class="px-3 py-1 bg-teal-100 dark:bg-teal-900 text-teal-800 dark:text-teal-200 text-xs font-semibold rounded-full">Regex</span>
                                <span
                                    class="px-3 py-1 bg-cyan-100 dark:bg-cyan-900 text-cyan-800 dark:text-cyan-200 text-xs font-semibold rounded-full">Matplotlib</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">Use analysis tools for WhatsApp chat files
                                to understand insights including user activity, message patterns, and trends.</p>
                            <div class="flex gap-3">
                                <button onclick="openProjectModal('data-1')"
                                    class="px-4 py-2 bg-gradient-to-r from-green-600 to-teal-600 text-white text-sm font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Personal Portfolio Website -->
                <div class="portfolio-item group" data-category="web" data-aos="fade-up" data-aos-delay="400">
                    <div
                        class="relative overflow-hidden rounded-2xl shadow-lg hover-lift card-hover bg-white dark:bg-gray-800">
                        <div class="aspect-w-16 aspect-h-12 relative bg-gray-200 dark:bg-gray-700/50 animate-pulse">
                            <img src="assets/img/portfolio/web-1.png" alt="Personal Portfolio Website"
                                class="w-full h-64 object-cover transition-all duration-700 filter blur-md opacity-0" loading="lazy" decoding="async" width="400"
                                height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h3 class="text-xl font-bold mb-1">Personal Portfolio Website</h3>
                                <p class="text-sm opacity-90">Web Development</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 text-xs font-semibold rounded-full">HTML5</span>
                                <span
                                    class="px-3 py-1 bg-pink-100 dark:bg-pink-900 text-pink-800 dark:text-pink-200 text-xs font-semibold rounded-full">CSS3</span>
                                <span
                                    class="px-3 py-1 bg-rose-100 dark:bg-rose-900 text-rose-800 dark:text-rose-200 text-xs font-semibold rounded-full">JavaScript</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">Professional portfolio website with modern
                                design, responsive layout, and optimized performance for showcasing projects and skills.
                            </p>
                            <div class="flex gap-3">
                                <button onclick="openProjectModal('web-1')"
                                    class="px-4 py-2 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-sm font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Graphics Design Portfolio -->
                <div class="portfolio-item group" data-category="graphics" data-aos="fade-up" data-aos-delay="500">
                    <div
                        class="relative overflow-hidden rounded-2xl shadow-lg hover-lift card-hover bg-white dark:bg-gray-800">
                        <div class="aspect-w-16 aspect-h-12 relative bg-gray-200 dark:bg-gray-700/50 animate-pulse">
                            <img src="assets/img/portfolio/graphics-1.png" alt="Graphics Design Portfolio"
                                class="w-full h-64 object-cover transition-all duration-700 filter blur-md opacity-0" loading="lazy" decoding="async" width="400"
                                height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h3 class="text-xl font-bold mb-1">Graphics Design Portfolio</h3>
                                <p class="text-sm opacity-90">Graphic Design</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 text-xs font-semibold rounded-full">Canva</span>
                                <span
                                    class="px-3 py-1 bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 text-xs font-semibold rounded-full">Photoshop</span>
                                <span
                                    class="px-3 py-1 bg-rose-100 dark:bg-rose-900 text-rose-800 dark:text-rose-200 text-xs font-semibold rounded-full">UI/UX</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">Comprehensive collection of graphic design
                                work including social media designs, UI/UX mockups, and brand materials.</p>
                            <div class="flex gap-3">
                                <button onclick="openProjectModal('graphics-1')"
                                    class="px-4 py-2 bg-gradient-to-r from-orange-600 to-red-600 text-white text-sm font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Handwritten Digit Recognition -->
                <div class="portfolio-item group" data-category="ml" data-aos="fade-up" data-aos-delay="600">
                    <div
                        class="relative overflow-hidden rounded-2xl shadow-lg hover-lift card-hover bg-white dark:bg-gray-800">
                        <div class="aspect-w-16 aspect-h-12 relative bg-gray-200 dark:bg-gray-700/50 animate-pulse">
                            <img src="assets/img/portfolio/ml-2.png" alt="Handwritten Digit Recognition"
                                class="w-full h-64 object-cover transition-all duration-700 filter blur-md opacity-0" loading="lazy" decoding="async" width="400"
                                height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h3 class="text-xl font-bold mb-1">Handwritten Digit Recognition</h3>
                                <p class="text-sm opacity-90">Machine Learning (Deep Learning)</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs font-semibold rounded-full">TensorFlow</span>
                                <span
                                    class="px-3 py-1 bg-cyan-100 dark:bg-cyan-900 text-cyan-800 dark:text-cyan-200 text-xs font-semibold rounded-full">Keras</span>
                                <span
                                    class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs font-semibold rounded-full">CNN</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">Deep learning model using CNN to accurately
                                recognize handwritten digits from images with high accuracy.</p>
                            <div class="flex gap-3">
                                <button onclick="openProjectModal('ml-2')"
                                    class="px-4 py-2 bg-gradient-to-r from-cyan-600 to-blue-600 text-white text-sm font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Email Spam Detector -->
                <div class="portfolio-item group" data-category="ml" data-aos="fade-up" data-aos-delay="700">
                    <div
                        class="relative overflow-hidden rounded-2xl shadow-lg hover-lift card-hover bg-white dark:bg-gray-800">
                        <div class="aspect-w-16 aspect-h-12 relative bg-gray-200 dark:bg-gray-700/50 animate-pulse">
                            <img src="assets/img/portfolio/ml-3.png" alt="Email Spam Detector"
                                class="w-full h-64 object-cover transition-all duration-700 filter blur-md opacity-0" loading="lazy" decoding="async" width="400"
                                height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h3 class="text-xl font-bold mb-1">Email Spam Detector</h3>
                                <p class="text-sm opacity-90">Machine Learning (NLP)</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs font-semibold rounded-full">Python</span>
                                <span
                                    class="px-3 py-1 bg-emerald-100 dark:bg-emerald-900 text-emerald-800 dark:text-emerald-200 text-xs font-semibold rounded-full">NLP</span>
                                <span
                                    class="px-3 py-1 bg-teal-100 dark:bg-teal-900 text-teal-800 dark:text-teal-200 text-xs font-semibold rounded-full">Classification</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">Machine learning model to detect spam
                                emails using natural language processing techniques with high accuracy.</p>
                            <div class="flex gap-3">
                                <button onclick="openProjectModal('ml-3')"
                                    class="px-4 py-2 bg-gradient-to-r from-green-600 to-emerald-600 text-white text-sm font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ESP32 Waiter-Less Hotel System -->
                <div class="portfolio-item group" data-category="iot" data-aos="fade-up" data-aos-delay="600">
                    <div
                        class="relative overflow-hidden rounded-2xl shadow-lg hover-lift card-hover bg-white dark:bg-gray-800">
                        <div class="aspect-w-16 aspect-h-12 relative bg-gray-200 dark:bg-gray-700/50 animate-pulse">
                            <img src="assets/img/portfolio/iot-hotel-system.png"
                                alt="ESP32 Waiter-Less Hotel System" class="w-full h-64 object-cover transition-all duration-700 filter blur-md opacity-0" loading="lazy"
                                decoding="async" width="400" height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h3 class="text-xl font-bold mb-1">ESP32 Waiter-Less Hotel System</h3>
                                <p class="text-sm opacity-90">IoT &amp; Robotics</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs font-semibold rounded-full">ESP32</span>
                                <span
                                    class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs font-semibold rounded-full">ESP-NOW</span>
                                <span
                                    class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs font-semibold rounded-full">OLED
                                    / LCD</span>
                                <span
                                    class="px-3 py-1 bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 text-xs font-semibold rounded-full">4×4
                                    Keypad</span>
                                <span
                                    class="px-3 py-1 bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200 text-xs font-semibold rounded-full">L298N
                                    Motor</span>
                                <span
                                    class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 text-xs font-semibold rounded-full">C++
                                    / Arduino</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">A fully autonomous, multi‑node
                                restaurant automation system using ESP‑NOW mesh communication, smart table ordering,
                                and a delivery robot.</p>
                            <div class="flex gap-3">
                                <button onclick="openProjectModal('iot-hotel-1')"
                                    class="px-4 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-sm font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AI Intelligent Dual Axis Autonomous Solar Harvesting System -->
                <div class="portfolio-item group" data-category="iot" data-aos="fade-up" data-aos-delay="700">
                    <div
                        class="relative overflow-hidden rounded-2xl shadow-lg hover-lift card-hover bg-white dark:bg-gray-800">
                        <div class="aspect-w-16 aspect-h-12 relative bg-gray-200 dark:bg-gray-700/50 animate-pulse">
                            <img src="assets/img/portfolio/solar-harvesting.png"
                                alt="AI Intelligent Dual Axis Autonomous Solar Harvesting System"
                                class="w-full h-64 object-cover transition-all duration-700 filter blur-md opacity-0" loading="lazy" decoding="async" width="400"
                                height="256" onload="this.classList.remove('blur-md', 'opacity-0'); this.parentElement.classList.remove('bg-gray-200', 'dark:bg-gray-700/50', 'animate-pulse');">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white">
                                <h3 class="text-xl font-bold mb-1">AI Intelligent Dual Axis Autonomous Solar
                                    Harvesting System</h3>
                                <p class="text-sm opacity-90">IoT &amp; Robotics</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs font-semibold rounded-full">AI</span>
                                <span
                                    class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs font-semibold rounded-full">Computer
                                    Vision</span>
                                <span
                                    class="px-3 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs font-semibold rounded-full">Motor
                                    Control</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">AI-driven dual-axis solar tracker
                                that maximizes energy harvest by autonomously aligning panels to the sun using
                                computer vision and motor control.</p>
                            <div class="flex gap-3">
                                <button onclick="openProjectModal('solar-1')"
                                    class="px-4 py-2 bg-gradient-to-r from-green-600 to-emerald-600 text-white text-sm font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">View
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
