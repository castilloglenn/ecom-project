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
							<a class="nav-link active" href="#">View Cart
								<span class="badge rounded-pill bg-primary">
									<?php
										echo $_SESSION['cart'];
									?>
								</span>
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

	<div class="container h-100">
		<br>
		<h3><i class="fas fa-shopping-basket"></i>  Shopping Cart</h3>
		<?php 
		if ($_SESSION['name'] == 'GUEST') {
			if (!isset($_SESSION['cartlist']) || sizeof($_SESSION['cartlist']) === 0) {
				echo "
				<center class=\"shadow border rounded p-5\" style=\"margin-top: 55px; margin-bottom: 200px;\">
					<h2>No item(s) to display..</h2><h2>Add some items at the store!</h2>
				</center>";
			} else {
				echo " <br> <div class=\"border rounded shadow p-3\">
					<div class=\"row h-100 justify-content-center align-items-center text-center p-2\">
						<div class=\"col-md-3\"><b>Preview</b></div>
						<div class=\"col-md-3\"><b>Name</b></div>
						<div class=\"col-md-2\"><b>Price</b></div>
						<div class=\"col-md-2\"><b>Quantity</b></div>
						<div class=\"col-md-2\"><b>Adjustment</b></div>
					</div>";
				$_SESSION['total_price'] = 0;
				foreach ($_SESSION['cartlist'] as $row) {
					echo "
					<div class=\"row h-100 justify-content-center align-items-center text-center p-2\">
						<div class=\"col-md-3\">
							<img src=\"".$row["image"]."\" width=150>
						</div>

						<div class=\"col-md-3\">
							<b>".$row["name"]."</b>
						</div>

						<div class=\"col-md-2\">
							<b>&#x20b1 ".number_format($row["price"], 2, '.', ',')."</b>
						</div>

						<div class=\"col-md-2\">
							<b>".$row["quantity"]."</b>
						</div>

						<div class=\"col-md-2\">
							<a href=\"includes/addtocart.inc.php?id=".$row['id']."&link=cart.php\" class=\"btn btn-success\">+</a>
							<a href=\"includes/decrease.inc.php?name=".$row['name']."&link=cart.php\" class=\"btn btn-danger\">-</a>
						</div>
					</div>";
					$_SESSION['total_price'] = $_SESSION['total_price'] + ($row["price"] * $row["quantity"]);
				}
				echo " <br>
					<div class=\"row h-100 justify-content-center align-items-center text-center\">
						<div class=\"col-md-12\">
							<h4>Total: &#x20b1 ".number_format($_SESSION['total_price'], 2, '.', ',')."</h4>
						</div>
					</div>";

				echo "
				<center>
					<a href=\"includes\\resetall.inc.php?link=cart.php\" class=\"btn btn-danger me-1 px-5\">
						Empty cart
					</a>
					<a href=\"shipping.php\" class=\"btn btn-secondary px-4\">
						Proceed to checkout
					</a>
				</center> </div>";
			}
		} else {
			$getcart = $conn->query("SELECT product_id, quantity FROM cart WHERE customer_id=".$_SESSION['name']);
			if ($getcart->num_rows == 0) {
				echo "
				<center class=\"shadow border rounded p-5\" style=\"margin-top: 55px; margin-bottom: 200px;\">
					<h2>No item(s) to display..</h2><h2>Add some items at the store!</h2>
				</center>";
			} else {
				echo " <br> <div class=\"border rounded shadow p-3\">
						<div class=\"row h-100 justify-content-center align-items-center text-center p-2\">
							<div class=\"col-md-3\"><b>Preview</b></div>
							<div class=\"col-md-3\"><b>Name</b></div>
							<div class=\"col-md-2\"><b>Price</b></div>
							<div class=\"col-md-2\"><b>Quantity</b></div>
							<div class=\"col-md-2\"><b>Adjustment</b></div>
						</div>";
				$_SESSION['total_price'] = 0;
				while ($row = $getcart->fetch_assoc()) {
					$getproduct = $conn->query("SELECT * FROM product WHERE product_id=".($row['product_id']));
					$product = $getproduct->fetch_assoc();
					echo "
					<div class=\"row h-100 justify-content-center align-items-center text-center p-2\">
						<div class=\"col-md-3\">
							<img src=\"".$product["image"]."\" width=150>
						</div>

						<div class=\"col-md-3\">
							<b>".$product["name"]."</b>
						</div>

						<div class=\"col-md-2\">
							<b>&#x20b1 ".number_format($product["price"], 2, '.', ',')."</b>
						</div>

						<div class=\"col-md-2\">
							<b>".$row["quantity"]."</b>
						</div>

						<div class=\"col-md-2\">
							<a href=\"includes/addtocart.inc.php?id=".$row['product_id']."&link=cart.php\" class=\"btn btn-success\">+</a>
							<a href=\"includes/decrease.inc.php?id=".$row['product_id']."&name=".$product['name']."&link=cart.php\" class=\"btn btn-danger\">-</a>
						</div>
					</div>";
					$_SESSION['total_price'] = $_SESSION['total_price'] + ($product["price"] * $row["quantity"]);
				}
				echo " <br>
					<div class=\"row h-100 justify-content-center align-items-center text-center\">
						<div class=\"col-md-12\">
							<h4>Total: &#x20b1 ".number_format($_SESSION['total_price'], 2, '.', ',')."</h4>
						</div>
					</div>";

				echo "
				<center>
					<a href=\"includes\\resetall.inc.php?link=cart.php\" class=\"btn btn-danger me-1 px-5\">
						Empty cart
					</a>
					<a href=\"shipping.php\" class=\"btn btn-secondary px-4\">
						Proceed to checkout
					</a>
				</center> </div>";
			}
		}?>
	</div>

<?php
    require_once("footer.php");
?>