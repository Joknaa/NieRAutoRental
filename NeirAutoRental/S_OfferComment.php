
<?php
include_once 'database.php';
if (isset($_POST["submit"])); 
{
    
    $first = $_POST['firstname'];
    $last = $_POST['lastname'];
    $type = $_POST['reviewType'];
    $score =  $_POST['score'];
    $content =$_POST['comment'];
    $user_ID=10;
    $offer_ID=31;
    $query = "INSERT INTO comments (Score, Content, Type, fname,lname ) 
              VALUES('$score', '$content','$type','$first','$last')";
              echo'7ta lhnaa khdaam mzyaan';
    if (mysqli_query($conn, $query)) {
        $ID=mysqli_insert_id($conn);
        echo'7ta lhnaa mzyaan';
      //  "SELECT SCOPE_IDENTITY() AS ID";
        $queryy = "INSERT INTO offercomments (ID_User,ID_Comment,ID_Offer ) 
        VALUES('$user_ID','$ID','$offer_ID')";
        if (mysqli_query($conn, $queryy)) {
        echo'hello niama';          
        header('location:OfferEvaluation_Form.php');
	 } else {
		echo "Error: " . $query . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);

}

}


?>
