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

$errors = "";
if ($_POST['username'] != null && $_POST['username'] != $_SESSION['detail']['username']) {
    if(!preg_match('/^[a-zA-Z0-9]{5,}$/', $_POST['username'])) { 
        $errors .= "The username must not contain spaces or shorter than 5 characters<br>";
    }
    $check = $conn->query("SELECT COUNT(*) FROM customer WHERE username='".$_POST['username']."'");
    $result = $check->fetch_assoc();
    if ($result['COUNT(*)'] > 0) {
        $errors .= "Username already exists<br>";
    }

    if ($errors == "") {
        $conn->query("UPDATE customer SET username='".$_POST['username']."' WHERE customer_id=".$_SESSION['name']);
    }
}

if ($_POST['pass'] != null) {if (
    !preg_match('/^[a-zA-Z0-9]{5,}$/', $_POST['pass'])) {
        $errors .= "The password must not contain spaces or shorter than 5 characters<br>";
    } else if ($_POST['pass'] !== $_POST['vpass']) {
        $errors .= "The passwords do not match<br>";
    }

    if ($errors == "") {
        $conn->query("UPDATE customer SET password='".password_hash($_POST['pass'], PASSWORD_DEFAULT)."' WHERE customer_id=".$_SESSION['name']);
    }
}

if ($_POST['name'] != null && $_POST['name'] != $_SESSION['detail']['name']) {
    if ($errors == "") {
        $conn->query("UPDATE customer SET name='".$_POST['name']."' WHERE customer_id=".$_SESSION['name']);
    }
}

if ($_POST['address'] != null && $_POST['address'] != $_SESSION['detail']['address']) {
    if ($errors == "") {
        $conn->query("UPDATE customer SET address='".$_POST['address']."' WHERE customer_id=".$_SESSION['name']);
    }
}

if ($_POST['contact'] != null && $_POST['contact'] != $_SESSION['detail']['contact_no']) {
    if ($errors == "") {
        $conn->query("UPDATE customer SET contact_no='".$_POST['contact']."' WHERE customer_id=".$_SESSION['name']);
    }
}

if(isset($_POST["submit"]) && !empty($_FILES["id"]["name"])){
    $targetDir = "../uploads/";
    $uploadDir = "./uploads/";
    $fileName = basename($_FILES["id"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $uploadFilePath = $uploadDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array(strtolower($fileType), $allowTypes)){
        if(move_uploaded_file($_FILES["id"]["tmp_name"], $targetFilePath)){
            if ($errors == "") {
                $conn->query("UPDATE customer SET id='".$uploadFilePath."' WHERE customer_id=".$_SESSION['name']);
            }
        }else{
            $errors .= "Move error<br>";
        }
    }else{
        $errors .= 'Type error<br>';
    }
}

if($errors == ""){
    header("Location: ../dashboard.php?rnotice=Successfully updated account.");
    die();
}

echo $errors;
header("Location: ../dashboard.php?rerror=".$error);
die();

?>