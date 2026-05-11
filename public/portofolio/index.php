<?php $pageTitle = 'Portofolio - Molikom'; ?>
<?php require_once '../../app/views/layouts/head.php' ?>
<?php require_once '../../app/views/layouts/navbar.php' ?>


<section class="bg-black py-16 border-b border-white/5">
    <div class="max-w-6x1 mx-auto px-6">
        <p class="text-molikom-red text-xs uppercase tracking-widest font-semibold mb-3">Our Project</p>
    </div>
</section>


<section class="py-6 border-b border-white/5 bg-[111111]">
    <div class="max-w-6x1 flex flex-wrap gap-2 px-6 mx-auto">
        <button onclick="filter('semua')" id="btn-semua" class="filter-btn active-btn px-5 py-2 text-xs font-bold uppercase tracking-widest rounded transition-all">Semua</button>
        <button onclick="filter('motor')" id="btn-motor" class="filter-tbn px-5 py-2 text-xs font-bold uppercase tracking-widest rounded transition-all bg-white/5 text-gray-400 hover:bg-white/10 hover:text-white border border-white/10">Motor</button>
    </div>
</section>