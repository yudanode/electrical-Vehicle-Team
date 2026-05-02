<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Molikom Team</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Racing+Sans+One&family=Poppins:wght@100;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        .font-racing {
            font-family: 'Racing Sans One', cursive;
        }
        .font-league{
             font-family: 'League Gothic', sans-serif;
        }
        p {
            font-family: 'Poppins', sans-serif;
        }
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body >
    <?php $pageTitle = 'Home — Molikom'; ?>
    <?php require_once '../app/views/layouts/navbar.php'; ?>

    
    <!-- background -->
    <section class="relative h-screen bg-cover bg-center"
        style="background-image: url('assets/img/hero/mobil.svg');">
    

    <div class="flex items-center justify-between min-h-screen px-20 text-white">
        <!-- Text kiri -->
        <div>
            <h1 class="text-8xl font-league ">Hi, We are</h1>
            <h2 class="text-5xl font-racing ">Molikom</h2>
            <h3 class="text-5xl text-[#EF0509] font-racing font-bold">TEAM</h3>

            <button class="mt-6 px-8 py-3 bg-[#EF0509] rounded-full hover:bg-red-700 font-[poppins] font-bold">
                TAP TO MORE
            </button>
        </div>

        <!-- Logo kanan -->
        <div>
            <img src="assets/img/logo/L.svg" class="w-96">
        </div>
    </div>

 </section>
    <!-- ABOUT US SECTION -->
<section class="relative h-screen bg-cover  bg-[#1D1E1E] text-white px-20 py-20">
    <!-- Logo atas -->
    <div class="flex justify-center">
        <img class="h-20" src="assest/img/logo/logo2.svg">
    </div>

     <!-- ABOUT dan logo -->
    <div class="pt-16 flex justify-between">
        <div >
            <h1 class="text-6xl font-league font-bold` " >About Us</h1><br>
            <p>MOLIKOM Adalah Tim Kendaraan Listrik Politeknik Negeri Madiun  </p>
            <p>yang terbentuk pada tahun 2017 dan beranggotakan mahasiswa aktif Politeknik Negeri Madiun. </p>
            <p>Awalnya dibentuk sebagai pengembangan dari Tugas Akhir </p>
            <p>mahasiswa yang dinilai kompeten. Untuk ikut serta </p>
            <p>berkompetisi dalam ajang KMLI (Kompetisi Mobil Listrik Indonesia) Ke- IX Tahun 2018. </p>
        </div>

        <div>
            <img class="h-[300px]" src="assets/img/hero/logo3.svg">
        </div>
    </div>
</section>
    
</body>
</html>