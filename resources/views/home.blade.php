@extends('layouts.app')

@section('content')
{{-- Vertical Lines --}}
<div class="fixed left-0 top-0 w-1 h-full bg-blue-500 z-10"></div>
<div class="fixed right-0 top-0 w-1 h-full bg-blue-500 z-10"></div>

{{-- Navbar --}}
<x-navbar />

{{-- Hero Section --}}
<section id="home" class="pt-28 pb-0 bg-gradient-to-b from-black/80 to-transparent relative min-h-[500px] flex items-end" style="background:url('/img/hero-rumah.jpg') center/cover no-repeat;">
    <div class="w-full bg-gradient-to-t from-black/80 to-transparent px-16 md:px-24 lg:px-32 pt-16 pb-8 text-left">
        <div class=" flex flex-col justify-center pb-16">
        <h1 class="text-5xl md:text-7xl font-bold text-yellow-400 mb-4 drop-shadow-lg animate-fade-in-up">
            Bangun Rancang<br>Desain Rumah
        </h1>
        <p class="text-white max-w-2xl mb-6 drop-shadow text-lg leading-relaxed animate-fade-in-up delay-200">
            Wujudkan rumah impian Anda dengan desain yang memadukan keindahan, kenyamanan, dan kualitas terbaik dari konsep hingga berdiri megah, semua kami tangani dengan sepenuh hati.
        </p>
        </div>
    </div>
</section>

{{-- Gradient Divider --}}
<div class="h-12 w-full bg-gradient-to-b from-black to-transparent"></div>

{{-- Section Project --}}
<section id="profil" class="bg-gradient-to-b from-white to-gray-100 py-16">
    <div class="max-w-3xl mx-auto px-4 flex flex-col md:flex-row items-center gap-8">
        <img src="https://images.unsplash.com/photo-1460518451285-97b6aa326961?auto=format&fit=crop&w=600&q=80" alt="Project" class="rounded-lg shadow-lg w-full max-w-xs hover:scale-110 transition-all duration-500 parallax-img animate-fade-in-left">
        <div class="flex flex-col items-center md:items-start">
            <div class="text-5xl font-bold text-gray-900 mb-2 flex items-end animate-fade-in-up">
                <span id="project-count" class="counter">0</span><span class="text-black-400 text-3xl ml-1">+</span>
            </div>
            <div class="text-lg font-semibold text-gray-700 mb-2 animate-fade-in-up delay-200">Project Kami</div>
            <div class="text-gray-500 text-center md:text-left animate-fade-in-up delay-300">Bangun dan desain rumah modern, minimalis, dan profesional.</div>
        </div>
    </div>
</section>

