<?php

if (!isset($_GET['x'])) {
    header('location:home.php?x=home');
} else {
    if (isset($_GET['x']) && $_GET['x'] == 'home') {
        header('location:home.php?x=home');
    } else if (isset($_GET['x']) && $_GET['x'] == 'service') {
        header('location:service.php?x=service');
    } else if (isset($_GET['x']) && $_GET['x'] == 'review') {
        header('location:review.php?x=review');
    } else if (isset($_GET['x']) && $_GET['x'] == 'pesanan') {
        header('location:pesanan.php?x=pesanan');
    } else {
        header('location:home.php?x=home');
    }
}

?>