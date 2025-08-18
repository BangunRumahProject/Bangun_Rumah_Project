@extends('layouts.app')

@section('title', 'Portofolio - Bangun Rumah Project')

@section('styles')
@include('components.styles')
@endsection

@section('content')
@include('components.navbar')
    {{-- Hero Section --}}
    <section class="pt-28 pb-16 relative min-h-[420px] flex items-end bg-center bg-cover" style="background-image: linear-gradient(rgba(0,0,0,0.45), rgba(0, 0, 0, 0.52)), url('{{ asset('img/siang3.jpg') }}');">
        <div class="w-full px-16 md:px-24 lg:px-32 pt-16 pb-8 text-left relative z-10">
            <div class="flex flex-col justify-center pb-16">
                <h1 class="text-5xl md:text-7xl font-bold text-yellow-400 mb-4 drop-shadow-lg animate-fade-in-up">
                    Portofolio
                </h1>
                <p class="text-white max-w-2xl mb-6 drop-shadow text-lg leading-relaxed animate-fade-in-up delay-200">
                    Dengan pengalaman lebih dari 10 tahun, kami telah sukses mengerjakan berbagai proyek bangun rumah,
                    renovasi, desain interior yang unik, modern, dan inovatif.
                </p>
                
            </div>
        </div>
    </section>

    {{-- Portfolio Grid Section --}}
    <section class="py-16 bg-gradient-to-br from-gray-100 via-white to-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                    Koleksi Portfolio Kami
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Jelajahi berbagai project bangun rumah, renovasi, dan desain interior yang telah kami kerjakan dengan
                    dedikasi dan keahlian tinggi.
                </p>
                <div class="w-24 h-1 bg-yellow-400 mx-auto mt-6 rounded-full"></div>
            </div>

            <!-- Portfolio Grid 3x3 -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6" id="portfolio-grid">
                @forelse($portfolios as $portfolio)
                    <div class="portfolio-item bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer"
                        data-category="{{ $portfolio->category }}" onclick="showPortfolioDetails({{ $portfolio->id }})">
                        <!-- Portfolio Image Container -->
                        <div class="relative overflow-hidden group">
                            <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}"
                                class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">

                            <!-- Overlay with Portfolio Info -->
                            <div
                                class="absolute inset-0 bg-black bg-opacity-30 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <div class="text-center text-white p-4">
                                    <h3 class="text-xl font-bold mb-2 text-shadow">{{ $portfolio->title }}</h3>
                                    <p class="text-sm text-shadow">{{ ucfirst($portfolio->category) }}</p>
                                    @if ($portfolio->location)
                                        <p class="text-xs mt-1 text-shadow">{{ $portfolio->location }}</p>
                                    @endif
                                    <p class="text-xs mt-2 text-yellow-400 font-semibold text-shadow">Klik untuk detail</p>
                                </div>
                            </div>

                            <!-- Status Badge -->
                            <div class="absolute top-3 right-3">
                                <span
                                    class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium 
                            {{ $portfolio->status === 'completed'
                                ? 'bg-green-500 text-white'
                                : ($portfolio->status === 'ongoing'
                                    ? 'bg-yellow-500 text-black'
                                    : 'bg-gray-500 text-white') }}">
                                    {{ ucfirst($portfolio->status) }}
                                </span>
                            </div>

                            <!-- Featured Badge -->
                            @if ($portfolio->is_featured)
                                <div class="absolute top-3 left-3">
                                    <span
                                        class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-500 text-black">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.118 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                        Featured
                                    </span>
                                </div>
                            @endif
                        </div>

                        <!-- Portfolio Details -->
                        <div class="p-4 bg-white">
                            <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $portfolio->title }}</h3>
                            <p class="text-gray-600 text-sm mb-3">{{ Str::limit($portfolio->description, 80) }}</p>

                            <!-- Portfolio Meta -->
                            <div class="flex items-center justify-between text-xs text-gray-500">
                                <span class="inline-flex items-center px-2 py-1 rounded-full bg-gray-100 text-gray-700">
                                    {{ ucfirst($portfolio->category) }}
                                </span>
                                @if ($portfolio->year)
                                    <span>{{ $portfolio->year }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Empty State - Show 9 placeholder boxes -->
                    @for ($i = 1; $i <= 9; $i++)
                        <div class="portfolio-placeholder bg-gray-200 rounded-lg h-64 flex items-center justify-center">
                            <div class="text-center text-gray-500">
                                <svg class="mx-auto h-12 w-12 mb-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <p class="text-sm">Portfolio {{ $i }}</p>
                                <p class="text-xs">Belum ada konten</p>
                            </div>
                        </div>
                    @endfor
                @endforelse
            </div>

            <!-- Filter Buttons -->
            <div class="mt-12 text-center">
                <div class="flex flex-wrap justify-center gap-4">
                    <button
                        class="filter-btn active px-6 py-3 rounded-full bg-yellow-400 text-black font-semibold hover:bg-yellow-500 transition-all duration-300 shadow-lg"
                        data-category="all">
                        Semua
                    </button>
                    <button
                        class="filter-btn px-6 py-3 rounded-full bg-gray-700 text-white font-semibold hover:bg-gray-600 transition-all duration-300 shadow-lg"
                        data-category="rumah">
                        Rumah
                    </button>
                    <button
                        class="filter-btn px-6 py-3 rounded-full bg-gray-700 text-white font-semibold hover:bg-gray-600 transition-all duration-300 shadow-lg"
                        data-category="interior">
                        Interior
                    </button>
                    <button
                        class="filter-btn px-6 py-3 rounded-full bg-gray-700 text-white font-semibold hover:bg-gray-600 transition-all duration-300 shadow-lg"
                        data-category="eksterior">
                        Eksterior
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Detail Modal -->
    <div id="portfolio-modal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-2xl max-w-7xl w-full max-h-[95vh] overflow-y-auto shadow-2xl">
                <!-- Header with Logo and Close Button -->
                <div class="sticky top-0 bg-white border-b border-gray-200 px-8 py-6 rounded-t-2xl shadow-sm z-10">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img src="/img/logo-brp.png" alt="BRP Logo" class="h-10 w-auto">
                            </div>
                            <div class="flex flex-col">
                                <h2 id="modal-title" class="text-2xl font-bold text-gray-900 leading-tight"></h2>
                                <p class="text-sm text-gray-500 font-medium">Bangun Rumah Project</p>
                            </div>
                        </div>
                        <button onclick="closePortfolioModal()"
                            class="flex-shrink-0 p-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-full transition-all duration-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="px-8 py-6 relative z-0">
                    <div id="modal-content" class="space-y-8">
                        <!-- Content will be loaded here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const category = this.dataset.category;

                    // Update active button
                    filterBtns.forEach(b => {
                        b.classList.remove('active', 'bg-yellow-400', 'text-black');
                        b.classList.add('bg-gray-700', 'text-white');
                    });
                    this.classList.add('active', 'bg-yellow-400', 'text-black');
                    this.classList.remove('bg-gray-700');

                    // Filter items
                    portfolioItems.forEach(item => {
                        if (category === 'all' || item.dataset.category === category) {
                            item.style.display = 'block';
                            item.style.animation = 'fadeIn 0.5s ease-in-out';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });

        // Portfolio modal functionality with AJAX
        function showPortfolioDetails(portfolioId) {
            console.log('Opening portfolio details for ID:', portfolioId);

            // Show loading state
            document.getElementById('modal-title').textContent = 'Loading...';
            document.getElementById('modal-content').innerHTML = `
        <div class="flex justify-center items-center py-12">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-yellow-400"></div>
        </div>
    `;
            document.getElementById('portfolio-modal').classList.remove('hidden');

            // Fetch portfolio details via AJAX
            fetch(`/api/portfolios/${portfolioId}`)
                .then(response => response.json())
                .then(data => {
                    console.log('Portfolio data received:', data);
                    if (data.success) {
                        const portfolio = data.portfolio;
                        displayPortfolioDetails(portfolio);
                    } else {
                        showError('Gagal memuat detail portfolio');
                    }
                })
                .catch(error => {
                    console.error('Error fetching portfolio:', error);
                    showError('Terjadi kesalahan saat memuat data');
                });
        }

        function displayPortfolioDetails(portfolio) {
            console.log('Displaying portfolio details:', portfolio);
            console.log('Portfolio images:', portfolio.images);

            document.getElementById('modal-title').textContent = portfolio.title;

            const content = `
        <!-- Portfolio Images Grid 3x3 -->
        <div class="mb-8">
            <div class="flex items-center mb-6">
                <div class="w-10 h-10 bg-yellow-400 rounded-xl flex items-center justify-center mr-4 shadow-lg">
                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900">Galeri Project</h3>
                    <p class="text-gray-500 text-sm font-medium">Kumpulan foto dokumentasi project</p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-6 mb-6">
                ${portfolio.images && portfolio.images.length > 0 ? 
                    portfolio.images.map((img, index) => {
                        console.log('Processing image:', img);
                        return `
                                                                                        <div class="portfolio-image-container relative group cursor-pointer transform hover:scale-105 transition-all duration-300" onclick="showImageDetail('${img.image}', '${img.title || ''}', '${img.description || ''}')">
                                                                                            <img src="/storage/${img.image}" alt="${img.title || 'Portfolio Image'}" 
                                                                                                 class="portfolio-image">
                                                                                            <div class="image-hover-overlay">
                                                                                                <div class="text-center text-white font-semibold">
                                                                                                    <svg class="w-8 h-8 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                                                                                                    </svg>
                                                                                                    <p class="text-sm font-semibold">Klik untuk detail</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    `;
                    }).join('') :
                    // Fallback: show 9 placeholder images if no images exist
                    Array.from({length: 9}, (_, i) => ` <
                div class =
                "bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl h-48 flex items-center justify-center shadow-lg" >
                <
                div class = "text-center text-gray-500" >
                <
                svg class = "w-12 h-12 mx-auto mb-2"
            fill = "none"
            stroke = "currentColor"
            viewBox = "0 0 24 24" >
                <
                path stroke - linecap = "round"
            stroke - linejoin = "round"
            stroke - width = "2"
            d = "M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /
                >
                <
                /svg> <
            p class = "text-xs" > Image $ {
                i + 1
            } < /p> < /
            div > <
                /div>
            `).join('')
                }
            </div>
        </div>

        <!-- Project Description Section -->
        <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-2xl p-8 shadow-xl">
            <div class="flex items-center mb-8">
                <div class="w-12 h-12 bg-yellow-400 rounded-xl flex items-center justify-center mr-4 shadow-lg">
                    <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-3xl font-bold text-gray-900">Deskripsi Project</h3>
                    <p class="text-gray-500 text-sm font-medium">Detail lengkap tentang project ini</p>
                </div>
            </div>
            
            <div class="prose prose-lg max-w-none">
                <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm mb-8">
                    <p class="text-gray-700 leading-relaxed text-lg font-medium">
                        ${portfolio.description}
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <svg class="w-5 h-5 text-yellow-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Fitur Utama
                        </h4>
                        <div class="space-y-3">
                            ${portfolio.features && portfolio.features.length > 0 ? 
                                portfolio.features.map(feature => `
                                            <div class="flex items-start">
                                                <div class="w-3 h-3 bg-yellow-400 rounded-full mr-3 mt-2 flex-shrink-0 shadow-sm"></div>
                                                <span class="text-gray-700 font-medium">${feature}</span>
                                            </div>
                                        `).join('') :
                                // Fallback jika tidak ada fitur
                                `
                                        <div class="flex items-start">
                                            <div class="w-3 h-3 bg-yellow-400 rounded-full mr-3 mt-2 flex-shrink-0 shadow-sm"></div>
                                            <span class="text-gray-700 font-medium">Konsep modern minimalis yang ceria dan menyegarkan</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-3 h-3 bg-yellow-400 rounded-full mr-3 mt-2 flex-shrink-0 shadow-sm"></div>
                                            <span class="text-gray-700 font-medium">Kombinasi warna yang harmonis dan elegan</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-3 h-3 bg-yellow-400 rounded-full mr-3 mt-2 flex-shrink-0 shadow-sm"></div>
                                            <span class="text-gray-700 font-medium">Material berkualitas tinggi dan tahan lama</span>
                                        </div>
                                        `
                            }
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <svg class="w-5 h-5 text-yellow-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            Keunggulan
                        </h4>
                        <div class="space-y-3">
                            ${portfolio.advantages && portfolio.advantages.length > 0 ? 
                                portfolio.advantages.map(advantage => `
                                            <div class="flex items-start">
                                                <div class="w-3 h-3 bg-yellow-400 rounded-full mr-3 mt-2 flex-shrink-0 shadow-sm"></div>
                                                <span class="text-gray-700 font-medium">${advantage}</span>
                                            </div>
                                        `).join('') :
                                // Fallback jika tidak ada keunggulan
                                `
                                        <div class="flex items-start">
                                            <div class="w-3 h-3 bg-yellow-400 rounded-full mr-3 mt-2 flex-shrink-0 shadow-sm"></div>
                                            <span class="text-gray-700 font-medium">Pengerjaan profesional dan teliti</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-3 h-3 bg-yellow-400 rounded-full mr-3 mt-2 flex-shrink-0 shadow-sm"></div>
                                            <span class="text-gray-700 font-medium">Garansi kualitas dan kepuasan</span>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-3 h-3 bg-yellow-400 rounded-full mr-3 mt-2 flex-shrink-0 shadow-sm"></div>
                                            <span class="text-gray-700 font-medium">Tim ahli berpengalaman</span>
                                        </div>
                                        `
                            }
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Details -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-yellow-100 rounded-xl flex items-center justify-center mr-3 shadow-sm">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 text-lg">Kategori</h4>
                </div>
                <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-yellow-100 text-yellow-800 shadow-sm">
                    ${portfolio.category.charAt(0).toUpperCase() + portfolio.category.slice(1)}
                </span>
            </div>
            
            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-yellow-100 rounded-xl flex items-center justify-center mr-3 shadow-sm">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 text-lg">Status</h4>
                </div>
                <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-semibold bg-yellow-100 text-yellow-800 shadow-sm">
                    ${portfolio.status.charAt(0).toUpperCase() + portfolio.status.slice(1)}
                </span>
            </div>
            
            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-yellow-100 rounded-xl flex items-center justify-center mr-3 shadow-sm">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 text-lg">Tahun</h4>
                </div>
                <p class="text-gray-900 font-semibold text-lg">${portfolio.year || 'N/A'}</p>
            </div>
        </div>

        ${portfolio.location ? `
                                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                                        <div class="flex items-center mb-4">
                                            <div class="w-10 h-10 bg-yellow-100 rounded-xl flex items-center justify-center mr-3 shadow-sm">
                                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                </svg>
                                            </div>
                                            <h4 class="font-bold text-gray-900 text-lg">Lokasi</h4>
                                        </div>
                                        <p class="text-gray-900 font-semibold text-lg">${portfolio.location}</p>
                                    </div>
                                ` : ''}

        ${portfolio.area ? `
                                    <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                                        <div class="flex items-center mb-4">
                                            <div class="w-10 h-10 bg-yellow-100 rounded-xl flex items-center justify-center mr-3 shadow-sm">
                                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                                                </svg>
                                            </div>
                                            <h4 class="font-bold text-gray-900 text-lg">Luas Area</h4>
                                        </div>
                                        <p class="text-gray-900 font-semibold text-lg">${portfolio.area} m²</p>
                                    </div>
                                ` : ''}
    `;

            document.getElementById('modal-content').innerHTML = content;
        }

        function showImageDetail(imagePath, title, description) {
            console.log('showImageDetail called with:', {
                imagePath,
                title,
                description
            });

            // Validate parameters
            if (!imagePath) {
                console.error('No image path provided');
                return;
            }

            // Create a simple image detail modal with higher z-index
            const modal = document.createElement('div');
            modal.className = 'fixed inset-0 bg-black bg-opacity-95 z-[60] flex items-center justify-center p-4';
            modal.innerHTML = `
        <div class="relative max-w-4xl w-full bg-white rounded-2xl p-8 shadow-2xl">
            <button onclick="this.parentElement.parentElement.remove()" class="absolute top-6 right-6 text-black hover:text-yellow-600 z-10 bg-yellow-400 p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            <img src="/storage/${imagePath}" alt="${title || 'Portfolio Image'}" class="w-full h-auto max-h-[70vh] object-contain rounded-xl shadow-lg" onerror="this.onerror=null; this.src='/img/placeholder-image.jpg'; console.error('Failed to load image:', imagePath);">
            ${title ? `<h3 class="text-black text-2xl font-bold mt-6 text-center">${title}</h3>` : ''}
            ${description ? `<p class="text-black text-center mt-3 text-lg">${description}</p>` : ''}
        </div>
    `;

            // Add to DOM
            document.body.appendChild(modal);
            console.log('Image detail modal created and added to DOM');

            // Close on click outside
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    console.log('Closing modal by clicking outside');
                    this.remove();
                }
            });

            // Add escape key listener
            const escapeHandler = function(e) {
                if (e.key === 'Escape') {
                    console.log('Closing modal with Escape key');
                    modal.remove();
                    document.removeEventListener('keydown', escapeHandler);
                }
            };
            document.addEventListener('keydown', escapeHandler);
        }

        function showError(message) {
            document.getElementById('modal-title').textContent = 'Error';
            document.getElementById('modal-content').innerHTML = `
        <div class="text-center py-12 bg-black text-white rounded-2xl p-8 shadow-2xl">
            <svg class="mx-auto h-16 w-16 text-yellow-400 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z"/>
            </svg>
            <p class="text-xl text-gray-300 mb-6">${message}</p>
            <button onclick="closePortfolioModal()" class="bg-yellow-400 text-black px-8 py-3 rounded-xl hover:bg-yellow-500 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Tutup
            </button>
        </div>
    `;
        }

        function closePortfolioModal() {
            document.getElementById('portfolio-modal').classList.add('hidden');
        }

        // Close modal when clicking outside
        document.getElementById('portfolio-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closePortfolioModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closePortfolioModal();
            }
        });
    </script>
