<?php
$hostName = "localhost";
$userName = "root";
$password = "1234";
$database = "neirautorental";
$GLOBALS["Connection"] = mysqli_connect($hostName, $userName, $password, $database);