{{-- Top Section (Dark Background) with Single Overlapping Image --}}
<section class="pt-16 pb-16 bg-black relative min-h-screen mb-16 overflow-visible">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 flex flex-col lg:flex-row items-center relative">
        <!-- Gambar di kiri, portrait, overlap ke bawah -->
        <div class="w-full lg:w-1/3 flex-shrink-0 mb-12 lg:mb-0 lg:mr-12 relative">
            <div class="absolute left-0 top-1/2 lg:top-1/2 transform translate-y-16 lg:translate-y-24">
                <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=400&q=80" alt="Modern House" class="w-[200px] h-[320px] md:w-[300px] md:h-[480px] object-cover rounded-lg shadow-2xl aspect-[10/16] hover:scale-105 transition-all duration-500 parallax-img animate-fade-in-left" data-src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=400&q=80">
            </div>
        </div>

        <!-- Konten di kanan -->
        <div class="w-full lg:w-2/3 ml-auto">
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-6 text-center lg:text-left animate-fade-in-right delay-200">
                Wujudkan <span class="text-yellow-400">Rumah Impian</span> Bersama Kontraktor Terpercaya
            </h1>

            <div class="flex flex-col">
                <div class="text-base md:text-lg text-gray-300 mb-8 text-center lg:text-left max-w-2xl animate-fade-in-right delay-300">
                    <p class="leading-relaxed">Kami adalah partner terpercaya untuk mewujudkan hunian berkualitas dengan standar konstruksi tertinggi. Dengan pengalaman lebih dari 15 tahun, tim ahli kami siap menghadirkan rumah impian yang sempurna sesuai budget dan keinginan Anda.</p>
                    <p class="mt-4 leading-relaxed">Dari perencanaan hingga finishing, setiap detail dikerjakan dengan presisi dan dedikasi tinggi. Kepuasan klien adalah prioritas utama kami dalam setiap proyek yang dikerjakan.</p>
                </div>

                <div class="mb-12 text-center lg:text-left animate-fade-in-right delay-400">
                    <a href="#kontak" class="inline-block bg-yellow-400 text-black px-8 py-3 rounded-lg shadow-lg hover:bg-yellow-500 transition-all duration-300 font-bold text-base hover:scale-105 hover:shadow-xl">
                        KONSULTASI GRATIS SEKARANG
                    </a>
                </div>
            </div>

            <!-- Poin-poin dengan logo bulat kuning - Layout yang diperbaiki -->
            <div class="space-y-6 animate-fade-in-right delay-500">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start gap-4 p-4 rounded-lg bg-gray-900/50 backdrop-blur-sm border border-gray-800/50 hover:border-yellow-400/30 transition-all duration-300 group">
                        <span class="w-12 h-12 flex items-center justify-center bg-yellow-400 rounded-full flex-shrink-0 group-hover:scale-110 transition-all duration-300 shadow-lg">
                            <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </span>
                        <div class="flex-1">
                            <h4 class="text-white font-semibold mb-2">Desain Arsitektur Modern</h4>
                            <p class="text-sm text-gray-400 leading-relaxed">Tim arsitek berpengalaman siap merancang hunian sesuai gaya hidup dan kebutuhan keluarga Anda dengan konsep yang inovatif.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-lg bg-gray-900/50 backdrop-blur-sm border border-gray-800/50 hover:border-yellow-400/30 transition-all duration-300 group">
                        <span class="w-12 h-12 flex items-center justify-center bg-yellow-400 rounded-full flex-shrink-0 group-hover:scale-110 transition-all duration-300 shadow-lg">
                            <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </span>
                        <div class="flex-1">
                            <h4 class="text-white font-semibold mb-2">Konstruksi Berkualitas SNI</h4>
                            <p class="text-sm text-gray-400 leading-relaxed">Material premium dan teknik konstruksi berstandar SNI menjamin kekuatan dan daya tahan bangunan jangka panjang.</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start gap-4 p-4 rounded-lg bg-gray-900/50 backdrop-blur-sm border border-gray-800/50 hover:border-yellow-400/30 transition-all duration-300 group">
                        <span class="w-12 h-12 flex items-center justify-center bg-yellow-400 rounded-full flex-shrink-0 group-hover:scale-110 transition-all duration-300 shadow-lg">
                            <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                            </svg>
                        </span>
                        <div class="flex-1">
                            <h4 class="text-white font-semibold mb-2">Harga Transparan & Terjangkau</h4>
                            <p class="text-sm text-gray-400 leading-relaxed">RAB detail dan transparan tanpa biaya tersembunyi. Dapatkan rumah berkualitas dengan investasi yang tepat.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-lg bg-gray-900/50 backdrop-blur-sm border border-gray-800/50 hover:border-yellow-400/30 transition-all duration-300 group">
                        <span class="w-12 h-12 flex items-center justify-center bg-yellow-400 rounded-full flex-shrink-0 group-hover:scale-110 transition-all duration-300 shadow-lg">
                            <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                        <div class="flex-1">
                            <h4 class="text-white font-semibold mb-2">Garansi & Layanan Purna Jual</h4>
                            <p class="text-sm text-gray-400 leading-relaxed">Komitmen penuh dengan garansi konstruksi dan layanan maintenance berkala untuk kepuasan jangka panjang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Section Jasa-Jasa --}}
