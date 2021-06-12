<?php
if (!isset($_SESSION)) {
session_start();
} ?>

<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="assets2/tether/tether.min.css">
  <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets2/socicon/css/styles.css">
  <link rel="stylesheet" href="assets2/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="assets2/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets2/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
<?php
if (!isset($_SESSION["ID_User"])) include_once "nav_Disconnected.php";
else include_once "nav_Connected.php" ?>

  <section style="height: 350px !important;" class="header1 cid-szHz3KqmX9 mbr-fullscreen" id="header1-0">

    

    <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(250, 250, 250);"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>RENTAL-X</strong></h1>
                
                <p class="mbr-text mbr-fonts-style display-7">
                    With RENTAL-X, you can rent the car of your&nbsp;<br>dreams with only one click .</p>
                <div class="mbr-section-btn mt-3"><a class="btn btn-success display-4" href="./Home.php">Explore our offers</a></div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>

  
  
</body>
</html>