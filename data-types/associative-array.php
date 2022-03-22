<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>

<body>
    <h1>Associative Array</h1>
    <br><br><br><br>

    <?php

        $carros = array("Mercedes" => 50.500, "BMW" => 60.000, "Audi" => 46.790);
        
        var_dump($carros);
        echo "<br><br>";

        print_r($carros);
        echo "<br><br>";


        foreach ($carros as $key => $value){
            echo "O meu carro {$key} tem {$value} de quilometragem." . "<br>";
        }

    ?>

</body>

</html>