<!-- Skills Section (Compact High-Density Single-VH Bento Command Matrix) -->
<section id="skills" class="py-12 md:py-16 bg-gray-50 dark:bg-gray-900 relative overflow-hidden"
    x-data="{ activeTab: 'all' }">
    <!-- Background Ambient Glow & Subtle Pattern -->
    <div class="absolute inset-0 pointer-events-none opacity-40">
        <div class="absolute -top-32 -left-32 w-80 h-80 bg-purple-500/10 dark:bg-purple-600/15 rounded-full blur-3xl">
        </div>
        <div
            class="absolute -bottom-32 -right-32 w-80 h-80 bg-indigo-500/10 dark:bg-indigo-600/15 rounded-full blur-3xl">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header (Ultra-Compact) -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4" data-aos="fade-up">
            <div>
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-100/60 dark:bg-purple-950/60 text-purple-700 dark:text-purple-300 text-xs font-semibold mb-2 border border-purple-200/50 dark:border-purple-800/40">
                    <span class="w-1.5 h-1.5 rounded-full bg-purple-500 animate-pulse"></span>
                    Technical Arsenal &amp; Proficiencies
                </div>
                <h2
                    class="text-3xl sm:text-4xl font-grotesk font-extrabold text-gray-900 dark:text-white tracking-tight">
                    Skills <span
                        class="bg-gradient-to-r from-purple-600 via-indigo-600 to-pink-500 bg-clip-text text-transparent">Matrix</span>
                </h2>
            </div>

            <!-- Interactive Filter Tabs -->
            <div
                class="flex flex-wrap items-center gap-1.5 p-1 rounded-2xl bg-white/70 dark:bg-gray-800/70 border border-gray-200/60 dark:border-gray-700/60 backdrop-blur-md shadow-sm">
                <button @click="activeTab = 'all'"
                    :class="activeTab === 'all' ? 'bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-md shadow-purple-500/25 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 font-medium'"
                    class="px-3.5 py-1.5 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-1.5">
                    <span>⚡</span> All Matrix
                </button>
                <button @click="activeTab = 'ai'"
                    :class="activeTab === 'ai' ? 'bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-md shadow-purple-500/25 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 font-medium'"
                    class="px-3.5 py-1.5 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-1.5">
                    <span>🧠</span> AI &amp; ML
                </button>
                <button @click="activeTab = 'robotics'"
                    :class="activeTab === 'robotics' ? 'bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-md shadow-purple-500/25 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 font-medium'"
                    class="px-3.5 py-1.5 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-1.5">
                    <span>🤖</span> IoT &amp; Robotics
                </button>
                <button @click="activeTab = 'web'"
                    :class="activeTab === 'web' ? 'bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-md shadow-purple-500/25 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 font-medium'"
                    class="px-3.5 py-1.5 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-1.5">
                    <span>💻</span> Web &amp; Software
                </button>
                <button @click="activeTab = 'devops'"
                    :class="activeTab === 'devops' ? 'bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-md shadow-purple-500/25 font-bold' : 'text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 font-medium'"
                    class="px-3.5 py-1.5 rounded-xl text-xs sm:text-sm transition-all duration-200 flex items-center gap-1.5">
                    <span>🛠️</span> DevOps &amp; Tools
                </button>
            </div>
        </div>

        <!-- VIEW 1: 'All Overview' (4 Compact Bento Domain Cards) -->
        <div x-show="activeTab === 'all'" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">

            <!-- Card 1: AI & Data Science (with Agents, RAG, Chatbots & APIs) -->
            <div
                class="tilt-card bento-card relative rounded-2xl p-5 bg-white/80 dark:bg-gray-800/80 backdrop-blur-md border border-gray-100 dark:border-gray-700/60 shadow-lg hover:shadow-2xl transition-all duration-300 group overflow-hidden flex flex-col justify-between">
                <div class="card-glare"></div>
                <div class="tilt-inner relative z-10 flex flex-col h-full">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center text-white shadow-md shadow-purple-500/20 text-lg group-hover:scale-110 transition-transform">
                                🧠
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 dark:text-white text-base">AI, RAG &amp; Agents</h3>
                                <span class="text-[11px] text-purple-600 dark:text-purple-400 font-semibold">93% Avg.
                                    Mastery</span>
                            </div>
                        </div>
                        <span
                            class="text-[10px] font-mono px-2 py-0.5 rounded-md bg-purple-50 dark:bg-purple-900/40 text-purple-600 dark:text-purple-300 border border-purple-200/50 dark:border-purple-700/40">
                            6 Techs
                        </span>
                    </div>

                    <!-- Compact Skill Rows -->
                    <div class="space-y-2.5 my-auto">
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">AI Agents &amp; Multi-Agent
                                    Systems</span>
                                <span class="font-bold text-purple-600 dark:text-purple-400">92%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-purple-500 to-pink-600 h-1.5 rounded-full"
                                    data-progress="92" style="width: 92%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">RAG (Retrieval-Augmented
                                    Gen)</span>
                                <span class="font-bold text-purple-600 dark:text-purple-400">90%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-purple-500 to-pink-600 h-1.5 rounded-full"
                                    data-progress="90" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">Conversational AI &amp;
                                    Chatbots</span>
                                <span class="font-bold text-purple-600 dark:text-purple-400">94%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-purple-500 to-pink-600 h-1.5 rounded-full"
                                    data-progress="94" style="width: 94%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">LLM &amp; REST API
                                    Integration</span>
                                <span class="font-bold text-purple-600 dark:text-purple-400">92%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-purple-500 to-pink-600 h-1.5 rounded-full"
                                    data-progress="92" style="width: 92%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">Python, PyTorch &amp;
                                    Scikit-Learn</span>
                                <span class="font-bold text-purple-600 dark:text-purple-400">95%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-purple-500 to-pink-600 h-1.5 rounded-full"
                                    data-progress="95" style="width: 95%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">Computer Vision &amp;
                                    OCR</span>
                                <span class="font-bold text-purple-600 dark:text-purple-400">88%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-purple-500 to-pink-600 h-1.5 rounded-full"
                                    data-progress="88" style="width: 88%;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Micro Tech Pills -->
                    <div class="flex flex-wrap gap-1 pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50">
                        <span
                            class="text-[10px] font-medium px-2 py-0.5 rounded bg-purple-50/70 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300">LangChain</span>
                        <span
                            class="text-[10px] font-medium px-2 py-0.5 rounded bg-purple-50/70 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300">OpenAI
                            API</span>
                        <span
                            class="text-[10px] font-medium px-2 py-0.5 rounded bg-purple-50/70 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300">Vector
                            DB</span>
                        <span
                            class="text-[10px] font-medium px-2 py-0.5 rounded bg-purple-50/70 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300">FastAPI</span>
                    </div>
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-500 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
            </div>

            <!-- Card 2: Robotics & IoT -->
            <div
                class="tilt-card bento-card relative rounded-2xl p-5 bg-white/80 dark:bg-gray-800/80 backdrop-blur-md border border-gray-100 dark:border-gray-700/60 shadow-lg hover:shadow-2xl transition-all duration-300 group overflow-hidden flex flex-col justify-between">
                <div class="card-glare"></div>
                <div class="tilt-inner relative z-10 flex flex-col h-full">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center text-white shadow-md shadow-amber-500/20 text-lg group-hover:scale-110 transition-transform">
                                🤖
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 dark:text-white text-base">Robotics &amp; IoT</h3>
                                <span class="text-[11px] text-amber-600 dark:text-amber-400 font-semibold">90% Avg.
                                    Mastery</span>
                            </div>
                        </div>
                        <span
                            class="text-[10px] font-mono px-2 py-0.5 rounded-md bg-amber-50 dark:bg-amber-900/40 text-amber-600 dark:text-amber-300 border border-amber-200/50 dark:border-amber-700/40">
                            6 Techs
                        </span>
                    </div>

                    <!-- Compact Skill Rows -->
                    <div class="space-y-2.5 my-auto">
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">Arduino IDE / C++</span>
                                <span class="font-bold text-amber-600 dark:text-amber-400">95%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-amber-500 to-orange-600 h-1.5 rounded-full"
                                    data-progress="95" style="width: 95%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">ESP32 &amp; ESP-NOW
                                    Mesh</span>
                                <span class="font-bold text-amber-600 dark:text-amber-400">92%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-amber-500 to-orange-600 h-1.5 rounded-full"
                                    data-progress="92" style="width: 92%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">IoT Telemetry &amp;
                                    Cloud</span>
                                <span class="font-bold text-amber-600 dark:text-amber-400">93%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-amber-500 to-orange-600 h-1.5 rounded-full"
                                    data-progress="93" style="width: 93%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">Autonomous Vehicles</span>
                                <span class="font-bold text-amber-600 dark:text-amber-400">85%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-amber-500 to-orange-600 h-1.5 rounded-full"
                                    data-progress="85" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">Sensor &amp; Actuator
                                    Fusion</span>
                                <span class="font-bold text-amber-600 dark:text-amber-400">88%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-amber-500 to-orange-600 h-1.5 rounded-full"
                                    data-progress="88" style="width: 88%;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Micro Tech Pills -->
                    <div class="flex flex-wrap gap-1 pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50">
                        <span
                            class="text-[10px] font-medium px-2 py-0.5 rounded bg-amber-50/70 dark:bg-amber-950/40 text-amber-700 dark:text-amber-300">MQTT</span>
                        <span
                            class="text-[10px] font-medium px-2 py-0.5 rounded bg-amber-50/70 dark:bg-amber-950/40 text-amber-700 dark:text-amber-300">Wokwi</span>
                        <span
                            class="text-[10px] font-medium px-2 py-0.5 rounded bg-amber-50/70 dark:bg-amber-950/40 text-amber-700 dark:text-amber-300">L298N</span>
                    </div>
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-500 to-orange-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
            </div>

            <!-- Card 3: Full-Stack Web & Software -->
            <div
                class="tilt-card bento-card relative rounded-2xl p-5 bg-white/80 dark:bg-gray-800/80 backdrop-blur-md border border-gray-100 dark:border-gray-700/60 shadow-lg hover:shadow-2xl transition-all duration-300 group overflow-hidden flex flex-col justify-between">
                <div class="card-glare"></div>
                <div class="tilt-inner relative z-10 flex flex-col h-full">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white shadow-md shadow-blue-500/20 text-lg group-hover:scale-110 transition-transform">
                                💻
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 dark:text-white text-base">Web &amp; Software</h3>
                                <span class="text-[11px] text-blue-600 dark:text-blue-400 font-semibold">89% Avg.
                                    Mastery</span>
                            </div>
                        </div>
                        <span
                            class="text-[10px] font-mono px-2 py-0.5 rounded-md bg-blue-50 dark:bg-blue-900/40 text-blue-600 dark:text-blue-300 border border-blue-200/50 dark:border-blue-700/40">
                            6 Techs
                        </span>
                    </div>

                    <!-- Compact Skill Rows -->
                    <div class="space-y-2.5 my-auto">
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">HTML5, CSS3 &amp;
                                    Tailwind</span>
                                <span class="font-bold text-blue-600 dark:text-blue-400">95%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-blue-500 to-indigo-600 h-1.5 rounded-full"
                                    data-progress="95" style="width: 95%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">JavaScript (ES6+)</span>
                                <span class="font-bold text-blue-600 dark:text-blue-400">90%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-blue-500 to-indigo-600 h-1.5 rounded-full"
                                    data-progress="90" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">React &amp; Node.js</span>
                                <span class="font-bold text-blue-600 dark:text-blue-400">86%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-blue-500 to-indigo-600 h-1.5 rounded-full"
                                    data-progress="86" style="width: 86%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">PHP &amp; MySQL</span>
                                <span class="font-bold text-blue-600 dark:text-blue-400">88%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-blue-500 to-indigo-600 h-1.5 rounded-full"
                                    data-progress="88" style="width: 88%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">Java &amp; C/C++ OOP</span>
                                <span class="font-bold text-blue-600 dark:text-blue-400">84%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-blue-500 to-indigo-600 h-1.5 rounded-full"
                                    data-progress="84" style="width: 84%;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Micro Tech Pills -->
                    <div class="flex flex-wrap gap-1 pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50">
                        <span
                            class="text-[10px] font-medium px-2 py-0.5 rounded bg-blue-50/70 dark:bg-blue-950/40 text-blue-700 dark:text-blue-300">Alpine.js</span>
                        <span
                            class="text-[10px] font-medium px-2 py-0.5 rounded bg-blue-50/70 dark:bg-blue-950/40 text-blue-700 dark:text-blue-300">REST
                            APIs</span>
                        <span
                            class="text-[10px] font-medium px-2 py-0.5 rounded bg-blue-50/70 dark:bg-blue-950/40 text-blue-700 dark:text-blue-300">Bootstrap</span>
                    </div>
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 to-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
            </div>

            <!-- Card 4: DevOps, Creative & Leadership -->
            <div
                class="tilt-card bento-card relative rounded-2xl p-5 bg-white/80 dark:bg-gray-800/80 backdrop-blur-md border border-gray-100 dark:border-gray-700/60 shadow-lg hover:shadow-2xl transition-all duration-300 group overflow-hidden flex flex-col justify-between">
                <div class="card-glare"></div>
                <div class="tilt-inner relative z-10 flex flex-col h-full">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center text-white shadow-md shadow-emerald-500/20 text-lg group-hover:scale-110 transition-transform">
                                🛠️
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 dark:text-white text-base">DevOps &amp; STEAM</h3>
                                <span class="text-[11px] text-emerald-600 dark:text-emerald-400 font-semibold">91% Avg.
                                    Mastery</span>
                            </div>
                        </div>
                        <span
                            class="text-[10px] font-mono px-2 py-0.5 rounded-md bg-emerald-50 dark:bg-emerald-900/40 text-emerald-600 dark:text-emerald-300 border border-emerald-200/50 dark:border-emerald-700/40">
                            6 Skills
                        </span>
                    </div>

                    <!-- Compact Skill Rows -->
                    <div class="space-y-2.5 my-auto">
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">STEAM &amp; Tech
                                    Teaching</span>
                                <span class="font-bold text-emerald-600 dark:text-emerald-400">95%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-emerald-500 to-teal-600 h-1.5 rounded-full"
                                    data-progress="95" style="width: 95%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">Git &amp; GitHub
                                    Actions</span>
                                <span class="font-bold text-emerald-600 dark:text-emerald-400">92%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-emerald-500 to-teal-600 h-1.5 rounded-full"
                                    data-progress="92" style="width: 92%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">UI/UX &amp; Figma
                                    Prototyping</span>
                                <span class="font-bold text-emerald-600 dark:text-emerald-400">86%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-emerald-500 to-teal-600 h-1.5 rounded-full"
                                    data-progress="86" style="width: 86%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">Docker &amp;
                                    Containerization</span>
                                <span class="font-bold text-emerald-600 dark:text-emerald-400">82%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-emerald-500 to-teal-600 h-1.5 rounded-full"
                                    data-progress="82" style="width: 82%;"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="font-medium text-gray-700 dark:text-gray-300">Problem Solving &amp;
                                    Leadership</span>
                                <span class="font-bold text-emerald-600 dark:text-emerald-400">92%</span>
                            </div>
                            <div class="w-full bg-gray-200/70 dark:bg-gray-700/70 rounded-full h-1.5">
                                <div class="skill-progress bg-gradient-to-r from-emerald-500 to-teal-600 h-1.5 rounded-full"
                                    data-progress="92" style="width: 92%;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Micro Tech Pills -->
                    <div class="flex flex-wrap gap-1 pt-3 mt-3 border-t border-gray-100 dark:border-gray-700/50">
                        <span
                            class="text-[10px] font-medium px-2 py-0.5 rounded bg-emerald-50/70 dark:bg-emerald-950/40 text-emerald-700 dark:text-emerald-300">AWS</span>
                        <span
                            class="text-[10px] font-medium px-2 py-0.5 rounded bg-emerald-50/70 dark:bg-emerald-950/40 text-emerald-700 dark:text-emerald-300">Canva</span>
                        <span
                            class="text-[10px] font-medium px-2 py-0.5 rounded bg-emerald-50/70 dark:bg-emerald-950/40 text-emerald-700 dark:text-emerald-300">Photoshop</span>
                    </div>
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-emerald-500 to-teal-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
            </div>

        </div>

        <!-- VIEW 2: 'AI & ML' Deep-Dive Radar Deck -->
        <div x-show="activeTab === 'ai'" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            class="grid lg:grid-cols-12 gap-5 items-stretch">
            <!-- Left Overview Card -->
            <div
                class="lg:col-span-4 tilt-card bento-card rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden bg-white/80 dark:bg-gray-800/80 border border-purple-100 dark:border-purple-900/40">
                <div class="card-glare"></div>
                <div class="tilt-inner space-y-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-purple-500 to-pink-500 flex items-center justify-center text-2xl text-white shadow-lg shadow-purple-500/30">
                        🧠
                    </div>
                    <h3 class="text-2xl font-grotesk font-bold text-gray-900 dark:text-white">AI Agents, RAG &amp; LLMs
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                        Engineering autonomous AI agents, multi-agent reasoning graphs, Retrieval-Augmented Generation
                        (RAG) vector pipelines, customized conversational chatbots, and high-performance LLM &amp; REST
                        API integrations.
                    </p>
                    <div class="pt-2">
                        <span
                            class="text-xs uppercase font-bold tracking-wider text-purple-600 dark:text-purple-400 block mb-1">Primary
                            Stack</span>
                        <p class="text-xs font-mono text-gray-700 dark:text-gray-300">LangChain • OpenAI &amp; Claude •
                            LlamaIndex • FastAPI • Vector DBs • PyTorch</p>
                    </div>
                </div>
                <div class="pt-4 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between">
                    <span class="text-xs font-semibold text-gray-500">Domain Proficiency</span>
                    <span class="text-sm font-bold text-purple-600 dark:text-purple-400">93% Aggregate</span>
                </div>
            </div>

            <!-- Right Radial Gauges Grid (8 cols) -->
            <div class="lg:col-span-8 grid grid-cols-2 sm:grid-cols-3 gap-3.5">
                <!-- Gauge 1: AI Autonomous Agents -->
                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-purple-500" stroke-width="3.5" stroke-dasharray="92, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">92%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">AI Agents</h4>
                    <span class="text-[11px] text-purple-600 dark:text-purple-400 font-medium">Autonomous &amp;
                        Multi-Agent</span>
                </div>

                <!-- Gauge 2: RAG Architecture -->
                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-purple-500" stroke-width="3.5" stroke-dasharray="90, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">90%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">RAG Architecture</h4>
                    <span class="text-[11px] text-purple-600 dark:text-purple-400 font-medium">Vector DBs &amp;
                        Embeddings</span>
                </div>

                <!-- Gauge 3: Conversational Chatbots -->
                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-purple-500" stroke-width="3.5" stroke-dasharray="94, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">94%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">Chatbots &amp; LLMs</h4>
                    <span class="text-[11px] text-purple-600 dark:text-purple-400 font-medium">Context Memory &amp;
                        Tools</span>
                </div>

                <!-- Gauge 4: LLM & REST APIs -->
                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-purple-500" stroke-width="3.5" stroke-dasharray="92, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">92%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">LLM &amp; REST APIs</h4>
                    <span class="text-[11px] text-purple-600 dark:text-purple-400 font-medium">FastAPI &amp;
                        Endpoints</span>
                </div>

                <!-- Gauge 5: Python & Machine Learning -->
                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-purple-500" stroke-width="3.5" stroke-dasharray="95, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">95%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">Python &amp; ML</h4>
                    <span class="text-[11px] text-purple-600 dark:text-purple-400 font-medium">PyTorch &amp;
                        Scikit-Learn</span>
                </div>

                <!-- Gauge 6: Computer Vision -->
                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-purple-500" stroke-width="3.5" stroke-dasharray="88, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">88%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">Computer Vision</h4>
                    <span class="text-[11px] text-purple-600 dark:text-purple-400 font-medium">OpenCV &amp; Vision
                        Models</span>
                </div>
            </div>
        </div>

        <!-- VIEW 3: 'Robotics & IoT' Deep-Dive Radar Deck -->
        <div x-show="activeTab === 'robotics'" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            class="grid lg:grid-cols-12 gap-5 items-stretch">
            <!-- Left Overview Card -->
            <div
                class="lg:col-span-4 tilt-card bento-card rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden bg-white/80 dark:bg-gray-800/80 border border-amber-100 dark:border-amber-900/40">
                <div class="card-glare"></div>
                <div class="tilt-inner space-y-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-amber-500 to-orange-500 flex items-center justify-center text-2xl text-white shadow-lg shadow-amber-500/30">
                        🤖
                    </div>
                    <h3 class="text-2xl font-grotesk font-bold text-gray-900 dark:text-white">Robotics &amp; IoT</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                        Architecting decentralized wireless ESP-NOW multi-node networks, smart restaurant delivery
                        robots, dual-axis solar trackers, and cloud telemetry sensors.
                    </p>
                    <div class="pt-2">
                        <span
                            class="text-xs uppercase font-bold tracking-wider text-amber-600 dark:text-amber-400 block mb-1">Hardware
                            Focus</span>
                        <p class="text-xs font-mono text-gray-700 dark:text-gray-300">ESP32 • Arduino • ESP-NOW • MQTT •
                            Motor Drivers • Wokwi</p>
                    </div>
                </div>
                <div class="pt-4 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between">
                    <span class="text-xs font-semibold text-gray-500">Domain Proficiency</span>
                    <span class="text-sm font-bold text-amber-600 dark:text-amber-400">92% Expert Level</span>
                </div>
            </div>

            <!-- Right Radial Gauges Grid (8 cols) -->
            <div class="lg:col-span-8 grid grid-cols-2 sm:grid-cols-3 gap-3.5">
                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-amber-500" stroke-width="3.5" stroke-dasharray="95, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">95%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">Arduino Firmware</h4>
                    <span class="text-[11px] text-amber-600 dark:text-amber-400 font-medium">C++ Embedded</span>
                </div>

                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-amber-500" stroke-width="3.5" stroke-dasharray="93, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">93%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">ESP32 &amp; ESP-NOW</h4>
                    <span class="text-[11px] text-amber-600 dark:text-amber-400 font-medium">Mesh Protocols</span>
                </div>

                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-amber-500" stroke-width="3.5" stroke-dasharray="92, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">92%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">IoT Telemetry</h4>
                    <span class="text-[11px] text-amber-600 dark:text-amber-400 font-medium">MQTT &amp; Wi-Fi</span>
                </div>

                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-amber-500" stroke-width="3.5" stroke-dasharray="88, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">88%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">Sensor Fusion</h4>
                    <span class="text-[11px] text-amber-600 dark:text-amber-400 font-medium">Ultrasonic, PIR, DHT</span>
                </div>

                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-amber-500" stroke-width="3.5" stroke-dasharray="85, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">85%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">Robotic Vehicles</h4>
                    <span class="text-[11px] text-amber-600 dark:text-amber-400 font-medium">Autonomous Routing</span>
                </div>

                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-amber-500" stroke-width="3.5" stroke-dasharray="90, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">90%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">Wokwi Simulator</h4>
                    <span class="text-[11px] text-amber-600 dark:text-amber-400 font-medium">Circuit Emulation</span>
                </div>
            </div>
        </div>

        <!-- VIEW 4: 'Web & Software' Deep-Dive Radar Deck -->
        <div x-show="activeTab === 'web'" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            class="grid lg:grid-cols-12 gap-5 items-stretch">
            <div
                class="lg:col-span-4 tilt-card bento-card rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden bg-white/80 dark:bg-gray-800/80 border border-blue-100 dark:border-blue-900/40">
                <div class="card-glare"></div>
                <div class="tilt-inner space-y-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-blue-500 to-indigo-600 flex items-center justify-center text-2xl text-white shadow-lg shadow-blue-500/30">
                        💻
                    </div>
                    <h3 class="text-2xl font-grotesk font-bold text-gray-900 dark:text-white">Web &amp; Software</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                        Crafting pixel-perfect, ultra-fast modern web applications, PHP/MySQL architectures, interactive
                        JavaScript frontend experiences, and object-oriented backend solutions.
                    </p>
                    <div class="pt-2">
                        <span
                            class="text-xs uppercase font-bold tracking-wider text-blue-600 dark:text-blue-400 block mb-1">Core
                            Stack</span>
                        <p class="text-xs font-mono text-gray-700 dark:text-gray-300">HTML5/CSS3 • Tailwind • JavaScript
                            • React • Node.js • PHP</p>
                    </div>
                </div>
                <div class="pt-4 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between">
                    <span class="text-xs font-semibold text-gray-500">Domain Proficiency</span>
                    <span class="text-sm font-bold text-blue-600 dark:text-blue-400">90% Full-Stack</span>
                </div>
            </div>

            <div class="lg:col-span-8 grid grid-cols-2 sm:grid-cols-3 gap-3.5">
                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-blue-500" stroke-width="3.5" stroke-dasharray="95, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">95%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">HTML5 / CSS3</h4>
                    <span class="text-[11px] text-blue-600 dark:text-blue-400 font-medium">Responsive Layouts</span>
                </div>

                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-blue-500" stroke-width="3.5" stroke-dasharray="92, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">92%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">Tailwind CSS</h4>
                    <span class="text-[11px] text-blue-600 dark:text-blue-400 font-medium">Design Systems</span>
                </div>

                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-blue-500" stroke-width="3.5" stroke-dasharray="90, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">90%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">JavaScript</h4>
                    <span class="text-[11px] text-blue-600 dark:text-blue-400 font-medium">ES6+ &amp; DOM APIs</span>
                </div>

                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-blue-500" stroke-width="3.5" stroke-dasharray="88, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">88%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">React</h4>
                    <span class="text-[11px] text-blue-600 dark:text-blue-400 font-medium">SPA Frontend</span>
                </div>

                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-blue-500" stroke-width="3.5" stroke-dasharray="88, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">88%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">PHP &amp; MySQL</h4>
                    <span class="text-[11px] text-blue-600 dark:text-blue-400 font-medium">Database Backends</span>
                </div>

                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-blue-500" stroke-width="3.5" stroke-dasharray="85, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">85%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">Node.js</h4>
                    <span class="text-[11px] text-blue-600 dark:text-blue-400 font-medium">REST API Services</span>
                </div>
            </div>
        </div>

        <!-- VIEW 5: 'DevOps & Tools' Deep-Dive Radar Deck -->
        <div x-show="activeTab === 'devops'" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            class="grid lg:grid-cols-12 gap-5 items-stretch">
            <div
                class="lg:col-span-4 tilt-card bento-card rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden bg-white/80 dark:bg-gray-800/80 border border-emerald-100 dark:border-emerald-900/40">
                <div class="card-glare"></div>
                <div class="tilt-inner space-y-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-emerald-500 to-teal-600 flex items-center justify-center text-2xl text-white shadow-lg shadow-emerald-500/30">
                        🛠️
                    </div>
                    <h3 class="text-2xl font-grotesk font-bold text-gray-900 dark:text-white">DevOps &amp;
                        Infrastructure</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                        Containerizing web services with Docker, managing multi-branch Git pipelines, deploying cloud
                        architectures (AWS &amp; Vercel), and mentoring 500+ students in STEAM.
                    </p>
                    <div class="pt-2">
                        <span
                            class="text-xs uppercase font-bold tracking-wider text-emerald-600 dark:text-emerald-400 block mb-1">Tools
                            &amp; Methods</span>
                        <p class="text-xs font-mono text-gray-700 dark:text-gray-300">Docker • Git/GitHub • AWS • CI/CD
                            • Linux • Figma • Canva</p>
                    </div>
                </div>
                <div class="pt-4 border-t border-gray-100 dark:border-gray-700/50 flex items-center justify-between">
                    <span class="text-xs font-semibold text-gray-500">Domain Proficiency</span>
                    <span class="text-sm font-bold text-emerald-600 dark:text-emerald-400">91% Mastery</span>
                </div>
            </div>

            <div class="lg:col-span-8 grid grid-cols-2 sm:grid-cols-3 gap-3.5">
                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-emerald-500" stroke-width="3.5" stroke-dasharray="92, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">92%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">Git &amp; GitHub</h4>
                    <span class="text-[11px] text-emerald-600 dark:text-emerald-400 font-medium">Version Control</span>
                </div>

                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-emerald-500" stroke-width="3.5" stroke-dasharray="82, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">82%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">Docker</h4>
                    <span class="text-[11px] text-emerald-600 dark:text-emerald-400 font-medium">Containers</span>
                </div>

                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-emerald-500" stroke-width="3.5" stroke-dasharray="78, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">78%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">AWS Cloud</h4>
                    <span class="text-[11px] text-emerald-600 dark:text-emerald-400 font-medium">EC2 /
                        Deployments</span>
                </div>

                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-emerald-500" stroke-width="3.5" stroke-dasharray="86, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">86%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">Figma &amp; UI/UX</h4>
                    <span class="text-[11px] text-emerald-600 dark:text-emerald-400 font-medium">Product Design</span>
                </div>

                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-emerald-500" stroke-width="3.5" stroke-dasharray="95, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">95%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">STEAM Mentorship</h4>
                    <span class="text-[11px] text-emerald-600 dark:text-emerald-400 font-medium">500+ Students</span>
                </div>

                <div
                    class="bento-card rounded-2xl p-4 flex flex-col items-center text-center justify-between hover:scale-[1.02] transition-transform">
                    <div class="relative w-14 h-14 flex items-center justify-center my-1">
                        <svg class="w-14 h-14 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-width="3.5" stroke="currentColor"
                                fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                            <path class="text-emerald-500" stroke-width="3.5" stroke-dasharray="92, 100"
                                stroke-linecap="round" stroke="currentColor" fill="none"
                                d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                        </svg>
                        <span class="absolute text-xs font-bold font-mono text-gray-900 dark:text-white">92%</span>
                    </div>
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white mt-1">Problem Solving</h4>
                    <span class="text-[11px] text-emerald-600 dark:text-emerald-400 font-medium">System
                        Architecture</span>
                </div>
            </div>
        </div>

    </div>
</section>