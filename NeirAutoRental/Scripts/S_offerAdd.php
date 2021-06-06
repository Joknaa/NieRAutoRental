<?php
include_once 'DatabaseConfig.php';

function AddOffer($ID_User) {
    $text = $_POST['textarea'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $city = $_POST['City'];
    $category = $_POST['Category'];
    $date1 = $_POST['date_start'];
    $date2 = $_POST['date_end'];
    $hour1 = $_POST['time_start'];
    $hour2 = $_POST['time_end'];

    $name = $_FILES['file']['name'];
    $target_dir = "Ressources/Uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    if (in_array($imageFileType, $extensions_arr)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name)) {
            $stmt = $GLOBALS["Connection"]
                ->prepare("INSERT INTO neirautorental.cars (Category, Brand, Model, Price, Image) VALUES(?, ?, ?, ?, ?)");
            $stmt->bind_param("ssis", $category, $brand, $model, $price, $name);
            if ($stmt->execute()) {
                $ID = mysqli_insert_id($GLOBALS["Connection"]);

                $stmt = $GLOBALS["Connection"]
                    ->prepare("INSERT INTO neirautorental.offers (ID_User,ID_Car,Date_start, Date_End, Hour_Start, Hour_End,Description,City )VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("iissssss", $ID_User, $ID, $date1, $date2, $hour1, $hour2, $text, $city);
                //$queryy = "INSERT INTO neirautorental.offers (ID_User,ID_Car,Date_start, Date_End, Hour_Start, Hour_End,Description,City )
       // VALUES('$ID_User','$ID','$date1', '$date2','$hour1', '$hour2','$text','$city')";
                if (!$stmt->execute())
                 echo "Error:  ". mysqli_error($GLOBALS["Connection"]);
            } else echo "ERROR: File Extension Not Supported";
        } else echo "ERROR: File Cannot be Moved";
    } else echo "ERROR: File Extension Not Supported";
}

function UpdateOffer($ID_User) {
    $text = $_POST['textarea'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $city = $_POST['City'];
    $category = $_POST['Category'];
    $date1 = $_POST['date_start'];
    $date2 = $_POST['date_end'];
    $hour1 = $_POST['time_start'];
    $hour2 = $_POST['time_end'];

    $name = $_FILES['file']['name'];
    $target_dir = "Ressources/Uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    if (in_array($imageFileType, $extensions_arr)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name)) {
            $stmt = $GLOBALS["Connection"]
                ->prepare("INSERT INTO neirautorental.cars (Category, Brand, Model, Price, Image) VALUES(?, ?, ?, ?, ?)");
            $stmt->bind_param("ssis", $category, $brand, $model, $price, $name);
            if ($stmt->execute()) {
                $ID = mysqli_insert_id($GLOBALS["Connection"]);

                $stmt = $GLOBALS["Connection"]
                    ->prepare("INSERT INTO neirautorental.offers (ID_User,ID_Car,Date_start, Date_End, Hour_Start, Hour_End,Description,City )VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("iissssss", $ID_User, $ID, $date1, $date2, $hour1, $hour2, $text, $city);
                //$queryy = "INSERT INTO neirautorental.offers (ID_User,ID_Car,Date_start, Date_End, Hour_Start, Hour_End,Description,City )
                // VALUES('$ID_User','$ID','$date1', '$date2','$hour1', '$hour2','$text','$city')";
                if (!$stmt->execute())
                    echo "Error:  ". mysqli_error($GLOBALS["Connection"]);
            } else echo "ERROR: File Extension Not Supported";
        } else echo "ERROR: File Cannot be Moved";
    } else echo "ERROR: File Extension Not Supported";
}

