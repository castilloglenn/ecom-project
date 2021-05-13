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
                    <h3><i class="fas fa-user-cog"></i> Administration Panel</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a class="btn btn-danger ms-2" href="includes/logout.inc.php" role="button">Log out</a>
                </div>
            </div>
            
            <div class="container border rounded shadow mt-4 p-5">
                <h3><i class="fas fa-file-contract"></i> Customer Transactions</h3>
                <div class="container overflow-auto"  style="height: 50vh;">
                <?php
                    $fetchall = $conn->query("SELECT * FROM transaction");
                    if ($fetchall->num_rows > 0) {
                        echo "
                        <table class=\"table table-striped justify-content-center align-items-center text-center\">
                            <thead>
                                <tr>
                                    <th scope=\"col\">Tracking</th>
                                    <th scope=\"col\">Date Ordered</th>
                                    <th scope=\"col\">Receipt</th>
                                    <th scope=\"col\">Status</th>
                                </tr>
                            </thead>
                            <tbody>";
                        while ($row = $fetchall->fetch_assoc()) {
                            $getstatus = $conn->query("SELECT status FROM transaction WHERE transaction_id=".$row['transaction_id']);
                            $statusassoc = $getstatus->fetch_assoc();
                            $status = $statusassoc['status'];
                            echo "
                            <tr>
                                <td>".$row['transaction_id']."</td>
                                <td>".$row['record_date']."</td>
                                <td><a href=\"adminview.php?id=".$row['transaction_id']."\" class=\"link-primary\">View Receipt</a></td>
                                <td>
                                    <select id=\"status\" onchange=\"changeStatus(this)\" aria-label=\"Status\">
                                        <option ".(($status == "PLACED") ? 'selected' : '')." value=\"id=".$row['transaction_id']."&value=PLACED\">PLACED</option>
                                        <option ".(($status == "PREPARING") ? 'selected' : '')." value=\"id=".$row['transaction_id']."&value=PREPARING\">PREPARING</option>
                                        <option ".(($status == "SHIPPING") ? 'selected' : '')." value=\"id=".$row['transaction_id']."&value=SHIPPING\">SHIPPING</option>
                                        <option ".(($status == "DELIVERED") ? 'selected' : '')." value=\"id=".$row['transaction_id']."&value=DELIVERED\">DELIVERED</option>
                                        <option ".(($status == "CANCELED") ? 'selected' : '')." value=\"id=".$row['transaction_id']."&value=CANCELED\">CANCELED</option>
                                    </select>
                                </td>
                            </tr>
                            ";
                        }
                        echo "
                            </tbody>
                        </table>
                        ";
                    } else {
                        echo "
                            <center>
                                <h3 class=\"p-5\">No transactions recorded yet</h3>
                            </center>
                        ";
                    }
                ?>
                </div>
            </div>
            
            <div class="container border rounded shadow mt-4 p-5">
                <h3><i class="fas fa-user-friends"></i> Manage Customers</h3>
            </div>
            
            <div class="container border rounded shadow my-4 p-5">
                <h3><i class="fas fa-cogs"></i> Setup Administrator</h3>
            </div>
        </div>
    </section>

	<script type="text/javascript" src="./script/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="./script/fontawesome.js"></script>
	<script type="text/javascript" src="./script/script.js"></script>
    </body>

</html>