<?php include_once 'Scripts/S_ProfileManager.php';
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
                                        <h4><?php echo $Profile["Firstname"] . ' ' . $Profile["Lastname"] ?></h4>
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
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Last Name :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $Profile["Firstname"] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">First Name :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $Profile["Lastname"] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $Profile["Email"] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">CIN :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $Profile["CIN"] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Mobile :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $Profile["Phone"] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">City :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $Profile["City"] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $Profile["Address"] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form action="Client_ProfileEdit.php">
                                            <input type="text" name="ID_User" value="<?php echo $Profile["ID_User"] ?>" hidden>
                                            <input style="background-color:#66AAA7;color:white;" class="btn" type="submit" name="submit" value="Edit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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