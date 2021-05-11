<?php

session_start();
session_unset();
session_destroy();

header("Location: ../".$_REQUEST['link'], TRUE, 301);
die();