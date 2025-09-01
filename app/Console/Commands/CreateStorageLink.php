<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CreateStorageLink extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'storage:link-custom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create storage link for shared hosting environment';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Creating storage link for shared hosting...');

        // Get the public path
        $publicPath = public_path();
        $storagePath = storage_path('app/public');

        // Create symbolic link
        if (!file_exists($publicPath . '/storage')) {
            if (symlink($storagePath, $publicPath . '/storage')) {
                $this->info('Storage link created successfully!');
            } else {
                $this->error('Failed to create storage link. Please create it manually.');
                $this->info('Run: ln -s ' . $storagePath . ' ' . $publicPath . '/storage');
            }
        } else {
            $this->info('Storage link already exists.');
        }

        // Clear cache
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        
        $this->info('Cache cleared successfully!');
        
        return 0;
    }
}
