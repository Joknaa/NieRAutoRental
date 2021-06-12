<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once "Scripts/S_ProfileManager.php";
$ID_User = $_SESSION["ID_User"];
?>
   <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/nav.css">

</head>

<body>
<div style="height:40px;" class="container-fluid">
    <div class="header-dark">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="<?php GetHomePage() ?>">RentalX</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                            class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="./About.php">About</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false" href="#">Categories </a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation" href="#">First Item</a>
                                <a class="dropdown-item" role="presentation" href="#">Second Item</a>
                                <a class="dropdown-item" role="presentation" href="#">Third Item</a>
                            </div>
                        </li>
                    </ul>
                    
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label>
                            <input
                                    class="form-control search-field" type="search" name="search" id="search-field">
                        </div>
                    </form>
                    <form action="<?php GetProfilePage() ?>" method="post">
                        <input type="text" name="ID_User" value="<?php echo $_SESSION["ID_User"] ?>" hidden>
                        <input type="submit" class="pdp img-circle" value="" name="submit"
                               style="width:50px;height:50px;background-image: url('Ressources/Uploads/<?php echo GetProfileImage($ID_User) ?>');">
                    </form>
                    
                    <form action="Scripts/S_Logout.php" method="post">
                        <button style="border:none;background:transparent;margin-left:50px;" type="submit" name="submit" ><i class="fas fa-sign-out-alt"></i></button>
                    </form> 
                </div>
        </nav>
    </div>
</div>
'

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>>
<?php

function GetHomePage() {
    if ($_SESSION["UserType"] == "partner") echo 'Partner_Index.php';
    else if ($_SESSION["UserType"] == "client") echo 'Client_Index.php';
}

function GetProfilePage() {
    if ($_SESSION["UserType"] == "partner") echo 'Partner_Profile.php';
    else if ($_SESSION["UserType"] == "client") echo 'Client_Profile.php';
}