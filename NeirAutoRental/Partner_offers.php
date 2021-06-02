<?php require "Scripts/DatabaseManager.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing offers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" type="text/css" href="CSS/Listing_offers.css">
</head>

<body>

<?php include "Includes/header2.php"; ?>

<h2 style="text-align:center">Offers :</h2>
<p style="text-align:center">Location de voiture au maroc</p>

<?php DisplayOffers(1) ?>


</body>
</html>
