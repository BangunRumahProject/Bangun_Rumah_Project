<!-- Custom Styles -->
<style>
    /* Smooth scrolling for the entire page */
    html {
        scroll-behavior: smooth;
    }

    /* Progressive Loading - Fade in animations */
    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Stagger animation for gallery images */
    .gallery-item {
        opacity: 0;
        transform: scale(0.8) translateY(20px);
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .gallery-item.visible {
        opacity: 1;
        transform: scale(1) translateY(0);
    }

    /* Interactive Feedback - Hover effects for images */
    .image-hover {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
    }

    .image-hover:hover {
        transform: scale(1.05) translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }

    /* Slide in animations */
    .slide-in-left {
        opacity: 0;
        transform: translateX(-50px);
        transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .slide-in-right {
        opacity: 0;
        transform: translateX(50px);
        transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .slide-in-left.visible,
    .slide-in-right.visible {
        opacity: 1;
        transform: translateX(0);
    }

    /* Scale in animation for statistics */
    .scale-in {
        opacity: 0;
        transform: scale(0.5);
        transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .scale-in.visible {
        opacity: 1;
        transform: scale(1);
    }

    /* Scroll progress indicator */
    .scroll-progress {
        position: fixed;
        top: 0;
        left: 0;
        width: 0%;
        height: 3px;
        background: linear-gradient(90deg, #fbbf24, #f59e0b);
        z-index: 9999;
        transition: width 0.1s ease;
    }

    /* Performance Optimized - Will-change properties */
    .gallery-item,
    .image-hover,
    .fade-in,
    .slide-in-left,
    .slide-in-right,
    .scale-in {
        will-change: transform, opacity;
    }

    /* Accessibility Friendly - Reduced motion support */
    @media (prefers-reduced-motion: reduce) {

        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
            scroll-behavior: auto !important;
        }
    }

    /* Interactive Feedback - Button hover effects */
    .btn-hover {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .btn-hover::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }

    .btn-hover:hover::before {
        left: 100%;
    }

    /* Magnetic effect for buttons */
    .magnetic {
        transition: transform 0.3s ease;
    }

    /* Gradient text animation */
    .text-gradient {
        background: linear-gradient(45deg, #fbbf24, #f59e0b, #d97706);
        background-size: 200% 200%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: gradient-shift 3s ease-in-out infinite;
    }

    @keyframes gradient-shift {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }

    /* Floating animation for decorative elements */
    .floating {
        animation: floating 3s ease-in-out infinite;
    }

    @keyframes floating {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    /* Pulse animation for dots */
    .pulse-dot {
        animation: pulse-dot 2s ease-in-out infinite;
    }

    @keyframes pulse-dot {

        0%,
        100% {
            transform: scale(1);
            opacity: 0.7;
        }

        50% {
            transform: scale(1.2);
            opacity: 1;
        }
    }

    /* Skeleton loading effect for images */
    .aspect-square,
    .aspect-\[4\/3\],
    .aspect-\[16\/9\],
    .aspect-\[3\/4\] {
        position: relative;
        background: linear-gradient(90deg, #374151 25%, #4b5563 50%, #374151 75%);
        background-size: 200% 100%;
        animation: skeleton-loading 1.5s infinite;
    }

    @keyframes skeleton-loading {
        0% {
            background-position: 200% 0;
        }

        100% {
            background-position: -200% 0;
        }
    }

    /* Stop skeleton animation when image loads */
    .aspect-square img,
    .aspect-\[4\/3\] img,
    .aspect-\[16\/9\] img,
    .aspect-\[3\/4\] img {
        position: relative;
        z-index: 1;
    }

    /* Smooth navbar transition */
    #navbar {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Image reveal animation */
    .image-reveal {
        overflow: hidden;
        position: relative;
    }

    .image-reveal img {
        transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .image-reveal:hover img {
        transform: scale(1.1);
    }

    /* Counter animation */
    .counter-animation {
        transition: all 0.3s ease;
    }

    /* Sticky section animation */
    .sticky-section {
        transition: transform 0.5s ease;
    }

    /* Performance optimizations */
    .animations-ready * {
        will-change: auto;
    }

    /* High contrast mode support */
    @media (prefers-contrast: high) {
        .text-gradient {
            background: none;
            -webkit-text-fill-color: #fbbf24;
            color: #fbbf24;
        }
    }

    /* Print styles */
    @media print {

        .scroll-progress,
        .floating,
        .pulse-dot {
            display: none !important;
        }
    }

    /* Responsive helpers: images, embeds, tables */
    @media (max-width: 1024px) {

        img,
        video,
        canvas {
            max-width: 100%;
            height: auto;
        }

        .responsive-container {
            width: 100%;
            max-width: 100%;
            overflow: hidden;
        }

        .responsive-embed {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            height: 0;
        }

        .responsive-embed iframe,
        .responsive-embed object,
        .responsive-embed embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive table {
            min-width: 640px;
        }
    }

    @media (max-width: 768px) {

        .container,
        .max-w-6xl,
        .max-w-7xl,
        .max-w-screen-xl {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }
    }

    /* Global navbar overflow prevention */
    #main-navbar {
        max-width: 100vw !important;
        overflow: visible !important;
        /* allow dropdown to overflow */
        z-index: 100 !important;
    }

    .mobile-menu,
    .mobile-menu-content {
        max-width: 100vw !important;
        overflow: hidden !important;
    }

    /* Profile page specific responsive fixes */
    @media (max-width: 1024px) {

        /* Tablet specific fixes */
        .max-w-6xl {
            max-width: 100vw !important;
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        /* Ensure proper grid behavior */
        .grid.grid-cols-1.lg\:grid-cols-2 {
            grid-template-columns: 1fr !important;
            gap: 2rem !important;
        }

        /* Fix image gallery spacing */
        .grid.grid-cols-2 {
            gap: 0.75rem !important;
            max-width: 100% !important;
        }

        /* Adjust text containers */
        .space-y-3.sm\:space-y-6,
        .space-y-4.sm\:space-y-6.lg\:space-y-8,
        .space-y-6.sm\:space-y-8.lg\:space-y-10 {
            width: 100% !important;
            max-width: 100% !important;
        }

        /* Fix section containers */
        .relative.w-full.min-h-screen {
            width: 100vw !important;
            max-width: 100vw !important;
            overflow: hidden !important;
        }
    }

    @media (max-width: 768px) {

        /* Mobile specific fixes */
        .max-w-6xl {
            max-width: 100vw !important;
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }

        /* Stack all layouts on mobile */
        .grid.grid-cols-1.lg\:grid-cols-2,
        .grid.grid-cols-1.md\:grid-cols-2 {
            grid-template-columns: 1fr !important;
            gap: 1.5rem !important;
        }

        /* Adjust spacing for mobile */
        .py-4.sm\:py-8.lg\:py-16 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .py-8.sm\:py-12.lg\:py-16 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        /* Fix image gallery on mobile */
        .grid.grid-cols-2 {
            gap: 0.5rem !important;
            max-width: 100% !important;
        }

        /* Ensure text doesn't overflow */
        .text-2xl.sm\:text-3xl.md\:text-4xl.lg\:text-5xl.xl\:text-6xl {
            font-size: clamp(1.5rem, 5vw, 2.5rem) !important;
            line-height: 1.2 !important;
        }

        .text-xl.sm\:text-2xl.md\:text-3xl.lg\:text-4xl.xl\:text-5xl {
            font-size: clamp(1.25rem, 4vw, 2rem) !important;
            line-height: 1.2 !important;
        }

        .text-base.sm\:text-lg.md\:text-xl.lg\:text-2xl {
            font-size: clamp(0.875rem, 3vw, 1.25rem) !important;
            line-height: 1.4 !important;
        }

        /* Fix section containers on mobile */
        .relative.w-full.min-h-screen {
            width: 100vw !important;
            max-width: 100vw !important;
            overflow: hidden !important;
        }
    }

    @media (max-width: 640px) {

        /* Small mobile fixes */
        .max-w-6xl {
            max-width: 100vw !important;
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }

        /* Ensure no horizontal scroll */
        body,
        html {
            overflow-x: hidden !important;
            width: 100% !important;
        }

        /* Fix any remaining overflow issues */
        .relative.w-full.min-h-screen {
            width: 100vw !important;
            max-width: 100vw !important;
        }

        /* Adjust image gallery for very small screens */
        .grid.grid-cols-2 {
            gap: 0.25rem !important;
            max-width: 100% !important;
        }

        /* Ensure text containers don't cause overflow */
        .space-y-3.sm\:space-y-6,
        .space-y-4.sm\:space-y-6.lg\:space-y-8,
        .space-y-6.sm\:space-y-8.lg\:space-y-10 {
            width: 100% !important;
            max-width: 100% !important;
        }

        /* Fix padding for very small screens */
        .px-4.sm\:px-6.lg\:px-8 {
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }

        /* Fix section containers on small mobile */
        .relative.w-full.min-h-screen {
            width: 100vw !important;
            max-width: 100vw !important;
            overflow: hidden !important;
        }
    }

    /* Prevent any horizontal overflow globally */
    * {
        box-sizing: border-box;
    }

    body,
    html {
        max-width: 100vw;
        overflow-x: hidden;
    }

    /* Ensure all profile page containers respect viewport */
    .max-w-6xl {
        max-width: min(100vw - 1rem, 72rem) !important;
        width: 100% !important;
    }

    /* Fix specific profile page elements */
    .relative.z-10.w-full.max-w-6xl.mx-auto {
        max-width: 100vw !important;
        width: 100% !important;
        overflow: hidden !important;
    }

    /* Ensure grid layouts don't overflow */
    .grid.grid-cols-1.lg\:grid-cols-2 {
        width: 100% !important;
        max-width: 100% !important;
    }

    /* Fix image gallery container */
    .grid.grid-cols-2.gap-2.sm\:gap-3 {
        width: 100% !important;
        max-width: 100% !important;
        overflow: hidden !important;
    }

    /* Fix section containers */
    .relative.w-full.min-h-screen {
        width: 100vw !important;
        max-width: 100vw !important;
        overflow: hidden !important;
    }

    /* LAYANAN Dropdown basic styles */
    .group[data-dropdown] {
        position: relative !important;
    }

    .group[data-dropdown] ul {
        position: absolute !important;
        top: 100% !important;
        left: 0 !important;
        z-index: 9999 !important;
        background: white !important;
        border-radius: 0.5rem !important;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25) !important;
        border: 1px solid #e5e7eb !important;
        min-width: 12rem !important;
        opacity: 0 !important;
        visibility: hidden !important;
        transform: translateY(-8px) !important;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
        pointer-events: none !important;
    }

    .group[data-dropdown]:hover ul {
        opacity: 1 !important;
        visibility: visible !important;
        transform: translateY(0) !important;
        pointer-events: auto !important;
    }

    .group[data-dropdown] ul li {
        margin: 0 !important;
    }

    .group[data-dropdown] ul li a {
        display: block !important;
        padding: 0.75rem 1rem !important;
        color: #374151 !important;
        font-size: 0.875rem !important;
        text-decoration: none !important;
        transition: all 0.2s ease !important;
        border-radius: 0.25rem !important;
        margin: 0.125rem 0.25rem !important;
    }

    .group[data-dropdown] ul li a:hover {
        background-color: #fef3c7 !important;
        color: #92400e !important;
        transform: translateX(4px) !important;
    }

    /* Ensure dropdown is above other elements */
    .group[data-dropdown] ul {
        z-index: 99999 !important;
        position: absolute !important;
        top: calc(100% + 0.5rem) !important;
    }

    /* Explicit open state controlled by JS */
    .group[data-dropdown] ul.dropdown-open {
        display: block !important;
        opacity: 1 !important;
        visibility: visible !important;
        transform: translateY(0) !important;
        pointer-events: auto !important;
    }

    /* Fix for mobile devices */
    @media (max-width: 768px) {
        .group[data-dropdown] ul {
            position: static !important;
            opacity: 1 !important;
            visibility: visible !important;
            transform: none !important;
            box-shadow: none !important;
            border: none !important;
            background: transparent !important;
            margin-top: 0.5rem !important;
        }

        .group[data-dropdown] ul li a {
            color: #9ca3af !important;
            padding: 0.5rem 1rem !important;
            margin: 0.25rem 0 !important;
        }

        .group[data-dropdown] ul li a:hover {
            background-color: #374151 !important;
            color: white !important;
            transform: none !important;
        }
    }
</style>
