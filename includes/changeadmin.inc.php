<?php

session_start();
require_once("dbstart.inc.php");

if ($_POST['pass'] != null) {if (
    !preg_match('/^[a-zA-Z0-9]{5,}$/', $_POST['pass'])) {
        $errors .= "The password must not contain spaces or shorter than 5 characters<br>";
    } else if ($_POST['pass'] !== $_POST['vpass']) {
        $errors .= "The passwords do not match<br>";
    }

    if ($errors == "") {
        $conn->query("UPDATE customer SET password='".password_hash($_POST['pass'], PASSWORD_DEFAULT)."' WHERE customer_id=100");
        header("Location: ../admin.php?rnotice=Successfully updated admin password.", TRUE, 301);
        die();
    } else {
        header("Location: ../admin.php?rerror=".$errors, TRUE, 301);
        die();
    }
}