<?php
    session_start();
    if ($_SESSION['name'] != 100) {
        header('Location: ./includes/logout.inc.php', TRUE, 301);
        die();
    }
    $_SESSION['name'] = (isset($_SESSION['name'])) ? $_SESSION['name'] : 'GUEST';
    $_SESSION['cart'] = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : 0;
    $_SESSION['cartmultiples'] = (isset($_SESSION['cartmultiples'])) ? $_SESSION['cartmultiples'] : 0;
    $_SESSION['total_price'] = (isset($_SESSION['total_price'])) ? $_SESSION['total_price'] : 0;
	require_once("includes/dbstart.inc.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="Pulse Bytes merchandises and fan collectible items sold here! Catch up our newest discounts and deals every month!">
	<meta name="keywords" content="pulse bytes, pulse bytes merch, technology stuff, tech merch, pulse butes tshirts">

	<link rel="stylesheet" type="text/css" href="./style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
    <link rel="icon" href="./img/icon.ico">

	<title>PulseBytes | Merch Shop</title>
</head>

    <body>
        <section>
            <!-- NAVIGATION PANEL -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="admin.php">
                        <img src="./img/pb.png" alt="PulseBytes" width="150">
                    </a>
				</div>
			</div>
		</nav>
	</section>
    <!-- END OF NAVIGATION PANEL -->

    <section>
        <div class="container"> <br>
            <div class="row d-flex justify-content-between">
                <div class="col-md-6">
                    <h3><i class="fas fa-receipt"></i>  View Transaction Receipt</h3> <br>
                </div>
                <div class="col-md-6 text-end">
                    <a class="btn btn-secondary ms-2" href="admin.php" role="button">Go Back</a>
                </div>
            </div>
            <div class="container-float shadow border rounded p-5 mb-5">
                <?php
                    $getdata = "SELECT * FROM transaction WHERE transaction_id=".$_REQUEST['id'];
                    $data = $conn -> query($getdata);
                    $transaction = $data->fetch_assoc();
                        
                    $getdata2 = "SELECT * FROM customer WHERE customer_id=".$transaction['customer_id'];
                    $data2 = $conn -> query($getdata2);
                    $customer = $data2->fetch_assoc();
                        
                    if ($_SESSION['name'] == 100) {
                        echo "
                        <h5><b><i class=\"fas fa-hashtag\"></i> Transaction Number: ".$_REQUEST['id']."</b></h5>
                        <p class=\"m-0\">
                            We will contact your transaction status and updates using your contact number
                            <b>(".$customer['contact_no'].")</b>, you can do a follow-up of your transaction by sending email at 
                            <b>mail@pulsebytes.com</b>, if you are registered at our website, you can see the
                            status of your transactions/orders by visiting your account dashboard. Here are 
                            the details of your transaction: <hr>
                            <b><i class=\"fas fa-shipping-fast\"></i> Shipping Details</b>
                                <p class=\"ms-4 mb-0\"><b>Full Name:</b> ".$customer['name']."</p>
                                <p class=\"ms-4 mb-0\"><b>Full Address:</b> ".$customer['address']."</p>
                                <p class=\"ms-4 mb-0\"><b>Contact Number:</b> ".$customer['contact_no']."</p>
                                <p class=\"ms-4 mb-0\"><b>Mode of Payment:</b> ".$transaction['payment_option']."</p>
                            <hr>
                            <b><i class=\"fas fa-list-ul mb-3\"></i> List of Products</b>
                            <div class=\"container\">";
                        echo "
                            <table class=\"table table-striped border justify-content-center align-items-center text-center\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Quantity</div>
                                        <th scope=\"col\">Product Name</div>
                                        <th scope=\"col\">Price</div>
                                        <th scope=\"col\">Sub-total</div>
                                    </tr>
                                </thead>
                                <tbody>";
                        $getcart = $conn->query("SELECT product_id, quantity FROM contain WHERE transaction_id=".$_REQUEST['id']);
                        $totalview = 0;
                        while ($row = $getcart->fetch_assoc()) {
                            $getproduct = $conn->query("SELECT * FROM product WHERE product_id=".($row['product_id']));
                            $product = $getproduct->fetch_assoc();
                            echo "
                                <tr>
                                    <td>".$row['quantity']."</td>
                                    <td>".$product['name']."</td>
                                    <td>&#x20b1 ".number_format($product['price'], 2, '.', ',')."</td>
                                    <td>&#x20b1 ".number_format(($product['price'] * $row['quantity']), 2, '.', ',')."</td>
                                </tr>";
                            $totalview = $totalview + ($product['price'] * $row['quantity']);
                        }
                        echo "    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><b>Total</b></td>
                                        <td><b>&#x20b1 ".number_format($totalview, 2, '.', ',')."</b></td>
                                    </tr>
                                </tbody>
                            </table>";
                    } else {
                        echo "
                            <center><h3>You do not have the permission to access.</h3></center>
                        ";
                    }
                ?>
                    </div>
                </p>
            </div>
        </div>
    </section>











	<script src="script/bootstrap.bundle.min.js"></script>
	<script src="script/fontawesome.js"></script>
	<script src="script/script.js"></script>
    </body>

</html>