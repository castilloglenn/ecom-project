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
							<a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
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

    <section>
		<!-- WEBSITE BANNER -->
		<div class="container-float">
			<div class="row">
				<div class="col-md-12 pe-0">
					<img src="./img/mousebanner.png" alt="PulseBytes Banner" width=100%>
				</div>
			</div>
		</div>
	</section>
	<!--End of Website Banner-->

	<br>

	<section>
		<!--BestSeller Items-->
		<div class="container">
			<h2 class="bestseller-title">BESTSELLERS</h2>
			<br>
			<div class="bestselling">
				<div class="row">
					<div class="col">
						<!--Razer Mamba -->
						<div class="bestselling-mouse">
							<center><img src="./img/products/Mouse/razermamba.jpg" alt="" width="250" height="200">
							</center>
							<h5 class="product-name">Razer Mamba</h5>
							<span class="product-price">₱ 4,781.00 </span>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-caret-right" viewBox="0 0 16 16">
								<path
									d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
							</svg>
                        <p><a href="includes/addtocart.inc.php?id=21&link=mouse.php" class="badge bg-primary">Add to Cart</a></p>
						</div>
					</div>
					
					<div class="col order-1">
						<div class="bestselling-mouse">
							<!--Razer Mamba Wireless-->
							<center><img src="./img/products/Mouse/razermambawireless.jpg" alt="" width="250"
									height="200"></center>
							<h5 class="product-name">Razer Mamba Wireless</h5>
							<span class="product-price">₱ 4,781.00 </span>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-caret-right" viewBox="0 0 16 16">
								<path
									d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
							</svg>
                        <p><a href="includes/addtocart.inc.php?id=22&link=mouse.php" class="badge bg-primary">Add to Cart</a></p>
						</div>
					</div>

					<div class="col order-2">
						<div class="bestselling-mouse">
							<!--Razer Basilisk V2-->
							<center><img src="./img/products/Mouse/basiliskv2.jpg" alt="" width="250" height="200">
							</center>
							<h5 class="product-name">Razer Basilisk V2</h5>
							<span class="product-price">₱ 3,863.00 </span>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-caret-right" viewBox="0 0 16 16">
								<path
									d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
							</svg>
                        <p><a href="includes/addtocart.inc.php?id=23&link=mouse.php" class="badge bg-primary">Add to Cart</a></p>
						</div>
					</div>

					<div class="col order-3">
						<div class="bestselling-mouse">
							<!--Razer Abyssus Essentials-->
							<center><img src="./img/products/mouse/ab.png" alt="" width="250" height="200"></center>
							<h5 class="product-name">Razer Abyssus Essentials</h5>
							<span class="product-price">₱ 2,414.00 </span>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
								class="bi bi-caret-right" viewBox="0 0 16 16">
								<path
									d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
							</svg>
                        <p><a href="includes/addtocart.inc.php?id=24&link=mouse.php" class="badge bg-primary">Add to Cart</a></p>
						</div>
					</div>


				</div>
			</div>
		</div>
	</section>
	<!--End of Best Selling Products-->

	<br>
	<br>
	<!--Start Of Gaming Grade Mouses-->
	<section>
		<div class="container mt-5">
			<h2 class="product-heading">GAMING GRADE MOUSE</h2>
			<br>
			<div class="row">
				<!--Row 1 of Gaming Mouse-->

				<div class="col">
					<!--Razer Abyssus-->
					<div class="gaming-grade-mouse">
						<img class="img-fluid" src="./img/products/Mouse/abyssus.png" alt="Thumbnail image">
						<h5 class="product-name">Razer Abyssus</h5>
						<span class="product-price">₱ 1,994.00 </span>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
							class="bi bi-caret-right" viewBox="0 0 16 16">
							<path
								d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
						</svg>
                        <p><a href="includes/addtocart.inc.php?id=25&link=mouse.php" class="badge bg-primary">Add to Cart</a></p>
					</div>
				</div>

				<div class="col">
					<!--Razer Deathadder-->
					<div class="gaming-grade-mouse">
						<img class="img-fluid" src="./img/products/Mouse/deathadder.png" alt="Thumbnail image">
						<h5 class="product-name">Razer Deathadder</h5>
						<span class="product-price">₱ 3,500.00 </span>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
							class="bi bi-caret-right" viewBox="0 0 16 16">
							<path
								d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
						</svg>
                        <p><a href="includes/addtocart.inc.php?id=26&link=mouse.php" class="badge bg-primary">Add to Cart</a></p>
					</div>
				</div>

				<div class="col">
					<!--Razer Viper-->
					<div class="gaming-grade-mouse">
						<img class="img-fluid" src="./img/products/Mouse/razerviper.png" alt="Thumbnail image">
						<h5 class="product-name">Razer Viper</h5>
						<span class="product-price">₱ 8,800.00 </span>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
							class="bi bi-caret-right" viewBox="0 0 16 16">
							<path
								d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
						</svg>
                        <p><a href="includes/addtocart.inc.php?id=27&link=mouse.php" class="badge bg-primary">Add to Cart</a></p>
					</div>
				</div>

				<div class="col">
					<!--Razer Atheris Quarts-->
					<div class="gaming-grade-mouse">
						<img class="img-fluid" src="./img/products/Mouse/atherisquarts.png" alt="Thumbnail image">
						<h5 class="product-name">Razer Atheris Quarts</h5>
						<span class="product-price">₱ 1,999.00 </span>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
							class="bi bi-caret-right" viewBox="0 0 16 16">
							<path
								d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
						</svg>
                        <p><a href="includes/addtocart.inc.php?id=28&link=mouse.php" class="badge bg-primary">Add to Cart</a></p>
					</div>
				</div>

			</div>

			<br>

			<div class="row">
				<!--Row 2 of Gaming Mouse-->

				<div class="col">
					<!--Acer Predator Cestus 500-->
					<div class="gaming-grade-mouse">
						<img class="img-fluid" src="./img/products/Mouse/predatorcestus500.png"
							alt="Thumbnail image">
						<h5 class="product-name">Acer Predator Cestus 500</h5>
						<span class="product-price">₱ 4,499.00 </span>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
							class="bi bi-caret-right" viewBox="0 0 16 16">
							<path
								d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
						</svg>
                        <p><a href="includes/addtocart.inc.php?id=29&link=mouse.php" class="badge bg-primary">Add to Cart</a></p>
					</div>
				</div>

				<div class="col">
					<!--Acer Predator Cestus 310-->
					<div class="gaming-grade-mouse">
						<img class="img-fluid" src="./img/products/Mouse/predator cestus310.png"
							alt="Thumbnail image">
						<h5 class="product-name">Acer Predator Cestus 310</h5>
						<span class="product-price">₱ 1,699.00 </span>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
							class="bi bi-caret-right" viewBox="0 0 16 16">
							<path
								d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
						</svg>
                        <p><a href="includes/addtocart.inc.php?id=30&link=mouse.php" class="badge bg-primary">Add to Cart</a></p>
					</div>
				</div>

				<div class="col">
					<!--Acer Predator Cestus-->
					<div class="gaming-grade-mouse">
						<img class="img-fluid" src="./img/products/Mouse/predator cestus.png" alt="Thumbnail image">
						<h5 class="product-name">Acer Predator Cestus</h5>
						<span class="product-price">₱ 1,435.00 </span>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
							class="bi bi-caret-right" viewBox="0 0 16 16">
							<path
								d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
						</svg>
                        <p><a href="includes/addtocart.inc.php?id=31&link=mouse.php" class="badge bg-primary">Add to Cart</a></p>
					</div>
				</div>

				<div class="col">
					<!--Logitect G502 Lightspeed-->
					<div class="gaming-grade-mouse">
						<img class="img-fluid" src="./img/products/Mouse/Logitechg502Lightspeed.png"
							alt="Thumbnail image">
						<h5 class="product-name">Logitect G502 Lightspeed</h5>
						<span class="product-price">₱ 6,595.00 </span>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
							class="bi bi-caret-right" viewBox="0 0 16 16">
							<path
								d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
						</svg>
                        <p><a href="includes/addtocart.inc.php?id=32&link=mouse.php" class="badge bg-primary">Add to Cart</a></p>
					</div>
				</div>


			</div>
		</div>
	</section>
	<!--End Of Gaming Grade Mouses-->




<?php
    require_once("footer.php");
?>