<?php
session_start();
$products_in_cart = $_SESSION['selectedProducts'];

$logindb = new mysqli("localhost", "root", "", "shoppingcart");
if (mysqli_connect_errno()) {
    echo "failed to connect to MYSQL:" . mysqli_connect_error();
    exit();
}
else {

    mysqli_select_db($logindb, "shoppingcart");
    $products = array();

    $keys = array_keys($products_in_cart);
    for ($i = 0; $i <= sizeof($keys) - 1; $i++) {
        $id = $keys[$i];
        $quantity = $products_in_cart[$id];
        $query = "select * from products where id='$id'";
        $runQuery = mysqli_query($logindb, $query) or die(mysqli_error($logindb));
        while ($result = mysqli_fetch_array($runQuery, MYSQLI_ASSOC)) {
            $name = $result["name"];
            $price = $result["price"];
        }
        array_push($products, array(
            'id' => $id,
            'name' => $name,
            'price' => $price)
        );


    }
}

print_r($products);

echo "\n";

print_r($products_in_cart);

// For testing purposes set this to true, if set to true it will use paypal sandbox
$testmode = true;
$paypalurl = $testmode ? 'https://www.sandbox.paypal.com/cgi-bin/webscr' : 'https://www.paypal.com/cgi-bin/webscr';
// If the user clicks the PayPal checkout button...
if (isset($_POST['paypal']) && $products_in_cart && !empty($products_in_cart)) {
    // Variables we need to pass to paypal
    // Make sure you have a business account and set the "business" variable to your paypal business account email
    $data = array(
        'cmd'			=> '_cart',
        'upload'        => '1',
        'lc'			=> 'EN',
        'business' 		=> 'payments@yourwebsite.com',
        'cancel_return'	=> 'https://yourwebsite.com/index.php?page=cart',
        'notify_url'	=> 'https://yourwebsite.com/index.php?page=cart&ipn_listener=paypal',
        'currency_code'	=> 'USD',
        'return'        => 'https://yourwebsite.com/index.php?page=placeorder'
    );
    // Add all the products that are in the shopping cart to the data array variable
    for ($i = 0; $i < count($products); $i++) {
        $data['item_number_' . ($i+1)] = $products[$i]['id'];
        $data['item_name_' . ($i+1)] = $products[$i]['name'];
        $data['quantity_' . ($i+1)] = $products_in_cart[$products[$i]['id']];
        $data['amount_' . ($i+1)] = $products[$i]['price'];
    }
    print_r($data);
    // Send the user to the paypal checkout screen
    header('location:' . $paypalurl . '?' . http_build_query($data));
    // End the script don't need to execute anything else
    exit;
}

// Below is the listener for paypal, make sure to set the IPN URL (e.g. http://example.com/cart.php?ipn_listener=paypal) in your paypal account, this will not work on a local server
if (isset($_GET['ipn_listener']) && $_GET['ipn_listener'] == 'paypal') {
    // Get all input variables and convert them all to URL string variables
    $raw_post_data = file_get_contents('php://input');
    $raw_post_array = explode('&', $raw_post_data);
    $myPost = array();
    foreach ($raw_post_array as $keyval) {
        $keyval = explode('=', $keyval);
        if (count($keyval) == 2) $myPost[$keyval[0]] = urldecode($keyval[1]);
    }
    $req = 'cmd=_notify-validate';
    $get_magic_quotes_exists = function_exists('get_magic_quotes_gpc') ? true : false;
    foreach ($myPost as $key => $value) {
        if ($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
            $value = urlencode(stripslashes($value));
        } else {
            $value = urlencode($value);
        }
        $req .= "&$key=$value";
    }
// Below will verify the transaction, it will make sure the input data is correct
    $ch = curl_init($paypalurl);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
    $res = curl_exec($ch);
    curl_close($ch);
    if (strcmp($res, 'VERIFIED') == 0) {
        // Transaction is verified and successful...
        $item_id = array();
        $item_quantity = array();
        $item_mc_gross = array();
        // Add all the item numbers, quantities and prices to the above array variables
        for ($i = 1; $i < ($_POST['num_cart_items']+1); $i++) {
            array_push($item_id, $_POST['item_number' . $i]);
            array_push($item_quantity, $_POST['quantity' . $i]);
            array_push($item_mc_gross, $_POST['mc_gross_' . $i]);
        }
        // Insert the transaction into our transactions table, as the payment status changes the query will execute again and update it, make sure the "txn_id" column is unique
        $stmt = $pdo->prepare('INSERT INTO transactions VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ON DUPLICATE KEY UPDATE payment_status = VALUES(payment_status)');
        $stmt->execute([
            NULL,
            $_POST['txn_id'],
            $_POST['mc_gross'],
            $_POST['payment_status'],
            implode(',', $item_id),
            implode(',', $item_quantity),
            implode(',', $item_mc_gross),
            date('Y-m-d H:i:s'),
            $_POST['payer_email'],
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['address_street'],
            $_POST['address_city'],
            $_POST['address_state'],
            $_POST['address_zip'],
            $_POST['address_country']
        ]);
    }
    exit;

}
