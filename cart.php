<?php
    require_once("header.php");
?>
                    <ul class="navbar-nav me-auto ms-4 mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="login.php">Login/Register</a>
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
							<a class="nav-link active" href="#">Cart
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

		<!-- Items -->
		<div class="row border rounded border-2 border-secondary h-100 justify-content-center align-items-center text-center">
			<div class="col-md-3">
				<img src="./img/products/Mug/g3.jpg" width=150>
			</div>

			<div class="col-md-3">
				<b class="pName">White Mug</b>
			</div>

			<div class="col-md-3">
				<b class="pPrice">P 100.00</b>
			</div>

			<div class="col-md-3">
				<a href="" class="btn btn-danger">Remove Item</a>
			</div>
		</div>

		<div class="row border rounded border-top-0 border-2 border-secondary h-100 justify-content-center align-items-center text-center">
			<div class="col-md-3">
				<img src="./img/products/Mug/g3.jpg" width=150>
			</div>

			<div class="col-md-3">
				<b class="pName">White Mug</b>
			</div>

			<div class="col-md-3">
				<b class="pPrice">P 100.00</b>
			</div>

			<div class="col-md-3">
				<a href="" class="btn btn-danger">Remove Item</a>
			</div>
		</div>
	</div> <br>
	<!-- End of Items -->

	<center>
		<a href="" class="btn btn-secondary">Proceed to checkout</a>
	</center>

<?php
    require_once("footer.php");
?>