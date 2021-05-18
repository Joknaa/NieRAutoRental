<?php
$hostName = "localhost";
$userName = "root";
$password = "oknaa";
$database = "neirautorental";
$Connection = mysqli_connect($hostName, $userName, $password, $database);


function Profile_Edit(mysqli $Connection){
    $stmt = $Connection->prepare("UPDATE neirautorental.users SET FirstName = ? AND LastName = ? AND City = ? 
                                              AND Address = ? AND CIN = ? AND Phone = ?
                                        WHERE ID_User = ?");
    $stmt->bind_param("ssssiii", $_POST["NOM_CLIENT"], $_POST["PRENOM_CLIENT"], $_POST["VILLE_CLIENT"],
        $_POST["ADRESSE_CLIENT"], $_POST["CIN"], $_POST["TELEPHONE_CLIENT"], $_POST["id_client"]);
    $stmt->execute();
}



