<?php
include_once "Scripts/S_OfferManager.php";
include_once "Scripts/S_ProfileManager.php";
include_once "Scripts/S_RequestManager.php";
//if (!isset($_POST["ID_Offer"]) and !isset($_POST["ID_User"])) die("No User ID");

if(!isset($_SESSION)) {
    session_start();
}
$ID_Offer = $_POST["ID_Offer"];
$ID_User = $_SESSION["ID_User"];
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
    <link rel="preload"
          href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"
          as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap">
    </noscript>
    <link rel="preload" as="style" href="assetss/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assetss/mobirise/css/mbr-additional.css" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
<section>
    <div>
        <?php include 'nav_Connected.php'; ?>
    </div>
</section>
<section>
    <div class="containerr">
        <?php
        list($offer, $car) = DisplayOffer($ID_Offer);
        if (isset($_POST["submit_RequestOffer"])) {
            AddRequest($ID_Offer, $ID_User);
            echo $ID_Offer;
        }
        ?>

        <div>
            <img style="width:500px;height:340px;" src="Ressources/Images/Cars/<?php echo $car["Image"] ?>" alt="oups">
        </div>
        <form method="post">
            <input type="text" name="ID_Offer" value="<?php echo $offer["ID_Offer"] ?>" hidden>
            <h1><?php echo $car["Brand"] . ' ' . $car["Model"] ?></h1>
            <br>

            <h5><strong>Category :</strong> <?php echo $car["Category"] ?></h5>
            <h5><strong>Fuel: </strong> <?php echo $car["Fuel"] ?></h5>
            <h5><strong>Color:</strong> <?php echo $car["Color"] ?></h5>
            <h5 style="color:red;"><strong>Price:</strong> <?php echo $car["Price"] ?> DH/Hour</h5>
            <p style="width:70%;"><h5><strong>Description :</strong></h5><?php echo $offer["Description"] ?> </p>
            <input type="submit" name="submit_RequestOffer" value="Request Offer">
        </form>


    </div>
    <br>

    <div class="wrapperr">
        <div>
            <div>
                <div class="wrapperrr">
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
                                        <br>
                                        <h6 class="h6"> Email:
                                            <?php echo $Profile["Email"] ?>                                        </h6>
                                        <br>

                                        <h6 class="h6">City:
                                            <?php echo $Profile["City"] ?>                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br><br>
            <br><br>
            <div style="margin-left:60px;">
                <div>
                    
                   
                </div>
                <br><br>
              
            </div>
            <div class="prev-comments">

                <div class="single-item">
                    <h4>Name</h4>
                    <p>Comment</p>
                </div>

            </div>
        </div>
        <div class="flex2">
            
            
            <div class="prev-comments">
                <div class="single-item">
                    <h4>Name</h4>
                    <p>Comment</p>
                </div>
            </div>
        </div>
    </div>
    <br><br><br></section>

</body>
</html>