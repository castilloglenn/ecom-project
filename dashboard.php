<?php
    require_once("header.php");
    if ($_SESSION['name'] == "GUEST") {
        header("Location: login.php", TRUE, 301);
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
										<a class=\"nav-link active\" href=\"dashboard.php\">Dashboard</a>
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


<?php
    $check = $conn->query("SELECT * FROM customer WHERE customer_id=".$_SESSION['name']);
    $result = $check->fetch_assoc();
    $_SESSION['detail'] = $result;
?>
<section>
    <div class="container"> <br>
        <div class="row d-flex justify-content-between">
            <div class="col-md-6">
                <h3><i class="fas fa-tachometer-alt"></i> Dashboard</h3>
            </div>
            <div class="col-md-6 text-end">
                <h5>Welcome, <?php echo $_SESSION['detail']['name']; ?> 
                    <a class="btn btn-danger ms-2" href="includes/logout.inc.php" role="button">Log out</a>
                </h5>
            </div>
        </div>
        
        <div class="container border rounded shadow mt-4 p-5">
            <h3><i class="fas fa-file-invoice"></i> Transactions</h3>
            <?php
                $fetchall = $conn->query("SELECT * FROM transaction WHERE customer_id=".$_SESSION['name']);
                if ($fetchall->num_rows > 0) {
                    echo "
                    <table class=\"table table-striped justify-content-center align-items-center text-center\">
                        <thead>
                            <tr>
                                <th scope=\"col\">Tracking</th>
                                <th scope=\"col\">Date Ordered</th>
                                <th scope=\"col\">Receipt</th>
                                <th scope=\"col\">Status</th>
                            </tr>
                        </thead>
                        <tbody>";
                    while ($row = $fetchall->fetch_assoc()) {
                        echo "
                        <tr>
                            <td>".$row['transaction_id']."</td>
                            <td>".$row['record_date']."</td>
                            <td><a href=\"view.php?id=".$row['transaction_id']."\" class=\"link-primary\">View Receipt</a></td>
                            <td>".$row['status']."</td>
                        </tr>
                        ";
                    }
                    echo "
                        </tbody>
                    </table>
                    ";
                } else {
                    echo "
                        <center>
                            <h3 class=\"p-5\">No transactions recorded yet, purchase now!</h3>
                        </center>
                    ";
                }
            ?>
        </div>
        <div class="container border rounded shadow mt-4 p-5">
            <h3><i class="fas fa-user-alt"></i>  Account Information</h3>
            <form enctype="multipart/form-data" method="POST" action="includes/save.inc.php">
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
                    <input type="text" class="form-control m-0" name="username" placeholder="No spaces and special characters, <= 5 chars" 
                            <?php
                                echo " value=".str_replace(" ","&nbsp;",$_SESSION['detail']['username']).">";
                            ?> 
                </div>
                <div class="mb-3 mt-4">
                    <b><label for="pass" class="form-label">Change Password</label></b>
                    <input type="password" class="form-control m-0" name="pass" placeholder="Must be strong, secured password">
                </div>
                <div class="mb-3 mt-4">
                    <b><label for="vpass" class="form-label">Verify Password</label></b>
                    <input type="password" class="form-control m-0" name="vpass" placeholder="Must match the password">
                </div>
                <div class="mb-3 mt-4">
                    <b><label for="name" class="form-label">Name</label></b>
                    <input type="text" class="form-control m-0" name="name" placeholder="Enter your full name" 
                            <?php
                                echo " value=".str_replace(" ","&nbsp;",$_SESSION['detail']['name']).">";
                            ?> 
                </div>
                <div class="mb-3">
                    <b><label for="address" class="form-label">Address</label></b>
                    <input type="text" class="form-control m-0" name="address" placeholder="Enter your full address" 
                            <?php
                                echo " value=".str_replace(" ","&nbsp;",$_SESSION['detail']['address']).">";
                            ?> 
                </div>
                <div class="mb-3">
                    <b><label for="contact" class="form-label">Contact Number</label></b>
                    <input type="text" class="form-control m-0" name="contact" placeholder="Enter your contact number" 
                            <?php
                                echo " value=".str_replace(" ","&nbsp;",$_SESSION['detail']['contact_no']).">";
                            ?> 
                </div>
                <div class="mb-3">
                    <b><label for="id" class="form-label">Valid ID</label></b> <br>
                    <img src="<?php echo $_SESSION['detail']['id'] ?>" width="75%" height="25%">
                    <input type="file" class="form-control m-0 mt-4" name="id">
                </div>
                
                <center>
                    <input type="submit" class="btn btn-success mt-4 px-5" name="submit" value="Save Changes">
                </center>
            </form>
        </div>
    </div>
</section>
    
<?php
    require_once("footer.php");
?>