<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karama Data - Arabic AI Annotation</title>
    <!-- Always load Tailwind CSS from CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; overflow-x: hidden; }
        .hero-section {
            background: linear-gradient(135deg, #0a1e3e 0%, #1a3a5c 50%, #0f2947 100%);
            position: relative;
            overflow: hidden;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(0, 150, 255, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }
        .feature-card {
            background: rgba(10, 30, 62, 0.4);
            border: 1px solid rgba(100, 200, 255, 0.3);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }
        .feature-card:hover {
            background: rgba(15, 45, 90, 0.6);
            border-color: rgba(100, 200, 255, 0.5);
            transform: translateY(-5px);
        }
        .btn-primary {
            background: white;
            color: #0a1e3e;
            border: 2px solid white;
            padding: 10px 24px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: #f0f0f0;
        }
        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
            padding: 10px 24px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        .btn-blue {
            background: #2563eb;
            color: white;
            border: 2px solid #2563eb;
            padding: 10px 24px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn-blue:hover {
            background: #1d4ed8;
            border-color: #1d4ed8;
        }
        .stat-card {
            background: rgba(10, 30, 62, 0.8);
            border: 1px solid rgba(100, 200, 255, 0.3);
            padding: 40px;
            border-radius: 12px;
        }
        .metric-card {
            background: #f0f4ff;
            padding: 24px;
            border-radius: 12px;
            text-align: center;
        }
        .metric-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #2563eb;
        }
        .result-card {
            background: #f8fafb;
            padding: 24px;
            border-radius: 12px;
            border-top: 4px solid #2563eb;
        }
        .result-card.green { border-top-color: #10b981; }
        .result-card.purple { border-top-color: #8b5cf6; }
        .result-card.yellow { border-top-color: #f59e0b; }
        .service-card {
            background: white;
            padding: 32px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        .service-card:hover {
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            transform: translateY(-3px);
        }
        .trust-card {
            background: white;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .team-card {
            background: white;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            text-align: center;
        }
        .team-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 32px;
            margin: 0 auto 16px;
        }
        .annotator-stat {
            background: #f0f4ff;
            padding: 24px;
            border-radius: 12px;
            text-align: center;
        }
        .annotator-stat .number {
            color: #2563eb;
            font-size: 2rem;
            font-weight: bold;
        }
        .blue-border-left {
            border-left: 4px solid #2563eb;
            padding-left: 24px;
        }
        .scroll-reveal {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
    </style>
</head>
<body class="bg-white">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-blue-600 rounded flex items-center justify-center">
                    <span class="text-white font-bold text-lg">K</span>
                </div>
                <span class="font-bold text-lg">Karama Data</span>
            </div>
            <div class="hidden md:flex items-center gap-8">
                <a href="#why-arabic" class="text-gray-700 hover:text-blue-600 transition">Why Arabic</a>
                <a href="#results" class="text-gray-700 hover:text-blue-600 transition">Results</a>
                <a href="#services" class="text-gray-700 hover:text-blue-600 transition">Services</a>
                <a href="#about" class="text-gray-700 hover:text-blue-600 transition">About</a>
                <a href="#workforce" class="text-gray-700 hover:text-blue-600 transition">Our Workforce</a>
            </div>
            <button class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-800 transition">Get in Touch</button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-white pt-32 pb-20 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative z-10">
                    <h1 class="text-5xl lg:text-6xl font-bold leading-tight mb-6 scroll-reveal delay-1">
                        Your Arabic AI is only as good as the humans who train it
                    </h1>
                    <p class="text-lg text-gray-300 mb-8 scroll-reveal delay-2">
                        91% accuracy, benchmarked against published research. US-Incorporated. No shortcuts.
                    </p>
                    <div class="flex gap-4 scroll-reveal delay-3">
                        <button class="btn-primary">Start Your Project</button>
                        <button class="btn-secondary">See Our Results</button>
                    </div>
                </div>
                <div class="relative z-10 hidden lg:block">
                    <img src="/public/images/hero-digital-head.png" alt="Digital AI Head" class="w-full h-auto rounded-lg">
                </div>
            </div>

            <!-- Feature Cards -->
            <div class="mt-20 grid grid-cols-1 md:grid-cols-5 gap-4 scroll-reveal delay-4">
                <div class="feature-card p-6 text-center"><div class="text-4xl mb-3">🛡️</div><h3 class="font-bold text-lg mb-2">AI & Cybersecurity</h3><p class="text-sm text-gray-300">Founded by</p></div>
                <div class="feature-card p-6 text-center"><div class="text-4xl mb-3">🌐</div><h3 class="font-bold text-lg mb-2">5+</h3><p class="text-sm text-gray-300">Arabic Dialect Variants</p></div>
                <div class="feature-card p-6 text-center"><div class="text-4xl mb-3">📋</div><h3 class="font-bold text-lg mb-2">Multi-layer</h3><p class="text-sm text-gray-300">QA Review Process</p></div>
                <div class="feature-card p-6 text-center"><div class="text-4xl mb-3">🗣️</div><h3 class="font-bold text-lg mb-2">Arabic Only</h3><p class="text-sm text-gray-300">No Content Moderation</p></div>
                <div class="feature-card p-6 text-center"><div class="text-4xl mb-3">📊</div><h3 class="font-bold text-lg mb-2">Kappa 0.62</h3><p class="text-sm text-gray-300">RIHF Agreement Score</p></div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="stat-card">
                    <h3 class="text-white text-5xl font-bold mb-4">400M+</h3>
                    <h4 class="text-white text-xl font-semibold mb-4">Arabic speakers worldwide</h4>
                    <p class="text-gray-300 leading-relaxed">Arabic is the fifth most spoken language in the world, spanning 22 countries across the Middle East and North Africa — yet AI systems routinely fail to understand the people who speak it.</p>
                </div>
                <div class="stat-card">
                    <h3 class="text-white text-5xl font-bold mb-4">&lt;1%</h3>
                    <h4 class="text-white text-xl font-semibold mb-4">of NLP research covers Arabic</h4>
                    <p class="text-gray-300 leading-relaxed">Despite hundreds of millions of speakers, Arabic receives a fraction of the research attention that English does. The training data infrastructure is just getting started — and the companies who invest now will have a significant head start.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Arabic Section -->
    <section id="why-arabic" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="mb-8 blue-border-left">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">The Translation Shortcut</h3>
                        <p class="text-gray-600">Most "Arabic" AI training data is machine-translated English. It misses cultural context, dialect nuance, and the way Arabic is actually spoken day to day.</p>
                    </div>
                    <div class="blue-border-left">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">The MSA Assumption</h3>
                        <p class="text-gray-600">Models trained on Modern Standard Arabic sound robotic to real users who speak Levantine, Khaleeji, Egyptian, or Maghrebi every day. Dialect matters.</p>
                    </div>
                </div>
                <div class="rounded-lg overflow-hidden">
                    <img src="/public/images/human-ai-interaction.png" alt="Human-AI Interaction" class="w-full h-96 object-cover rounded-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Section -->
    <section id="results" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold mb-4 text-center">Quality We Can <span class="text-blue-600">Prove</span></h2>
            <p class="text-center text-gray-600 max-w-3xl mx-auto mb-12">In our first structured pilot, two Palestinian annotators in Gaza completed 3,031 annotation tasks across three task types — every result benchmarked against published international standards.</p>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
                <div class="metric-card">
                    <div class="metric-number">3,031</div>
                    <p class="text-gray-700 font-semibold">Tasks completed</p>
                    <p class="text-sm text-gray-600">100% completion rate</p>
                </div>
                <div class="metric-card">
                    <div class="metric-number text-green-600">91.4%</div>
                    <p class="text-gray-700 font-semibold">Top accuracy</p>
                    <p class="text-sm text-gray-600">preference Ranking</p>
                </div>
                <div class="metric-card">
                    <div class="metric-number text-purple-600">0.623</div>
                    <p class="text-gray-700 font-semibold">RLHF Kappa score</p>
                    <p class="text-sm text-gray-600">1 vs 0.27 - 0.39 (OpenAI/Nvidia)</p>
                </div>
                <div class="metric-card">
                    <div class="metric-number text-orange-600">470/hr</div>
                    <p class="text-gray-700 font-semibold">Team throughput</p>
                    <p class="text-sm text-gray-600">2-labeler pilot team</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="result-card green">
                    <h3 class="font-bold text-xl mb-4 text-gray-900">Preference Ranking</h3>
                    <div class="flex items-center gap-2 mb-4">
                        <span class="text-green-600 text-2xl font-bold">88.6%</span>
                        <span class="text-sm text-gray-600">Avg accuracy</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-4">Benchmark: 83-87% (major AI labs)</p>
                    <div class="border-t border-gray-200 pt-4">
                        <p class="font-bold text-gray-900 text-sm">Cohen's Kappa</p>
                        <p class="text-2xl font-bold text-green-600">0.623</p>
                    </div>
                    <div class="bg-green-50 border border-green-200 rounded mt-4 p-3">
                        <p class="text-xs font-semibold text-green-700">Best labeler: 91.4% - No Arabic RLHF benchmark exists — first-of-kind data</p>
                    </div>
                </div>

                <div class="result-card purple">
                    <h3 class="font-bold text-xl mb-4 text-gray-900">Dialect Identification</h3>
                    <div class="flex items-center gap-2 mb-4">
                        <span class="text-purple-600 text-2xl font-bold">71.2%</span>
                        <span class="text-sm text-gray-600">Avg accuracy</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-4">Benchmark: 65-80% (NADI 2024)</p>
                    <div class="border-t border-gray-200 pt-4">
                        <p class="font-bold text-gray-900 text-sm">Cohen's Kappa</p>
                        <p class="text-2xl font-bold text-purple-600">0.572</p>
                    </div>
                    <div class="bg-purple-50 border border-purple-200 rounded mt-4 p-3">
                        <p class="text-xs font-semibold text-purple-700">Best labeler: 77% - Compared against the largest Arabic dialect competition globally</p>
                    </div>
                </div>

                <div class="result-card yellow">
                    <h3 class="font-bold text-xl mb-4 text-gray-900">Sentiment Tagging</h3>
                    <div class="flex items-center gap-2 mb-4">
                        <span class="text-orange-600 text-2xl font-bold">62.9%</span>
                        <span class="text-sm text-gray-600">Avg accuracy</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-4">Benchmark: 60-79% (AraSenti-Tweet)</p>
                    <div class="border-t border-gray-200 pt-4">
                        <p class="font-bold text-gray-900 text-sm">Cohen's Kappa</p>
                        <p class="text-2xl font-bold text-orange-600">0.532</p>
                    </div>
                    <div class="bg-orange-50 border border-orange-200 rounded mt-4 p-3">
                        <p class="text-xs font-semibold text-orange-700">Best labeler: 73.2% - Guideline Improvement identified & incorporated into SOF</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="py-8 bg-gradient-to-r from-blue-900 to-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-6 flex items-center justify-between flex-col md:flex-row gap-8">
            <div class="flex-1">
                <p class="text-sm">Benchmarked against published research: NADI 2024 (ACL/WANLP) · AraSenti-Tweet · ASAD Corpus · MultiPref 2024 · HelpSteer2 2024. On Preference Ranking — the highest-value task for AI companies — our Kappa of 0.623 significantly outperforms figures published by OpenAI and NVIDIA.</p>
            </div>
            <button class="btn-blue flex-shrink-0">Request a Pilot</button>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold mb-4 text-center">Arabic Dialect Annotation Services</h2>
            <p class="text-center text-gray-600 max-w-3xl mx-auto mb-16">We specialize exclusively in Arabic language data annotation — covering major dialect families — for organizations building the next generation of Arabic-language AI systems.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="service-card"><h3 class="text-2xl font-bold mb-4 text-gray-900">NLP Annotation</h3><p class="text-blue-600 text-sm font-semibold mb-4">Native dialect labels that improve your model's real-world accuracy.</p><p class="text-gray-600 mb-6">Named entity recognition, sentiment analysis, intent classification, and text categorization across Levantine, Gulf, Egyptian, and Maghrebi dialects.</p></div>
                <div class="service-card"><h3 class="text-2xl font-bold mb-4 text-gray-900">ASR Data Annotation</h3><p class="text-blue-600 text-sm font-semibold mb-4">Speech models that actually understand how Arabic is spoken, not just written.</p><p class="text-gray-600 mb-6">Speech transcription, phonetic labeling, speaker diarization, and audio quality validation for Arabic automatic speech recognition training pipelines.</p></div>
                <div class="service-card"><h3 class="text-2xl font-bold mb-4 text-gray-900">RLHF & Preference Ranking</h3><p class="text-blue-600 text-sm font-semibold mb-4">Human feedback data that makes your Arabic LLM safer, more helpful, and culturally aligned.</p><p class="text-gray-600 mb-6">Response ranking, preference pair collection, and reinforcement learning from human feedback (RLHF) data — delivered by native Arabic speakers who understand dialect nuance and cultural context.</p><p class="text-orange-500 text-sm font-semibold">⭐ Key Capability</p></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="service-card"><h3 class="text-2xl font-bold mb-4 text-gray-900">Conversational AI</h3><p class="text-gray-600">Chatbot training data that feels natural to real Arabic speakers, not translated English.</p><p class="text-gray-600 text-sm mt-4">Dialogue annotation, response ranking, and conversation flow labeling for Arabic-language chatbots and virtual assistants.</p></div>
                <div class="service-card"><h3 class="text-2xl font-bold mb-4 text-gray-900">Quality Assurance</h3><p class="text-gray-600">Documented QA reports with every delivery — no black-box quality claims.</p><p class="text-gray-600 text-sm mt-4">Multi-layer review with inter-annotator agreement measurement, senior reviewer sign-off, and structured QA reporting delivered with every project.</p></div>
                <div class="service-card"><h3 class="text-2xl font-bold mb-4 text-gray-900">Enterprise Compliance</h3><p class="text-gray-600">A vendor your procurement team can approve on the first pass.</p><p class="text-gray-600 text-sm mt-4">US-incorporated, domestically owned. No content moderation work. Structured data handling with privacy-first practices that meet enterprise procurement requirements.</p></div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-900 to-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-6 flex items-center justify-between flex-col md:flex-row gap-8">
            <div class="flex-1">
                <p class="text-lg">We price for quality, not volume. Engagements are scoped based on dialect requirements, QA depth, and throughput needs — not race-to-the-bottom per-task rates. Contact us to discuss your project.</p>
            </div>
            <button class="btn-blue flex-shrink-0">Start Your Project</button>
        </div>
    </section>

    <!-- Built for Enterprise Trust Section -->
    <section id="about" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold mb-4 text-center">Built for Enterprise <span class="text-blue-600">Trust</span></h2>
            <p class="text-center text-gray-600 max-w-3xl mx-auto mb-12">
                Karama Data is a US-incorporated LLC with domestic ownership and a leadership team with deep expertise in AI, enterprise technology, and regional operations.
            </p>

            <h3 class="text-2xl font-bold mb-8 text-center text-gray-900">A structure built on trust and compliance</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="trust-card">
                    <div class="text-4xl text-blue-600 font-bold mb-4">01</div>
                    <h4 class="text-xl font-bold mb-3 text-gray-900">US-Based Leadership</h4>
                    <p class="text-gray-600">US-based board leadership and domestic ownership that ensures accountability and alignment with enterprise standards.</p>
                </div>
                <div class="trust-card">
                    <div class="text-4xl text-blue-600 font-bold mb-4">02</div>
                    <h4 class="text-xl font-bold mb-3 text-gray-900">Enterprise Compliance</h4>
                    <p class="text-gray-600">A structure that meets enterprise compliance requirements and instills client confidence.</p>
                </div>
                <div class="trust-card">
                    <div class="text-4xl text-blue-600 font-bold mb-4">03</div>
                    <h4 class="text-xl font-bold mb-3 text-gray-900">Regional Operations</h4>
                    <p class="text-gray-600">Our operational presence is in the region, giving us authentic access to the linguistic talent our clients need.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnership Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold mb-12 text-center">Stronger together for lasting impact</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-12">
                <div>
                    <p class="text-gray-700 text-lg leading-relaxed mb-6">
                        We operate in partnership with Gaza Children Village (GCV), providing operational infrastructure and community ties that allow us to build and retain a stable, highly-qualified annotator workforce.
                    </p>

                    <h3 class="text-2xl font-bold text-blue-600 mb-3">Payment & Regional Access</h3>
                    <p class="text-gray-700">Our payment corridor runs through Gaza Children Village (GCV) — a nonprofit already equipped to move compliant payments into the region.</p>
                </div>

                <div class="bg-gray-100 p-12 rounded-lg text-center">
                    <div class="flex justify-center items-center gap-8 mb-8">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600 mb-2">Karama Data</div>
                            <p class="text-sm text-gray-600">AI Expertise, Technology, Quality Standards</p>
                        </div>
                        <div class="text-2xl">✕</div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600 mb-2">GCV</div>
                            <p class="text-sm text-gray-600">Regional Operations, Infrastructure, Community Impact</p>
                        </div>
                    </div>
                    <div class="text-2xl mb-4">→</div>
                    <div class="bg-white p-6 rounded-lg">
                        <p class="font-bold text-gray-900">Stable, Highly-Qualified Workforce</p>
                        <p class="text-sm text-gray-600 mt-2">Better quality, stronger outcomes, lasting impact</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-12">
                <button class="btn-blue mb-8">Start Your Project →</button>
                <h2 class="text-4xl font-bold">Meet the people behind Karama Data</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="team-card">
                    <div class="team-avatar">LM</div>
                    <h4 class="font-bold text-lg text-gray-900">Laura Mather</h4>
                    <p class="text-blue-600 text-sm font-semibold mb-3">Chief Executive Officer</p>
                    <p class="text-gray-600 text-sm">Silicon Valley Founder and CEO with AI and Cybersecurity expertise</p>
                    <p class="text-blue-600 mt-4 text-sm">🔗 LinkedIn</p>
                </div>

                <div class="team-card">
                    <div class="team-avatar">ME</div>
                    <h4 class="font-bold text-lg text-gray-900">Mike Eynon</h4>
                    <p class="text-blue-600 text-sm font-semibold mb-3">Chief Technology Officer</p>
                    <p class="text-gray-600 text-sm">Silicon Valley Founder and CTO</p>
                    <p class="text-blue-600 mt-4 text-sm">🔗 LinkedIn</p>
                </div>

                <div class="team-card">
                    <div class="team-avatar">ND</div>
                    <h4 class="font-bold text-lg text-gray-900">Nareman Dayya</h4>
                    <p class="text-blue-600 text-sm font-semibold mb-3">In-region Operations Advisor</p>
                    <p class="text-gray-600 text-sm">In-region operations advisor ensuring on-the-ground operational credibility, annotator welfare and delivery quality</p>
                    <p class="text-blue-600 mt-4 text-sm">🔗 LinkedIn</p>
                </div>

                <div class="team-card">
                    <div class="team-avatar">DH</div>
                    <h4 class="font-bold text-lg text-gray-900">David Hasan</h4>
                    <p class="text-blue-600 text-sm font-semibold mb-3">CEO of Gaza Children Village</p>
                    <p class="text-gray-600 text-sm">CEO of Gaza Children Village</p>
                    <p class="text-blue-600 mt-4 text-sm">🔗 LinkedIn</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Annotators Section -->
    <section id="workforce" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold mb-12 text-center">The Quality Starts With the Annotators</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div class="rounded-lg overflow-hidden">
                    <img src="/public/images/arabic-annotators-team.png" alt="Arabic Annotators Team" class="w-full h-96 object-cover rounded-lg">
                </div>

                <div>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        Our annotator workforce is our primary quality asset. We invest in their training, their ownership stake, and their stability — because high-quality annotations require a workforce that is both skilled and retained.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="annotator-stat">
                    <p class="text-blue-600 font-semibold mb-2">01</p>
                    <p class="number">Native</p>
                    <p class="text-gray-600 mt-2">91% top accuracy</p>
                </div>
                <div class="annotator-stat">
                    <p class="text-blue-600 font-semibold mb-2">02</p>
                    <p class="number">Trained</p>
                    <p class="text-gray-600 mt-2">3,031 annotations delivered</p>
                </div>
                <div class="annotator-stat">
                    <p class="text-blue-600 font-semibold mb-2">03</p>
                    <p class="number">Invested</p>
                    <p class="text-gray-600 mt-2">Long-term retention, not gig churn</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Worker Privacy Section -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white border border-gray-200 rounded-lg p-8 flex items-start gap-6">
                <div class="text-3xl flex-shrink-0">🔒</div>
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Worker privacy is a priority.</h3>
                    <p class="text-gray-600">We do not publish individual annotator names, photos, or location information.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Left Content -->
                <div>
                    <h2 class="text-4xl font-bold mb-6 text-gray-900">Start Your Project</h2>
                    <p class="text-gray-600 text-lg mb-8">Tell us about your project. We'll follow up to discuss scope, dialect requirements, QA standards, and how we can fit into your annotation pipeline.</p>

                    <div class="flex flex-col gap-4 mb-8">
                        <div class="flex items-center gap-3">
                            <span class="text-blue-600">✉️</span>
                            <a href="mailto:info@karamadata.ai" class="text-blue-600 hover:underline">info@karamadata.ai</a>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-blue-600">✓</span>
                            <span class="text-gray-700">US LLC — domestically incorporated and owned</span>
                        </div>
                    </div>

                    <div class="bg-gray-50 border-l-4 border-blue-600 p-6 rounded">
                        <p class="text-blue-600 font-semibold text-lg mb-3">"Our annotators are not vendors — they are deeply invested in the outcomes. That changes everything about how they approach the work. The precision, the care, the accountability. It shows in every dataset we deliver."</p>
                        <p class="text-gray-700 font-semibold">Nareman Dayya</p>
                        <p class="text-gray-600 text-sm">In-region Operations Advisor, Karama Data</p>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <form class="space-y-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-900 font-semibold mb-2">Your Name <span class="text-red-600">*</span></label>
                                <input type="text" placeholder="Jane Smith" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-gray-900 font-semibold mb-2">Company <span class="text-red-600">*</span></label>
                                <input type="text" placeholder="Acme AI Inc." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>

                        <div>
                            <label class="block text-gray-900 font-semibold mb-2">Work Email <span class="text-red-600">*</span></label>
                            <input type="email" placeholder="jane@yourcompany.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div>
                            <label class="block text-gray-900 font-semibold mb-2">Project Description <span class="text-red-600">*</span></label>
                            <textarea placeholder="Tell us about your annotation needs — dialect requirements, volume, task type, timeline..." rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>

                        <button class="btn-blue w-full py-3 font-semibold">Start Your Project</button>
                        <p class="text-center text-sm text-gray-600">We respond to all inquiries within one business day.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-blue-900 to-blue-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- About -->
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-10 h-10 bg-blue-400 rounded flex items-center justify-center">
                            <span class="text-blue-900 font-bold">K</span>
                        </div>
                        <span class="font-bold text-lg">Karama Data</span>
                    </div>
                    <p class="text-blue-100 text-sm leading-relaxed mb-4">Native speakers. Rigorous QA. No shortcuts.</p>
                    <p class="text-blue-100 text-sm leading-relaxed">Enterprise Arabic dialect annotation for AI companies building the next generation of Arabic-language AI systems.</p>
                    <div class="mt-4 inline-block px-3 py-1 bg-blue-700 text-blue-100 text-xs rounded border border-blue-500">US Incorporated LLC</div>
                </div>

                <!-- Navigation -->
                <div>
                    <h4 class="font-bold mb-6 text-lg">Navigation</h4>
                    <ul class="space-y-3 text-sm text-blue-100">
                        <li><a href="#why-arabic" class="hover:text-white transition">Why Arabic</a></li>
                        <li><a href="#results" class="hover:text-white transition">Results</a></li>
                        <li><a href="#services" class="hover:text-white transition">Services</a></li>
                        <li><a href="#about" class="hover:text-white transition">About</a></li>
                        <li><a href="#workforce" class="hover:text-white transition">Our Workforce</a></li>
                        <li><a href="#" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="font-bold mb-6 text-lg">Contact</h4>
                    <ul class="space-y-3 text-sm text-blue-100">
                        <li class="flex items-start gap-2">
                            <span>✉️</span>
                            <a href="mailto:info@karamadata.ai" class="hover:text-white transition">info@karamadata.ai</a>
                        </li>
                        <li class="flex items-start gap-2">
                            <span>🌐</span>
                            <span>Arabic Language Annotation Only</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span>🛡️</span>
                            <span>No Content Moderation Services</span>
                        </li>
                    </ul>
                </div>

                <!-- Partners -->
                <div>
                    <h4 class="font-bold mb-6 text-lg">Partners & Affiliations</h4>
                    <div class="space-y-4">
                        <div>
                            <p class="text-blue-100 text-sm mb-2 font-semibold">Supported by</p>
                            <p class="text-white text-lg font-bold">Gaza Children Village (GCV)</p>
                        </div>
                        <div class="flex items-center gap-2 px-3 py-2 bg-blue-700 rounded text-sm">
                            <span>📍</span>
                            <span>US-Incorporated LLC</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-blue-700 pt-8 text-center text-sm text-blue-200">
                <p>&copy; 2026 Karama Data LLC. All rights reserved. | US LLC — Domestic Ownership. Arabic AI Annotation.</p>
            </div>
        </div>
    </footer>

    <script>
        const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.style.opacity = '1';
            });
        }, observerOptions);
        document.querySelectorAll('.scroll-reveal').forEach(el => observer.observe(el));
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });
    </script>
</body>
</html>
