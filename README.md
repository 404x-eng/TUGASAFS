# Website Informasi Event Kampus UNUD

Website ini menyediakan informasi mengenai event di kampus Universitas Udayana (UNUD), termasuk webinar, lomba, dan kegiatan pengabdian masyarakat.

## Masalah yang Diatasi

Mahasiswa sering tidak tahu tentang keberagaman event di kampus UNUD dan kapan event tersebut dilaksanakan.

## Solusi

Website yang menyediakan informasi lengkap tentang event kampus.

## Fitur

### Daftar Event
- Nama event
- Tanggal mulai dan selesai
- Detail dan deskripsi event
- Bobot SKP yang didapat
- Biaya mengikuti event

### Registrasi
- Arahkan ke website/form pendaftaran eksternal
- Fitur "Ikuti Event" untuk tracking internal

### Profil Pengguna
- Identitas pengguna
- Daftar event yang telah diikuti

## Teknologi

- Laravel 11
- SQLite database
- Bootstrap untuk styling

## Instalasi

1. Clone repository ini.
2. Jalankan `composer install`.
3. Copy `.env.example` ke `.env` dan configure database.
4. Jalankan `php artisan key:generate`.
5. Jalankan `php artisan migrate`.
6. Jalankan `php artisan db:seed` untuk data sample.
7. Jalankan `php artisan serve` untuk menjalankan server.

## Penggunaan

- Kunjungi `/events` untuk melihat daftar event.
- Klik "Lihat Detail" untuk informasi lengkap.
- Login untuk mengikuti event dan melihat profil.

## Catatan

Website ini adalah gambaran dasar. Untuk production, tambahkan authentication lengkap, validasi, dan styling lebih baik.

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
