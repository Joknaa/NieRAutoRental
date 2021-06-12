<?php
include_once "Scripts/S_OfferManager.php";

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
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
                  crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                    crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                    crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                    crossorigin="anonymous"></script>
            <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css" rel="stylesheet"
                  type="text/css"/>
            <link href="bootstrap.bundle.min.js" rel="stylesheet" type="text/css"/>
            <link rel="stylesheet" href="bootstrap-datetimepicker.min.css"/>
            <link rel="stylesheet" type="text/css"
                  href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
            <link rel="stylesheet" href="CSS/Home.css">
            <link rel="stylesheet" href="CSS/navv.css">

            <title>Home</title>
        </head>

        <body>
        <?php
        if (!isset($_SESSION["ID_User"])) {
            include_once "nav_Disconnected.php";
        } else {
            include_once "nav_Connected.php";
        }
        ?>

        <header>
            <?php require('Includes/VIPSlider.php'); ?>

        </header>


        <!-- Page Content -->
        <section class="py-5">
            <center>
                <form method="post">
                    <label for="Brand">Brand</label>
                    <select name="Brand" id="Brand">
                        <option value="All">All</option>
                        <?php
                        $Brands = GetAllCarBrands();
                        foreach ($Brands as $brand) {
                            echo '<option value="' . $brand . '">' . $brand . '</option>';
                        }
                        ?>
                    </select>

                    <label for="Category">Category</label>
                    <select name="Category" id="Category">
                        <option value="All">All</option>
                        <option value="FamilyCar">Family Car</option>
                        <option value="SportsCar">Sports Car</option>
                        <option value="Van">Van</option>
                    </select>

                    <label for="Availability">Availability</label>
                    <select name="Availability" id="Availability">
                        <option value="All">All</option>
                        <option value="Available">Available</option>
                        <option value="Unavailable">Unavailable</option>
                    </select>

                    <label for="Fuel">Fuel</label>
                    <select name="Fuel" id="Fuel">
                        <option value="All">All</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Gasoline">Gasoline</option>
                        <option value="Electricity">Electricity</option>
                    </select>
                    -
                    <input type="submit" name="submit_Search" value="Search">
                    <input type="submit" name="reset_Search" value="Reset">
                </form>
            </center>
            <div class="container">
                <h1 class="font-weight-light">Trending cars</h1>
            </div>
            <br><br>
            <div class="container bootstrap snipets">
                <div class="row flow-offset-1">
                    <?php include_once "Scripts/S_OfferManager.php";
                    if (isset($_POST["submit_Search"])) DisplaySearchedOffers();
                    else DisplayAllOffers();

                    ?>
                </div>
            </div>
        </section>

        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        </script>
        <script type="text/javascript" src="jquery.slim.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript"
                src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        </body>

        </html>
        <?php
    }
}
?>