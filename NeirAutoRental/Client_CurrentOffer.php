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
    if ($UserType != "client") {
        header("refresh:1;url=Home.php");
        echo "You have to Login to see this page ! Redirecting to the Home page in a Sec ..";
    } else {
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
            <link rel="preload"
                  href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"
                  as="style" onload="this.onload=null;this.rel='stylesheet'">
            <noscript>
                <link rel="stylesheet"
                      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap">
            </noscript>


        </head>
        <body>
        <section style="background-color:#e0cfc0;" class="features10 cid-sz72N5KVZr" id="features11-1">
            <?php
            include_once "nav_Connected.php";
            if (isset($_POST["submit_MoreInfo"])) header("Location: Partner_OfferInfo.php");
            if (isset($_POST["submit_TerminateContract"])) TerminateContract($UserType, $_POST["ID_Offer"]);
            ?>

            <div class="container">
                <div class="title">
                    <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2"><strong>Posted offers </strong></h3>
                </div>
                <?php DisplayClientCurrentOffers($ID_User) ?>

            </div>
        </section>
        <section
                style="background-color: #e0cfc0;section:#e0cfc0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"></section>
        <script src="assets/web/assets/jquery/jquery.min.js"></script>
        <script src="assets/popper/popper.min.js"></script>
        <script src="assets/tether/tether.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/smoothscroll/smooth-scroll.js"></script>
        <script src="assets/theme/js/script.js"></script>


        </body>
        </html>
    <?php }
} ?>