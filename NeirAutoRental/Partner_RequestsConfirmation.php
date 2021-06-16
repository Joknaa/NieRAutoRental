<?php require "Scripts/S_RequestManager.php";
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

        include_once "nav_Connected.php";
        if (isset($_POST["submit_Accept"])) ConfirmRequest($_POST["ID_Request"], "InUse");
        if (isset($_POST["submit_Deny"])) ConfirmRequest($_POST["ID_Request"], "Denied");

        ?>
        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
            <title>Table - Brand</title>
            <link rel="stylesheet" href="assets3/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet"
                  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
            <link rel="stylesheet" href="assets3/css/Footer-Basic.css">
        </head>

        <body id="page-top">
        <div id="wrapper">
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    <div class="container-fluid">
                        <h1 class="text-dark mb-4" style="text-align: left;padding: 10px;">&nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Requests</h1>
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 fw-bold" style="text-align: left;">&nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Requests Info</p>
                            </div>
                            <div class="card-body" style="text-align: center;">
                                <div class="table-responsive table mt-2" id="dataTable" role="grid"
                                     aria-describedby="dataTable_info">
                                    <table class="table my-0" id="dataTable">
                                        <thead>
                                        <tr>
                                            <th style="text-align: center;">Client</th>
                                            <th style="text-align: center;">Offer requested</th>
                                            <th style="text-align: center;">Feedback<br></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        try {
                                            $allRequests_result = SQL_GetAllRequests($ID_User);
                                            if ($allRequests_result->num_rows > 0) {
                                                $rows = $allRequests_result->num_rows;
                                                do {
                                                    $requests = $allRequests_result->fetch_assoc();
                                                    $user_result = SQL_GetUser($requests["ID_User"]);
                                                    if ($user_result->num_rows > 0) {
                                                        $user = $user_result->fetch_assoc();
                                                        ?>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <form method="post" action="Partner_ClientPreview.php">
                                                                    <input type="text" class="button" name="ID_User" value="<?php echo $requests["ID_User"] ?>" hidden>
                                                                    <input type="submit" class="btn btn-outline-primary" name="submit_ProfilePreview" value="<?php echo $user["Firstname"] . ' ' . $user["Lastname"] ?>">
                                                                </form>
                                                            </td>
                                                            <td style="text-align: center;">
                                                                <form method="post" action="Partner_OfferInfo.php">
                                                                    <input type="text" class="button" name="ID_Offer"
                                                                           value="<?php echo $requests["ID_Offer"] ?>"
                                                                           hidden>
                                                                    <input type="submit" name="submit_CheckOffer"
                                                                           class="btn btn-outline-primary"
                                                                           value="Check the offer">
                                                                </form>

                                                            </td>
                                                            <td style="text-align: center;">
                                                                <form method="post">
                                                                    <input type="text" class="button" name="ID_Request"
                                                                           value="<?php echo $requests["ID_Request"] ?>"
                                                                           hidden>
                                                                    <div class="btn-group" role="group">
                                                                        <input type="submit" name="submit_Accept"
                                                                               class="btn btn-primary" value="Accept">
                                                                        <input type="submit" name="submit_Deny"
                                                                               class="btn btn-outline-primary"
                                                                               value="Deny">
                                                                    </div>
                                                                </form>

                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    $rows--;
                                                } while ($rows > 0);
                                            }
                                        } catch (Exception $e) {
                                            echo $e;
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-basic" style="background: rgb(125,204,238);height: 120px;">
            <ul class="list-inline" style="text-align: center;">
                <li class="list-inline-item"><a href="#" style="color: var(--bs-dark);text-align: left;">About us</a>
                </li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">Contact us</a></li>
            </ul>
            <p class="copyright" style="color: var(--bs-dark);">© Copyright 2026 . All Rights Reserved</p>
        </footer>
        <script src="assets3/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets3/js/theme.js"></script>
        </body>

        </html>
        <?php
    }
}
?>
