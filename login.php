<?php
    require_once("header.php");
?>
                    <ul class="navbar-nav me-auto ms-4 mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" href="login.php">Login/Register</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
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
							<a class="nav-link" href="cart.php">View Cart
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

	<div class="container mt-5">
		<div class="row justify-content-evenly">
			<div class="col-md-5 shadow border p-5">
				<h3><i class="fas fa-sign-in-alt"></i> Log In</h3>
			</div>
			<div class="col-md-5 shadow border p-5">
				<h3><i class="fas fa-user-plus"></i> Register</h3>
				<form enctype="multipart/form-data" method="POST" action="includes/placeorder.inc.php">
					<div class="mb-3 mt-4">
						<b><label for="name" class="form-label">Name</label></b>
						<input type="text" class="form-control m-0" name="name" placeholder="Enter your full name" required>
					</div>
					<div class="mb-3">
						<b><label for="address" class="form-label">Address</label></b>
						<input type="text" class="form-control m-0" name="address" placeholder="Enter your full address" required>
					</div>
					<div class="mb-3">
						<b><label for="contact" class="form-label">Contact Number</label></b>
						<input type="text" class="form-control m-0" name="contact" placeholder="Enter your contact number" required>
					</div>
					<div class="mb-3">
						<b><label for="id" class="form-label">Valid ID</label></b>
						<input type="file" class="form-control m-0" name="id" required>
					</div>
					
					<b><label for="option" class="form-label">Payment Option</label></b>
					<div class="input-group mb-3">
						<select class="form-select" id="option" name="option"  onload="changePayment()" onclick="changePayment()" required>
							<option value="1">Cash On Delivery</option>
							<option value="2">GCash</option>
							<option value="3">Debit Card</option>
							<option value="4">Credit Card</option>
						</select>
					</div>

					<div class="mb-3" id="payment">
						<b><label for="address" class="form-label" id="paymentLabel">Enter your </label></b>
						<input type="text" class="form-control m-0" name="payment" placeholder="Enter your ">
					</div>

					<center style="color:red;"><b>
						<?php
							if (isset($_REQUEST['error'])) {
								echo $_REQUEST['error'];
							}
						?>
					</b></center>
					<div style="border-top: 1px solid black; margin-top: 40px; padding-top: 20px;">
						<center>
							<p style="margin-bottom: 0;">
							By registering, You agree to the <b>Terms and Conditions</b> of <b>PulseBytes Merchandise Store.</b>
							<b>PulseBytes</b> is an online merchandise store located in the country of Philippines.
							</p>
						</center>
					</div>
					<center>
						<input type="submit" class="btn btn-primary mt-4 px-5" name="submit" value="Register">
					</center>
				</form>
			</div>
		</div>
	</div>

<?php
    require_once("footer.php");
?>