<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM review WHERE id_review = $id");
header('location:../index.php?x=review&status=dihapus');

?>