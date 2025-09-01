<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CheckImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'images:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check for problematic image files';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Checking for problematic image files...');

        $imgDir = public_path('img');
        $files = File::files($imgDir);

        $problematic = [];
        $missing = [];

        foreach ($files as $file) {
            $filename = $file->getFilename();
            
            // Cek karakter khusus
            if (preg_match('/[\(\)\s]/', $filename)) {
                $problematic[] = $filename;
            }
            
            // Cek apakah file bisa diakses
            if (!is_readable($file->getPathname())) {
                $missing[] = $filename;
            }
        }

        if (empty($problematic) && empty($missing)) {
            $this->info('✓ All image files are OK!');
            return 0;
        }

        if (!empty($problematic)) {
            $this->warn('⚠️  Files with special characters:');
            foreach ($problematic as $file) {
                $this->line("  - {$file}");
            }
        }

        if (!empty($missing)) {
            $this->error('❌ Files with access issues:');
            foreach ($missing as $file) {
                $this->line("  - {$file}");
            }
        }

        $this->newLine();
        $this->info('Solutions:');
        $this->line('1. Run: php rename_images.php (to rename problematic files)');
        $this->line('2. Check file permissions: chmod -R 644 public/img/');
        $this->line('3. Re-upload files to server');

        return 1;
    }
}
