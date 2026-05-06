# Digitara Landing Page

Landing page Digitara yang sekarang berjalan penuh di stack Laravel, tanpa dependensi React/Vite lama.

## Stack

- Laravel 11
- Blade
- Tailwind CSS via CDN
- Alpine.js
- Lucide Icons

## Menjalankan Project

Prasyarat:
- PHP 8.2+
- Composer

Langkah:
1. `composer install`
2. `copy .env.example .env`
3. `php artisan key:generate`
4. `php artisan serve`

Aplikasi akan tersedia di `http://127.0.0.1:8000`.

Alternatif command:
- `composer dev`
- `composer test`

## Struktur Penting

- `routes/web.php`: data konten landing page dan route homepage.
- `resources/views/welcome.blade.php`: view utama landing page.
- `public/brand-assets/LOGO.png`: logo yang dipakai di browser.
- `brand-assets/`: source asset brand dan referensi desain.
- `LARAVEL_IMPLEMENTATION.md`: catatan implementasi awal saat migrasi dari desain sebelumnya.

## Catatan

Project ini sengaja memakai asset front-end ringan via CDN karena kebutuhannya hanya landing page statis dengan interaksi kecil. Kalau nanti kita ingin pindah ke pipeline asset Laravel + Vite, strukturnya bisa ditambahkan lagi dengan cukup aman dari basis ini.
