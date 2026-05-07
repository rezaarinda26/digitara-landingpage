<?php

// Temporary Debug
die("Bridge OK! PHP Version: " . phpversion());

// Register the Composer autoloader...
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->handleRequest(Illuminate\Http\Request::capture());
