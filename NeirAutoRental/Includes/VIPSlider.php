<?php include_once "Scripts/S_OfferManager.php"?>
<?php
//condb
$con= mysqli_connect("localhost","root","oknaa","neirautorental") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
//query
$query = "SELECT * FROM slider ORDER BY ID DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);
//.com
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="bootstrap.bundle.min.js" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>

</head>
<header >
<div style="padding:0;" class="col-md-12 col-xs-12">
          <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
            <ol class="carousel-indicators">
              <?php
              $i=0;
              foreach($result as $row){
              $actives='';
              if($i==0){
              $actives='active';
              }
              ?>
              <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i;?>" class="<?php echo $actives;?> ">
                
              </li>
              <?php $i++;} ?>
            </ol>
            <div class="carousel-inner">
              <?php
              $i=0;
              foreach($result as $row){
              $actives='';
              if($i==0){
              $actives='active';
              }
              ?>
              <div class="carousel-item <?php echo $actives;?>">
                <a href="" target="_blank">
      
                        <h2 style="width:100%;height:73%;position:absolute;Z-index:99;color:white;display:flex;align-items:flex-end;justify-content:center;" class="display-4"><?php echo $row['Name'];?></h2>
                        
                        <div style="width:100%;height:93%;color:white;position:absolute;Z-index:99;display:flex;align-items:flex-end;justify-content:center;font-size:25px;text-align:center;">
                        <p style="width:50%;" class="lead"><?php echo $row['Description'];?></p>
                        </div>
                        <img style="bottom:5px;position:absolute;" class="d-block w-100" src="<?php echo $row['Image_path'];?>" alt="devbanban">
                </a>
              </div>
              <?php 
              $i++;}
              mysqli_close($con);
              //.com
              ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          
        </div>
      </div>
    </div>
</header>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.slim.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>