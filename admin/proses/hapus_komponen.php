<?php
include 'koneksi.php';

$id = $_GET['id'];

$kueri = mysqli_query($conn, "DELETE FROM komponen WHERE id_komponen = $id");
header('location:../index.php?x=komponen&status=dihapus');

?>