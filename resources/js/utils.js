// ===== SIMPLIFIED ANIMATION SYSTEM =====

// Navbar scroll effect
export function setupNavbarScroll() {
    const navbar = document.getElementById('main-navbar');
    if (!navbar) return;

    function updateNavbar() {
        const currentScrollY = window.scrollY;
        if (currentScrollY > 30) {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-white', 'shadow-md');
        } else {
            navbar.classList.add('bg-transparent');
            navbar.classList.remove('bg-white', 'shadow-md');
        }
    }

    window.addEventListener('scroll', updateNavbar, { passive: true });
}

// Enhanced Count Up Animation
export function animateCount(selector, target = 20, duration = 1500) {
    const el = document.querySelector(selector);
    if (!el) return;

    const start = 0;
    const increment = target / (duration / 16); // 60fps
    let current = start;

    function update() {
        current += increment;
        if (current < target) {
            el.textContent = Math.floor(current);
            requestAnimationFrame(update);
        } else {
            el.textContent = target;
            el.classList.add('count-animation');
        }
    }

    update();
}

// Parallax effect for images on mouse move
function setupParallaxImages() {
    const imgs = document.querySelectorAll('.parallax-img');
    imgs.forEach(img => {
        img.addEventListener('mousemove', (e) => {
            const rect = img.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const xPercent = (x / rect.width - 0.5) * 2; // -1 to 1
            const yPercent = (y / rect.height - 0.5) * 2;
            img.style.transform = `scale(1.05) translate(${xPercent * 8}px, ${yPercent * 8}px)`;
        });
        img.addEventListener('mouseleave', () => {
            img.style.transform = '';
        });
    });
}

// Initialize basic animations
export function initializeAnimations() {
    console.log('Initializing basic animations...');

    setupNavbarScroll();
    animateCount('#project-count', 20, 1200);
    setupParallaxImages();

    console.log('Basic animations initialized successfully');
}
