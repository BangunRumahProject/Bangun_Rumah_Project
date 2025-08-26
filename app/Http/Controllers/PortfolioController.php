<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('sort_order')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolios.create');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|min:3|max:255',
                'description' => 'required|string|min:10|max:2000',
                'features' => 'nullable|array',
                'features.*' => 'nullable|string|min:2|max:255',
                'advantages' => 'nullable|array',
                'advantages.*' => 'nullable|string|min:2|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
                'category' => 'required|string|in:interior,eksterior,landscape',
                'status' => 'required|string|in:planning,ongoing,completed',
                'year' => 'nullable|integer|min:1900|max:' . (date('Y') + 10),
                'location' => 'nullable|string|min:2|max:255',
                'area' => 'nullable|numeric|min:0.01|max:999999999.99',
                'sort_order' => 'nullable|integer|max:999',
                'is_featured' => 'boolean',
                'additional_images' => 'nullable|array',
                'additional_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
                'image_titles' => 'nullable|array',
                'image_titles.*' => 'nullable|string|min:2|max:255',
                'image_descriptions' => 'nullable|array',
                'image_descriptions.*' => 'nullable|string|max:1000',
                'build_duration' => 'nullable|string|min:2|max:100',
            ], [
                'title.required' => 'Judul portfolio wajib diisi',
                'title.min' => 'Judul portfolio minimal 3 karakter',
                'title.max' => 'Judul portfolio maksimal 255 karakter',
                'description.required' => 'Deskripsi portfolio wajib diisi',
                'description.min' => 'Deskripsi portfolio minimal 10 karakter',
                'description.max' => 'Deskripsi portfolio maksimal 2000 karakter',
                'features.*.min' => 'Fitur minimal 2 karakter',
                'features.*.max' => 'Fitur maksimal 255 karakter',
                'advantages.*.min' => 'Keunggulan minimal 2 karakter',
                'advantages.*.max' => 'Keunggulan maksimal 255 karakter',
                'image.required' => 'Gambar utama wajib diupload',
                'image.image' => 'File harus berupa gambar',
                'image.mimes' => 'Format gambar harus jpeg, png, jpg, gif, atau webp',
                'image.max' => 'Ukuran gambar maksimal 10MB',
                'category.required' => 'Kategori wajib dipilih',
                'category.in' => 'Kategori tidak valid',
                'status.required' => 'Status wajib dipilih',
                'status.in' => 'Status tidak valid',
                'year.integer' => 'Tahun harus berupa angka',
                'year.min' => 'Tahun minimal 1900',
                'year.max' => 'Tahun maksimal ' . (date('Y') + 10),
                'location.min' => 'Lokasi minimal 2 karakter',
                'location.max' => 'Lokasi maksimal 255 karakter',
                'area.numeric' => 'Luas area harus berupa angka',
                'area.min' => 'Luas area minimal 0.01',
                'area.max' => 'Luas area maksimal 999,999,999.99',
                'sort_order.integer' => 'Urutan harus berupa angka',
                'sort_order.max' => 'Urutan maksimal 999',
                'additional_images.*.image' => 'File harus berupa gambar',
                'additional_images.*.mimes' => 'Format gambar harus jpeg, png, jpg, gif, atau webp',
                'additional_images.*.max' => 'Ukuran gambar maksimal 10MB',
                'image_titles.*.min' => 'Judul gambar minimal 2 karakter',
                'image_titles.*.max' => 'Judul gambar maksimal 255 karakter',
                'image_descriptions.*.max' => 'Deskripsi gambar maksimal 1000 karakter',
                'build_duration.min' => 'Jangka waktu minimal 2 karakter',
                'build_duration.max' => 'Jangka waktu maksimal 100 karakter',
            ]);

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('portfolios', 'public');
                $validated['image'] = $imagePath;
            }

            $validated['is_featured'] = $request->has('is_featured');
            $validated['sort_order'] = $validated['sort_order'] ?? Portfolio::max('sort_order') + 1;
            $validated['build_duration'] = $request->input('build_duration');

            $portfolio = Portfolio::create($validated);

            // Handle additional images
            if ($request->hasFile('additional_images')) {
                foreach ($request->file('additional_images') as $index => $image) {
                    if ($image && $image->isValid()) {
                        $imagePath = $image->store('portfolios', 'public');

                        PortfolioImage::create([
                            'portfolio_id' => $portfolio->id,
                            'image' => $imagePath,
                            'title' => $request->input('image_titles.' . $index),
                            'description' => $request->input('image_descriptions.' . $index),
                            'sort_order' => $index
                        ]);
                    }
                }
            }

            return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio berhasil ditambahkan!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Exception $e) {
            Log::error('Portfolio creation error: ' . $e->getMessage());
            Log::error('Request data: ' . json_encode($request->all()));

            return redirect()->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan sistem: ' . $e->getMessage());
        }
    }

    public function show(string $id)
    {
        $portfolio = Portfolio::with('images')->findOrFail($id);
        return view('admin.portfolios.show', compact('portfolio'));
    }

    public function edit(string $id)
    {
        $portfolio = Portfolio::with('images')->findOrFail($id);
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $portfolio = Portfolio::findOrFail($id);

            $validated = $request->validate([
                'title' => 'required|string|min:3|max:255',
                'description' => 'required|string|min:10|max:2000',
                'features' => 'nullable|array',
                'features.*' => 'nullable|string|min:2|max:255',
                'advantages' => 'nullable|array',
                'advantages.*' => 'nullable|string|min:2|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
                'category' => 'required|string|in:interior,eksterior,landscape',
                'status' => 'required|string|in:planning,ongoing,completed',
                'year' => 'nullable|integer|min:1900|max:' . (date('Y') + 10),
                'location' => 'nullable|string|min:2|max:255',
                'area' => 'nullable|numeric|min:0.01|max:999999999.99',
                'sort_order' => 'nullable|integer|max:999',
                'is_featured' => 'boolean',
                'additional_images' => 'nullable|array',
                'additional_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
                'image_titles' => 'nullable|array',
                'image_titles.*' => 'nullable|string|min:2|max:255',
                'image_descriptions' => 'nullable|array',
                'image_descriptions.*' => 'nullable|string|max:1000',
                'build_duration' => 'nullable|string|min:2|max:100',
                // Existing images edit/delete
                'existing_images' => 'nullable|array',
                'existing_images.*.title' => 'nullable|string|min:2|max:255',
                'existing_images.*.description' => 'nullable|string|max:1000',
                'existing_images.*.sort_order' => 'nullable|integer|max:999',
                'existing_images_files' => 'nullable|array',
                'existing_images_files.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
                'existing_images_delete' => 'nullable|array',
                'existing_images_delete.*' => 'integer',
            ], [
                'title.required' => 'Judul portfolio wajib diisi',
                'title.min' => 'Judul portfolio minimal 3 karakter',
                'title.max' => 'Judul portfolio maksimal 255 karakter',
                'description.required' => 'Deskripsi portfolio wajib diisi',
                'description.min' => 'Deskripsi portfolio minimal 10 karakter',
                'description.max' => 'Deskripsi portfolio maksimal 2000 karakter',
                'features.*.min' => 'Fitur minimal 2 karakter',
                'features.*.max' => 'Fitur maksimal 255 karakter',
                'advantages.*.min' => 'Keunggulan minimal 2 karakter',
                'advantages.*.max' => 'Keunggulan maksimal 255 karakter',
                'image.image' => 'File harus berupa gambar',
                'image.mimes' => 'Format gambar harus jpeg, png, jpg, gif, atau webp',
                'image.max' => 'Ukuran gambar maksimal 10MB',
                'category.required' => 'Kategori wajib dipilih',
                'category.in' => 'Kategori tidak valid',
                'status.required' => 'Status wajib dipilih',
                'status.in' => 'Status tidak valid',
                'year.integer' => 'Tahun harus berupa angka',
                'year.min' => 'Tahun minimal 1900',
                'year.max' => 'Tahun maksimal ' . (date('Y') + 10),
                'location.min' => 'Lokasi minimal 2 karakter',
                'location.max' => 'Lokasi maksimal 255 karakter',
                'area.numeric' => 'Luas area harus berupa angka',
                'area.min' => 'Luas area minimal 0.01',
                'area.max' => 'Luas area maksimal 999,999,999.99',
                'sort_order.integer' => 'Urutan harus berupa angka',
                'sort_order.max' => 'Urutan maksimal 999',
                'additional_images.*.image' => 'File harus berupa gambar',
                'additional_images.*.mimes' => 'Format gambar harus jpeg, png, jpg, gif, atau webp',
                'additional_images.*.max' => 'Ukuran gambar maksimal 10MB',
                'image_titles.*.min' => 'Judul gambar minimal 2 karakter',
                'image_titles.*.max' => 'Judul gambar maksimal 255 karakter',
                'image_descriptions.*.max' => 'Deskripsi gambar maksimal 1000 karakter',
                'build_duration.min' => 'Jangka waktu minimal 2 karakter',
                'build_duration.max' => 'Jangka waktu maksimal 100 karakter',
            ]);

            if ($request->hasFile('image')) {
                // Hapus gambar lama
                if ($portfolio->image) {
                    Storage::disk('public')->delete($portfolio->image);
                }
                $imagePath = $request->file('image')->store('portfolios', 'public');
                $validated['image'] = $imagePath;
            }

            $validated['is_featured'] = $request->has('is_featured');
            $validated['sort_order'] = $validated['sort_order'] ?? $portfolio->sort_order;
            $validated['build_duration'] = $request->input('build_duration');

            $portfolio->update($validated);

            // Delete selected existing additional images
            $deleteIds = $request->input('existing_images_delete', []);
            if (is_array($deleteIds) && count($deleteIds) > 0) {
                $imagesToDelete = $portfolio->images()->whereIn('id', $deleteIds)->get();
                foreach ($imagesToDelete as $img) {
                    Storage::disk('public')->delete($img->image);
                    $img->delete();
                }
            }

            // Update existing images meta and optionally replace files
            $existingMeta = $request->input('existing_images', []);
            if (is_array($existingMeta) && count($existingMeta) > 0) {
                foreach ($existingMeta as $imageId => $data) {
                    $imageModel = $portfolio->images()->where('id', $imageId)->first();
                    if (!$imageModel) {
                        continue;
                    }

                    $imageModel->title = $data['title'] ?? null;
                    $imageModel->description = $data['description'] ?? null;
                    if (isset($data['sort_order'])) {
                        $imageModel->sort_order = (int) $data['sort_order'];
                    }

                    if ($request->hasFile("existing_images_files.$imageId")) {
                        $file = $request->file("existing_images_files.$imageId");
                        if ($file && $file->isValid()) {
                            // delete old and replace
                            Storage::disk('public')->delete($imageModel->image);
                            $newPath = $file->store('portfolios', 'public');
                            $imageModel->image = $newPath;
                        }
                    }

                    $imageModel->save();
                }
            }

            // Handle additional images (append without deleting existing)
            if ($request->hasFile('additional_images')) {
                $startOrder = (int) $portfolio->images()->max('sort_order');
                $startOrder = is_null($startOrder) ? 0 : $startOrder + 1;

                foreach ($request->file('additional_images') as $index => $image) {
                    if ($image && $image->isValid()) {
                        $imagePath = $image->store('portfolios', 'public');

                        PortfolioImage::create([
                            'portfolio_id' => $portfolio->id,
                            'image' => $imagePath,
                            'title' => $request->input('image_titles.' . $index),
                            'description' => $request->input('image_descriptions.' . $index),
                            'sort_order' => $startOrder + $index
                        ]);
                    }
                }
            }

            return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio berhasil diperbarui!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Exception $e) {
            Log::error('Portfolio update error: ' . $e->getMessage());
            Log::error('Request data: ' . json_encode($request->all()));

            return redirect()->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan sistem: ' . $e->getMessage());
        }
    }

    public function destroy(string $id)
    {
        try {
            $portfolio = Portfolio::with('images')->findOrFail($id);

            // Delete portfolio images from storage
            if ($portfolio->image) {
                Storage::disk('public')->delete($portfolio->image);
            }

            // Delete additional images from storage
            foreach ($portfolio->images as $image) {
                Storage::disk('public')->delete($image->image);
            }

            // Delete the portfolio (this will also delete related images due to cascade)
            $portfolio->delete();

            return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio berhasil dihapus!');
        } catch (\Exception $e) {
            Log::error('Portfolio deletion error: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Gagal menghapus portfolio: ' . $e->getMessage());
        }
    }

    public function toggleFeatured(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->update(['is_featured' => !$portfolio->is_featured]);

        return back()->with('success', 'Status featured berhasil diubah!');
    }
}
