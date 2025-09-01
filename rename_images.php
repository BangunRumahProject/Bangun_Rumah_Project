<?php
/**
 * Script untuk rename file gambar yang memiliki karakter khusus
 * Jalankan di root project: php rename_images.php
 */

$imgDir = __DIR__ . '/public/img/';
$files = scandir($imgDir);

$renamed = [];

foreach ($files as $file) {
    if ($file === '.' || $file === '..') continue;
    
    // Cek apakah ada karakter khusus
    if (preg_match('/[\(\)\s]/', $file)) {
        $newName = preg_replace('/[\(\)\s]/', '-', $file);
        $newName = preg_replace('/-+/', '-', $newName); // Hapus multiple dash
        $newName = trim($newName, '-'); // Hapus dash di awal/akhir
        
        if ($newName !== $file) {
            $oldPath = $imgDir . $file;
            $newPath = $imgDir . $newName;
            
            if (rename($oldPath, $newPath)) {
                $renamed[] = [
                    'old' => $file,
                    'new' => $newName
                ];
                echo "✓ Renamed: {$file} → {$newName}\n";
            } else {
                echo "✗ Failed to rename: {$file}\n";
            }
        }
    }
}

if (empty($renamed)) {
    echo "No files need to be renamed.\n";
} else {
    echo "\nRenamed " . count($renamed) . " files:\n";
    foreach ($renamed as $item) {
        echo "- {$item['old']} → {$item['new']}\n";
    }
    
    echo "\nUpdate your blade files to use the new filenames!\n";
}
