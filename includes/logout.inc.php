<?php

session_start();
session_unset();
session_destroy();

header("Location: ../index.php", TRUE, 301);
die();