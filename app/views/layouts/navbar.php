<nav class="fixed top-0 left-0 right-0 z-[9999] flex items-center justify-between py-2 px-[6%] bg-black/80 backdrop-blur-sm border-b border-white/5">

    <a href="<?= BASE_URL ?>/index.php" class="inline-block">
        <img src="<?= BASE_URL ?>/assets/img/logo/L.svg"
            class="h-12 w-auto block"
            alt="Molikom" />
    </a>


    <div class="hidden lg:flex items-center ml-auto gap-2">

        <a href="<?= BASE_URL ?>/index.php"
            class="text-white px-4 py-2 text-sm font-semibold uppercase tracking-widest hover:text-molikom-red transition-colors">
            Home
        </a>


        <div class="relative group">
            <button class="flex items-center gap-1 text-white px-4 py-2 text-sm font-semibold uppercase tracking-widest hover:text-molikom-red transition-colors">
                Portofolio
                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="absolute top-full left-0 mt-1 w-40 bg-black border border-white/10
                  opacity-0 invisible group-hover:opacity-100 group-hover:visible
                  transition-all duration-200 rounded-sm">
                <a href="<?= BASE_URL ?>/index.php#About"
                    class="block px-5 py-3 text-sm text-gray-300 hover:text-white hover:bg-molikom-red/10 border-b border-white/5 transition-colors">About</a>
                <a href="/public/portofolio/index.php?kategori=motor"
                    class="block px-5 py-3 text-sm text-gray-300 hover:text-white hover:bg-molikom-red/10 border-b border-white/5 transition-colors">Motor</a>
                <a href="/public/portofolio/index.php?kategori=mobil"
                    class="block px-5 py-3 text-sm text-gray-300 hover:text-white hover:bg-molikom-red/10 border-b border-white/5 transition-colors">Mobil</a>
                <a href="/public/portofolio/index.php?kategori=prototype"
                    class="block px-5 py-3 text-sm text-gray-300 hover:text-white hover:bg-molikom-red/10 transition-colors">Prototype</a>
            </div>
        </div>

        <a href="/public/staff/index.php"
            class="text-white px-4 py-2 text-sm font-semibold uppercase tracking-widest hover:text-molikom-red transition-colors">
            Staf Molikom
        </a>


        <div class="relative group">
            <button class="flex items-center gap-1 text-white px-4 py-2 text-sm font-semibold uppercase tracking-widest hover:text-molikom-red transition-colors">
                News
                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="absolute top-full left-0 mt-1 w-40 bg-black border border-white/10
                  opacity-0 invisible group-hover:opacity-100 group-hover:visible
                  transition-all duration-200 rounded-sm">
                <a href="/public/news/index.php?kategori=kegiatan"
                    class="block px-5 py-3 text-sm text-gray-300 hover:text-white hover:bg-molikom-red/10 border-b border-white/5 transition-colors">Kegiatan</a>
                <a href="/public/news/index.php?kategori=riset"
                    class="block px-5 py-3 text-sm text-gray-300 hover:text-white hover:bg-molikom-red/10 border-b border-white/5 transition-colors">Riset</a>
                <a href="/public/news/index.php?kategori=kompetisi"
                    class="block px-5 py-3 text-sm text-gray-300 hover:text-white hover:bg-molikom-red/10 border-b border-white/5 transition-colors">Kompetisi</a>
                <a href="/public/news/index.php?kategori=opini"
                    class="block px-5 py-3 text-sm text-gray-300 hover:text-white hover:bg-molikom-red/10 transition-colors">Opini</a>
            </div>
        </div>

        <a href="/public/contact/index.php"
            class="text-white px-4 py-2 text-sm font-semibold uppercase tracking-widest hover:text-molikom-red transition-colors">
            Contact
        </a>

    </div>


    <button id="hamburger" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
        class="lg:hidden flex flex-col gap-1.5 p-2">
        <span class="block w-6 h-0.5 bg-white"></span>
        <span class="block w-6 h-0.5 bg-white"></span>
        <span class="block w-4 h-0.5 bg-white"></span>
    </button>

</nav>


<div id="mobile-menu" class="hidden fixed top-16 left-0 right-0 z-[9998] bg-black border-t border-white/10 lg:hidden">
    <div class="px-6 py-4 flex flex-col gap-1">
        <a href="/public/index.php" class="py-2 text-sm font-semibold uppercase tracking-widest text-white hover:text-molikom-red">Home</a>
        <a href="/public/portofolio/index.php" class="py-2 text-sm font-semibold uppercase tracking-widest text-white hover:text-molikom-red">Portofolio</a>
        <a href="/public/staff/index.php" class="py-2 text-sm font-semibold uppercase tracking-widest text-white hover:text-molikom-red">Staf Molikom</a>
        <a href="/public/news/index.php" class="py-2 text-sm font-semibold uppercase tracking-widest text-white hover:text-molikom-red">News</a>
        <a href="/public/contact/index.php" class="py-2 text-sm font-semibold uppercase tracking-widest text-white hover:text-molikom-red">Contact</a>
    </div>
</div>


<div class="h-16"></div>