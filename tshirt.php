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
                    <img src="./img/tshirtbanner.png" alt="PulseBytes Banner" width=100%>
                </div>
            </div>
        </div>
    </section>
    <!--End of Website Banner-->

    <section> <!--Start of Exclusive Tshirts-->
        <div class="container mt-5">

            <h2 class="product-heading">PulseBytes Exclusive T-Shirts</h2>
            <br>
            <br>

            <div class="row">
                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Tshirt/glenn-t.png" alt="Thumbnail image" width="300">
                    <h5 class="product-name">I Love Programming Tee</h5>
                    <span class="product-price">₱ 1000.00 </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        <a href="includes/addtocart.inc.php?id=5&link=tshirt.php" class="badge bg-primary">Add to Cart</a>
                </div>

                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Tshirt/seb-t.png" alt="Thumbnail image" width="300">
                    <h5 class="product-name">Ram Provider Iron Golem Tee</h5>
                    <span class="product-price">₱ 1000.00 </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>

                </div>
                
                <div class="col-sm">
                    <img class="img-fluid" src="./img/products/Tshirt/p-ernest-t.png" alt="Thumbnail image" width="300">
                    <h5 class="product-name">Lipunan Tee</h5>
                    <span class="product-price">₱ 1000.00 </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>

                </div>
                
            </div>

        </div>
    </section> <!--End of Exclusive Tshirts-->


    <section>
    <div class="container mt-5">

        <h2 class="product-heading">PulseBytes Stylish T-Shirts</h2>
            <br>
            <br>

        <div class="row"> <!--Row 1 of Tshirts-->

                <div class="col-sm">

                    <div class="shirts">
                        <img class="img-fluid" src="./img/products/Tshirt/1black.jpg" alt="Thumbnail image">
                        <h5 class="product-name">Every Programmer is an Author - Black</h5>
                        <span class="product-price">₱ 750.00 </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>
                    </div>

                </div>

                <div class="col-sm">

                    <div class="shirts">
                        <img class="img-fluid" src="./img/products/Tshirt/1lb.jpg" alt="Thumbnail image">
                        <h5 class="product-name">Every Programmer is an Author - Light Blue</h5>
                        <span class="product-price">₱ 750.00 </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>
                    </div>
                    
                </div>

                <div class="col-sm">

                    <div class="shirts">
                        <img class="img-fluid" src="./img/products/Tshirt/1red.jpg" alt="Thumbnail image">
                        <h5 class="product-name">Every Programmer is an Author - Red</h5>
                        <span class="product-price">₱ 750.00 </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>
                    </div>
                    
                </div>

                <div class="col-sm">

                    <div class="shirts">
                        <img class="img-fluid" src="./img/products/Tshirt/1white.jpg" alt="Thumbnail image">
                        <h5 class="product-name">Every Programmer is an Author - White</h5>
                        <span class="product-price">₱ 750.00 </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>
                    </div>
                    
                </div>

                <div class="col-sm">

                    <div class="shirts">
                        <img class="img-fluid" src="./img/products/Tshirt/1yg.jpg" alt="Thumbnail image">
                        <h5 class="product-name">Every Programmer is an Author - Yellow Green</h5>
                        <span class="product-price">₱ 750.00 </span>
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
        <br>

        <div class="row">

                <div class="col-sm">
                    <div class="shirts">
                        <img class="img-fluid" src="./img/products/Tshirt/2lb.jpg" alt="Thumbnail image">
                        <h5 class="product-name">God is Real Unless Declared - Light Blue </h5>
                        <span class="product-price">₱ 750.00 </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="shirts">
                        <img class="img-fluid" src="./img/products/Tshirt/2red.jpg" alt="Thumbnail image">
                        <h5 class="product-name">God is Real Unless Declared - Red </h5>
                        <span class="product-price">₱ 750.00 </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="shirts">
                        <img class="img-fluid" src="./img/products/Tshirt/2yg.jpg" alt="Thumbnail image">
                        <h5 class="product-name">God is Real Unless Declared - Yellow Green </h5>
                        <span class="product-price">₱ 750.00 </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="shirts">
                        <img class="img-fluid" src="./img/products/Tshirt/2black.jpg" alt="Thumbnail image">
                        <h5 class="product-name">God is Real Unless Declared - Black </h5>
                        <span class="product-price">₱ 750.00 </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="shirts">
                        <img class="img-fluid" src="./img/products/Tshirt/2white.jpg" alt="Thumbnail image">
                        <h5 class="product-name">God is Real Unless Declared - White </h5>
                        <span class="product-price">₱ 750.00 </span>
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
        <br>

        <div class="row">

            <div class="col-sm">
                <div class="shirts">
                    <img class="img-fluid" src="./img/products/Tshirt/3white.jpg" alt="Thumbnail image">
                    <h5 class="product-name">Coffee Lover Programmer - White </h5>
                    <span class="product-price">₱ 750.00 </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>

                </div>
            </div>

            <div class="col-sm">
                <div class="shirts">
                <img class="img-fluid" src="./img/products/Tshirt/3black.jpg" alt="Thumbnail image">
                <h5 class="product-name">Coffee Lover Programmer - Black </h5>
                <span class="product-price">₱ 750.00 </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>

                </div>
            </div>

            <div class="col-sm">
                <div class="shirts">
                <img class="img-fluid" src="./img/products/Tshirt/3red.jpg" alt="Thumbnail image">
                <h5 class="product-name">Coffee Lover Programmer - Red </h5>
                <span class="product-price">₱ 750.00 </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>

                </div>
            </div>

            <div class="col-sm">
                <div class="shirts">
                <img class="img-fluid" src="./img/products/Tshirt/3lb.jpg" alt="Thumbnail image">
                <h5 class="product-name">Coffee Lover Programmer - Light Blue </h5>
                <span class="product-price">₱ 750.00 </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path
                                    d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                            </svg>
                        <a href="#" class="badge bg-primary">Add to Cart</a>

                </div>
            </div>

            <div class="col-sm">
                <div class="shirts">
                <img class="img-fluid" src="./img/products/Tshirt/3yg.jpg" alt="Thumbnail image">
                <h5 class="product-name">Coffee Lover Programmer - Yellow Green </h5>
                <span class="product-price">₱ 750.00 </span>
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




<?php
    require_once("footer.php");
?>