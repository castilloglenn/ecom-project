<?php
    require_once("header.php");
?>
                    <ul class="navbar-nav me-auto ms-4 mb-2 mb-lg-0">
                        <?php
							if ($_SESSION['name'] == 'GUEST') {
								echo "
									<li class=\"nav-item\">
										<a class=\"nav-link\" href=\"login.php\">Login/Register</a>
									</li>
								";
							} else {
								echo "
									<li class=\"nav-item\">
										<a class=\"nav-link\" href=\"dashboard.php\">Dashboard</a>
									</li>
								";
							}
						?>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-bs-toggle="dropdown" aria-expanded="false"> Categories
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="tshirt.php">T-Shirt</a></li>
								<li><a class="dropdown-item" href="jacket.php">Jacket</a></li>
								<li><a class="dropdown-item" href="mug.php">Mug</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="mouse.php">Mouse</a></li>
								<li><a class="dropdown-item" href="keyboard.php">Keyboard</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="cart.php">View Cart
								<span class="badge rounded-pill bg-primary">0</span>
							</a>
						</li>
					</ul>
					<!-- <form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Find products..." aria-label="Search">
						<button class="btn btn-outline-secondary" type="submit">Search</button>
					</form> -->
				</div>
			</div>
		</nav>
	</section>
    <!-- END OF NAVIGATION PANEL -->

    <section>
        <div class="container"> <br>
            <h3><i class="fas fa-receipt"></i>  Transaction Placed Successfully</h3>
            <div class="container-float shadow border rounded p-5">
                <?php
                    if ($_SESSION['name'] == 'GUEST') {
                        $getdata = "SELECT * FROM customer WHERE customer_id=".$_SESSION['customerID'];
                        $data = $conn -> query($getdata);
                        $customer = $data->fetch_assoc();
                    } else {
                        $customer = $_SESSION['detail'];
                    }

                    $getdata2 = "SELECT * FROM transaction WHERE transaction_id=".$_SESSION['transactionID'];
                    $data2 = $conn -> query($getdata2);
                    $transaction = $data2->fetch_assoc();
                ?>
                <h5><b><i class="fas fa-hashtag"></i> Transaction Number: <?php echo $_SESSION['transactionID']; ?></b></h5>
                <p class="m-0">
                    We will contact your transaction status and updates using your contact number
                    <b>(<?php echo $customer['contact_no']; ?>)</b>, you can do a follow-up of your transaction by sending email at 
                    <b>mail@pulsebytes.com</b>, if you are registered at our website, you can see the
                    status of your transactions/orders by visiting your account dashboard. Here are 
                    the details of your transaction: <hr>
                    <b><i class="fas fa-shipping-fast"></i> Shipping Details</b>
                        <p class="ms-4 mb-0"><b>Full Name:</b> <?php echo $customer['name']; ?></p>
                        <p class="ms-4 mb-0"><b>Full Address:</b> <?php echo $customer['address']; ?></p>
                        <p class="ms-4 mb-0"><b>Contact Number:</b> <?php echo $customer['contact_no']; ?></p>
                        <p class="ms-4 mb-0"><b>Mode of Payment:</b> <?php echo $transaction['payment_option']; ?></p>
                    <hr>
                    <b><i class="fas fa-list-ul mb-3"></i> List of Products</b>
                    <div class="container">
                    <?php echo "
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
                    if ($_SESSION['name'] == 'GUEST') {
                        foreach ($_SESSION['cartlist'] as $product) {
                            echo "
                                <tr>
                                    <td>".$product['quantity']."</td>
                                    <td>".$product['name']."</td>
                                    <td>&#x20b1 ".number_format($product['price'], 2, '.', ',')."</td>
                                    <td>&#x20b1 ".number_format(($product['price'] * $product['quantity']), 2, '.', ',')."</td>
                                </tr>";
                        }
                    } else {
                        $getcart = $conn->query("SELECT product_id, quantity FROM cart WHERE customer_id=".$_SESSION['name']);
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
                        }
                        $deleteCartProduct = $conn->query("DELETE FROM cart WHERE customer_id=".$_SESSION['name']);
                    }
                    echo "    <tr>
                                    <td></td>
                                    <td></td>
                                    <td><b>Total</b></td>
                                    <td><b>&#x20b1 ".number_format($_SESSION['total_price'], 2, '.', ',')."</b></td>
                                </tr>
                            </tbody>
                        </table>";
                    unset($_SESSION['cart']);
                    unset($_SESSION['cartmultiples']);
                    unset($_SESSION['cartlist']);
                    unset($_SESSION['total_price']);?>
                    </div>
                </p>
            </div>
        </div>
    </section>

<?php
    require_once("footer.php");
?>