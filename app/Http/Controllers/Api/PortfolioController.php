<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function show($id)
    {
        $portfolio = Portfolio::with('images')->find($id);

        if (!$portfolio) {
            return response()->json([
                'success' => false,
                'message' => 'Portfolio tidak ditemukan'
            ], 404);
        }

        // Transform data untuk include image_url
        $portfolioData = $portfolio->toArray();
        
        // Add image_url untuk main image
        $portfolioData['image_url'] = $portfolio->image_url;
        
        // Add image_url untuk additional images
        if (isset($portfolioData['images'])) {
            foreach ($portfolioData['images'] as &$image) {
                $image['image_url'] = \App\Models\PortfolioImage::find($image['id'])->image_url;
            }
        }

        return response()->json([
            'success' => true,
            'portfolio' => $portfolioData
        ]);
    }

    public function index()
    {
        $portfolios = Portfolio::active()
            ->orderBy('sort_order')
            ->orderBy('created_at', 'desc')
            ->get();

        // Transform data untuk include image_url
        $portfoliosData = $portfolios->map(function ($portfolio) {
            $data = $portfolio->toArray();
            $data['image_url'] = $portfolio->image_url;
            return $data;
        });

        return response()->json([
            'success' => true,
            'portfolios' => $portfoliosData
        ]);
    }
}
