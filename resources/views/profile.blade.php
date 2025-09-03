@extends('layouts.app')

@section('title', 'Profile')

@section('styles')
    @include('components.styles')
    <style>
        /* Prevent horizontal overflow */
        body {
            overflow-x: hidden;
        }

        /* Ensure containers don't exceed viewport */
        .max-w-6xl {
            max-width: min(72rem, 100vw - 2rem);
        }

        /* Responsive image gallery */
        @media (max-width: 1024px) {
            .grid-cols-2 {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .grid-cols-2 {
                grid-template-columns: repeat(2, 1fr);
                gap: 0.5rem;
            }
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
        }

        /* Prevent any horizontal overflow globally */
        * {
            box-sizing: border-box;
        }

        /* Ensure all containers respect viewport */
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
    </style>
@endsection

@section('content')
    @include('components.navbar')

    <!-- Hero Section -->
    <!-- Section 1: Bangun Rumah Project -->
    <section class="relative w-full min-h-screen bg-gray-900 overflow-hidden">
        <!-- Background Image dengan Overlay -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-70"
            style="background-image: url('{{ asset('img/siang1.png') }}');">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/50 via-black/50 to-black/30"></div>

        <!-- Main Content Container -->
        <div class="relative z-10 w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-8 lg:py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-8 lg:gap-16 items-start min-h-[70vh] sm:min-h-[80vh]">

                <!-- Left Content - Text Section -->
                <div
                    class="space-y-3 sm:space-y-6 mb-4 lg:mb-0 transform -translate-y-4 sm:-translate-y-8 lg:-translate-y-12">
                    <!-- Main Title -->
                    <div class="space-y-1 sm:space-y-2 lg:space-y-4">
                        <h1
                            class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl pt-8 sm:pt-12 lg:pt-16 font-black text-yellow-400 drop-shadow-lg animate-fade-in-up">
                            Bangun Rumah
                        </h1>
                        <h2
                            class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-black text-yellow-400 drop-shadow-lg animate-fade-in-up">
                            Project
                        </h2>
                    </div>

                    <!-- Description -->
                    <div class="space-y-3 sm:space-y-6 w-full">
                        <p
                            class="text-white text-base sm:text-lg md:text-xl lg:text-2xl leading-relaxed font-medium drop-shadow-lg animate-fade-in-up">
                            Bangun Rumah Project menghadirkan layanan arsitektur
                            dan konstruksi hunian modern dengan perpaduan estetika, fungsionalitas, dan kenyamanan yang
                            sesuai kebutuhan Anda.
                        </p>

                        <p
                            class="text-gray-200 text-sm sm:text-base md:text-lg lg:text-xl leading-relaxed drop-shadow-lg animate-fade-in-up">
                            Dengan pendekatan end-to-end solution, mulai dari perencanaan konsep hingga tahap finishing,
                            tim profesional kami menghadirkan standar kualitas tinggi untuk mewujudkan hunian impian yang
                            selaras dengan gaya hidup modern.
                        </p>
                    </div>

                    <!-- CTA Button -->
                    <div class="pt-2 sm:pt-4 lg:pt-6 drop-shadow-lg animate-fade-in-up">
                        <a href="/portofolio"
                            class="inline-flex items-center px-4 sm:px-6 md:px-8 py-3 sm:py-4 bg-yellow-400 hover:bg-yellow-500 text-black font-bold text-sm sm:text-base md:text-lg rounded-lg transform hover:scale-105 transition-all duration-300 shadow-xl btn-hover magnetic">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6 mr-2 sm:mr-3" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                            Lihat Portfolio
                        </a>
                    </div>
                </div>

                <!-- Right Content - Image Gallery -->
                <div class="relative mt-4 sm:mt-8 lg:mt-0">
                    <!-- Main Container untuk Gallery -->
                    <div class="grid grid-cols-2 gap-2 sm:gap-3 w-full max-w-xs sm:max-w-sm md:max-w-md mx-auto lg:mx-0">

                        <!-- Column 1 (Left) -->
                        <div class="space-y-2 sm:space-y-3 drop-shadow-lg animate-fade-in-left">
                            <!-- Image 1 - Large rectangular -->
                            <div
                                class="aspect-[4/3] bg-gray-700 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 image-hover">
                                <img src="{{ asset('img/profil1.jpg') }}" alt="Modern House Design 1"
                                    class="w-full h-full object-cover hover:opacity-90 transition-opacity duration-300">
                            </div>

                            <!-- Image 2 - Square -->
                            <div
                                class="aspect-square bg-gray-700 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 image-hover">
                                <img src="{{ asset('img/profil2.png') }}" alt="Modern House Design 2"
                                    class="w-full h-full object-cover hover:opacity-90 transition-opacity duration-300">
                            </div>

                            <!-- Image 3 - Square -->
                            <div
                                class="aspect-square bg-gray-700 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 image-hover">
                                <img src="{{ asset('img/profil3.png') }}" alt="Modern House Design 3"
                                    class="w-full h-full object-cover hover:opacity-90 transition-opacity duration-300">
                            </div>
                        </div>

                        <!-- Column 2 (Right) -->
                        <div class="space-y-2 sm:space-y-3 drop-shadow-lg animate-fade-in-right">
                            <!-- Image 4 - Square -->
                            <div
                                class="aspect-square bg-gray-700 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 image-hover">
                                <img src="{{ asset('img/profil4.jpg') }}" alt="Modern House Design 4"
                                    class="w-full h-full object-cover hover:opacity-90 transition-opacity duration-300">
                            </div>

                            <!-- Image 5 - Large rectangular -->
                            <div
                                class="aspect-[4/3] bg-gray-700 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 image-hover">
                                <img src="{{ asset('img/profil5.jpg') }}" alt="Modern House Design 5"
                                    class="w-full h-full object-cover hover:opacity-90 transition-opacity duration-300">
                            </div>

                            <!-- Image 6 - Square -->
                            <div
                                class="aspect-square bg-gray-700 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 image-hover">
                                <img src="{{ asset('img/profil6.jpg') }}" alt="Modern House Design 6"
                                    class="w-full h-full object-cover hover:opacity-90 transition-opacity duration-300">
                            </div>
                        </div>
                    </div>

                    <!-- Floating Decorative Element -->
                    <div
                        class="absolute -top-4 -right-4 w-8 h-8 sm:w-12 sm:h-12 md:w-16 md:h-16 border-2 sm:border-4 border-yellow-400 rounded-full floating opacity-80">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: 100+ Proyek Selesai -->
    <section
        class="relative w-full min-h-[70vh] sm:min-h-screen overflow-hidden bg-gradient-to-t from-black via-black-500 to-yellow-300">
        <!-- Main Content Container -->
        <div class="relative z-10 w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8 lg:py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-16 items-center min-h-[60vh] sm:min-h-[80vh]">

                <!-- Left Content - Zigzag Image Gallery -->
                <div class="relative max-w-sm sm:max-w-md mx-auto lg:mx-0 slide-in-left">
                    <!-- Main Image Container with Golden Border -->
                    <div class="relative bg-gradient-to-br from-yellow-200 to-yellow-400 p-4 sm:p-6 rounded-2xl shadow-2xl">
                        <!-- Image Gallery Strip - Zigzag Layout -->
                        <div class="space-y-3 sm:space-y-4">

                            <!-- Image 1 - Left aligned -->
                            <div class="aspect-[16/9] bg-gray-800 rounded-lg overflow-hidden shadow-lg w-4/5 gallery-item image-hover"
                                data-delay="0">
                                <img src="{{ asset('img/image gallery 1.jpg') }}" alt="Modern Interior Design 1"
                                    class="w-full h-full object-cover">
                            </div>

                            <!-- Image 2 - Right aligned -->
                            <div class="aspect-[16/9] bg-gray-800 rounded-lg overflow-hidden shadow-lg w-4/5 ml-auto gallery-item image-hover"
                                data-delay="0.1">
                                <img src="{{ asset('img/image gallery 2.jpg') }}" alt="Modern Exterior Design 1"
                                    class="w-full h-full object-cover">
                            </div>

                            <!-- Image 3 - Left aligned -->
                            <div class="aspect-[16/9] bg-gray-800 rounded-lg overflow-hidden shadow-lg w-4/5 gallery-item image-hover"
                                data-delay="0.2">
                                <img src="{{ asset('img/image gallery 3.jpg') }}" alt="Modern Living Room Design"
                                    class="w-full h-full object-cover">
                            </div>

                            <!-- Image 4 - Right aligned -->
                            <div class="aspect-[16/9] bg-gray-800 rounded-lg overflow-hidden shadow-lg w-4/5 ml-auto gallery-item image-hover"
                                data-delay="0.3">
                                <img src="{{ asset('img/image gallery 4.jpg') }}" alt="Modern Kitchen Design"
                                    class="w-full h-full object-cover">
                            </div>

                            <!-- Image 5 - Left aligned -->
                            <div class="aspect-[16/9] bg-gray-800 rounded-lg overflow-hidden shadow-lg w-4/5 gallery-item image-hover"
                                data-delay="0.4">
                                <img src="{{ asset('img/image gallery 5.jpg') }}" alt="Modern Bedroom Design"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Statistics & Text -->
                <div class="space-y-6 sm:space-y-8 text-center lg:text-left text-white slide-in-right">
                    <!-- Main Statistic -->
                    <div class="space-y-2 scale-in">
                        <h1
                            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl 2xl:text-9xl font-black leading-none counter-animation text-gradient">
                            77+
                        </h1>
                        <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold leading-tight">
                            Proyek selesai
                        </h2>
                    </div>

                    <!-- Description -->
                    <div class="space-y-4 w-full mx-auto lg:mx-0">
                        <p class="text-gray-200 text-sm sm:text-base md:text-lg leading-relaxed">
                            Kami telah menyelesaikan beragam proyek mulai dari pembangunan hunian, desain rumah, renovasi,
                            hingga pengurusan surat dan RAB.
                            Semua dikerjakan dengan perencanaan matang, material berkualitas, dan sentuhan profesional.
                            Kepercayaan klien menjadi bukti komitmen kami dalam mewujudkan hunian yang nyaman, fungsional,
                            dan berkelas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative w-full min-h-screen bg-black text-white py-8 sm:py-12 lg:py-16">
        <div class="relative z-10 w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8 lg:py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-16 items-start">

                <!-- Left Content -->
                <div class="space-y-4 sm:space-y-6 lg:space-y-8 fade-in">
                    <!-- Main Title -->
                    <div class="space-y-3 sm:space-y-4">
                        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight">
                            Rencana Besar Di <span class="text-yellow-400">Masa Depan</span>
                        </h2>
                        <p class="text-gray-300 text-sm sm:text-base md:text-lg leading-relaxed w-full">
                            Kami percaya bahwa setiap hunian adalah investasi jangka panjang bagi masa depan.
                            Dengan perencanaan yang matang, desain modern, serta konstruksi yang berkualitas, Bangun Rumah
                            Project berkomitmen untuk menghadirkan karya arsitektur yang tidak hanya indah dipandang,
                            tetapi juga fungsional dan tahan lama.
                            Visi kami adalah menciptakan ruang hidup yang mampu mendukung
                            gaya hidup modern sekaligus memberikan kenyamanan bagi generasi sekarang dan mendatang.
                        </p>
                    </div>

                    <!-- Goals/Plans Section -->
                    <div class="space-y-3 sm:space-y-4 lg:space-y-6">
                        <h3 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold text-yellow-400">
                            Tujuan dan Dedikasi Kami
                        </h3>

                        <div class="space-y-2 sm:space-y-3 lg:space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-yellow-400 rounded-full mt-2 flex-shrink-0 pulse-dot"></div>
                                <p class="text-gray-300 leading-relaxed text-sm sm:text-base">
                                    Setiap proyek dijalankan dengan transparansi dan kepercayaan, memastikan klien merasa
                                    tenang karena semua proses dikerjakan sesuai kesepakatan.
                                </p>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-yellow-400 rounded-full mt-2 flex-shrink-0 pulse-dot"
                                    style="animation-delay: 0.5s;"></div>
                                <p class="text-gray-300 leading-relaxed text-sm sm:text-base">
                                    Kami mempunyai Tim yang terdiri dari tenaga ahli berpengalaman yang bekerja dengan
                                    standar tinggi, mulai dari perencanaan hingga finishing.
                                </p>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-yellow-400 rounded-full mt-2 flex-shrink-0 pulse-dot"
                                    style="animation-delay: 1s;"></div>
                                <p class="text-gray-300 leading-relaxed text-sm sm:text-base">
                                    Material pilihan dan pengerjaan yang detail menjadi prioritas kami, agar hunian Anda
                                    kokoh, nyaman, dan tahan lama.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Image -->
                <div class="relative slide-in-right">
                    <div class="aspect-[4/5] bg-gray-800 rounded-2xl overflow-hidden shadow-2xl image-hover image-reveal">
                        <img src="{{ asset('img/img1.jpg') }}" alt="Modern House Design"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- Decorative elements -->
                    <div
                        class="absolute -top-2 sm:-top-4 -left-2 sm:-left-4 w-4 h-4 sm:w-6 sm:h-6 md:w-8 md:h-8 border-t-2 sm:border-t-4 border-l-2 sm:border-l-4 border-yellow-400 floating">
                    </div>
                    <div class="absolute -bottom-2 sm:-bottom-4 -right-2 sm:-right-4 w-4 h-4 sm:w-6 sm:h-6 md:w-8 md:h-8 border-b-2 sm:border-b-4 border-r-2 sm:border-r-4 border-yellow-400 floating"
                        style="animation-delay: 1s;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Kelebihan Kami -->
    <section class="relative w-full min-h-screen bg-black text-white py-8 sm:py-12 lg:py-16">
        <div class="relative z-10 w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8 lg:py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-16 items-start">

                <div class="relative lg:sticky lg:top-32 transition-transform duration-500 ease-in-out slide-in-left">
                    <div class="aspect-[3/4] bg-gray-800 rounded-none overflow-hidden shadow-2xl image-hover image-reveal">
                        <img src="{{ asset('img/profil4.jpg') }}" alt="Modern House Exterior"
                            class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Right Content -->
                <div class="space-y-6 sm:space-y-8 lg:space-y-10 lg:pl-8 slide-in-right">
                    <!-- Main Title -->
                    <div class="space-y-3 sm:space-y-4">
                        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight">
                            <span class="text-yellow-400">Kelebihan</span> Kami
                        </h2>
                    </div>

                    <!-- Advantages Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 lg:gap-9">
                        <!-- Row 1 - Dua item -->
                        <div class="space-y-2 sm:space-y-3">
                            <h3 class="text-base sm:text-lg font-semibold text-white">Legalitas Terjamin</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Menjamin kepercayaan penuh dengan badan hukum resmi dalam setiap proyek.
                            </p>
                        </div>

                        <div class="space-y-2 sm:space-y-3">
                            <h3 class="text-base sm:text-lg font-semibold text-white">Proses Kerja Terstandarisasi</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Setiap tahap pembangunan berjalan rapi, terukur, dan sesuai prosedur.
                            </p>
                        </div>

                        <!-- Row 2 - Satu item di tengah -->
                        <div class="space-y-2 col-span-1 md:col-span-2 mx-auto w-full md:w-2/3 lg:w-1/2">
                            <h3 class="text-base sm:text-lg font-semibold text-white">Tim Profesional Handal</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Didukung tenaga ahli berpengalaman yang siap memberikan hasil terbaik.
                            </p>
                        </div>

                        <!-- Row 3 - Dua item -->
                        <div class="space-y-2 sm:space-y-3">
                            <h3 class="text-base sm:text-lg font-semibold text-white">Rekam Jejak Terbukti</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Berbagai proyek konstruksi dan desain sukses menjadi bukti dedikasi kami.
                            </p>
                        </div>

                        <div class="space-y-2 sm:space-y-3">
                            <h3 class="text-base sm:text-lg font-semibold text-white">Harga Transparan</h3>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Memberikan estimasi biaya yang jelas, tanpa biaya tersembunyi.
                            </p>
                        </div>
                    </div>

                    <!-- Bottom Statement -->
                    <div class="pt-3 sm:pt-4 lg:pt-6 border-t border-gray-800 fade-in" data-delay="0.7">
                        <p class="text-white font-medium text-sm sm:text-base mb-6">
                            Kami Bekerja Sama dengan :
                        </p>

                        <!-- Infinite Scroll Container untuk Logo Mitra -->
                        <div class="relative mt-4 sm:mt-6 overflow-hidden">
                            <!-- Single Row - Moving Left -->
                            <div class="flex space-x-6 partner-logos-row" style="width: max-content;">
                                <!-- Logo items will be populated by JavaScript -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="https://wa.me/6285333353609?text=Halo%2C%20saya%20tertarik%20untuk%20konsultasi%20rancang%20bangun%20rumah"
        target="_blank"
        class="fixed bottom-8 right-8 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition transform hover:scale-110 z-50"
        title="Chat via WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-8 h-8 fill-current">
            <path
                d="M16 0C7.163 0 0 6.92 0 15.44c0 2.72.775 5.37 2.237 7.68L0 32l9.13-2.388A15.9 15.9 0 0016 30.88c8.837 0 16-6.92 16-15.44S24.837 0 16 0zm0 28.48a12.48 12.48 0 01-6.46-1.76l-.463-.275-5.42 1.417 1.45-5.18-.3-.5A12.13 12.13 0 013.52 15.44c0-6.657 5.77-12.08 12.88-12.08 3.44 0 6.677 1.315 9.107 3.702a12.42 12.42 0 013.773 8.378c0 6.657-5.77 12.08-12.88 12.08zm7.057-8.807c-.387-.193-2.283-1.127-2.636-1.253-.353-.127-.61-.193-.867.193-.257.386-.993 1.253-1.217 1.507-.223.257-.45.29-.837.097-.387-.193-1.633-.598-3.11-1.905-1.148-1.015-1.922-2.27-2.145-2.656-.223-.386-.023-.594.17-.787.175-.174.387-.45.58-.676.193-.226.257-.386.387-.644.127-.257.064-.48-.032-.674-.096-.193-.867-2.086-1.19-2.857-.314-.754-.634-.65-.867-.66l-.74-.013c-.257 0-.674.096-1.03.48-.353.386-1.354 1.322-1.354 3.223 0 1.902 1.385 3.737 1.58 3.993.193.257 2.728 4.17 6.606 5.847.925.4 1.645.639 2.205.816.926.295 1.77.253 2.435.154.743-.111 2.283-.932 2.605-1.83.322-.898.322-1.667.225-1.83-.096-.161-.353-.257-.74-.45z" />
        </svg>
    </a>

    @include('components.footer')
@endsection

@section('scripts')
    @include('components.scripts')
    <script src="{{ asset('js/partner-logos.js') }}"></script>
@endsection
