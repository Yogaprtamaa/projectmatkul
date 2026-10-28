# Portofolio – Yoga Pratama

**Nama:** Yoga Pratama
**NIM:** 125103056

Website portofolio pribadi sebagai tugas Pertemuan 3 Pemrograman Web.
Memuat bagian Beranda, Tentang Saya, Proyek (3 item), dan Kontak dalam
tiga halaman PHP yang responsif di ponsel (≈ 375px) maupun desktop.

## Teknologi

- PHP 8 (include partial, validasi form, `GET` & `POST`)
- PostgreSQL (menyimpan pesan kontak lewat PDO)
- HTML5 semantik (`header`, `nav`, `main`, `section`, `footer`)
- Tailwind CSS via CDN (grid, navbar, card, form, utility class)
- CSS kustom (`style.css`) berisi token Apple HIG + `.glass`

## Struktur

- `index.php` — Beranda + Tentang Saya
- `porto.php` — Proyek (3 item) + pencarian dengan method `GET`
- `contact.php` — Form kontak dengan method `POST` + simpan ke PostgreSQL
- `latihan.php` — Latihan dasar PHP
- `partials/` — `header.php`, `footer.php`, `functions.php`, `database.php`
- `config/database.php` — konfigurasi koneksi database
- `database/schema.sql` — tabel `messages`
- `style.css`, `assets/`

## Setup Database (PostgreSQL)

Pastikan ekstensi `pdo_pgsql` aktif, lalu buat database dan jalankan schema:

```bash
createdb portfolio
psql -d portfolio -f database/schema.sql
```

Koneksi dibaca dari `.env.local` (otomatis dimuat oleh `config/database.php`).
Isi salah satu format berikut:

```env
DATABASE_URL=postgresql://user:password@host:5432/database?sslmode=require
```

atau:

```env
DB_HOST=127.0.0.1
DB_PORT=5432
DB_NAME=portfolio
DB_USER=postgres
DB_PASS=password
DB_SSLMODE=prefer
```

Untuk database cloud (Supabase/Neon/Railway) biasanya `DB_SSLMODE=require`.
Environment variable dari server tetap diprioritaskan di atas isi file.

Untuk Supabase, ambil connection string PostgreSQL di
**Project Settings → Database → Connection string**, bukan anon/secret API key.

Atau ubah nilai default langsung di `config/database.php`.

## Menjalankan

```bash
php -S localhost:8000
```

Lalu buka http://localhost:8000/index.php

## Website

https://github.com/Yogaprtamaa/projectmatkul
