<?php

session_start();
$productID = $_REQUEST['id'];
$_SESSION['cart'] += 1;

require_once("dbstart.inc.php");
$getdata = "SELECT * FROM product WHERE product_id=".$productID;
$data = $conn -> query($getdata);

if ($data !== false && $data->num_rows > 0) {
    while($row = $data->fetch_assoc()) {
        $_SESSION['cartlist'][] = array(
            $row['product_id'], $row['name'], $row['image'], 
            $row['description'], $row['price']
        );
    }
}

// echo isset($_SESSION['cartlist'][1]);
// unset($_SESSION['cartlist'][1]);
echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';

// header("Location: ../".$_REQUEST['link'], TRUE, 301);