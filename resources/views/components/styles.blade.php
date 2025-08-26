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
</style>
