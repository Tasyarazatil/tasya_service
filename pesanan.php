<?php
session_start();
include 'proses/koneksi.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function batalkan(id) {
            Swal.fire({
                title: "Batalkan Pesanan ?",
                showCancelButton: true,
                confirmButtonText: "Batalkan",
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = `proses/batalkan.php?id=${id}`;
                }
            });
        }
    </script>


    <?php if (isset($_GET['status']) && $_GET['status'] == 'dibatalkan') { ?>
        <script>
            Swal.fire({
                title: "Dibatalkan",
                text: "Pesanan dibatalkan",
                icon: "success"
            }).then((result) => {
                window.location.href = 'pesanan.php?x=pesanan';
            });
        </script>
    <?php } ?>


    <?php if (!isset($_SESSION['iduser'])) { ?>
        <script>
            Swal.fire({
                title: "Gagal",
                text: "Login Untuk Melanjutkan ! ",
                icon: "warning"
            }).then((result) => {
                window.location.href = 'login.php';
            });
        </script>
    <?php } ?>



    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (light)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#sun-fill"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>


    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>
    <!-- NAVBAR -->
    <br>
    <br>
    <br>

    <main>

        <h3 class="m-3">Pesanan Anda</h3>

        <div class="mx-2">
            <div class="row">

                <?php
                if (isset($_SESSION['iduser'])) {
                    $iduser = $_SESSION['iduser'];
                    $kueri = mysqli_query($conn, "SELECT * FROM pemesanan_komponen WHERE id_user = $iduser AND status NOT LIKE '%dibatalkan%'");
                    while ($row = mysqli_fetch_array($kueri)) {
                        ?>
                        <!-- ITEM -->
                        <div class="col-6 mb-2">
                            <div class="card">
                                <div class="row p-3">
                                    <div class="col">
                                        <img src="images/22342345.jpg" class="rounded" width="150" height="150" alt="">
                                    </div>
                                    <div class="col-8">
                                        <h6>
                                            Komponen :
                                            <?php echo $row['komponen'] ?>
                                        </h6>
                                        <p>
                                            Produk :
                                            <?php echo $row['produk'] ?>
                                        </p>
                                        <p>
                                            Penjelasan Kerusakan :
                                            <?php echo $row['kerusakan'] ?>
                                        </p>
                                        <div class="row">
                                            <div class="col-6">
                                                Harga :
                                                <?php echo $row['harga'] ?>
                                                <br>
                                                Total :
                                                <?php echo $row['total'] ?>
                                            </div>
                                            <div class="col-6">
                                                Jumlah :
                                                <?php echo $row['jumlah'] ?>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <h6 class="bg-primary text-light rounded p-1 m-2">
                                                <?php echo $row['status'] ?>
                                            </h6>
                                            <a href="#" onclick="batalkan(<?php echo $row['id_pesanan'] ?>)"
                                                class="btn btn-danger">Batalkan</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ITEM -->
                    <?php }
                } ?>

            </div>
        </div>

        <br>


    </main>





    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>