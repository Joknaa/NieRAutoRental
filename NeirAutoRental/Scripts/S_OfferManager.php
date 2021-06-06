<?php require "DatabaseConfig.php";


//<editor-fold desc="Display All Offers">
function DisplayAllOffers() {
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
                            <form method="post" action="detailpage.php">
                            <input type="text" name="ID_User" value="'. $offer["ID_User"] .'" hidden>
                            <input type="text" name="ID_Offer" value="'. $offer["ID_Offer"] .'" hidden>
                            <input type="image" alt="car image" name="submit" style="width: 100%" src="Ressources/Images/Cars/' . $car["Image"] . '">
                            </form>
                                <div class="caption">
                                    <h6><a href="#">' . $car["Brand"] . ' - ' . $car["Model"] . '</a></h6><span class="price">
                              <del>$24.99</del></span><span class="price sale">' . $car["Price"] . '</span>
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

function SQL_GetAllOffers() {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.offers");
    $stmt->execute();
    return $stmt->get_result();
}
//</editor-fold>

//<editor-fold desc="Display VIP Offers">
function DisplayVIPOffers() {
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

function SQL_GetVIPOffers() {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.offers");
    $stmt->execute();
    return $stmt->get_result();
}

//</editor-fold>

//<editor-fold desc="Display Selected Offers">
function DisplayOffer($ID_Offer) {
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

function SQL_GetOffer($ID_Offer) {
    $stmt = $GLOBALS["Connection"]
        ->prepare("SELECT * FROM neirautorental.offers WHERE ID_Offer = ?");
    $stmt->bind_param("i", $ID_Offer);
    $stmt->execute();
    return $stmt->get_result();
}

//</editor-fold>

//<editor-fold desc="Display Partner Offers">
function DisplayPartnerOffers($ID_User) {
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
                                        <img src="Ressources/Uploads/' . $car["Image"] . '" alt="Car Image" title="">
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="card-box">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="top-line">
                                                    <h4 class="card-title mbr-fonts-style display-5"><strong>' . $car["Brand"] . ' - ' . $car["Model"] . '</strong></h4>
                                                    <p class="cost mbr-fonts-style display-5">' . $car["Price"] . ' DH/Hour</p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="bottom-line">
                                                    <p class="mbr-text mbr-fonts-style m-0 display-7">' . $offer["Description"] . '</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

function SQL_GetPartnerOffers($ID_User) {
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

//<editor-fold desc="Update">
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
