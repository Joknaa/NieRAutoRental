<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datetimepicker.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datetimepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <form action="S_register.php" method="post" enctype='multipart/form-data'>
                                    <div class="form-label-group">
                                        <input type="text" id="name" name="username" class="form-control" placeholder="Your full name" required autofocus  >
                                        <label for="inputEmail">Full name :</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus  >
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required >
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="password" id="confirmpass" name="Repass" class="form-control" placeholder="Password" required  >
                                        <label for="confirmpass">Retype Password</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" id="cin" name="cin" class="form-control" placeholder="CIN :" required >
                                        <label for="cin">CIN :</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" id="ville" name="ville" class="form-control" placeholder="Ville :" required  >
                                        <label for="ville">Ville :</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" id="addresse" name="adresse" class="form-control" placeholder="Addresse :" required  >
                                        <label for="addresse">Addresse :</label>
                                    </div>
                                    <div class="form-label-group">
                                         <img src=""></image>
                                        <input type="file" name="file" id="file" style='margin-top:60px;' class="form-control" accept="image/*">
                                        <input type="image" class="col-sm-9 text-secondary" value="">

                                    </div>
                                    <br>
                                    <div class="">
                                        <label style="margin-top:-80px;margin-left:20px;" for="type">Choose a type:</label>
                                        <select style="margin-top:40px;margin-left:-100px;" name="type" id="type">
                                              <option value="partenaire">Partenaire</option> 
                                              <option value="client">Client</option> 
                                        </select>
                                    </div>
                                    <br>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                                    </div>
                                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" name="submit">Sign in</button>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Already a member?</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>