<a href="https://wa.me/6285333353609?text=Halo%2C%20saya%20tertarik%20untuk%20konsultasi%20rancang%20bangun%20rumah"
   target="_blank"
   class="fixed bottom-8 right-8 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition transform hover:scale-110 z-50"
   title="Chat via WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-8 h-8 fill-current">
        <path d="M16 0C7.163 0 0 6.92 0 15.44c0 2.72.775 5.37 2.237 7.68L0 32l9.13-2.388A15.9 15.9 0 0016 30.88c8.837 0 16-6.92 16-15.44S24.837 0 16 0zm0 28.48a12.48 12.48 0 01-6.46-1.76l-.463-.275-5.42 1.417 1.45-5.18-.3-.5A12.13 12.13 0 013.52 15.44c0-6.657 5.77-12.08 12.88-12.08 3.44 0 6.677 1.315 9.107 3.702a12.42 12.42 0 013.773 8.378c0 6.657-5.77 12.08-12.88 12.08zm7.057-8.807c-.387-.193-2.283-1.127-2.636-1.253-.353-.127-.61-.193-.867.193-.257.386-.993 1.253-1.217 1.507-.223.257-.45.29-.837.097-.387-.193-1.633-.598-3.11-1.905-1.148-1.015-1.922-2.27-2.145-2.656-.223-.386-.023-.594.17-.787.175-.174.387-.45.58-.676.193-.226.257-.386.387-.644.127-.257.064-.48-.032-.674-.096-.193-.867-2.086-1.19-2.857-.314-.754-.634-.65-.867-.66l-.74-.013c-.257 0-.674.096-1.03.48-.353.386-1.354 1.322-1.354 3.223 0 1.902 1.385 3.737 1.58 3.993.193.257 2.728 4.17 6.606 5.847.925.4 1.645.639 2.205.816.926.295 1.77.253 2.435.154.743-.111 2.283-.932 2.605-1.83.322-.898.322-1.667.225-1.83-.096-.161-.353-.257-.74-.45z"/>
    </svg>
