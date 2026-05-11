<?php
// Tentukan halaman aktif berdasarkan URL
$currentPath = $_SERVER['REQUEST_URI'];

function isActive($path)
{
    global $currentPath;
    return str_contains($currentPath, $path)
        ? 'bg-molikom-red/10 text-white border-l-2 border-molikom-red'
        : 'text-gray-400 hover:text-white hover:bg-white/5 border-l-2 border-transparent';
}
?>

<!-- SIDEBAR -->
<aside id="admin-sidebar"
    class="w-56 shrink-0 bg-[#111111] border-r border-white/5 flex flex-col
              fixed lg:static top-0 left-0 h-full z-50
              transition-transform duration-300 lg:translate-x-0 -translate-x-full">

    <!-- Logo -->
    <div class="h-16 flex items-center px-6 border-b border-white/5 shrink-0">
        <a href="/admin/index.php" class="flex items-center gap-2">
            <img src="<?= BASE_URL ?>/assets/img/logo/L.svg"
                alt="Molikom" class="h-7 w-auto"
                onerror="this.style.display='none'" />
            <span class="text-xs font-bold uppercase tracking-widest text-white">Admin</span>
        </a>
    </div>

    <!-- Menu navigasi -->
    <nav class="flex-1 overflow-y-auto py-4">

        <!-- Dashboard -->
        <a href="/admin/index.php"
            class="flex items-center gap-3 px-6 py-3 text-sm font-semibold transition-colors <?= isActive('/admin/index') ?>">
            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Dashboard
        </a>

        <!-- Label grup Manajemen -->
        <p class="px-6 pt-5 pb-2 text-[10px] text-gray-600 uppercase tracking-widest font-semibold">
            Manajemen
        </p>

        <!-- Proyek / Portofolio -->
        <a href="/admin/manajemen/proyek/index.php"
            class="flex items-center gap-3 px-6 py-3 text-sm font-semibold transition-colors <?= isActive('/manajemen/proyek') ?>">
            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
            </svg>
            Proyek
        </a>

        <!-- Berita -->
        <a href="/admin/manajemen/berita/index.php"
            class="flex items-center gap-3 px-6 py-3 text-sm font-semibold transition-colors <?= isActive('/manajemen/berita') ?>">
            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>
            Berita
        </a>

        <!-- Anggota / Staff -->
        <a href="/admin/manajemen/anggota/index.php"
            class="flex items-center gap-3 px-6 py-3 text-sm font-semibold transition-colors <?= isActive('/manajemen/anggota') ?>">
            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            Anggota
        </a>

        <!-- Label grup Interaction -->
        <p class="px-6 pt-5 pb-2 text-[10px] text-gray-600 uppercase tracking-widest font-semibold">
            Interaction
        </p>

        <!-- Pesan -->
        <a href="/admin/interaction/pesan/index.php"
            class="flex items-center gap-3 px-6 py-3 text-sm font-semibold transition-colors <?= isActive('/interaction/pesan') ?>">
            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            Pesan
            <?php
            // Badge jumlah pesan belum dibaca
            require_once dirname(__DIR__, 3) . '/app/config/database.php';
            $resultBadge = mysqli_query($conn, "SELECT COUNT(*) as total FROM contact_message WHERE sudah_dibaca = 0");
            $badge = mysqli_fetch_assoc($resultBadge);
            if ($badge['total'] > 0):
            ?>
                <span class="ml-auto bg-molikom-red text-white text-[10px] font-bold px-2 py-0.5 rounded-full">
                    <?= $badge['total'] ?>
                </span>
            <?php endif; ?>
        </a>

        <!-- Label grup Settings -->
        <p class="px-6 pt-5 pb-2 text-[10px] text-gray-600 uppercase tracking-widest font-semibold">
            Settings
        </p>

        <!-- Profile -->
        <a href="/admin/settings/profile/index.php"
            class="flex items-center gap-3 px-6 py-3 text-sm font-semibold transition-colors <?= isActive('/settings/profile') ?>">
            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            Profile
        </a>

        <!-- Management User -->
        <a href="/admin/settings/users/index.php"
            class="flex items-center gap-3 px-6 py-3 text-sm font-semibold transition-colors <?= isActive('/settings/users') ?>">
            <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            Management User
        </a>

    </nav>

    <!-- Footer sidebar -->
    <div class="px-6 py-4 border-t border-white/5 shrink-0">
        <p class="text-[10px] text-gray-600 uppercase tracking-widest">Molikom © <?= date('Y') ?></p>
    </div>

</aside>

<!-- Overlay mobile — klik untuk tutup sidebar -->
<div onclick="document.getElementById('admin-sidebar').classList.add('-translate-x-full')"
    class="fixed inset-0 bg-black/50 z-40 lg:hidden hidden"
    id="sidebar-overlay">
</div>