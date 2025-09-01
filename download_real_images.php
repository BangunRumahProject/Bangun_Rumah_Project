<?php
/**
 * Script untuk download gambar yang sebenarnya dari server
 * Jalankan di root project: php download_real_images.php
 */

echo "=== Download Real Images from Server ===\n\n";

// File gambar yang sebenarnya dari server (berdasarkan phpMyAdmin)
$realImages = [
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

echo "Real images from server (phpMyAdmin data):\n";
foreach ($realImages as $image) {
    echo "- {$image}\n";
}

echo "\n=== INSTRUCTIONS ===\n";
echo "1. Download these files from your Hostinger file manager:\n";
echo "   - Go to: /storage/app/public/portfolios/\n";
echo "   - Download: 6JctjsmlMfKziwHrWlDm7LVR50kug5H1FyXy5pAC.png\n";
echo "   - Download: MLai500GaAfZYAJP9hMkKMiSg1Bqyflksw6M1xUv.jpg\n";
echo "   - Download: SkpSiEuMDAXB0tMt5DxhkByFm8ak43hTLbCAqcq8.jpg\n";
echo "   - Download: YoloXbLbH1SxEnlEoKRksINHfpUApvsVPUEwzqpw.jpg\n";
echo "\n2. Upload them to local: storage/app/public/portfolios/\n";
echo "3. Make sure file names match exactly\n";
echo "4. Run: php artisan optimize:clear\n";

echo "\n=== SERVER URLS ===\n";
echo "https://bangunrumahproject.com/storage/portfolios/6JctjsmlMfKziwHrWlDm7LVR50kug5H1FyXy5pAC.png\n";
echo "https://bangunrumahproject.com/storage/portfolios/MLai500GaAfZYAJP9hMkKMiSg1Bqyflksw6M1xUv.jpg\n";
echo "https://bangunrumahproject.com/storage/portfolios/SkpSiEuMDAXB0tMt5DxhkByFm8ak43hTLbCAqcq8.jpg\n";
echo "https://bangunrumahproject.com/storage/portfolios/YoloXbLbH1SxEnlEoKRksINHfpUApvsVPUEwzqpw.jpg\n";

echo "\n=== DATABASE UPDATE STATUS ===\n";
echo "✓ Database lokal sudah diupdate dengan path yang benar\n";
echo "✓ Portfolio ID 4: Kantor Rumah Kontemporer\n";
echo "✓ Main image: portfolios/6JctjsmlMfKziwHrWlDm7LVR50kug5H1FyXy5pAC.png\n";
echo "✓ Additional images: 3 images created\n";
