<?php 
    session_start();
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
                    <a class="navbar-brand" href="index.php">
                        <img src="./img/pb.png" alt="PulseBytes" width="150">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">