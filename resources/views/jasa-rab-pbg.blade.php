@extends('layouts.app')

@section('title', 'Contact - Bangun Rumah Project')

@section('styles')
@include('components.styles')
@endsection

@section('content')
@include('components.navbar')
<div class="min-h-screen">
<!-- Hero Section -->
<section class="relative bg-black text-white min-h-screen flex items-center bg-fixed bg-center bg-no-repeat bg-cover pt-24" style="background-image: url('/img/hero-rumah.jpg');">
  <!-- Overlay gradient atas -->
  <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/60 to-black/90 z-0"></div>
  <!-- Overlay gradient bawah untuk smooth transition -->
  <div class="absolute left-0 right-0 bottom-0 h-32 md:h-48 bg-gradient-to-b from-transparent via-black/80 to-black z-10 pointer-events-none"></div>
  <div class="container mx-auto px-8 relative z-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <!-- Left Content -->
      <div class="space-y-6">
        <h1 class="text-4xl md:text-6xl font-bold leading-tight">
          Jasa Pembuatan RAB &
          <span class="text-yellow-400">Pengurusan PBG/IMB</span>
        </h1>
        <p class="text-xl text-yellow-400 font-semibold">Akurat & Profesional</p>
        <p class="text-gray-300 text-lg leading-relaxed">
          Kami menyediakan jasa pembuatan RAB (Rencana Anggaran Biaya) yang akurat dan profesional, serta pengurusan dokumen PBG/IMB secara lengkap. Tim ahli kami siap membantu mewujudkan rumah impian Anda dengan perencanaan yang matang dan transparan.
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
          <a href="#contact" class="bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-600 text-white px-8 py-4 rounded-lg font-semibold flex items-center justify-center gap-2 transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
            </svg>
            Hubungi Kami Sekarang
          </a>
        </div>
      </div>
      <!-- Right Image -->
      <div class="hidden lg:flex justify-center items-center">
        <div class="bg-white p-6 md:p-8 rounded-lg shadow-2xl mt-8 md:mt-12 max-w-xs md:max-w-sm mx-auto">
          <img src="/img/rab-pbg Picture.jpeg" alt="Denah Rumah" class="w-full h-auto max-h-[300px] md:max-h-[350px] object-contain mx-auto">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="bg-black text-white py-20">
    <div class="container mx-auto px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Image -->
            <div class="relative">
                <img src="/img/image-contact.jpg" alt="Modern House Complex" class="w-full h-auto rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-lg"></div>
            </div>

            <!-- Right Content -->
            <div class="space-y-8">
                <h2 class="text-4xl font-bold text-white">Mengapa Memilih kami?</h2>
                <div class="space-y-6">
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <h3 class="text-xl font-bold mb-3 text-white">Tim Profesional</h3>
                        <p class="text-gray-300 leading-relaxed">Tim kami terdiri dari arsitek dan kontraktor berpengalaman yang siap membantu mewujudkan impian rumah Anda. Dengan pengalaman bertahun-tahun di bidang konstruksi dan desain, kami memahami setiap detail yang diperlukan untuk menciptakan rumah yang sempurna sesuai dengan visi dan kebutuhan Anda.</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <h3 class="text-xl font-bold mb-3 text-white">Kualitas Terjamin</h3>
                        <p class="text-gray-300 leading-relaxed">Kami menggunakan material berkualitas tinggi dan mengikuti standar konstruksi yang berlaku. Setiap tahap pembangunan diawasi dengan ketat untuk memastikan hasil yang maksimal dan tahan lama. Komitmen kami terhadap kualitas tidak pernah berkompromi.</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <h3 class="text-xl font-bold mb-3 text-white">Tepat Waktu</h3>
                        <p class="text-gray-300 leading-relaxed">Kami berkomitmen menyelesaikan proyek sesuai jadwal yang telah disepakati. Dengan manajemen proyek yang terstruktur dan tim yang terlatih, kami memastikan setiap tahap pembangunan selesai tepat waktu tanpa mengorbankan kualitas hasil akhir.</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <h3 class="text-xl font-bold mb-3 text-white">Pelayanan 24/7</h3>
                        <p class="text-gray-300 leading-relaxed">Kami siap melayani konsultasi dan pertanyaan Anda kapan saja. Tim customer service kami tersedia 24/7 untuk memberikan informasi, menjawab pertanyaan, dan memberikan solusi terbaik untuk setiap kebutuhan Anda dalam proses pembangunan rumah impian.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What Makes Us Different Section -->
