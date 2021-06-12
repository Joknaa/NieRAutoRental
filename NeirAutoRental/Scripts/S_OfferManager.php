<?php require "DatabaseConfig.php";


//<editor-fold desc="Display All Offers">
function DisplayAllOffers()
{

    try {
        $allOffers_result = SQL_GetAllOffers();

        if ($allOffers_result->num_rows > 0) {
            $rows = $allOffers_result->num_rows;
            do {
                $offer = $allOffers_result->fetch_assoc();

                $car_result = SQL_GetCar($offer["ID_Car"]);
                if ($car_result->num_rows > 0) {
                    $car = $car_result->fetch_assoc();
                    echo '
                        <div class="col-xs-6 col-md-4">
                            <div class="product tumbnail thumbnail-3">
                            <form method="post" action="Partner_OfferInfo.php">
                            <input type="text" name="ID_User" value="' . $offer["ID_User"] . '" hidden>
                            <input type="text" name="ID_Offer" value="' . $offer["ID_Offer"] . '" hidden>
                            <input type="image" alt="car image" name="submit" style="width: 100%" src="Ressources/Images/Cars/' . $car["Image"] . '">
                            </form>
                                <div class="caption">
                                    <p><a href="#">' . $car["Brand"] . ' - ' . $car["Model"] . '</a></p>
                                    <span class="price"><del>' . $car["Price"] * 1.5 . ' DH/Hour</del></span>
                                    <span class="price sale"><b>' . $car["Price"] . ' DH/Hour</b></span>
                                </div>
                            </div>
                        </div>
                    ';
                }
                $rows--;
            } while ($rows > 0);
        }
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_GetAllOffers()
{
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.offers");
    $stmt->execute();
    return $stmt->get_result();
}

//</editor-fold>

//<editor-fold desc="Display Searched Offers">
function DisplaySearchedOffers()
{
    if ($_POST["Fuel"] == "All" and $_POST["Brand"] == "All" and $_POST["Category"] == "All" and $_POST["Availability"] == "All") {
        DisplayAllOffers();
        return;
    }

    $Brand = $_POST["Brand"] == "All" ? false : $_POST["Brand"];
    $Fuel = $_POST["Fuel"] == "All" ? false : $_POST["Fuel"];
    $Category = $_POST["Category"] == "All" ? false : $_POST["Category"];

    try {
        $allOffers_result = $_POST["Availability"] == "All" ? SQL_GetAllOffers() : SQL_GetSearchedOffers();

        if ($allOffers_result->num_rows > 0) {
            $rows = $allOffers_result->num_rows;
            do {
                $offer = $allOffers_result->fetch_assoc();

                $car_result = SQL_GetSearchedCar($offer["ID_Car"], $Brand, $Category, $Fuel);
                if ($car_result->num_rows > 0) {
                    $car = $car_result->fetch_assoc();
                    echo '<div class="col-xs-6 col-md-4">
                            <div class="product tumbnail thumbnail-3">
                            <form method="post" action="Partner_OfferInfo.php">
                            <input type="text" name="ID_User" value="' . $offer["ID_User"] . '" hidden>
                            <input type="text" name="ID_Offer" value="' . $offer["ID_Offer"] . '" hidden>
                            <input type="image" alt="car image" name="submit" style="width: 100%" src="Ressources/Images/Cars/' . $car["Image"] . '">
                            </form>
                                <div class="caption">
                                    <p><a href="#">' . $car["Brand"] . ' - ' . $car["Model"] . '</a></p>
                                    <span class="price"><del>' . $car["Price"] * 1.5 . ' DH/Hour</del></span>
                                    <span class="price sale"><b>' . $car["Price"] . ' DH/Hour</b></span>
                                </div>
                            </div>
                        </div>';
                }
                $rows--;
            } while ($rows > 0);
        }
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_GetSearchedOffers()
{
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.offers WHERE Availability = ?");
    $stmt->bind_param("s", $_POST["Availability"]);
    $stmt->execute();
    return $stmt->get_result();
}

function SQL_GetSearchedCar($ID_Car, $Brand, $Category, $Fuel)
{
    $Query = "SELECT * FROM neirautorental.cars WHERE ID_Car = " . $ID_Car;
    if ($Brand) $Query = $Query . " AND Brand = '" . $Brand . "'";
    if ($Category) $Query = $Query . " AND Category = '" . $Category . "'";
    if ($Fuel) $Query = $Query . " AND Fuel = '" . $Fuel . "'";

    $stmt = $GLOBALS["Connection"]->prepare($Query);
    if (!$stmt) {
        echo "Prepare failed: (" . $GLOBALS["Connection"]->errno . ") " . $GLOBALS["Connection"]->error . "<br>";
    }
    $stmt->execute();
    return $stmt->get_result();
}

//</editor-fold>

//<editor-fold desc="Display VIP Offers">
function DisplayVIPOffers()
{
    try {
        $allOffers_result = SQL_GetVIPOffers();

        if ($allOffers_result->num_rows > 0) {
            $rows = $allOffers_result->num_rows;
            do {
                $offer = $allOffers_result->fetch_assoc();

                $car_result = SQL_GetCar($offer["ID_Car"]);
                if ($car_result->num_rows > 0) {
                    $car = $car_result->fetch_assoc();
                    $ImageURL = "url('Ressources/Images/Cars/Corvette Stingray Z51.png');";
                    echo '                   
                        <div class="carousel-item active" style="background-image: ' . $ImageURL . '">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="display-4">' . $car["Brand"] . ' - ' . $car["Model"] . '</h3>
                                <p class="lead">Beautiful and well taken care of 1963 Falcon. Turns heads everywhere you go</p>
                            </div>
                        </div>
                    ';
                }
                $rows--;
            } while ($rows > 0);

        }
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_GetVIPOffers()
{
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.offers");
    $stmt->execute();
    return $stmt->get_result();
}

//</editor-fold>

//<editor-fold desc="Display Selected Offers">
function DisplayOffer($ID_Offer)
{
    try {
        $offer_result = SQL_GetOffer($ID_Offer);
        if ($offer_result->num_rows > 0) {
            $offer = $offer_result->fetch_assoc();

            $car_result = SQL_GetCar($offer["ID_Car"]);
            if ($car_result->num_rows > 0) {
                $car = $car_result->fetch_assoc();
                return array($offer, $car);
            }
        }
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_GetOffer($ID_Offer)
{
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.offers WHERE ID_Offer = ?");
    $stmt->bind_param("i", $ID_Offer);
    $stmt->execute();
    return $stmt->get_result();
}

//</editor-fold>

//<editor-fold desc="Display Partner Offers">
function DisplayPartnerOffers($ID_User)
{
    try {
        $allOffers_result = SQL_GetPartnerOffers($ID_User);

        if ($allOffers_result->num_rows > 0) {
            $rows = $allOffers_result->num_rows;
            do {
                $offer = $allOffers_result->fetch_assoc();

                $car_result = SQL_GetCar($offer["ID_Car"]);
                if ($car_result->num_rows > 0) {
                    $car = $car_result->fetch_assoc();
                    echo '
                    <div class="card">
                        <div class="card-wrapper">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-3">
                                    <div class="image-wrapper">
                                        <img src="Ressources/Images/' . $car["Image"] . '" alt="Car Image" title="">
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="card-box">
                                        <div class="row">
                                            <form method="post">
                                                <div class="col-12">
                                                    <div class="top-line">
                                                        <input type="text" name="ID_Offer" value="' . $offer["ID_Offer"] . '" hidden>
                                                        <h4 class="card-title mbr-fonts-style display-5"><strong>' . $car["Brand"] . ' - ' . $car["Model"] . '</strong></h4>
                                                        <p class="cost mbr-fonts-style display-5">' . $car["Price"] . ' DH/Hour</p>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="bottom-line">
                                                        <p class="mbr-text mbr-fonts-style m-0 display-7">' . $offer["Description"] . '</p>
                                                    </div>
                                                </div>
                                                <br>
                                                <input type="submit" name="submit_MoreInfo" value="More Info"> 
                                               
                                                <input type="submit" name="submit_EditOffer" value="Edit">
';

                    if ($offer["Availability"] == 'unavailable') echo '<input type="submit" name="submit_TerminateContract" value="Terminate this contract">';
                    echo '
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
                }
                $rows--;
            } while ($rows > 0);
        }
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_GetPartnerOffers($ID_User)
{
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.offers WHERE ID_User = ?");
    $stmt->bind_param("i", $ID_User);
    $stmt->execute();
    return $stmt->get_result();
}

function SQL_GetCar($ID_Car)
{
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.cars WHERE ID_Car = ?");
    $stmt->bind_param("i", $ID_Car);
    $stmt->execute();
    return $stmt->get_result();
}

//</editor-fold>

//<editor-fold desc="Display Client Current Offer">
function DisplayClientCurrentOffers($ID_User)
{
    try {
        $requests_result = SQL_GetClientCurrentRequests($ID_User);
        if ($requests_result->num_rows > 0) {
            $rows = $requests_result->num_rows;
            do {
                $request = $requests_result->fetch_assoc();

                $offer_result = SQL_GetOffer($request["ID_Offer"]);
                if ($offer_result->num_rows > 0) {
                    $offer = $offer_result->fetch_assoc();

                    $car_result = SQL_GetCar($offer["ID_Car"]);
                    if ($car_result->num_rows > 0) {
                        $car = $car_result->fetch_assoc();
                        echo '<div style="margin-bottom: 20px;background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);" class="card">
                        <div  class="card-wrapper">
                        <div  class="row align-items-center">
                        <div class="col-12 col-md-3">
                            <div class="image-wrapper">
                            <img src="Ressources/Images/' . $car["Image"] . '" alt="Car Image" title="">
                            </div></div>
                            <div class="col-12 col-md">
                            <div class="card-box">
                            <div class="row">
                            <div method="post">
                            <div class="col-12">
                            <div class="top-line">
                            <input type="text" name="ID_Offer" value="' . $offer["ID_Offer"] . '" hidden>
                            <h4 style="margin-top: 10px;margin-bottom: 20px;" class="card-title mbr-fonts-style display-5">
                            <strong>' . $car["Brand"] . ' - ' . $car["Model"] . '</strong></h4>
                            <p style="color:#f53636;" class="cost mbr-fonts-style display-5">Price :' . $car["Price"] . ' DH/Hour</p></div>
                            </div>
                            </div>
                            <div class="col-12"><div class="bottom-line">
                            <p class="mbr-text mbr-fonts-style m-0 display-7">' . $offer["Description"] . '</p>
                            </div>
                            </div>
                            <br>';
                        if ($offer["Availability"] == 'unavailable' and $request["Status"] == 'InUse') echo '<input type="submit" name="submit_TerminateContract" value="Terminate this contract">';
                        echo '<label style="margin-top: .5rem;margin-left: 17px;">Status: <strong>' . SQL_GetRequestStatus($offer["ID_Offer"])["Status"] . ' </strong></label>
                            <br><br>

                            </form>
                            <form action="Partner_OfferInfo.php" method="post">
                                <input type="text" name="ID_Offer" value="' . $offer["ID_Offer"] . '" hidden>
                                <input style="margin: 30px 0px 10px 580px;background-color:#02356C;" 
                                 class="btn btn-primary" type="submit" name="submit_MoreInfo" value="More Info">
                            </form> 
                            </div>
                            </div>
                            </div></div>
                            </div>
                            </div>';
                    }
                }
                $rows--;
            } while ($rows > 0);
        }
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_GetClientCurrentRequests($ID_User)
{
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.requests r JOIN neirautorental.offers o on o.ID_Offer = r.ID_Offer  WHERE r.ID_User = ?");
    $stmt->bind_param("i", $ID_User);
    $stmt->execute();
    return $stmt->get_result();
}

function SQL_GetRequestStatus($ID_Offer)
{
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT Status FROM neirautorental.requests WHERE ID_Offer = ?");
    $stmt->bind_param("i", $ID_Offer);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

//</editor-fold>

//<editor-fold desc="Update Offer">
function UpdateOffer()
{
    try {
        $ID_Car = SQL_GetCarID($_POST["ID_Offer"]);
        SQL_UpdateCar($ID_Car);
        SQL_UpdateOffer();
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_UpdateOffer()
{
    $stmt = $GLOBALS["Connection"]
        ->prepare("UPDATE neirautorental.offers SET Availability = ?, Date_Start = ?, Date_End = ?, Hour_Start = ?,
                                                    Hour_End = ? WHERE ID_User = ?");
    $stmt->bind_param("siiiii", $_POST["Availability"], $_POST["Date_Start"], $_POST["Date_End"], $_POST["Hour_Start"],
        $_POST["Hour_End"], $_POST["ID_User"]);
    $stmt->execute();
}

function SQL_GetCarID($ID_Car)
{
    $stmt = $GLOBALS["Connection"]->prepare("SELECT ID_CAR FROM neirautorental.offers WHERE ID_Offer = ?");
    $stmt->bind_param("i", $ID_Car);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    return $stmt_result->fetch_assoc()["ID_Car"];
}

function SQL_UpdateCar($ID_Car)
{
    $stmt = $GLOBALS["Connection"]
        ->prepare("UPDATE neirautorental.cars SET Brand = ?, Model = ?, Price = ?, Mileage = ?,Color = ?, Category = ?  WHERE ID_Car = ?");
    $stmt->bind_param("siii", $_POST["Brand"], $_POST["Model"], $_POST["Price"],
        $_POST["Mileage"], $_POST["Color"], $_POST["Category"], $ID_Car);
    $stmt->execute();
}

//</editor-fold>

//<editor-fold desc="Display Search By Brand">
function GetAllCarBrands()
{
    try {
        $allBrands_result = SQL_GetAllCarBrands();

        if ($allBrands_result->num_rows > 0) {
            $rows = $allBrands_result->num_rows;
            $Brands = array();
            do {
                $brand = $allBrands_result->fetch_assoc()["Brand"];
                array_push($Brands, $brand);
                $rows--;
            } while ($rows > 0);
            return array_unique($Brands);
        }
    } catch (Exception $e) {
        echo $e;
    }
    return null;
}

function SQL_GetAllCarBrands()
{
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT Brand FROM neirautorental.cars");
    $stmt->execute();
    return $stmt->get_result();
}

//</editor-fold>

//<editor-fold desc="Terminate Offer">
function TerminateContract($UserType, $ID_Offer)
{
    try {
        SQL_TerminateContract($UserType, $ID_Offer);
    } catch (Exception $e) {
        echo $e;
    }
}

function SQL_TerminateContract($UserType, $ID_Offer)
{
    if ($UserType == "partner") $columnName = 'Terminated_Partner';
    if ($UserType == "client") $columnName = 'Terminated_Client';

    $stmt = $GLOBALS["Connection"]
        ->prepare("UPDATE neirautorental.offers SET " . $columnName . " = 1 WHERE ID_Offer = " . $ID_Offer);
    $stmt->execute();
    return $stmt->get_result();
}

//</editor-fold>

function Check_OfferOngoing($ID_Offer, $ID_User)
{
    try {
        $requestStatus_result = SQL_Check_OfferOngoing($ID_Offer, $ID_User);
        if ($requestStatus_result->num_rows > 0) {
            $status = $requestStatus_result->fetch_assoc()["Status"];
            if ($status == "InUse" or $status == "Waiting") return true;
        }
    } catch (Exception $e) {
        echo $e;
    }
    return false;
}

function SQL_Check_OfferOngoing($ID_Offer, $ID_User)
{
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT Status FROM neirautorental.requests WHERE ID_Offer = " . $ID_Offer . " AND ID_User = " . $ID_User);
    $stmt->execute();
    return $stmt->get_result();
}
