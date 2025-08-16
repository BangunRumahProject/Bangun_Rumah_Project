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
                class="space-y-6">
                @csrf

                <div class="bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Judul Portfolio
                                    *</label>
                                <div class="mt-1">
                                    <input type="text" name="title" id="title" value="{{ old('title') }}" required
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
                                </div>
                                @error('title')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi *</label>
                                <div class="mt-1">
                                    <textarea name="description" id="description" rows="4" required
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm"
                                        placeholder="Deskripsi lengkap project...">{{ old('description') }}</textarea>
                                </div>
                                @error('description')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="category" class="block text-sm font-medium text-gray-700">Kategori *</label>
                                <div class="mt-1">
                                    <select name="category" id="category" required
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
                                        <option value="">Pilih kategori</option>
                                        <option value="rumah" {{ old('category') == 'rumah' ? 'selected' : '' }}>Rumah
                                        </option>
                                        <option value="interior" {{ old('category') == 'interior' ? 'selected' : '' }}>
                                            Interior</option>
                                        <option value="eksterior" {{ old('category') == 'eksterior' ? 'selected' : '' }}>
                                            Eksterior</option>
                                    </select>
                                </div>
                                @error('category')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="status" class="block text-sm font-medium text-gray-700">Status *</label>
                                <div class="mt-1">
                                    <select name="status" id="status" required
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
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
                                <label for="location" class="block text-sm font-medium text-gray-700">Lokasi</label>
                                <div class="mt-1">
                                    <input type="text" name="location" id="location" value="{{ old('location') }}"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm"
                                        placeholder="Contoh: Jakarta Selatan">
                                </div>
                                @error('location')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="year" class="block text-sm font-medium text-gray-700">Tahun</label>
                                <div class="mt-1">
                                    <input type="number" name="year" id="year" value="{{ old('year') }}"
                                        min="1900" max="{{ date('Y') + 5 }}"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm"
                                        placeholder="2024">
                                </div>
                                @error('year')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="area" class="block text-sm font-medium text-gray-700">Luas (m²)</label>
                                <div class="mt-1">
                                    <input type="number" name="area" id="area" value="{{ old('area') }}"
                                        min="0" step="0.01"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm"
                                        placeholder="150.00">
                                </div>
                                @error('area')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="sort_order" class="block text-sm font-medium text-gray-700">Urutan</label>
                                <div class="mt-1">
                                    <input type="number" name="sort_order" id="sort_order"
                                        value="{{ old('sort_order') }}" min="0"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm"
                                        placeholder="0">
                                </div>
                                @error('sort_order')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="image" class="block text-sm font-medium text-gray-700">Gambar Utama
                                    Portfolio *</label>
                                <div class="mt-1">
                                    <input type="file" name="image" id="image" accept="image/*" required
                                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100">
                                </div>
                                <p class="mt-1 text-sm text-gray-500">Format: JPEG, PNG, GIF. Maksimal 2MB. Ini adalah
                                    gambar utama yang akan ditampilkan di grid portfolio.</p>
                                @error('image')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label class="block text-sm font-medium text-gray-700 mb-3">Gambar Tambahan
                                    Portfolio</label>
                                <div class="space-y-4" id="additional-images">
                                    <div class="flex items-center space-x-4 p-4 border border-gray-300 rounded-lg">
                                        <div class="flex-1">
                                            <input type="file" name="additional_images[]" accept="image/*"
                                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                        </div>
                                        <div class="flex-1">
                                            <input type="text" name="image_titles[]"
                                                placeholder="Judul gambar (opsional)"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
                                        </div>
                                        <div class="flex-1">
                                            <textarea name="image_descriptions[]" rows="2" placeholder="Deskripsi gambar (opsional)"
                                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm"></textarea>
                                        </div>
                                        <button type="button" onclick="removeImageRow(this)"
                                            class="text-red-600 hover:text-red-800">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <button type="button" onclick="addImageRow()"
                                    class="mt-3 inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Tambah Gambar
                                </button>
                                <p class="mt-2 text-sm text-gray-500">Anda bisa menambahkan hingga 9 gambar tambahan untuk
                                    ditampilkan dalam grid 3x3 di halaman detail portfolio.</p>
                            </div>

                            <div class="sm:col-span-6">
                                <div class="flex items-center">
                                    <input type="checkbox" name="is_featured" id="is_featured" value="1"
                                        {{ old('is_featured') ? 'checked' : '' }}
                                        class="h-4 w-4 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded">
                                    <label for="is_featured" class="ml-2 block text-sm text-gray-900">
                                        Tandai sebagai portfolio unggulan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.portfolios.index') }}"
                        class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                        Batal
                    </a>
                    <button type="submit"
                        class="bg-yellow-400 border border-transparent rounded-md shadow-sm py-2 px-4 text-sm font-medium text-black hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                        Buat Portfolio
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function addImageRow() {
            const container = document.getElementById('additional-images');
            const newRow = document.createElement('div');
            newRow.className = 'flex items-center space-x-4 p-4 border border-gray-300 rounded-lg';
            newRow.innerHTML = `
        <div class="flex-1">
            <input type="file" name="additional_images[]" accept="image/*"
                   class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
        </div>
        <div class="flex-1">
            <input type="text" name="image_titles[]" placeholder="Judul gambar (opsional)"
                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
        </div>
        <div class="flex-1">
            <textarea name="image_descriptions[]" rows="2" placeholder="Deskripsi gambar (opsional)"
                      class="block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm"></textarea>
        </div>
        <button type="button" onclick="removeImageRow(this)" class="text-red-600 hover:text-red-800">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
            </svg>
        </button>
    `;
            container.appendChild(newRow);
        }

        function removeImageRow(button) {
            button.closest('.flex').remove();
        }
    </script>
@endsection
