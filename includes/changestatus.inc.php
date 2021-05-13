<?php

session_start();
require_once("dbstart.inc.php");

$conn->query("UPDATE transaction SET status='".$_REQUEST['value']."' WHERE transaction_id=".$_REQUEST['id']);
header("Location: ../admin.php", TRUE, 301);
die();