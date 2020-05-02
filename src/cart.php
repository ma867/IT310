<?php

session_start();

include("functions.php");

$id = $_POST["id"];
$quantity = $_POST["quantity"];

echo "id " . $id . " quantity " . $quantity;


/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 5/1/2020
 * Time: 8:12 AM
 */