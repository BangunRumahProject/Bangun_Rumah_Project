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
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240', // 10MB
                'category' => 'required|in:rumah,interior,eksterior',
                'location' => 'nullable|string|max:255',
                'year' => 'nullable|integer|min:1900|max:' . (date('Y') + 5),
                'area' => 'nullable|numeric|min:0',
                'status' => 'required|in:completed,ongoing,planning',
                'is_featured' => 'boolean',
                'sort_order' => 'nullable|integer|min:0',
                'additional_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', // 10MB
                'image_titles.*' => 'nullable|string|max:255',
                'image_descriptions.*' => 'nullable|string'
            ]);

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('portfolios', 'public');
                $validated['image'] = $imagePath;
            }

            $validated['is_featured'] = $request->has('is_featured');
            $validated['sort_order'] = $validated['sort_order'] ?? Portfolio::max('sort_order') + 1;

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
        } catch (\Exception $e) {
            Log::error('Portfolio creation error: ' . $e->getMessage());
            Log::error('Request data: ' . json_encode($request->all()));

            return redirect()->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
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
        $portfolio = Portfolio::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', // 10MB
            'category' => 'required|in:rumah,interior,eksterior',
            'location' => 'nullable|string|max:255',
            'year' => 'nullable|integer|min:1900|max:' . (date('Y') + 5),
            'area' => 'nullable|numeric|min:0',
            'status' => 'required|in:completed,ongoing,planning',
            'is_featured' => 'boolean',
            'sort_order' => 'nullable|integer|min:0',
            'additional_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', // 10MB
            'image_titles.*' => 'nullable|string|max:255',
            'image_descriptions.*' => 'nullable|string'
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

        $portfolio->update($validated);

        // Handle additional images
        if ($request->hasFile('additional_images')) {
            // Delete existing additional images
            foreach ($portfolio->images as $image) {
                Storage::disk('public')->delete($image->image);
                $image->delete();
            }

            // Add new additional images
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

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $portfolio = Portfolio::with('images')->findOrFail($id);

        // Hapus gambar utama
        if ($portfolio->image) {
            Storage::disk('public')->delete($portfolio->image);
        }

        // Hapus gambar tambahan
        foreach ($portfolio->images as $image) {
            Storage::disk('public')->delete($image->image);
        }

        $portfolio->delete();

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio berhasil dihapus!');
    }

    public function toggleFeatured(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->update(['is_featured' => !$portfolio->is_featured]);

        return back()->with('success', 'Status featured berhasil diubah!');
    }
}
