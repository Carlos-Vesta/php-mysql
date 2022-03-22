<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>
    <h1>Variables</h1>

    <?php
        $first_name = "Carlos";
        $middle_name = "Fernandes";
        $last_name = "Vesta";
        $age = 33;

        echo "O meu primeiro nome eh {$first_name}, o segundo eh {$middle_name} e o meu apelido eh {$last_name}." . "<br>";
        echo "O meu nome completo eh: <strong>{$first_name} {$middle_name} {$last_name}</strong>." . "<br>";
        echo "Eu tenho {$age} anos de idade."
    ?>

</body>

</html>