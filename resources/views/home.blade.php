<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Karama Data — Native-speaker Arabic dialect annotation for AI companies. Your Arabic AI is only as good as the humans who train it. NLP, ASR, RLHF. US LLC.">
    <title>Karama Data | Arabic AI Data Annotation</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg viewBox='0 0 40 46' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect width='40' height='46' rx='8' fill='%230f2040'/%3E%3Cline x1='11' y1='6' x2='11' y2='40' stroke='white' stroke-width='8' stroke-linecap='round'/%3E%3Cline x1='15' y1='23' x2='34' y2='6' stroke='white' stroke-width='7' stroke-linecap='round'/%3E%3Cline x1='15' y1='23' x2='34' y2='40' stroke='%233b82f6' stroke-width='7' stroke-linecap='round'/%3E%3Ccircle cx='15' cy='23' r='5' fill='%2306b6d4'/%3E%3C/svg%3E">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        slate: {
                            50: '#f8fafc', 100: '#f1f5f9', 200: '#e2e8f0',
                            300: '#cbd5e1', 400: '#94a3b8', 500: '#64748b',
                            600: '#475569', 700: '#334155', 800: '#1e293b',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* ── Scroll reveal ── */
        .reveal {
            opacity: 0;
            transform: translateY(36px);
            transition: opacity .7s cubic-bezier(.16,1,.3,1), transform .7s cubic-bezier(.16,1,.3,1);
        }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        .reveal-d1 { transition-delay: .08s; }
        .reveal-d2 { transition-delay: .16s; }
        .reveal-d3 { transition-delay: .24s; }
        .reveal-d4 { transition-delay: .32s; }
        .reveal-d5 { transition-delay: .40s; }

        /* ── Hero SVG floaters ── */
        @keyframes float-a {
            0%,100% { transform: translateY(0px) rotate(0deg); }
            40%     { transform: translateY(-18px) rotate(2deg); }
            70%     { transform: translateY(8px) rotate(-1deg); }
        }
        @keyframes float-b {
            0%,100% { transform: translateY(0px); }
            50%     { transform: translateY(-14px); }
        }
        @keyframes pulse-node {
            0%,100% { opacity:.35; r:4; }
            50%     { opacity:.9;  r:6; }
        }
        @keyframes dash-flow {
            to { stroke-dashoffset: -24; }
        }
        @keyframes glow-ring {
            0%,100% { opacity:.15; }
            50%     { opacity:.4; }
        }
        .float-a { animation: float-a 7s ease-in-out infinite; }
        .float-b { animation: float-b 5.5s ease-in-out infinite; }
        .float-c { animation: float-a 9s ease-in-out infinite reverse; }
        .dash-flow { animation: dash-flow 2s linear infinite; }
        .glow-ring { animation: glow-ring 3s ease-in-out infinite; }
        .pulse-node { animation: pulse-node 2.5s ease-in-out infinite; }

        /* ── Progress bars ── */
        .bar-fill { width: 0 !important; transition: width 1.5s cubic-bezier(.4,0,.2,1); }
        .bar-fill.animated { width: var(--target-w) !important; }

        /* ── Stat counter ── */
        .stat-num { font-variant-numeric: tabular-nums; }

        /* ── Card hover lift ── */
        .card-lift { transition: transform .25s ease, box-shadow .25s ease; }
        .card-lift:hover { transform: translateY(-4px); box-shadow: 0 12px 32px rgba(15,32,64,.10); }

        /* ── Hero gradient shimmer ── */
        @keyframes shimmer-bg {
            0%   { background-position: 0% 50%; }
            50%  { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .hero-gradient {
            background: linear-gradient(135deg, #0a1628 0%, #0f2040 35%, #0d2d5a 65%, #0a1628 100%);
            background-size: 300% 300%;
            animation: shimmer-bg 12s ease infinite;
        }
    </style>
</head>
<body class="bg-white text-slate-800 antialiased">

    {{-- =========================================================
         HEADER / NAV
    ========================================================= --}}
    <header class="fixed top-0 inset-x-0 z-50 bg-white/95 backdrop-blur border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-6 flex items-center justify-between h-16">
            <a href="#" class="flex items-center gap-2.5">
                <svg viewBox="0 0 40 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-9 w-auto">
                    <line x1="11" y1="6" x2="11" y2="40" stroke="#0f2040" stroke-width="8" stroke-linecap="round"/>
                    <line x1="15" y1="23" x2="34" y2="6" stroke="#0f2040" stroke-width="7" stroke-linecap="round"/>
                    <line x1="15" y1="23" x2="34" y2="40" stroke="#3b82f6" stroke-width="7" stroke-linecap="round"/>
                    <circle cx="15" cy="23" r="5" fill="#06b6d4"/>
                </svg>
                <span class="text-lg font-bold tracking-tight">
                    <span class="text-[#0f2040]">Karama</span><span class="text-blue-500"> Data</span>
                </span>
            </a>
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-600">
                <a href="#why-arabic" class="hover:text-[#1e3a5f] transition-colors">Why Arabic</a>
                <a href="#quality" class="hover:text-[#1e3a5f] transition-colors">Results</a>
                <a href="#services" class="hover:text-[#1e3a5f] transition-colors">Services</a>
                <a href="#about" class="hover:text-[#1e3a5f] transition-colors">About</a>
                <a href="#workforce" class="hover:text-[#1e3a5f] transition-colors">Our Workforce</a>
                <a href="#contact" class="bg-[#1e3a5f] text-white px-4 py-2 rounded-md hover:bg-[#0f2040] transition-colors">
                    Get in Touch
                </a>
            </nav>
            {{-- Mobile menu button --}}
            <button id="menu-btn" class="md:hidden p-2 text-slate-600" aria-label="Open menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
        {{-- Mobile nav --}}
        <div id="mobile-menu" class="hidden md:hidden border-t border-slate-200 bg-white px-6 py-4 space-y-3 text-sm font-medium">
            <a href="#why-arabic" class="block text-slate-700 hover:text-[#1e3a5f]">Why Arabic</a>
            <a href="#quality" class="block text-slate-700 hover:text-[#1e3a5f]">Results</a>
            <a href="#services" class="block text-slate-700 hover:text-[#1e3a5f]">Services</a>
            <a href="#about" class="block text-slate-700 hover:text-[#1e3a5f]">About</a>
            <a href="#workforce" class="block text-slate-700 hover:text-[#1e3a5f]">Our Workforce</a>
            <a href="#contact" class="block text-white bg-[#1e3a5f] px-4 py-2 rounded-md text-center hover:bg-[#0f2040]">Get in Touch</a>
        </div>
    </header>

    <main>

        {{-- =========================================================
             HERO
        ========================================================= --}}
        <section class="pt-32 pb-24 hero-gradient overflow-hidden">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid lg:grid-cols-2 gap-12 items-center">

                    {{-- Left: text --}}
                    <div>
                        <span class="inline-block text-blue-300 text-sm font-medium tracking-widest uppercase mb-4">
                            Arabic AI Data Annotation
                        </span>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-6">
                            Your Arabic AI is only as good as the humans who train it.
                        </h1>
                        <p class="text-lg text-slate-300 leading-relaxed mb-10 max-w-xl">
                            91% accuracy, benchmarked against published research. US-incorporated. Worker-owned. No shortcuts.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#contact" class="inline-flex items-center justify-center bg-blue-500 hover:bg-blue-400 text-white font-medium px-8 py-3 rounded-md transition-colors">
                                Start Your Project
                            </a>
                            <a href="#quality" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 border border-white/20 text-white font-medium px-8 py-3 rounded-md transition-colors">
                                See Our Results
                            </a>
                        </div>
                    </div>

                    {{-- Right: animated SVG illustration --}}
                    <div class="hidden lg:flex items-center justify-center">
                        <svg viewBox="0 0 420 360" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full max-w-md">

                            {{-- Background glow --}}
                            <circle cx="210" cy="180" r="140" fill="rgba(37,99,235,0.06)" class="glow-ring"/>
                            <circle cx="210" cy="180" r="100" fill="rgba(37,99,235,0.05)" class="glow-ring" style="animation-delay:.8s"/>

                            {{-- Animated dashed flow lines --}}
                            <line x1="100" y1="90"  x2="185" y2="165" stroke="rgba(96,165,250,0.3)" stroke-width="1.5" stroke-dasharray="6 4" class="dash-flow"/>
                            <line x1="100" y1="180" x2="180" y2="180" stroke="rgba(96,165,250,0.3)" stroke-width="1.5" stroke-dasharray="6 4" class="dash-flow" style="animation-delay:.4s"/>
                            <line x1="100" y1="270" x2="185" y2="197" stroke="rgba(96,165,250,0.3)" stroke-width="1.5" stroke-dasharray="6 4" class="dash-flow" style="animation-delay:.8s"/>
                            <line x1="237" y1="165" x2="310" y2="100" stroke="rgba(96,165,250,0.25)" stroke-width="1.5" stroke-dasharray="6 4" class="dash-flow" style="animation-delay:.2s"/>
                            <line x1="240" y1="180" x2="315" y2="180" stroke="rgba(96,165,250,0.25)" stroke-width="1.5" stroke-dasharray="6 4" class="dash-flow" style="animation-delay:.6s"/>
                            <line x1="237" y1="197" x2="310" y2="265" stroke="rgba(96,165,250,0.25)" stroke-width="1.5" stroke-dasharray="6 4" class="dash-flow" style="animation-delay:1s"/>

                            {{-- Input cards (left) --}}
                            <g class="float-b">
                                <rect x="12" y="62" width="88" height="52" rx="8" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.12)" stroke-width="1"/>
                                <text x="56" y="84" fill="rgba(255,255,255,0.5)" font-size="8" text-anchor="middle" font-family="monospace">اَلْعَرَبِيَّة</text>
                                <text x="56" y="100" fill="rgba(148,163,184,0.6)" font-size="7" text-anchor="middle">Raw Arabic Text</text>
                            </g>
                            <g class="float-a" style="animation-delay:.5s">
                                <rect x="12" y="154" width="88" height="52" rx="8" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.12)" stroke-width="1"/>
                                <text x="56" y="176" fill="rgba(255,255,255,0.5)" font-size="8" text-anchor="middle" font-family="monospace">🎙 Audio</text>
                                <text x="56" y="192" fill="rgba(148,163,184,0.6)" font-size="7" text-anchor="middle">Speech Data</text>
                            </g>
                            <g class="float-c" style="animation-delay:1s">
                                <rect x="12" y="246" width="88" height="52" rx="8" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.12)" stroke-width="1"/>
                                <text x="56" y="268" fill="rgba(255,255,255,0.5)" font-size="8" text-anchor="middle" font-family="monospace">AI ↔ AI</text>
                                <text x="56" y="284" fill="rgba(148,163,184,0.6)" font-size="7" text-anchor="middle">Model Responses</text>
                            </g>

                            {{-- Center: Karama node --}}
                            <circle cx="210" cy="180" r="38" fill="rgba(15,32,64,0.9)" stroke="#3b82f6" stroke-width="1.5"/>
                            <circle cx="210" cy="180" r="44" fill="none" stroke="rgba(59,130,246,0.2)" stroke-width="1" class="glow-ring"/>
                            {{-- K logo mark --}}
                            <line x1="200" y1="162" x2="200" y2="198" stroke="white" stroke-width="5" stroke-linecap="round"/>
                            <line x1="203" y1="180" x2="218" y2="163" stroke="white" stroke-width="4.5" stroke-linecap="round"/>
                            <line x1="203" y1="180" x2="218" y2="197" stroke="#3b82f6" stroke-width="4.5" stroke-linecap="round"/>
                            <circle cx="203" cy="180" r="3.5" fill="#06b6d4"/>

                            {{-- Pulsing nodes on center ring --}}
                            <circle cx="210" cy="136" r="4" fill="#3b82f6" class="pulse-node"/>
                            <circle cx="248" cy="156" r="4" fill="#3b82f6" class="pulse-node" style="animation-delay:.6s"/>
                            <circle cx="248" cy="204" r="4" fill="#3b82f6" class="pulse-node" style="animation-delay:1.2s"/>
                            <circle cx="210" cy="224" r="4" fill="#3b82f6" class="pulse-node" style="animation-delay:.3s"/>
                            <circle cx="172" cy="204" r="4" fill="#3b82f6" class="pulse-node" style="animation-delay:.9s"/>
                            <circle cx="172" cy="156" r="4" fill="#3b82f6" class="pulse-node" style="animation-delay:1.5s"/>

                            {{-- Output cards (right) --}}
                            <g class="float-b" style="animation-delay:.3s">
                                <rect x="308" y="72" width="100" height="52" rx="8" fill="rgba(34,197,94,0.08)" stroke="rgba(34,197,94,0.35)" stroke-width="1"/>
                                <text x="358" y="93" fill="#86efac" font-size="8" text-anchor="middle" font-weight="600">NLP ✓</text>
                                <text x="358" y="108" fill="rgba(134,239,172,0.6)" font-size="6.5" text-anchor="middle">Kappa 0.572</text>
                            </g>
                            <g class="float-a" style="animation-delay:.7s">
                                <rect x="313" y="154" width="100" height="52" rx="8" fill="rgba(59,130,246,0.08)" stroke="rgba(59,130,246,0.35)" stroke-width="1"/>
                                <text x="363" y="175" fill="#93c5fd" font-size="8" text-anchor="middle" font-weight="600">RLHF ✓</text>
                                <text x="363" y="190" fill="rgba(147,197,253,0.6)" font-size="6.5" text-anchor="middle">Kappa 0.623</text>
                            </g>
                            <g class="float-c" style="animation-delay:1.1s">
                                <rect x="308" y="238" width="100" height="52" rx="8" fill="rgba(168,85,247,0.08)" stroke="rgba(168,85,247,0.35)" stroke-width="1"/>
                                <text x="358" y="259" fill="#c4b5fd" font-size="8" text-anchor="middle" font-weight="600">ASR ✓</text>
                                <text x="358" y="274" fill="rgba(196,181,253,0.6)" font-size="6.5" text-anchor="middle">91.4% accuracy</text>
                            </g>
                        </svg>
                    </div>

                </div>
            </div>
        </section>

        {{-- =========================================================
             TRUST BAR
        ========================================================= --}}
        <section class="bg-[#1e3a5f] py-6">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-5 gap-6 text-center">
                    <div>
                        <div class="text-base font-semibold text-white leading-tight">AI &amp; Cybersecurity<br>Veterans</div>
                        <div class="text-sm text-blue-200 mt-1">Founded by</div>
                    </div>
                    <div>
                        <div class="text-2xl font-semibold text-white">5+</div>
                        <div class="text-sm text-blue-200 mt-1">Arabic Dialect Variants</div>
                    </div>
                    <div>
                        <div class="text-2xl font-semibold text-white">Multi-layer</div>
                        <div class="text-sm text-blue-200 mt-1">QA Review Process</div>
                    </div>
                    <div>
                        <div class="text-2xl font-semibold text-white">Arabic Only</div>
                        <div class="text-sm text-blue-200 mt-1">No Content Moderation</div>
                    </div>
                    <div>
                        <div class="text-2xl font-semibold text-white">Kappa 0.62</div>
                        <div class="text-sm text-blue-200 mt-1">RLHF Agreement Score</div>
                    </div>
                </div>
            </div>
        </section>

        {{-- =========================================================
             WHY ARABIC? WHY NOW?
        ========================================================= --}}
        <section id="why-arabic" class="py-24 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="mb-14 reveal">
                    <span class="text-blue-600 text-sm font-medium tracking-widest uppercase">The Opportunity</span>
                    <h2 class="mt-3 text-3xl md:text-4xl font-semibold text-[#0f2040]">Why Arabic? Why Now?</h2>
                    <p class="mt-4 text-slate-600 max-w-2xl leading-relaxed">
                        Arabic is one of the most spoken languages on earth — and one of the most underserved in AI. That gap is why enterprise buyers are reaching out, and why the quality of annotation data has never mattered more.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-[#f8fafc] rounded-xl border border-slate-200 p-8">
                        <div class="text-4xl font-bold text-[#0f2040] mb-2">400M+</div>
                        <div class="text-blue-600 font-medium mb-3">Arabic speakers worldwide</div>
                        <p class="text-slate-600 text-sm leading-relaxed">Arabic is the fifth most spoken language in the world, spanning 22 countries across the Middle East and North Africa — yet AI systems routinely fail to understand the people who speak it.</p>
                    </div>
                    <div class="bg-[#f8fafc] rounded-xl border border-slate-200 p-8">
                        <div class="text-4xl font-bold text-[#0f2040] mb-2">&lt;1%</div>
                        <div class="text-blue-600 font-medium mb-3">of NLP research covers Arabic</div>
                        <p class="text-slate-600 text-sm leading-relaxed">Despite hundreds of millions of speakers, Arabic receives a fraction of the research attention that English does. The training data infrastructure is just getting started — and the companies who invest now will have a significant head start.</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    <div class="border-l-4 border-blue-500 pl-6 py-2">
                        <div class="font-semibold text-[#0f2040] mb-2">The Translation Shortcut</div>
                        <p class="text-slate-600 text-sm leading-relaxed">Most "Arabic" AI training data is machine-translated English. It misses cultural context, dialect nuance, and the way Arabic is actually spoken day to day.</p>
                    </div>
                    <div class="border-l-4 border-blue-500 pl-6 py-2">
                        <div class="font-semibold text-[#0f2040] mb-2">The MSA Assumption</div>
                        <p class="text-slate-600 text-sm leading-relaxed">Models trained on Modern Standard Arabic sound robotic to real users who speak Levantine, Khaleeji, Egyptian, or Maghrebi every day. Dialect matters.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- =========================================================
             QUALITY METRICS
        ========================================================= --}}
        <section id="quality" class="py-24 bg-[#f8fafc]">
            <div class="max-w-6xl mx-auto px-6">
                <div class="mb-14 reveal">
                    <span class="text-blue-600 text-sm font-medium tracking-widest uppercase">Pilot Results</span>
                    <h2 class="mt-3 text-3xl md:text-4xl font-semibold text-[#0f2040]">Quality We Can Prove</h2>
                    <p class="mt-4 text-slate-600 max-w-2xl leading-relaxed">
                        In our first structured pilot, two Palestinian annotators in Gaza completed 3,031 annotation tasks across three task types — every result benchmarked against published international standards.
                    </p>
                </div>

                {{-- Headline stats --}}
                <div class="grid grid-cols-2 md:grid-cols-4 gap-5 mb-12">
                    <div class="bg-white rounded-xl border border-slate-200 p-6 text-center reveal reveal-d1 card-lift">
                        <div class="text-3xl font-bold text-[#0f2040] stat-num" data-target="3031" data-suffix="">3,031</div>
                        <div class="text-sm text-slate-500 mt-1">Tasks completed</div>
                        <div class="text-xs text-blue-600 font-medium mt-1">100% completion rate</div>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-6 text-center reveal reveal-d2 card-lift">
                        <div class="text-3xl font-bold text-[#0f2040] stat-num" data-target="91.4" data-suffix="%">91.4%</div>
                        <div class="text-sm text-slate-500 mt-1">Top accuracy</div>
                        <div class="text-xs text-blue-600 font-medium mt-1">Preference Ranking</div>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-6 text-center reveal reveal-d3 card-lift">
                        <div class="text-3xl font-bold text-[#0f2040] stat-num" data-target="0.623" data-suffix="">0.623</div>
                        <div class="text-sm text-slate-500 mt-1">RLHF Kappa score</div>
                        <div class="text-xs text-green-600 font-medium mt-1">↑ vs 0.27–0.39 (OpenAI/NVIDIA)</div>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-6 text-center reveal reveal-d4 card-lift">
                        <div class="text-3xl font-bold text-[#0f2040]">470/hr</div>
                        <div class="text-sm text-slate-500 mt-1">Team throughput</div>
                        <div class="text-xs text-blue-600 font-medium mt-1">2-labeler pilot team</div>
                    </div>
                </div>

                {{-- Detailed scorecard --}}
                <div class="grid md:grid-cols-3 gap-6 mb-10">

                    {{-- Preference Ranking --}}
                    <div class="bg-white rounded-xl border-2 border-blue-200 p-7">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-semibold text-[#0f2040]">Preference Ranking</h3>
                            <span class="text-xs bg-green-100 text-green-700 font-semibold px-2.5 py-1 rounded-full">Above Benchmark</span>
                        </div>
                        <div class="text-slate-500 text-xs mb-4">667 items · RLHF / Model Alignment</div>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-slate-600">Avg accuracy</span>
                                    <span class="font-semibold text-[#0f2040]">88.6%</span>
                                </div>
                                <div class="h-1.5 bg-slate-100 rounded-full"><div class="bar-fill h-1.5 bg-blue-500 rounded-full" style="--target-w:88.6%"></div></div>
                                <div class="text-xs text-slate-400 mt-1">Benchmark: 83–87% (major AI labs)</div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-slate-600">Cohen's Kappa</span>
                                    <span class="font-semibold text-[#0f2040]">0.623</span>
                                </div>
                                <div class="h-1.5 bg-slate-100 rounded-full"><div class="bar-fill h-1.5 bg-blue-500 rounded-full" style="--target-w:62.3%"></div></div>
                                <div class="text-xs text-slate-400 mt-1">Benchmark: 0.27–0.39 (OpenAI / NVIDIA)</div>
                            </div>
                            <div class="pt-2 border-t border-slate-100 text-xs text-slate-500">
                                Best labeler: <span class="font-semibold text-[#0f2040]">91.4%</span> · No Arabic RLHF benchmark exists — first-of-kind data
                            </div>
                        </div>
                    </div>

                    {{-- Dialect Identification --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-7">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-semibold text-[#0f2040]">Dialect Identification</h3>
                            <span class="text-xs bg-blue-100 text-blue-700 font-semibold px-2.5 py-1 rounded-full">On Par</span>
                        </div>
                        <div class="text-slate-500 text-xs mb-4">960 items · MSA, Levantine, Gulf, Egyptian, Iraqi, Maghrebi</div>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-slate-600">Avg accuracy</span>
                                    <span class="font-semibold text-[#0f2040]">71.2%</span>
                                </div>
                                <div class="h-1.5 bg-slate-100 rounded-full"><div class="bar-fill h-1.5 bg-blue-500 rounded-full" style="--target-w:71.2%"></div></div>
                                <div class="text-xs text-slate-400 mt-1">Benchmark: 65–80% (NADI 2024)</div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-slate-600">Cohen's Kappa</span>
                                    <span class="font-semibold text-[#0f2040]">0.572</span>
                                </div>
                                <div class="h-1.5 bg-slate-100 rounded-full"><div class="bar-fill h-1.5 bg-blue-500 rounded-full" style="--target-w:57.2%"></div></div>
                                <div class="text-xs text-slate-400 mt-1">Benchmark: 0.59 (NADI 2024, Palestinian Arabic)</div>
                            </div>
                            <div class="pt-2 border-t border-slate-100 text-xs text-slate-500">
                                Best labeler: <span class="font-semibold text-[#0f2040]">77%</span> · Compared against the largest Arabic dialect competition globally
                            </div>
                        </div>
                    </div>

                    {{-- Sentiment Tagging --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-7">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-semibold text-[#0f2040]">Sentiment Tagging</h3>
                            <span class="text-xs bg-yellow-100 text-yellow-700 font-semibold px-2.5 py-1 rounded-full">Near Target</span>
                        </div>
                        <div class="text-slate-500 text-xs mb-4">999 items · Arabic social media text</div>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-slate-600">Avg accuracy</span>
                                    <span class="font-semibold text-[#0f2040]">62.5%</span>
                                </div>
                                <div class="h-1.5 bg-slate-100 rounded-full"><div class="bar-fill h-1.5 bg-blue-500 rounded-full" style="--target-w:62.5%"></div></div>
                                <div class="text-xs text-slate-400 mt-1">Benchmark: 60–75% (AraSenTi-Tweet)</div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-slate-600">Cohen's Kappa</span>
                                    <span class="font-semibold text-[#0f2040]">0.532</span>
                                </div>
                                <div class="h-1.5 bg-slate-100 rounded-full"><div class="bar-fill h-1.5 bg-blue-500 rounded-full" style="--target-w:53.2%"></div></div>
                                <div class="text-xs text-slate-400 mt-1">Target: 0.55–0.70 (Arabic NLP)</div>
                            </div>
                            <div class="pt-2 border-t border-slate-100 text-xs text-slate-500">
                                Best labeler: <span class="font-semibold text-[#0f2040]">73.2%</span> · Guideline improvement identified &amp; incorporated into SOP
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Benchmark note --}}
                <div class="bg-[#0f2040] rounded-2xl p-6 md:p-8 flex flex-col md:flex-row md:items-center gap-6">
                    <div class="flex-1 text-slate-300 text-sm leading-relaxed">
                        <span class="text-white font-semibold">Benchmarked against published research:</span> NADI 2024 (ACL/WANLP) · AraSenTi-Tweet · ASAD Corpus · MultiPref 2024 · HelpSteer2 2024. On Preference Ranking — the highest-value task for AI companies — our Kappa of 0.623 significantly outperforms figures published by OpenAI and NVIDIA.
                    </div>
                    <a href="#contact" class="shrink-0 inline-flex items-center justify-center bg-blue-500 hover:bg-blue-400 text-white font-medium px-6 py-3 rounded-md transition-colors text-sm whitespace-nowrap">
                        Request a Pilot
                    </a>
                </div>
            </div>
        </section>

        {{-- =========================================================
             SERVICES
        ========================================================= --}}
        <section id="services" class="py-24 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="mb-14 reveal">
                    <span class="text-blue-600 text-sm font-medium tracking-widest uppercase">What We Do</span>
                    <h2 class="mt-3 text-3xl md:text-4xl font-semibold text-[#0f2040]">Arabic Dialect Annotation Services</h2>
                    <p class="mt-4 text-slate-600 max-w-2xl leading-relaxed">
                        We specialize exclusively in Arabic language data annotation — covering major dialect families — for organizations building the next generation of Arabic-language AI systems.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <div class="border border-slate-200 rounded-xl p-7 hover:border-blue-300 hover:shadow-sm transition-all reveal reveal-d1 card-lift">
                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
                        </div>
                        <h3 class="font-semibold text-[#0f2040] text-lg mb-1">NLP Annotation</h3>
                        <p class="text-blue-600 text-xs font-medium mb-3">Native dialect labels that improve your model's real-world accuracy.</p>
                        <p class="text-slate-600 text-sm leading-relaxed">Named entity recognition, sentiment analysis, intent classification, and text categorization across Levantine, Gulf, Egyptian, and Maghrebi dialects.</p>
                    </div>

                    <div class="border border-slate-200 rounded-xl p-7 hover:border-blue-300 hover:shadow-sm transition-all reveal reveal-d2 card-lift">
                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/></svg>
                        </div>
                        <h3 class="font-semibold text-[#0f2040] text-lg mb-1">ASR Data Annotation</h3>
                        <p class="text-blue-600 text-xs font-medium mb-3">Speech models that actually understand how Arabic is spoken, not just written.</p>
                        <p class="text-slate-600 text-sm leading-relaxed">Speech transcription, phonetic labeling, speaker diarization, and audio quality validation for Arabic automatic speech recognition training pipelines.</p>
                    </div>

                    <div class="border-2 border-blue-200 bg-blue-50/30 rounded-xl p-7 hover:border-blue-400 hover:shadow-sm transition-all reveal reveal-d3 card-lift">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                        </div>
                        <div class="flex items-center gap-2 mb-1">
                            <h3 class="font-semibold text-[#0f2040] text-lg">RLHF &amp; Preference Ranking</h3>
                            <span class="text-xs bg-blue-600 text-white px-2 py-0.5 rounded-full font-medium">Key Capability</span>
                        </div>
                        <p class="text-blue-600 text-xs font-medium mb-3">Human feedback data that makes your Arabic LLM safer, more helpful, and culturally aligned.</p>
                        <p class="text-slate-600 text-sm leading-relaxed">Response ranking, preference pair collection, and reinforcement learning from human feedback (RLHF) data — delivered by native Arabic speakers who understand dialect nuance and cultural context.</p>
                    </div>

                    <div class="border border-slate-200 rounded-xl p-7 hover:border-blue-300 hover:shadow-sm transition-all">
                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                        </div>
                        <h3 class="font-semibold text-[#0f2040] text-lg mb-1">Conversational AI</h3>
                        <p class="text-blue-600 text-xs font-medium mb-3">Chatbot training data that feels natural to real Arabic speakers, not translated English.</p>
                        <p class="text-slate-600 text-sm leading-relaxed">Dialogue annotation, response ranking, and conversation flow labeling for Arabic-language chatbots and virtual assistants.</p>
                    </div>

                    <div class="border border-slate-200 rounded-xl p-7 hover:border-blue-300 hover:shadow-sm transition-all reveal reveal-d4 card-lift">
                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="font-semibold text-[#0f2040] text-lg mb-1">Quality Assurance</h3>
                        <p class="text-blue-600 text-xs font-medium mb-3">Documented QA reports with every delivery — no black-box quality claims.</p>
                        <p class="text-slate-600 text-sm leading-relaxed">Multi-layer review with inter-annotator agreement measurement, senior reviewer sign-off, and structured QA reporting delivered with every project.</p>
                    </div>

                    <div class="border border-slate-200 rounded-xl p-7 hover:border-blue-300 hover:shadow-sm transition-all reveal reveal-d5 card-lift">
                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <h3 class="font-semibold text-[#0f2040] text-lg mb-1">Enterprise Compliance</h3>
                        <p class="text-blue-600 text-xs font-medium mb-3">A vendor your procurement team can approve on the first pass.</p>
                        <p class="text-slate-600 text-sm leading-relaxed">US-incorporated, domestically owned. No content moderation work. Structured data handling with privacy-first practices that meet enterprise procurement requirements.</p>
                    </div>

                </div>

                <div class="mt-12 p-6 bg-slate-50 rounded-xl border border-slate-200 flex flex-col sm:flex-row sm:items-center gap-6">
                    <div class="flex-1">
                        <p class="text-slate-700 text-sm leading-relaxed">
                            <strong class="text-[#0f2040]">We price for quality, not volume.</strong> Engagements are scoped based on dialect requirements, QA depth, and throughput needs — not race-to-the-bottom per-task rates. Contact us to discuss your project.
                        </p>
                    </div>
                    <a href="#contact" class="shrink-0 inline-flex items-center justify-center bg-[#0f2040] hover:bg-[#1e3a5f] text-white text-sm font-medium px-6 py-2.5 rounded-md transition-colors whitespace-nowrap">
                        Start Your Project
                    </a>
                </div>
            </div>
        </section>

        {{-- =========================================================
             ABOUT
        ========================================================= --}}
        <section id="about" class="py-24 bg-[#f8fafc]">
            <div class="max-w-6xl mx-auto px-6">
                <div class="mb-14 reveal">
                    <span class="text-blue-600 text-sm font-medium tracking-widest uppercase">About Us</span>
                    <h2 class="mt-3 text-3xl md:text-4xl font-semibold text-[#0f2040]">Built for Enterprise Trust</h2>
                    <p class="mt-4 text-slate-600 max-w-2xl leading-relaxed">
                        Karama Data is a US-incorporated LLC with domestic ownership and a leadership team with deep expertise in AI, enterprise technology, and regional operations.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-12 items-start">
                    <div class="space-y-8">
                        <div>
                            <h3 class="font-semibold text-[#0f2040] text-lg mb-3">Our Structure</h3>
                            <p class="text-slate-600 leading-relaxed">
                                We are a US LLC with US-based board leadership and domestic ownership — a structure that meets enterprise compliance requirements and instills client confidence. Our operational presence is in the region, giving us authentic access to the linguistic talent our clients need.
                            </p>
                        </div>
                        <div class="pt-2">
                            <a href="#contact" class="inline-flex items-center justify-center bg-[#0f2040] hover:bg-[#1e3a5f] text-white text-sm font-medium px-6 py-2.5 rounded-md transition-colors">
                                Start Your Project
                            </a>
                        </div>
                        <div>
                            <h3 class="font-semibold text-[#0f2040] text-lg mb-3">GCV Partnership</h3>
                            <p class="text-slate-600 leading-relaxed">
                                We operate in partnership with Gaza Children Village (GCV), providing operational infrastructure and community ties that allow us to build and retain a stable, highly-qualified annotator workforce.
                            </p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <h3 class="font-semibold text-[#0f2040] text-lg">Leadership</h3>

                        <div class="bg-white rounded-xl border border-slate-200 p-6 space-y-5">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-[#0f2040] flex items-center justify-center text-white font-semibold text-sm shrink-0">LM</div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="font-semibold text-[#0f2040]">Laura Mather</span>
                                        <a href="https://www.linkedin.com/in/laura-mather/" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:text-blue-700 transition-colors" aria-label="Laura Mather on LinkedIn">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                        </a>
                                    </div>
                                    <div class="text-sm text-blue-600 mb-1">Chief Executive Officer</div>
                                    <p class="text-sm text-slate-600">Silicon Valley Founder and CEO with AI and Cybersecurity expertise</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-[#0f2040] flex items-center justify-center text-white font-semibold text-sm shrink-0">ME</div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="font-semibold text-[#0f2040]">Mike Eynon</span>
                                        <a href="https://www.linkedin.com/in/mikeeynon/" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:text-blue-700 transition-colors" aria-label="Mike Eynon on LinkedIn">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                        </a>
                                    </div>
                                    <div class="text-sm text-blue-600 mb-1">Chief Technology Officer</div>
                                    <p class="text-sm text-slate-600">Silicon Valley Founder and CTO</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-[#0f2040] flex items-center justify-center text-white font-semibold text-sm shrink-0">ND</div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="font-semibold text-[#0f2040]">Nareman Dayya</span>
                                        <a href="https://www.linkedin.com/in/nareman-dayya-18840723a/" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:text-blue-700 transition-colors" aria-label="Nareman Dayya on LinkedIn">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                        </a>
                                    </div>
                                    <div class="text-sm text-blue-600 mb-1">Palestine Operations Advisor</div>
                                    <p class="text-sm text-slate-600">In-region operations advisor ensuring on-the-ground operational credibility, annotator welfare, and delivery quality</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-[#0f2040] flex items-center justify-center text-white font-semibold text-sm shrink-0">DH</div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="font-semibold text-[#0f2040]">David Hasan</span>
                                        <a href="https://www.linkedin.com/in/david-hasan-621663104/" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:text-blue-700 transition-colors" aria-label="David Hasan on LinkedIn">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                        </a>
                                    </div>
                                    <div class="text-sm text-blue-600 mb-1">Advisor</div>
                                    <p class="text-sm text-slate-600">CEO of Gaza Children Village</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- =========================================================
             WORKFORCE
        ========================================================= --}}
        <section id="workforce" class="py-24 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="mb-14">
                    <span class="text-blue-600 text-sm font-medium tracking-widest uppercase">Our Workforce</span>
                    <h2 class="mt-3 text-3xl md:text-4xl font-semibold text-[#0f2040]">The Quality Starts With the Annotators</h2>
                    <p class="mt-4 text-slate-600 max-w-2xl leading-relaxed">
                        Our annotator workforce is our primary quality asset. We invest in their training, their ownership stake, and their stability — because high-quality annotations require a workforce that is both skilled and retained.
                    </p>
                </div>

                {{-- Arabic geometric pattern visual --}}
                <div class="mb-10 rounded-2xl overflow-hidden bg-[#f8fafc] border border-slate-200 flex items-center justify-center py-8 px-6">
                    <svg viewBox="0 0 600 120" xmlns="http://www.w3.org/2000/svg" class="w-full max-w-2xl opacity-60" aria-hidden="true">
                        <defs>
                            <pattern id="arabesque" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                                <polygon points="30,2 58,16 58,44 30,58 2,44 2,16" fill="none" stroke="#1e3a5f" stroke-width="1"/>
                                <polygon points="30,10 50,20 50,40 30,50 10,40 10,20" fill="none" stroke="#3b82f6" stroke-width="0.5"/>
                                <circle cx="30" cy="30" r="4" fill="none" stroke="#1e3a5f" stroke-width="0.8"/>
                                <line x1="30" y1="2" x2="30" y2="10" stroke="#1e3a5f" stroke-width="0.5"/>
                                <line x1="30" y1="50" x2="30" y2="58" stroke="#1e3a5f" stroke-width="0.5"/>
                                <line x1="2" y1="16" x2="10" y2="20" stroke="#1e3a5f" stroke-width="0.5"/>
                                <line x1="50" y1="40" x2="58" y2="44" stroke="#1e3a5f" stroke-width="0.5"/>
                                <line x1="58" y1="16" x2="50" y2="20" stroke="#1e3a5f" stroke-width="0.5"/>
                                <line x1="10" y1="40" x2="2" y2="44" stroke="#1e3a5f" stroke-width="0.5"/>
                            </pattern>
                        </defs>
                        <rect width="600" height="120" fill="url(#arabesque)"/>
                    </svg>
                </div>

                <div class="grid md:grid-cols-3 gap-8 mb-14">
                    <div class="text-center p-8 bg-[#f8fafc] rounded-xl border border-slate-200">
                        <div class="text-3xl font-semibold text-[#0f2040] mb-1">Native</div>
                        <div class="text-blue-600 text-sm font-medium mb-2">91% top accuracy</div>
                        <div class="text-slate-600 text-sm">Arabic dialect speakers with deep linguistic and cultural competency in their assigned dialect family</div>
                    </div>
                    <div class="text-center p-8 bg-[#f8fafc] rounded-xl border border-slate-200">
                        <div class="text-3xl font-semibold text-[#0f2040] mb-1">Trained</div>
                        <div class="text-blue-600 text-sm font-medium mb-2">3,031 annotations delivered</div>
                        <div class="text-slate-600 text-sm">Structured onboarding in annotation methodologies, quality standards, and task-specific guidelines before any production work</div>
                    </div>
                    <div class="text-center p-8 bg-[#f8fafc] rounded-xl border border-slate-200">
                        <div class="text-3xl font-semibold text-[#0f2040] mb-1">Invested</div>
                        <div class="text-blue-600 text-sm font-medium mb-2">Long-term retention, not gig churn</div>
                        <div class="text-slate-600 text-sm">Our annotators are invested in outcomes — producing measurably lower error rates and better data for our clients</div>
                    </div>
                </div>

                <p class="mt-6 text-sm text-slate-500">
                    Worker privacy is a priority. We do not publish individual annotator names, photos, or location information.
                </p>
            </div>
        </section>

        {{-- =========================================================
             CONTACT
        ========================================================= --}}
        <section id="contact" class="py-24 bg-[#f8fafc]">
            <div class="max-w-6xl mx-auto px-6">

                {{-- Quote above form --}}
                <div class="mb-14 bg-white rounded-2xl border border-slate-200 p-8 md:p-10">
                    <div class="flex items-start gap-6">
                        <div class="text-5xl text-blue-200 font-serif leading-none shrink-0">"</div>
                        <div>
                            <p class="text-[#0f2040] text-lg leading-relaxed font-medium mb-4">
                                Our annotators are not vendors — they are deeply invested in the outcomes. That changes everything about how they approach the work. The precision, the care, the accountability. It shows in every dataset we deliver.
                            </p>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-[#0f2040] flex items-center justify-center text-white text-xs font-semibold shrink-0">ND</div>
                                <div>
                                    <div class="text-sm font-semibold text-[#0f2040]">Nareman Dayya</div>
                                    <div class="text-xs text-slate-500">Palestine Operations Advisor, Karama Data</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-16 items-start">
                    <div>
                        <span class="text-blue-600 text-sm font-medium tracking-widest uppercase">Contact</span>
                        <h2 class="mt-3 text-3xl md:text-4xl font-semibold text-[#0f2040]">Start Your Project</h2>
                        <p class="mt-4 text-slate-600 leading-relaxed">
                            Tell us about your project. We'll follow up to discuss scope, dialect requirements, QA standards, and how we can fit into your annotation pipeline.
                        </p>
                        <div class="mt-8 space-y-4 text-sm text-slate-600">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <span>info@karamadata.ai</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-blue-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                <span>US LLC — domestically incorporated and owned</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl border border-slate-200 p-8 shadow-sm">
                        @if(session('success'))
                            <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg text-green-800 text-sm">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
                            @csrf

                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-slate-700 mb-1.5">Your Name <span class="text-red-500">*</span></label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') }}"
                                        placeholder="Jane Smith"
                                        class="w-full border border-slate-300 rounded-md px-3.5 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('name') border-red-400 @enderror"
                                        required
                                    >
                                    @error('name')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                                </div>
                                <div>
                                    <label for="company" class="block text-sm font-medium text-slate-700 mb-1.5">Company <span class="text-red-500">*</span></label>
                                    <input
                                        type="text"
                                        id="company"
                                        name="company"
                                        value="{{ old('company') }}"
                                        placeholder="Acme AI Inc."
                                        class="w-full border border-slate-300 rounded-md px-3.5 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('company') border-red-400 @enderror"
                                        required
                                    >
                                    @error('company')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5">Work Email <span class="text-red-500">*</span></label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="jane@yourcompany.com"
                                    class="w-full border border-slate-300 rounded-md px-3.5 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('email') border-red-400 @enderror"
                                    required
                                >
                                @error('email')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <label for="description" class="block text-sm font-medium text-slate-700 mb-1.5">Project Description <span class="text-red-500">*</span></label>
                                <textarea
                                    id="description"
                                    name="description"
                                    rows="5"
                                    placeholder="Tell us about your annotation needs — dialect requirements, volume, task type, timeline..."
                                    class="w-full border border-slate-300 rounded-md px-3.5 py-2.5 text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none @error('description') border-red-400 @enderror"
                                    required
                                >{{ old('description') }}</textarea>
                                @error('description')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                            </div>

                            <button
                                type="submit"
                                class="w-full bg-[#0f2040] hover:bg-[#1e3a5f] text-white font-medium py-3 px-6 rounded-md transition-colors text-sm"
                            >
                                Start Your Project
                            </button>

                            <p class="text-xs text-slate-500 text-center">We respond to all inquiries within one business day.</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    {{-- =========================================================
         AFFILIATIONS BAR
    ========================================================= --}}
    <section class="bg-slate-50 border-t border-slate-200 py-10">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <p class="text-xs text-slate-400 uppercase tracking-widest font-medium mb-6">Partners &amp; Affiliations</p>
            <div class="flex flex-wrap items-center justify-center gap-10">
                <div class="flex items-center gap-3 text-slate-600">
                    <div class="w-8 h-8 rounded bg-[#0f2040] flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <span class="text-sm font-medium">Supported by Gaza Children Village (GCV)</span>
                </div>
                <div class="flex items-center gap-3 text-slate-600">
                    <div class="w-8 h-8 rounded bg-[#0f2040] flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <span class="text-sm font-medium">US-Incorporated LLC</span>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================
         FOOTER
    ========================================================= --}}
    <footer class="bg-[#0a1628] text-slate-400 py-12">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-10 mb-10">
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <svg viewBox="0 0 40 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-7 w-auto">
                            <line x1="11" y1="6" x2="11" y2="40" stroke="white" stroke-width="8" stroke-linecap="round"/>
                            <line x1="15" y1="23" x2="34" y2="6" stroke="white" stroke-width="7" stroke-linecap="round"/>
                            <line x1="15" y1="23" x2="34" y2="40" stroke="#3b82f6" stroke-width="7" stroke-linecap="round"/>
                            <circle cx="15" cy="23" r="5" fill="#06b6d4"/>
                        </svg>
                        <span class="font-bold text-lg"><span class="text-white">Karama</span><span class="text-blue-400"> Data</span></span>
                    </div>
                    <p class="text-xs text-blue-300 mb-3 italic">Native speakers. Rigorous QA. No shortcuts.</p>
                    <p class="text-sm leading-relaxed">Enterprise Arabic dialect annotation for AI companies building the next generation of Arabic-language AI systems.</p>
                    <div class="mt-4 inline-flex items-center gap-1.5 border border-slate-600 rounded px-3 py-1 text-xs text-slate-400">
                        <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        US-Incorporated LLC
                    </div>
                </div>
                <div>
                    <div class="text-white font-medium mb-3 text-sm">Navigation</div>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#why-arabic" class="hover:text-white transition-colors">Why Arabic</a></li>
                        <li><a href="#quality" class="hover:text-white transition-colors">Results</a></li>
                        <li><a href="#services" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="#about" class="hover:text-white transition-colors">About</a></li>
                        <li><a href="#workforce" class="hover:text-white transition-colors">Our Workforce</a></li>
                        <li><a href="#contact" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <div class="text-white font-medium mb-3 text-sm">Contact</div>
                    <p class="text-sm">info@karamadata.ai</p>
                    <div class="mt-4 text-sm space-y-1">
                        <p>Arabic Language Annotation Only</p>
                        <p>No Content Moderation Services</p>
                    </div>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-6 flex flex-col sm:flex-row justify-between items-center gap-3 text-xs text-slate-500">
                <span>&copy; {{ date('Y') }} Karama Data LLC. All rights reserved.</span>
                <span>US LLC · Domestic Ownership · Arabic AI Annotation</span>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('menu-btn').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });

        // ── Scroll reveal ──
        const revealObs = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    revealObs.unobserve(e.target);
                }
            });
        }, { threshold: 0.12 });
        document.querySelectorAll('.reveal').forEach(el => revealObs.observe(el));

        // ── Animated progress bars ──
        const barObs = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('animated');
                    barObs.unobserve(e.target);
                }
            });
        }, { threshold: 0.3 });
        document.querySelectorAll('.bar-fill').forEach(el => barObs.observe(el));

        // ── Stat counter animation ──
        function animateCounter(el, target, decimals, suffix) {
            const duration = 1800;
            const start = performance.now();
            const update = (now) => {
                const progress = Math.min((now - start) / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                const val = (target * eased).toFixed(decimals);
                el.textContent = val + suffix;
                if (progress < 1) requestAnimationFrame(update);
            };
            requestAnimationFrame(update);
        }
        const statObs = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (!e.isIntersecting) return;
                const el = e.target;
                const raw = el.dataset.target;
                const decimals = (raw.includes('.')) ? raw.split('.')[1].length : 0;
                const suffix = el.dataset.suffix || '';
                animateCounter(el, parseFloat(raw), decimals, suffix);
                statObs.unobserve(el);
            });
        }, { threshold: 0.5 });
        document.querySelectorAll('[data-target]').forEach(el => statObs.observe(el));
    </script>

</body>
</html>
