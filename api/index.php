<?php

// Register the Composer autoloader...
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Ensure storage path is writable (Vercel only allows /tmp)
$app->useStoragePath('/tmp');

$app->handleRequest(Illuminate\Http\Request::capture());
