{{-- Navbar Component --}}
<nav id="main-navbar"
    class="flex items-center justify-between px-4 md:px-8 py-3 bg-transparent fixed w-full z-20 transition duration-300">
    <div class="flex items-center">
        <a href="/">
            <div class="flex items-center mr-4 md:mr-8">
                {{-- Logo that changes based on scroll state --}}
                <div class="relative -ml-1 md:-ml-2 mr-2">
                    <img src="/img/logo-brp.png" alt="Logo" class="h-8 md:h-9 w-auto transition-opacity duration-300"
                        id="logo-dark">
                    <img src="/img/logo-white-brp.png" alt="Logo"
                        class="h-8 md:h-9 w-auto transition-opacity duration-300 absolute top-0 left-0 opacity-0"
                        id="logo-white">
                </div>
                <div class="font-bold text-[10px] md:text-[13px] text-yellow-400 leading-tight transition-colors duration-300 text-left"
                    id="brand-text">
                    <span class="block">Bangun</span>
                    <span class="block">Rumah</span>
                    <span class="block">Project</span>
                </div>
            </div>
        </a>

        {{-- Desktop Menu --}}
        <ul class="hidden md:flex items-center space-x-3 lg:space-x-5 font-semibold text-sm lg:text-base desktop-menu">
            <li><a href="/"
                    class="nav-link rounded px-2 lg:px-3 py-2 transition text-yellow-400 hover:bg-white/40 hover:text-black relative {{ request()->is('/') ? 'nav-active' : '' }}">
                    <span>HOME</span>
                    <div class="nav-indicator"></div>
                </a>
            </li>
            <li><a href="/profile"
                    class="nav-link rounded px-2 lg:px-3 py-2 transition text-yellow-400 hover:bg-white/40 hover:text-black relative {{ request()->is('profile*') ? 'nav-active' : '' }}">
                    <span>PROFIL</span>
                    <div class="nav-indicator"></div>
                </a>
            </li>
            <li><a href="/portofolio"
                    class="nav-link rounded px-2 lg:px-3 py-2 transition text-yellow-400 hover:bg-white/40 hover:text-black relative {{ request()->is('portofolio*') ? 'nav-active' : '' }}">
                    <span>PORTOFOLIO</span>
                    <div class="nav-indicator"></div>
                </a>
            </li>
            <li class="relative group" data-dropdown>
                <a href="/layanan"
                    class="nav-link rounded px-2 lg:px-3 py-2 transition text-yellow-400 hover:bg-white/40 hover:text-black flex items-center gap-1 relative {{ request()->is('layanan*') || request()->is('services*') ? 'nav-active' : '' }}">
                    <span>LAYANAN</span>
                    <svg class="w-3 h-3 lg:w-4 lg:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                    <div class="nav-indicator"></div>
                </a>
                <ul
                    class="absolute left-0 mt-2 w-48 lg:w-56 bg-white rounded-lg shadow-2xl py-3 z-[9999] min-w-max opacity-0 invisible transform -translate-y-2 transition-all duration-300 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 border border-gray-200">
                    <li><a href="/services1"
                            class="block px-4 py-3 text-sm text-gray-700 hover:bg-yellow-100 hover:text-yellow-700 transition-all duration-200 {{ request()->is('services1*') ? 'bg-yellow-100 text-yellow-700 font-semibold' : '' }}">
                            Bangun & Renovasi Rumah</a></li>
                    <li><a href="/services2"
                            class="block px-4 py-3 text-sm text-gray-700 hover:bg-yellow-100 hover:text-yellow-700 transition-all duration-200 {{ request()->is('services2*') ? 'bg-yellow-100 text-yellow-700 font-semibold' : '' }}">
                            Buat RAB & PBG/IMB</a></li>
                    <li><a href="/services3"
                            class="block px-4 py-3 text-sm text-gray-700 hover:bg-yellow-100 hover:text-yellow-700 transition-all duration-200 {{ request()->is('services3*') ? 'bg-yellow-100 text-yellow-700 font-semibold' : '' }}">
                            Desain Eksterior / Interior</a></li>
                </ul>
            </li>
            <li><a href="/contact"
                    class="nav-link rounded px-2 lg:px-3 py-2 transition text-yellow-400 hover:bg-white/40 hover:text-black relative {{ request()->is('contact*') ? 'nav-active' : '' }}">
                    <span>KONTAK</span>
                    <div class="nav-indicator"></div>
                </a>
            </li>
        </ul>
    </div>

    {{-- Mobile Menu Button --}}
    <button id="main-burger-btn"
        class="md:hidden mobile-menu-btn bg-transparent text-yellow-400 p-2 rounded-lg hover:bg-white/20 transition-all duration-300 flex flex-col justify-center items-center w-10 h-10 z-40">
        <span class="burger-line w-5 h-0.5 bg-current mb-1 transition-all duration-300"></span>
        <span class="burger-line w-5 h-0.5 bg-current mb-1 transition-all duration-300"></span>
        <span class="burger-line w-5 h-0.5 bg-current transition-all duration-300"></span>
    </button>
