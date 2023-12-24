<?php
include 'proses/koneksi.php';
session_start();
?>

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

    <br><br>

    <main>

        <div class="m-3">
            <!-- PEMESANAN -->
            <div class="container">
                <main>
                    <br>
                    <br>
                    <div class="row g-5">

                        <?php
                        $id = $_GET['id_komponen'];
                        $kueri = mysqli_query($conn, "SELECT * FROM komponen WHERE id_komponen = $id");
                        $row = mysqli_fetch_array($kueri);

                        $idproduk = $row['id_produk'];
                        $kueri2 = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = $idproduk");
                        $row2 = mysqli_fetch_array($kueri2);

                        ?>

                        <div class="col-12">
                            <h4 class="mb-3">Pemesanan</h4>

                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="card-link">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-4 col-md-4">
                                                    <img class="card-img"
                                                        style="width: 100%; height: 100%; object-fit: cover;"
                                                        src="images/<?php echo $row2['gambar'] ?>" alt="Card image">
                                                </div>
                                                <div class="col-8 col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            <?php echo $row2['nama'] ?>
                                                        </h5>
                                                        <p>
                                                            <?php echo $row2['deskripsi'] ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-6">
                                    <form class="needs-validation" action="proses/pesan_komponen.php" method="GET"
                                        novalidate="">
                                        <input type="hidden" name="idproduk" value="<?php echo $row2['id_produk'] ?>">
                                        <input type="hidden" name="idkomponen"
                                            value="<?php echo $row['id_komponen'] ?>">
                                        <div class="row g-3">
                                            <div class="col-sm-12">
                                                <label for="produk" class="form-label">Produk</label>
                                                <input type="text" class="form-control" id="produk" name="produk"
                                                    placeholder="" value="<?php echo $row2['nama'] ?>" readonly
                                                    required="">
                                                <div class="invalid-feedback">
                                                    Valid first name is required.
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="lastName" class="form-label">Komponen</label>
                                                <input type="text" class="form-control" id="lastName" name="komponen"
                                                    placeholder="" value="<?php echo $row['nama'] ?>" readonly
                                                    required="">
                                                <div class="invalid-feedback">
                                                    Valid last name is required.
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <label for="username" class="form-label">Harga</label>
                                                <div class="input-group has-validation">

                                                    <input type="number" class="form-control"
                                                        value="<?php echo $row['harga'] ?>" id="harga" name="harga"
                                                        readonly placeholder="Harga" required="">
                                                    <div class="invalid-feedback">
                                                        Your username is required.
                                                    </div>
                                                </div>
                                            </div>

                                            <script>
                                                function incrementQuantity() {
                                                    var quantityInput = document.getElementById('quantityInput');
                                                    var total = document.getElementById('total');
                                                    var harga = document.getElementById('harga');
                                                    var currentValue = parseInt(quantityInput.value);
                                                    if (currentValue < parseInt(quantityInput.max)) {
                                                        quantityInput.value = currentValue + 1;
                                                        total.value = parseInt(quantityInput.value) * parseInt(harga.value);
                                                    }
                                                }

                                                function decrementQuantity() {
                                                    var quantityInput = document.getElementById('quantityInput');
                                                    var total = document.getElementById('total');
                                                    var harga = document.getElementById('harga');
                                                    var currentValue = parseInt(quantityInput.value);
                                                    if (currentValue > parseInt(quantityInput.min)) {
                                                        quantityInput.value = currentValue - 1;
                                                        total.value = parseInt(quantityInput.value) * parseInt(harga.value);
                                                    }
                                                }
                                            </script>

                                            <div class="col-6">
                                                <label for="quantityInput" class="form-label">Quantity</label>
                                                <div class="input-group">
                                                    <a class="btn btn-primary" onclick="decrementQuantity()">-</a>
                                                    <input type="number" id="quantityInput" name="qty"
                                                        class="form-control" value="1" min="1" max="10">
                                                    <a class="btn btn-primary" onclick="incrementQuantity()">+</a>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <label for="jumlah" class="form-label">Total Harga</label>
                                                <input type="number" min="" readonly value="<?php echo $row['harga'] ?>"
                                                    class="form-control" id="total" name="total" placeholder="Jumlah">
                                            </div>

                                            <div class="col-12">
                                                <label for="jumlah" class="form-label">Atas Nama</label>
                                                <input type="text" min="" readonly
                                                    value="<?php echo $_SESSION['nama'] ?>" name="atasnama"
                                                    class="form-control" id="total" placeholder="Jumlah">
                                            </div>

                                            <div class="col-12">
                                                <label for="kerusakan" class="form-label">Penjelasan kerusakan</label>
                                                <textarea class="form-control" name="kerusakan" id="kerusakan" cols="2"
                                                    rows="5"></textarea>
                                            </div>

                                            <button class="w-100 btn btn-primary btn-lg" type="submit">Pesan
                                                Sekarang</button>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </main>

                <br><br>

            </div>
            <!-- PEMESANAN -->
        </div>


    </main>




    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>