<?php

use Illuminate\Http\Request;

// Register the Composer autoloader...
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Ensure storage path is writable (Vercel only allows /tmp)
$app->useStoragePath('/tmp');

/**
 * Masalah: Laravel 11 di serverless kadang gagal mendaftarkan ViewServiceProvider otomatis.
 * Solusi: Kita daftarkan secara manual jika belum ada.
 */
if (!$app->bound('view')) {
    $app->register(Illuminate\View\ViewServiceProvider::class);
    $app->register(Illuminate\Session\SessionServiceProvider::class);
    $app->register(Illuminate\Cookie\CookieServiceProvider::class);
}

// Handle the request
$app->handleRequest(Request::capture());
