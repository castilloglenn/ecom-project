<?php

session_start();
// session_unset();
// session_destroy();
unset($_SESSION['cart']);
unset($_SESSION['cartlist']);
unset($_SESSION['cartmultiples']);

header("Location: ../cart.php", TRUE, 301);
die();