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
        .metric-cards-container {
            display: flex;
            gap: 30px;
            width: 100%;
            margin-bottom: 60px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .metric-card {
            flex: 0 0 calc(25% - 23px);
            min-width: 300px;
        }
        @media (max-width: 1600px) {
            .metric-card {
                flex: 0 0 calc(33.333% - 30px);
            }
        }
        @media (max-width: 1200px) {
            .metric-card {
                flex: 0 0 calc(50% - 30px);
            }
        }
        @media (max-width: 768px) {
            .metric-card {
                flex: 0 0 100%;
            }
        }
    </style>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-white text-gray-900">
    <!-- Navigation -->
    <nav style="position: fixed; top: 0; width: 100%; background: #FFFFFF; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08); z-index: 50;">
        <div style="max-width: 1920px; margin: 0 auto; padding: 16px 40px; display: flex; align-items: center; justify-content: space-between;">
            <img src="{{ asset('public/images/logo.png') }}" alt="Karama Data" style="height: 40px;">
            <div style="display: flex; align-items: center; gap: 40px;">
                <a href="#why-arabic" style="color: #505050; text-decoration: none; font-size: 14px; font-family: Poppins; font-weight: 500; transition: color 0.3s;">Why Arabic</a>
                <a href="#results" style="color: #505050; text-decoration: none; font-size: 14px; font-family: Poppins; font-weight: 500; transition: color 0.3s;">Results</a>
                <a href="#services" style="color: #505050; text-decoration: none; font-size: 14px; font-family: Poppins; font-weight: 500; transition: color 0.3s;">Services</a>
                <a href="#about" style="color: #505050; text-decoration: none; font-size: 14px; font-family: Poppins; font-weight: 500; transition: color 0.3s;">About</a>
                <a href="#workforce" style="color: #505050; text-decoration: none; font-size: 14px; font-family: Poppins; font-weight: 500; transition: color 0.3s;">Our Workforce</a>
                <button style="padding: 10px 24px; background: #01213D; color: white; border: none; border-radius: 6px; font-size: 14px; font-family: Poppins; font-weight: 700; cursor: pointer; transition: background 0.3s;">Get in Touch</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section - Section 1 (Figma Design) -->
    <div style="width: 100%; position: relative; background: #01213D; background-image: url('{{ asset('public/images/Rectangle-76.png') }}'); background-size: contain; background-position: right center; background-repeat: no-repeat; margin-top: 60px; margin-bottom: 80px; aspect-ratio: 1920 / 1320;">
        <div style="width: 100%; height: 100%; position: relative;">
            <div style="width: 632px; left: 15%; top: 15%; position: absolute; color: #FFFFFF; font-size: 70px; font-family: 'Poppins', sans-serif; font-weight: 700; line-height: normal; word-wrap: break-word; z-index: 10;">Your Arabic AI is only as good as the humans who train it .</div>
            <div style="width: 590px; left: 15%; top: 53.1%; position: absolute; color: #B3B3B3; font-size: 25px; font-family: 'Poppins', sans-serif; font-weight: 400; line-height: normal; word-wrap: break-word;">91% accuracy, benchmarked against published research. US-incorporated. No shortcuts.</div>
            <div style="padding-left: 30px; padding-right: 30px; padding-top: 15px; padding-bottom: 15px; left: 15%; top: 65.2%; position: absolute; background: #EFEFEF; border-radius: 9px; justify-content: center; align-items: center; gap: 10px; display: inline-flex; cursor: pointer;">
                <div style="color: #01213D; font-size: clamp(14px, 1.5vw, 20px); font-family: Poppins; font-weight: 700; word-wrap: break-word">Start Your Project</div>
            </div>
            <div style="padding-left: 30px; padding-right: 30px; padding-top: 15px; padding-bottom: 15px; left: 28%; top: 65.2%; position: absolute; border-radius: 9px; outline: 1px #C4C4C4 solid; outline-offset: -1px; justify-content: center; align-items: center; gap: 10px; display: inline-flex; cursor: pointer;">
                <div style="color: white; font-size: clamp(14px, 1.5vw, 20px); font-family: Poppins; font-weight: 700; word-wrap: break-word">See Our Results</div>
            </div>
            <div data-property-1="Group 113" style="width: 16%; height: 16%; left: 15%; top: 94%; position: absolute">
                <div style="width: 100%; height: 100%; left: 0px; top: 0px; position: absolute; background: linear-gradient(180deg, #043763 8%, #01213D 100%); border-radius: 20px;"></div>
                <div style="width: 90%; height: 25%; left: 5%; top: 35%; position: absolute; text-align: center; color: #F2F4F6; font-size: 20px; font-family: Poppins; font-weight: 600; line-height: 1.3; word-wrap: break-word">AI & Cybersecurity</div>
                <div style="width: 90%; left: 5%; top: 62%; position: absolute; text-align: center; color: #548ED3; font-size: 14px; font-family: Poppins; font-weight: 500; line-height: 1.4; word-wrap: break-word">Founded by - AI and Cybersecurity Experts</div>
                <!-- Icon: Shield -->
                <div style="width: 45px; height: 45px; left: 50%; top: 9.5%; position: absolute; transform: translateX(-50%); display: flex; align-items: center; justify-content: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                      <path d="M37.5 8.36875L37.4813 9.8875L37.485 18.0831L37.4944 20.32C37.5431 29.9538 32.3137 35.8619 28.0256 39.0812L27.0563 39.775L25.7006 40.6469L24.8869 41.1156L24.1706 41.5019L23.0794 42.025L22.5413 42.25L21.9769 42.0138L21.4725 41.7812L20.8388 41.4663L19.8862 40.9506L18.795 40.2944L17.8425 39.6644C13.5919 36.7281 7.93687 31.0731 7.52437 21.6325V21.625H11.3194C11.8387 28.3862 15.3412 33.4938 20.6906 37.2794L21.75 37.9956L22.5525 38.5L22.7531 38.38L24.0131 37.5363C29.7863 33.4806 33.3544 28.1688 33.7181 20.98L33.75 19.6075L33.7331 16.4181L33.7275 11.0275L22.5638 8.5L18.75 9.3625V5.66688L22.5394 4.75L37.5 8.36875ZM12.1125 9.53125L16.875 11.3125L12.1125 13.0938L10.3125 17.875L8.53125 13.0938L3.75 11.3125L8.53125 9.53125L10.3125 4.75L12.1125 9.53125Z" fill="#548ED3"/>
                    </svg>
                </div>
            </div>
            <div data-property-1="Group 113" style="width: 16%; height: 16%; left: 33%; top: 94%; position: absolute">
                <div style="width: 100%; height: 100%; left: 0px; top: 0px; position: absolute; background: linear-gradient(180deg, #043763 8%, #01213D 100%); border-radius: 20px;"></div>
                <!-- Icon: Globe -->
                <div style="width: 45px; height: 45px; left: 50%; top: 8%; position: absolute; transform: translateX(-50%); display: flex; align-items: center; justify-content: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                      <path d="M37.5469 35.1958C37.5557 35.1826 37.5688 35.1694 37.5776 35.1562C40.4561 31.7329 42.1875 27.3208 42.1875 22.5C42.1875 17.6792 40.4561 13.2671 37.582 9.84375C37.5732 9.83057 37.5601 9.82178 37.5513 9.80859C37.5029 9.75146 37.459 9.69873 37.4106 9.646C37.3931 9.62402 37.3755 9.60645 37.3579 9.58447L37.1777 9.37793L37.1733 9.37354C37.1074 9.29883 37.0371 9.22412 36.9712 9.14941L36.9668 9.14502C36.8262 8.99561 36.6855 8.84619 36.5405 8.70117L36.5361 8.69678L36.3252 8.48584L36.312 8.47266C36.2461 8.40674 36.1802 8.34521 36.1143 8.28369C36.0923 8.26172 36.0703 8.23975 36.0439 8.21777C36 8.17383 35.9561 8.13428 35.9121 8.09473C35.8989 8.08154 35.8813 8.06836 35.8682 8.05078C32.3613 4.79883 27.6636 2.8125 22.5 2.8125C17.3364 2.8125 12.6387 4.79883 9.12744 8.05078C9.11426 8.06396 9.09668 8.07715 9.0835 8.09473C9.03955 8.13428 8.99561 8.17822 8.95166 8.22217C8.92969 8.24414 8.90772 8.26611 8.88135 8.28809C8.81543 8.34961 8.74951 8.41553 8.68359 8.47705L8.67041 8.49023L8.45947 8.70117L8.45508 8.70557C8.31006 8.85059 8.16943 9 8.02881 9.14941L8.02441 9.15381C7.9541 9.22852 7.88818 9.30322 7.82227 9.37793L7.81787 9.38232C7.75635 9.44824 7.69482 9.51855 7.6377 9.58887C7.62012 9.61084 7.60254 9.62842 7.58496 9.65039C7.53662 9.70313 7.49268 9.76025 7.44434 9.81299C7.43555 9.82617 7.42236 9.83496 7.41357 9.84815C4.54395 13.2671 2.8125 17.6792 2.8125 22.5C2.8125 27.3208 4.54395 31.7329 7.41797 35.1562C7.42676 35.1694 7.43994 35.1826 7.44873 35.1958L7.58496 35.3584C7.60254 35.3804 7.62012 35.3979 7.6377 35.4199L7.81787 35.6265C7.81787 35.6309 7.82227 35.6309 7.82227 35.6353C7.88818 35.71 7.9541 35.7847 8.02441 35.855L8.02881 35.8594C8.16943 36.0088 8.31006 36.1582 8.45068 36.3032L8.45508 36.3076C8.52539 36.3779 8.59131 36.4482 8.66162 36.5142L8.6748 36.5273C8.81982 36.6724 8.96924 36.813 9.11865 36.9492C12.6387 40.2012 17.3364 42.1875 22.5 42.1875C27.6636 42.1875 32.3613 40.2012 35.8726 36.9492C36.0223 36.812 36.1688 36.6713 36.312 36.5273L36.3252 36.5142C36.3955 36.4438 36.4658 36.3779 36.5317 36.3076L36.5361 36.3032C36.6812 36.1582 36.8218 36.0088 36.958 35.8594L36.9624 35.855C37.0283 35.7803 37.0986 35.71 37.1646 35.6353C37.1646 35.6309 37.1689 35.6309 37.1689 35.6265C37.2305 35.5605 37.292 35.4902 37.3491 35.4199C37.3667 35.3979 37.3843 35.3804 37.4019 35.3584C37.4515 35.3054 37.4999 35.2512 37.5469 35.1958ZM37.7271 28.9292C37.1206 30.3618 36.3208 31.689 35.3452 32.8931C34.2465 31.9435 33.0452 31.1195 31.7637 30.4365C32.2734 28.3755 32.5898 26.1123 32.6733 23.7305H38.9795C38.8477 25.5278 38.4258 27.2725 37.7271 28.9292ZM38.9795 21.2695H32.6733C32.5898 18.8877 32.2734 16.6245 31.7637 14.5635C33.0513 13.8779 34.251 13.0518 35.3452 12.1069C37.4659 14.7172 38.7344 17.9153 38.9795 21.2695ZM28.9292 7.27295C30.6738 8.01123 32.2603 9.03076 33.6577 10.314C32.8459 11.0052 31.9721 11.6201 31.0474 12.1509C30.3574 10.1733 29.4741 8.45508 28.4458 7.07959C28.6084 7.14111 28.771 7.20703 28.9292 7.27295ZM24.9478 38.061C24.5435 38.3774 24.1392 38.6191 23.7305 38.7817V30.6299C25.4742 30.7515 27.1889 31.1398 28.8149 31.7812C28.4502 32.8623 28.0283 33.8599 27.5405 34.7607C26.7759 36.1846 25.8794 37.3228 24.9478 38.061ZM27.5405 10.2393C28.0239 11.1445 28.4502 12.1421 28.8149 13.2187C27.1889 13.8602 25.4742 14.2485 23.7305 14.3701V6.22266C24.1348 6.38525 24.5435 6.62256 24.9478 6.94336C25.8794 7.67725 26.7759 8.81543 27.5405 10.2393ZM23.7305 28.1646V23.7305H30.2124C30.1421 25.6729 29.9004 27.5581 29.4961 29.3467L29.4829 29.3994C27.6387 28.7001 25.6993 28.2837 23.7305 28.1646ZM23.7305 21.2695V16.8354C25.7432 16.7124 27.6768 16.2861 29.4829 15.6006L29.4961 15.6533C29.9004 17.4419 30.1421 19.3228 30.2124 21.2695H23.7305ZM21.2695 23.7305V28.1646C19.2568 28.2876 17.3232 28.7139 15.5171 29.3994L15.5039 29.3467C15.0996 27.5581 14.8579 25.6772 14.7876 23.7305H21.2695ZM14.7876 21.2695C14.8579 19.3271 15.0996 17.4419 15.5039 15.6533L15.5171 15.6006C17.3232 16.2861 19.2524 16.7124 21.2695 16.8354V21.2695H14.7876ZM21.2695 30.6299V38.7773C20.8652 38.6147 20.4565 38.3774 20.0522 38.0566C19.1206 37.3228 18.2197 36.1802 17.4551 34.7563C16.9717 33.8511 16.5454 32.8535 16.1807 31.7769C17.8154 31.1353 19.5161 30.7529 21.2695 30.6299ZM21.2695 14.3701C19.5258 14.2485 17.8111 13.8602 16.1851 13.2187C16.5498 12.1377 16.9717 11.1401 17.4595 10.2393C18.2241 8.81543 19.1206 7.67285 20.0566 6.93896C20.4609 6.62256 20.8652 6.38086 21.2739 6.21826V14.3701H21.2695ZM16.0708 7.27295C16.2334 7.20703 16.3916 7.14111 16.5542 7.07959C15.5259 8.45508 14.6426 10.1733 13.9526 12.1509C13.0298 11.6235 12.1553 11.0083 11.3423 10.314C12.7397 9.03076 14.3262 8.01123 16.0708 7.27295ZM7.27295 16.0708C7.87939 14.6382 8.6792 13.311 9.65479 12.1069C10.749 13.0518 11.9487 13.8779 13.2363 14.5635C12.7266 16.6245 12.4102 18.8877 12.3267 21.2695H6.02051C6.15234 19.4722 6.57422 17.7275 7.27295 16.0708ZM6.02051 23.7305H12.3267C12.4102 26.1123 12.7266 28.3755 13.2363 30.4365C11.9548 31.1195 10.7535 31.9435 9.65479 32.8931C7.53411 30.2828 6.26558 27.0847 6.02051 23.7305ZM16.0708 37.7271C14.3262 36.9888 12.7397 35.9692 11.3423 34.686C12.1553 33.9917 13.0298 33.3809 13.9526 32.8491C14.6426 34.8267 15.5259 36.5449 16.5542 37.9204C16.3916 37.8589 16.229 37.793 16.0708 37.7271ZM28.9292 37.7271C28.7666 37.793 28.6084 37.8589 28.4458 37.9204C29.4741 36.5449 30.3574 34.8267 31.0474 32.8491C31.9702 33.3765 32.8447 33.9917 33.6577 34.686C32.268 35.9639 30.6684 36.9926 28.9292 37.7271Z" fill="#548ED3"/>
                    </svg>
                </div>
                <div style="width: 90%; height: 25%; left: 5%; top: 35%; position: absolute; text-align: center; color: #F2F4F6; font-size: 20px; font-family: Poppins; font-weight: 600; line-height: 1.3; word-wrap: break-word">5+ Dialects</div>
                <div style="width: 90%; left: 5%; top: 62%; position: absolute; text-align: center; color: #548ED3; font-size: 14px; font-family: Poppins; font-weight: 500; line-height: 1.4; word-wrap: break-word">Arabic Dialect Variants</div>
            </div>
            <div data-property-1="Group 113" style="width: 16%; height: 16%; left: 51%; top: 94%; position: absolute">
                <div style="width: 100%; height: 100%; left: 0px; top: 0px; position: absolute; background: linear-gradient(180deg, #043763 8%, #01213D 100%); border-radius: 20px;"></div>
                <!-- Icon: Layers -->
                <div style="width: 45px; height: 45px; left: 50%; top: 8%; position: absolute; transform: translateX(-50%); display: flex; align-items: center; justify-content: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                      <path d="M37.0594 28.7869L41.25 30.8814L22.5 40.2563L3.75 30.8814L7.94063 28.7869L22.5 36.0678L37.0594 28.7869ZM22.5 21.5063L24.4856 22.5001L22.5 23.4936L20.5143 22.5001L22.5 21.5063Z" fill="#548ED3"/>
                      <path d="M37.0612 20.4038L41.25 22.4997L22.5 31.8747L3.75 22.4997L7.93878 20.4038L22.5 27.6861L37.0612 20.4038Z" fill="#548ED3"/>
                      <path d="M22.5 4.74365L41.25 14.1187L22.5 23.4936L3.75 14.1187L22.5 4.74365Z" fill="#548ED3"/>
                    </svg>
                </div>
                <div style="width: 90%; height: 25%; left: 5%; top: 35%; position: absolute; text-align: center; color: #F2F4F6; font-size: 20px; font-family: Poppins; font-weight: 600; line-height: 1.3; word-wrap: break-word">Multi-layer</div>
                <div style="width: 90%; left: 5%; top: 62%; position: absolute; text-align: center; color: #548ED3; font-size: 14px; font-family: Poppins; font-weight: 500; line-height: 1.4; word-wrap: break-word">Full QA Review Process</div>
            </div>
            <div data-property-1="Group 113" style="width: 16%; height: 16%; left: 69%; top: 94%; position: absolute">
                <div style="width: 100%; height: 100%; left: 0px; top: 0px; position: absolute; background: linear-gradient(180deg, #043763 8%, #01213D 100%); border-radius: 20px;"></div>
                <!-- Icon: Chart -->
                <div style="width: 45px; height: 45px; left: 50%; top: 8%; position: absolute; transform: translateX(-50%); display: flex; align-items: center; justify-content: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                      <path d="M22.5 30V39.375M30 27.4481V39.375M37.5 19.98V39.375M41.25 5.625L25.0388 21.8362C24.9517 21.9236 24.8482 21.9928 24.7343 22.0401C24.6204 22.0873 24.4983 22.1117 24.375 22.1117C24.2517 22.1117 24.1296 22.0873 24.0157 22.0401C23.9018 21.9928 23.7983 21.9236 23.7112 21.8362L17.5388 15.6638C17.3629 15.488 17.1245 15.3893 16.8759 15.3893C16.6273 15.3893 16.3889 15.488 16.2131 15.6638L3.75 28.125M7.5 34.6181V39.375M15 27.48V39.375" stroke="#548ED3" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div style="width: 90%; height: 25%; left: 5%; top: 35%; position: absolute; text-align: center; color: #F2F4F6; font-size: 20px; font-family: Poppins; font-weight: 600; line-height: 1.3; word-wrap: break-word">RLHF Agreement</div>
                <div style="width: 90%; left: 5%; top: 62%; position: absolute; text-align: center; color: #548ED3; font-size: 14px; font-family: Poppins; font-weight: 500; line-height: 1.4; word-wrap: break-word">Kappa .62</div>
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
            <div class="metric-cards-container">
                <div class="metric-card" style="position: relative; height: 215px; border-radius: 20px; overflow: hidden; border: 0.5px solid rgba(0, 88, 190, 0.34); background: linear-gradient(180deg, rgba(255, 255, 255, 0.43) 0%, rgba(238, 245, 255, 0.34) 50%, rgba(153, 192, 255, 0.26) 100%);">
                    <div style="display: flex; flex-direction: column; justify-content: flex-end; align-items: flex-start; gap: 10px; height: 100%; padding: 31px 119px 27px 43px;">
                        <div style="color: #488EFF; font-size: 56px; font-family: 'Poppins', sans-serif; font-weight: 700; line-height: 56px;">3,031</div>
                        <div style="color: #043763; font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 500; line-height: 20px;">Tasks completed</div>
                        <div style="color: #488EFF; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 400; line-height: 18px;">100% completion rate</div>
                    </div>
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 6px; background: #488EFF; border-radius: 0 0 20px 20px;"></div>
                </div>

                <div class="metric-card" style="position: relative; height: 215px; border-radius: 20px; overflow: hidden; border: 0.5px solid rgba(0, 88, 190, 0.34); background: linear-gradient(180deg, rgba(255, 255, 255, 0.43) 0%, rgba(238, 245, 255, 0.34) 50%, rgba(153, 192, 255, 0.26) 100%);">
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
                                <span style="color: #00B660; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 500;">Above Benchmark</span>
                            </div>
                        </div>
                        <p style="color: #787878; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 400; margin: 0 0 15px 0;">667 items - RLHF / Model Alignment</p>
                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="color: #01213D; font-size: 22px; font-family: 'Poppins', sans-serif; font-weight: 600; line-height: 40px;">Avg accuracy</span>
                                <span style="color: #00B660; font-size: 22px; font-family: 'Poppins', sans-serif; font-weight: 600; line-height: 40px;">88.6%</span>
                            </div>
                            <div style="width: 100%; height: 4px; background: #E0E0E0; border-radius: 2px; overflow: hidden;">
                                <div style="width: 88.6%; height: 100%; background: #00B660;"></div>
                            </div>
                        </div>
                        <p style="color: #787878; font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 500; margin: 0 0 20px 0; line-height: 40px;">Benchmark: 83–87% (major AI labs)</p>
                        <div style="border-top: 1px solid #E0E0E0; padding-top: 20px;">
                            <p style="color: #01213D; font-size: 22px; font-family: 'Poppins', sans-serif; font-weight: 600; margin: 0 0 8px 0; line-height: 40px;">Cohen's Kappa</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                <span style="color: #00B660; font-size: 35px; font-family: 'Poppins', sans-serif; font-weight: 600; line-height: 40px;">0.623</span>
                            </div>
                            <div style="width: 100%; height: 6px; background: #E0E0E0; border-radius: 3px; overflow: hidden;">
                                <div style="width: 62.3%; height: 100%; background: #00B660;"></div>
                            </div>
                            <p style="color: #787878; font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 500; margin: 8px 0 0 0; line-height: 40px;">Benchmark: 0.57–0.83 (OpenAI/NVIDIA)</p>
                        </div>
                        <div style="background: #E8F5F0; border-radius: 8px; padding: 12px 15px; margin-top: 20px;">
                            <p style="color: #00A651; font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 500; margin: 0; line-height: 40px;">Best labeler: 91.4% - No Arabic RLHF benchmark exists — first-of-kind data</p>
                        </div>
                    </div>
                </div>

                <div style="width: 100%; border-radius: 20px; border: 0.5px solid rgba(59, 130, 246, 0.42); background: linear-gradient(180deg, rgba(255, 255, 255, 0.40) 20.67%, rgba(238, 245, 255, 0.32) 51.44%, rgba(153, 192, 255, 0.24) 100%); overflow: hidden; display: flex; flex-direction: column;">
                    <div style="height: 4px; background: #8B5CF6;"></div>
                    <div style="padding: 30px;">
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
                            <h3 style="color: #043763; font-size: 28px; font-family: 'Poppins', sans-serif; font-weight: 700; margin: 0;">Dialect Identification</h3>
                            <div style="background: rgba(139, 92, 246, 0.2); border: 1px solid #8B5CF6; border-radius: 20px; padding: 6px 12px;">
                                <span style="color: #8B5CF6; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 500;">On Par</span>
                            </div>
                        </div>
                        <p style="color: #787878; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 400; margin: 0 0 15px 0;">960 items - MSA, Levantine, Gulf, Egyptian, Iraqi, Maghrebi</p>
                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="color: #01213D; font-size: 22px; font-family: 'Poppins', sans-serif; font-weight: 600; line-height: 40px;">Avg accuracy</span>
                                <span style="color: #8B5CF6; font-size: 22px; font-family: 'Poppins', sans-serif; font-weight: 600; line-height: 40px;">71.2%</span>
                            </div>
                            <div style="width: 100%; height: 4px; background: #E0E0E0; border-radius: 2px; overflow: hidden;">
                                <div style="width: 71.2%; height: 100%; background: #8B5CF6;"></div>
                            </div>
                        </div>
                        <p style="color: #787878; font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 500; margin: 0 0 20px 0; line-height: 40px;">Benchmark: 65–80% (NADI 2024)</p>
                        <div style="border-top: 1px solid #E0E0E0; padding-top: 20px;">
                            <p style="color: #01213D; font-size: 22px; font-family: 'Poppins', sans-serif; font-weight: 600; margin: 0 0 8px 0; line-height: 40px;">Cohen's Kappa</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                <span style="color: #8B5CF6; font-size: 35px; font-family: 'Poppins', sans-serif; font-weight: 600; line-height: 40px;">0.572</span>
                            </div>
                            <div style="width: 100%; height: 6px; background: #E0E0E0; border-radius: 3px; overflow: hidden;">
                                <div style="width: 57.2%; height: 100%; background: #8B5CF6;"></div>
                            </div>
                            <p style="color: #787878; font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 500; margin: 8px 0 0 0; line-height: 40px;">Benchmark: 0.59 (NADI 2024, Palestinian Arabic)</p>
                        </div>
                        <div style="background: #F4ECFE; border-radius: 8px; padding: 12px 15px; margin-top: 20px;">
                            <p style="color: #7C5BA3; font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 500; margin: 0; line-height: 40px;">Best labeler: 77% - Compared against the largest Arabic dialect competition globally</p>
                        </div>
                    </div>
                </div>

                <div style="width: 100%; border-radius: 20px; border: 0.5px solid rgba(59, 130, 246, 0.42); background: linear-gradient(180deg, rgba(255, 255, 255, 0.40) 20.67%, rgba(238, 245, 255, 0.32) 51.44%, rgba(153, 192, 255, 0.24) 100%); overflow: hidden; display: flex; flex-direction: column;">
                    <div style="height: 4px; background: #F59E0B;"></div>
                    <div style="padding: 30px;">
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
                            <h3 style="color: #043763; font-size: 28px; font-family: 'Poppins', sans-serif; font-weight: 700; margin: 0;">Sentiment Tagging</h3>
                            <div style="background: rgba(245, 158, 11, 0.2); border: 1px solid #F59E0B; border-radius: 20px; padding: 6px 12px;">
                                <span style="color: #F59E0B; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 500;">Near Target</span>
                            </div>
                        </div>
                        <p style="color: #787878; font-size: 14px; font-family: 'Poppins', sans-serif; font-weight: 400; margin: 0 0 15px 0;">667 items - RLHF / Model Alignment</p>
                        <div style="margin-bottom: 30px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="color: #01213D; font-size: 22px; font-family: 'Poppins', sans-serif; font-weight: 600; line-height: 40px;">Avg accuracy</span>
                                <span style="color: #F59E0B; font-size: 22px; font-family: 'Poppins', sans-serif; font-weight: 600; line-height: 40px;">62.5%</span>
                            </div>
                            <div style="width: 100%; height: 4px; background: #E0E0E0; border-radius: 2px; overflow: hidden;">
                                <div style="width: 62.5%; height: 100%; background: #F59E0B;"></div>
                            </div>
                        </div>
                        <p style="color: #787878; font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 500; margin: 0 0 20px 0; line-height: 40px;">Benchmark: 60–75% (AraSenTi-Tweet)</p>
                        <div style="border-top: 1px solid #E0E0E0; padding-top: 20px;">
                            <p style="color: #01213D; font-size: 22px; font-family: 'Poppins', sans-serif; font-weight: 600; margin: 0 0 8px 0; line-height: 40px;">Cohen's Kappa</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                <span style="color: #F59E0B; font-size: 35px; font-family: 'Poppins', sans-serif; font-weight: 600; line-height: 40px;">0.532</span>
                            </div>
                            <div style="width: 100%; height: 6px; background: #E0E0E0; border-radius: 3px; overflow: hidden;">
                                <div style="width: 53.2%; height: 100%; background: #F59E0B;"></div>
                            </div>
                            <p style="color: #787878; font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 500; margin: 8px 0 0 0; line-height: 40px;">Target: 0.66–0.70 (Arabic NLP)</p>
                        </div>
                        <div style="background: #FEF3C7; border-radius: 8px; padding: 12px 15px; margin-top: 20px;">
                            <p style="color: #B45309; font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 500; margin: 0; line-height: 40px;">Best labeler: 73.2% - Guideline improvement identified & incorporated into SOP</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner Section -->
    <section style="width: 100%; margin-top: 40px; padding: 0 40px; background: #FFFFFF;">
        <div style="width: 100%; display: flex; flex-direction: column; gap: 50px; max-width: 1577px; margin: 0 auto;">
            <!-- Banner -->
            <div style="display: flex; width: 100%; padding: 24px 32px; align-items: center; gap: 20px; border-radius: 10px; background: linear-gradient(270deg, #01213D 22.23%, #003A6C 96.32%); justify-content: space-between;">
                <p style="color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 500; line-height: 31px; margin: 0; flex: 1;">Benchmarked against published research: NADI 2024 (ACI/WANLP) · AraSenti-Tweet · ASAD Corpus · MultiPref 2024 · HelperBot 2024. On Preference Ranking — the highest-value task for AI companies — our Kappa of 0.623 significantly outperforms figures published by OpenAI and NVIDIA.</p>
                <button style="padding: 12px 32px; border-radius: 10px; background: #4A83E1; border: none; cursor: pointer; color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; line-height: 20px; flex-shrink: 0; white-space: nowrap; transition: background 0.3s;">
                    Request a Pilot
                </button>
            </div>

            <!-- Section Heading -->
            <div style="display: flex; flex-direction: column; gap: 30px; width: 100%;">
                <h2 style="color: #043763; font-family: 'Poppins', sans-serif; font-size: 70px; font-weight: 800; line-height: normal; margin: 0;">Arabic Dialect Annotation Services</h2>
                <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 25px; font-weight: 500; line-height: 45px; margin: 0; max-width: 1577px;">We specialize exclusively in Arabic language data annotation — covering major dialect families — for organizations building the next generation of Arabic-language AI systems.</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" style="width: 100%; padding: 80px 40px; background: #FFFFFF;">
        <div style="width: 100%; display: flex; flex-direction: column; gap: 60px; max-width: 1577px; margin: 0 auto;">
            <!-- Services Grid -->
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; width: 100%;">
                <!-- NLP Annotation Card -->
                <div style="width: 100%; padding: 32px; border-radius: 15px; border: 0.5px solid #DBDBDB; background: #FFFFFF; display: flex; flex-direction: column; gap: 16px; height: 100%;">
                    <div style="display: flex; align-items: flex-start; gap: 12px;">
                        <svg width="40" height="40" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0; margin-top: 2px;">
                            <circle cx="43.5" cy="43.5" r="43.5" fill="#E8F1FF"/>
                        </svg>
                        <h3 style="color: #01213D; font-family: 'Poppins', sans-serif; font-size: 28px; font-weight: 700; line-height: 1.2; margin: 0;">NLP Annotation</h3>
                    </div>
                    <p style="color: #1C72FF; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 500; line-height: 1.5; margin: 0;">Native dialect labels that improve your model's real-world accuracy.</p>
                    <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; line-height: 24px; margin: 0; padding-top: 10px;">Named entity recognition, sentiment analysis, intent classification, and text categorization across Levantine, Gulf, Egyptian, and Maghrebi dialects.</p>
                </div>

                <!-- ASR Data Annotation Card -->
                <div style="width: 100%; padding: 32px; border-radius: 15px; border: 0.5px solid #DBDBDB; background: #FFFFFF; display: flex; flex-direction: column; gap: 16px; height: 100%;">
                    <div style="display: flex; align-items: flex-start; gap: 12px;">
                        <svg width="40" height="40" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0; margin-top: 2px;">
                            <circle cx="43.5" cy="43.5" r="43.5" fill="#E8F1FF"/>
                        </svg>
                        <h3 style="color: #01213D; font-family: 'Poppins', sans-serif; font-size: 28px; font-weight: 700; line-height: 1.2; margin: 0;">ASR Data Annotation</h3>
                    </div>
                    <p style="color: #1C72FF; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 500; line-height: 1.5; margin: 0;">Speech models that actually understand how Arabic is spoken, not just written.</p>
                    <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; line-height: 24px; margin: 0; padding-top: 10px;">Speech transcription, phonetic labeling, speaker diarization, and audio quality validation for Arabic automatic speech recognition training pipelines.</p>
                </div>

                <!-- RLHF & Preference Ranking Card -->
                <div style="width: 100%; padding: 32px; border-radius: 15px; border: 0.5px solid #DBDBDB; background: #FFFFFF; display: flex; flex-direction: column; gap: 16px; height: 100%;">
                    <div style="display: flex; align-items: flex-start; gap: 12px;">
                        <svg width="40" height="40" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0; margin-top: 2px;">
                            <circle cx="43.5" cy="43.5" r="43.5" fill="#E8F1FF"/>
                        </svg>
                        <h3 style="color: #01213D; font-family: 'Poppins', sans-serif; font-size: 28px; font-weight: 700; line-height: 1.2; margin: 0;">RLHF & Preference Ranking</h3>
                    </div>
                    <p style="color: #1C72FF; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 500; line-height: 1.5; margin: 0;">Human feedback data that makes your Arabic LLM safer, more helpful, and culturally aligned.</p>
                    <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; line-height: 24px; margin: 0; padding-top: 10px;">Response ranking, preference pair collection, and reinforcement learning from human feedback (RLHF) data — delivered by native Arabic speakers who understand dialect nuance and cultural context.</p>
                    <p style="color: #F59E0B; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; line-height: 38px; margin: 0; padding-top: 10px;">⭐ Key Capability</p>
                </div>

                <!-- Conversational AI Card -->
                <div style="width: 100%; padding: 32px; border-radius: 15px; border: 0.5px solid #DBDBDB; background: #FFFFFF; display: flex; flex-direction: column; gap: 16px; height: 100%;">
                    <div style="display: flex; align-items: flex-start; gap: 12px;">
                        <svg width="40" height="40" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0; margin-top: 2px;">
                            <circle cx="43.5" cy="43.5" r="43.5" fill="#E8F1FF"/>
                        </svg>
                        <h3 style="color: #01213D; font-family: 'Poppins', sans-serif; font-size: 28px; font-weight: 700; line-height: 1.2; margin: 0;">Conversational AI</h3>
                    </div>
                    <p style="color: #1C72FF; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 500; line-height: 1.5; margin: 0;">Chatbot training data that feels natural to real Arabic speakers, not translated English.</p>
                    <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; line-height: 24px; margin: 0; padding-top: 10px;">Dialogue annotation, response ranking, and conversation flow labeling for Arabic-language chatbots and virtual assistants.</p>
                </div>

                <!-- Quality Assurance Card -->
                <div style="width: 100%; padding: 32px; border-radius: 15px; border: 0.5px solid #DBDBDB; background: #FFFFFF; display: flex; flex-direction: column; gap: 16px; height: 100%;">
                    <div style="display: flex; align-items: flex-start; gap: 12px;">
                        <svg width="40" height="40" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0; margin-top: 2px;">
                            <circle cx="43.5" cy="43.5" r="43.5" fill="#E8F1FF"/>
                        </svg>
                        <h3 style="color: #01213D; font-family: 'Poppins', sans-serif; font-size: 28px; font-weight: 700; line-height: 1.2; margin: 0;">Quality Assurance</h3>
                    </div>
                    <p style="color: #1C72FF; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 500; line-height: 1.5; margin: 0;">Documented QA reports with every delivery — no black-box quality claims.</p>
                    <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; line-height: 24px; margin: 0; padding-top: 10px;">Multi-layer review with inter-annotator agreement measurement, senior reviewer sign-off, and structured QA reporting delivered with every project.</p>
                </div>

                <!-- Enterprise Compliance Card -->
                <div style="width: 100%; padding: 32px; border-radius: 15px; border: 0.5px solid #DBDBDB; background: #FFFFFF; display: flex; flex-direction: column; gap: 16px; height: 100%;">
                    <div style="display: flex; align-items: flex-start; gap: 12px;">
                        <svg width="40" height="40" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0; margin-top: 2px;">
                            <circle cx="43.5" cy="43.5" r="43.5" fill="#E8F1FF"/>
                        </svg>
                        <h3 style="color: #01213D; font-family: 'Poppins', sans-serif; font-size: 28px; font-weight: 700; line-height: 1.2; margin: 0;">Enterprise Compliance</h3>
                    </div>
                    <p style="color: #1C72FF; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 500; line-height: 1.5; margin: 0;">A vendor your procurement team can approve on the first pass.</p>
                    <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; line-height: 24px; margin: 0; padding-top: 10px;">US-incorporated, domestically owned. No content moderation work. Structured data handling with privacy-first practices that meet enterprise procurement requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section style="width: 100%; padding: 80px 40px; background: #FFFFFF;">
        <div style="width: 100%; max-width: 1577px; margin: 0 auto;">
            <div style="display: flex; width: 100%; padding: 40px 32px; align-items: center; gap: 30px; border-radius: 10px; background: linear-gradient(270deg, #01213D 22.23%, #003A6C 96.32%); justify-content: space-between;">
                <p style="color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 500; line-height: 28px; margin: 0; flex: 1;">We price for quality, not volume. Engagements are scoped based on dialect requirements, QA depth, and throughput needs — not race-to-the-bottom per-task rates. Contact us to discuss your project.</p>
                <button style="padding: 12px 32px; border-radius: 10px; background: #4A83E1; border: none; cursor: pointer; color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; line-height: 20px; flex-shrink: 0; white-space: nowrap; transition: background 0.3s;">
                    Start Your Project
                </button>
            </div>
        </div>
    </section>

    <!-- Enterprise Trust Section -->
    <section id="about" style="width: 100%; padding: 80px 40px; background: #F5F5F5;">
        <div style="width: 100%; max-width: 1577px; margin: 0 auto; display: flex; flex-direction: column; gap: 60px;">
            <!-- Section Header -->
            <div style="display: flex; flex-direction: column; gap: 30px; align-items: flex-start;">
                <h2 style="width: 100%; max-width: 909px; color: #043763; font-family: 'Poppins', sans-serif; font-size: 70px; font-weight: 700; line-height: normal; margin: 0;">Built for Enterprise <span style="color: #488EFF;">Trust</span></h2>
                <p style="width: 100%; max-width: 1579px; color: #787878; font-family: 'Poppins', sans-serif; font-size: 35px; font-weight: 400; line-height: normal; margin: 0;">Karama Data is a US-incorporated LLC with domestic ownership and a leadership team with deep expertise in AI, enterprise technology, and regional operations.</p>
            </div>

            <!-- Compliance Heading -->
            <div style="text-align: left;">
                <h3 style="color: #043763; font-family: 'Poppins', sans-serif; font-size: 48px; font-weight: 700; line-height: 57.6px; letter-spacing: -0.48px; margin: 0;">A structure built on trust and compliance</h3>
            </div>

            <!-- Trust Cards -->
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; width: 100%;">
                <!-- Card 1 -->
                <div style="background: #FFFFFF; padding: 40px; border-radius: 10px; display: flex; flex-direction: column; gap: 20px; position: relative;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 20px; right: 20px;">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" fill="#488EFF"/>
                    </svg>
                    <div style="color: #488EFF; font-family: 'Poppins', sans-serif; font-size: 64px; font-weight: 700; line-height: 64px; letter-spacing: -1.28px; margin: 0;">01</div>
                    <h4 style="color: #012130; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 800; line-height: 33.6px; margin: 0;">US-Based Leadership</h4>
                    <p style="color: #44474E; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 400; line-height: 25.6px; margin: 0;">US-based board leadership and domestic ownership that ensures accountability and alignment with enterprise standards.</p>
                </div>

                <!-- Card 2 -->
                <div style="background: #FFFFFF; padding: 40px; border-radius: 10px; display: flex; flex-direction: column; gap: 20px; position: relative;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 20px; right: 20px;">
                        <path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm0 20c-4.97 0-9-4.03-9-9s4.03-9 9-9 9 4.03 9 9-4.03 9-9 9zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 9 15.5 9 14 9.67 14 10.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 9 8.5 9 7 9.67 7 10.5 7.67 12 8.5 12zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" fill="#488EFF"/>
                    </svg>
                    <div style="color: #488EFF; font-family: 'Poppins', sans-serif; font-size: 64px; font-weight: 700; line-height: 64px; letter-spacing: -1.28px; margin: 0;">02</div>
                    <h4 style="color: #012130; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 800; line-height: 33.6px; margin: 0;">Enterprise Compliance</h4>
                    <p style="color: #44474E; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 400; line-height: 25.6px; margin: 0;">A structure that meets enterprise compliance requirements and instills client confidence.</p>
                </div>

                <!-- Card 3 -->
                <div style="background: #FFFFFF; padding: 40px; border-radius: 10px; display: flex; flex-direction: column; gap: 20px; position: relative;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 20px; right: 20px;">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" fill="#488EFF"/>
                    </svg>
                    <div style="color: #488EFF; font-family: 'Poppins', sans-serif; font-size: 64px; font-weight: 700; line-height: 64px; letter-spacing: -1.28px; margin: 0;">03</div>
                    <h4 style="color: #012130; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 800; line-height: 33.6px; margin: 0;">Regional Operations</h4>
                    <p style="color: #44474E; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 400; line-height: 25.6px; margin: 0;">Our operational presence is in the region, giving us authentic access to the linguistic talent our clients need.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnership Section -->
    <section style="width: 100%; padding: 80px 40px; background: #FFFFFF;">
        <div style="width: 100%; max-width: 1577px; margin: 0 auto; display: flex; flex-direction: column; gap: 60px;">
            <!-- Main Title -->
            <h2 style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 35px; font-weight: 700; line-height: 50px; margin: 0;">Stronger together for lasting impact</h2>

            <!-- Partnership Description & Diagram Row -->
            <div style="display: flex; gap: 80px; align-items: center;">
                <!-- Left: Partnership Description -->
                <div style="display: flex; width: 717.381px; height: 262px; flex-direction: column; justify-content: center;">
                    <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 25px; font-weight: 400; line-height: 50.6px; margin: 0;">We operate in partnership with Gaza Children Village (GCV), providing operational infrastructure and community ties that allow us to build and retain a stable, highly-qualified annotator workforce.</p>
                </div>

                <!-- Right: Partnership Diagram (Horizontal) -->
                <div style="display: flex; gap: 15px; align-items: center; justify-content: center;">
                    <!-- Karama Data Circle -->
                    <div style="width: 120px; height: 120px; border-radius: 50%; border: 2px dashed #CCCCCC; background: #F5F5F5; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 10px; flex-shrink: 0; position: relative;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 5px;">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3-8c0 1.66-1.34 3-3 3s-3-1.34-3-3 1.34-3 3-3 3 1.34 3 3z" fill="#488EFF"/>
                        </svg>
                        <div style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 700; margin-bottom: 3px;">Karama Data</div>
                        <div style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 11px; font-weight: 400; line-height: 1.3;">AI Expertise, Technology, Quality Standards</div>
                        <div style="position: absolute; bottom: 8px; width: 8px; height: 8px; border-radius: 50%; background: #488EFF;"></div>
                    </div>
                    <!-- X Symbol -->
                    <div style="color: #488EFF; font-size: 32px; font-weight: 700; flex-shrink: 0; margin: 0 -8px;">×</div>
                    <!-- GCV Circle -->
                    <div style="width: 120px; height: 120px; border-radius: 50%; border: 2px dashed #CCCCCC; background: #F5F5F5; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; padding: 10px; flex-shrink: 0; position: relative;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 5px;">
                            <path d="M9 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm0 7c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4zm6 5H3v-2c0-1.5 3.33-2.5 6-2.5s6 1 6 2.5v2z" fill="#488EFF"/>
                        </svg>
                        <div style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 700; margin-bottom: 3px;">GCV</div>
                        <div style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 11px; font-weight: 400; line-height: 1.3;">Regional Operations, Infrastructure, Community Impact</div>
                        <div style="position: absolute; bottom: 8px; width: 8px; height: 8px; border-radius: 50%; background: #488EFF;"></div>
                    </div>
                    <!-- Arrow Right -->
                    <div style="color: #488EFF; font-size: 28px; flex-shrink: 0;">→</div>
                    <!-- Result Box -->
                    <div style="width: 200px; height: 140px; padding: 16px; border-radius: 15px; border: 1px solid #0061A5; background: #FAFBFB; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 8px; box-shadow: 0 0 20px 0 #043763; flex-shrink: 0; position: relative;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 5px;">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm0 7c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4zm6 5H6v-2c0-1.5 3.33-2.5 6-2.5s6 1 6 2.5v2z" fill="#488EFF"/>
                        </svg>
                        <p style="color: #111C2D; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 700; line-height: 16px; margin: 0; text-align: center;">Stable, Highly-Qualified Workforce</p>
                        <p style="color: #44474E; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; line-height: 14px; margin: 0; text-align: center;">Better quality, stronger outcomes, lasting impact</p>
                    </div>
                </div>
            </div>

            <!-- Payment & Regional Access Box -->
            <div style="display: flex; width: 1574px; height: 308px; padding: 39px 10px 39px 46px; align-items: center; gap: 10px; border-radius: 15px; border: 1px solid rgba(255, 255, 255, 0.53); box-shadow: 0 0 20px 0 #043763; background: linear-gradient(270deg, #01213D 22.23%, #003A6C 96.32%);">
                <!-- Left Content -->
                <div style="display: flex; flex-direction: column; gap: 20px; width: 788px; flex-shrink: 0;">
                    <h3 style="color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 35px; font-weight: 700; line-height: 50px; margin: 0;">Payment & Regional Access</h3>
                    <p style="color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 25px; font-weight: 500; line-height: 40px; margin: 0;">Our payment corridor runs through Gaza Children Village (GCV) — a nonprofit already equipped to move compliant payments into the region.</p>
                </div>

                <!-- Right: GCV Logo -->
                <div style="width: 584px; height: 168px; border-radius: 15px; border: 1px solid #E6E6E6; background-image: url('{{ asset('public/images/image-6.png') }}'); background-size: contain; background-repeat: no-repeat; background-position: center; background-color: #FFFFFF; flex-shrink: 0;"></div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section style="width: 100%; padding: 80px 40px; background: #FFFFFF;">
        <div style="width: 100%; max-width: 1577px; margin: 0 auto; display: flex; flex-direction: column; gap: 60px;">
            <!-- Start Project Button -->
            <button style="padding: 12px 24px; border-radius: 10px; background: linear-gradient(90deg, #0360B1 0%, #003A6C 216.05%); border: none; cursor: pointer; color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; line-height: 20px; transition: background 0.3s; width: fit-content;">
                Start Your Project →
            </button>

            <!-- Section Title -->
            <h2 style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 48px; font-weight: 700; line-height: normal; margin: 0;">Meet the people behind Karama Data</h2>

            <!-- Team Grid -->
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; width: 100%;">
                <!-- Laura Mather Card -->
                <div style="width: 382px; height: 304px; padding: 24px; border-radius: 19px; border: 2px solid #A3C6FF; background: rgba(255, 255, 255, 0.38); display: flex; flex-direction: column; gap: 16px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <div style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(180deg, rgba(58, 115, 216, 0.76) 0%, rgba(31, 61, 114, 0.76) 100%); display: flex; align-items: center; justify-content: center;">
                            <span style="color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 23px; font-weight: 700;">LM</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 37 37" fill="none">
                            <g clip-path="url(#clip0)"><rect width="36.39" height="36.39" rx="5" fill="white"/><path d="M31.006 31.0065H25.6142V22.5625C25.6142 20.5489 25.5782 17.9568 22.8099 17.9568C20.0016 17.9568 19.5719 20.1508 19.5719 22.4159V31.0059H14.1802V13.6416H19.3562V16.0147H19.4287C19.9467 15.129 20.6953 14.4004 21.5946 13.9064C22.494 13.4125 23.5105 13.1717 24.5358 13.2097C30.0007 13.2097 31.0083 16.8043 31.0083 21.4807L31.006 31.0065ZM8.09621 11.2682C6.36811 11.2685 4.96695 9.86775 4.96667 8.13965C4.96638 6.41155 6.36697 5.0104 8.09507 5.01011C9.82317 5.00969 11.2243 6.41042 11.2246 8.13851C11.2248 8.96838 10.8953 9.76432 10.3086 10.3512C9.72188 10.9382 8.92608 11.268 8.09621 11.2682ZM10.7922 31.0066H5.39468V13.6416H10.7921V31.0065L10.7922 31.0066ZM33.694 0.00264849H2.68533C1.21978 -0.0138407 0.0179107 1.16016 0 2.62571V33.7638C0.0173421 35.23 1.21907 36.4052 2.68518 36.3898H33.694C35.1633 36.408 36.3697 35.2329 36.39 33.7638V2.6233C36.3691 1.1549 35.1626 -0.0189581 33.694 0.000231971" fill="#0A66C2"/></g>
                            <defs><clipPath id="clip0"><rect width="36.39" height="36.39" rx="5" fill="white"/></clipPath></defs>
                        </svg>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <h3 style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 700; line-height: 24px; margin: 0;">Laura Mather</h3>
                        <p style="color: #3F7FD2; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; line-height: 20px; margin: 0;">Chief Executive Officer</p>
                    </div>
                    <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 500; line-height: 27.6px; margin: 0;">Silicon Valley Founder and CEO with AI and Cybersecurity expertise</p>
                </div>

                <!-- Mike Eynon Card -->
                <div style="width: 382px; height: 304px; padding: 24px; border-radius: 19px; border: 2px solid #A3C6FF; background: rgba(255, 255, 255, 0.38); display: flex; flex-direction: column; gap: 16px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <div style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(180deg, rgba(58, 115, 216, 0.76) 0%, rgba(31, 61, 114, 0.76) 100%); display: flex; align-items: center; justify-content: center;">
                            <span style="color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 23px; font-weight: 700;">ME</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 37 37" fill="none">
                            <g clip-path="url(#clip1)"><rect width="36.39" height="36.39" rx="5" fill="white"/><path d="M31.006 31.0065H25.6142V22.5625C25.6142 20.5489 25.5782 17.9568 22.8099 17.9568C20.0016 17.9568 19.5719 20.1508 19.5719 22.4159V31.0059H14.1802V13.6416H19.3562V16.0147H19.4287C19.9467 15.129 20.6953 14.4004 21.5946 13.9064C22.494 13.4125 23.5105 13.1717 24.5358 13.2097C30.0007 13.2097 31.0083 16.8043 31.0083 21.4807L31.006 31.0065ZM8.09621 11.2682C6.36811 11.2685 4.96695 9.86775 4.96667 8.13965C4.96638 6.41155 6.36697 5.0104 8.09507 5.01011C9.82317 5.00969 11.2243 6.41042 11.2246 8.13851C11.2248 8.96838 10.8953 9.76432 10.3086 10.3512C9.72188 10.9382 8.92608 11.268 8.09621 11.2682ZM10.7922 31.0066H5.39468V13.6416H10.7921V31.0065L10.7922 31.0066ZM33.694 0.00264849H2.68533C1.21978 -0.0138407 0.0179107 1.16016 0 2.62571V33.7638C0.0173421 35.23 1.21907 36.4052 2.68518 36.3898H33.694C35.1633 36.408 36.3697 35.2329 36.39 33.7638V2.6233C36.3691 1.1549 35.1626 -0.0189581 33.694 0.000231971" fill="#0A66C2"/></g>
                            <defs><clipPath id="clip1"><rect width="36.39" height="36.39" rx="5" fill="white"/></clipPath></defs>
                        </svg>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <h3 style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 700; line-height: 24px; margin: 0;">Mike Eynon</h3>
                        <p style="color: #3F7FD2; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; line-height: 20px; margin: 0;">Chief Technology Officer</p>
                    </div>
                    <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 500; line-height: 27.6px; margin: 0;">Silicon Valley Founder and CTO</p>
                </div>

                <!-- Nareman Dayya Card -->
                <div style="width: 382px; height: 304px; padding: 24px; border-radius: 19px; border: 2px solid #A3C6FF; background: rgba(255, 255, 255, 0.38); display: flex; flex-direction: column; gap: 16px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <div style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(180deg, rgba(58, 115, 216, 0.76) 0%, rgba(31, 61, 114, 0.76) 100%); display: flex; align-items: center; justify-content: center;">
                            <span style="color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 23px; font-weight: 700;">ND</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 37 37" fill="none">
                            <g clip-path="url(#clip2)"><rect width="36.39" height="36.39" rx="5" fill="white"/><path d="M31.006 31.0065H25.6142V22.5625C25.6142 20.5489 25.5782 17.9568 22.8099 17.9568C20.0016 17.9568 19.5719 20.1508 19.5719 22.4159V31.0059H14.1802V13.6416H19.3562V16.0147H19.4287C19.9467 15.129 20.6953 14.4004 21.5946 13.9064C22.494 13.4125 23.5105 13.1717 24.5358 13.2097C30.0007 13.2097 31.0083 16.8043 31.0083 21.4807L31.006 31.0065ZM8.09621 11.2682C6.36811 11.2685 4.96695 9.86775 4.96667 8.13965C4.96638 6.41155 6.36697 5.0104 8.09507 5.01011C9.82317 5.00969 11.2243 6.41042 11.2246 8.13851C11.2248 8.96838 10.8953 9.76432 10.3086 10.3512C9.72188 10.9382 8.92608 11.268 8.09621 11.2682ZM10.7922 31.0066H5.39468V13.6416H10.7921V31.0065L10.7922 31.0066ZM33.694 0.00264849H2.68533C1.21978 -0.0138407 0.0179107 1.16016 0 2.62571V33.7638C0.0173421 35.23 1.21907 36.4052 2.68518 36.3898H33.694C35.1633 36.408 36.3697 35.2329 36.39 33.7638V2.6233C36.3691 1.1549 35.1626 -0.0189581 33.694 0.000231971" fill="#0A66C2"/></g>
                            <defs><clipPath id="clip2"><rect width="36.39" height="36.39" rx="5" fill="white"/></clipPath></defs>
                        </svg>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <h3 style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 700; line-height: 24px; margin: 0;">Nareman Dayya</h3>
                        <p style="color: #3F7FD2; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; line-height: 20px; margin: 0;">In-region Operations Advisor</p>
                    </div>
                    <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 500; line-height: 27.6px; margin: 0;">In-region operations advisor ensuring on-the-ground operational credibility, annotator welfare and delivery quality</p>
                </div>

                <!-- David Hasan Card -->
                <div style="width: 382px; height: 304px; padding: 24px; border-radius: 19px; border: 2px solid #A3C6FF; background: rgba(255, 255, 255, 0.38); display: flex; flex-direction: column; gap: 16px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <div style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(180deg, rgba(58, 115, 216, 0.76) 0%, rgba(31, 61, 114, 0.76) 100%); display: flex; align-items: center; justify-content: center;">
                            <span style="color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 23px; font-weight: 700;">DH</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 37 37" fill="none">
                            <g clip-path="url(#clip3)"><rect width="36.39" height="36.39" rx="5" fill="white"/><path d="M31.006 31.0065H25.6142V22.5625C25.6142 20.5489 25.5782 17.9568 22.8099 17.9568C20.0016 17.9568 19.5719 20.1508 19.5719 22.4159V31.0059H14.1802V13.6416H19.3562V16.0147H19.4287C19.9467 15.129 20.6953 14.4004 21.5946 13.9064C22.494 13.4125 23.5105 13.1717 24.5358 13.2097C30.0007 13.2097 31.0083 16.8043 31.0083 21.4807L31.006 31.0065ZM8.09621 11.2682C6.36811 11.2685 4.96695 9.86775 4.96667 8.13965C4.96638 6.41155 6.36697 5.0104 8.09507 5.01011C9.82317 5.00969 11.2243 6.41042 11.2246 8.13851C11.2248 8.96838 10.8953 9.76432 10.3086 10.3512C9.72188 10.9382 8.92608 11.268 8.09621 11.2682ZM10.7922 31.0066H5.39468V13.6416H10.7921V31.0065L10.7922 31.0066ZM33.694 0.00264849H2.68533C1.21978 -0.0138407 0.0179107 1.16016 0 2.62571V33.7638C0.0173421 35.23 1.21907 36.4052 2.68518 36.3898H33.694C35.1633 36.408 36.3697 35.2329 36.39 33.7638V2.6233C36.3691 1.1549 35.1626 -0.0189581 33.694 0.000231971" fill="#0A66C2"/></g>
                            <defs><clipPath id="clip3"><rect width="36.39" height="36.39" rx="5" fill="white"/></clipPath></defs>
                        </svg>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <h3 style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 700; line-height: 24px; margin: 0;">David Hasan</h3>
                        <p style="color: #3F7FD2; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; line-height: 20px; margin: 0;">Advisor</p>
                    </div>
                    <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 500; line-height: 27.6px; margin: 0;">CEO of Gaza Children Village</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Annotators Section -->
    <section id="workforce" style="width: 100%; padding: 80px 170px; background: #FFFFFF;">
        <!-- Title -->
        <h2 style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 70px; font-weight: 700; line-height: 150.9%; letter-spacing: 1.05px; margin: 0 0 60px 0;">The Quality Starts With the Annotators</h2>

        <!-- Image & Paragraph -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; margin-bottom: 80px;">
            <div>
                <img src="{{ asset('public/images/arabic-annotators-team.png') }}" alt="Arabic Annotators Team" style="width: 100%; height: auto; border-radius: 10px; object-fit: cover;">
            </div>
            <div>
                <p style="color: #969696; font-family: 'Poppins', sans-serif; font-size: 35px; font-weight: 400; line-height: 150.9%; letter-spacing: 1.05px; margin: 0; width: 749px;">Our annotator workforce is our primary quality asset. We invest in their training, their ownership stake, and their stability — because high-quality annotations require a workforce that is both skilled and retained.</p>
            </div>
        </div>

            <div style="display: flex; gap: 0; width: 100%; align-items: flex-start;">
                <!-- Native Card -->
                <div style="flex: 1; padding: 40px; display: flex; gap: 30px; border-right: 1px solid #C4C4C4;">
                    <!-- Icon Circle -->
                    <div style="position: relative; width: 100px; height: 100px; flex-shrink: 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none" style="position: absolute; top: 0; left: 0;">
                            <circle cx="50" cy="50" r="50" fill="#C2D7E6" fillOpacity="0.6"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none" style="position: absolute; top: 25px; left: 25px;">
                            <path d="M25 4.16675C22.2373 4.16675 19.5878 5.26421 17.6343 7.21772C15.6808 9.17122 14.5833 11.8207 14.5833 14.5834C14.5833 17.3461 15.6808 19.9956 17.6343 21.9491C19.5878 23.9026 22.2373 25.0001 25 25.0001C27.7627 25.0001 30.4122 23.9026 32.3657 21.9491C34.3192 19.9956 35.4167 17.3461 35.4167 14.5834C35.4167 11.8207 34.3192 9.17122 32.3657 7.21772C30.4122 5.26421 27.7627 4.16675 25 4.16675ZM8.33333 45.8334H41.6667C42.8125 45.8334 43.75 44.8959 43.75 43.7501V41.6667C43.75 33.6251 37.2083 27.0834 29.1667 27.0834H20.8333C12.7917 27.0834 6.25 33.6251 6.25 41.6667V43.7501C6.25 44.8959 7.1875 45.8334 8.33333 45.8334Z" fill="#3265A1"/>
                        </svg>
                    </div>
                    <!-- Content -->
                    <div style="display: flex; flex-direction: column; gap: 12px; flex: 1;">
                        <p style="color: #3B82F6; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 600; line-height: normal; margin: 0;">01</p>
                        <div style="display: flex; flex-direction: column; gap: 5px;">
                            <p style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 40px; font-weight: 800; line-height: 139.4%; margin: 0;">Native</p>
                            <p style="color: #3B82F6; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 600; line-height: 139.4%; margin: 0;">91% top accuracy</p>
                        </div>
                        <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 400; line-height: 1.6; margin: 0;">Arabic dialect speakers with deep linguistic and cultural competency in their assigned dialect family.</p>
                    </div>
                </div>

                <!-- Trained Card -->
                <div style="flex: 1; padding: 40px; display: flex; gap: 30px; border-right: 1px solid #C4C4C4;">
                    <!-- Icon Circle -->
                    <div style="position: relative; width: 100px; height: 100px; flex-shrink: 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none" style="position: absolute; top: 0; left: 0;">
                            <circle cx="50" cy="50" r="50" fill="#C2D7E6" fillOpacity="0.6"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none" style="position: absolute; top: 25px; left: 25px;">
                            <path d="M24.9999 8.75098L2.1958 17.3027L24.9999 28.7048L35.8612 23.2741L25.6721 20.1589C25.4622 20.2595 25.2326 20.312 24.9999 20.3125C24.5855 20.3125 24.1881 20.1479 23.895 19.8549C23.602 19.5618 23.4374 19.1644 23.4374 18.75C23.4374 18.3356 23.602 17.9382 23.895 17.6451C24.1881 17.3521 24.5855 17.1875 24.9999 17.1875L24.7415 18.0275L26.5518 18.5845L26.5525 18.5899L29.2238 19.4068L44.4335 24.0864V25.2726C44.2231 25.4157 44.0509 25.608 43.9318 25.8328C43.8126 26.0576 43.7502 26.3082 43.7499 26.5626C43.7502 26.8229 43.8155 27.0789 43.9399 27.3076C44.0642 27.5362 44.2438 27.7301 44.4621 27.8718C43.7509 30.5598 43.7499 36.6585 43.7499 39.0625C45.3124 40.0776 45.3124 40.1147 46.8749 39.0625C46.8749 36.6588 46.8741 30.5612 46.163 27.8727C46.3814 27.7309 46.561 27.5368 46.6853 27.308C46.8096 27.0792 46.8748 26.8229 46.8749 26.5625C46.8749 26.3078 46.8126 26.0569 46.6934 25.8318C46.5743 25.6067 46.4019 25.4141 46.1913 25.2708V22.7884L40.3979 21.0059L47.804 17.3027L24.9999 8.75098ZM11.6818 24.3164L10.4003 32.0059C12.9564 32.3401 16.0142 33.8259 18.8251 35.5827C20.4237 36.5819 21.9211 37.6787 23.1372 38.7429C23.8806 39.3933 24.5021 40.0173 24.9999 40.6312C25.4977 40.0172 26.1192 39.3933 26.8626 38.7429C28.0787 37.6787 29.576 36.5819 31.1747 35.5827C33.9856 33.8259 37.0434 32.3401 39.5995 32.0059L38.3178 24.3164H37.7074L24.9999 30.6702L12.2922 24.3164H11.6818Z" fill="#3265A1"/>
                        </svg>
                    </div>
                    <!-- Content -->
                    <div style="display: flex; flex-direction: column; gap: 12px; flex: 1;">
                        <p style="color: #3B82F6; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 600; line-height: normal; margin: 0;">02</p>
                        <div style="display: flex; flex-direction: column; gap: 5px;">
                            <p style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 40px; font-weight: 800; line-height: 139.4%; margin: 0;">Trained</p>
                            <p style="color: #3B82F6; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 600; line-height: 139.4%; margin: 0;">3,031 annotations delivered</p>
                        </div>
                        <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 400; line-height: 1.6; margin: 0;">Structured onboarding in annotation methodologies, quality standards, and task-specific guidelines before any production work</p>
                    </div>
                </div>

                <!-- Invested Card -->
                <div style="flex: 1; padding: 40px; display: flex; gap: 30px;">
                    <!-- Icon Circle -->
                    <div style="position: relative; width: 100px; height: 100px; flex-shrink: 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none" style="position: absolute; top: 0; left: 0;">
                            <circle cx="50" cy="50" r="50" fill="#C2D7E6" fillOpacity="0.6"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none" style="position: absolute; top: 25px; left: 25px;">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M40.2356 17.4792C40.2356 19.4799 39.8415 21.4609 39.0759 23.3092C38.3103 25.1575 37.1882 26.8369 35.7735 28.2516C34.3589 29.6662 32.6795 30.7884 30.8312 31.554C28.9828 32.3196 27.0018 32.7136 25.0012 32.7136C23.0006 32.7136 21.0196 32.3196 19.1713 31.554C17.3229 30.7884 15.6435 29.6662 14.2289 28.2516C12.8142 26.8369 11.6921 25.1575 10.9265 23.3092C10.1609 21.4609 9.76683 19.4799 9.76683 17.4792C9.76683 13.4388 11.3719 9.56392 14.2289 6.70692C17.0859 3.84992 20.9608 2.24487 25.0012 2.24487C29.0416 2.24487 32.9165 3.84992 35.7735 6.70692C38.6305 9.56392 40.2356 13.4388 40.2356 17.4792ZM24.896 9.56883L27.5939 14.1938L32.2189 15.348L29.1356 18.8167L29.9064 24.2126L24.896 21.9001L19.8877 24.2126L20.6585 18.8167L17.5752 15.348L22.2002 14.1917L24.896 9.56883ZM2.3335 40.9834L9.8835 27.9042C11.2965 29.9566 13.1129 31.6993 15.222 33.0261C17.3311 34.3528 19.6884 35.2358 22.1502 35.6209L14.8731 48.223L12.2022 38.3668L2.3335 40.9793V40.9834ZM35.1252 48.223L27.8502 35.6188C30.3117 35.2339 32.669 34.3513 34.7781 33.0249C36.8871 31.6985 38.7037 29.9562 40.1168 27.9042L47.6668 40.9813L37.796 38.3668L35.1273 48.2209L35.1252 48.223Z" fill="#3265A1"/>
                        </svg>
                    </div>
                    <!-- Content -->
                    <div style="display: flex; flex-direction: column; gap: 12px; flex: 1;">
                        <p style="color: #3B82F6; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 600; line-height: normal; margin: 0;">03</p>
                        <div style="display: flex; flex-direction: column; gap: 5px;">
                            <p style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 40px; font-weight: 800; line-height: 139.4%; margin: 0;">Invested</p>
                            <p style="color: #3B82F6; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 600; line-height: 139.4%; margin: 0;">Long-term retention, not gig churn</p>
                        </div>
                        <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 400; line-height: 1.6; margin: 0;">Our annotators are invested in outcomes — producing measurably lower error rates and better data for our clients</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Worker Privacy Section -->
    <section style="width: 100%; padding: 80px 170px; background: #F5F5F5;">
        <div style="width: 1576px; height: 132px; border-radius: 15px; border: 0.5px solid #3265A1; background: rgba(255, 255, 255, 0.58); display: flex; align-items: center; gap: 30px; padding: 30px;">
            <div style="flex-shrink: 0;">
                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54" fill="none">
                    <g clip-path="url(#clip0_308_685)">
                        <path d="M45.6946 11.0723L27.5305 0.283213C26.8924 -0.0944044 26.1175 -0.0944044 25.4794 0.283213L7.31538 11.0723C6.60887 11.4769 6.15307 12.2861 6.0619 13.2031C6.03911 13.4998 3.87402 42.2258 25.5478 53.6892C25.8408 53.8489 26.1596 53.9316 26.4822 53.9316C26.8048 53.9316 27.1236 53.8489 27.4166 53.6892C49.0903 42.2258 46.948 13.4729 46.9025 13.2031C46.8661 12.7503 46.7316 12.3163 46.512 11.943C46.2924 11.5697 45.9952 11.2698 45.649 11.0723H45.6946ZM26.505 48.2676C11.1442 39.4476 10.4149 20.5937 10.5516 15.1991L26.505 5.7317L42.4583 15.1991C42.5495 20.5667 41.7062 39.5285 26.505 48.2676Z" fill="#3265A1"/>
                        <path d="M24.7187 28.2916L21.8199 25.3703L18.6289 28.5612L24.7187 34.6285L35.3028 24.0669L32.1118 20.876L24.7187 28.2916Z" fill="#3265A1"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_308_685">
                            <rect width="53.9316" height="53.9316" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div style="display: flex; flex-direction: column; gap: 8px;">
                <h3 style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 600; line-height: normal; margin: 0;">Worker privacy is a priority.</h3>
                <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 600; line-height: normal; margin: 0;">We do not publish individual annotator names, photos, or location information.</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section style="width: 100%; padding: 80px 170px; background: #FFFFFF;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: stretch;">
            <!-- Left Content -->
            <div style="display: flex; flex-direction: column; gap: 40px;">
                <!-- Title and Description -->
                <div style="display: flex; flex-direction: column; gap: 30px;">
                    <h2 style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 70px; font-weight: 700; line-height: 130%; margin: 0;">Start Your Project</h2>
                    <p style="color: #787878; font-family: 'Poppins', sans-serif; font-size: 25px; font-weight: 400; line-height: 130%; margin: 0; width: 638px;">Tell us about your project. We'll follow up to discuss scope, dialect requirements, QA standards, and how we can fit into your annotation pipeline.</p>
                </div>

                <!-- Contact Info -->
                <div style="display: flex; flex-direction: column; gap: 15px;">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M20.1668 5.49984C20.1668 4.4915 19.3418 3.6665 18.3335 3.6665H3.66683C2.6585 3.6665 1.8335 4.4915 1.8335 5.49984V16.4998C1.8335 17.5082 2.6585 18.3332 3.66683 18.3332H18.3335C19.3418 18.3332 20.1668 17.5082 20.1668 16.4998V5.49984ZM18.3335 5.49984L11.0002 10.0832L3.66683 5.49984H18.3335ZM18.3335 16.4998H3.66683V7.33317L11.0002 11.9165L18.3335 7.33317V16.4998Z" fill="#3B82F6"/>
                        </svg>
                        <a href="mailto:info@karamadata.ai" style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 500; text-decoration: none;">info@karamadata.ai</a>
                    </div>
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M18.7325 5.59737L11.4204 1.92977C11.1635 1.8014 10.8516 1.8014 10.5947 1.92977L3.28266 5.59737C2.99825 5.73491 2.81476 6.00998 2.77806 6.32173C2.76889 6.42259 1.89732 16.1876 10.6222 20.0844C10.7402 20.1387 10.8685 20.1668 10.9984 20.1668C11.1283 20.1668 11.2566 20.1387 11.3745 20.0844C20.0994 16.1876 19.237 6.41342 19.2187 6.32173C19.2041 6.1678 19.1499 6.02026 19.0615 5.89337C18.9731 5.76647 18.8535 5.66452 18.7141 5.59737H18.7325ZM11.0076 18.2414C4.82397 15.2432 4.53039 8.83403 4.58543 7.00023L11.0076 3.78191L17.4297 7.00023C17.4664 8.82487 17.1269 15.2707 11.0076 18.2414Z" fill="#3B82F6"/>
                            <path d="M10.0833 11.5406L8.90079 10.349L7.59912 11.6506L10.0833 14.1256L14.4008 9.81729L13.0991 8.51562L10.0833 11.5406Z" fill="#3B82F6"/>
                        </svg>
                        <span style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 500;">US LLC — domestically incorporated and owned</span>
                    </div>
                </div>

                <!-- Testimonial Quote -->
                <div style="padding: 30px; background: rgba(255, 255, 255, 0); border-left: 4px solid #3B82F6; display: flex; flex-direction: column; justify-content: space-between; min-height: 400px;">
                    <p style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 600; line-height: 125%; letter-spacing: 0.72px; margin: 0 0 40px 0; width: 589px;">"Our annotators are not vendors — they are deeply invested in the outcomes. That changes everything about how they approach the work. The precision, the care, the accountability. It shows in every dataset we deliver."</p>

                    <!-- Author Info -->
                    <div style="display: flex; align-items: flex-end; gap: 20px;">
                        <!-- Avatar -->
                        <div style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(180deg, rgba(58, 115, 216, 0.76) 0%, rgba(31, 61, 114, 0.76) 100%); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <span style="color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 23px; font-weight: 700;">ND</span>
                        </div>
                        <!-- Author Details -->
                        <div style="display: flex; flex-direction: column; gap: 5px;">
                            <p style="color: #3265A1; font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 800; line-height: 150.9%; letter-spacing: 0.48px; margin: 0;">Nareman Dayya</p>
                            <p style="color: #3265A1; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; line-height: 150.9%; margin: 0;">Palestine Operations Advisor, Karama Data</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Form -->
            <div style="display: flex; flex-direction: column; gap: 20px;">
                <form style="display: flex; flex-direction: column; gap: 20px;">
                    <!-- Name and Company Row -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div style="display: flex; flex-direction: column; gap: 8px;">
                            <label style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600;">Your Name <span style="color: #EF4444;">*</span></label>
                            <input type="text" placeholder="Jane Smith" style="padding: 12px 16px; border-radius: 8px; border: 1px solid #D1D5DB; font-family: 'Poppins', sans-serif; font-size: 14px; background: #FFFFFF;">
                        </div>
                        <div style="display: flex; flex-direction: column; gap: 8px;">
                            <label style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600;">Company <span style="color: #EF4444;">*</span></label>
                            <input type="text" placeholder="Acme AI Inc." style="padding: 12px 16px; border-radius: 8px; border: 1px solid #D1D5DB; font-family: 'Poppins', sans-serif; font-size: 14px; background: #FFFFFF;">
                        </div>
                    </div>

                    <!-- Email -->
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600;">Work Email <span style="color: #EF4444;">*</span></label>
                        <input type="email" placeholder="jane@yourcompany.com" style="padding: 12px 16px; border-radius: 8px; border: 1px solid #D1D5DB; font-family: 'Poppins', sans-serif; font-size: 14px; background: #FFFFFF;">
                    </div>

                    <!-- Project Description -->
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label style="color: #003A6C; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600;">Project Description <span style="color: #EF4444;">*</span></label>
                        <textarea placeholder="Tell us about your annotation needs — dialect requirements, volume, task type, timeline..." style="padding: 12px 16px; border-radius: 8px; border: 1px solid #D1D5DB; font-family: 'Poppins', sans-serif; font-size: 14px; background: #FFFFFF; min-height: 120px; resize: vertical;"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" style="padding: 16px 24px; border-radius: 10px; background: linear-gradient(90deg, #045194 0%, #042F55 222.06%); border: none; color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; cursor: pointer; margin-top: 20px;">Start Your Project</button>
                    <p style="text-align: center; color: #787878; font-family: 'Poppins', sans-serif; font-size: 13px; margin: 0;">We respond to all inquiries within one business day.</p>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer style="width: 100%; padding: 60px 80px; background: linear-gradient(270deg, #01213D 22.23%, #003A6C 96.32%); border-top: 1px solid rgba(255, 255, 255, 0.1);">
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 40px; margin-bottom: 60px; position: relative;">
            <!-- About Section -->
            <div style="display: flex; flex-direction: column; gap: 20px; position: relative;">
                <div style="width: 364px; height: 91px; background: url('{{ asset('public/images/Rectangle-119.png') }}') 0px 0.353px / 100% 99.225% no-repeat; flex-shrink: 0;"></div>
                <p style="color: #A8C9FF; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 500; line-height: 125%; letter-spacing: 0.6px; margin: 0;">Native speakers. Rigorous QA. No shortcuts.</p>
                <p style="color: #C4C4C4; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; line-height: 167%; letter-spacing: 0.6px; margin: 0;">Enterprise Arabic dialect annotation for AI companies building the next generation of Arabic-language AI systems.</p>
                <div style="display: inline-block; padding: 8px 12px; background: rgba(37, 99, 235, 0.2); border-radius: 5px; border: 1px solid #C4C4C4;">
                    <span style="color: #C4C4C4; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500;">US Incorporated LLC</span>
                </div>
            </div>

            <!-- Divider 1 -->
            <div style="width: 0.5px; height: 215px; background: #FFFFFF; opacity: 0.2; position: absolute; left: calc(25% - 20px); top: 20px;"></div>

            <!-- Navigation -->
            <div>
                <h4 style="color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; margin: 0 0 30px 0;">Navigation</h4>
                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 12px;">
                    <li><a href="#why-arabic" style="color: #C4C4C4; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; text-decoration: none;">Why Arabic</a></li>
                    <li><a href="#results" style="color: #C4C4C4; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; text-decoration: none;">Results</a></li>
                    <li><a href="#services" style="color: #C4C4C4; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; text-decoration: none;">Services</a></li>
                    <li><a href="#about" style="color: #C4C4C4; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; text-decoration: none;">About</a></li>
                    <li><a href="#workforce" style="color: #C4C4C4; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; text-decoration: none;">Our Workforce</a></li>
                    <li><a href="#" style="color: #C4C4C4; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; text-decoration: none;">Contact</a></li>
                </ul>
            </div>

            <!-- Divider 2 -->
            <div style="width: 0.5px; height: 215px; background: #FFFFFF; opacity: 0.2; position: absolute; left: calc(50% - 20px); top: 20px;"></div>

            <!-- Contact -->
            <div>
                <h4 style="color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; margin: 0 0 30px 0;">Contact</h4>
                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 18px;">
                    <li style="display: flex; align-items: center; gap: 12px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 29 29" fill="none" style="flex-shrink: 0;">
                            <path d="M26.5832 7.25016C26.5832 5.921 25.4957 4.8335 24.1665 4.8335H4.83317C3.504 4.8335 2.4165 5.921 2.4165 7.25016V21.7502C2.4165 23.0793 3.504 24.1668 4.83317 24.1668H24.1665C25.4957 24.1668 26.5832 23.0793 26.5832 21.7502V7.25016ZM24.1665 7.25016L14.4998 13.2918L4.83317 7.25016H24.1665ZM24.1665 21.7502H4.83317V9.66683L14.4998 15.7085L24.1665 9.66683V21.7502Z" fill="#C4C4C4"/>
                        </svg>
                        <a href="mailto:info@karamadata.ai" style="color: #C4C4C4; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; text-decoration: none;">info@karamadata.ai</a>
                    </li>
                    <li style="display: flex; align-items: center; gap: 12px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 29" fill="none" style="flex-shrink: 0;">
                            <path d="M5.315 12.0832C5.10501 12.8727 4.99917 13.6847 5 14.4998C5 15.3336 5.11 16.1432 5.315 16.9165H8.875C8.70791 15.3094 8.70791 13.6902 8.875 12.0832H5.315ZM6.3375 9.6665H9.27C9.6025 8.19596 10.0825 6.87888 10.6713 5.78292C8.8567 6.62836 7.34682 7.9814 6.3375 9.6665ZM24.685 12.0832H21.125C21.2921 13.6902 21.2921 15.3094 21.125 16.9165H24.685C25.1057 15.3311 25.1057 13.6686 24.685 12.0832ZM23.6625 9.6665C22.6532 7.9814 21.1433 6.62836 19.3288 5.78292C19.9188 6.87888 20.3975 8.19596 20.73 9.6665H23.6625ZM11.39 12.0832C11.297 12.8856 11.2502 13.6924 11.25 14.4998C11.25 15.3275 11.2975 16.1371 11.39 16.9165H18.61C18.7979 15.3105 18.7979 13.6892 18.61 12.0832H11.39ZM11.8375 9.6665H18.1625C17.9346 8.75831 17.6065 7.8764 17.1838 7.03596C16.3988 5.5195 15.5588 4.83317 15 4.83317C14.4413 4.83317 13.6013 5.5195 12.8163 7.03596C12.4225 7.79963 12.0913 8.68775 11.8375 9.6665ZM6.3375 19.3332C7.34682 21.0183 8.8567 22.3713 10.6713 23.2168C10.0813 22.1208 9.6025 20.8037 9.27 19.3332H6.3375ZM23.6625 19.3332H20.73C20.3975 20.8037 19.9175 22.1208 19.3288 23.2168C21.1433 22.3713 22.6532 21.0183 23.6625 19.3332ZM11.8375 19.3332C12.0913 20.3119 12.4225 21.2 12.8163 21.9637C13.6013 23.4802 14.4413 24.1665 15 24.1665C15.5588 24.1665 16.3988 23.4802 17.1838 21.9637C17.5775 21.2 17.9088 20.3119 18.1625 19.3332H11.8375ZM15 26.5832C8.09625 26.5832 2.5 21.1735 2.5 14.4998C2.5 7.82621 8.09625 2.4165 15 2.4165C21.9038 2.4165 27.5 7.82621 27.5 14.4998C27.5 21.1735 21.9038 26.5832 15 26.5832Z" fill="#C4C4C4"/>
                        </svg>
                        <span style="color: #C4C4C4; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500;">Arabic Language Annotation Only</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 12px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 29 29" fill="none" style="flex-shrink: 0;">
                            <path d="M24.6928 7.37798L15.0542 2.54341C14.7156 2.3742 14.3044 2.3742 13.9657 2.54341L4.32714 7.37798C3.95224 7.55927 3.71037 7.92187 3.66199 8.3328C3.6499 8.46575 2.50101 21.3378 14.002 26.4745C14.1575 26.5461 14.3267 26.5832 14.4979 26.5832C14.6691 26.5832 14.8382 26.5461 14.9937 26.4745C26.4947 21.3378 25.3579 8.45367 25.3337 8.3328C25.3144 8.12991 25.2431 7.93542 25.1266 7.76815C25.01 7.60088 24.8523 7.46649 24.6686 7.37798H24.6928ZM14.51 24.0451C6.35887 20.0929 5.97187 11.6445 6.04444 9.2272L14.51 4.98487L22.9755 9.2272C23.0239 11.6324 22.5764 20.1291 14.51 24.0451Z" fill="#C4C4C4"/>
                            <path d="M13.2917 15.2131L11.7329 13.6423L10.0171 15.3581L13.2917 18.6206L18.9829 12.9414L17.2671 11.2256L13.2917 15.2131Z" fill="#C4C4C4"/>
                        </svg>
                        <span style="color: #C4C4C4; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500;">No Content Moderation Services</span>
                    </li>
                </ul>
            </div>

            <!-- Divider 3 -->
            <div style="width: 0.5px; height: 215px; background: #FFFFFF; opacity: 0.2; position: absolute; left: calc(75% - 20px); top: 20px;"></div>

            <!-- Partners & Affiliations -->
            <div style="display: flex; flex-direction: column; gap: 20px; position: relative;">
                <h4 style="color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; margin: 0;">Partners & Affiliations</h4>
                <div style="display: flex; flex-direction: column; gap: 18px;">
                    <div style="display: flex; align-items: flex-start; gap: 12px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 36 36" fill="none" style="flex-shrink: 0; margin-top: 2px;">
                            <circle cx="18" cy="18" r="16" fill="#488EFF" opacity="0.2"/>
                            <path d="M18 8C12.48 8 8 12.48 8 18s4.48 10 10 10 10-4.48 10-10-4.48-10-10-10zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm2.5-9c.83 0 1.5-.67 1.5-1.5S21.33 14 20.5 14s-1.5.67-1.5 1.5.67 1.5 1.5 1.5zm-5 0c.83 0 1.5-.67 1.5-1.5S13.33 14 12.5 14s-1.5.67-1.5 1.5.67 1.5 1.5 1.5zm2.5 6.5c2.33 0 4.31-1.46 5.11-3.5h-10.22c.8 2.04 2.78 3.5 5.11 3.5z" fill="#488EFF"/>
                        </svg>
                        <div style="display: flex; flex-direction: column; gap: 8px;">
                            <p style="color: #A8C9FF; font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 500; margin: 0;">Supported by</p>
                            <p style="color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 700; margin: 0;">Gaza Children Village<br/>(GCV)</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" style="flex-shrink: 0;">
                            <path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm0 20c-4.97 0-9-4.03-9-9s4.03-9 9-9 9 4.03 9 9-4.03 9-9 9zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 9 15.5 9 14 9.67 14 10.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 9 8.5 9 7 9.67 7 10.5 7.67 12 8.5 12zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" fill="#488EFF"/>
                        </svg>
                        <span style="color: #FFFFFF; font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 600;">US-Incorporated LLC</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div style="border-top: 1px solid rgba(255, 255, 255, 0.2); padding-top: 30px; text-align: center;">
            <p style="color: #C4C4C4; font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 500; line-height: 167%; letter-spacing: 0.45px; margin: 0;">© 2026 Karama Data LLC. All rights reserved. | US LLC — Domestic Ownership. Arabic AI Annotation.</p>
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
