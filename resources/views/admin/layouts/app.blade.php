<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="aV8myPkGCy07_79rrfohgnTBb50l8OF5wIQUEiaC0BQ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - Bangun Rumah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'admin-yellow': '#F59E0B',
                        'admin-yellow-dark': '#D97706',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg border-b-4 border-yellow-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Left Side - Burger Menu & Admin Panel Text -->
                <div class="flex items-center">
                    <!-- Burger Menu Button -->
                    <button id="sidebarToggle" class="md:hidden mr-3 p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    
                    <div class="flex-shrink-0">
                        <h1 class="text-xl font-bold text-gray-900">
                            <span class="text-yellow-400">Admin</span> Panel
                        </h1>
                    </div>
                </div>

                <!-- Center - Company Logo -->
                <div class="hidden sm:flex items-center justify-center flex-1">
                    <div class="flex-shrink-0">
                        <div class="flex items-center space-x-3">
                            <img src="/img/logo-brp.png" alt="BRP Logo" class="h-10 sm:h-12 w-auto">
                            <div class="text-center">
                                <h2 class="text-base sm:text-lg font-bold text-gray-900">Bangun Rumah Project</h2>
                                <p class="text-[10px] sm:text-xs text-gray-500">Management System</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side - User Info & Logout -->
                <div class="flex items-center space-x-4">
                    <div class="hidden xs:block text-right">
                        <span class="text-sm text-gray-600">Selamat datang,</span>
                        <p class="text-sm font-medium text-gray-900">{{ Auth::guard('admin')->user()->name }}</p>
                    </div>
                    <form method="POST" action="{{ route('admin.logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                            class="bg-red-600 hover:bg-red-700 text-white px-3 sm:px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-sm hover:shadow-md">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidebar + Main as responsive stack -->
    <div class="flex flex-col md:flex-row">
        <!-- Sidebar -->
        <div id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out md:relative md:inset-y-auto md:z-auto">
            <!-- Close button for mobile -->
            <div class="md:hidden flex justify-end p-4 border-b border-gray-200">
                <button id="sidebarClose" class="p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <div class="p-4 md:p-6">
                <div class="mb-4 md:mb-6 pb-4 border-b border-gray-200">
                    <h3 class="text-base md:text-lg font-semibold text-gray-900">Menu Navigasi</h3>
                    <p class="text-xs md:text-sm text-gray-500">Pilih menu yang tersedia</p>
                </div>
                <nav class="space-y-2 md:space-y-3">
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex items-center px-3 md:px-4 py-2 md:py-3 text-gray-700 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-yellow-100 text-yellow-700 md:border-r-4 border-yellow-400 shadow-sm' : '' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6H8V5z" />
                        </svg>
                        <span class="font-medium">Dashboard</span>
                    </a>

                    <a href="{{ route('admin.portfolios.index') }}"
                        class="flex items-center px-3 md:px-4 py-2 md:py-3 text-gray-700 rounded-lg hover:bg-yellow-50 hover:text-yellow-700 transition-all duration-200 {{ request()->routeIs('admin.portfolios.*') ? 'bg-yellow-100 text-yellow-700 md:border-r-4 border-yellow-400 shadow-sm' : '' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        <span class="font-medium">Portfolio</span>
                    </a>
                </nav>
            </div>
        </div>

        <!-- Overlay for mobile -->
        <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden hidden"></div>

        <!-- Main Content -->
        <div class="flex-1 p-4 md:p-8 bg-gray-50">
            @if (session('success'))
                <div
                    class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 md:px-6 py-4 rounded-lg relative shadow-sm">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="block sm:inline font-medium">{{ session('success') }}</span>
                    </div>
                    <button
                        class="absolute top-0 bottom-0 right-0 px-4 py-3 hover:bg-green-200 rounded-r-lg transition-colors duration-200"
                        onclick="this.parentElement.remove()">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 0 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 0 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </button>
                </div>
            @endif

            @if (session('error'))
                <div
                    class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 md:px-6 py-4 rounded-lg relative shadow-sm">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="block sm:inline font-medium">{{ session('error') }}</span>
                    </div>
                    <button
                        class="absolute top-0 bottom-0 right-0 px-4 py-3 hover:bg-red-200 rounded-r-lg transition-colors duration-200"
                        onclick="this.parentElement.remove()">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 0 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 0 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </button>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <!-- JavaScript for Sidebar Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebarClose = document.getElementById('sidebarClose');
            const sidebarOverlay = document.getElementById('sidebarOverlay');
            
            // Toggle sidebar
            function toggleSidebar() {
                sidebar.classList.toggle('-translate-x-full');
                sidebarOverlay.classList.toggle('hidden');
            }
            
            // Close sidebar
            function closeSidebar() {
                sidebar.classList.add('-translate-x-full');
                sidebarOverlay.classList.add('hidden');
            }
            
            // Event listeners
            sidebarToggle.addEventListener('click', toggleSidebar);
            sidebarClose.addEventListener('click', closeSidebar);
            sidebarOverlay.addEventListener('click', closeSidebar);
            
            // Close sidebar when clicking on menu items (mobile)
            const menuItems = sidebar.querySelectorAll('nav a');
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    if (window.innerWidth < 768) { // md breakpoint
                        closeSidebar();
                    }
                });
            });
            
            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768) { // md breakpoint
                    sidebar.classList.remove('-translate-x-full');
                    sidebarOverlay.classList.add('hidden');
                } else {
                    sidebar.classList.add('-translate-x-full');
                }
            });
        });
    </script>
</body>

</html>
