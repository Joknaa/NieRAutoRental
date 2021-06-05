<?php
include_once 'database.php';
{

    $text = $_POST['textarea'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $city = $_POST['City'];
    $category = $_POST['Category'];
    $date1 = $_POST['date_start'];
    $date2 = $_POST['date_end'];
    $hour1 = $_POST['time_start'];
    $hour2 = $_POST['time_end'];
    $user_ID = 1;
    $name = $_FILES['file']['name'];
    $target_dir = "Ressources/Uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif");
    if (in_array($imageFileType, $extensions_arr)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name)) {
            $query = "INSERT INTO neirautorental.cars (Category, Brand, Price, Image ) 
              VALUES('$category', '$brand','$price','$name')";
            echo '7ta lhnaa khdaam mzyaan';
            if (mysqli_query($GLOBALS["conn"], $query)) {
                $ID = mysqli_insert_id($GLOBALS["conn"]);
                echo '7ta lhnaa mzyaan';
                //  "SELECT SCOPE_IDENTITY() AS ID";
                $queryy = "INSERT INTO neirautorental.offers (ID_User,ID_Car,Date_start, Date_End, Hour_Start, Hour_End,Description,City ) 
        VALUES('$user_ID','$ID','$date1', '$date2','$hour1', '$hour2','$text','$city')";
                if (mysqli_query($GLOBALS["conn"], $queryy)) {
                    echo 'hello niama';
                    header('location: Partner_Offers.php');
                } else {
                    echo "Error: " . $query . "
" . mysqli_error($GLOBALS["conn"]);
                }
                mysqli_close($GLOBALS["conn"]);

            }

        }
    }
}

?>
