<?php
session_start();
include 'koneksi.php';

$idproduk = $_GET['idproduk'];
$idkomponen = $_GET['idkomponen'];
$produk = $_GET['produk'];
$komponen = $_GET['komponen'];
$harga = $_GET['harga'];
$qty = $_GET['qty'];
$total = $_GET['total'];
$atasnama = $_GET['atasnama'];
$kerusakan = $_GET['kerusakan'];

$id_user = $_SESSION['iduser'];
$status = 'dipesan';

$kueri = mysqli_query($conn, "INSERT INTO pemesanan (id_produk,id_komponen,produk, komponen, harga, jumlah, total, atasnama, id_user, status, kerusakan) VALUES ($idproduk,$idkomponen,'$produk', '$komponen', $harga, $qty, $total, '$atasnama', $id_user, '$status', '$kerusakan')");
header('location:../pesanan.php?status=dipesan');
?>