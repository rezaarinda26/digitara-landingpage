<?php

// Register the Composer autoloader...
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Ensure storage path is writable (Vercel only allows /tmp)
$app->useStoragePath('/tmp');

// DIAGNOSTIC: Jika sistem view tidak ketemu, kita mau tahu kenapa
if (!$app->bound('view')) {
    echo "Sistem View belum terdaftar. Providers yang dimuat: <br>";
    echo "<pre>";
    print_r(array_keys($app->getLoadedProviders()));
    echo "</pre>";
    die();
}

$app->handleRequest(Illuminate\Http\Request::capture());
