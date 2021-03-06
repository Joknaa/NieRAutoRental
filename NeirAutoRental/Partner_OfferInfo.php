<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION["ID_User"])) {
    $_SESSION["UserType"] = "Visiter";
    include_once "nav_Disconnected.php";
} else
    include_once "nav_Connected.php";

    include_once "Scripts/S_OfferManager.php";
    include_once "Scripts/S_ProfileManager.php";
    include_once "Scripts/S_RequestManager.php";

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
        </div>
    </section>
    <section>
        <div class="containerr">
            <?php
            list($offer, $car) = DisplayOffer($ID_Offer);
            if (isset($_POST["submit_RequestOffer"])) {
                AddRequest($ID_Offer, $ID_User);
            }
            ?>

            <div>
                <img style="width:500px;height:340px;" src="Ressources/Images/Cars/<?php echo $car["Image"] ?>"
                     alt="oups">
            </div>
            <form method="post">
                <input type="text" name="ID_Offer" value="<?php echo $offer["ID_Offer"] ?>" hidden>
                <h1><?php echo $car["Brand"] . ' ' . $car["Model"] ?></h1>
                <h4>Category: <?php echo $car["Category"] ?></h4>
                <h4>Fuel: <?php echo $car["Fuel"] ?></h4>
                <h4>Color: <?php echo $car["Color"] ?></h4>
                <h4>Price: <?php echo $car["Price"] ?> DH/Hour</h4>
                <br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem voluptatibus<br>
                    aliquid ipsa eius odio reiciendis quibusdam sit nulla autem quam neque, <br>
                    perferendis reprehenderit omnis vel et dolorum quae delectus quasi.</p>
                <input type="submit" name="submit_RequestOffer" value="Request Offer">
            </form>
        </div>
        <br>
        <?php $Profile = GetProfile($offer["ID_User"]); ?>
        <div class="wrapperr">
            <div>
                <div>
                    <div class="wrapperrr">
                        <div class="card">
                            <div class="card-wrapperrr">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-4">
                                        <div class="image-wrapperrr">
                                            <img src="Ressources/Uploads/<?php echo $Profile["Image"] ?>" alt="profile">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md">
                                        <div class="card-box">
                                            <h1 class="h1">
                                                <strong><?php echo $Profile["FirstName"] . ' ' . $Profile["LastName"] ?></strong>
                                            </h1>
                                            <br>
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
                        <h3 style="width:300px;margin-left:100px;">If you got a good review, please leave a comment
                            below
                            :</h3>
                        <img style="width:100px;height:40px;margin-left:150px;" src="Ressources/Images/goodreview.png"
                             alt="good">
                    </div>
                    <br><br>
                    <form action="" method="POST" class="form">
                        <div class="input-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your Name" required>
                        </div>
                        <div class="input-group textarea">
                            <label for="comment">Comment</label>
                            <textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
                        </div>
                        <div class="input-group">
                            <button name="submit" class="btn">Post Comment</button>
                        </div>
                    </form>
                </div>
                <div class="prev-comments">

                    <div class="single-item">
                        <h4>Name</h4>
                        <p>Comment</p>
                    </div>

                </div>
            </div>
            <div class="flex2">
                <div style="margin-top:-150px;">
                    <h3 style="width:300px;margin-left:100px;margin-top:-30px;">If you got a good review, please leave a
                        comment below :</h3>
                    <img style="width:100px;height:40px;margin-left:150px;" src="Ressources/Images/badreview.png"
                         alt="good">
                </div>
                <br><br>
                <form action="" method="POST" class="form">
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your Name" required>
                    </div>
                    <div class="input-group textarea">
                        <label for="comment">Comment</label>
                        <textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
                    </div>
                    <div class="input-group">
                        <button name="submit" class="btn">Post Comment</button>
                    </div>
                </form>
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
    <?php

?>