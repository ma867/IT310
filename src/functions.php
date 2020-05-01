<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 5/1/2020
 * Time: 8:11 AM
 */
function bootstrapStart(){
    echo "
    <!doctype html>
    <html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\">
        <title>Ubooks</title>
        <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.0/examples/album/\">
        <!-- Bootstrap core CSS -->
        <link href=\"../../dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Custom styles for this template -->
        <link href=\"album.css\" rel=\"stylesheet\">
    </head>
    <body>";
}

function boostrapHeaderAndStartMain(){
    echo "<header>
            <!-- Fixed navbar -->
            <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
                <a class=\"navbar-brand\" href=\"#\">ubook</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Products</a>
                        </li>
        
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-2\" href=\"#\" style=\"color:white;\"><span class=\"fas fa-shopping-cart\"></span></a>
                        </li>
        
                    </ul>
                    <form class=\"form-inline mt-2 mt-md-0\">
                        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                    </form>
                </div>
            </nav>
        </header>
        <main role=\"main\">
            <div class=\"position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light\">
                <div class=\"col-md-5 p-lg-5 mx-auto my-5\">
                    <h1 class=\"display-4 font-weight-normal\">Punny headline</h1>
                    <p class=\"lead font-weight-normal\">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
                    <a class=\"btn btn-outline-secondary\" href=\"#\">Coming soon</a>
                </div>
                <div class=\"product-device box-shadow d-none d-md-block\"></div>
                <div class=\"product-device product-device-2 box-shadow d-none d-md-block\"></div>
            </div>";
}
function bootstrapGenerateCards(){
    $logindb = new mysqli("sql2.njit.edu", "ma867", "toolkit76", "ma867");
    if (mysqli_connect_errno()) {
        echo "failed to connect to MYSQL:" . mysqli_connect_error();
        exit();
    }
    else {
        $cards = "<div class=\"album py-5 bg-light\" <div class=\"container\"><div class=\"row\">";
        mysqli_select_db($logindb, "ma867");
        $query = "select * from products";
        $runQuery = mysqli_query($logindb, $query) or die(mysqli_error($logindb));
        while ($result = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)) {
            $id = $result["id"];
            $name = $result["name"];
            $price = $result["price"];
            $image = $result["img"];
            $cards .= "<div class=\"col-md-4\">
                    <div class=\"card mb-4 box-shadow\">
                        <img class=\"card-img-top\" src=\"../img/" . $image . "\" alt=\"Card image cap\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">" . $name . "</h5>
                            <p class=\"card-text\">" . $price . "</p>
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <a class=\"btn btn-sm btn-outline-secondary\" a href=\"product.php?id=" . $id . "\">View</a>
                           </div>
                        </div>
                    </div>
                </div>";
        }

        $cards .= "</div></div></div></main>";
        echo $cards;
    }
}
function bootstrapFooter(){
    echo "<footer class=\"footer\">
            <div class=\"container\">
                <span class=\"text-muted\">ubooks by Melissa Alzate</span>
            </div>
        </footer>";
}
function bootstrapEnd(){
    echo
    "<style>
        html {
            position: relative;
            min-height: 100%;
        }
        body {
            margin-bottom: 60px; /* Margin bottom by footer height */
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px; /* Set the fixed height of the footer here */
            line-height: 60px; /* Vertically center the text there */
            background-color: #f5f5f5;
        }
    </style>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>
    </body>
    </html>";
}

function loadBootstrap(){
    echo bootstrapStart() . boostrapHeaderAndStartMain() . bootstrapGenerateCards() . bootstrapFooter() . bootstrapEnd();
}
?>