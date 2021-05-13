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
                    <img src="./img/mugbanner.png" alt="PulseBytes Banner" width=100%>
                </div>
            </div>
        </div>
    </section>
    <!--End of Website Banner-->

    <br>
    <br>
    <br>

    <section>
        <div class="container mt-5">

            <h2 class="product-heading">PulseBytes Mugs</h2>
            <br>
            <br>

            <div class="row">   <!--Row1-->

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Mug/g1.jpg" alt="Thumbnail image" width="300">
                    <h5 class="product-name">Initialization Mug - Gray</h5>
                    <span class="product-price">₱ 250.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <p><a href="includes/addtocart.inc.php?id=33&link=mug.php" class="badge bg-primary">Add to Cart</a></p>

                </div>

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Mug/g2.jpg" alt="Thumbnail image" width="300">
                    <h5 class="product-name">Initialization Mug - Yellow Green</h5>
                    <span class="product-price">₱ 250.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <p><a href="includes/addtocart.inc.php?id=34&link=mug.php" class="badge bg-primary">Add to Cart</a></p>
                    
                </div>

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Mug/g3.jpg" alt="Thumbnail image" width="300">
                    <h5 class="product-name">Initialization Mug - White</h5>
                    <span class="product-price">₱ 250.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <p><a href="includes/addtocart.inc.php?id=35&link=mug.php" class="badge bg-primary">Add to Cart</a></p>
                    
                </div>

            </div>

            <br>
            <br>


            <div class="row">   <!--Row2-->

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Mug/g4.jpg" alt="Thumbnail image" width="300">
                    <h5 class="product-name">Initialization Mug - Blue Green</h5>
                    <span class="product-price">₱ 250.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <p><a href="includes/addtocart.inc.php?id=36&link=mug.php" class="badge bg-primary">Add to Cart</a></p>

                </div>

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Mug/g5.jpg" alt="Thumbnail image" width="300">
                    <h5 class="product-name">Initialization Mug - Black</h5>
                    <span class="product-price">₱ 250.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <p><a href="includes/addtocart.inc.php?id=37&link=mug.php" class="badge bg-primary">Add to Cart</a></p>
                    
                </div>

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Mug/p1.jpg" alt="Thumbnail image" width="300">
                    <h5 class="product-name">Syntax Mug - Blue Green</h5>
                    <span class="product-price">₱ 250.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <p><a href="includes/addtocart.inc.php?id=38&link=mug.php" class="badge bg-primary">Add to Cart</a></p>
                    
                </div>

            </div>

            <br>
            <br>

            <div class="row">   <!--Row3-->

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Mug/p2.jpg" alt="Thumbnail image" width="300">
                    <h5 class="product-name">Syntax Mug - Black</h5>
                    <span class="product-price">₱ 250.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <p><a href="includes/addtocart.inc.php?id=39&link=mug.php" class="badge bg-primary">Add to Cart</a></p>

                </div>

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Mug/p3.jpg" alt="Thumbnail image" width="300">
                    <h5 class="product-name">Syntax Mug - Gray</h5>
                    <span class="product-price">₱ 250.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <p><a href="includes/addtocart.inc.php?id=40&link=mug.php" class="badge bg-primary">Add to Cart</a></p>
                    
                </div>

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Mug/p4.jpg" alt="Thumbnail image" width="300">
                    <h5 class="product-name">Syntax Mug - White</h5>
                    <span class="product-price">₱ 250.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <p><a href="includes/addtocart.inc.php?id=41&link=mug.php" class="badge bg-primary">Add to Cart</a></p>
                    
                </div>

            </div>
            
            

        </div>
    </section>




<?php
    require_once("footer.php");
?>