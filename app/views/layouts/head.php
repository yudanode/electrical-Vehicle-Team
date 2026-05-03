<?php require_once dirname(__DIR__, 3) . '/app/config/app.php'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <title><?= $pageTitle ?? 'Molikom — Electrical Vehicle Team' ?></title>

</head>

<body class="bg-[#111111] text-white min-h-screen">