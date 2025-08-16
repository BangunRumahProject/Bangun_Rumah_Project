@extends('admin.layouts.app')

@section('title', 'Detail Portfolio')

@section('content')
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-2xl font-semibold text-gray-900">Detail Portfolio</h1>
                <p class="mt-2 text-sm text-gray-700">Informasi lengkap portfolio</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none space-x-3">
                <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}"
                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-yellow-400 px-4 py-2 text-sm font-medium text-black shadow-sm hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 sm:w-auto">
                    Edit Portfolio
                </a>
                <a href="{{ route('admin.portfolios.index') }}"
                    class="inline-flex items-center justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 sm:w-auto">
                    Kembali
                </a>
            </div>
        </div>

        <div class="mt-8">
            <div class="bg-white shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Portfolio Image -->
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Gambar Portfolio</h3>
                            <div class="relative">
                                <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}"
                                    class="w-full h-80 object-cover rounded-lg shadow-lg">

                                <!-- Status Badges -->
                                <div class="absolute top-4 right-4 space-y-2">
                                    @if ($portfolio->is_featured)
                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-500 text-black">
                                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.118 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                            </svg>
                                            Featured
                                        </span>
                                    @endif

                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                                    {{ $portfolio->status === 'completed'
                                        ? 'bg-green-500 text-white'
                                        : ($portfolio->status === 'ongoing'
                                            ? 'bg-yellow-500 text-black'
                                            : 'bg-gray-500 text-white') }}">
                                        {{ ucfirst($portfolio->status) }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Details -->
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Informasi Portfolio</h3>

                            <dl class="space-y-4">
                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Judul</dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $portfolio->title }}</dd>
                                </div>

                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Deskripsi</dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $portfolio->description }}</dd>
                                </div>

                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">Kategori</dt>
                                        <dd class="mt-1 text-sm text-gray-900">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                            {{ $portfolio->category === 'rumah'
                                                ? 'bg-blue-100 text-blue-800'
                                                : ($portfolio->category === 'interior'
                                                    ? 'bg-green-100 text-green-800'
                                                    : 'bg-purple-100 text-purple-800') }}">
                                                {{ ucfirst($portfolio->category) }}
                                            </span>
                                        </dd>
                                    </div>

                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">Status</dt>
                                        <dd class="mt-1 text-sm text-gray-900">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                            {{ $portfolio->status === 'completed'
                                                ? 'bg-green-100 text-green-800'
                                                : ($portfolio->status === 'ongoing'
                                                    ? 'bg-yellow-100 text-yellow-800'
                                                    : 'bg-gray-100 text-gray-800') }}">
                                                {{ ucfirst($portfolio->status) }}
                                            </span>
                                        </dd>
                                    </div>
                                </div>

                                @if ($portfolio->location)
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">Lokasi</dt>
                                        <dd class="mt-1 text-sm text-gray-900">{{ $portfolio->location }}</dd>
                                    </div>
                                @endif

                                @if ($portfolio->year)
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">Tahun</dt>
                                        <dd class="mt-1 text-sm text-gray-900">{{ $portfolio->year }}</dd>
                                    </div>
                                @endif

                                @if ($portfolio->area)
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">Luas</dt>
                                        <dd class="mt-1 text-sm text-gray-900">{{ $portfolio->area }} m²</dd>
                                    </div>
                                @endif

                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Urutan</dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $portfolio->sort_order }}</dd>
                                </div>

                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Tanggal Dibuat</dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        {{ $portfolio->created_at->format('d M Y H:i') }}</dd>
                                </div>

                                <div>
                                    <dt class="text-sm font-medium text-gray-500">Terakhir Diupdate</dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        {{ $portfolio->updated_at->format('d M Y H:i') }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-3">
                                <form method="POST"
                                    action="{{ route('admin.portfolios.toggle-featured', $portfolio->id) }}"
                                    class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit"
                                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                        @if ($portfolio->is_featured)
                                            Hapus Featured
                                        @else
                                            Jadikan Featured
                                        @endif
                                    </button>
                                </form>
                            </div>

                            <div class="flex space-x-3">
                                <form method="POST" action="{{ route('admin.portfolios.destroy', $portfolio->id) }}"
                                    class="inline" onsubmit="return confirm('Yakin ingin menghapus portfolio ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                        Hapus Portfolio
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
