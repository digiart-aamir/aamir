<!-- ========================================================================= -->
<!-- Aamir AI Assistant - Fancy Floating Chatbot UI                            -->
<!-- Positioned on bottom-right directly above the WhatsApp button              -->
<!-- ========================================================================= -->

<div id="aamir-chatbot-root" class="relative z-50">

    <!-- Chatbot Floating Action Button (Positioned above WhatsApp FAB) -->
    <div class="fixed bottom-[92px] right-[20px] sm:right-[28px] z-50 flex items-center">
        <!-- Floating Tooltip Pill (Shows on hover) -->
        <div id="chatbot-tooltip"
            class="mr-3 hidden sm:flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-gray-900/90 dark:bg-gray-800/90 text-white text-xs font-semibold shadow-xl border border-indigo-500/30 backdrop-blur-md opacity-0 translate-x-3 pointer-events-none transition-all duration-300">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
            <span>Chat with Aamir AI ✨</span>
        </div>

        <!-- Main Circular Launcher Button -->
        <button id="chatbot-toggle-btn"
            type="button"
            class="relative w-14 h-14 rounded-full bg-gradient-to-tr from-indigo-600 via-purple-600 to-pink-500 text-white shadow-lg shadow-indigo-500/40 hover:shadow-indigo-500/70 hover:scale-110 active:scale-95 transition-all duration-300 flex items-center justify-center group focus:outline-none focus:ring-4 focus:ring-indigo-400/40"
            aria-label="Open Aamir AI Assistant">

            <!-- Glowing Halo Ring -->
            <span class="absolute -inset-1 rounded-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 opacity-60 blur-sm group-hover:opacity-100 animate-pulse transition-opacity -z-10"></span>

            <!-- Unread / Live Notification Indicator Badge -->
            <span id="chatbot-badge"
                class="absolute -top-1 -right-1 w-5 h-5 rounded-full bg-emerald-500 border-2 border-white dark:border-gray-900 text-white text-[10px] font-extrabold flex items-center justify-center shadow-md animate-bounce">
                AI
            </span>

            <!-- Bot Robot SVG Icon (Visible when closed) -->
            <svg id="chatbot-icon-closed" class="w-7 h-7 fill-current transition-all duration-300 transform group-hover:rotate-6" viewBox="0 0 24 24">
                <path d="M12 2a2 2 0 0 1 2 2c0 .74-.4 1.38-1 1.72V7h4a3 3 0 0 1 3 3v8a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3v-8a3 3 0 0 1 3-3h4V5.72c-.6-.34-1-.98-1-1.72a2 2 0 0 1 2-2M7.5 11a1.5 1.5 0 0 0 0 3 1.5 1.5 0 0 0 0-3m9 0a1.5 1.5 0 0 0 0 3 1.5 1.5 0 0 0 0-3M9 16.5a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2H9Z"/>
                <path d="M2 13h1v2H2zm19 0h1v2h-1z"/>
            </svg>

            <!-- Close (X) SVG Icon (Visible when open) -->
            <svg id="chatbot-icon-opened" class="w-6 h-6 stroke-current hidden transition-all duration-300 transform rotate-0 hover:rotate-90" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Fancy Chatbot Window / Modal Panel -->
    <div id="chatbot-window"
        class="fixed bottom-[158px] right-[16px] sm:right-[28px] z-50 w-[calc(100vw-32px)] sm:w-[400px] max-w-[400px] h-[550px] max-h-[calc(100vh-180px)] rounded-3xl bg-white/95 dark:bg-gray-900/95 backdrop-blur-xl border border-indigo-200/60 dark:border-indigo-900/60 shadow-2xl shadow-indigo-950/30 flex flex-col overflow-hidden transition-all duration-300 origin-bottom-right scale-95 opacity-0 pointer-events-none translate-y-4">

        <!-- Ambient Background Glows inside Chat Panel -->
        <div class="absolute -top-20 -right-20 w-44 h-44 bg-indigo-500/15 rounded-full blur-2xl pointer-events-none"></div>
        <div class="absolute -bottom-20 -left-20 w-44 h-44 bg-purple-500/15 rounded-full blur-2xl pointer-events-none"></div>

        <!-- 1. Chatbot Header -->
        <div class="relative z-10 px-4 py-3.5 bg-gradient-to-r from-indigo-600 via-purple-600 to-indigo-700 text-white flex items-center justify-between shadow-md">
            <div class="flex items-center gap-3">
                <!-- Glowing Bot Avatar -->
                <div class="relative">
                    <div class="w-10 h-10 rounded-2xl bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center text-white shadow-inner">
                        <svg class="w-6 h-6 fill-current text-white" viewBox="0 0 24 24">
                            <path d="M12 2a2 2 0 0 1 2 2c0 .74-.4 1.38-1 1.72V7h4a3 3 0 0 1 3 3v8a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3v-8a3 3 0 0 1 3-3h4V5.72c-.6-.34-1-.98-1-1.72a2 2 0 0 1 2-2M7.5 11a1.5 1.5 0 0 0 0 3 1.5 1.5 0 0 0 0-3m9 0a1.5 1.5 0 0 0 0 3 1.5 1.5 0 0 0 0-3M9 16.5a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2H9Z"/>
                        </svg>
                    </div>
                    <!-- Live Status Beacon -->
                    <span class="absolute -bottom-0.5 -right-0.5 w-3.5 h-3.5 rounded-full bg-emerald-400 border-2 border-indigo-700 animate-pulse"></span>
                </div>

                <div>
                    <div class="flex items-center gap-1.5">
                        <h4 class="font-grotesk font-bold text-sm tracking-wide leading-tight">Aamir AI Assistant</h4>
                        <span class="px-1.5 py-0.2 rounded bg-white/20 text-[10px] font-mono font-semibold uppercase">v2.0</span>
                    </div>
                    <p class="text-[11px] text-indigo-100 flex items-center gap-1">
                        <span>●</span> Active Knowledge Engine
                    </p>
                </div>
            </div>

            <!-- Header Action Controls -->
            <div class="flex items-center gap-1">
                <!-- Clear Chat Button -->
                <button id="chatbot-clear-btn"
                    type="button"
                    class="p-1.5 rounded-xl text-indigo-100 hover:text-white hover:bg-white/10 transition-colors"
                    title="Clear Conversation">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>

                <!-- Sound Mute/Unmute Toggle -->
                <button id="chatbot-sound-btn"
                    type="button"
                    class="p-1.5 rounded-xl text-indigo-100 hover:text-white hover:bg-white/10 transition-colors"
                    title="Toggle Audio Feedback">
                    <svg id="sound-on-icon" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                    </svg>
                    <svg id="sound-off-icon" class="w-4 h-4 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2" />
                    </svg>
                </button>

                <!-- Close Window Button -->
                <button id="chatbot-close-btn"
                    type="button"
                    class="p-1.5 rounded-xl text-indigo-100 hover:text-white hover:bg-white/10 transition-colors"
                    title="Minimize Assistant">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- 2. Chat Message Stream Body -->
        <div id="chatbot-messages"
            class="flex-1 p-4 overflow-y-auto space-y-3.5 scrollbar-thin text-xs sm:text-sm">
            <!-- Messages are injected here dynamically via JS -->
        </div>

        <!-- 3. Interactive Quick Question Pills (Chips) -->
        <div id="chatbot-quick-chips"
            class="px-3.5 py-2 bg-gray-50/80 dark:bg-gray-800/80 border-t border-gray-100 dark:border-gray-800 flex items-center gap-1.5 overflow-x-auto scrollbar-none">
            <button type="button" class="quick-chip whitespace-nowrap px-2.5 py-1 rounded-full bg-white dark:bg-gray-700 hover:bg-indigo-50 dark:hover:bg-indigo-950/60 border border-gray-200 dark:border-gray-600 hover:border-indigo-400 text-[11px] font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all flex items-center gap-1 shrink-0"
                data-query="What are your featured engineering projects?">
                <span>🤖 Top Projects</span>
            </button>
            <button type="button" class="quick-chip whitespace-nowrap px-2.5 py-1 rounded-full bg-white dark:bg-gray-700 hover:bg-indigo-50 dark:hover:bg-indigo-950/60 border border-gray-200 dark:border-gray-600 hover:border-indigo-400 text-[11px] font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all flex items-center gap-1 shrink-0"
                data-query="Tell me about your 14 Kaggle Datasets">
                <span>📊 Kaggle Datasets</span>
            </button>
            <button type="button" class="quick-chip whitespace-nowrap px-2.5 py-1 rounded-full bg-white dark:bg-gray-700 hover:bg-indigo-50 dark:hover:bg-indigo-950/60 border border-gray-200 dark:border-gray-600 hover:border-indigo-400 text-[11px] font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all flex items-center gap-1 shrink-0"
                data-query="How can I contact or hire Engr. Aamir Jamil?">
                <span>💼 Hire / Contact</span>
            </button>
            <button type="button" class="quick-chip whitespace-nowrap px-2.5 py-1 rounded-full bg-white dark:bg-gray-700 hover:bg-indigo-50 dark:hover:bg-indigo-950/60 border border-gray-200 dark:border-gray-600 hover:border-indigo-400 text-[11px] font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all flex items-center gap-1 shrink-0"
                data-query="What tech stack and AI skills do you have?">
                <span>⚡ Tech Stack</span>
            </button>
            <button type="button" class="quick-chip whitespace-nowrap px-2.5 py-1 rounded-full bg-white dark:bg-gray-700 hover:bg-indigo-50 dark:hover:bg-indigo-950/60 border border-gray-200 dark:border-gray-600 hover:border-indigo-400 text-[11px] font-medium text-gray-700 dark:text-gray-200 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all flex items-center gap-1 shrink-0"
                data-query="What is ASBots platform?">
                <span>🌐 About ASBots</span>
            </button>
        </div>

        <!-- 4. Chat Input Form -->
        <form id="chatbot-form" class="relative p-3 bg-white dark:bg-gray-900 border-t border-gray-100 dark:border-gray-800 flex items-center gap-2">
            <div class="relative flex-1">
                <input id="chatbot-input"
                    type="text"
                    autocomplete="off"
                    placeholder="Ask about AI, projects, hiring..."
                    class="w-full pl-3.5 pr-9 py-2.5 rounded-2xl bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring-2 focus:ring-indigo-500/20 text-xs sm:text-sm text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 transition-all outline-none">
            </div>

            <!-- Send Button -->
            <button id="chatbot-send-btn"
                type="submit"
                class="w-10 h-10 rounded-2xl bg-gradient-to-tr from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white shadow-md shadow-indigo-500/25 flex items-center justify-center shrink-0 hover:scale-105 active:scale-95 transition-all disabled:opacity-50 disabled:pointer-events-none"
                aria-label="Send Message">
                <svg class="w-4 h-4 transform rotate-45 -translate-y-0.5 -translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
            </button>
        </form>

        <!-- 5. Subtle Footer Credit & Direct WhatsApp Link -->
        <div class="px-4 py-1.5 bg-gray-50 dark:bg-gray-900/90 border-t border-gray-100 dark:border-gray-800/60 flex items-center justify-between text-[10px] text-gray-400 dark:text-gray-500">
            <span>Powered by Aamir Portfolio Engine</span>
            <a href="https://wa.me/923414579704" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-500 dark:hover:text-emerald-400 font-semibold flex items-center gap-1 transition-colors">
                <span>Direct WhatsApp</span> 💬
            </a>
        </div>

    </div>

