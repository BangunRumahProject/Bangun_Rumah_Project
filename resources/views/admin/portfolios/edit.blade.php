@extends('admin.layouts.app')

@section('title', 'Edit Portfolio')

@section('content')
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-2xl font-semibold text-gray-900">Edit Portfolio</h1>
                <p class="mt-2 text-sm text-gray-700">Edit informasi portfolio yang sudah ada</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="{{ route('admin.portfolios.index') }}"
                    class="inline-flex items-center justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 sm:w-auto">
                    Kembali
                </a>
            </div>
        </div>

        <div class="mt-8">
            <form method="POST" action="{{ route('admin.portfolios.update', $portfolio->id) }}"
                enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul Portfolio
                                    *</label>
                                <div class="mt-1">
                                    <input type="text" name="title" id="title"
                                        value="{{ old('title', $portfolio->title) }}" required
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm px-4 py-3 transition-all duration-200">
                                </div>
                                @error('title')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi
                                    *</label>
                                <div class="mt-1">
                                    <textarea name="description" id="description" rows="4" required
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm px-4 py-3 transition-all duration-200">{{ old('description', $portfolio->description) }}</textarea>
                                </div>
                                @error('description')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Kategori
                                    *</label>
                                <div class="mt-1">
                                    <select name="category" id="category" required
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm px-4 py-3 transition-all duration-200">
                                        <option value="">Pilih kategori</option>
                                        <option value="interior"
                                            {{ old('category', $portfolio->category) == 'interior' ? 'selected' : '' }}>
                                            Interior</option>
                                        <option value="eksterior"
                                            {{ old('category', $portfolio->category) == 'eksterior' ? 'selected' : '' }}>
                                            Eksterior</option>
                                        <option value="landscape"
                                            {{ old('category', $portfolio->category) == 'landscape' ? 'selected' : '' }}>
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
                                    value="{{ old('build_duration', $portfolio->build_duration) }}"
                                    placeholder="cth: 3 bulan, 12 minggu"
                                    class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm px-4 py-3 transition-all duration-200">
                                @error('build_duration')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status *</label>
                                <div class="mt-1">
                                    <select name="status" id="status" required
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm px-4 py-3 transition-all duration-200">
                                        <option value="">Pilih status</option>
                                        <option value="completed"
                                            {{ old('status', $portfolio->status) == 'completed' ? 'selected' : '' }}>
                                            Selesai</option>
                                        <option value="ongoing"
                                            {{ old('status', $portfolio->status) == 'ongoing' ? 'selected' : '' }}>Sedang
                                            Berjalan</option>
                                        <option value="planning"
                                            {{ old('status', $portfolio->status) == 'planning' ? 'selected' : '' }}>
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
                                    <input type="text" name="location" id="location"
                                        value="{{ old('location', $portfolio->location) }}"
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm px-4 py-3 transition-all duration-200"
                                        placeholder="Contoh: Jakarta Selatan">
                                </div>
                                @error('location')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="year" class="block text-sm font-medium text-gray-700 mb-2">Tahun</label>
                                <div class="mt-1">
                                    <input type="number" name="year" id="year"
                                        value="{{ old('year', $portfolio->year) }}" min="1900" max="2030"
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm px-4 py-3 transition-all duration-200"
                                        placeholder="2024">
                                </div>
                                @error('year')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="area" class="block text-sm font-medium text-gray-700 mb-2">Luas (m²)</label>
                                <div class="mt-1">
                                    <input type="number" name="area" id="area"
                                        value="{{ old('area', $portfolio->area) }}" min="0.01" step="0.01"
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm px-4 py-3 transition-all duration-200"
                                        placeholder="150.00">
                                </div>
                                @error('area')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="sort_order"
                                    class="block text-sm font-medium text-gray-700 mb-2">Urutan</label>
                                <div class="mt-1">
                                    <input type="number" name="sort_order" id="sort_order"
                                        value="{{ old('sort_order', $portfolio->sort_order) }}" min="0"
                                        class="block w-full rounded-lg border-2 border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 sm:text-sm px-4 py-3 transition-all duration-200"
                                        placeholder="0">
                                </div>
                                @error('sort_order')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Gambar
                                    Portfolio</label>
                                <div class="mt-1">
                                    <input type="file" name="image" id="image" accept="image/*"
                                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-3 file:px-4 file:rounded-lg file:border-2 file:border-yellow-500 file:text-sm file:font-medium file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 file:transition-all file:duration-200">
                                </div>
                                <p class="mt-1 text-sm text-gray-500">Format: JPEG, PNG, GIF, WebP. Maksimal 10MB.
                                    Kosongkan jika tidak ingin mengubah gambar.</p>

                                <!-- Current Image Preview -->
                                @if ($portfolio->image)
                                    <div class="mt-4">
                                        <p class="text-sm font-medium text-gray-700 mb-2">Gambar Saat Ini:</p>
                                        <img src="{{ Storage::url($portfolio->image) }}" alt="Current Image"
                                            class="w-32 h-32 object-cover rounded-lg border">
                                    </div>
                                @endif

                                @error('image')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <div
                                    class="flex items-center p-4 border-2 border-gray-200 rounded-lg bg-gray-50 hover:bg-gray-100 transition-all duration-200">
                                    <input type="checkbox" name="is_featured" id="is_featured" value="1"
                                        {{ old('is_featured', $portfolio->is_featured) ? 'checked' : '' }}
                                        class="h-5 w-5 text-yellow-600 focus:ring-yellow-500 border-2 border-gray-300 rounded transition-all duration-200">
                                    <label for="is_featured"
                                        class="ml-3 block text-sm font-medium text-gray-900 cursor-pointer">
                                        <span class="text-yellow-600 font-semibold">⭐</span> Tandai sebagai portfolio
                                        unggulan
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
                        @if ($portfolio->images && $portfolio->images->count() > 0)
                            <div class="mb-6">
                                <p class="text-sm text-gray-600 mb-2">Gambar tambahan saat ini (bisa edit/hapus):</p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    @foreach ($portfolio->images as $img)
                                        <div class="border rounded-lg bg-gray-50 p-4">
                                            <div class="flex items-start gap-4">
                                                <img src="{{ Storage::url($img->image) }}"
                                                    alt="{{ $img->title ?? 'Additional Image' }}"
                                                    class="w-28 h-28 object-cover rounded border">
                                                <div class="flex-1 grid grid-cols-1 gap-3">
                                                    <div>
                                                        <label class="block text-xs font-medium text-gray-700">Ganti File
                                                            (opsional)
                                                        </label>
                                                        <input type="file"
                                                            name="existing_images_files[{{ $img->id }}]"
                                                            accept="image/*"
                                                            class="mt-1 block w-full text-xs text-gray-600">
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="block text-xs font-medium text-gray-700">Judul</label>
                                                        <input type="text"
                                                            name="existing_images[{{ $img->id }}][title]"
                                                            value="{{ old('existing_images.' . $img->id . '.title', $img->title) }}"
                                                            maxlength="255"
                                                            class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 text-sm">
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="block text-xs font-medium text-gray-700">Deskripsi</label>
                                                        <textarea name="existing_images[{{ $img->id }}][description]" rows="2" maxlength="1000"
                                                            class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 text-sm">{{ old('existing_images.' . $img->id . '.description', $img->description) }}</textarea>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="block text-xs font-medium text-gray-700">Urutan</label>
                                                        <input type="number"
                                                            name="existing_images[{{ $img->id }}][sort_order]"
                                                            value="{{ old('existing_images.' . $img->id . '.sort_order', $img->sort_order) }}"
                                                            class="mt-1 block w-28 rounded border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 text-sm">
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <input id="del-{{ $img->id }}" type="checkbox"
                                                            name="existing_images_delete[]" value="{{ $img->id }}"
                                                            class="h-4 w-4 text-red-600 border-gray-300 rounded">
                                                        <label for="del-{{ $img->id }}"
                                                            class="text-xs text-red-600">Hapus gambar ini</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <p class="mt-2 text-xs text-gray-500">Catatan: Gambar tambahan yang Anda unggah akan
                                    ditambahkan tanpa menghapus gambar yang sudah ada.</p>
                            </div>
                        @endif

                        <div id="additional-images-container" class="space-y-4"></div>
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
                            @if ($portfolio->features && count($portfolio->features) > 0)
                                @foreach ($portfolio->features as $feature)
                                    <div class="flex items-center space-x-3">
                                        <input type="text" name="features[]"
                                            class="flex-1 rounded-lg border-2 border-gray-300 px-4 py-3 focus:outline-none focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 @error('features.*') border-red-500 @enderror transition-all duration-200"
                                            placeholder="Masukkan fitur utama project" value="{{ $feature }}"
                                            minlength="2" maxlength="255">
                                        <button type="button" onclick="removeFeature(this)"
                                            class="text-red-500 hover:text-red-700 p-3 rounded-lg hover:bg-red-50 transition-all duration-200 border-2 border-red-200 hover:border-red-300">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                @endforeach
                            @else
                                <div class="flex items-center space-x-3">
                                    <input type="text" name="features[]"
                                        class="flex-1 rounded-lg border-2 border-gray-300 px-4 py-3 focus:outline-none focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 @error('features.*') border-red-500 @enderror transition-all duration-200"
                                        placeholder="Masukkan fitur utama project" minlength="2" maxlength="255">
                                    <button type="button" onclick="removeFeature(this)"
                                        class="text-red-500 hover:text-red-700 p-3 rounded-lg hover:bg-red-50 transition-all duration-200 border-2 border-red-200 hover:border-red-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            @endif
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
                            @if ($portfolio->advantages && count($portfolio->advantages) > 0)
                                @foreach ($portfolio->advantages as $advantage)
                                    <div class="flex items-center space-x-3">
                                        <input type="text" name="advantages[]"
                                            class="flex-1 rounded-lg border-2 border-gray-300 px-4 py-3 focus:outline-none focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 @error('advantages.*') border-red-500 @enderror transition-all duration-200"
                                            placeholder="Masukkan keunggulan project" value="{{ $advantage }}"
                                            minlength="2" maxlength="255">
                                        <button type="button" onclick="removeAdvantage(this)"
                                            class="text-red-500 hover:text-red-700 p-3 rounded-lg hover:bg-red-50 transition-all duration-200 border-2 border-red-200 hover:border-red-300">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                @endforeach
                            @else
                                <div class="flex items-center space-x-3">
                                    <input type="text" name="advantages[]"
                                        class="flex-1 rounded-lg border-2 border-gray-300 px-4 py-3 focus:outline-none focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 @error('advantages.*') border-red-500 @enderror transition-all duration-200"
                                        placeholder="Masukkan keunggulan project" minlength="2" maxlength="255">
                                    <button type="button" onclick="removeAdvantage(this)"
                                        class="text-red-500 hover:text-red-700 p-3 rounded-lg hover:bg-red-50 transition-all duration-200 border-2 border-red-200 hover:border-red-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            @endif
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
                        class="bg-yellow-400 border border-transparent rounded-md shadow-sm py-2 px-4 text-sm font-medium text-black hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                        Update Portfolio
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
                            <label class="block text_sm font-medium text-gray-700">Deskripsi Gambar</label>
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
            const el = document.getElementById(fieldId);
            if (el) el.remove();
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
                    class="flex-1 rounded-lg border-2 border-gray-300 px-4 py-3 focus:outline-none focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50"
                    placeholder="Masukkan fitur utama project" minlength="2" maxlength="255">
                <button type="button" onclick="removeFeature(this)"
                    class="text-red-500 hover:text-red-700 p-3 rounded-lg hover:bg-red-50 transition-all duration-200 border-2 border-red-200 hover:border-red-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                </button>
            `;
            container.appendChild(featureDiv);
        }

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
            advantageDiv.className = 'flex items_center space-x-3';
            advantageDiv.innerHTML = `
                <input type="text" name="advantages[]"
                    class="flex-1 rounded-lg border-2 border-gray-300 px-4 py-3 focus:outline-none focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50"
                    placeholder="Masukkan keunggulan project" minlength="2" maxlength="255">
                <button type="button" onclick="removeAdvantage(this)"
                    class="text-red-500 hover:text-red-700 p-3 rounded-lg hover:bg-red-50 transition-all duration-200 border-2 border-red-200 hover:border-red-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                </button>
            `;
            container.appendChild(advantageDiv);
        }

        function removeAdvantage(button) {
            const container = document.getElementById('advantages-container');
            if (container.children.length > 1) {
                button.parentElement.remove();
            } else {
                alert('Minimal harus ada 1 keunggulan');
            }
        }
    </script>
@endsection
