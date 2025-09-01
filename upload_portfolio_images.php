<?php
/**
 * Script untuk mengupload ulang gambar portfolio yang hilang
 * Jalankan di root project: php upload_portfolio_images.php
 */

require_once 'vendor/autoload.php';

use App\Models\Portfolio;
use App\Models\PortfolioImage;
use Illuminate\Support\Facades\Storage;

// Bootstrap Laravel
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "=== Portfolio Image Upload Script ===\n\n";

// Check storage link
$storagePath = public_path('storage');
if (!file_exists($storagePath)) {
    echo "❌ Storage link not found! Creating...\n";
    Artisan::call('storage:link-custom');
    echo "✅ Storage link created!\n\n";
}

// Check portfolios
$portfolios = Portfolio::all();
echo "Found {$portfolios->count()} portfolios\n\n";

foreach ($portfolios as $portfolio) {
    echo "Portfolio: {$portfolio->title}\n";
    
    // Check main image
    if ($portfolio->image) {
        $imagePath = storage_path('app/public/' . $portfolio->image);
        if (file_exists($imagePath)) {
            echo "  ✅ Main image: {$portfolio->image}\n";
        } else {
            echo "  ❌ Main image missing: {$portfolio->image}\n";
            echo "     Please upload the image to: storage/app/public/{$portfolio->image}\n";
        }
    } else {
        echo "  ⚠️  No main image\n";
    }

    // Check additional images
    $images = $portfolio->images;
    foreach ($images as $image) {
        $imagePath = storage_path('app/public/' . $image->image);
        if (file_exists($imagePath)) {
            echo "  ✅ Additional image: {$image->image}\n";
        } else {
            echo "  ❌ Additional image missing: {$image->image}\n";
            echo "     Please upload the image to: storage/app/public/{$image->image}\n";
        }
    }
    echo "\n";
}

// Check storage directory
$storageDir = storage_path('app/public/portfolios');
if (is_dir($storageDir)) {
    $files = scandir($storageDir);
    $fileCount = count($files) - 2; // Exclude . and ..
    echo "Storage directory contains {$fileCount} files\n";
    
    if ($fileCount > 0) {
        echo "Files in storage:\n";
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                echo "  - {$file}\n";
            }
        }
    }
} else {
    echo "❌ Storage directory not found: {$storageDir}\n";
}

echo "\n=== Instructions ===\n";
echo "1. Upload missing images to: storage/app/public/portfolios/\n";
echo "2. Make sure file names match the database records\n";
echo "3. Set permissions: chmod -R 775 storage/\n";
echo "4. Clear cache: php artisan optimize:clear\n";
echo "\nScript completed!\n";
