<?php require "DatabaseConfig.php";

function GetProfile($ID_User) {
    try {
        return SQL_GetProfile($ID_User);
    } catch (Exception $e) {
        echo $e;
    }
    return null;
}

function SQL_GetProfile($ID_User) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.users WHERE ID_User = ?");
    $stmt->bind_param("i", $ID_User);
    $stmt->execute();
    $profile_result = $stmt->get_result();
    if ($profile_result->num_rows > 0) {
        return $profile_result->fetch_assoc();
    }
    return null;
}

function UpdateProfile() {
    try {
        SQL_UpdateProfile();
        if (PasswordUpdated()) {
            SQL_UpdatePassword();
        }
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_UpdateProfile() {
    $stmt = $GLOBALS["Connection"]
        ->prepare("UPDATE neirautorental.users SET FirstName = ?, LastName = ?, City = ?,
        Address = ?, CIN = ?, Phone = ? WHERE ID_User = ?");
    $stmt->bind_param("sssssii", $_POST["FirstName"], $_POST["LastName"], $_POST["City"], $_POST["Address"],
        $_POST["CIN"], $_POST["Phone"], $_POST["ID_User"]);
    $stmt->execute();
}

function PasswordUpdated() {
    if (isset($_POST["Password"]) and isset($_POST["PasswordRepeat"])) {
        if (($_POST["Password"] == $_POST["PasswordRepeat"]) and $_POST["Password"] != null) {
            return true;
        }
    } else return false;
}

function SQL_UpdatePassword() {
    $stmt = $GLOBALS["Connection"]
        ->prepare("UPDATE neirautorental.users SET Password = ? WHERE ID_User = ?");
    $stmt->bind_param("si", $_POST["Password"], $_POST["ID_User"]);

    echo $stmt->execute();

}