<section class="bg-black text-white py-20">
    <div class="container mx-auto px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Image -->
            <div>
                <img src="/img/image-contact.jpg" alt="Modern Three-Story House" class="w-full h-auto rounded-lg">
            </div>

            <!-- Right Content -->
            <div class="space-y-8">
                <h2 class="text-4xl font-bold">
                    Apa yang Membuat Jasa Kami
                    <span class="text-yellow-400">BERBEDA</span>
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold mb-2 text-white">Desain Custom</h3>
                                <p class="text-gray-300 text-sm leading-relaxed">Setiap desain dibuat khusus sesuai kebutuhan dan keinginan klien.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold mb-2 text-white">Perencanaan Akurat</h3>
                                <p class="text-gray-300 text-sm leading-relaxed">Tim ahli kami melakukan perhitungan yang teliti dan akurat untuk setiap komponen pembangunan rumah.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold mb-2 text-white">Pelayanan Cepat</h3>
                                <p class="text-gray-300 text-sm leading-relaxed">Kami berkomitmen memberikan pelayanan yang cepat dan responsif sesuai timeline yang disepakati.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold mb-2 text-white">Tim Profesional</h3>
                                <p class="text-gray-300 text-sm leading-relaxed">Dibantu oleh tim ahli yang berpengalaman dan tersertifikasi dalam bidang konstruksi dan perencanaan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold mb-2 text-white">Analisis Mendalam</h3>
                                <p class="text-gray-300 text-sm leading-relaxed">Melakukan analisis komprehensif terhadap setiap aspek pembangunan untuk hasil yang optimal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold mb-2 text-white">Konsultasi Gratis</h3>
                                <p class="text-gray-300 text-sm leading-relaxed">Konsultasi awal gratis untuk memahami kebutuhan dan memberikan solusi terbaik.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Before Using RAB Service Section -->
