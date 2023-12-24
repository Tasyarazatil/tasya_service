<?php
include 'koneksi.php';

$id = $_GET['id'];

$kueri = mysqli_query($conn, "UPDATE pemesanan SET status = 'dibatalkan' WHERE id_pesanan = $id");
header('location:../pesanan.php?status=dibatalkan&x=pesanan');

?>