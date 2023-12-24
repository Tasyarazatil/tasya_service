<?php
include 'koneksi.php';

$nama_merk = $_GET['nama_merk'];

$query = mysqli_query($conn, "INSERT INTO merk (nama) VALUES ('$nama_merk')");

header('location:../index.php?x=merk&status=ditambah');

?>