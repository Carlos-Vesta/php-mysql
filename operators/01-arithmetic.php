<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operators</title>
</head>

<body>
    <?php
        // - Adicao (+)
        // - Subtracao (-)
        // - Multiplicacao (*)
        // - Divisao (/)
        // - Modulo ou Resto da Divisao (%)


        $x = 12;
        $y = 3;
        $adicao = $x + $y;
        $subtracao = $x - $y;
        $multiplicacao = $x * $y;
        $divisao = $x / $y;
        $moduloRD = $x % $y;

        echo "Adicao: {$x} + {$y} = {$adicao}" . "<br>";
        echo "Subtracao: {$x} + {$y} = {$subtracao}" . "<br>";
        echo "Multiplicacao: {$x} + {$y} = {$multiplicacao}" . "<br>";
        echo "Divisao: {$x} + {$y} = {$divisao}" . "<br>";
        echo "Modulo ou Resto da Divisao: {$x} + {$y} = {$moduloRD}" . "<br>";



    ?>

</body>

</html>