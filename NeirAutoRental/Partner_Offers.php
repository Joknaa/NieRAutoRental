<?php require "Scripts/S_OfferManager.php";

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION["ID_User"]) || !isset($_SESSION["UserType"])) {
    header("refresh:1;url=Home.php");
    echo "You have to Login to see this page ! Redirecting to the Home page in a Sec ..";
} else {
    $UserType = $_SESSION["UserType"];
    $ID_User = $_SESSION["ID_User"];
    if ($UserType != "partner") {
        header("refresh:1;url=Home.php");
        echo "You have to Login to see this page ! Redirecting to the Home page in a Sec ..";
    } else {
        if (isset($_POST["submit_EditOffer"])) {
            header("location: Modify_Offer.php");
        }
        if (isset($_POST["submit_MoreInfo"])) {
            header("location: Partner_OfferInfo.php");
        }
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <!-- Site made with Mobirise Website Builder v5.3.5, https://mobirise.com -->
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
            <meta name="description" content="">


            <title>Offers list</title>
            <link rel="stylesheet" href="assets/tether/tether.min.css">
            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
            <link rel="stylesheet" href="assets/theme/css/style.css">
            <link rel="stylesheet" href="assets2/tether/tether.min.css">
            <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-grid.min.css">
            <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-reboot.min.css">
            <link rel="stylesheet" href="assets2/socicon/css/styles.css">
            <link rel="stylesheet" href="assets2/theme/css/style.css">
            <link rel="preload" as="style" href="assets2/mobirise/css/mbr-additional.css">
            <link rel="stylesheet" href="assets2/mobirise/css/mbr-additional.css" type="text/css">
            <link rel="preload"
                  href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"
                  as="style" onload="this.onload=null;this.rel='stylesheet'">
            <noscript>
                <link rel="stylesheet"
                      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap">
            </noscript>


        </head>
        <body>
        <section class="features10 cid-sz72N5KVZr" id="features11-1">
            <?php require('nav_Connected.php'); ?>

            <div class="container">
                <div class="title">
                    <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2"><strong>Posted offers </strong></h3>
                </div>
                <?php
                try {
                    $allOffers_result = SQL_GetPartnerOffers($ID_User);

                    if ($allOffers_result->num_rows > 0) {
                        $rows = $allOffers_result->num_rows;
                        do {
                            $offer = $allOffers_result->fetch_assoc();

                            $car_result = SQL_GetCar($offer["ID_Car"]);
                            if ($car_result->num_rows > 0) {
                                $car = $car_result->fetch_assoc();
                                ?>
                                <div style="margin-bottom: 20px;background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);" class="card">
                                    <div class="card-wrapper">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-md-3">
                                                <div class="image-wrapper">
                                                    <img src="Ressources/Images/Cars/<?php echo $car["Image"] ?>" alt="Car Image" title="">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md">
                                                <div class="card-box">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="top-line">
                                                                <h4 class="card-title mbr-fonts-style display-5">
                                                                    <strong><?php echo $car["Brand"] . ' ' . $car["Model"] ?></strong></h4>
                                                                <p class="cost mbr-fonts-style display-5"><?php echo $car["Price"] ?> DH/Hour</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="bottom-line">
                                                                <p class="mbr-text mbr-fonts-style m-0 display-7"><?php echo $offer["Description"] ?></p>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <form method="post" action="Partner_OfferInfo.php">
                                                            <input type="text" name="ID_Offer" value="<?php echo $offer["ID_Offer"] ?>" hidden>
                                                            <input type="submit" style="width:150px;height:50px;margin-left:580px;background-color:#02356C;color: white;"
                                                                   name="submit_MoreInfo" value="More Info">
                                                        </form>
                                                        <form method="post" action="Modify_offer.php">
                                                            <input type="text" name="ID_Offer" value="<?php echo $offer["ID_Offer"] ?>" hidden>
                                                            <input type="submit" style="width:100px;height:50px;background-color:#02356C;color: white;" name="submit_EditOffer"
                                                                   value="Edit">
                                                        </form>

                                                        <?php if ($offer["Availability"] == 'unavailable') { ?>
                                                            <form method="post">
                                                                <input type="text" name="ID_Offer" value="<?php echo $offer["ID_Offer"] ?>" hidden>
                                                                <input type="submit" name="submit_TerminateContract" value="Terminate this contract">
                                                            </form>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            $rows--;
                        } while ($rows > 0);
                    }
                } catch (Exception $e) {
                    echo $e;
                }
                ?>

            </div>
        </section>
        <section
                style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"></section>
        <script src="assets/web/assets/jquery/jquery.min.js"></script>
        <script src="assets/popper/popper.min.js"></script>
        <script src="assets/tether/tether.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/smoothscroll/smooth-scroll.js"></script>
        <script src="assets/theme/js/script.js"></script>


        </body>
        </html>
    <?php }
}