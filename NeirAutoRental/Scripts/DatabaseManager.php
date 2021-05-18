<?php
$hostName = "localhost";
$userName = "root";
$password = "oknaa";
$database = "neirautorental";
$GLOBALS["Connection"] = mysqli_connect($hostName, $userName, $password, $database);


//<editor-fold desc="Edit_Profile">
function UpdateProfile(){
    try {
        SQL_UpdateProfile();
    }catch (Exception $e){
        echo $e;
    }
}
function SQL_UpdateProfile(){
    $stmt = $GLOBALS["Connection"]
        ->prepare("UPDATE neirautorental.users SET FirstName = ? AND LastName = ? AND City = ? 
                                              AND Address = ? AND CIN = ? AND Phone = ? WHERE ID_User = ?");
    $stmt->bind_param("ssssiii", $_POST["NOM_CLIENT"], $_POST["PRENOM_CLIENT"], $_POST["VILLE_CLIENT"],
        $_POST["ADRESSE_CLIENT"], $_POST["CIN"], $_POST["TELEPHONE_CLIENT"], $_POST["ID_User"]);
    $stmt->execute();
}
//</editor-fold>
//<editor-fold desc="Edit_Offer">
function UpdateOffer(){
    try {
        $ID_Car = SQL_GetCarID($_POST["ID_Offer"]);
        SQL_UpdateCar($ID_Car);
        SQL_UpdateOffer();
    } catch (Exception $e) {
        echo $e;
    }
}
function SQL_UpdateOffer(){
    $stmt = $GLOBALS["Connection"]
        ->prepare("UPDATE neirautorental.offers SET Availability = ? AND Date_Start = ? AND Date_End = ? AND Hour_Start = ? 
                                                    AND Hour_End = ? WHERE ID_User = ?");
    $stmt->bind_param("siiiii", $_POST["Availability"], $_POST["Date_Start"], $_POST["Date_End"], $_POST["Hour_Start"],
        $_POST["Hour_End"], $_POST["ID_User"]);
    $stmt->execute();
}
function SQL_GetCarID($ID_Car){
    $stmt = $GLOBALS["Connection"]->prepare("SELECT ID_CAR FROM neirautorental.offers WHERE ID_Offer = ?");
    $stmt->bind_param("i", $ID_Car);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    return $stmt_result->fetch_assoc()["ID_Car"];
}
function SQL_UpdateCar($ID_Car){
    $stmt = $GLOBALS["Connection"]
        ->prepare("UPDATE neirautorental.cars SET Brand = ? AND Model = ? AND Year = ? AND Price = ? AND Mileage = ? 
                                           AND Color = ? AND VIN = ? AND Category = ?  WHERE ID_Car = ?");
    $stmt->bind_param("siiiii", $_POST["Brand"], $_POST["Model"], $_POST["Year"], $_POST["Price"],
        $_POST["Mileage"], $_POST["Color"], $_POST["VIN"], $_POST["Category"], $ID_Car);
    $stmt->execute();
}
//</editor-fold>
//<editor-fold desc="Confirm_Request">
function ConfirmRequest(){
    try {
        SQL_UpdateRequest();
    } catch (Exception $e) {
        echo $e;
    }
}
function SQL_UpdateRequest(){
    $stmt = $GLOBALS["Connection"]
        ->prepare("UPDATE neirautorental.requests SET Status = 'InUse'  WHERE ID_Request = ?");
    $stmt->bind_param("i", $_POST["ID_Request"])
        ->execute();
}
//</editor-fold>
//<editor-fold desc="Show_Offers">
function DisplayOffers($ID_User){
    try {
        $allOffers_result = SQL_GetAllOffers($ID_User);

        if ($allOffers_result->num_rows > 0) {
            $rows = $allOffers_result->num_rows;
            do {
                $offer = $allOffers_result->fetch_assoc();
                echo implode("  ", $offer);

                DisplayOfferCar($offer["ID_Car"]);
                $rows--;
            } while ($rows > 0);
        }
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_GetAllOffers($ID_User){
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.offers WHERE ID_User = ?");
    $stmt->bind_param("i", $ID_User);
    $stmt->execute();
    return $stmt->get_result();
}
function DisplayOfferCar($ID_Car){
    $car_result = SQL_GetCar($ID_Car);
    if ($car_result->num_rows > 0) {
        $car = $car_result->fetch_assoc();
        echo implode("  ", $car);
    }
}
function SQL_GetCar($ID_Car){
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.cars WHERE ID_Car = ?");
    $stmt->bind_param("i", $ID_Car);
    $stmt->execute();
    return $stmt->get_result();
}
//</editor-fold>
//<editor-fold desc="Show_Profile_Comments">
function DisplayComments($ID_Client){
    try {
        $commentIDs_Result = SQL_GetProfileCommentID($ID_Client);
        if ($commentIDs_Result->num_rows > 0) {
            $rows = $commentIDs_Result->num_rows;
            do {
                $commentIDs = $commentIDs_Result->fetch_assoc();
                echo implode("  ", $commentIDs);

                $comment_result = SQL_GetComment($commentIDs["ID_Comment"]);
                if ($comment_result->num_rows > 0) {
                    $comment = $comment_result->fetch_assoc();
                    echo implode("  ", $comment);
                }
                $rows--;
            } while ($rows > 0);
        }
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_GetProfileCommentID($ID_User){
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT ID_Comment FROM neirautorental.profilecomments WHERE ID_User = ?");
    $stmt->bind_param("i", $ID_User);
    $stmt->execute();
    return $stmt->get_result();
}
function SQL_GetComment($ID_Comment){
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.comments WHERE ID_Comment = ?");
    $stmt->bind_param("i", $ID_Comment);
    $stmt->execute();
    return $stmt->get_result();
}
//</editor-fold>
