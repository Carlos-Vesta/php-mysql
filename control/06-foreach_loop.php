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
        echo "<strong> FOREACH </strong>" . "<br><br>";
        echo " - O loop foreach funciona apenas em arrays e é usado para percorrer cada par chave/valor em um array.";
        echo "<br><br><br>";


        /*

        foreach ($array as $value) {
            code to be executed;
        }

        */

        $nomes = array("Carlos", "Paula", "Marla", "Tina");

        foreach ($nomes as $nome) {
            echo "O meu nome eh: " . $nome;
            echo "<br>";
        }

        echo "<br><br>";




        // O foreach tambem eh usado para arrays associativos.
        // Os arrays associativos tem um achave ($key) e um valor ($value)
        
        $pessoa = array (
            "Nome" => "carlos",
            "Apelido" => "Vesta",
            "Genero" => "Masculino",
            "Idade" => 30
        );

        echo "Os meus dados pessoas sao: " . "<br>";

        foreach ($pessoa as $key => $value) {
            
            echo $key . ": " . $value;
            echo "<br>";

        }

    ?>





</html>