<?php
include_once "Scripts/S_Login.php";
include_once "Scripts/S_UserManager.php";
if(!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active"
                 style="background-image: url('https://d1zgdcrdir5wgt.cloudfront.net/media/vehicle/images/9OLHDveHQcKw6ngORY--Nw.1440x700.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Ford Falcon 1963</h3>
                    <p class="lead">Beautiful and well taken care of 1963 Falcon. Turns heads everywhere you go, Will
                        not disappoint!</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item"
                 style="background-image: url('https://d1zgdcrdir5wgt.cloudfront.net/media/vehicle/images/MDzW4ycFQC-kVLeTLLq7YQ.1440x700.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Jeep Grand Cherokee 2017</h3>
                    <p class="lead">The 2017 Jeep Grand Cherokee is a benchmark SUV; it's a luxury vehicle, a talented
                        off-roader, a scalding-hot track runner, and a family wagon extraordinaire.</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item"
                 style="background-image: url('https://d1zgdcrdir5wgt.cloudfront.net/media/vehicle/images/myswqN9MSK-APj_61j99XQ.1440x700.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Porsche 911 2017</h3>
                    <p class="lead">This car is immaculate and stunning. The 911.2 Carrera 4s is incredibly quick and
                        agile on the back roads, and at the same time is so very comfortable and luxurious when cruising
                        around town. This is the perfect car for a weekend
                        getaway in Napa or for a fun day out to the beach.</p>
                </div>
            </div>

            <div class="carousel-item"
                 style="background-image: url('https://d1zgdcrdir5wgt.cloudfront.net/media/vehicle/images/ONqN10CBToapUeM_4GxfZw.1440x700.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">BMW i8 2014</h3>
                    <p class="lead">Check out this unique "Batmobile" BMW i8 with custom matte finishes + a laundry list
                        of upgrades that’s sure to draw eyes on any road. </p>
                </div>
            </div>
            <div class="carousel-item"
                 style="background-image: url('https://images.hgmsites.net/lrg/bmw_100170631_l.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">BMW Z4 2011</h3>
                    <p class="lead">Check out this unique "Batmobile" BMW i8 with custom matte finishes + a laundry list
                        of upgrades that’s sure to draw eyes on any road. </p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<!-- Page Content -->
<section class="py-5">
    <div class="container">
        <h1 class="font-weight-light">Trending cars </h1>
    </div>
    <br><br>
    <div class="container bootstrap snipets">
        <div class="row flow-offset-1">
            <?php include_once "Scripts/S_OfferManager.php";
            DisplayAllOffers(); ?>
        </div>
    </div>


</section>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
</script>
<script type="text/javascript" src="jquery.slim.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</body>

</html>