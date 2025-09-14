@extends('layouts.app')

@section('title', 'Layanan Buat RAB & PBG/IMB Sulawesi Tenggara')
@section('meta_description', 'Layanan pembuatan RAB (Rencana Anggaran Biaya) dan pendampingan perizinan PBG/IMB untuk pembangunan/renovasi rumah Anda di Sulawesi Tenggara. Profesional dan cepat di Kendari.')

@section('styles')
    @include('components.styles')
@endsection

@section('content')
    @include('components.navbar')
    <div class="min-h-screen">
        <!-- Hero Section -->
        <section
            class="relative bg-black text-white min-h-screen flex items-center bg-fixed bg-center bg-no-repeat bg-cover pt-24"
            style="background-image: url('/img/profil2.png');">
            <!-- Overlay gradient atas -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/50 z-0"></div>
            <!-- Overlay gradient bawah untuk smooth transition -->
            <div
                class="absolute left-0 right-0 bottom-0 h-32 md:h-48 bg-gradient-to-b from-transparent via-black/80 to-black z-10 pointer-events-none">
            </div>
            <div class="container mx-auto px-8 relative z-20">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div class="ml-10 space-y-10">
                        <h1 class="text-2xl md:text-4xl font-bold leading-tight space-x-10">
                            Jasa Pembuatan RAB &
                            <span class="text-yellow-400">Pengurusan PBG/IMB</span>
                        </h1>
                        <p class="text-xl text-yellow-400 font-semibold">Akurat & Profesional</p>
                        <p class="text-gray-300 text-lg leading-relaxed">
                            Kami menyediakan jasa pembuatan RAB (Rencana Anggaran Biaya) yang akurat dan profesional di Sulawesi Tenggara, serta
                            pengurusan dokumen PBG/IMB secara lengkap di Kendari. Tim ahli kami siap membantu mewujudkan rumah impian
                            Anda dengan perencanaan yang matang dan transparan.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="/contact"
                                class="bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-600 text-white px-8 py-4 rounded-lg font-semibold flex items-center justify-center gap-2 transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                </svg>
                                Hubungi Kami Sekarang
                            </a>
                        </div>
                    </div>
                    <!-- Right Image -->
                    <div class="hidden lg:flex justify-center items-center">
                        <div class="bg-white p-6 md:p-8 rounded-lg shadow-2xl mt-8 md:mt-12 max-w-xs md:max-w-sm mx-auto">
                            <img src="/img/profil3.png" alt="Denah Rumah"
                                class="w-full h-auto max-h-[300px] md:max-h-[350px] object-contain mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="relative w-full min-h-screen bg-black text-white py-16 lg:py-24">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">

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
                            <img src="{{ asset('img/bg02.jpg') }}" alt="Tim Profesional" class="w-full h-full object-cover">
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

        <section class="relative w-full min-h-screen bg-black text-white py-16 lg:py-24">
            <div class="max-w-5xl mx-auto px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">

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
                                Kami percaya bahwa setiap rumah memiliki cerita, dan tugas kami adalah membantu Anda
                                mewujudkannya.
                                Dengan pengalaman, inovasi, serta komitmen penuh pada kualitas, kami menghadirkan layanan
                                yang membuat kami berbeda dari yang lain.
                            </p>
                        </div>

                        <!-- House Image -->
                        <div class="relative">
                            <div class="aspect-[4/3] bg-gray-800 rounded-lg overflow-hidden shadow-2xl">
                                <img src="{{ asset('img/image gallery 1.jpg') }}" alt="Modern House Design"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>

                    <!-- Right Content - Features Grid -->
                    <div class="grid grid-cols-2 gap-6 slide-in-right">
                        <!-- Feature 1 -->
                        <div class="space-y-4">
                            <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="text-white text-lg font-semibold">Kualitas Bahan Terbaik</h4>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Kami hanya menggunakan material bangunan berkualitas tinggi yang tahan lama dan sesuai
                                standar,
                                sehingga rumah Anda kokoh, aman, dan bernilai investasi jangka panjang.
                            </p>
                        </div>

                        <!-- Feature 2 -->
                        <div class="space-y-4">
                            <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="text-white text-lg font-semibold">Desain Elegan & Modern</h4>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Tim arsitek kami menghadirkan desain rumah yang tidak hanya indah, tetapi juga fungsional,
                                menyesuaikan dengan kebutuhan dan gaya hidup Anda.
                            </p>
                        </div>

                        <!-- Feature 3 -->
                        <div class="space-y-4">
                            <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="text-white text-lg font-semibold">Inovasi & Kreativitas</h4>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Setiap proyek dirancang dengan ide-ide inovatif,
                                memadukan teknologi terbaru dengan konsep yang unik agar rumah Anda tampil berbeda dan
                                istimewa.
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
                            <h4 class="text-white text-lg font-semibold">Pengerjaan Tepat Waktu</h4>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Kami mengutamakan ketepatan waktu dalam setiap pembangunan dan renovasi,
                                tanpa mengurangi kualitas hasil akhir.
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
                            <h4 class="text-white text-lg font-semibold">Harga Transparan & Terjangkau</h4>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Memberikan penawaran harga yang jelas, detail,
                                dan sesuai anggaran Anda, tanpa biaya tersembunyi.
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
                            <h4 class="text-white text-lg font-semibold">Tim Profesional & Berpengalaman</h4>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                Dikerjakan oleh tenaga ahli berpengalaman di bidang konstruksi dan renovasi,
                                yang siap mewujudkan rumah impian Anda dengan hasil maksimal.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Before Using RAB Service Section -->
        <section class="bg-white text-gray-900 py-20 ml-10">
            <div class="container mx-auto px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div class="space-y-8">
                        <h2 class="text-4xl font-bold">
                            Sebelum Menggunakan
                            <span class="text-yellow-400">Jasa Pembuatan RAB</span>
                        </h2>
                        <p class="text-lg text-gray-600">
                            Sebelum memulai pembuatan RAB, pastikan Anda telah menyiapkan dokumen dan informasi yang
                            diperlukan untuk mendapatkan hasil yang optimal dan akurat.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-4">
                                <div class="w-16 h-16 bg-yellow-400 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold">Desain Arsitektur Rumah</h3>
                                <p class="text-gray-600">Dokumen desain lengkap yang mencakup denah, tampilan fasad, serta
                                    detail arsitektur.
                                    Informasi ini sangat penting agar perhitungan volume pekerjaan dapat dilakukan dengan
                                    lebih akurat.</p>
                            </div>

                            <div class="space-y-4">
                                <div class="w-16 h-16 bg-yellow-400 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold">Gambar Kerja Lengkap</h3>
                                <p class="text-gray-600">Gambar teknis detail yang berisi spesifikasi material, dimensi
                                    konstruksi, serta metode pelaksanaan.
                                    Dokumen ini menjadi acuan utama dalam menghitung estimasi biaya pembangunan secara tepat
                                    dan transparan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Image -->
                    <div>
                        <img src="{{ asset('img/rab.jpg') }}" class="w- h-auto rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Cost Section -->
        <section class="bg-white text-gray-900 py-20">
            <div class="container mx-auto px-8">
                <div class="text-center space-y-8">
                    <h2 class="text-4xl font-bold">Biaya Jasa Pembuatan RAB</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Kami menawarkan paket layanan yang fleksibel dan terjangkau untuk memenuhi berbagai kebutuhan
                        pembuatan RAB dan pengurusan PBG/IMB.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                        <div
                            class="bg-white p-8 rounded-xl shadow-lg border-2 border-gray-200 hover:border-yellow-400 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl relative overflow-hidden">
                            <div
                                class="absolute top-0 right-0 w-32 h-32 bg-yellow-400 opacity-10 rounded-full -translate-y-16 translate-x-16">
                            </div>
                            <div class="relative z-10">
                                <div class="text-center mb-6">
                                    <h3 class="text-2xl font-bold mb-2 text-gray-900">Paket Basic</h3>
                                    <p class="text-gray-600">Paket lengkap untuk pembuatan RAB rumah sederhana dengan
                                        spesifikasi standar.</p>
                                </div>
                                <ul class="space-y-4 mb-8">
                                    <li class="flex items-center gap-3">
                                        <div class="w-5 h-5 bg-yellow-400 rounded-full flex items-center justify-center">
                                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <span class="text-gray-700">Perhitungan volume dan biaya material</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <div class="w-5 h-5 bg-yellow-400 rounded-full flex items-center justify-center">
                                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <span class="text-gray-700">Analisis harga satuan pekerjaan</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <div class="w-5 h-5 bg-yellow-400 rounded-full flex items-center justify-center">
                                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <span class="text-gray-700">Dokumen RAB lengkap dan rapi</span>
                                    </li>
                                </ul>
                                <a href="https://wa.me/6285333353609" target="_blank" rel="noopener"
                                    class="block text-center w-full bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105">
                                    Hubungi via WhatsApp
                                </a>
                            </div>
                        </div>

                        <div
                            class="bg-white p-8 rounded-xl shadow-lg border-2 border-yellow-400 hover:border-yellow-500 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl relative overflow-hidden">
                            <div
                                class="absolute top-0 right-0 w-32 h-32 bg-yellow-400 opacity-20 rounded-full -translate-y-16 translate-x-16">
                            </div>
                            <div
                                class="absolute top-4 right-4 bg-yellow-400 text-black text-xs font-bold px-3 py-1 rounded-full">
                                POPULAR
                            </div>
                            <div class="relative z-10">
                                <div class="text-center mb-6">
                                    <h3 class="text-2xl font-bold mb-2 text-gray-900">Paket Premium</h3>
                                    <p class="text-gray-600">Paket lengkap dengan pengurusan PBG/IMB dan konsultasi
                                        intensif untuk rumah dengan spesifikasi tinggi.</p>
                                </div>
                                <div class="text-center mb-8">
                                    <!-- Harga disembunyikan -->
                                </div>
                                <ul class="space-y-4 mb-8">
                                    <li class="flex items-center gap-3">
                                        <div class="w-5 h-5 bg-yellow-400 rounded-full flex items-center justify-center">
                                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <span class="text-gray-700">Semua fitur paket Basic</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <div class="w-5 h-5 bg-yellow-400 rounded-full flex items-center justify-center">
                                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <span class="text-gray-700">Pengurusan PBG/IMB lengkap</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <div class="w-5 h-5 bg-yellow-400 rounded-full flex items-center justify-center">
                                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <span class="text-gray-700">Konsultasi intensif dengan tim ahli</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <div class="w-5 h-5 bg-yellow-400 rounded-full flex items-center justify-center">
                                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <span class="text-gray-700">Revisi dan penyesuaian tanpa batas</span>
                                    </li>
                                </ul>
                                <a href="https://wa.me/6285333353609" target="_blank" rel="noopener"
                                    class="block text-center w-full bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105">
                                    Hubungi via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="bg-white text-gray-900 py-20">
            <div class="container mx-auto px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold mb-4">Proses Mudah dan Cepat dengan Jasa Pengurusan PBG / IMB Kami</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">Kami memastikan proses pengurusan PBG/IMB berjalan
                        lancar dan efisien dengan tim yang berpengalaman dan sistem yang terstruktur.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                    <!-- Left Column: Image -->
                    <div class="relative">
                        <img src="/img/pbg_imb.jpg" alt="Process Illustration"
                            class="w-full h-auto rounded-lg shadow-lg">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent rounded-lg"></div>
                    </div>

                    <!-- Right Column: Process Steps -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Step 1 -->
                        <div class="text-center border border-gray-200 p-6 rounded-lg">
                            <div class="text-4xl font-bold text-yellow-400 mb-4">01</div>
                            <h3 class="text-xl font-bold mb-2 text-gray-900">Konsultasi Awal</h3>
                            <p class="text-gray-600 leading-relaxed text-sm text-justify">Diskusi kebutuhan dan konsep
                                desain sesuai dengan budget dan keinginan klien. Tim kami akan mendengarkan visi Anda dan
                                memberikan saran terbaik.</p>
                        </div>

                        <!-- Step 2 -->
                        <div class="text-center border border-gray-200 p-6 rounded-lg">
                            <div class="text-4xl font-bold text-yellow-400 mb-4">02</div>
                            <h3 class="text-xl font-bold mb-2 text-gray-900">Desain & RAB</h3>
                            <p class="text-gray-600 leading-relaxed text-sm text-justify">Pembuatan desain detail dan
                                perhitungan RAB yang akurat dan transparan. Kami akan menyusun rencana anggaran yang detail
                                dan mudah dipahami.</p>
                        </div>

                        <!-- Step 3 -->
                        <div class="text-center border border-gray-200 p-6 rounded-lg">
                            <div class="text-4xl font-bold text-yellow-400 mb-4">03</div>
                            <h3 class="text-xl font-bold mb-2 text-gray-900">Pengurusan IMB</h3>
                            <p class="text-gray-600 leading-relaxed text-sm text-justify">Proses pengurusan surat IMB/PBG
                                hingga selesai dan siap bangun. Kami akan mengurus semua dokumen yang diperlukan secara
                                profesional.</p>
                        </div>

                        <!-- Step 4 -->
                        <div class="text-center border border-gray-200 p-6 rounded-lg">
                            <div class="text-4xl font-bold text-yellow-400 mb-4">04</div>
                            <h3 class="text-xl font-bold mb-2 text-gray-900">Konstruksi</h3>
                            <p class="text-gray-600 leading-relaxed text-sm text-justify">Pelaksanaan pembangunan dengan
                                tim profesional dan material berkualitas. Setiap tahap konstruksi diawasi dengan ketat untuk
                                memastikan kualitas.</p>
                        </div>

                        <!-- Step 5 -->
                        <div class="text-center border border-gray-200 p-6 rounded-lg">
                            <div class="text-4xl font-bold text-yellow-400 mb-4">05</div>
                            <h3 class="text-xl font-bold mb-2 text-gray-900">Serah Terima</h3>
                            <p class="text-gray-600 leading-relaxed text-sm text-justify">Penyerahan hasil pekerjaan yang
                                sudah selesai dan sesuai dengan kesepakatan. Kami memastikan setiap detail sesuai dengan
                                yang telah disepakati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PBG/IMB Documents Section -->
        <section class="bg-white text-gray-900 py-20">
            <div class="container mx-auto px-8">
                <div class="text-center space-y-8">
                    <h2 class="text-4xl font-bold">
                        Urus Surat PBG/IMB
                    </h2>
                    <p class="text-xl text-yellow-400 font-semibold">
                        Tanpa Repot, Hambatan, & Selesai Sampai Tuntas
                    </p>
                    <div class="w-24 h-1 bg-yellow-400 mx-auto"></div>
                    <p class="text-lg text-gray-600 max-w-4xl mx-auto">
                        Kami menyediakan layanan pengurusan surat PBG/IMB yang lengkap dan profesional. Tim kami akan
                        membantu mengurus semua dokumen yang diperlukan, mulai dari persiapan hingga pengajuan dan
                        pengambilan surat. Dengan pengalaman bertahun-tahun, kami memastikan proses berjalan lancar tanpa
                        hambatan dan selesai sampai tuntas sesuai dengan ketentuan yang berlaku.
                    </p>
                </div>
            </div>
        </section>
        <!-- Client Testimonials Section -->
        <!-- <section class="relative w-full bg-gray-100 text-black py-16 lg:py-20">
                    <div class="max-w-7xl mx-auto px-6 lg:px-8">
                      
                        <div class="text-center mb-16">
                            <h2 class="text-3xl lg:text-4xl font-normal text-black mb-4">
                                Tanggapan <span class="text-yellow-400 font-semibold">Positive</span> Para Klien
                            </h2>
                        </div>

                     
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                            
                            <div class="bg-gray-300 rounded-lg p-8 text-center">
                                <div class="w-20 h-20 bg-white rounded-full mx-auto mb-4"></div>
                                <h3 class="text-lg font-semibold text-black mb-4">Fiqri</h3>
                                <p class="text-sm text-gray-700 leading-relaxed">
                                    "Saya Sangat Menyukai Desain Yang kalian Buat, Semuanya Serasa Di Surga"
                                </p>
                            </div>

                           
                            <div class="bg-gray-300 rounded-lg p-8 text-center">
                                <div class="w-20 h-20 bg-white rounded-full mx-auto mb-4"></div>
                                <h3 class="text-lg font-semibold text-black mb-4">Afthar</h3>
                                <p class="text-sm text-gray-700 leading-relaxed">
                                    "Saya Sangat Menyukai Desain Yang kalian Buat, Semuanya Serasa Di Surga"
                                </p>
                            </div>

                          
                            <div class="bg-gray-300 rounded-lg p-8 text-center">
                                <div class="w-20 h-20 bg-white rounded-full mx-auto mb-4"></div>
                                <h3 class="text-lg font-semibold text-black mb-4">Abid</h3>
                                <p class="text-sm text-gray-700 leading-relaxed">
                                    "Saya Sangat Menyukai Desain Yang kalian Buat, Semuanya Serasa Di Surga"
                                </p>
                            </div>
                        </div>
                </section> -->
        <!-- Customer Reviews Section -->


        < <!-- Featured Projects Section -->
            <section class="relative w-full bg-black text-white py-16 lg:py-20">
                <div class="max-w-7xl mx-auto px-6 lg:px-8">
                    <!-- Section Header -->
                    <div class="text-center mb-16 fade-in">
                        <h2 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-6">
                            Project <span class="text-yellow-400">Unggulan</span>
                        </h2>
                        <p class="text-gray-300 text-lg lg:text-xl max-w-3xl mx-auto">
                            Hasil karya terbaik kami yang telah berhasil mewujudkan impian klien dalam memiliki hunian
                            idaman
                            dengan kualitas premium dan desain yang memukau.
                        </p>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-16 items-center">
                        <!-- Left Content - Featured Project Showcase -->
                        <div class="space-y-8">
                            <div class="aspect-[4/3] bg-gray-800 rounded-lg overflow-hidden shadow-2xl">
                                <img src="{{ asset('img/project unggulan.jpg') }}" alt="Rumah Modern Minimalis"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <!-- Right Content - Project Highlights -->
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-3xl lg:text-4xl font-normal text-white mb-4">
                                    Keunggulan <span class="text-yellow-400 font-semibold">Project Kami</span>
                                </h3>
                                <p class="text-gray-300 text-base leading-relaxed mb-8">
                                    Setiap project yang kami kerjakan selalu mengutamakan kualitas, ketepatan waktu, dan
                                    kepuasan klien.
                                    Berikut adalah beberapa project unggulan yang telah berhasil kami selesaikan dengan
                                    sempurna.
                                </p>
                            </div>

                            <!-- Project Highlights Grid -->
                            <div class="grid grid-cols-2 gap-4">
                                <div
                                    class="bg-gray-900 rounded-lg p-4 text-center hover:bg-gray-800 transition-all duration-300">
                                    <div
                                        class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="text-white font-semibold mb-2">100% Selesai</h4>
                                    <p class="text-gray-400 text-xs">Tepat waktu sesuai jadwal</p>
                                </div>

                                <div
                                    class="bg-gray-900 rounded-lg p-4 text-center hover:bg-gray-800 transition-all duration-300">
                                    <div
                                        class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h4 class="text-white font-semibold mb-2">Kualitas Premium</h4>
                                    <p class="text-gray-400 text-xs">Material terbaik & pengerjaan rapi</p>
                                </div>

                                <div
                                    class="bg-gray-900 rounded-lg p-4 text-center hover:bg-gray-800 transition-all duration-300">
                                    <div
                                        class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h4 class="text-white font-semibold mb-2">Klien Puas</h4>
                                    <p class="text-gray-400 text-xs">Testimoni positif 100%</p>
                                </div>

                                <div
                                    class="bg-gray-900 rounded-lg p-4 text-center hover:bg-gray-800 transition-all duration-300">
                                    <div
                                        class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="text-white font-semibold mb-2">Garansi Lengkap</h4>
                                    <p class="text-gray-400 text-xs">Jaminan kualitas & ketahanan</p>
                                </div>
                            </div>

                            <!-- CTA Button -->
                            <div class="pt-4">
                                <a href="/portofolio"
                                    class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-8 py-3 rounded-lg transition-all duration-300 transform hover:scale-105">
                                    Lihat Semua Project
                                </a>
                            </div>
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
                        <img src="{{ asset('img/profil5.png') }}" alt="Modern House Exterior"
                            class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Right Content - Services -->
                <div class="space-y-8">
                    <h2 class="text-3xl lg:text-4xl font-normal text-black">
                        Pertanyaan Seputar RAB & PBG/IMB
                    </h2>

                    <!-- Services Accordion -->
                    <div class="space-y-4" id="rab-pbg-accordion">
                        <!-- FAQ Item 1 -->
                        <div class="border border-gray-300 rounded-lg">
                            <button type="button"
                                class="rab-pbg-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-black hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200"
                                data-faq="1">
                                <span class="text-lg">Apakah jasa RAB mencakup perhitungan material dan tenaga
                                    kerja?</span>
                                <svg class="rab-pbg-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="rab-pbg-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                                <p class="mb-3">Ya, RAB yang kami buat sangat komprehensif dan mencakup:</p>
                                <ul class="list-disc list-inside space-y-2 text-sm">
                                    <li><strong>Material:</strong> Semua material dari pondasi hingga finishing</li>
                                    <li><strong>Tenaga Kerja:</strong> Upah tukang, mandor, dan supervisor</li>
                                    <li><strong>Peralatan:</strong> Sewa alat berat dan peralatan konstruksi</li>
                                    <li><strong>Overhead:</strong> Administrasi, transportasi, dan keamanan</li>
                                    <li><strong>Pajak:</strong> PPN dan pajak daerah yang berlaku</li>
                                </ul>
                                <p class="mt-3">Kami memberikan breakdown detail untuk setiap item sehingga Anda bisa
                                    memahami alokasi anggaran dengan jelas.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="border border-gray-300 rounded-lg">
                            <button type="button"
                                class="rab-pbg-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-black hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200"
                                data-faq="2">
                                <span class="text-lg">Bagaimana proses pengurusan PBG/IMB yang dilakukan?</span>
                                <svg class="rab-pbg-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="rab-pbg-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                                <p class="mb-3">Proses pengurusan PBG/IMB kami lakukan secara sistematis:</p>
                                <ul class="list-disc list-inside space-y-2 text-sm">
                                    <li><strong>Persiapan Dokumen:</strong> KTP, Sertifikat tanah, PBB, dan dokumen
                                        pendukung</li>
                                    <li><strong>Survey Lokasi:</strong> Tim kami akan melakukan survey dan pengukuran</li>
                                    <li><strong>Pembuatan Gambar:</strong> Denah, tampak, dan potongan sesuai standar</li>
                                    <li><strong>Pengajuan ke Dinas:</strong> Kami urus semua proses administrasi</li>
                                    <li><strong>Follow Up:</strong> Monitoring progress hingga selesai</li>
                                </ul>
                                <p class="mt-3">Kami akan memberikan update progress secara berkala dan memastikan semua
                                    dokumen selesai tepat waktu.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="border border-gray-300 rounded-lg">
                            <button type="button"
                                class="rab-pbg-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-black hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200"
                                data-faq="3">
                                <span class="text-lg">Berapa lama waktu pengurusan PBG/IMB hingga selesai?</span>
                                <svg class="rab-pbg-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="rab-pbg-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                                <p class="mb-3">Waktu pengurusan PBG/IMB bervariasi tergantung kompleksitas:</p>
                                <ul class="list-disc list-inside space-y-2 text-sm">
                                    <li><strong>Rumah Sederhana:</strong> 2-4 minggu</li>
                                    <li><strong>Rumah Menengah:</strong> 4-6 minggu</li>
                                    <li><strong>Rumah Mewah:</strong> 6-8 minggu</li>
                                    <li><strong>Faktor Penentu:</strong> Kelengkapan dokumen dan lokasi</li>
                                    <li><strong>Proses Dinas:</strong> Tergantung kebijakan pemerintah setempat</li>
                                </ul>
                                <p class="mt-3">Tim kami akan memberikan estimasi waktu yang akurat setelah analisis
                                    dokumen dan survey lokasi.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="border border-gray-300 rounded-lg">
                            <button type="button"
                                class="rab-pbg-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-black hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200"
                                data-faq="4">
                                <span class="text-lg">Apakah ada layanan konsultasi gratis sebelum memulai proyek?</span>
                                <svg class="rab-pbg-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="rab-pbg-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                                <p class="mb-3">Ya, kami menyediakan layanan konsultasi gratis untuk membantu Anda:</p>
                                <ul class="list-disc list-inside space-y-2 text-sm">
                                    <li><strong>Konsultasi Awal:</strong> Diskusi kebutuhan dan konsep desain</li>
                                    <li><strong>Survey Lokasi:</strong> Analisis kondisi tanah dan lingkungan</li>
                                    <li><strong>Estimasi Budget:</strong> Perkiraan biaya awal proyek</li>
                                    <li><strong>Timeline Proyek:</strong> Perkiraan waktu pengerjaan</li>
                                    <li><strong>Rekomendasi Material:</strong> Saran material yang sesuai budget</li>
                                </ul>
                                <p class="mt-3">Konsultasi ini membantu Anda memahami scope pekerjaan dan membuat
                                    keputusan yang tepat sebelum memulai proyek.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="border border-gray-300 rounded-lg">
                            <button type="button"
                                class="rab-pbg-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-black hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200"
                                data-faq="5">
                                <span class="text-lg">Bagaimana jika ada perubahan desain setelah RAB dibuat?</span>
                                <svg class="rab-pbg-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="rab-pbg-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                                <p class="mb-3">Kami fleksibel dalam menangani perubahan desain:</p>
                                <ul class="list-disc list-inside space-y-2 text-sm">
                                    <li><strong>Revisi RAB:</strong> Update perhitungan sesuai perubahan</li>
                                    <li><strong>Biaya Revisi:</strong> Minimal atau gratis untuk perubahan kecil</li>
                                    <li><strong>Timeline Update:</strong> Penyesuaian jadwal pengerjaan</li>
                                    <li><strong>Komunikasi:</strong> Update berkala tentang perubahan</li>
                                    <li><strong>Dokumentasi:</strong> Semua perubahan terdokumentasi dengan baik</li>
                                </ul>
                                <p class="mt-3">Tim kami akan membantu menyesuaikan RAB dan timeline agar tetap sesuai
                                    dengan kebutuhan Anda.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Button -->
                    <div class="pt-6">
                        <a href="https://wa.me/6285333353609?text=Halo%2C%20saya%20tertarik%20untuk%20konsultasi%20rancang%20bangun%20rumah"
                            class="border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black font-semibold px-8 py-3 rounded-lg transition-all duration-300">
                            Hubungi Kami
                        </a>
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
                melalui proses desain, perencanaan anggaran, hingga eksekusi pembangunan yang sempurna.
            </p>
            <a href="https://wa.me/6285333353609?text=Halo%2C%20saya%20tertarik%20untuk%20konsultasi%20rancang%20bangun%20rumah"
                class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-10 py-4 rounded-lg text-lg transition-all duration-300">
                Hubungi Kami
            </a>
        </div>
    </section>

    </div>
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
        // FAQ Accordion functionality for RAB/PBG page
        document.addEventListener('DOMContentLoaded', function() {
            const rabPbgButtons = document.querySelectorAll('.rab-pbg-button');
            let currentlyOpen = null;

            rabPbgButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const faqItem = this.closest('.border');
                    const content = faqItem.querySelector('.rab-pbg-content');
                    const icon = this.querySelector('.rab-pbg-icon');

                    // If clicking the same item that's already open, close it
                    if (content.style.display === 'block') {
                        content.style.display = 'none';
                        icon.style.transform = 'rotate(0deg)';
                        currentlyOpen = null;
                    } else {
                        // Close currently open item if any
                        if (currentlyOpen) {
                            currentlyOpen.style.display = 'none';
                            currentlyOpen.closest('.border').querySelector('.rab-pbg-icon').style
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
@endsection
