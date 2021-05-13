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
                <div class="container overflow-auto"  style="height: 50vh;">
                <?php
                    $fetchall2 = $conn->query("SELECT *, (SELECT SUM(total_payment) FROM transaction WHERE customer_id=c.customer_id) AS total FROM customer c WHERE customer_id > 100 ORDER BY total DESC");
                    if ($fetchall2->num_rows > 0) {
                        echo "
                        <table class=\"table table-striped justify-content-center align-items-center text-center\">
                            <thead>
                                <tr>
                                    <th scope=\"col\">ID</th>
                                    <th scope=\"col\">Account Type</th>
                                    <th scope=\"col\">Name</th>
                                    <th scope=\"col\">Address</th>
                                    <th scope=\"col\">No. of transactions</th>
                                    <th scope=\"col\">Total Payment</th>
                                </tr>
                            </thead>
                            <tbody>";
                        while ($row = $fetchall2->fetch_assoc()) {
                            $getcount = $conn->query("SELECT COUNT(*), SUM(total_payment) FROM transaction WHERE customer_id=".$row['customer_id']);
                            $countassoc = $getcount->fetch_assoc();
                            $count = $countassoc['COUNT(*)'];
                            $total = $countassoc['SUM(total_payment)'];

                            echo "
                            <tr>
                                <td>".$row['customer_id']."</td>
                                <td>".(($row['username'] == null) ? 'Guest' : 'Registered') ."</td>
                                <td>".$row['name']."</td>
                                <td>".$row['address']."</td>
                                <td>".$count."</td>
                                <td>&#x20b1 ".number_format($total, 2, '.', ',')."</td>
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
            
            <div class="container border rounded shadow my-4 p-5">
                <h3><i class="fas fa-cogs"></i> Setup Administrator</h3>
                <form method="POST" action="includes/changeadmin.inc.php">
                    <center class="mt-4" style="color:red;"><b>
						<?php
							if (isset($_REQUEST['rerror'])) {
								echo $_REQUEST['rerror'];
							}
						?>
					</b></center>
					<center class="mt-4" style="color:blue;"><b>
						<?php
							if (isset($_REQUEST['rnotice'])) {
								echo $_REQUEST['rnotice'];
							}
						?>
					</b></center>
                    <div class="mb-3 mt-4">
						<b><label for="pass" class="form-label">Change Password</label></b>
						<input type="password" class="form-control m-0" name="pass" placeholder="Must be strong, secured password" required>
					</div>
					<div class="mb-3 mt-4">
						<b><label for="vpass" class="form-label">Verify Password</label></b>
						<input type="password" class="form-control m-0" name="vpass" placeholder="Must match the password" required>
					</div>
                    <center>
						<input type="submit" class="btn btn-success mt-4 px-5" name="submit" value="Save Changes">
					</center>
                </form>
            </div>
        </div>
    </section>

	<script type="text/javascript" src="./script/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="./script/fontawesome.js"></script>
	<script type="text/javascript" src="./script/script.js"></script>
    </body>

</html>