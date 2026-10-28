<?php
$title = 'Portofolio | Beranda';
$active = 'beranda';
require __DIR__ . '/partials/header.php';
?>

    <main>
        <!-- Beranda -->
        <section id="beranda" class="py-10">
            <div class="max-w-5xl mx-auto px-4">
                <div class="grid gap-8 md:grid-cols-2 items-center">
                    <div class="text-center md:text-left">
                        <p class="text-[15px] opacity-60 mb-2">Halo, selamat datang di portofolio saya</p>
                        <h1 class="text-[34px] leading-[1.15] tracking-[-0.02em] font-bold">Hi, I'm Yoga Pratama</h1>
                        <p class="text-[17px] mt-1 opacity-80">Junior Web Developer</p>
                        <p class="mt-2 opacity-80">Saya belajar pengembangan web modern: HTML, CSS, dan smart contract Solana (Rust Anchor).</p>
                        <div class="mt-4 flex gap-2 justify-center md:justify-start flex-wrap">
                            <a href="porto.php" class="min-h-tap inline-flex items-center px-6 rounded-full bg-systemblue text-white font-semibold">Lihat Proyek</a>
                            <a href="contact.php" class="min-h-tap inline-flex items-center px-6 rounded-full glass font-semibold">Let's talk</a>
                        </div>
                    </div>
                    <div class="text-center">
                        <img src="assets/image.png" alt="Foto profil Yoga Pratama" class="hero-img mx-auto">
                    </div>
                </div>
            </div>
        </section>

        <!-- Tentang Saya -->
        <section id="tentang" class="py-10 bg-white dark:bg-black">
            <div class="max-w-3xl mx-auto px-4">
                <h2 class="text-[22px] font-bold tracking-tight">Tentang Saya</h2>
                <p class="mt-2 opacity-80">Halo, nama saya Yoga Pratama. Saya sedang belajar biar ga jadi web dev terus cape fetching di lib sama middleware token jwt sama server side auth, mau punya usaha ternak lele.</p>

                <h3 class="mt-8 text-[20px] font-semibold">Biodata</h3>
                <div class="mt-2 overflow-x-auto rounded-apple border border-black/10 dark:border-white/10">
                    <table class="w-full text-[16px]">
                        <thead>
                            <tr class="bg-[#F2F2F7] dark:bg-[#1C1C1E] text-left">
                                <th scope="col" class="px-4 py-3 min-h-tap">Keterangan</th>
                                <th scope="col" class="px-4 py-3 min-h-tap">Isi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-black/10 dark:divide-white/10">
                            <tr><td class="px-4 py-3">Nama</td><td class="px-4 py-3">Yoga Pratama</td></tr>
                            <tr><td class="px-4 py-3">Profesi</td><td class="px-4 py-3">Junior Web Developer</td></tr>
                            <tr><td class="px-4 py-3">Lokasi</td><td class="px-4 py-3">Indonesia</td></tr>
                        </tbody>
                    </table>
                </div>

                <div class="grid gap-8 md:grid-cols-2 mt-4">
                    <div>
                        <h3 class="text-[20px] font-semibold">Skill</h3>
                        <ul class="mt-2 rounded-apple overflow-hidden border border-black/10 dark:border-white/10 divide-y divide-black/10 dark:divide-white/10">
                            <li class="min-h-tap flex items-center gap-2 px-4 py-3">HTML <span class="text-[13px] px-2 py-0.5 rounded-full bg-black/10 dark:bg-white/15">sejak era Sublime</span></li>
                            <li class="min-h-tap flex items-center px-4 py-3">CSS / Tailwind</li>
                            <li class="min-h-tap flex items-center px-4 py-3"><a class="text-systemblue" href="https://github.com/Yogaprtamaa/contract-rust">Rust Anchor Smart Contract Solana</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-[20px] font-semibold">Hobi</h3>
                        <ol class="mt-2 rounded-apple overflow-hidden border border-black/10 dark:border-white/10 divide-y divide-black/10 dark:divide-white/10 list-decimal list-inside">
                            <li class="min-h-tap px-4 py-3">Baca Substack</li>
                            <li class="min-h-tap px-4 py-3">Kritik Pemerintah</li>
                            <li class="min-h-tap px-4 py-3">Baca Substack lagi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php require __DIR__ . '/partials/footer.php'; ?>
