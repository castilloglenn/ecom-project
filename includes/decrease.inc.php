<?php

session_start();

if ($_SESSION['name'] == 'GUEST') {
    $newcart = $_SESSION['cart'] - 1;
    $newqty = $_SESSION['cartlist'][$_REQUEST["name"]]['quantity'] - 1;
    
    if ($newcart < 1 && $newqty < 1) {
        header("Location: resetall.inc.php?link=cart.php", TRUE, 301);
        die();
    } else if ($newqty < 1) {
        unset($_SESSION['cartlist'][$_REQUEST['name']]);
    } else {
        $_SESSION['cart'] = $newcart;
        $_SESSION['cartlist'][$_REQUEST['name']]['quantity'] = $newqty;
        $_SESSION['cartmultiples'] -= 1;
    }
    
    $_SESSION['cart'] = sizeof($_SESSION['cartlist']) + $_SESSION['cartmultiples'];
} else {
    require_once("dbstart.inc.php");
    $getqty = $conn->query("SELECT * FROM cart WHERE customer_id=".$_SESSION['name']." AND product_id=".$_REQUEST['id']);
    $cartqty = $getqty->fetch_assoc();
    if ($cartqty['quantity'] == 1) {
        $deleteCartProduct = $conn->query("DELETE FROM cart WHERE customer_id=".$_SESSION['name']." AND product_id=".$_REQUEST['id']);
    } else {
        $conn->query("UPDATE cart SET quantity=".($cartqty['quantity'] - 1)." WHERE customer_id=".$_SESSION['name']." AND product_id=".$_REQUEST['id']);
    }
    $total = $conn->query("SELECT SUM(quantity) FROM cart WHERE customer_id=".$_SESSION['name']);
    $qty = $total->fetch_assoc();
    $_SESSION['cart'] = $qty['SUM(quantity)'];
}

header("Location: ../".$_REQUEST['link'], TRUE, 301);
die();