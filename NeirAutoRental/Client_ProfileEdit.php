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
            <title>Client_ProfileEdit</title>
            <link rel="stylesheet" href="CSS/modify.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        </head>

        <body>
        <?php
        include_once "nav_Connected.php";
        include_once 'Scripts/S_ProfileManager.php';

        if (isset($_POST["submit"])) {
            UpdateProfile();
            header("Location: Client_Profile.php");
        }
        $ID_User = $_SESSION["ID_User"];
        $Profile = GetProfile($ID_User);
        ?>
        <div class="container">
            <div class="main-body">
                <form class="row" enctype='multipart/form-data' method="post">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img style="cursor:pointer;"
                                         src="Ressources/Uploads/<?php echo $Profile["Image"] ?>" alt="Admin"
                                         class="rounded-circle p-1 bg-primary" id="profile-image1" width="110"
                                         height="120">
                                    <input style="visibility:visible;" id="profile-image-upload" class="hidden"
                                           type="file" name="file"
                                           onchange="previewFile()" hidden>
                                    <div class="mt-3">
                                        <h4><?php echo $Profile["FirstName"] . ' ' . $Profile["LastName"] ?></h4>
                                        <p class="text-secondary mb-1"> <?php echo $Profile["UserType"] ?></p>
                                        <p class="text-secondary mb-1"> <?php echo $Profile["City"] ?></p>
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
                                        <h6 class="mb-0">First Name :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="ID_User"
                                               value="<?php echo $Profile["ID_User"] ?>" hidden>
                                        <input type="text" class="form-control" name="FirstName"
                                               value="<?php echo $Profile["FirstName"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Last Name :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="LastName"
                                               value="<?php echo $Profile["LastName"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="email" class="form-control" name="Email"
                                               value="<?php echo $Profile["Email"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="Phone"
                                               value="<?php echo $Profile["Phone"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">CIN :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="CIN"
                                               value="<?php echo $Profile["CIN"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">City :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="City"
                                               value="<?php echo $Profile["City"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="Address"
                                               value="<?php echo $Profile["Address"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Password</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="password" class="form-control" name="Password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Password Repeat</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="password" class="form-control" name="PasswordRepeat">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" name="submit"
                                               value="Save Changes">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </body>
        <script>
            function previewFile() {
                var preview = document.querySelector('img');
                var file = document.querySelector('input[type=file]').files[0];
                var reader = new FileReader();

                reader.addEventListener("load", function () {
                    preview.src = reader.result;
                }, false);

                if (file) {
                    reader.readAsDataURL(file);
                }
            }

            $(function () {
                $('#profile-image1').on('click', function () {
                    $('#profile-image-upload').click();
                });
            });
        </script>
        </html>
        <?php
    }
}
?>