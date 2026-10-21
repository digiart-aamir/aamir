    <!-- Loading Screen -->
    <div id="loader" class="fixed inset-0 bg-gray-950 z-50 flex items-center justify-center">
        <div class="text-center">
            <!-- Logo Animation -->
            <div class="relative mb-8">
                <div class="w-20 h-20 mx-auto relative">
                    <!-- Outer Ring -->
                    <div class="absolute inset-0 border-2 border-gray-800 rounded-full animate-spin-slow"></div>
                    <!-- Middle Ring -->
                    <div class="absolute inset-2 border-2 border-gray-700 rounded-full animate-spin-medium"></div>
                    <!-- Inner Ring -->
                    <div class="absolute inset-4 border-2 border-indigo-500 rounded-full animate-spin-fast"></div>
                    <!-- Center Logo -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <img src="assets/img/my-profile-img.png" alt="Aamir Jamil"
                            class="w-12 h-12 rounded-full object-cover border-2 border-indigo-500" loading="eager"
                            decoding="async" width="48" height="48">
                    </div>
                </div>
            </div>

            <!-- Loading Text -->
            <div class="space-y-4">
                <h1 class="text-2xl font-bold text-white font-mono">
                    Aamir Jamil
                </h1>
                <div class="flex items-center justify-center space-x-2">
                    <div class="w-2 h-2 bg-indigo-500 rounded-full animate-pulse"></div>
                    <div class="w-2 h-2 bg-indigo-500 rounded-full animate-pulse animation-delay-200"></div>
                    <div class="w-2 h-2 bg-indigo-500 rounded-full animate-pulse animation-delay-400"></div>
                </div>
                <p class="text-gray-500 text-sm font-mono uppercase tracking-wider">
                    Loading Portfolio...
                </p>
            </div>

            <!-- Progress Bar -->
            <div class="mt-8 w-64 mx-auto">
                <div class="h-1 bg-gray-800 rounded-full overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full animate-progress">
                    </div>
                </div>
            </div>
        </div>
    </div>
