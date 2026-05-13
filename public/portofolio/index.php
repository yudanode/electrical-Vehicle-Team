<?php $pageTitle = 'Portofolio - Molikom'; ?>
<?php require_once '../../app/views/layouts/head.php' ?>
<?php require_once '../../app/views/layouts/navbar.php' ?>


<section class="bg-black py-16 border-b border-white/5">
    <div class="max-w-6x1 mx-auto px-6">
        <p class="text-molikom-red text-xs uppercase tracking-widest font-semibold mb-3">Our Project</p>
    </div>
</section>


<section class="bg-[#111111] py-6 border-b border-white/5">
    <div class="max-w-6xl mx-auto px-6 flex flex-wrap gap-2">
        <button onclick="filter('semua')" id="btn-semua" class="filter-btn active-btn px-5 py-2 text-xs font-bold uppercase tracking-widest rounded transition-all">Semua</button>
        <button onclick="filter('motor')" id="btn-motor" class="filter-btn px-5 py-2 text-xs font-bold uppercase tracking-widest rounded transition-all bg-white/5 text-gray-400 hover:bg-white/10 hover:text-white border border-white/10">Motor</button>
        <button onclick="filter('mobil')" id="btn-mobil" class="filter-btn px-5 py-2 text-xs font-bold uppercase tracking-widest rounded transition-all bg-white/5 text-gray-400 hover:bg-white/10 hover:text-white border border-white/10">Mobil</button>
        <button onclick="filter('prototype')" id="btn-prototype" class="filter-btn px-5 py-2 text-xs font-bold uppercase tracking-widest rounded transition-all bg-white/5 text-gray-400 hover:bg-white/10 hover:text-white border border-white/10">Prototype</button>
    </div>
</section>

