<?php
include 'koneksi.php';

$id = $_GET['id_merk'];
$nama = $_GET['nama_merk'];

$kueri = mysqli_query($conn, "UPDATE merk SET nama = '$nama' WHERE id_merk = $id");
header('location:../index.php?x=merk&status=diedit');

?>