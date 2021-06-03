<?php require "DatabaseConfig.php";

//<editor-fold desc="Display Profile Comment">
function DisplayProfileComments($ID_Client, $CommentType) {
    try {
        $commentIDs_Result = SQL_GetProfileCommentID($ID_Client);
        if ($commentIDs_Result->num_rows > 0) {
            $rows = $commentIDs_Result->num_rows;
            do {
                $commentIDs = $commentIDs_Result->fetch_assoc();
                echo implode("  ", $commentIDs);

                $comment_result = SQL_GetComment($commentIDs["ID_Comment"], $CommentType);
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

function SQL_GetProfileCommentID($ID_User) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT ID_Comment FROM neirautorental.profilecomments WHERE ID_User = ?");
    $stmt->bind_param("i", $ID_User);
    $stmt->execute();
    return $stmt->get_result();
}

function SQL_GetComment($ID_Comment, $CommentType) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.comments WHERE ID_Comment = ? AND Type = $CommentType");
    $stmt->bind_param("i", $ID_Comment);
    $stmt->execute();
    return $stmt->get_result();
}
//</editor-fold>


//<editor-fold desc="Display Offer Comment">
function DisplayOfferComments($ID_Offer, $CommentType) {
    try {
        $commentIDs_Result = SQL_GetOfferCommentID($ID_Offer);
        if ($commentIDs_Result->num_rows > 0) {
            $rows = $commentIDs_Result->num_rows;
            do {
                $commentIDs = $commentIDs_Result->fetch_assoc();

                $comment_result = SQL_GetComment($commentIDs["ID_Comment"], $CommentType);
                if ($comment_result->num_rows > 0) {
                    $comment = $comment_result->fetch_assoc();
                    echo'
                    <div class="single-item">
                        <h4>Name</h4>
                        <p>'. $comment["Content"] .'</p>
                    </div>
                        ';
                    echo implode("  ", $comment);
                }
                $rows--;
            } while ($rows > 0);
        }
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_GetOfferCommentID($ID_Offer) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT ID_Comment FROM neirautorental.offercomments WHERE ID_Offer = ?");
    $stmt->bind_param("i", $ID_Offer);
    $stmt->execute();
    return $stmt->get_result();
}
//</editor-fold>