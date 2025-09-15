// Konsultasi Success Popup
class KonsultasiPopup {
    constructor() {
        this.init();
    }

    init() {
        console.log('KonsultasiPopup initialized');
        // Check if there's a success message from session
        this.checkSuccessMessage();
        
        // Listen for form submission
        this.handleFormSubmission();
    }

    checkSuccessMessage() {
        // Check if there's a success message in the DOM
        const successMessage = document.querySelector('[data-success="konsultasi"]');
        console.log('Success message found:', successMessage);
        
        if (successMessage) {
            // Show popup automatically after a short delay
            setTimeout(() => {
                console.log('Showing popup...');
                this.showPopup();
            }, 500);
        }
    }

    handleFormSubmission() {
        const form = document.querySelector('form[action*="konsultasi/kirim"]');
        console.log('Form found:', form);
        
        if (form) {
            form.addEventListener('submit', (e) => {
                console.log('Form submitted');
                // Show loading state
                this.showLoadingState(form);
            });
        }
    }

    showLoadingState(form) {
        const submitButton = form.querySelector('button[type="submit"]');
        if (submitButton) {
            const originalText = submitButton.innerHTML;
            submitButton.innerHTML = `
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-black inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Mengirim Konsultasi...
            `;
            submitButton.disabled = true;
            submitButton.classList.add('opacity-75', 'cursor-not-allowed');
        }
    }

    showPopup() {
        console.log('Creating popup...');
        
        // Get popup data if available
        const popupData = document.getElementById('popup-data');
        let nama = 'Anda';
        let kategori = 'layanan';
        let timestamp = '';
        let formattedLocalTime = '';

        if (popupData) {
            nama = popupData.dataset.nama || 'Anda';
            kategori = popupData.dataset.kategori || 'layanan';
            timestamp = popupData.dataset.timestamp || '';
            // Jika timestamp dalam ISO, format ke waktu lokal pengguna
            if (timestamp) {
                try {
                    const date = new Date(timestamp);
                    if (!isNaN(date)) {
                        const options = {
                            year: 'numeric',
                            month: 'short',
                            day: '2-digit',
                            hour: '2-digit',
                            minute: '2-digit',
                            hour12: false
                        };
                        formattedLocalTime = new Intl.DateTimeFormat(undefined, options).format(date);
                    }
                } catch (e) {
                    console.warn('Failed to parse timestamp for local timezone:', e);
                }
            }
            console.log('Popup data:', { nama, kategori, timestamp, formattedLocalTime });
        }

        // Create popup HTML
        const popupHTML = `
            <div id="konsultasi-popup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
                <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full mx-4 transform transition-all duration-300 scale-95 opacity-0" id="popup-content">
                    <!-- Success Icon -->
                    <div class="text-center p-8">
                        <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-6">
                            <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Konsultasi Terkirim!</h3>
                        
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Terima kasih <strong>${nama}</strong>! Konsultasi kebutuhan <strong>${kategori}</strong> Anda telah berhasil dikirim ke tim admin Bangun Rumah Project. 
                            Kami akan segera menghubungi Anda untuk membahas lebih lanjut.
                        </p>
                        
                        ${(formattedLocalTime || timestamp) ? `
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 mb-4">
                            <div class="flex items-center justify-center">
                                <svg class="h-5 w-5 text-gray-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-sm text-gray-700 font-medium">Dikirim pada: ${formattedLocalTime || timestamp}</span>
                            </div>
                        </div>
                        ` : ''}
                        
                        <div class="space-y-3">
                            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 text-yellow-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-sm text-yellow-800 font-medium">Respon dalam 24 jam</span>
                                </div>
                            </div>
                            
                            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="text-sm text-blue-800 font-medium">Email konfirmasi telah dikirim</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8 space-y-3">
                            <button onclick="konsultasiPopup.closePopup()" class="w-full bg-yellow-400 text-black font-bold py-3 px-6 rounded-lg hover:bg-yellow-500 transition duration-300">
                                Tutup
                            </button>
                            
                            <a href="https://wa.me/6285333353609?text=Halo%2C%20saya%20${nama}%20sudah%20mengirim%20konsultasi%20untuk%20${kategori}%20dan%20ingin%20bertanya%20lebih%20lanjut" 
                               target="_blank"
                               class="w-full bg-green-500 text-white font-bold py-3 px-6 rounded-lg hover:bg-green-600 transition duration-300 inline-block text-center">
                                Chat WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Add popup to body
        document.body.insertAdjacentHTML('beforeend', popupHTML);
        console.log('Popup HTML added to body');

        // Animate popup in
        setTimeout(() => {
            const popupContent = document.getElementById('popup-content');
            if (popupContent) {
                popupContent.classList.remove('scale-95', 'opacity-0');
                popupContent.classList.add('scale-100', 'opacity-100');
                console.log('Popup animated in');
            }
        }, 100);

        // Add escape key listener
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                this.closePopup();
            }
        });

        // Add click outside listener
        const popup = document.getElementById('konsultasi-popup');
        if (popup) {
            popup.addEventListener('click', (e) => {
                if (e.target.id === 'konsultasi-popup') {
                    this.closePopup();
                }
            });
        }
    }

    closePopup() {
        console.log('Closing popup...');
        const popup = document.getElementById('konsultasi-popup');
        if (popup) {
            const popupContent = document.getElementById('popup-content');
            if (popupContent) {
                popupContent.classList.add('scale-95', 'opacity-0');
                popupContent.classList.remove('scale-100', 'opacity-100');
            }
            
            setTimeout(() => {
                popup.remove();
                console.log('Popup removed');
            }, 300);
        }
    }
}

// Initialize popup when DOM is loaded
let konsultasiPopup;
document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM loaded, initializing KonsultasiPopup');
    konsultasiPopup = new KonsultasiPopup();
});

// Make it globally accessible
window.konsultasiPopup = konsultasiPopup;
