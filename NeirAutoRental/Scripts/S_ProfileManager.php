<?php require "DatabaseConfig.php";

function GetProfileImage($ID_User) {
    try {
        return SQL_GetProfile($ID_User)["Image"];
    } catch (Exception $e) {
        echo $e;
    }
    return null;
}

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
    $imageName = GetUploadedImage($_FILES['file']['name']);
    $stmt = $GLOBALS["Connection"]
        ->prepare("UPDATE neirautorental.users SET FirstName = ?, LastName = ?, City = ?,
        Address = ?, CIN = ?, Phone = ?, Image = ? WHERE ID_User = ?");
    $stmt->bind_param("sssssisi", $_POST["FirstName"], $_POST["LastName"], $_POST["City"], $_POST["Address"],
        $_POST["CIN"], $_POST["Phone"], $imageName, $_POST["ID_User"]);
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

function GetUploadedImage($imageName) {
    $target_dir = "Ressources/Uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    if (in_array($imageFileType, $extensions_arr)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $imageName)) {
            return $imageName;
        } else return null;
    } else return null;
}