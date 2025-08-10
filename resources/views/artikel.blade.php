@extends('layouts.app')

@section('content')
{{-- Include Navbar Component --}}
@include('components.navbar')
<script src="https://unpkg.com/alpinejs" defer></script>
<script type="module">
    import { setupNavbarScroll } from '/js/utils.js';
    setupNavbarScroll();
</script>

<div class="min-h-screen bg-gray-900 relative overflow-hidden">
    <!-- Background Pattern dengan alat konstruksi -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-16 h-16 border-2 border-yellow-500 rounded-full"></div>
        <div class="absolute top-32 right-20 w-12 h-12 border border-yellow-500 transform rotate-45"></div>
        <div class="absolute bottom-20 left-1/4 w-20 h-1 bg-yellow-500 transform rotate-12"></div>
        <div class="absolute top-1/2 right-1/3 w-8 h-8 border border-yellow-500 rounded-full"></div>
        <div class="absolute bottom-32 right-10 w-14 h-14 border-2 border-yellow-500 transform rotate-45"></div>
    </div>

    <!-- Header Section -->
    <div class="relative z-10 container mx-auto px-4 py-16 pt-24">
        <div class="text-center mb-16">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-yellow-500 mb-6">Artikel</h1>
            <p class="text-white text-base sm:text-lg md:text-xl max-w-3xl mx-auto leading-relaxed px-4">
                Temukan inspirasi dan informasi terbaru seputar arsitektur, konstruksi, dan desain rumah modern.
                Artikel-artikel kami disusun oleh tim ahli untuk membantu Anda mewujudkan rumah impian.
            </p>
        </div>

        <!-- Grid Artikel -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Artikel 1 -->
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-yellow-500/20 transition-all duration-300 hover:transform hover:scale-105 article-card">
                <div class="relative">
                    <img src="{{ asset('img/hero-rumah.jpg') }}" alt="Artikel 1" class="w-full h-48 object-cover">
                    <div class="absolute top-3 left-3">
                        <span class="bg-yellow-500 text-gray-900 px-2 py-1 rounded-full text-xs font-semibold">Design</span>
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="text-lg sm:text-xl font-bold text-yellow-500 mb-3">Tips Memilih Material Bangunan</h3>
                    <p class="text-gray-300 text-sm mb-4 leading-relaxed">
                        Panduan lengkap memilih material bangunan berkualitas untuk konstruksi rumah yang tahan lama dan estetik.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-400 text-xs">10 Januari 2024</span>
                        <button class="text-yellow-500 text-sm font-semibold hover:text-yellow-400 transition-colors">
                            Baca →
                        </button>
                    </div>
                </div>
            </div>

            <!-- Artikel 2 -->
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-yellow-500/20 transition-all duration-300 hover:transform hover:scale-105 article-card">
                <div class="relative">
                    <img src="{{ asset('img/image.png') }}" alt="Artikel 2" class="w-full h-48 object-cover">
                    <div class="absolute top-3 left-3">
                        <span class="bg-yellow-500 text-gray-900 px-2 py-1 rounded-full text-xs font-semibold">Tips</span>
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="text-lg sm:text-xl font-bold text-yellow-500 mb-3">Perencanaan Budget Konstruksi</h3>
                    <p class="text-gray-300 text-sm mb-4 leading-relaxed">
                        Cara efektif merencanakan dan mengelola budget konstruksi rumah tanpa mengorbankan kualitas.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-400 text-xs">8 Januari 2024</span>
                        <button class="text-yellow-500 text-sm font-semibold hover:text-yellow-400 transition-colors">
                            Baca →
                        </button>
                    </div>
                </div>
            </div>

            <!-- Artikel 3 -->
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-yellow-500/20 transition-all duration-300 hover:transform hover:scale-105 article-card">
                <div class="relative">
                    <img src="{{ asset('img/image-paruh-atas.png') }}" alt="Artikel 3" class="w-full h-48 object-cover">
                    <div class="absolute top-3 left-3">
                        <span class="bg-yellow-500 text-gray-900 px-2 py-1 rounded-full text-xs font-semibold">Inspirasi</span>
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="text-lg sm:text-xl font-bold text-yellow-500 mb-3">Desain Interior Minimalis</h3>
                    <p class="text-gray-300 text-sm mb-4 leading-relaxed">
                        Konsep desain interior minimalis yang elegan dan fungsional untuk rumah modern.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-400 text-xs">5 Januari 2024</span>
                        <button class="text-yellow-500 text-sm font-semibold hover:text-yellow-400 transition-colors">
                            Baca →
                        </button>
                    </div>
                </div>
            </div>

            <!-- Artikel 4 -->
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-yellow-500/20 transition-all duration-300 hover:transform hover:scale-105 article-card">
                <div class="relative">
                    <img src="{{ asset('img/Image-paruh-bawah.png') }}" alt="Artikel 4" class="w-full h-48 object-cover">
                    <div class="absolute top-3 left-3">
                        <span class="bg-yellow-500 text-gray-900 px-2 py-1 rounded-full text-xs font-semibold">Teknologi</span>
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="text-lg sm:text-xl font-bold text-yellow-500 mb-3">Smart Home Technology</h3>
                    <p class="text-gray-300 text-sm mb-4 leading-relaxed">
                        Integrasi teknologi smart home untuk meningkatkan kenyamanan dan efisiensi rumah Anda.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-400 text-xs">3 Januari 2024</span>
                        <button class="text-yellow-500 text-sm font-semibold hover:text-yellow-400 transition-colors">
                            Baca →
                        </button>
                    </div>
                </div>
            </div>

            <!-- Artikel 5 -->
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-yellow-500/20 transition-all duration-300 hover:transform hover:scale-105 article-card">
                <div class="relative">
                    <img src="{{ asset('img/hero-rumah.jpg') }}" alt="Artikel 5" class="w-full h-48 object-cover">
                    <div class="absolute top-3 left-3">
                        <span class="bg-yellow-500 text-gray-900 px-2 py-1 rounded-full text-xs font-semibold">Konstruksi</span>
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="text-lg sm:text-xl font-bold text-yellow-500 mb-3">Metode Konstruksi Modern</h3>
                    <p class="text-gray-300 text-sm mb-4 leading-relaxed">
                        Teknik konstruksi modern yang cepat, efisien, dan ramah lingkungan untuk proyek Anda.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-400 text-xs">1 Januari 2024</span>
                        <button class="text-yellow-500 text-sm font-semibold hover:text-yellow-400 transition-colors">
                            Baca →
                        </button>
                    </div>
                </div>
            </div>

            <!-- Artikel 6 -->
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-yellow-500/20 transition-all duration-300 hover:transform hover:scale-105 article-card">
                <div class="relative">
                    <img src="{{ asset('img/image.png') }}" alt="Artikel 6" class="w-full h-48 object-cover">
                    <div class="absolute top-3 left-3">
                        <span class="bg-yellow-500 text-gray-900 px-2 py-1 rounded-full text-xs font-semibold">Tips</span>
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <h3 class="text-lg sm:text-xl font-bold text-yellow-500 mb-3">Memilih Kontraktor Terpercaya</h3>
                    <p class="text-gray-300 text-sm mb-4 leading-relaxed">
                        Kriteria dan tips memilih kontraktor yang profesional dan terpercaya untuk proyek konstruksi Anda.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-400 text-xs">28 Desember 2023</span>
                        <button class="text-yellow-500 text-sm font-semibold hover:text-yellow-400 transition-colors">
                            Baca →
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-16">
            <button class="bg-yellow-500 text-gray-900 px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-semibold hover:bg-yellow-400 transition-colors duration-200 text-sm sm:text-base">
                Muat Artikel Lainnya
            </button>
        </div>
    </div>

    <!-- Include Footer Component -->
    @include('components.footer')
</div>
@endsection
