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

    <?php


      echo "<strong> SWITCH </strong>" . "<br><br>";
      echo " - Seleciona uma das varias instrucoes de codigo para executar.";
      echo "<br><br><br>";

      

      $usuario = "Leitor";

      echo "Permissoes do usuario: " ."<strong>" . $usuario . "</strong>" . "<br><br>";

      switch ($usuario) {
          case 'Admin':
              echo "Seja bem vindo " . $usuario;
          break;

          case 'Editor':
              echo "Seja bem vindo " . $usuario;
          break;

          case 'Leitor':
              echo "Seja bem vindo " . $usuario;
          break;

          case 'IT':
              echo "Seja bem vindo " . $usuario;
          break;

          default:
              echo "Usuario sem permissoes definidas.";
      }


    ?>

</body>

</html>