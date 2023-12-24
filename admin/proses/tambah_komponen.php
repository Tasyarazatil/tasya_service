<?php
include 'koneksi.php';

$produk = $_GET['produk'];
$nama_produk = $_GET['nama_produk'];
$deskripsi = $_GET['deskripsi'];
$harga = $_GET['harga'];
$gambar = $_GET['gambar'];

$query = mysqli_query($conn, "INSERT INTO komponen (nama, deskripsi, harga, gambar, id_produk) VALUES ('$nama_produk', '$deskripsi', $harga, '$gambar', $produk)");

header('location:../index.php?x=komponen&status=berhasil');

?>