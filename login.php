<?php
    require_once("header.php");
	if ($_SESSION['name'] != "GUEST") {
        header("Location: dashboard.php", TRUE, 301);
        die();
    }
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
				<form method="POST" action="includes/login.inc.php">
					<center class="mt-4" style="color:red;"><b>
						<?php
							if (isset($_REQUEST['lerror'])) {
								echo $_REQUEST['lerror'];
							}
						?>
					</b></center>
					<div class="mb-3 mt-4">
						<b><label for="name" class="form-label">Username</label></b>
						<input type="text" class="form-control m-0" name="name" placeholder="Enter your username" required>
					</div>
					<div class="mb-3 mt-4">
						<b><label for="pass" class="form-label">Password</label></b>
						<input type="password" class="form-control m-0" name="pass" placeholder="Enter your password" required>
					</div>
					<center>
						<input type="submit" class="btn btn-primary mt-3 px-5" name="submit" value="Login">
					</center>
				</form>
			</div>
		</div>
		<div class="row justify-content-evenly mt-5">
			<div class="col-md-5 shadow border p-5">
				<h3><i class="fas fa-user-plus"></i> Register</h3>
				<form enctype="multipart/form-data" method="POST" action="includes/register.inc.php">
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
						<b><label for="username" class="form-label">Username</label></b>
						<input type="text" class="form-control m-0" name="username" placeholder="No spaces and special characters, <= 5 chars" required>
					</div>
					<div class="mb-3 mt-4">
						<b><label for="pass" class="form-label">Password</label></b>
						<input type="password" class="form-control m-0" name="pass" placeholder="Must be strong, secured password" required>
					</div>
					<div class="mb-3 mt-4">
						<b><label for="vpass" class="form-label">Verify Password</label></b>
						<input type="password" class="form-control m-0" name="vpass" placeholder="Must match the password" required>
					</div>
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