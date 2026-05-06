<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function (): void {
    $this->comment('Build useful systems with care.');
})->purpose('Display an inspiring message');
