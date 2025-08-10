// Map Module - Handles all map-related functionality
export class MapManager {
    constructor() {
        this.map = null;
        this.markers = [];
        this.defaultCoordinates = [-3.9557623, 122.4977225];
        this.defaultZoom = 15;
        this.isInitializing = false;
        this.initializedMaps = new Set();
    }

    // Check if Leaflet is available
    isLeafletAvailable() {
        if (typeof L === 'undefined') {
            console.error('Leaflet is not loaded. Please include Leaflet CSS and JS files.');
            return false;
        }
        return true;
    }

    // Initialize map with custom options
    initializeMap(mapId = 'map', coordinates = null, zoom = null, popupContent = null) {
        if (!this.isLeafletAvailable()) {
            return null;
        }

        // Prevent multiple initializations of the same map
        if (this.initializedMaps.has(mapId)) {
            console.log(`Map ${mapId} already initialized`);
            return this.map;
        }

        if (this.isInitializing) {
            console.log('Map initialization already in progress');
            return null;
        }

        const mapContainer = document.getElementById(mapId);
        if (!mapContainer) {
            console.error(`Map container with id '${mapId}' not found.`);
            return null;
        }

        // Use default values if not provided
        const coords = coordinates || this.defaultCoordinates;
        const zoomLevel = zoom || this.defaultZoom;
        const popup = popupContent || 'Bangun Rumah Project<br>Perumahan Pns, Blok A7, RT.400/RW.003, Kendari';

        this.isInitializing = true;

        // Add loading indicator
        mapContainer.innerHTML = '<div class="flex items-center justify-center h-full bg-gray-100"><div class="text-center"><div class="animate-spin rounded-full h-8 w-8 border-b-2 border-yellow-400 mx-auto mb-2"></div><p class="text-gray-600">Memuat peta...</p></div></div>';

        try {
            // Clear loading indicator and initialize map immediately
            mapContainer.innerHTML = '';

            // Initialize map
            this.map = L.map(mapId, {
                zoomControl: true,
                scrollWheelZoom: true,
                doubleClickZoom: true,
                boxZoom: true,
                keyboard: true,
                dragging: true,
                touchZoom: true
            }).setView(coords, zoomLevel);

            // Add OpenStreetMap tile layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors',
                maxZoom: 18,
                minZoom: 10
            }).addTo(this.map);

            // Add marker with popup
            const marker = L.marker(coords)
                .addTo(this.map)
                .bindPopup(popup)
                .openPopup();

            // Add custom marker icon
            const customIcon = L.divIcon({
                className: 'custom-marker',
                html: '<div style="background-color: #fbbf24; width: 24px; height: 24px; border-radius: 50%; border: 3px solid white; box-shadow: 0 2px 8px rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center;"><svg width="12" height="12" viewBox="0 0 24 24" fill="white"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg></div>',
                iconSize: [24, 24],
                iconAnchor: [12, 12]
            });

            // Apply custom icon to marker
            marker.setIcon(customIcon);

            // Add zoom control
            this.map.zoomControl.setPosition('topright');

            // Fit bounds to ensure marker is visible
            this.map.fitBounds(marker.getLatLng().toBounds(1000));

            // Mark as initialized
            this.initializedMaps.add(mapId);
            this.isInitializing = false;

            // Force map to resize after initialization
            setTimeout(() => {
                this.map.invalidateSize();
                console.log('Map initialized successfully');
            }, 100);

            return this.map;

        } catch (error) {
            console.error('Error initializing map:', error);
            mapContainer.innerHTML = '<div class="flex items-center justify-center h-full bg-red-50"><div class="text-center"><p class="text-red-600">Gagal memuat peta</p><p class="text-sm text-red-500 mt-1">Silakan refresh halaman</p></div></div>';
            this.isInitializing = false;
            return null;
        }
    }

    // Initialize map for contact page
    initializeContactMap() {
        // Only initialize if not already done
        if (this.initializedMaps.has('map')) {
            return;
        }

        const initMap = () => {
            this.initializeMap('map', [-3.9557623, 122.4977225], 15, 'Bangun Rumah Project<br>Perumahan Pns, Blok A7, RT.400/RW.003, Kendari');
        };

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => {
                setTimeout(initMap, 100);
            });
        } else {
            setTimeout(initMap, 100);
        }
    }

    // Get current location and center map
    centerMapOnLocation(callback) {
        if (!this.map) {
            console.error('Map not initialized');
            return;
        }

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const lat = position.coords.latitude;
                    const lng = position.coords.longitude;
                    this.map.setView([lat, lng], 15);

                    // Add user location marker
                    L.marker([lat, lng])
                        .addTo(this.map)
                        .bindPopup('Lokasi Anda')
                        .openPopup();

                    if (callback) callback([lat, lng]);
                },
                (error) => {
                    console.error('Error getting location:', error);
                    if (callback) callback(null);
                }
            );
        } else {
            console.error('Geolocation is not supported by this browser.');
            if (callback) callback(null);
        }
    }

    // Add marker to map
    addMarker(coordinates, popupContent = '') {
        if (!this.map) {
            console.error('Map not initialized');
            return null;
        }

        const marker = L.marker(coordinates)
            .addTo(this.map)
            .bindPopup(popupContent);

        this.markers.push(marker);
        return marker;
    }

    // Remove all markers
    clearMarkers() {
        this.markers.forEach(marker => {
            this.map.removeLayer(marker);
        });
        this.markers = [];
    }

    // Resize map
    resize() {
        if (this.map) {
            this.map.invalidateSize();
        }
    }

    // Check if map is initialized
    isMapInitialized(mapId = 'map') {
        return this.initializedMaps.has(mapId);
    }
}

// Create global instance
export const mapManager = new MapManager();

// Auto-initialize for backward compatibility - but only once
let autoInitialized = false;
const autoInit = () => {
    if (!autoInitialized) {
        mapManager.initializeContactMap();
        autoInitialized = true;
    }
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(autoInit, 500);
    });
} else {
    setTimeout(autoInit, 500);
}