<section class="bg-white py-20">
    <div class="max-w-6xl mx-auto px-12 pl-0">
        <div class="mb-16">
            <h2 class="text-base md:text-lg font-bold text-gray-900 mb-4 text-justify max-w-2xl ml-auto">
                Kami menyediakan jasa Kontraktor yang terpercaya agar pembangunan rumah lebih mudah dan sesuai yang diperlukan
            </h2>
            <div class="max-w-2xl ml-auto space-y-4 text-sm text-left">
                <p class="text-gray-700 leading-relaxed">
                    Kami menyediakan jasa kontraktor yang terpercaya untuk membantu Anda membangun rumah impian dengan tim yang profesional dan berpengalaman. Kami memastikan desain dan konstruksi sesuai dengan kebutuhan dan anggaran Anda.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    Kami menyediakan berbagai layanan untuk membangun atau merenovasi rumah Anda, mulai dari pembangunan baru hingga desain interior, semua disesuaikan dengan keinginan dan kebutuhan Anda.
                </p>
            </div>
        </div>
        {{-- Services List --}}
        <div id="service-list" class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-3xl ml-auto text-right">
            <div class="space-y-4">
                <div class="service-item flex flex-col cursor-pointer border-b border-gray-200 rounded-lg p-0">
                    <div class="flex items-center justify-between p-6 hover:bg-gray-50 transition duration-300 text-sm">
                        <span class="font-semibold text-gray-800">Jasa Bangun Rumah</span>
                        <span class="text-2xl font-bold text-yellow-400">+</span>
                    </div>
                    <div class="service-desc hidden px-6 pb-4 text-left text-gray-600 text-sm">
                        Layanan pembangunan rumah dari awal hingga selesai, dengan tim profesional dan material berkualitas.
                    </div>
                </div>
                <div class="service-item flex flex-col cursor-pointer border-b border-gray-200 rounded-lg p-0">
                    <div class="flex items-center justify-between p-6 hover:bg-gray-50 transition duration-300 text-sm">
                        <span class="font-semibold text-gray-800">Jasa Renovasi Rumah</span>
                        <span class="text-2xl font-bold text-yellow-400">+</span>
                    </div>
                    <div class="service-desc hidden px-6 pb-4 text-left text-gray-600 text-sm">
                        Renovasi rumah lama menjadi baru, penambahan ruangan, perbaikan struktur, dan upgrade desain interior.
                    </div>
                </div>
            </div>
            <div class="space-y-4">
                <div class="service-item flex flex-col cursor-pointer border-b border-gray-200 rounded-lg p-0">
                    <div class="flex items-center justify-between p-6 hover:bg-gray-50 transition duration-300 text-sm">
                        <span class="font-semibold text-gray-800">Jasa Desain Interior</span>
                        <span class="text-2xl font-bold text-yellow-400">+</span>
                    </div>
                    <div class="service-desc hidden px-6 pb-4 text-left text-gray-600 text-sm">
                        Desain interior rumah, apartemen, kantor, dan ruang usaha sesuai kebutuhan dan gaya Anda.
                    </div>
                </div>
                <div class="service-item flex flex-col cursor-pointer border-b border-gray-200 rounded-lg p-0">
                    <div class="flex items-center justify-between p-6 hover:bg-gray-50 transition duration-300 text-sm">
                        <span class="font-semibold text-gray-800">Jasa Pembuatan RAB</span>
                        <span class="text-2xl font-bold text-yellow-400">+</span>
                    </div>
                    <div class="service-desc hidden px-6 pb-4 text-left text-gray-600 text-sm">
                        Pembuatan Rencana Anggaran Biaya (RAB) dan pengurusan dokumen PGB/IMB secara profesional dan transparan.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section Konsultasi dengan Gradient Background --}}
{{-- Section Konsultasi dengan Gradient Background --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col lg:flex-row items-stretch gap-0">
            <!-- Konten Kiri -->
            <div class="lg:w-2/5">
                <div class="bg-gradient-to-r from-black via-gray-900 to-yellow-400 p-8 lg:p-12 h-full flex flex-col justify-center">
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 leading-tight">
                        Bangun Rumah,<br>Tanpa Ribet!
                    </h1>
                    <h2 class="text-xl md:text-2xl mb-6 text-gray-200">
                        Bingung mulai dari mana untuk bangun rumah impianmu?
                    </h2>
                    <p class="text-lg leading-relaxed text-gray-300">
                        Tenang, kami bantu dari awal! Cukup isi form ini, dan tim ahli kami akan membimbingmu melalui proses desain, perencanaan anggaran, hingga konstruksi yang terukur dan transparan.
                    </p>
                </div>
            </div>

            <!-- Form Kanan -->
            <div class="lg:w-3/5">
                <div class="bg-white p-8 lg:p-12 h-full flex flex-col justify-center">

                    {{-- Pesan sukses --}}
                    @if(session('success'))
                        <div class="p-4 mb-4 text-green-800 bg-green-100 rounded-lg">
                            {{ session('success') }}
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
                            <select name="kategori" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition duration-300" required>
                                <option value="Jasa Bangun Rumah">Jasa Bangun Rumah</option>
                                <option value="Jasa Renovasi Rumah">Jasa Renovasi Rumah</option>
                                <option value="Jasa Desain Interior">Jasa Desain Interior</option>
                                <option value="Jasa Pembuatan RAB & PBG/IMB">Jasa Pembuatan RAB & PBG/IMB</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Kebutuhan (Opsional)</label>
                            <textarea name="kebutuhan" rows="4" placeholder="Jelaskan Kebutuhan Anda disini"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition duration-300 resize-none"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-yellow-400 text-black font-bold py-4 px-6 rounded-lg hover:bg-yellow-500 transition shadow-lg">
                            KONSULTASIKAN KEBUTUHAN
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section Konten dengan Gambar --}}
<section class="bg-white py-20">
    <div class="max-w-6xl mx-auto px-8">
        <div class="text-center mb-16">
            <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=1200&q=80" alt="Modern Living Room" class="w-full max-w-4xl mx-auto rounded-2xl shadow-2xl mb-12 hover:scale-105 transition parallax-img">
        </div>

        <div class="max-w-4xl mx-auto space-y-8 text-left">
            <p class="text-lg leading-relaxed text-gray-700">
                Membangun rumah bukan hanya soal mendirikan dinding dan atap. Ini tentang menciptakan tempat berlindung, tempat tumbuh, dan tempat kembali. Kami memahami bahwa setiap rumah memiliki cerita dan harapan di dalamnya. Karena itu, kami hadir untuk membantu Anda mewujudkan lebih dari sekadar bangunan dan design, tapi juga kenyamanan, keindahan, dan fungsi yang menyatu.
            </p>

            <p class="text-lg leading-relaxed text-gray-700">
                Dengan pengalaman dan dedikasi tinggi, kami dalam memberikan layanan menyeluruh mulai dari pembangunan rumah, renovasi, hingga desain interior yang menyesuaikan gaya hidup Anda.
            </p>

            <p class="text-lg leading-relaxed text-gray-700">
                Setiap detail kami kerjakan dengan penuh ketelitian, mulai dari perencanaan, pemilihan material, hingga hasil akhir yang memuaskan. Kami percaya, rumah yang baik dimulai dari perencanaan yang matang dan pelaksanaan yang profesional.
            </p>
        </div>
    </div>
