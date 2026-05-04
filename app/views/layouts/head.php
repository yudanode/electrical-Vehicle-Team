<?php require_once dirname(__DIR__, 3) . '/app/config/app.php'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <style>
         .font-league {
        font-family: 'League Gothic', sans-serif;
        }
        .font-poppins {
        font-family: 'Poppins', sans-serif;
        }
        .font-racing {
        font-family: 'Racing Sans One', cursive;
        }
    </style>
    
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800&family=League+Gothic&family=Poppins:wght@100;300;400;500;600;700;800;900&family=Racing+Sans+One&display=swap" rel="stylesheet"> 
    <title><?= $pageTitle ?? 'Molikom — Electrical Vehicle Team' ?></title>

</head>

<body class="bg-[#111111] text-white min-h-screen">