<?php

session_start();
$productID = $_REQUEST['id'];

require_once("dbstart.inc.php");
$getdata = "SELECT * FROM product WHERE product_id=".$productID;
$data = $conn -> query($getdata);

if ($data !== false && $data->num_rows > 0) {
    while($row = $data->fetch_assoc()) {
        if (isset($_SESSION['cartlist'][$row['name']])) {
            $quantity = $_SESSION['cartlist'][$row['name']]['quantity'] + 1;
            $_SESSION['cartmultiples'] += 1;
        } else {
            $quantity = 1;
        }
        $_SESSION['cartlist'][$row['name']] = array(
            "id" => $row['product_id'], 
            "name" => $row['name'], 
            "image" => $row['image'], 
            "description" => $row['description'], 
            "quantity" => $quantity,
            "price" => $row['price']
        );
    }
}

$_SESSION['cart'] = sizeof($_SESSION['cartlist']) + $_SESSION['cartmultiples'];

// echo isset($_SESSION['cartlist'][1]);
// unset($_SESSION['cartlist'][1]);
// echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';

header("Location: ../".$_REQUEST['link'], TRUE, 301);
die();