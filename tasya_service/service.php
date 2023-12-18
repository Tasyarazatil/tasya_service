<?php
include 'proses/koneksi.php';
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
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

    <main>





        <div class="m-3">
            <div class="d-flex">
                <i class="bi bi-search m-3"></i> <input type="text" placeholder="Search Product"
                    class="form-control w-25">
            </div>

            <div class="row" style="height:100vh">
                <div class="col-2">
                    <!-- SIDE -->
                    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary"
                        style="width: 100%; height: 100%;">
                        <a href="#"
                            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                            <svg class="bi pe-none me-2" width="40" height="32">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                            <span class="fs-4">Merk</span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <?php
                            $merk = mysqli_query($conn, "SELECT * FROM merk");
                            while ($row = mysqli_fetch_array($merk)) {
                                ?>
                                <li class="nav-item ">
                                    <a href="?merk=<?php echo $row['nama']; ?>" class="nav-link <?php if (isset($_GET['kat']) && $_GET['kat'] == $row['nama']) {
                                           echo 'active text-white';
                                       } ?> link-body-emphasis" aria-current="page">
                                        <svg class="bi pe-none me-2" width="16" height="16">
                                            <use xlink:href="#home"></use>
                                        </svg>
                                        <?php echo $row['nama']; ?>
                                    </a>
                                </li>
                            <?php } ?>


                        </ul>
                        <hr>

                    </div>
                    <!-- SIDE -->
                </div>
                <div class="col-10">
                    <div class="m-3">
                        <!--  LIST PRODUK -->
                        <div class="row">

                            <?php if (isset($_GET['merk'])) {

                                $merk = $_GET['merk'];
                                $kueri1 = mysqli_query($conn, "SELECT * FROM merk WHERE nama = '$merk'");
                                $data_kat = mysqli_fetch_array($kueri1);
                                $id_kat = $data_kat['id_merk'];

                                $kueri = mysqli_query($conn, "SELECT * FROM produk WHERE id_merk = $id_kat");
                                while ($row = mysqli_fetch_array($kueri)) { ?>

                                    <!-- ITEM PRODUK -->
                                    <div class="col-3 mb-3">
                                        <div class="card shadow-sm">
                                            <img class="bd-placeholder-img card-img-top"
                                                src="https://fdn.gsmarena.com/imgroot/static/headers/makers/apple-2023-1.jpg"
                                                alt="<?php echo $row['nama']; ?>" width="100%" height="100%">
                                            <div class="card-body">
                                                <h6>
                                                    <?php echo $row['nama'] ?>
                                                </h6>
                                                <p>
                                                    <?php echo $row['deskripsi'] ?>
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <a href="detail-produk.php?produk=<?php echo $row['id_produk'] ?>"
                                                            class="btn btn-sm btn-primary">Lihat
                                                            Produk</a>
                                                        <!--  <button type="button" class="btn btn-sm btn-outline-secondary"><i
                                                                                                    class="bi bi-cart"></i></button> -->
                                                    </div>
                                                    <!-- <small class="text-body-secondary">9 mins</small> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM PRODUK -->

                                <?php }
                                ?>


                            <?php } else {

                                $kueri = mysqli_query($conn, "SELECT * FROM produk LIMIT 50");
                                while ($row = mysqli_fetch_array($kueri)) { ?>


                                    <!-- ITEM PRODUK -->
                                    <div class="col-3 mb-3">
                                        <div class="card shadow-sm">
                                            <img class="bd-placeholder-img card-img-top"
                                                src="https://fdn.gsmarena.com/imgroot/static/headers/makers/apple-2023-1.jpg"
                                                alt="<?php echo $row['nama']; ?>" width="100%" height="100%">
                                            <div class="card-body">
                                                <h6>
                                                    <?php echo $row['nama'] ?>
                                                </h6>
                                                <p>
                                                    <?php echo $row['deskripsi'] ?>
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <a href="detail-produk.php?produk=<?php echo $row['id_produk'] ?>"
                                                            class="btn btn-sm btn-primary">Lihat Produk</a>
                                                        <!--  <button type="button" class="btn btn-sm btn-outline-secondary"><i
                                                                class="bi bi-cart"></i></button> -->
                                                    </div>
                                                    <!-- <small class="text-body-secondary">9 mins</small> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM PRODUK -->

                                <?php }
                            } ?>



                        </div>
                        <!--  LIST PRODUK -->
                    </div>
                </div>
            </div>

        </div>


    </main>




    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>