</a>

    <style>
        .portfolio-item {
            transition: all 0.3s ease;
        }

        .portfolio-item:hover {
            transform: translateY(-8px);
        }

        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

        .filter-btn.active {
            background-color: #F59E0B;
            color: black;
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);
        }

        .filter-btn:not(.active) {
            background-color: #374151;
            color: white;
            box-shadow: 0 4px 15px rgba(55, 65, 81, 0.3);
        }

        .filter-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .portfolio-placeholder {
            animation: fadeIn 0.5s ease-in-out;
        }

        /* Custom scrollbar for modal */
        #portfolio-modal .bg-white::-webkit-scrollbar {
            width: 6px;
        }

        #portfolio-modal .bg-white::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }

        #portfolio-modal .bg-white::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 3px;
        }

        #portfolio-modal .bg-white::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Hover effect for portfolio items */
        .portfolio-item:hover {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        /* Image grid hover effects */
        .grid img {
            transition: all 0.3s ease;
        }

        .grid img:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* Portfolio detail modal styling */
        .portfolio-image-container {
            background: linear-gradient(135deg, #ffffff 0%, #fefefe 100%);
            border-radius: 1rem;
            padding: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            position: relative;
            cursor: pointer;
        }

        .portfolio-image-container:hover {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(245, 158, 11, 0.3);
        }

        /* Ensure images are always visible */
        .portfolio-image {
            width: 100%;
            height: 12rem;
            object-fit: cover;
            border-radius: 0.75rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        /* Hover overlay for images */
        .image-hover-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.8);
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: none;
        }

        .portfolio-image-container:hover .image-hover-overlay {
            opacity: 1;
        }

        /* Ensure modal header stays on top */
        #portfolio-modal .sticky {
            z-index: 20 !important;
        }

        /* Ensure modal content doesn't overlap header */
        #portfolio-modal .px-8 {
            z-index: 1;
        }

        /* Portfolio modal z-index */
        #portfolio-modal {
            z-index: 50 !important;
        }

        /* Image detail modal should be above portfolio modal */
        .image-detail-modal {
            z-index: 60 !important;
        }

        /* Header styling improvements */
        #portfolio-modal .sticky {
            backdrop-filter: blur(8px);
            background-color: rgba(255, 255, 255, 0.95);
        }

        /* Smooth transitions for header elements */
        #portfolio-modal .sticky * {
            transition: all 0.2s ease;
        }

        /* Make sure click events work */
        .portfolio-image-container * {
            pointer-events: none;
        }

        .portfolio-image-container {
            pointer-events: auto;
        }

        /* Ensure portfolio image container is clickable */
        .portfolio-image-container {
            cursor: pointer;
            position: relative;
            z-index: 5;
        }

        /* Ensure hover overlay doesn't block clicks */
        .image-hover-overlay {
            pointer-events: none;
            z-index: 6;
        }
    </style>
@include('components.footer')
@endsection

@section('scripts')
@include('components.scripts')
@endsection

