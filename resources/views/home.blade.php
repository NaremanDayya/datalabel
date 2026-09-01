<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karama Data - Arabic AI Annotation</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * { font-family: 'Poppins', sans-serif; }
        body { font-family: 'Poppins', sans-serif; }
    </style>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-white text-gray-900">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white shadow-sm z-50">
        <div class="mx-auto px-6 py-4 flex items-center justify-between" style="max-width: 1920px;">
            <img src="{{ asset('public/images/logo.png') }}" alt="Karama Data" class="h-12">
            <div class="hidden md:flex items-center gap-6">
                <a href="#why-arabic" class="text-gray-700 hover:text-blue-600 font-medium text-sm">Why Arabic</a>
                <a href="#results" class="text-gray-700 hover:text-blue-600 font-medium text-sm">Results</a>
                <a href="#services" class="text-gray-700 hover:text-blue-600 font-medium text-sm">Services</a>
                <a href="#about" class="text-gray-700 hover:text-blue-600 font-medium text-sm">About</a>
                <a href="#workforce" class="text-gray-700 hover:text-blue-600 font-medium text-sm">Our Workforce</a>
            </div>
            <button class="bg-gray-900 text-white px-4 py-2 rounded text-sm font-bold hover:bg-gray-800">Get in Touch</button>
        </div>
    </nav>

    <!-- Hero Section - Section 1 (Figma Design) -->
    <div style="width: 100%; position: relative; background: #01213D; background-image: url('{{ asset('public/images/Rectangle-76.png') }}'); background-size: cover; background-position: center; margin-top: 60px; margin-bottom: 80px; aspect-ratio: 1920 / 1320;">
        <div style="width: 100%; height: 100%; position: relative;">
            <div style="width: 32.9%; left: 8.85%; top: 18.8%; position: absolute; color: #EFEFEF; font-size: clamp(40px, 5vw, 70px); font-family: 'Poppins', sans-serif; font-weight: 700; line-height: normal; word-wrap: break-word;">Your Arabic AI is only as good as the humans who train it .</div>
            <div style="width: 30.7%; left: 8.65%; top: 53.1%; position: absolute; color: #B3B3B3; font-size: clamp(16px, 2vw, 25px); font-family: 'Poppins', sans-serif; font-weight: 400; line-height: normal; word-wrap: break-word; display: flex; align-items: flex-start;">91% accuracy, benchmarked against published research. US-incorporated.  No shortcuts.</div>
            <div style="padding-left: 30px; padding-right: 30px; padding-top: 15px; padding-bottom: 15px; left: 8.85%; top: 65.2%; position: absolute; background: #EFEFEF; border-radius: 9px; justify-content: center; align-items: center; gap: 10px; display: inline-flex; cursor: pointer;">
                <div style="color: #01213D; font-size: clamp(14px, 1.5vw, 20px); font-family: Poppins; font-weight: 700; word-wrap: break-word">Start Your Project</div>
            </div>
            <div style="padding-left: 30px; padding-right: 30px; padding-top: 15px; padding-bottom: 15px; left: 22.8%; top: 65.2%; position: absolute; border-radius: 9px; outline: 1px #C4C4C4 solid; outline-offset: -1px; justify-content: center; align-items: center; gap: 10px; display: inline-flex; cursor: pointer;">
                <div style="color: white; font-size: clamp(14px, 1.5vw, 20px); font-family: Poppins; font-weight: 700; word-wrap: break-word">See Our Results</div>
            </div>
            <div data-property-1="Group 113" style="width: 14.6%; height: 14.4%; left: 8.85%; top: 92.8%; position: absolute">
                <div style="width: 100%; height: 100%; left: 0px; top: 0px; position: absolute; background: linear-gradient(180deg, #043763 8%, #01213D 100%); border-radius: 20px; border: 1px #00427C solid"></div>
                <div style="width: 88.6%; height: 26.8%; left: 5.7%; top: 50%; position: absolute; text-align: center; color: #F2F4F6; font-size: clamp(18px, 2vw, 25px); font-family: Poppins; font-weight: 600; word-wrap: break-word">AI & Cybersecurity</div>
                <div style="left: 33.9%; top: 76.8%; position: absolute; color: #548ED3; font-size: clamp(14px, 1.5vw, 17px); font-family: Poppins; font-weight: 500; word-wrap: break-word">Founded by</div>
                <div style="width: 16%; height: 23.7%; left: 41.8%; top: 9.5%; position: absolute; overflow: hidden">
                    <div style="width: 75%; height: 80%; left: 10.7%; top: 10%; position: absolute; background: #548ED3"></div>
                </div>
            </div>
            <div data-property-1="Group 113" style="width: 14.6%; height: 14.4%; left: 25.78%; top: 92.8%; position: absolute">
                <div style="width: 100%; height: 100%; left: 0px; top: 0px; position: absolute; background: linear-gradient(180deg, #043763 8%, #01213D 100%); border-radius: 20px; border: 1px #00427C solid"></div>
                <div style="width: 88.6%; height: 26.8%; left: 5.7%; top: 50%; position: absolute; text-align: center; color: #F2F4F6; font-size: clamp(18px, 2vw, 25px); font-family: Poppins; font-weight: 600; word-wrap: break-word">5+ Dialects</div>
                <div style="left: 17.1%; top: 76.8%; position: absolute; text-align: center; color: #548ED3; font-size: clamp(14px, 1.5vw, 17px); font-family: Poppins; font-weight: 500; word-wrap: break-word">Arabic Dialect Variants</div>
            </div>
            <div data-property-1="Group 113" style="width: 14.6%; height: 14.4%; left: 42.7%; top: 92.8%; position: absolute">
                <div style="width: 100%; height: 100%; left: 0px; top: 0px; position: absolute; background: linear-gradient(180deg, #043763 8%, #01213D 100%); border-radius: 20px; border: 1px #00427C solid"></div>
                <div style="width: 88.6%; height: 26.8%; left: 5.7%; top: 50%; position: absolute; text-align: center; color: #F2F4F6; font-size: clamp(18px, 2vw, 25px); font-family: Poppins; font-weight: 600; word-wrap: break-word">Multi-layer</div>
                <div style="left: 23.6%; top: 76.8%; position: absolute; text-align: center; color: #548ED3; font-size: clamp(14px, 1.5vw, 17px); font-family: Poppins; font-weight: 500; word-wrap: break-word">QA Review Process</div>
            </div>
            <div data-property-1="Group 113" style="width: 14.6%; height: 14.4%; left: 59.6%; top: 92.8%; position: absolute">
                <div style="width: 100%; height: 100%; left: 0px; top: 0px; position: absolute; background: linear-gradient(180deg, #043763 8%, #01213D 100%); border-radius: 20px; border: 1px #00427C solid"></div>
                <div style="width: 88.6%; height: 26.8%; left: 5.7%; top: 50%; position: absolute; text-align: center; color: #F2F4F6; font-size: clamp(18px, 2vw, 25px); font-family: Poppins; font-weight: 600; word-wrap: break-word">Arabic Only</div>
                <div style="left: 16.4%; top: 76.8%; position: absolute; text-align: center; color: #548ED3; font-size: clamp(14px, 1.5vw, 17px); font-family: Poppins; font-weight: 500; word-wrap: break-word">No Content Moderation</div>
            </div>
            <div data-property-1="Group 113" style="width: 14.6%; height: 14.4%; left: 76.56%; top: 92.8%; position: absolute">
                <div style="width: 100%; height: 100%; left: 0px; top: 0px; position: absolute; background: linear-gradient(180deg, #043763 8%, #01213D 100%); border-radius: 20px; border: 1px #00427C solid"></div>
                <div style="width: 88.6%; height: 26.8%; left: 5.7%; top: 50%; position: absolute; text-align: center; color: #F2F4F6; font-size: clamp(18px, 2vw, 25px); font-family: Poppins; font-weight: 900; word-wrap: break-word">Kappa 0.62</div>
                <div style="left: 17.8%; top: 76.8%; position: absolute; text-align: center; color: #548ED3; font-size: clamp(14px, 1.5vw, 17px); font-family: Poppins; font-weight: 500; word-wrap: break-word">RLHF Agreement Score</div>
            </div>
            </div>
        </div>
    </div>

    <!-- Why Arabic Section - Figma Design -->
    <section id="why-arabic" style="background: #F5F5F5; padding: 100px 170px;">
        <div style="display: grid; grid-template-columns: auto 1fr; gap: 100px; align-items: center;">
            <div style="flex-shrink: 0;">
                <img src="{{ asset('public/images/human-ai-interaction.png') }}" alt="Why Arabic" style="width: 523px; height: 615px; border-radius: 10px; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2); object-fit: cover;">
            </div>
            <div>
                <div style="font-family: 'Poppins', sans-serif; margin-bottom: 40px;">
                    <span style="color: #043763; font-size: 70px; font-weight: 600; line-height: 1.2; display: block;">Why Arabic?</span>
                    <span style="color: #488EFF; font-size: 70px; font-weight: 600; line-height: 1.2; display: block;">Why Now?</span>
                </div>
                <p style="width: 923px; color: #787878; font-size: 36px; font-family: 'Poppins', sans-serif; font-weight: 400; line-height: 49px; margin: 0;">Arabic is one of the most spoken languages on earth — and one of the most underserved in AI. That gap is why enterprise buyers are reaching out, and why the quality of annotation data has never mattered more.</p>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section style="background: #F5F5F5; padding: 80px 170px;">
        <div style="background: linear-gradient(270deg, #01213D 0%, #003A6C 100%); border-radius: 20px; padding: 60px; display: grid; grid-template-columns: 1fr auto 1fr; gap: 60px; align-items: center; position: relative;">
            <div>
                <div style="color: #488EFF; font-size: 70px; font-family: 'Poppins', sans-serif; font-weight: 600; line-height: normal; margin-bottom: 20px; text-shadow: 0 0 30px rgba(72, 142, 255, 0.5);">400M+</div>
                <div style="color: #FFFFFF; font-size: 25px; font-family: 'Poppins', sans-serif; font-weight: 700; line-height: normal; margin-bottom: 20px;">Arabic speakers worldwide</div>
                <p style="width: 519px; color: #E0E3E5; font-size: 25px; font-family: 'Poppins', sans-serif; font-weight: 400; line-height: normal; margin: 0;">Arabic is the fifth most spoken language in the world, spanning 22 countries across the Middle East and North Africa — yet AI systems routinely fail to understand the people who speak it.</p>
            </div>
            <div style="width: 1px; height: 200px; background: rgba(255, 255, 255, 0.2);"></div>
            <div>
                <div style="color: #488EFF; font-size: 70px; font-family: 'Poppins', sans-serif; font-weight: 600; line-height: normal; margin-bottom: 20px; text-shadow: 0 0 30px rgba(72, 142, 255, 0.5);">&lt;1%</div>
                <div style="color: #FFFFFF; font-size: 25px; font-family: 'Poppins', sans-serif; font-weight: 700; line-height: normal; margin-bottom: 20px;">of NLP research covers Arabic</div>
                <p style="width: 519px; color: #E0E3E5; font-size: 25px; font-family: 'Poppins', sans-serif; font-weight: 400; line-height: normal; margin: 0;">Despite hundreds of millions of speakers, Arabic receives a fraction of the research attention that English does. The training data infrastructure is just getting started — and the companies who invest now will have a significant head start.</p>
            </div>
        </div>
    </section>

    <!-- Translation & MSA Section - Figma Design -->
    <section style="background: #F5F5F5; padding: 80px 170px;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: flex-start;">
            <div style="display: flex; flex-direction: column; gap: 30px;">
                <div style="background: #FFFFFF; padding: 40px 30px; border-radius: 10px; border-left: 13px solid #2970C5;">
                    <h3 style="color: #003A6C; font-size: 35px; font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 15px; margin-top: 0;">The Translation Shortcut</h3>
                    <p style="color: #787878; font-size: 25px; font-family: 'Poppins', sans-serif; font-weight: 400; line-height: 1.6; margin: 0;">Most "Arabic" AI training data is machine-translated English. It misses cultural context, dialect nuance, and the way Arabic is actually spoken day to day.</p>
                </div>
                <div style="background: #FFFFFF; padding: 40px 30px; border-radius: 10px; border-left: 13px solid #2970C5;">
                    <h3 style="color: #003A6C; font-size: 35px; font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 15px; margin-top: 0;">The MSA Assumption</h3>
                    <p style="color: #787878; font-size: 25px; font-family: 'Poppins', sans-serif; font-weight: 400; line-height: 1.6; margin: 0;">Models trained on Modern Standard Arabic sound robotic to real users who speak Levantine, Khaleeji, Egyptian, or Maghrebi every day. Dialect matters.</p>
                </div>
            </div>
            <div style="display: flex; align-items: center;">
                <img src="{{ asset('public/images/Rectangle-89.png') }}" alt="Arabic Training Data" style="width: 553px; height: auto; max-height: 570px; border-radius: 10px; object-fit: cover; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);">
            </div>
        </div>
    </section>

    <!-- Quality Section - Figma Design -->
    <section id="results" style="background: #FFFFFF; padding: 80px 170px;">
        <div style="display: flex; flex-direction: column; align-items: center; gap: 40px; margin-bottom: 80px;">
            <div style="text-align: center;">
                <div style="font-family: 'Poppins', sans-serif; margin-bottom: 20px;">
                    <span style="color: #043763; font-size: 70px; font-weight: 700; line-height: 1.2; display: inline;">Quality We Can </span>
                    <span style="color: #488EFF; font-size: 70px; font-weight: 700; line-height: 1.2; display: inline;">Prove</span>
                </div>
                <p style="width: 100%; max-width: 1134px; color: #787878; font-size: 25px; font-family: 'Poppins', sans-serif; font-weight: 400; line-height: 38px; text-align: center; margin: 0;">In our first structured pilot, two Palestinian annotators in Gaza completed 3,031 annotation tasks across three task types — every result benchmarked against published international standards.</p>
            </div>

            <!-- Metric Cards -->
            <div style="display: flex; gap: 30px; width: 100%; margin-bottom: 60px; justify-content: center; flex-wrap: wrap;">
                <div style="position: relative; width: 370px; height: 215px; border-radius: 20px; overflow: hidden; border: 0.5px solid rgba(0, 88, 190, 0.34); background: linear-gradient(180deg, rgba(255, 255, 255, 0.43) 0%, rgba(238, 245, 255, 0.34) 50%, rgba(153, 192, 255, 0.26) 100%);">
                    <div style="display: flex; flex-direction: column; justify-content: flex-end; align-items: flex-start; gap: 10px; height: 100%; padding: 31px 119px 27px 43px;">
                        <div style="color: #488EFF; font-size: 56px; font-family: 'Poppins', sans-serif; font-weight: 700; line-height: 56px;">3,031</div>
                        <div style="color: #043763; font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 500; line-height: 20px;">Tasks completed</div>
                        <div style="color: #488EFF; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 400; line-height: 18px;">100% completion rate</div>
                    </div>
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 6px; background: #488EFF; border-radius: 0 0 20px 20px;"></div>
                </div>

                <div style="position: relative; width: 370px; height: 215px; border-radius: 20px; overflow: hidden; border: 0.5px solid rgba(0, 88, 190, 0.34); background: linear-gradient(180deg, rgba(255, 255, 255, 0.43) 0%, rgba(238, 245, 255, 0.34) 50%, rgba(153, 192, 255, 0.26) 100%);">
                    <div style="display: flex; flex-direction: column; justify-content: flex-end; align-items: flex-start; gap: 10px; height: 100%; padding: 31px 119px 27px 43px;">
                        <div style="color: #00B660; font-size: 56px; font-family: 'Poppins', sans-serif; font-weight: 700; line-height: 56px;">91.4%</div>
                        <div style="color: #043763; font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 500; line-height: 20px;">Top accuracy</div>
                        <div style="color: #00A651; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 400; line-height: 18px;">preference Ranking</div>
                    </div>
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 6px; background: #00B660; border-radius: 0 0 20px 20px;"></div>
                </div>

                <div style="position: relative; width: 370px; height: 215px; border-radius: 20px; overflow: hidden; border: 0.5px solid rgba(0, 88, 190, 0.34); background: linear-gradient(180deg, rgba(255, 255, 255, 0.43) 0%, rgba(238, 245, 255, 0.34) 50%, rgba(153, 192, 255, 0.26) 100%);">
                    <div style="display: flex; flex-direction: column; justify-content: flex-end; align-items: flex-start; gap: 10px; height: 100%; padding: 31px 119px 27px 43px;">
                        <div style="color: #8B5CF6; font-size: 56px; font-family: 'Poppins', sans-serif; font-weight: 700; line-height: 56px;">0.623</div>
                        <div style="color: #043763; font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 500; line-height: 20px;">RLHF Kappa score</div>
                        <div style="color: #8B5CF6; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 400; line-height: 18px;">1 vs 0.27 - 0.39</div>
                    </div>
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 6px; background: #8B5CF6; border-radius: 0 0 20px 20px;"></div>
                </div>

                <div style="position: relative; width: 370px; height: 215px; border-radius: 20px; overflow: hidden; border: 0.5px solid rgba(0, 88, 190, 0.34); background: linear-gradient(180deg, rgba(255, 255, 255, 0.43) 0%, rgba(238, 245, 255, 0.34) 50%, rgba(153, 192, 255, 0.26) 100%);">
                    <div style="display: flex; flex-direction: column; justify-content: flex-end; align-items: flex-start; gap: 10px; height: 100%; padding: 31px 119px 27px 43px;">
                        <div style="color: #F59E0B; font-size: 56px; font-family: 'Poppins', sans-serif; font-weight: 700; line-height: 56px;">470/hr</div>
                        <div style="color: #043763; font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 500; line-height: 20px;">Team throughput</div>
                        <div style="color: #F59E0B; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 400; line-height: 18px;">2-labeler pilot team</div>
                    </div>
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 6px; background: #F59E0B; border-radius: 0 0 20px 20px;"></div>
                </div>
            </div>

            <!-- Result Cards -->
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; width: 100%;">
                <div style="width: 100%; border-radius: 20px; border: 0.5px solid rgba(59, 130, 246, 0.42); background: linear-gradient(180deg, rgba(255, 255, 255, 0.40) 20.67%, rgba(238, 245, 255, 0.32) 51.44%, rgba(153, 192, 255, 0.24) 100%); overflow: hidden; display: flex; flex-direction: column;">
                    <div style="height: 4px; background: #00B660;"></div>
                    <div style="padding: 30px;">
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
                            <h3 style="color: #043763; font-size: 28px; font-family: 'Poppins', sans-serif; font-weight: 700; margin: 0;">Preference Ranking</h3>
                            <div style="background: rgba(0, 182, 96, 0.2); border: 1px solid #00B660; border-radius: 20px; padding: 6px 12px;">
                                <span style="color: #00B660; font-size: 12px; font-family: 'Poppins', sans-serif; font-weight: 500;">Above Benchmark</span>
                            </div>
                        </div>
                        <p style="color: #787878; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 400; margin: 0 0 15px 0;">667 items - RLHF / Model Alignment</p>
                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="color: #043763; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 600;">Avg accuracy</span>
                                <span style="color: #00B660; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 700;">88.6%</span>
                            </div>
                            <div style="width: 100%; height: 4px; background: #E0E0E0; border-radius: 2px; overflow: hidden;">
                                <div style="width: 88.6%; height: 100%; background: #00B660;"></div>
                            </div>
                        </div>
                        <p style="color: #787878; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 400; margin: 0 0 20px 0;">Benchmark: 83–87% (major AI labs)</p>
                        <div style="border-top: 1px solid #E0E0E0; padding-top: 20px;">
                            <p style="color: #043763; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 600; margin: 0 0 8px 0;">Cohen's Kappa</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                <span style="color: #00B660; font-size: 28px; font-family: 'Poppins', sans-serif; font-weight: 700;">0.623</span>
                            </div>
                            <div style="width: 100%; height: 6px; background: #E0E0E0; border-radius: 3px; overflow: hidden;">
                                <div style="width: 62.3%; height: 100%; background: #00B660;"></div>
                            </div>
                            <p style="color: #787878; font-size: 12px; font-family: 'Poppins', sans-serif; font-weight: 400; margin: 8px 0 0 0;">Benchmark: 0.57–0.83 (OpenAI/NVIDIA)</p>
                        </div>
                        <div style="background: #E8F5F0; border-radius: 8px; padding: 12px 15px; margin-top: 20px;">
                            <p style="color: #00A651; font-size: 12px; font-family: 'Poppins', sans-serif; font-weight: 600; margin: 0; line-height: 1.4;">Best labeler: 91.4% - No Arabic RLHF benchmark exists — first-of-kind data</p>
                        </div>
                    </div>
                </div>

                <div style="width: 100%; border-radius: 20px; border: 0.5px solid rgba(59, 130, 246, 0.42); background: linear-gradient(180deg, rgba(255, 255, 255, 0.40) 20.67%, rgba(238, 245, 255, 0.32) 51.44%, rgba(153, 192, 255, 0.24) 100%); overflow: hidden; display: flex; flex-direction: column;">
                    <div style="height: 4px; background: #8B5CF6;"></div>
                    <div style="padding: 30px;">
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
                            <h3 style="color: #043763; font-size: 28px; font-family: 'Poppins', sans-serif; font-weight: 700; margin: 0;">Dialect Identification</h3>
                            <div style="background: rgba(139, 92, 246, 0.2); border: 1px solid #8B5CF6; border-radius: 20px; padding: 6px 12px;">
                                <span style="color: #8B5CF6; font-size: 12px; font-family: 'Poppins', sans-serif; font-weight: 500;">On Par</span>
                            </div>
                        </div>
                        <p style="color: #787878; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 400; margin: 0 0 15px 0;">960 items - MSA, Levantine, Gulf, Egyptian, Iraqi, Maghrebi</p>
                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="color: #043763; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 600;">Avg accuracy</span>
                                <span style="color: #8B5CF6; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 700;">71.2%</span>
                            </div>
                            <div style="width: 100%; height: 4px; background: #E0E0E0; border-radius: 2px; overflow: hidden;">
                                <div style="width: 71.2%; height: 100%; background: #8B5CF6;"></div>
                            </div>
                        </div>
                        <p style="color: #787878; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 400; margin: 0 0 20px 0;">Benchmark: 65–80% (NADI 2024)</p>
                        <div style="border-top: 1px solid #E0E0E0; padding-top: 20px;">
                            <p style="color: #043763; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 600; margin: 0 0 8px 0;">Cohen's Kappa</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                <span style="color: #8B5CF6; font-size: 28px; font-family: 'Poppins', sans-serif; font-weight: 700;">0.572</span>
                            </div>
                            <div style="width: 100%; height: 6px; background: #E0E0E0; border-radius: 3px; overflow: hidden;">
                                <div style="width: 57.2%; height: 100%; background: #8B5CF6;"></div>
                            </div>
                            <p style="color: #787878; font-size: 12px; font-family: 'Poppins', sans-serif; font-weight: 400; margin: 8px 0 0 0;">Benchmark: 0.59 (NADI 2024, Palestinian Arabic)</p>
                        </div>
                        <div style="background: #F4ECFE; border-radius: 8px; padding: 12px 15px; margin-top: 20px;">
                            <p style="color: #7C5BA3; font-size: 12px; font-family: 'Poppins', sans-serif; font-weight: 600; margin: 0; line-height: 1.4;">Best labeler: 77% - Compared against the largest Arabic dialect competition globally</p>
                        </div>
                    </div>
                </div>

                <div style="width: 100%; border-radius: 20px; border: 0.5px solid rgba(59, 130, 246, 0.42); background: linear-gradient(180deg, rgba(255, 255, 255, 0.40) 20.67%, rgba(238, 245, 255, 0.32) 51.44%, rgba(153, 192, 255, 0.24) 100%); overflow: hidden; display: flex; flex-direction: column;">
                    <div style="height: 4px; background: #F59E0B;"></div>
                    <div style="padding: 30px;">
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
                            <h3 style="color: #043763; font-size: 28px; font-family: 'Poppins', sans-serif; font-weight: 700; margin: 0;">Sentiment Tagging</h3>
                            <div style="background: rgba(245, 158, 11, 0.2); border: 1px solid #F59E0B; border-radius: 20px; padding: 6px 12px;">
                                <span style="color: #F59E0B; font-size: 12px; font-family: 'Poppins', sans-serif; font-weight: 500;">Near Target</span>
                            </div>
                        </div>
                        <p style="color: #787878; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 400; margin: 0 0 15px 0;">667 items - RLHF / Model Alignment</p>
                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="color: #043763; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 600;">Avg accuracy</span>
                                <span style="color: #F59E0B; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 700;">62.5%</span>
                            </div>
                            <div style="width: 100%; height: 4px; background: #E0E0E0; border-radius: 2px; overflow: hidden;">
                                <div style="width: 62.5%; height: 100%; background: #F59E0B;"></div>
                            </div>
                        </div>
                        <p style="color: #787878; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 400; margin: 0 0 20px 0;">Benchmark: 60–75% (AraSenTi-Tweet)</p>
                        <div style="border-top: 1px solid #E0E0E0; padding-top: 20px;">
                            <p style="color: #043763; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 600; margin: 0 0 8px 0;">Cohen's Kappa</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                <span style="color: #F59E0B; font-size: 28px; font-family: 'Poppins', sans-serif; font-weight: 700;">0.532</span>
                            </div>
                            <div style="width: 100%; height: 6px; background: #E0E0E0; border-radius: 3px; overflow: hidden;">
                                <div style="width: 53.2%; height: 100%; background: #F59E0B;"></div>
                            </div>
                            <p style="color: #787878; font-size: 12px; font-family: 'Poppins', sans-serif; font-weight: 400; margin: 8px 0 0 0;">Target: 0.66–0.70 (Arabic NLP)</p>
                        </div>
                        <div style="background: #FEF3C7; border-radius: 8px; padding: 12px 15px; margin-top: 20px;">
                            <p style="color: #B45309; font-size: 12px; font-family: 'Poppins', sans-serif; font-weight: 600; margin: 0; line-height: 1.4;">Best labeler: 73.2% - Guideline improvement identified & incorporated into SOP</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="bg-gradient-to-r from-blue-900 to-blue-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-6 flex items-center justify-between flex-col md:flex-row gap-8">
            <div class="flex-1">
                <p class="text-lg">Benchmarked against published research: NADI 2024 (ACL/WANLP) · AraSenTi-Tweet · ASAD Corpus · MultiPref 2024 · HelpSteer2 2024. On Preference Ranking — the highest-value task for AI companies — our Kappa of 0.623 significantly outperforms figures published by OpenAI and NVIDIA.</p>
            </div>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded font-bold flex-shrink-0">Request a Pilot</button>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-5xl font-bold text-center mb-4">Arabic Dialect Annotation Services</h2>
            <p class="text-center text-gray-600 text-lg max-w-3xl mx-auto mb-16">We specialize exclusively in Arabic language data annotation — covering major dialect families — for organizations building the next generation of Arabic-language AI systems.</p>

            <!-- Service Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">NLP Annotation</h3>
                    <p class="text-blue-600 font-semibold mb-4">Native dialect labels that improve your model's real-world accuracy.</p>
                    <p class="text-gray-600">Named entity recognition, sentiment analysis, intent classification, and text categorization across Levantine, Gulf, Egyptian, and Maghrebi dialects.</p>
                </div>
                <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">ASR Data Annotation</h3>
                    <p class="text-blue-600 font-semibold mb-4">Speech models that actually understand how Arabic is spoken, not just written.</p>
                    <p class="text-gray-600">Speech transcription, phonetic labeling, speaker diarization, and audio quality validation for Arabic automatic speech recognition training pipelines.</p>
                </div>
                <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">RLHF & Preference Ranking</h3>
                    <p class="text-blue-600 font-semibold mb-4">Human feedback data that makes your Arabic LLM safer, more helpful, and culturally aligned.</p>
                    <p class="text-gray-600 mb-4">Response ranking, preference pair collection, and reinforcement learning from human feedback (RLHF) data — delivered by native Arabic speakers who understand dialect nuance and cultural context.</p>
                    <p class="text-orange-600 font-bold text-sm">⭐ Key Capability</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Conversational AI</h3>
                    <p class="text-gray-600">Chatbot training data that feels natural to real Arabic speakers, not translated English.</p>
                    <p class="text-gray-600 text-sm mt-4">Dialogue annotation, response ranking, and conversation flow labeling for Arabic-language chatbots and virtual assistants.</p>
                </div>
                <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Quality Assurance</h3>
                    <p class="text-gray-600">Documented QA reports with every delivery — no black-box quality claims.</p>
                    <p class="text-gray-600 text-sm mt-4">Multi-layer review with inter-annotator agreement measurement, senior reviewer sign-off, and structured QA reporting delivered with every project.</p>
                </div>
                <div class="bg-white p-8 rounded-xl border border-gray-200 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Enterprise Compliance</h3>
                    <p class="text-gray-600">A vendor your procurement team can approve on the first pass.</p>
                    <p class="text-gray-600 text-sm mt-4">US-incorporated, domestically owned. No content moderation work. Structured data handling with privacy-first practices that meet enterprise procurement requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="bg-gradient-to-r from-blue-900 to-blue-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-6 flex items-center justify-between flex-col md:flex-row gap-8">
            <p class="text-lg">We price for quality, not volume. Engagements are scoped based on dialect requirements, QA depth, and throughput needs — not race-to-the-bottom per-task rates. Contact us to discuss your project.</p>
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded font-bold flex-shrink-0">Start Your Project</button>
        </div>
    </section>

    <!-- Enterprise Trust Section -->
    <section id="about" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-5xl font-bold text-center mb-4">Built for Enterprise <span class="text-blue-600">Trust</span></h2>
            <p class="text-center text-gray-600 text-lg max-w-3xl mx-auto mb-12">Karama Data is a US-incorporated LLC with domestic ownership and a leadership team with deep expertise in AI, enterprise technology, and regional operations.</p>

            <h3 class="text-3xl font-bold text-center text-gray-900 mb-12">A structure built on trust and compliance</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="text-blue-600 font-bold text-5xl mb-4">01</div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-3">US-Based Leadership</h4>
                    <p class="text-gray-600">US-based board leadership and domestic ownership that ensures accountability and alignment with enterprise standards.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="text-blue-600 font-bold text-5xl mb-4">02</div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-3">Enterprise Compliance</h4>
                    <p class="text-gray-600">A structure that meets enterprise compliance requirements and instills client confidence.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="text-blue-600 font-bold text-5xl mb-4">03</div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-3">Regional Operations</h4>
                    <p class="text-gray-600">Our operational presence is in the region, giving us authentic access to the linguistic talent our clients need.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnership Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-5xl font-bold text-center mb-12">Stronger together for lasting impact</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-12">
                <div>
                    <p class="text-gray-700 text-lg leading-relaxed mb-6">We operate in partnership with Gaza Children Village (GCV), providing operational infrastructure and community ties that allow us to build and retain a stable, highly-qualified annotator workforce.</p>
                    <h3 class="text-3xl font-bold text-blue-600 mb-3">Payment & Regional Access</h3>
                    <p class="text-gray-700">Our payment corridor runs through Gaza Children Village (GCV) — a nonprofit already equipped to move compliant payments into the region.</p>
                </div>
                <div class="bg-gray-100 p-12 rounded-lg">
                    <div class="text-center mb-8">
                        <div class="text-2xl font-bold text-blue-600 mb-2">Karama Data</div>
                        <p class="text-gray-600">AI Expertise, Technology, Quality Standards</p>
                        <div class="text-2xl my-4">×</div>
                        <div class="text-2xl font-bold text-blue-600 mb-2">GCV</div>
                        <p class="text-gray-600">Regional Operations, Infrastructure, Community Impact</p>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl mb-4">→</div>
                        <div class="bg-white p-6 rounded-lg">
                            <p class="font-bold text-gray-900">Stable, Highly-Qualified Workforce</p>
                            <p class="text-sm text-gray-600 mt-2">Better quality, stronger outcomes, lasting impact</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <button class="bg-blue-600 text-white px-6 py-3 rounded font-bold mb-8">Start Your Project →</button>
            <h2 class="text-5xl font-bold mb-12">Meet the people behind Karama Data</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">LM</div>
                    <h4 class="font-bold text-lg text-gray-900">Laura Mather</h4>
                    <p class="text-blue-600 font-semibold text-sm mb-3">Chief Executive Officer</p>
                    <p class="text-gray-600 text-sm">Silicon Valley Founder and CEO with AI and Cybersecurity expertise</p>
                    <p class="text-blue-600 mt-4 text-sm">🔗 LinkedIn</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">ME</div>
                    <h4 class="font-bold text-lg text-gray-900">Mike Eynon</h4>
                    <p class="text-blue-600 font-semibold text-sm mb-3">Chief Technology Officer</p>
                    <p class="text-gray-600 text-sm">Silicon Valley Founder and CTO</p>
                    <p class="text-blue-600 mt-4 text-sm">🔗 LinkedIn</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">ND</div>
                    <h4 class="font-bold text-lg text-gray-900">Nareman Dayya</h4>
                    <p class="text-blue-600 font-semibold text-sm mb-3">In-region Operations Advisor</p>
                    <p class="text-gray-600 text-sm">In-region operations advisor ensuring on-the-ground operational credibility, annotator welfare and delivery quality</p>
                    <p class="text-blue-600 mt-4 text-sm">🔗 LinkedIn</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">DH</div>
                    <h4 class="font-bold text-lg text-gray-900">David Hasan</h4>
                    <p class="text-blue-600 font-semibold text-sm mb-3">Advisor</p>
                    <p class="text-gray-600 text-sm">CEO of Gaza Children Village</p>
                    <p class="text-blue-600 mt-4 text-sm">🔗 LinkedIn</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Annotators Section -->
    <section id="workforce" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-5xl font-bold text-center mb-12">The Quality Starts With the Annotators</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <img src="{{ asset('public/images/arabic-annotators-team.png') }}" alt="Arabic Annotators Team" class="w-full h-auto rounded-lg">
                </div>
                <div>
                    <p class="text-gray-700 text-xl leading-relaxed">Our annotator workforce is our primary quality asset. We invest in their training, their ownership stake, and their stability — because high-quality annotations require a workforce that is both skilled and retained.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-blue-50 p-8 rounded-xl text-center">
                    <p class="text-blue-600 font-semibold mb-2">01</p>
                    <p class="text-3xl font-bold text-gray-900">Native</p>
                    <p class="text-gray-600 mt-2">91% top accuracy</p>
                </div>
                <div class="bg-blue-50 p-8 rounded-xl text-center">
                    <p class="text-blue-600 font-semibold mb-2">02</p>
                    <p class="text-3xl font-bold text-gray-900">Trained</p>
                    <p class="text-gray-600 mt-2">3,031 annotations delivered</p>
                </div>
                <div class="bg-blue-50 p-8 rounded-xl text-center">
                    <p class="text-blue-600 font-semibold mb-2">03</p>
                    <p class="text-3xl font-bold text-gray-900">Invested</p>
                    <p class="text-gray-600 mt-2">Long-term retention, not gig churn</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Worker Privacy Section -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white border border-gray-200 rounded-lg p-8 flex items-start gap-6">
                <div class="text-3xl">🔒</div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Worker privacy is a priority.</h3>
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
                    <h2 class="text-5xl font-bold mb-6">Start Your Project</h2>
                    <p class="text-gray-600 text-lg mb-8">Tell us about your project. We'll follow up to discuss scope, dialect requirements, QA standards, and how we can fit into your annotation pipeline.</p>

                    <div class="flex flex-col gap-4 mb-8">
                        <div class="flex items-center gap-3">
                            <span>✉️</span>
                            <a href="mailto:info@karamadata.ai" class="text-blue-600 hover:underline">info@karamadata.ai</a>
                        </div>
                        <div class="flex items-center gap-3">
                            <span>✓</span>
                            <span class="text-gray-700">US LLC — domestically incorporated and owned</span>
                        </div>
                    </div>

                    <div class="bg-gray-50 border-l-4 border-blue-600 p-6 rounded">
                        <p class="text-blue-600 font-bold text-lg mb-3">"Our annotators are not vendors — they are deeply invested in the outcomes. That changes everything about how they approach the work. The precision, the care, the accountability. It shows in every dataset we deliver."</p>
                        <p class="text-gray-900 font-semibold">Nareman Dayya</p>
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

                        <button class="bg-blue-600 hover:bg-blue-700 text-white w-full py-3 font-semibold rounded-lg">Start Your Project</button>
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
                <p>© 2026 Karama Data LLC. All rights reserved. | US LLC — Domestic Ownership. Arabic AI Annotation.</p>
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
