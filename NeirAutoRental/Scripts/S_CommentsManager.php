<?php require "DatabaseConfig.php";

//<editor-fold desc="Display Comment">
function SQL_GetProfileCommentID($ID_User) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT ID_Comment FROM neirautorental.profilecomments WHERE ID_User = ?");
    $stmt->bind_param("i", $ID_User);
    $stmt->execute();
    return $stmt->get_result();
}

function SQL_GetOfferCommentID($ID_Offer) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT ID_Comment FROM neirautorental.offercomments WHERE ID_Offer = ?");
    $stmt->bind_param("i", $ID_Offer);
    $stmt->execute();
    return $stmt->get_result();
}

function SQL_GetComment($ID_Comment) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.comments WHERE ID_Comment = ?");
    $stmt->bind_param("i", $ID_Comment);
    $stmt->execute();
    return $stmt->get_result();
}
//</editor-fold>