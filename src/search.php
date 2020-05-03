<?php 

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

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Price: " . $row["price"]. " - Name: " . $row["name"]. " - Desc: " . $row["desc"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>