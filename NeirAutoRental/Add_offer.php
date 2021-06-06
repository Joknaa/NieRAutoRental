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

    <?php include 'nav_Connected.php';?>
    <div class="container">
        <form action="Scripts/S_offerAdd.php" method="post" enctype='multipart/form-data'>

        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                    
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
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
                                    <input type="text" name="brand" class="form-control" value="Brand">
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
                                    <input type="text" name="price" class="form-control" value="Price">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Date start :</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <input type="date" name="date_start" class="form-control" > 
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Hour start :</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                               <input type="time" name="time_start" class="form-control" > 
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Date End :</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <input type="date" name="date_end" class="form-control" > 
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Hour End :</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <input type="time" name="time_end" class="form-control" >
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
                                <input type="file" name="file" id="file" accept="image/*" >
                                
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
                                <button class="btn"  name="submit" class="btn btn-primary px-4">ADD</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
             
            </div>
        </div>
        </form>  
    </div>
</body>

</html>