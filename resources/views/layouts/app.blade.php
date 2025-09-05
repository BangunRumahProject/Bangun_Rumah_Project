<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="aV8myPkGCy07_79rrfohgnTBb50l8OF5wIQUEiaC0BQ" />
    <meta name="description" content="@yield('meta_description', 'Bangun Rumah Project - Jasa bangun, renovasi, desain arsitektur, RAB & PBG/IMB di Indonesia. Konsultasi gratis, harga transparan, dan hasil berkualitas.')">
    <title>@yield('title', 'Bangun Rumah Project')</title>
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
    <meta property="og:title" content="@yield('title', 'Bangun Rumah Project - Jasa Bangun & Renovasi Rumah, Desain Arsitektur, RAB & PBG/IMB')">
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
