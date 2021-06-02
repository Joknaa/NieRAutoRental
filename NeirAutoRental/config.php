<?php 

$server = "localhost";
$username = "root";
$password = "1234";
$database = "comment_system_tutorial";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>