<section class="bg-white text-gray-900 py-20">
    <div class="container mx-auto px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-8">
                <h2 class="text-4xl font-bold">
                    Sebelum Menggunakan
                    <span class="text-yellow-400">Jasa Pembuatan RAB</span>
                </h2>
                <p class="text-lg text-gray-600">
                    Sebelum memulai pembuatan RAB, pastikan Anda telah menyiapkan dokumen dan informasi yang diperlukan untuk mendapatkan hasil yang optimal dan akurat.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <div class="w-16 h-16 bg-yellow-400 rounded-lg flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold">Desain Arsitektur Rumah</h3>
                        <p class="text-gray-600">Desain lengkap rumah dengan denah, tampilan, dan detail arsitektur yang jelas untuk perhitungan volume yang akurat.</p>
                    </div>

                    <div class="space-y-4">
                        <div class="w-16 h-16 bg-yellow-400 rounded-lg flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold">Gambar Kerja Berkul</h3>
                        <p class="text-gray-600">Gambar kerja detail yang mencakup spesifikasi material, dimensi, dan metode pelaksanaan untuk perhitungan biaya yang tepat.</p>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div>
                <img src="/img/image-contact.jpg" alt="Calculator and Documents" class="w-full h-auto rounded-lg shadow-lg">
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
                Kami menawarkan paket layanan yang fleksibel dan terjangkau untuk memenuhi berbagai kebutuhan pembuatan RAB dan pengurusan PBG/IMB.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-white p-8 rounded-xl shadow-lg border-2 border-gray-200 hover:border-yellow-400 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-yellow-400 opacity-10 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="relative z-10">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold mb-2 text-gray-900">Paket Basic</h3>
                            <p class="text-gray-600">Paket lengkap untuk pembuatan RAB rumah sederhana dengan spesifikasi standar.</p>
                        </div>
                        <div class="text-center mb-8">
                            <div class="text-4xl font-black text-yellow-400 mb-2">Rp 2.500.000</div>
                            <div class="text-sm text-gray-500">per project</div>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center gap-3">
                                <div class="w-5 h-5 bg-yellow-400 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-gray-700">Perhitungan volume dan biaya material</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-5 h-5 bg-yellow-400 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-gray-700">Analisis harga satuan pekerjaan</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-5 h-5 bg-yellow-400 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-gray-700">Dokumen RAB lengkap dan rapi</span>
                            </li>
                        </ul>
                        <button class="w-full bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105">
                            Pilih Paket
                        </button>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg border-2 border-yellow-400 hover:border-yellow-500 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-yellow-400 opacity-20 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="absolute top-4 right-4 bg-yellow-400 text-black text-xs font-bold px-3 py-1 rounded-full">
                        POPULAR
                    </div>
                    <div class="relative z-10">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold mb-2 text-gray-900">Paket Premium</h3>
                            <p class="text-gray-600">Paket lengkap dengan pengurusan PBG/IMB dan konsultasi intensif untuk rumah dengan spesifikasi tinggi.</p>
                        </div>
                        <div class="text-center mb-8">
                            <div class="text-4xl font-black text-yellow-400 mb-2">Rp 5.000.000</div>
                            <div class="text-sm text-gray-500">per project</div>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center gap-3">
                                <div class="w-5 h-5 bg-yellow-400 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-gray-700">Semua fitur paket Basic</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-5 h-5 bg-yellow-400 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-gray-700">Pengurusan PBG/IMB lengkap</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-5 h-5 bg-yellow-400 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-gray-700">Konsultasi intensif dengan tim ahli</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-5 h-5 bg-yellow-400 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-gray-700">Revisi dan penyesuaian tanpa batas</span>
                            </li>
                        </ul>
                        <button class="w-full bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105">
                            Pilih Paket
                        </button>
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
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Kami memastikan proses pengurusan PBG/IMB berjalan lancar dan efisien dengan tim yang berpengalaman dan sistem yang terstruktur.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
            <!-- Left Column: Image -->
            <div class="relative">
                <img src="/img/image-contact.jpg" alt="Process Illustration" class="w-full h-auto rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent rounded-lg"></div>
            </div>

            <!-- Right Column: Process Steps -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Step 1 -->
                <div class="text-center border border-gray-200 p-6 rounded-lg">
                    <div class="text-4xl font-bold text-yellow-400 mb-4">01</div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Konsultasi Awal</h3>
                    <p class="text-gray-600 leading-relaxed text-sm text-justify">Diskusi kebutuhan dan konsep desain sesuai dengan budget dan keinginan klien. Tim kami akan mendengarkan visi Anda dan memberikan saran terbaik.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center border border-gray-200 p-6 rounded-lg">
                    <div class="text-4xl font-bold text-yellow-400 mb-4">02</div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Desain & RAB</h3>
                    <p class="text-gray-600 leading-relaxed text-sm text-justify">Pembuatan desain detail dan perhitungan RAB yang akurat dan transparan. Kami akan menyusun rencana anggaran yang detail dan mudah dipahami.</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center border border-gray-200 p-6 rounded-lg">
                    <div class="text-4xl font-bold text-yellow-400 mb-4">03</div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Pengurusan IMB</h3>
                    <p class="text-gray-600 leading-relaxed text-sm text-justify">Proses pengurusan surat IMB/PBG hingga selesai dan siap bangun. Kami akan mengurus semua dokumen yang diperlukan secara profesional.</p>
                </div>

                <!-- Step 4 -->
                <div class="text-center border border-gray-200 p-6 rounded-lg">
                    <div class="text-4xl font-bold text-yellow-400 mb-4">04</div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Konstruksi</h3>
                    <p class="text-gray-600 leading-relaxed text-sm text-justify">Pelaksanaan pembangunan dengan tim profesional dan material berkualitas. Setiap tahap konstruksi diawasi dengan ketat untuk memastikan kualitas.</p>
                </div>

                <!-- Step 5 -->
                <div class="text-center border border-gray-200 p-6 rounded-lg">
                    <div class="text-4xl font-bold text-yellow-400 mb-4">05</div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Serah Terima</h3>
                    <p class="text-gray-600 leading-relaxed text-sm text-justify">Penyerahan hasil pekerjaan yang sudah selesai dan sesuai dengan kesepakatan. Kami memastikan setiap detail sesuai dengan yang telah disepakati.</p>
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
                Kami menyediakan layanan pengurusan surat PBG/IMB yang lengkap dan profesional. Tim kami akan membantu mengurus semua dokumen yang diperlukan, mulai dari persiapan hingga pengajuan dan pengambilan surat. Dengan pengalaman bertahun-tahun, kami memastikan proses berjalan lancar tanpa hambatan dan selesai sampai tuntas sesuai dengan ketentuan yang berlaku.
            </p>
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
    </section>
