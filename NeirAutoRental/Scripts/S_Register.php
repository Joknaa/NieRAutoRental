<?php
include_once 'DatabaseConfig.php';
if (isset($_POST["submit"]));
{
    $firstname =$_POST['Firstname'];
    $lastname =$_POST['Lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Repassword = $_POST['Repassword'];
    $cin = $_POST['CIN'];
    $city =  $_POST['City'];
    $address =$_POST['Address'];
    $UserType=$_POST['type'];
  

    $user_check_query = "SELECT * FROM neirautorental.users WHERE 	Email='$email' LIMIT 1";
    $result = mysqli_query($GLOBALS["Connection"], $user_check_query)
    or exit(mysqli_error($GLOBALS["Connection"]));
    if (mysqli_num_rows($result))
    {
      echo('This email is already being used');
  }
      else{
        if ($password==$Repassword){
       

 
    $query = "INSERT INTO neirautorental.users (firstname,lastname, email, password, cin, city, Address,UserType, ID_User ) 
              VALUES('$Firstname','$Lastname', '$email','$Password', '$CIN','$City','$Address','$UserType')";
    if (mysqli_query($GLOBALS["Connection"], $query)) {
      header('location: login.php');
		

	 } else {
		echo "Error: " . $query . "
" . mysqli_error($GLOBALS["Connection"]);
	 }
	 mysqli_close($GLOBALS["Connection"]);
}else {
  header('location: register.php');
  echo('password is incorrect');
}
}

}

?>
