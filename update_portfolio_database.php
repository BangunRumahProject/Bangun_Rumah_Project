<?php
/**
 * Script untuk mengupdate database portfolio sesuai data di server Hostinger
 * Jalankan di root project: php update_portfolio_database.php
 */

require_once 'vendor/autoload.php';

use App\Models\Portfolio;
use App\Models\PortfolioImage;
use Illuminate\Support\Facades\DB;

// Bootstrap Laravel
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "=== Update Portfolio Database ===\n\n";

// Data portfolio dari server Hostinger
$portfolioData = [
    [
        'id' => 1,
        'title' => 'Kantor Rumah Kontemporer',
        'main_image' => 'portfolios/6JctjsmlMfKziwHrWlDm7LVR50kug5H1FyXy5pAC.png',
        'additional_images' => [
            'portfolios/MLai500GaAfZYAJP9hMkKMiSg1Bqyflksw6M1xUv.jpg',
            'portfolios/SkpSiEuMDAXB0tMt5DxhkByFm8ak43hTLbCAqcq8.jpg',
            'portfolios/YoloXbLbH1SxEnlEoKRksINHfpUApvsVPUEwzqpw.jpg'
        ]
    ],
    [
        'id' => 2,
        'title' => 'Kamar Tidur Bunk Bed Modern',
        'main_image' => 'portfolios/placeholder-5.jpg',
        'additional_images' => [
            'portfolios/portfolio-5-image-1.jpg',
            'portfolios/portfolio-5-image-2.jpg',
            'portfolios/portfolio-5-image-3.jpg'
        ]
    ],
    [
        'id' => 3,
        'title' => 'Rumah Modern 2 Lantai',
        'main_image' => 'portfolios/placeholder-6.jpg',
        'additional_images' => [
            'portfolios/portfolio-6-image-1.jpg',
            'portfolios/portfolio-6-image-2.jpg',
            'portfolios/portfolio-6-image-3.jpg'
        ]
    ]
];

foreach ($portfolioData as $data) {
    $portfolio = Portfolio::find($data['id']);
    
    if ($portfolio) {
        echo "Updating portfolio: {$portfolio->title}\n";
        
        // Update main image
        if (isset($data['main_image'])) {
            $portfolio->image = $data['main_image'];
            echo "  ✓ Main image: {$data['main_image']}\n";
        }
        
        $portfolio->save();
        
        // Update additional images
        if (isset($data['additional_images'])) {
            // Delete existing additional images
            $portfolio->images()->delete();
            
            // Create new additional images
            foreach ($data['additional_images'] as $index => $imagePath) {
                PortfolioImage::create([
                    'portfolio_id' => $portfolio->id,
                    'image' => $imagePath,
                    'title' => "Image " . ($index + 1),
                    'description' => "Additional image for {$portfolio->title}",
                    'sort_order' => $index
                ]);
                echo "  ✓ Additional image: {$imagePath}\n";
            }
        }
        
        echo "\n";
    } else {
        echo "Portfolio ID {$data['id']} not found\n";
    }
}

echo "Database update completed!\n";
echo "\nNext steps:\n";
echo "1. Upload this script to server\n";
echo "2. Run: php update_portfolio_database.php\n";
echo "3. Clear cache: php artisan optimize:clear\n";
