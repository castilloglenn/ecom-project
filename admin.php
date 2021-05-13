<?php
    session_start();
    if ($_SESSION['name'] != 100) {
        header('Location: ./includes/logout.inc.php', TRUE, 301);
        die();
    }
    $_SESSION['name'] = (isset($_SESSION['name'])) ? $_SESSION['name'] : 'GUEST';
    $_SESSION['cart'] = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : 0;
    $_SESSION['cartmultiples'] = (isset($_SESSION['cartmultiples'])) ? $_SESSION['cartmultiples'] : 0;
    $_SESSION['total_price'] = (isset($_SESSION['total_price'])) ? $_SESSION['total_price'] : 0;
	require_once("includes/dbstart.inc.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="Pulse Bytes merchandises and fan collectible items sold here! Catch up our newest discounts and deals every month!">
	<meta name="keywords" content="pulse bytes, pulse bytes merch, technology stuff, tech merch, pulse butes tshirts">

	<link rel="stylesheet" type="text/css" href="./style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
    <link rel="icon" href="./img/icon.ico">

	<title>PulseBytes | Merch Shop</title>
</head>

    <body>
        <section>
            <!-- NAVIGATION PANEL -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="admin.php">
                        <img src="./img/pb.png" alt="PulseBytes" width="150">
                    </a>
				</div>
			</div>
		</nav>
	</section>
    <!-- END OF NAVIGATION PANEL -->

    <section>
        <div class="container"> <br>
            <div class="row d-flex justify-content-between">
                <div class="col-md-6">
                    <h3><i class="fas fa-user-cog"></i> Administration Panel</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a class="btn btn-danger ms-2" href="includes/logout.inc.php" role="button">Log out</a>
                </div>
            </div>
            
            <div class="container border rounded shadow mt-4 p-5">
                
            </div>
        </div>
    </section>











	<script src="script/bootstrap.bundle.min.js"></script>
	<script src="script/fontawesome.js"></script>
	<script src="script/script.js"></script>
    </body>

</html>