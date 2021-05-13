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
        <div class="container border rounded shadow p-5 my-5">
            <center>
                <img src="./img/pb.png" alt="Pulse Bytes">
                <p><br>
                <h3>About Us!</h3>
                <br> <b>
                Hello Friends, <br>
                Welcome To Pulse Bytes Pulse Bytes is a <br>
                Professional Merchandise Platform. <br>
                Here we will provide you only interesting content, <br>
                which you will like very much. We're dedicated <br>
                to providing you the best of Merchandise, with <br>
                a focus on dependability and Quality Products. <br>
                We're working to turn our passion for <br>
                Merchandise into a booming online website.<br>
                We hope you enjoy our Merchandise as much as <br>
                we enjoy offering them to you. We will keep <br>
                posting more important posts/updates on our <br>
                Website for all of you. <br>
                Please give your support and love.<br>
                <br>
                Thanks For Visiting Our Site<br>
                Contact Us!<br>
                0956-899-0811<br>
                mail@pulsebytes.com<br>
                </b> </p>
            </center>
        </div>
    </section>

<?php
    require_once("footer.php");
?>