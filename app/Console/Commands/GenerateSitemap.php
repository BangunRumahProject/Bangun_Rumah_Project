<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * Using the same signature users expect from the package.
     */
    protected $signature = 'sitemap:generate {--url=}';

    /**
     * The console command description.
     */
    protected $description = 'Generate sitemap.xml using Spatie Sitemap';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $baseUrl = $this->option('url') ?: config('app.url');

        if (! $baseUrl) {
            $this->error('Base URL not set. Provide --url= or set APP_URL in .env');
            return self::FAILURE;
        }

        $outputPath = public_path('sitemap.xml');

        $this->info("Generating sitemap for {$baseUrl} → {$outputPath}");

        try {
            SitemapGenerator::create($baseUrl)
                ->writeToFile($outputPath);
        } catch (\Throwable $e) {
            $this->error('Failed to generate sitemap: ' . $e->getMessage());
            return self::FAILURE;
        }

        $this->info('Sitemap generated successfully.');
        return self::SUCCESS;
    }
}


