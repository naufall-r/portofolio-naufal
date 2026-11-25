<?php
// =========================================================================
// KONFIGURASI DATA PORTOFOLIO - NAUFAL RAMADHAN
// =========================================================================

$profile = [
    'top_role_1'   => 'FULL-STACK WEB DEVELOPER',
    'top_role_2'   => '', // Dikosongkan agar header bersih 1 baris
    'status'       => 'AVAILABLE FOR FREELANCE & HIRE',
    'greeting'     => "Hello, I'm",
    'first_name'   => 'NAUFAL',
    'last_name'    => 'RAMADHAN',
    'main_title'   => "FRONTEND & FULL-STACK\nWEB DEVELOPER",
    'bio'          => 'Fresh graduate IT Software yang fokus merancang dan membangun aplikasi web modern yang responsif, cepat, dan terintegrasi sistem otomasi bisnis. Berpengalaman dari perancangan antarmuka hingga manajemen database relasional.',
    'location_tag' => 'JAKARTA, INDONESIA • AVAILABLE WORLDWIDE',
    'quote_side'   => "Turning ideas\ninto functional\ndigital systems.",
    'photo_url'    => 'assets/foto-naufal.png',
    'signature'    => 'Naufal R.',
    'footer_quote' => 'Kode yang baik bukan sekadar berjalan tanpa error, tapi mampu menyelesaikan masalah nyata pengguna dengan efisien.'
];

$stats = [
    ['number' => '10+',  'label' => "WEB\nPROJECTS"],
    ['number' => '8+',   'label' => "TECH STACKS\nMASTERED"],
    ['number' => '100%', 'label' => "COMMITMENT\nTO QUALITY"]
];

$projects = [
    [
        'num'      => '01',
        'title'    => 'BENGKEL JAYA SYSTEM',
        'category' => 'LARAVEL • DOMPDF • WHATSAPP API',
        'desc'     => 'Sistem antrean & invoicing servis motor otomatis dengan cetak struk PDF, QR Code, dan notifikasi WhatsApp.',
        'image'    => 'https://images.unsplash.com/photo-1558981403-c5f9899a28bc?q=80&w=800&auto=format&fit=crop',
        'link'     => '#project-bengkel'
    ],
    [
        'num'      => '02',
        'title'    => 'NAUFAL SNACK CATALOG',
        'category' => 'FULL-STACK • ADMIN CRUD • WA ORDER',
        'desc'     => 'Katalog produk F&B interaktif dengan panel manajemen admin dan alur pemesanan langsung ke WhatsApp.',
        'image'    => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?q=80&w=800&auto=format&fit=crop',
        'link'     => '#project-snack'
    ],
    [
        'num'      => '03',
        'title'    => 'E-VOTING KETUA RW',
        'category' => 'LARAVEL • TAILWIND CSS • AUTH',
        'desc'     => 'Platform pemilihan elektronik tingkat warga dengan verifikasi akun pemilih dan profil kandidat visual.',
        'image'    => 'https://images.unsplash.com/photo-1540910419892-4a36d2c3266c?q=80&w=800&auto=format&fit=crop',
        'link'     => '#project-evoting'
    ]
];

$education = [
    [
        'degree' => 'IT Software Engineering (Fresh Graduate)',
        'school' => 'Fokus Pengembangan Web Frontend & Full-Stack',
        'year'   => '2026'
    ],
    [
        'degree' => 'Sistem Manajemen Parkir & Database Enterprise',
        'school' => 'Pengembangan Role-Based Access & SQL Server',
        'year'   => '2026'
    ]
];

$skills = [
    'LARAVEL', 'PHP NATIVE', 'FLUTTER', 'TAILWIND CSS',
    'BOOTSTRAP 5', 'JAVASCRIPT', 'MYSQL', 'SQL SERVER',
    'PYTHON', 'JAVA', 'C++', 'REST API'
];

