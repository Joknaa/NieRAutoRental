
<?php
include_once 'DatabaseConfig.php';
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
  

    $user_check_query = "SELECT * FROM neirautorental.users WHERE 	Email='$email' LIMIT 1";
    $result = mysqli_query($GLOBALS["Connection"], $user_check_query)
    or exit(mysqli_error($GLOBALS["Connection"]));
    if (mysqli_num_rows($result))
    {
      echo('This email is already being used');
  }
      else{
        if ($password==$Repassword){
       

 
    $query = "INSERT INTO neirautorental.users (FirstName, email, Password, CIN, City, Address,userType ) 
              VALUES('$username', '$email','$password', '$cin','$ville','$adresse','$usertype')";
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
