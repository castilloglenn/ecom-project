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
                    <img src="./img/keyboardbanner.png" alt="PulseBytes Banner" width=100%>
                </div>
            </div>
        </div>
    </section>
    <!--End of Website Banner-->

    <section>
        <div class="container mt-5">
            
            <h2 class="product-heading">PulseBytes Keyboards</h2>
            <br>
            <br>

            <div class="row">

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Keyboard/apex pro tkl.png" alt="Thumbnail image">
                    <h5 class="product-name">SteelSeries Apex Pro Tenkeyless</h5>
                    <span class="product-price">₱ 9,995.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>

                </div>

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Keyboard/apex pro.png" alt="Thumbnail image">
                    <h5 class="product-name">SteelSeries Apex Pro </h5>
                    <span class="product-price">₱ 9,995.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>

                </div>

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Keyboard/apex3.png" alt="Thumbnail image">
                    <h5 class="product-name">SteelSeries Apex 3</h5>
                    <span class="product-price">₱ 3,699.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>

                </div>

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Keyboard/apex5.png" alt="Thumbnail image">
                    <h5 class="product-name">SteelSeries Apex 5</h5>
                    <span class="product-price">₱ 6,295.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>

                </div>

            </div>

            <br>
            <br>
            <br>

            <div class="row">

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Keyboard/blackwidow ultimate.jpg" alt="Thumbnail image">
                    <h5 class="product-name">Razer Blackwidow Ultimate 2016</h5>
                    <span class="product-price">₱ 5,307.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>

                </div>

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Keyboard/blackwidow v3.jpg" alt="Thumbnail image">
                    <h5 class="product-name">Razer Blackwidow V3 Pro</h5>
                    <span class="product-price">₱ 19,734.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>

                </div>

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Keyboard/huntsman elite.jpg" alt="Thumbnail image">
                    <h5 class="product-name">Razer Huntsman Elite</h5>
                    <span class="product-price">₱ 9,650.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>

                </div>

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Keyboard//huntsman.jpg" alt="Thumbnail image">
                    <h5 class="product-name">Razer Huntsman Pro Mercury</h5>
                    <span class="product-price">₱ 13,944.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>
                </div>


            </div>

        </div>
    </section>




<?php
    require_once("footer.php");
?>