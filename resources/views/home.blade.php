<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Karama Data — Enterprise-grade Arabic dialect data annotation services for AI companies. NLP, ASR, and conversational AI annotation with rigorous QA standards.">
    <title>Karama Data | Arabic AI Data Annotation</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                        High-Quality Arabic Dialect Annotation at Enterprise Scale
                    </h1>
                    <p class="text-lg text-slate-300 leading-relaxed mb-10 max-w-2xl">
                        Karama Data delivers rigorously quality-controlled Arabic language annotation for NLP, ASR, and conversational AI systems — with a workforce invested in the outcomes they produce.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="inline-flex items-center justify-center bg-blue-500 hover:bg-blue-400 text-white font-medium px-8 py-3 rounded-md transition-colors">
                            Start a Conversation
                        </a>
                        <a href="#services" class="inline-flex items-center justify-center border border-slate-500 hover:border-slate-300 text-slate-300 hover:text-white font-medium px-8 py-3 rounded-md transition-colors">
                            Explore Our Services
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
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                    <div>
                        <div class="text-2xl font-semibold text-white">US LLC</div>
                        <div class="text-sm text-blue-200 mt-1">Domestic Ownership</div>
                    </div>
                    <div>
                        <div class="text-2xl font-semibold text-white">4+</div>
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
                        <h3 class="font-semibold text-[#0f2040] text-lg mb-2">NLP Annotation</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Named entity recognition, sentiment analysis, intent classification, and text categorization across Levantine, Gulf, Egyptian, and Maghrebi dialects.</p>
                    </div>

                    <div class="border border-slate-200 rounded-xl p-7 hover:border-blue-300 hover:shadow-sm transition-all">
                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/></svg>
                        </div>
                        <h3 class="font-semibold text-[#0f2040] text-lg mb-2">ASR Data Annotation</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Speech transcription, phonetic labeling, speaker diarization, and audio quality validation for Arabic automatic speech recognition training pipelines.</p>
                    </div>

                    <div class="border border-slate-200 rounded-xl p-7 hover:border-blue-300 hover:shadow-sm transition-all">
                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                        </div>
                        <h3 class="font-semibold text-[#0f2040] text-lg mb-2">Conversational AI</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Dialogue annotation, response ranking, RLHF data collection, and conversation flow labeling for Arabic-language chatbots and virtual assistants.</p>
                    </div>

                    <div class="border border-slate-200 rounded-xl p-7 hover:border-blue-300 hover:shadow-sm transition-all">
                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="font-semibold text-[#0f2040] text-lg mb-2">Quality Assurance</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Multi-layer review with inter-annotator agreement measurement, senior reviewer sign-off, and structured QA reporting delivered with every project.</p>
                    </div>

                    <div class="border border-slate-200 rounded-xl p-7 hover:border-blue-300 hover:shadow-sm transition-all">
                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
                        </div>
                        <h3 class="font-semibold text-[#0f2040] text-lg mb-2">Dialect Coverage</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Native-speaker annotators covering Levantine, Gulf (Khaleeji), Egyptian, Moroccan/Maghrebi dialects, and Modern Standard Arabic (MSA).</p>
                    </div>

                    <div class="border border-slate-200 rounded-xl p-7 hover:border-blue-300 hover:shadow-sm transition-all">
                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <h3 class="font-semibold text-[#0f2040] text-lg mb-2">Enterprise Compliance</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">US-incorporated, domestically owned. No content moderation work. Structured data handling with privacy-first practices that meet enterprise procurement requirements.</p>
                    </div>

                </div>

                <div class="mt-12 p-6 bg-slate-50 rounded-xl border border-slate-200">
                    <p class="text-slate-700 text-sm leading-relaxed">
                        <strong class="text-[#0f2040]">Pricing is project-specific.</strong> We work with clients to scope engagements based on volume, dialect requirements, and QA depth. Contact us to discuss your project needs.
                    </p>
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

                <div class="grid md:grid-cols-3 gap-8 mb-14">
                    <div class="text-center p-8 bg-[#f8fafc] rounded-xl border border-slate-200">
                        <div class="text-3xl font-semibold text-[#0f2040] mb-2">Native</div>
                        <div class="text-slate-600 text-sm">Arabic dialect speakers with deep linguistic and cultural competency in their assigned dialect family</div>
                    </div>
                    <div class="text-center p-8 bg-[#f8fafc] rounded-xl border border-slate-200">
                        <div class="text-3xl font-semibold text-[#0f2040] mb-2">Trained</div>
                        <div class="text-slate-600 text-sm">Structured onboarding in annotation methodologies, quality standards, and task-specific guidelines before any production work</div>
                    </div>
                    <div class="text-center p-8 bg-[#f8fafc] rounded-xl border border-slate-200">
                        <div class="text-3xl font-semibold text-[#0f2040] mb-2">Invested</div>
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
                <div class="grid md:grid-cols-2 gap-16 items-start">
                    <div>
                        <span class="text-blue-600 text-sm font-medium tracking-widest uppercase">Contact</span>
                        <h2 class="mt-3 text-3xl md:text-4xl font-semibold text-[#0f2040]">Start a Conversation</h2>
                        <p class="mt-4 text-slate-600 leading-relaxed">
                            Tell us about your project. We'll follow up to discuss scope, dialect requirements, QA standards, and how we can fit into your annotation pipeline.
                        </p>
                        <div class="mt-8 space-y-4 text-sm text-slate-600">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <span>contact@karamadata.com</span>
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
                                Send Inquiry
                            </button>

                            <p class="text-xs text-slate-500 text-center">We respond to all inquiries within one business day.</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    {{-- =========================================================
         FOOTER
    ========================================================= --}}
    <footer class="bg-[#0a1628] text-slate-400 py-12">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-10 mb-10">
                <div>
                    <div class="text-white font-semibold text-lg mb-3">Karama Data</div>
                    <p class="text-sm leading-relaxed">Enterprise Arabic dialect data annotation services for AI companies. US LLC. Domestically owned and operated.</p>
                </div>
                <div>
                    <div class="text-white font-medium mb-3 text-sm">Navigation</div>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#services" class="hover:text-white transition-colors">Services</a></li>
                        <li><a href="#about" class="hover:text-white transition-colors">About</a></li>
                        <li><a href="#workforce" class="hover:text-white transition-colors">Our Workforce</a></li>
                        <li><a href="#contact" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <div class="text-white font-medium mb-3 text-sm">Contact</div>
                    <p class="text-sm">contact@karamadata.com</p>
                    <div class="mt-4 text-sm space-y-1">
                        <p>Arabic Language Annotation Only</p>
                        <p>No Content Moderation Services</p>
                    </div>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-6 flex flex-col sm:flex-row justify-between items-center gap-3 text-xs text-slate-500">
                <span>&copy; {{ date('Y') }} Karama Data LLC. All rights reserved.</span>
                <span>US LLC · Domestic Ownership · Enterprise Data Annotation</span>
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
