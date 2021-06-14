<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_POST["ID_Offer"])) {
    header("refresh:1;url=Home.php");
    echo "You shouldn't be here ! Redirecting to the Home page in a Sec ..";
} else {
    if (!isset($_SESSION["ID_User"])) {
        $_SESSION["UserType"] = "visitor";
        include_once "nav_Disconnected.php";
    } else
        include_once "nav_Connected.php";

    include_once "Scripts/S_OfferManager.php";
    include_once "Scripts/S_ProfileManager.php";
    include_once "Scripts/S_RequestManager.php";
    include_once "Scripts/S_CommentsManager.php";
    $ID_User = $_SESSION["ID_User"];
    $ID_Offer = $_POST["ID_Offer"];
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="CSS/test2.css">
        <link rel="stylesheet" href="assetss/tether/tether.min.css">
        <link rel="stylesheet" href="assetss/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assetss/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assetss/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assetss/socicon/css/styles.css">
        <link rel="stylesheet" href="assetss/theme/css/style.css">

        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <link href="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

        <link rel="preload"
              href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"
              as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript>
            <link rel="stylesheet"
                  href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap">
        </noscript>
        <link rel="preload" as="style" href="assetss/mobirise/css/mbr-additional.css">
        <link rel="stylesheet" href="assetss/mobirise/css/mbr-additional.css" type="text/css">
        <link rel="stylesheet" href="assets2/tether/tether.min.css">
        <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets2/socicon/css/styles.css">
        <link rel="stylesheet" href="assets2/theme/css/style.css">
        <link rel="preload" as="style" href="assets2/mobirise/css/mbr-additional.css">
        <link rel="stylesheet" href="assets2/mobirise/css/mbr-additional.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>

    <body>

    <section>
        <div>
        </div>
    </section>
    <section>
        <div style="margin-top:50px;" class="containerr">
            <?php
            list($offer, $car) = DisplayOffer($ID_Offer);
            if (isset($_POST["submit_RequestOffer"])) {
                if ($_SESSION["UserType"] == "visitor") {
                    header("refresh:1;url=Login.php");
                } else {
                    AddRequest($ID_Offer, $ID_User);
                    $_POST["submit_RequestOffer"] = null;
                }
            }
            ?>

            <div>
                <img style="width:500px;height:340px;" src="Ressources/Images/Cars/<?php echo $car["Image"] ?>"
                     alt="oups">
            </div>
            <form method="post">
                <input type="text" name="ID_Offer" value="<?php echo $offer["ID_Offer"] ?>" hidden>
                <h1><?php echo $car["Brand"] . ' ' . $car["Model"] ?></h1>
                <br>

                <h5><strong>Category :</strong> <?php echo $car["Category"] ?></h5>
                <h5><strong>Fuel: </strong> <?php echo $car["Fuel"] ?></h5>
                <h5><strong>Color:</strong> <?php echo $car["Color"] ?></h5>
                <h5 style="color:red;"><strong>Price:</strong> <?php echo $car["Price"] ?> DH/Hour</h5>
                <p style="width:70%;"><h5><strong>Description :</strong>
                </h5><?php echo $offer["Description"] ?> </p>
                <?php
                if ($_SESSION["UserType"] != "partner") {
                    if (!Check_OfferOngoing($ID_Offer, $ID_User)) {
                        ?>
                        <input type="submit" name="submit_RequestOffer" value="Request Offer">
                        <?php
                    }
                } ?>
            </form>


        </div>
        <br>

        <div style="width: 100%" class="wrapperr">

            <div style="width: 100%" class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-wrapperrr">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-4">
                                    <div class="image-wrapperrr">
                                        <img src="Ressources/Images/facemodal.png" alt="profile">
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="card-box">
                                        <h1 class="h1">
                                            <?php $Profile = GetProfile($offer["ID_User"]); ?>
                                            <strong><?php echo $Profile["Firstname"] . ' ' . $Profile["Lastname"] ?></strong>
                                        </h1>
                                        <?php if ($_SESSION["UserType"] == "partner") {
                                            ?>
                                            <br>
                                            <h6 class="h6"> Email:
                                                <?php echo $Profile["Email"] ?>                                        </h6>
                                            <br>

                                            <h6 class="h6">City:
                                                <?php echo $Profile["City"] ?>                                        </h6>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
                      rel="stylesheet"
                      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
                      crossorigin="anonymous">
                <div style="width: 100%" class="col-md-6">
                    <div class="col-lg-12">
                        <div class="card g-mb-30 card-comment">

                            <div style="height:30px;font-family: 'Open Sans';background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);"
                                 class="card-body u-shadow-v18 g-bg-secondary g-pa-30">
                                <h2 style="font-family: 'Open Sans';font-size: 30px;text-align: center;margin-top:-10px;color: White;">
                                    Clients Comments :</h2>
                            </div>
                        </div>
                    </div>

                    <?php
                    try {
                        $commentIDs_Result = SQL_GetOfferCommentID(1);
                        if ($commentIDs_Result->num_rows > 0) {
                            $rows = $commentIDs_Result->num_rows;
                            do {
                                $commentIDs = $commentIDs_Result->fetch_assoc();

                                $comment_result = SQL_GetComment($commentIDs["ID_Comment"]);
                                if ($comment_result->num_rows > 0) {
                                    $comment = $comment_result->fetch_assoc();
                                    $commentColor = 0;
                                    if ($comment["Type"] == "positive") $commentColor = 'style="color: #7aba57"';
                                    if ($comment["Type"] == "negative") $commentColor = 'style="color: #ba5757"';
                                    ?>
                                    <div class="col-lg-12" >
                                        <div class="card g-mb-30 card-comment" >
                                            <div class="card-body u-shadow-v18 g-bg-secondary g-pa-30">
                                                <div class="g-mb-15" >
                                                    <h5 class="h5 g-color-gray-dark-v1 mb-0" <?php echo $commentColor; ?>>
                                                        <b><?php echo $comment["fname"] . ' ' . $comment["lname"] ?></b>
                                                    </h5>
                                                </div>
                                                <br>
                                                <p <?php echo $commentColor; ?>><?php echo $comment["Content"] ?></p>
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

            </div>
        </div>

        <br><br><br>
        <br><br><br><br><br><br>
    </section>
    <script type="text/javascript"></script>
    <?php include 'footer.php'; ?>

    </body>
    </html>

    </body>
    </html>
    <?php


}
?>