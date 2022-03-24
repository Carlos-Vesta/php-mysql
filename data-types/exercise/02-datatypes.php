<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 02</title>
</head>

<body>
    <h1>Data Types</h1>
    <br><br><br>


    <h4><u>Exercise 02 - value added Tax</u></h4>

    <!-- Exercise 02 - value added Tax -->
    <p> Create two variables <strong>price</strong> and <strong>vat</strong>. Create a new variable
        <strong>totalPrice</strong>, and calculate de vat on the price, vat and total price.
    </p>


    <?php

    $price = 250;
    $vat = 17;
    $vat_price = ($price + $vat) / 100;
    $total_price = $price + $vat_price;


    echo "Price = {$price}" . "<br>";
    echo "Vat = {$vat}" . "<br>";
    echo "Vat Price = {$vat_price}" . "<br><br>";

    echo "Total Price = Price + Vat Price" . "<br>";
    echo "Total Price = {$price} + {$vat_price}" . "<br>";
    echo "Total Price = {$total_price}";


    ?>

</body>

</html>