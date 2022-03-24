<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array</title>
</head>

<body>
    <h1>Multidimensional Array</h1>
    <br><br><br><br>

    <?php
    // Multidimensional Array

    // Expensive Cars
    // Ferrari, Porshe, Lamborguine

    // Inexpensive cars
    // Toyota, Nissan, Ford

    $carros = array(
        "Expensive" => array("Ferrari", "Porshe", "Lamborguine"),
        "Inexpensive" => array("Toyota", "Nissan", "Ford")
    );

    echo $carros["Expensive"][0];
    echo "<br><br>";

    echo $carros["Inexpensive"][2];


    ?>

</body>

</html>