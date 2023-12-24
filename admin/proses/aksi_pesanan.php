<?php
include 'koneksi.php';

$id = $_GET['id'];
$aksi = $_GET['aksi'];

$kueri = mysqli_query($conn, "UPDATE pemesanan SET status == '$aksi' WHERE id_pesanan = $id");

?>