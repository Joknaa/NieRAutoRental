<?php require "DatabaseConfig.php";

//<editor-fold desc="Display Requests">
function SQL_GetAllRequests($ID_Partner) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT req.* FROM neirautorental.requests req JOIN neirautorental.offers off ON req.ID_Offer = off.ID_Offer WHERE off.ID_User = ". $ID_Partner ." AND Status = 'Waiting'");
    $stmt->execute();
    return $stmt->get_result();
}

function SQL_GetUser($ID_User) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.users WHERE ID_User = ?");
    $stmt->bind_param("i", $ID_User);
    $stmt->execute();
    return $stmt->get_result();
}
//</editor-fold>

//<editor-fold desc="Confirm Request">
function ConfirmRequest($ID_Request, $Status) {
    try {
        SQL_UpdateRequest($ID_Request, $Status);
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_UpdateRequest($ID_Request, $Status) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("UPDATE neirautorental.requests SET Status = ?  WHERE ID_Request = ?");
    $stmt->bind_param("si", $Status, $ID_Request);
    $stmt->execute();
}
//</editor-fold>

//<editor-fold desc="Add Request">
function AddRequest($ID_Offer, $ID_User) {
    try {
        SQL_AddRequest($ID_Offer, $ID_User);
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_AddRequest($ID_Offer, $ID_User) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("INSERT INTO neirautorental.requests(ID_User, ID_Offer, Status) VALUES(?, ?, 'Waiting')");
    $stmt->bind_param("ii", $ID_User, $ID_Offer);
    $stmt->execute();
}
//</editor-fold>
