<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Statement</title>
</head>

<body>
    <h4>Functions Statement</h4>
    <br><br><br>

    <?php
        echo "<strong> Parâmetro e Argumento </strong>" . "<br><br>";
        echo "<strong> 1 - Parâmetros: </strong>fazem referência às variáveis situadas entre os parênteses de um método ou função. <br>";
        echo "Ex: <em> <strong>function calculadora</strong> (parametro1, parametro2, ..., etc)</em> { ... } <br><br>";


        echo "<strong> 2 - Argumentos: </strong> são os valores atribuídos a esses parâmetros. <br>";
        echo "Ex: <em> <strong>function calculadora</strong> (parametro1, parametro2, ..., etc)</em> { ... } <br><br><br>";


        $val1 = 10;
        $val2 = 20;
        $val3 = 30;

        // Parametros
        function adicao ($val1, $val2, $val3 = 40) {
            echo $val1 + $val2 + $val3;
        }

        echo "Adicao = val1 + val2 + val3" . "<br>"; 
        echo "Adicao = {$val1} + {$val2} + {$val3}" . "<br>";

        
        // Argumentos
        adicao ($val1, $val2);
       
       
    ?>

</body>

</html>