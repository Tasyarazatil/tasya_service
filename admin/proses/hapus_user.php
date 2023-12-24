<?php
include 'koneksi.php';

$id = $_GET['id'];

$kueri = mysqli_query($conn, "DELETE FROM tb_user WHERE id = $id");
header('location:../index.php?x=user&status=dihapus');

?>