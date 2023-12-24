<?php
$conn = mysqli_connect("localhost", "root", "", "tasya_service");
if (!$conn) {
    die("Error");
}


function format_rupiah($angka)
{
    $rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $rupiah;
}


?>