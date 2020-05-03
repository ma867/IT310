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
    </head>
    <body>";
}

function bootstrapProductStart(){
    echo "<!doctype html>
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
        
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        
        </head>
        
        ";
}
function bootstrapProductHeader(){
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
        
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        
        </head>
        
        
        
        <header>
            <!-- Fixed navbar -->
            <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
                <a class=\"navbar-brand\" href=\"#\">ubook</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"index.php\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>     
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-2\" href=\"shopcart.php\" style=\"color:white;\"><span class=\"fas fa-shopping-cart\"></span></a>
                        </li>
        
                    </ul>
                    <form class=\"form-inline mt-2 mt-md-0\" action=\"search.php\" method=\"GET\">
                        <input class=\"form-control mr-sm-2\" type=\"text\" name=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                    </form>
                </div>
            </nav>
        </header>";
}
function boostrapStartMain(){
    echo "<main role=\"main\">
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

function bootstrapHeader(){
    echo "<body>
        <header>
            <!-- Fixed navbar -->
            <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
                <a class=\"navbar-brand\" href=\"#\">ubook</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"index.php\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>      
                        <li class=\"nav-item\">
                            <a class=\"nav-link px-2\" href=\"shopcart.php\" style=\"color:white;\"><span class=\"fas fa-shopping-cart\"></span></a>
                        </li>
        
                    </ul>
                    <form class=\"form-inline mt-2 mt-md-0\" action=\"search.php\" method=\"GET\">
                        <input class=\"form-control mr-sm-2\" type=\"text\" name=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                    </form>
                </div>
            </nav>
        </header>
        ";
}
function bootstrapHeaderAndStartMain(){
    echo bootstrapHeader() . boostrapStartMain();
}
function bootstrapGenerateCards(){
    $logindb = new mysqli("localhost", "root", "", "shoppingcart");
    if (mysqli_connect_errno()) {
        echo "failed to connect to MYSQL:" . mysqli_connect_error();
        exit();
    }
    else {
        $cards = "<div class=\"album py-5 bg-light\" <div class=\"container\"><div class=\"row\">";
        mysqli_select_db($logindb, "shoppingcart");
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


function bootstrapGenerateProduct($id){
    $logindb = new mysqli("localhost", "root", "", "shoppingcart");
    if (mysqli_connect_errno()) {
        echo "failed to connect to MYSQL:" . mysqli_connect_error();
        exit();
    }
    else {
        $cards="<div class=\"container\" style=\"padding-top: 80px;\">
        <div class=\"row\">
            <!-- Image -->
            <div class=\"col-12 col-lg-6\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-body\">
                        <a href=\"\" data-toggle=\"modal\" data-target=\"#productModal\">
                            <img class=\"img-fluid\" src=\"../img /";
        mysqli_select_db($logindb, "shoppingcart");
        $query = "select * from products where id='$id'";
        $runQuery = mysqli_query($logindb, $query) or die(mysqli_error($logindb));
        while ($result = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)) {
            $name = $result["name"];
            $price = $result["price"];
            $rrp = $result["rrp"];
            $description = $result["desc"];
            $image = $result["img"];
            $cards .= $image . "\" /></a></div></div></div>
                    <!-- Add to cart -->
                    <div class=\"col-12 col-lg-6 add_to_cart_block\">
                        <div class=\"card bg-light mb-3\">
                            <div class=\"card-body\">
                                <h1 class=\"card-title text-center\">" . $name .
                "</h1><p class=\"price\">" . $price . "<p class=\"price_discounted\">" . $rrp .
                "</p>" . $description . "<form method=\"post\" action=\"cart.php\">
                                    <div class=\"form-group\">
                                        <label>Quantity :</label>
                                        <div class=\"input-group mb-3\">
                                            <div class=\"input-group-prepend\">
                                                <button type=\"button\" class=\"quantity-left-minus btn btn-danger btn-number\"  data-type=\"minus\" data-field=\"\">
                                                    <i class=\"fa fa-minus\"></i>
                                                </button>
                                            </div>
                                            <input type=\"number\" class=\"form-control\"  id=\"quantity\" name=\"quantity\" min=\"1\" max=\"100\" value=\"1\">
                                            <div class=\"input-group-append\">
                                                <button type=\"button\" class=\"quantity-right-plus btn btn-success btn-number\" data-type=\"plus\" data-field=\"\">
                                                    <i class=\"fa fa-plus\"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class=\"input-group\">
                                                <input type=\"hidden\" class=\"form-control\"  id=\"id\" name=\"id\" value=\"" . $id . "\" />
                                         </div>
                                    </div>
                                    <input type=\"submit\" class=\"btn btn-outline-secondary btn-lg btn-block text-uppercase\"  value=\"Add To Cart\">
                                       
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class=\"modal fade\" id=\"productModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"productModalLabel\">Product title</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                                <img class=\"img-fluid\" src=\"https://dummyimage.com/1200x1200/55595c/fff\" />
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                            </div>
                        </div>
                    </div>
                </div>";
        }

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
        img{
          
            height: 600px;
            width:50px;
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

function bootstrapProductEnd(){
        echo "
            <!-- Footer -->
            
            <footer class=\"footer\">
                <div class=\"container\">
                    <span class=\"text-muted\">ubooks by Melissa Alzate</span>
                </div>
            </footer>
            
            
            <style>
                .bloc_left_price {
                    color: #c01508;
                    text-align: center;
                    font-weight: bold;
                    font-size: 150%;
                }
                .category_block li:hover {
                    background-color: #007bff;
                }
                .category_block li:hover a {
                    color: #ffffff;
                }
                .category_block li a {
                    color: #343a40;
                }
                .add_to_cart_block .price {
                    color: #c01508;
                    text-align: center;
                    font-weight: bold;
                    font-size: 200%;
                    margin-bottom: 0;
                }
                .add_to_cart_block .price_discounted {
                    color: #343a40;
                    text-align: center;
                    text-decoration: line-through;
                    font-size: 140%;
                }
                .product_rassurance {
                    padding: 10px;
                    margin-top: 15px;
                    background: #ffffff;
                    border: 1px solid #6c757d;
                    color: #6c757d;
                }
                .product_rassurance .list-inline {
                    margin-bottom: 0;
                    text-transform: uppercase;
                    text-align: center;
                }
                .product_rassurance .list-inline li:hover {
                    color: #343a40;
                }
                .reviews_product .fa-star {
                    color: gold;
                }
                .pagination {
                    margin-top: 20px;
                }
            
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
            <!-- Placed at the end of the document so the pages load faster -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>
            <script>
                $(document).ready(function(){
                    var quantity = 1;
            
                    $('.quantity-right-plus').click(function(e){
                        e.preventDefault();
                        var quantity = parseInt($('#quantity').val());
                        $('#quantity').val(quantity + 1);
                    });
            
                    $('.quantity-left-minus').click(function(e){
                        e.preventDefault();
                        var quantity = parseInt($('#quantity').val());
                        if(quantity > 1){
                            $('#quantity').val(quantity - 1);
                        }
                    });
            
                });
            
            </script>
            </html>
            ";

}

function createShoppingCart($items){

    $logindb = new mysqli("localhost", "root", "", "shoppingcart");
    if (mysqli_connect_errno()) {
        echo "failed to connect to MYSQL:" . mysqli_connect_error();
        exit();
    }
    else {
        $total = getTotal($items);
        $cards = "";
        mysqli_select_db($logindb, "shoppingcart");
        $keys = array_keys($items);
        for($i=0; $i <= sizeof($keys)-1; $i++ ){
            $key =  $keys[$i];
            $quantity = $items[$key];
            $query = "select * from products where id='$key'";
            $runQuery = mysqli_query($logindb, $query) or die(mysqli_error($logindb));
            while ($result = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)) {
                $name = $result["name"];
                $price = $result["price"];
                $image = $result["img"];
            }
            $cards .= "<tr><td><img src=\"../img/" . $image . "\" /></td><td>" .
                        $name . "</td><td>In stock</td><td>" . $quantity . "</td>
                        <td class=\"text-right\">" . $price . "$</td>
                        <td class=\"text-right\"><a href=\"delete.php?id=" . $key . "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-trash\"></i> </a> </td>
                    </tr>" ;

        }
        $cards .= "  <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Shipping</td>
                        <td class=\"text-right\">4.90$</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total</td>
                        <td class=\"text-right\"><b>" . $total . "$</b></td></tr>" ;
        echo $cards;



    }
}

function shoppingcartStart(){

    echo "<!doctype html>
        <br lang=\"en\">
        <head>
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\">
        
        
        
            <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <!------ Include the above in your HEAD tag ---------->
        
            <title>Ubooks</title>
        
            <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.0/examples/album/\">
        
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        
        </head>
        
        <header>
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
                    <form class=\"form-inline mt-2 mt-md-0\" action=\"search.php\" method=\"GET\">
                        <input class=\"form-control mr-sm-2\" type=\"text\" name=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
                    </form>
                </div>
            </nav>
        </header>
        </br></br>
        <section class=\"jumbotron text-center\" style=\"padding-top: 50px\">
            <div class=\"container\">
                <h1 class=\"jumbotron-heading\">Check-Out</h1>
            </div>
        </section>        
        <div class=\"container mb-4\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped\">
                            <thead>
                            <tr>
                                <th scope=\"col\"> </th>
                                <th scope=\"col\">Product</th>
                                <th scope=\"col\">Available</th>
                                <th scope=\"col\" class=\"text-center\">Quantity</th>
                                <th scope=\"col\" class=\"text-right\">Price</th>
                                <th> </th>
                            </tr>
                            </thead>
                            <tbody>";
}
function getTotal($items)
{
    $logindb = new mysqli("localhost", "root", "", "shoppingcart");
    if (mysqli_connect_errno()) {
        echo "failed to connect to MYSQL:" . mysqli_connect_error();
        exit();
    } else {
        $total = 4.90;
        mysqli_select_db($logindb, "shoppingcart");
        $keys = array_keys($items);
        for($i=0; $i <= sizeof($keys)-1; $i++ ){
            $key = $keys[$i];
            $quantity = $items[$key];

            $query = "select * from products where id='$key'";
            $runQuery = mysqli_query($logindb, $query) or die(mysqli_error($logindb));
            while ($result = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)) {
                $price = $result["price"];
            }

            $total += $price*$quantity;

        }
        return $total;

    }
}

function shoppingcartEnd(){
    echo "</tbody>
                        </table>
                    </div>
                </div>
                <div class=\"col mb-2\">
                    <div class=\"row\">
                        <div class=\"col-sm-12  col-md-6\">
                            <button class=\"btn btn-block btn-light\">Continue Shopping</button>
                        </div>
                        <div class=\"col-sm-12 col-md-6 text-right\">
                            <button class=\"btn btn-lg btn-block btn-success text-uppercase\">Checkout</button>
                        </div>
                        <div class=\"col-sm-12 col-md-6 text-right\">
                            <form action=\"paypal.php\" method=\"post\">
                                <button class=\"btn btn-lg btn-block btn-warning\"  type=\"submit\" name=\"paypal\"><img src=\"https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-100px.png\" border=\"0\" alt=\"PayPal Logo\"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        
        <footer class=\"footer\">
            <div class=\"container\">
                <span class=\"text-muted\">ubooks by Melissa Alzate</span>
            </div>
        </footer>
        
        <style>

            .bloc_left_price {
                color: #c01508;
                text-align: center;
                font-weight: bold;
                font-size: 150%;
            }
            .category_block li:hover {
                background-color: #007bff;
            }
            .category_block li:hover a {
                color: #ffffff;
            }
            .category_block li a {
                color: #343a40;
            }
            .add_to_cart_block .price {
                color: #c01508;
                text-align: center;
                font-weight: bold;
                font-size: 200%;
                margin-bottom: 0;
            }
            .add_to_cart_block .price_discounted {
                color: #343a40;
                text-align: center;
                text-decoration: line-through;
                font-size: 140%;
            }
            .product_rassurance {
                padding: 10px;
                margin-top: 15px;
                background: #ffffff;
                border: 1px solid #6c757d;
                color: #6c757d;
            }
            .product_rassurance .list-inline {
                margin-bottom: 0;
                text-transform: uppercase;
                text-align: center;
            }
            .product_rassurance .list-inline li:hover {
                color: #343a40;
            }
            .reviews_product .fa-star {
                color: gold;
            }
            .pagination {
                margin-top: 20px;
            }
        
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
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>
        

";
}
function loadBootstrap(){
    echo bootstrapStart() .  bootstrapHeaderAndStartMain() . bootstrapGenerateCards() . bootstrapFooter() . bootstrapEnd();
}

function loadProductBootstrap($id){
    echo bootstrapProductHeader() . bootstrapGenerateProduct($id) . bootstrapProductEnd();
}

function loadShopcartBootstrap($items){
    echo shoppingcartStart() .  createShoppingCart($items) . shoppingcartEnd();
}

?>