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
        echo "<strong> DO WHILE LOOP </strong>" . "<br><br>";
        echo " - Executa o bloco de instrucoes apenas uma vez, em seguida faz a verificacao da condicao. <br> 
        Caso a condicao seja verdadeira, volta a executar novamente o bloco de instrucoes repetidamente 
        ate que a condicao seja falsa." . "<br>";
        echo "<br><br><br>";

        echo "<em>Vamos criar um loop, que imprima numeros inteiros de 20 a 30</em>" . "<br><br>";


        $numero_inteiro = 20;

        do {
            echo $numero_inteiro . "<br>";
            $numero_inteiro ++;

        } while ($numero_inteiro <= 30);


    ?>

</html>