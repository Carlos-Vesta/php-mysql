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
        echo "<strong> Funções com valores de retorno </strong>" . "<br><br>";
        echo "Funções com retorno de valores, retornam valores para os programas onde foram chamados. <br><br>";
        echo "Em PHP, os argumentos podem ser passados de duas (2) formas em uma funcao:";
        echo "<br><br><br>";


        echo "<strong> 1 - Passando Argumentos por Valor </strong> <br>";
        echo "O valor do argumento muda dentro de uma função, mas o valor original fora da função nao muda.";
        echo "<br><br><br>";

        $numero1 = 10;
        $numero2 = 20;


        function add($numero1, $numero2) {
            $resultado = $numero1 + $numero2;
            return $resultado;
        }

        echo "A soma dos valores eh igual a: " . add($numero1, $numero2);
        // add($numero1, $numero2);




        echo "<br><br><br><br><br><br>";

// **************************************************************************************************************





        echo "<strong> 2 - Passando Argumentos por Referência </strong> <br>";
        echo "No PHP, os argumentos geralmente são passados ​​por valor, o que significa que uma cópia do valor é usada na função e a 
        variável que foi passada para a função não pode ser alterada. <br>
        Quando um argumento de função é passado por referência, as alterações no argumento também alteram a variável que foi passada. <br> 
        Para transformar um argumento de função em uma referência, o operador & é usado:";
        echo "<br><br><br>";


        $valor = 10;


        function porReferencia(&$valor) {
            $valor += 5;
        }
       

        porReferencia($valor);
        echo "O valor eh: " . $valor;


       
       
    ?>

</body>

</html>