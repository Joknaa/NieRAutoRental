<?php
$GLOBALS["conn"] = mysqli_connect("localhost", "root", "oknaa", "neirautorental");
if ($GLOBALS["conn"]->connect_error) die("failed to connect :" . $GLOBALS["conn"]->connect_error);
?>