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
                                <label for="title" class="block text-sm font-medium text-gray-700">Judul Portfolio
                                    *</label>
                                <div class="mt-1">
                                    <input type="text" name="title" id="title"
                                        value="{{ old('title', $portfolio->title) }}" required
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
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">{{ old('description', $portfolio->description) }}</textarea>
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
                                        <option value="rumah"
                                            {{ old('category', $portfolio->category) == 'rumah' ? 'selected' : '' }}>Rumah
                                        </option>
                                        <option value="interior"
                                            {{ old('category', $portfolio->category) == 'interior' ? 'selected' : '' }}>
                                            Interior</option>
                                        <option value="eksterior"
                                            {{ old('category', $portfolio->category) == 'eksterior' ? 'selected' : '' }}>
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
                                <label for="location" class="block text-sm font-medium text-gray-700">Lokasi</label>
                                <div class="mt-1">
                                    <input type="text" name="location" id="location"
                                        value="{{ old('location', $portfolio->location) }}"
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
                                    <input type="number" name="year" id="year"
                                        value="{{ old('year', $portfolio->year) }}" min="1900"
                                        max="{{ date('Y') + 5 }}"
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
                                    <input type="number" name="area" id="area"
                                        value="{{ old('area', $portfolio->area) }}" min="0" step="0.01"
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
                                        value="{{ old('sort_order', $portfolio->sort_order) }}" min="0"
                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm"
                                        placeholder="0">
                                </div>
                                @error('sort_order')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="image" class="block text-sm font-medium text-gray-700">Gambar
                                    Portfolio</label>
                                <div class="mt-1">
                                    <input type="file" name="image" id="image" accept="image/*"
                                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100">
                                </div>
                                <p class="mt-1 text-sm text-gray-500">Format: JPEG, PNG, GIF. Maksimal 2MB. Kosongkan jika
                                    tidak ingin mengubah gambar.</p>

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
                                <div class="flex items-center">
                                    <input type="checkbox" name="is_featured" id="is_featured" value="1"
                                        {{ old('is_featured', $portfolio->is_featured) ? 'checked' : '' }}
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
                        Update Portfolio
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
