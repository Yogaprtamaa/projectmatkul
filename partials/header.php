<?php
require_once __DIR__ . '/functions.php';

$title = $title ?? 'Portofolio';
$active = $active ?? '';
$isActive = static fn (string $key): bool => $key === $active;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portofolio Yoga Pratama - Junior Web Developer">
    <title><?= e($title) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'media',
            theme: {
                extend: {
                    colors: { systemblue: '#007AFF', systemgreen: '#34C759', systemred: '#FF3B30' },
                    fontFamily: { system: ['-apple-system', 'BlinkMacSystemFont', 'SF Pro', 'system-ui', 'Segoe UI', 'sans-serif'] },
                    borderRadius: { apple: '18px' },
                    minHeight: { tap: '44px' },
                    minWidth: { tap: '44px' }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="font-system">
    <header class="px-4 pt-4">
        <nav class="glass max-w-5xl mx-auto rounded-apple px-4 py-2">
            <div class="flex items-center justify-between min-h-tap">
                <a href="index.php" class="font-bold text-[17px] tracking-tight">Yoga Pratama</a>
                <button id="navToggle" class="lg:hidden min-w-tap min-h-tap flex items-center justify-center rounded-full" aria-label="Toggle navigation" aria-expanded="false">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
                </button>
                <div class="hidden lg:flex items-center gap-1">
                    <a href="index.php" <?= $isActive('beranda') ? 'aria-current="page"' : '' ?> class="min-h-tap inline-flex items-center px-4 rounded-full <?= $isActive('beranda') ? 'font-semibold text-systemblue' : 'opacity-70 hover:opacity-100' ?>">Beranda</a>
                    <a href="index.php#tentang" class="min-h-tap inline-flex items-center px-4 rounded-full opacity-70 hover:opacity-100">Tentang Saya</a>
                    <a href="porto.php" <?= $isActive('proyek') ? 'aria-current="page"' : '' ?> class="min-h-tap inline-flex items-center px-4 rounded-full <?= $isActive('proyek') ? 'font-semibold text-systemblue' : 'opacity-70 hover:opacity-100' ?>">Proyek</a>
                    <a href="contact.php" <?= $isActive('kontak') ? 'aria-current="page"' : '' ?> class="min-h-tap inline-flex items-center px-4 rounded-full <?= $isActive('kontak') ? 'font-semibold text-systemblue' : 'opacity-70 hover:opacity-100' ?>">Kontak</a>
                    <a href="contact.php" class="min-h-tap inline-flex items-center px-6 ml-2 rounded-full bg-systemblue text-white font-semibold">Let's talk</a>
                </div>
            </div>
            <div id="mobileMenu" class="hidden lg:hidden pb-3 flex flex-col gap-1">
                <a href="index.php" <?= $isActive('beranda') ? 'aria-current="page"' : '' ?> class="min-h-tap flex items-center px-4 rounded-xl <?= $isActive('beranda') ? 'font-semibold text-systemblue' : '' ?>">Beranda</a>
                <a href="index.php#tentang" class="min-h-tap flex items-center px-4 rounded-xl">Tentang Saya</a>
                <a href="porto.php" <?= $isActive('proyek') ? 'aria-current="page"' : '' ?> class="min-h-tap flex items-center px-4 rounded-xl <?= $isActive('proyek') ? 'font-semibold text-systemblue' : '' ?>">Proyek</a>
                <a href="contact.php" <?= $isActive('kontak') ? 'aria-current="page"' : '' ?> class="min-h-tap flex items-center px-4 rounded-xl <?= $isActive('kontak') ? 'font-semibold text-systemblue' : '' ?>">Kontak</a>
                <a href="contact.php" class="min-h-tap flex items-center justify-center px-4 rounded-full bg-systemblue text-white font-semibold mt-1">Let's talk</a>
            </div>
        </nav>
    </header>
