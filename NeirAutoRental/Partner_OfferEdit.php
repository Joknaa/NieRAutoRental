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
            <title>Document</title>
            <link rel="stylesheet" href="CSS/modify.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        </head>

        <body>
        <?php include_once "nav_Connected.php"; ?>
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
                                        <h4>John Doe</h4>
                                        <p class="text-secondary mb-1">Partenaire </p>
                                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Brand :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="Brand">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Category :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="Category">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Price :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="Price">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date start :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Hour start :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="time" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date End :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Hour End :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="time" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">City :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">

                                        <select name="City" class="form-control" id="City">
                                            <option value="City">TANGER</option>
                                            <option value="City">TETOUAN</option>
                                            <option value="City">RABAT</option>
                                            <option value="City">CASABLANCA</option>
                                            <option value="City">MARRAKECH</option>
                                            <option value="City">AGADIR</option>
                                            <option value="City">AZROU</option>
                                            <option value="City">OUARZAZATE</option>
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
                                        <h6 class="mb-0">Picture Car</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <img src=""></image>
                                        <input type="file" name="" id="file" accept="image/*">
                                        <input type="image" class="col-sm-9 text-secondary" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">More informations :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value=" ">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="button" class="btn btn-primary px-4" value="Modify">
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
        <?php
    }
}
?>