<?php
include_once 'DatabaseConfig.php';

if (isset($_POST["submit"]));
{
    $first = $_POST['firstname'];
    $last = $_POST['lastname'];
    $type = $_POST['reviewType'];
    $score =  $_POST['score'];
    $content =$_POST['comment'];
    $user_ID=10;
  
    $query = "INSERT INTO neirautorental.comments (Score, Content, Type, Firstname, Lastname ) 
              VALUES('$score', '$content','$type','$first','$last')";
              echo'7ta lhnaa khdaam mzyaan';
    if (mysqli_query($GLOBALS["Connection"], $query)) {
        $ID=mysqli_insert_id($GLOBALS["Connection"]);
        echo'7ta lhnaa mzyaan';
      //  "SELECT SCOPE_IDENTITY() AS ID";
        $queryy = "INSERT INTO neirautorental.profilecomments(ID_User,ID_Comment ) 
        VALUES('$user_ID','$ID')";
        if (mysqli_query($GLOBALS["Connection"], $queryy)) {
        echo'hello niama';          
        header('location:ClientEvaluation_Form.php');
	 } else {
		echo "Error: " . $query . "
" . mysqli_error($GLOBALS["Connection"]);
	 }
	 mysqli_close($GLOBALS["Connection"]);

}

}


?>
