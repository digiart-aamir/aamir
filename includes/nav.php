<!-- Scroll Progress Bar -->
<div id="scroll-progress-bar"></div>

<!-- Navigation -->
<nav class="fixed top-0 left-0 right-0 z-40 bg-white/80 dark:bg-gray-900/80 backdrop-blur-lg border-b border-gray-200 dark:border-gray-700 transition-all duration-300"
    x-data="{ scrolled: false }" @scroll.window="scrolled = window.pageYOffset > 50"
    :class="{ 'py-4': !scrolled, 'py-2 shadow-lg': scrolled }">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <img src="assets/img/navbar.png" alt="Aamir Jamil"
                    class="w-10 h-10 rounded-full object-cover border-2 border-indigo-500" loading="lazy"
                    decoding="async" width="40" height="40">
                <span
                    class="font-grotesk text-xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                    Aamir Jamil
                </span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#home"
                    class="nav-link text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors font-medium">Home</a>
                <a href="#about"
                    class="nav-link text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors font-medium">About</a>
                <a href="#skills"
                    class="nav-link text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors font-medium">Skills</a>
                <a href="#portfolio"
                    class="nav-link text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors font-medium">Portfolio</a>
                <a href="#kaggle"
                    class="nav-link text-gray-700 dark:text-gray-300 hover:text-cyan-600 dark:hover:text-cyan-400 transition-colors font-medium flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 fill-current text-[#20BEFF]" viewBox="0 0 24 24">
                        <path d="M18.825 23.859c-.022.092-.117.141-.281.141h-3.139c-.187 0-.351-.082-.492-.248l-5.178-6.589-1.448 1.374v5.111c0 .235-.117.352-.351.352H5.505c-.236 0-.354-.117-.354-.352V.353c0-.233.118-.353.354-.353h2.431c.234 0 .351.12.351.353v14.343l6.203-6.272c.165-.165.328-.246.494-.246h3.232c.141 0 .225.047.258.143.047.094.025.188-.07.281l-6.883 6.637 7.049 8.358c.094.094.117.188.07.281z" />
                    </svg>
                    <span>Kaggle</span>
                </a>
                <a href="#dev-hub"
                    class="nav-link text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors font-medium flex items-center gap-1.5">
                    <span>Dev Hub</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                </a>
                <a href="#specializations"
                    class="nav-link text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors font-medium">Specializations</a>
                <a href="#services"
                    class="nav-link text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors font-medium">Services</a>
                <a href="#contact"
                    class="nav-link text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors font-medium">Contact</a>
                <button @click="$store.darkMode = !$store.darkMode"
                    class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                    <svg x-show="!$store.darkMode" class="w-5 h-5 text-yellow-500" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg x-show="$store.darkMode" class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="$store.menuOpen = !$store.menuOpen"
                class="md:hidden p-2 rounded-lg bg-gray-100 dark:bg-gray-800">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!$store.menuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                    <path x-show="$store.menuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="$store.menuOpen" x-transition
            class="md:hidden mt-4 pb-4 border-t border-gray-200 dark:border-gray-700">
            <div class="flex flex-col space-y-3 mt-4">
                <a href="#home"
                    class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium">Home</a>
                <a href="#about"
                    class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium">About</a>
                <a href="#skills"
                    class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium">Skills</a>
                <a href="#portfolio"
                    class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium">Portfolio</a>
                <a href="#kaggle"
                    class="text-gray-700 dark:text-gray-300 hover:text-cyan-600 dark:hover:text-cyan-400 font-medium flex items-center gap-2">
                    <svg class="w-4 h-4 fill-current text-[#20BEFF]" viewBox="0 0 24 24">
                        <path d="M18.825 23.859c-.022.092-.117.141-.281.141h-3.139c-.187 0-.351-.082-.492-.248l-5.178-6.589-1.448 1.374v5.111c0 .235-.117.352-.351.352H5.505c-.236 0-.354-.117-.354-.352V.353c0-.233.118-.353.354-.353h2.431c.234 0 .351.12.351.353v14.343l6.203-6.272c.165-.165.328-.246.494-.246h3.232c.141 0 .225.047.258.143.047.094.025.188-.07.281l-6.883 6.637 7.049 8.358c.094.094.117.188.07.281z" />
                    </svg>
                    <span>Kaggle Datasets</span>
                </a>
                <a href="#dev-hub"
                    class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium flex items-center gap-2">
                    <span>Dev Hub (GitHub &amp; LinkedIn)</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                </a>
                <a href="#specializations"
                    class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium">Specializations</a>
                <a href="#iot-robotics"
                    class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium">IoT
                    & Robotics</a>
                <a href="#services"
                    class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium">Services</a>
                <a href="#contact"
                    class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium">Contact</a>
            </div>
        </div>
    </div>
</nav>