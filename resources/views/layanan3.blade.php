@extends('layouts.app')

@section('title', 'Contact - Bangun Rumah Project')

@section('styles')
@include('components.styles')
@endsection

@section('content')
@include('components.navbar')

<body class="bg-black font-sans">

    <!-- Hero Section -->
    <section class="relative w-full min-h-screen bg-gray-900 overflow-hidden">
        <!-- Background Image dengan Overlay -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-40"
            style="background-image: url('{{ asset('image/Profile-background.png') }}');">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/50 via-black/50 to-black/30"></div>

        <!-- Main Content Container -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-4">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center min-h-[80vh]">

                <!-- Left Content - Text Section -->
                <div class="space-y-6 fade-in">
                    <!-- Main Title -->
                    <div class="space-y-4">
                        <h1
                            class="text-6xl lg:text-7xl xl:text-6xl font-black text-yellow-400 leading-tight text-gradient">
                            Pembangunan & Renovasi Rumah
                        </h1>
                    </div>

                    <!-- Description -->
                    <div class="space-y-8 max-w-xl">
                        <p class="text-white text-xl lg:text-2xl leading-relaxed font-medium">
                            Wujudkan hunian impian Anda dengan layanan pembangunan dan renovasi rumah yang profesional,
                            berkualitas tinggi, dan sesuai dengan standar konstruksi terbaik.
                        </p>

                        <p class="text-gray-200 text-lg lg:text-xl leading-relaxed">
                            Dari pembangunan rumah baru hingga renovasi total, kami menghadirkan solusi konstruksi
                            terpadu dengan tim ahli berpengalaman dan material berkualitas premium.
                        </p>
                    </div>

                    <!-- CTA Button -->
                    <div class="pt-6">
                        <a href="#services"
                            class="inline-flex items-center px-8 py-4 bg-yellow-400 hover:bg-yellow-500 text-black font-bold text-lg rounded-lg transform hover:scale-105 transition-all duration-300 shadow-xl btn-hover magnetic">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                            Lihat Layanan Kami
                        </a>
                    </div>
                </div>

                <!-- Right Content - Image -->
                <div class="relative slide-in-right">
                    <div
                        class="aspect-[4/5] bg-gray-800 rounded-2xl overflow-hidden shadow-2xl image-hover image-reveal">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Pembangunan Rumah" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="relative w-full min-h-screen bg-black text-white py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-6">
                    Layanan <span class="text-yellow-400">Kami</span>
                </h2>
                <p class="text-gray-300 text-lg lg:text-xl max-w-3xl mx-auto">
                    Kami menyediakan berbagai layanan konstruksi dan renovasi rumah dengan kualitas terbaik dan harga
                    yang kompetitif.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                <!-- Service 1: Pembangunan Rumah Baru -->
                <div class="bg-gray-900 rounded-2xl p-8 hover:bg-gray-800 transition-all duration-300 slide-in-left"
                    data-delay="0.1">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-yellow-400 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-yellow-400">Pembangunan Rumah Baru</h3>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        Layanan pembangunan rumah baru dari nol hingga siap huni. Kami menangani semua tahap konstruksi
                        mulai dari perencanaan, pembangunan pondasi, struktur, hingga finishing.
                    </p>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Desain arsitektur custom
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Material berkualitas premium
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Tim ahli berpengalaman
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Garansi konstruksi
                        </li>
                    </ul>
                </div>

                <!-- Service 2: Renovasi Rumah -->
                <div class="bg-gray-900 rounded-2xl p-8 hover:bg-gray-800 transition-all duration-300 slide-in-right"
                    data-delay="0.2">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-yellow-400 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-yellow-400">Renovasi Rumah</h3>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        Layanan renovasi rumah untuk memperbaiki, memperluas, atau mengubah tampilan rumah Anda. Kami
                        menangani renovasi parsial hingga total.
                    </p>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Renovasi interior & eksterior
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Penambahan ruangan baru
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Perbaikan struktur
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Modernisasi sistem
                        </li>
                    </ul>
                </div>

                <!-- Service 3: Desain Arsitektur -->
                <div class="bg-gray-900 rounded-2xl p-8 hover:bg-gray-800 transition-all duration-300 slide-in-left"
                    data-delay="0.3">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-yellow-400 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-yellow-400">Desain Arsitektur</h3>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        Layanan desain arsitektur custom yang menyesuaikan dengan kebutuhan, gaya hidup, dan budget
                        Anda. Kami menghadirkan solusi desain yang fungsional dan estetik.
                    </p>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Konsultasi desain gratis
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Desain 2D & 3D
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Rencana anggaran biaya
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Supervisi konstruksi
                        </li>
                    </ul>
                </div>

                <!-- Service 4: Interior Design -->
                <div class="bg-gray-900 rounded-2xl p-8 hover:bg-gray-800 transition-all duration-300 slide-in-right"
                    data-delay="0.4">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-yellow-400 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6H8V5z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-yellow-400">Desain Interior</h3>
                    </div>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        Layanan desain interior yang mengubah ruangan Anda menjadi ruang yang nyaman, fungsional, dan
                        sesuai dengan kepribadian penghuninya.
                    </p>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Layout ruangan optimal
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Pemilihan furniture & material
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Lighting design
                        </li>
                        <li class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            Color scheme & styling
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="relative w-full min-h-screen bg-gray-900 text-white py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 fade-in">
                <h2 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-6">
                    Proses <span class="text-yellow-400">Kerja</span>
                </h2>
                <p class="text-gray-300 text-lg lg:text-xl max-w-3xl mx-auto">
                    Kami mengikuti proses kerja yang sistematis dan terstruktur untuk memastikan hasil yang berkualitas
                    tinggi.
                </p>
            </div>

            <!-- Process Steps -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center fade-in" data-delay="0.1">
                    <div class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl font-bold text-black">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-yellow-400 mb-4">Konsultasi</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Diskusi mendalam tentang kebutuhan, budget, dan konsep desain yang diinginkan.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="text-center fade-in" data-delay="0.2">
                    <div class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl font-bold text-black">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-yellow-400 mb-4">Perencanaan</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Pembuatan desain detail, rencana anggaran biaya, dan timeline pengerjaan.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="text-center fade-in" data-delay="0.3">
                    <div class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl font-bold text-black">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-yellow-400 mb-4">Konstruksi</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Pengerjaan konstruksi dengan tim ahli dan supervisi ketat untuk kualitas terbaik.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="text-center fade-in" data-delay="0.4">
                    <div class="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl font-bold text-black">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-yellow-400 mb-4">Finishing</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Penyelesaian detail finishing dan serah terima proyek dengan garansi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Construction Steps Section -->
    <section class="relative w-full bg-gray-100 text-black py-20">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">

                <!-- Left Content - Steps -->
                <div class="space-y-16 fade-in">
                    <!-- Main Title -->
                    <div class="mb-16">
                        <h2 class="text-black text-3xl font-normal leading-relaxed">
                            Tahap - tahap Menggunakan Jasa<br>Pembangunan Rumah
                        </h2>
                    </div>

                    <!-- Steps Grid - 2x2 Layout -->
                    <div class="grid grid-cols-2 gap-x-16 gap-y-12">
                        <!-- Step 1 -->
                        <div class="space-y-4">
                            <span class="text-yellow-400 text-7xl font-bold leading-none">01</span>
                            <h3 class="text-black text-xl font-semibold">Tahap Desain</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Konsultasi desain, pembuatan gambar kerja, dan perencanaan detail sesuai kebutuhan dan budget klien.
                            </p>
                        </div>

                        <!-- Step 2 -->
                        <div class="space-y-4">
                            <span class="text-yellow-400 text-7xl font-bold leading-none">02</span>
                            <h3 class="text-black text-xl font-semibold">Akad</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Kesepakatan kontrak kerja, timeline pengerjaan, dan pembayaran yang transparan dan jelas.
                            </p>
                        </div>

                        <!-- Step 3 -->
                        <div class="space-y-4">
                            <span class="text-yellow-400 text-7xl font-bold leading-none">03</span>
                            <h3 class="text-black text-xl font-semibold">Tahap Bangun</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Pelaksanaan pembangunan dengan tim profesional dan material berkualitas sesuai standar.
                            </p>
                        </div>

                        <!-- Step 4 -->
                        <div class="space-y-4">
                            <span class="text-yellow-400 text-7xl font-bold leading-none">04</span>
                            <h3 class="text-black text-xl font-semibold">Serah Terima!</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Penyerahan hasil pekerjaan yang sudah selesai dan sesuai dengan kesepakatan awal.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Images Grid -->
                <div class="space-y-3 slide-in-right">
                    <!-- Top Row - Two Images Side by Side -->
                    <div class="grid grid-cols-2 gap-3">
                        <!-- Top Left Image - Square -->
                        <div class="aspect-square bg-gray-800 rounded-lg overflow-hidden shadow-sm">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                                alt="Modern House Exterior" class="w-full h-full object-cover">
                        </div>

                        <!-- Top Right Image - Tall Rectangle -->
                        <div class="aspect-[3/4] bg-gray-800 rounded-lg overflow-hidden shadow-sm">
                            <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                                alt="Modern Kitchen Interior" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Bottom Image - Wide Rectangle -->
                    <div class="aspect-[16/9] bg-gray-800 rounded-lg overflow-hidden shadow-sm">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Modern Bedroom Interior" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="relative w-full min-h-screen bg-black text-white py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <!-- Left Content -->
                <div class="space-y-8 fade-in">
                    <!-- Main Title -->
                    <div class="space-y-4">
                        <h2 class="text-white text-2xl lg:text-3xl font-normal leading-tight">
                            Apa yang Membuat Jasa Kami
                        </h2>
                        <h3 class="text-yellow-400 text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight">
                            BERBEDA
                        </h3>
                        <p class="text-gray-400 text-sm lg:text-base leading-relaxed max-w-lg">
                            Kami menawarkan layanan renovasi rumah yang berkualitas tinggi dengan tim profesional, material premium, dan pelayanan yang memuaskan.
                        </p>
                    </div>

                    <!-- House Image -->
                    <div class="relative">
                        <div class="aspect-[4/3] bg-gray-800 rounded-lg overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Modern House Design" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Right Content - Features Grid -->
                <div class="grid grid-cols-2 gap-6 slide-in-right">
                    <!-- Feature 1 -->
                    <div class="space-y-4">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-white text-lg font-semibold">TIM PROFESIONAL</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Tim ahli kami terdiri dari arsitek, insinyur, dan tukang berpengalaman yang telah mengerjakan berbagai proyek renovasi berkualitas tinggi.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="space-y-4">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-white text-lg font-semibold">MATERIAL PREMIUM</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Kami menggunakan material berkualitas tinggi dan terbaik untuk memastikan hasil renovasi yang tahan lama dan memuaskan.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="space-y-4">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-white text-lg font-semibold">DESAIN INOVATIF</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Tim desainer kami menghadirkan konsep dan desain renovasi yang inovatif, modern, dan sesuai dengan tren terkini.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="space-y-4">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-white text-lg font-semibold">PELAYANAN CEPAT</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Kami berkomitmen memberikan pelayanan renovasi yang cepat, responsif, dan sesuai dengan timeline yang telah disepakati.
                        </p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="space-y-4">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-white text-lg font-semibold">HARGA TERJANGKAU</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Kami menawarkan harga yang kompetitif dan terjangkau tanpa mengorbankan kualitas hasil renovasi.
                        </p>
                    </div>

                    <!-- Feature 6 -->
                    <div class="space-y-4">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-white text-lg font-semibold">GARANSI LENGKAP</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Kami memberikan garansi komprehensif untuk semua pekerjaan renovasi dan siap memperbaiki jika ada masalah dalam masa garansi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="relative w-full min-h-screen bg-black text-white py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <!-- Left Content -->
                <div class="space-y-8 fade-in">
                    <!-- Main Title -->
                    <div class="space-y-4">
                        <h2 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight">
                            Mengapa <span class="text-yellow-400">Memilih Kami</span>
                        </h2>
                        <p class="text-gray-300 text-base lg:text-lg leading-relaxed max-w-2xl">
                            Kami berkomitmen untuk menghadirkan layanan konstruksi terbaik dengan kualitas premium dan
                            kepuasan klien yang maksimal.
                        </p>
                    </div>

                    <!-- Advantages -->
                    <div class="space-y-6">
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-yellow-400 rounded-full mt-2 flex-shrink-0 pulse-dot"></div>
                                <div>
                                    <h3 class="text-lg font-semibold text-white mb-2">Tim Ahli Berpengalaman</h3>
                                    <p class="text-gray-300 leading-relaxed">
                                        Tim konstruksi kami terdiri dari ahli berpengalaman dengan sertifikasi resmi dan
                                        track record yang teruji.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-yellow-400 rounded-full mt-2 flex-shrink-0 pulse-dot"
                                    style="animation-delay: 0.5s;"></div>
                                <div>
                                    <h3 class="text-lg font-semibold text-white mb-2">Material Berkualitas Premium</h3>
                                    <p class="text-gray-300 leading-relaxed">
                                        Kami hanya menggunakan material berkualitas tinggi dari supplier terpercaya
                                        untuk hasil yang tahan lama.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-yellow-400 rounded-full mt-2 flex-shrink-0 pulse-dot"
                                    style="animation-delay: 1s;"></div>
                                <div>
                                    <h3 class="text-lg font-semibold text-white mb-2">Garansi Konstruksi</h3>
                                    <p class="text-gray-300 leading-relaxed">
                                        Setiap proyek kami dilengkapi dengan garansi konstruksi untuk memberikan
                                        ketenangan pikiran klien.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-yellow-400 rounded-full mt-2 flex-shrink-0 pulse-dot"
                                    style="animation-delay: 1.5s;"></div>
                                <div>
                                    <h3 class="text-lg font-semibold text-white mb-2">Harga Transparan</h3>
                                    <p class="text-gray-300 leading-relaxed">
                                        Kami memberikan penawaran harga yang transparan dan kompetitif tanpa biaya
                                        tersembunyi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Image -->
                <div class="relative slide-in-right">
                    <div
                        class="aspect-[4/5] bg-gray-800 rounded-2xl overflow-hidden shadow-2xl image-hover image-reveal">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Tim Profesional" class="w-full h-full object-cover">
                    </div>

                    <!-- Decorative elements -->
                    <div class="absolute -top-4 -left-4 w-8 h-8 border-t-4 border-l-4 border-yellow-400 floating">
                    </div>
                    <div class="absolute -bottom-4 -right-4 w-8 h-8 border-b-4 border-r-4 border-yellow-400 floating"
                        style="animation-delay: 1s;"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Testimonials Section -->
    <section class="relative w-full bg-gray-100 text-black py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-normal text-black mb-4">
                    Tanggapan <span class="text-yellow-400 font-semibold">Positive</span> Para Klien
                </h2>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Testimonial 1 -->
                <div class="bg-gray-300 rounded-lg p-8 text-center">
                    <div class="w-20 h-20 bg-white rounded-full mx-auto mb-4"></div>
                    <h3 class="text-lg font-semibold text-black mb-4">Fiqri</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">
                        "Saya Sangat Menyukai Desain Yang kalian Buat, Semuanya Serasa Di Surga"
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-300 rounded-lg p-8 text-center">
                    <div class="w-20 h-20 bg-white rounded-full mx-auto mb-4"></div>
                    <h3 class="text-lg font-semibold text-black mb-4">Afthar</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">
                        "Saya Sangat Menyukai Desain Yang kalian Buat, Semuanya Serasa Di Surga"
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-300 rounded-lg p-8 text-center">
                    <div class="w-20 h-20 bg-white rounded-full mx-auto mb-4"></div>
                    <h3 class="text-lg font-semibold text-black mb-4">Abid</h3>
                    <p class="text-sm text-gray-700 leading-relaxed">
                        "Saya Sangat Menyukai Desain Yang kalian Buat, Semuanya Serasa Di Surga"
                    </p>
                </div>
            </div>

            <!-- Transform Dream Section -->
            <div class="bg-gradient-to-r from-yellow-400 to-yellow-300 rounded-2xl p-12 text-center">
                <h2 class="text-3xl lg:text-4xl font-bold text-black mb-6">
                    Ubah Rumah <span class="font-normal">Impian</span> Anda Jadi <span class="font-normal">Kenyataan.</span>
                </h2>
                <p class="text-black text-lg mb-12 max-w-3xl mx-auto">
                    Tenang, kami bantu dari awal! Cukup isi form ini, dan tim ahli kami akan membimbingmu melalui proses desain, perencanaan anggaran, hingga.
                </p>

                <!-- Design Images -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <div class="aspect-[4/3] bg-gray-200 rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                             alt="Interior Design Sketch" class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-[4/3] bg-gray-200 rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                             alt="Modern Living Room" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="relative w-full bg-black text-white py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="space-y-8">
                    <div class="aspect-[4/3] bg-gray-800 rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                             alt="Modern Interior" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Right Content -->
                <div class="space-y-8">
                    <div>
                        <h2 class="text-3xl lg:text-4xl font-normal text-white mb-4">
                            Jasa Desain Interior & Eksterior
                            <span class="text-yellow-400 font-semibold">Rumah Modern</span>
                        </h2>
                        <p class="text-gray-300 text-base leading-relaxed mb-8">
                            Tenang, kami bantu dari awal! Cukup isi form ini, dan tim ahli kami akan membimbingmu
                            melalui proses desain, perencanaan anggaran, hingga eksekusi renovasi yang sempurna.
                        </p>
                    </div>

                    <!-- Portfolio Grid -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="aspect-[4/3] bg-gray-800 rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                                 alt="Modern House 1" class="w-full h-full object-cover">
                        </div>
                        <div class="aspect-[4/3] bg-gray-800 rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                                 alt="Modern House 2" class="w-full h-full object-cover">
                        </div>
                        <div class="aspect-[4/3] bg-gray-800 rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                                 alt="Modern House 3" class="w-full h-full object-cover">
                        </div>
                        <div class="aspect-[4/3] bg-gray-800 rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1600607687644-c7171b42498b?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                                 alt="Modern House 4" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <div class="pt-4">
                        <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-8 py-3 rounded-lg transition-all duration-300">
                            Lihat Portofolio
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services FAQ Section -->
    <section class="relative w-full bg-gray-100 text-black py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Left Content - House Image -->
                <div class="space-y-8">
                    <div class="aspect-[4/5] bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                             alt="Modern House Exterior" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Right Content - Services -->
                <div class="space-y-8">
                    <h2 class="text-3xl lg:text-4xl font-normal text-black">
                        Layanan Lainnya dari Kami
                    </h2>

                    <!-- Services Accordion -->
                    <div class="space-y-4" id="services-accordion-layanan3">
                        <!-- Service Item 1 -->
                        <div class="border border-gray-300 rounded-lg">
                            <button type="button" 
                                    class="service-button-layanan3 w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-black hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200" 
                                    data-service="1">
                                <span class="text-lg">Berapa biaya jasa desain interior dan eksterior?</span>
                                <svg class="service-icon-layanan3 w-6 h-6 transform transition-transform duration-300 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="service-content-layanan3 px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                                <p class="mb-3">Biaya jasa desain interior dan eksterior bervariasi tergantung:</p>
                                <ul class="list-disc list-inside space-y-2 text-sm">
                                    <li><strong>Luas Area:</strong> Rp 150.000 - 300.000 per m²</li>
                                    <li><strong>Kompleksitas Desain:</strong> Desain custom lebih mahal</li>
                                    <li><strong>Jenis Layanan:</strong> 2D, 3D, atau rendering</li>
                                    <li><strong>Material yang Digunakan:</strong> Material premium mempengaruhi harga</li>
                                </ul>
                                <p class="mt-3">Kami akan memberikan penawaran detail setelah konsultasi dan survey lokasi.</p>
                            </div>
                        </div>

                        <!-- Service Item 2 -->
                        <div class="border border-gray-300 rounded-lg">
                            <button type="button" 
                                    class="service-button-layanan3 w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-black hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200" 
                                    data-service="2">
                                <span class="text-lg">Apakah desain bisa disesuaikan dengan budget klien?</span>
                                <svg class="service-icon-layanan3 w-6 h-6 transform transition-transform duration-300 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="service-content-layanan3 px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                                <p class="mb-3">Ya, kami selalu menyesuaikan desain dengan budget klien:</p>
                                <ul class="list-disc list-inside space-y-2 text-sm">
                                    <li><strong>Paket Ekonomis:</strong> Desain sederhana dengan material terjangkau</li>
                                    <li><strong>Paket Standard:</strong> Desain menengah dengan material berkualitas</li>
                                    <li><strong>Paket Premium:</strong> Desain mewah dengan material terbaik</li>
                                    <li><strong>Konsultasi Gratis:</strong> Untuk membantu menentukan pilihan</li>
                                </ul>
                                <p class="mt-3">Tim kami akan memberikan alternatif desain yang sesuai dengan anggaran Anda.</p>
                            </div>
                        </div>

                        <!-- Service Item 3 -->
                        <div class="border border-gray-300 rounded-lg">
                            <button type="button" 
                                    class="service-button-layanan3 w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-black hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200" 
                                    data-service="3">
                                <span class="text-lg">Berapa lama proses pengerjaan desain interior?</span>
                                <svg class="service-icon-layanan3 w-6 h-6 transform transition-transform duration-300 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="service-content-layanan3 px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                                <p class="mb-3">Proses pengerjaan desain interior meliputi:</p>
                                <ul class="list-disc list-inside space-y-2 text-sm">
                                    <li><strong>Konsultasi & Survey:</strong> 1-2 hari</li>
                                    <li><strong>Konsep Desain:</strong> 3-5 hari</li>
                                    <li><strong>Desain Detail:</strong> 7-10 hari</li>
                                    <li><strong>3D Rendering:</strong> 5-7 hari</li>
                                    <li><strong>Revisi & Finalisasi:</strong> 3-5 hari</li>
                                </ul>
                                <p class="mt-3">Total waktu pengerjaan sekitar 2-4 minggu tergantung kompleksitas desain.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Button -->
                    <div class="pt-6">
                        <button class="border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black font-semibold px-8 py-3 rounded-lg transition-all duration-300">
                            Hubungi Kami
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="relative w-full bg-gray-100 text-gray-900 py-16 lg:py-20">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                Jangan Ragu untuk Menghubungi Kami
            </h2>
            <p class="text-gray-700 text-lg mb-8 max-w-2xl mx-auto">
                Tenang, kami bantu dari awal! Cukup isi form ini, dan tim ahli kami akan membimbingmu
                melalui proses desain, perencanaan anggaran, hingga eksekusi renovasi yang sempurna.
            </p>
            <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-10 py-4 rounded-lg text-lg transition-all duration-300">
                Hubungi Kami
            </button>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="relative w-full min-h-screen bg-black text-white py-16 lg:py-24">

    <script>
    // Services Accordion functionality for layanan3 page
    document.addEventListener('DOMContentLoaded', function() {
        const serviceButtons = document.querySelectorAll('.service-button-layanan3');
        let currentlyOpen = null;

        serviceButtons.forEach(button => {
            button.addEventListener('click', function() {
                const serviceItem = this.closest('.border');
                const content = serviceItem.querySelector('.service-content-layanan3');
                const icon = this.querySelector('.service-icon-layanan3');
                
                // If clicking the same item that's already open, close it
                if (content.style.display === 'block') {
                    content.style.display = 'none';
                    icon.style.transform = 'rotate(0deg)';
                    currentlyOpen = null;
                } else {
                    // Close currently open item if any
                    if (currentlyOpen) {
                        currentlyOpen.style.display = 'none';
                        currentlyOpen.closest('.border').querySelector('.service-icon-layanan3').style.transform = 'rotate(0deg)';
                    }
                    
                    // Open clicked item
                    content.style.display = 'block';
                    icon.style.transform = 'rotate(180deg)';
                    currentlyOpen = content;
                }
            });
        });
    });
    </script>
