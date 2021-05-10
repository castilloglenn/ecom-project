<?php

session_start();
$newcart = $_SESSION['cart'] - 1;
$newqty = $_SESSION['cartlist'][$_REQUEST["name"]]['quantity'] - 1;

if ($newcart < 1 && $newqty < 1) {
    header("Location: resetall.inc.php", TRUE, 301);
    die();
} else if ($newqty < 1) {
    unset($_SESSION['cartlist'][$_REQUEST['name']]);
} else {
    $_SESSION['cart'] = $newcart;
    $_SESSION['cartlist'][$_REQUEST['name']]['quantity'] = $newqty;
    $_SESSION['cartmultiples'] -= 1;
}

$_SESSION['cart'] = sizeof($_SESSION['cartlist']) + $_SESSION['cartmultiples'];
// echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
header("Location: ../".$_REQUEST['link'], TRUE, 301);
die();