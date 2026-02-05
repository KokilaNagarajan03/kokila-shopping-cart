<?php
$conn = mysqli_connect("localhost","root","","kokila_cart");
if(!$conn){
    die("DB Connection Failed");
}
session_start();
?>
