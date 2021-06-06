<?php
include_once 'DatabaseConfig.php';
if (isset($_POST["submit"])) ;
{
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $Repassword = $_POST['Repass'];
    $cin = $_POST['cin'];
    $ville = $_POST['ville'];
    $adresse = $_POST['adresse'];
    $usertype = $_POST['type'];
    $name = $_FILES['file']['name'];
    $target_dir = "../Ressources/Uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    if (in_array($imageFileType, $extensions_arr)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name)) {

            $user_check_query = "SELECT * FROM neirautorental.users WHERE Email='$email' LIMIT 1";
            $result = mysqli_query($GLOBALS["Connection"], $user_check_query);
            if (mysqli_num_rows($result)) {
                echo('This email is already being used');
            } else {
                if ($password == $Repassword) {
                    $query = "INSERT INTO neirautorental.users (FirstName, LastName, email, Password, CIN, City, Address, UserType, Image ) 
              VALUES('$FirstName','$LastName', '$email','$password', '$cin','$ville','$adresse','$usertype','$name')";
                    if (mysqli_query($GLOBALS["Connection"], $query)) {
                        header('location: ../login.php');

                    } else {
                        echo "Error: " . $query . " " . mysqli_error($GLOBALS["Connection"]);
                    }
                    mysqli_close($GLOBALS["Connection"]);
                } else {
                    header('location: ../register.php');
                    echo('password is incorrect');
                }
            }
        }
    }
}

?>
