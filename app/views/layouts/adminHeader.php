<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'molikom-red': '#E8001D'
                    }
                }
            }
        }
    </script>
    <title><?= $pageTitle ?? 'Admin — Molikom' ?></title>
</head>

<body class="bg-[#0f0f0f] text-white min-h-screen">
    <div class="flex min-h-screen">

        <?php require_once dirname(__DIR__, 2) . '/app/views/layouts/adminSideBar.php'; ?>

        <div class="flex-1 flex flex-col min-h-screen">

            <!-- TOPBAR -->
            <header class="sticky top-0 z-40 bg-[#111111] border-b border-white/5 h-16
                 flex items-center justify-between px-6 shrink-0">
                <div class="flex items-center gap-3">
                    <!-- Hamburger mobile -->
                    <button onclick="document.getElementById('admin-sidebar').classList.toggle('-translate-x-full')"
                        class="lg:hidden text-gray-400 hover:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <h1 class="text-sm font-semibold text-white"><?= $pageTitle ?? 'Dashboard' ?></h1>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-xs text-gray-400">
                        <?= htmlspecialchars($_SESSION['username'] ?? 'Admin') ?>
                        <span class="ml-1 text-molikom-red text-[10px] uppercase font-bold">
                            <?= htmlspecialchars($_SESSION['role'] ?? '') ?>
                        </span>
                    </span>
                    <a href="/admin/logout.php"
                        class="text-xs text-gray-400 hover:text-molikom-red transition-colors uppercase tracking-widest font-semibold">
                        Logout
                    </a>
                </div>
            </header>

            <!-- KONTEN -->
            <main class="flex-1 p-6">