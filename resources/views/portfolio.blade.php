@extends('layouts.app')

@section('title', 'Portfolio - Bangun Rumah Project')

@section('styles')
@include('components.styles')
@endsection

@section('content')
@include('components.navbar')
    {{-- Hero Section --}}
    <section class="pt-28 pb-16 bg-black relative min-h-[400px] flex items-end">
        <div class="w-full px-16 md:px-24 lg:px-32 pt-16 pb-8 text-left">
            <div class="flex flex-col justify-center pb-16">
                <h1 class="text-5xl md:text-7xl font-bold text-yellow-400 mb-4 drop-shadow-lg animate-fade-in-up">
                    Portofolio
                </h1>
                <p class="text-white max-w-2xl mb-6 drop-shadow text-lg leading-relaxed animate-fade-in-up delay-200">
                    Dengan pengalaman lebih dari 10 tahun, kami telah sukses mengerjakan berbagai proyek bangun rumah,
                    renovasi, desain interior yang unik, modern, dan inovatif.
                </p>
                <div class="flex justify-end">
                    <button
                        class="border border-yellow-400 text-white px-6 py-3 rounded hover:bg-yellow-400 hover:text-black transition-all duration-300 font-semibold">
                        LIHAT PORTOFOLIO LAINNYA
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- Portfolio Grid Section --}}
    <section class="py-16 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
                        <div class="portfolio-placeholder bg-gray-800 rounded-lg h-64 flex items-center justify-center">
                            <div class="text-center text-gray-400">
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
                        class="filter-btn active px-6 py-3 rounded-full bg-yellow-400 text-black font-semibold hover:bg-yellow-500 transition-all duration-300"
                        data-category="all">
                        Semua
                    </button>
                    <button
                        class="filter-btn px-6 py-3 rounded-full bg-gray-700 text-white font-semibold hover:bg-gray-600 transition-all duration-300"
                        data-category="rumah">
                        Rumah
                    </button>
                    <button
                        class="filter-btn px-6 py-3 rounded-full bg-gray-700 text-white font-semibold hover:bg-gray-600 transition-all duration-300"
                        data-category="interior">
                        Interior
                    </button>
                    <button
                        class="filter-btn px-6 py-3 rounded-full bg-gray-700 text-white font-semibold hover:bg-gray-600 transition-all duration-300"
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
            <div class="bg-white rounded-lg max-w-7xl w-full max-h-[95vh] overflow-y-auto border-4 border-yellow-400">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-6 bg-black text-white p-4 rounded-lg -m-6 mb-6">
                        <h2 id="modal-title" class="text-3xl font-bold text-yellow-400"></h2>
                        <button onclick="closePortfolioModal()"
                            class="text-yellow-400 hover:text-yellow-300 p-2 hover:bg-gray-800 rounded-full transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div id="modal-content" class="space-y-6">
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
                    if (data.success) {
                        const portfolio = data.portfolio;
                        displayPortfolioDetails(portfolio);
                    } else {
                        showError('Gagal memuat detail portfolio');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showError('Terjadi kesalahan saat memuat data');
                });
        }

        function displayPortfolioDetails(portfolio) {
            document.getElementById('modal-title').textContent = portfolio.title;

            const content = `
        <!-- Portfolio Images Grid 3x3 -->
        <div class="mb-8">
            <div class="grid grid-cols-3 gap-4 mb-6">
                ${portfolio.images && portfolio.images.length > 0 ? 
                    portfolio.images.map((img, index) => `
                                            <div class="portfolio-image-container relative group cursor-pointer" onclick="showImageDetail('${img.image}', '${img.title || ''}', '${img.description || ''}')">
                                                <img src="/storage/${img.image}" alt="${img.title || 'Portfolio Image'}" 
                                                     class="portfolio-image">
                                                <div class="image-hover-overlay">
                                                    <div class="text-center text-black font-semibold">
                                                        <svg class="w-8 h-8 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                                                        </svg>
                                                        <p class="text-sm font-semibold">Klik untuk detail</p>
                                                    </div>
                                                </div>
                                            </div>
                                        `).join('') :
                    // Fallback: show 9 placeholder images if no images exist
                    Array.from({length: 9}, (_, i) => ` <
                div class =
                "bg-gray-200 rounded-lg h-48 flex items-center justify-center border-2 border-dashed border-gray-300" >
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
        <div class="bg-black text-white rounded-lg p-6 border-l-4 border-yellow-400 shadow-lg">
            <h3 class="text-2xl font-bold text-yellow-400 mb-4">${portfolio.title}</h3>
            
            <div class="prose prose-lg max-w-none">
                <p class="text-gray-300 leading-relaxed mb-4">
                    ${portfolio.description}
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-yellow-400 rounded-full mr-3"></div>
                            <span class="text-gray-300">Konsep modern minimalis yang ceria dan menyegarkan</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-yellow-400 rounded-full mr-3"></div>
                            <span class="text-gray-300">Kombinasi warna yang harmonis dan elegan</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-yellow-400 rounded-full mr-3"></div>
                            <span class="text-gray-300">Material berkualitas tinggi dan tahan lama</span>
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-yellow-400 rounded-full mr-3"></div>
                            <span class="text-gray-300">Pengerjaan profesional dan teliti</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-yellow-400 rounded-full mr-3"></div>
                            <span class="text-gray-300">Garansi kualitas dan kepuasan</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-yellow-400 rounded-full mr-3"></div>
                            <span class="text-gray-300">Tim ahli berpengalaman</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Details -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-4 rounded-lg border-2 border-yellow-400 shadow-lg">
                <h4 class="font-semibold text-black mb-2">Kategori</h4>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                    ${portfolio.category === 'rumah' ? 'bg-yellow-400 text-black' : 
                      (portfolio.category === 'interior' ? 'bg-yellow-400 text-black' : 'bg-yellow-400 text-black')}">
                    ${portfolio.category.charAt(0).toUpperCase() + portfolio.category.slice(1)}
                </span>
            </div>
            
            <div class="bg-white p-4 rounded-lg border-2 border-yellow-400 shadow-lg">
                <h4 class="font-semibold text-black mb-2">Status</h4>
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                    ${portfolio.status === 'completed' ? 'bg-yellow-400 text-black' : 
                      (portfolio.status === 'ongoing' ? 'bg-yellow-400 text-black' : 'bg-yellow-400 text-black')}">
                    ${portfolio.status.charAt(0).toUpperCase() + portfolio.status.slice(1)}
                </span>
            </div>
            
            <div class="bg-white p-4 rounded-lg border-2 border-yellow-400 shadow-lg">
                <h4 class="font-semibold text-black mb-2">Tahun</h4>
                <p class="text-black">${portfolio.year || 'N/A'}</p>
            </div>
        </div>

        ${portfolio.location ? `
                                <div class="bg-white p-4 rounded-lg border-2 border-yellow-400 shadow-lg">
                                    <h4 class="font-semibold text-black mb-2">Lokasi</h4>
                                    <p class="text-black">${portfolio.location}</p>
                                </div>
                            ` : ''}

        ${portfolio.area ? `
                                <div class="bg-white p-4 rounded-lg border-2 border-yellow-400 shadow-lg">
                                    <h4 class="font-semibold text-black mb-2">Luas Area</h4>
                                    <p class="text-black">${portfolio.area} m²</p>
                                </div>
                            ` : ''}
    `;

            document.getElementById('modal-content').innerHTML = content;
        }

        function showImageDetail(imagePath, title, description) {
            // Create a simple image detail modal
            const modal = document.createElement('div');
            modal.className = 'fixed inset-0 bg-black bg-opacity-95 z-[60] flex items-center justify-center p-4';
            modal.innerHTML = `
        <div class="relative max-w-4xl w-full bg-white rounded-lg p-6 border-4 border-yellow-400">
            <button onclick="this.parentElement.parentElement.remove()" class="absolute top-4 right-4 text-yellow-400 hover:text-yellow-600 z-10 bg-black p-2 rounded-full">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            <img src="/storage/${imagePath}" alt="${title}" class="w-full h-auto max-h-[70vh] object-contain rounded-lg">
            ${title ? `<h3 class="text-black text-xl font-bold mt-4 text-center">${title}</h3>` : ''}
            ${description ? `<p class="text-gray-700 text-center mt-2">${description}</p>` : ''}
        </div>
    `;
            document.body.appendChild(modal);

            // Close on click outside
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.remove();
                }
            });
        }

        function showError(message) {
            document.getElementById('modal-title').textContent = 'Error';
            document.getElementById('modal-content').innerHTML = `
        <div class="text-center py-12 bg-black text-white rounded-lg p-6">
            <svg class="mx-auto h-12 w-12 text-yellow-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z"/>
            </svg>
            <p class="text-lg text-gray-300">${message}</p>
            <button onclick="closePortfolioModal()" class="mt-4 bg-yellow-400 text-black px-6 py-2 rounded-lg hover:bg-yellow-500 transition-colors font-semibold">
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
        }

        .filter-btn:not(.active) {
            background-color: #374151;
            color: white;
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
            background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
            border-radius: 0.5rem;
            padding: 0.5rem;
            transition: all 0.3s ease;
            border: 2px solid #f59e0b;
        }

        .portfolio-image-container:hover {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(245, 158, 11, 0.5);
            border-color: #1f2937;
        }

        /* Ensure images are always visible */
        .portfolio-image {
            width: 100%;
            height: 12rem;
            object-fit: cover;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }

        /* Hover overlay for images */
        .image-hover-overlay {
            position: absolute;
            inset: 0;
            background: rgba(31, 41, 55, 0.8);
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .portfolio-image-container:hover .image-hover-overlay {
            opacity: 1;
        }
    </style>
@include('components.footer')
@endsection

@section('scripts')
@include('components.scripts')
@endsection

