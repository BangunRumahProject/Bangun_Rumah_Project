<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="aV8myPkGCy07_79rrfohgnTBb50l8OF5wIQUEiaC0BQ" />
    <meta name="description" content="@yield('meta_description', 'Bangun Rumah Project - Kontraktor terpercaya di Kendari Sulawesi Tenggara. Jasa bangun, renovasi, desain arsitektur, RAB & PBG/IMB. Konsultasi gratis, harga transparan, dan hasil berkualitas.')">
    <title>@yield('title', 'Bangun Rumah Project - Kontraktor Terpercaya di Kendari Sulawesi Tenggara')</title>
    
    <!-- SEO Meta Tags -->
    <meta name="keywords" content="kontraktor rumah Kendari, jasa bangun rumah Sulawesi Tenggara, desain rumah Kendari, renovasi rumah Sulawesi Tenggara, RAB rumah Kendari, pembuatan IMB Kendari, kontraktor terpercaya Kendari">
    <meta name="author" content="Bangun Rumah Project">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">
    <meta name="geo.region" content="ID-SG">
    <meta name="geo.placename" content="Kendari, Sulawesi Tenggara">
    <meta name="geo.position" content="-3.9678;122.5961">
    <meta name="ICBM" content="-3.9678, 122.5961">
    
    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Bangun Rumah Project",
        "description": "Kontraktor terpercaya di Kendari Sulawesi Tenggara untuk jasa bangun, renovasi, desain arsitektur, RAB & PBG/IMB",
        "url": "https://bangunrumahproject.com",
        "telephone": "+6285333353609",
        "email": "bangunrumahProject@gmail.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bumi Punggolaka Indah, Blok B18, Lalodati",
            "addressLocality": "Puuwatu",
            "addressRegion": "Sulawesi Tenggara",
            "addressCountry": "ID",
            "postalCode": "93112"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "-3.9678",
            "longitude": "122.5961"
        },
        "openingHours": "Mo-Sa 09:00-17:00",
        "areaServed": [
            "Kendari",
            "Sulawesi Tenggara",
            "Indonesia"
        ],
        "serviceType": [
            "Pembangunan Rumah",
            "Renovasi Rumah", 
            "Desain Arsitektur",
            "RAB",
            "PBG/IMB"
        ]
    }
    </script>
    <link rel="icon" type="image/png" href="/img/logo-brp.png">
    <link rel="apple-touch-icon" href="/img/logo-brp.png">
    <!-- Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @yield('styles')

    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Bangun Rumah Project">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('meta_description', 'Bangun Rumah Project - Jasa bangun, renovasi, desain arsitektur, RAB & PBG/IMB di Indonesia.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ url('/img/logo-brp.png') }}">

    <!-- Cookiebot -->
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="f3db7ff2-7bcd-414b-b5ec-ff4acacb7bc2" type="text/javascript" async></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0YVGBPE7CF"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-0YVGBPE7CF');
    </script>
</head>

<body class="bg-white text-gray-900 min-h-screen overflow-x-hidden">
    @yield('content')
    @yield('scripts')
</body>

</html>
