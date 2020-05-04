<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 5/3/2020
 * Time: 4:04 AM
 */
session_start();

$id=$_GET['id'];
unset($_SESSION['selectedProducts'][$id]);
header("Location: shopcart.php");