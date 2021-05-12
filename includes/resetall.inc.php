<?php

session_start();

unset($_SESSION['cart']);
unset($_SESSION['cartmultiples']);
unset($_SESSION['cartlist']);
unset($_SESSION['total_price']);
if ($_SESSION['name'] != 'GUEST') {
    require_once("dbstart.inc.php");
    $deleteCart = $conn->query("DELETE FROM cart WHERE customer_id=".$_SESSION['name']);
}

header("Location: ../".$_REQUEST['link'], TRUE, 301);
die();