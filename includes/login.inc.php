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
    header("Location: ../dashboard.php", TRUE, 301);
    die();
}

?>