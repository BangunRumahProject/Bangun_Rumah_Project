<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Portfolio;
use App\Models\PortfolioImage;

class UpdatePortfolioFromServer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'portfolio:update-from-server';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update portfolio database with actual server data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Updating portfolio database with server data...');

        // Data portfolio dari server Hostinger (berdasarkan file yang ada)
        $portfolioData = [
            [
                'id' => 4,
                'title' => 'Kantor Rumah Kontemporer',
                'main_image' => 'portfolios/6JctjsmlMfKziwHrWlDm7LVR50kug5H1FyXy5pAC.png',
                'additional_images' => [
                    'portfolios/MLai500GaAfZYAJP9hMkKMiSg1Bqyflksw6M1xUv.jpg',
                    'portfolios/SkpSiEuMDAXB0tMt5DxhkByFm8ak43hTLbCAqcq8.jpg',
                    'portfolios/YoloXbLbH1SxEnlEoKRksINHfpUApvsVPUEwzqpw.jpg'
                ]
            ],
            [
                'id' => 5,
                'title' => 'Kamar Tidur Bunk Bed Modern',
                'main_image' => 'portfolios/placeholder-5.jpg',
                'additional_images' => [
                    'portfolios/portfolio-5-image-1.jpg',
                    'portfolios/portfolio-5-image-2.jpg',
                    'portfolios/portfolio-5-image-3.jpg'
                ]
            ],
            [
                'id' => 6,
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
                $this->line("Updating portfolio: {$portfolio->title}");
                
                // Update main image
                if (isset($data['main_image'])) {
                    $portfolio->image = $data['main_image'];
                    $this->info("  ✓ Main image: {$data['main_image']}");
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
                        $this->info("  ✓ Additional image: {$imagePath}");
                    }
                }
                
                $this->newLine();
            } else {
                $this->error("Portfolio ID {$data['id']} not found");
            }
        }

        $this->info('Portfolio database update completed!');
        
        return 0;
    }
}
