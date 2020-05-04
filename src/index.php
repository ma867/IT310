<?php

session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/product/">
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
    <link href="product.css" rel="stylesheet">
    <title>Ubooks</title>

</head>
<body>
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: black;">
        <a class="navbar-brand pull-md-left" href="#">
            <img src="../img/logo.jpg" alt="Logo" style=" height: 40px; width:100px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active justify-content-md-center">
                    <a class="nav-link" href="index.php" style="color:white;"><span class="fas fa-house-user" ></span>&nbsp; Home</a>
                </li>
                <li class="nav-item justify-content-md-center">
                    <a class="nav-link px-2" href="shopcart.php" style="color:white;"><span class="fas fa-shopping-cart"></span>&nbsp;Cart</a>
                </li>
                <li class="nav-item justify-content-md-center">
                    <a class="nav-link active" href="#" style="color:white;"><span class="fas fa-briefcase"></span>&nbsp;About Us</a>
                </li>
                <li class="nav-item justify-content-md-center">
                    <a class="nav-link active" href="#" style="color:white;"><span class="fas fa-user-circle"></span>&nbsp;Donate</a>
                </li>

            </ul>
            <form class="form-inline pull-md-right mt-2 mt-md-0" action="search.php" method="GET">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>

<!-- Cards -->
<main role="main">
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center" style="background-color: white; padding-top : 50px; ">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Welcome to Ubooks</h1>
            <p class="lead font-weight-normal">Created by students for students, we seek to provide college students with classroom resources at a lower price through across-campus purchases and generous donations from people like YOU!</p>
            <a class="btn btn-outline-secondary" href="#">Donate or Sell to Us!</a>
        </div>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php

                include("functions.php");

                bootstrapGenerateCards();

                ?>

            </div>
        </div>
    </div>
</main>
<!-- Footer -->
<footer class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>About Us</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                    Created by students for students, we seek to provide college students with classroom resources at a lower price through across-campus purchases and generous donations from people like YOU!
                </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <ul class="list-unstyled">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                <ul class="list-unstyled">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3">
                <h5>Contact Us</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home mr-2"></i> Ubooks Hub, New York City, NY</li>
                    <li><i class="fa fa-envelope mr-2"></i> ubooksco@gmail.com</li>
                    <li><i class="fa fa-phone mr-2"></i> + 33 12 14 15 16</li>
                    <li><i class="fa fa-print mr-2"></i> + 33 12 14 15 16</li>
                </ul>
            </div>
            <div class="col-12 copyright mt-3">
                <p class="float-left">
                    <a href="#">Back to top</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<style>
    html {
        position: relative;
        min-height: 100%;
    }
    body {
        margin-bottom: 60px; /* Margin bottom by footer height */
    }

    img{

        height: 600px;
        width:50px;
    }
    footer {
        background: #cba117;
        padding: 40px;
        position: absolute;
        width: 100%;

    }
    footer a {
        color: #f8f9fa!important
    }
    .pagination {
        margin-top: 20px;
    }
    .nav-item{
        font-size: larger;
    }
    .navbar-nav > li{
        padding-left:30px;
        padding-right:30px;
    }
</style>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</body>
</html>

