// Navbar Module - Handles navbar scroll effects and logo switching
export class NavbarManager {
    constructor() {
        this.navbar = null;
        this.logoWhite = null;
        this.logoDark = null;
        this.brandText = null;
        this.navLinks = [];
        this.scrollThreshold = 30;
        this.isInitialized = false;
        this.dropdowns = [];
        this.mobileMenu = null;
        this.mobileMenuContent = null;
        this.mainBurgerBtn = null;
        this.closeBurgerBtn = null;
        this.isMobileMenuOpen = false;
    }

    // Initialize navbar functionality
    initialize() {
        if (this.isInitialized) {
            console.log('Navbar already initialized');
            return;
        }

        this.navbar = document.getElementById('main-navbar');
        this.logoWhite = document.getElementById('logo-white');
        this.logoDark = document.getElementById('logo-dark');
        this.brandText = document.getElementById('brand-text');
        this.navLinks = document.querySelectorAll('.nav-link');
        this.mobileMenu = document.getElementById('mobile-menu-overlay');
        this.mobileMenuContent = document.querySelector('.mobile-menu-content');
        this.mainBurgerBtn = document.getElementById('main-burger-btn');
        this.closeBurgerBtn = document.getElementById('close-burger-btn');

        console.log('Navbar elements found:', {
            navbar: !!this.navbar,
            logoWhite: !!this.logoWhite,
            logoDark: !!this.logoDark,
            brandText: !!this.brandText,
            navLinks: this.navLinks.length
        });

        if (!this.navbar) {
            console.warn('Navbar element not found');
            return;
        }

        // Add CSS classes for navbar scroll effects
        this.addNavbarStyles();

        // Setup dropdown functionality
        this.setupDropdowns();

        // Setup mobile menu
        this.setupMobileMenu();

        // Initial call
        this.updateNavbar();

        // Listen for scroll events
        window.addEventListener('scroll', () => {
            this.updateNavbar();
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', (e) => {
            this.handleOutsideClick(e);
        });

        this.isInitialized = true;
        console.log('Navbar manager initialized successfully');
    }

