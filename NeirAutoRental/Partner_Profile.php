<?php
require "Scripts/DatabaseManager.php";
$ID_User = 1;
if (isset($_POST["submit_ProfileEdit"])) UpdateProfile();
?>

<!DOCTYPE html>
<html>
<head>
    <title>EDIT PROFILE</title>
    <link rel="stylesheet" type="text/css" href="CSS/Edit_profile.css">
    <link rel="import" href="Includes/header.html">
    <meta charset="UTF-8">
</head>

<body>
<center>
    <form class="box" action="#" method="POST">
        <img src="Ressources/Images/test.png" alt=""/>
        <input type="file" name="" id="file" accept="image/*">
        <label for="file">Edit profile picture</label>
<?php $profileData = GetProfile($ID_User); ?>
        <input id="hidden" type="text" name="ID_User" value="<?php echo $profileData["ID_User"] ?>" hidden>
        <input type="text" name="FirstName" placeholder="First name" value="<?php echo $profileData["FirstName"] ?>">
        <input type="text" name="LastName" placeholder="Last name" value="<?php echo $profileData["LastName"]?>">
        <input type="text" name="CIN" placeholder="CIN" value="<?php echo $profileData["CIN"]?>">
        <input type="text" name="City" placeholder="City" value="<?php echo $profileData["City"]?>">
        <input type="text" name="Address" placeholder="Address" value="<?php echo $profileData["Address"]?>">
        <input type="text" name="Phone" placeholder="Phone" value="<?php echo $profileData["Phone"]?>">
        <input type="email" name="Email" placeholder="Email" value="<?php echo $profileData["Email"]?>">
        <input type="password" name="Password">
        <input type="password" name="PasswordRepeat">
        <div class="btns">
            <button type="submit" name="submit_ProfileEdit">Save</button>
            <button type="reset">Cancel</button>
        </div>
    </form>
</center>
</body>
</html>