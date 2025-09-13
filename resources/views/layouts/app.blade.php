<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="aV8myPkGCy07_79rrfohgnTBb50l8OF5wIQUEiaC0BQ" />
    <meta name="description" content="@yield('meta_description', 'Bangun Rumah Project - Jasa bangun, renovasi, desain arsitektur, RAB & PBG/IMB di Sulawesi Tenggara. Kontraktor terpercaya di Kendari, konsultasi gratis, harga transparan, dan hasil berkualitas.')">
    <meta name="keywords" content="kontraktor Sulawesi Tenggara, jasa bangun rumah Kendari, renovasi rumah Sulawesi Tenggara, desain arsitektur Kendari, RAB PBG IMB Sulawesi Tenggara, kontraktor terpercaya Kendari, bangun rumah modern, renovasi rumah minimalis">
    <meta name="author" content="Bangun Rumah Project">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">
    <meta name="geo.region" content="ID-SG">
    <meta name="geo.placename" content="Kendari, Sulawesi Tenggara">
    <meta name="geo.position" content="-3.9985;122.5136">
    <meta name="ICBM" content="-3.9985, 122.5136">
    <title>@yield('title') - Bangun Rumah Project Sulawesi Tenggara</title>
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

    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Bangun Rumah Project",
      "description": "Jasa bangun, renovasi, desain arsitektur, RAB & PBG/IMB di Sulawesi Tenggara. Kontraktor terpercaya di Kendari dengan pengalaman 3+ tahun.",
      "url": "https://bangunrumahproject.com",
      "telephone": "+6285333353609",
      "email": "bangunrumahProject@gmail.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Bumi Punggolaka Indah, Blok B18, Lalodati",
        "addressLocality": "Kendari",
        "addressRegion": "Sulawesi Tenggara",
        "postalCode": "93112",
        "addressCountry": "ID"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "-3.9985",
        "longitude": "122.5136"
      },
      "openingHours": "Mo-Sa 09:00-17:00",
      "priceRange": "$$",
      "image": "https://bangunrumahproject.com/img/logo-brp.png",
      "logo": "https://bangunrumahproject.com/img/logo-brp.png",
      "sameAs": [
        "https://www.instagram.com/bangunrumah.project",
        "https://web.facebook.com/profile.php?id=61554534025479",
        "https://www.tiktok.com/@bangunrumah.project",
        "https://www.youtube.com/@bangunrumahproject"
      ],
      "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
          "@type": "GeoCoordinates",
          "latitude": "-3.9985",
          "longitude": "122.5136"
        },
        "geoRadius": "50000"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Layanan Bangun Rumah Project",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Jasa Bangun Rumah",
              "description": "Layanan pembangunan rumah baru dari nol hingga siap huni"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Renovasi Rumah",
              "description": "Layanan renovasi rumah untuk memperbaiki dan mengubah tampilan"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Desain Arsitektur",
              "description": "Layanan desain arsitektur custom sesuai kebutuhan dan budget"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "RAB & PBG/IMB",
              "description": "Pembuatan Rencana Anggaran Biaya dan pengurusan PBG/IMB"
            }
          }
        ]
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "77"
      }
    }
    </script>
</head>

<body class="bg-white text-gray-900 min-h-screen overflow-x-hidden">
    @yield('content')
    @yield('scripts')
</body>

</html>
