@extends('layouts.app')

@section('title', 'Home - Bangun Rumah Project')
@section('meta_description', 'Bangun Rumah Project - Kontraktor terpercaya di Sulawesi Tenggara. Jasa bangun rumah, renovasi, desain arsitektur, RAB & PBG/IMB di Kendari. Konsultasi gratis, harga transparan, hasil berkualitas.')

@section('styles')
    @include('components.styles')
@endsection

@section('content')
    @include('components.navbar')

    {{-- Hero Section --}}
    <section id="home" class="pt-20 pb-0 relative min-h-screen flex items-center"
        style="background: linear-gradient(to bottom, transparent 0%, transparent 30%, rgba(0,0,0,0.2) 50%, rgba(0,0,0,0.5) 70%, rgba(0,0,0,0.8) 85%, rgba(0,0,0,1) 100%), url('/img/hero section 1.jpg') center -65px/cover no-repeat;">
        <!-- Overlay untuk memastikan teks terbaca -->
        <div class="absolute inset-0 bg-black/25"></div>
        <div class="w-full px-4 sm:px-8 md:px-24 lg:px-24 xl:px-32 pt-8 pb-8 text-left relative z-10">
            <div class="flex flex-col justify-center">
                <h1
                    class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-yellow-400 mb-4 drop-shadow-lg animate-fade-in-up">
                    Bangun Rumah Impian<br>Bersama Kami
                </h1>
                <p
                    class="text-white max-w-2xl mb-6 drop-shadow text-base sm:text-lg leading-relaxed animate-fade-in-up delay-200">
                    Wujudkan rumah impian Anda dengan desain yang memadukan keindahan, kenyamanan, dan kualitas terbaik dari
                    konsep hingga berdiri megah, semua kami tangani dengan sepenuh hati.
                </p>
            </div>
        </div>
    </section>

    {{-- Gradient Divider --}}
    <div class="gradient-divider"></div>

    {{-- Section Pengalaman --}}
    <section id="pengalaman"
        class="bg-gradient-to-b from-gray-50 via-white to-gray-100 py-12 sm:py-16 md:py-20 relative overflow-hidden">
        <!-- Background decorative elements -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-32 h-32 bg-yellow-400 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-40 h-40 bg-yellow-400 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10">
            <div class="text-center mb-8 sm:mb-12 md:mb-16">
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6 animate-fade-in-up">
                    Kontraktor <span class="text-yellow-400">Terpercaya</span>
                </h2>
                <p
                    class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed animate-fade-in-up delay-200 px-4">
                    Sebagai kontraktor berpengalaman, kami telah membuktikan komitmen dalam menghadirkan
                    rumah impian dengan kualitas terbaik dan pelayanan profesional
                </p>
            </div>

            <!-- Main Experience Counter -->
            <div class="flex justify-center mb-8 sm:mb-12 md:mb-16">
                <div class="relative group">
                    <!-- Large counter display -->
                    <div
                        class="bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-3xl p-6 sm:p-8 md:p-12 lg:p-16 shadow-2xl transform hover:scale-105 transition-all duration-500 animate-fade-in-up delay-300">
                        <div class="text-center">
                            <div
                                class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-bold text-white mb-4 drop-shadow-lg">
                                <span id="tahun-pengalaman" class="counter">3</span>
                            </div>
                            <div class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold text-white mb-2">Tahun
                            </div>
                            <div class="text-base sm:text-lg text-yellow-100">Membangun Kepercayaan</div>
                        </div>
                    </div>

                    <!-- Floating elements around the counter -->
                    <div class="absolute -top-4 -left-4 w-8 h-8 bg-yellow-300 rounded-full opacity-80 animate-bounce"></div>
                    <div
                        class="absolute -bottom-4 -right-4 w-6 h-6 bg-yellow-300 rounded-full opacity-60 animate-bounce delay-100">
                    </div>
                    <div class="absolute top-1/2 -right-6 w-4 h-4 bg-yellow-300 rounded-full opacity-70 animate-pulse">
                    </div>
                    <div
                        class="absolute top-1/2 -left-6 w-5 h-5 bg-yellow-300 rounded-full opacity-50 animate-pulse delay-200">
                    </div>
                </div>
            </div>

            <!-- Supporting information -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto animate-fade-in-up delay-500">
                <div class="text-center group">
                    <div
                        class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-200 transition-colors duration-300">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Inovasi Desain</h3>
                    <p class="text-gray-600 text-sm">Konsep modern dan kreatif untuk masa kini</p>
                </div>

                <div class="text-center group">
                    <div
                        class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-200 transition-colors duration-300">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Kualitas Muda</h3>
                    <p class="text-gray-600 text-sm">Semangat baru dengan standar tinggi</p>
                </div>

                <div class="text-center group">
                    <div
                        class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-yellow-200 transition-colors duration-300">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Pelayanan Prima</h3>
                    <p class="text-gray-600 text-sm">Komitmen penuh untuk kepuasan klien</p>
                </div>
            </div>

            <!-- Bottom description -->
            <div class="text-center mt-16 animate-fade-in-up delay-600">
                <p class="text-gray-700 text-lg leading-relaxed max-w-4xl mx-auto">
                    Dalam 3 tahun perjalanan, kami telah membuktikan bahwa usia bukan penghalang untuk
                    <span class="font-semibold text-yellow-600">menghadirkan kualitas terbaik</span>.
                    Semangat muda dan inovasi menjadi kekuatan kami dalam
                    <span class="font-semibold text-yellow-600">mewujudkan rumah impian</span>
                    dengan standar profesional yang tinggi.
                </p>
            </div>
        </div>
    </section>

    {{-- Top Section (Dark Background) with Single Overlapping Image --}}
    <section class="py-12 bg-black relative min-h-screen overflow-visible">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 flex flex-col lg:flex-row items-center relative">
            <!-- Gambar di kiri, portrait, overlap ke bawah -->
            <div class="w-full lg:w-1/3 flex-shrink-0 mb-8 lg:mb-0 lg:mr-12 relative">
                <div class="relative lg:absolute lg:left-0 lg:top-1/2 lg:translate-y-24">
                    <img src="{{ asset('img/homepage2.jpeg') }}" alt="Modern House"
                        class="mx-auto w-48 h-72 sm:w-56 sm:h-[22rem] md:w-72 md:h-[28rem] lg:w-[300px] lg:h-[480px] object-cover rounded-lg shadow-2xl aspect-[10/16] hover:scale-105 transition-all duration-500 parallax-img animate-fade-in-left"
                        data-src="{{ asset('img/homepage2.jpeg') }}">
                </div>
            </div>

            <!-- Konten di kanan -->
            <div class="w-full lg:w-2/3 ml-auto">
                <h1
                    class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-6 text-center lg:text-left animate-fade-in-right delay-200">
                    Wujudkan <span class="text-yellow-400">Rumah Impian</span> Anda
                </h1>

                <div class="flex flex-col">
                    <div
                        class="text-base md:text-lg text-gray-300 mb-6 md:mb-8 text-justify lg:text-left max-w-2xl mx-auto lg:mx-0 animate-fade-in-right delay-300">
                        <p class="leading-relaxed">Kami adalah kontraktor terpercaya untuk mewujudkan hunian
                            berkualitas dengan
                            standar konstruksi tertinggi. Dengan pengalaman bertahun-tahun, tim ahli kami siap
                            hadirkan rumah impian yang sempurna sesuai budget dan keinginan Anda.</p>
                        <p class="mt-4 leading-relaxed">Dari perencanaan hingga finishing, setiap detail dikerjakan
                            dengan
                            presisi dan dedikasi tinggi. Kepuasan klien adalah prioritas utama kami dalam setiap
                            proyek yang
                            dikerjakan.</p>
                    </div>
                </div>

                <!-- Poin-poin dengan logo bulat kuning - Layout yang diperbaiki -->
                <div class="space-y-6 animate-fade-in-right delay-500">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div
                            class="flex items-start gap-4 p-4 rounded-lg bg-gray-900/50 backdrop-blur-sm border border-gray-800/50 hover:border-yellow-400/30 transition-all duration-300 group">
                            <span
                                class="w-12 h-12 flex items-center justify-center bg-yellow-400 rounded-full flex-shrink-0 group-hover:scale-110 transition-all duration-300 shadow-lg">
                                <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </span>
                            <div class="flex-1">
                                <h4 class="text-white font-semibold mb-2">Desain Arsitektur Modern</h4>
                                <p class="text-sm text-gray-400 leading-relaxed">Tim arsitek berpengalaman siap
                                    merancang
                                    hunian sesuai gaya hidup dan kebutuhan keluarga Anda dengan konsep yang
                                    inovatif.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start gap-4 p-4 rounded-lg bg-gray-900/50 backdrop-blur-sm border border-gray-800/50 hover:border-yellow-400/30 transition-all duration-300 group">
                            <span
                                class="w-12 h-12 flex items-center justify-center bg-yellow-400 rounded-full flex-shrink-0 group-hover:scale-110 transition-all duration-300 shadow-lg">
                                <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </span>
                            <div class="flex-1">
                                <h4 class="text-white font-semibold mb-2">Konstruksi Berkualitas SNI</h4>
                                <p class="text-sm text-gray-400 leading-relaxed">Material premium dan teknik
                                    konstruksi
                                    berstandar SNI menjamin kekuatan dan daya tahan bangunan jangka panjang.</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div
                            class="flex items-start gap-4 p-4 rounded-lg bg-gray-900/50 backdrop-blur-sm border border-gray-800/50 hover:border-yellow-400/30 transition-all duration-300 group">
                            <span
                                class="w-12 h-12 flex items-center justify-center bg-yellow-400 rounded-full flex-shrink-0 group-hover:scale-110 transition-all duration-300 shadow-lg">
                                <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                                </svg>
                            </span>
                            <div class="flex-1">
                                <h4 class="text-white font-semibold mb-2">Harga Transparan & Terjangkau</h4>
                                <p class="text-sm text-gray-400 leading-relaxed">RAB detail dan transparan tanpa
                                    biaya
                                    tersembunyi. Dapatkan rumah berkualitas dengan investasi yang tepat.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start gap-4 p-4 rounded-lg bg-gray-900/50 backdrop-blur-sm border border-gray-800/50 hover:border-yellow-400/30 transition-all duration-300 group">
                            <span
                                class="w-12 h-12 flex items-center justify-center bg-yellow-400 rounded-full flex-shrink-0 group-hover:scale-110 transition-all duration-300 shadow-lg">
                                <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                            <div class="flex-1">
                                <h4 class="text-white font-semibold mb-2">Garansi & Layanan Purna Jual</h4>
                                <p class="text-sm text-gray-400 leading-relaxed">Komitmen penuh dengan garansi
                                    konstruksi
                                    dan layanan maintenance berkala untuk kepuasan jangka panjang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Section Jasa-Jasa --}}
    <section class="bg-white py-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="mb-8">
                <h2 class="text-base md:text-lg font-bold text-gray-900 mb-4 text-justify max-w-2xl ml-auto">
                    Kami menyediakan jasa Kontraktor yang terpercaya agar pembangunan rumah lebih mudah dan sesuai yang
                    diperlukan
                </h2>
                <div class="max-w-2xl ml-auto space-y-4 text-sm text-left">
                    <p class="text-gray-700 leading-relaxed">
                        Kami menyediakan jasa kontraktor yang terpercaya untuk membantu Anda membangun rumah impian dengan
                        tim yang profesional dan berpengalaman. Kami memastikan desain dan konstruksi sesuai dengan
                        kebutuhan dan anggaran Anda.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Kami menyediakan berbagai layanan untuk membangun atau merenovasi rumah Anda, mulai dari pembangunan
                        baru hingga desain interior, semua disesuaikan dengan keinginan dan kebutuhan Anda.
                    </p>
                </div>
            </div>
            {{-- Services List --}}
            <div id="service-list" class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl ml-auto text-right">
                <div class="space-y-3">
                    <div class="service-item flex flex-col cursor-pointer border-b border-gray-200 rounded-lg p-0">
                        <div
                            class="flex items-center justify-between p-4 hover:bg-gray-50 transition duration-300 text-sm">
                            <span class="font-semibold text-gray-800">Jasa Bangun Rumah</span>
                            <span class="text-2xl font-bold text-yellow-400">+</span>
                        </div>
                        <div class="service-desc hidden px-4 pb-4 text-left text-gray-600 text-sm">
                            Layanan pembangunan rumah dari awal hingga selesai, dengan tim profesional dan material
                            berkualitas.
                        </div>
                    </div>
                    <div class="service-item flex flex-col cursor-pointer border-b border-gray-200 rounded-lg p-0">
                        <div
                            class="flex items-center justify-between p-4 hover:bg-gray-50 transition duration-300 text-sm">
                            <span class="font-semibold text-gray-800">Jasa Renovasi Rumah</span>
                            <span class="text-2xl font-bold text-yellow-400">+</span>
                        </div>
                        <div class="service-desc hidden px-4 pb-4 text-left text-gray-600 text-sm">
                            Renovasi rumah lama menjadi baru, penambahan ruangan, perbaikan struktur, dan upgrade desain
                            interior.
                        </div>
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="service-item flex flex-col cursor-pointer border-b border-gray-200 rounded-lg p-0">
                        <div
                            class="flex items-center justify-between p-4 hover:bg-gray-50 transition duration-300 text-sm">
                            <span class="font-semibold text-gray-800">Jasa Desain Interior</span>
                            <span class="text-2xl font-bold text-yellow-400">+</span>
                        </div>
                        <div class="service-desc hidden px-4 pb-4 text-left text-gray-600 text-sm">
                            Desain interior rumah, apartemen, kantor, dan ruang usaha sesuai kebutuhan dan gaya Anda.
                        </div>
                    </div>
                    <div class="service-item flex flex-col cursor-pointer border-b border-gray-200 rounded-lg p-0">
                        <div
                            class="flex items-center justify-between p-4 hover:bg-gray-50 transition duration-300 text-sm">
                            <span class="font-semibold text-gray-800">Jasa Pembuatan RAB</span>
                            <span class="text-2xl font-bold text-yellow-400">+</span>
                        </div>
                        <div class="service-desc hidden px-4 pb-4 text-left text-gray-600 text-sm">
                            Pembuatan Rencana Anggaran Biaya (RAB) dan pengurusan dokumen PGB/IMB secara profesional dan
                            transparan.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Konsultasi dengan Gradient Background --}}
    {{-- Section Konsultasi dengan Gradient Background --}}
    <section class="py-12 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row items-stretch gap-0">
                <!-- Konten Kiri -->
                <div class="lg:w-2/5">
                    <div
                        class="bg-gradient-to-br from-black via-gray-900 to-yellow-600 p-8 h-full flex flex-col justify-center">
                        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 leading-tight">
                            Bangun Rumah,<br>Tanpa Ribet!
                        </h1>
                        <h2 class="text-xl md:text-2xl mb-6 text-gray-200">
                            Bingung mulai dari mana untuk bangun rumah impianmu?
                        </h2>
                        <p class="text-lg leading-relaxed text-gray-300">
                            Tenang, kami bantu dari awal! Cukup isi form ini, dan tim ahli kami akan membimbingmu melalui
                            proses desain, perencanaan anggaran, hingga konstruksi yang terukur dan transparan.
                        </p>
                    </div>
                </div>

                <!-- Form Kanan -->
                <div class="lg:w-3/5">
                    <div class="bg-white p-8 h-full flex flex-col justify-center shadow-lg">

                        {{-- Pesan sukses --}}
                        @if (session('success'))
                            <div class="p-4 mb-4 text-green-800 bg-green-100 rounded-lg" data-success="konsultasi">
                                {{ session('success') }}
                            </div>
                        @endif

                        {{-- Pesan error --}}
                        @if (session('error'))
                            <div class="p-4 mb-4 text-red-800 bg-red-100 rounded-lg">
                                {{ session('error') }}
                            </div>
                        @endif

                        {{-- Data untuk popup --}}
                        @if (session('popup_data'))
                            <div id="popup-data" data-nama="{{ session('popup_data.nama') }}"
                                data-kategori="{{ session('popup_data.kategori') }}"
                                data-timestamp="{{ session('popup_data.timestamp') }}" style="display: none;">
                            </div>
                        @endif

                        <form action="{{ route('konsultasi.kirim') }}" method="POST" class="space-y-6">
                            @csrf

                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Nama</label>
                                <input type="text" name="nama" placeholder="Masukkan nama Anda"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition duration-300"
                                    required>
                            </div>

                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">No. Hp/WhatsApp</label>
                                <input type="tel" name="no_hp" placeholder="Masukkan No Hp atau whatsapp Anda"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition duration-300"
                                    required>
                            </div>

                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Email</label>
                                <input type="email" name="email" placeholder="Masukkan email Anda"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition duration-300"
                                    required>
                            </div>

                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Kategori/Layanan</label>
                                <select name="kategori"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition duration-300"
                                    required>
                                    <option value="Jasa Bangun Rumah">Bangun Rumah</option>
                                    <option value="Jasa Renovasi Rumah">Renovasi Rumah</option>
                                    <option value="Jasa Desain Interior">Desain Interior/Eksterior</option>
                                    <option value="Jasa Pembuatan RAB & PBG/IMB">Pembuatan RAB & PBG/IMB</option>
                                    <option value="Bangunan Lainnya">Bangunan Lainnya</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Alamat Lahan</label>
                                <input type="text" name="alamat_lahan" placeholder="Masukkan alamat lahan"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition duration-300">
                            </div>

                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Luas Tanah (m²)</label>
                                <input type="number" name="luas_tanah"
                                    placeholder="Masukkan luas tanah dalam meter persegi"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition duration-300"
                                    min="1" step="0.01">
                            </div>

                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Kebutuhan (Opsional)</label>
                                <textarea name="kebutuhan" rows="4" placeholder="Jelaskan Kebutuhan Anda disini"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition duration-300 resize-none"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-yellow-400 text-black font-bold py-4 px-6 rounded-lg hover:bg-yellow-500 transition shadow-lg">
                                KONSULTASIKAN KEBUTUHAN
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Konten dengan Gambar --}}
    <section class="bg-gradient-to-b from-white to-gray-50 py-12">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-12">
                <img src="{{ asset('img/homepage3.jpeg') }}" alt="Modern Living Room"
                    class="w-full max-w-4xl mx-auto rounded-2xl shadow-2xl mb-8 hover:scale-105 transition parallax-img">
            </div>

            <div class="max-w-4xl mx-auto space-y-8 text-left">
                <p class="text-lg leading-relaxed text-gray-700">
                    Membangun rumah bukan hanya soal mendirikan dinding dan atap. Ini tentang menciptakan tempat berlindung,
                    tempat tumbuh, dan tempat kembali. Kami memahami bahwa setiap rumah memiliki cerita dan harapan di
                    dalamnya. Karena itu, kami hadir untuk membantu Anda mewujudkan lebih dari sekadar bangunan dan design,
                    tapi juga kenyamanan, keindahan, dan fungsi yang menyatu.
                </p>

                <p class="text-lg leading-relaxed text-gray-700">
                    Dengan pengalaman dan dedikasi tinggi, kami dalam memberikan layanan menyeluruh mulai dari pembangunan
                    rumah, renovasi, hingga desain interior yang menyesuaikan gaya hidup Anda.
                </p>

                <p class="text-lg leading-relaxed text-gray-700">
                    Setiap detail kami kerjakan dengan penuh ketelitian, mulai dari perencanaan, pemilihan material, hingga
                    hasil akhir yang memuaskan. Kami percaya, rumah yang baik dimulai dari perencanaan yang matang dan
                    pelaksanaan yang profesional.
                </p>
            </div>
        </div>
    </section>

    {{-- Section Portfolio --}}
    <section id="portofolio" class="bg-black py-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
                <div class="w-full md:w-2/3">
                    <div class="text-white font-bold text-xl mb-4">WUJUDKAN RUMAH IMPIAN ANDA BERSAMA KAMI</div>
                    <div class="text-gray-300">Dari desain hingga pembangunan, kami menghadirkan hunian yang memadukan
                        estetika, kenyamanan, dan kualitas terbaik. Tim profesional kami siap membimbing setiap
                        langkah-mulai dari perencanaan anggaran dan pemilihan material berkualitas terbaik. Tim kami juga
                        akan memberikan hasil akhir yang memukau.</div>
                </div>
                <a href="/portofolio"
                    class="bg-yellow-400 text-black px-6 py-2 rounded shadow hover:bg-yellow-500 transition font-semibold mt-2 md:mt-0 w-full md:w-auto text-center">Lihat
                    Portofolio</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 w-full md:w-2/3 mx-auto">
                {{-- Portfolio Item 1 - Large --}}
                <div
                    class="md:col-span-2 md:row-span-2 bg-gray-800 rounded-lg overflow-hidden shadow-lg hover-scale transition">
                    <img src="{{ asset('img/homepage4.jpeg') }}" alt="Portfolio"
                        class="w-full h-48 sm:h-56 md:h-full object-cover hover:scale-105 transition parallax-img">
                </div>
                {{-- Portfolio Item 2 --}}
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover-scale transition">
                    <img src="{{ asset('img/profil5.png') }}" alt="Portfolio"
                        class="w-full h-40 sm:h-44 object-cover hover:scale-105 transition parallax-img">
                </div>
                {{-- Portfolio Item 3 --}}
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover-scale transition">
                    <img src="{{ asset('img/desain4.jpg') }}" alt="Portfolio"
                        class="w-full h-40 sm:h-44 object-cover hover:scale-105 transition parallax-img">
                </div>
                {{-- Portfolio Item 4 --}}
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover-scale transition">
                    <img src="{{ asset('img/profil5.jpg') }}" alt="Portfolio"
                        class="w-full h-40 sm:h-44 object-cover hover:scale-105 transition parallax-img">
                </div>
                {{-- Portfolio Item 5 --}}
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover-scale transition">
                    <img src="{{ asset('img/image gallery 4.jpg') }}" alt="Portfolio"
                        class="w-full h-40 sm:h-44 object-cover hover:scale-105 transition parallax-img">
                </div>
            </div>
        </div>
    </section>

    {{-- Section FAQ --}}
    <section class="bg-gradient-to-b from-gray-50 to-white py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Pertanyaan yang sering diajukan</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Temukan jawaban untuk pertanyaan-pertanyaan yang sering
                    diajukan seputar jasa desain dan pembangunan rumah kami.</p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="space-y-4" id="faq-accordion">
                    <!-- FAQ Item 1 -->
                    <div class="border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-all duration-300">
                        <button type="button"
                            class="faq-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-gray-800 hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200"
                            data-faq="1">
                            <span class="text-lg">Berapa biaya jasa desain rumah?</span>
                            <svg class="faq-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                            <p class="mb-3">Biaya jasa desain rumah sangat bervariasi dan bergantung pada beberapa faktor
                                utama:</p>
                            <ul class="list-disc list-inside space-y-2 text-sm">
                                <li><strong>Ukuran Bangunan:</strong> Luas area yang akan didesain (rumah kecil, sedang,
                                    atau besar)</li>
                                <li><strong>Tingkat Kesulitan Desain:</strong> Kompleksitas arsitektur, jumlah lantai, dan
                                    detail khusus</li>
                                <li><strong>Kebutuhan Klien:</strong> Fitur khusus, material premium, atau teknologi canggih
                                </li>
                                <li><strong>Lokasi Proyek:</strong> Aksesibilitas dan kondisi tanah</li>
                            </ul>
                            <p class="mt-3">Kami akan memberikan penawaran yang transparan dan detail setelah melakukan
                                konsultasi awal untuk memahami kebutuhan dan budget Anda. Konsultasi awal kami berikan
                                secara gratis untuk memastikan Anda mendapatkan solusi terbaik sesuai kemampuan finansial.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-all duration-300">
                        <button type="button"
                            class="faq-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-gray-800 hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200"
                            data-faq="2">
                            <span class="text-lg">Apakah jasa mencakup pembangunan atau hanya desain saja?</span>
                            <svg class="faq-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                            <p class="mb-3">Kami menyediakan layanan lengkap yang mencakup:</p>
                            <ul class="list-disc list-inside space-y-2 text-sm">
                                <li><strong>Desain Arsitektur:</strong> Perencanaan layout, denah, tampilan, dan detail
                                    konstruksi</li>
                                <li><strong>Pembangunan Lengkap:</strong> Konstruksi dari pondasi hingga finishing dengan
                                    tim kontraktor profesional</li>
                                <li><strong>Supervisi Proyek:</strong> Pengawasan ketat untuk memastikan kualitas sesuai
                                    standar</li>
                                <li><strong>Manajemen Proyek:</strong> Koordinasi tim, material, dan jadwal pengerjaan</li>
                            </ul>
                            <p class="mt-3">Tim kami terdiri dari arsitek berpengalaman, insinyur struktur, dan
                                kontraktor bersertifikat yang telah mengerjakan berbagai proyek. Kami juga bisa menyediakan
                                layanan desain saja jika Anda ingin membangun sendiri atau menggunakan kontraktor lain.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-all duration-300">
                        <button type="button"
                            class="faq-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-gray-800 hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200"
                            data-faq="3">
                            <span class="text-lg">Berapa lama waktu pengerjaan desain rumah?</span>
                            <svg class="faq-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                            <p class="mb-3">Rata-rata waktu pengerjaan desain rumah memakan waktu 2–4 minggu, dengan
                                rincian sebagai berikut:</p>
                            <ul class="list-disc list-inside space-y-2 text-sm">
                                <li><strong>Minggu 1:</strong> Konsultasi mendalam, survey lokasi, dan konsep awal</li>
                                <li><strong>Minggu 2:</strong> Pengembangan desain detail, denah, dan tampilan</li>
                                <li><strong>Minggu 3:</strong> Detail konstruksi, spesifikasi material, dan perhitungan RAB
                                </li>
                                <li><strong>Minggu 4:</strong> Revisi dan finalisasi desain sesuai feedback klien</li>
                            </ul>
                            <p class="mt-3">Waktu pengerjaan bisa lebih cepat atau lambat tergantung tingkat kerumitan
                                desain, jumlah revisi yang diperlukan, dan ketersediaan klien untuk review. Untuk proyek
                                sederhana, desain bisa selesai dalam 2 minggu, sedangkan proyek kompleks mungkin membutuhkan
                                waktu hingga 6 minggu.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-all duration-300">
                        <button type="button"
                            class="faq-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-gray-800 hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200"
                            data-faq="4">
                            <span class="text-lg">Apakah bisa menyesuaikan desain dengan budget klien?</span>
                            <svg class="faq-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                            <p class="mb-3">Tentu saja! Menyesuaikan desain dengan budget klien adalah salah satu
                                keunggulan utama kami. Kami selalu memprioritaskan:</p>
                            <ul class="list-disc list-inside space-y-2 text-sm">
                                <li><strong>Optimasi Anggaran:</strong> Merancang desain yang efisien tanpa mengorbankan
                                    estetika</li>
                                <li><strong>Material Alternatif:</strong> Menawarkan pilihan material berkualitas dengan
                                    harga terjangkau</li>
                                <li><strong>Efisiensi Ruang:</strong> Memaksimalkan fungsi setiap area untuk menghemat biaya
                                    konstruksi</li>
                                <li><strong>Prioritas Kebutuhan:</strong> Fokus pada elemen yang paling penting bagi klien
                                </li>
                            </ul>
                            <p class="mt-3">Kami akan memberikan beberapa alternatif desain dengan berbagai range budget,
                                sehingga Anda bisa memilih yang paling sesuai. Tim kami ahli dalam menciptakan desain yang
                                tetap terlihat mewah dan berkualitas meskipun dengan budget terbatas.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-all duration-300">
                        <button type="button"
                            class="faq-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-gray-800 hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200"
                            data-faq="5">
                            <span class="text-lg">Apakah menerima desain rumah minimalis, modern, atau klasik?</span>
                            <svg class="faq-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                            <p class="mb-3">Ya, kami melayani berbagai gaya desain sesuai keinginan dan kebutuhan klien.
                                Tim arsitek kami berpengalaman dalam berbagai gaya arsitektur:</p>
                            <ul class="list-disc list-inside space-y-2 text-sm">
                                <li><strong>Minimalis:</strong> Desain bersih, sederhana, dan fungsional dengan fokus pada
                                    esensi</li>
                                <li><strong>Modern:</strong> Gaya kontemporer dengan garis lurus, material modern, dan
                                    teknologi canggih</li>
                                <li><strong>Industrial:</strong> Kombinasi material mentah, pipa ekspos, dan nuansa urban
                                </li>
                                <li><strong>Klasik:</strong> Desain tradisional dengan ornamen detail dan elemen dekoratif
                                </li>
                                <li><strong>Scandinavian:</strong> Gaya nordik yang hangat dengan material alami dan
                                    pencahayaan optimal</li>
                                <li><strong>Fusion:</strong> Kombinasi berbagai gaya untuk menciptakan desain unik</li>
                            </ul>
                            <p class="mt-3">Kami juga bisa membantu Anda menentukan gaya yang paling sesuai dengan
                                kepribadian, kebutuhan keluarga, dan kondisi lingkungan sekitar. Setiap desain akan
                                disesuaikan dengan selera pribadi dan gaya hidup Anda.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-all duration-300">
                        <button type="button"
                            class="faq-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-gray-800 hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200"
                            data-faq="6">
                            <span class="text-lg">Bagaimana sistem pembayaran jasa desain dan pembangunan?</span>
                            <svg class="faq-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                            <p class="mb-3">Sistem pembayaran kami dirancang untuk memberikan kemudahan dan keamanan bagi
                                klien. Pembayaran dilakukan secara bertahap sesuai progres pekerjaan:</p>
                            <ul class="list-disc list-inside space-y-2 text-sm">
                                <li><strong>DP (Down Payment):</strong> 30% saat kontrak ditandatangani</li>
                                <li><strong>Progress 1:</strong> 25% setelah pondasi dan struktur dasar selesai</li>
                                <li><strong>Progress 2:</strong> 25% setelah dinding dan atap selesai</li>
                                <li><strong>Progress 3:</strong> 15% setelah finishing dan instalasi selesai</li>
                                <li><strong>Final:</strong> 5% setelah serah terima dan garansi</li>
                            </ul>
                            <p class="mt-3">Untuk jasa desain saja, pembayaran bisa dilakukan 50% di awal dan 50% setelah
                                desain selesai. Kami juga menerima berbagai metode pembayaran termasuk transfer bank, cek,
                                atau pembayaran melalui platform digital. Semua transaksi akan didokumentasikan dengan jelas
                                dalam kontrak yang mengikat kedua belah pihak.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 7 -->
                    <div class="border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-all duration-300">
                        <button type="button"
                            class="faq-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-gray-800 hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200"
                            data-faq="7">
                            <span class="text-lg">Apakah bisa revisi desain setelah jadi?</span>
                            <svg class="faq-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                            <p class="mb-3">Kami memberikan kesempatan revisi desain sesuai dengan paket yang dipilih.
                                Kebijakan revisi kami meliputi:</p>
                            <ul class="list-disc list-inside space-y-2 text-sm">
                                <li><strong>Paket Basic:</strong> 2x revisi minor (perubahan warna, material, atau detail
                                    kecil)</li>
                                <li><strong>Paket Standard:</strong> 3x revisi minor + 1x revisi mayor (perubahan layout
                                    atau struktur)</li>
                                <li><strong>Paket Premium:</strong> Revisi unlimited selama proses desain</li>
                                <li><strong>Revisi Pasca Konstruksi:</strong> Konsultasi dan saran perbaikan jika diperlukan
                                </li>
                            </ul>
                            <p class="mt-3">Kami memahami bahwa desain rumah adalah proses iteratif yang membutuhkan
                                penyesuaian. Tim kami akan bekerja sama dengan Anda untuk memastikan hasil akhir sesuai
                                ekspektasi. Revisi akan diproses dalam waktu 3-5 hari kerja tergantung kompleksitas
                                perubahan yang diminta.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 8 -->
                    <div class="border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-all duration-300">
                        <button type="button"
                            class="faq-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-gray-800 hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200"
                            data-faq="8">
                            <span class="text-lg">Apakah melayani konsultasi online?</span>
                            <svg class="faq-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                            <p class="mb-3">Ya, kami menyediakan layanan konsultasi online yang komprehensif untuk
                                memudahkan klien di luar kota atau yang memiliki keterbatasan waktu. Layanan konsultasi
                                online kami meliputi:</p>
                            <ul class="list-disc list-inside space-y-2 text-sm">
                                <li><strong>Platform Meeting:</strong> Zoom, Google Meet, atau Microsoft Teams untuk
                                    konsultasi video</li>
                                <li><strong>WhatsApp Business:</strong> Konsultasi cepat dan berbagi file desain</li>
                                <li><strong>Email:</strong> Dokumen detail dan komunikasi formal</li>
                                <li><strong>Video Call:</strong> Survey lokasi virtual dan presentasi desain</li>
                                <li><strong>File Sharing:</strong> Berbagi gambar, video, dan dokumen desain</li>
                            </ul>
                            <p class="mt-3">Konsultasi online kami tetap memberikan kualitas yang sama dengan konsultasi
                                tatap muka. Tim kami akan mempersiapkan presentasi visual yang detail dan siap menjawab
                                semua pertanyaan Anda. Untuk proyek yang membutuhkan survey fisik, kami tetap bisa mengirim
                                tim ke lokasi sesuai jadwal yang disepakati.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="/contact"
                    class="inline-block bg-yellow-400 text-black px-8 py-3 rounded-lg shadow-lg hover:bg-yellow-500 transition-all duration-300 font-bold text-lg hover:scale-105 hover:shadow-xl">
                    HUBUNGI KAMI
                </a>
            </div>
        </div>
    </section>

    {{-- Section Artikel --}}
    <section class="bg-gradient-to-b from-gray-100 via-gray-50 to-white py-12">
        <div class="max-w-6xl mx-auto px-4 relative pb-8">
            <h2 class="text-2xl font-bold mb-6">ARTIKEL</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transition animate-fade-in-up">
                    <img src="https://www.btnproperti.co.id/cdn1/images/blog/20230828/medium/199d32e0-219c-4140-84da-e3c332940864.jpeg"
                        alt="Artikel 1" class="w-full h-40 object-cover hover:scale-105 transition parallax-img">
                    <div class="p-4">
                        <div class="font-bold mb-2">Panduan Lengkap Memahami Proses Pembangunan Rumah
                            (www.btnproperti.co.id)</div>
                        <div class="text-gray-500 text-sm mb-2">Rumah adalah tempat hunian yang perlu dijaga kenyamanan
                            serta keamanannya.</div>
                        <a href="https://www.btnproperti.co.id/blog/proses-pembangunan-rumah"
                            class="text-yellow-400 font-semibold hover:underline" target="_blank"
                            rel="noopener noreferrer">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transition animate-fade-in-up">
                    <img src="https://bildeco.com/wp-content/uploads/2020/09/Jasa-Pengecatan-6.jpg" alt="Artikel 2"
                        class="w-full h-40 object-cover hover:scale-105 transition parallax-img">
                    <div class="p-4">
                        <div class="font-bold mb-2">Interior vs. Eksterior: Perbedaan yang Jarang Diketahui Banyak Orang!
                        </div>
                        <div class="text-gray-500 text-sm mb-2">Memahami perbedaan antara interior dan eksterior sangat
                            penting dalam menciptakan sebuah rumah yang harmonis dan estetis.</div>
                        <a href="https://sn-studio.id/interior-vs-eksterior-perbedaan-yang-jarang-diketahui-banyak-orang/"
                            class="text-yellow-400 font-semibold hover:underline" target="_blank"
                            rel="noopener noreferrer">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transition animate-fade-in-up">
                    <img src="https://aob.co.id/blog/wp-content/uploads/2023/09/Artikel-5-min-scaled.jpg" alt="Artikel 3"
                        class="w-full h-40 object-cover hover:scale-105 transition parallax-img">
                    <div class="p-4">
                        <div class="font-bold mb-2">Rencana Anggaran Biaya: Arti, Contoh, dan Cara Membuatnya</div>
                        <div class="text-gray-500 text-sm mb-2">Rencana Anggaran Biaya (RAB) merupakan alat yang sangat
                            penting untuk
                            memastikan pengelolaan keuangan yang efisien dalam berbagai aspek bisnis.</div>
                        <a href="https://bridgenr.com/id/blog/rencana-anggaran-biaya/"
                            class="text-yellow-400 font-semibold hover:underline" target="_blank"
                            rel="noopener noreferrer">Baca Selengkapnya</a>
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

    <script>
        // Wait for DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Counter animation
            function animateCounter(element, target, duration = 2000) {
                let start = 0;
                const increment = target / (duration / 16);

                function updateCounter() {
                    start += increment;
                    if (start < target) {
                        element.textContent = Math.floor(start);
                        requestAnimationFrame(updateCounter);
                    } else {
                        element.textContent = target;
                    }
                }

                updateCounter();
            }

            // Intersection Observer for counter animation
            const observerOptions = {
                threshold: 0.5,
                rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target.querySelector('.counter');
                        if (counter && !counter.classList.contains('animated')) {
                            counter.classList.add('animated');
                            animateCounter(counter, 20);
                        }
                    }
                });
            }, observerOptions);

            // Observe project section
            const projectSection = document.getElementById('profil');
            if (projectSection) {
                observer.observe(projectSection);
            }

            // Service List Expand/Collapse
            const serviceItems = document.querySelectorAll('#service-list .service-item');
            serviceItems.forEach(item => {
                const header = item.querySelector('div.flex.items-center');
                const desc = item.querySelector('.service-desc');
                header.addEventListener('click', () => {
                    const isOpen = !desc.classList.contains('hidden');
                    // Close all
                    serviceItems.forEach(i => i.querySelector('.service-desc').classList.add(
                        'hidden'));
                    // Open if was closed
                    if (!isOpen) desc.classList.remove('hidden');
                });
            });

            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });

        // Add CSS animations
        const style = document.createElement('style');
        style.textContent = `
    /* Initial state for animated elements */
    .animate-fade-in-up,
    .animate-fade-in-left,
    .animate-fade-in-right {
        opacity: 0;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 1s ease-out forwards;
    }

    .animate-fade-in-left {
        animation: fadeInLeft 1s ease-out forwards;
    }

    .animate-fade-in-right {
        animation: fadeInRight 1s ease-out forwards;
    }

    .delay-200 {
        animation-delay: 0.2s;
    }

    .delay-300 {
        animation-delay: 0.3s;
    }

    .delay-400 {
        animation-delay: 0.4s;
    }

    .delay-500 {
        animation-delay: 0.5s;
    }

    .delay-600 {
        animation-delay: 0.6s;
    }

    .delay-700 {
        animation-delay: 0.7s;
    }

    .delay-800 {
        animation-delay: 0.8s;
    }

    /* Smooth transitions for all interactive elements */
    .hover-scale,
    .parallax-img,
    .nav-link,
    button,
    a {
        transition: all 0.3s ease;
    }

    .hover-scale:hover,
    .parallax-img:hover {
        transform: scale(1.05);
    }

    /* Counter animation */
    .counter {
        transition: all 0.3s ease;
    }

    /* Service items hover effect */
    .service-item {
        transition: all 0.3s ease;
    }

    .service-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    /* Button hover effects */
    .bg-yellow-400:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(251, 191, 36, 0.3);
    }

    /* Ensure smooth scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Consistent section spacing */
    section {
        margin: 0;
        padding: 3rem 0;
    }

    /* Consistent container padding */
    .max-w-6xl,
    .max-w-7xl {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    @media (min-width: 768px) {
        .max-w-6xl,
        .max-w-7xl {
            padding-left: 2rem;
            padding-right: 2rem;
        }
    }

    @media (min-width: 1024px) {
        .max-w-6xl,
        .max-w-7xl {
            padding-left: 3rem;
            padding-right: 3rem;
        }
    }

    /* FAQ Accordion Styles */
    .faq-content {
        transition: all 0.3s ease;
    }

    .faq-icon {
        transition: transform 0.3s ease;
    }
`;
        document.head.appendChild(style);

        // FAQ Accordion Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqButtons = document.querySelectorAll('.faq-button');
            let currentlyOpen = null;

            faqButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const faqItem = this.closest('.border');
                    const content = faqItem.querySelector('.faq-content');
                    const icon = this.querySelector('.faq-icon');

                    // If clicking the same item that's already open, close it
                    if (content.style.display === 'block') {
                        content.style.display = 'none';
                        icon.style.transform = 'rotate(0deg)';
                        currentlyOpen = null;
                    } else {
                        // Close currently open item if any
                        if (currentlyOpen) {
                            currentlyOpen.style.display = 'none';
                            currentlyOpen.closest('.border').querySelector('.faq-icon').style
                                .transform = 'rotate(0deg)';
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
    @include('components.footer')
@endsection

@section('scripts')
    @include('components.scripts')
    <script src="{{ asset('js/konsultasi-popup.js') }}"></script>
@endsection