    // Setup dropdown functionality
    setupDropdowns() {
        // Find all dropdown containers
        const dropdownContainers = document.querySelectorAll('.group[data-dropdown]');
        
        dropdownContainers.forEach(container => {
            const dropdown = container.querySelector('ul');
            const trigger = container.querySelector('a');
            
            if (dropdown && trigger) {
                // Store reference
                this.dropdowns.push({
                    container,
                    dropdown,
                    trigger,
                    isOpen: false
                });

                // Add click handler to trigger
                trigger.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.toggleDropdown(container);
                });

                // Close dropdown when clicking on menu items
                const menuItems = dropdown.querySelectorAll('a');
                menuItems.forEach(item => {
                    item.addEventListener('click', () => {
                        this.closeAllDropdowns();
                    });
                });
            }
        });
    }

    // Toggle dropdown
    toggleDropdown(container) {
        const dropdownData = this.dropdowns.find(d => d.container === container);
        if (!dropdownData) return;

        if (dropdownData.isOpen) {
            this.closeDropdown(container);
        } else {
            this.closeAllDropdowns();
            this.openDropdown(container);
        }
    }

    // Open dropdown
    openDropdown(container) {
        const dropdownData = this.dropdowns.find(d => d.container === container);
        if (!dropdownData) return;

        dropdownData.isOpen = true;
        dropdownData.dropdown.style.display = 'block';
        dropdownData.dropdown.classList.add('dropdown-open');
    }

    // Close dropdown
    closeDropdown(container) {
        const dropdownData = this.dropdowns.find(d => d.container === container);
        if (!dropdownData) return;

        dropdownData.isOpen = false;
        dropdownData.dropdown.style.display = 'none';
        dropdownData.dropdown.classList.remove('dropdown-open');
    }

    // Close all dropdowns
    closeAllDropdowns() {
        this.dropdowns.forEach(dropdownData => {
            dropdownData.isOpen = false;
            dropdownData.dropdown.style.display = 'none';
            dropdownData.dropdown.classList.remove('dropdown-open');
        });
    }

    // Handle clicks outside dropdowns
    handleOutsideClick(e) {
        let clickedInside = false;
        
        this.dropdowns.forEach(dropdownData => {
            if (dropdownData.container.contains(e.target)) {
                clickedInside = true;
            }
        });

        if (!clickedInside) {
            this.closeAllDropdowns();
        }
    }

    // Setup mobile menu
    setupMobileMenu() {
        if (!this.mainBurgerBtn || !this.closeBurgerBtn || !this.mobileMenu || !this.mobileMenuContent) {
            console.warn('Mobile menu elements not found');
            return;
        }

        // Main burger button click handler
        this.mainBurgerBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            this.openMobileMenu();
        });

        // Close burger button click handler
        this.closeBurgerBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            this.closeMobileMenu();
        });

        // Setup mobile dropdowns specifically
        this.setupMobileDropdowns();

        // Close mobile menu when clicking on actual menu items (not dropdown triggers)
        const mobileMenuItems = this.mobileMenu.querySelectorAll('a[href]:not([href="#"])');
        mobileMenuItems.forEach(item => {
            item.addEventListener('click', () => {
                this.closeMobileMenu();
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (this.isMobileMenuOpen && 
                !this.mobileMenu.contains(e.target) && 
                !this.mainBurgerBtn.contains(e.target)) {
                this.closeMobileMenu();
            }
        });

        // Close mobile menu on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && this.isMobileMenuOpen) {
                this.closeMobileMenu();
            }
        });

        // Close mobile menu on window resize (if switching to desktop)
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768 && this.isMobileMenuOpen) {
                this.closeMobileMenu();
            }
        });
    }

    // Setup mobile dropdowns specifically
    setupMobileDropdowns() {
        const mobileDropdowns = this.mobileMenu.querySelectorAll('[data-dropdown]');
        
        mobileDropdowns.forEach(container => {
            const trigger = container.querySelector('a');
            const dropdown = container.querySelector('ul');
            const arrow = trigger.querySelector('svg:last-child');
            
            if (trigger && dropdown && arrow) {
                trigger.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    const isOpen = !dropdown.classList.contains('hidden');
                    
                    // Close all other dropdowns
                    mobileDropdowns.forEach(otherContainer => {
                        const otherDropdown = otherContainer.querySelector('ul');
                        const otherArrow = otherContainer.querySelector('svg:last-child');
                        if (otherContainer !== container) {
                            otherDropdown.classList.add('hidden');
                            if (otherArrow) {
                                otherArrow.style.transform = 'rotate(0deg)';
                            }
                        }
                    });
                    
                    // Toggle current dropdown
                    if (isOpen) {
                        dropdown.classList.add('hidden');
                        arrow.style.transform = 'rotate(0deg)';
                    } else {
                        dropdown.classList.remove('hidden');
                        arrow.style.transform = 'rotate(180deg)';
                    }
                });

                // Prevent dropdown trigger from closing mobile menu
                trigger.addEventListener('click', (e) => {
                    e.stopPropagation();
                });

                // Handle dropdown items - they should close mobile menu
                const dropdownItems = dropdown.querySelectorAll('a[href]:not([href="#"])');
                dropdownItems.forEach(item => {
                    item.addEventListener('click', () => {
                        this.closeMobileMenu();
                    });
                });
            }
        });
    }

    // Add CSS styles for navbar scroll effects
    addNavbarStyles() {
        if (!document.getElementById('navbar-styles')) {
            const style = document.createElement('style');
            style.id = 'navbar-styles';
            style.textContent = `
                /* Override any existing background styles with maximum specificity */
                nav#main-navbar.navbar-scrolled,
                nav#main-navbar.navbar-scrolled.bg-transparent,
                nav#main-navbar.navbar-scrolled.flex,
                nav#main-navbar.navbar-scrolled.items-center,
                nav#main-navbar.navbar-scrolled.justify-between,
                nav#main-navbar.navbar-scrolled.px-4,
                nav#main-navbar.navbar-scrolled.md\\:px-8,
                nav#main-navbar.navbar-scrolled.py-3,
                nav#main-navbar.navbar-scrolled.fixed,
                nav#main-navbar.navbar-scrolled.w-full,
                nav#main-navbar.navbar-scrolled.z-20,
                nav#main-navbar.navbar-scrolled.transition,
                nav#main-navbar.navbar-scrolled.duration-300 {
                    background-color: black !important;
                    background: black !important;
                    background-image: none !important;
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3) !important;
                }

                /* Force black background with higher specificity */
                nav#main-navbar.navbar-scrolled {
                    background: black !important;
                    background-color: black !important;
                    background-image: none !important;
                }

                /* Additional specificity to override any Tailwind classes */
                nav#main-navbar.navbar-scrolled.bg-transparent {
                    background: black !important;
                    background-color: black !important;
                    background-image: none !important;
                }

                /* Override any existing background styles */
                #main-navbar.navbar-scrolled {
                    background: black !important;
                    background-color: black !important;
                    background-image: none !important;
                }

                /* Force black background with higher specificity */
                nav#main-navbar.navbar-scrolled {
                    background: black !important;
                    background-color: black !important;
                    background-image: none !important;
                }

                /* Additional specificity to override any Tailwind classes */
                nav#main-navbar.navbar-scrolled.bg-transparent {
                    background: black !important;
                    background-color: black !important;
                    background-image: none !important;
                }

                nav#main-navbar.navbar-scrolled .nav-link {
                    color: white !important;
                }

                nav#main-navbar.navbar-scrolled .nav-link:hover {
                    background-color: rgba(255, 255, 255, 0.1) !important;
                    color: white !important;
                }

                nav#main-navbar.navbar-scrolled #brand-text {
                    color: white !important;
                }

                nav#main-navbar.navbar-scrolled #main-burger-btn {
                    color: white !important;
                }

                nav#main-navbar.navbar-scrolled #main-burger-btn:hover {
                    background-color: rgba(255, 255, 255, 0.1) !important;
                }

                /* Ensure transparent background when not scrolled */
                nav#main-navbar:not(.navbar-scrolled) {
                    background-color: transparent !important;
                    background: transparent !important;
                    background-image: none !important;
                }

                /* Force transparent background with higher specificity */
                nav#main-navbar:not(.navbar-scrolled) {
                    background: transparent !important;
                    background-color: transparent !important;
                    background-image: none !important;
                }

                .logo-container {
                    position: relative;
                }

                .logo-container img {
                    transition: opacity 0.3s ease;
                }

                /* Dropdown styles */
                .dropdown-open {
                    animation: fadeInDown 0.3s ease-out;
                }

                @keyframes fadeInDown {
                    from {
                        opacity: 0;
                        transform: translateY(-10px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                /* Mobile menu styles - FIXED */
                .mobile-menu {
                    transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out;
                }

                .mobile-menu.hidden {
                    opacity: 0;
                    pointer-events: none;
                    visibility: hidden;
                }

                .mobile-menu:not(.hidden) {
                    opacity: 1;
                    pointer-events: auto;
                    visibility: visible;
                }

                /* Mobile menu content positioning - FIXED */
                .mobile-menu-content {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: black;
                    transition: transform 0.4s ease-in-out;
                    transform: translateX(-100%);
                    z-index: 45;
                    display: flex;
                    flex-direction: column;
                }

                .mobile-menu:not(.hidden) .mobile-menu-content {
                    transform: translateX(0);
                }

                /* Burger menu animation */
                .burger-line {
                    transition: all 0.3s ease-in-out;
                    transform-origin: center;
                }

                .burger-active .burger-line:nth-child(1) {
                    transform: rotate(45deg) translate(6px, 6px);
                }

                .burger-active .burger-line:nth-child(2) {
                    opacity: 0;
                    transform: scale(0);
                }

                .burger-active .burger-line:nth-child(3) {
                    transform: rotate(-45deg) translate(6px, -6px);
                }

                /* Mobile menu item animations */
                .mobile-menu nav ul li {
                    opacity: 0;
                    transform: translateX(-20px);
                    transition: all 0.3s ease-in-out;
                }

                .mobile-menu:not(.hidden) nav ul li {
                    opacity: 1;
                    transform: translateX(0);
                }

                .mobile-menu:not(.hidden) nav ul li:nth-child(1) { transition-delay: 0.1s; }
                .mobile-menu:not(.hidden) nav ul li:nth-child(2) { transition-delay: 0.2s; }
                .mobile-menu:not(.hidden) nav ul li:nth-child(3) { transition-delay: 0.3s; }
                .mobile-menu:not(.hidden) nav ul li:nth-child(4) { transition-delay: 0.4s; }
                .mobile-menu:not(.hidden) nav ul li:nth-child(5) { transition-delay: 0.5s; }
                .mobile-menu:not(.hidden) nav ul li:nth-child(6) { transition-delay: 0.6s; }

                /* Responsive navbar */
                @media (max-width: 768px) {
                    .desktop-menu {
                        display: none !important;
                    }
                    
                    #main-burger-btn {
                        display: flex !important;
                    }
                }

                @media (min-width: 769px) {
                    #main-burger-btn {
                        display: none !important;
                    }
                    
                    .mobile-menu {
                        display: none !important;
                    }
                }

                /* Hover effects for mobile menu items */
                .mobile-menu nav ul li a:hover {
                    background-color: #374151;
                    transform: translateX(8px);
                }

                /* Active state for mobile menu items */
                .mobile-menu nav ul li a.active {
                    background-color: #374151;
                    border-left: 4px solid #f59e0b;
                }

                /* Mobile menu backdrop blur */
                .mobile-menu:not(.hidden) {
                    backdrop-filter: blur(8px);
                }

                /* Mobile menu button hover effects */
                #main-burger-btn:hover {
                    transform: scale(1.05);
                    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
                }

                #main-burger-btn:active {
                    transform: scale(0.95);
                }

                /* Prevent body scroll when mobile menu is open */
                body.mobile-menu-open {
                    overflow: hidden;
                    position: fixed;
                    width: 100%;
                }

                /* Ensure mobile menu button is always visible */
                #main-burger-btn {
                    z-index: 50;
                    position: relative;
                }

                /* Mobile close button styles */
                .mobile-close-btn {
                    z-index: 60;
                }

                /* Mobile menu overlay z-index */
                .mobile-menu {
                    z-index: 40;
                }

                /* Ensure mobile menu content is visible */
                .mobile-menu:not(.hidden) .mobile-menu-content {
                    display: block !important;
                    visibility: visible !important;
                    opacity: 1 !important;
                }

                /* Mobile menu navigation styles */
                .mobile-menu nav {
                    height: calc(100% - 120px);
                    overflow-y: auto;
                    padding: 1.5rem;
                }

                .mobile-menu nav ul {
                    list-style: none;
                    margin: 0;
                    padding: 0;
                }

                .mobile-menu nav ul li {
                    margin-bottom: 1rem;
                }

                .mobile-menu nav ul li a {
                    display: block;
                    padding: 1rem;
                    color: white;
                    text-decoration: none;
                    border-radius: 0.5rem;
                    transition: all 0.3s ease;
                }

                .mobile-menu nav ul li a:hover {
                    background-color: #374151;
                }

                /* Mobile menu header */
                .mobile-menu .flex.items-center.justify-between {
                    background-color: black;
                    border-bottom: 1px solid #374151;
                    padding: 1.5rem;
                }

                /* Mobile menu footer */
                .mobile-menu .absolute.bottom-0 {
                    background-color: black;
                    border-top: 1px solid #374151;
                    padding: 1.5rem;
                }
            `;
            document.head.appendChild(style);
            console.log('Navbar styles added successfully');
        }
    }

    // Update navbar based on scroll position
    updateNavbar() {
        if (!this.navbar || !this.logoWhite || !this.logoDark) {
            console.warn('Navbar elements not found');
            return;
        }

        console.log('Scroll position:', window.scrollY, 'Threshold:', this.scrollThreshold);

        if (window.scrollY > this.scrollThreshold) {
            // Scrolled - show white logo and black navbar
            this.logoWhite.style.opacity = '1';
            this.logoDark.style.opacity = '0';
            
            // Add scrolled class to navbar
            this.navbar.classList.add('navbar-scrolled');
            this.navbar.classList.remove('bg-transparent');
            
            // Force black background with inline style
            this.navbar.style.backgroundColor = 'black';
            this.navbar.style.background = 'black';
            
            console.log('Navbar scrolled - background set to black');
            
            // Update nav links to white
            this.navLinks.forEach(link => {
                link.classList.remove('text-yellow-400');
                link.classList.add('text-white');
            });

            // Update brand text to white
            if (this.brandText) {
                this.brandText.classList.remove('text-yellow-400');
                this.brandText.classList.add('text-white');
            }
        } else {
            // Not scrolled - show dark logo and transparent navbar
            this.logoWhite.style.opacity = '0';
            this.logoDark.style.opacity = '1';
            
            // Remove scrolled class from navbar
            this.navbar.classList.remove('navbar-scrolled');
            this.navbar.classList.add('bg-transparent');
            
            // Force transparent background with inline style
            this.navbar.style.backgroundColor = 'transparent';
            this.navbar.style.background = 'transparent';
            
            console.log('Navbar not scrolled - background set to transparent');
            
            // Update nav links to yellow
            this.navLinks.forEach(link => {
                link.classList.remove('text-white');
                link.classList.add('text-yellow-400');
            });

            // Update brand text to yellow
            if (this.brandText) {
                this.brandText.classList.remove('text-white');
                this.brandText.classList.add('text-yellow-400');
            }
        }
    }

    // Set scroll threshold
    setScrollThreshold(threshold) {
        this.scrollThreshold = threshold;
    }

    // Force update navbar state
    forceUpdate() {
        this.updateNavbar();
    }

    // Get current scroll state
    isScrolled() {
        return window.scrollY > this.scrollThreshold;
    }

    // Open mobile menu
    openMobileMenu() {
        if (!this.mobileMenu || !this.mainBurgerBtn || this.isMobileMenuOpen) {
            return;
        }

        console.log('Opening mobile menu');
        
        // Show mobile menu
        this.mobileMenu.classList.remove('hidden');
        
        // Add active class to burger button
        this.mainBurgerBtn.classList.add('burger-active');
        
        // Prevent body scroll
        document.body.classList.add('mobile-menu-open');
        
        // Set state
        this.isMobileMenuOpen = true;
        
        // Add backdrop blur effect
        document.body.style.backdropFilter = 'blur(5px)';
        
        console.log('Mobile menu opened');
    }

    // Close mobile menu
    closeMobileMenu() {
        if (!this.mobileMenu || !this.mainBurgerBtn || !this.isMobileMenuOpen) {
            return;
        }

        console.log('Closing mobile menu');
        
        // Hide mobile menu
        this.mobileMenu.classList.add('hidden');
        
        // Remove active class from burger button
        this.mainBurgerBtn.classList.remove('burger-active');
        
        // Restore body scroll
        document.body.classList.remove('mobile-menu-open');
        document.body.style.backdropFilter = '';
        
        // Set state
        this.isMobileMenuOpen = false;
        
        console.log('Mobile menu closed');
    }

    // Toggle mobile menu (for backward compatibility)
    toggleMobileMenu() {
        if (this.isMobileMenuOpen) {
            this.closeMobileMenu();
        } else {
            this.openMobileMenu();
        }
    }

    // Get mobile menu state
    isMobileMenuOpen() {
        return this.isMobileMenuOpen;
    }
}

// Create global instance
export const navbarManager = new NavbarManager();

// Auto-initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        navbarManager.initialize();
    });
} else {
    navbarManager.initialize();
}

// Export for backward compatibility
export function setupNavbarScroll() {
    navbarManager.initialize();
}
