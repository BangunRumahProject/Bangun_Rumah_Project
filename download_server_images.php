<?php
/**
 * Script untuk download gambar dari server ke lokal
 * Jalankan di root project: php download_server_images.php
 */

echo "=== Download Server Images ===\n\n";

// File gambar yang ada di server Hostinger
$serverImages = [
    '6JctjsmlMfKziwHrWlDm7LVR50kug5H1FyXy5pAC.png',
    'MLai500GaAfZYAJP9hMkKMiSg1Bqyflksw6M1xUv.jpg',
    'SkpSiEuMDAXB0tMt5DxhkByFm8ak43hTLbCAqcq8.jpg',
    'YoloXbLbH1SxEnlEoKRksINHfpUApvsVPUEwzqpw.jpg'
];

$storageDir = __DIR__ . '/storage/app/public/portfolios/';

// Pastikan directory ada
if (!is_dir($storageDir)) {
    mkdir($storageDir, 0755, true);
    echo "Created storage directory: {$storageDir}\n";
}

echo "Server images to download:\n";
foreach ($serverImages as $image) {
    echo "- {$image}\n";
}

echo "\nInstructions:\n";
echo "1. Download these files from your Hostinger file manager\n";
echo "2. Upload them to: storage/app/public/portfolios/\n";
echo "3. Make sure file names match exactly\n";
echo "4. Run: php artisan optimize:clear\n";

echo "\nFile paths in server:\n";
echo "https://bangunrumahproject.com/storage/portfolios/6JctjsmlMfKziwHrWlDm7LVR50kug5H1FyXy5pAC.png\n";
echo "https://bangunrumahproject.com/storage/portfolios/MLai500GaAfZYAJP9hMkKMiSg1Bqyflksw6M1xUv.jpg\n";
echo "https://bangunrumahproject.com/storage/portfolios/SkpSiEuMDAXB0tMt5DxhkByFm8ak43hTLbCAqcq8.jpg\n";
echo "https://bangunrumahproject.com/storage/portfolios/YoloXbLbH1SxEnlEoKRksINHfpUApvsVPUEwzqpw.jpg\n";
