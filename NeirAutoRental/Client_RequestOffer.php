<?php include_once "Scripts/S_OfferManager.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Offer Info</title>
</head>
<body>
<?php list($offer, $car) = DisplayOffer(1) ?>

<div>
    <img style="width:500px;height:340px;" src="Ressources/Images/Cars/<?php echo $car["Image"] ?>" alt="oups">
</div>
<form method="post">
    <input type="text" name="ID_Offer" value="<?php echo $offer["ID_Offer"] ?>" hidden>
    <h1><?php echo $car["Brand"] . ' ' . $car["Model"] ?></h1>
    <h4>Category: <?php echo $car["Category"] ?></h4>
    <h4>Fuel: <?php echo $car["Fuel"] ?></h4>
    <h4>Color: <?php echo $car["Color"] ?></h4>
    <h4>Price: <?php echo $car["Price"] ?> DH/Hour</h4>
    <br>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem voluptatibus<br>
        aliquid ipsa eius odio reiciendis quibusdam sit nulla autem quam neque, <br>
        perferendis reprehenderit omnis vel et dolorum quae delectus quasi.</p>
    <input name="submit" type="submit" value="Request Offer">

</form>

</body>
</html>