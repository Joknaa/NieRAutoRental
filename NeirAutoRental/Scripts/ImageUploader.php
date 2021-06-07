<?php
$hostName = "localhost";
$userName = "root";
$password = "1234";
$database = "neirautorental";
$GLOBALS["Connection"] = mysqli_connect($hostName, $userName, $password, $database);


if (isset($_POST['but_upload'])) {

    $name = $_FILES['file']['name'];
    $target_dir = "Ressources/Uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {
        // Upload file
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name)) {
            // Insert record
            //$query = "insert into images(name) values('".$name."')";
            //mysqli_query($con,$query);

            $stmt = $GLOBALS["Connection"]
                ->prepare("UPDATE neirautorental.cars SET Image = ? WHERE ID_Car = 1");
            $stmt->bind_param("s", $name);
            $stmt->execute();
        }
    }
}


$sql = "select Image from neirautorental.cars where ID_Car=1";
$result = mysqli_query($GLOBALS["Connection"],$sql);
$row = mysqli_fetch_array($result);

$image = $row['Image'];
$image_src = "Ressources/Uploads/".$image;

?>
<img src='<?php echo $image_src; ?>'>

?>

<form method="post" action="ImageUploader.php" enctype='multipart/form-data'>
    <input type='file' name='file'/>
    <input type='submit' value='Save name' name='but_upload'>
</form>
