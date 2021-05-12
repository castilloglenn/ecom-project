<?php

session_start();
require_once("dbstart.inc.php");

echo "POST: <br>";
print_r($_POST);
echo "<br> FILES: <br>";
print_r($_FILES);
echo "<br> SESSION: <br>";
print_r($_SESSION);
echo "<br>";

$check = $conn->query("SELECT * FROM customer WHERE username='".$_POST['name']."'");
$result = $check->fetch_assoc();
if (password_verify($_POST['pass'], $result['password'])) {
    $_SESSION['name'] = $result['customer_id'];
    $_SESSION['detail'] = $result;
    unset($_SESSION['cart']);
    unset($_SESSION['cartmultiples']);
    unset($_SESSION['cartlist']);
    unset($_SESSION['total_price']);
    $total = $conn->query("SELECT SUM(quantity) FROM cart WHERE customer_id=".$_SESSION['name']);
    $qty = $total->fetch_assoc();
    $_SESSION['cart'] = $qty['SUM(quantity)'];

    header("Location: ../dashboard.php", TRUE, 301);
    die();
} else {
    header("Location: ../login.php?lerror=Incorrect username or password", TRUE, 301);
    die();
}

?>