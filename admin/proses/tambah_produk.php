<?php
include 'koneksi.php';

$merk = $_GET['merk'];
$nama_produk = $_GET['nama_produk'];
$deskripsi = $_GET['deskripsi'];
$gambar = $_GET['gambar'];

$query = mysqli_query($conn, "INSERT INTO produk (nama, deskripsi, gambar, id_merk) VALUES ('$nama_produk', '$deskripsi', '$gambar', $merk)");

header('location:../index.php?x=produk&status=ditambah');

?>