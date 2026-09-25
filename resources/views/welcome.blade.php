<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WECON is an Asia-Pacific media, events, awards, and business information ecosystem connecting ideas, industry leaders, and transformative opportunities.">
    <title>WECON | Connecting Ideas, People, and Opportunities</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --navy: #0B2B55;
            --navy-dark: #071c38;
            --navy-light: #123d75;
            --blue: #1261B5;
            --blue-light: #1d7ae4;
            --blue-subtle: #EBF4FE;
            --blue-soft: #dbeafe;
            --hero-bg: #EAF3FC;
            --gold: #C8962A;
            --gold-light: #f59e0b;
            --gold-soft: #fef3c7;
            --red: #C0392B;
            --orange: #EA580C;
            --green: #10B981;
            --section-alt: #F8FAFC;
            --surface-card: #FFFFFF;
            --text-dark: #0B2B55;
            --text-heading: #0F172A;
            --text-body: #475569;
            --text-muted: #64748B;
            --border: #E2E8F0;
            --border-light: #F1F5F9;
            --white: #FFFFFF;
            --shadow-sm: 0 2px 8px rgba(11, 43, 85, 0.05);
            --shadow-md: 0 10px 30px -4px rgba(11, 43, 85, 0.08);
            --shadow-lg: 0 20px 45px -8px rgba(11, 43, 85, 0.14);
            --shadow-xl: 0 25px 60px -10px rgba(11, 43, 85, 0.22);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            color: var(--text-heading);
            background: #FFFFFF;
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        section[id] { scroll-margin-top: 90px; }

        /* ===== SCROLL PROGRESS BAR ===== */
        #scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            width: 0%;
            background: linear-gradient(90deg, var(--blue) 0%, #38bdf8 50%, var(--gold) 100%);
            z-index: 1100;
            transition: width 0.1s linear;
        }

        /* ===== REVEAL ANIMATIONS ===== */
        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 0.65s cubic-bezier(0.16, 1, 0.3, 1), transform 0.65s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ===== CONTAINER & COMMON UTILITIES ===== */
        .container {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-padding {
            padding: 2.5rem 0;
        }
        .section-header {
            max-width: 760px;
            margin: 0 auto 3.5rem;
            text-align: center;
        }
        .section-tag {
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: var(--blue);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.85rem;
            background: rgba(18, 97, 181, 0.08);
            padding: 0.35rem 0.95rem;
            border-radius: 9999px;
            border: 1px solid rgba(18, 97, 181, 0.16);
        }
        .tag-marketech {
            background: rgba(234, 88, 12, 0.09) !important;
            color: #EA580C !important;
            border-color: rgba(234, 88, 12, 0.24) !important;
        }
        .tag-uptech {
            background: rgba(13, 148, 136, 0.09) !important;
            color: #0D9488 !important;
            border-color: rgba(13, 148, 136, 0.24) !important;
        }
        .tag-hrforward {
            background: rgba(192, 108, 68, 0.1) !important;
            color: #C06C44 !important;
            border-color: rgba(192, 108, 68, 0.25) !important;
        }
        .section-title {
            font-size: clamp(2rem, 3.6vw, 2.75rem);
            font-weight: 800;
            line-height: 1.18;
            letter-spacing: -0.025em;
            color: var(--navy);
            margin-bottom: 1rem;
        }
        .section-desc {
            font-size: 1.05rem;
            color: var(--text-body);
            line-height: 1.7;
            max-width: 620px;
            margin: 0 auto;
        }

        /* ===== BUTTONS ===== */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.55rem;
            padding: 0.8rem 1.85rem;
            border-radius: 9999px;
            font-weight: 600;
            font-size: 0.92rem;
            text-decoration: none;
            cursor: pointer;
            border: 1.5px solid transparent;
            font-family: inherit;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
            white-space: nowrap;
        }
        .btn-primary {
            background: var(--blue);
            color: #FFFFFF;
            border-color: var(--blue);
            box-shadow: 0 4px 18px rgba(18, 97, 181, 0.32);
        }
        .btn-primary:hover {
            background: var(--blue-light);
            border-color: var(--blue-light);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(18, 97, 181, 0.42);
            color: #FFFFFF;
        }
        .btn-outline-navy {
            background: transparent;
            color: var(--navy);
            border-color: var(--navy);
        }
        .btn-outline-navy:hover {
            background: var(--navy);
            color: #FFFFFF;
            transform: translateY(-2px);
            box-shadow: 0 8px 22px rgba(11, 43, 85, 0.18);
        }
        .btn-white {
            background: #FFFFFF;
            color: var(--navy);
            border-color: #FFFFFF;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
        }
        .btn-white:hover {
            background: #F8FAFC;
            color: var(--blue);
            transform: translateY(-2px);
            box-shadow: 0 10px 28px rgba(0, 0, 0, 0.2);
        }
        .btn-outline-white {
            background: transparent;
            color: #FFFFFF;
            border-color: rgba(255, 255, 255, 0.6);
        }
        .btn-outline-white:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: #FFFFFF;
            color: #FFFFFF;
            transform: translateY(-2px);
        }
        .btn-gold {
            background: linear-gradient(135deg, var(--gold) 0%, #e0aa30 100%);
            color: #FFFFFF;
            border-color: var(--gold);
            box-shadow: 0 4px 18px rgba(200, 150, 42, 0.3);
        }
        .btn-gold:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(200, 150, 42, 0.45);
            color: #FFFFFF;
        }
        .btn-sm {
            padding: 0.5rem 1.15rem;
            font-size: 0.84rem;
        }
        .cta-arrow {
            display: inline-block;
            transition: transform 0.25s ease;
        }
        .btn:hover .cta-arrow {
            transform: translateX(4px);
        }

        /* ===== NAVBAR ===== */
        #navbar {
            position: fixed;
            top: 14px;
            left: 50%;
            transform: translateX(-50%);
            width: calc(100% - 3rem);
            max-width: 1320px;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.78);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(226, 232, 240, 0.85);
            border-radius: 9999px;
            height: 68px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 20px -2px rgba(11, 43, 85, 0.06);
            transition: all 0.3s ease;
        }
        #navbar.scrolled {
            box-shadow: 0 10px 32px -4px rgba(11, 43, 85, 0.12), 0 2px 6px rgba(0, 0, 0, 0.04);
            background: rgba(255, 255, 255, 0.96);
            border-color: rgba(203, 213, 225, 0.9);
        }
        .nav-container {
            width: 100%;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 100%;
            position: relative;
        }
        .nav-logo {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            flex-shrink: 0;
            height: 52px;
            transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .nav-logo:hover { transform: scale(1.03); }
        .nav-logo-img {
            height: 115px;
            width: auto;
            object-fit: contain;
            display: block;
            margin: -28px 25px;
            filter: drop-shadow(0 2px 4px rgba(11, 43, 85, 0.05));
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 1.75rem;
            list-style: none;
            height: 100%;
            margin: 0;
            padding: 0;
        }
        @media (min-width: 901px) {
            .nav-links {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
            }
        }
        .nav-links li {
            display: flex;
            align-items: center;
            height: 100%;
        }
        .nav-links li a {
            position: relative;
            text-decoration: none;
            color: #475569;
            font-size: 0.89rem;
            font-weight: 500;
            padding: 0.45rem 0;
            transition: color 0.2s ease;
            white-space: nowrap;
        }
        .nav-links li a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2.5px;
            background: var(--blue);
            border-radius: 2px;
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.22s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.2s ease;
            opacity: 0;
        }
        .nav-links li a:hover {
            color: var(--navy);
        }
        .nav-links li a:hover::after,
        .nav-links li a.active::after {
            transform: scaleX(1);
            opacity: 1;
        }
        .nav-links li a.active {
            color: var(--navy);
            font-weight: 700;
        }
        .nav-cta-wrapper {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            flex-shrink: 0;
        }
        .nav-cta-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            padding: 0.54rem 1.45rem;
            border-radius: 9999px;
            border: 1.5px solid var(--navy);
            color: var(--navy);
            font-size: 0.88rem;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.22s cubic-bezier(0.16, 1, 0.3, 1);
            white-space: nowrap;
            background: transparent;
        }
        .nav-cta-btn:hover {
            background: var(--navy);
            color: #FFFFFF;
            box-shadow: 0 4px 16px rgba(11, 43, 85, 0.2);
            transform: translateY(-1px);
        }
        .nav-cta-btn:hover .cta-arrow {
            transform: translateX(4px);
        }
        .nav-toggle {
            display: none;
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 0.5rem;
            flex-direction: column;
            gap: 5px;
            z-index: 1001;
        }
        .nav-toggle span {
            display: block;
            width: 22px;
            height: 2px;
            background: var(--navy);
            border-radius: 2px;
            transition: transform 0.25s ease, opacity 0.25s ease;
        }
        .nav-toggle.active span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
        .nav-toggle.active span:nth-child(2) { opacity: 0; }
        .nav-toggle.active span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }
        .nav-links li.mobile-cta { display: none !important; }

        /* ===== HERO SECTION ===== */
        #hero {
            position: relative;
            background-color: var(--hero-bg);
            background-image: 
                radial-gradient(circle at 85% 20%, rgba(18, 97, 181, 0.15) 0%, transparent 45%),
                linear-gradient(135deg, rgba(234, 243, 252, 0.92) 0%, rgba(214, 233, 250, 0.75) 45%, rgba(18, 97, 181, 0.28) 85%, rgba(11, 43, 85, 0.45) 100%),
                url('{{ asset('images/hero-bg.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 130px 2rem 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 94vh;
            overflow: hidden;
        }
        .hero-inner {
            max-width: 1260px;
            width: 100%;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.15fr 1fr;
            gap: 3.5rem;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        .hero-tag {
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: var(--blue);
            margin-bottom: 1.25rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(8px);
            padding: 0.4rem 1rem;
            border-radius: 9999px;
            border: 1px solid rgba(18, 97, 181, 0.18);
            box-shadow: var(--shadow-sm);
        }
        .hero-title {
            font-size: clamp(2.4rem, 4.4vw, 3.65rem);
            font-weight: 900;
            line-height: 1.12;
            letter-spacing: -0.03em;
            color: var(--navy);
            margin-bottom: 1.35rem;
        }
        .hero-title .highlight {
            color: var(--blue);
            position: relative;
            display: inline-block;
        }
        .hero-desc {
            font-size: 1.12rem;
            color: var(--text-body);
            line-height: 1.75;
            margin-bottom: 2.25rem;
            max-width: 540px;
        }
        .hero-actions {
            display: flex;
            align-items: center;
            gap: 1.15rem;
            flex-wrap: wrap;
            margin-bottom: 2.5rem;
        }
        .hero-trust-bar {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding-top: 1.75rem;
            border-top: 1px solid rgba(11, 43, 85, 0.12);
            flex-wrap: wrap;
        }
        .hero-trust-label {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--text-muted);
        }
        .hero-trust-badges {
            display: flex;
            align-items: center;
            gap: 1.25rem;
            flex-wrap: wrap;
        }
        .hero-trust-item {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.82rem;
            font-weight: 700;
            color: var(--navy);
        }
        .trust-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }
        .hero-visual-wrap {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 580px;
            margin: 0 auto;
        }
        .hero-visual-glow {
            position: absolute;
            inset: -8%;
            background: radial-gradient(ellipse at center, rgba(18, 97, 181, 0.28) 0%, rgba(200, 150, 42, 0.12) 50%, transparent 72%);
            filter: blur(50px);
            z-index: 1;
            pointer-events: none;
            border-radius: 50%;
        }
        .hero-photo-card {
            position: relative;
            z-index: 2;
            width: 100%;
            animation: heroVisualFloat 6s ease-in-out infinite;
        }
        @keyframes heroVisualFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .hero-photo-img {
            width: 100%;
            height: auto;
            object-fit: contain;
            display: block;
            filter: drop-shadow(0 20px 40px rgba(11, 43, 85, 0.22));
            transition: transform 0.4s ease;
        }
        .hero-photo-card:hover .hero-photo-img {
            transform: scale(1.02);
        }

        /* Floating Interactive Badges on Hero */
        .hero-floating-badge {
            position: absolute;
            z-index: 4;
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            padding: 0.65rem 1.15rem;
            border-radius: 9999px;
            background: rgba(255, 255, 255, 0.94);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.95);
            box-shadow: 0 12px 28px -4px rgba(11, 43, 85, 0.16);
            font-size: 0.82rem;
            font-weight: 700;
            color: var(--navy);
            white-space: nowrap;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            text-decoration: none;
        }
        .hero-floating-badge:hover {
            transform: translateY(-4px) scale(1.04);
            box-shadow: 0 16px 36px -4px rgba(11, 43, 85, 0.25);
            background: #FFFFFF;
        }
        .badge-pos-1 { top: 20px; left: -25px; animation: badgeFloat1 5.2s ease-in-out infinite; }
        .badge-pos-2 { top: 52%; right: -28px; animation: badgeFloat2 6s ease-in-out infinite 0.6s; }
        .badge-pos-3 { bottom: 25px; left: 15px; animation: badgeFloat3 5.6s ease-in-out infinite 1.2s; }
        @keyframes badgeFloat1 { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-7px); } }
        @keyframes badgeFloat2 { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(8px); } }
        @keyframes badgeFloat3 { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-6px); } }

        /* Subtle Scroll Prompt */
        .hero-scroll-prompt {
            position: absolute;
            bottom: 18px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            color: var(--text-muted);
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            text-decoration: none;
            transition: all 0.25s ease;
            z-index: 5;
        }
        .hero-scroll-prompt:hover {
            color: var(--navy);
            transform: translateX(-50%) translateY(3px);
        }
        .mouse-icon {
            width: 22px;
            height: 34px;
            border: 2px solid rgba(11, 43, 85, 0.35);
            border-radius: 12px;
            display: flex;
            justify-content: center;
            padding-top: 6px;
        }
        .mouse-wheel {
            width: 3.5px;
            height: 7px;
            background: var(--blue);
            border-radius: 2px;
            animation: mouseScroll 1.8s ease-in-out infinite;
        }
        @keyframes mouseScroll {
            0% { transform: translateY(0); opacity: 1; }
            100% { transform: translateY(12px); opacity: 0; }
        }

        /* ===== SECTION 2: WHAT IS WECON? ===== */
        #about {
            background: #FFFFFF;
            position: relative;
            overflow: hidden;
        }
        .about-split {
            display: grid;
            grid-template-columns: 1fr 1.15fr;
            gap: 3.5rem;
            align-items: stretch;
        }
        .about-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .about-content .section-tag {
            background: rgba(192, 57, 43, 0.08);
            color: var(--red);
            border-color: rgba(192, 57, 43, 0.18);
            align-self: flex-start;
        }
        .about-title {
            font-size: clamp(2rem, 3.4vw, 2.75rem);
            font-weight: 800;
            line-height: 1.18;
            color: var(--navy);
            margin-bottom: 1.15rem;
        }
        .about-title .accent-red {
            color: var(--red);
        }
        .about-text {
            font-size: 1.02rem;
            color: var(--text-body);
            line-height: 1.7;
            margin-bottom: 1.25rem;
        }
        .about-pill-matrix {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.85rem;
            margin: 1.25rem 0 1.75rem;
        }
        .about-pill {
            background: var(--section-alt);
            border: 1px solid var(--border);
            padding: 0.85rem 0.95rem;
            border-radius: 12px;
            text-align: center;
            transition: all 0.25s ease;
        }
        .about-pill:hover {
            border-color: var(--blue);
            background: #FFFFFF;
            transform: translateY(-3px);
            box-shadow: var(--shadow-sm);
        }
        .about-pill-num {
            display: block;
            font-size: 1.45rem;
            font-weight: 800;
            color: var(--navy);
        }
        .about-pill-label {
            font-size: 0.74rem;
            font-weight: 600;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .about-content-cta {
            align-self: flex-start;
        }

        /* Who We Are 3 Branches Showcase (Expanded & Prominent Logo Layout) */
        .about-branches-showcase {
            background: linear-gradient(135deg, #F8FAFC 0%, #EEF4FA 100%);
            border: 1px solid var(--border);
            border-radius: 28px;
            padding: 2.25rem 2.5rem 2rem;
            box-shadow: 0 16px 40px -10px rgba(11, 43, 85, 0.08);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
            height: 100%;
            box-sizing: border-box;
            justify-content: space-between;
        }
        .branches-slideshow-container {
            width: 100%;
            position: relative;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0.5rem 0;
        }
        .branch-slide {
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            opacity: 0;
            transition: opacity 0.4s ease, transform 0.4s ease;
            transform: translateY(6px);
        }
        .branch-slide.active {
            display: flex;
            opacity: 1;
            transform: translateY(0);
        }
        /* Forward / Backward Navigation Arrows (Centered Below) */
        .branch-controls-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.25rem;
            margin-top: 1.25rem;
            width: 100%;
        }
        .branch-nav-arrow {
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #FFFFFF;
            border: 1.5px solid var(--border);
            color: var(--navy);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 5;
            transition: all 0.25s ease;
            box-shadow: var(--shadow-sm);
            font-size: 1.05rem;
            flex-shrink: 0;
        }
        .branch-nav-arrow:hover {
            background: var(--navy);
            color: #FFFFFF;
            border-color: var(--navy);
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(11, 43, 85, 0.18);
        }

        /* Prominent BRAND NAME Logo (Enlarged) */
        .branch-slide-brand {
            width: 100%;
            background: transparent;
            border: none;
            padding: 0.25rem 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            height: 110px;
            box-sizing: border-box;
        }
        .branch-slide-logo {
            max-height: 85px;
            max-width: 300px;
            object-fit: contain;
            display: block;
            filter: drop-shadow(0 6px 16px rgba(11, 43, 85, 0.08));
            transition: transform 0.35s ease;
        }
        .branch-slide:hover .branch-slide-logo {
            transform: scale(1.05);
        }
        /* Middle Excerpt Text */
        .branch-slide-excerpt-box {
            width: 90%;
            background: transparent;
            border: none;
            padding: 0;
            margin-bottom: 1.5rem;
            min-height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
        }
        .branch-slide-excerpt {
            font-size: 0.98rem;
            color: var(--text-body);
            line-height: 1.65;
            margin: 0;
        }
        /* Bottom About Us Button */
        .branch-slide-action {
            margin-bottom: 0.25rem;
        }
        .branch-about-link {
            font-size: 0.9rem;
            font-weight: 700;
            padding: 0.6rem 1.75rem;
            border-radius: 9999px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: #FFFFFF;
            border: 1.5px solid var(--navy);
            color: var(--navy);
            box-shadow: 0 4px 14px rgba(11, 43, 85, 0.08);
            transition: all 0.25s ease;
        }
        .branch-about-link:hover {
            background: var(--navy);
            color: #FFFFFF;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(11, 43, 85, 0.18);
        }
        /* 3 Pagination Dots Navigation */
        .branch-dots-nav {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.65rem;
            margin: 0;
            flex-shrink: 0;
        }
        .branch-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #CBD5E1;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 0;
        }
        .branch-dot:hover {
            background: #94A3B8;
        }
        .branch-dot.active {
            background: var(--navy);
            width: 32px;
            border-radius: 9999px;
        }

        /* ===== SECTION 3: WECON ECOSYSTEM CARDS ===== */
        #ecosystem {
            background: var(--section-alt);
        }
        .ecosystem-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }
        .eco-card {
            background: #FFFFFF;
            border-radius: 20px;
            border: 1px solid var(--border);
            padding: 2.25rem 2rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: var(--shadow-sm);
        }
        .eco-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: transparent;
            transition: background 0.3s ease;
        }
        .eco-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
            border-color: rgba(18, 97, 181, 0.3);
        }
        .eco-card:hover::before {
            background: linear-gradient(90deg, var(--blue), var(--gold));
        }
        .eco-card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }
        .eco-card-icon {
            width: 54px;
            height: 54px;
            border-radius: 14px;
            background: var(--blue-subtle);
            color: var(--blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            transition: transform 0.3s ease;
        }
        .eco-card:hover .eco-card-icon {
            transform: scale(1.08) rotate(3deg);
        }
        .eco-card-num {
            font-size: 0.85rem;
            font-weight: 800;
            color: #CBD5E1;
            letter-spacing: 0.05em;
        }
        .eco-card-title {
            font-size: 1.45rem;
            font-weight: 800;
            color: var(--navy);
            margin-bottom: 0.75rem;
        }
        .eco-card-desc {
            font-size: 0.94rem;
            color: var(--text-body);
            line-height: 1.65;
            margin-bottom: 1.5rem;
        }
        .eco-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.75rem;
        }
        .eco-tag-item {
            font-size: 0.74rem;
            font-weight: 600;
            background: var(--section-alt);
            color: var(--text-muted);
            padding: 0.3rem 0.75rem;
            border-radius: 9999px;
            border: 1px solid var(--border);
        }
        .eco-card-cta {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            font-size: 0.92rem;
            font-weight: 700;
            color: var(--blue);
            text-decoration: none;
            transition: all 0.22s ease;
            margin-top: auto;
        }
        .eco-card-cta .arrow {
            transition: transform 0.22s ease;
        }
        .eco-card:hover .eco-card-cta {
            color: var(--navy);
        }
        .eco-card:hover .eco-card-cta .arrow {
            transform: translateX(5px);
        }

        /* ===== SECTION 4: UPCOMING EVENTS & AWARDS (MARKETECH & UPTECH BRANDED) ===== */
        #events {
            background: 
                radial-gradient(ellipse 70% 55% at 5% 20%, rgba(234, 88, 12, 0.16) 0%, rgba(234, 88, 12, 0.03) 55%, transparent 75%),
                radial-gradient(ellipse 70% 55% at 95% 75%, rgba(13, 148, 136, 0.17) 0%, rgba(13, 148, 136, 0.03) 55%, transparent 75%),
                linear-gradient(135deg, #FFF4EC 0%, #FAF8F6 40%, #E8F7F4 100%);
            position: relative;
            overflow: hidden;
        }
        .events-showcase-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3.5rem;
            align-items: center;
        }
        .events-showcase-info {
            display: flex;
            flex-direction: column;
        }
        .events-showcase-info .section-tag {
            margin-bottom: 1rem;
            align-self: flex-start;
        }
        .events-showcase-info .section-title {
            font-size: clamp(2rem, 3.2vw, 2.75rem);
            font-weight: 800;
            color: var(--navy);
            line-height: 1.2;
            margin-bottom: 1.2rem;
        }
        .events-showcase-info .section-desc {
            font-size: 1.08rem;
            color: var(--text-body);
            line-height: 1.82;
            margin-bottom: 2.25rem;
        }
        .events-slideshow-nav {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.5rem;
            padding-top: 1.25rem;
            border-top: 1px solid rgba(11, 43, 85, 0.1);
            margin-bottom: 0;
            width: 100%;
        }
        .slideshow-center-nav {
            display: inline-flex;
            align-items: center;
            gap: 1rem;
        }
        .slideshow-arrow-btn {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 1.5px solid var(--border);
            background: #FFFFFF;
            color: var(--navy);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: var(--shadow-sm);
        }
        .slideshow-arrow-btn:hover {
            background: #FFFFFF;
            color: #EA580C;
            border-color: #EA580C;
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(234, 88, 12, 0.18);
        }
        .slideshow-counter {
            font-family: inherit;
            font-size: 0.92rem;
            font-weight: 700;
            color: var(--text-muted);
            letter-spacing: 0.04em;
        }
        .slideshow-counter .counter-curr {
            color: var(--navy);
            font-size: 1.15rem;
            font-weight: 800;
        }
        .slideshow-dots {
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .slideshow-dot {
            width: 8px;
            height: 8px;
            border-radius: 9999px;
            background: #CBD5E1;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            border: none;
            padding: 0;
        }
        .slideshow-dot.active {
            width: 26px;
            background: #0B2B55;
        }

        /* Slideshow Showcase Container (Right Column) */
        .events-showcase-slider {
            position: relative;
            background: #FFFFFF;
            border-radius: 24px;
            border: 1px solid rgba(226, 232, 240, 0.9);
            box-shadow: 0 16px 45px -10px rgba(11, 43, 85, 0.08);
            box-shadow: var(--shadow-lg);
            overflow: hidden;
        }
        .marketech-slides-viewport {
            width: 100%;
            overflow: hidden;
            border-radius: 24px;
            position: relative;
        }
        .marketech-slides-track {
            display: flex;
            transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: transform;
        }
        .marketech-slide {
            min-width: 100%;
            width: 100%;
            box-sizing: border-box;
            padding: 1.75rem 2rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-decoration: none;
            color: inherit;
        }
        .slide-brand-frame {
            background: transparent;
            border: none;
            border-radius: 18px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            aspect-ratio: 2.04 / 1;
            margin-bottom: 1.25rem;
            position: relative;
            box-shadow: none;
            transition: all 0.35s ease;
        }
        .marketech-slide:hover .slide-brand-frame {
            border: none;
            box-shadow: none;
            transform: none;
        }
        .slide-brand-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
            filter: drop-shadow(0 4px 14px rgba(11, 43, 85, 0.08));
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .marketech-slide:hover .slide-brand-img {
            transform: scale(1.04);
        }
        .slide-meta-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.75rem;
            flex-wrap: wrap;
            margin-bottom: 0.75rem;
        }
        .slide-badge {
            font-size: 0.72rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 0.3rem 0.75rem;
            border-radius: 9999px;
        }
        .badge-conf {
            background: rgba(18, 97, 181, 0.1);
            color: var(--blue);
            border: 1px solid rgba(18, 97, 181, 0.2);
        }
        .badge-award {
            background: rgba(200, 150, 42, 0.12);
            color: #92400e;
            border: 1px solid rgba(200, 150, 42, 0.3);
        }
        .slide-organizer {
            font-size: 0.76rem;
            font-weight: 700;
            color: var(--navy);
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }
        .slide-title {
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--navy);
            line-height: 1.28;
            margin-bottom: 0.35rem;
            transition: color 0.2s ease;
        }
        .marketech-slide:hover .slide-title {
            color: var(--blue);
        }
        .slide-subtitle {
            font-size: 0.86rem;
            font-weight: 600;
            color: var(--blue);
            margin-bottom: 0.75rem;
        }
        .slide-desc {
            font-size: 0.90rem;
            color: var(--text-body);
            line-height: 1.62;
            margin-bottom: 1.25rem;
            flex-grow: 1;
        }
        .slide-footer {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 1rem;
            border-top: 1px solid var(--border);
            font-size: 0.88rem;
            text-align: center;
        }
        .slide-footer-cta {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.45rem;
            font-weight: 700;
            color: var(--blue);
            padding: 0.65rem 1.6rem;
            border-radius: 9999px;
            background: var(--blue-subtle);
            border: 1.5px solid rgba(18, 97, 181, 0.2);
            transition: all 0.25s ease;
        }
        .marketech-slide:hover .slide-footer-cta {
            background: var(--navy);
            color: #FFFFFF;
            border-color: var(--navy);
            gap: 0.75rem;
            box-shadow: 0 4px 14px rgba(11, 43, 85, 0.2);
        }

        @media (max-width: 992px) {
            .events-showcase-grid {
                grid-template-columns: 1fr;
                gap: 2.75rem;
            }
            .events-showcase-slider {
                max-width: 600px;
                margin: 0 auto;
                width: 100%;
            }
        }
        @media (max-width: 600px) {
            .marketech-slide {
                padding: 1.5rem;
            }
            .slide-brand-frame {
                min-height: 140px;
                padding: 1.5rem 1rem;
            }
            .slide-brand-img {
                max-height: 95px;
            }
        }

        /* ===== SECTION 5: AWARDS ("RECOGNIZING EXCELLENCE") ===== */
        #awards {
            background: var(--section-alt);
            position: relative;
        }
        .awards-tab-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            background: #FFFFFF;
            padding: 0.4rem;
            border-radius: 9999px;
            max-width: 460px;
            margin: 0 auto 3rem;
            border: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
        }
        .award-tab-btn {
            flex: 1;
            padding: 0.65rem 1.4rem;
            border-radius: 9999px;
            border: none;
            background: transparent;
            font-size: 0.92rem;
            font-weight: 600;
            color: var(--text-muted);
            cursor: pointer;
            transition: all 0.25s ease;
            font-family: inherit;
        }
        .award-tab-btn.active {
            background: var(--navy);
            color: #FFFFFF;
            box-shadow: 0 4px 14px rgba(11, 43, 85, 0.2);
        }
        .award-panel {
            display: none;
        }
        .award-panel.active {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            animation: fadeIn 0.4s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .award-card {
            background: #FFFFFF;
            border-radius: 18px;
            border: 1px solid var(--border);
            padding: 2.25rem 2rem;
            box-shadow: var(--shadow-sm);
            display: flex;
            flex-direction: column;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
        }
        .award-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-md);
            border-color: rgba(200, 150, 42, 0.4);
        }
        .award-trophy {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: var(--gold-soft);
            color: #B45309;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 1.25rem;
        }
        .award-program-badge {
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 0.5rem;
        }
        .award-card-title {
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--navy);
            margin-bottom: 0.75rem;
            line-height: 1.3;
        }
        .award-card-desc {
            font-size: 0.9rem;
            color: var(--text-body);
            line-height: 1.65;
            margin-bottom: 1.5rem;
            flex: 1;
        }
        .award-details-list {
            list-style: none;
            padding: 0;
            margin: 0 0 1.5rem;
            font-size: 0.85rem;
            color: var(--text-muted);
        }
        .award-details-list li {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.45rem;
        }
        .award-actions-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.25rem;
            margin-top: 3.5rem;
            flex-wrap: wrap;
        }

        /* ===== SECTION 6: FEATURED PROGRAM ===== */
        #featured-program {
            background: linear-gradient(135deg, var(--navy-dark) 0%, var(--navy) 60%, var(--navy-light) 100%);
            color: #FFFFFF;
            position: relative;
            overflow: hidden;
        }
        .featured-program-inner {
            display: grid;
            grid-template-columns: 1.15fr 1fr;
            gap: 4.5rem;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        .featured-tag {
            background: rgba(200, 150, 42, 0.2);
            color: #FCD34D;
            border-color: rgba(200, 150, 42, 0.4);
        }
        .featured-title {
            font-size: clamp(2.2rem, 3.8vw, 3.25rem);
            font-weight: 900;
            line-height: 1.15;
            color: #FFFFFF;
            margin-bottom: 1.25rem;
            letter-spacing: -0.02em;
        }
        .featured-desc {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.75;
            margin-bottom: 2rem;
        }
        .featured-stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.25rem;
            margin-bottom: 2.5rem;
        }
        .featured-stat-box {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 14px;
            padding: 1.15rem 1rem;
            backdrop-filter: blur(10px);
            text-align: center;
        }
        .featured-stat-num {
            font-size: 1.85rem;
            font-weight: 900;
            color: #FCD34D;
            display: block;
        }
        .featured-stat-label {
            font-size: 0.74rem;
            color: rgba(255, 255, 255, 0.7);
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }
        .featured-card-preview {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 24px;
            padding: 2.5rem;
            backdrop-filter: blur(16px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
            position: relative;
        }
        .preview-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.75rem;
            padding-bottom: 1.25rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
        }
        .preview-badge {
            background: rgba(18, 97, 181, 0.4);
            color: #93C5FD;
            padding: 0.35rem 0.95rem;
            border-radius: 9999px;
            font-size: 0.78rem;
            font-weight: 700;
            border: 1px solid rgba(147, 197, 253, 0.3);
        }
        .preview-timeline-item {
            display: flex;
            gap: 1.25rem;
            margin-bottom: 1.5rem;
        }
        .timeline-bullet {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #FCD34D;
            margin-top: 6px;
            flex-shrink: 0;
            box-shadow: 0 0 10px rgba(252, 211, 77, 0.6);
        }
        .timeline-content-title {
            font-size: 0.96rem;
            font-weight: 700;
            color: #FFFFFF;
            margin-bottom: 0.2rem;
        }
        .timeline-content-desc {
            font-size: 0.84rem;
            color: rgba(255, 255, 255, 0.7);
        }

        /* ===== SECTION 7: SPEAKERS / INDUSTRY LEADERS (HR FORWARD ASIA BRANDED) ===== */
        #speakers {
            background: linear-gradient(180deg, #FAF6F3 0%, #F8FAFC 100%);
        }
        #speakers .section-tag {
            background: rgba(192, 108, 68, 0.1);
            color: #C06C44;
            border-color: rgba(192, 108, 68, 0.25);
        }
        .speakers-track {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1.25rem;
        }
        @media (max-width: 1200px) {
            .speakers-track {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        @media (max-width: 768px) {
            .speakers-track {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 500px) {
            .speakers-track {
                grid-template-columns: 1fr;
            }
        }
        .speaker-card {
            background: #FFFFFF;
            border-radius: 20px;
            border: 1px solid var(--border);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            display: flex;
            flex-direction: column;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
            width: 100%;
        }
        .speaker-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 14px 36px rgba(192, 108, 68, 0.14);
            border-color: rgba(192, 108, 68, 0.45);
        }
        .speaker-photo-wrap {
            height: 200px;
            position: relative;
            background: #E2E8F0;
            overflow: hidden;
        }
        .speaker-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .speaker-card:hover .speaker-photo {
            transform: scale(1.05);
        }
        .speaker-industry-tag {
            position: absolute;
            bottom: 12px;
            left: 12px;
            background: rgba(192, 108, 68, 0.92);
            color: #FFFFFF;
            backdrop-filter: blur(8px);
            padding: 0.3rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.05em;
        }
        .speaker-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex: 1;
        }
        .speaker-name {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--navy);
            margin-bottom: 0.25rem;
            transition: color 0.25s ease;
        }
        .speaker-card:hover .speaker-name a {
            color: #C06C44 !important;
        }
        .speaker-title {
            font-size: 0.84rem;
            font-weight: 600;
            color: #C06C44;
            margin-bottom: 0.15rem;
        }
        .speaker-company {
            font-size: 0.82rem;
            color: var(--text-muted);
            margin-bottom: 1.1rem;
        }
        .speaker-bio-hover {
            font-size: 0.82rem;
            color: var(--text-body);
            line-height: 1.55;
            border-top: 1px solid var(--border-light);
            padding-top: 0.85rem;
            margin-top: auto;
        }
        .speaker-topics {
            display: flex;
            flex-wrap: wrap;
            gap: 0.35rem;
            margin-top: 0.75rem;
        }
        .speaker-topic-badge {
            font-size: 0.68rem;
            background: var(--blue-subtle);
            color: var(--blue);
            padding: 0.2rem 0.55rem;
            border-radius: 4px;
            font-weight: 600;
        }

        /* ===== SECTION 8: INSIGHTS & MEDIA (TRI-BRAND AMBIENT BACKGROUND) ===== */
        #insights {
            background: 
                radial-gradient(ellipse 70% 55% at 8% 25%, rgba(234, 88, 12, 0.16) 0%, rgba(234, 88, 12, 0.03) 55%, transparent 75%),
                radial-gradient(ellipse 70% 55% at 50% 80%, rgba(13, 148, 136, 0.16) 0%, rgba(13, 148, 136, 0.03) 55%, transparent 75%),
                radial-gradient(ellipse 70% 55% at 92% 25%, rgba(192, 108, 68, 0.16) 0%, rgba(192, 108, 68, 0.03) 55%, transparent 75%),
                linear-gradient(135deg, #FFF4EC 0%, #FAF8F6 35%, #E8F7F4 70%, #FAF2EC 100%);
            position: relative;
            overflow: hidden;
        }
        .insights-filters {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin-bottom: 2.75rem;
        }
        .filter-btn {
            padding: 0.55rem 1.35rem;
            border-radius: 9999px;
            border: 1px solid var(--border);
            background: var(--section-alt);
            color: var(--text-body);
            font-size: 0.88rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.22s ease;
            font-family: inherit;
        }
        .filter-btn:hover {
            border-color: var(--navy);
            color: var(--navy);
        }
        .filter-btn.active {
            background: var(--navy);
            color: #FFFFFF;
            border-color: var(--navy);
            box-shadow: 0 4px 14px rgba(11, 43, 85, 0.18);
        }
        .insights-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }
        .insight-card {
            background: #FFFFFF;
            border-radius: 18px;
            border: 1px solid var(--border);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: var(--shadow-sm);
        }
        .insight-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-md);
            border-color: rgba(18, 97, 181, 0.3);
        }
        .insight-thumb {
            height: 190px;
            position: relative;
            background: var(--navy);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .it-blue { background: linear-gradient(135deg, #1261B5, #0a447f); }
        .it-orange { background: linear-gradient(135deg, #ea580c, #9a3412); }
        .it-green { background: linear-gradient(135deg, #10b981, #065f46); }
        .it-gold { background: linear-gradient(135deg, #d97706, #78350f); }
        .it-purple { background: linear-gradient(135deg, #8b5cf6, #4c1d95); }
        .insight-type-badge {
            position: absolute;
            top: 14px;
            left: 14px;
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            background: rgba(0, 0, 0, 0.45);
            color: #FFFFFF;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            backdrop-filter: blur(8px);
        }
        .insight-format-icon {
            font-size: 3rem;
            opacity: 0.85;
            transition: transform 0.3s ease;
        }
        .insight-card:hover .insight-format-icon {
            transform: scale(1.1);
        }
        .insight-body {
            padding: 1.65rem;
            display: flex;
            flex-direction: column;
            flex: 1;
            justify-content: space-between;
        }
        .insight-date-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.78rem;
            color: var(--text-muted);
            margin-bottom: 0.65rem;
        }
        .insight-title {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--navy);
            line-height: 1.4;
            margin-bottom: 0.65rem;
        }
        .insight-desc {
            font-size: 0.88rem;
            color: var(--text-body);
            line-height: 1.6;
            margin-bottom: 1.35rem;
        }
        .insight-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 1rem;
            border-top: 1px solid var(--border-light);
        }
        .insight-link {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            font-size: 0.88rem;
            font-weight: 700;
            color: var(--blue);
            text-decoration: none;
            transition: gap 0.2s ease;
        }
        .insight-link:hover {
            gap: 0.6rem;
            color: var(--navy);
        }

        /* ===== SECTION 9: PARTNERS & SPONSORS ===== */
        #partners {
            background: #FFFFFF;
            border-top: 1px solid var(--border-light);
            border-bottom: 1px solid var(--border-light);
        }
        .marquee-wrapper {
            position: relative;
            overflow: hidden;
            width: 100%;
            padding: 1.5rem 0;
            mask-image: linear-gradient(90deg, transparent 0%, #000000 12%, #000000 88%, transparent 100%);
            -webkit-mask-image: linear-gradient(90deg, transparent 0%, #000000 12%, #000000 88%, transparent 100%);
        }
        .marquee-content {
            display: flex;
            align-items: center;
            gap: 3.5rem;
            width: max-content;
            animation: marqueeScroll 28s linear infinite;
        }
        .marquee-content:hover {
            animation-play-state: paused;
        }
        @keyframes marqueeScroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .partner-logo-box {
            display: flex;
            align-items: center;
            gap: 0.65rem;
            padding: 0.85rem 1.75rem;
            background: var(--section-alt);
            border: 1px solid var(--border);
            border-radius: 12px;
            font-weight: 800;
            font-size: 1.05rem;
            color: #475569;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            transition: all 0.25s ease;
            white-space: nowrap;
        }
        .partner-logo-box:hover {
            border-color: var(--blue);
            color: var(--navy);
            transform: translateY(-2px);
            background: #FFFFFF;
            box-shadow: var(--shadow-sm);
        }
        .partner-cta-banner {
            background: linear-gradient(135deg, var(--blue-subtle) 0%, #FFFFFF 100%);
            border: 1px solid rgba(18, 97, 181, 0.2);
            border-radius: 20px;
            padding: 2.25rem 2.5rem;
            margin-top: 3.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
            flex-wrap: wrap;
        }
        .partner-cta-title {
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--navy);
            margin-bottom: 0.35rem;
        }
        .partner-cta-desc {
            font-size: 0.94rem;
            color: var(--text-body);
        }

        /* ===== SECTION 10: WHY WECON? ===== */
        #why-wecon {
            background: var(--section-alt);
        }
        .why-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.75rem;
        }
        .why-card {
            background: #FFFFFF;
            border-radius: 20px;
            border: 1px solid var(--border);
            padding: 2.25rem 1.85rem;
            display: flex;
            flex-direction: column;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
            box-shadow: var(--shadow-sm);
        }
        .why-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
            border-color: var(--blue);
        }
        .why-step {
            font-size: 2.2rem;
            font-weight: 900;
            color: #CBD5E1;
            line-height: 1;
            margin-bottom: 1.25rem;
            transition: color 0.3s ease;
        }
        .why-card:hover .why-step {
            color: var(--blue);
        }
        .why-title {
            font-size: 1.35rem;
            font-weight: 800;
            color: var(--navy);
            margin-bottom: 0.75rem;
        }
        .why-desc {
            font-size: 0.92rem;
            color: var(--text-body);
            line-height: 1.65;
            margin-bottom: 1.25rem;
            flex: 1;
        }
        .why-tag {
            font-size: 0.74rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--blue);
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
        }

        /* ===== SECTION 11: USER JOURNEY ("WHAT BRINGS YOU TO WECON?") ===== */
        #journey {
            background: var(--section-alt);
            position: relative;
        }
        .journey-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.75rem;
        }
        .journey-card {
            background: #FFFFFF;
            border: 1.5px solid var(--border);
            border-radius: 20px;
            padding: 2rem 1.85rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            text-decoration: none;
            cursor: pointer;
            box-shadow: var(--shadow-sm);
        }
        .journey-card:hover {
            transform: translateY(-6px);
            border-color: var(--blue);
            box-shadow: var(--shadow-md);
            background: #FFFFFF;
        }
        .journey-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 1.25rem;
        }
        .journey-icon {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            background: var(--blue-subtle);
            color: var(--blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
        }
        .journey-target-badge {
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--navy);
            background: var(--section-alt);
            padding: 0.3rem 0.7rem;
            border-radius: 9999px;
            border: 1px solid var(--border);
        }
        .journey-question {
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--navy);
            line-height: 1.35;
            margin-bottom: 0.65rem;
        }
        .journey-answer {
            font-size: 0.9rem;
            color: var(--text-body);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        .journey-link-label {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--blue);
            transition: gap 0.2s ease;
        }
        .journey-card:hover .journey-link-label {
            color: var(--navy);
            gap: 0.65rem;
        }

        /* ===== SECTION 12: NEWSLETTER & COMMUNITY (STAY CONNECTED) ===== */
        #newsletter, #stay-connected {
            background: var(--section-alt);
        }
        .newsletter-box {
            background: linear-gradient(135deg, var(--navy) 0%, #124074 100%);
            border-radius: 28px;
            padding: 4rem 3.5rem;
            color: #FFFFFF;
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-xl);
        }
        .newsletter-box::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(18, 97, 181, 0.4) 0%, transparent 70%);
            pointer-events: none;
        }
        .newsletter-inner {
            display: grid;
            grid-template-columns: 1.15fr 1fr;
            gap: 3.5rem;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        .newsletter-title {
            font-size: clamp(2rem, 3.2vw, 2.5rem);
            font-weight: 900;
            line-height: 1.2;
            color: #FFFFFF;
            margin-bottom: 1rem;
        }
        .newsletter-desc {
            font-size: 1.05rem;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.7;
        }
        .newsletter-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        .form-input {
            width: 100%;
            padding: 0.95rem 1.25rem;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.25);
            background: rgba(255, 255, 255, 0.12);
            color: #FFFFFF;
            font-family: inherit;
            font-size: 0.95rem;
            transition: all 0.22s ease;
            backdrop-filter: blur(8px);
        }
        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }
        .form-input:focus {
            outline: none;
            border-color: #FFFFFF;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.2);
        }
        .form-checkboxes {
            display: flex;
            gap: 1.25rem;
            flex-wrap: wrap;
            font-size: 0.82rem;
            color: rgba(255, 255, 255, 0.85);
            margin: 0.25rem 0;
        }
        .form-checkbox-item {
            display: flex;
            align-items: center;
            gap: 0.45rem;
            cursor: pointer;
        }
        .newsletter-status {
            font-size: 0.88rem;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            display: none;
            margin-top: 0.5rem;
        }
        .newsletter-status.success {
            display: block;
            background: rgba(16, 185, 129, 0.25);
            border: 1px solid rgba(16, 185, 129, 0.5);
            color: #A7F3D0;
        }

        /* ===== SECTION 13: FINAL CTA ===== */
        #final-cta {
            background: linear-gradient(135deg, var(--navy-dark) 0%, var(--navy) 60%, var(--blue) 100%);
            position: relative;
            overflow: hidden;
            color: #FFFFFF;
            text-align: center;
            padding: 7.5rem 0;
        }
        .final-cta-deco {
            position: absolute;
            pointer-events: none;
            opacity: 0.12;
        }
        .final-cta-deco-1 {
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: var(--gold);
            top: -100px;
            left: -100px;
            filter: blur(80px);
        }
        .final-cta-deco-2 {
            width: 450px;
            height: 450px;
            border-radius: 50%;
            background: var(--blue-light);
            bottom: -150px;
            right: -100px;
            filter: blur(90px);
        }
        .final-cta-inner {
            max-width: 820px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        .final-cta-title {
            font-size: clamp(2.3rem, 4.2vw, 3.4rem);
            font-weight: 900;
            line-height: 1.15;
            color: #FFFFFF;
            margin-bottom: 1.25rem;
            letter-spacing: -0.025em;
        }
        .final-cta-desc {
            font-size: 1.15rem;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.75;
            margin-bottom: 2.75rem;
            max-width: 660px;
            margin-left: auto;
            margin-right: auto;
        }
        .final-cta-buttons {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.25rem;
            flex-wrap: wrap;
        }

        /* ===== FOOTER ===== */
        footer {
            background: var(--navy-dark);
            color: #FFFFFF;
            padding: 5.5rem 0 2.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr repeat(4, 1fr);
            gap: 3rem;
            margin-bottom: 4rem;
        }
        .footer-logo-link {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.2s ease;
        }
        .footer-logo-link:hover {
            transform: scale(1.03);
            opacity: 1;
        }
        .footer-logo-img {
            height: 112px;
            width: auto;
            object-fit: contain;
            display: block;
            margin: -30px -8px;
            filter: brightness(0) invert(1);
            opacity: 0.95;
            transition: opacity 0.2s ease;
        }
        .footer-brand-col p {
            font-size: 0.9rem;
            color: #94A3B8;
            line-height: 1.7;
            margin: 1.25rem 0 1.75rem;
            max-width: 320px;
        }
        .footer-col-title {
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: #FFFFFF;
            margin-bottom: 1.35rem;
        }
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        .footer-links a {
            color: #94A3B8;
            text-decoration: none;
            font-size: 0.88rem;
            transition: all 0.2s ease;
        }
        .footer-links a:hover {
            color: #FFFFFF;
            padding-left: 4px;
        }
        .footer-social-row {
            display: flex;
            gap: 0.65rem;
        }
        .footer-social-btn {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 700;
            transition: all 0.22s ease;
        }
        .footer-social-btn:hover {
            background: var(--blue);
            color: #FFFFFF;
            transform: translateY(-2px);
        }
        .footer-bottom {
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1.25rem;
            font-size: 0.82rem;
            color: #64748B;
        }
        .footer-legal-links {
            display: flex;
            gap: 1.5rem;
        }
        .footer-legal-links a {
            color: #64748B;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        .footer-legal-links a:hover {
            color: #94A3B8;
        }

        /* ===== REUSABLE MODAL SYSTEM ===== */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(11, 43, 85, 0.7);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 2000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }
        .modal-overlay.open {
            opacity: 1;
            pointer-events: auto;
        }
        .modal-container {
            background: #FFFFFF;
            border-radius: 24px;
            width: 100%;
            max-width: 580px;
            padding: 2.75rem 2.5rem;
            box-shadow: var(--shadow-xl);
            position: relative;
            transform: scale(0.95) translateY(10px);
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            max-height: 90vh;
            overflow-y: auto;
        }
        .modal-overlay.open .modal-container {
            transform: scale(1) translateY(0);
        }
        .modal-close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 1px solid var(--border);
            background: var(--section-alt);
            color: var(--text-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .modal-close-btn:hover {
            background: var(--navy);
            color: #FFFFFF;
        }
        .modal-title {
            font-size: 1.65rem;
            font-weight: 800;
            color: var(--navy);
            margin-bottom: 0.5rem;
        }
        .modal-subtitle {
            font-size: 0.92rem;
            color: var(--text-muted);
            margin-bottom: 1.75rem;
        }
        .modal-form {
            display: flex;
            flex-direction: column;
            gap: 1.15rem;
        }
        .modal-input-group label {
            display: block;
            font-size: 0.82rem;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 0.4rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .modal-input {
            width: 100%;
            padding: 0.85rem 1.15rem;
            border-radius: 10px;
            border: 1.5px solid var(--border);
            font-family: inherit;
            font-size: 0.94rem;
            color: var(--text-heading);
            transition: border-color 0.2s ease;
        }
        .modal-input:focus {
            outline: none;
            border-color: var(--blue);
            box-shadow: 0 0 0 3px rgba(18, 97, 181, 0.12);
        }
        textarea.modal-input {
            resize: vertical;
            min-height: 100px;
        }

        /* ===== RESPONSIVE MEDIA QUERIES ===== */
        @media (max-width: 1120px) {
            .hero-inner, .about-split, .featured-program-inner, .newsletter-inner {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
            .hero-visual-wrap { max-width: 500px; margin-top: 1rem; }
            .ecosystem-grid, .award-panel.active, .insights-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .why-grid { grid-template-columns: repeat(2, 1fr); }
            .journey-grid { grid-template-columns: repeat(2, 1fr); }
            .footer-grid { grid-template-columns: 1fr repeat(2, 1fr); }
        }

        @media (max-width: 900px) {
            #navbar {
                top: 10px;
                width: calc(100% - 1.5rem);
                height: 62px;
            }
            .nav-logo { height: 46px; }
            .nav-logo-img {
                height: 96px;
                margin: -25px -6px;
            }
            .nav-container { padding: 0 1.25rem; justify-content: space-between; }
            .nav-toggle { display: flex; }
            .nav-links {
                position: fixed;
                top: 76px;
                left: 12px;
                right: 12px;
                background: #FFFFFF;
                border-radius: 20px;
                flex-direction: column;
                align-items: flex-start;
                gap: 0;
                height: auto;
                padding: 1.25rem 2rem 1.75rem;
                border: 1px solid var(--border);
                box-shadow: var(--shadow-xl);
                transform: translateY(-130%);
                opacity: 0;
                pointer-events: none;
                transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.25s ease;
            }
            .nav-links.open {
                transform: translateY(0);
                opacity: 1;
                pointer-events: auto;
            }
            .nav-links li {
                width: 100%;
                height: auto;
            }
            .nav-links li a {
                width: 100%;
                padding: 0.85rem 0;
                font-size: 1rem;
                border-bottom: 1px solid var(--border-light);
            }
            .nav-links li a::after { display: none; }
            .nav-links li a.active { color: var(--blue); }
            .nav-cta-wrapper { display: none; }
            .nav-links li.mobile-cta {
                display: block !important;
                width: 100%;
                padding-top: 1.25rem;
            }
            .mobile-cta .nav-cta-btn {
                display: flex;
                justify-content: center;
                width: 100%;
            }
            .ecosystem-grid, .award-panel.active, .insights-grid, .why-grid, .journey-grid {
                grid-template-columns: 1fr;
            }
            .featured-stats-grid { grid-template-columns: repeat(3, 1fr); }
            .form-row { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr; }
        }

        @media (max-width: 640px) {
            .section-padding { padding: 4.5rem 0; }
            .container { padding: 0 1.25rem; }
            .hero-floating-badge { display: none; }
            .event-card { flex: 0 0 310px; }
            .speaker-card { flex: 0 0 260px; }
            .featured-stats-grid { grid-template-columns: 1fr; }
            .newsletter-box { padding: 2.5rem 1.5rem; }
            .wheel-grid { grid-template-columns: 1fr; }
            .about-pill-matrix { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<!-- Scroll Progress Indicator -->
<div id="scroll-progress"></div>

<!-- ===== HEADER / STICKY NAVBAR ===== -->
<nav id="navbar" role="navigation" aria-label="Main Navigation">
    <div class="nav-container">
        <!-- Logo Lockup -->
        <a href="#hero" class="nav-logo" aria-label="WECON Home">
            <img src="{{ asset('images/WECON ASIA (2LINE)_Horizontal_Coloured.png') }}?v={{ file_exists(public_path('images/WECON ASIA (2LINE)_Horizontal_Coloured.png')) ? filemtime(public_path('images/WECON ASIA (2LINE)_Horizontal_Coloured.png')) : 1 }}" alt="WECON ASIA" class="nav-logo-img">
        </a>

        <!-- Mobile Navigation Toggle -->
        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation menu" type="button">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Navigation Links (Centered) -->
        <ul class="nav-links" id="navLinks">
            <li><a href="#about" id="nav-about">About</a></li>
            <li><a href="#events" id="nav-events">Upcoming</a></li>
            <li><a href="#speakers" id="nav-speakers">HR Forward</a></li>
            <li><a href="#insights" id="nav-insights">Articles</a></li>
            <li><a href="#journey" id="nav-careers">Guide</a></li>
            <li><a href="#final-cta" id="nav-contact">Contact</a></li>
            <li class="mobile-cta">
                <a href="#stay-connected" class="nav-cta-btn">Stay Connected <span class="cta-arrow">&rarr;</span></a>
            </li>
        </ul>

        <!-- Right Side Persistent Button: Stay Connected -->
        <div class="nav-cta-wrapper">
            <a href="#stay-connected" class="nav-cta-btn" id="nav-connected-btn">Stay Connected <span class="cta-arrow">&rarr;</span></a>
        </div>
    </div>
</nav>

<!-- ===== HERO SECTION ===== -->
<section id="hero">
    <div class="hero-inner">
        <!-- Left Editorial Content -->
        <div class="hero-content reveal" style="transition-delay: 0.05s">
            <span class="hero-tag">
                <span class="trust-dot" style="background: var(--blue);"></span>
                Asia-Pacific Media & Business Ecosystem
            </span>
            <h1 class="hero-title">
                Connecting Ideas, <span class="highlight">People</span>, and Opportunities
            </h1>
            <p class="hero-desc">
                WECON brings together industry leaders, organizations, professionals, and communities through events, awards, media, and meaningful business experiences.
            </p>
            <div class="hero-actions">
                <a href="#insights" class="btn btn-primary" id="hero-primary-cta">
                    See Articles <span class="cta-arrow">&rarr;</span>
                </a>
                <a href="#events" class="btn btn-outline-navy" id="hero-secondary-cta">
                    View Upcoming Events
                </a>
            </div>

            <!-- Ecosystem Brand Trust Badges -->
            <div class="hero-trust-bar">
                <span class="hero-trust-label">Our Core Brands:</span>
                <div class="hero-trust-badges">
                    <span class="hero-trust-item">
                       <span class="trust-dot" style="background: var(--orange);"></span> MARKETECH APAC
                    </span>
                    <span class="hero-trust-item">
                        <span class="trust-dot" style="background: var(--blue);"></span> UpTech
                    </span>
                    <span class="hero-trust-item">
                        <span class="trust-dot" style="background: var(--green);"></span> HR Forward
                    </span>
                </div>
            </div>
        </div>

        <!-- Right Visual Display with Floating Badges -->
        <div class="hero-visual-wrap reveal" style="transition-delay: 0.15s">
            <div class="hero-visual-glow"></div>
            
            <!-- Floating Interactive Context Badges -->
            <a href="#events" class="hero-floating-badge badge-pos-1">
                <span class="trust-dot" style="background: var(--blue);"></span>
                Upcoming Events and Awards
            </a>
            <a href="#speakers" class="hero-floating-badge badge-pos-2">
                <span class="trust-dot" style="background: var(--gold);"></span>
                Keynote Featured & Leadership
            </a>
            <a href="#insights" class="hero-floating-badge badge-pos-3">
                <span class="trust-dot" style="background: var(--green);"></span>
                News & Insights
            </a>

            <!-- Central Hero Graphic -->
            <div class="hero-photo-card">
                <img src="{{ asset('images/hero-visual.png') }}?v={{ file_exists(public_path('images/hero-visual.png')) ? filemtime(public_path('images/hero-visual.png')) : 1 }}" 
                     alt="WECON Asia Business Ecosystem" 
                     class="hero-photo-img" 
                     id="hero-visual-photo">
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <a href="#about" class="hero-scroll-prompt" aria-label="Scroll down to explore">
        <span>Scroll to Explore</span>
        <div class="mouse-icon">
            <div class="mouse-wheel"></div>
        </div>
    </a>
</section>

<!-- ===== SECTION 2: WHAT IS WECON? ===== -->
<section id="about" class="section-padding">
    <div class="container">
        <div class="about-split">
            <!-- Left Narrative -->
            <div class="about-content reveal" style="transition-delay: 0.05s">
                <span class="section-tag">Who We Are</span>
                <h2 class="about-title">
                    More Than Media.<br>
                    <span class="accent-red">A Connected Business Ecosystem.</span>
                </h2>
                <p class="about-text">
                    WECON Asia Media Group, Inc. is a forward-thinking business media, events, and industry intelligence ecosystem that connects enterprise leaders, innovators, and professionals across Asia. Through premier conferences, prestigious awards, insightful editorial coverage, and curated networking, we shape industries and catalyze growth.
                </p>

            </div>

            <!-- Right Showcase Displaying WECON's 3 Media Branches (Clean Layout with Center Navigation Controls) -->
            <div class="about-branches-showcase reveal" style="transition-delay: 0.15s">
                <div class="branches-slideshow-container">
                    <!-- Branch Slide 1: MARKETECH APAC -->
                    <div class="branch-slide active" data-index="0">
                        <div class="branch-slide-brand">
                            <img src="{{ asset('images/marketech-logo.png') }}" alt="MARKETECH APAC" class="branch-slide-logo" />
                        </div>
                        <div class="branch-slide-excerpt-box">
                            <p class="branch-slide-excerpt">
                                Asia's premier marketing technology intelligence publication reporting on digital advertising, MarTech innovation, and brand strategy across APAC.
                            </p>
                        </div>
                        <div class="branch-slide-action">
                            <a href="https://marketech-apac.com/about-marketech-apac/" target="_blank" rel="noopener noreferrer" class="btn btn-outline-navy branch-about-link">
                                Visit Us &rarr;
                            </a>
                        </div>
                    </div>

                    <!-- Branch Slide 2: UpTech Media -->
                    <div class="branch-slide" data-index="1">
                        <div class="branch-slide-brand">
                            <img src="{{ asset('images/uptech-logo.png') }}" alt="UpTech Media" class="branch-slide-logo" />
                        </div>
                        <div class="branch-slide-excerpt-box">
                            <p class="branch-slide-excerpt">
                                Always moving upwards — verified technology media covering enterprise AI, data infrastructure, cybersecurity, fintech, and digital transformation.
                            </p>
                        </div>
                        <div class="branch-slide-action">
                            <a href="https://uptech-media.com/about-us/" target="_blank" rel="noopener noreferrer" class="btn btn-outline-navy branch-about-link">
                                Visit Us &rarr;
                            </a>
                        </div>
                    </div>

                    <!-- Branch Slide 3: HR Forward Asia -->
                    <div class="branch-slide" data-index="2">
                        <div class="branch-slide-brand">
                            <img src="{{ asset('images/hrforward-logo.png') }}" alt="HR Forward Asia" class="branch-slide-logo" />
                        </div>
                        <div class="branch-slide-excerpt-box">
                            <p class="branch-slide-excerpt">
                                Pan-Asian human capital publication dedicated to executive leadership, talent development, employee experience, and HR technology.
                            </p>
                        </div>
                        <div class="branch-slide-action">
                            <a href="https://hrforwardasia.com/about-us/" target="_blank" rel="noopener noreferrer" class="btn btn-outline-navy branch-about-link">
                                Visit Us &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Center Navigation: Prev Arrow, 3 Dots, Next Arrow -->
                <div class="branch-controls-wrapper">
                    <button class="branch-nav-arrow branch-nav-prev" id="branch-prev-btn" aria-label="Previous Branch">&#x2190;</button>
                    <div class="branch-dots-nav">
                        <button class="branch-dot active" data-slide="0" aria-label="MARKETECH APAC"></button>
                        <button class="branch-dot" data-slide="1" aria-label="UpTech Media"></button>
                        <button class="branch-dot" data-slide="2" aria-label="HR Forward Asia"></button>
                    </div>
                    <button class="branch-nav-arrow branch-nav-next" id="branch-next-btn" aria-label="Next Branch">&#x2192;</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== VALUE PROPOSITION: WHY WECON? ===== -->
<section id="why-wecon" class="section-padding">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag">Value Proposition</span>
            <h2 class="section-title">Why Engage with WECON?</h2>
            <p class="section-desc">
                Four strategic pillars that empower professionals, brands, and organizations to achieve enduring business impact.
            </p>
        </div>

        <div class="why-grid">
            <!-- 01 Connect -->
            <div class="why-card reveal" style="transition-delay: 0.05s">
                <div class="why-step">01</div>
                <h3 class="why-title">Connect</h3>
                <p class="why-desc">
                    Meet influential decision-makers, fellow directors, senior executives, and visionary founders in high-trust peer environments.
                </p>
                <span class="why-tag">&#x2714; High-Level Peer Network</span>
            </div>

            <!-- 02 Discover -->
            <div class="why-card reveal" style="transition-delay: 0.12s">
                <div class="why-step">02</div>
                <h3 class="why-title">Discover</h3>
                <p class="why-desc">
                    Access forward-looking business intelligence, actionable case studies, emerging tech trends, and fresh industry perspectives.
                </p>
                <span class="why-tag">&#x2714; Strategic Foresight</span>
            </div>

            <!-- 03 Participate -->
            <div class="why-card reveal" style="transition-delay: 0.18s">
                <div class="why-step">03</div>
                <h3 class="why-title">Participate</h3>
                <p class="why-desc">
                    Take the main stage as a speaker, enter competitive benchmark awards, or join specialized immersion masterclasses.
                </p>
                <span class="why-tag">&#x2714; Active Contribution</span>
            </div>

            <!-- 04 Grow -->
            <div class="why-card reveal" style="transition-delay: 0.24s">
                <div class="why-step">04</div>
                <h3 class="why-title">Grow</h3>
                <p class="why-desc">
                    Amplify commercial brand visibility, forge strategic cross-border partnerships, and capture transformative market opportunities.
                </p>
                <span class="why-tag">&#x2714; Exponential ROI</span>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 4: UPCOMING EVENTS & AWARDS ===== -->
<section id="events" class="section-padding">
    <div class="container">
        <div class="events-showcase-grid">
            <!-- Left Side: Content, Description, and CTA Button -->
            <div class="events-showcase-info reveal">
                <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                    <span class="section-tag tag-marketech">MARKETECH APAC</span>
                    <span class="section-tag tag-uptech">UpTech Media</span>
                </div>
                <h2 class="section-title">Upcoming Events & Awards</h2>
                <p class="section-desc">
                    In strategic collaboration with MARKETECH APAC and UPTECH MEDIA, WECON convenes Asia’s benchmark marketing summits, technology conferences, and prestigious industry awards. Explore the 10 premier platforms driving digital transformation, customer engagement, AI innovation, and commercial excellence across the region, connecting visionary enterprise leaders, brand pioneers, and technology innovators.
                </p>

                <!-- Slide indicator & Controls on the left -->
                <div class="events-slideshow-nav">
                    <!-- Backward button -->
                    <button class="slideshow-arrow-btn" id="marketech-prev-btn" aria-label="Previous Slide">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                    </button>

                    <!-- Center: Indicator Dots -->
                    <div class="slideshow-center-nav">
                        <div class="slideshow-dots" id="marketech-dots">
                            <button class="slideshow-dot active" data-slide-index="0" aria-label="Slide 1"></button>
                            <button class="slideshow-dot" data-slide-index="1" aria-label="Slide 2"></button>
                            <button class="slideshow-dot" data-slide-index="2" aria-label="Slide 3"></button>
                            <button class="slideshow-dot" data-slide-index="3" aria-label="Slide 4"></button>
                            <button class="slideshow-dot" data-slide-index="4" aria-label="Slide 5"></button>
                            <button class="slideshow-dot" data-slide-index="5" aria-label="Slide 6"></button>
                            <button class="slideshow-dot" data-slide-index="6" aria-label="Slide 7"></button>
                            <button class="slideshow-dot" data-slide-index="7" aria-label="Slide 8"></button>
                            <button class="slideshow-dot" data-slide-index="8" aria-label="Slide 9"></button>
                            <button class="slideshow-dot" data-slide-index="9" aria-label="Slide 10"></button>
                        </div>
                    </div>

                    <!-- Forward button -->
                    <button class="slideshow-arrow-btn" id="marketech-next-btn" aria-label="Next Slide">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
                </div>

            </div>

            <!-- Right Side: 10 Types of Display in MARKETECH Slideshow -->
            <div class="events-showcase-slider reveal" style="transition-delay: 0.15s">
                <div class="marketech-slides-viewport" id="marketech-slider-viewport">
                    <div class="marketech-slides-track" id="marketech-slides-track">
                        
                        <!-- 1. What's NEXT in Marketing (Conference) -->
                        <div class="marketech-slide">
                            <a href="https://marketech-apac.com/featured-events/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; flex-grow: 1;">
                                <div class="slide-brand-frame">
                                    <img src="{{ asset('images/events/marketech/1-whats-next-in-marketing.png') }}" alt="What's NEXT in Marketing" class="slide-brand-img">
                                </div>
                                <div class="slide-meta-row">
                                    <span class="slide-badge badge-conf">Conference Series</span>
                                    <span class="slide-organizer">MARKETECH APAC</span>
                                </div>
                                <h3 class="slide-title">What's NEXT in Marketing</h3>
                                <div class="slide-subtitle">Future of Marketing & AI Leadership Series</div>
                                <p class="slide-desc">
                                    Asia-Pacific's premier executive conference bringing together leading CMOs, brand innovators, and growth strategists to explore AI-driven marketing, customer engagement, and cross-border commercial acceleration.
                                </p>
                                <div class="slide-footer">
                                    <span class="slide-footer-cta">Explore on MARKETECH APAC &rarr;</span>
                                </div>
                            </a>
                        </div>

                        <!-- 2. Retail & E-Commerce Innovation (Conference) -->
                        <div class="marketech-slide">
                            <a href="https://marketech-apac.com/featured-events/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; flex-grow: 1;">
                                <div class="slide-brand-frame">
                                    <img src="{{ asset('images/events/marketech/2-retail-ecommerce-innovation.png') }}" alt="Retail & E-Commerce Innovation Series" class="slide-brand-img">
                                </div>
                                <div class="slide-meta-row">
                                    <span class="slide-badge badge-conf">Marketing & Tech Series</span>
                                    <span class="slide-organizer">MARKETECH APAC &bull; UPTECH MEDIA</span>
                                </div>
                                <h3 class="slide-title">Retail & E-Commerce Innovation</h3>
                                <div class="slide-subtitle">Omnichannel Strategy & Commerce Technology</div>
                                <p class="slide-desc">
                                    Dedicated to senior retail leaders, commerce founders, and digital strategists addressing modern unified commerce, inventory intelligence, automated fulfillment, and personalized shopping journeys.
                                </p>
                                <div class="slide-footer">
                                    <span class="slide-footer-cta">Explore on MARKETECH APAC &rarr;</span>
                                </div>
                            </a>
                        </div>

                        <!-- 3. Digital Experience Asia (Conference) -->
                        <div class="marketech-slide">
                            <a href="https://marketech-apac.com/featured-events/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; flex-grow: 1;">
                                <div class="slide-brand-frame">
                                    <img src="{{ asset('images/events/marketech/3-digital-experience-asia.png') }}" alt="Digital Experience Asia" class="slide-brand-img">
                                </div>
                                <div class="slide-meta-row">
                                    <span class="slide-badge badge-conf">Conference Series</span>
                                    <span class="slide-organizer">MARKETECH APAC &bull; UPTECH MEDIA</span>
                                </div>
                                <h3 class="slide-title">Digital Experience Asia (DX)</h3>
                                <div class="slide-subtitle">Enterprise CX, Experience Platforms & Journey Design</div>
                                <p class="slide-desc">
                                    A high-impact gathering uniting customer experience (CX) directors, digital product leads, and data architects to build immersive, human-centered brand interactions at scale.
                                </p>
                                <div class="slide-footer">
                                    <span class="slide-footer-cta">Explore on MARKETECH APAC &rarr;</span>
                                </div>
                            </a>
                        </div>

                        <!-- 4. Advertising Summit Asia (Conference) -->
                        <div class="marketech-slide">
                            <a href="https://marketech-apac.com/featured-events/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; flex-grow: 1;">
                                <div class="slide-brand-frame">
                                    <img src="{{ asset('images/events/marketech/4-advertising-summit-asia.png') }}" alt="Advertising Summit Asia" class="slide-brand-img">
                                </div>
                                <div class="slide-meta-row">
                                    <span class="slide-badge badge-conf">Executive Summit</span>
                                    <span class="slide-organizer">MARKETECH APAC</span>
                                </div>
                                <h3 class="slide-title">Advertising Summit Asia</h3>
                                <div class="slide-subtitle">Media Planning, Programmatic & Creative Tech</div>
                                <p class="slide-desc">
                                    The definitive summit for agency chiefs, media directors, and brand advertisers shaping programmatic strategy, addressable media, CTV evolution, and creative storytelling in a privacy-first world.
                                </p>
                                <div class="slide-footer">
                                    <span class="slide-footer-cta">Explore on MARKETECH APAC &rarr;</span>
                                </div>
                            </a>
                        </div>

                        <!-- 5. NEXT Awards (Awards) -->
                        <div class="marketech-slide">
                            <a href="https://marketech-apac.com/featured-events/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; flex-grow: 1;">
                                <div class="slide-brand-frame">
                                    <img src="{{ asset('images/events/marketech/5-next-awards.png') }}" alt="NEXT Awards" class="slide-brand-img">
                                </div>
                                <div class="slide-meta-row">
                                    <span class="slide-badge badge-award">Awards Program</span>
                                    <span class="slide-organizer">MARKETECH APAC</span>
                                </div>
                                <h3 class="slide-title">NEXT Awards</h3>
                                <div class="slide-subtitle">Shaping Innovation | The Future of Marketing</div>
                                <p class="slide-desc">
                                    The hallmark awards program honoring visionary marketing executives, agile brands, and standout agencies that have set new standards of effectiveness, creativity, and customer-led innovation.
                                </p>
                                <div class="slide-footer">
                                    <span class="slide-footer-cta">Explore on MARKETECH APAC &rarr;</span>
                                </div>
                            </a>
                        </div>

                        <!-- 6. Empowered Women Awards (Awards) -->
                        <div class="marketech-slide">
                            <a href="https://marketech-apac.com/featured-events/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; flex-grow: 1;">
                                <div class="slide-brand-frame">
                                    <img src="{{ asset('images/events/marketech/6-empowered-women-awards.png') }}" alt="Empowered Women Awards" class="slide-brand-img">
                                </div>
                                <div class="slide-meta-row">
                                    <span class="slide-badge badge-award">Awards Program</span>
                                    <span class="slide-organizer">MARKETECH APAC &bull; UPTECH MEDIA</span>
                                </div>
                                <h3 class="slide-title">Empowered Women Awards</h3>
                                <div class="slide-subtitle">Celebrating Trailblazing Women in Marketing & Tech</div>
                                <p class="slide-desc">
                                    Recognizing inspiring female executives, innovative directors, and rising industry stars across the Asia-Pacific region who are transforming organizations and pioneering new paths.
                                </p>
                                <div class="slide-footer">
                                    <span class="slide-footer-cta">Explore on MARKETECH APAC &rarr;</span>
                                </div>
                            </a>
                        </div>

                        <!-- 7. Marketing Technology Awards 2026 (Awards) -->
                        <div class="marketech-slide">
                            <a href="https://marketech-apac.com/featured-events/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; flex-grow: 1;">
                                <div class="slide-brand-frame">
                                    <img src="{{ asset('images/events/marketech/7-marketing-technology-awards.png') }}" alt="Marketing Technology Awards 2026" class="slide-brand-img">
                                </div>
                                <div class="slide-meta-row">
                                    <span class="slide-badge badge-award">Awards Program</span>
                                    <span class="slide-organizer">MARKETECH APAC</span>
                                </div>
                                <h3 class="slide-title">Marketing Technology Awards 2026</h3>
                                <div class="slide-subtitle">MarTech Stack Orchestration & Data Excellence</div>
                                <p class="slide-desc">
                                    Benchmarking outstanding deployments of marketing software, data management platforms, predictive AI, and customer engagement architectures that drive tangible business ROI.
                                </p>
                                <div class="slide-footer">
                                    <span class="slide-footer-cta">Explore on MARKETECH APAC &rarr;</span>
                                </div>
                            </a>
                        </div>

                        <!-- 8. Advertising Awards Asia Pacific • 2026 (Awards) -->
                        <div class="marketech-slide">
                            <a href="https://marketech-apac.com/featured-events/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; flex-grow: 1;">
                                <div class="slide-brand-frame">
                                    <img src="{{ asset('images/events/marketech/8-advertising-awards-asia-pacific.png') }}" alt="Advertising Awards Asia Pacific 2026" class="slide-brand-img">
                                </div>
                                <div class="slide-meta-row">
                                    <span class="slide-badge badge-award">Awards Program</span>
                                    <span class="slide-organizer">MARKETECH APAC</span>
                                </div>
                                <h3 class="slide-title">Advertising Awards Asia Pacific &bull; 2026</h3>
                                <div class="slide-subtitle">Benchmark Creative, Media Innovation & Brand Impact</div>
                                <p class="slide-desc">
                                    Honoring breakthrough commercial creative, multi-channel media excellence, and data-backed promotional campaigns that captivated audiences across Asia-Pacific markets.
                                </p>
                                <div class="slide-footer">
                                    <span class="slide-footer-cta">Explore on MARKETECH APAC &rarr;</span>
                                </div>
                            </a>
                        </div>

                        <!-- 9. Content Marketing Awards Asia Pacific 2026 (Awards) -->
                        <div class="marketech-slide">
                            <a href="https://marketech-apac.com/featured-events/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; flex-grow: 1;">
                                <div class="slide-brand-frame">
                                    <img src="{{ asset('images/events/marketech/9-content-marketing-awards.png') }}" alt="Content Marketing Awards Asia Pacific 2026" class="slide-brand-img">
                                </div>
                                <div class="slide-meta-row">
                                    <span class="slide-badge badge-award">Awards Program</span>
                                    <span class="slide-organizer">MARKETECH APAC</span>
                                </div>
                                <h3 class="slide-title">Content Marketing Awards Asia Pacific 2026</h3>
                                <div class="slide-subtitle">Brand Storytelling, Editorial Engagement & Video Craft</div>
                                <p class="slide-desc">
                                    Spotlighting premier editorial initiatives, narrative branded entertainment, social video resonance, and sustained audience community building across diverse Asian cultures.
                                </p>
                                <div class="slide-footer">
                                    <span class="slide-footer-cta">Explore on MARKETECH APAC &rarr;</span>
                                </div>
                            </a>
                        </div>

                        <!-- 10. Retail & E-Commerce Excellence Awards Asia Pacific 2026 (Awards) -->
                        <div class="marketech-slide">
                            <a href="https://marketech-apac.com/featured-events/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; flex-grow: 1;">
                                <div class="slide-brand-frame">
                                    <img src="{{ asset('images/events/marketech/10-retail-ecommerce-excellence-awards.png') }}" alt="Retail & E-Commerce Excellence Awards Asia Pacific 2026" class="slide-brand-img">
                                </div>
                                <div class="slide-meta-row">
                                    <span class="slide-badge badge-award">Awards Program</span>
                                    <span class="slide-organizer">MARKETECH APAC &bull; UPTECH MEDIA</span>
                                </div>
                                <h3 class="slide-title">Retail & E-Commerce Excellence Awards 2026</h3>
                                <div class="slide-subtitle">Digital Commerce Innovation & Omnichannel Leadership</div>
                                <p class="slide-desc">
                                    Celebrating the frontrunners in digital retail, seamless payment innovation, social selling, and customer loyalty setting the benchmark across Southeast Asia and the wider Pacific.
                                </p>
                                <div class="slide-footer">
                                    <span class="slide-footer-cta">Explore on MARKETECH APAC &rarr;</span>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 7: SPEAKERS / INDUSTRY LEADERS ===== -->
<section id="speakers" class="section-padding">
    <div class="container">
        <div style="margin-bottom: 2.5rem;">
            <span class="section-tag">HR Forward Asia</span>
            <h2 class="section-title" style="margin-bottom: 0.5rem;">Features & Leadership</h2>
            <p class="section-desc" style="margin: 0; max-width: 620px;">
                In-depth executive interviews, workforce perspectives, and leadership features examining how organisations navigate change and the future of work across Asia.
            </p>
        </div>

        <div class="speakers-track" id="speakers-track">
            <!-- Article 1 -->
            <div class="speaker-card" id="speaker-card-0">
                <div class="speaker-photo-wrap">
                    <img class="speaker-photo" id="speaker-img-0" src="https://hrforwardasia.com/wp-content/uploads/2026/09/Kirk-AirAsia.webp" alt="Leader Feature Image" />
                    <span class="speaker-industry-tag">HR Forward &bull; Leadership</span>
                </div>
                <div class="speaker-body">
                    <h3 class="speaker-name" style="font-size: 1rem; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; margin-bottom: 0.4rem;">
                        <a id="speaker-link-0" href="https://hrforwardasia.com/judgment-over-policy-kirk-patrick-alimaza-on-speaking-up-staying-human-and-leading-with-trust-over-likeability/" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: none;">
                            Judgment over policy: Kirk Patrick Alimaza on speaking up, staying human and leading with trust over likeability
                        </a>
                    </h3>
                    <div class="speaker-title" id="speaker-date-0" style="margin-bottom: 0.6rem; font-size: 0.8rem; font-weight: 700;">Sep 21, 2026</div>
                    <div class="speaker-bio-hover" id="speaker-excerpt-0" style="font-size: 0.82rem; color: var(--text-muted); line-height: 1.5; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; border-top: 1px solid var(--border-light); padding-top: 0.75rem;">
                        Early in his HR career, Kirk Patrick Alimaza, Country Head, People at AirAsia, believed great HR meant enforceability...
                    </div>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="speaker-card" id="speaker-card-1">
                <div class="speaker-photo-wrap">
                    <img class="speaker-photo" id="speaker-img-1" src="https://hrforwardasia.com/wp-content/uploads/2026/09/Article-launch.webp" alt="Leader Feature Image" />
                    <span class="speaker-industry-tag">HR Forward &bull; Leadership</span>
                </div>
                <div class="speaker-body">
                    <h3 class="speaker-name" style="font-size: 1rem; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; margin-bottom: 0.4rem;">
                        <a id="speaker-link-1" href="https://hrforwardasia.com/hr-forward-asia-launches-people-behind-the-people-series-in-celebration-of-hr-professionals-day/" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: none;">
                            HR Forward Asia launches 'People Behind the People' series in celebration of HR Professionals Day
                        </a>
                    </h3>
                    <div class="speaker-title" id="speaker-date-1" style="margin-bottom: 0.6rem; font-size: 0.8rem; font-weight: 700;">Sep 21, 2026</div>
                    <div class="speaker-bio-hover" id="speaker-excerpt-1" style="font-size: 0.82rem; color: var(--text-muted); line-height: 1.5; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; border-top: 1px solid var(--border-light); padding-top: 0.75rem;">
                        HR is often described in terms of what it delivers: policies, programmes, hires, retention numbers. Rarely is the spotlight turned inward...
                    </div>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="speaker-card" id="speaker-card-2">
                <div class="speaker-photo-wrap">
                    <img class="speaker-photo" id="speaker-img-2" src="https://hrforwardasia.com/wp-content/uploads/2026/09/MakerLabs-Reema.webp" alt="Leader Feature Image" />
                    <span class="speaker-industry-tag">HR Forward &bull; Leadership</span>
                </div>
                <div class="speaker-body">
                    <h3 class="speaker-name" style="font-size: 1rem; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; margin-bottom: 0.4rem;">
                        <a id="speaker-link-2" href="https://hrforwardasia.com/from-infrastructure-to-strategy-how-maker-labs-reema-bhullar-is-unifying-the-people-function/" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: none;">
                            From infrastructure to strategy: how Maker Lab's Reema Bhullar is unifying the People function
                        </a>
                    </h3>
                    <div class="speaker-title" id="speaker-date-2" style="margin-bottom: 0.6rem; font-size: 0.8rem; font-weight: 700;">Sep 21, 2026</div>
                    <div class="speaker-bio-hover" id="speaker-excerpt-2" style="font-size: 0.82rem; color: var(--text-muted); line-height: 1.5; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; border-top: 1px solid var(--border-light); padding-top: 0.75rem;">
                        Reema Bhullar, Global Head of People & Culture at Maker Lab, shares how she unifies HR operations across global regions...
                    </div>
                </div>
            </div>

            <!-- Article 4 -->
            <div class="speaker-card" id="speaker-card-3">
                <div class="speaker-photo-wrap">
                    <img class="speaker-photo" id="speaker-img-3" src="https://hrforwardasia.com/wp-content/uploads/2026/09/Jeremy-John-Pintor-joins-East-West-Banking-Corporation-as-HR-business-partner.webp" alt="Leader Feature Image" />
                    <span class="speaker-industry-tag">HR Forward &bull; Leadership</span>
                </div>
                <div class="speaker-body">
                    <h3 class="speaker-name" style="font-size: 1rem; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; margin-bottom: 0.4rem;">
                        <a id="speaker-link-3" href="https://hrforwardasia.com/jeremy-john-pintor-joins-east-west-banking-corporation-as-hr-business-partner/" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: none;">
                            Jeremy John Pintor joins East West Banking Corporation as HR business partner
                        </a>
                    </h3>
                    <div class="speaker-title" id="speaker-date-3" style="margin-bottom: 0.6rem; font-size: 0.8rem; font-weight: 700;">Sep 16, 2026</div>
                    <div class="speaker-bio-hover" id="speaker-excerpt-3" style="font-size: 0.82rem; color: var(--text-muted); line-height: 1.5; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; border-top: 1px solid var(--border-light); padding-top: 0.75rem;">
                        Jeremy John Pintor steps into a new leadership role as HR Business Partner at East West Banking Corporation...
                    </div>
                </div>
            </div>

            <!-- Article 5 -->
            <div class="speaker-card" id="speaker-card-4">
                <div class="speaker-photo-wrap">
                    <img class="speaker-photo" id="speaker-img-4" src="https://hrforwardasia.com/wp-content/uploads/2026/09/Shannon-O.-returns-to-facilities-management-as-ENGIE-Southeast-Asia-HRBP-director.webp" alt="Leader Feature Image" />
                    <span class="speaker-industry-tag">HR Forward &bull; Leadership</span>
                </div>
                <div class="speaker-body">
                    <h3 class="speaker-name" style="font-size: 1rem; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; margin-bottom: 0.4rem;">
                        <a id="speaker-link-4" href="https://hrforwardasia.com/shannon-o-returns-to-facilities-management-as-engie-southeast-asia-hrbp-director/" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: none;">
                            Shannon O. returns to facilities management as ENGIE Southeast Asia HRBP director
                        </a>
                    </h3>
                    <div class="speaker-title" id="speaker-date-4" style="margin-bottom: 0.6rem; font-size: 0.8rem; font-weight: 700;">Sep 16, 2026</div>
                    <div class="speaker-bio-hover" id="speaker-excerpt-4" style="font-size: 0.82rem; color: var(--text-muted); line-height: 1.5; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; border-top: 1px solid var(--border-light); padding-top: 0.75rem;">
                        ENGIE Southeast Asia appoints Shannon O. as HRBP Director, steering regional workforce strategy and organizational development...
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 8: INSIGHTS / MEDIA ===== -->
<section id="insights" class="section-padding">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag">Editorial & Intelligence</span>
            <h2 class="section-title">Industry Insights & Media</h2>
            <p class="section-desc">
                Verified reporting, strategic analysis, executive interviews, and research across our 3 media publications: MARKETECH APAC, UpTech Media, and HR Forward Asia.
            </p>
        </div>

        <!-- Cards Grid (Filtered strictly by the 3 branches and their respective topic domains) -->
        <div class="insights-grid" id="insights-grid">

            <!-- ============================================== -->
            <!-- 1. MARKETECH APAC CARD (Latest from REST API) -->
            <!-- ============================================== -->
            <div class="insight-card" data-branch="marketech" id="marketech-card">
                <div class="insight-thumb it-orange" id="marketech-thumb">
                    <img id="marketech-post-img" src="https://marketech-apac.com/wp-content/uploads/2026/09/Rakuten-opens-Hangzhou-subsidiary-to-deepen-support-for-Chinese-cross-border-merchants-.webp" alt="Featured Image" style="width:100%; height:100%; object-fit:cover; position:absolute; top:0; left:0; z-index:0; transition: transform 0.4s ease;" />
                    <span class="insight-type-badge" style="z-index: 1;">MARKETECH APAC &bull; Latest</span>
                </div>
                <div class="insight-body">
                    <div>
                        <div class="insight-date-row">
                            <span style="font-weight:700; color:var(--orange);">MARKETECH APAC</span>
                            <span id="marketech-post-date">Sep 22, 2026</span>
                        </div>
                        <h3 class="insight-title" id="marketech-post-title">
                            <a id="marketech-post-title-link" href="https://marketech-apac.com/rakuten-opens-hangzhou-subsidiary-to-deepen-support-for-Chinese-cross-border-merchants/" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: none;">
                                Rakuten opens Hangzhou subsidiary to deepen support for Chinese cross-border merchants
                            </a>
                        </h3>
                        <p class="insight-desc" id="marketech-post-excerpt">
                            Tokyo, Japan – Rakuten Group announced the establishment of Rakuten Cross-Border E-Commerce China Co., Ltd., in Hangzhou, China, aimed at enhancing recruitment and operational support for Chinese sellers on Rakuten Ichiba, Japan's leading online marketplace.
                        </p>
                    </div>
                    <div class="insight-footer">
                        <span style="font-size: 0.78rem; font-weight: 600; color: var(--text-muted);" id="marketech-post-topic">Latest Article</span>
                        <a id="marketech-post-readmore" href="https://marketech-apac.com/rakuten-opens-hangzhou-subsidiary-to-deepen-support-for-Chinese-cross-border-merchants/" target="_blank" rel="noopener noreferrer" class="insight-link">Read Article &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- ============================================== -->
            <!-- 2. UPTECH MEDIA CARD (Latest from REST API) -->
            <!-- ============================================== -->
            <div class="insight-card" data-branch="uptech" id="uptech-card">
                <div class="insight-thumb it-blue" id="uptech-thumb">
                    <img id="uptech-post-img" src="https://uptech-media.com/wp-content/uploads/2026/09/Philippines-expands-eGovPH-super-app-with-new-AI-capabilities-.webp" alt="Featured Image" style="width:100%; height:100%; object-fit:cover; position:absolute; top:0; left:0; z-index:0; transition: transform 0.4s ease;" />
                    <span class="insight-type-badge" style="z-index: 1;">UpTech Media &bull; Latest</span>
                </div>
                <div class="insight-body">
                    <div>
                        <div class="insight-date-row">
                            <span style="font-weight:700; color:var(--blue);">UPTECH MEDIA</span>
                            <span id="uptech-post-date">Sep 22, 2026</span>
                        </div>
                        <h3 class="insight-title" id="uptech-post-title">
                            <a id="uptech-post-title-link" href="https://uptech-media.com/philippines-expands-egovph-super-app-with-new-ai-capabilities/" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: none;">
                                Philippines expands eGovPH super app with new AI capabilities
                            </a>
                        </h3>
                        <p class="insight-desc" id="uptech-post-excerpt">
                            Manila, Philippines – The Department of Information and Communications Technology (DICT) has formally launched eGovAI, integrating artificial intelligence capabilities into the eGovPH Super App.
                        </p>
                    </div>
                    <div class="insight-footer">
                        <span style="font-size: 0.78rem; font-weight: 600; color: var(--text-muted);" id="uptech-post-topic">Latest Article</span>
                        <a id="uptech-post-readmore" href="https://uptech-media.com/philippines-expands-egovph-super-app-with-new-ai-capabilities/" target="_blank" rel="noopener noreferrer" class="insight-link">Read Article &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- ============================================== -->
            <!-- 3. HR FORWARD ASIA CARD (Latest from REST API) -->
            <!-- ============================================== -->
            <div class="insight-card" data-branch="hrforward" id="hrforward-card">
                <div class="insight-thumb it-green" id="hrforward-thumb">
                    <img id="hrforward-post-img" src="https://hrforwardasia.com/wp-content/uploads/2026/09/AI-fast-tracks-Gen-Zs-path-to-leadership-report-finds.webp" alt="Featured Image" style="width:100%; height:100%; object-fit:cover; position:absolute; top:0; left:0; z-index:0; transition: transform 0.4s ease;" />
                    <span class="insight-type-badge" style="z-index: 1;">HR Forward &bull; Latest</span>
                </div>
                <div class="insight-body">
                    <div>
                        <div class="insight-date-row">
                            <span style="font-weight:700; color:var(--green);">HR FORWARD ASIA</span>
                            <span id="hrforward-post-date">Sep 21, 2026</span>
                        </div>
                        <h3 class="insight-title" id="hrforward-post-title">
                            <a id="hrforward-post-title-link" href="https://hrforwardasia.com/ai-fast-tracks-gen-zs-path-to-leadership-report-finds/" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: none;">
                                AI fast-tracks Gen Z's path to leadership, report finds
                            </a>
                        </h3>
                        <p class="insight-desc" id="hrforward-post-excerpt">
                            Singapore – Artificial intelligence (AI) is changing how organisations identify, develop and promote future leaders, with 92% of senior leaders saying they would likely appoint a Gen Z candidate to a senior leadership role, according to new research.
                        </p>
                    </div>
                    <div class="insight-footer">
                        <span style="font-size: 0.78rem; font-weight: 600; color: var(--text-muted);" id="hrforward-post-topic">Latest Article</span>
                        <a id="hrforward-post-readmore" href="https://hrforwardasia.com/ai-fast-tracks-gen-zs-path-to-leadership-report-finds/" target="_blank" rel="noopener noreferrer" class="insight-link">Read Article &rarr;</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===== SECTION 11: USER JOURNEY ("WHAT BRINGS YOU TO WECON?") ===== -->
<section id="journey" class="section-padding">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag">Guided Pathways</span>
            <h2 class="section-title">What Brings You to WECON?</h2>
            <p class="section-desc">
                Select your intended journey below to immediately access relevant programs, nomination portals, and executive resources.
            </p>
        </div>

        <div class="journey-grid">
            <!-- Option 1: Attend an Event -->
            <a href="#events" class="journey-card reveal" style="transition-delay: 0.05s">
                <div>
                    <div class="journey-header">
                        <div class="journey-icon">&#x1F3AB;</div>
                        <span class="journey-target-badge">Summits & Forums</span>
                    </div>
                    <h3 class="journey-question">"I want to attend an event"</h3>
                    <p class="journey-answer">
                        Browse our upcoming technology, marketing, and HR summits to secure passes and view speaker agendas.
                    </p>
                </div>
                <div class="journey-link-label">
                    View Events Showcase <span class="cta-arrow">&rarr;</span>
                </div>
            </a>

            <!-- Option 2: Nominate / Enter an Award -->
            <div class="journey-card reveal open-nominate-modal" data-category="General Entry" style="transition-delay: 0.1s">
                <div>
                    <div class="journey-header">
                        <div class="journey-icon" style="background: var(--gold-soft); color: #B45309;">&#x1F3C6;</div>
                        <span class="journey-target-badge">Awards & Honors</span>
                    </div>
                    <h3 class="journey-question">"I want to enter an award"</h3>
                    <p class="journey-answer">
                        Submit nominations for your organization or team to receive Asia-Pacific industry recognition.
                    </p>
                </div>
                <div class="journey-link-label">
                    Open Nomination Form <span class="cta-arrow">&rarr;</span>
                </div>
            </div>

            <!-- Option 3: Become a Speaker -->
            <div class="journey-card reveal open-speaker-modal" style="transition-delay: 0.15s">
                <div>
                    <div class="journey-header">
                        <div class="journey-icon" style="background: #E0E7FF; color: #4338CA;">&#x1F3A4;</div>
                        <span class="journey-target-badge">Thought Leadership</span>
                    </div>
                    <h3 class="journey-question">"I want to become a speaker"</h3>
                    <p class="journey-answer">
                        Share your expertise on stage at upcoming WECON summits before senior enterprise audiences.
                    </p>
                </div>
                <div class="journey-link-label">
                    Submit Speaker Proposal <span class="cta-arrow">&rarr;</span>
                </div>
            </div>

            <!-- Option 4: Partner / Sponsor -->
            <div class="journey-card reveal open-partner-modal" data-subject="General Corporate Partnership" style="transition-delay: 0.2s">
                <div>
                    <div class="journey-header">
                        <div class="journey-icon" style="background: #DCFCE7; color: #15803D;">&#x1F91D;</div>
                        <span class="journey-target-badge">Commercial Alliances</span>
                    </div>
                    <h3 class="journey-question">"I want to partner with WECON"</h3>
                    <p class="journey-answer">
                        Explore bespoke sponsorship, branded thought leadership, event staging, and media integration packages.
                    </p>
                </div>
                <div class="journey-link-label">
                    Request Partner Pack <span class="cta-arrow">&rarr;</span>
                </div>
            </div>

            <!-- Option 5: Explore Industry Insights -->
            <a href="#insights" class="journey-card reveal" style="transition-delay: 0.25s">
                <div>
                    <div class="journey-header">
                        <div class="journey-icon" style="background: #F3E8FF; color: #7E22CE;">&#x1F4D6;</div>
                        <span class="journey-target-badge">Intelligence</span>
                    </div>
                    <h3 class="journey-question">"I want to explore insights"</h3>
                    <p class="journey-answer">
                        Read deep-dive articles, watch keynote recordings, and download proprietary sector benchmarking reports.
                    </p>
                </div>
                <div class="journey-link-label">
                    Go to Insights Hub <span class="cta-arrow">&rarr;</span>
                </div>
            </a>

            <!-- Option 6: Join the Team (Careers) -->
            <div class="journey-card reveal open-careers-modal" style="transition-delay: 0.3s">
                <div>
                    <div class="journey-header">
                        <div class="journey-icon" style="background: #FEE2E2; color: var(--red);">&#x1F4BC;</div>
                        <span class="journey-target-badge">Talent & Culture</span>
                    </div>
                    <h3 class="journey-question">"I want to join the WECON team"</h3>
                    <p class="journey-answer">
                        Discover open career opportunities across journalism, event production, partnership sales, and technology.
                    </p>
                </div>
                <div class="journey-link-label">
                    View Career Openings <span class="cta-arrow">&rarr;</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 12: NEWSLETTER & COMMUNITY (STAY CONNECTED) ===== -->
<section id="stay-connected" class="section-padding" style="position: relative;">
    <span id="newsletter" style="position: absolute; top: -90px;"></span>
    <div class="container">
        <div class="newsletter-box reveal">
            <div class="newsletter-inner">
                <div>
                    <span class="section-tag" style="background: rgba(255, 255, 255, 0.15); color: #FFFFFF; border-color: rgba(255, 255, 255, 0.3);">
                        Stay Connected
                    </span>
                    <h2 class="newsletter-title">
                        Join Asia's Premier Business Information Network
                    </h2>
                    <p class="newsletter-desc">
                        Get the latest event invitations, executive insights, award nomination dates, and market reports delivered to your inbox weekly.
                    </p>
                </div>

                <div>
                    <form class="newsletter-form" id="newsletter-form">
                        <div class="form-row">
                            <input type="text" class="form-input" id="nl-name" placeholder="Your Full Name" required>
                            <input type="email" class="form-input" id="nl-email" placeholder="Work Email Address" required>
                        </div>
                        <div class="form-checkboxes">
                            <label class="form-checkbox-item">
                                <input type="checkbox" name="interest" value="events" checked> Conferences & Events
                            </label>
                            <label class="form-checkbox-item">
                                <input type="checkbox" name="interest" value="awards" checked> Awards & Honors
                            </label>
                            <label class="form-checkbox-item">
                                <input type="checkbox" name="interest" value="insights" checked> Editorial Insights
                            </label>
                        </div>
                        <button type="submit" class="btn btn-white" style="width: 100%;">
                            Subscribe to Updates <span class="cta-arrow">&rarr;</span>
                        </button>
                        <div class="newsletter-status" id="nl-status">
                            &#x2714; Thank you for subscribing! A welcome confirmation has been dispatched.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 13: FINAL CALL TO ACTION ===== -->
<section id="final-cta">
    <div class="final-cta-deco final-cta-deco-1"></div>
    <div class="final-cta-deco final-cta-deco-2"></div>
    <div class="container">
        <div class="final-cta-inner reveal">
            <h2 class="final-cta-title">
                Be Part of the Next WECON Experience
            </h2>
            <p class="final-cta-desc">
                Discover unprecedented opportunities to connect with industry leaders, participate in premier events, collaborate across borders, and grow within the WECON ecosystem.
            </p>
            <div class="final-cta-buttons">
                <button class="btn btn-outline-white open-partner-modal" data-subject="General Engagement Inquiry">
                    Contact Our Team
                </button>
            </div>
        </div>
    </div>
</section>

<!-- ===== COMPREHENSIVE FOOTER ===== -->
<footer role="contentinfo">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-brand-col">
                <a href="#hero" class="footer-logo-link" aria-label="WECON Home">
                    <img src="{{ asset('images/WECON ASIA (2LINE)_Horizontal_Coloured.png') }}?v={{ file_exists(public_path('images/WECON ASIA (2LINE)_Horizontal_Coloured.png')) ? filemtime(public_path('images/WECON ASIA (2LINE)_Horizontal_Coloured.png')) : 1 }}" alt="WECON ASIA" class="footer-logo-img">
                </a>
                <p>
                    Wecon Asia Media Group, Inc. is an Asia-Pacific media, events, and business information ecosystem connecting leaders, ideas, and transformative opportunities.
                </p>
                <div class="footer-social-row">
                    <a href="https://linkedin.com" target="_blank" rel="noopener" class="footer-social-btn" aria-label="LinkedIn">in</a>
                    <a href="https://facebook.com" target="_blank" rel="noopener" class="footer-social-btn" aria-label="Facebook">f</a>
                    <a href="https://instagram.com" target="_blank" rel="noopener" class="footer-social-btn" aria-label="Instagram">&#x1F4F7;</a>
                    <a href="https://youtube.com" target="_blank" rel="noopener" class="footer-social-btn" aria-label="YouTube">&#x25B6;</a>
                </div>
            </div>

            <!-- Column 1: WECON -->
            <div>
                <h4 class="footer-col-title">WECON</h4>
                <ul class="footer-links">
                    <li><a href="#about">About WECON</a></li>
                    <li><a href="#why-wecon">Our Values & Vision</a></li>
                    <li><a href="#why-wecon">Our Story</a></li>
                    <li><a href="#speakers">Leadership & Board</a></li>
                    <li><a href="#journey" class="open-careers-modal">Careers</a></li>
                </ul>
            </div>

            <!-- Column 2: Explore -->
            <div>
                <h4 class="footer-col-title">Explore</h4>
                <ul class="footer-links">
                    <li><a href="https://marketech-apac.com/featured-events/" target="_blank" rel="noopener noreferrer">Conferences & Summits</a></li>
                    <li><a href="https://marketech-apac.com/featured-events/" target="_blank" rel="noopener noreferrer">Awards Series</a></li>
                    <li><a href="#speakers">Industry Speakers</a></li>
                    <li><a href="#journey">Strategic Pathways</a></li>
                    <li><a href="#insights">Insights & Reports</a></li>
                </ul>
            </div>

            <!-- Column 3: Participate -->
            <div>
                <h4 class="footer-col-title">Participate</h4>
                <ul class="footer-links">
                    <li><a href="https://marketech-apac.com/featured-events/" target="_blank" rel="noopener noreferrer">Register for an Event</a></li>
                    <li><a href="#journey" class="open-nominate-modal" data-category="General">Nominate for Recognition</a></li>
                    <li><a href="#speakers" class="open-speaker-modal">Become a Speaker</a></li>
                    <li><a href="#journey" class="open-partner-modal" data-subject="Sponsorship">Become a Partner</a></li>
                    <li><a href="#newsletter">Newsletter Signup</a></li>
                </ul>
            </div>

            <!-- Column 4: Connect -->
            <div>
                <h4 class="footer-col-title">Connect</h4>
                <ul class="footer-links">
                    <li><a href="mailto:hello@wecon.asia">hello@wecon.asia</a></li>
                    <li><a href="#journey">Regional Offices</a></li>
                    <li><a href="#newsletter">Media Kit Inquiries</a></li>
                    <li><a href="#journey">Editorial Submissions</a></li>
                    <li><a href="#journey" class="open-partner-modal" data-subject="Sponsorship Desk">Sponsorship Desk</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom">
            <div>
                &copy; 2025 WECON Asia Media Group, Inc. All rights reserved.
            </div>
            <div class="footer-legal-links">
                <a href="#privacy" onclick="alert('Privacy Policy: WECON adheres strictly to international data privacy regulations including GDPR and regional personal data protection acts.'); return false;">Privacy Policy</a>
                <a href="#terms" onclick="alert('Terms & Conditions: Content published across WECON channels is protected by copyright and intellectual property treaties.'); return false;">Terms & Conditions</a>
                <a href="#sitemap">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

<!-- ===== UNIFIED INTERACTIVE MODAL DIALOGS ===== -->

<!-- 1. General Nomination Modal -->
<div class="modal-overlay" id="modal-nominate" role="dialog" aria-modal="true" aria-labelledby="modal-nominate-title">
    <div class="modal-container">
        <button class="modal-close-btn" aria-label="Close modal">&times;</button>
        <h3 class="modal-title" id="modal-nominate-title">Award Nomination Entry</h3>
        <p class="modal-subtitle">Submit your organization or project for WECON Asia Industry Awards.</p>
        <form class="modal-form" onsubmit="event.preventDefault(); alert('Nomination received! Our judging committee will review your dossier and contact you.'); document.getElementById('modal-nominate').classList.remove('open');">
            <div class="modal-input-group">
                <label>Nomination Category</label>
                <input type="text" class="modal-input" id="nominate-category-input" required>
            </div>
            <div class="modal-input-group">
                <label>Organization / Nominee Name</label>
                <input type="text" class="modal-input" placeholder="e.g. Acme Tech Solutions" required>
            </div>
            <div class="modal-input-group">
                <label>Contact Person & Email</label>
                <input type="email" class="modal-input" placeholder="name@company.com" required>
            </div>
            <div class="modal-input-group">
                <label>Brief Pitch / Executive Summary (2-3 Sentences)</label>
                <textarea class="modal-input" placeholder="Describe the impact, innovations, and quantifiable achievements..."></textarea>
            </div>
            <button type="submit" class="btn btn-gold" style="width: 100%;">
                Submit Nomination Entry
            </button>
        </form>
    </div>
</div>

<!-- 2. Speaker Application Modal -->
<div class="modal-overlay" id="modal-speaker" role="dialog" aria-modal="true" aria-labelledby="modal-speaker-title">
    <div class="modal-container">
        <button class="modal-close-btn" aria-label="Close modal">&times;</button>
        <h3 class="modal-title" id="modal-speaker-title">Speaker Application</h3>
        <p class="modal-subtitle">Propose a keynote topic or panel discussion for upcoming summits.</p>
        <form class="modal-form" onsubmit="event.preventDefault(); alert('Speaker proposal submitted! Our programming team will review your credentials.'); document.getElementById('modal-speaker').classList.remove('open');">
            <div class="modal-input-group">
                <label>Full Name & Title</label>
                <input type="text" class="modal-input" placeholder="e.g. Jane Doe, Chief Strategy Officer" required>
            </div>
            <div class="modal-input-group">
                <label>Company / Organization</label>
                <input type="text" class="modal-input" placeholder="e.g. Global Innovations Corp" required>
            </div>
            <div class="modal-input-group">
                <label>Proposed Keynote / Topic Title</label>
                <input type="text" class="modal-input" placeholder="e.g. The Next Decade of Generative Enterprise Tech" required>
            </div>
            <div class="modal-input-group">
                <label>Speaker Bio & Past Engagements</label>
                <textarea class="modal-input" placeholder="Provide a brief background or link to your LinkedIn profile / speaking reel..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%;">
                Submit Speaker Proposal
            </button>
        </form>
    </div>
</div>

<!-- 3. Partner / Sponsor Modal -->
<div class="modal-overlay" id="modal-partner" role="dialog" aria-modal="true" aria-labelledby="modal-partner-title">
    <div class="modal-container">
        <button class="modal-close-btn" aria-label="Close modal">&times;</button>
        <h3 class="modal-title" id="modal-partner-title">Partner with WECON</h3>
        <p class="modal-subtitle">Connect with our corporate partnerships and commercial sponsorship desk.</p>
        <form class="modal-form" onsubmit="event.preventDefault(); alert('Partnership inquiry received! A senior partner manager will contact you within 24 hours.'); document.getElementById('modal-partner').classList.remove('open');">
            <div class="modal-input-group">
                <label>Partnership Focus Area</label>
                <input type="text" class="modal-input" id="partner-subject-input" required>
            </div>
            <div class="modal-input-group">
                <label>Company & Work Email</label>
                <input type="email" class="modal-input" placeholder="director@company.com" required>
            </div>
            <div class="modal-input-group">
                <label>Target Audience or Objectives</label>
                <textarea class="modal-input" placeholder="What are your commercial, branding, or lead-generation goals?"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%;">
                Request Partnership Prospectus
            </button>
        </form>
    </div>
</div>

<!-- 4. Quick Event Overview Modal -->
<div class="modal-overlay" id="modal-event" role="dialog" aria-modal="true" aria-labelledby="modal-event-title">
    <div class="modal-container">
        <button class="modal-close-btn" aria-label="Close modal">&times;</button>
        <h3 class="modal-title" id="modal-event-title">Event Registration</h3>
        <p class="modal-subtitle" id="modal-event-subtitle">Secure early access passes for this upcoming conference.</p>
        <div style="background: var(--section-alt); padding: 1.25rem; border-radius: 12px; margin-bottom: 1.5rem; border: 1px solid var(--border);">
            <div style="font-weight: 700; color: var(--navy);" id="modal-event-name">Event Name</div>
            <div style="font-size: 0.88rem; color: var(--text-muted); margin-top: 0.25rem;" id="modal-event-details">Date | Location</div>
        </div>
        <form class="modal-form" onsubmit="event.preventDefault(); alert('Registration received! We have reserved your provisional pass.'); document.getElementById('modal-event').classList.remove('open');">
            <div class="modal-input-group">
                <label>Full Name</label>
                <input type="text" class="modal-input" placeholder="John Doe" required>
            </div>
            <div class="modal-input-group">
                <label>Work Email</label>
                <input type="email" class="modal-input" placeholder="john@enterprise.com" required>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%;">
                Confirm Registration Pass
            </button>
        </form>
    </div>
</div>

<!-- 5. Careers Modal -->
<div class="modal-overlay" id="modal-careers" role="dialog" aria-modal="true" aria-labelledby="modal-careers-title">
    <div class="modal-container">
        <button class="modal-close-btn" aria-label="Close modal">&times;</button>
        <h3 class="modal-title" id="modal-careers-title">Careers at WECON</h3>
        <p class="modal-subtitle">Join our cross-border team of media, event, and business innovators.</p>
        <div style="display: flex; flex-direction: column; gap: 0.85rem; margin-bottom: 1.5rem;">
            <div style="padding: 1rem; border: 1px solid var(--border); border-radius: 12px; background: var(--section-alt);">
                <div style="font-weight: 700; color: var(--navy);">Senior Tech & Business Journalist</div>
                <div style="font-size: 0.82rem; color: var(--text-muted);">Singapore / Remote &bull; Editorial Team</div>
            </div>
            <div style="padding: 1rem; border: 1px solid var(--border); border-radius: 12px; background: var(--section-alt);">
                <div style="font-weight: 700; color: var(--navy);">Conference Program Producer</div>
                <div style="font-size: 0.82rem; color: var(--text-muted);">Manila / Hybrid &bull; Events Division</div>
            </div>
            <div style="padding: 1rem; border: 1px solid var(--border); border-radius: 12px; background: var(--section-alt);">
                <div style="font-weight: 700; color: var(--navy);">Enterprise Sponsorship Director</div>
                <div style="font-size: 0.82rem; color: var(--text-muted);">Regional &bull; Commercial Partnerships</div>
            </div>
        </div>
        <p style="font-size: 0.88rem; color: var(--text-body); margin-bottom: 1.5rem;">
            Send your resume and portfolio directly to our talent acquisition team at <a href="mailto:careers@wecon.asia" style="color: var(--blue); font-weight: 700;">careers@wecon.asia</a>.
        </p>
        <button class="btn btn-outline-navy" style="width: 100%;" onclick="document.getElementById('modal-careers').classList.remove('open');">
            Close Window
        </button>
    </div>
</div>

<!-- ===== CORE JAVASCRIPT LOGIC ===== -->
<script>
    // 1. Scroll Progress Bar
    const progressBar = document.getElementById('scroll-progress');
    window.addEventListener('scroll', () => {
        const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const percent = (scrollTop / scrollHeight) * 100;
        if (progressBar) progressBar.style.width = percent + '%';
    }, { passive: true });

    // 2. Sticky Navbar Blur & Dynamic Class
    const navbar = document.getElementById('navbar');
    const updateNavbarScroll = () => {
        if (navbar) navbar.classList.toggle('scrolled', window.scrollY > 20);
    };
    window.addEventListener('scroll', updateNavbarScroll, { passive: true });
    updateNavbarScroll();

    // 3. Mobile Hamburger Menu Toggle
    const navToggle = document.getElementById('navToggle');
    const navLinksList = document.getElementById('navLinks');
    if (navToggle && navLinksList) {
        navToggle.addEventListener('click', () => {
            const isOpen = navToggle.classList.toggle('active');
            navLinksList.classList.toggle('open', isOpen);
        });
        navLinksList.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navToggle.classList.remove('active');
                navLinksList.classList.remove('open');
            });
        });
    }

    // 4. Scroll Reveal Animations via IntersectionObserver
    const revealObs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    document.querySelectorAll('.reveal').forEach(el => revealObs.observe(el));
    document.querySelectorAll('#hero .reveal').forEach(el => el.classList.add('visible'));

    // 5. Active Navbar Link Tracker
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-links a');
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(s => {
            if (window.scrollY >= s.offsetTop - 150) current = s.id;
        });
        navLinks.forEach(a => {
            const href = a.getAttribute('href');
            a.classList.toggle('active', href === '#' + current);
        });
    }, { passive: true });

    // 6. Awards Tab Switcher
    const awardTabBtns = document.querySelectorAll('.award-tab-btn');
    const awardPanels = document.querySelectorAll('.award-panel');
    awardTabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const target = btn.dataset.tab;
            awardTabBtns.forEach(b => b.classList.remove('active'));
            awardPanels.forEach(p => p.classList.remove('active'));
            btn.classList.add('active');
            const targetPanel = document.getElementById('tab-' + target);
            if (targetPanel) targetPanel.classList.add('active');
        });
    });

    // 7. Insights Media Filtering (3 Branches)
    const filterBtns = document.querySelectorAll('.filter-btn');
    const insightCards = document.querySelectorAll('.insight-card');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.dataset.filter;
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            insightCards.forEach(card => {
                if (filter === 'all' || card.dataset.branch === filter) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // 7.5 Marketech APAC 10 Types Showcase Slideshow
    const marketechTrack = document.getElementById('marketech-slides-track');
    const marketechSlides = document.querySelectorAll('.marketech-slide');
    const marketechPrev = document.getElementById('marketech-prev-btn');
    const marketechNext = document.getElementById('marketech-next-btn');
    const marketechCounter = document.getElementById('marketech-current-index');
    const marketechDots = document.querySelectorAll('#marketech-dots .slideshow-dot');
    const marketechViewport = document.getElementById('marketech-slider-viewport');

    let currentMarketechSlide = 0;
    const totalMarketechSlides = marketechSlides.length || 10;
    let marketechTimer = null;

    function goToMarketechSlide(index) {
        if (index < 0) index = totalMarketechSlides - 1;
        if (index >= totalMarketechSlides) index = 0;
        currentMarketechSlide = index;

        if (marketechTrack) {
            marketechTrack.style.transform = `translateX(-${currentMarketechSlide * 100}%)`;
        }

        if (marketechCounter) {
            marketechCounter.textContent = String(currentMarketechSlide + 1).padStart(2, '0');
        }

        marketechDots.forEach((dot, idx) => {
            dot.classList.toggle('active', idx === currentMarketechSlide);
        });
    }

    if (marketechPrev) {
        marketechPrev.addEventListener('click', () => {
            goToMarketechSlide(currentMarketechSlide - 1);
            restartMarketechTimer();
        });
    }

    if (marketechNext) {
        marketechNext.addEventListener('click', () => {
            goToMarketechSlide(currentMarketechSlide + 1);
            restartMarketechTimer();
        });
    }

    marketechDots.forEach((dot, idx) => {
        dot.addEventListener('click', () => {
            goToMarketechSlide(idx);
            restartMarketechTimer();
        });
    });

    function startMarketechTimer() {
        if (marketechTimer) clearInterval(marketechTimer);
        marketechTimer = setInterval(() => {
            goToMarketechSlide(currentMarketechSlide + 1);
        }, 5000);
    }

    function restartMarketechTimer() {
        startMarketechTimer();
    }

    if (marketechViewport) {
        marketechViewport.addEventListener('mouseenter', () => {
            if (marketechTimer) clearInterval(marketechTimer);
        });
        marketechViewport.addEventListener('mouseleave', () => {
            startMarketechTimer();
        });

        // Touch swipe support
        let touchStartX = 0;
        marketechViewport.addEventListener('touchstart', (e) => {
            touchStartX = e.touches[0].clientX;
        }, { passive: true });

        marketechViewport.addEventListener('touchend', (e) => {
            const touchEndX = e.changedTouches[0].clientX;
            const diffX = touchStartX - touchEndX;
            if (Math.abs(diffX) > 40) {
                if (diffX > 0) {
                    goToMarketechSlide(currentMarketechSlide + 1);
                } else {
                    goToMarketechSlide(currentMarketechSlide - 1);
                }
                restartMarketechTimer();
            }
        }, { passive: true });
    }

    startMarketechTimer();

    const speakersTrack = document.getElementById('speakers-track');
    const speakersPrev = document.getElementById('speakers-prev-btn');
    const speakersNext = document.getElementById('speakers-next-btn');
    if (speakersTrack && speakersPrev && speakersNext) {
        speakersPrev.addEventListener('click', () => speakersTrack.scrollBy({ left: -310, behavior: 'smooth' }));
        speakersNext.addEventListener('click', () => speakersTrack.scrollBy({ left: 310, behavior: 'smooth' }));
    }

    // 9. Stat Counters Animation
    function animateStatCounter(el) {
        const target = parseInt(el.dataset.target);
        const suffix = el.dataset.suffix || '';
        const dur = 2000;
        const t0 = performance.now();
        (function tick(t) {
            const p = Math.min((t - t0) / dur, 1);
            const e = 1 - Math.pow(1 - p, 4);
            const c = Math.floor(e * target);
            if (target >= 1000) {
                el.textContent = (c / 1000).toFixed(0) + suffix;
            } else {
                el.textContent = c + suffix;
            }
            if (p < 1) requestAnimationFrame(tick);
        })(t0);
    }
    let statsDone = false;
    const aboutSection = document.getElementById('about');
    if (aboutSection) {
        new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting && !statsDone) {
                statsDone = true;
                document.querySelectorAll('[data-target]').forEach(animateStatCounter);
            }
        }, { threshold: 0.3 }).observe(aboutSection);
    }

    // 10. Fetch latest MARKETECH APAC post live from WordPress REST API
    async function fetchLatestMarketechPost() {
        try {
            const response = await fetch('https://marketech-apac.com/wp-json/wp/v2/posts?_embed=1&per_page=1');
            if (!response.ok) return;
            const data = await response.json();
            if (!data || !data.length) return;

            const post = data[0];
            const title = post.title?.rendered || '';
            const link = post.link || '#';
            const dateStr = post.date ? new Date(post.date).toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' }) : '';
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = post.excerpt?.rendered || '';
            const excerpt = tempDiv.textContent || tempDiv.innerText || '';
            const featuredImg = post._embedded?.['wp:featuredmedia']?.[0]?.source_url;

            const titleEl = document.getElementById('marketech-post-title-link');
            const dateEl = document.getElementById('marketech-post-date');
            const excerptEl = document.getElementById('marketech-post-excerpt');
            const imgEl = document.getElementById('marketech-post-img');
            const readMoreEl = document.getElementById('marketech-post-readmore');

            if (titleEl) { titleEl.textContent = title; titleEl.href = link; }
            if (dateEl && dateStr) dateEl.textContent = dateStr;
            if (excerptEl && excerpt) excerptEl.textContent = excerpt;
            if (readMoreEl) readMoreEl.href = link;
            if (imgEl && featuredImg) {
                imgEl.src = featuredImg;
                imgEl.style.display = 'block';
            }
        } catch (err) {
            console.warn('Could not fetch latest MARKETECH APAC post:', err);
        }
    }
    fetchLatestMarketechPost();

    // Fetch latest post from UpTech Media WordPress REST API
    async function fetchLatestUptechPost() {
        try {
            const response = await fetch('https://uptech-media.com/wp-json/wp/v2/posts?_embed=1&per_page=1');
            if (!response.ok) return;
            const data = await response.json();
            if (!data || !data.length) return;

            const post = data[0];
            const title = post.title?.rendered || '';
            const link = post.link || '#';
            const dateStr = post.date ? new Date(post.date).toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' }) : '';
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = post.excerpt?.rendered || '';
            const excerpt = tempDiv.textContent || tempDiv.innerText || '';
            const featuredImg = post._embedded?.['wp:featuredmedia']?.[0]?.source_url;

            const titleEl = document.getElementById('uptech-post-title-link');
            const dateEl = document.getElementById('uptech-post-date');
            const excerptEl = document.getElementById('uptech-post-excerpt');
            const imgEl = document.getElementById('uptech-post-img');
            const readMoreEl = document.getElementById('uptech-post-readmore');

            if (titleEl) { titleEl.textContent = title; titleEl.href = link; }
            if (dateEl && dateStr) dateEl.textContent = dateStr;
            if (excerptEl && excerpt) excerptEl.textContent = excerpt;
            if (readMoreEl) readMoreEl.href = link;
            if (imgEl && featuredImg) {
                imgEl.src = featuredImg;
                imgEl.style.display = 'block';
            }
        } catch (err) {
            console.warn('Could not fetch latest UpTech Media post:', err);
        }
    }
    fetchLatestUptechPost();

    // Fetch latest post from HR Forward Asia WordPress REST API
    async function fetchLatestHrforwardPost() {
        try {
            const response = await fetch('https://hrforwardasia.com/wp-json/wp/v2/posts?_embed=1&per_page=1');
            if (!response.ok) return;
            const data = await response.json();
            if (!data || !data.length) return;

            const post = data[0];
            const tempTitleDiv = document.createElement('div');
            tempTitleDiv.innerHTML = post.title?.rendered || '';
            const title = tempTitleDiv.textContent || tempTitleDiv.innerText || '';

            const link = post.link || '#';
            const dateStr = post.date ? new Date(post.date).toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' }) : '';
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = post.excerpt?.rendered || '';
            const excerpt = tempDiv.textContent || tempDiv.innerText || '';
            const featuredImg = post._embedded?.['wp:featuredmedia']?.[0]?.source_url;

            const titleEl = document.getElementById('hrforward-post-title-link');
            const dateEl = document.getElementById('hrforward-post-date');
            const excerptEl = document.getElementById('hrforward-post-excerpt');
            const imgEl = document.getElementById('hrforward-post-img');
            const readMoreEl = document.getElementById('hrforward-post-readmore');

            if (titleEl) { titleEl.textContent = title; titleEl.href = link; }
            if (dateEl && dateStr) dateEl.textContent = dateStr;
            if (excerptEl && excerpt) excerptEl.textContent = excerpt;
            if (readMoreEl) readMoreEl.href = link;
            if (imgEl && featuredImg) {
                imgEl.src = featuredImg;
                imgEl.style.display = 'block';
            }
        } catch (err) {
            console.warn('Could not fetch latest HR Forward Asia post:', err);
        }
    }
    fetchLatestHrforwardPost();

    // Fetch 5 latest HR Forward Asia Leadership posts for Speakers section
    async function fetchHrforwardLeadershipPosts() {
        try {
            const response = await fetch('https://hrforwardasia.com/wp-json/wp/v2/posts?categories=10&_embed=1&per_page=5');
            if (!response.ok) return;
            const posts = await response.json();
            if (!posts || !posts.length) return;

            posts.forEach((post, index) => {
                const tempTitleDiv = document.createElement('div');
                tempTitleDiv.innerHTML = post.title?.rendered || '';
                const title = tempTitleDiv.textContent || tempTitleDiv.innerText || '';

                const link = post.link || '#';
                const dateStr = post.date ? new Date(post.date).toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' }) : '';
                const tempDiv = document.createElement('div');
                tempDiv.innerHTML = post.excerpt?.rendered || '';
                const excerpt = tempDiv.textContent || tempDiv.innerText || '';
                const featuredImg = post._embedded?.['wp:featuredmedia']?.[0]?.source_url;

                const linkEl = document.getElementById(`speaker-link-${index}`);
                const dateEl = document.getElementById(`speaker-date-${index}`);
                const excerptEl = document.getElementById(`speaker-excerpt-${index}`);
                const imgEl = document.getElementById(`speaker-img-${index}`);

                if (linkEl) { linkEl.textContent = title; linkEl.href = link; }
                if (dateEl && dateStr) dateEl.textContent = dateStr;
                if (excerptEl && excerpt) excerptEl.textContent = excerpt;
                if (imgEl && featuredImg) imgEl.src = featuredImg;
            });
        } catch (err) {
            console.warn('Could not fetch HR Forward Leadership posts:', err);
        }
    }
    fetchHrforwardLeadershipPosts();

    // 10.5. Who We Are Section - 3 Branches Showcase Slideshow & Dots Controller
    const branchSlides = document.querySelectorAll('.branch-slide');
    const branchDots = document.querySelectorAll('.branch-dot');
    let currentBranchIdx = 0;

    function activateBranchSlide(index) {
        branchSlides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
        branchDots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
        currentBranchIdx = index;
    }

    branchDots.forEach(dot => {
        dot.addEventListener('click', () => {
            const slideIdx = parseInt(dot.dataset.slide, 10);
            activateBranchSlide(slideIdx);
        });
    });

    const branchPrevBtn = document.getElementById('branch-prev-btn');
    const branchNextBtn = document.getElementById('branch-next-btn');

    if (branchPrevBtn) {
        branchPrevBtn.addEventListener('click', () => {
            const prevIdx = (currentBranchIdx - 1 + branchSlides.length) % branchSlides.length;
            activateBranchSlide(prevIdx);
        });
    }

    if (branchNextBtn) {
        branchNextBtn.addEventListener('click', () => {
            const nextIdx = (currentBranchIdx + 1) % branchSlides.length;
            activateBranchSlide(nextIdx);
        });
    }

    // Auto rotate slides every 5 seconds
    let branchAutoInterval = setInterval(() => {
        const nextIdx = (currentBranchIdx + 1) % branchSlides.length;
        activateBranchSlide(nextIdx);
    }, 5000);

    const showcaseEl = document.querySelector('.about-branches-showcase');
    if (showcaseEl) {
        showcaseEl.addEventListener('mouseenter', () => clearInterval(branchAutoInterval));
        showcaseEl.addEventListener('mouseleave', () => {
            branchAutoInterval = setInterval(() => {
                const nextIdx = (currentBranchIdx + 1) % branchSlides.length;
                activateBranchSlide(nextIdx);
            }, 5000);
        });
    }

    // 11. Modal Dialog Controllers
    const modals = document.querySelectorAll('.modal-overlay');
    function closeModal() {
        modals.forEach(m => m.classList.remove('open'));
    }
    document.querySelectorAll('.modal-close-btn').forEach(btn => btn.addEventListener('click', closeModal));
    modals.forEach(m => {
        m.addEventListener('click', (e) => {
            if (e.target === m) closeModal();
        });
    });
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeModal();
    });

    // Modal Triggers: Nominate
    document.querySelectorAll('.open-nominate-modal').forEach(btn => {
        btn.addEventListener('click', () => {
            const cat = btn.dataset.category || 'General Industry Award';
            const catInput = document.getElementById('nominate-category-input');
            if (catInput) catInput.value = cat;
            document.getElementById('modal-nominate').classList.add('open');
        });
    });

    // Modal Triggers: Speaker
    document.querySelectorAll('.open-speaker-modal').forEach(btn => {
        btn.addEventListener('click', () => {
            document.getElementById('modal-speaker').classList.add('open');
        });
    });

    // Modal Triggers: Partner
    document.querySelectorAll('.open-partner-modal').forEach(btn => {
        btn.addEventListener('click', () => {
            const subj = btn.dataset.subject || 'Corporate Partnership';
            const subjInput = document.getElementById('partner-subject-input');
            if (subjInput) subjInput.value = subj;
            document.getElementById('modal-partner').classList.add('open');
        });
    });

    // Modal Triggers: Event
    document.querySelectorAll('.open-event-modal').forEach(btn => {
        btn.addEventListener('click', () => {
            const name = btn.dataset.title || 'WECON Event';
            const date = btn.dataset.date || '';
            const loc = btn.dataset.location || '';
            const nameEl = document.getElementById('modal-event-name');
            const detailsEl = document.getElementById('modal-event-details');
            if (nameEl) nameEl.textContent = name;
            if (detailsEl) detailsEl.textContent = `${date} &bull; ${loc}`;
            document.getElementById('modal-event').classList.add('open');
        });
    });

    // Modal Triggers: Careers
    document.querySelectorAll('.open-careers-modal').forEach(btn => {
        btn.addEventListener('click', () => {
            document.getElementById('modal-careers').classList.add('open');
        });
    });

    // 11. Newsletter Form Feedback
    const nlForm = document.getElementById('newsletter-form');
    const nlStatus = document.getElementById('nl-status');
    if (nlForm && nlStatus) {
        nlForm.addEventListener('submit', (e) => {
            e.preventDefault();
            nlStatus.classList.add('success');
            nlForm.reset();
            setTimeout(() => {
                nlStatus.classList.remove('success');
            }, 6000);
        });
    }

    // 12. Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId && targetId !== '#') {
                const targetEl = document.querySelector(targetId);
                if (targetEl) {
                    e.preventDefault();
                    targetEl.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });
</script>
</body>
</html>