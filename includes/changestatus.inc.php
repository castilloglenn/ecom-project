<?php

session_start();
require_once("dbstart.inc.php");

echo "POST: <br>";
print_r($_POST);
echo "<br> FILES: <br>";
print_r($_FILES);
echo "<br> SESSION: <br>";
print_r($_SESSION);
echo "<br> REQUEST: <br>";
print_r($_REQUEST);
echo "<br>";

$conn->query("UPDATE transaction SET status='".$_REQUEST['value']."' WHERE transaction_id=".$_REQUEST['id']);
header("Location: ../admin.php", TRUE, 301);
die();