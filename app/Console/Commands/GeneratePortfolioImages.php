<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Portfolio;
use App\Models\PortfolioImage;
use Illuminate\Support\Facades\Storage;

class GeneratePortfolioImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'portfolio:generate-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate placeholder images for missing portfolio images';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Generating placeholder images for portfolios...');

        // Ensure storage directory exists
        $storageDir = storage_path('app/public/portfolios');
        if (!is_dir($storageDir)) {
            mkdir($storageDir, 0755, true);
            $this->info("Created storage directory: {$storageDir}");
        }

        // Get portfolios
        $portfolios = Portfolio::all();
        $this->info("Found {$portfolios->count()} portfolios");

        foreach ($portfolios as $portfolio) {
            $this->line("Processing portfolio: {$portfolio->title}");
            
            // Generate main image if missing
            if ($portfolio->image) {
                $imagePath = storage_path('app/public/' . $portfolio->image);
                if (!file_exists($imagePath)) {
                    $this->generatePlaceholderImage($imagePath, $portfolio->title);
                    $this->info("  ✓ Generated main image: {$portfolio->image}");
                } else {
                    $this->info("  ✓ Main image exists: {$portfolio->image}");
                }
            }

            // Generate additional images if missing
            $images = $portfolio->images;
            foreach ($images as $image) {
                $imagePath = storage_path('app/public/' . $image->image);
                if (!file_exists($imagePath)) {
                    $this->generatePlaceholderImage($imagePath, $image->title ?: 'Portfolio Image');
                    $this->info("  ✓ Generated additional image: {$image->image}");
                } else {
                    $this->info("  ✓ Additional image exists: {$image->image}");
                }
            }
        }

        $this->info('Portfolio image generation completed!');
        
        return 0;
    }

    private function generatePlaceholderImage($path, $title)
    {
        // Create SVG placeholder
        $svg = $this->createSVGPlaceholder($title);
        
        // Save as PNG (convert SVG to PNG)
        $this->saveSVGAsPNG($svg, $path);
    }

    private function createSVGPlaceholder($title)
    {
        $width = 800;
        $height = 600;
        
        return <<<SVG
<svg width="{$width}" height="{$height}" viewBox="0 0 {$width} {$height}" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <linearGradient id="bg" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:#f3f4f6;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#e5e7eb;stop-opacity:1" />
        </linearGradient>
    </defs>
    <rect width="{$width}" height="{$height}" fill="url(#bg)"/>
    <rect x="50" y="50" width="700" height="500" fill="#d1d5db" rx="8"/>
    <text x="400" y="280" font-family="Arial, sans-serif" font-size="24" font-weight="bold" text-anchor="middle" fill="#6b7280">Portfolio Image</text>
    <text x="400" y="320" font-family="Arial, sans-serif" font-size="16" text-anchor="middle" fill="#9ca3af">{$title}</text>
    <text x="400" y="350" font-family="Arial, sans-serif" font-size="12" text-anchor="middle" fill="#9ca3af">Placeholder</text>
</svg>
SVG;
    }

    private function saveSVGAsPNG($svg, $path)
    {
        // For now, just save as SVG (will be converted by browser)
        file_put_contents($path, $svg);
    }
}
