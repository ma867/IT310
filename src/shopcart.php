<?php

session_start();

include("functions.php");


loadShopcartBootstrap($_SESSION['selectedProducts']);