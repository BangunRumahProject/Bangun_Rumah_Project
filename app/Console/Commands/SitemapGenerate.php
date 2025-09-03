<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Config;

class SitemapGenerate extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'sitemap:generate';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generate a sitemap.xml in public directory based on public routes and content';

	/**
	 * Execute the console command.
	 */
	public function handle()
	{
		$this->info('Generating sitemap...');

		$baseUrl = rtrim((string) (Config::get('app.url') ?: URL::to('/')), '/');

		$urls = [];

		// Gather public GET routes without parameters and not under admin/api
		$routes = Route::getRoutes();
		foreach ($routes as $route) {
			$methods = $route->methods();
			$uri = $route->uri();

			if (!in_array('GET', $methods)) {
				continue;
			}

			// Exclude routes with parameters and non-public prefixes
			if (str_contains($uri, '{')) {
				continue;
			}
			if (str_starts_with($uri, 'admin') || str_starts_with($uri, 'api')) {
				continue;
			}

			$path = $uri === '/' ? '' : $uri;
			$loc = $baseUrl . '/' . ltrim($path, '/');
			$loc = rtrim($loc, '/');
			if ($loc === $baseUrl) {
				$loc = $baseUrl . '/';
			}

			$urls[] = [
				'loc' => $loc,
				'lastmod' => date(DATE_W3C),
				'changefreq' => 'weekly',
				'priority' => $loc === $baseUrl . '/' ? '1.0' : '0.7',
			];
		}

		// Note: We intentionally avoid hitting the database in CLI to prevent failures
		// on environments without a running DB. Content-driven URLs can be added here
		// in the future using cached data or configuration.

		// Remove duplicates
		$urls = collect($urls)
			->unique('loc')
			->sortByDesc(function ($item) use ($baseUrl) {
				return $item['loc'] === $baseUrl . '/' ? 1 : 0;
			})
			->values()
			->all();

		$xml = $this->buildXml($urls);

		$path = public_path('sitemap.xml');
		if (!is_dir(dirname($path))) {
			mkdir(dirname($path), 0755, true);
		}
		file_put_contents($path, $xml);

		$this->info("Sitemap generated: {$path}");
		return self::SUCCESS;
	}

	private function buildXml(array $urls): string
	{
		$lines = [];
		$lines[] = '<?xml version="1.0" encoding="UTF-8"?>';
		$lines[] = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
		foreach ($urls as $url) {
			$lines[] = '  <url>';
			$lines[] = '    <loc>' . htmlspecialchars($url['loc'], ENT_XML1) . '</loc>';
			if (!empty($url['lastmod'])) {
				$lines[] = '    <lastmod>' . htmlspecialchars($url['lastmod'], ENT_XML1) . '</lastmod>';
			}
			if (!empty($url['changefreq'])) {
				$lines[] = '    <changefreq>' . $url['changefreq'] . '</changefreq>';
			}
			if (!empty($url['priority'])) {
				$lines[] = '    <priority>' . $url['priority'] . '</priority>';
			}
			$lines[] = '  </url>';
		}
		$lines[] = '</urlset>';
		return implode("\n", $lines) . "\n";
	}
}


