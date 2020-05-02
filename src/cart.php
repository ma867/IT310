<?php

include("functions.php");
session_start();


$id = $_POST["id"];
$quantity = $_POST["quantity"];

echo "id " . $id . " quantity " . $quantity;


if(!isset($_SESSION['selectedProducts'][$id])){
    $_SESSION['selectedProducts'][$id] = $quantity;
}
if(isset($_SESSION['selectedProducts'][$id])){
    $_SESSION['selectedProducts'][$id] = $quantity;
}
if($_SESSION['selectedProducts'][$id] == 0){
    unset($_SESSION['selectedProducts'][$id]);
}


print_r($_SESSION['selectedProducts']);

header("Location: product.php?id=" . $id);