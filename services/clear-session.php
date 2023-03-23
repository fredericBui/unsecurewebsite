<?php
session_start();
session_destroy();
header("Location: http://localhost/unsecurewebsite/index.php");
die();