<a href="https://wa.me/6285333353609?text=Halo%2C%20saya%20tertarik%20untuk%20konsultasi%20rancang%20bangun%20rumah"
   target="_blank"
   class="fixed bottom-8 right-8 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition transform hover:scale-110 z-50"
   title="Chat via WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-8 h-8 fill-current">
        <path d="M16 0C7.163 0 0 6.92 0 15.44c0 2.72.775 5.37 2.237 7.68L0 32l9.13-2.388A15.9 15.9 0 0016 30.88c8.837 0 16-6.92 16-15.44S24.837 0 16 0zm0 28.48a12.48 12.48 0 01-6.46-1.76l-.463-.275-5.42 1.417 1.45-5.18-.3-.5A12.13 12.13 0 013.52 15.44c0-6.657 5.77-12.08 12.88-12.08 3.44 0 6.677 1.315 9.107 3.702a12.42 12.42 0 013.773 8.378c0 6.657-5.77 12.08-12.88 12.08zm7.057-8.807c-.387-.193-2.283-1.127-2.636-1.253-.353-.127-.61-.193-.867.193-.257.386-.993 1.253-1.217 1.507-.223.257-.45.29-.837.097-.387-.193-1.633-.598-3.11-1.905-1.148-1.015-1.922-2.27-2.145-2.656-.223-.386-.023-.594.17-.787.175-.174.387-.45.58-.676.193-.226.257-.386.387-.644.127-.257.064-.48-.032-.674-.096-.193-.867-2.086-1.19-2.857-.314-.754-.634-.65-.867-.66l-.74-.013c-.257 0-.674.096-1.03.48-.353.386-1.354 1.322-1.354 3.223 0 1.902 1.385 3.737 1.58 3.993.193.257 2.728 4.17 6.606 5.847.925.4 1.645.639 2.205.816.926.295 1.77.253 2.435.154.743-.111 2.283-.932 2.605-1.83.322-.898.322-1.667.225-1.83-.096-.161-.353-.257-.74-.45z"/>
    </svg>
</a>
</body>

</html>
@include('components.footer')
@endsection

@section('scripts')
@include('components.scripts')
@endsection