<main class="max-w-6xl mx-auto px-6 py-16 space-y-24">
    <article class="porto-item" data-kategori="motor">
        <div class="flex flex-col lg:flex-row items-center gap-12">


            <div class="w-full lg:w-1/2 shrink-0">
                <div class="relative">

                    <div class="absolute -top-3 -left-3 w-full h-full border-2 border-molikom-red rounded opacity-40"></div>
                    <div class="relative bg-[#2a2a2a] rounded overflow-hidden aspect-[4/3]">
                        <img src="<?= BASE_URL ?>/assets/img/portofolio/shembrani.svg"
                            alt="Shembrani"
                            class="w-full h-full object-cover"
                            onerror="this.src='https://placehold.co/600x450/2a2a2a/666?text=Shembrani'" />
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2">
                <span class="text-molikom-red text-xs uppercase tracking-widest font-semibold">Motor</span>
                <h2 class="text-4xl font-extrabold text-white mt-2 mb-4">Shembrani</h2>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Shembrani Molikom lahir pada 25 Desember 2025 sebagai bentuk semangat dan kerja keras
                    mahasiswa dalam menciptakan kendaraan listrik yang cepat, kuat, dan punya karakter.
                    Nama Shembrani diambil dari kuda legendaris yang dikenal tangguh dan memiliki kecepatan
                    tinggi. Nama ini dipilih karena sesuai dengan konsep unit drag EV yang harus punya tenaga
                    besar, respons cepat, dan siap melaju di lintasan.
                </p>
                <div class="mt-6 grid grid-cols-2 gap-4">
                    <div class="bg-white/5 rounded p-4 border border-white/10">
                        <p class="text-gray-500 text-xs uppercase tracking-widest mb-1">Tipe</p>
                        <p class="text-white text-sm font-semibold">Drag Electric</p>
                    </div>
                    <div class="bg-white/5 rounded p-4 border border-white/10">
                        <p class="text-gray-500 text-xs uppercase tracking-widest mb-1">Tahun</p>
                        <p class="text-white text-sm font-semibold">2025</p>
                    </div>
                </div>
            </div>

        </div>
    </article>

    <div class="border-t border-white/5"></div>
    <article class="porto-item" data-kategori="mobil">
        <div class="flex flex-col lg:flex-row-reverse items-center gap-12">
            <div class="w-full lg:w-1/2 shrink-0 flex justify-center">
                <div class="relative w-72 h-72">
                    <div class="w-full h-full overflow-hidden"
                        style="clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);">
                        <img src="<?= BASE_URL ?>/assets/img/portofolio/fusena.jpg"
                            alt="Fusena Evo"
                            class="w-full h-full object-cover"
                            onerror="this.src='https://placehold.co/400x400/2a2a2a/666?text=Fusena+Evo'" />
                    </div>

                    <div class="absolute inset-0 opacity-30"
                        style="clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
                      outline: 2px solid #E8001D;">
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2">
                <span class="text-molikom-red text-xs uppercase tracking-widest font-semibold">Mobil</span>
                <h2 class="text-4xl font-extrabold text-white mt-2 mb-4">Fusena Evo</h2>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Fusena Evo adalah kendaraan listrik roda empat generasi terbaru Molikom yang dirancang
                    untuk kompetisi Formula Student. Menggabungkan teknologi baterai terkini dengan desain
                    aerodinamis yang telah diuji di berbagai lintasan nasional.
                </p>
                <div class="mt-6 grid grid-cols-2 gap-4">
                    <div class="bg-white/5 rounded p-4 border border-white/10">
                        <p class="text-gray-500 text-xs uppercase tracking-widest mb-1">Tipe</p>
                        <p class="text-white text-sm font-semibold">Formula Electric</p>
                    </div>
                    <div class="bg-white/5 rounded p-4 border border-white/10">
                        <p class="text-gray-500 text-xs uppercase tracking-widest mb-1">Kompetisi</p>
                        <p class="text-white text-sm font-semibold">KMLI Nasional</p>
                    </div>
                </div>
            </div>

        </div>
    </article>
    <div class="border-t border-white/5"></div>


    <article class="porto-item" data-kategori="mobil">
        <div class="flex flex-col lg:flex-row items-center gap-12">

    
            <div class="w-full lg:w-1/2 shrink-0 flex justify-center">
                <div class="relative w-72 h-72">
                    <div class="w-full h-full overflow-hidden"
                        style="clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);">
                        <img src="<?= BASE_URL ?>/assets/img/portofolio/angkot.jpg"
                            alt="Angkot Listrik"
                            class="w-full h-full object-cover"
                            onerror="this.src='https://placehold.co/400x400/2a2a2a/666?text=Angkot+Listrik'" />
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2">
                <span class="text-molikom-red text-xs uppercase tracking-widest font-semibold">Mobil</span>
                <h2 class="text-4xl font-extrabold text-white mt-2 mb-4">Angkot Listrik</h2>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Inovasi angkutan umum berbasis listrik yang dikembangkan sebagai solusi transportasi
                    ramah lingkungan. Dirancang untuk kebutuhan mobilitas perkotaan dengan kapasitas
                    penumpang yang optimal dan efisiensi energi tinggi.
                </p>
                <div class="mt-6 grid grid-cols-2 gap-4">
                    <div class="bg-white/5 rounded p-4 border border-white/10">
                        <p class="text-gray-500 text-xs uppercase tracking-widest mb-1">Tipe</p>
                        <p class="text-white text-sm font-semibold">Urban Electric</p>
                    </div>
                    <div class="bg-white/5 rounded p-4 border border-white/10">
                        <p class="text-gray-500 text-xs uppercase tracking-widest mb-1">Kapasitas</p>
                        <p class="text-white text-sm font-semibold">8 Penumpang</p>
                    </div>
                </div>
            </div>

        </div>
    </article>

</main>

<?php require_once '../../app/views/layouts/footer.php'; ?>

<style>

    .hex-border {
        position: absolute;
        inset: -4px;
        clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        border: 2px solid #E8001D;
        opacity: 0.4;
    }


    .active-btn {
        background: #E8001D !important;
        color: white !important;
        border-color: #E8001D !important;
    }


    .porto-item {
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .porto-item.hidden-item {
        display: none;
    }
</style>

<script>
    function filter(kategori) {
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.classList.remove('active-btn');
            btn.classList.add('bg-white/5', 'text-gray-400', 'border', 'border-white/10');
        });
        const activeBtn = document.getElementById('btn-' + kategori);
        activeBtn.classList.add('active-btn');
        activeBtn.classList.remove('bg-white/5', 'text-gray-400', 'border', 'border-white/10');

        document.querySelectorAll('.porto-item').forEach(item => {
            if (kategori === 'semua' || item.dataset.kategori === kategori) {
                item.classList.remove('hidden-item');
            } else {
                item.classList.add('hidden-item');
            }
        });
    }
</script>