$work_process = [
    [
        'step'  => '01',
        'icon'  => 'fa-magnifying-glass',
        'title' => 'ANALYZE & DISCOVER',
        'desc'  => 'Memahami kebutuhan bisnis, alur pengguna, dan struktur database yang dibutuhkan.'
    ],
    [
        'step'  => '02',
        'icon'  => 'fa-sitemap',
        'title' => 'SYSTEM ARCHITECTURE',
        'desc'  => 'Merancang skema relasi tabel, hak akses pengguna, dan wireframe antarmuka.'
    ],
    [
        'step'  => '03',
        'icon'  => 'fa-palette',
        'title' => 'UI/UX DESIGN',
        'desc'  => 'Membangun tampilan responsif dan bersih menggunakan Tailwind CSS atau Bootstrap 5.'
    ],
    [
        'step'  => '04',
        'icon'  => 'fa-code',
        'title' => 'FULL-STACK DEVELOP',
        'desc'  => 'Implementasi backend Laravel/PHP, integrasi API pihak ketiga, dan aplikasi Flutter.'
    ],
    [
        'step'  => '05',
        'icon'  => 'fa-rocket',
        'title' => 'TESTING & DEPLOY',
        'desc'  => 'Pengujian performa, keamanan validasi data, dan peluncuran sistem siap pakai.'
    ]
];

