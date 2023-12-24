<?php
include 'koneksi.php';

$nama = $_GET['nama'];
$username = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['password'];
$no_hp = $_GET['no_hp'];
$alamat = $_GET['alamat'];

$query = mysqli_query($conn, "INSERT INTO tb_user (nama, username, email, password, nohp, alamat, level) VALUES ('$nama', '$username', '$email', '$password', '$no_hp', '$alamat', 2)");

header('location:../index.php?x=user&status=ditambah');

?>