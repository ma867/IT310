<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 5/1/2020
 * Time: 4:43 PM
 */


function bootstrapGenerateCards()
{
    $logindb = new mysqli("localhost", "", "", "shoppingcart");
    if (mysqli_connect_errno()) {
        echo "failed to connect to MYSQL:" . mysqli_connect_error();
        exit();
    } else {
        echo "it works bitch!";
    }
}

bootstrapGenerateCards();