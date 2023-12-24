<?php
$q1 = mysqli_query($conn, "SELECT * FROM merk");
$q2 = mysqli_query($conn, "SELECT * FROM produk");
$q3 = mysqli_query($conn, "SELECT * FROM komponen");
$q4 = mysqli_query($conn, "SELECT * FROM tb_user");
$q5 = mysqli_query($conn, "SELECT * FROM review");

$cek1 = mysqli_num_rows($q1);
$cek2 = mysqli_num_rows($q2);
$cek3 = mysqli_num_rows($q3);
$cek4 = mysqli_num_rows($q4);
$cek5 = mysqli_num_rows($q5);

?>

<div class="m-3">
    <div class="row">
        <!-- ITEM -->
        <div class="col-4 mb-3">
            <div class="card">
                <div class="card-header">
                    Data Merk
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jumlah Data Merk</h5>
                    <p class="card-text">
                        <?php echo $cek1; ?> Data.
                    </p>
                    <a href="index.php?x=merk" class="btn btn-primary">Lihat Data</a>
                </div>
            </div>
        </div>
        <!-- ITEM -->
        <!-- ITEM -->
        <div class="col-4 mb-3">
            <div class="card">
                <div class="card-header">
                    Data Produk
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jumlah Data Produk</h5>
                    <p class="card-text">
                        <?php echo $cek2; ?> Data.
                    </p>
                    <a href="index.php?x=produk" class="btn btn-primary">Lihat Data</a>
                </div>
            </div>
        </div>
        <!-- ITEM -->
        <!-- ITEM -->
        <div class="col-4 mb-3">
            <div class="card">
                <div class="card-header">
                    Data Komponen
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jumlah Data Komponen</h5>
                    <p class="card-text">
                        <?php echo $cek3; ?> Data.
                    </p>
                    <a href="index.php?x=komponen" class="btn btn-primary">Lihat Data</a>
                </div>
            </div>
        </div>
        <!-- ITEM -->
        <!-- ITEM -->
        <div class="col-4 mb-3">
            <div class="card">
                <div class="card-header">
                    Data User
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jumlah Data User</h5>
                    <p class="card-text">
                        <?php echo $cek4; ?> Data.
                    </p>
                    <a href="index.php?x=user" class="btn btn-primary">Lihat Data</a>
                </div>
            </div>
        </div>
        <!-- ITEM -->
        <!-- ITEM -->
        <div class="col-4 mb-3">
            <div class="card">
                <div class="card-header">
                    Data Review
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jumlah Data Review</h5>
                    <p class="card-text">
                        <?php echo $cek5; ?> Data.
                    </p>
                    <a href="index.php?x=review" class="btn btn-primary">Lihat Data</a>
                </div>
            </div>
        </div>
        <!-- ITEM -->
    </div>
</div>