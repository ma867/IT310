<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 5/3/2020
 * Time: 6:01 AM
 */
session_start();
$quantity = $_GET['quantity'];
$id = $_GET['id'];

if(isset($_SESSION['selectedProducts'][$id])){
    $_SESSION['selectedProducts'][$id] = $quantity;
}

print_r($_SESSION['selectedProducts']);

header("Location: shopcart.php");