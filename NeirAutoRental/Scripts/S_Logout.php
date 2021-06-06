<?php

session_start();
$_SESSION["ID_User"] = null;
header("Location: ../Home.php");