</div>

<!-- ========================================================================= -->
<!-- Chatbot Interactive Engine Script                                         -->
<!-- ========================================================================= -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const root = document.getElementById('aamir-chatbot-root');
    if (!root) return;

    const toggleBtn = document.getElementById('chatbot-toggle-btn');
    const closeBtn = document.getElementById('chatbot-close-btn');
    const clearBtn = document.getElementById('chatbot-clear-btn');
    const soundBtn = document.getElementById('chatbot-sound-btn');
    const soundOnIcon = document.getElementById('sound-on-icon');
    const soundOffIcon = document.getElementById('sound-off-icon');
    const chatWindow = document.getElementById('chatbot-window');
    const messagesBox = document.getElementById('chatbot-messages');
    const inputForm = document.getElementById('chatbot-form');
    const chatInput = document.getElementById('chatbot-input');
    const tooltip = document.getElementById('chatbot-tooltip');
    const badge = document.getElementById('chatbot-badge');
    const iconClosed = document.getElementById('chatbot-icon-closed');
    const iconOpened = document.getElementById('chatbot-icon-opened');
    const quickChips = document.querySelectorAll('.quick-chip');

    let isOpen = false;
    let soundEnabled = true;
    let audioCtx = null;

    // Web Audio Soft Chime Generator
    function playBeep(type = 'receive') {
        if (!soundEnabled) return;
        try {
            if (!audioCtx) {
                audioCtx = new (window.AudioContext || window.webkitAudioContext)();
            }
            if (audioCtx.state === 'suspended') {
                audioCtx.resume();
            }
            const osc = audioCtx.createOscillator();
            const gain = audioCtx.createGain();
            osc.connect(gain);
            gain.connect(audioCtx.destination);

            const now = audioCtx.currentTime;
            if (type === 'receive') {
                osc.type = 'sine';
                osc.frequency.setValueAtTime(587.33, now); // D5
                osc.frequency.exponentialRampToValueAtTime(880, now + 0.15); // A5
                gain.gain.setValueAtTime(0.04, now);
                gain.gain.exponentialRampToValueAtTime(0.001, now + 0.25);
                osc.start(now);
                osc.stop(now + 0.25);
            } else {
                osc.type = 'sine';
                osc.frequency.setValueAtTime(440, now);
                osc.frequency.exponentialRampToValueAtTime(659.25, now + 0.1);
                gain.gain.setValueAtTime(0.03, now);
                gain.gain.exponentialRampToValueAtTime(0.001, now + 0.15);
                osc.start(now);
                osc.stop(now + 0.15);
            }
        } catch (e) {
            // Audio context not allowed or failed silently
        }
    }

    // Toggle Chat Window
    function setChatOpen(open) {
        isOpen = open;
        if (isOpen) {
            chatWindow.classList.remove('scale-95', 'opacity-0', 'pointer-events-none', 'translate-y-4');
            chatWindow.classList.add('scale-100', 'opacity-100', 'pointer-events-auto', 'translate-y-0');
            iconClosed.classList.add('hidden');
            iconOpened.classList.remove('hidden');
            if (badge) badge.classList.add('hidden');
            if (tooltip) tooltip.classList.add('hidden');
            setTimeout(() => chatInput.focus(), 250);
            scrollToBottom();
        } else {
            chatWindow.classList.add('scale-95', 'opacity-0', 'pointer-events-none', 'translate-y-4');
            chatWindow.classList.remove('scale-100', 'opacity-100', 'pointer-events-auto', 'translate-y-0');
            iconClosed.classList.remove('hidden');
            iconOpened.classList.add('hidden');
        }
    }

    toggleBtn.addEventListener('click', () => setChatOpen(!isOpen));
    closeBtn.addEventListener('click', () => setChatOpen(false));

    // Tooltip Hover effect
    toggleBtn.addEventListener('mouseenter', () => {
        if (!isOpen && tooltip) {
            tooltip.classList.remove('hidden', 'opacity-0', 'translate-x-3');
            tooltip.classList.add('opacity-100', 'translate-x-0');
        }
    });
    toggleBtn.addEventListener('mouseleave', () => {
        if (tooltip) {
            tooltip.classList.add('opacity-0', 'translate-x-3');
            setTimeout(() => {
                if (!isOpen) tooltip.classList.add('hidden');
            }, 300);
        }
    });

    // Sound toggle
    soundBtn.addEventListener('click', () => {
        soundEnabled = !soundEnabled;
        soundOnIcon.classList.toggle('hidden', !soundEnabled);
        soundOffIcon.classList.toggle('hidden', soundEnabled);
    });

    // Clear chat
    clearBtn.addEventListener('click', () => {
        messagesBox.innerHTML = '';
        renderWelcomeMessage();
    });

    function scrollToBottom() {
        setTimeout(() => {
            messagesBox.scrollTop = messagesBox.scrollHeight;
        }, 50);
    }

    let conversationHistory = [];

    // Format Message Text with clickable Markdown Links and rich typography
    function formatText(text) {
        if (!text) return '';
        let out = text;

        // Bold: **text**
        out = out.replace(/\*\*([^*]+)\*\*/g, '<strong class="font-semibold text-gray-900 dark:text-white">$1</strong>');

        // Markdown links: [Title](url) -> <a href="url" ...>Title</a>
        out = out.replace(/\[([^\]]+)\]\(([^)]+)\)/g, (match, title, url) => {
            const isInternal = url.startsWith('#');
            const target = isInternal ? '' : 'target="_blank" rel="noopener noreferrer"';
            return `<a href="${url}" ${target} class="font-bold underline text-indigo-600 dark:text-indigo-400 hover:text-indigo-700 dark:hover:text-indigo-300 transition-colors">${title}</a>`;
        });

        // Simple table converter if Groq returns markdown tables
        if (out.includes('|') && out.includes('---')) {
            const lines = out.split('\n');
            let inTable = false;
            let tableHtml = '<div class="overflow-x-auto my-2"><table class="min-w-full text-[11px] border border-gray-200 dark:border-gray-700 rounded-lg overflow-hidden">';
            let nonTableLines = [];

            for (let line of lines) {
                if (line.trim().startsWith('|') && line.trim().endsWith('|')) {
                    if (!inTable) inTable = true;
                    if (line.includes('---')) continue; // separator row
                    const cells = line.split('|').filter((c, i, a) => i > 0 && i < a.length - 1);
                    tableHtml += '<tr class="border-b border-gray-200 dark:border-gray-700/60">';
                    cells.forEach(c => {
                        tableHtml += `<td class="p-1.5 text-gray-700 dark:text-gray-300">${c.trim()}</td>`;
                    });
                    tableHtml += '</tr>';
                } else {
                    if (inTable) {
                        tableHtml += '</table></div>';
                        nonTableLines.push(tableHtml);
                        inTable = false;
                    }
                    nonTableLines.push(line);
                }
            }
            if (inTable) {
                tableHtml += '</table></div>';
                nonTableLines.push(tableHtml);
            }
            out = nonTableLines.join('\n');
        }

        // Linebreaks
        out = out.replace(/\n/g, '<br>');
        return out;
    }

    // Append a message to the stream
    function appendMessage(sender, text) {
        const row = document.createElement('div');
        row.className = `flex gap-2.5 items-end ${sender === 'user' ? 'justify-end' : 'justify-start'}`;

        const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

        if (sender === 'bot') {
            row.innerHTML = `
                <div class="w-7 h-7 rounded-xl bg-gradient-to-tr from-indigo-600 to-purple-600 text-white flex items-center justify-center text-xs shrink-0 shadow-sm">
                    🤖
                </div>
                <div class="max-w-[85%] rounded-2xl rounded-bl-xs p-3 bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-gray-100 border border-gray-200/80 dark:border-gray-700 shadow-sm leading-relaxed text-xs sm:text-[13px]">
                    <div>${formatText(text)}</div>
                    <span class="block text-[10px] text-gray-400 dark:text-gray-500 mt-1 text-right">${time}</span>
                </div>
            `;
        } else {
            row.innerHTML = `
                <div class="max-w-[85%] rounded-2xl rounded-br-xs p-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-md leading-relaxed text-xs sm:text-[13px]">
                    <div>${formatText(text)}</div>
                    <span class="block text-[10px] text-indigo-200 mt-1 text-right">${time}</span>
                </div>
                <div class="w-7 h-7 rounded-xl bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 flex items-center justify-center text-xs shrink-0">
                    👤
                </div>
            `;
        }

        messagesBox.appendChild(row);
        scrollToBottom();
    }

    // Show Typing Indicator
    function showTypingIndicator() {
        const indicator = document.createElement('div');
        indicator.id = 'typing-indicator-bubble';
        indicator.className = 'flex gap-2.5 items-end justify-start';
        indicator.innerHTML = `
            <div class="w-7 h-7 rounded-xl bg-gradient-to-tr from-indigo-600 to-purple-600 text-white flex items-center justify-center text-xs shrink-0 shadow-sm">
                🤖
            </div>
            <div class="rounded-2xl rounded-bl-xs px-3.5 py-2.5 bg-gray-100 dark:bg-gray-800 border border-gray-200/80 dark:border-gray-700 shadow-sm flex items-center gap-1.5">
                <span class="w-2 h-2 rounded-full bg-indigo-500 animate-bounce" style="animation-delay: 0ms"></span>
                <span class="w-2 h-2 rounded-full bg-purple-500 animate-bounce" style="animation-delay: 150ms"></span>
                <span class="w-2 h-2 rounded-full bg-pink-500 animate-bounce" style="animation-delay: 300ms"></span>
            </div>
        `;
        messagesBox.appendChild(indicator);
        scrollToBottom();
    }

    function removeTypingIndicator() {
        const ind = document.getElementById('typing-indicator-bubble');
        if (ind) ind.remove();
    }

    // Welcome message initialization
    function renderWelcomeMessage() {
        conversationHistory = [];
        const welcomeText = "👋 **Hi! I'm Engr. Aamir Jamil's AI Assistant** (Powered by Groq `gpt-oss-120b`).\n\nI can answer questions about his **AI & Robotics projects**, **14 Kaggle Datasets**, **ASBots platform**, or connect you directly for collaboration.\n\nHow can I help you today?";
        appendMessage('bot', welcomeText);
    }
    renderWelcomeMessage();

    // Fallback Offline Generator if API is unreachable
    function generateFallbackAnswer(query) {
        const q = query.toLowerCase().trim();
        if (q.includes('project') || q.includes('work') || q.includes('system') || q.includes('robot')) {
            return "🚀 **Engr. Aamir has built 10+ featured systems:**\n\n1. **Waiter-Less Delivery Robot** (ESP32 autonomous navigation)\n2. **Dual-Axis Solar Tracker** (ESP-NOW mesh networking)\n3. **CertifAI Platform** ([Demo](https://graphics-certifai.netlify.app/))\n4. **ASBots Enterprise Platform** ([asbots.com](https://asbots.com))\n\nCheck out the [Portfolio Section](#portfolio)!";
        }
        if (q.includes('kaggle') || q.includes('dataset') || q.includes('data')) {
            return "📊 **Kaggle Datasets Hub:**\n\nEngr. Aamir has authored **14 public machine learning datasets** with 8,000+ views and downloads!\n\nBrowse all datasets in the [Kaggle Hub](#kaggle) or on his [Kaggle Profile](https://www.kaggle.com/engraamirjamil)!";
        }
        return "✨ Reach Engr. Aamir directly on **[WhatsApp](https://wa.me/923414579704)** or email **[digiart.aamir@gmail.com](mailto:digiart.aamir@gmail.com)**!";
    }

    // Submit handler with live Groq openai/gpt-oss-120b integration
    async function handleUserSubmit(query) {
        if (!query || !query.trim()) return;
        const cleanQuery = query.trim();

        // 1. Append user message & chime
        appendMessage('user', cleanQuery);
        playBeep('send');
        chatInput.value = '';

        // Add to history
        conversationHistory.push({ role: 'user', content: cleanQuery });

        // 2. Show typing indicator
        showTypingIndicator();

        try {
            // Call local PHP endpoint connected to Groq
            const res = await fetch('api/chat.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    message: cleanQuery,
                    history: conversationHistory
                })
            });

            removeTypingIndicator();

            if (res.ok) {
                const data = await res.json();
                if (data && data.reply) {
                    conversationHistory.push({ role: 'assistant', content: data.reply });
                    appendMessage('bot', data.reply);
                    playBeep('receive');
                    return;
                }
            }
            throw new Error('Non-200 or empty response');
        } catch (err) {
            removeTypingIndicator();
            const fallback = generateFallbackAnswer(cleanQuery);
            conversationHistory.push({ role: 'assistant', content: fallback });
            appendMessage('bot', fallback);
            playBeep('receive');
        }
    }

    inputForm.addEventListener('submit', function (e) {
        e.preventDefault();
        handleUserSubmit(chatInput.value);
    });

    // Quick chips click
    quickChips.forEach(chip => {
        chip.addEventListener('click', function () {
            const query = this.getAttribute('data-query');
            if (query) {
                handleUserSubmit(query);
            }
        });
    });

});
</script>
