<?php
$pageTitle = 'Staf Molikom';
require_once '../../app/views/layouts/head.php';
require_once '../../app/views/layouts/navbar.php';
require_once '../../app/config/database.php';


$queryDivisi = "SELECT * FROM division ORDER BY id_divisi ASC";
$resultDivisi = mysqli_query($conn, $queryDivisi);
$divisions = mysqli_fetch_all($resultDivisi, MYSQLI_ASSOC);

$queryStaf = "
    SELECT s.*, d.nama AS nama_divisi
    FROM staff s
    JOIN division d ON s.id_divisi = d.id_divisi
    ORDER BY d.id_divisi ASC, s.id_staf ASC
";
$resultStaf = mysqli_query($conn, $queryStaf);
$semuaStaf  = mysqli_fetch_all($resultStaf, MYSQLI_ASSOC);


$querySosmed = "SELECT * FROM staf_social";
$resultSosmed = mysqli_query($conn, $querySosmed);
$semuaSosmed  = mysqli_fetch_all($resultSosmed, MYSQLI_ASSOC);


$sosmedPerStaf = [];
foreach ($semuaSosmed as $sosmed) {
    $sosmedPerStaf[$sosmed['id_staf']][] = $sosmed;
}


$stafPerDivisi = [];
foreach ($semuaStaf as $staf) {
    $stafPerDivisi[$staf['id_divisi']][] = $staf;
}



function sosmedIcon($platform)
{
    $icons = [
        'instagram' => '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>',
        'linkedin'  => '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>',
        'twitter'   => '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>',
        'github'    => '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>',
    ];
    return $icons[strtolower($platform)] ?? '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15v-4H7l5-8v4h4l-5 8z"/></svg>';
}
?>


<div class="flex min-h-screen bg-[#111111]">


    <aside class="w-52 shrink-0 sticky top-16 h-[calc(100vh-4rem)] overflow-y-auto
                bg-[#111111] border-r border-white/5 py-8 hidden md:block">
        <nav class="flex flex-col">
            <?php foreach ($divisions as $div): ?>
                <a href="#divisi-<?= $div['id_divisi'] ?>"
                    class="sidebar-link px-6 py-3 text-sm font-semibold text-gray-400
                  hover:text-white transition-colors border-l-2 border-transparent
                  hover:border-molikom-red">
                    <?= htmlspecialchars($div['nama']) ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </aside>

    <main class="flex-1 overflow-y-auto">

        <?php foreach ($divisions as $div): ?>
            <?php

            $stafDivisi = $stafPerDivisi[$div['id_divisi']] ?? [];

            if (empty($stafDivisi)) continue;
            ?>

            <section id="divisi-<?= $div['id_divisi'] ?>" class="py-16 px-8 border-b border-white/5">

    
                <h2 class="text-4xl font-extrabold text-white text-center mb-12"
                    style="font-family: 'Arial Black', sans-serif;">
                    <?= htmlspecialchars($div['nama']) ?>
                </h2>

                <?php
                $jumlahStaf = count($stafDivisi);
                if ($jumlahStaf <= 2) {
                    $gridClass = 'grid grid-cols-1 sm:grid-cols-2 gap-8 max-w-xl mx-auto';
                } elseif ($jumlahStaf <= 3) {
                    $gridClass = 'grid grid-cols-1 sm:grid-cols-3 gap-8 max-w-3xl mx-auto';
                } else {
                    $gridClass = 'grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8';
                }
                ?>

                <div class="<?= $gridClass ?>">

                    <?php foreach ($stafDivisi as $staf): ?>

                        
                        <article class="flex flex-col">

                            
                            <div class="w-full aspect-square overflow-hidden bg-[#2a2a2a] mb-4">
                                <?php if ($staf['foto']): ?>
                                    <img src="<?= BASE_URL ?>/../../uploads/staff/<?= htmlspecialchars($staf['foto']) ?>"
                                        alt="<?= htmlspecialchars($staf['nama']) ?>"
                                        class="w-full h-full object-cover object-top" />
                                <?php else: ?>
                                  
                                    <div class="w-full h-full flex items-center justify-center bg-[#2a2a2a]">
                                        <svg class="w-16 h-16 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                                        </svg>
                                    </div>
                                <?php endif; ?>
                            </div>

                       
                            <h3 class="text-white font-bold text-base mb-1">
                                <?= htmlspecialchars($staf['nama']) ?>
                            </h3>

                           
                            <p class="text-molikom-red text-xs font-semibold uppercase tracking-wide mb-2">
                                <?= htmlspecialchars($staf['jabatan']) ?>
                            </p>

    
                            <?php if ($staf['tentang']): ?>
                                <p class="text-gray-400 text-xs leading-relaxed mb-3 line-clamp-4">
                                    <?= htmlspecialchars($staf['tentang']) ?>
                                </p>
                            <?php endif; ?>

                            
                            <?php if (!empty($sosmedPerStaf[$staf['id_staf']])): ?>
                                <div class="flex items-center gap-2 mt-auto pt-2">
                                    <?php foreach ($sosmedPerStaf[$staf['id_staf']] as $sosmed): ?>
                                        <a href="<?= htmlspecialchars($sosmed['url']) ?>"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="text-gray-400 hover:text-white transition-colors"
                                            title="<?= htmlspecialchars($sosmed['platform']) ?>">
                                            <?= sosmedIcon($sosmed['platform']) ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                        </article>
                 

                    <?php endforeach; ?>
                </div>

            </section>


        <?php endforeach; ?>

    </main>

</div>

<div class="md:hidden sticky top-16 z-40 bg-[#111111] border-b border-white/10 overflow-x-auto">
    <div class="flex gap-0 px-2 py-2 w-max">
        <?php foreach ($divisions as $div): ?>
            <a href="#divisi-<?= $div['id_divisi'] ?>"
                class="px-4 py-2 text-xs font-semibold text-gray-400 hover:text-white
                whitespace-nowrap transition-colors border-b-2 border-transparent
                hover:border-molikom-red">
                <?= htmlspecialchars($div['nama']) ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<style>
    .sidebar-link.active {
        color: white;
        border-left-color: #E8001D;
    }

    .line-clamp-4 {
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

<script>

    const sections = document.querySelectorAll('section[id^="divisi-"]');
    const sideLinks = document.querySelectorAll('.sidebar-link');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                sideLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + entry.target.id) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }, {
        rootMargin: '-30% 0px -60% 0px' 
    });

    sections.forEach(section => observer.observe(section));

    document.querySelectorAll('a[href^="#divisi-"]').forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            const target = document.querySelector(link.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>

<?php require_once '../../app/views/layouts/footer.php'; ?>