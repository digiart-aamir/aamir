    <!-- Hero Section -->
    <section id="home"
        class="min-h-screen lg:h-screen lg:min-h-0 flex items-center justify-center relative overflow-hidden pt-20 lg:pt-24 pb-8">
        <!-- Animated Background -->
        <div
            class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-indigo-900">
        </div>
        <!-- Neural Network Interactive Canvas -->
        <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
            <canvas id="neural-net-canvas" class="w-full h-full opacity-60 dark:opacity-40"></canvas>
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

                <!-- Left Column: Name, Title, Logos, Buttons -->
                <div class="lg:col-span-7 text-center lg:text-left space-y-6 lg:space-y-8 order-2 lg:order-1"
                    data-aos="fade-right" data-aos-duration="1000">
                    <!-- Professional Badge -->
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 bg-indigo-50/80 dark:bg-indigo-950/80 backdrop-blur-sm border border-indigo-200 dark:border-indigo-800 rounded-full text-sm font-semibold text-indigo-600 dark:text-indigo-400 mx-auto lg:mx-0">
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                        Available for Opportunities &bull; Islamabad, PK
                    </div>

                    <!-- Name and Title -->
                    <div class="space-y-4">
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-grotesk font-bold leading-tight">
                            <span
                                class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent animate-gradient">
                                Engr. Aamir Jamil
                            </span>
                        </h1>
                        <div class="text-xl sm:text-2xl lg:text-3xl font-semibold text-gray-700 dark:text-gray-300">
                            <span id="typed-text"></span>
                            <span class="animate-pulse">|</span>
                        </div>
                        <p
                            class="text-base sm:text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                            Computer System Engineer, leading AI Developer &amp; Computer Trainer based in Islamabad, Pakistan.
                            Specializing in Computer Vision (YOLOv8, MediaPipe), Embedded Robotics &amp; IoT, and Enterprise Web Platforms.
                        </p>
                    </div>

                    <!-- Professional Logos -->
                    <div class="flex justify-center lg:justify-start items-center gap-4">
                        <a href="https://www.linkedin.com/in/engr-aamir-jamil-460b20262/" target="_blank"
                            rel="noopener noreferrer"
                            class="w-10 h-10 bg-white dark:bg-gray-800 rounded-lg flex items-center justify-center shadow-md hover:shadow-lg transform hover:scale-110 transition-all duration-300 text-[#0077b5]"
                            title="LinkedIn">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/@engr-aamir" target="_blank" rel="noopener noreferrer"
                            class="w-10 h-10 bg-white dark:bg-gray-800 rounded-lg flex items-center justify-center shadow-md hover:shadow-lg transform hover:scale-110 transition-all duration-300 text-[#ff0000]"
                            title="YouTube">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        <a href="https://github.com/digiart-aamir" target="_blank" rel="noopener noreferrer"
                            class="w-10 h-10 bg-white dark:bg-gray-800 rounded-lg flex items-center justify-center shadow-md hover:shadow-lg transform hover:scale-110 transition-all duration-300 text-gray-900 dark:text-gray-100"
                            title="GitHub">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                            </svg>
                        </a>
                        <a href="https://www.kaggle.com/engraamirjamil" target="_blank" rel="noopener noreferrer"
                            class="w-10 h-10 bg-white dark:bg-gray-800 rounded-lg flex items-center justify-center shadow-md hover:shadow-lg transform hover:scale-110 transition-all duration-300 text-[#20BEFF]"
                            title="Kaggle Profile & Datasets">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18.825 23.859c-.022.092-.117.141-.281.141h-3.139c-.187 0-.351-.082-.492-.248l-5.178-6.589-1.448 1.374v5.111c0 .235-.117.352-.351.352H5.505c-.236 0-.354-.117-.354-.352V.353c0-.233.118-.353.354-.353h2.431c.234 0 .351.12.351.353v14.343l6.203-6.272c.165-.165.328-.246.494-.246h3.232c.141 0 .225.047.258.143.047.094.025.188-.07.281l-6.883 6.637 7.049 8.358c.094.094.117.188.07.281z" />
                            </svg>
                        </a>
                        <a href="https://asbots.com" target="_blank" rel="noopener noreferrer"
                            class="w-10 h-10 bg-white dark:bg-gray-800 rounded-lg flex items-center justify-center shadow-md hover:shadow-lg transform hover:scale-110 transition-all duration-300 text-teal-600 dark:text-teal-400"
                            title="Website">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.53c-.26-.81-1-1.4-1.9-1.4h-1v-3c0-.55-.45-1-1-1h-6v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                            </svg>
                        </a>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#contact"
                            class="magnetic-btn btn-shimmer px-7 py-3.5 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white font-semibold rounded-full shadow-lg shadow-indigo-500/25 hover:shadow-indigo-500/40 transform hover:scale-105 transition-all duration-300 text-center flex items-center justify-center gap-2">
                            <span>Get In Touch</span>
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <a href="#portfolio"
                            class="magnetic-btn px-7 py-3.5 bg-white/80 dark:bg-gray-800/80 backdrop-blur-md text-indigo-600 dark:text-indigo-400 font-semibold rounded-full border border-indigo-200 dark:border-indigo-800 hover:border-indigo-500 hover:shadow-lg transform hover:scale-105 transition-all duration-300 text-center">
                            View Portfolio
                        </a>
                    </div>
                </div>

                <!-- Right Column: Profile Image, Floating 3D Badges, Stats -->
                <div class="lg:col-span-5 flex flex-col items-center justify-center space-y-8 order-1 lg:order-2"
                    data-aos="fade-left" data-aos-duration="1000">

                    <!-- Profile Image with Holographic Halo & Floating 3D Objects -->
                    <div class="relative flex items-center justify-center p-4">
                        <!-- Hologram Rings -->
                        <div class="hologram-ring"></div>
                        <div class="hologram-ring-outer hidden sm:block"></div>

                        <!-- Main Profile Avatar -->
                        <div class="relative z-10 w-40 h-40 sm:w-48 sm:h-48 rounded-full bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 p-1.5 shadow-2xl">
                            <img src="assets/img/hero%20section.png" alt="Aamir Jamil"
                                class="w-full h-full rounded-full object-cover border-4 border-white dark:border-gray-900"
                                loading="eager" decoding="async" width="192" height="192">
                        </div>

                        <!-- Online Status Badge -->
                        <div
                            class="absolute bottom-4 right-4 z-20 w-8 h-8 bg-green-500 rounded-full border-4 border-white dark:border-gray-900 shadow-md flex items-center justify-center">
                            <span class="w-2.5 h-2.5 rounded-full bg-white animate-ping"></span>
                        </div>

                        <!-- Floating 3D Tech Badge 1: AI & Python (Top Left) -->
                        <div class="absolute -top-3 -left-6 z-20 animate-float-badge-1 tech-badge-glass rounded-2xl px-3.5 py-1.5 flex items-center gap-2 cursor-pointer">
                            <span class="text-lg">🤖</span>
                            <div class="text-left">
                                <p class="text-[10px] font-bold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">AI / ML</p>
                                <p class="text-xs font-semibold text-gray-800 dark:text-gray-200">Python & PyTorch</p>
                            </div>
                        </div>

                        <!-- Floating 3D Tech Badge 2: Robotics & IoT (Top Right) -->
                        <div class="absolute -top-2 -right-8 z-20 animate-float-badge-2 tech-badge-glass rounded-2xl px-3.5 py-1.5 flex items-center gap-2 cursor-pointer">
                            <span class="text-lg">⚡</span>
                            <div class="text-left">
                                <p class="text-[10px] font-bold uppercase tracking-wider text-emerald-600 dark:text-emerald-400">Hardware</p>
                                <p class="text-xs font-semibold text-gray-800 dark:text-gray-200">IoT & Robotics</p>
                            </div>
                        </div>

                        <!-- Floating 3D Tech Badge 3: Web Systems (Bottom Left) -->
                        <div class="absolute -bottom-4 -left-8 z-20 animate-float-badge-3 tech-badge-glass rounded-2xl px-3.5 py-1.5 flex items-center gap-2 cursor-pointer hidden sm:flex">
                            <span class="text-lg">💻</span>
                            <div class="text-left">
                                <p class="text-[10px] font-bold uppercase tracking-wider text-cyan-600 dark:text-cyan-400">Full-Stack</p>
                                <p class="text-xs font-semibold text-gray-800 dark:text-gray-200">Web & Systems</p>
                            </div>
                        </div>
                    </div>

                    <!-- 3D Tilt Stats Grid (2x2) with Animated Counters -->
                    <div class="grid grid-cols-2 gap-4 w-full max-w-sm">
                        <!-- Stat 1: Projects -->
                        <div class="tilt-card bento-card rounded-2xl p-4 text-center cursor-default group overflow-hidden">
                            <div class="card-glare"></div>
                            <div class="tilt-inner">
                                <div class="text-2xl sm:text-3xl font-extrabold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent stat-counter"
                                    data-target="15" data-suffix="+">
                                    0+
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400 font-semibold uppercase tracking-wider mt-1">
                                    Projects Completed
                                </div>
                            </div>
                        </div>

                        <!-- Stat 2: Students -->
                        <div class="tilt-card bento-card rounded-2xl p-4 text-center cursor-default group overflow-hidden">
                            <div class="card-glare"></div>
                            <div class="tilt-inner">
                                <div class="text-2xl sm:text-3xl font-extrabold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent stat-counter"
                                    data-target="500" data-suffix="+">
                                    0+
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400 font-semibold uppercase tracking-wider mt-1">
                                    Students Mentored
                                </div>
                            </div>
                        </div>

                        <!-- Stat 3: Years -->
                        <div class="tilt-card bento-card rounded-2xl p-4 text-center cursor-default group overflow-hidden">
                            <div class="card-glare"></div>
                            <div class="tilt-inner">
                                <div class="text-2xl sm:text-3xl font-extrabold bg-gradient-to-r from-pink-600 to-rose-500 bg-clip-text text-transparent stat-counter"
                                    data-target="4" data-suffix="+">
                                    0+
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400 font-semibold uppercase tracking-wider mt-1">
                                    Years Experience
                                </div>
                            </div>
                        </div>

                        <!-- Stat 4: Certificates -->
                        <div class="tilt-card bento-card rounded-2xl p-4 text-center cursor-default group overflow-hidden">
                            <div class="card-glare"></div>
                            <div class="tilt-inner">
                                <div class="text-2xl sm:text-3xl font-extrabold bg-gradient-to-r from-emerald-500 to-teal-600 bg-clip-text text-transparent stat-counter"
                                    data-target="10" data-suffix="+">
                                    0+
                                </div>
                                <div class="text-xs text-gray-500 dark:text-gray-400 font-semibold uppercase tracking-wider mt-1">
                                    Certifications
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
