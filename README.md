# Portofolio – Yoga Pratama

**Nama:** Yoga Pratama
**NIM:** 125103056

Website portofolio pribadi sebagai tugas Pertemuan 3 Pemrograman Web.
Memuat bagian Beranda, Tentang Saya, Proyek (3 item), dan Kontak dalam
tiga halaman PHP yang responsif di ponsel (≈ 375px) maupun desktop.

## Teknologi

- PHP 8 (include partial, validasi form, `GET` & `POST`)
- HTML5 semantik (`header`, `nav`, `main`, `section`, `footer`)
- Tailwind CSS via CDN (grid, navbar, card, form, utility class)
- CSS kustom (`style.css`) berisi token Apple HIG + `.glass`

## Struktur

- `index.php` — Beranda + Tentang Saya
- `porto.php` — Proyek (3 item) + pencarian dengan method `GET`
- `contact.php` — Form kontak dengan method `POST`
- `latihan.php` — Latihan dasar PHP
- `partials/` — `header.php`, `footer.php`, `functions.php`
- `style.css`, `assets/`

## Menjalankan

```bash
php -S localhost:8000
```

Lalu buka http://localhost:8000/index.php

## Website

https://github.com/Yogaprtamaa/projectmatkul
