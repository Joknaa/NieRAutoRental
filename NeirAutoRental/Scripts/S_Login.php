<?php
include_once "DatabaseConfig.php";
include_once "S_UserManager.php";

// Start the session
session_start();

function Login(){
    $useremail = $_POST['email'];
    $pass = $_POST['password'];

    $stmt = $GLOBALS["Connection"]->prepare("SELECT * FROM neirautorental.users WHERE EMAIL = ?");
    $stmt->bind_param("s", $useremail);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
   
    if ($stmt_result->num_rows > 0) {
        $result = $stmt_result->fetch_assoc();
        if ($result['Password'] === $pass) {
            $_SESSION["ID_User"] = $result["ID_User"];
            header('location: Home.php?id=' . $result["ID_User"]);
            echo "login successfully";
        } else echo "invalide email or password";
    } else echo "invalide email or pass";
}