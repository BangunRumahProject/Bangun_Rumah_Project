@extends('layouts.app')

@section('title', 'Contact')

@section('styles')
    @include('components.styles')
@endsection

@section('content')
    @include('components.navbar')
    {{-- Hero Section --}}
    <section class="pt-24 pb-16 relative min-h-screen flex items-center"
        style="background:url('/img/profil1.jpg') center/cover no-repeat;">
        {{-- Overlay hitam transparan --}}
        <div class="absolute inset-0 bg-black/50"></div>
        {{-- Content di atas overlay --}}
        <div class="relative z-10 w-full">
            <div class="w-full px-8">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        {{-- Kolom Kiri: Konten Teks --}}
                        <div class="text-white">
                            <h1 class="text-4xl md:text-5xl font-bold mb-4">Dapatkan Bantuan Terbaik dari Kami,</h1>
                            <h2 class="text-3xl md:text-4xl font-bold text-yellow-400 mb-8">Hubungi Segera</h2>

                            {{-- Section Lokasi --}}
                            <div class="mb-8">
                                <h3 class="text-xl font-semibold mb-4">Lokasi</h3>
                                <p class="text-gray-200 mb-2">Bumi Punggolaka Indah, Blok B18, Lalodati, Kec. Puuwatu, Kota
                                    Kendari, Sulawesi Tenggara 93112</p>
                                <p class="text-gray-200">Jam Operasional: Sen-Sab 09:00-17:00 WIB</p>
                            </div>

                            {{-- Button CTA --}}
                            <a href="https://wa.me/6285333353609"
                                class="inline-block border-2 border-yellow-400 text-yellow-400 px-8 py-3 rounded-lg hover:bg-yellow-400 hover:text-black transition duration-300 font-semibold text-lg mb-6">
                                Hubungi Kami Melalui Whatsapp
                            </a>

                            {{-- Email --}}
                            <p class="text-white mb-6">bangunrumahProject@gmail.com</p>

                            {{-- Social Media Icons --}}
                            <div class="flex items-center gap-4">
                                <span class="text-white text-sm">Ikuti Kami di</span>
                                <div class="flex space-x-4">
                                    <a href="https://www.instagram.com/bangunrumah.project?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    aria-label="Instagram"
                                    class="text-white hover:text-yellow-400 transition duration-300"
                                    target="_blank" rel="noopener">
                                     <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M7.75 2C5.13 2 3 4.13 3 6.75v10.5C3 19.87 5.13 22 7.75 22h8.5C18.87 22 21 19.87 21 17.25V6.75C21 4.13 18.87 2 16.25 2h-8.5Zm4.25 5.25a5.75 5.75 0 1 1 0 11.5a5.75 5.75 0 0 1 0-11.5Zm6.5-.75a1.25 1.25 0 1 1-2.5 0a1.25 1.25 0 0 1 2.5 0Zm-6.5 2a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5Z"/>
                                     </svg>
                                 </a>
                                    <a href="#" class="text-white hover:text-yellow-400 transition duration-300">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                        </svg>
                                    </a>
                                    <a href="https://www.tiktok.com/@bangunrumah.project?is_from_webapp=1&sender_device=pc" aria-label="TikTok" class="hover:text-yellow-400 transition" target="_blank" rel="noopener">
                                        <i class="fab fa-tiktok text-xl"></i>
                                    </a>
                                    <a href="#" class="text-white hover:text-yellow-400 transition duration-300">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- Kolom Kanan: Floor Plan --}}
                        <div class="relative slide-in-right mt-8">
                            <div
                                class="aspect-[4/5] bg-gray-800 rounded-2xl overflow-hidden shadow-2xl image-hover image-reveal max-w-md mx-auto">
                                <img src="/img/profil3.png" alt="Pembangunan Rumah" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Map Section --}}
    <section class="bg-white">
        {{-- Map Title Section --}}
        <div class="py-2">
            <div class="max-w-7xl mx-auto px-8 my-auto py-8">
                <div class="text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Lokasi Kami</h2>
                    <p class="text-gray-600 text-lg">Kunjungi kantor kami di Kendari, Sulawesi Tenggara</p>
                </div>
            </div>
        </div>

        {{-- Full Width Map --}}
        <div class="w-full">
            <div id="map" class="w-full h-100 md:h-[600px] bg-gray-100 flex items-center justify-center">
                <div class="text-center">
                    <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-yellow-400 mx-auto mb-2"></div>
                    <p class="text-gray-600">Memuat peta...</p>
                </div>
            </div>
        </div>

        {{-- Address Info Section --}}
        <div class="py-2">
            <div class="max-w-7xl mx-auto px-8">
                <div class="text-center">
                    <div class="bg-gray-50 rounded-lg p-6 inline-block">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Alamat Lengkap</h3>
                        <p class="text-gray-700">Bumi Punggolaka Indah, Blok B18, Lalodati, Kec. Puuwatu, Kota Kendari,
                            Sulawesi Tenggara 93112</p>
                        <p class="text-gray-600 mt-2">Jam Operasional: Sen-Sab 09:00-17:00 WIB</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Alpine.js --}}
    <script src="https://unpkg.com/alpinejs" defer></script>

    {{-- Leaflet CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    {{-- Leaflet JS --}}
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script type="module">
        import {
            mapManager
        } from '/js/map.js';
        // Map functionality is now handled by the map module
    </script>
    @include('components.footer')
@endsection

@section('scripts')
    @include('components.scripts')
@endsection