<!-- Customer Reviews Section -->


<!-- FAQ Section -->
<section class="bg-black text-white py-20">
  <div class="container mx-auto px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
      <!-- Kiri: Card putih -->
      <div>
        <div class="bg-white rounded-xl shadow p-10 max-w-md">
          <h2 class="text-3xl font-bold text-gray-900 mb-4">Pertanyaan Umum</h2>
          <p class="text-gray-600 mb-6">Kami siap membantu menjawab pertanyaan Anda seputar layanan kami. Jika pertanyaan Anda belum terjawab, silakan hubungi kami langsung.</p>
          <a href="#contact" class="inline-block border border-gray-800 text-gray-900 px-6 py-2 rounded hover:bg-gray-100 transition">Hubungi</a>
        </div>
      </div>
      
      <!-- Kanan: FAQ Accordion -->
      <div class="space-y-4" id="faq-accordion-rab">
        <!-- FAQ Item 1 -->
        <div class="border border-gray-700 rounded-lg">
          <button type="button" 
                  class="faq-button-rab w-full flex justify-between items-center px-6 py-4 font-bold text-left text-white hover:text-yellow-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200" 
                  data-faq="1">
            <span class="text-xl">Berapa lama proses pengurusan IMB/PBG?</span>
            <svg class="faq-icon-rab w-6 h-6 transform transition-transform duration-300 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="faq-content-rab px-6 pb-4 text-gray-300 leading-relaxed" style="display: none;">
            <p class="mb-3">Proses pengurusan IMB/PBG biasanya memakan waktu 2-4 minggu, tergantung pada:</p>
            <ul class="list-disc list-inside space-y-2 text-sm">
              <li><strong>Kelengkapan Dokumen:</strong> Semakin lengkap dokumen yang diserahkan, semakin cepat prosesnya</li>
              <li><strong>Kompleksitas Bangunan:</strong> Bangunan sederhana lebih cepat diproses</li>
              <li><strong>Lokasi Proyek:</strong> Beberapa daerah memiliki prosedur yang berbeda</li>
              <li><strong>Volume Pengajuan:</strong> Waktu puncak bisa mempengaruhi kecepatan</li>
            </ul>
            <p class="mt-3">Tim kami akan memastikan semua dokumen lengkap dan sesuai standar untuk mempercepat proses pengurusan.</p>
          </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="border border-gray-700 rounded-lg">
          <button type="button" 
                  class="faq-button-rab w-full flex justify-between items-center px-6 py-4 font-bold text-left text-white hover:text-yellow-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200" 
                  data-faq="2">
            <span class="text-xl">Apakah RAB yang dibuat sudah termasuk biaya material?</span>
            <svg class="faq-icon-rab w-6 h-6 transform transition-transform duration-300 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="faq-content-rab px-6 pb-4 text-gray-300 leading-relaxed" style="display: none;">
            <p class="mb-3">Ya, RAB yang kami buat sudah mencakup semua komponen biaya secara lengkap:</p>
            <ul class="list-disc list-inside space-y-2 text-sm">
              <li><strong>Biaya Material:</strong> Semua material dari pondasi hingga finishing</li>
              <li><strong>Biaya Tenaga Kerja:</strong> Upah tukang, mandor, dan supervisor</li>
              <li><strong>Biaya Peralatan:</strong> Sewa alat berat dan peralatan konstruksi</li>
              <li><strong>Biaya Overhead:</strong> Administrasi, transportasi, dan keamanan</li>
              <li><strong>Biaya Pajak:</strong> PPN dan pajak daerah yang berlaku</li>
            </ul>
            <p class="mt-3">Kami memberikan breakdown detail untuk setiap item sehingga Anda bisa memahami alokasi anggaran dengan jelas.</p>
          </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="border border-gray-700 rounded-lg">
          <button type="button" 
                  class="faq-button-rab w-full flex justify-between items-center px-6 py-4 font-bold text-left text-white hover:text-yellow-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200" 
                  data-faq="3">
            <span class="text-xl">Bagaimana jika ada perubahan desain di tengah proses?</span>
            <svg class="faq-icon-rab w-6 h-6 transform transition-transform duration-300 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="faq-content-rab px-6 pb-4 text-gray-300 leading-relaxed" style="display: none;">
            <p class="mb-3">Kami sangat fleksibel dalam menangani perubahan desain. Berikut kebijakan kami:</p>
            <ul class="list-disc list-inside space-y-2 text-sm">
              <li><strong>Perubahan Minor:</strong> Perubahan kecil tidak dikenakan biaya tambahan</li>
              <li><strong>Perubahan Mayor:</strong> Perubahan signifikan akan dihitung ulang RAB</li>
              <li><strong>Timeline:</strong> Perubahan bisa mempengaruhi jadwal pengerjaan</li>
              <li><strong>Komunikasi:</strong> Setiap perubahan akan didiskusikan terlebih dahulu</li>
            </ul>
            <p class="mt-3">Tim kami akan memberikan solusi terbaik untuk setiap perubahan yang Anda inginkan.</p>
          </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="border border-gray-700 rounded-lg">
          <button type="button" 
                  class="faq-button-rab w-full flex justify-between items-center px-6 py-4 font-bold text-left text-white hover:text-yellow-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200" 
                  data-faq="4">
            <span class="text-xl">Apakah ada garansi untuk hasil pekerjaan?</span>
            <svg class="faq-icon-rab w-6 h-6 transform transition-transform duration-300 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="faq-content-rab px-6 pb-4 text-gray-300 leading-relaxed" style="display: none;">
            <p class="mb-3">Ya, kami memberikan garansi komprehensif untuk semua pekerjaan kami:</p>
            <ul class="list-disc list-inside space-y-2 text-sm">
              <li><strong>Garansi Konstruksi:</strong> 5 tahun untuk struktur bangunan</li>
              <li><strong>Garansi Finishing:</strong> 2 tahun untuk pekerjaan finishing</li>
              <li><strong>Garansi Instalasi:</strong> 1 tahun untuk instalasi listrik dan air</li>
              <li><strong>Garansi Material:</strong> Sesuai garansi pabrik material</li>
              <li><strong>Layanan Purna Jual:</strong> Konsultasi dan perbaikan gratis</li>
            </ul>
            <p class="mt-3">Kami berkomitmen memberikan kualitas terbaik dan siap memperbaiki jika ada masalah dalam masa garansi.</p>
          </div>
        </div>

        <!-- FAQ Item 5 -->
        <div class="border border-gray-700 rounded-lg">
          <button type="button" 
                  class="faq-button-rab w-full flex justify-between items-center px-6 py-4 font-bold text-left text-white hover:text-yellow-400 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200" 
                  data-faq="5">
            <span class="text-xl">Bagaimana cara memulai kerja sama dengan tim Anda?</span>
            <svg class="faq-icon-rab w-6 h-6 transform transition-transform duration-300 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="faq-content-rab px-6 pb-4 text-gray-300 leading-relaxed" style="display: none;">
            <p class="mb-3">Memulai kerja sama dengan kami sangat mudah. Berikut langkah-langkahnya:</p>
            <ul class="list-disc list-inside space-y-2 text-sm">
              <li><strong>Konsultasi Awal:</strong> Hubungi kami untuk diskusi kebutuhan proyek</li>
              <li><strong>Survey Lokasi:</strong> Tim kami akan melihat lokasi proyek</li>
              <li><strong>Penawaran:</strong> Kami akan memberikan penawaran detail</li>
              <li><strong>Kesepakatan:</strong> Jika setuju, kami buat kontrak kerja</li>
              <li><strong>Eksekusi:</strong> Proyek dimulai sesuai timeline yang disepakati</li>
            </ul>
            <p class="mt-3">Kami siap membantu Anda dari awal hingga akhir proyek dengan pelayanan profesional dan berkualitas.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Other Services Section -->
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
                        melalui proses desain, perencanaan anggaran, hingga eksekusi pembangunan yang sempurna.
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
                    <div class="space-y-4" id="other-services-accordion">
                        <!-- Service Item 1 -->
                        <div class="border border-gray-300 rounded-lg">
                            <button type="button" 
                                    class="other-service-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-black hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200" 
                                    data-service="1">
                                <span class="text-lg">Apakah jasa RAB mencakup perhitungan material dan tenaga kerja?</span>
                                <svg class="other-service-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="other-service-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                                <p class="mb-3">Ya, RAB yang kami buat sangat komprehensif dan mencakup:</p>
                                <ul class="list-disc list-inside space-y-2 text-sm">
                                    <li><strong>Material:</strong> Semua material dari pondasi hingga finishing</li>
                                    <li><strong>Tenaga Kerja:</strong> Upah tukang, mandor, dan supervisor</li>
                                    <li><strong>Peralatan:</strong> Sewa alat berat dan peralatan konstruksi</li>
                                    <li><strong>Overhead:</strong> Administrasi, transportasi, dan keamanan</li>
                                    <li><strong>Pajak:</strong> PPN dan pajak daerah yang berlaku</li>
                                </ul>
                                <p class="mt-3">Kami memberikan breakdown detail untuk setiap item sehingga Anda bisa memahami alokasi anggaran dengan jelas.</p>
                            </div>
                        </div>

                        <!-- Service Item 2 -->
                        <div class="border border-gray-300 rounded-lg">
                            <button type="button" 
                                    class="other-service-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-black hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200" 
                                    data-service="2">
                                <span class="text-lg">Bagaimana proses pengurusan PBG/IMB yang dilakukan?</span>
                                <svg class="other-service-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="other-service-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                                <p class="mb-3">Proses pengurusan PBG/IMB kami lakukan secara sistematis:</p>
                                <ul class="list-disc list-inside space-y-2 text-sm">
                                    <li><strong>Persiapan Dokumen:</strong> KTP, Sertifikat tanah, PBB, dan dokumen pendukung</li>
                                    <li><strong>Survey Lokasi:</strong> Tim kami akan melakukan survey dan pengukuran</li>
                                    <li><strong>Pembuatan Gambar:</strong> Denah, tampak, dan potongan sesuai standar</li>
                                    <li><strong>Pengajuan ke Dinas:</strong> Kami urus semua proses administrasi</li>
                                    <li><strong>Follow Up:</strong> Monitoring progress hingga selesai</li>
                                </ul>
                                <p class="mt-3">Kami akan memberikan update progress secara berkala dan memastikan semua dokumen selesai tepat waktu.</p>
                            </div>
                        </div>

                        <!-- Service Item 3 -->
                        <div class="border border-gray-300 rounded-lg">
                            <button type="button" 
                                    class="other-service-button w-full flex justify-between items-center px-6 py-4 font-semibold text-left text-black hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-inset transition-colors duration-200" 
                                    data-service="3">
                                <span class="text-lg">Apakah ada layanan konsultasi gratis sebelum memulai proyek?</span>
                                <svg class="other-service-icon w-6 h-6 transform transition-transform duration-300 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="other-service-content px-6 pb-4 text-gray-600 leading-relaxed" style="display: none;">
                                <p class="mb-3">Ya, kami menyediakan layanan konsultasi gratis untuk membantu Anda:</p>
                                <ul class="list-disc list-inside space-y-2 text-sm">
                                    <li><strong>Konsultasi Awal:</strong> Diskusi kebutuhan dan konsep desain</li>
                                    <li><strong>Survey Lokasi:</strong> Analisis kondisi tanah dan lingkungan</li>
                                    <li><strong>Estimasi Budget:</strong> Perkiraan biaya awal proyek</li>
                                    <li><strong>Timeline Proyek:</strong> Perkiraan waktu pengerjaan</li>
                                    <li><strong>Rekomendasi Material:</strong> Saran material yang sesuai budget</li>
                                </ul>
                                <p class="mt-3">Konsultasi ini membantu Anda memahami scope pekerjaan dan membuat keputusan yang tepat sebelum memulai proyek.</p>
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
            melalui proses desain, perencanaan anggaran, hingga eksekusi pembangunan yang sempurna.
        </p>
        <button class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-10 py-4 rounded-lg text-lg transition-all duration-300">
            Hubungi Kami
        </button>
    </div>
