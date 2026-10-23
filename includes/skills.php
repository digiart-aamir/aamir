<!-- Skills Section: Modern Bento Grid with Brand SVGs & Proficiency Badges -->
<section id="skills" class="py-16 sm:py-20 bg-gray-50 dark:bg-gray-900 relative overflow-hidden transition-colors duration-300"
    x-data="{ activeTab: 'all' }">
    <!-- Ambient Gradient Glow Orbs -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-purple-500/10 dark:bg-purple-600/15 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-indigo-500/10 dark:bg-indigo-600/15 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-blue-500/5 dark:bg-blue-600/10 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-6" data-aos="fade-up">
            <div>
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-purple-100/70 dark:bg-purple-950/70 text-purple-700 dark:text-purple-300 text-xs font-semibold mb-3 border border-purple-200/60 dark:border-purple-800/50 shadow-sm backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-purple-500 animate-pulse"></span>
                    <span>Technical Arsenal &amp; Capabilities</span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-grotesk font-extrabold text-gray-900 dark:text-white tracking-tight">
                    Skills <span class="bg-gradient-to-r from-purple-600 via-indigo-600 to-pink-500 bg-clip-text text-transparent">Matrix</span>
                </h2>
                <p class="text-sm sm:text-base text-gray-600 dark:text-gray-300 mt-2 max-w-xl leading-relaxed">
                    Production-grade frameworks, microcontrollers, autonomous AI agent pipelines, and cloud architectures backed by 4+ years of engineering experience.
                </p>
            </div>

            <!-- Interactive Filter Tabs -->
            <div class="flex flex-wrap items-center gap-1.5 p-1.5 rounded-2xl bg-white/80 dark:bg-gray-800/80 border border-gray-200/70 dark:border-gray-700/70 backdrop-blur-md shadow-sm self-start md:self-end">
                <button @click="activeTab = 'all'"
                    :class="activeTab === 'all' ? 'bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-md shadow-purple-500/25 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 font-medium'"
                    class="px-3.5 py-2 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-2">
                    <span>⚡</span> <span>All Matrix</span>
                </button>
                <button @click="activeTab = 'ai'"
                    :class="activeTab === 'ai' ? 'bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-md shadow-purple-500/25 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 font-medium'"
                    class="px-3.5 py-2 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-2">
                    <span>🧠</span> <span>AI &amp; ML</span>
                </button>
                <button @click="activeTab = 'robotics'"
                    :class="activeTab === 'robotics' ? 'bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-md shadow-purple-500/25 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 font-medium'"
                    class="px-3.5 py-2 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-2">
                    <span>🤖</span> <span>IoT &amp; Robotics</span>
                </button>
                <button @click="activeTab = 'web'"
                    :class="activeTab === 'web' ? 'bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-md shadow-purple-500/25 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 font-medium'"
                    class="px-3.5 py-2 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-2">
                    <span>💻</span> <span>Web &amp; Software</span>
                </button>
                <button @click="activeTab = 'devops'"
                    :class="activeTab === 'devops' ? 'bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-md shadow-purple-500/25 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 font-medium'"
                    class="px-3.5 py-2 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-2">
                    <span>🛠️</span> <span>DevOps &amp; Tools</span>
                </button>
            </div>
        </div>

        <!-- =================================================================== -->
        <!-- VIEW 1: 'All Matrix' Modern Bento Grid with Tech Brand Badges       -->
        <!-- =================================================================== -->
        <div x-show="activeTab === 'all'" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- ------------------------------------------------------------- -->
            <!-- CARD 1: AI, RAG & Agents (Purple Accent)                       -->
            <!-- ------------------------------------------------------------- -->
            <div class="bento-card relative rounded-3xl p-5 sm:p-6 bg-white/85 dark:bg-gray-800/85 backdrop-blur-xl border border-gray-200/80 dark:border-gray-700/70 shadow-lg hover:shadow-2xl hover:border-purple-400/50 dark:hover:border-purple-500/50 transition-all duration-300 group flex flex-col justify-between overflow-hidden">
                <div class="relative z-10 flex flex-col h-full">
                    <!-- Card Top Header -->
                    <div class="flex items-center justify-between mb-5">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center text-white shadow-md shadow-purple-500/25 group-hover:scale-110 group-hover:rotate-3 transition-transform">
                                <span class="text-xl">🧠</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 dark:text-white text-base sm:text-lg font-grotesk leading-tight">AI, RAG &amp; Agents</h3>
                                <div class="flex items-center gap-1.5 mt-0.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-purple-500 animate-pulse"></span>
                                    <span class="text-[11px] text-purple-600 dark:text-purple-400 font-semibold">Production Ready</span>
                                </div>
                            </div>
                        </div>
                        <span class="text-[10px] font-mono font-bold px-2 py-0.5 rounded-lg bg-purple-50 dark:bg-purple-900/40 text-purple-700 dark:text-purple-300 border border-purple-200/60 dark:border-purple-700/50">
                            6 Techs
                        </span>
                    </div>

                    <!-- Tech Badge Rows (Replacing Progress Bars) -->
                    <div class="space-y-2.5 my-auto">
                        <!-- 1. AI Agents & LangChain -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-purple-300 dark:hover:border-purple-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-purple-50 dark:bg-purple-950/60 border border-purple-100 dark:border-purple-800/40 flex items-center justify-center shrink-0">
                                    <!-- LangChain / Agent Brain SVG -->
                                    <svg class="w-4 h-4 text-purple-600 dark:text-purple-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-purple-600 dark:group-hover/item:text-purple-400 transition-colors">AI Multi-Agents</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">CrewAI &amp; LangGraph</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-purple-100/80 dark:bg-purple-900/60 text-purple-700 dark:text-purple-300 border border-purple-200/50">Production</span>
                        </div>

                        <!-- 2. RAG & Vector Pipelines -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-purple-300 dark:hover:border-purple-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-pink-50 dark:bg-pink-950/60 border border-pink-100 dark:border-pink-800/40 flex items-center justify-center shrink-0">
                                    <!-- Vector DB Stack SVG -->
                                    <svg class="w-4 h-4 text-pink-600 dark:text-pink-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-pink-600 dark:group-hover/item:text-pink-400 transition-colors">RAG Architecture</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">Vector DBs &amp; Embeddings</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-pink-100/80 dark:bg-pink-900/60 text-pink-700 dark:text-pink-300 border border-pink-200/50">Expert</span>
                        </div>

                        <!-- 3. Python Core -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-purple-300 dark:hover:border-purple-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 dark:bg-blue-950/60 border border-blue-100 dark:border-blue-800/40 flex items-center justify-center shrink-0">
                                    <!-- Official Python SVG -->
                                    <svg class="w-4 h-4" viewBox="0 0 128 128">
                                        <path fill="#387EB8" d="M63.39 2.5c-30.82 0-28.89 13.37-28.89 13.37l.03 13.84h29.41v4.18H20.47S2.5 31.84 2.5 63.61c0 31.78 15.68 30.68 15.68 30.68h9.35v-13.1c0-14.88 12.82-14.51 12.82-14.51h29.13s12.28.19 12.28-12.09V14.77S83.85 2.5 63.39 2.5zM48.83 11.53c2.72 0 4.92 2.2 4.92 4.92s-2.2 4.92-4.92 4.92-4.92-2.2-4.92-4.92 2.2-4.92 4.92-4.92z"/>
                                        <path fill="#FFE052" d="M64.61 125.5c30.82 0 28.89-13.37 28.89-13.37l-.03-13.84H64.06v-4.18h43.47s17.97 2.05 17.97-29.72c0-31.78-15.68-30.68-15.68-30.68h-9.35v13.1c0 14.88-12.82 14.51-12.82 14.51H38.5s-12.28-.19-12.28 12.09v19.82s-2.09 12.27 18.39 12.27zm14.56-9.03c-2.72 0-4.92-2.2-4.92-4.92s2.2-4.92 4.92-4.92 4.92 2.2 4.92 4.92-2.2 4.92-4.92 4.92z"/>
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-blue-600 dark:group-hover/item:text-blue-400 transition-colors">Python &amp; ML</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">NumPy, Scikit &amp; OOP</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-blue-100/80 dark:bg-blue-900/60 text-blue-700 dark:text-blue-300 border border-blue-200/50">Mastery</span>
                        </div>

                        <!-- 4. PyTorch Deep Learning -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-purple-300 dark:hover:border-purple-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-orange-50 dark:bg-orange-950/60 border border-orange-100 dark:border-orange-800/40 flex items-center justify-center shrink-0">
                                    <!-- Official PyTorch Flame SVG -->
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none">
                                        <path d="M13.2 2.3a.6.6 0 0 0-.8.1l-1.3 1.6a.6.6 0 0 0 .1.8 7.3 7.3 0 0 1 2.3 5.3 7.4 7.4 0 0 1-7.4 7.4 7.4 7.4 0 0 1-5.2-2.2.6.6 0 0 0-.8.1L.3 16.7a.6.6 0 0 0 .1.8A9.7 9.7 0 0 0 6.1 20a9.8 9.8 0 0 0 9.8-9.8c0-3-1.4-5.8-3.7-7.9z" fill="#EE4C2C"/>
                                        <circle cx="15.8" cy="4.2" r="1.4" fill="#EE4C2C"/>
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-orange-600 dark:group-hover/item:text-orange-400 transition-colors">PyTorch &amp; NN</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">Deep Neural Networks</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-purple-100/80 dark:bg-purple-900/60 text-purple-700 dark:text-purple-300 border border-purple-200/50">Expert</span>
                        </div>

                        <!-- 5. LLM APIs & FastAPI -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-purple-300 dark:hover:border-purple-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 dark:bg-emerald-950/60 border border-emerald-100 dark:border-emerald-800/40 flex items-center justify-center shrink-0">
                                    <!-- FastAPI Teal Logo SVG -->
                                    <svg class="w-4 h-4 text-emerald-600 dark:text-emerald-400" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm-.905 18.286v-5.428H8.381l4.524-7.143v5.428h2.714l-4.524 7.143z"/>
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-emerald-600 dark:group-hover/item:text-emerald-400 transition-colors">LLMs &amp; FastAPI</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">OpenAI, Claude, Tool-Use</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100/80 dark:bg-emerald-900/60 text-emerald-700 dark:text-emerald-300 border border-emerald-200/50">Production</span>
                        </div>

                        <!-- 6. Computer Vision -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-purple-300 dark:hover:border-purple-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 dark:bg-indigo-950/60 border border-indigo-100 dark:border-indigo-800/40 flex items-center justify-center shrink-0">
                                    <!-- OpenCV / Vision Eye SVG -->
                                    <svg class="w-4 h-4 text-indigo-600 dark:text-indigo-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-indigo-600 dark:group-hover/item:text-indigo-400 transition-colors">Computer Vision</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">YOLOv8 &amp; MediaPipe</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-indigo-100/80 dark:bg-indigo-900/60 text-indigo-700 dark:text-indigo-300 border border-indigo-200/50">Advanced</span>
                        </div>
                    </div>

                    <!-- Micro Tech Pills -->
                    <div class="flex flex-wrap gap-1.5 pt-4 mt-4 border-t border-gray-100 dark:border-gray-700/60">
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-purple-50 dark:bg-purple-950/60 text-purple-700 dark:text-purple-300">LangChain</span>
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-purple-50 dark:bg-purple-950/60 text-purple-700 dark:text-purple-300">OpenAI</span>
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-purple-50 dark:bg-purple-950/60 text-purple-700 dark:text-purple-300">ChromaDB</span>
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-purple-50 dark:bg-purple-950/60 text-purple-700 dark:text-purple-300">FastAPI</span>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-500 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>

            <!-- ------------------------------------------------------------- -->
            <!-- CARD 2: Robotics & IoT (Amber Accent)                         -->
            <!-- ------------------------------------------------------------- -->
            <div class="bento-card relative rounded-3xl p-5 sm:p-6 bg-white/85 dark:bg-gray-800/85 backdrop-blur-xl border border-gray-200/80 dark:border-gray-700/70 shadow-lg hover:shadow-2xl hover:border-amber-400/50 dark:hover:border-amber-500/50 transition-all duration-300 group flex flex-col justify-between overflow-hidden">
                <div class="relative z-10 flex flex-col h-full">
                    <!-- Card Top Header -->
                    <div class="flex items-center justify-between mb-5">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center text-white shadow-md shadow-amber-500/25 group-hover:scale-110 group-hover:rotate-3 transition-transform">
                                <span class="text-xl">🤖</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 dark:text-white text-base sm:text-lg font-grotesk leading-tight">Robotics &amp; IoT</h3>
                                <div class="flex items-center gap-1.5 mt-0.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                                    <span class="text-[11px] text-amber-600 dark:text-amber-400 font-semibold">Embedded Systems</span>
                                </div>
                            </div>
                        </div>
                        <span class="text-[10px] font-mono font-bold px-2 py-0.5 rounded-lg bg-amber-50 dark:bg-amber-900/40 text-amber-700 dark:text-amber-300 border border-amber-200/60 dark:border-amber-700/50">
                            6 Techs
                        </span>
                    </div>

                    <!-- Tech Badge Rows -->
                    <div class="space-y-2.5 my-auto">
                        <!-- 1. Arduino C++ -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-amber-300 dark:hover:border-amber-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-teal-50 dark:bg-teal-950/60 border border-teal-100 dark:border-teal-800/40 flex items-center justify-center shrink-0">
                                    <!-- Official Arduino Teal SVG -->
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="#00979D">
                                        <path d="M16.5 6C13.5 6 12 8.5 12 8.5S10.5 6 7.5 6C3.9 6 1 8.9 1 12.5C1 16.1 3.9 19 7.5 19C10.5 19 12 16.5 12 16.5S13.5 19 16.5 19C20.1 19 23 16.1 23 12.5C23 8.9 20.1 6 16.5 6ZM7.5 16.8C5.1 16.8 3.2 14.9 3.2 12.5C3.2 10.1 5.1 8.2 7.5 8.2C9.5 8.2 10.7 9.8 11.2 10.7C10.7 11.6 9.5 13.2 7.5 13.2V16.8ZM16.5 16.8C14.5 16.8 13.3 15.2 12.8 14.3C13.3 13.4 14.5 11.8 16.5 11.8C18.9 11.8 20.8 13.7 20.8 16.1C20.8 18.5 18.9 20.4 16.5 20.4V16.8Z"/>
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-teal-600 dark:group-hover/item:text-teal-400 transition-colors">Arduino IDE / C++</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">Embedded Firmware</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-teal-100/80 dark:bg-teal-900/60 text-teal-700 dark:text-teal-300 border border-teal-200/50">Firmware Pro</span>
                        </div>

                        <!-- 2. ESP32 & ESP-NOW -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-amber-300 dark:hover:border-amber-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-red-50 dark:bg-red-950/60 border border-red-100 dark:border-red-800/40 flex items-center justify-center shrink-0">
                                    <!-- Microchip / ESP32 SVG -->
                                    <svg class="w-4 h-4 text-red-600 dark:text-red-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="4" y="4" width="16" height="16" rx="2" />
                                        <rect x="9" y="9" width="6" height="6" />
                                        <path d="M9 1v3M15 1v3M9 20v3M15 20v3M20 9h3M20 14h3M1 9h3M1 14h3" />
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-red-600 dark:group-hover/item:text-red-400 transition-colors">ESP32 &amp; ESP-NOW</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">Peer-to-Peer Mesh</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100/80 dark:bg-amber-900/60 text-amber-700 dark:text-amber-300 border border-amber-200/50">Production</span>
                        </div>

                        <!-- 3. IoT Cloud & Telemetry -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-amber-300 dark:hover:border-amber-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-amber-50 dark:bg-amber-950/60 border border-amber-100 dark:border-amber-800/40 flex items-center justify-center shrink-0">
                                    <!-- Wireless / MQTT Wave SVG -->
                                    <svg class="w-4 h-4 text-amber-600 dark:text-amber-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-amber-600 dark:group-hover/item:text-amber-400 transition-colors">IoT Telemetry</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">MQTT &amp; Wi-Fi Cloud</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100/80 dark:bg-amber-900/60 text-amber-700 dark:text-amber-300 border border-amber-200/50">Expert</span>
                        </div>

                        <!-- 4. Autonomous Vehicles -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-amber-300 dark:hover:border-amber-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-orange-50 dark:bg-orange-950/60 border border-orange-100 dark:border-orange-800/40 flex items-center justify-center shrink-0">
                                    <!-- Robot Vehicle AGV SVG -->
                                    <svg class="w-4 h-4 text-orange-600 dark:text-orange-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="7" cy="17" r="2" />
                                        <circle cx="17" cy="17" r="2" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 17H3v-4l2-5h10l2 5v4h-2m-8 0h4" />
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-orange-600 dark:group-hover/item:text-orange-400 transition-colors">Autonomous Vehicles</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">Delivery Robots &amp; AGVs</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-orange-100/80 dark:bg-orange-900/60 text-orange-700 dark:text-orange-300 border border-orange-200/50">Advanced</span>
                        </div>

                        <!-- 5. Sensor & Actuator Fusion -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-amber-300 dark:hover:border-amber-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-yellow-50 dark:bg-yellow-950/60 border border-yellow-100 dark:border-yellow-800/40 flex items-center justify-center shrink-0">
                                    <!-- Electronic Sensor Pulse SVG -->
                                    <svg class="w-4 h-4 text-amber-600 dark:text-amber-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-amber-600 dark:group-hover/item:text-amber-400 transition-colors">Sensor Fusion</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">Ultrasonic, PIR, Servo</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100/80 dark:bg-amber-900/60 text-amber-700 dark:text-amber-300 border border-amber-200/50">Mastery</span>
                        </div>

                        <!-- 6. Wokwi Circuit Simulation -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-amber-300 dark:hover:border-amber-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-purple-50 dark:bg-purple-950/60 border border-purple-100 dark:border-purple-800/40 flex items-center justify-center shrink-0">
                                    <!-- Circuit Board SVG -->
                                    <svg class="w-4 h-4 text-purple-600 dark:text-purple-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M3 9h2m-2 6h2m16-6h2m-2 6h2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-purple-600 dark:group-hover/item:text-purple-400 transition-colors">Wokwi Simulator</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">Hardware Emulation</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100/80 dark:bg-amber-900/60 text-amber-700 dark:text-amber-300 border border-amber-200/50">Expert</span>
                        </div>
                    </div>

                    <!-- Micro Tech Pills -->
                    <div class="flex flex-wrap gap-1.5 pt-4 mt-4 border-t border-gray-100 dark:border-gray-700/60">
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-amber-50 dark:bg-amber-950/60 text-amber-700 dark:text-amber-300">MQTT</span>
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-amber-50 dark:bg-amber-950/60 text-amber-700 dark:text-amber-300">ESP-NOW</span>
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-amber-50 dark:bg-amber-950/60 text-amber-700 dark:text-amber-300">Wokwi</span>
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-amber-50 dark:bg-amber-950/60 text-amber-700 dark:text-amber-300">L298N</span>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-500 to-orange-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>

            <!-- ------------------------------------------------------------- -->
            <!-- CARD 3: Web & Software (Blue Accent)                          -->
            <!-- ------------------------------------------------------------- -->
            <div class="bento-card relative rounded-3xl p-5 sm:p-6 bg-white/85 dark:bg-gray-800/85 backdrop-blur-xl border border-gray-200/80 dark:border-gray-700/70 shadow-lg hover:shadow-2xl hover:border-blue-400/50 dark:hover:border-blue-500/50 transition-all duration-300 group flex flex-col justify-between overflow-hidden">
                <div class="relative z-10 flex flex-col h-full">
                    <!-- Card Top Header -->
                    <div class="flex items-center justify-between mb-5">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white shadow-md shadow-blue-500/25 group-hover:scale-110 group-hover:rotate-3 transition-transform">
                                <span class="text-xl">💻</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 dark:text-white text-base sm:text-lg font-grotesk leading-tight">Web &amp; Software</h3>
                                <div class="flex items-center gap-1.5 mt-0.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500 animate-pulse"></span>
                                    <span class="text-[11px] text-blue-600 dark:text-blue-400 font-semibold">Full-Stack Architecture</span>
                                </div>
                            </div>
                        </div>
                        <span class="text-[10px] font-mono font-bold px-2 py-0.5 rounded-lg bg-blue-50 dark:bg-blue-900/40 text-blue-700 dark:text-blue-300 border border-blue-200/60 dark:border-blue-700/50">
                            6 Techs
                        </span>
                    </div>

                    <!-- Tech Badge Rows -->
                    <div class="space-y-2.5 my-auto">
                        <!-- 1. Tailwind CSS -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-blue-300 dark:hover:border-blue-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-cyan-50 dark:bg-cyan-950/60 border border-cyan-100 dark:border-cyan-800/40 flex items-center justify-center shrink-0">
                                    <!-- Official Tailwind CSS Cyan Wave SVG -->
                                    <svg class="w-4 h-4 text-cyan-500" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z"/>
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-cyan-600 dark:group-hover/item:text-cyan-400 transition-colors">Tailwind CSS</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">Modern UI Systems</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-cyan-100/80 dark:bg-cyan-900/60 text-cyan-700 dark:text-cyan-300 border border-cyan-200/50">Mastery</span>
                        </div>

                        <!-- 2. JavaScript ES6+ -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-blue-300 dark:hover:border-blue-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-yellow-50 dark:bg-yellow-950/60 border border-yellow-100 dark:border-yellow-800/40 flex items-center justify-center shrink-0">
                                    <!-- Official JavaScript Yellow SVG -->
                                    <svg class="w-4 h-4 rounded-xs" viewBox="0 0 24 24">
                                        <rect width="24" height="24" rx="2" fill="#F7DF1E"/>
                                        <path d="M7 17.5c.8.5 1.7.7 2.6.7 1.7 0 2.8-.8 2.8-2.6v-7h-2.1v7c0 .7-.3 1.1-.9 1.1-.5 0-.9-.2-1.3-.4l-1.1 1.2zm8.4-.1c1 .6 2.2.9 3.4.9 2.5 0 3.8-1.2 3.8-2.9 0-1.6-1.1-2.4-2.8-3.1l-.8-.3c-.8-.4-1.2-.7-1.2-1.3 0-.6.5-1.1 1.4-1.1.8 0 1.5.3 2 .6l.9-1.4c-.8-.5-1.7-.8-2.8-.8-2.3 0-3.6 1.3-3.6 2.8 0 1.5 1 2.4 2.5 3l.8.3c.9.4 1.4.8 1.4 1.4 0 .7-.6 1.3-1.7 1.3-.9 0-1.8-.3-2.4-.7l-.7 1.4z" fill="#000"/>
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-yellow-600 dark:group-hover/item:text-yellow-400 transition-colors">JavaScript (ES6+)</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">DOM, Async &amp; Events</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-yellow-100/80 dark:bg-yellow-900/60 text-yellow-800 dark:text-yellow-300 border border-yellow-200/50">Core Expert</span>
                        </div>

                        <!-- 3. React -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-blue-300 dark:hover:border-blue-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 dark:bg-blue-950/60 border border-blue-100 dark:border-blue-800/40 flex items-center justify-center shrink-0">
                                    <!-- Official React Cyan Atom SVG -->
                                    <svg class="w-4 h-4" viewBox="-11.5 -10.23174 23 20.46348">
                                        <circle cx="0" cy="0" r="2.05" fill="#61dafb"/>
                                        <g stroke="#61dafb" stroke-width="1" fill="none">
                                            <ellipse rx="11" ry="4.2"/>
                                            <ellipse rx="11" ry="4.2" transform="rotate(60)"/>
                                            <ellipse rx="11" ry="4.2" transform="rotate(120)"/>
                                        </g>
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-blue-600 dark:group-hover/item:text-blue-400 transition-colors">React &amp; Node.js</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">SPA &amp; Component Trees</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-blue-100/80 dark:bg-blue-900/60 text-blue-700 dark:text-blue-300 border border-blue-200/50">Production</span>
                        </div>

                        <!-- 4. PHP & MySQL -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-blue-300 dark:hover:border-blue-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-indigo-50 dark:bg-indigo-950/60 border border-indigo-100 dark:border-indigo-800/40 flex items-center justify-center shrink-0">
                                    <!-- Official PHP Purple Shield SVG -->
                                    <svg class="w-4 h-4 text-indigo-600 dark:text-indigo-400" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm-1.8 15.6H8.4l.6-3h1.2c1.2 0 1.8.6 1.8 1.5 0 .9-.6 1.5-1.8 1.5zm-3.6 0H4.8l1.8-7.2h2.4c1.8 0 3 1.2 3 2.7 0 1.8-1.5 3-3.6 3H7.2l-.6 1.5zm11.4 0h-1.8l.6-3h1.2c1.2 0 1.8.6 1.8 1.5 0 .9-.6 1.5-1.8 1.5zm-3.6 0h-1.8l1.8-7.2h2.4c1.8 0 3 1.2 3 2.7 0 1.8-1.5 3-3.6 3h-1.8l-.6 1.5z"/>
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-indigo-600 dark:group-hover/item:text-indigo-400 transition-colors">PHP &amp; MySQL</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">Database &amp; Queries</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-indigo-100/80 dark:bg-indigo-900/60 text-indigo-700 dark:text-indigo-300 border border-indigo-200/50">Backend Pro</span>
                        </div>

                        <!-- 5. HTML5 & CSS3 -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-blue-300 dark:hover:border-blue-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-orange-50 dark:bg-orange-950/60 border border-orange-100 dark:border-orange-800/40 flex items-center justify-center shrink-0">
                                    <!-- Official HTML5 Shield Orange SVG -->
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="#E34F26">
                                        <path d="M1.5 0h21l-1.9 21.2L12 24l-8.6-2.8L1.5 0zm16.5 7.5H6.8l.3 3h10.6l-.8 8.1-4.4 1.2-4.4-1.2-.3-3.6h2.8l.2 1.8 1.7.5 1.7-.5.2-2.1H6.5L5.7 4.5h12.8l-.5 3z"/>
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-orange-600 dark:group-hover/item:text-orange-400 transition-colors">HTML5 &amp; CSS3</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">Semantic &amp; Responsive</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-orange-100/80 dark:bg-orange-900/60 text-orange-700 dark:text-orange-300 border border-orange-200/50">Mastery</span>
                        </div>

                        <!-- 6. C++ & Java OOP -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-blue-300 dark:hover:border-blue-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-sky-50 dark:bg-sky-950/60 border border-sky-100 dark:border-sky-800/40 flex items-center justify-center shrink-0">
                                    <!-- Code OOP Brackets SVG -->
                                    <svg class="w-4 h-4 text-sky-600 dark:text-sky-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-sky-600 dark:group-hover/item:text-sky-400 transition-colors">C++ &amp; Java OOP</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">System Data Structures</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-blue-100/80 dark:bg-blue-900/60 text-blue-700 dark:text-blue-300 border border-blue-200/50">Advanced</span>
                        </div>
                    </div>

                    <!-- Micro Tech Pills -->
                    <div class="flex flex-wrap gap-1.5 pt-4 mt-4 border-t border-gray-100 dark:border-gray-700/60">
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-blue-50 dark:bg-blue-950/60 text-blue-700 dark:text-blue-300">Alpine.js</span>
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-blue-50 dark:bg-blue-950/60 text-blue-700 dark:text-blue-300">REST APIs</span>
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-blue-50 dark:bg-blue-950/60 text-blue-700 dark:text-blue-300">Tailwind</span>
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-blue-50 dark:bg-blue-950/60 text-blue-700 dark:text-blue-300">Bootstrap</span>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 to-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>

            <!-- ------------------------------------------------------------- -->
            <!-- CARD 4: DevOps & STEAM (Emerald Accent)                       -->
            <!-- ------------------------------------------------------------- -->
            <div class="bento-card relative rounded-3xl p-5 sm:p-6 bg-white/85 dark:bg-gray-800/85 backdrop-blur-xl border border-gray-200/80 dark:border-gray-700/70 shadow-lg hover:shadow-2xl hover:border-emerald-400/50 dark:hover:border-emerald-500/50 transition-all duration-300 group flex flex-col justify-between overflow-hidden">
                <div class="relative z-10 flex flex-col h-full">
                    <!-- Card Top Header -->
                    <div class="flex items-center justify-between mb-5">
                        <div class="flex items-center gap-3">
                            <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center text-white shadow-md shadow-emerald-500/25 group-hover:scale-110 group-hover:rotate-3 transition-transform">
                                <span class="text-xl">🛠️</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 dark:text-white text-base sm:text-lg font-grotesk leading-tight">DevOps &amp; STEAM</h3>
                                <div class="flex items-center gap-1.5 mt-0.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                    <span class="text-[11px] text-emerald-600 dark:text-emerald-400 font-semibold">DevOps &amp; Training</span>
                                </div>
                            </div>
                        </div>
                        <span class="text-[10px] font-mono font-bold px-2 py-0.5 rounded-lg bg-emerald-50 dark:bg-emerald-900/40 text-emerald-700 dark:text-emerald-300 border border-emerald-200/60 dark:border-emerald-700/50">
                            6 Skills
                        </span>
                    </div>

                    <!-- Tech Badge Rows -->
                    <div class="space-y-2.5 my-auto">
                        <!-- 1. STEAM Mentorship -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-emerald-300 dark:hover:border-emerald-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 dark:bg-emerald-950/60 border border-emerald-100 dark:border-emerald-800/40 flex items-center justify-center shrink-0">
                                    <!-- Graduation Cap / Teaching SVG -->
                                    <svg class="w-4 h-4 text-emerald-600 dark:text-emerald-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-emerald-600 dark:group-hover/item:text-emerald-400 transition-colors">STEAM &amp; Tech Trainer</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">Robotics &amp; AI Curriculum</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100/80 dark:bg-emerald-900/60 text-emerald-700 dark:text-emerald-300 border border-emerald-200/50">500+ Mentored</span>
                        </div>

                        <!-- 2. Git & GitHub Actions -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-emerald-300 dark:hover:border-emerald-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-red-50 dark:bg-red-950/60 border border-red-100 dark:border-red-800/40 flex items-center justify-center shrink-0">
                                    <!-- Official Git Orange/Red SVG -->
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="#F05032">
                                        <path d="M23.6 10.9L13.1.4c-.5-.5-1.3-.5-1.9 0L8.7 2.9l3.3 3.3c.6-.2 1.3 0 1.8.5.5.5.7 1.2.5 1.8l3.2 3.2c.6-.2 1.3 0 1.8.5.7.7.7 1.9 0 2.7-.7.7-1.9.7-2.7 0-.6-.6-.7-1.4-.4-2.1L13.3 9.6v6.2c.2.1.4.3.5.5.7.7.7 1.9 0 2.7-.7.7-1.9.7-2.7 0-.7-.7-.7-1.9 0-2.7.2-.2.4-.4.6-.5V9.4c.2-.1.4-.3.6-.5.7-.7.7-1.9 0-2.7-.6-.6-1.4-.7-2.1-.4L6 2.5.4 8.1c-.5.5-.5 1.3 0 1.9l10.5 10.5c.5.5 1.3.5 1.9 0l10.8-10.8c.5-.5.5-1.3 0-1.8z"/>
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-red-600 dark:group-hover/item:text-red-400 transition-colors">Git &amp; GitHub Actions</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">CI/CD &amp; Version Control</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100/80 dark:bg-emerald-900/60 text-emerald-700 dark:text-emerald-300 border border-emerald-200/50">Expert</span>
                        </div>

                        <!-- 3. Docker Containerization -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-emerald-300 dark:hover:border-emerald-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 dark:bg-blue-950/60 border border-blue-100 dark:border-blue-800/40 flex items-center justify-center shrink-0">
                                    <!-- Official Docker Blue SVG -->
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="#2496ED">
                                        <path d="M13.983 11.078h2.119a.186.186 0 00.186-.185V9.006a.186.186 0 00-.186-.186h-2.119a.185.185 0 00-.185.185v1.888c0 .102.083.185.185.185m-2.954-5.43h2.118a.186.186 0 00.186-.186V3.574a.186.186 0 00-.186-.185h-2.118a.185.185 0 00-.185.185v1.888c0 .102.082.186.185.186zm0 2.716h2.118a.187.187 0 00.186-.186V6.29a.186.186 0 00-.186-.185h-2.118a.185.185 0 00-.185.185v1.887c0 .102.082.186.185.186zm-2.93 0h2.12a.186.186 0 00.184-.186V6.29a.185.185 0 00-.185-.185H8.1a.185.185 0 00-.185.185v1.887c0 .102.083.186.185.186zm-2.964 0h2.119a.186.186 0 00.185-.186V6.29a.185.185 0 00-.185-.185H5.136a.186.186 0 00-.186.185v1.887c0 .102.084.186.186.186zm5.893 2.715h2.118a.186.186 0 00.186-.186V9.006a.186.186 0 00-.186-.186h-2.118a.185.185 0 00-.185.185v1.888c0 .102.082.185.185.185zm-2.93 0h2.12a.185.185 0 00.184-.186V9.006a.185.185 0 00-.184-.186h-2.12a.185.185 0 00-.184.185v1.888c0 .102.083.185.185.185zm-2.964 0h2.119a.185.185 0 00.185-.186V9.006a.185.185 0 00-.185-.186h-2.12a.186.186 0 00-.185.185v1.888c0 .102.084.185.186.185zm-2.928 0h2.119a.185.185 0 00.185-.186V9.006a.185.185 0 00-.185-.186H2.208a.186.186 0 00-.186.185v1.888c0 .102.084.185.186.185zM23.79 9.89c-.584-.397-1.544-.45-2.26-.145-.148.064-.265.176-.345.31-.76 1.258-2.12 1.637-3.69 1.637H1.05a.75.75 0 00-.75.75c0 4.168 2.22 7.747 5.676 9.435 1.545.755 3.328 1.173 5.224 1.173 6.945 0 12.63-5.26 12.78-12.03.013-.615-.12-1.077-.19-1.13z"/>
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-blue-600 dark:group-hover/item:text-blue-400 transition-colors">Docker Containers</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">Images &amp; Containerization</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-blue-100/80 dark:bg-blue-900/60 text-blue-700 dark:text-blue-300 border border-blue-200/50">Production</span>
                        </div>

                        <!-- 4. AWS Cloud -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-emerald-300 dark:hover:border-emerald-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-amber-50 dark:bg-amber-950/60 border border-amber-100 dark:border-amber-800/40 flex items-center justify-center shrink-0">
                                    <!-- Official AWS Cloud Smile SVG -->
                                    <svg class="w-4 h-4 text-amber-600 dark:text-amber-400" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M18.8 14.8c-2.3 1.7-5.5 2.6-8.4 2.6-4 0-7.7-1.5-10.4-4-.2-.2-.3-.1-.1.1 2.9 3.6 7.4 5.9 12.4 5.9 3.2 0 6.6-.9 9.5-2.8.5-.3.2-.8-.2-.5l-2.8-1.3zm1.6-1.5c-.3-.4-1.8-.2-2.5-.1-.2 0-.3-.2-.1-.3 1.2-.9 3.2-.6 3.5-.2.3.4-.1 2.3-1.2 3.3-.2.2-.3.1-.2-.1.5-.7.8-2.2.5-2.6zM6.9 8.2c-.3-.9-.9-1.3-1.8-1.3-1.2 0-2.1.9-2.1 2.2s.9 2.2 2.1 2.2c.9 0 1.5-.4 1.8-1.3l1.8.6c-.6 1.4-1.9 2.1-3.6 2.1-2.2 0-4-1.6-4-3.6 0-2 1.8-3.6 4-3.6 1.7 0 3 .7 3.6 2.1l-1.8.6z"/>
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-amber-600 dark:group-hover/item:text-amber-400 transition-colors">AWS Cloud</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">EC2, S3 &amp; Deployments</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100/80 dark:bg-amber-900/60 text-amber-700 dark:text-amber-300 border border-amber-200/50">Cloud Ready</span>
                        </div>

                        <!-- 5. Figma & UI/UX -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-emerald-300 dark:hover:border-emerald-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-pink-50 dark:bg-pink-950/60 border border-pink-100 dark:border-pink-800/40 flex items-center justify-center shrink-0">
                                    <!-- Official Figma Colorful Logo SVG -->
                                    <svg class="w-4 h-4" viewBox="0 0 24 24">
                                        <path fill="#0ACF83" d="M8 24c2.2 0 4-1.8 4-4v-4H8c-2.2 0-4 1.8-4 4s1.8 4 4 4z"/>
                                        <path fill="#A259FF" d="M4 12c0-2.2 1.8-4 4-4h4v8H8c-2.2 0-4-1.8-4-4z"/>
                                        <path fill="#F24E1E" d="M4 4c0-2.2 1.8-4 4-4h4v8H8C5.8 8 4 6.2 4 4z"/>
                                        <path fill="#FF7262" d="M12 0h4c2.2 0 4 1.8 4 4s-1.8 4-4 4h-4V0z"/>
                                        <path fill="#1ABCFE" d="M20 12c0 2.2-1.8 4-4 4s-4-1.8-4-4 1.8-4 4-4 4 1.8 4 4z"/>
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-pink-600 dark:group-hover/item:text-pink-400 transition-colors">UI/UX &amp; Figma</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">Prototyping &amp; Design</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-pink-100/80 dark:bg-pink-900/60 text-pink-700 dark:text-pink-300 border border-pink-200/50">Advanced</span>
                        </div>

                        <!-- 6. Problem Solving & Leadership -->
                        <div class="p-2.5 rounded-xl bg-gray-50/70 dark:bg-gray-900/40 hover:bg-white dark:hover:bg-gray-900/80 border border-gray-100 dark:border-gray-700/60 hover:border-emerald-300 dark:hover:border-emerald-600/50 transition-all duration-200 flex items-center justify-between gap-3 group/item shadow-xs hover:shadow-sm">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <div class="w-8 h-8 rounded-lg bg-teal-50 dark:bg-teal-950/60 border border-teal-100 dark:border-teal-800/40 flex items-center justify-center shrink-0">
                                    <!-- Leadership Shield SVG -->
                                    <svg class="w-4 h-4 text-teal-600 dark:text-teal-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <h4 class="text-xs font-bold text-gray-900 dark:text-white truncate group-hover/item:text-teal-600 dark:group-hover/item:text-teal-400 transition-colors">Tech Leadership</h4>
                                    <p class="text-[10px] text-gray-500 dark:text-gray-400 truncate">Architecture &amp; Delivery</p>
                                </div>
                            </div>
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100/80 dark:bg-emerald-900/60 text-emerald-700 dark:text-emerald-300 border border-emerald-200/50">Mastery</span>
                        </div>
                    </div>

                    <!-- Micro Tech Pills -->
                    <div class="flex flex-wrap gap-1.5 pt-4 mt-4 border-t border-gray-100 dark:border-gray-700/60">
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-emerald-50 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300">AWS</span>
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-emerald-50 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300">Docker</span>
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-emerald-50 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300">Git/GitHub</span>
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-md bg-emerald-50 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300">Figma</span>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-emerald-500 to-teal-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>

        </div>

        <!-- =================================================================== -->
        <!-- VIEW 2: 'AI & ML' Deep-Dive Bento Deck                              -->
        <!-- =================================================================== -->
        <div x-show="activeTab === 'ai'" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
            class="grid lg:grid-cols-12 gap-6 items-stretch">
            <!-- Left Domain Spotlight Card (4 cols) -->
            <div class="lg:col-span-4 bento-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between relative overflow-hidden bg-white/85 dark:bg-gray-800/85 border border-purple-200/80 dark:border-purple-900/50 shadow-xl">
                <div class="space-y-5">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-purple-600 to-pink-600 flex items-center justify-center text-3xl text-white shadow-lg shadow-purple-500/30">
                        🧠
                    </div>
                    <div>
                        <span class="text-xs uppercase font-bold tracking-wider text-purple-600 dark:text-purple-400">Specialization Deck</span>
                        <h3 class="text-2xl font-grotesk font-extrabold text-gray-900 dark:text-white mt-1">AI Agents, RAG &amp; LLMs</h3>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                        Engineering autonomous AI agents, multi-agent reasoning graphs, Retrieval-Augmented Generation (RAG) vector pipelines, and production LLM integrations with custom tool-calling endpoints.
                    </p>
                    <div class="p-3.5 rounded-2xl bg-purple-50/70 dark:bg-purple-950/40 border border-purple-100 dark:border-purple-900/40 space-y-1">
                        <span class="text-[11px] uppercase font-bold tracking-wider text-purple-700 dark:text-purple-300 block">Primary Ecosystem</span>
                        <p class="text-xs font-mono text-gray-700 dark:text-gray-200">LangChain • OpenAI • ChromaDB • FastAPI • PyTorch • Scikit-Learn</p>
                    </div>
                </div>
                <div class="pt-5 border-t border-gray-100 dark:border-gray-700/60 flex items-center justify-between">
                    <span class="text-xs font-semibold text-gray-500 dark:text-gray-400">Mastery Level</span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-purple-100 dark:bg-purple-900/60 text-purple-700 dark:text-purple-300 text-xs font-bold">
                        <span class="w-2 h-2 rounded-full bg-purple-500 animate-pulse"></span>
                        Production-Grade AI
                    </span>
                </div>
            </div>

            <!-- Right Expanded Bento Tiles (8 cols) -->
            <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Tile 1 -->
                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-purple-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-purple-100 dark:bg-purple-950/60 flex items-center justify-center text-purple-600 dark:text-purple-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-purple-100 dark:bg-purple-900/60 text-purple-700 dark:text-purple-300">Production</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">AI Autonomous Agents</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Multi-agent role coordination, memory management, and autonomous goal execution.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>CrewAI • LangGraph</span>
                        <span class="text-purple-600 dark:text-purple-400 font-bold">Expert</span>
                    </div>
                </div>

                <!-- Tile 2 -->
                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-pink-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-pink-100 dark:bg-pink-950/60 flex items-center justify-center text-pink-600 dark:text-pink-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-pink-100 dark:bg-pink-900/60 text-pink-700 dark:text-pink-300">Enterprise</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">RAG &amp; Vector Search</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Chunking, hybrid embedding retrieval, cross-encoder re-ranking, and grounded generation.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>ChromaDB • Pinecone</span>
                        <span class="text-pink-600 dark:text-pink-400 font-bold">Mastery</span>
                    </div>
                </div>

                <!-- Tile 3 -->
                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-blue-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-blue-100 dark:bg-blue-950/60 flex items-center justify-center text-blue-600 dark:text-blue-400">
                                <svg class="w-5 h-5" viewBox="0 0 128 128"><path fill="#387EB8" d="M63.39 2.5c-30.82 0-28.89 13.37-28.89 13.37l.03 13.84h29.41v4.18H20.47S2.5 31.84 2.5 63.61c0 31.78 15.68 30.68 15.68 30.68h9.35v-13.1c0-14.88 12.82-14.51 12.82-14.51h29.13s12.28.19 12.28-12.09V14.77S83.85 2.5 63.39 2.5z"/><path fill="#FFE052" d="M64.61 125.5c30.82 0 28.89-13.37 28.89-13.37l-.03-13.84H64.06v-4.18h43.47s17.97 2.05 17.97-29.72c0-31.78-15.68-30.68-15.68-30.68h-9.35v13.1c0 14.88-12.82 14.51-12.82 14.51H38.5s-12.28-.19-12.28 12.09v19.82s-2.09 12.27 18.39 12.27z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-blue-100 dark:bg-blue-900/60 text-blue-700 dark:text-blue-300">Core</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Python &amp; Scikit-Learn</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Statistical modeling, automated data pipelines, ETL workflows, and classification models.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>NumPy • Pandas • Scikit</span>
                        <span class="text-blue-600 dark:text-blue-400 font-bold">Expert</span>
                    </div>
                </div>

                <!-- Tile 4 -->
                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-orange-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-orange-100 dark:bg-orange-950/60 flex items-center justify-center text-orange-600 dark:text-orange-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"><path d="M13.2 2.3a.6.6 0 0 0-.8.1l-1.3 1.6a.6.6 0 0 0 .1.8 7.3 7.3 0 0 1 2.3 5.3 7.4 7.4 0 0 1-7.4 7.4 7.4 7.4 0 0 1-5.2-2.2.6.6 0 0 0-.8.1L.3 16.7a.6.6 0 0 0 .1.8A9.7 9.7 0 0 0 6.1 20a9.8 9.8 0 0 0 9.8-9.8c0-3-1.4-5.8-3.7-7.9z" fill="#EE4C2C"/><circle cx="15.8" cy="4.2" r="1.4" fill="#EE4C2C"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-orange-100 dark:bg-orange-900/60 text-orange-700 dark:text-orange-300">PyTorch</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">PyTorch Deep Learning</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Neural network architectures, custom loss functions, transfer learning, and model fine-tuning.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>PyTorch • Torchvision</span>
                        <span class="text-orange-600 dark:text-orange-400 font-bold">Expert</span>
                    </div>
                </div>

                <!-- Tile 5 -->
                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-emerald-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-emerald-100 dark:bg-emerald-950/60 flex items-center justify-center text-emerald-600 dark:text-emerald-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm-.905 18.286v-5.428H8.381l4.524-7.143v5.428h2.714l-4.524 7.143z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 dark:bg-emerald-900/60 text-emerald-700 dark:text-emerald-300">FastAPI</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">LLM APIs &amp; Endpoints</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Production-ready asynchronous endpoints, streaming responses, and OpenAPI documentation.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>FastAPI • Uvicorn • Pydantic</span>
                        <span class="text-emerald-600 dark:text-emerald-400 font-bold">Production</span>
                    </div>
                </div>

                <!-- Tile 6 -->
                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-indigo-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-indigo-100 dark:bg-indigo-950/60 flex items-center justify-center text-indigo-600 dark:text-indigo-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-indigo-100 dark:bg-indigo-900/60 text-indigo-700 dark:text-indigo-300">Vision</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Computer Vision &amp; OCR</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Real-time object detection with YOLOv8, facial landmarks via MediaPipe, and OCR pipelines.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>YOLOv8 • OpenCV • MediaPipe</span>
                        <span class="text-indigo-600 dark:text-indigo-400 font-bold">Advanced</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- =================================================================== -->
        <!-- VIEW 3: 'IoT & Robotics' Deep-Dive Bento Deck                       -->
        <!-- =================================================================== -->
        <div x-show="activeTab === 'robotics'" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
            class="grid lg:grid-cols-12 gap-6 items-stretch">
            <div class="lg:col-span-4 bento-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between relative overflow-hidden bg-white/85 dark:bg-gray-800/85 border border-amber-200/80 dark:border-amber-900/50 shadow-xl">
                <div class="space-y-5">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-amber-500 to-orange-600 flex items-center justify-center text-3xl text-white shadow-lg shadow-amber-500/30">
                        🤖
                    </div>
                    <div>
                        <span class="text-xs uppercase font-bold tracking-wider text-amber-600 dark:text-amber-400">Specialization Deck</span>
                        <h3 class="text-2xl font-grotesk font-extrabold text-gray-900 dark:text-white mt-1">Robotics &amp; Embedded IoT</h3>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                        Architecting decentralized wireless ESP-NOW multi-node networks, smart restaurant delivery robots, dual-axis solar trackers, and cloud telemetry sensors with MQTT.
                    </p>
                    <div class="p-3.5 rounded-2xl bg-amber-50/70 dark:bg-amber-950/40 border border-amber-100 dark:border-amber-900/40 space-y-1">
                        <span class="text-[11px] uppercase font-bold tracking-wider text-amber-700 dark:text-amber-300 block">Hardware Ecosystem</span>
                        <p class="text-xs font-mono text-gray-700 dark:text-gray-200">ESP32 • Arduino C++ • ESP-NOW • MQTT • Wokwi • Sensor Fusion</p>
                    </div>
                </div>
                <div class="pt-5 border-t border-gray-100 dark:border-gray-700/60 flex items-center justify-between">
                    <span class="text-xs font-semibold text-gray-500 dark:text-gray-400">Mastery Level</span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-100 dark:bg-amber-900/60 text-amber-700 dark:text-amber-300 text-xs font-bold">
                        <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                        Embedded Systems Expert
                    </span>
                </div>
            </div>

            <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-teal-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-teal-100 dark:bg-teal-950/60 flex items-center justify-center text-teal-600 dark:text-teal-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="#00979D"><path d="M16.5 6C13.5 6 12 8.5 12 8.5S10.5 6 7.5 6C3.9 6 1 8.9 1 12.5C1 16.1 3.9 19 7.5 19C10.5 19 12 16.5 12 16.5S13.5 19 16.5 19C20.1 19 23 16.1 23 12.5C23 8.9 20.1 6 16.5 6ZM7.5 16.8C5.1 16.8 3.2 14.9 3.2 12.5C3.2 10.1 5.1 8.2 7.5 8.2C9.5 8.2 10.7 9.8 11.2 10.7C10.7 11.6 9.5 13.2 7.5 13.2V16.8ZM16.5 16.8C14.5 16.8 13.3 15.2 12.8 14.3C13.3 13.4 14.5 11.8 16.5 11.8C18.9 11.8 20.8 13.7 20.8 16.1C20.8 18.5 18.9 20.4 16.5 20.4V16.8Z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-teal-100 dark:bg-teal-900/60 text-teal-700 dark:text-teal-300">C++ Firmware</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Arduino &amp; C++ Firmware</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Direct hardware registers, interrupts, timers, PWM motor drivers, and low-latency control.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>C++ • Hardware SPI/I2C</span>
                        <span class="text-teal-600 dark:text-teal-400 font-bold">Expert</span>
                    </div>
                </div>

                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-red-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-red-100 dark:bg-red-950/60 flex items-center justify-center text-red-600 dark:text-red-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><path d="M9 1v3M15 1v3M9 20v3M15 20v3M20 9h3M20 14h3M1 9h3M1 14h3"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-red-100 dark:bg-red-900/60 text-red-700 dark:text-red-300">Mesh</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">ESP32 &amp; ESP-NOW Mesh</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Router-less bidirectional communication across multiple robot slave nodes with zero-router overhead.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>ESP-NOW • FreeRTOS</span>
                        <span class="text-red-600 dark:text-red-400 font-bold">Production</span>
                    </div>
                </div>

                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-amber-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 dark:bg-amber-950/60 flex items-center justify-center text-amber-600 dark:text-amber-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 dark:bg-amber-900/60 text-amber-700 dark:text-amber-300">Cloud IoT</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">MQTT Telemetry</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Publish/subscribe architecture connecting remote field sensors to cloud dashboards.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>MQTT Broker • WebSockets</span>
                        <span class="text-amber-600 dark:text-amber-400 font-bold">Mastery</span>
                    </div>
                </div>

                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-orange-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-orange-100 dark:bg-orange-950/60 flex items-center justify-center text-orange-600 dark:text-orange-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M5 17H3v-4l2-5h10l2 5v4h-2m-8 0h4"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-orange-100 dark:bg-orange-900/60 text-orange-700 dark:text-orange-300">Robotics</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Autonomous AGVs</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Smart delivery robots with obstacle avoidance, line following, and table routing.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>L298N • Motor Encoders</span>
                        <span class="text-orange-600 dark:text-orange-400 font-bold">Advanced</span>
                    </div>
                </div>

                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-yellow-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-yellow-100 dark:bg-yellow-950/60 flex items-center justify-center text-amber-600 dark:text-amber-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-yellow-100 dark:bg-yellow-900/60 text-yellow-800 dark:text-yellow-300">Hardware</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Sensor Fusion</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Integration of ultrasonic rangers, PIR motion, DHT22 climate sensors, and analog LDRs.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>Sensors • ADC • Servos</span>
                        <span class="text-amber-600 dark:text-amber-400 font-bold">Mastery</span>
                    </div>
                </div>

                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-purple-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-purple-100 dark:bg-purple-950/60 flex items-center justify-center text-purple-600 dark:text-purple-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M3 9h2m-2 6h2m16-6h2m-2 6h2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-purple-100 dark:bg-purple-900/60 text-purple-700 dark:text-purple-300">Virtual Lab</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Wokwi Simulation</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Virtual breadboard circuit emulation and testing prior to PCB manufacturing.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>Wokwi • Schematics</span>
                        <span class="text-purple-600 dark:text-purple-400 font-bold">Expert</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- =================================================================== -->
        <!-- VIEW 4: 'Web & Software' Deep-Dive Bento Deck                       -->
        <!-- =================================================================== -->
        <div x-show="activeTab === 'web'" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
            class="grid lg:grid-cols-12 gap-6 items-stretch">
            <div class="lg:col-span-4 bento-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between relative overflow-hidden bg-white/85 dark:bg-gray-800/85 border border-blue-200/80 dark:border-blue-900/50 shadow-xl">
                <div class="space-y-5">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-blue-500 to-indigo-600 flex items-center justify-center text-3xl text-white shadow-lg shadow-blue-500/30">
                        💻
                    </div>
                    <div>
                        <span class="text-xs uppercase font-bold tracking-wider text-blue-600 dark:text-blue-400">Specialization Deck</span>
                        <h3 class="text-2xl font-grotesk font-extrabold text-gray-900 dark:text-white mt-1">Full-Stack Web &amp; Software</h3>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                        Crafting high-converting responsive web apps, PHP/MySQL architectures, Tailwind UI design systems, and component-based frontend experiences.
                    </p>
                    <div class="p-3.5 rounded-2xl bg-blue-50/70 dark:bg-blue-950/40 border border-blue-100 dark:border-blue-900/40 space-y-1">
                        <span class="text-[11px] uppercase font-bold tracking-wider text-blue-700 dark:text-blue-300 block">Core Stack</span>
                        <p class="text-xs font-mono text-gray-700 dark:text-gray-200">HTML5/CSS3 • Tailwind • JavaScript • React • Node.js • PHP • MySQL</p>
                    </div>
                </div>
                <div class="pt-5 border-t border-gray-100 dark:border-gray-700/60 flex items-center justify-between">
                    <span class="text-xs font-semibold text-gray-500 dark:text-gray-400">Mastery Level</span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-900/60 text-blue-700 dark:text-blue-300 text-xs font-bold">
                        <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
                        Full-Stack Pro
                    </span>
                </div>
            </div>

            <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-cyan-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-cyan-100 dark:bg-cyan-950/60 flex items-center justify-center text-cyan-600 dark:text-cyan-400">
                                <svg class="w-5 h-5 text-cyan-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-cyan-100 dark:bg-cyan-900/60 text-cyan-700 dark:text-cyan-300">Design</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Tailwind CSS</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Utility-first design tokens, dark mode engines, and fluid responsive layouts.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>Tailwind • PostCSS</span>
                        <span class="text-cyan-600 dark:text-cyan-400 font-bold">Mastery</span>
                    </div>
                </div>

                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-yellow-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-yellow-100 dark:bg-yellow-950/60 flex items-center justify-center text-yellow-600 dark:text-yellow-400">
                                <svg class="w-5 h-5 rounded-xs" viewBox="0 0 24 24"><rect width="24" height="24" rx="2" fill="#F7DF1E"/><path d="M7 17.5c.8.5 1.7.7 2.6.7 1.7 0 2.8-.8 2.8-2.6v-7h-2.1v7c0 .7-.3 1.1-.9 1.1-.5 0-.9-.2-1.3-.4l-1.1 1.2zm8.4-.1c1 .6 2.2.9 3.4.9 2.5 0 3.8-1.2 3.8-2.9 0-1.6-1.1-2.4-2.8-3.1l-.8-.3c-.8-.4-1.2-.7-1.2-1.3 0-.6.5-1.1 1.4-1.1.8 0 1.5.3 2 .6l.9-1.4c-.8-.5-1.7-.8-2.8-.8-2.3 0-3.6 1.3-3.6 2.8 0 1.5 1 2.4 2.5 3l.8.3c.9.4 1.4.8 1.4 1.4 0 .7-.6 1.3-1.7 1.3-.9 0-1.8-.3-2.4-.7l-.7 1.4z" fill="#000"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-yellow-100 dark:bg-yellow-900/60 text-yellow-800 dark:text-yellow-300">Vanilla &amp; ES6+</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">JavaScript (ES6+)</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Promises, fetch API, local storage caching, modular architecture, and DOM pipelines.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>ES6+ • Web APIs</span>
                        <span class="text-yellow-600 dark:text-yellow-400 font-bold">Expert</span>
                    </div>
                </div>

                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-blue-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-blue-100 dark:bg-blue-950/60 flex items-center justify-center text-blue-600 dark:text-blue-400">
                                <svg class="w-5 h-5" viewBox="-11.5 -10.23174 23 20.46348"><circle cx="0" cy="0" r="2.05" fill="#61dafb"/><g stroke="#61dafb" stroke-width="1" fill="none"><ellipse rx="11" ry="4.2"/><ellipse rx="11" ry="4.2" transform="rotate(60)"/><ellipse rx="11" ry="4.2" transform="rotate(120)"/></g></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-blue-100 dark:bg-blue-900/60 text-blue-700 dark:text-blue-300">Frontend</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">React &amp; Node.js</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Interactive Single Page Applications, hook state management, and Node backends.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>React • Node.js</span>
                        <span class="text-blue-600 dark:text-blue-400 font-bold">Production</span>
                    </div>
                </div>

                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-indigo-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-indigo-100 dark:bg-indigo-950/60 flex items-center justify-center text-indigo-600 dark:text-indigo-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm-1.8 15.6H8.4l.6-3h1.2c1.2 0 1.8.6 1.8 1.5 0 .9-.6 1.5-1.8 1.5zm-3.6 0H4.8l1.8-7.2h2.4c1.8 0 3 1.2 3 2.7 0 1.8-1.5 3-3.6 3H7.2l-.6 1.5zm11.4 0h-1.8l.6-3h1.2c1.2 0 1.8.6 1.8 1.5 0 .9-.6 1.5-1.8 1.5zm-3.6 0h-1.8l1.8-7.2h2.4c1.8 0 3 1.2 3 2.7 0 1.8-1.5 3-3.6 3h-1.8l-.6 1.5z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-indigo-100 dark:bg-indigo-900/60 text-indigo-700 dark:text-indigo-300">Backend</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">PHP &amp; MySQL</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Relational schema design, prepared PDO statements, API endpoints, and authentication.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>PHP • PDO • MySQL</span>
                        <span class="text-indigo-600 dark:text-indigo-400 font-bold">Backend Pro</span>
                    </div>
                </div>

                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-orange-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-orange-100 dark:bg-orange-950/60 flex items-center justify-center text-orange-600 dark:text-orange-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="#E34F26"><path d="M1.5 0h21l-1.9 21.2L12 24l-8.6-2.8L1.5 0zm16.5 7.5H6.8l.3 3h10.6l-.8 8.1-4.4 1.2-4.4-1.2-.3-3.6h2.8l.2 1.8 1.7.5 1.7-.5.2-2.1H6.5L5.7 4.5h12.8l-.5 3z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-orange-100 dark:bg-orange-900/60 text-orange-700 dark:text-orange-300">Semantic</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">HTML5 &amp; CSS3</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Accessible, SEO-structured semantic markup, modern CSS grid and custom animations.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>Semantic HTML • CSS3</span>
                        <span class="text-orange-600 dark:text-orange-400 font-bold">Mastery</span>
                    </div>
                </div>

                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-sky-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-sky-100 dark:bg-sky-950/60 flex items-center justify-center text-sky-600 dark:text-sky-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-sky-100 dark:bg-sky-900/60 text-sky-700 dark:text-sky-300">OOP</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">C++ &amp; Java OOP</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Object-oriented programming, data structures, algorithm efficiency, and system design.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>C++ • Java • Data Structures</span>
                        <span class="text-sky-600 dark:text-sky-400 font-bold">Advanced</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- =================================================================== -->
        <!-- VIEW 5: 'DevOps & Tools' Deep-Dive Bento Deck                       -->
        <!-- =================================================================== -->
        <div x-show="activeTab === 'devops'" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
            class="grid lg:grid-cols-12 gap-6 items-stretch">
            <div class="lg:col-span-4 bento-card rounded-3xl p-6 sm:p-7 flex flex-col justify-between relative overflow-hidden bg-white/85 dark:bg-gray-800/85 border border-emerald-200/80 dark:border-emerald-900/50 shadow-xl">
                <div class="space-y-5">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-emerald-500 to-teal-600 flex items-center justify-center text-3xl text-white shadow-lg shadow-emerald-500/30">
                        🛠️
                    </div>
                    <div>
                        <span class="text-xs uppercase font-bold tracking-wider text-emerald-600 dark:text-emerald-400">Specialization Deck</span>
                        <h3 class="text-2xl font-grotesk font-extrabold text-gray-900 dark:text-white mt-1">DevOps, Cloud &amp; Mentorship</h3>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                        Containerizing services with Docker, managing multi-branch Git pipelines, AWS cloud deployments, and mentoring over 500+ aspiring engineers across Pakistan.
                    </p>
                    <div class="p-3.5 rounded-2xl bg-emerald-50/70 dark:bg-emerald-950/40 border border-emerald-100 dark:border-emerald-900/40 space-y-1">
                        <span class="text-[11px] uppercase font-bold tracking-wider text-emerald-700 dark:text-emerald-300 block">Tools &amp; Leadership</span>
                        <p class="text-xs font-mono text-gray-700 dark:text-gray-200">Git/GitHub • Docker • AWS • Linux CLI • Figma • STEAM Pedagogy</p>
                    </div>
                </div>
                <div class="pt-5 border-t border-gray-100 dark:border-gray-700/60 flex items-center justify-between">
                    <span class="text-xs font-semibold text-gray-500 dark:text-gray-400">Mastery Level</span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/60 text-emerald-700 dark:text-emerald-300 text-xs font-bold">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        Engineering Leadership
                    </span>
                </div>
            </div>

            <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-emerald-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-emerald-100 dark:bg-emerald-950/60 flex items-center justify-center text-emerald-600 dark:text-emerald-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 dark:bg-emerald-900/60 text-emerald-700 dark:text-emerald-300">500+ Mentored</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">STEAM &amp; Tech Teaching</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Hands-on robotics, computer science, and practical AI curriculum training.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>Robotics • CS Education</span>
                        <span class="text-emerald-600 dark:text-emerald-400 font-bold">Trainer</span>
                    </div>
                </div>

                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-red-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-red-100 dark:bg-red-950/60 flex items-center justify-center text-red-600 dark:text-red-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="#F05032"><path d="M23.6 10.9L13.1.4c-.5-.5-1.3-.5-1.9 0L8.7 2.9l3.3 3.3c.6-.2 1.3 0 1.8.5.5.5.7 1.2.5 1.8l3.2 3.2c.6-.2 1.3 0 1.8.5.7.7.7 1.9 0 2.7-.7.7-1.9.7-2.7 0-.6-.6-.7-1.4-.4-2.1L13.3 9.6v6.2c.2.1.4.3.5.5.7.7.7 1.9 0 2.7-.7.7-1.9.7-2.7 0-.7-.7-.7-1.9 0-2.7.2-.2.4-.4.6-.5V9.4c.2-.1.4-.3.6-.5.7-.7.7-1.9 0-2.7-.6-.6-1.4-.7-2.1-.4L6 2.5.4 8.1c-.5.5-.5 1.3 0 1.9l10.5 10.5c.5.5 1.3.5 1.9 0l10.8-10.8c.5-.5.5-1.3 0-1.8z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 dark:bg-emerald-900/60 text-emerald-700 dark:text-emerald-300">CI/CD</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Git &amp; GitHub Actions</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Automated testing, continuous deployment pipelines, and pull request workflows.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>Git • Actions • CI/CD</span>
                        <span class="text-red-600 dark:text-red-400 font-bold">Expert</span>
                    </div>
                </div>

                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-blue-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-blue-100 dark:bg-blue-950/60 flex items-center justify-center text-blue-600 dark:text-blue-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="#2496ED"><path d="M13.983 11.078h2.119a.186.186 0 00.186-.185V9.006a.186.186 0 00-.186-.186h-2.119a.185.185 0 00-.185.185v1.888c0 .102.083.185.185.185m-2.954-5.43h2.118a.186.186 0 00.186-.186V3.574a.186.186 0 00-.186-.185h-2.118a.185.185 0 00-.185.185v1.888c0 .102.082.186.185.186zm0 2.716h2.118a.187.187 0 00.186-.186V6.29a.186.186 0 00-.186-.185h-2.118a.185.185 0 00-.185.185v1.887c0 .102.082.186.185.186zm-2.93 0h2.12a.186.186 0 00.184-.186V6.29a.185.185 0 00-.185-.185H8.1a.185.185 0 00-.185.185v1.887c0 .102.083.186.185.186zm-2.964 0h2.119a.186.186 0 00.185-.186V6.29a.185.185 0 00-.185-.185H5.136a.186.186 0 00-.186.185v1.887c0 .102.084.186.186.186zm5.893 2.715h2.118a.186.186 0 00.186-.186V9.006a.186.186 0 00-.186-.186h-2.118a.185.185 0 00-.185.185v1.888c0 .102.082.185.185.185zm-2.93 0h2.12a.185.185 0 00.184-.186V9.006a.185.185 0 00-.184-.186h-2.12a.185.185 0 00-.184.185v1.888c0 .102.083.185.185.185zm-2.964 0h2.119a.185.185 0 00.185-.186V9.006a.185.185 0 00-.185-.186h-2.12a.186.186 0 00-.185.185v1.888c0 .102.084.185.186.185zm-2.928 0h2.119a.185.185 0 00.185-.186V9.006a.185.185 0 00-.185-.186H2.208a.186.186 0 00-.186.185v1.888c0 .102.084.185.186.185zM23.79 9.89c-.584-.397-1.544-.45-2.26-.145-.148.064-.265.176-.345.31-.76 1.258-2.12 1.637-3.69 1.637H1.05a.75.75 0 00-.75.75c0 4.168 2.22 7.747 5.676 9.435 1.545.755 3.328 1.173 5.224 1.173 6.945 0 12.63-5.26 12.78-12.03.013-.615-.12-1.077-.19-1.13z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-blue-100 dark:bg-blue-900/60 text-blue-700 dark:text-blue-300">Containers</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Docker Containers</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Multi-stage builds, lightweight images, Docker Compose networking, and reproducible environments.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>Docker • Compose</span>
                        <span class="text-blue-600 dark:text-blue-400 font-bold">Production</span>
                    </div>
                </div>

                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-amber-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 dark:bg-amber-950/60 flex items-center justify-center text-amber-600 dark:text-amber-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M18.8 14.8c-2.3 1.7-5.5 2.6-8.4 2.6-4 0-7.7-1.5-10.4-4-.2-.2-.3-.1-.1.1 2.9 3.6 7.4 5.9 12.4 5.9 3.2 0 6.6-.9 9.5-2.8.5-.3.2-.8-.2-.5l-2.8-1.3zm1.6-1.5c-.3-.4-1.8-.2-2.5-.1-.2 0-.3-.2-.1-.3 1.2-.9 3.2-.6 3.5-.2.3.4-.1 2.3-1.2 3.3-.2.2-.3.1-.2-.1.5-.7.8-2.2.5-2.6zM6.9 8.2c-.3-.9-.9-1.3-1.8-1.3-1.2 0-2.1.9-2.1 2.2s.9 2.2 2.1 2.2c.9 0 1.5-.4 1.8-1.3l1.8.6c-.6 1.4-1.9 2.1-3.6 2.1-2.2 0-4-1.6-4-3.6 0-2 1.8-3.6 4-3.6 1.7 0 3 .7 3.6 2.1l-1.8.6z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 dark:bg-amber-900/60 text-amber-700 dark:text-amber-300">AWS Cloud</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">AWS Cloud Services</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">EC2 instance management, Linux server configuration, domain DNS, and cloud security groups.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>EC2 • S3 • Route53</span>
                        <span class="text-amber-600 dark:text-amber-400 font-bold">Cloud Ready</span>
                    </div>
                </div>

                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-pink-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-pink-100 dark:bg-pink-950/60 flex items-center justify-center text-pink-600 dark:text-pink-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24"><path fill="#0ACF83" d="M8 24c2.2 0 4-1.8 4-4v-4H8c-2.2 0-4 1.8-4 4s1.8 4 4 4z"/><path fill="#A259FF" d="M4 12c0-2.2 1.8-4 4-4h4v8H8c-2.2 0-4-1.8-4-4z"/><path fill="#F24E1E" d="M4 4c0-2.2 1.8-4 4-4h4v8H8C5.8 8 4 6.2 4 4z"/><path fill="#FF7262" d="M12 0h4c2.2 0 4 1.8 4 4s-1.8 4-4 4h-4V0z"/><path fill="#1ABCFE" d="M20 12c0 2.2-1.8 4-4 4s-4-1.8-4-4 1.8-4 4-4 4 1.8 4 4z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-pink-100 dark:bg-pink-900/60 text-pink-700 dark:text-pink-300">Design</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">Figma &amp; Prototyping</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">High-fidelity wireframing, clickable design systems, component variants, and interactive prototypes.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>Figma • Wireframes</span>
                        <span class="text-pink-600 dark:text-pink-400 font-bold">Advanced</span>
                    </div>
                </div>

                <div class="bento-card rounded-2xl p-5 bg-white/85 dark:bg-gray-800/85 border border-gray-200/80 dark:border-gray-700/70 flex flex-col justify-between hover:shadow-xl hover:border-teal-400/50 transition-all">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="w-10 h-10 rounded-xl bg-teal-100 dark:bg-teal-950/60 flex items-center justify-center text-teal-600 dark:text-teal-400">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-teal-100 dark:bg-teal-900/60 text-teal-700 dark:text-teal-300">Engineering</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 dark:text-white">System Architecture</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 leading-relaxed">Cross-functional hardware/software problem solving, reliability engineering, and project delivery.</p>
                    </div>
                    <div class="pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between text-[11px] text-gray-500 font-mono">
                        <span>Architecture • Delivery</span>
                        <span class="text-teal-600 dark:text-teal-400 font-bold">Mastery</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>