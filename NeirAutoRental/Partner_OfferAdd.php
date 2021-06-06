<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION["ID_User"]) || !isset($_SESSION["UserType"])) {
    header("refresh:1;url=Home.php");
    echo "You have to Login to see this page ! Redirecting to the Home page in a Sec ..";
} else {
    $UserType = $_SESSION["UserType"];
    $ID_User = $_SESSION["ID_User"];
    if ($UserType != "partner") {
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
            <title>Add an offer</title>
            <link rel="stylesheet" href="CSS/modify.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        </head>

        <body>
        <?php


        include_once "nav_Connected.php";
        include_once 'Scripts/S_ProfileManager.php';
        include_once 'Scripts/S_offerAdd.php';
        $Profile = GetProfile($_SESSION["ID_User"]);

        if (isset($_POST["submit_AddOffer"])) {
            AddOffer($_SESSION["ID_User"]);
            header("Location: Partner_Offers.php");
        }
        ?>
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">

                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin"
                                         class="rounded-circle p-1 bg-primary" width="110">
                                    <div class="mt-3">
                                        <h4><?php echo $Profile["FirstName"] . ' ' . $Profile["LastName"] ?></h4>
                                        <p class="text-secondary mb-1"><?php echo $Profile["UserType"] ?></p>
                                        <p class="text-muted font-size-sm"><?php echo $Profile["Address"] ?></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" enctype='multipart/form-data'>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Brand :</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="brand" class="form-control" value="Brand">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Model :</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="model" class="form-control" value="Model">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Category :</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="Category" class="form-control" value="Category">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Price :</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="price" class="form-control" value="1">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Date start :</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="date" name="date_start" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Hour start :</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="time" name="time_start" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Date End :</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="date" name="date_end" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Hour End :</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="time" name="time_end" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">City :</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">

                                            <select name="City" class="form-control" id="City">
                                                <option value="TANGER">TANGER</option>
                                                <option value="TETOUAN">TETOUAN</option>
                                                <option value="RABAT">RABAT</option>
                                                <option value="CASABLANCA">CASABLANCA</option>
                                                <option value="MARRAKECH">MARRAKECH</option>
                                                <option value="AGADIR">AGADIR</option>
                                                <option value="AZROU">AZROU</option>
                                                <option value="OUARZAZATE">OUARZAZATE</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Address</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Car picture :</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <img src=""></image>
                                            <input type="file" name="file" id="file" accept="image/*">
                                            <input type="image" class="col-sm-9 text-secondary" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">More informations :</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="textarea" class="form-control" value=" ">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="btn" name="submit_AddOffer" value="ADD"
                                                   class="btn btn-primary px-4">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </body>

        </html>
        <?php
    }
}
?>