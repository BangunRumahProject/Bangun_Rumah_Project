<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Portfolio;
use App\Models\PortfolioImage;
use Illuminate\Support\Facades\Storage;

class FixPortfolioImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'portfolio:fix-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fix portfolio images path and check storage';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Checking and fixing portfolio images...');

        // Check storage link
        $storagePath = public_path('storage');
        if (!file_exists($storagePath)) {
            $this->error('Storage link not found! Creating...');
            $this->call('storage:link-custom');
        }

        // Check portfolios
        $portfolios = Portfolio::all();
        $this->info("Found {$portfolios->count()} portfolios");

        foreach ($portfolios as $portfolio) {
            $this->line("Checking portfolio: {$portfolio->title}");
            
            // Check main image
            if ($portfolio->image) {
                $imagePath = storage_path('app/public/' . $portfolio->image);
                if (file_exists($imagePath)) {
                    $this->info("  ✓ Main image exists: {$portfolio->image}");
                } else {
                    $this->error("  ✗ Main image missing: {$portfolio->image}");
                }
            } else {
                $this->warn("  ⚠ No main image");
            }

            // Check additional images
            $images = $portfolio->images;
            foreach ($images as $image) {
                $imagePath = storage_path('app/public/' . $image->image);
                if (file_exists($imagePath)) {
                    $this->info("  ✓ Additional image exists: {$image->image}");
                } else {
                    $this->error("  ✗ Additional image missing: {$image->image}");
                }
            }
        }

        // Check storage directory
        $storageDir = storage_path('app/public/portfolios');
        if (is_dir($storageDir)) {
            $files = scandir($storageDir);
            $fileCount = count($files) - 2; // Exclude . and ..
            $this->info("Storage directory contains {$fileCount} files");
        } else {
            $this->error("Storage directory not found: {$storageDir}");
        }

        $this->info('Portfolio image check completed!');
        
        return 0;
    }
}
