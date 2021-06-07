<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add an offer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

</head>
<style>
    body {
  font-family: sans-serif;
  background-color: #eeeeee;
}

.file-upload {
  background-color: #ffffff;
  width: 300px;
  
  margin: 0;
  padding-right: 10px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #226281;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #226281;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #66AAA7;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}
h6 {
    font-size: 1vw!important;
}
.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {

  border: 4px dashed #02356C ;
  background-image:url('./Ressources/Uploads/index.png');
  position: relative;
  height: 180px;
  margin-bottom: 45px;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #66AAA7;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  font-size: 1.5vw!important;
  text-transform: uppercase;
  color: #142850;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 300px;
  max-width: 300px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}
input{
    width:50px;
}
body{
    overflow: hidden;
}

</style>
<body>

<?php include 'nav_Connected.php';?>

    <div style="width:100%;margin-top:20px;" class="container-fluid">
        <form action="Scripts/S_offerAdd.php" method="post" enctype='multipart/form-data'>

        <div class="main-body row">
        <div  class="col-md-6">
          <div style="width:80%;margin-top:100px;">
<img  src="Ressources/Uploads/illu2.svg" class="img-fluid" alt="...">
</div>
          </div>
          <div class="col-md-6">
        <div style="margin-right:90px;width:650px;"class="card">
          <div class="card-body">
          <div class="row">
          
                <div class="col-md-6" style="border-right:2px solid #95b1af;">
            <div class="file-upload">

  <div class="image-upload-wrap">
    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
    
  </div>
  <div class="file-upload-content">
    <img class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button style="width:250px;height:40px;" type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
</div>
 
                    
                            <div class="row mb-3">
                                
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="brand" class="form-control" value="Brand">
                                </div>
                            </div>
                            <div class="form-group">
  <label for="sel1">Select your VIP option :</label>
  <select style="background-color: #dbece5;color:#02356C;width:210px;" class="form-control" id="sel1">
    <option>novip</option>
    <option>1weekvip</option>
    <option>2weeksvip</option>
  </select>
</div> 

<div class="form-group">
  <label for="sel1">Select a category :</label>
  <select style="background-color: #dbece5;color:#02356C;width:210px;" class="form-control" id="sel1">
    <option>Sports</option>
    <option>Classic</option>
    <option>Family</option>
  </select>
</div> 
                            
                   
           
                </div>
                <div class="col-md-6">
                <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">From:</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                <input type="date" placeholder="date-start" name="date_start" class="form-control" > 
                                </div>
                                <div style="margin-left:80px;" class="col-sm-8 text-secondary">
                               <input type="time" name="time_start" class="form-control" > 
                                </div>
                            </div>
                            <br>
                <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">To:</h6>
                                </div>
                                <div class="col-sm-8 text-secondary">
                                <input type="date" name="date_end" class="form-control" > 
                                </div>
                                <div style="margin-left:80px;" class="col-sm-8  text-secondary">
                                <input type="time" name="time_end" class="form-control" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <h6 class="mb-0">Description  :</h6>
                                </div>
                                <div style="margin-left:80px;" class="col-sm-9 text-secondary">
                                    <textarea rows="4" type="text" name="textarea" class="form-control" value=" "></textarea>
                                    <div style="margin-top:10px;display: flex;justify-content:flex-end;width:100%;">
                                    <button  style="background-color:#02356C;margin-top:20px;"name="submit" class="btn btn-primary">Save changes</button>
</div>
                                </div>
                              
                              
                                
                            
                            </div>
                            </div>
                           
                            </div>
                </div>
                
            </div>
            </div>
          </div>       

                  </div>
            
        </div>
        </form>  
    </div>
    <script>
        function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});

    </script>
</body>

</html>