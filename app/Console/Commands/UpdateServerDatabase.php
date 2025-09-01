<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Portfolio;
use App\Models\PortfolioImage;

class UpdateServerDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'portfolio:update-server-db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update server database with correct portfolio data from phpMyAdmin';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Updating server database with correct portfolio data...');

        // Data dari phpMyAdmin server yang benar
        $serverData = [
            [
                'portfolio_id' => 2,
                'images' => [
                    [
                        'id' => 3,
                        'image' => 'portfolios/YoloXbLbH1SxEnlEoKRksINHfpUApvsVPUEwzqpw.jpg',
                        'title' => 'Image 1',
                        'description' => 'Additional image for sdasdsadsdsad',
                        'sort_order' => 0
                    ]
                ]
            ],
            [
                'portfolio_id' => 4,
                'images' => [
                    [
                        'id' => 4,
                        'image' => 'portfolios/MLai500GaAfZYAJP9hMkKMiSg1Bqyflksw6M1xUv.jpg',
                        'title' => 'Image 1',
                        'description' => 'Additional image for sdasdsadsdsad',
                        'sort_order' => 0
                    ],
                    [
                        'id' => 5,
                        'image' => 'portfolios/SkpSiEuMDAXB0tMt5DxhkByFm8ak43hTLbCAqcq8.jpg',
                        'title' => 'Image 2',
                        'description' => 'Additional image for sdasdsadsdsad',
                        'sort_order' => 1
                    ],
                    [
                        'id' => 6,
                        'image' => 'portfolios/YoloXbLbH1SxEnlEoKRksINHfpUApvsVPUEwzqpw.jpg',
                        'title' => 'Image 3',
                        'description' => 'Additional image for sdasdsadsdsad',
                        'sort_order' => 2
                    ]
                ]
            ]
        ];

        foreach ($serverData as $data) {
            $portfolio = Portfolio::find($data['portfolio_id']);
            
            if ($portfolio) {
                $this->line("Updating portfolio ID {$data['portfolio_id']}: {$portfolio->title}");
                
                // Update main image untuk portfolio ID 4
                if ($data['portfolio_id'] == 4) {
                    $portfolio->image = 'portfolios/6JctjsmlMfKziwHrWlDm7LVR50kug5H1FyXy5pAC.png';
                    $portfolio->save();
                    $this->info("  ✓ Updated main image: portfolios/6JctjsmlMfKziwHrWlDm7LVR50kug5H1FyXy5pAC.png");
                }
                
                // Update additional images
                foreach ($data['images'] as $imageData) {
                    $existingImage = PortfolioImage::find($imageData['id']);
                    
                    if ($existingImage) {
                        $existingImage->update([
                            'image' => $imageData['image'],
                            'title' => $imageData['title'],
                            'description' => $imageData['description'],
                            'sort_order' => $imageData['sort_order']
                        ]);
                        $this->info("  ✓ Updated image ID {$imageData['id']}: {$imageData['image']}");
                    } else {
                        PortfolioImage::create([
                            'id' => $imageData['id'],
                            'portfolio_id' => $data['portfolio_id'],
                            'image' => $imageData['image'],
                            'title' => $imageData['title'],
                            'description' => $imageData['description'],
                            'sort_order' => $imageData['sort_order']
                        ]);
                        $this->info("  ✓ Created image ID {$imageData['id']}: {$imageData['image']}");
                    }
                }
                
                $this->newLine();
            } else {
                $this->error("Portfolio ID {$data['portfolio_id']} not found");
            }
        }

        $this->info('Server database update completed!');
        
        return 0;
    }
}
