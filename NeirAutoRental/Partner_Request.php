<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Requests listing</title>
    <link rel="stylesheet" href="assetts/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/tether/tether.min.css">
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets2/socicon/css/styles.css">
    <link rel="stylesheet" href="assets2/theme/css/style.css">
    <link rel="preload" as="style" href="assets2/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets2/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
</head>

<body id="page-top">
<div style="height:70px;">
    <div class="header-dark">
        <?php require('nav_Connected.php'); ?>
    </div>
</div>

<div id="wrapper">
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <div style="margin-bottom: 50px;margin-top:50px;" class="container">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 fw-bold" style="text-align: center;">Requests Info</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table my-0" id="dataTable">
                                <thead>
                                <tr>
                                    <th style="text-align: left;">Client</th>
                                    <th style="text-align: left;">Offer requested</th>
                                    <th style="text-align: center;">Contact</th>
                                    <th style="text-align: center;">Start date</th>
                                    <th style="text-align: center;">Action <br></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="filter: hue-rotate(0deg);"><img class="rounded-circle me-2" width="30" height="30" src="assetts/img/avatars/avatar1.jpeg">Client x</td>
                                    <td style="text-align: left;"><a class="btn btn-outline-primary" role="button" href="#" style="text-align: center;">Check the offer</a></td>
                                    <td style="text-align: center;">+212623892056&nbsp;<br>client@example.com<br></td>
                                    <td style="text-align: center;">2021/11/28</td>
                                    <td style="text-align: center;">
                                        <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Accept</button></div><a class="btn btn-outline-primary" role="button" href="#">Deny</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle me-2" width="30" height="30" src="assetts/img/avatars/avatar2.jpeg">Client y</td>
                                    <td style="text-align: left;"><a class="btn btn-outline-primary" role="button" href="#" style="text-align: center;">Check the offer</a></td>
                                    <td style="text-align: center;">+212623892056&nbsp;<br>client@example.com<br></td>
                                    <td style="text-align: center;">2021/10/09<br></td>
                                    <td style="text-align: center;">
                                        <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Accept</button></div><a class="btn btn-outline-primary" role="button" href="#">Deny</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img style="height:30px;width:30px;" class="rounded-circle me-2" src="assetts/img/avatars/avatar3.jpeg">&nbsp;Client w</td>
                                    <td style="text-align: left;"><a class="btn btn-outline-primary" role="button" href="#" style="text-align: center;">Check the offer</a></td>
                                    <td style="text-align: center;">+212623892056&nbsp;<br>client@example.com<br></td>
                                    <td style="text-align: center;">2021/01/12<br></td>
                                    <td style="text-align: center;">
                                        <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Accept</button></div><a class="btn btn-outline-primary" role="button" href="#">Deny</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img class="rounded-circle me-2" width="30" height="30" src="assetts/img/avatars/avatar4.jpeg">Client z</td>
                                    <td style="text-align: left;"><a class="btn btn-outline-primary" role="button" href="#" style="text-align: center;">Check the offer</a></td>
                                    <td style="text-align: center;">+212623892056&nbsp;<br>client@example.com<br></td>
                                    <td style="text-align: center;">2021/10/13<br></td>
                                    <td style="text-align: center;">
                                        <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Accept</button></div><a class="btn btn-outline-primary" role="button" href="#">Deny</a>
                                    </td>
                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assetts/bootstrap/js/bootstrap.min.js"></script>
<script src="assetts/js/theme.js"></script>
<?php include 'footer.php'; ?>

</body>

</html>