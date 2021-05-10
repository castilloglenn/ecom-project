<?php
    require_once("header.php");
?>
                    <ul class="navbar-nav me-auto ms-4 mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="login.php">Login/Register</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="index.php">Home</a>
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

    <!-- WEBSITE BANNER -->
	<section>
		<div class="container-float">
			<div class="row">
				<div class="col-md-12 pe-0">
					<img src="./img/banner.png" alt="PulseBytes Banner" width=100%>
				</div>
			</div>
		</div>
	</section>
    <!-- END OF WEBSITE BANNER -->

    <!-- FEATURED PRODUCTS -->
	<section>
		<div class="container mt-5">
			<div class="card-group text-center">
				<div class="card">
					<img src="img/products/glenn-t.png" class="mx-auto" alt="Glenn T-Shirt" width=75%>
					<div class="card-body">
					</div>
					<div class="card-footer">
						<h5 class="card-title">I Love Programming Tee</h5>
						<h5 class="card-title">₱300.00</h5>
						<small>
							Our very own programmer Glenn tshirt along with his favorite quotation.
						</small>
						<p><a href="includes/addtocart.inc.php?id=2&link=index.php" class="badge bg-primary">Add to Cart</a></p>
					</div>
				</div>
				<div class="card">
					<img src="img/products/seb-t.png" class="mx-auto" alt="Sebastian T-Shirt" width=75%>
					<div class="card-body">
					</div>
					<div class="card-footer">
						<h5 class="card-title">RAM Provider Iron Golem Tee</h5>
						<h5 class="card-title">₱300.00</h5>
						<small>
							You will probably love an iron golem providing you with some extra ram boost.
						</small>
						<p><a href="includes/addtocart.inc.php?id=3&link=index.php" class="badge bg-primary">Add to Cart</a></p>
					</div>
				</div>
				<div class="card">
					<img src="img/products/p-ernest-t.png" class="mx-auto" alt="Ernest T-Shirt" width=75%>
					<div class="card-body">
					</div>
					<div class="card-footer">
						<h5 class="card-title">Lipunan Tee (Purple)</h5>
						<h5 class="card-title">₱300.00</h5>
						<small>
							Tayo ay nakatira sa isang LIPUNAN. Ernest's favorite line ever. Comes in a purple shirt.
						</small>
						<p><a href="includes/addtocart.inc.php?id=4&link=index.php" class="badge bg-primary">Add to Cart</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container mt-5">
			<div class="card-group text-center">
				<div class="card">
					<img src="img/products/b-ernest-t.png" class="mx-auto" alt="Ernest T-Shirt" width=75%>
					<div class="card-body">
					</div>
					<div class="card-footer">
						<h5 class="card-title">Lipunan Tee (Black)</h5>
						<h5 class="card-title">₱300.00</h5>
						<small>
							Tayo ay nakatira sa isang LIPUNAN. Ernest's favorite line ever. Comes in a black shirt.
						</small>
						<p><a href="includes/addtocart.inc.php?id=1&link=index.php" class="badge bg-primary">Add to Cart</a></p>
					</div>
				</div>
				<div class="card">
					<img src="img/products/w-mug.png" class="mx-auto" alt="White Pulse Bytes Mug" width=75%>
					<div class="card-body">
					</div>
					<div class="card-footer">
						<h5 class="card-title">Pulse Bytes Mug (White)</h5>
						<h5 class="card-title">₱150.00</h5>
						<small>
							White mug y'all.
						</small>
						<p><a href="includes/addtocart.inc.php?id=6&link=index.php" class="badge bg-primary">Add to Cart</a></p>
					</div>
				</div>
				<div class="card">
					<img src="img/products/b-mug.png" class="mx-auto" alt="Black Pulse Bytes Mug" width=75%>
					<div class="card-body">
					</div>
					<div class="card-footer">
						<h5 class="card-title">Pulse Bytes Mug (Black)</h5>
						<h5 class="card-title">₱150.00</h5>
						<small>
							Black mug y'all.
						</small>
						<p><a href="includes/addtocart.inc.php?id=5&link=index.php" class="badge bg-primary">Add to Cart</a></p>
					</div>
				</div>
			</div>
		</div>
	</section> 
    <!-- END OF FEATURED PRODUCTS -->

<?php
    require_once("footer.php");
?>