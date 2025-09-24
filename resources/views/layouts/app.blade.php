<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="aV8myPkGCy07_79rrfohgnTBb50l8OF5wIQUEiaC0BQ" />
    <meta name="description" content="@yield('meta_description', 'Bangun Rumah Project - Jasa bangun rumah Kendari & renovasi rumah terpercaya. Kontraktor Kendari dengan harga transparan, konsultasi gratis, desain arsitektur modern, dan hasil berkualitas. Solusi terbaik untuk rumah impian Anda.')">
    <meta name="keywords" content="kontraktor kendari, jasa bangun rumah Kendari, renovasi rumah kendari, desain arsitektur Kendari, RAB PBG IMB kendari, kontraktor terpercaya Kendari, bangun rumah kendari, renovasi rumah minimalis">
    <meta name="author" content="Bangun Rumah Project">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">
    <meta name="geo.region" content="ID-SG">
    <meta name="geo.placename" content="Kendari, Sulawesi Tenggara">
    <meta name="geo.position" content="-3.9985;122.5136">
    <meta name="ICBM" content="-3.9985, 122.5136">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('img/LogoBR.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/LogoBR.png') }}">
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
    <meta property="og:description" content="@yield('meta_description', 'Bangun Rumah Project - kontraktor kendari, bangun rumah kendari, renovasi rumah kendari, desain arsitektur kendari, RAB & PBG/IMB kendari.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('img/LogoBR.png') }}">

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
