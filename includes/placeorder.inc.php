<?php

session_start();
require_once("dbstart.inc.php");

// print_r($_SESSION);
// echo "<br>";
// print_r($_POST);
// echo "<br>";
// print_r($_FILES);

$error = '';
// File upload path
$targetDir = "../uploads/";
$fileName = basename($_FILES["id"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["id"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array(strtolower($fileType), $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["id"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $customer = "";
            $transaction;
            if ($_SESSION['name'] == "GUEST") {
                $customer = $conn->prepare("INSERT INTO customer (id, name, address, contact_no) VALUES (?, ?, ?, ?)");
                $customer->bind_param("ssss", $targetFilePath, $_POST['name'], $_POST['address'], $_POST['contact']);
                $customer->execute();

                $fetchmaxid = $conn->query("SELECT MAX(customer_id) FROM customer");
                $data = $fetchmaxid->fetch_assoc();
                $_SESSION['customerID'] = $data['MAX(customer_id)'];

                $paymentOption = "";
                switch ($_POST['option']) {
                    case 1: $paymentOption = "Cash on Delivery"; break;
                    case 2: $paymentOption = "GCash: ".$_POST['payment']; break;
                    case 3: $paymentOption = "Debit Card: ".$_POST['payment']; break;
                    case 4: $paymentOption = "Credit Card: ".$_POST['payment']; break;
                }

                $transaction = $conn->prepare("INSERT INTO transaction (customer_id, payment_option, total_payment, record_date)
                                VALUES (?, ?, ?, NOW())");
                $transaction->bind_param("isd", $_SESSION['customerID'], $paymentOption, $_SESSION['total_price']);
            }
            
            $result = $transaction->execute();
            if($result){
                $fetchmaxid2 = $conn->query("SELECT MAX(transaction_id) FROM transaction");
                $data2 = $fetchmaxid2->fetch_assoc();
                $_SESSION['transactionID'] = $data2['MAX(transaction_id)'];

                foreach ($_SESSION['cartlist'] as $item) {
                    $transacts = $conn->query("INSERT INTO contain VALUES (".$_SESSION['transactionID'].", ".$item['id'].",".$item['quantity'].")");
                    if ($transacts) {
                        echo "<br>Successfully added".$item['name']."<br>";
                    }
                }
            }else{
                $error = "upload";
            } 
        }else{
            $error = "move";
        }
    }else{
        $error = 'type';
    }
}else{
    $error = 'none';
}

switch ($error) {
    case '': header("Location: ../receipt.php", TRUE, 301); break;
    default: header("Location: ../shipping.php?error=".$error, TRUE, 301); break;
}

?>