</section>

{{-- Section Portfolio --}}
<section id="portofolio" class="bg-black py-16 mt-32">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <div class="w-2/3">
                <div class="text-white font-bold text-xl mb-4">WUJUDKAN RUMAH IMPIAN ANDA BERSAMA KAMI</div>
                <div class="text-gray-300">Dari desain hingga pembangunan, kami menghadirkan hunian yang memadukan estetika, kenyamanan, dan kualitas terbaik. Tim profesional kami siap membimbing setiap langkah-mulai dari perencanaan anggaran dan pemilihan material berkualitas terbaik. Tim kami juga akan memberikan hasil akhir yang memukau.</div>
            </div>
            <a href="#" class="bg-yellow-400 text-black px-6 py-2 rounded shadow hover:bg-yellow-500 transition font-semibold mt-4 md:mt-0">Lihat Portfolio</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 w-2/3 mx-auto">
            {{-- Portfolio Item 1 - Large --}}
            <div class="md:col-span-2 md:row-span-2 bg-gray-800 rounded-lg overflow-hidden shadow-lg hover-scale transition">
                <img src="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?auto=format&fit=crop&w=600&q=80" alt="Portfolio" class="w-full h-full object-cover hover:scale-105 transition parallax-img">
            </div>
            {{-- Portfolio Item 2 --}}
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover-scale transition">
                <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=400&q=80" alt="Portfolio" class="w-full h-40 object-cover hover:scale-105 transition parallax-img">
            </div>
            {{-- Portfolio Item 3 --}}
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover-scale transition">
                <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=400&q=80" alt="Portfolio" class="w-full h-40 object-cover hover:scale-105 transition parallax-img">
            </div>
            {{-- Portfolio Item 4 --}}
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover-scale transition">
                <img src="https://images.unsplash.com/photo-1460518451285-97b6aa326961?auto=format&fit=crop&w=400&q=80" alt="Portfolio" class="w-full h-40 object-cover hover:scale-105 transition parallax-img">
            </div>
            {{-- Portfolio Item 5 --}}
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover-scale transition">
                <img src="https://images.unsplash.com/photo-1507089947368-19c1da9775ae?auto=format&fit=crop&w=400&q=80" alt="Portfolio" class="w-full h-40 object-cover hover:scale-105 transition parallax-img">
            </div>
        </div>
    </div>
