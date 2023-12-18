<?php
include 'koneksi.php';

$pesan = $_GET['pesan'];
$nama = $_GET['nama'];
$email = $_GET['email'];


$kueri = mysqli_query($conn, "INSERT INTO review (nama,email,pesan) VALUES ('$nama','$email','$pesan')");
header('location:../review.php?status=berhasil');

?>