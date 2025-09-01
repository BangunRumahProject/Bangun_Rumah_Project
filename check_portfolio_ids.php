<?php
/**
 * Script untuk cek ID portfolio di database
 */

require_once 'vendor/autoload.php';

use App\Models\Portfolio;

// Bootstrap Laravel
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "=== Portfolio IDs in Database ===\n\n";

$portfolios = Portfolio::all();

foreach ($portfolios as $portfolio) {
    echo "ID: {$portfolio->id} - Title: {$portfolio->title}\n";
    echo "Main Image: {$portfolio->image}\n";
    echo "Additional Images: " . $portfolio->images->count() . "\n";
    echo "---\n";
}

echo "\nTotal portfolios: " . $portfolios->count() . "\n";
