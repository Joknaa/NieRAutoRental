
<?php
include_once 'database.php';
if (isset($_POST["submit"])); 
{
    $username =$_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $Repassword = $_POST['Repass'];
    $cin = $_POST['cin'];
    $ville =  $_POST['ville'];
    $adresse =$_POST['adresse'];
    $usertype=$_POST['type'];
    $name = $_FILES['file']['name'];
    $target_dir = "Scripts/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif");
    if (in_array($imageFileType,$extensions_arr)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name)) {
   

    $user_check_query = "SELECT * FROM users WHERE 	Email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query)
    or exit(mysqli_error($conn));
    if (mysqli_num_rows($result))
    {
      echo('This email is already being used');
  }
      else{
        if ($password==$Repassword){
       

 
    $query = "INSERT INTO users (UserName, email, Password, CIN, City, Address,userType,Image ) 
              VALUES('$username', '$email','$password', '$cin','$ville','$adresse','$usertype','$name')";
    if (mysqli_query($conn, $query)) {
      header('location: login.php');
		

	 } else {
		echo "Error: " . $query . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}else {
  header('location: register.php');
  echo('password is incorrect');
}
}
        }}
}

?>
