<?php
require_once __DIR__ . '/partials/functions.php';

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$submitted = $method === 'POST';
$input = $_POST;

$nama = trim((string) ($input['nama'] ?? ''));
$email = trim((string) ($input['email'] ?? ''));
$pesan = trim((string) ($input['pesan'] ?? ''));

$errors = [];

if ($submitted) {
    if ($nama === '') {
        $errors[] = 'Nama wajib diisi.';
    }

    if ($email === '') {
        $errors[] = 'Email wajib diisi.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Format email tidak valid.';
    }

    if ($pesan === '') {
        $errors[] = 'Pesan wajib diisi.';
    }
}

$success = $submitted && empty($errors);

$title = 'Portofolio | Kontak';
$active = 'kontak';
require __DIR__ . '/partials/header.php';
?>

    <main class="py-10">
        <section id="kontak">
            <div class="max-w-3xl mx-auto px-4">
                <h1 class="text-[34px] leading-[1.15] tracking-[-0.02em] font-bold">Hubungi Saya</h1>
                <p class="text-[15px] opacity-60 mt-1">Isi form di bawah ini untuk mengirim pesan.</p>

                <?php if ($submitted && $errors): ?>
                    <div class="mt-4 rounded-apple border border-systemred/30 bg-systemred/10 p-4 text-[15px]" role="alert">
                        <p class="font-semibold text-systemred">Data belum valid:</p>
                        <ul class="mt-1 list-disc list-inside">
                            <?php foreach ($errors as $error): ?>
                                <li><?= e($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php elseif ($success): ?>
                    <div class="mt-4 rounded-apple border border-systemgreen/30 bg-systemgreen/10 p-4 text-[15px]" role="status">
                        <p class="font-semibold text-systemgreen">Pesan berhasil dikirim.</p>
                        <dl class="mt-2 space-y-1">
                            <div><dt class="inline font-medium">Nama:</dt> <dd class="inline"><?= e($nama) ?></dd></div>
                            <div><dt class="inline font-medium">Email:</dt> <dd class="inline"><?= e($email) ?></dd></div>
                            <div><dt class="inline font-medium">Pesan:</dt> <dd class="inline"><?= e($pesan) ?></dd></div>
                        </dl>
                    </div>
                <?php endif; ?>

                <div class="grid gap-4 md:grid-cols-12 mt-4">
                    <aside class="glass rounded-apple p-4 md:col-span-5 h-full">
                        <h2 class="text-[20px] font-semibold">Info Kontak</h2>
                        <ul class="mt-2 space-y-2 text-[16px]">
                            <li><strong>Email:</strong> prtmyog17@gmail.com</li>
                            <li><strong>GitHub:</strong> <a class="text-systemblue" href="https://github.com/Yogaprtamaa">Yogaprtamaa</a></li>
                            <li><strong>Lokasi:</strong> Indonesia</li>
                        </ul>
                    </aside>
                    <form action="contact.php" method="post" class="glass rounded-apple p-4 md:col-span-7">
                        <div class="mb-4">
                            <label for="nama" class="block text-[16px] font-medium mb-2">Nama</label>
                            <input type="text" class="input-apple w-full min-h-tap rounded-xl px-4 border border-black/10 dark:border-white/20 bg-white dark:bg-black" id="nama" name="nama" placeholder="Nama kamu" value="<?= e($nama) ?>" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-[16px] font-medium mb-2">Email</label>
                            <input type="email" class="input-apple w-full min-h-tap rounded-xl px-4 border border-black/10 dark:border-white/20 bg-white dark:bg-black" id="email" name="email" placeholder="email@contoh.com" value="<?= e($email) ?>" required>
                        </div>
                        <div class="mb-4">
                            <label for="pesan" class="block text-[16px] font-medium mb-2">Pesan</label>
                            <textarea class="input-apple w-full rounded-xl px-4 py-3 border border-black/10 dark:border-white/20 bg-white dark:bg-black" id="pesan" name="pesan" rows="5" placeholder="Tulis pesan..." required><?= e($pesan) ?></textarea>
                        </div>
                        <button type="submit" class="w-full min-h-tap rounded-full bg-systemblue text-white font-semibold">Kirim Pesan</button>
                        <p class="mt-2 text-[13px] opacity-60">Form ini menggunakan method <strong>POST</strong>. Contoh fitur <strong>GET</strong> ada di <a class="text-systemblue" href="porto.php">pencarian proyek</a>.</p>
                    </form>
                </div>
            </div>
        </section>
    </main>

<?php require __DIR__ . '/partials/footer.php'; ?>
