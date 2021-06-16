<?php
include_once 'DatabaseConfig.php';

function AddOffer($ID_User) {
    $text = $_POST['textarea'];
    $brand = $_POST['brand'];
   // $model = $_POST['model'];
   // $price = $_POST['price'];
  // $city = $_POST['City'];
    $category = $_POST['Category'];
    $date1 = $_POST['date_start'];
    $date2 = $_POST['date_end'];
    $hour1 = $_POST['time_start'];
    $hour2 = $_POST['time_end'];
    $vip = $_POST['VIP'];

    $name = $_FILES['file']['name'];
    $target_dir = "Ressources/Uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    if (in_array($imageFileType, $extensions_arr)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name)) {
            $stmt = $GLOBALS["Connection"]
                ->prepare("INSERT INTO neirautorental.cars (Category, Brand,  Image) VALUES(?, ?, ?)");
            $stmt->bind_param("ssis", $category, $brand,  $name);
           
            if ($stmt->execute()) {
                $ID = mysqli_insert_id($GLOBALS["Connection"]);

                $stmt = $GLOBALS["Connection"]
                    ->prepare("INSERT INTO neirautorental.offers (ID_User,ID_Car,Date_start, Date_End, Hour_Start, Hour_End,Description,isVIP )VALUES(?, ?, ?, ?, ?, ?, ?,?)");
                $stmt->bind_param("iissssss", $ID_User, $ID, $date1, $date2, $hour1, $hour2, $text, $vip);
                if (!$stmt->execute())
                 echo "Error:  ". mysqli_error($GLOBALS["Connection"]);
            } else echo "ERROR: File Extension Not Supported";
        } else echo "ERROR: File Cannot be Moved";
    } else echo "ERROR: File Extension Not Supported";
}

function UpdateOffer($ID_Offer, $ID_Car) {
    $text = $_POST['textarea'];
    $brand = $_POST['Brand'];
 //  $model = $_POST['model'];
  // $price = $_POST['price'];
   // $city = $_POST['City'];
    $category = $_POST['Category'];
    $date1 = $_POST['Date_Start'];
    $date2 = $_POST['Date_End'];
    $hour1 = $_POST['Hour_Start'];
    $hour2 = $_POST['Hour_End'];

    $name = $_FILES['file']['name'];
    $target_dir = "Ressources/Uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    if (in_array($imageFileType, $extensions_arr)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name)) {
            $stmt = $GLOBALS["Connection"]
                 ->prepare("UPDATE neirautorental.cars SET Brand = ? AND Category = ? AND Image = ? WHERE ID_Car = ?");
            $stmt->bind_param("sssi", $brand, $category, $name, $ID_Car);
            
           if ($stmt->execute()) {
                $ID = mysqli_insert_id($GLOBALS["Connection"]);

                $stmt = $GLOBALS["Connection"]
                    ->prepare("UPDATE neirautorental.offers SET Date_start = ? AND Date_End = ? AND Hour_Start = ? AND Hour_End = ? AND Description = ? WHERE ID_Offer = ?");
                $stmt->bind_param("sssssi", $date1, $date2, $hour1, $hour2, $text, $ID_Offer);
                if (!$stmt->execute())
                    echo "Error:  ". mysqli_error($GLOBALS["Connection"]);
            } else echo "ERROR: File Extension Not Supported";
        } else echo "ERROR: File Cannot be Moved";
    } else echo "ERROR: File Extension Not Supported";
}