<?php include_once 'Scripts/S_ProfileManager.php';
include_once 'Scripts/S_CommentsManager.php';
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
            <title>Client Profile</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets2/tether/tether.min.css">
            <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-grid.min.css">
            <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-reboot.min.css">
            <link rel="stylesheet" href="assets2/socicon/css/styles.css">
            <link rel="stylesheet" href="assets2/theme/css/style.css">
            <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
            <link href="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
            <link rel="preload" as="style" href="assets2/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets2/mobirise/css/mbr-additional.css" type="text/css">
        </head>

        <body>
        <?php
        include_once "nav_Connected.php";

        $Profile = GetProfile($_SESSION["ID_User"]);
        ?>
        <div style="margin-top:20px;" class="container">
            <div class="main-body">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div style="background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);" class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="Ressources/Uploads/<?php echo $Profile["Image"] ?>"
                                         alt="Admin"
                                         style="width: 100px;height:100px;"
                                         class="rounded-circle" width="100" height="180">

                                    <form action="Client_CurrentOffer.php" method="post" class="mt-3">
                                        <h4 style="color: #001A60"><?php echo $Profile["Firstname"] . ' ' . $Profile["Lastname"] ?></h4>
                                        <br>
                                        <h5  class="text-secondary mb-1"> <strong><?php echo $Profile["UserType"] ?></strong></h5>

                                        <h5 class="text-secondary mb-1"> <strong>Ville : </strong><?php echo $Profile["City"] ?></h5>
                                        <br>
                                        <input type="text" class="btn btn-outline-primary" name="ID_User"
                                               value="<?php echo $Profile["ID_User"] ?>" hidden>
                                        <input type="submit" class="btn" name="submit"
                                               value="Requested offers" style="margin-left:70px;background-color:#66AAA7;color:white;">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
                    <div style="width: 100%" class="col-md-8">
                        <div class="col-lg-12">
                            <div style="margin-bottom:10px;" class="card g-mb-30 card-comment">

                                <div style="height:50px;font-family: 'Open Sans';background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);" class="card-body u-shadow-v18 g-bg-secondary g-pa-30">
                                    <h2 style="font-family: 'Open Sans';font-size: 30px;text-align: center;margin-top:-10px;color: #001A60;">Clients Comments :</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div style="margin-bottom: 30px;"  class="card g-mb-30 card-comment">
                                <div class="card-body u-shadow-v18 g-bg-secondary g-pa-30">
                                    <div class="g-mb-15">
                                        <h5 class="h5 g-color-gray-dark-v1 mb-0">John Doe</h5>
                                        <span class="g-color-gray-dark-v4 g-font-size-12">5 days ago</span>
                                    </div>

                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>


                                </div>
                            </div>
                        </div>



                        <div class="col-lg-12">
                            <div style="margin-bottom: 30px;" class="card g-mb-30 card-comment">

                                <div class="card-body u-shadow-v18 g-bg-secondary g-pa-30">
                                    <div class="g-mb-15">
                                        <h5 class="h5 g-color-gray-dark-v1 mb-0">John Doe</h5>
                                        <span class="g-color-gray-dark-v4 g-font-size-12">5 days ago</span>
                                    </div>

                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php
            try {
                $commentIDs_Result = SQL_GetProfileCommentID($ID_User);
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
                                                <b><?php echo $comment["Firstname"] . ' ' . $comment["Lastname"] ?></b>
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
            <br><br><br>
            <br><br><br><br><br><br>
            <script type="text/javascript" ></script>
                </div>

            </div>
        </div>
        </body>

        </html>
        <?php include 'footer.php';?>

        <?php
    }
}
?>