<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Karama Data — Native-speaker Arabic dialect annotation for AI companies. Your Arabic AI is only as good as the humans who train it. NLP, ASR, RLHF. US LLC.">
    <title>Karama Data | Arabic AI Data Annotation</title>
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
</head>
<body class="bg-white text-slate-800 antialiased">

    {{-- =========================================================
         HEADER / NAV
    ========================================================= --}}
    <header class="fixed top-0 inset-x-0 z-50 bg-white/95 backdrop-blur border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-6 flex items-center justify-between h-16">
            <a href="#" class="text-xl font-semibold text-[#1e3a5f] tracking-tight">
                Karama Data
            </a>
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-600">
                <a href="#why-arabic" class="hover:text-[#1e3a5f] transition-colors">Why Arabic</a>
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
        <section class="pt-32 pb-24 bg-[#0f2040]">
            <div class="max-w-6xl mx-auto px-6">
                <div class="max-w-3xl">
                    <span class="inline-block text-blue-300 text-sm font-medium tracking-widest uppercase mb-4">
                        Arabic AI Data Annotation
                    </span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-6">
                        Your Arabic AI is only as good as the humans who train it.
                    </h1>
                    <p class="text-lg text-slate-300 leading-relaxed mb-10 max-w-2xl">
                        91% accuracy, benchmarked against published research. US-incorporated. Worker-owned. No shortcuts.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="inline-flex items-center justify-center bg-blue-500 hover:bg-blue-400 text-white font-medium px-8 py-3 rounded-md transition-colors">
                            Start Your Project
                        </a>
                        <a href="#about" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 border border-white/20 text-white font-medium px-8 py-3 rounded-md transition-colors">
                            See Our Results
                        </a>
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
                        <div class="text-lg font-semibold text-blue-300">Kappa Scores</div>
                        <div class="text-sm text-blue-200 mt-1">Quality metrics coming soon</div>
                    </div>
                </div>
            </div>
        </section>

        {{-- =========================================================
             WHY ARABIC? WHY NOW?
        ========================================================= --}}
        <section id="why-arabic" class="py-24 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="mb-14">
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
                    <div class="border-l-4 border-blue-500 pl-6 py-2">
                        <div class="font-semibold text-[#0f2040] mb-2">The Market Moment</div>
                        <p class="text-slate-600 text-sm leading-relaxed">Gulf states are investing billions in AI development. The demand for high-quality Arabic training data is growing faster than the supply of annotators who can deliver it.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- =========================================================
             SERVICES
        ========================================================= --}}
        <section id="services" class="py-24 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="mb-14">
                    <span class="text-blue-600 text-sm font-medium tracking-widest uppercase">What We Do</span>
                    <h2 class="mt-3 text-3xl md:text-4xl font-semibold text-[#0f2040]">Arabic Dialect Annotation Services</h2>
                    <p class="mt-4 text-slate-600 max-w-2xl leading-relaxed">
                        We specialize exclusively in Arabic language data annotation — covering major dialect families — for organizations building the next generation of Arabic-language AI systems.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <div class="border border-slate-200 rounded-xl p-7 hover:border-blue-300 hover:shadow-sm transition-all">
                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
                        </div>
                        <h3 class="font-semibold text-[#0f2040] text-lg mb-1">NLP Annotation</h3>
                        <p class="text-blue-600 text-xs font-medium mb-3">Native dialect labels that improve your model's real-world accuracy.</p>
                        <p class="text-slate-600 text-sm leading-relaxed">Named entity recognition, sentiment analysis, intent classification, and text categorization across Levantine, Gulf, Egyptian, and Maghrebi dialects.</p>
                    </div>

                    <div class="border border-slate-200 rounded-xl p-7 hover:border-blue-300 hover:shadow-sm transition-all">
                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/></svg>
                        </div>
                        <h3 class="font-semibold text-[#0f2040] text-lg mb-1">ASR Data Annotation</h3>
                        <p class="text-blue-600 text-xs font-medium mb-3">Speech models that actually understand how Arabic is spoken, not just written.</p>
                        <p class="text-slate-600 text-sm leading-relaxed">Speech transcription, phonetic labeling, speaker diarization, and audio quality validation for Arabic automatic speech recognition training pipelines.</p>
                    </div>

                    <div class="border-2 border-blue-200 bg-blue-50/30 rounded-xl p-7 hover:border-blue-400 hover:shadow-sm transition-all">
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

                    <div class="border border-slate-200 rounded-xl p-7 hover:border-blue-300 hover:shadow-sm transition-all">
                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="font-semibold text-[#0f2040] text-lg mb-1">Quality Assurance</h3>
                        <p class="text-blue-600 text-xs font-medium mb-3">Documented QA reports with every delivery — no black-box quality claims.</p>
                        <p class="text-slate-600 text-sm leading-relaxed">Multi-layer review with inter-annotator agreement measurement, senior reviewer sign-off, and structured QA reporting delivered with every project.</p>
                    </div>

                    <div class="border border-slate-200 rounded-xl p-7 hover:border-blue-300 hover:shadow-sm transition-all">
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
                <div class="mb-14">
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
                        <div>
                            <h3 class="font-semibold text-[#0f2040] text-lg mb-3">Worker Ownership Model</h3>
                            <p class="text-slate-600 leading-relaxed">
                                Our annotators participate in a profits interest units model — a structural investment in quality, not a charitable gesture. Worker-owners have a direct stake in project outcomes, which produces measurably lower error rates and lower churn than transactional annotation models. This is the operational differentiator that benefits our clients.
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
                                    <div class="font-semibold text-[#0f2040]">Laura Mather</div>
                                    <div class="text-sm text-blue-600 mb-1">Chief Executive Officer</div>
                                    <p class="text-sm text-slate-600">CEO and board member, providing executive leadership and enterprise AI industry expertise.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-[#0f2040] flex items-center justify-center text-white font-semibold text-sm shrink-0">DH</div>
                                <div>
                                    <div class="font-semibold text-[#0f2040]">David Hasan</div>
                                    <div class="text-sm text-blue-600 mb-1">Board of Directors</div>
                                    <p class="text-sm text-slate-600">Board member with ties to GCV partnership, ensuring strategic alignment between the company mission and operational delivery.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-[#0f2040] flex items-center justify-center text-white font-semibold text-sm shrink-0">ME</div>
                                <div>
                                    <div class="font-semibold text-[#0f2040]">Mike Eynon</div>
                                    <div class="text-sm text-blue-600 mb-1">Board of Directors</div>
                                    <p class="text-sm text-slate-600">Board member contributing strategic oversight and organizational governance.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-slate-600 font-semibold text-sm shrink-0">ND</div>
                                <div>
                                    <div class="font-semibold text-[#0f2040]">Nareman Dayya</div>
                                    <div class="text-sm text-blue-600 mb-1">Palestine Operations Advisor</div>
                                    <p class="text-sm text-slate-600">In-region operations advisor ensuring on-the-ground operational credibility, annotator welfare, and delivery quality.</p>
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
                        <div class="text-blue-600 text-sm font-medium mb-2">Worker-owners, not gig workers</div>
                        <div class="text-slate-600 text-sm">Profit participation model aligns annotator incentives with quality outcomes — lower error rates, lower churn, better data</div>
                    </div>
                </div>

                <div class="bg-[#0f2040] rounded-2xl p-8 md:p-12 text-white">
                    <div class="max-w-2xl">
                        <h3 class="text-2xl font-semibold mb-4">Why Workforce Investment Produces Better Data</h3>
                        <p class="text-slate-300 leading-relaxed mb-6">
                            Transactional gig-annotation models produce inconsistent quality as annotators churn and training investment is lost. Our workforce participates in profits interest units — a structural mechanism that creates long-term retention and shared accountability for the quality of every dataset we deliver.
                        </p>
                        <p class="text-slate-300 leading-relaxed">
                            This isn't a social mission claim. It's a measurable operational difference: higher inter-annotator agreement, better training data, and lower rework costs for our clients.
                        </p>
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
                                Our annotators are not vendors — they are co-owners. That changes everything about how they approach the work. The precision, the care, the accountability. It shows in every dataset we deliver.
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
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <span>laura@karamadata.ai</span>
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
                <div class="flex items-center gap-3 text-slate-600">
                    <div class="w-8 h-8 rounded bg-[#0f2040] flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                    </div>
                    <span class="text-sm font-medium">Worker Ownership Model</span>
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
                    <div class="text-white font-semibold text-lg mb-2">Karama Data</div>
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
                        <li><a href="#services" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="#about" class="hover:text-white transition-colors">About</a></li>
                        <li><a href="#workforce" class="hover:text-white transition-colors">Our Workforce</a></li>
                        <li><a href="#contact" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <div class="text-white font-medium mb-3 text-sm">Contact</div>
                    <p class="text-sm">info@karamadata.ai</p>
                    <p class="text-sm mt-1">laura@karamadata.ai</p>
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

        // Close mobile menu on link click
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });
    </script>

</body>
</html>
