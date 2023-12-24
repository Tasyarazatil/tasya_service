<?php
include 'koneksi.php';

$id = $_GET['id'];

$kueri = mysqli_query($conn, "DELETE FROM merk WHERE id_merk = $id");
header('location:../index.php?x=merk&status=dihapus');

?>