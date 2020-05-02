<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 5/1/2020
 * Time: 8:11 AM
 */
session_start();

include("functions.php");

$id = $_GET["id"];

loadProductBootstrap($id);

