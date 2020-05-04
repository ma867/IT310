<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 5/1/2020
 * Time: 8:11 AM
 */


function bootstrapGenerateCards(){
    $logindb = new mysqli("localhost", "root", "", "shoppingcart");
    if (mysqli_connect_errno()) {
        echo "failed to connect to MYSQL:" . mysqli_connect_error();
        exit();
    }
    else {
        $cards = "";
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
                        <img class=\"card-img-top\" src=\"../img/" . $image
                . "\" alt=\"Card image cap\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">"  . $name
                . "</h5>
                            <p class=\"card-text\">" . $price
                . "</p>
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <a class=\"btn btn-sm btn-outline-secondary\" href=\"product.php?id=" . $id . "\">View Product</a>
                            </div>
                        </div>
                    </div>
                </div>";
        }

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
        $cards="        <div class=\"col-12 col-lg-6\">
            <div class=\"card mb-3\" style=\"border-color: transparent;\">
                <div class=\"card-body\">
                        <img class=\"img-fluid\"  src=\"../img /";
        mysqli_select_db($logindb, "shoppingcart");
        $query = "select * from products where id='$id'";
        $runQuery = mysqli_query($logindb, $query) or die(mysqli_error($logindb));
        while ($result = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)) {
            $name = $result["name"];
            $price = $result["price"];
            $rrp = $result["rrp"];
            $description = $result["desc"];
            $image = $result["img"];
            $cards .= $image . "\" />
                </div>
            </div>
        </div>
        <!-- Add to cart -->
        <div class=\"col-12 col-lg-6 add_to_cart_block\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-body\">
                    <h1 class=\"card-title text-center\">" . $name .
                "</h1><p class=\"price\">" . $price . "<p class=\"price_discounted\">" . $rrp .
                "</p>
                    <p>" . $description . "</p>
                    <form method=\"post\" action=\"cart.php\">
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
                            <input type=\"hidden\" class=\"form-control\"  id=\"id\" name=\"id\" value=\"5\" />
                        </div>
                    </div>
                    <input type=\"submit\" class=\"btn btn-outline-secondary btn-lg btn-block text-uppercase\"  value=\"Add To Cart\">
                </form>
                </div>
            </div>
        </div>";
        }

        echo $cards;
    }
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
            $cards .= "<tr><td><img style=\"width:50px; height:50px;\" src=\"../img/" . $image . "\" /></td><td>" .
                        $name . "</td><td>In stock</td> <td><form class=\"form-inline\" action=\"update.php\" method=\"GET\">
                        <input class=\"form-control col-sm-10\" type=\"text\" name=\"quantity\" value=\"" . $quantity . "\">
                        <input type=\"hidden\" class=\"form-control\"  id=\"id\" name=\"id\" value=\"" . $key . "\" />
                        <button class=\"btn btn-sm btn-success\" type=\"submit\"><i class=\"fa fa-rotate-left\"></i></button>
                    </form></td><td>" . "</td>
                        <td class=\"text-right\">$ " . $price . "</td>
                        <td class=\"text-right\"><a href=\"delete.php?id=" . $key . "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-trash\"></i> </a> </td>
                    </tr>" ;


        }
        $cards .= "  <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Shipping</td>
                        <td class=\"text-right\">$ 0.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total</td>
                        <td class=\"text-right\"><b>$ " . $total . "</b></td></tr>" ;
        echo $cards;



    }
}

function getTotal($items)
{
    $logindb = new mysqli("localhost", "root", "", "shoppingcart");
    if (mysqli_connect_errno()) {
        echo "failed to connect to MYSQL:" . mysqli_connect_error();
        exit();
    } else {
        $total = 0;
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

?>