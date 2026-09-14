<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karama Data - Arabic AI Annotation</title>
    <link rel="icon" href="{{ asset('public/favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('public/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/apple-touch-icon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* ==================================================================
           Karama Data — page styles
           Mobile-first. Breakpoints:
             tablet  ≥ 768px
             desktop ≥ 1024px
             wide    ≥ 1280px
           ================================================================== */

        /* ---------- 1. Design tokens ---------- */
        :root {
            /* Brand colours (unchanged) */
            --navy-900: #01213D;
            --navy-800: #003A6C;
            --navy-700: #043763;
            --blue-500: #488EFF;
            --blue-450: #4A83E1;
            --blue-400: #3B82F6;
            --blue-300: #548ED3;
            --text-muted: #787878;
            --text-body: #44474E;
            --surface-soft: #F5F5F5;
            --surface-tint: #F9FAFB;
            --line: #E0E0E0;
            --green: #00B660;
            --purple: #8B5CF6;
            --amber: #F59E0B;
            --grad-navy: linear-gradient(270deg, #01213D 22.23%, #003A6C 96.32%);
            --grad-card: linear-gradient(180deg, rgba(255, 255, 255, 0.43) 0%, rgba(238, 245, 255, 0.34) 50%, rgba(153, 192, 255, 0.26) 100%);
            --grad-result: linear-gradient(180deg, rgba(255, 255, 255, 0.40) 20.67%, rgba(238, 245, 255, 0.32) 51.44%, rgba(153, 192, 255, 0.24) 100%);
            --grad-avatar: linear-gradient(180deg, rgba(58, 115, 216, 0.76) 0%, rgba(31, 61, 114, 0.76) 100%);

            /* Layout */
            --nav-h: 3.5rem;
            --container: 80rem;            /* 1280px — one width for every section */
            --gutter: clamp(1rem, 0.5rem + 2.5vw, 2.5rem);       /* 16 → 40px */
            --section-y: clamp(3rem, 2rem + 4vw, 6rem);          /* 48 → 96px */
            --gap: clamp(1rem, 0.75rem + 1.25vw, 2rem);          /* 16 → 32px */
            --card-pad: clamp(1.25rem, 1rem + 1.25vw, 2.5rem);   /* 20 → 40px */
            --stack: clamp(2rem, 1.5rem + 2.5vw, 3.75rem);       /* 32 → 60px */
            --radius: 1.25rem;
            --radius-sm: 0.625rem;
            --trust-overlap: 5.5rem;

            /* Fluid type scale */
            --fs-hero:   clamp(2.25rem, 1.5rem + 2.6vw, 4rem);          /* 36 → 64px */
            --fs-h2:     clamp(2rem, 1.35rem + 2.2vw, 3.5rem);          /* 32 → 56px */
            --fs-h3:     clamp(1.5rem, 1.2rem + 1vw, 2.25rem);          /* 24 → 36px */
            --fs-h4:     clamp(1.25rem, 1.1rem + 0.6vw, 1.625rem);      /* 20 → 26px */
            --fs-stat:   clamp(2.5rem, 1.8rem + 2.5vw, 4.25rem);        /* 40 → 68px */
            --fs-metric: clamp(2rem, 1.5rem + 1.8vw, 3.25rem);          /* 32 → 52px */
            --fs-lead:   clamp(1.0625rem, 0.95rem + 0.5vw, 1.375rem);   /* 17 → 22px */
            --fs-body:   clamp(1rem, 0.95rem + 0.25vw, 1.125rem);       /* 16 → 18px */
            --fs-small:  0.9375rem;
            --fs-xs:     0.875rem;
        }
        @media (min-width: 768px) {
            :root { --nav-h: 4rem; }
        }

        /* ---------- 2. Base ---------- */
        *, *::before, *::after { box-sizing: border-box; }
        html { scroll-padding-top: var(--nav-h); overflow-x: hidden; }
        body {
            margin: 0;
            padding-top: var(--nav-h);
            font-family: 'Poppins', sans-serif;
            color: var(--navy-900);
            background: #FFFFFF;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }
        body * { font-family: 'Poppins', sans-serif; }
        h1, h2, h3, h4, p, ul { margin: 0; }
        p { overflow-wrap: break-word; }
        img { display: block; max-width: 100%; height: auto; }
        svg { flex-shrink: 0; }
        a { color: inherit; }
        button, input, textarea { font: inherit; color: inherit; }
        button { cursor: pointer; border: 0; background: none; padding: 0; }
        section, #hero-section { scroll-margin-top: var(--nav-h); }

        .container {
            width: 100%;
            max-width: var(--container);
            margin-inline: auto;
            padding-inline: var(--gutter);
        }
        .section { padding-block: var(--section-y); }
        .section--soft { background: var(--surface-soft); }
        .section--white { background: #FFFFFF; }
        .section--flush-top { padding-top: 0; }
        /* Cards that share one soft band sit closer together than separate sections */
        #why-arabic, #stats-section { padding-bottom: var(--stack); }
        .stack { display: flex; flex-direction: column; gap: var(--stack); }

        /* ---------- 3. Typography helpers ---------- */
        .title-xl { color: var(--navy-700); font-size: var(--fs-h2); font-weight: 700; line-height: 1.15; letter-spacing: -0.01em; }
        .title-lg { color: var(--navy-700); font-size: var(--fs-h3); font-weight: 700; line-height: 1.25; letter-spacing: -0.01em; }
        .lead { color: var(--text-muted); font-size: var(--fs-lead); font-weight: 400; line-height: 1.6; }
        .accent { color: var(--blue-500); }

        /* ---------- 4. Buttons ---------- */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 2rem;
            border-radius: var(--radius-sm);
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.25;
            white-space: nowrap;
            transition: filter 0.3s, background 0.3s;
        }
        .btn:hover { filter: brightness(1.1); }
        .btn--blue  { background: var(--blue-450); color: #FFFFFF; }
        .btn--navy  { background: var(--navy-900); color: #FFFFFF; border-radius: 6px; font-size: 0.875rem; font-weight: 700; padding: 0.625rem 1.5rem; }
        .btn--grad  { background: linear-gradient(90deg, #0360B1 0%, #003A6C 216.05%); color: #FFFFFF; }
        .btn--light { background: #EFEFEF; color: var(--navy-900); font-weight: 700; border-radius: 9px; padding: 0.9rem 1.875rem; font-size: clamp(0.875rem, 0.8rem + 0.4vw, 1.125rem); }
        .btn--ghost { background: transparent; color: #FFFFFF; font-weight: 700; border-radius: 9px; padding: 0.9rem 1.875rem; font-size: clamp(0.875rem, 0.8rem + 0.4vw, 1.125rem); outline: 1px solid #C4C4C4; outline-offset: -1px; }

        /* ---------- 5. Navigation ---------- */
        .nav {
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 50;
            background: #FFFFFF;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
        }
        .nav__inner {
            height: var(--nav-h);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }
        .nav__logo { height: 2rem; width: auto; }
        .nav__links { display: none; align-items: center; gap: clamp(1.25rem, 1rem + 1.5vw, 2.5rem); }
        .nav__link { color: #505050; text-decoration: none; font-size: 0.875rem; font-weight: 500; transition: color 0.3s; }
        .nav__link:hover { color: var(--navy-900); }
        .nav__burger { display: inline-flex; align-items: center; justify-content: center; padding: 0.5rem; margin-right: -0.5rem; }
        .nav__menu {
            background: #FFFFFF;
            border-top: 1px solid #E5E7EB;
            padding: 0.5rem 0;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }
        .nav__menu-link { display: block; padding: 0.875rem 1.5rem; color: var(--navy-900); text-decoration: none; font-size: 0.9375rem; font-weight: 500; border-bottom: 1px solid #F3F4F6; }
        .nav__menu-cta { display: block; margin: 0.75rem 1.5rem; padding: 0.75rem; background: var(--navy-900); color: #FFFFFF; text-decoration: none; font-size: 0.9375rem; font-weight: 700; border-radius: 0.5rem; text-align: center; }
        @media (min-width: 768px) {
            .nav__logo { height: 2.5rem; }
        }
        @media (min-width: 1024px) {
            .nav__links { display: flex; }
            .nav__burger { display: none; }
            .nav__menu { display: none !important; }
        }

        /* ---------- 6. Hero ---------- */
        .hero {
            position: relative;
            display: flex;
            flex-direction: column;
            color: #FFFFFF;
            background-color: var(--navy-900);
            background-image: url('{{ asset('public/images/Rectangle-122.png') }}');
            background-size: cover;
            background-position: center top;
            background-repeat: no-repeat;
        }
        .hero__inner {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding-block: clamp(2.5rem, 2rem + 3vw, 4rem) 1.5rem;
        }
        .hero__content {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            max-width: 42rem;
            margin-block: auto;
        }
        .hero__title {
            flex-basis: 100%;
            font-size: var(--fs-hero);
            font-weight: 700;
            line-height: 1.15;
            color: #FFFFFF;
        }
        .hero__subtitle {
            flex-basis: 100%;
            font-size: var(--fs-lead);
            font-weight: 400;
            line-height: 1.6;
            color: #B3B3B3;
            margin-bottom: 0.75rem;
        }
        .hero__btn { flex: 1 1 100%; cursor: pointer; }
        .hero__divider {
            width: 12.5rem;
            height: 6px;
            margin: 2.5rem auto 1.5rem;
            border-radius: 9px;
            background: #D9D9D9;
        }
        .trust-strip {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.625rem;
        }
        .trust-card {
            display: flex;
            align-items: center;
            gap: 0.625rem;
            min-height: 5rem;
            padding: 0.75rem 0.875rem;
            border-radius: 10px;
            border: 1px solid #00427C;
            background: linear-gradient(180deg, #043763 7.69%, #01213D 100%);
        }
        .trust-card svg { width: 1.75rem; height: 1.75rem; }
        .trust-card > div { min-width: 0; }
        .trust-title { color: #F2F4F6; font-size: 0.75rem; font-weight: 600; line-height: 1.3; }
        .trust-subtitle { color: var(--blue-300); font-size: 0.6875rem; font-weight: 400; line-height: 1.3; margin-top: 2px; }
        @media (min-width: 768px) {
            .hero {
                margin-bottom: var(--trust-overlap);
                background-image: linear-gradient(rgba(1, 33, 61, 0.55), rgba(1, 33, 61, 0.55)), url('{{ asset('public/images/hero-digital-head.png') }}');
                background-position: center;
            }
            .hero__inner {
                min-height: clamp(30rem, 62vh, 46rem);
                padding-block: var(--section-y) 0;
            }
            .hero__content { padding-bottom: var(--section-y); gap: 1.25rem; }
            .hero__btn { flex: 0 0 auto; }
            .hero__divider { display: none; }
            .trust-strip {
                display: flex;
                justify-content: center;
                gap: 1.5rem;
                margin-top: auto;
                transform: translateY(50%);
            }
            .trust-card {
                flex: 1 1 0;
                max-width: 17.5rem;
                min-height: 11rem;
                flex-direction: column;
                justify-content: center;
                text-align: center;
                padding: 1rem 1rem 1.125rem;
                border-radius: 1rem;
            }
            .trust-card svg { width: 1.875rem; height: 1.875rem; }
            .trust-title { font-size: 0.875rem; }
            .trust-subtitle { font-size: 0.75rem; }
        }

        /* ---------- 7. Why Arabic ---------- */
        .why__grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: clamp(1.5rem, 1rem + 2.5vw, 4rem);
            align-items: center;
        }
        .why__media { display: flex; justify-content: center; }
        .why__img {
            width: 100%;
            max-width: 30rem;
            border-radius: 10px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            background: #FFFFFF;
            object-fit: contain;
        }
        .why__title { font-size: var(--fs-h2); font-weight: 600; line-height: 1.2; margin-bottom: clamp(1rem, 0.75rem + 1.25vw, 2.5rem); }
        .why__title span { display: block; }
        .why__text { max-width: 34rem; }
        @media (min-width: 768px) {
            .why__grid { grid-template-columns: 5fr 6fr; }
        }

        /* ---------- 8. Stats ---------- */
        .stats__card {
            display: grid;
            grid-template-columns: 1fr;
            gap: clamp(1.5rem, 1rem + 2vw, 3.75rem);
            align-items: center;
            padding: var(--card-pad);
            border-radius: var(--radius);
            background: linear-gradient(270deg, #01213D 0%, #003A6C 100%);
        }
        .stats__divider { width: 100%; height: 1px; background: rgba(255, 255, 255, 0.2); }
        .stats__num { color: var(--blue-500); font-size: var(--fs-stat); font-weight: 600; line-height: 1.1; margin-bottom: 0.75rem; text-shadow: 0 0 30px rgba(72, 142, 255, 0.5); }
        .stats__label { color: #FFFFFF; font-size: var(--fs-lead); font-weight: 700; line-height: 1.3; margin-bottom: 0.75rem; }
        .stats__text { color: #E0E3E5; font-size: var(--fs-body); font-weight: 400; line-height: 1.6; }
        @media (min-width: 768px) {
            .stats__card { grid-template-columns: 1fr auto 1fr; }
            .stats__divider { width: 1px; height: 100%; min-height: 12.5rem; }
        }

        /* ---------- 9. Split cards (Translation / Workforce intro) ---------- */
        .split-card {
            display: grid;
            grid-template-columns: 1fr;
            gap: var(--gap);
            align-items: center;
            padding: var(--card-pad);
            border-radius: var(--radius);
            border: 1px solid var(--line);
            background: #FFFFFF;
        }
        .split-card--tint { background: var(--surface-tint); }
        .split-card__media { display: flex; align-items: center; justify-content: center; }
        .split-card__media--first { order: -1; }
        .split-card__img { width: 100%; aspect-ratio: 4 / 3; border-radius: 10px; object-fit: cover; }
        .callouts { display: flex; flex-direction: column; gap: clamp(1rem, 0.75rem + 1vw, 1.875rem); justify-content: center; }
        .callout {
            padding: clamp(1.25rem, 1rem + 1.25vw, 2.5rem) clamp(1rem, 0.75rem + 1vw, 1.875rem);
            border-radius: 10px;
            border-left: 8px solid #2970C5;
            background: var(--surface-tint);
        }
        .callout__title { color: var(--navy-800); font-size: var(--fs-h3); font-weight: 700; line-height: 1.2; margin-bottom: 0.75rem; }
        .callout__text { color: var(--text-muted); font-size: var(--fs-body); line-height: 1.6; }
        @media (min-width: 768px) {
            .split-card { grid-template-columns: 1fr 1fr; align-items: stretch; }
            .split-card__media--first { order: 0; }
            /* Image fills the full column height without influencing the row height */
            .split-card__media { position: relative; min-height: 16rem; }
            .split-card__img { position: absolute; inset: 0; height: 100%; aspect-ratio: auto; }
        }

        /* ---------- 10. Results ---------- */
        .results__head {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.25rem;
            text-align: center;
            margin-bottom: var(--stack);
        }
        .results__lead { max-width: 70rem; text-align: center; }
        .metrics {
            display: grid;
            grid-template-columns: 1fr;
            gap: var(--gap);
            margin-bottom: var(--stack);
        }
        .metric {
            position: relative;
            overflow: hidden;
            border-radius: var(--radius);
            border: 0.5px solid rgba(0, 88, 190, 0.34);
            background: var(--grad-card);
        }
        .metric__body { display: flex; flex-direction: column; gap: 0.625rem; padding: 1.5rem 1.5rem 1.75rem; }
        .metric__icon { width: 2.5rem; height: 2.5rem; }
        .metric__value { font-size: var(--fs-metric); font-weight: 700; line-height: 1.1; }
        .metric__label { color: var(--navy-700); font-size: 1rem; font-weight: 500; line-height: 1.3; }
        .metric__note { font-size: var(--fs-small); font-weight: 400; line-height: 1.3; }
        .metric__bar { position: absolute; left: 0; right: 0; bottom: 0; height: 6px; }
        .results__grid { display: grid; grid-template-columns: 1fr; gap: var(--gap); }
        .result {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            border-radius: var(--radius);
            border: 0.5px solid rgba(59, 130, 246, 0.42);
            background: var(--grad-result);
        }
        .result__stripe { height: 4px; }
        .result__body { padding: clamp(1.25rem, 1rem + 1.25vw, 1.875rem); }
        .result__head { display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 0.5rem 0.75rem; margin-bottom: 1rem; }
        .result__title { color: var(--navy-700); font-size: var(--fs-h4); font-weight: 700; line-height: 1.2; }
        .badge { display: inline-block; padding: 0.375rem 0.75rem; border-radius: 20px; font-size: 0.8125rem; font-weight: 500; line-height: 1.2; white-space: nowrap; }
        .badge--green  { color: var(--green);  border: 1px solid var(--green);  background: rgba(0, 182, 96, 0.2); }
        .badge--purple { color: var(--purple); border: 1px solid var(--purple); background: rgba(139, 92, 246, 0.2); }
        .badge--amber  { color: var(--amber);  border: 1px solid var(--amber);  background: rgba(245, 158, 11, 0.2); }
        .result__meta { color: var(--text-muted); font-size: var(--fs-xs); margin-bottom: 1.25rem; }
        .result__block { margin-bottom: 1.5rem; }
        .result__row { display: flex; justify-content: space-between; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem; }
        .result__key { color: var(--navy-900); font-size: 1.0625rem; font-weight: 600; line-height: 1.4; }
        .result__val { font-size: 1.0625rem; font-weight: 600; line-height: 1.4; }
        .result__val--big { font-size: 1.75rem; }
        .bar { width: 100%; height: 4px; border-radius: 2px; background: var(--line); overflow: hidden; }
        .bar--thick { height: 6px; border-radius: 3px; }
        .bar__fill { height: 100%; }
        .result__bench { color: var(--text-muted); font-size: var(--fs-xs); font-weight: 500; line-height: 1.5; margin: 0.5rem 0 1.25rem; }
        .result__kappa { border-top: 1px solid var(--line); padding-top: 1.25rem; }
        .result__kappa .result__bench { margin: 0.5rem 0 0; }
        .note { padding: 0.75rem 0.9375rem; border-radius: 8px; margin-top: 1.25rem; }
        .note--green  { background: #E8F5F0; }
        .note--purple { background: #F4ECFE; }
        .note--amber  { background: #FEF3C7; }
        .best-labeler-note { font-size: var(--fs-xs); font-weight: 600; line-height: 1.5; }
        .note--green  .best-labeler-note { color: #00A651; }
        .note--purple .best-labeler-note { color: #7C5BA3; }
        .note--amber  .best-labeler-note { color: #B45309; }
        .text-green  { color: var(--green); }
        .text-purple { color: var(--purple); }
        .text-amber  { color: var(--amber); }
        .text-blue   { color: var(--blue-500); }
        .bg-green  { background: var(--green); }
        .bg-purple { background: var(--purple); }
        .bg-amber  { background: var(--amber); }
        .bg-blue   { background: var(--blue-500); }
        @media (min-width: 480px) {
            .metrics { grid-template-columns: repeat(2, 1fr); }
        }
        @media (min-width: 1024px) {
            .metrics { grid-template-columns: repeat(4, 1fr); }
            .results__grid { grid-template-columns: repeat(3, 1fr); }
        }

        /* ---------- 11. Banners / CTA ---------- */
        /* The benchmark banner belongs to the results above it: short gap before, full section gap after */
        #results { padding-bottom: clamp(2rem, 1.5rem + 2vw, 3rem); }
        .cta { padding-top: 0; }
        .cta__stack { display: flex; flex-direction: column; gap: var(--section-y); }
        .banner {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 1.25rem;
            padding: clamp(1.25rem, 1rem + 1.25vw, 2rem);
            border-radius: 10px;
            background: var(--grad-navy);
        }
        .banner__text { flex: 1; color: #FFFFFF; font-size: clamp(0.9375rem, 0.9rem + 0.3vw, 1.25rem); font-weight: 500; line-height: 1.6; }
        .banner .btn { align-self: center; }
        .section-head { display: flex; flex-direction: column; gap: clamp(1rem, 0.75rem + 1.25vw, 1.875rem); }
        .section-head__title { color: var(--navy-700); font-size: var(--fs-h2); font-weight: 800; line-height: 1.15; }
        .section-head__lead { color: var(--text-muted); font-size: var(--fs-lead); font-weight: 500; line-height: 1.7; max-width: 70rem; }
        @media (min-width: 768px) {
            .banner { flex-direction: row; align-items: center; gap: 2rem; }
            .banner .btn { align-self: auto; }
        }

        /* ---------- 12. Services ---------- */
        /* Short bottom gap so the pricing banner reads as the close of the services block */
        .services { padding-block: var(--stack) clamp(2rem, 1.5rem + 2vw, 3rem); }
        .services__grid { display: grid; grid-template-columns: 1fr; gap: var(--gap); }
        .service {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            height: 100%;
            padding: var(--card-pad);
            border-radius: 15px;
            border: 0.5px solid #DBDBDB;
            background: #FFFFFF;
        }
        .service__head { display: flex; align-items: flex-start; gap: 0.75rem; }
        .service__icon { width: 2.5rem; height: 2.5rem; margin-top: 2px; }
        .service__title { color: var(--navy-900); font-size: var(--fs-h4); font-weight: 700; line-height: 1.2; }
        .service__tag { color: #1C72FF; font-size: var(--fs-small); font-weight: 500; line-height: 1.5; }
        .service__text { color: var(--text-muted); font-size: var(--fs-small); font-weight: 400; line-height: 1.6; padding-top: 0.625rem; }
        .service__star { color: var(--amber); font-size: 1.125rem; font-weight: 700; line-height: 1.6; padding-top: 0.625rem; }
        @media (min-width: 768px) {
            .services__grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (min-width: 1024px) {
            .services__grid { grid-template-columns: repeat(3, 1fr); }
        }

        /* ---------- 13. About / Enterprise trust ---------- */
        .about__title { max-width: 56rem; }
        .about__lead { color: var(--text-muted); font-size: var(--fs-lead); font-weight: 400; line-height: 1.6; max-width: 56rem; }
        .trust-grid { display: grid; grid-template-columns: 1fr; gap: var(--gap); }
        .trust-item {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
            padding: var(--card-pad);
            border-radius: 10px;
            background: #FFFFFF;
        }
        .trust-item__icon { position: absolute; top: 1.25rem; right: 1.25rem; width: 1.5rem; height: 1.5rem; }
        .trust-item__num { color: var(--blue-500); font-size: clamp(2.5rem, 2rem + 1.5vw, 4rem); font-weight: 700; line-height: 1; letter-spacing: -0.02em; }
        .trust-item__title { color: #012130; font-size: clamp(1.25rem, 1.1rem + 0.5vw, 1.5rem); font-weight: 800; line-height: 1.4; }
        .trust-item__text { color: var(--text-body); font-size: var(--fs-body); font-weight: 400; line-height: 1.5; }
        @media (min-width: 768px) {
            .trust-grid { grid-template-columns: repeat(3, 1fr); }
        }

        /* ---------- 14. Partnership ---------- */
        .partner__title { color: var(--navy-800); font-size: var(--fs-h2); font-weight: 700; line-height: 1.15; letter-spacing: -0.01em; }
        .partner__row { display: flex; flex-direction: column; align-items: center; gap: clamp(1.5rem, 1rem + 2vw, 5rem); }
        .partner__desc { display: flex; flex-direction: column; justify-content: center; width: 100%; }
        .partner__text { color: var(--text-muted); font-size: var(--fs-lead); font-weight: 400; line-height: 1.7; }
        .diagram { display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 0.75rem; width: 100%; }
        .diagram__circle {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 7.5rem;
            height: 7.5rem;
            padding: 0.625rem;
            border-radius: 50%;
            border: 2px dashed #CCCCCC;
            background: var(--surface-soft);
            text-align: center;
        }
        .diagram__circle svg { width: 1.5rem; height: 1.5rem; margin-bottom: 0.3125rem; }
        .diagram__name { color: var(--navy-800); font-size: 0.8125rem; font-weight: 700; margin-bottom: 3px; }
        .diagram__desc { color: var(--text-muted); font-size: 0.6875rem; font-weight: 400; line-height: 1.3; }
        .diagram__dot { position: absolute; bottom: 0.5rem; width: 0.5rem; height: 0.5rem; border-radius: 50%; background: var(--blue-500); }
        .diagram__x { color: var(--blue-500); font-size: 2rem; font-weight: 700; margin: 0 -0.5rem; }
        .diagram__arrow { color: var(--blue-500); font-size: 1.75rem; flex-basis: 100%; text-align: center; transform: rotate(90deg); }
        .diagram__result {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            width: 100%;
            max-width: 20rem;
            min-height: 8.75rem;
            padding: 1rem;
            border-radius: 15px;
            border: 1px solid #0061A5;
            background: #FAFBFB;
            box-shadow: 0 0 20px 0 #043763;
        }
        .diagram__result svg { width: 1.5rem; height: 1.5rem; margin-bottom: 0.3125rem; }
        .diagram__result-title { color: #111C2D; font-size: 0.875rem; font-weight: 700; line-height: 1.2; text-align: center; }
        .diagram__result-text { color: var(--text-body); font-size: 0.875rem; font-weight: 400; line-height: 1.2; text-align: center; }
        .payment {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
            width: 100%;
            padding: var(--card-pad);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.53);
            box-shadow: 0 0 20px 0 #043763;
            background: var(--grad-navy);
        }
        .payment__content { display: flex; flex-direction: column; gap: 1.25rem; flex: 1 1 0; min-width: 0; }
        .payment__title { color: #FFFFFF; font-size: var(--fs-h3); font-weight: 700; line-height: 1.3; }
        .payment__text { color: #FFFFFF; font-size: var(--fs-lead); font-weight: 500; line-height: 1.6; }
        .payment__logo {
            width: 100%;
            max-width: 36.5rem;
            aspect-ratio: 584 / 168;
            border-radius: 15px;
            border: 1px solid #E6E6E6;
            background: #FFFFFF url('{{ asset('public/images/image-6.png') }}') center / contain no-repeat;
        }
        @media (min-width: 480px) {
            .diagram__arrow { flex-basis: auto; transform: none; }
            .diagram__result { width: 12.5rem; }
        }
        @media (min-width: 1024px) {
            .partner__row { flex-direction: row; }
            .partner__desc { flex: 0 1 45%; }
            .diagram { flex: 1 1 0; justify-content: flex-end; }
            .payment { flex-direction: row; align-items: center; gap: 2rem; }
            .payment__logo { width: 40%; flex-shrink: 0; }
        }

        /* ---------- 15. Team ---------- */
        /* Mobile: title → button → cards → dots. Tablet+: title and button share one row above the cards. */
        .team__stack { display: flex; flex-direction: column; gap: clamp(1.5rem, 1rem + 2vw, 2.5rem); }
        .team__title { order: 1; color: var(--navy-800); font-size: var(--fs-h2); font-weight: 700; line-height: 1.15; letter-spacing: -0.01em; }
        .team__cta { order: 2; align-self: flex-start; }
        .team-grid { order: 3; }
        .team__stack .dots { order: 4; }
        .team-grid {
            display: flex;
            gap: 1rem;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            padding-bottom: 0.5rem;
        }
        .team-grid::-webkit-scrollbar { display: none; }
        .team-card {
            flex: 0 0 85%;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding: 1.5rem;
            border-radius: 19px;
            border: 2px solid #A3C6FF;
            background: rgba(255, 255, 255, 0.38);
            scroll-snap-align: start;
        }
        .team-card__top { display: flex; justify-content: space-between; align-items: flex-start; }
        .avatar {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 3.75rem;
            height: 3.75rem;
            border-radius: 50%;
            background: var(--grad-avatar);
        }
        .avatar span { color: #FFFFFF; font-size: 1.4375rem; font-weight: 700; }
        .team-card__li { width: 2rem; height: 2rem; }
        .team-card__meta { display: flex; flex-direction: column; gap: 0.5rem; }
        .team-card__name { color: var(--navy-800); font-size: 1.125rem; font-weight: 700; line-height: 1.35; }
        .team-card__role { color: #3F7FD2; font-size: 0.875rem; font-weight: 600; line-height: 1.45; }
        .team-card__bio { color: var(--text-muted); font-size: 1rem; font-weight: 500; line-height: 1.6; }
        .dots { display: flex; justify-content: center; gap: 0.5rem; margin-top: 1rem; }
        .team-dot, .wf-dot { width: 0.5rem; height: 0.5rem; border-radius: 50%; background: #D0D5DD; transition: all 0.3s ease; cursor: pointer; }
        .team-dot-active, .wf-dot-active { width: 1.5rem; border-radius: 4px; background: var(--navy-800); }
        @media (min-width: 768px) {
            .team__stack {
                display: grid;
                grid-template-columns: 1fr auto;
                grid-template-areas: "title cta" "cards cards";
                align-items: center;
                column-gap: 2rem;
                row-gap: var(--stack);
            }
            .team__title { grid-area: title; }
            .team__cta { grid-area: cta; align-self: center; }
            .team-grid { grid-area: cards; display: grid; grid-template-columns: repeat(2, 1fr); gap: var(--gap); overflow: visible; scroll-snap-type: none; padding-bottom: 0; }
            .team-card { flex: auto; }
            .dots { display: none; }
        }
        @media (min-width: 1280px) {
            .team-grid { grid-template-columns: repeat(4, 1fr); }
        }

        /* ---------- 16. Workforce ---------- */
        .workforce__title { color: var(--navy-800); font-size: var(--fs-h2); font-weight: 700; line-height: 1.2; margin-bottom: var(--stack); }
        .workforce__intro { margin-bottom: var(--stack); }
        .workforce__text { color: var(--text-muted); font-size: var(--fs-lead); font-weight: 400; line-height: 1.6; }
        .wf-cards {
            display: flex;
            gap: 0;
            align-items: stretch;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
        }
        .wf-cards::-webkit-scrollbar { display: none; }
        .wf-card {
            flex: 0 0 100%;
            display: flex;
            gap: 1.25rem;
            padding: 1.5rem 0.5rem;
            scroll-snap-align: start;
        }
        .wf-card__icon { position: relative; width: 5rem; height: 5rem; }
        .wf-card__icon svg:first-child { position: absolute; inset: 0; width: 100%; height: 100%; }
        .wf-card__icon svg:last-child { position: absolute; top: 25%; left: 25%; width: 50%; height: 50%; }
        .wf-card__body { display: flex; flex-direction: column; gap: 0.75rem; flex: 1; min-width: 0; }
        .wf-card__num { color: var(--blue-400); font-size: 1.25rem; font-weight: 600; line-height: 1.2; }
        .wf-card__group { display: flex; flex-direction: column; gap: 0.3125rem; }
        .wf-card__title { color: var(--navy-800); font-size: clamp(1.5rem, 1.3rem + 0.8vw, 2.25rem); font-weight: 800; line-height: 1.3; }
        .wf-card__sub { color: var(--blue-400); font-size: clamp(1rem, 0.95rem + 0.3vw, 1.25rem); font-weight: 600; line-height: 1.4; }
        .wf-card__text { color: var(--text-muted); font-size: var(--fs-body); font-weight: 400; line-height: 1.6; }
        #workforce #worker-privacy { margin-bottom: 1.5rem; }
        @media (min-width: 768px) {
            .wf-cards { flex-direction: column; overflow: visible; scroll-snap-type: none; }
            .wf-card { flex: auto; gap: 1.875rem; padding: 2rem 0; border-bottom: 1px solid #C4C4C4; }
            .wf-card:last-child { border-bottom: 0; }
            .wf-card__icon { width: 6.25rem; height: 6.25rem; }
        }
        @media (min-width: 1024px) {
            .wf-cards { flex-direction: row; }
            .wf-card { flex: 1 1 0; flex-direction: column; padding: 1rem clamp(1rem, 0.5rem + 1.5vw, 2.5rem); border-bottom: 0; border-right: 1px solid #C4C4C4; }
            .wf-card:first-child { padding-left: 0; }
            .wf-card:last-child { border-right: 0; padding-right: 0; }
        }
        @media (min-width: 1280px) {
            .wf-card { flex-direction: row; }
        }

        /* ---------- 17. Worker privacy ---------- */
        .privacy__card {
            display: flex;
            align-items: center;
            gap: 1.25rem;
            width: 100%;
            padding: clamp(1.25rem, 1rem + 1vw, 1.875rem);
            border-radius: 15px;
            border: 0.5px solid #3265A1;
            background: rgba(255, 255, 255, 0.58);
        }
        .privacy__icon { width: 2.5rem; height: 2.5rem; }
        .privacy__body { display: flex; flex-direction: column; gap: 0.5rem; min-width: 0; }
        .privacy__title { color: var(--navy-800); font-size: clamp(1.125rem, 1rem + 0.5vw, 1.5rem); font-weight: 600; line-height: 1.3; }
        .privacy__text { color: var(--text-muted); font-size: clamp(0.9375rem, 0.9rem + 0.3vw, 1.25rem); font-weight: 600; line-height: 1.5; }
        @media (min-width: 768px) {
            .privacy__icon { width: 3.375rem; height: 3.375rem; }
        }

        /* ---------- 18. Contact ---------- */
        .contact__grid { display: grid; grid-template-columns: 1fr; gap: var(--stack); align-items: stretch; }
        .contact__info { display: flex; flex-direction: column; gap: clamp(1.5rem, 1rem + 2vw, 2.5rem); }
        .contact__head { display: flex; flex-direction: column; gap: clamp(1rem, 0.75rem + 1.25vw, 1.875rem); }
        .contact__title { color: var(--navy-800); font-size: var(--fs-h2); font-weight: 700; line-height: 1.2; }
        .contact__lead { color: var(--text-muted); font-size: var(--fs-lead); font-weight: 400; line-height: 1.4; max-width: 40rem; }
        .contact__list { display: flex; flex-direction: column; gap: 0.9375rem; }
        .contact__item { display: flex; align-items: center; gap: 0.9375rem; }
        .contact__item svg { width: 1.375rem; height: 1.375rem; }
        .contact__item a, .contact__item span { color: var(--navy-800); font-size: 1rem; font-weight: 500; text-decoration: none; }
        .quote {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 2rem;
            padding: clamp(1.25rem, 1rem + 1vw, 1.875rem);
            border-left: 4px solid var(--blue-400);
        }
        .quote__text { color: var(--navy-800); font-size: clamp(1.0625rem, 1rem + 0.4vw, 1.5rem); font-weight: 600; line-height: 1.35; letter-spacing: 0.03em; max-width: 37rem; }
        .quote__author { display: flex; align-items: flex-end; gap: 1.25rem; }
        .quote__meta { display: flex; flex-direction: column; gap: 0.3125rem; }
        .quote__name { color: #3265A1; font-size: 1rem; font-weight: 800; line-height: 1.5; letter-spacing: 0.03em; }
        .quote__role { color: #3265A1; font-size: 0.875rem; font-weight: 400; line-height: 1.5; }
        /* The form sits in a soft card so it carries the same visual weight as the text column beside it */
        .form {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
            padding: var(--card-pad);
            border-radius: var(--radius);
            border: 1px solid var(--line);
            background: var(--surface-tint);
        }
        .form__row { display: grid; grid-template-columns: 1fr; gap: 1.25rem; }
        .field { display: flex; flex-direction: column; gap: 0.5rem; }
        .field label { color: var(--navy-800); font-size: 0.875rem; font-weight: 600; }
        .field .req { color: #EF4444; }
        .field input, .field textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            border: 1px solid #D1D5DB;
            background: #FFFFFF;
            font-size: 1rem;
        }
        .field textarea { min-height: 7.5rem; resize: vertical; }
        .form__submit { padding: 1rem 1.5rem; border-radius: 10px; background: linear-gradient(90deg, #045194 0%, #042F55 222.06%); color: #FFFFFF; font-size: 1rem; font-weight: 600; margin-top: 1.25rem; }
        .form__hint { text-align: center; color: var(--text-muted); font-size: 0.8125rem; }
        @media (min-width: 600px) {
            .form__row { grid-template-columns: 1fr 1fr; }
        }
        @media (min-width: 1024px) {
            .contact__grid { grid-template-columns: 1fr 1fr; }
        }

        /* ---------- 19. Footer ---------- */
        .footer {
            padding-block: clamp(2rem, 1.5rem + 2vw, 2.5rem);
            background: var(--grad-navy);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        .footer__grid { display: grid; grid-template-columns: 1fr; gap: 2rem; margin-bottom: 2.5rem; }
        .footer__col { display: flex; flex-direction: column; gap: 1.25rem; min-width: 0; }
        .footer__divider { display: none; }
        .footer__logo { width: 12.5rem; max-width: 100%; aspect-ratio: 4 / 1; background: url('{{ asset('public/images/Rectangle-119.png') }}') center / contain no-repeat; }
        .footer__tagline { color: #A8C9FF; font-size: 1rem; font-weight: 500; line-height: 1.25; letter-spacing: 0.0375em; }
        .footer__text { color: #C4C4C4; font-size: 0.875rem; font-weight: 500; line-height: 1.67; letter-spacing: 0.04em; }
        .footer__pill { align-self: flex-start; padding: 0.5rem 0.75rem; border-radius: 5px; border: 1px solid #C4C4C4; background: rgba(37, 99, 235, 0.2); }
        .footer__pill span { color: #C4C4C4; font-size: 0.875rem; font-weight: 500; }
        .footer__heading { color: #FFFFFF; font-size: 1.125rem; font-weight: 700; margin-bottom: 1.25rem; }
        .footer__list { list-style: none; padding: 0; display: flex; flex-direction: column; gap: 0.75rem; }
        .footer__list--spaced { gap: 1.125rem; }
        .footer__list li { display: flex; align-items: center; gap: 0.75rem; }
        .footer__list a, .footer__list span { color: #C4C4C4; font-size: 0.875rem; font-weight: 500; text-decoration: none; }
        .footer__list svg { width: 1.25rem; height: 1.25rem; }
        .footer__partners { display: flex; flex-direction: column; gap: 1.125rem; }
        .footer__partner { display: flex; align-items: flex-start; gap: 0.75rem; }
        .footer__partner svg { margin-top: 2px; }
        .footer__partner div { display: flex; flex-direction: column; gap: 0.5rem; }
        .footer__partner-label { color: #A8C9FF; font-size: 0.875rem; font-weight: 500; }
        .footer__partner-name { color: #FFFFFF; font-size: 1rem; font-weight: 700; }
        .footer__llc { display: flex; align-items: center; gap: 0.5rem; }
        .footer__llc span { color: #FFFFFF; font-size: 0.8125rem; font-weight: 600; }
        .footer__copy { border-top: 1px solid rgba(255, 255, 255, 0.2); padding-top: 1.25rem; text-align: center; }
        .footer__copy p { color: #C4C4C4; font-size: 0.8125rem; font-weight: 500; line-height: 1.67; letter-spacing: 0.035em; }
        @media (min-width: 768px) {
            .footer__grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (min-width: 1024px) {
            .footer__grid { grid-template-columns: repeat(4, 1fr); gap: var(--gap); }
            .footer__col + .footer__col { border-left: 1px solid rgba(255, 255, 255, 0.2); padding-left: var(--gap); }
        }
    </style>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-white text-gray-900">
    <!-- Navigation -->
    <nav class="nav">
        <div id="nav-inner" class="nav__inner container">
            <img src="{{ asset('public/images/logo.png') }}" alt="Karama Data" class="nav__logo">
            <div id="nav-desktop-links" class="nav__links">
                <a href="#why-arabic" class="nav__link">Why Arabic</a>
                <a href="#results" class="nav__link">Results</a>
                <a href="#services" class="nav__link">Services</a>
                <a href="#about" class="nav__link">About</a>
                <a href="#workforce" class="nav__link">Our Workforce</a>
                <button class="btn btn--navy">Get in Touch</button>
            </div>
            <!-- Hamburger — mobile / tablet only -->
            <button id="mobile-hamburger" class="nav__burger" onclick="toggleMobileMenu()" aria-label="Open menu">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#01213D" stroke-width="2.5" stroke-linecap="round">
                    <line x1="3" y1="6"  x2="21" y2="6"/>
                    <line x1="3" y1="12" x2="21" y2="12"/>
                    <line x1="3" y1="18" x2="21" y2="18"/>
                </svg>
            </button>
        </div>
        <!-- Mobile dropdown menu (display toggled by JS) -->
        <div id="mobile-menu-dropdown" class="nav__menu" style="display: none;">
            <a href="#why-arabic" onclick="closeMobileMenu()" class="nav__menu-link">Why Arabic</a>
            <a href="#results"    onclick="closeMobileMenu()" class="nav__menu-link">Results</a>
            <a href="#services"   onclick="closeMobileMenu()" class="nav__menu-link">Services</a>
            <a href="#about"      onclick="closeMobileMenu()" class="nav__menu-link">About</a>
            <a href="#workforce"  onclick="closeMobileMenu()" class="nav__menu-link">Our Workforce</a>
            <a href="#contact"    onclick="closeMobileMenu()" class="nav__menu-cta">Get in Touch</a>
        </div>
    </nav>

    <!-- Hero Section - Section 1 (Figma Design) -->
    <div id="hero-section" class="hero">
        <div class="hero__inner container">
            <div class="hero__content">
                <div id="hero-headline" class="hero__title">Your Arabic AI is only as good as the humans who train it .</div>
                <div id="hero-subtext" class="hero__subtitle">91% accuracy, benchmarked against published research. US-incorporated. No shortcuts.</div>
                <a href="#contact-section" id="hero-btn-primary" class="hero__btn btn btn--light" style="text-decoration: none;">
                    <div>Start Your Project</div>
                </a>
                <a href="#results" id="hero-btn-secondary" class="hero__btn btn btn--ghost" style="text-decoration: none;">
                    <div>See Our Results</div>
                </a>
            </div>
            <!-- Divider line (mobile only) -->
            <div id="hero-divider" class="hero__divider"></div>
            <!-- Trust cards (mobile: 2×2 grid inside hero — tablet+: row hanging below hero) -->
            <div id="hero-trust-cards" class="trust-strip">

                {{-- Card 1: AI & Cybersecurity --}}
                <div class="trust-card">
                    <svg width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M37.5 8.36875L37.4813 9.8875L37.485 18.0831L37.4944 20.32C37.5431 29.9538 32.3137 35.8619 28.0256 39.0812L27.0563 39.775L25.7006 40.6469L24.8869 41.1156L24.1706 41.5019L23.0794 42.025L22.5413 42.25L21.9769 42.0138L21.4725 41.7812L20.8388 41.4663L19.8862 40.9506L18.795 40.2944L17.8425 39.6644C13.5919 36.7281 7.93687 31.0731 7.52437 21.6325V21.625H11.3194C11.8387 28.3862 15.3412 33.4938 20.6906 37.2794L21.75 37.9956L22.5525 38.5L22.7531 38.38L24.0131 37.5363C29.7863 33.4806 33.3544 28.1688 33.7181 20.98L33.75 19.6075L33.7331 16.4181L33.7275 11.0275L22.5638 8.5L18.75 9.3625V5.66688L22.5394 4.75L37.5 8.36875ZM12.1125 9.53125L16.875 11.3125L12.1125 13.0938L10.3125 17.875L8.53125 13.0938L3.75 11.3125L8.53125 9.53125L10.3125 4.75L12.1125 9.53125Z" fill="#548ED3"/>
                    </svg>
                    <div>
                        <div class="trust-title">AI & Cybersecurity</div>
                        <div class="trust-subtitle">Founded by AI & Cybersecurity Experts</div>
                    </div>
                </div>

                {{-- Card 2: 5+ Dialects --}}
                <div class="trust-card">
                    <svg width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5 2.8125C11.6156 2.8125 2.8125 11.6156 2.8125 22.5C2.8125 33.3844 11.6156 42.1875 22.5 42.1875C33.3844 42.1875 42.1875 33.3844 42.1875 22.5C42.1875 11.6156 33.3844 2.8125 22.5 2.8125ZM23.7305 38.7773V30.6299C25.4742 30.7515 27.1889 31.1398 28.8149 31.7812C28.4502 32.8623 28.0283 33.8599 27.5405 34.7607C26.7759 36.1846 25.8794 37.3228 24.9478 38.061C24.5435 38.3774 24.1392 38.6191 23.7305 38.7817V38.7773ZM21.2695 38.7773C20.8652 38.6147 20.4565 38.3774 20.0522 38.0566C19.1206 37.3228 18.2197 36.1802 17.4551 34.7563C16.9717 33.8511 16.5454 32.8535 16.1807 31.7769C17.8154 31.1353 19.5161 30.7529 21.2695 30.6299V38.7773ZM21.2695 28.1646C19.2568 28.2876 17.3232 28.7139 15.5171 29.3994L15.5039 29.3467C15.0996 27.5581 14.8579 25.6772 14.7876 23.7305H21.2695V28.1646ZM21.2695 21.2695H14.7876C14.8579 19.3271 15.0996 17.4419 15.5039 15.6533L15.5171 15.6006C17.3232 16.2861 19.2524 16.7124 21.2695 16.8354V21.2695ZM21.2695 14.3701C19.5258 14.2485 17.8111 13.8602 16.1851 13.2187C16.5498 12.1377 16.9717 11.1401 17.4595 10.2393C18.2241 8.81543 19.1206 7.67285 20.0566 6.93896C20.4609 6.62256 20.8652 6.38086 21.2739 6.21826V14.3701H21.2695ZM23.7305 14.3701V6.22266C24.1348 6.38525 24.5435 6.62256 24.9478 6.94336C25.8794 7.67725 26.7759 8.81543 27.5405 10.2393C28.0239 11.1445 28.4502 12.1421 28.8149 13.2187C27.1889 13.8602 25.4742 14.2485 23.7305 14.3701ZM23.7305 21.2695V16.8354C25.7432 16.7124 27.6768 16.2861 29.4829 15.6006L29.4961 15.6533C29.9004 17.4419 30.1421 19.3228 30.2124 21.2695H23.7305ZM23.7305 28.1646V23.7305H30.2124C30.1421 25.6729 29.9004 27.5581 29.4961 29.3467L29.4829 29.3994C27.6387 28.7001 25.6993 28.2837 23.7305 28.1646ZM6.02051 21.2695H12.3267C12.4102 18.8877 12.7266 16.6245 13.2363 14.5635C11.9487 13.8779 10.749 13.0518 9.65479 12.1069C7.53411 14.7172 6.26558 17.9153 6.02051 21.2695ZM6.02051 23.7305C6.26558 27.0847 7.53411 30.2828 9.65479 32.8931C10.7535 31.9435 11.9548 31.1195 13.2363 30.4365C12.7266 28.3755 12.4102 26.1123 12.3267 23.7305H6.02051ZM38.9795 23.7305H32.6733C32.5898 26.1123 32.2734 28.3755 31.7637 30.4365C33.0452 31.1195 34.2465 31.9435 35.3452 32.8931C37.4659 30.2828 38.7344 27.0847 38.9795 23.7305ZM38.9795 21.2695C38.7344 17.9153 37.4659 14.7172 35.3452 12.1069C34.251 13.0518 33.0513 13.8779 31.7637 14.5635C32.2734 16.6245 32.5898 18.8877 32.6733 21.2695H38.9795Z" fill="#548ED3"/>
                    </svg>
                    <div>
                        <div class="trust-title">5+ Dialects</div>
                        <div class="trust-subtitle">Arabic Dialect Variants</div>
                    </div>
                </div>

                {{-- Card 3: Multi-layer QA --}}
                <div class="trust-card">
                    <svg width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M37.0594 28.7869L41.25 30.8814L22.5 40.2563L3.75 30.8814L7.94063 28.7869L22.5 36.0678L37.0594 28.7869ZM22.5 21.5063L24.4856 22.5001L22.5 23.4936L20.5143 22.5001L22.5 21.5063Z" fill="#548ED3"/>
                        <path d="M37.0612 20.4038L41.25 22.4997L22.5 31.8747L3.75 22.4997L7.93878 20.4038L22.5 27.6861L37.0612 20.4038Z" fill="#548ED3"/>
                        <path d="M22.5 4.74365L41.25 14.1187L22.5 23.4936L3.75 14.1187L22.5 4.74365Z" fill="#548ED3"/>
                    </svg>
                    <div>
                        <div class="trust-title">Multi-layer QA</div>
                        <div class="trust-subtitle">Full QA Review Process</div>
                    </div>
                </div>

                {{-- Card 4: RLHF Agreement --}}
                <div class="trust-card">
                    <svg width="30" height="30" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5 30V39.375M30 27.4481V39.375M37.5 19.98V39.375M41.25 5.625L25.0388 21.8362C24.9517 21.9236 24.8482 21.9928 24.7343 22.0401C24.6204 22.0873 24.4983 22.1117 24.375 22.1117C24.2517 22.1117 24.1296 22.0873 24.0157 22.0401C23.9018 21.9928 23.7983 21.9236 23.7112 21.8362L17.5388 15.6638C17.3629 15.488 17.1245 15.3893 16.8759 15.3893C16.6273 15.3893 16.3889 15.488 16.2131 15.6638L3.75 28.125M7.5 34.6181V39.375M15 27.48V39.375" stroke="#548ED3" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div>
                        <div class="trust-title">RLHF Agreement</div>
                        <div class="trust-subtitle">Kappa .62</div>
                    </div>
                </div>

            </div>{{-- /hero-trust-cards --}}
        </div>
    </div>

    <!-- Why Arabic Section - Figma Design -->
    <section id="why-arabic" class="section section--soft">
        <div class="why__grid container">
            <div class="why__media">
                <img src="{{ asset('public/images/human-ai-interaction.png') }}" alt="Why Arabic" class="why__img">
            </div>
            <div>
                <div class="why__title">
                    <span style="color: #043763;">Why Arabic?</span>
                    <span class="accent">Why Now?</span>
                </div>
                <p class="lead why__text">Arabic is one of the most spoken languages on earth — and one of the most underserved in AI. That gap is why enterprise buyers are reaching out, and why the quality of annotation data has never mattered more.</p>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats-section" class="section section--soft section--flush-top">
        <div class="container">
            <div class="stats__card">
                <div>
                    <div class="stats__num">400M+</div>
                    <div class="stats__label">Arabic speakers worldwide</div>
                    <p class="stats__text">Arabic is the fifth most spoken language in the world, spanning 22 countries across the Middle East and North Africa — yet AI systems routinely fail to understand the people who speak it.</p>
                </div>
                <div class="stats__divider"></div>
                <div>
                    <div class="stats__num">&lt;1%</div>
                    <div class="stats__label">of NLP research covers Arabic</div>
                    <p class="stats__text">Despite hundreds of millions of speakers, Arabic receives a fraction of the research attention that English does. The training data infrastructure is just getting started — and the companies who invest now will have a significant head start.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Translation & MSA Section - Figma Design -->
    <section id="translation-section" class="section section--soft section--flush-top">
        <div class="container">
            <div class="split-card">
                <div class="callouts">
                    <div class="callout">
                        <h3 class="callout__title">The Translation Shortcut</h3>
                        <p class="callout__text">Most "Arabic" AI training data is machine-translated English. It misses cultural context, dialect nuance, and the way Arabic is actually spoken day to day.</p>
                    </div>
                    <div class="callout">
                        <h3 class="callout__title">The MSA Assumption</h3>
                        <p class="callout__text">Models trained on Modern Standard Arabic sound robotic to real users who speak Levantine, Khaleeji, Egyptian, or Maghrebi every day. Dialect matters.</p>
                    </div>
                </div>
                <div class="split-card__media split-card__media--first">
                    <img src="{{ asset('public/images/Rectangle-89.png') }}" alt="Arabic Training Data" class="split-card__img">
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Section - Figma Design -->
    <section id="results" class="section section--white">
        <div class="container">
            <div class="results__head">
                <div>
                    <div class="title-xl" style="margin-bottom: 1.25rem;">
                        <span style="color: #043763;">Quality We Can </span>
                        <span class="accent">Prove</span>
                    </div>
                    <p class="lead results__lead">In our first structured pilot, two Palestinian annotators in Gaza completed 3,031 annotation tasks across three task types — every result benchmarked against published international standards.</p>
                </div>
            </div>

            <!-- Metric Cards -->
            <div class="metrics metric-cards-container">
                <!-- Card 1: Tasks completed (blue) -->
                <div class="metric metric-card">
                    <div class="metric__body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none" class="metric__icon">
                            <circle cx="20.5" cy="20.5" r="18" stroke="#488EFF" stroke-width="2.5" fill="none"/>
                            <path d="M13 20.5l5.5 5.5 9.5-10" stroke="#488EFF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                        </svg>
                        <div class="metric__value text-blue">3,031</div>
                        <div class="metric__label">Tasks completed</div>
                        <div class="metric__note text-blue">100% completion rate</div>
                    </div>
                    <div class="metric__bar bg-blue"></div>
                </div>

                <!-- Card 2: Top accuracy (green) -->
                <div class="metric metric-card">
                    <div class="metric__body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none" class="metric__icon">
                            <path d="M25.4277 10.1709V12.7136H33.801L22.8849 23.6297L17.4269 18.1717C17.1885 17.9333 16.8652 17.7994 16.5281 17.7994C16.191 17.7994 15.8676 17.9333 15.6292 18.1717L2.54297 31.2579L4.34069 33.0556L16.5281 20.8682L21.9861 26.3262C22.2245 26.5646 22.5478 26.6985 22.8849 26.6985C23.2221 26.6985 23.5454 26.5646 23.7838 26.3262L35.5987 14.5114V22.8846H38.1414V10.1709H25.4277Z" fill="#0CD247"/>
                        </svg>
                        <div class="metric__value text-green">91.4%</div>
                        <div class="metric__label">Top accuracy</div>
                        <div class="metric__note" style="color: #00A651;">preference Ranking</div>
                    </div>
                    <div class="metric__bar bg-green"></div>
                </div>

                <!-- Card 3: RLHF Kappa (purple) -->
                <div class="metric metric-card">
                    <div class="metric__body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none" class="metric__icon">
                            <path d="M22.4043 18.6587L24.5973 31.0004C24.6218 31.1457 24.6014 31.295 24.5388 31.4285C24.4762 31.5619 24.3744 31.673 24.2469 31.747C24.1194 31.821 23.9724 31.8542 23.8255 31.8424C23.6785 31.8305 23.5388 31.7741 23.4248 31.6807L18.2426 27.7912C17.9924 27.6043 17.6885 27.5033 17.3763 27.5033C17.064 27.5033 16.7601 27.6043 16.5099 27.7912L11.3191 31.6792C11.2052 31.7725 11.0655 31.8288 10.9188 31.8407C10.7721 31.8526 10.6252 31.8194 10.4978 31.7456C10.3704 31.6719 10.2686 31.561 10.2058 31.4279C10.143 31.2947 10.1224 31.1456 10.1466 31.0004L12.3381 18.6587" stroke="#8B5CF6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.3707 20.2654C22.1674 20.2654 26.0559 16.3769 26.0559 11.5802C26.0559 6.78351 22.1674 2.89502 17.3707 2.89502C12.574 2.89502 8.68555 6.78351 8.68555 11.5802C8.68555 16.3769 12.574 20.2654 17.3707 20.2654Z" stroke="#8B5CF6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="metric__value text-purple">0.623</div>
                        <div class="metric__label">RLHF Kappa score</div>
                        <div class="metric__note text-purple">1 vs 0.27 - 0.39</div>
                    </div>
                    <div class="metric__bar bg-purple"></div>
                </div>

                <!-- Card 4: Team throughput (orange) -->
                <div class="metric metric-card">
                    <div class="metric__body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none" class="metric__icon">
                            <path d="M21 3L5 21h13l-1 14 16-18H20L21 3z" fill="#F59E0B"/>
                        </svg>
                        <div class="metric__value text-amber">470/hr</div>
                        <div class="metric__label">Team throughput</div>
                        <div class="metric__note text-amber">2-labeler pilot team</div>
                    </div>
                    <div class="metric__bar bg-amber"></div>
                </div>
            </div>

            <!-- Result Cards -->
            <div class="results__grid">
                <div class="result">
                    <div class="result__stripe bg-green"></div>
                    <div class="result__body">
                        <div class="result__head">
                            <h3 class="result__title">Preference Ranking</h3>
                            <div class="badge badge--green">
                                <span>Above Benchmark</span>
                            </div>
                        </div>
                        <p class="result__meta">667 items - RLHF / Model Alignment</p>
                        <div class="result__block">
                            <div class="result__row">
                                <span class="result__key">Avg accuracy</span>
                                <span class="result__val text-green">88.6%</span>
                            </div>
                            <div class="bar">
                                <div class="bar__fill bg-green" style="width: 88.6%;"></div>
                            </div>
                        </div>
                        <p class="result__bench">Benchmark: 83–87% (major AI labs)</p>
                        <div class="result__kappa">
                            <p class="result__key">Cohen's Kappa</p>
                            <div class="result__row">
                                <span class="result__val result__val--big text-green">0.623</span>
                            </div>
                            <div class="bar bar--thick">
                                <div class="bar__fill bg-green" style="width: 62.3%;"></div>
                            </div>
                            <p class="result__bench">Benchmark: 0.57–0.83 (OpenAI/NVIDIA)</p>
                        </div>
                        <div class="note note--green">
                            <p class="best-labeler-note">Best labeler: 91.4% - No Arabic RLHF benchmark exists — first-of-kind data</p>
                        </div>
                    </div>
                </div>

                <div class="result">
                    <div class="result__stripe bg-purple"></div>
                    <div class="result__body">
                        <div class="result__head">
                            <h3 class="result__title">Dialect Identification</h3>
                            <div class="badge badge--purple">
                                <span>On Par</span>
                            </div>
                        </div>
                        <p class="result__meta">960 items - MSA, Levantine, Gulf, Egyptian, Iraqi, Maghrebi</p>
                        <div class="result__block">
                            <div class="result__row">
                                <span class="result__key">Avg accuracy</span>
                                <span class="result__val text-purple">71.2%</span>
                            </div>
                            <div class="bar">
                                <div class="bar__fill bg-purple" style="width: 71.2%;"></div>
                            </div>
                        </div>
                        <p class="result__bench">Benchmark: 65–80% (NADI 2024)</p>
                        <div class="result__kappa">
                            <p class="result__key">Cohen's Kappa</p>
                            <div class="result__row">
                                <span class="result__val result__val--big text-purple">0.572</span>
                            </div>
                            <div class="bar bar--thick">
                                <div class="bar__fill bg-purple" style="width: 57.2%;"></div>
                            </div>
                            <p class="result__bench">Benchmark: 0.59 (NADI 2024, Palestinian Arabic)</p>
                        </div>
                        <div class="note note--purple">
                            <p class="best-labeler-note">Best labeler: 77% - Compared against the largest Arabic dialect competition globally</p>
                        </div>
                    </div>
                </div>

                <div class="result">
                    <div class="result__stripe bg-amber"></div>
                    <div class="result__body">
                        <div class="result__head">
                            <h3 class="result__title">Sentiment Tagging</h3>
                            <div class="badge badge--amber">
                                <span>Near Target</span>
                            </div>
                        </div>
                        <p class="result__meta">667 items - RLHF / Model Alignment</p>
                        <div class="result__block">
                            <div class="result__row">
                                <span class="result__key">Avg accuracy</span>
                                <span class="result__val text-amber">62.5%</span>
                            </div>
                            <div class="bar">
                                <div class="bar__fill bg-amber" style="width: 62.5%;"></div>
                            </div>
                        </div>
                        <p class="result__bench">Benchmark: 60–75% (AraSenTi-Tweet)</p>
                        <div class="result__kappa">
                            <p class="result__key">Cohen's Kappa</p>
                            <div class="result__row">
                                <span class="result__val result__val--big text-amber">0.532</span>
                            </div>
                            <div class="bar bar--thick">
                                <div class="bar__fill bg-amber" style="width: 53.2%;"></div>
                            </div>
                            <p class="result__bench">Target: 0.66–0.70 (Arabic NLP)</p>
                        </div>
                        <div class="note note--amber">
                            <p class="best-labeler-note">Best labeler: 73.2% - Guideline improvement identified & incorporated into SOP</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner Section -->
    <section id="cta-banner" class="cta section--white">
        <div class="cta__stack container">
            <!-- Banner -->
            <div class="banner">
                <p class="banner__text">Benchmarked against published research: NADI 2024 (ACI/WANLP) · AraSenti-Tweet · ASAD Corpus · MultiPref 2024 · HelperBot 2024. On Preference Ranking — the highest-value task for AI companies — our Kappa of 0.623 significantly outperforms figures published by OpenAI and NVIDIA.</p>
                <button class="btn btn--blue">
                    Request a Pilot
                </button>
            </div>

            <!-- Section Heading -->
            <div class="section-head">
                <h2 class="section-head__title">Arabic Dialect Annotation Services</h2>
                <p class="section-head__lead">We specialize exclusively in Arabic language data annotation — covering major dialect families — for organizations building the next generation of Arabic-language AI systems.</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services section--white">
        <div class="container">
            <!-- Services Grid -->
            <div class="services__grid">
                <!-- NLP Annotation Card -->
                <div class="service">
                    <div class="service__head">
                        <svg width="40" height="40" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" class="service__icon">
                            <circle cx="43.5" cy="43.5" r="43.5" fill="#E8F1FF"/>
                        </svg>
                        <h3 class="service__title">NLP Annotation</h3>
                    </div>
                    <p class="service__tag">Native dialect labels that improve your model's real-world accuracy.</p>
                    <p class="service__text">Named entity recognition, sentiment analysis, intent classification, and text categorization across Levantine, Gulf, Egyptian, and Maghrebi dialects.</p>
                </div>

                <!-- ASR Data Annotation Card -->
                <div class="service">
                    <div class="service__head">
                        <svg width="40" height="40" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" class="service__icon">
                            <circle cx="43.5" cy="43.5" r="43.5" fill="#E8F1FF"/>
                        </svg>
                        <h3 class="service__title">ASR Data Annotation</h3>
                    </div>
                    <p class="service__tag">Speech models that actually understand how Arabic is spoken, not just written.</p>
                    <p class="service__text">Speech transcription, phonetic labeling, speaker diarization, and audio quality validation for Arabic automatic speech recognition training pipelines.</p>
                </div>

                <!-- RLHF & Preference Ranking Card -->
                <div class="service">
                    <div class="service__head">
                        <svg width="40" height="40" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" class="service__icon">
                            <circle cx="43.5" cy="43.5" r="43.5" fill="#E8F1FF"/>
                        </svg>
                        <h3 class="service__title">RLHF & Preference Ranking</h3>
                    </div>
                    <p class="service__tag">Human feedback data that makes your Arabic LLM safer, more helpful, and culturally aligned.</p>
                    <p class="service__text">Response ranking, preference pair collection, and reinforcement learning from human feedback (RLHF) data — delivered by native Arabic speakers who understand dialect nuance and cultural context.</p>
                    <p class="service__star">⭐ Key Capability</p>
                </div>

                <!-- Conversational AI Card -->
                <div class="service">
                    <div class="service__head">
                        <svg width="40" height="40" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" class="service__icon">
                            <circle cx="43.5" cy="43.5" r="43.5" fill="#E8F1FF"/>
                        </svg>
                        <h3 class="service__title">Conversational AI</h3>
                    </div>
                    <p class="service__tag">Chatbot training data that feels natural to real Arabic speakers, not translated English.</p>
                    <p class="service__text">Dialogue annotation, response ranking, and conversation flow labeling for Arabic-language chatbots and virtual assistants.</p>
                </div>

                <!-- Quality Assurance Card -->
                <div class="service">
                    <div class="service__head">
                        <svg width="40" height="40" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" class="service__icon">
                            <circle cx="43.5" cy="43.5" r="43.5" fill="#E8F1FF"/>
                        </svg>
                        <h3 class="service__title">Quality Assurance</h3>
                    </div>
                    <p class="service__tag">Documented QA reports with every delivery — no black-box quality claims.</p>
                    <p class="service__text">Multi-layer review with inter-annotator agreement measurement, senior reviewer sign-off, and structured QA reporting delivered with every project.</p>
                </div>

                <!-- Enterprise Compliance Card -->
                <div class="service">
                    <div class="service__head">
                        <svg width="40" height="40" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" class="service__icon">
                            <circle cx="43.5" cy="43.5" r="43.5" fill="#E8F1FF"/>
                        </svg>
                        <h3 class="service__title">Enterprise Compliance</h3>
                    </div>
                    <p class="service__tag">A vendor your procurement team can approve on the first pass.</p>
                    <p class="service__text">US-incorporated, domestically owned. No content moderation work. Structured data handling with privacy-first practices that meet enterprise procurement requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="section section--white section--flush-top">
        <div class="container">
            <div class="banner">
                <p class="banner__text">We price for quality, not volume. Engagements are scoped based on dialect requirements, QA depth, and throughput needs — not race-to-the-bottom per-task rates. Contact us to discuss your project.</p>
                <button class="btn btn--blue">
                    Start Your Project
                </button>
            </div>
        </div>
    </section>

    <!-- Enterprise Trust Section -->
    <section id="about" class="section section--soft">
        <div class="stack container">
            <!-- Section Header -->
            <div class="section-head">
                <h2 class="section-head__title about__title" style="font-weight: 700;">Built for Enterprise <span class="accent">Trust</span></h2>
                <p class="about__lead">Karama Data is a US-incorporated LLC with domestic ownership and a leadership team with deep expertise in AI, enterprise technology, and regional operations.</p>
            </div>

            <!-- Compliance Heading -->
            <div>
                <h3 class="title-lg">A structure built on trust and compliance</h3>
            </div>

            <!-- Trust Cards -->
            <div class="trust-grid">
                <!-- Card 1 -->
                <div class="trust-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="trust-item__icon">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" fill="#488EFF"/>
                    </svg>
                    <div class="trust-item__num">01</div>
                    <h4 class="trust-item__title">US-Based Leadership</h4>
                    <p class="trust-item__text">US-based board leadership and domestic ownership that ensures accountability and alignment with enterprise standards.</p>
                </div>

                <!-- Card 2 -->
                <div class="trust-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="trust-item__icon">
                        <path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm0 20c-4.97 0-9-4.03-9-9s4.03-9 9-9 9 4.03 9 9-4.03 9-9 9zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 9 15.5 9 14 9.67 14 10.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 9 8.5 9 7 9.67 7 10.5 7.67 12 8.5 12zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" fill="#488EFF"/>
                    </svg>
                    <div class="trust-item__num">02</div>
                    <h4 class="trust-item__title">Enterprise Compliance</h4>
                    <p class="trust-item__text">A structure that meets enterprise compliance requirements and instills client confidence.</p>
                </div>

                <!-- Card 3 -->
                <div class="trust-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="trust-item__icon">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" fill="#488EFF"/>
                    </svg>
                    <div class="trust-item__num">03</div>
                    <h4 class="trust-item__title">Regional Operations</h4>
                    <p class="trust-item__text">Our operational presence is in the region, giving us authentic access to the linguistic talent our clients need.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnership Section -->
    <section id="partnership" class="section section--white">
        <div class="stack container">
            <!-- Main Title -->
            <h2 class="partner__title">Stronger together for lasting impact</h2>

            <!-- Partnership Description & Diagram Row -->
            <div class="partner__row">
                <!-- Left: Partnership Description -->
                <div class="partner__desc">
                    <p class="partner__text">We operate in partnership with Gaza Children Village (GCV), providing operational infrastructure and community ties that allow us to build and retain a stable, highly-qualified annotator workforce.</p>
                </div>

                <!-- Right: Partnership Diagram (Horizontal) -->
                <div class="diagram">
                    <!-- Karama Data Circle -->
                    <div class="diagram__circle">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3-8c0 1.66-1.34 3-3 3s-3-1.34-3-3 1.34-3 3-3 3 1.34 3 3z" fill="#488EFF"/>
                        </svg>
                        <div class="diagram__name">Karama Data</div>
                        <div class="diagram__desc">AI Expertise, Technology, Quality Standards</div>
                        <div class="diagram__dot"></div>
                    </div>
                    <!-- X Symbol -->
                    <div class="diagram__x">×</div>
                    <!-- GCV Circle -->
                    <div class="diagram__circle">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm0 7c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4zm6 5H3v-2c0-1.5 3.33-2.5 6-2.5s6 1 6 2.5v2z" fill="#488EFF"/>
                        </svg>
                        <div class="diagram__name">GCV</div>
                        <div class="diagram__desc">Regional Operations, Infrastructure, Community Impact</div>
                        <div class="diagram__dot"></div>
                    </div>
                    <!-- Arrow Right -->
                    <div class="diagram__arrow">→</div>
                    <!-- Result Box -->
                    <div class="diagram__result">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm0 7c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4zm6 5H6v-2c0-1.5 3.33-2.5 6-2.5s6 1 6 2.5v2z" fill="#488EFF"/>
                        </svg>
                        <p class="diagram__result-title">Stable, Highly-Qualified Workforce</p>
                        <p class="diagram__result-text">Better quality, stronger outcomes, lasting impact</p>
                    </div>
                </div>
            </div>

            <!-- Payment & Regional Access Box -->
            <div id="payment-access" class="payment">
                <!-- Left Content -->
                <div class="payment__content">
                    <h3 class="payment__title">Payment & Regional Access</h3>
                    <p class="payment__text">Our payment corridor runs through Gaza Children Village (GCV) — a nonprofit already equipped to move compliant payments into the region.</p>
                </div>

                <!-- Right: GCV Logo -->
                <div class="payment__logo"></div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team-section" class="section section--white">
        <div class="team__stack container">
            <!-- Start Project Button -->
            <button class="btn btn--grad team__cta">
                Start Your Project →
            </button>

            <!-- Section Title -->
            <h2 class="team__title">Meet the people behind Karama Data</h2>

            <!-- Team Grid -->
            <div id="team-grid" class="team-grid">
                <!-- Laura Mather Card -->
                <div class="team-card">
                    <div class="team-card__top">
                        <div class="avatar">
                            <span>LM</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 37 37" fill="none" class="team-card__li">
                            <g clip-path="url(#clip0)"><rect width="36.39" height="36.39" rx="5" fill="white"/><path d="M31.006 31.0065H25.6142V22.5625C25.6142 20.5489 25.5782 17.9568 22.8099 17.9568C20.0016 17.9568 19.5719 20.1508 19.5719 22.4159V31.0059H14.1802V13.6416H19.3562V16.0147H19.4287C19.9467 15.129 20.6953 14.4004 21.5946 13.9064C22.494 13.4125 23.5105 13.1717 24.5358 13.2097C30.0007 13.2097 31.0083 16.8043 31.0083 21.4807L31.006 31.0065ZM8.09621 11.2682C6.36811 11.2685 4.96695 9.86775 4.96667 8.13965C4.96638 6.41155 6.36697 5.0104 8.09507 5.01011C9.82317 5.00969 11.2243 6.41042 11.2246 8.13851C11.2248 8.96838 10.8953 9.76432 10.3086 10.3512C9.72188 10.9382 8.92608 11.268 8.09621 11.2682ZM10.7922 31.0066H5.39468V13.6416H10.7921V31.0065L10.7922 31.0066ZM33.694 0.00264849H2.68533C1.21978 -0.0138407 0.0179107 1.16016 0 2.62571V33.7638C0.0173421 35.23 1.21907 36.4052 2.68518 36.3898H33.694C35.1633 36.408 36.3697 35.2329 36.39 33.7638V2.6233C36.3691 1.1549 35.1626 -0.0189581 33.694 0.000231971" fill="#0A66C2"/></g>
                            <defs><clipPath id="clip0"><rect width="36.39" height="36.39" rx="5" fill="white"/></clipPath></defs>
                        </svg>
                    </div>
                    <div class="team-card__meta">
                        <h3 class="team-card__name">Laura Mather</h3>
                        <p class="team-card__role">Chief Executive Officer</p>
                    </div>
                    <p class="team-card__bio">Silicon Valley Founder and CEO with AI and Cybersecurity expertise</p>
                </div>

                <!-- Mike Eynon Card -->
                <div class="team-card">
                    <div class="team-card__top">
                        <div class="avatar">
                            <span>ME</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 37 37" fill="none" class="team-card__li">
                            <g clip-path="url(#clip1)"><rect width="36.39" height="36.39" rx="5" fill="white"/><path d="M31.006 31.0065H25.6142V22.5625C25.6142 20.5489 25.5782 17.9568 22.8099 17.9568C20.0016 17.9568 19.5719 20.1508 19.5719 22.4159V31.0059H14.1802V13.6416H19.3562V16.0147H19.4287C19.9467 15.129 20.6953 14.4004 21.5946 13.9064C22.494 13.4125 23.5105 13.1717 24.5358 13.2097C30.0007 13.2097 31.0083 16.8043 31.0083 21.4807L31.006 31.0065ZM8.09621 11.2682C6.36811 11.2685 4.96695 9.86775 4.96667 8.13965C4.96638 6.41155 6.36697 5.0104 8.09507 5.01011C9.82317 5.00969 11.2243 6.41042 11.2246 8.13851C11.2248 8.96838 10.8953 9.76432 10.3086 10.3512C9.72188 10.9382 8.92608 11.268 8.09621 11.2682ZM10.7922 31.0066H5.39468V13.6416H10.7921V31.0065L10.7922 31.0066ZM33.694 0.00264849H2.68533C1.21978 -0.0138407 0.0179107 1.16016 0 2.62571V33.7638C0.0173421 35.23 1.21907 36.4052 2.68518 36.3898H33.694C35.1633 36.408 36.3697 35.2329 36.39 33.7638V2.6233C36.3691 1.1549 35.1626 -0.0189581 33.694 0.000231971" fill="#0A66C2"/></g>
                            <defs><clipPath id="clip1"><rect width="36.39" height="36.39" rx="5" fill="white"/></clipPath></defs>
                        </svg>
                    </div>
                    <div class="team-card__meta">
                        <h3 class="team-card__name">Mike Eynon</h3>
                        <p class="team-card__role">Chief Technology Officer</p>
                    </div>
                    <p class="team-card__bio">Silicon Valley Founder and CTO</p>
                </div>

                <!-- Nareman Dayya Card -->
                <div class="team-card">
                    <div class="team-card__top">
                        <div class="avatar">
                            <span>ND</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 37 37" fill="none" class="team-card__li">
                            <g clip-path="url(#clip2)"><rect width="36.39" height="36.39" rx="5" fill="white"/><path d="M31.006 31.0065H25.6142V22.5625C25.6142 20.5489 25.5782 17.9568 22.8099 17.9568C20.0016 17.9568 19.5719 20.1508 19.5719 22.4159V31.0059H14.1802V13.6416H19.3562V16.0147H19.4287C19.9467 15.129 20.6953 14.4004 21.5946 13.9064C22.494 13.4125 23.5105 13.1717 24.5358 13.2097C30.0007 13.2097 31.0083 16.8043 31.0083 21.4807L31.006 31.0065ZM8.09621 11.2682C6.36811 11.2685 4.96695 9.86775 4.96667 8.13965C4.96638 6.41155 6.36697 5.0104 8.09507 5.01011C9.82317 5.00969 11.2243 6.41042 11.2246 8.13851C11.2248 8.96838 10.8953 9.76432 10.3086 10.3512C9.72188 10.9382 8.92608 11.268 8.09621 11.2682ZM10.7922 31.0066H5.39468V13.6416H10.7921V31.0065L10.7922 31.0066ZM33.694 0.00264849H2.68533C1.21978 -0.0138407 0.0179107 1.16016 0 2.62571V33.7638C0.0173421 35.23 1.21907 36.4052 2.68518 36.3898H33.694C35.1633 36.408 36.3697 35.2329 36.39 33.7638V2.6233C36.3691 1.1549 35.1626 -0.0189581 33.694 0.000231971" fill="#0A66C2"/></g>
                            <defs><clipPath id="clip2"><rect width="36.39" height="36.39" rx="5" fill="white"/></clipPath></defs>
                        </svg>
                    </div>
                    <div class="team-card__meta">
                        <h3 class="team-card__name">Nareman Dayya</h3>
                        <p class="team-card__role">In-region Operations Advisor</p>
                    </div>
                    <p class="team-card__bio">In-region operations advisor ensuring on-the-ground operational credibility, annotator welfare and delivery quality</p>
                </div>

                <!-- David Hasan Card -->
                <div class="team-card">
                    <div class="team-card__top">
                        <div class="avatar">
                            <span>DH</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 37 37" fill="none" class="team-card__li">
                            <g clip-path="url(#clip3)"><rect width="36.39" height="36.39" rx="5" fill="white"/><path d="M31.006 31.0065H25.6142V22.5625C25.6142 20.5489 25.5782 17.9568 22.8099 17.9568C20.0016 17.9568 19.5719 20.1508 19.5719 22.4159V31.0059H14.1802V13.6416H19.3562V16.0147H19.4287C19.9467 15.129 20.6953 14.4004 21.5946 13.9064C22.494 13.4125 23.5105 13.1717 24.5358 13.2097C30.0007 13.2097 31.0083 16.8043 31.0083 21.4807L31.006 31.0065ZM8.09621 11.2682C6.36811 11.2685 4.96695 9.86775 4.96667 8.13965C4.96638 6.41155 6.36697 5.0104 8.09507 5.01011C9.82317 5.00969 11.2243 6.41042 11.2246 8.13851C11.2248 8.96838 10.8953 9.76432 10.3086 10.3512C9.72188 10.9382 8.92608 11.268 8.09621 11.2682ZM10.7922 31.0066H5.39468V13.6416H10.7921V31.0065L10.7922 31.0066ZM33.694 0.00264849H2.68533C1.21978 -0.0138407 0.0179107 1.16016 0 2.62571V33.7638C0.0173421 35.23 1.21907 36.4052 2.68518 36.3898H33.694C35.1633 36.408 36.3697 35.2329 36.39 33.7638V2.6233C36.3691 1.1549 35.1626 -0.0189581 33.694 0.000231971" fill="#0A66C2"/></g>
                            <defs><clipPath id="clip3"><rect width="36.39" height="36.39" rx="5" fill="white"/></clipPath></defs>
                        </svg>
                    </div>
                    <div class="team-card__meta">
                        <h3 class="team-card__name">David Hasan</h3>
                        <p class="team-card__role">Advisor</p>
                    </div>
                    <p class="team-card__bio">CEO of Gaza Children Village</p>
                </div>
            </div>
            <!-- Carousel dots (mobile only) -->
            <div id="team-dots" class="dots">
                <span class="team-dot team-dot-active"></span>
                <span class="team-dot"></span>
                <span class="team-dot"></span>
                <span class="team-dot"></span>
            </div>
        </div>
    </section>

    <!-- Annotators Section -->
    <section id="workforce" class="section section--white">
        <div class="container">
            <!-- Title -->
            <h2 class="workforce__title">The Quality Starts With the Annotators</h2>

            <!-- Image & Paragraph Container -->
            <div class="split-card split-card--tint workforce__intro">
                <div class="split-card__media">
                    <img src="{{ asset('public/images/arabic-annotators-team.png') }}" alt="Arabic Annotators Team" class="split-card__img">
                </div>
                <div style="display: flex; align-items: center;">
                    <p class="workforce__text">Our annotator workforce is our primary quality asset. We invest in their training, their ownership stake, and their stability — because high-quality annotations require a workforce that is both skilled and retained.</p>
                </div>
            </div>

            <div id="workforce-cards" class="wf-cards">
                <!-- Native Card -->
                <div class="wf-card">
                    <!-- Icon Circle -->
                    <div class="wf-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                            <circle cx="50" cy="50" r="50" fill="#C2D7E6" fillOpacity="0.6"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                            <path d="M25 4.16675C22.2373 4.16675 19.5878 5.26421 17.6343 7.21772C15.6808 9.17122 14.5833 11.8207 14.5833 14.5834C14.5833 17.3461 15.6808 19.9956 17.6343 21.9491C19.5878 23.9026 22.2373 25.0001 25 25.0001C27.7627 25.0001 30.4122 23.9026 32.3657 21.9491C34.3192 19.9956 35.4167 17.3461 35.4167 14.5834C35.4167 11.8207 34.3192 9.17122 32.3657 7.21772C30.4122 5.26421 27.7627 4.16675 25 4.16675ZM8.33333 45.8334H41.6667C42.8125 45.8334 43.75 44.8959 43.75 43.7501V41.6667C43.75 33.6251 37.2083 27.0834 29.1667 27.0834H20.8333C12.7917 27.0834 6.25 33.6251 6.25 41.6667V43.7501C6.25 44.8959 7.1875 45.8334 8.33333 45.8334Z" fill="#3265A1"/>
                        </svg>
                    </div>
                    <!-- Content -->
                    <div class="wf-card__body">
                        <p class="wf-card__num">01</p>
                        <div class="wf-card__group">
                            <p class="wf-card__title">Native</p>
                            <p class="wf-card__sub">91% top accuracy</p>
                        </div>
                        <p class="wf-card__text">Arabic dialect speakers with deep linguistic and cultural competency in their assigned dialect family.</p>
                    </div>
                </div>

                <!-- Trained Card -->
                <div class="wf-card">
                    <!-- Icon Circle -->
                    <div class="wf-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                            <circle cx="50" cy="50" r="50" fill="#C2D7E6" fillOpacity="0.6"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                            <path d="M24.9999 8.75098L2.1958 17.3027L24.9999 28.7048L35.8612 23.2741L25.6721 20.1589C25.4622 20.2595 25.2326 20.312 24.9999 20.3125C24.5855 20.3125 24.1881 20.1479 23.895 19.8549C23.602 19.5618 23.4374 19.1644 23.4374 18.75C23.4374 18.3356 23.602 17.9382 23.895 17.6451C24.1881 17.3521 24.5855 17.1875 24.9999 17.1875L24.7415 18.0275L26.5518 18.5845L26.5525 18.5899L29.2238 19.4068L44.4335 24.0864V25.2726C44.2231 25.4157 44.0509 25.608 43.9318 25.8328C43.8126 26.0576 43.7502 26.3082 43.7499 26.5626C43.7502 26.8229 43.8155 27.0789 43.9399 27.3076C44.0642 27.5362 44.2438 27.7301 44.4621 27.8718C43.7509 30.5598 43.7499 36.6585 43.7499 39.0625C45.3124 40.0776 45.3124 40.1147 46.8749 39.0625C46.8749 36.6588 46.8741 30.5612 46.163 27.8727C46.3814 27.7309 46.561 27.5368 46.6853 27.308C46.8096 27.0792 46.8748 26.8229 46.8749 26.5625C46.8749 26.3078 46.8126 26.0569 46.6934 25.8318C46.5743 25.6067 46.4019 25.4141 46.1913 25.2708V22.7884L40.3979 21.0059L47.804 17.3027L24.9999 8.75098ZM11.6818 24.3164L10.4003 32.0059C12.9564 32.3401 16.0142 33.8259 18.8251 35.5827C20.4237 36.5819 21.9211 37.6787 23.1372 38.7429C23.8806 39.3933 24.5021 40.0173 24.9999 40.6312C25.4977 40.0172 26.1192 39.3933 26.8626 38.7429C28.0787 37.6787 29.576 36.5819 31.1747 35.5827C33.9856 33.8259 37.0434 32.3401 39.5995 32.0059L38.3178 24.3164H37.7074L24.9999 30.6702L12.2922 24.3164H11.6818Z" fill="#3265A1"/>
                        </svg>
                    </div>
                    <!-- Content -->
                    <div class="wf-card__body">
                        <p class="wf-card__num">02</p>
                        <div class="wf-card__group">
                            <p class="wf-card__title">Trained</p>
                            <p class="wf-card__sub">3,031 annotations delivered</p>
                        </div>
                        <p class="wf-card__text">Structured onboarding in annotation methodologies, quality standards, and task-specific guidelines before any production work</p>
                    </div>
                </div>

                <!-- Invested Card -->
                <div class="wf-card">
                    <!-- Icon Circle -->
                    <div class="wf-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                            <circle cx="50" cy="50" r="50" fill="#C2D7E6" fillOpacity="0.6"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M40.2356 17.4792C40.2356 19.4799 39.8415 21.4609 39.0759 23.3092C38.3103 25.1575 37.1882 26.8369 35.7735 28.2516C34.3589 29.6662 32.6795 30.7884 30.8312 31.554C28.9828 32.3196 27.0018 32.7136 25.0012 32.7136C23.0006 32.7136 21.0196 32.3196 19.1713 31.554C17.3229 30.7884 15.6435 29.6662 14.2289 28.2516C12.8142 26.8369 11.6921 25.1575 10.9265 23.3092C10.1609 21.4609 9.76683 19.4799 9.76683 17.4792C9.76683 13.4388 11.3719 9.56392 14.2289 6.70692C17.0859 3.84992 20.9608 2.24487 25.0012 2.24487C29.0416 2.24487 32.9165 3.84992 35.7735 6.70692C38.6305 9.56392 40.2356 13.4388 40.2356 17.4792ZM24.896 9.56883L27.5939 14.1938L32.2189 15.348L29.1356 18.8167L29.9064 24.2126L24.896 21.9001L19.8877 24.2126L20.6585 18.8167L17.5752 15.348L22.2002 14.1917L24.896 9.56883ZM2.3335 40.9834L9.8835 27.9042C11.2965 29.9566 13.1129 31.6993 15.222 33.0261C17.3311 34.3528 19.6884 35.2358 22.1502 35.6209L14.8731 48.223L12.2022 38.3668L2.3335 40.9793V40.9834ZM35.1252 48.223L27.8502 35.6188C30.3117 35.2339 32.669 34.3513 34.7781 33.0249C36.8871 31.6985 38.7037 29.9562 40.1168 27.9042L47.6668 40.9813L37.796 38.3668L35.1273 48.2209L35.1252 48.223Z" fill="#3265A1"/>
                        </svg>
                    </div>
                    <!-- Content -->
                    <div class="wf-card__body">
                        <p class="wf-card__num">03</p>
                        <div class="wf-card__group">
                            <p class="wf-card__title">Invested</p>
                            <p class="wf-card__sub">Long-term retention, not gig churn</p>
                        </div>
                        <p class="wf-card__text">Our annotators are invested in outcomes — producing measurably lower error rates and better data for our clients</p>
                    </div>
                </div>
            </div>
            <!-- Workforce carousel dots (mobile only) -->
            <div id="workforce-dots" class="dots">
                <span class="wf-dot wf-dot-active"></span>
                <span class="wf-dot"></span>
                <span class="wf-dot"></span>
            </div>
        </div>
    </section>

    <!-- Worker Privacy Section -->
    <section id="worker-privacy" class="section section--soft">
        <div class="container">
            <div class="privacy__card">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54" fill="none" class="privacy__icon">
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
                <div class="privacy__body">
                    <h3 class="privacy__title">Worker privacy is a priority.</h3>
                    <p class="privacy__text">We do not publish individual annotator names, photos, or location information.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact-section" class="section section--white">
        <div class="contact__grid container">
            <!-- Left Content -->
            <div class="contact__info">
                <!-- Title and Description -->
                <div class="contact__head">
                    <h2 class="contact__title">Start Your Project</h2>
                    <p class="contact__lead">Tell us about your project. We'll follow up to discuss scope, dialect requirements, QA standards, and how we can fit into your annotation pipeline.</p>
                </div>

                <!-- Contact Info -->
                <div class="contact__list">
                    <div class="contact__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M20.1668 5.49984C20.1668 4.4915 19.3418 3.6665 18.3335 3.6665H3.66683C2.6585 3.6665 1.8335 4.4915 1.8335 5.49984V16.4998C1.8335 17.5082 2.6585 18.3332 3.66683 18.3332H18.3335C19.3418 18.3332 20.1668 17.5082 20.1668 16.4998V5.49984ZM18.3335 5.49984L11.0002 10.0832L3.66683 5.49984H18.3335ZM18.3335 16.4998H3.66683V7.33317L11.0002 11.9165L18.3335 7.33317V16.4998Z" fill="#3B82F6"/>
                        </svg>
                        <a href="mailto:info@karamadata.ai">info@karamadata.ai</a>
                    </div>
                    <div class="contact__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path d="M18.7325 5.59737L11.4204 1.92977C11.1635 1.8014 10.8516 1.8014 10.5947 1.92977L3.28266 5.59737C2.99825 5.73491 2.81476 6.00998 2.77806 6.32173C2.76889 6.42259 1.89732 16.1876 10.6222 20.0844C10.7402 20.1387 10.8685 20.1668 10.9984 20.1668C11.1283 20.1668 11.2566 20.1387 11.3745 20.0844C20.0994 16.1876 19.237 6.41342 19.2187 6.32173C19.2041 6.1678 19.1499 6.02026 19.0615 5.89337C18.9731 5.76647 18.8535 5.66452 18.7141 5.59737H18.7325ZM11.0076 18.2414C4.82397 15.2432 4.53039 8.83403 4.58543 7.00023L11.0076 3.78191L17.4297 7.00023C17.4664 8.82487 17.1269 15.2707 11.0076 18.2414Z" fill="#3B82F6"/>
                            <path d="M10.0833 11.5406L8.90079 10.349L7.59912 11.6506L10.0833 14.1256L14.4008 9.81729L13.0991 8.51562L10.0833 11.5406Z" fill="#3B82F6"/>
                        </svg>
                        <span>US LLC — domestically incorporated and owned</span>
                    </div>
                </div>

                <!-- Testimonial Quote -->
                <div class="quote">
                    <p class="quote__text">"Our annotators are not vendors — they are deeply invested in the outcomes. That changes everything about how they approach the work. The precision, the care, the accountability. It shows in every dataset we deliver."</p>

                    <!-- Author Info -->
                    <div class="quote__author">
                        <!-- Avatar -->
                        <div class="avatar">
                            <span>ND</span>
                        </div>
                        <!-- Author Details -->
                        <div class="quote__meta">
                            <p class="quote__name">Nareman Dayya</p>
                            <p class="quote__role">Palestine Operations Advisor, Karama Data</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Form -->
            <div>
                <form class="form">
                    <!-- Name and Company Row -->
                    <div class="form__row">
                        <div class="field">
                            <label>Your Name <span class="req">*</span></label>
                            <input type="text" placeholder="Jane Smith">
                        </div>
                        <div class="field">
                            <label>Company <span class="req">*</span></label>
                            <input type="text" placeholder="Acme AI Inc.">
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="field">
                        <label>Work Email <span class="req">*</span></label>
                        <input type="email" placeholder="jane@yourcompany.com">
                    </div>

                    <!-- Project Description -->
                    <div class="field">
                        <label>Project Description <span class="req">*</span></label>
                        <textarea placeholder="Tell us about your annotation needs — dialect requirements, volume, task type, timeline..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="form__submit">Start Your Project</button>
                    <p class="form__hint">We respond to all inquiries within one business day.</p>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <!-- About Section -->
                <div class="footer__col">
                    <div class="footer__logo"></div>
                    <p class="footer__tagline">Native speakers. Rigorous QA. No shortcuts.</p>
                    <p class="footer__text">Enterprise Arabic dialect annotation for AI companies building the next generation of Arabic-language AI systems.</p>
                    <div class="footer__pill">
                        <span>US Incorporated LLC</span>
                    </div>
                </div>

                <!-- Divider 1 (desktop: drawn with column borders) -->
                <div class="footer__divider"></div>

                <!-- Navigation -->
                <div class="footer__col">
                    <div>
                        <h4 class="footer__heading">Navigation</h4>
                        <ul class="footer__list">
                            <li><a href="#why-arabic">Why Arabic</a></li>
                            <li><a href="#results">Results</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#workforce">Our Workforce</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Divider 2 -->
                <div class="footer__divider"></div>

                <!-- Contact -->
                <div class="footer__col">
                    <div>
                        <h4 class="footer__heading">Contact</h4>
                        <ul class="footer__list footer__list--spaced">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 29 29" fill="none">
                                    <path d="M26.5832 7.25016C26.5832 5.921 25.4957 4.8335 24.1665 4.8335H4.83317C3.504 4.8335 2.4165 5.921 2.4165 7.25016V21.7502C2.4165 23.0793 3.504 24.1668 4.83317 24.1668H24.1665C25.4957 24.1668 26.5832 23.0793 26.5832 21.7502V7.25016ZM24.1665 7.25016L14.4998 13.2918L4.83317 7.25016H24.1665ZM24.1665 21.7502H4.83317V9.66683L14.4998 15.7085L24.1665 9.66683V21.7502Z" fill="#C4C4C4"/>
                                </svg>
                                <a href="mailto:info@karamadata.ai">info@karamadata.ai</a>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 29" fill="none">
                                    <path d="M5.315 12.0832C5.10501 12.8727 4.99917 13.6847 5 14.4998C5 15.3336 5.11 16.1432 5.315 16.9165H8.875C8.70791 15.3094 8.70791 13.6902 8.875 12.0832H5.315ZM6.3375 9.6665H9.27C9.6025 8.19596 10.0825 6.87888 10.6713 5.78292C8.8567 6.62836 7.34682 7.9814 6.3375 9.6665ZM24.685 12.0832H21.125C21.2921 13.6902 21.2921 15.3094 21.125 16.9165H24.685C25.1057 15.3311 25.1057 13.6686 24.685 12.0832ZM23.6625 9.6665C22.6532 7.9814 21.1433 6.62836 19.3288 5.78292C19.9188 6.87888 20.3975 8.19596 20.73 9.6665H23.6625ZM11.39 12.0832C11.297 12.8856 11.2502 13.6924 11.25 14.4998C11.25 15.3275 11.2975 16.1371 11.39 16.9165H18.61C18.7979 15.3105 18.7979 13.6892 18.61 12.0832H11.39ZM11.8375 9.6665H18.1625C17.9346 8.75831 17.6065 7.8764 17.1838 7.03596C16.3988 5.5195 15.5588 4.83317 15 4.83317C14.4413 4.83317 13.6013 5.5195 12.8163 7.03596C12.4225 7.79963 12.0913 8.68775 11.8375 9.6665ZM6.3375 19.3332C7.34682 21.0183 8.8567 22.3713 10.6713 23.2168C10.0813 22.1208 9.6025 20.8037 9.27 19.3332H6.3375ZM23.6625 19.3332H20.73C20.3975 20.8037 19.9175 22.1208 19.3288 23.2168C21.1433 22.3713 22.6532 21.0183 23.6625 19.3332ZM11.8375 19.3332C12.0913 20.3119 12.4225 21.2 12.8163 21.9637C13.6013 23.4802 14.4413 24.1665 15 24.1665C15.5588 24.1665 16.3988 23.4802 17.1838 21.9637C17.5775 21.2 17.9088 20.3119 18.1625 19.3332H11.8375ZM15 26.5832C8.09625 26.5832 2.5 21.1735 2.5 14.4998C2.5 7.82621 8.09625 2.4165 15 2.4165C21.9038 2.4165 27.5 7.82621 27.5 14.4998C27.5 21.1735 21.9038 26.5832 15 26.5832Z" fill="#C4C4C4"/>
                                </svg>
                                <span>Arabic Language Annotation Only</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 29 29" fill="none">
                                    <path d="M24.6928 7.37798L15.0542 2.54341C14.7156 2.3742 14.3044 2.3742 13.9657 2.54341L4.32714 7.37798C3.95224 7.55927 3.71037 7.92187 3.66199 8.3328C3.6499 8.46575 2.50101 21.3378 14.002 26.4745C14.1575 26.5461 14.3267 26.5832 14.4979 26.5832C14.6691 26.5832 14.8382 26.5461 14.9937 26.4745C26.4947 21.3378 25.3579 8.45367 25.3337 8.3328C25.3144 8.12991 25.2431 7.93542 25.1266 7.76815C25.01 7.60088 24.8523 7.46649 24.6686 7.37798H24.6928ZM14.51 24.0451C6.35887 20.0929 5.97187 11.6445 6.04444 9.2272L14.51 4.98487L22.9755 9.2272C23.0239 11.6324 22.5764 20.1291 14.51 24.0451Z" fill="#C4C4C4"/>
                                    <path d="M13.2917 15.2131L11.7329 13.6423L10.0171 15.3581L13.2917 18.6206L18.9829 12.9414L17.2671 11.2256L13.2917 15.2131Z" fill="#C4C4C4"/>
                                </svg>
                                <span>No Content Moderation Services</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Divider 3 -->
                <div class="footer__divider"></div>

                <!-- Partners & Affiliations -->
                <div class="footer__col">
                    <h4 class="footer__heading" style="margin-bottom: 0;">Partners & Affiliations</h4>
                    <div class="footer__partners">
                        <div class="footer__partner">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 36 36" fill="none">
                                <circle cx="18" cy="18" r="16" fill="#488EFF" opacity="0.2"/>
                                <path d="M18 8C12.48 8 8 12.48 8 18s4.48 10 10 10 10-4.48 10-10-4.48-10-10-10zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm2.5-9c.83 0 1.5-.67 1.5-1.5S21.33 14 20.5 14s-1.5.67-1.5 1.5.67 1.5 1.5 1.5zm-5 0c.83 0 1.5-.67 1.5-1.5S13.33 14 12.5 14s-1.5.67-1.5 1.5.67 1.5 1.5 1.5zm2.5 6.5c2.33 0 4.31-1.46 5.11-3.5h-10.22c.8 2.04 2.78 3.5 5.11 3.5z" fill="#488EFF"/>
                            </svg>
                            <div>
                                <p class="footer__partner-label">Supported by</p>
                                <p class="footer__partner-name">Gaza Children Village<br/>(GCV)</p>
                            </div>
                        </div>
                        <div class="footer__llc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                <path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm0 20c-4.97 0-9-4.03-9-9s4.03-9 9-9 9 4.03 9 9-4.03 9-9 9zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 9 15.5 9 14 9.67 14 10.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 9 8.5 9 7 9.67 7 10.5 7.67 12 8.5 12zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z" fill="#488EFF"/>
                            </svg>
                            <span>US-Incorporated LLC</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="footer__copy">
                <p>© 2026 Karama Data LLC. All rights reserved. | US LLC — Domestic Ownership. Arabic AI Annotation.</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu-dropdown');
            const isOpen = menu.style.display !== 'none';
            menu.style.display = isOpen ? 'none' : 'block';
        }
        function closeMobileMenu() {
            document.getElementById('mobile-menu-dropdown').style.display = 'none';
        }

        // On mobile: move worker-privacy card before workforce carousel
        (function() {
            if (window.innerWidth > 480) return;
            var wfSection = document.getElementById('workforce');
            var wfCards = document.getElementById('workforce-cards');
            var privacy = document.getElementById('worker-privacy');
            if (!wfSection || !wfCards || !privacy) return;
            var wfInner = wfCards.parentElement;
            privacy.style.padding = '0';
            privacy.style.background = 'transparent';
            wfInner.insertBefore(privacy, wfCards);
        })();

        // Workforce carousel dot sync
        (function() {
            var grid = document.getElementById('workforce-cards');
            var dots = document.querySelectorAll('.wf-dot');
            if (!grid || !dots.length) return;
            grid.addEventListener('scroll', function() {
                var index = Math.round(grid.scrollLeft / grid.offsetWidth);
                dots.forEach(function(d, i) {
                    d.classList.toggle('wf-dot-active', i === index);
                });
            }, { passive: true });
            dots.forEach(function(dot, i) {
                dot.addEventListener('click', function() {
                    grid.scrollTo({ left: i * grid.offsetWidth, behavior: 'smooth' });
                });
            });
        })();

        // Team carousel dot sync
        (function() {
            var grid = document.getElementById('team-grid');
            var dots = document.querySelectorAll('.team-dot');
            if (!grid || !dots.length) return;
            grid.addEventListener('scroll', function() {
                var index = Math.round(grid.scrollLeft / grid.offsetWidth);
                dots.forEach(function(d, i) {
                    d.classList.toggle('team-dot-active', i === index);
                });
            }, { passive: true });
            dots.forEach(function(dot, i) {
                dot.addEventListener('click', function() {
                    grid.scrollTo({ left: i * grid.offsetWidth, behavior: 'smooth' });
                });
            });
        })();

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
