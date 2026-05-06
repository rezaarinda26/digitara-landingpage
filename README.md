# Digitara Landing Page

Landing page Digitara yang sudah dipindahkan ke stack Laravel sesuai `LARAVEL_IMPLEMENTATION.md`.

## Stack

- Laravel 11
- Blade
- Tailwind CDN
- Alpine.js
- Lucide Icons

## Run Locally

**Prerequisites:** PHP 8.2+ dan Composer.

1. Install dependency PHP:
   `composer install`
2. Buat file environment:
   `copy .env.example .env`
3. Generate application key:
   `php artisan key:generate`
4. Jalankan server:
   `php artisan serve`

Halaman utama tersedia di `http://127.0.0.1:8000`.

## Struktur Utama

- `routes/web.php`: data services dan portfolio untuk landing page.
- `resources/views/welcome.blade.php`: template Blade landing page.
- `public/index.php`: entrypoint Laravel.
