<?php require "DatabaseConfig.php";

function DisplayRequests($ID_Partner) {
    try {
        $allRequests_result = SQL_GetAllRequests($ID_Partner);
        if ($allRequests_result->num_rows > 0) {
            $rows = $allRequests_result->num_rows;
            do {
                $requests = $allRequests_result->fetch_assoc();
                $user_result = SQL_GetUser($requests["ID_User"]);
                if ($user_result->num_rows > 0) {
                    $user = $user_result->fetch_assoc();



                    echo '
                    <div class="columns" >
                        <ul class="price" >
                            <li class="header" ><img src = "../Ressources/Images/AudiQ5.jpg" alt = "Q5" style = "width:100%" ></li >
                            <li class="grey" > Client name: ' . $user["FirstName"] . ' ' . $user["LastName"] . ' </li >
                            <li > Clients rate:  </li >
                            <li > Offer ID: ' . $requests["ID_Offer"] . ' </li >
                              <form action="Confirmation.php" method="POST">
                                <li class="grey" ><input type="input" class="button" name="ID_Request" value="' . $requests["ID_Request"] . '"  ></li>
                                <li class="grey" ><input type="submit" class="button" name="Accept" value="Accept"></li >
                                <li class="grey" ><input type="submit" class="button" name="Deny" value="Deny"></li >
                            </form>
                         </ul >
                    </div >';
                }
                $rows--;
            } while ($rows > 0);
        }
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_GetAllRequests($ID_Partner) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT req.* FROM neirautorental.requests req JOIN neirautorental.offers off ON req.ID_Offer = off.ID_Offer WHERE off.ID_User = ? AND Status = 'Waiting'");
    $stmt->bind_param("i", $ID_Partner);
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
