<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if(isset ($_POST['cd_order']) && isset ($_POST['dvd_order'])) {
    setcookie("cd_order",$_POST['cd_order']);
    setcookie("dvd_order",$_POST['dvd_order']);
    header("Location: Lat3_4c.php");
}