</section>

{{-- Section FAQ --}}
<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-8">
        <div>
            <div class="bg-black rounded-lg p-8 mb-6">
                <h2 class="text-2xl font-bold text-yellow-400 mb-2">Frequently Ask<br><span class="text-white">Question</span></h2>
                <p class="text-gray-300 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                <p class="text-gray-300 text-sm mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                <div class="text-center">
                    <a href="#kontak" class="bg-yellow-400 text-black px-6 py-2 rounded shadow hover:bg-yellow-500 transition font-semibold">HUBUNGI KAMI</a>
                </div>
            </div>
        </div>
        <div class="max-w-2xl ml-auto">
            <div x-data="{open:1}" class="space-y-3">
                <div class="border border-gray-300 rounded">
                    <button type="button" class="w-full flex justify-between items-center px-4 py-3 font-semibold text-left focus:outline-none" @click="open === 1 ? open = null : open = 1">
                        <span>lorem Ipsum Bla Blas Lorem Ipsum?</span>
                        <svg :class="{'rotate-180':open==1}" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div x-show="open === 1" x-collapse class="px-4 pb-3 text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</div>
                </div>

                <div class="border border-gray-300 rounded">
                    <button type="button" class="w-full flex justify-between items-center px-4 py-3 font-semibold text-left focus:outline-none" @click="open === 2 ? open = null : open = 2">
                        <span>lorem Ipsum Bla Blas Lorem Ipsum?</span>
                        <svg :class="{'rotate-180':open==2}" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div x-show="open === 2" x-collapse class="px-4 pb-3 text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</div>
                </div>

                <div class="border border-gray-300 rounded">
                    <button type="button" class="w-full flex justify-between items-center px-4 py-3 font-semibold text-left focus:outline-none" @click="open === 3 ? open = null : open = 3">
                        <span>lorem Ipsum Bla Blas Lorem Ipsum?</span>
                        <svg :class="{'rotate-180':open==3}" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div x-show="open === 3" x-collapse class="px-4 pb-3 text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</div>
                </div>

                <div class="border border-gray-300 rounded">
                    <button type="button" class="w-full flex justify-between items-center px-4 py-3 font-semibold text-left focus:outline-none" @click="open === 4 ? open = null : open = 4">
                        <span>lorem Ipsum Bla Blas Lorem Ipsum?</span>
                        <svg :class="{'rotate-180':open==4}" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div x-show="open === 4" x-collapse class="px-4 pb-3 text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</div>
                </div>

                <div class="border border-gray-300 rounded">
                    <button type="button" class="w-full flex justify-between items-center px-4 py-3 font-semibold text-left focus:outline-none" @click="open === 5 ? open = null : open = 5">
                        <span>lorem Ipsum Bla Blas Lorem Ipsum?</span>
                        <svg :class="{'rotate-180':open==5}" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div x-show="open === 5" x-collapse class="px-4 pb-3 text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</div>
                </div>

                <div class="border border-gray-300 rounded">
                    <button type="button" class="w-full flex justify-between items-center px-4 py-3 font-semibold text-left focus:outline-none" @click="open === 6 ? open = null : open = 6">
                        <span>lorem Ipsum Bla Blas Lorem Ipsum?</span>
                        <svg :class="{'rotate-180':open==6}" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div x-show="open === 6" x-collapse class="px-4 pb-3 text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section Artikel --}}
<section class="bg-gray-100 py-16">
    <div class="max-w-6xl mx-auto px-4 relative pb-14">
        <h2 class="text-2xl font-bold mb-6">ARTIKEL</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @for($i=0;$i<3;$i++)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:scale-105 transition animate-fade-in-up">
                <img src="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?auto=format&fit=crop&w=400&q=80" alt="Artikel" class="w-full h-40 object-cover hover:scale-105 transition parallax-img">
                <div class="p-4">
                    <div class="font-bold mb-2">Pengaruh Penerimaan Bangunan pada Kamar Tidur</div>
                    <div class="text-gray-500 text-sm mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                    <a href="#" class="text-yellow-400 font-semibold hover:underline">Baca Selengkapnya</a>
                </div>
            </div>
            @endfor
        </div>
        <a href="/artikel" class="absolute bottom-0 bg-yellow-400 text-black px-6 py-2 rounded shadow hover:bg-yellow-500 transition font-semibold">Lihat Artikel Lainnya</a>
    </div>
