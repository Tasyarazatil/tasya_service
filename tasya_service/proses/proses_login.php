<?php 
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email' AND password = '$password'");
$cek = mysqli_num_rows($query);
$row = mysqli_fetch_array($query); 

if($cek > 0){
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['level'] = $row['level'];
    header("location:../index.php?pesan=welcome");
}else{
    header("location:../login.php?pesan=error");
}

?>