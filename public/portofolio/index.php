<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'molikom-red': '#E8001D',
                    },
                    fontFamily: {
                        'sans': ['Barlow', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body class="bg-gray-500">

    <?php $pageTitle = 'Portofolio — Molikom'; ?>
    <?php require_once '../../app/views/layouts/head.php'; ?>
    <?php require_once '../../app/views/layouts/navbar.php'; ?>

    
    <main class="max-w-7xl mx-auto px-6 py-12">
        ...
    </main>

    <?php require_once '../../app/views/layouts/footer.php'; ?>

</body>

</html>