</nav>

{{-- Mobile Menu Overlay --}}
<div id="mobile-menu-overlay" class="mobile-menu fixed inset-0 bg-black bg-opacity-75 backdrop-blur-sm z-30 hidden">
    {{-- Mobile Menu Content --}}
    <div class="mobile-menu-content w-full h-full bg-black flex flex-col overflow-hidden">
        {{-- Header with close button --}}
        <div class="flex items-center justify-between p-4 sm:p-6 border-b border-gray-700 flex-shrink-0">
            <a href="/">
                <div class="flex items-center mr-4 md:mr-8">
                    <div class="relative -ml-1 md:-ml-2 mr-2">
                        <img src="/img/logo-white-brp.png" alt="Logo" class="h-8 md:h-9 w-auto transition-opacity ">
                    </div>
                    <div class="font-bold text-[10px] md:text-[13px] leading-tight">
                        <span class="block text-white">Bangun</span>
                        <span class="block text-white">Rumah</span>
                        <span class="block text-white">Project</span>
                    </div>
                </div>
            </a>
            <button id="close-burger-btn"
                class="mobile-close-btn bg-white text-black p-2 rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 flex flex-col justify-center items-center w-8 h-8 sm:w-10 sm:h-10">
                <span class="burger-line w-4 sm:w-5 h-0.5 bg-black mb-1 transition-all duration-300"></span>
                <span class="burger-line w-4 sm:w-5 h-0.5 bg-black mb-1 transition-all duration-300"></span>
                <span class="burger-line w-4 sm:w-5 h-0.5 bg-black transition-all duration-300"></span>
            </button>
        </div>

        {{-- Navigation Menu --}}
        <nav class="flex-1 overflow-y-auto relative">
            <ul class="p-4 sm:p-6 space-y-2 sm:space-y-4 pb-6">
                <li>
                    <a href="/"
                        class="mobile-nav-link block px-3 sm:px-4 py-3 sm:py-4 text-white hover:bg-gray-800 rounded-lg transition-all duration-300 flex items-center {{ request()->is('/') ? 'mobile-nav-active' : '' }}">
                        <div class="flex items-center">
                            <svg class="w-4 sm:w-5 h-4 sm:h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <span class="text-sm sm:text-base">HOME</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/profile"
                        class="mobile-nav-link block px-3 sm:px-4 py-3 sm:py-4 text-white hover:bg-gray-800 rounded-lg transition-all duration-300 flex items-center {{ request()->is('profile*') ? 'mobile-nav-active' : '' }}">
                        <div class="flex items-center">
                            <svg class="w-4 sm:w-5 h-4 sm:h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="text-sm sm:text-base">PROFIL</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/portofolio"
                        class="mobile-nav-link block px-3 sm:px-4 py-3 sm:py-4 text-white hover:bg-gray-800 rounded-lg transition-all duration-300 flex items-center {{ request()->is('portofolio*') ? 'mobile-nav-active' : '' }}">
                        <div class="flex items-center">
                            <svg class="w-4 sm:w-5 h-4 sm:h-5 mr-3 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            <span class="text-sm sm:text-base">PORTOFOLIO</span>
                        </div>
                    </a>
                </li>
                <li class="relative" data-dropdown>
                    <a href="#"
                        class="mobile-nav-link block px-3 sm:px-4 py-3 sm:py-4 text-white hover:bg-gray-800 rounded-lg transition-all duration-300 flex items-center {{ request()->is('layanan*') || request()->is('services*') ? 'mobile-nav-active' : '' }}">
                        <div class="flex items-center w-full place-content-between">
                            <div class="flex items-center">
                                <svg class="w-4 sm:w-5 h-4 sm:h-5 mr-3 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a11 11 0 01-5.5 0l-.318-.158a6 6 0 00-3.86-.517l-2.387.477a2 2 0 00-1.022.547A2 2 0 004 17.5v.5a2 2 0 002 2h12a2 2 0 002-2v-.5a2 2 0 00-.572-2.072z" />
                                </svg>
                                <span class="text-sm sm:text-base">LAYANAN</span>
                            </div>
                            <svg class="w-4 sm:w-5 h-4 sm:h-5 transform transition-transform duration-300 flex-shrink-0"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </a>
                    <ul class="hidden pl-6 sm:pl-8 space-y-1 sm:space-y-2 mt-2">
                        <li>
                            <a href="/services1"
                                class="block px-3 sm:px-4 py-2 sm:py-3 text-gray-300 hover:bg-gray-800 rounded-lg transition-all duration-300 flex items-center {{ request()->is('services1*') ? 'bg-gray-800 text-yellow-400 border-l-4 border-yellow-400' : '' }}">
                                <div class="flex items-center">
                                    <svg class="w-3 sm:w-4 h-3 sm:h-4 mr-3 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                    <span class="text-xs sm:text-sm">Jasa Bangun & Renovasi Rumah</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/services2"
                                class="block px-3 sm:px-4 py-2 sm:py-3 text-gray-300 hover:bg-gray-800 rounded-lg transition-all duration-300 flex items-center {{ request()->is('services2*') ? 'bg-gray-800 text-yellow-400 border-l-4 border-yellow-400' : '' }}">
                                <div class="flex items-center">
                                    <svg class="w-3 sm:w-4 h-3 sm:h-4 mr-3 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-xs sm:text-sm">Jasa Membuat RAB & PBG/IMB</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/services3"
                                class="block px-3 sm:px-4 py-2 sm:py-3 text-gray-300 hover:bg-gray-800 rounded-lg transition-all duration-300 flex items-center {{ request()->is('services3*') ? 'bg-gray-800 text-yellow-400 border-l-4 border-yellow-400' : '' }}">
                                <div class="flex items-center">
                                    <svg class="w-3 sm:w-4 h-3 sm:h-4 mr-3 flex-shrink-0" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z" />
                                    </svg>
                                    <span class="text-xs sm:text-sm">Jasa Desain Interior & Eksterior</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/contact"
                        class="mobile-nav-link block px-3 sm:px-4 py-3 sm:py-4 text-white hover:bg-gray-800 rounded-lg transition-all duration-300 flex items-center {{ request()->is('contact*') ? 'mobile-nav-active' : '' }}">
                        <div class="flex items-center">
                            <svg class="w-4 sm:w-5 h-4 sm:h-5 mr-3 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="text-sm sm:text-base">KONTAK</span>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>

        {{-- Footer with social links --}}
        <div class="p-4 sm:p-6 border-t border-gray-700 flex-shrink-0 bg-black sticky bottom-0 z-10">
            <div class="flex justify-center space-x-4">
                <a href="https://www.instagram.com/bangunrumah.project?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" aria-label="Instagram" class="text-gray-400 hover:text-yellow-400 transition-colors duration-300" target="_blank" rel="noopener">
                <i class="fab fa-instagram text-xl"></i>
                </a>
                <a href="https://web.facebook.com/profile.php?id=61554534025479" aria-label="facebook" class="text-gray-400 hover:text-yellow-400 transition-colors duration-300" target="_blank" rel="noopener">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                </svg>
                 </a>
                 <a href="https://www.tiktok.com/@bangunrumah.project?is_from_webapp=1&sender_device=pc" aria-label="TikTok" class="text-gray-400 hover:text-yellow-400 transition-colors duration-300" target="_blank" rel="noopener">
                <i class="fab fa-tiktok text-xl"></i>
                </a>
                <a href="https://www.youtube.com/@bangunrumahproject" aria-label="youtube" class="text-gray-400 hover:text-yellow-400 transition-colors duration-300" target="_blank" rel="noopener">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<script type="module">
    import {
        navbarManager
    } from '/js/navbar.js';
    // Navbar functionality is now handled by the navbar module
</script>
