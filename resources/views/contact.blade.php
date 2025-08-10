@extends('layouts.app')

@section('content')
<x-navbar />

{{-- Hero Section --}}
<section class="pt-24 pb-16 relative min-h-screen flex items-center" style="background:url('/img/hero-contact.jpg') center/cover no-repeat;">
    {{-- Overlay hitam transparan --}}
    <div class="absolute inset-0 bg-black/70"></div>
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
                            <p class="text-gray-200 mb-2">Perumahan Pns, Blok A7, RT.400/RW.003, Kendari, Kec. Senga Rimur, Kota bla bla, Sulawesi Tenggara - 12114</p>
                            <p class="text-gray-200">Jam Operasional: Sen-Sab 09:00-17:00 WIB</p>
                        </div>

                        {{-- Button CTA --}}
                        <a href="https://wa.me/628123456789" class="inline-block border-2 border-yellow-400 text-yellow-400 px-8 py-3 rounded-lg hover:bg-yellow-400 hover:text-black transition duration-300 font-semibold text-lg mb-6">
                            Hubungi Kami Melalui Whatsapp
                        </a>

                        {{-- Email --}}
                        <p class="text-white mb-6">bangunrumahProject@gmail.com</p>

                        {{-- Social Media Icons --}}
                        <div class="flex items-center gap-4">
                            <span class="text-white text-sm">Ikuti Kami di</span>
                            <div class="flex space-x-4">
                                <a href="#" class="text-white hover:text-yellow-400 transition duration-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/></svg>
                                </a>
                                <a href="#" class="text-white hover:text-yellow-400 transition duration-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                </a>
                                <a href="#" class="text-white hover:text-yellow-400 transition duration-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                                </a>
                                <a href="#" class="text-white hover:text-yellow-400 transition duration-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                                </a>
                                <a href="#" class="text-white hover:text-yellow-400 transition duration-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                </a>
                                <a href="#" class="text-white hover:text-yellow-400 transition duration-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Kolom Kanan: Floor Plan --}}
                    <div class="flex justify-center lg:justify-end">
                        <div class="bg-amber-50 p-6 rounded-lg shadow-xl max-w-md">
                            <img src="/img/image-contact.jpg" alt="First Floor Plan" class="w-full h-auto rounded-lg">
                            <div class="mt-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-800">FIRST FLOOR PLAN</h3>
                                <p class="text-sm text-gray-600 mt-2">Detailed house layout with room specifications</p>
                            </div>
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
                    <p class="text-gray-700">Bumi Punggolaka Indah, Blok B18, Lalodati, Kec. Puuwatu, Kota Kendari, Sulawesi Tenggara 93112</p>
                    <p class="text-gray-600 mt-2">Jam Operasional: Sen-Sab 09:00-17:00 WIB</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Include Footer Component --}}
<x-footer />

{{-- Alpine.js --}}
<script src="https://unpkg.com/alpinejs" defer></script>

{{-- Leaflet CSS --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

{{-- Leaflet JS --}}
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script type="module">
import { mapManager } from '/js/map.js';
// Map functionality is now handled by the map module
</script>
@endsection
