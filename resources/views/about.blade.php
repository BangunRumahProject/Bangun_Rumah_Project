<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Bangun Rancang Desain Rumah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('components.styles')
</head>

<body class="bg-black font-sans">
    @include('components.header')

    <!-- About Hero Section -->
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
                <div class="space-y-4 sm:space-y-6 fade-in">
                    <!-- Main Title -->
                    <div class="space-y-2 sm:space-y-4">
                        <h1
                            class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-black text-yellow-400 leading-tight text-gradient">
                            Tentang Kami
                        </h1>
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-white leading-tight">
                            Bangun Rumah Project
                        </h2>
                    </div>

                    <!-- Description -->
                    <div class="space-y-4 sm:space-y-6 max-w-xl">
                        <p class="text-white text-lg sm:text-xl lg:text-2xl leading-relaxed font-medium">
                            Kami adalah tim profesional yang berdedikasi untuk menghadirkan solusi arsitektur dan
                            konstruksi terbaik untuk hunian impian Anda.
                        </p>

                        <p class="text-gray-200 text-base sm:text-lg lg:text-xl leading-relaxed">
                            Dengan pengalaman bertahun-tahun dalam industri konstruksi, kami memahami bahwa setiap
                            proyek adalah unik dan memerlukan pendekatan yang personal.
                        </p>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-4 sm:gap-6 pt-6 sm:pt-8">
                        <div class="text-center">
                            <div class="text-2xl sm:text-3xl font-bold text-yellow-400 counter-animation">100+</div>
                            <div class="text-xs sm:text-sm text-gray-300">Proyek Selesai</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl sm:text-3xl font-bold text-yellow-400 counter-animation">50+</div>
                            <div class="text-xs sm:text-sm text-gray-300">Klien Puas</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl sm:text-3xl font-bold text-yellow-400 counter-animation">5+</div>
                            <div class="text-xs sm:text-sm text-gray-300">Tahun Pengalaman</div>
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
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission Section -->
    <section class="relative w-full min-h-screen bg-black text-white py-8 sm:py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center">

                <!-- Left Content -->
                <div class="space-y-6 sm:space-y-8 fade-in">
                    <!-- Main Title -->
                    <div class="space-y-4">
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight">
                            Visi & <span class="text-yellow-400">Misi</span>
                        </h2>
                        <p class="text-gray-300 text-sm sm:text-base lg:text-lg leading-relaxed max-w-2xl">
                            Kami berkomitmen untuk menghadirkan solusi arsitektur dan konstruksi yang inovatif,
                            berkelanjutan, dan sesuai dengan kebutuhan klien.
                        </p>
                    </div>

                    <!-- Vision Mission Section -->
                    <div class="space-y-4 sm:space-y-6">
                        <div class="space-y-3 sm:space-y-4">
                            <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-yellow-400">
                                Visi Kami
                            </h3>
                            <p class="text-gray-300 leading-relaxed text-sm sm:text-base">
                                Menjadi mitra terpercaya dalam menghadirkan hunian berkualitas tinggi yang menggabungkan
                                estetika, fungsionalitas, dan keberlanjutan.
                            </p>
                        </div>

                        <div class="space-y-3 sm:space-y-4">
                            <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-yellow-400">
                                Misi Kami
                            </h3>
                            <div class="space-y-3 sm:space-y-4">
                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-yellow-400 rounded-full mt-2 flex-shrink-0 pulse-dot"></div>
                                    <p class="text-gray-300 leading-relaxed text-sm sm:text-base">
                                        Menghadirkan desain arsitektur yang inovatif dan sesuai dengan gaya hidup
                                        modern.
                                    </p>
                                </div>

                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-yellow-400 rounded-full mt-2 flex-shrink-0 pulse-dot"
                                        style="animation-delay: 0.5s;"></div>
                                    <p class="text-gray-300 leading-relaxed text-sm sm:text-base">
                                        Menggunakan material berkualitas tinggi dan teknologi konstruksi terkini.
                                    </p>
                                </div>

                                <div class="flex items-start space-x-3">
                                    <div class="w-2 h-2 bg-yellow-400 rounded-full mt-2 flex-shrink-0 pulse-dot"
                                        style="animation-delay: 1s;"></div>
                                    <p class="text-gray-300 leading-relaxed text-sm sm:text-base">
                                        Memberikan pelayanan terbaik dan kepuasan maksimal kepada setiap klien.
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
                            alt="Visi Misi" class="w-full h-full object-cover">
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

    @include('components.footer')
    @include('components.scripts')
</body>

</html>