</section>

<a href="https://wa.me/6285333353609?text=Halo%2C%20saya%20tertarik%20untuk%20konsultasi%20rancang%20bangun%20rumah"
   target="_blank"
   class="fixed bottom-8 right-8 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition transform hover:scale-110 z-50"
   title="Chat via WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-8 h-8 fill-current">
        <path d="M16 0C7.163 0 0 6.92 0 15.44c0 2.72.775 5.37 2.237 7.68L0 32l9.13-2.388A15.9 15.9 0 0016 30.88c8.837 0 16-6.92 16-15.44S24.837 0 16 0zm0 28.48a12.48 12.48 0 01-6.46-1.76l-.463-.275-5.42 1.417 1.45-5.18-.3-.5A12.13 12.13 0 013.52 15.44c0-6.657 5.77-12.08 12.88-12.08 3.44 0 6.677 1.315 9.107 3.702a12.42 12.42 0 013.773 8.378c0 6.657-5.77 12.08-12.88 12.08zm7.057-8.807c-.387-.193-2.283-1.127-2.636-1.253-.353-.127-.61-.193-.867.193-.257.386-.993 1.253-1.217 1.507-.223.257-.45.29-.837.097-.387-.193-1.633-.598-3.11-1.905-1.148-1.015-1.922-2.27-2.145-2.656-.223-.386-.023-.594.17-.787.175-.174.387-.45.58-.676.193-.226.257-.386.387-.644.127-.257.064-.48-.032-.674-.096-.193-.867-2.086-1.19-2.857-.314-.754-.634-.65-.867-.66l-.74-.013c-.257 0-.674.096-1.03.48-.353.386-1.354 1.322-1.354 3.223 0 1.902 1.385 3.737 1.58 3.993.193.257 2.728 4.17 6.606 5.847.925.4 1.645.639 2.205.816.926.295 1.77.253 2.435.154.743-.111 2.283-.932 2.605-1.83.322-.898.322-1.667.225-1.83-.096-.161-.353-.257-.74-.45z"/>
    </svg>
</a>




{{-- Footer --}}
<x-footer />
<script>
// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initial navbar state check
    const navbar = document.getElementById('main-navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('bg-white', 'shadow-lg');
        navbar.classList.remove('bg-transparent');
        // Change text colors when navbar becomes white
        const navLinks = navbar.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.classList.remove('text-yellow-400');
            link.classList.add('text-gray-800');
        });
        // Change logo text color
        const logoText = navbar.querySelector('span');
        if (logoText) {
            logoText.classList.remove('text-yellow-400');
            logoText.classList.add('text-gray-800');
        }
    }

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('main-navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('bg-white', 'shadow-lg');
            navbar.classList.remove('bg-transparent');
            // Change text colors when navbar becomes white
            const navLinks = navbar.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.classList.remove('text-yellow-400');
                link.classList.add('text-gray-800');
            });
            // Change logo text color
            const logoText = navbar.querySelector('span');
            if (logoText) {
                logoText.classList.remove('text-yellow-400');
                logoText.classList.add('text-gray-800');
            }
        } else {
            navbar.classList.remove('bg-white', 'shadow-lg');
            navbar.classList.add('bg-transparent');
            // Restore original colors
            const navLinks = navbar.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.classList.add('text-yellow-400');
                link.classList.remove('text-gray-800');
            });
            // Restore logo text color
            const logoText = navbar.querySelector('span');
            if (logoText) {
                logoText.classList.add('text-yellow-400');
                logoText.classList.remove('text-gray-800');
            }
        }
    });

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
            serviceItems.forEach(i => i.querySelector('.service-desc').classList.add('hidden'));
            // Open if was closed
            if (!isOpen) desc.classList.remove('hidden');
        });
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
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

    /* Navbar transition */
    #main-navbar {
        transition: all 0.3s ease;
    }

    #main-navbar.bg-white {
        backdrop-filter: blur(10px);
        background-color: rgba(255, 255, 255, 0.95) !important;
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
`;
document.head.appendChild(style);
</script>
@endsection
