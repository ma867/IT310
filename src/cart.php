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

$products = array
(
    array(
        'id' => 1,
        'name' => 'Calculus',
        'price' => 29.99
    ),
    array(
        'id' => 2,
        'name' => 'Chemistry',
        'price' => 12.99
    ),
    array(
        'id' => 3,
        'name' => 'Biology',
        'price' => 10.00
    ),
    array(
        'id' => 4,
        'name' => 'Physics',
        'price' => 100.00
    ),
    array(
        'id' => 5,
        'name' => 'History',
        'price' => 10.00
    ),
);


header("Location: product.php?id=" . $id);
