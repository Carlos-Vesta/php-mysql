<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Statement</title>
</head>

<body>
    <h4>Control Statement</h4>
    <br><br><br>

</body>
<?php
        echo "<strong> WHILE LOOP </strong>" . "<br><br>";
        echo " - Executa um bloco de instrucoes em forma repetida, 
        desde que a condicao especificada seja verdadeira." . "<br> 
        Normalmente se usa o WHILE, quando nao se sabe o numero de itercacoes que ocorrerao no loop.";
        echo "<br><br><br>";

        echo "<em>Vamos criar um loop, que imprima numeros inteiros de 1 a 10</em>" . "<br><br>";


        $numero_inteiro = 1;

        while ($numero_inteiro <= 10) {
            echo $numero_inteiro . "<br>";
            $numero_inteiro++;
        }


    ?>

</html>