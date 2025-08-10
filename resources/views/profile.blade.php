<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Rancang Desain Rumah</title>
    @extends('layouts.app')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('components.styles')
</head>
@section('content')
<x-navbar/>

<body class="bg-black font-sans">
    <!-- Hero Section -->

    <!-- Section 1: Bangun Rumah Project -->
    <section class="relative w-full min-h-screen bg-gray-900 overflow-hidden">
        <!-- Background Image dengan Overlay -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-40"
            style="background-image: url('{{ asset('image/Profile-background.png') }}');">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/50 via-black/50 to-black/30"></div>

        <!-- Main Content Container -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center min-h-[80vh]">

                <!-- Left Content - Text Section -->
                <div class="space-y-4 sm:space-y-6 mb-8 lg:mb-0">
                    <!-- Main Title -->
                    <div class="space-y-2 sm:space-y-4">
                        <h1
                            class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-black text-yellow-400 leading-tight text-gradient">
                            Bangun Rumah
                        </h1>
                        <h2
                            class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-black text-yellow-400 leading-tight text-gradient">
                            Project
                        </h2>
                    </div>

                    <!-- Description -->
                    <div class="space-y-4 sm:space-y-6 max-w-xl">
                        <p class="text-white text-lg sm:text-xl lg:text-2xl leading-relaxed font-medium">
                            Wujudkan hunian impian Anda dengan desain arsitektur modern yang memadukan
                            estetika dan fungsionalitas. Setiap detail dirancang khusus untuk menciptakan
                            ruang hidup yang nyaman dan berkelas.
                        </p>

                        <p class="text-gray-200 text-base sm:text-lg lg:text-xl leading-relaxed">
                            Dari konsep awal hingga finishing, kami menghadirkan solusi konstruksi
                            terpadu dengan standar kualitas tinggi. Tim profesional kami siap
                            merealisasikan visi arsitektur yang sesuai dengan gaya hidup modern Anda.
                        </p>
                    </div>

                    <!-- CTA Button -->
                    <div class="pt-4 sm:pt-6">
                        <a href="#"
                            class="inline-flex items-center px-6 sm:px-8 py-3 sm:py-4 bg-yellow-400 hover:bg-yellow-500 text-black font-bold text-base sm:text-lg rounded-lg transform hover:scale-105 transition-all duration-300 shadow-xl btn-hover magnetic">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2 sm:mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
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
                <div class="relative mt-8 lg:mt-0">
                    <!-- Main Container untuk Gallery -->
                    <div class="grid grid-cols-2 gap-2 sm:gap-3 max-w-sm sm:max-w-md mx-auto lg:max-w-lg">

                        <!-- Column 1 (Left) -->
                        <div class="space-y-2 sm:space-y-3">
                            <!-- Image 1 - Large rectangular -->
                            <div
                                class="aspect-[4/3] bg-gray-700 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 image-hover">
                                <img src="{{ asset('image/image1.png') }}" alt="Modern House Design 1"
                                    class="w-full h-full object-cover hover:opacity-90 transition-opacity duration-300">
                            </div>

                            <!-- Image 2 - Square -->
                            <div
                                class="aspect-square bg-gray-700 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 image-hover">
                                <img src="{{ asset('image/image2.png') }}" alt="Modern House Design 2"
                                    class="w-full h-full object-cover hover:opacity-90 transition-opacity duration-300">
                            </div>

                            <!-- Image 3 - Square -->
                            <div
                                class="aspect-square bg-gray-700 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 image-hover">
                                <img src="{{ asset('image/image3.png') }}" alt="Modern House Design 3"
                                    class="w-full h-full object-cover hover:opacity-90 transition-opacity duration-300">
                            </div>
                        </div>

                        <!-- Column 2 (Right) -->
                        <div class="space-y-2 sm:space-y-3 pt-4 sm:pt-8">
                            <!-- Image 4 - Square -->
                            <div
                                class="aspect-square bg-gray-700 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 image-hover">
                                <img src="{{ asset('image/image4.png') }}" alt="Modern House Design 4"
                                    class="w-full h-full object-cover hover:opacity-90 transition-opacity duration-300">
                            </div>

                            <!-- Image 5 - Square -->
                            <div
                                class="aspect-square bg-gray-700 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 image-hover">
                                <img src="{{ asset('image/image5.png') }}" alt="Modern House Design 5"
                                    class="w-full h-full object-cover hover:opacity-90 transition-opacity duration-300">
                            </div>

                            <!-- Image 6 - Tall rectangular -->
                            <div
                                class="aspect-[3/4] bg-gray-700 rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 image-hover">
                                <img src="{{ asset('image/image6.png') }}" alt="Modern House Design 6"
                                    class="w-full h-full object-cover hover:opacity-90 transition-opacity duration-300">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute top-20 left-4 sm:left-10 w-2 h-2 bg-yellow-400 rounded-full pulse-dot floating"></div>
        <div class="absolute bottom-32 left-8 sm:left-16 w-3 h-3 bg-yellow-400 rounded-full pulse-dot floating"
            style="animation-delay: 1s;"></div>
        <div class="absolute top-1/3 right-8 sm:right-20 w-2 h-2 bg-white rounded-full pulse-dot floating"
            style="animation-delay: 2s;">
        </div>
    </section>

    <!-- Section 2: 100+ Proyek Selesai -->
    <section
        class="relative w-full min-h-screen overflow-hidden bg-gradient-to-t from-black via-black-500 to-yellow-300">
        <!-- Main Content Container -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center min-h-[80vh]">

                <!-- Left Content - Zigzag Image Gallery -->
                <div class="relative max-w-sm sm:max-w-md mx-auto lg:max-w-lg slide-in-left">
                    <!-- Main Image Container with Golden Border -->
                    <div
                        class="relative bg-gradient-to-br from-yellow-200 to-yellow-400 p-4 sm:p-6 rounded-2xl shadow-2xl">
                        <!-- Image Gallery Strip - Zigzag Layout -->
                        <div class="space-y-3 sm:space-y-4">

                            <!-- Image 1 - Left aligned -->
                            <div class="aspect-[16/9] bg-gray-800 rounded-lg overflow-hidden shadow-lg w-4/5 gallery-item image-hover"
                                data-delay="0">
                                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                    alt="Modern Interior Design 1" class="w-full h-full object-cover">
                            </div>

                            <!-- Image 2 - Right aligned -->
                            <div class="aspect-[16/9] bg-gray-800 rounded-lg overflow-hidden shadow-lg w-4/5 ml-auto gallery-item image-hover"
                                data-delay="0.1">
                                <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                    alt="Modern Exterior Design 1" class="w-full h-full object-cover">
                            </div>

                            <!-- Image 3 - Left aligned -->
                            <div class="aspect-[16/9] bg-gray-800 rounded-lg overflow-hidden shadow-lg w-4/5 gallery-item image-hover"
                                data-delay="0.2">
                                <img src="https://images.unsplash.com/photo-1567767292278-a4f21aa2d36e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                    alt="Modern Living Room Design" class="w-full h-full object-cover">
                            </div>

                            <!-- Image 4 - Right aligned -->
                            <div class="aspect-[16/9] bg-gray-800 rounded-lg overflow-hidden shadow-lg w-4/5 ml-auto gallery-item image-hover"
                                data-delay="0.3">
                                <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                    alt="Modern Kitchen Design" class="w-full h-full object-cover">
                            </div>

                            <!-- Image 5 - Left aligned -->
                            <div class="aspect-[16/9] bg-gray-800 rounded-lg overflow-hidden shadow-lg w-4/5 gallery-item image-hover"
                                data-delay="0.4">
                                <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                    alt="Modern Bedroom Design" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Statistics & Text -->
                <div class="space-y-6 sm:space-y-8 text-center lg:text-left text-white slide-in-right">
                    <!-- Main Statistic -->
                    <div class="space-y-2 scale-in">
                        <h1
                            class="text-6xl sm:text-7xl lg:text-8xl xl:text-9xl font-black leading-none counter-animation text-gradient">
                            100+
                        </h1>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-bold leading-tight">
                            Proyek selesai
                        </h2>
                    </div>

                    <!-- Description -->
                    <div class="space-y-4 max-w-lg mx-auto lg:mx-0">
                        <p class="text-gray-200 text-sm sm:text-base lg:text-lg leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Fusce ornare eget lectus ut fermentum. Ut lobortis
                            blandit tempor. Mauris rutrum erat ac velit convallis, et
                            mattis ante tincidunt.
                        </p>
                    </div>

                    <!-- CTA Button -->
                    <div class="pt-4 sm:pt-6">
                        <a href="#"
                            class="inline-block px-6 sm:px-8 py-3 sm:py-4 border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black font-bold text-base sm:text-lg rounded-none transition-all duration-300 btn-hover magnetic">
                            Lihat Portfolio Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative w-full min-h-screen bg-black text-white py-8 sm:py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">

                <!-- Left Content -->
                <div class="space-y-6 sm:space-y-8 fade-in">
                    <!-- Main Title -->
                    <div class="space-y-4">
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight">
                            Rencana Besar Di <span class="text-yellow-400">Masa Depan</span>
                        </h2>
                        <p class="text-gray-300 text-sm sm:text-base lg:text-lg leading-relaxed max-w-2xl">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare eget lectus ut
                            fermentum.
                            Ut lobortis blandit tempor. Mauris rutrum erat ac velit convallis, et mattis ante tincidunt.
                            Pellentesque rhoncus rutrum tellus ac convallis, sit bibendum orci. vulputate. Aliquam
                            ultricies at
                            lectus vitae rhoncus mauris vitae ut consectetur.
                        </p>
                    </div>

                    <!-- Goals/Plans Section -->
                    <div class="space-y-4 sm:space-y-6">
                        <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-yellow-400">
                            Tujuan dan Dedikasi Kami
                        </h3>

                        <div class="space-y-3 sm:space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-yellow-400 rounded-full mt-2 flex-shrink-0 pulse-dot"></div>
                                <p class="text-gray-300 leading-relaxed text-sm sm:text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare eget lectus ut
                                    torctor.
                                </p>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-yellow-400 rounded-full mt-2 flex-shrink-0 pulse-dot"
                                    style="animation-delay: 0.5s;"></div>
                                <p class="text-gray-300 leading-relaxed text-sm sm:text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare eget lectus ut
                                    torctor.
                                </p>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-yellow-400 rounded-full mt-2 flex-shrink-0 pulse-dot"
                                    style="animation-delay: 1s;"></div>
                                <p class="text-gray-300 leading-relaxed text-sm sm:text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare eget lectus ut
                                    torctor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Image -->
                <div class="relative slide-in-right">
                    <div
                        class="aspect-[4/5] bg-gray-800 rounded-2xl overflow-hidden shadow-2xl image-hover image-reveal">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Modern House Design" class="w-full h-full object-cover">
                    </div>

                    <!-- Decorative elements -->
                    <div
                        class="absolute -top-4 -left-4 w-6 h-6 sm:w-8 sm:h-8 border-t-4 border-l-4 border-yellow-400 floating">
                    </div>
                    <div class="absolute -bottom-4 -right-4 w-6 h-6 sm:w-8 sm:h-8 border-b-4 border-r-4 border-yellow-400 floating"
                        style="animation-delay: 1s;"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative w-full min-h-screen bg-black text-white py-8 sm:py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-start">

                <div class="relative lg:sticky lg:top-32 transition-transform duration-500 ease-in-out slide-in-left">
                    <div
                        class="aspect-[3/4] bg-gray-800 rounded-none overflow-hidden shadow-2xl image-hover image-reveal">
                        <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Modern House Exterior" class="w-full h-full object-cover">
                    </div>
                </div>
                <!-- Right Content -->
                <div class="space-y-6 sm:space-y-8 lg:pl-8 slide-in-right">
                    <!-- Main Title -->
                    <div class="space-y-4">
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight">
                            <span class="text-yellow-400">Kelebihan</span> Kami
                        </h2>
                    </div>

                    <!-- Advantages Grid -->
                    <div class="grid grid-cols-1 gap-4 sm:gap-6">
                        <!-- Row 1 -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6">
                            <!-- Advantage 1 -->
                            <div class="space-y-2 fade-in" data-delay="0.1">
                                <h3 class="text-base sm:text-lg font-semibold text-white">Lorem ipsum dolor sit amet,
                                </h3>
                                <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare eget lectus ut
                                    tincidunt
                                </p>
                            </div>

                            <!-- Advantage 2 -->
                            <div class="space-y-2 fade-in" data-delay="0.2">
                                <h3 class="text-base sm:text-lg font-semibold text-white">Lorem ipsum dolor sit amet,
                                </h3>
                                <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare eget lectus ut
                                    tincidunt
                                </p>
                            </div>
                        </div>

                        <!-- Row 2 -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6">
                            <!-- Advantage 3 -->
                            <div class="space-y-2 fade-in" data-delay="0.3">
                                <h3 class="text-base sm:text-lg font-semibold text-white">Lorem ipsum dolor sit amet,
                                </h3>
                                <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare eget lectus ut
                                    tincidunt
                                </p>
                            </div>

                            <!-- Advantage 4 -->
                            <div class="space-y-2 fade-in" data-delay="0.4">
                                <h3 class="text-base sm:text-lg font-semibold text-white">Lorem ipsum dolor sit amet,
                                </h3>
                                <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare eget lectus ut
                                    tincidunt
                                </p>
                            </div>
                        </div>

                        <!-- Row 3 -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6">
                            <!-- Advantage 5 -->
                            <div class="space-y-2 fade-in" data-delay="0.5">
                                <h3 class="text-base sm:text-lg font-semibold text-white">Lorem ipsum dolor sit amet,
                                </h3>
                                <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare eget lectus ut
                                    tincidunt
                                </p>
                            </div>

                            <!-- Advantage 6 -->
                            <div class="space-y-2 fade-in" data-delay="0.6">
                                <h3 class="text-base sm:text-lg font-semibold text-white">Lorem ipsum dolor sit amet,
                                </h3>
                                <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare eget lectus ut
                                    tincidunt
                                </p>
                            </div>
                        </div>

                        <!-- Bottom Statement -->
                        <div class="pt-4 sm:pt-6 border-t border-gray-800 fade-in" data-delay="0.7">
                            <p class="text-white font-medium text-sm sm:text-base">
                                Kami Bekerja Sama dengan :
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
    @include('components.scripts')
</body>

</html>
