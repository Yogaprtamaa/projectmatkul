<?php
require_once __DIR__ . '/partials/functions.php';

$projects = [
    [
        'title' => '1. Halaman Portofolio',
        'description' => 'Website portofolio pribadi menggunakan HTML, CSS, dan Tailwind.',
        'image' => 'assets/image copy 2.png',
        'alt' => 'Tampilan project portofolio',
        'tags' => ['HTML5', 'CSS', 'Tailwind'],
        'details' => [],
        'link' => 'https://d-portofolio.vercel.app/',
        'link_label' => 'Lihat portofolio',
        'link_class' => 'bg-systemblue text-white',
    ],
    [
        'title' => '2. Halaman Biodata',
        'description' => 'Halaman biodata sederhana dengan tabel dan form responsif.',
        'image' => 'assets/image copy.png',
        'alt' => 'Tampilan project biodata',
        'tags' => [],
        'details' => ['Yoga Pratama', 'prtmyog17@gmail.com'],
        'link' => 'index.php#tentang',
        'link_label' => 'Lihat biodata',
        'link_class' => 'border border-black/10 dark:border-white/20 text-systemblue',
    ],
    [
        'title' => '3. Rust Anchor Smart Contract',
        'description' => 'Smart contract Solana memakai Anchor (Rust): struktur program, akun, dan instruksi.',
        'image' => 'assets/image.png',
        'alt' => 'Tampilan project smart contract Solana',
        'tags' => ['Rust', 'Anchor', 'Solana'],
        'details' => [],
        'link' => 'https://github.com/Yogaprtamaa/contract-rust',
        'link_label' => 'Lihat di GitHub',
        'link_class' => 'bg-systemblue text-white',
    ],
];

$q = trim((string) ($_GET['q'] ?? ''));

$filtered = array_values(array_filter($projects, static function (array $project) use ($q): bool {
    if ($q === '') {
        return true;
    }

    $haystack = implode(' ', array_merge(
        [$project['title'], $project['description']],
        $project['tags'],
        $project['details']
    ));

    return str_contains(mb_strtolower($haystack), mb_strtolower($q));
}));

$title = 'Portofolio | Proyek';
$active = 'proyek';
require __DIR__ . '/partials/header.php';
?>

    <main class="py-10">
        <section id="proyek">
            <div class="max-w-5xl mx-auto px-4">
                <h1 class="text-[34px] leading-[1.15] tracking-[-0.02em] font-bold">Proyek Saya</h1>
                <p class="text-[15px] opacity-60 mt-1">Berikut 3 project yang pernah saya buat saat belajar web.</p>

                <form action="porto.php" method="get" class="glass rounded-apple p-4 mt-4 flex flex-col sm:flex-row gap-2">
                    <label for="q" class="sr-only">Cari proyek</label>
                    <input type="search" id="q" name="q" value="<?= e($q) ?>" placeholder="Cari proyek, mis. Tailwind, Solana..." class="input-apple flex-1 min-h-tap rounded-xl px-4 border border-black/10 dark:border-white/20 bg-white dark:bg-black">
                    <button type="submit" class="min-h-tap px-6 rounded-full bg-systemblue text-white font-semibold">Cari (GET)</button>
                    <?php if ($q !== ''): ?>
                        <a href="porto.php" class="min-h-tap inline-flex items-center justify-center px-6 rounded-full glass font-semibold">Reset</a>
                    <?php endif; ?>
                </form>

                <?php if ($q !== ''): ?>
                    <p class="mt-3 text-[15px]">Hasil pencarian untuk <strong><?= e($q) ?></strong>: <?= count($filtered) ?> proyek.</p>
                <?php endif; ?>

                <?php if (empty($filtered)): ?>
                    <div class="glass rounded-apple p-6 mt-4 text-center">
                        <p class="font-semibold">Proyek tidak ditemukan.</p>
                        <p class="opacity-60 text-[15px] mt-1">Coba kata kunci lain, misalnya "HTML", "Tailwind", atau "Solana".</p>
                    </div>
                <?php else: ?>
                    <div class="grid gap-4 md:grid-cols-3 mt-4">
                        <?php foreach ($filtered as $project): ?>
                            <article class="glass rounded-apple overflow-hidden flex flex-col h-full">
                                <img src="<?= e($project['image']) ?>" class="w-full aspect-video object-cover" alt="<?= e($project['alt']) ?>">
                                <div class="p-4 flex flex-col flex-1">
                                    <h2 class="text-[20px] font-semibold"><?= e($project['title']) ?></h2>
                                    <p class="mt-1 text-[16px] opacity-80"><?= e($project['description']) ?></p>

                                    <?php if (!empty($project['tags'])): ?>
                                        <div class="mt-2 flex flex-wrap gap-2">
                                            <?php foreach ($project['tags'] as $tag): ?>
                                                <span class="text-[13px] px-2 py-0.5 rounded-full bg-black/10 dark:bg-white/15"><?= e($tag) ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($project['details'])): ?>
                                        <ul class="mt-2 text-[13px] opacity-60 list-disc list-inside">
                                            <?php foreach ($project['details'] as $detail): ?>
                                                <li><?= e($detail) ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <a href="<?= e($project['link']) ?>" class="min-h-tap mt-auto inline-flex items-center justify-center px-6 rounded-full font-semibold <?= e($project['link_class']) ?>"><?= e($project['link_label']) ?></a>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <p class="mt-8">Lihat kode saya lainnya di <a class="text-systemblue" href="https://github.com/Yogaprtamaa">GitHub</a></p>
            </div>
        </section>
    </main>

<?php require __DIR__ . '/partials/footer.php'; ?>
