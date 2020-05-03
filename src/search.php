<?php

session_start();

include("functions.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoppingcart";
$query = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['search'])){
    $query =  $_GET['search'];
}

$sql = "SELECT * FROM products where name like '%" .$query. "%'";
$result = $conn->query($sql);
$cards = bootstrapStart() .  bootstrapHeaderAndStartMain() . "<div class=\"album py-5 bg-light\" <div class=\"container\"><div class=\"row\">";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $cards .= "<div class=\"col-md-4\">
                    <div class=\"card mb-4 box-shadow\">
                        <img class=\"card-img-top\" src=\"../img/" . $row['img'] . "\" alt=\"Card image cap\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">" . $row['name'] . "</h5>
                            <p class=\"card-text\">" . $row['price'] . "</p>
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <a class=\"btn btn-sm btn-outline-secondary\" a href=\"product.php?id=" . $row['id'] . "\">View</a>
                           </div>
                        </div>
                    </div>
                </div>";
    }
    $cards .= "</div></div></div></main>";
    $cards .=  bootstrapFooter() . bootstrapEnd();

    echo $cards;
} else {
    echo "0 results";
}
$conn->close();
?>