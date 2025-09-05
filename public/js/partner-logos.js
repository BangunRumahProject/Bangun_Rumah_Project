// Partner Logos Infinite Scroll - Integrated in Kelebihan Kami Section
class PartnerLogosInfiniteScroll {
    constructor() {
        this.partnerData = [
            {
                name: "Bangun Rumah Project",
                logo: "/img/mitra/mitra1.png",
                alt: "Logo Bangun Rumah Project"
            },
            {
                name: "Desain Rumah Modern",
                logo: "/img/mitra/mitra2.jpg",
                alt: "Desain Rumah Modern 1"
            },
            {
                name: "Bangun Rumah Project",
                logo: "/img/mitra/mitra3.jpg",
                alt: "Logo Bangun Rumah Project"
            },
            {
                name: "Desain Rumah Modern",
                logo: "/img/mitra/mitra4.jpg",
                alt: "Desain Rumah Modern 1"
            },
            {
                name: "Bangun Rumah Project",
                logo: "/img/mitra/mitra5.jpg",
                alt: "Logo Bangun Rumah Project"
            },

        ];

        this.rows = document.querySelectorAll('.partner-logos-row');
        this.speed = 0.05; // Very slow speed for smooth scrolling
        this.init();
    }

    init() {
        this.createLogoElements();
        this.startAnimation();
        this.handleResize();
    }

    createLogoElements() {
        this.rows.forEach((row, rowIndex) => {
            // Create two sets of logos for seamless infinite scroll
            const logosSet1 = this.createLogosSet();
            const logosSet2 = this.createLogosSet();
            
            // Append both sets
            row.appendChild(logosSet1);
            row.appendChild(logosSet2);
            
            // Set initial position - all rows move to the left
            row.style.transform = 'translateX(0)';
        });
    }

    createLogosSet() {
        const logosContainer = document.createElement('div');
        logosContainer.className = 'flex space-x-6 logos-set';
        
        this.partnerData.forEach(partner => {
            const logoItem = this.createLogoItem(partner);
            logosContainer.appendChild(logoItem);
        });
        
        return logosContainer;
    }

    createLogoItem(partner) {
        const logoItem = document.createElement('div');
        logoItem.className = 'flex-shrink-0';
        
        // Create logo container with pure Tailwind classes
        logoItem.innerHTML = `
            <div class="group relative">
                <div class="w-20 h-20 sm:w-24 sm:h-24 lg:w-28 lg:h-28 bg-white/5 rounded-lg flex items-center justify-center p-3 backdrop-blur-sm border border-white/10 transition-all duration-300 hover:bg-white/10 hover:scale-110 hover:border-yellow-400/50 overflow-hidden shadow-lg">
                    <img src="${partner.logo}" 
                         alt="${partner.alt}" 
                         class="w-full h-full object-cover transition-all duration-300 group-hover:opacity-100"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="hidden items-center justify-center text-center text-xs text-gray-400 font-medium">
                        ${partner.name}
                    </div>
                </div>
                <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none z-10">
                    <div class="bg-black/90 text-white text-xs px-2 py-1 rounded whitespace-nowrap border border-yellow-400/30 shadow-lg">
                        ${partner.name}
                    </div>
                    <div class="w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-black/90 mx-auto"></div>
                </div>
            </div>
        `;
        
        return logoItem;
    }

    startAnimation() {
        let animationId;
        
        const animate = () => {
            this.rows.forEach((row, rowIndex) => {
                const currentTransform = row.style.transform;
                let currentX = 0;
                
                // Extract current X position
                if (currentTransform !== 'none') {
                    const match = currentTransform.match(/translateX\(([^)]+)%\)/);
                    if (match) {
                        currentX = parseFloat(match[1]);
                    }
                }
                
                // All rows move to the left
                let newX = currentX - this.speed;
                
                // Reset position when logos move completely out of view
                if (newX <= -50) {
                    newX = 0;
                }
                
                row.style.transform = `translateX(${newX}%)`;
            });
            
            animationId = requestAnimationFrame(animate);
        };
        
        animate();
        
        // Pause animation on hover
        this.rows.forEach(row => {
            row.addEventListener('mouseenter', () => {
                cancelAnimationFrame(animationId);
            });
            
            row.addEventListener('mouseleave', () => {
                animate();
            });
        });
    }

    handleResize() {
        window.addEventListener('resize', () => {
            // Reset positions on resize
            this.rows.forEach((row, rowIndex) => {
                row.style.transform = 'translateX(0)';
            });
        });
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new PartnerLogosInfiniteScroll();
});
