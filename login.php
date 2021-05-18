<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"> </script>

    <title>LOGIN</title>
</head>
<body>
<div class="container">
            <div class="col-md-6 col-md-offset-3 col-xs-12">
                <!-- @ Start login box wrapper -->
                <div class="blmd-wrapp">
                        <div class="blmd-color-conatiner ripple-effect-All"></div>
                        <div class="blmd-header-wrapp ">
                        <div class="blmd-switches">
                             <button class="btn btn-circle btn-lg btn-blmd ripple-effect btn-success blmd-switch-button">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                                 </svg>
                              </button>
                        </div> 
                        
                    </div> 
                    <div class="blmd-continer">
                        <!-- @ Login form container -->
                        <form action="post" class="clearfix" id="login-form">
                            <h1>Login Page</h1>
                            <div class="col-md-12">
                                
                                <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input style="left:37%;"type="text" name="username" autocomplete="off" id="email" class="form-control">
                                        <label style="left:37%;"class="blmd-label">Email :</label>
                                    </div>
                                </div>
                                <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input style="left:37%;" type="password" name="password" autocomplete="off" id="password" class="form-control">
                                        <label style="left:37%;" class="blmd-label">Password :</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="button" class="btn btn-blmd ripple-effect btn-success btn-lg btn-block">Login</button>
                            </div>
                            <br/>
                        </form>
                        <!-- @ Login form container -->
                        <form action="post" class="clearfix form-hidden" id="Register-form">
                            <div class="col-md-12">
                            <div class="flex">
                                <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input type="text" name="fullname" autocomplete="off" id="fullname" class="form-control">
                                        <label class="blmd-label">Full name :</label>
                                    </div>
                                </div>
                                <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input type="text" name="email" autocomplete="off" id="email" class="form-control">
                                        <label class="blmd-label">Email :</label>
                                    </div>
                                </div>
                                <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input type="password" name="password" autocomplete="off" id="password" class="form-control">
                                        <label class="blmd-label">Password :</label>
                                    </div>
                                </div>
                                 <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input type="password" name="rePassword" autocomplete="off" id="password" class="form-control">
                                        <label class="blmd-label">Repeat Password :</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex2">
                                <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input type="text" name="text" autocomplete="off" id="cin" class="form-control">
                                        <label class="blmd-label">CIN :</label>
                                    </div>
                                </div>
                                <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input type="text" name="text" autocomplete="off" id="status" class="form-control">
                                        <label class="blmd-label">Status :</label>
                                    </div>
                                </div>
                                <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input type="text" name="text" autocomplete="off" id="ville" class="form-control">
                                        <label class="blmd-label">Ville :</label>
                                    </div>
                                </div>
                                <div class="input-group blmd-form">
                                    <div class="blmd-line">
                                        <input type="text" name="text" autocomplete="off" id="Address" class="form-control">
                                        <label class="blmd-label">Address :</label>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="button" class="btn btn-blmd ripple-effect btn-warning btn-lg btn-block">Register</button>
                            </div>
                            <br/>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
		<script src="login.js"> </script>
</body>
</html>