<?php require "Scripts/DatabaseManager.php" ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" type="text/css" href="CSS/Listing_offers.css">
</head>

<body>

<div class="header1">
    <div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="up.html">Classy V</a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                                class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">About</a></li>
                            <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false"
                                                    href="#">Categories </a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                                                                          href="#">First Item</a><a
                                            class="dropdown-item" role="presentation" href="#">Second Item</a><a
                                            class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false" href="#">Brands </a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                                                                          href="#">First Item</a><a
                                            class="dropdown-item" role="presentation" href="#">Second Item</a><a
                                            class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                            </li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input
                                        class="form-control search-field" type="search" name="search" id="search-field">
                            </div>
                        </form>
                        <span class="navbar-text"><a href="#" class="login">Sign out</a></span><a
                                class="btn btn-light action-button" role="button" href="#">ADD an offer</a></div>
                </div>
            </nav>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</div>


<h2 style="text-align:center">Requests :</h2>
<p style="text-align:center">Location de voiture au maroc</p>

<?php DisplayRequests(1);
if (isset($_POST["Accept"])) ConfirmRequest($_POST["ID_Request"], "InUse");
if (isset($_POST["Deny"])) ConfirmRequest($_POST["ID_Request"], "Denied");

?>


</body>
</html>
