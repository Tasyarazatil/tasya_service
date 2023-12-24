<?php
include 'proses/koneksi.php';
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>

    <main>





        <div class="m-3">


            <div class="row" style="height:100vh">
                <div class="col-2">
                    <!-- SIDE -->
                    <?php include 'sidebar.php'; ?>
                    <!-- SIDE -->
                </div>
                <div class="col-10">
                    <!-- ISI -->
                    <?php if (isset($_GET['x']) && $_GET['x'] == 'home') {
                        include 'home.php';

                    } else if (isset($_GET['x']) && $_GET['x'] == 'pesanan') {
                        include 'pesanan.php';

                    } else if (isset($_GET['x']) && $_GET['x'] == 'merk') {
                        include 'merk.php';

                    } else if (isset($_GET['x']) && $_GET['x'] == 'produk') {
                        include 'produk.php';

                    } else if (isset($_GET['x']) && $_GET['x'] == 'komponen') {
                        include 'komponen.php';

                    } else if (isset($_GET['x']) && $_GET['x'] == 'user') {
                        include 'user.php';

                    } else if (isset($_GET['x']) && $_GET['x'] == 'review') {
                        include 'review.php';
                    }

                    ?>
                    <!-- ISI -->
                </div>
            </div>

        </div>


    </main>




    <script src="../js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>