</section>


@include('components.footer')
</div>

<script>
// FAQ Accordion functionality for RAB/PBG page
document.addEventListener('DOMContentLoaded', function() {
    const faqButtons = document.querySelectorAll('.faq-button-rab');
    let currentlyOpen = null;

    faqButtons.forEach(button => {
        button.addEventListener('click', function() {
            const faqItem = this.closest('.border');
            const content = faqItem.querySelector('.faq-content-rab');
            const icon = this.querySelector('.faq-icon-rab');
            
            // If clicking the same item that's already open, close it
            if (content.style.display === 'block') {
                content.style.display = 'none';
                icon.style.transform = 'rotate(0deg)';
                currentlyOpen = null;
            } else {
                // Close currently open item if any
                if (currentlyOpen) {
                    currentlyOpen.style.display = 'none';
                    currentlyOpen.closest('.border').querySelector('.faq-icon-rab').style.transform = 'rotate(0deg)';
                }
                
                // Open clicked item
                content.style.display = 'block';
                icon.style.transform = 'rotate(180deg)';
                currentlyOpen = content;
            }
        });
    });

    // Other Services Accordion functionality
    const otherServiceButtons = document.querySelectorAll('.other-service-button');
    let currentlyOpenService = null;

    otherServiceButtons.forEach(button => {
        button.addEventListener('click', function() {
            const serviceItem = this.closest('.border');
            const content = serviceItem.querySelector('.other-service-content');
            const icon = this.querySelector('.other-service-icon');
            
            // If clicking the same item that's already open, close it
            if (content.style.display === 'block') {
                content.style.display = 'none';
                icon.style.transform = 'rotate(0deg)';
                currentlyOpenService = null;
            } else {
                // Close currently open item if any
                if (currentlyOpenService) {
                    currentlyOpenService.style.display = 'none';
                    currentlyOpenService.closest('.border').querySelector('.other-service-icon').style.transform = 'rotate(0deg)';
                }
                
                // Open clicked item
                content.style.display = 'block';
                icon.style.transform = 'rotate(180deg)';
                currentlyOpenService = content;
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

