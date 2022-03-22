<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
</head>

<body>
    <h1>Data Types</h1>
    <br><br>


    <?php

    // Integer = numeric Values
    // Floating point or Float = Decimal values
    // Strings
    // Booleans
    // Array
    // Object
    // Resource
    // Null

    // Integer Data types
    echo "<h3>Integer</h3>" . "<br>";

    $valor1 = 100;
    $valor2 = 200;
    $soma = $valor1 + $valor2;

    echo "A soma de {$valor1} e {$valor2} = {$soma}";
    echo "<br><br><br><br>";


    // Floating Data types
    echo "<h3>Float</h3>" . "<br>";

    $teste1 = 12.4;
    $teste2 = 9.3;
    $media = ($teste1 + $teste2) / 2;

    echo "Teste 1 = {$teste1}" . "<br>";
    echo "Teste 2 = {$teste2}" . "<br>";
    echo "Media = {$media}";
    echo "<br><br><br><br>";


    // String Data types
    echo "<h3>String</h3>" . "<br>";

    $marca = "Toyota";
    $cor = "Branco";
    $ano_fabrico = "2020";

    echo "O carro eh da marca <strong>{$marca}</strong>, cor <strong>{$cor}</strong> e o ano de fabrico eh <strong>{$ano_fabrico}</strong>";
    echo "<br><br><br><br>";



     // Booleans Data types
     echo "<h3>Booleans</h3>" . "<br>";

     $permite = true;
     $nao_permite = false;
     $nao_permite = 0;
     


     echo "Se o estudante tiver idade maior ou igual a 18 anos, pode permitir: <strong>{$permite}</strong>" . "<br>";
     echo "Se o estudante nao tiver idade maior ou igual a 18 anos, nao pode permitir: <strong>{$nao_permite}</strong>";


    ?>
</body>

</html>