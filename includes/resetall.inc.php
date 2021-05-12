<?php

session_start();
unset($_SESSION['cart']);
unset($_SESSION['cartmultiples']);
unset($_SESSION['cartlist']);
unset($_SESSION['total_price']);

header("Location: ../".$_REQUEST['link'], TRUE, 301);
die();