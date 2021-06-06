<?php
include_once "DatabaseConfig.php";
include_once "S_UserManager.php";


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
            session_start();

            $_SESSION["ID_User"] = $result["ID_User"];
            $_SESSION["UserType"] = $result["userType"];

            if ($_SESSION["UserType"] == "partner") header('location: Partner_Index.php');
            else if ($_SESSION["UserType"] == "client") header('location: Client_Index.php');
        } else echo "invalide email or password";
    } else echo "invalide email or pass";
}