<?php
$hostName = "localhost";
$userName = "root";
$password = "oknaa";
$database = "neirautorental";
$GLOBALS["Connection"] = mysqli_connect($hostName, $userName, $password, $database);


//<editor-fold desc="Edit_Profile">
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
            echo "insid first if";
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

//</editor-fold>
//<editor-fold desc="Edit_Offer">
function UpdateOffer() {
    try {
        $ID_Car = SQL_GetCarID($_POST["ID_Offer"]);
        SQL_UpdateCar($ID_Car);
        SQL_UpdateOffer();
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_UpdateOffer() {
    $stmt = $GLOBALS["Connection"]
        ->prepare("UPDATE neirautorental.offers SET Availability = ?, Date_Start = ?, Date_End = ?, Hour_Start = ?,
                                                    Hour_End = ? WHERE ID_User = ?");
    $stmt->bind_param("siiiii", $_POST["Availability"], $_POST["Date_Start"], $_POST["Date_End"], $_POST["Hour_Start"],
        $_POST["Hour_End"], $_POST["ID_User"]);
    $stmt->execute();
}

function SQL_GetCarID($ID_Car) {
    $stmt = $GLOBALS["Connection"]->prepare("SELECT ID_CAR FROM neirautorental.offers WHERE ID_Offer = ?");
    $stmt->bind_param("i", $ID_Car);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    return $stmt_result->fetch_assoc()["ID_Car"];
}

function SQL_UpdateCar($ID_Car) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("UPDATE neirautorental.cars SET Brand = ?, Model = ?, Price = ?, Mileage = ?,
                                        Color = ?, Category = ?  WHERE ID_Car = ?");
    $stmt->bind_param("siii", $_POST["Brand"], $_POST["Model"], $_POST["Price"],
        $_POST["Mileage"], $_POST["Color"], $_POST["Category"], $ID_Car);
    $stmt->execute();
}

//</editor-fold>
//<editor-fold desc="Show&Confirm_Request">
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

//</editor-fold>
//<editor-fold desc="Show_Offers_List">
function DisplayOffers($ID_User) {
    try {
        $allOffers_result = SQL_GetAllOffers($ID_User);

        if ($allOffers_result->num_rows > 0) {
            $rows = $allOffers_result->num_rows;
            do {
                $offer = $allOffers_result->fetch_assoc();

                $car_result = SQL_GetCar($offer["ID_Car"]);
                if ($car_result->num_rows > 0) {
                    $car = $car_result->fetch_assoc();
                    echo '
                    <div class="columns">
                        <ul class="price">
                            <li class="header"><img src="Ressources/Images/'. $car["Image"].'" alt="Snow" style="width:100%"></li>
                            <li class="grey">' . $car["Price"] . ' DH/Hour</li>
                            <li>Brand: ' . $car["Brand"] . ' - ' . $car["Model"] . '</li>
                            <li>' . $offer["Description"] . '</li>
                            <li class="grey"><a href="#" class="button">Read more</a></li>
                        </ul>
                    </div>';
                }
                $rows--;
            } while ($rows > 0);
        }
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_GetAllOffers($ID_User) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.offers WHERE ID_User = ?");
    $stmt->bind_param("i", $ID_User);
    $stmt->execute();
    return $stmt->get_result();
}

function SQL_GetCar($ID_Car) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.cars WHERE ID_Car = ?");
    $stmt->bind_param("i", $ID_Car);
    $stmt->execute();
    return $stmt->get_result();
}

//</editor-fold>
//<editor-fold desc="Show_Profile_Comments">
function DisplayComments($ID_Client) {
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

function SQL_GetProfileCommentID($ID_User) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT ID_Comment FROM neirautorental.profilecomments WHERE ID_User = ?");
    $stmt->bind_param("i", $ID_User);
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
//<editor-fold desc="Show_Offer">
function DisplayOffer() {
    try {
        $profile_result = SQL_GetOffer($_POST["ID_Offer"]);
        if ($profile_result->num_rows > 0) {
            $profile = $profile_result->fetch_assoc();
            echo implode("  ", $profile);
        }
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_GetOffer($ID_Offer) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.offers WHERE ID_Offer = ?");
    $stmt->bind_param("i", $ID_Offer);
    $stmt->execute();
    return $stmt->get_result();
}
//</editor-fold>

if (isset($_POST['but_upload'])) {

    $name = $_FILES['file']['name'];
    $target_dir = "../Ressources/Uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {
        // Upload file
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name)) {
            // Insert record
            //$query = "insert into images(name) values('".$name."')";
            //mysqli_query($con,$query);

            $stmt = $GLOBALS["Connection"]
                ->prepare("UPDATE neirautorental.cars SET Image = ? WHERE ID_Car = 1");
            $stmt->bind_param("s", $name);
            $stmt->execute();
        }
    }
}


$sql = "select Image from neirautorental.cars where ID_Car=1";
$result = mysqli_query($GLOBALS["Connection"],$sql);
$row = mysqli_fetch_array($result);

$image = $row['Image'];
$image_src = "../Ressources/Uploads/".$image;

?>
<img src='<?php echo $image_src; ?>'>

?>

<form method="post" action="DatabaseManager.php" enctype='multipart/form-data'>
    <input type='file' name='file'/>
    <input type='submit' value='Save name' name='but_upload'>
</form>
