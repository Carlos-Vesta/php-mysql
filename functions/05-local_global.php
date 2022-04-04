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
        echo "<strong> Escopo Local e Global </strong>";
        echo "<br><br><br>";

        echo "<strong> 1 - Variavel Local:</strong> so pode ser usada dentro da funcao. <br><br>";
        echo "Ex: <em>function varLocal() { x = 20 }</em>";




        echo "<br><br><br>";
        // *********************************************************************************


        echo "<strong> 2 - Variavel Global:</strong> pode ser acessada de qualquer sitio fora da funcao ou classe. <br>";
        echo "Para se usar uma variavel dentro da funcao, temos antes que defini-la a nivel global, isto eh, criar a variavel fora da funcao. <br><br>";
        echo "Ex: y = 20; <br> <em>function varGlobal( y ) { x = 20 }</em>";

       
       
    ?>

</body>

</html>