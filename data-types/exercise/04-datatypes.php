<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 04</title>
</head>

<body>
    <h1>Data Types</h1>
    <br><br><br>



    <h4> <u>Exercise 04 - Countries and Capitals</u> </h4>

    <!-- Exercise 04 - Countries and Capitals -->
    <p> Create any array <strong>countries</strong>, that display 5 countries and the capital name.</p>


    <?php

    $countries = array(
        "Mozambique" => "Maputo",
        "South Africa" => "Joanesburgue",
        "Angola" => "Luanda",
        "Portugal" => "Lisboa",
        "Brasil" => "Brasilia"
    );

    foreach ($countries as $key => $value) {
        echo "O pais <strong>{$key}</strong> tem como capital <strong>{$value}</strong>" . "<br>";
    }

    ?>

</body>

</html>