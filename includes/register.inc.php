<?php

session_start();
require_once("dbstart.inc.php");

// echo "POST: <br>";
// print_r($_POST);
// echo "<br> FILES: <br>";
// print_r($_FILES);
// echo "<br> SESSION: <br>";
// print_r($_SESSION);
// echo "<br>";

$errors = "";
if(!preg_match('/^[a-zA-Z0-9]{5,}$/', $_POST['username'])) { 
    $errors .= "The username must not contain spaces or shorter than 5 characters<br>";
}
$check = $conn->query("SELECT COUNT(*) FROM customer WHERE username='".$_POST['username']."'");
$result = $check->fetch_assoc();
if ($result['COUNT(*)'] > 0) {
    $errors .= "Username already exists<br>";
}

if (!preg_match('/^[a-zA-Z0-9]{5,}$/', $_POST['pass'])) {
    $errors .= "The password must not contain spaces or shorter than 5 characters<br>";
} else if ($_POST['pass'] !== $_POST['vpass']) {
    $errors .= "The passwords do not match<br>";
}

if ($errors != "") {
    header("Location: ../login.php?rerror=".$errors);
    die();
} else {
    $error = "";
    // File upload path
    $targetDir = "../uploads/";
    $fileName = basename($_FILES["id"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if(isset($_POST["submit"]) && !empty($_FILES["id"]["name"])){
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        if(in_array(strtolower($fileType), $allowTypes)){
            if(move_uploaded_file($_FILES["id"]["tmp_name"], $targetFilePath)){
                $customer = $conn->prepare("INSERT INTO customer (username, password, id, name, address, contact_no) VALUES (?, ?, ?, ?, ?, ?)");
                $customer->bind_param("ssssss", $_POST['username'], password_hash($_POST['pass'], PASSWORD_DEFAULT), $targetFilePath, $_POST['name'], $_POST['address'], $_POST['contact']);
                $customer->execute();
                if($result){
                    header("Location: ../login.php?rnotice=Successfully created new account.");
                    die();
                }else{
                    $error .= "Upload error<br>";
                } 
            }else{
                $error .= "Move error<br>";
            }
        }else{
            $error .= 'Type error<br>';
        }
    }else{
        $error .= 'No image<br>';
    }
    header("Location: ../login.php?rerror=".$error);
    die();
}

?>