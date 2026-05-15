    <?php $pageTitle = 'Contact - Molikom'; ?>
    <?php require_once '../../app/views/layouts/head.php' ?>
    <?php require_once '../../app/views/layouts/navbar.php' ?>

    <section class="bg-[#B9B7B7] min-h-screen flex items-center justify-between p-30">
        
         <!-- CONTACT US -->
        <section class="w-[700px] h-[480px] bg-white shadow-md  ">
             <div class="bg-black   py-5">
                <h1 class="text-center text-white font-bold text-3xl">
                SOCIAL & ADDERSS
                </h1>
             </div>
        </section>

        <section class="w-[700px] h-[480px] bg-white shadow-md  ">
             <div class="bg-black   py-5">
                <h1 class="text-center text-white font-bold text-3xl">
                CONTACT US
                </h1>
             </div>

             <form class="p-8 space-y-6" method="post">
                <div class="grid grid-cols-2 gap-5">
                    <div class="flex items-center bg-gray-300 rounded-xl px-4 py-3">
                        <i class="fa-solid fa-circle-user text-black text-xl mr-3"></i>
                        <input type="text" placeholder="First Name *" name="NamaDepan"
                        class="bg-transparent w-full outline-none text-black font-semibold text-sm">
                    </div>
                    <div class="flex items-center bg-gray-300 rounded-xl px-4 py-3">
                        <i class="fa-solid fa-circle-user text-black text-xl mr-3"></i>
                        <input type="text" placeholder="Last Name" name="NamaBelakang"
                        class="bg-transparent w-full outline-none text-black font-semibold text-sm">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-5">
                    <div class="flex items-center bg-gray-300 rounded-xl px-4 py-3">
                        <i class="fa-solid fa-phone text-black   text-lg mr-3"></i>
                        <input type="text" placeholder="Mobile No *" name="NoHP"
                        class="bg-transparent w-full outline-none  text-black font-semibold text-sm">
                    </div>

                    <div class="flex items-center bg-gray-300 rounded-xl px-4 py-3">
                        <i class="fa-solid fa-envelope text-black text-lg mr-3"></i>
                        <input type="email" placeholder="Email *" name="Email"
                        class="bg-transparent w-full outline-none text-black font-semibold text-sm">
                    </div>
                </div>

                <div class="flex justify-center ">
                <textarea placeholder="Message" name="Pesan"
                    class="w-[700px] h-30  bg-gray-300 rounded-none p-4 outline-none font-semibold text-sm text-black resize-none"></textarea>
                </div>
                <div class="flex justify-center">
                    <button name="submit"
                    class="bg-red-600 hover:bg-red-700 text-white font-bold text-2xl px-8 py-2 rounded-lg">
                    Submit
                    </button>
                </div>
            </form>
        </section>
        
        <?php
        include '../../app/config/database.php';
        if (isset($_POST['submit'])) {
            $NamaDepan = $_POST['NamaDepan'];
            $NamaBelakang = $_POST['NamaBelakang'];
            $NoHP = $_POST['NoHP'];
            $Email = $_POST['Email'];
            $Pesan = $_POST['Pesan'];

            $sql = "INSERT INTO contact_message (nama_depan, nama_belakang, telepon, email, pesan) VALUES ('$NamaDepan', '$NamaBelakang', '$NoHP', '$Email', '$Pesan')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Pesan berhasil dikirim!');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        ?>


    </section>