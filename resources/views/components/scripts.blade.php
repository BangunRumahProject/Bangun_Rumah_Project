<script>
    // Enhanced scroll animations and effects
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLayananBtn = document.getElementById('mobile-layanan-btn');
        const mobileLayananDropdown = document.getElementById('mobile-layanan-dropdown');

        // Toggle mobile menu
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Toggle mobile layanan dropdown
        if (mobileLayananBtn && mobileLayananDropdown) {
            mobileLayananBtn.addEventListener('click', function() {
                mobileLayananDropdown.classList.toggle('hidden');
                const chevron = mobileLayananBtn.querySelector('svg');
                if (chevron) {
                    chevron.style.transform = mobileLayananDropdown.classList.contains('hidden') ?
                        'rotate(0deg)' : 'rotate(180deg)';
                }
            });
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (mobileMenu && !mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Intersection Observer for progressive loading animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const delay = element.dataset.delay || 0;

                    setTimeout(() => {
                        element.classList.add('visible');
                    }, delay * 1000);
                }
            });
        }, observerOptions);

        // Observe all animated elements for progressive loading
        const animatedElements = document.querySelectorAll(
            '.fade-in, .slide-in-left, .slide-in-right, .scale-in, .gallery-item');
        animatedElements.forEach(el => observer.observe(el));

        // Smooth counter animation for statistics
        function animateCounter(el, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const current = Math.floor(progress * (end - start) + start);
                el.textContent = current + (progress === 1 ? '+' : '');
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        // Counter animation trigger
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    animateCounter(counter, 0, 100, 2000);
                    counterObserver.unobserve(counter);
                }
            });
        }, {
            threshold: 0.5
        });

        const counterElement = document.querySelector('.counter-animation');
        if (counterElement) {
            counterObserver.observe(counterElement);
        }

        // Staggered gallery animation for progressive loading
        const galleryItems = document.querySelectorAll('.gallery-item');
        galleryItems.forEach((item, index) => {
            item.style.transitionDelay = `${index * 0.1}s`;
        });

        // Smooth scroll for navigation links
        const navLinks = document.querySelectorAll('a[href^="#"]');
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const targetId = link.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Enhanced navbar scroll effect with smooth transitions
        let lastScrollY = window.scrollY;
        const navbar = document.getElementById('navbar');
        const links = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', function() {
            const currentScrollY = window.scrollY;

            // Update scroll progress indicator
            const scrollProgress = (currentScrollY / (document.documentElement.scrollHeight - window
                .innerHeight)) * 100;
            const progressElement = document.querySelector('.scroll-progress');
            if (progressElement) {
                progressElement.style.width = `${scrollProgress}%`;
            }

            // Navbar color change with smooth transitions
            if (currentScrollY > 10) {
                navbar.classList.remove('bg-black');
                navbar.classList.add('bg-[#ffe066]');
                links.forEach(link => {
                    link.classList.remove('text-[#ffe066]');
                    link.classList.add('text-black');
                });
            } else {
                navbar.classList.add('bg-black');
                navbar.classList.remove('bg-[#ffe066]');
                links.forEach(link => {
                    link.classList.add('text-[#ffe066]');
                    link.classList.remove('text-black');
                });
            }

            // Navbar hide/show on scroll for better UX (only on desktop)
            if (window.innerWidth >= 1024) {
                if (currentScrollY > lastScrollY && currentScrollY > 100) {
                    navbar.style.transform = 'translateY(-100%)';
                } else {
                    navbar.style.transform = 'translateY(0)';
                }
            }

            lastScrollY = currentScrollY;
        });

        // Dropdown toggle with enhanced animation
        const layananBtn = document.getElementById('layanan-menu-btn');
        const layananDropdown = document.getElementById('layanan-dropdown');
        const layananChevron = document.getElementById('layanan-chevron');

        document.addEventListener('click', function(e) {
            if (layananBtn && layananBtn.contains(e.target)) {
                e.preventDefault();
                layananDropdown.classList.toggle('opacity-0');
                layananDropdown.classList.toggle('invisible');
                layananDropdown.classList.toggle('opacity-100');
                layananDropdown.classList.toggle('visible');
                layananChevron.classList.toggle('hidden');

                // Add rotation animation to chevron for interactive feedback
                if (layananChevron.classList.contains('hidden')) {
                    layananChevron.style.transform = 'rotate(0deg)';
                } else {
                    layananChevron.style.transform = 'rotate(180deg)';
                }
            } else if (layananDropdown && !layananDropdown.contains(e.target)) {
                layananDropdown.classList.add('opacity-0', 'invisible');
                layananDropdown.classList.remove('opacity-100', 'visible');
                layananChevron.classList.add('hidden');
                layananChevron.style.transform = 'rotate(0deg)';
            }
        });

        // Interactive feedback - Mouse move parallax effect for images (only on desktop)
        const imageContainers = document.querySelectorAll('.image-hover');
        imageContainers.forEach(container => {
            container.addEventListener('mousemove', (e) => {
                if (window.innerWidth >= 768) { // Only on tablet and desktop
                    const rect = container.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    const rotateX = (y - centerY) / 10;
                    const rotateY = (centerX - x) / 10;

                    container.style.transform =
                        `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
                }
            });

            container.addEventListener('mouseleave', () => {
                container.style.transform =
                    'perspective(1000px) rotateX(0deg) rotateY(0deg) scale(1)';
            });
        });

        // Magnetic effect for buttons - Interactive feedback (only on desktop)
        const magneticButtons = document.querySelectorAll('.magnetic');
        magneticButtons.forEach(button => {
            button.addEventListener('mousemove', (e) => {
                if (window.innerWidth >= 768) { // Only on tablet and desktop
                    const rect = button.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;

                    button.style.transform =
                        `translate(${x * 0.1}px, ${y * 0.1}px) scale(1.05)`;
                }
            });

            button.addEventListener('mouseleave', () => {
                button.style.transform = 'translate(0px, 0px) scale(1)';
            });
        });

        // Performance optimization - Image loading animation
        const images = document.querySelectorAll('img');
        images.forEach(img => {
            img.addEventListener('load', function() {
                this.parentElement.style.background = 'none';
                this.parentElement.style.animation = 'none';
            });
        });

        // Staggered animation for advantages - Progressive loading
        const advantages = document.querySelectorAll('.fade-in[data-delay]');
        advantages.forEach((advantage, index) => {
            setTimeout(() => {
                advantage.classList.add('visible');
            }, index * 200);
        });

        // Performance optimization - Throttle scroll events
        let ticking = false;

        function updateOnScroll() {
            if (!ticking) {
                requestAnimationFrame(() => {
                    // Update scroll progress
                    const scrollTop = window.pageYOffset;
                    const docHeight = document.body.offsetHeight - window.innerHeight;
                    const scrollPercent = (scrollTop / docHeight) * 100;
                    const scrollProgress = document.querySelector('.scroll-progress');
                    if (scrollProgress) {
                        scrollProgress.style.width = scrollPercent + '%';
                    }

                    ticking = false;
                });
                ticking = true;
            }
        }

        window.addEventListener('scroll', updateOnScroll);

        // Handle window resize
        window.addEventListener('resize', function() {
            // Close mobile menu on resize to desktop
            if (window.innerWidth >= 1024 && mobileMenu) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Initialize animations
        setTimeout(() => {
            document.body.classList.add('animations-ready');
        }, 100);
    });
</script>
