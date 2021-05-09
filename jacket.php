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
							<a class="nav-link" href="#">Checkout
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
                    <img src="./img/hoodiebanner.png" alt="PulseBytes Banner" width=100%>
                </div>
            </div>
        </div>
    </section>
    <!--End of Website Banner-->

    <br>

    <section>
        <!--Start of Hoodies-->
        <div class="container mt-5">
            <h2 class="product-heading">PulseBytes Comfortable Hoodies</h2>

            <br>

            <div class="row">
                <!--Row 1 of Hoodies-->

                <div class="col">
                    <!--Eat Sleep Program Repeat Gray-->
                    <div class="hoodies">
                        <img class="img-fluid" src="./img/products/hoodies/eatsleepprogramrepeat.jpg"
                            alt="Thumbnail image">
                        <h5 class="product-name">Eat Sleep Program Repeat Gray</h5>
                        <span class="product-price">₱ 1,999.00 </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>
                    </div>
                </div>

                <div class="col">
                    <!--Eat Sleep Program Repeat Black-->
                    <div class="hoodies">
                        <img class="img-fluid" src="./img/products/hoodies/eatsleepprogramrepeatblack.jpg"
                            alt="Thumbnail image">
                        <h5 class="product-name">Eat Sleep Program Repeat Black</h5>
                        <span class="product-price">₱ 1,999.00</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>
                    </div>
                </div>

                <div class="col">
                    <!--Eat Sleep Program Repeat White-->
                    <div class="hoodies">
                        <img class="img-fluid" src="./img/products/hoodies/eatsleepprogramrepeatgray.jpg"
                            alt="Thumbnail image">
                        <h5 class="product-name">Eat Sleep Program Repeat White</h5>
                        <span class="product-price">₱ 1,999.00</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>

            <div class="row">
                <!--Row 2 of Hoodies-->

                <div class="col">
                    <!--Eat Sleep Program Repeat Light Blue-->
                    <div class="hoodies">
                        <img class="img-fluid" src="./img/products/hoodies/eatsleepprogramrepeatlb.jpg"
                            alt="Thumbnail image">
                        <h5 class="product-name">Eat Sleep Program Repeat Light Blue</h5>
                        <span class="product-price">₱ 1,999.00</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>
                    </div>
                </div>

                <div class="col">
                    <!--Eat Sleep Program Repeat Red-->
                    <div class="hoodies">
                        <img class="img-fluid" src="./img/products/hoodies/eatsleepprogramrepeatred.jpg"
                            alt="Thumbnail image">
                        <h5 class="product-name">Eat Sleep Program Repeat Red</h5>
                        <span class="product-price">₱ 1,999.00 </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>
                    </div>
                </div>

                <div class="col">
                    <!--Eat Sleep Program Repeat Black-->
                    <div class="hoodies">
                        <img class="img-fluid" src="./img/products/hoodies/eatsleepprogramrepeatyg.jpg"
                            alt="Thumbnail image">
                        <h5 class="product-name">Eat Sleep Program Repeat Black</h5>
                        <span class="product-price">₱ 1,999.00</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End of Hoodies-->
    
<?php
    require_once("footer.php");
?>