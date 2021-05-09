<?php

session_start();
$productID = $_REQUEST['id'];
$_SESSION['cart'] += 1;

header("Location: ../".$_REQUEST['link'], TRUE, 301);