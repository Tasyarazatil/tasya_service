<?php
include 'koneksi.php';

$id = $_GET['idproduk'];
$id_merk = $_GET['id_merk'];
$nama_produk = $_GET['nama_produk'];
$deskripsi = $_GET['deskripsi'];

$kueri = mysqli_query($conn, "UPDATE produk SET id_merk = $id_merk, nama = '$nama_produk', deskripsi = '$deskripsi' WHERE id_produk = $id");
header('location:../index.php?x=produk&status=diedit');

?>