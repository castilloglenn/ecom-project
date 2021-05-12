<?php

session_start();
require_once("dbstart.inc.php");

if ($_SESSION['name'] == 'GUEST') {
    $productID = $_REQUEST['id'];
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
        $_SESSION['cart'] = sizeof($_SESSION['cartlist']) + $_SESSION['cartmultiples'];
    }
} else {
    $getdata = "SELECT quantity FROM cart WHERE customer_id=".$_SESSION['name']." AND product_id=".$_REQUEST['id'];
    $data = $conn -> query($getdata);
    if ($data !== false && $data->num_rows > 0) {
        $product = $data->fetch_assoc();
        $conn->query("UPDATE cart SET quantity=".($product['quantity'] + 1)." WHERE customer_id=".$_SESSION['name']." AND product_id=".$_REQUEST['id']);
    } else {
        $insert = $conn->prepare("INSERT INTO cart VALUES(?, ?, 1)");
        $insert->bind_param("ii", $_SESSION['name'], $_REQUEST['id']);
        $insert->execute();
    }
    $total = $conn->query("SELECT SUM(quantity) FROM cart WHERE customer_id=".$_SESSION['name']);
    $qty = $total->fetch_assoc();
    $_SESSION['cart'] = $qty['SUM(quantity)'];
}

header("Location: ../".$_REQUEST['link'], TRUE, 301);
die();

