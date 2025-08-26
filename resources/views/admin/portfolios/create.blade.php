@extends('admin.layouts.app')

@section('title', 'Tambah Portfolio Baru')

@section('content')
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-2xl font-semibold text-gray-900">Tambah Portfolio Baru</h1>
                <p class="mt-2 text-sm text-gray-700">Buat portfolio project baru</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="{{ route('admin.portfolios.index') }}"
                    class="inline-flex items-center justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 sm:w-auto">
                    Kembali
                </a>
            </div>
        </div>

        <div class="mt-8">
            <form method="POST" action="{{ route('admin.portfolios.store') }}" enctype="multipart/form-data"
                class="space-y-6" id="portfolio-form">
                @csrf

                <div class="bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul Portfolio
                                    *</label>
                                <div class="mt-1">
                                    <input type="text" name="title" id="title" value="{{ old('title') }}" required
                                        minlength="3" maxlength="255"
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm @error('title') border-red-500 @enderror px-4 py-3 transition-all duration-200"
                                        placeholder="Masukkan judul portfolio">
                                </div>
                                @error('title')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <p class="mt-1 text-xs text-gray-500">Minimal 3 karakter, maksimal 255 karakter</p>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi
                                    *</label>
                                <div class="mt-1">
                                    <textarea name="description" id="description" rows="4" required minlength="10" maxlength="2000"
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm @error('description') border-red-500 @enderror px-4 py-3 transition-all duration-200"
                                        placeholder="Deskripsi lengkap project...">{{ old('description') }}</textarea>
                                </div>
                                @error('description')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <p class="mt-1 text-xs text-gray-500">Minimal 10 karakter, maksimal 2000 karakter</p>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Kategori
                                    *</label>
                                <div class="mt-1">
                                    <select name="category" id="category" required
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm @error('category') border-red-500 @enderror px-4 py-3 transition-all duration-200">
                                        <option value="">Pilih kategori</option>
                                        <option value="interior" {{ old('category') == 'interior' ? 'selected' : '' }}>
                                            Interior</option>
                                        <option value="eksterior" {{ old('category') == 'eksterior' ? 'selected' : '' }}>
                                            Eksterior</option>
                                        <option value="landscape" {{ old('category') == 'landscape' ? 'selected' : '' }}>
                                            Landscape</option>
                                    </select>
                                </div>
                                @error('category')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="build_duration" class="block text-sm font-medium text-gray-700 mb-2">Jangka
                                    Waktu Pembangunan</label>
                                <input type="text" name="build_duration" id="build_duration"
                                    value="{{ old('build_duration') }}" placeholder="cth: 3 bulan, 12 minggu"
                                    class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm px-4 py-3 transition-all duration-200">
                                @error('build_duration')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status *</label>
                                <div class="mt-1">
                                    <select name="status" id="status" required
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm @error('status') border-red-500 @enderror px-4 py-3 transition-all duration-200">
                                        <option value="">Pilih status</option>
                                        <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>
                                            Selesai</option>
                                        <option value="ongoing" {{ old('status') == 'ongoing' ? 'selected' : '' }}>Sedang
                                            Berjalan</option>
                                        <option value="planning" {{ old('status') == 'planning' ? 'selected' : '' }}>
                                            Perencanaan</option>
                                    </select>
                                </div>
                                @error('status')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Lokasi</label>
                                <div class="mt-1">
                                    <input type="text" name="location" id="location" value="{{ old('location') }}"
                                        minlength="2" maxlength="255"
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm @error('location') border-red-500 @enderror px-4 py-3 transition-all duration-200"
                                        placeholder="Contoh: Jakarta Selatan">
                                </div>
                                @error('location')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <p class="mt-1 text-xs text-gray-500">Minimal 2 karakter, maksimal 255 karakter</p>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="year" class="block text-sm font-medium text-gray-700 mb-2">Tahun</label>
                                <div class="mt-1">
                                    <input type="number" name="year" id="year" value="{{ old('year') }}"
                                        min="1900" max="2030"
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm @error('year') border-red-500 @enderror px-4 py-3 transition-all duration-200"
                                        placeholder="Contoh: 2025">
                                </div>
                                @error('year')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <p class="mt-1 text-xs text-gray-500">Minimal 1900, maksimal 2030</p>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="area" class="block text-sm font-medium text-gray-700 mb-2">Luas Area
                                    (m²)</label>
                                <div class="mt-1">
                                    <input type="number" name="area" id="area" value="{{ old('area') }}"
                                        step="0.01" min="0.01" max="999999999.99"
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm @error('area') border-red-500 @enderror px-4 py-3 transition-all duration-200"
                                        placeholder="Contoh: 180.50">
                                </div>
                                @error('area')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <p class="mt-1 text-xs text-gray-500">Minimal 0.01 m², maksimal 999,999,999.99 m²</p>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="sort_order"
                                    class="block text-sm font-medium text-gray-700 mb-2">Urutan</label>
                                <div class="mt-1">
                                    <input type="number" name="sort_order" id="sort_order"
                                        value="{{ old('sort_order') }}" min="0" max="999"
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm @error('sort_order') border-red-500 @enderror px-4 py-3 transition-all duration-200"
                                        placeholder="Contoh: 1">
                                </div>
                                @error('sort_order')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <p class="mt-1 text-xs text-gray-500">Minimal 0, maksimal 999</p>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Gambar Utama
                                    Portfolio *</label>
                                <div class="mt-1">
                                    <input type="file" name="image" id="image" required accept="image/*"
                                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-3 file:px-4 file:rounded-lg file:border-2 file:border-yellow-500 file:text-sm file:font-semibold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 file:transition-all file:duration-200 @error('image') border-red-500 @enderror">
                                </div>
                                @error('image')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <p class="mt-1 text-xs text-gray-500">Format: JPEG, PNG, JPG, GIF, WebP. Maksimal 10MB</p>
                            </div>

                            <div class="sm:col-span-6">
                                <div
                                    class="flex items-center p-4 border-2 border-gray-200 rounded-lg bg-gray-50 hover:bg-gray-100 transition-all duration-200">
                                    <input type="checkbox" name="is_featured" id="is_featured" value="1"
                                        {{ old('is_featured') ? 'checked' : '' }}
                                        class="h-5 w-5 text-yellow-600 focus:ring-yellow-500 border-2 border-gray-300 rounded transition-all duration-200">
                                    <label for="is_featured"
                                        class="ml-3 block text-sm font-medium text-gray-900 cursor-pointer">
                                        <span class="text-yellow-600 font-semibold">⭐</span> Tandai sebagai Portfolio
                                        Unggulan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Images Section -->
                <div class="bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Gambar Tambahan Portfolio</h3>
                        <div id="additional-images-container" class="space-y-4">
                            <!-- Additional image fields will be added here -->
                        </div>
                        <button type="button" onclick="addImageField()"
                            class="mt-4 inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Tambah Gambar
                        </button>
                    </div>
                </div>

                <!-- Features Section -->
                <div class="bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <label class="block text-sm font-medium text-gray-700 mb-4">
                            Fitur Utama <span class="text-red-500">*</span>
                        </label>
                        <div id="features-container" class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <input type="text" name="features[]"
                                    class="flex-1 rounded-lg border-2 border-gray-300 px-4 py-3 focus:outline-none focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 transition-all duration-200"
                                    placeholder="Masukkan fitur utama project" minlength="2" maxlength="255">
                                <button type="button" onclick="removeFeature(this)"
                                    class="text-red-500 hover:text-red-700 p-3 rounded-lg hover:bg-red-50 transition-all duration-200 border-2 border-red-200 hover:border-red-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <button type="button" onclick="addFeature()"
                            class="mt-4 text-yellow-600 hover:text-yellow-700 text-sm font-medium flex items-center px-4 py-2 border-2 border-yellow-300 rounded-lg hover:bg-yellow-50 transition-all duration-200">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Tambah Fitur
                        </button>
                        <p class="mt-2 text-xs text-gray-500">Minimal 1 fitur, maksimal 10 fitur. Setiap fitur minimal 2
                            karakter.</p>
                        @error('features.*')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Advantages Section -->
                <div class="bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <label class="block text-sm font-medium text-gray-700 mb-4">
                            Keunggulan <span class="text-red-500">*</span>
                        </label>
                        <div id="advantages-container" class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <input type="text" name="advantages[]"
                                    class="flex-1 rounded-lg border-2 border-gray-300 px-4 py-3 focus:outline-none focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 transition-all duration-200"
                                    placeholder="Masukkan keunggulan project" minlength="2" maxlength="255">
                                <button type="button" onclick="removeAdvantage(this)"
                                    class="text-red-500 hover:text-red-700 p-3 rounded-lg hover:bg-red-50 transition-all duration-200 border-2 border-red-200 hover:border-red-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <button type="button" onclick="addAdvantage()"
                            class="mt-4 text-yellow-600 hover:text-yellow-700 text-sm font-medium flex items-center px-4 py-2 border-2 border-yellow-300 rounded-lg hover:bg-yellow-50 transition-all duration-200">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Tambah Keunggulan
                        </button>
                        <p class="mt-2 text-xs text-gray-500">Minimal 1 keunggulan, maksimal 10 keunggulan. Setiap
                            keunggulan minimal 2 karakter.</p>
                        @error('advantages.*')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.portfolios.index') }}"
                        class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                        Batal
                    </a>
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                        Simpan Portfolio
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        let imageFieldCount = 0;

        function addImageField() {
            const container = document.getElementById('additional-images-container');
            const fieldId = `image-field-${imageFieldCount}`;

            const fieldHtml = `
                <div id="${fieldId}" class="border border-gray-200 rounded-lg p-4 bg-gray-50">
                    <div class="flex justify-between items-center mb-3">
                        <h4 class="text-sm font-medium text-gray-900">Gambar ${imageFieldCount + 1}</h4>
                        <button type="button" onclick="removeImageField('${fieldId}')" class="text-red-600 hover:text-red-800">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">File Gambar</label>
                            <input type="file" name="additional_images[]" accept="image/*" 
                                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                            <p class="mt-1 text-xs text-gray-500">Format: JPEG, PNG, JPG, GIF, WebP. Maksimal 10MB</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Judul Gambar</label>
                            <input type="text" name="image_titles[]" maxlength="255" minlength="2"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm"
                                placeholder="Judul gambar">
                            <p class="mt-1 text-xs text-gray-500">Minimal 2 karakter, maksimal 255 karakter</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Deskripsi Gambar</label>
                            <textarea name="image_descriptions[]" rows="3" maxlength="1000"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm"
                                placeholder="Deskripsi gambar"></textarea>
                            <p class="mt-1 text-xs text-gray-500">Maksimal 1000 karakter</p>
                        </div>
                    </div>
                </div>
            `;

            container.insertAdjacentHTML('beforeend', fieldHtml);
            imageFieldCount++;
        }

        function removeImageField(fieldId) {
            document.getElementById(fieldId).remove();
        }

        // Add feature field
        function addFeature() {
            const container = document.getElementById('features-container');
            const featureCount = container.children.length;

            if (featureCount >= 10) {
                alert('Maksimal 10 fitur yang dapat ditambahkan');
                return;
            }

            const featureDiv = document.createElement('div');
            featureDiv.className = 'flex items-center space-x-3';
            featureDiv.innerHTML = `
                <input type="text" name="features[]" 
                    class="flex-1 rounded-lg border-2 border-gray-300 px-4 py-3 focus:outline-none focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 transition-all duration-200"
                    placeholder="Masukkan fitur utama project" 
                    minlength="2" maxlength="255">
                <button type="button" onclick="removeFeature(this)" 
                    class="text-red-500 hover:text-red-700 p-3 rounded-lg hover:bg-red-50 transition-all duration-200 border-2 border-red-200 hover:border-red-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                </button>
            `;
            container.appendChild(featureDiv);
        }

        // Remove feature field
        function removeFeature(button) {
            const container = document.getElementById('features-container');
            if (container.children.length > 1) {
                button.parentElement.remove();
            } else {
                alert('Minimal harus ada 1 fitur');
            }
        }

        // Add advantage field
        function addAdvantage() {
            const container = document.getElementById('advantages-container');
            const advantageCount = container.children.length;

            if (advantageCount >= 10) {
                alert('Maksimal 10 keunggulan yang dapat ditambahkan');
                return;
            }

            const advantageDiv = document.createElement('div');
            advantageDiv.className = 'flex items-center space-x-3';
            advantageDiv.innerHTML = `
                <input type="text" name="advantages[]" 
                    class="flex-1 rounded-lg border-2 border-gray-300 px-4 py-3 focus:outline-none focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 transition-all duration-200"
                    placeholder="Masukkan keunggulan project" 
                    minlength="2" maxlength="255">
                <button type="button" onclick="removeAdvantage(this)" 
                    class="text-red-500 hover:text-red-700 p-3 rounded-lg hover:bg-red-50 transition-all duration-200 border-2 border-red-200 hover:border-red-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                </button>
            `;
            container.appendChild(advantageDiv);
        }

        // Remove advantage field
        function removeAdvantage(button) {
            const container = document.getElementById('advantages-container');
            if (container.children.length > 1) {
                button.parentElement.remove();
            } else {
                alert('Minimal harus ada 1 keunggulan');
            }
        }

        // Form validation
        document.getElementById('portfolio-form').addEventListener('submit', function(e) {
            const title = document.getElementById('title').value.trim();
            const description = document.getElementById('description').value.trim();
            const category = document.getElementById('category').value;
            const status = document.getElementById('status').value;
            const image = document.getElementById('image').files[0];

            let isValid = true;
            let errorMessage = '';

            // Validate title
            if (title.length < 3) {
                errorMessage += 'Judul portfolio minimal 3 karakter\n';
                isValid = false;
            }

            // Validate description
            if (description.length < 10) {
                errorMessage += 'Deskripsi portfolio minimal 10 karakter\n';
                isValid = false;
            }

            // Validate category
            if (!category) {
                errorMessage += 'Kategori portfolio wajib dipilih\n';
                isValid = false;
            }

            // Validate status
            if (!status) {
                errorMessage += 'Status portfolio wajib dipilih\n';
                isValid = false;
            }

            // Validate image
            if (!image) {
                errorMessage += 'Gambar utama portfolio wajib diupload\n';
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault();
                alert('Mohon periksa form:\n\n' + errorMessage);
            }
        });

        // Add initial image field
        document.addEventListener('DOMContentLoaded', function() {
            addImageField();
        });
    </script>
@endsection
