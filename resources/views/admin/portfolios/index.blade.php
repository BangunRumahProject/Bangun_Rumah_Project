@extends('admin.layouts.app')

@section('title', 'Kelola Portfolio')

@section('content')
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-2xl font-semibold text-gray-900">Kelola Portfolio</h1>
                <p class="mt-2 text-sm text-gray-700">Kelola semua portfolio project</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="{{ route('admin.portfolios.create') }}"
                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-yellow-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 sm:w-auto">
                    Tambah Portfolio
                </a>
            </div>
        </div>

        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        @if ($portfolios->count() > 0)
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                            Gambar
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Judul
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Kategori
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Status
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach ($portfolios as $portfolio)
                                        <tr>
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 sm:pl-6">
                                                <div class="h-16 w-16 flex-shrink-0">
                                                    <img class="h-16 w-16 rounded-lg object-cover"
                                                        src="{{ $portfolio->image_url }}"
                                                        alt="{{ $portfolio->title }}">
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $portfolio->title }}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{ Str::limit($portfolio->description, 50) }}
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                                    {{ $portfolio->category === 'rumah'
                                                        ? 'bg-blue-100 text-blue-800'
                                                        : ($portfolio->category === 'interior'
                                                            ? 'bg-green-100 text-green-800'
                                                            : 'bg-purple-100 text-purple-800') }}">
                                                    {{ ucfirst($portfolio->category) }}
                                                </span>
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                                    {{ $portfolio->status === 'completed'
                                                        ? 'bg-green-100 text-green-800'
                                                        : ($portfolio->status === 'ongoing'
                                                            ? 'bg-yellow-100 text-yellow-800'
                                                            : 'bg-gray-100 text-gray-800') }}">
                                                    {{ ucfirst($portfolio->status) }}
                                                </span>
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm font-medium">
                                                <div class="flex space-x-2">
                                                    <a href="{{ route('admin.portfolios.show', $portfolio) }}"
                                                        class="text-blue-600 hover:text-blue-900">Lihat</a>
                                                    <a href="{{ route('admin.portfolios.edit', $portfolio) }}"
                                                        class="text-yellow-600 hover:text-yellow-900">Edit</a>
                                                    <button
                                                        onclick="confirmDelete({{ $portfolio->id }}, '{{ $portfolio->title }}')"
                                                        class="text-red-600 hover:text-red-900">Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="text-center py-12">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                                <h3 class="mt-2 text-sm font-medium text-gray-900">Belum ada portfolio</h3>
                                <p class="mt-1 text-sm text-gray-500">Mulai dengan menambahkan portfolio pertama Anda.</p>
                                <div class="mt-6">
                                    <a href="{{ route('admin.portfolios.create') }}"
                                        class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                        Tambah Portfolio
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="delete-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg max-w-md w-full p-6">
                <div class="flex items-center mb-4">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100">
                        <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z" />
                        </svg>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Konfirmasi Hapus</h3>
                    <p class="text-sm text-gray-500 mb-6">
                        Apakah Anda yakin ingin menghapus portfolio "<span id="portfolio-title"
                            class="font-semibold"></span>"?
                        <br><br>
                        <strong class="text-red-600">Tindakan ini tidak dapat dibatalkan!</strong>
                    </p>
                    <div class="flex justify-center space-x-3">
                        <button onclick="closeDeleteModal()"
                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Batal
                        </button>
                        <form id="delete-form" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Hapus Portfolio
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(portfolioId, portfolioTitle) {
            document.getElementById('portfolio-title').textContent = portfolioTitle;
            document.getElementById('delete-form').action = `/admin/portfolios/${portfolioId}`;
            document.getElementById('delete-modal').classList.remove('hidden');
        }

        function closeDeleteModal() {
            document.getElementById('delete-modal').classList.add('hidden');
        }

        // Close modal when clicking outside
        document.getElementById('delete-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeDeleteModal();
            }
        });
    </script>
@endsection
