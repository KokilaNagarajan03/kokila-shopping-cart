<?php
include "../config/db.php";

$id  = $_POST['pid'];
$qty = $_POST['qty'];

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

$_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + $qty;

header("Location: ../cart.php");
