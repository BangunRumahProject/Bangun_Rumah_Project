<?php
header('Content-Type: text/plain; charset=utf-8');

echo "== BASIC SERVER CHECK ==\n";
echo 'Time: ' . date('c') . "\n";
echo 'PHP Version: ' . PHP_VERSION . "\n";
echo 'SAPI: ' . php_sapi_name() . "\n";
echo 'Loaded php.ini: ' . php_ini_loaded_file() . "\n\n";

echo "== REQUIRED EXTENSIONS ==\n";
$required = ['mbstring','openssl','pdo_mysql','tokenizer','xml','ctype','json','curl','fileinfo','gd'];
foreach ($required as $ext) {
    echo str_pad($ext, 15) . ': ' . (extension_loaded($ext) ? 'OK' : 'MISSING') . "\n";
}
echo "\n";

echo "== FOLDER PERMISSIONS ==\n";
$projectRoot = dirname(__DIR__); // public/
$root = dirname($projectRoot);   // project
$paths = [
    $root . DIRECTORY_SEPARATOR . 'storage',
    $root . DIRECTORY_SEPARATOR . 'bootstrap' . DIRECTORY_SEPARATOR . 'cache',
];
foreach ($paths as $p) {
    $exists = is_dir($p) ? 'DIR' : (file_exists($p) ? 'FILE' : 'MISSING');
    $writable = is_writable($p) ? 'WRITABLE' : 'NOT WRITABLE';
    echo $p . ' => ' . $exists . ' / ' . $writable . "\n";
}
echo "\n";

echo "== LARAVEL LOG TAIL (200 lines) ==\n";
$logDir = $root . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'logs';
if (is_dir($logDir)) {
    $files = glob($logDir . DIRECTORY_SEPARATOR . 'laravel*.log');
    if ($files) {
        rsort($files);
        $file = $files[0];
        echo "File: $file\n\n";
        $lines = @file($file);
        if ($lines !== false) {
            $tail = array_slice($lines, -200);
            echo implode('', $tail);
        } else {
            echo "Cannot read log file.\n";
        }
    } else {
        echo "No laravel log files found.\n";
    }
} else {
    echo "Log directory not found: $logDir\n";
}
echo "\n\n== DONE ==\n";