$contact = [
    'email'    => 'naufal.ramadhan@devmail.id',
    'website'  => 'www.naufalramadhan.my.id',
    'phone'    => '+62 812 3456 7890',
    'location' => 'Jakarta, Indonesia'
];
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($profile['first_name'] . ' ' . $profile['last_name']) ?> — Portfolio</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Anton&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- TAILWIND CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        display: ['Anton', 'sans-serif'],
                        script: ['"Alex Brush"', 'cursive'],
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        darkbg: '#080808',
                        crimson: '#8B1418',
                        blood: '#4A090B',
                        accent: '#D92329',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #080808;
            color: #F3F4F6;
            overflow-x: hidden;
        }

        /* TULISAN BESAR PORTFOLIO */
        .mega-title {
            font-family: 'Anton', sans-serif;
            font-size: clamp(6.5rem, 21.5vw, 19.5rem);
            line-height: 0.82;
            letter-spacing: -0.02em;
            background: linear-gradient(180deg, #9E171B 15%, #3B0608 95%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            user-select: none;
        }

        /* EFEK PUDAR BAWAH PADA FOTO */
        .photo-fade {
            mask-image: linear-gradient(
                to bottom,
                rgba(0,0,0,1) 72%,
                rgba(0,0,0,0) 100%
            );
            -webkit-mask-image: linear-gradient(
                to bottom,
                rgba(0,0,0,1) 72%,
                rgba(0,0,0,0) 100%
            );
        }

        .editorial-border {
            border-color: rgba(255, 255, 255, 0.12);
        }

        .project-card:hover .project-img {
            transform: scale(1.05);
        }

        .project-card:hover .project-arrow {
            transform: translateX(6px);
            color: #D92329;
        }

        .bottom-crimson-glow {
            background: radial-gradient(
                circle at 85% 45%,
                rgba(158, 23, 27, 0.55) 0%,
                rgba(74, 9, 11, 0.35) 38%,
                rgba(8, 8, 8, 1) 75%
            );
        }
    </style>
</head>

<body class="antialiased selection:bg-accent selection:text-white">

<main class="max-w-[1280px] mx-auto px-5 sm:px-10 md:px-14 pt-7 pb-16">

    <!-- HEADER -->
    <header class="flex justify-between items-start text-[10px] sm:text-xs tracking-[0.18em] uppercase text-neutral-400 font-medium mb-4">
        <div class="leading-relaxed">
            <p class="text-neutral-200">
                <?= htmlspecialchars($profile['top_role_1']) ?>
            </p>
            <?php if (!empty($profile['top_role_2'])): ?>
            <p>
                <?= htmlspecialchars($profile['top_role_2']) ?>
            </p>
            <?php endif; ?>
        </div>

        <div class="flex items-center gap-2.5 text-neutral-200">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-accent"></span>
            </span>
            <span><?= htmlspecialchars($profile['status']) ?></span>
            <span class="text-accent text-xs ml-1">✦</span>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="relative pt-2 pb-12 border-b editorial-border">
        <div class="w-full text-center overflow-hidden">
            <h1 class="mega-title uppercase">PORTFOLIO</h1>
        </div>

        <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-end -mt-12 sm:-mt-24 md:-mt-36 lg:-mt-44">

            <!-- KOLOM KIRI -->
            <div class="lg:col-span-4 order-2 lg:order-1 pb-2">
                <p class="font-script text-3xl sm:text-4xl text-neutral-200 -mb-2 ml-1">
                    <?= htmlspecialchars($profile['greeting']) ?>
                </p>

                <h2 class="font-display text-6xl sm:text-7xl xl:text-[5.2rem] leading-[0.9] tracking-tight text-white uppercase mb-4">
                    <?= htmlspecialchars($profile['first_name']) ?><br>
                    <?= htmlspecialchars($profile['last_name']) ?>
                </h2>

                <p class="font-display text-lg sm:text-xl tracking-wide text-accent uppercase leading-snug mb-3">
                    <?= nl2br(htmlspecialchars($profile['main_title'])) ?>
                </p>

                <p class="text-xs sm:text-[13px] text-neutral-400 leading-relaxed mb-6 max-w-sm">
                    <?= htmlspecialchars($profile['bio']) ?>
                </p>

                <div class="flex items-center gap-2.5 text-[10px] tracking-[0.16em] text-neutral-300 uppercase font-semibold">
                    <i class="fa-solid fa-globe text-accent text-sm"></i>
                    <span>
                        <?= htmlspecialchars($profile['location_tag']) ?>
                    </span>
                </div>
            </div>

            <!-- KOLOM TENGAH: FOTO DIPERBESAR -->
            <div class="lg:col-span-5 order-1 lg:order-2 flex justify-center relative">
                <div class="absolute top-1/4 w-72 h-72 sm:w-96 sm:h-96 bg-crimson/40 rounded-full blur-[90px] -z-10"></div>

                <div class="relative w-80 sm:w-[440px] md:w-[480px] flex justify-center items-end overflow-visible">
                    <img
                        src="<?= htmlspecialchars($profile['photo_url']) ?>"
                        alt="Foto <?= htmlspecialchars($profile['first_name'] . ' ' . $profile['last_name']) ?>"
                        class="w-full h-[440px] sm:h-[530px] object-contain object-bottom scale-125 sm:scale-150 translate-y-3 grayscale contrast-125 brightness-95 photo-fade"
                    >
                </div>
            </div>

            <!-- KOLOM KANAN -->
            <div class="lg:col-span-3 order-3 flex flex-col justify-between lg:items-end pb-2 gap-8">
                <div class="flex items-center gap-3 lg:mb-10">
                    <div class="w-9 h-9 rounded-full border border-white/20 flex items-center justify-center text-white text-xs bg-black/40 backdrop-blur-sm">
                        ✦
                    </div>
                    <p class="text-[11px] leading-snug text-neutral-300 font-medium">
                        <?= nl2br(htmlspecialchars($profile['quote_side'])) ?>
                    </p>
                </div>

                <!-- STATISTIK -->
                <div class="grid grid-cols-3 lg:grid-cols-1 gap-4 w-full lg:w-auto">
                    <?php foreach ($stats as $stat): ?>
                    <div class="flex items-center gap-3 lg:justify-end">
                        <span class="font-display text-3xl sm:text-4xl text-accent tracking-wide">
                            <?= htmlspecialchars($stat['number']) ?>
                        </span>
                        <span class="text-[9px] sm:text-[10px] tracking-[0.14em] text-neutral-400 uppercase leading-tight">
                            <?= nl2br(htmlspecialchars($stat['label'])) ?>
                        </span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

    <!-- SELECTED PROJECTS -->
    <section id="projects" class="py-12 border-b editorial-border">
        <div class="flex justify-between items-center mb-7">
            <h3 class="font-display text-2xl sm:text-3xl tracking-wide text-white uppercase">
                SELECTED PROJECTS
            </h3>
            <a href="#contact" class="group flex items-center gap-2.5 text-[11px] tracking-[0.18em] text-neutral-300 hover:text-accent uppercase transition-colors">
                <span>REQUEST FULL DEMO</span>
                <i class="fa-solid fa-arrow-right-long transition-transform group-hover:translate-x-1.5"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($projects as $project): ?>
            <article class="project-card group cursor-pointer">
                <div class="relative overflow-hidden bg-neutral-900 aspect-[16/10] mb-4 border border-white/10">
                    <img
                        src="<?= htmlspecialchars($project['image']) ?>"
                        alt="<?= htmlspecialchars($project['title']) ?>"
                        class="project-img w-full h-full object-cover opacity-85 group-hover:opacity-100 transition-all duration-500"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <p class="absolute bottom-3 left-3 right-3 text-[11px] text-neutral-300 line-clamp-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <?= htmlspecialchars($project['desc']) ?>
                    </p>
                </div>

                <div class="flex items-center justify-between pt-1">
                    <div class="flex items-center gap-3.5">
                        <span class="font-display text-3xl text-accent leading-none">
                            <?= htmlspecialchars($project['num']) ?>
                        </span>
                        <div>
                            <h4 class="text-xs sm:text-sm font-bold tracking-wider text-white uppercase group-hover:text-accent transition-colors">
                                <?= htmlspecialchars($project['title']) ?>
                            </h4>
                            <p class="text-[10px] tracking-[0.12em] text-neutral-400 uppercase mt-0.5">
                                <?= htmlspecialchars($project['category']) ?>
                            </p>
                        </div>
                    </div>
                    <i class="project-arrow fa-solid fa-arrow-right text-neutral-500 text-sm transition-all duration-300"></i>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- EDUCATION & SKILLS -->
    <section class="grid grid-cols-1 lg:grid-cols-12 border-b editorial-border">

        <!-- KOLOM 1 -->
        <div class="lg:col-span-5 py-10 lg:pr-8 lg:border-r editorial-border flex flex-col justify-between">
            <div>
                <h3 class="font-display text-2xl sm:text-3xl tracking-wide text-white uppercase mb-6">
                    EDUCATION & SKILLS
                </h3>

                <p class="text-[11px] font-bold tracking-[0.18em] text-accent uppercase mb-4">
                    BACKGROUND & FOCUS
                </p>

                <div class="space-y-4 mb-9">
                    <?php foreach ($education as $edu): ?>
                    <div class="flex justify-between items-start gap-4 border-b border-white/5 pb-3">
                        <div>
                            <h4 class="text-xs sm:text-sm font-semibold text-white">
                                <?= htmlspecialchars($edu['degree']) ?>
                            </h4>
                            <p class="text-xs text-neutral-400 mt-0.5">
                                <?= htmlspecialchars($edu['school']) ?>
                            </p>
                        </div>
                        <span class="text-xs font-semibold text-accent whitespace-nowrap">
                            <?= htmlspecialchars($edu['year']) ?>
                        </span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- SKILLS -->
            <div>
                <p class="text-[11px] font-bold tracking-[0.18em] text-accent uppercase mb-4">
                    TECH STACK & TOOLS
                </p>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($skills as $skill): ?>
                    <span class="px-3 py-1.5 text-[10px] font-semibold tracking-[0.14em] uppercase text-neutral-200 bg-white/[0.03] border border-white/15 hover:border-accent hover:bg-accent/10 transition-colors">
                        <?= htmlspecialchars($skill) ?>
                    </span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- KOLOM 2: WORK PROCESS -->
        <div class="lg:col-span-4 py-10 lg:px-8 border-t lg:border-t-0 lg:border-r editorial-border">
            <h3 class="font-display text-2xl sm:text-3xl tracking-wide text-white uppercase mb-6">
                WORK PROCESS
            </h3>

            <div class="space-y-5">
                <?php foreach ($work_process as $proc): ?>
                <div class="flex items-start gap-3.5 group">
                    <span class="font-display text-xl text-accent w-6 pt-0.5">
                        <?= htmlspecialchars($proc['step']) ?>
                    </span>
                    <div class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center text-neutral-300 text-xs shrink-0 group-hover:border-accent group-hover:text-accent transition-colors">
                        <i class="fa-solid <?= htmlspecialchars($proc['icon']) ?>"></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold tracking-[0.14em] text-accent uppercase">
                            <?= htmlspecialchars($proc['title']) ?>
                        </h4>
                        <p class="text-[11px] text-neutral-400 leading-relaxed mt-0.5">
                            <?= htmlspecialchars($proc['desc']) ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- KOLOM 3: QUOTE -->
        <div class="lg:col-span-3 py-10 lg:pl-8 border-t lg:border-t-0 editorial-border flex flex-col justify-between bg-gradient-to-b from-blood/40 via-blood/20 to-transparent px-6 lg:px-6">
            <div>
                <div class="text-accent text-4xl font-serif leading-none mb-3">
                    “
                </div>
                <p class="text-sm sm:text-[15px] text-neutral-200 font-normal leading-relaxed mb-6">
                    <?= htmlspecialchars($profile['footer_quote']) ?>
                </p>
                <p class="font-script text-4xl text-white">
                    <?= htmlspecialchars($profile['signature']) ?>
                </p>
            </div>

            <div class="pt-8 mt-8 border-t border-white/10">
                <p class="text-[11px] font-bold tracking-[0.16em] text-neutral-200 uppercase leading-relaxed">
                    LET'S BUILD SOMETHING<br>IMPACTFUL TOGETHER.
                </p>
                <span class="inline-block text-accent mt-2 text-sm">
                    ✦
                </span>
            </div>
        </div>

    </section>

    <!-- FOOTER / CONTACT -->
    <footer id="contact" class="pt-12 pb-6 relative overflow-hidden bottom-crimson-glow rounded-b-xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">

            <!-- KOLOM KIRI -->
            <div class="lg:col-span-4">
                <h2 class="font-display text-5xl sm:text-6xl leading-[0.92] text-white uppercase mb-4">
                    LET'S WORK<br>TOGETHER
                    <span class="text-accent text-2xl align-middle">✦</span>
                </h2>
                <p class="text-xs text-neutral-300 leading-relaxed mb-6 max-w-xs">
                    Terbuka untuk peluang kerja Full-Time, Freelance Web Development, maupun kolaborasi pembuatan sistem informasi bisnis.
                </p>
                <a href="mailto:<?= htmlspecialchars($contact['email']) ?>" class="inline-flex items-center gap-3 group">
                    <span class="w-9 h-9 rounded-full border border-accent flex items-center justify-center text-accent group-hover:bg-accent group-hover:text-white transition-all">
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </span>
                    <span class="text-[11px] font-bold tracking-[0.18em] text-accent uppercase group-hover:text-white transition-colors">
                        HUBUNGI SEKARANG
                    </span>
                </a>
            </div>

            <!-- KOLOM TENGAH: KONTAK -->
            <div class="lg:col-span-4 space-y-4">
                <a href="mailto:<?= htmlspecialchars($contact['email']) ?>" class="flex items-center gap-3.5 text-xs text-neutral-200 hover:text-accent transition-colors border-b border-white/10 pb-3">
                    <span class="w-7 h-7 rounded bg-white/5 border border-white/10 flex items-center justify-center text-neutral-300">
                        <i class="fa-regular fa-envelope"></i>
                    </span>
                    <span><?= htmlspecialchars($contact['email']) ?></span>
                </a>

                <a href="https://<?= htmlspecialchars($contact['website']) ?>" target="_blank" class="flex items-center gap-3.5 text-xs text-neutral-200 hover:text-accent transition-colors border-b border-white/10 pb-3">
                    <span class="w-7 h-7 rounded bg-white/5 border border-white/10 flex items-center justify-center text-neutral-300">
                        <i class="fa-solid fa-globe"></i>
                    </span>
                    <span><?= htmlspecialchars($contact['website']) ?></span>
                </a>

                <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $contact['phone']) ?>" target="_blank" class="flex items-center gap-3.5 text-xs text-neutral-200 hover:text-accent transition-colors border-b border-white/10 pb-3">
                    <span class="w-7 h-7 rounded bg-white/5 border border-white/10 flex items-center justify-center text-neutral-300">
                        <i class="fa-brands fa-whatsapp"></i>
                    </span>
                    <span><?= htmlspecialchars($contact['phone']) ?></span>
                </a>

                <div class="flex items-center gap-3.5 text-xs text-neutral-200 pt-1">
                    <span class="w-7 h-7 rounded bg-white/5 border border-white/10 flex items-center justify-center text-neutral-300">
                        <i class="fa-solid fa-location-dot"></i>
                    </span>
                    <span><?= htmlspecialchars($contact['location']) ?></span>
                </div>
            </div>

            <!-- KOLOM KANAN: WORKSPACE -->
            <div class="lg:col-span-4 flex justify-end">
                <div class="relative w-full max-w-sm rounded-lg overflow-hidden border border-white/15 bg-black/50 p-4 backdrop-blur-md">
                    <img
                        src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800&auto=format&fit=crop"
                        alt="Coding Workspace"
                        class="w-full h-40 object-cover rounded opacity-70"
                    >
                    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/50 to-transparent flex flex-col justify-center p-7">
                        <p class="font-display text-lg tracking-wider text-white uppercase leading-tight">
                            WE BUILD<br>SCALABLE<br>
                            <span class="text-accent">WEB SYSTEMS</span>
                        </p>
                        <span class="text-[10px] tracking-[0.2em] text-neutral-400 uppercase mt-2">
                            © <?= date('Y') ?> NAUFAL RAMADHAN
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </footer>

</main>

</body>
</html>