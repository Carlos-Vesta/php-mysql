<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 06</title>
</head>

<body>
    <h1>Data Types</h1>
    <br><br><br>



    <h4> <u>Exercise 06 - Expenses</u> </h4>

    <!-- Exercise 06 - Expenses -->
    <p> Create any array <strong><em>expenses</em></strong>, with the biggest expenses of the month.<br>
        Loop through the array and add the expenses to any integer <strong><em>totalAmount</em></strong>.<br>
        Finally, display the total expenses that you had and the amount of values
        <strong><em>amountOfExpenses</em></strong>
        you had stored inside of your array.
    </p>

    <p><strong>Expected output:</strong> <em> My (<strong><em>amountOfExpenses</em></strong>) biggest expenses were
            (<strong><em>totalAmount</em></strong>).</em></p>



    <?php

    $expenses = array(2000, 3100, 800, 1500, 2200);
    $totalAmount = 0;
    $amountOfExpenses = 0;


    
    foreach ($expenses as $expense) {
        /*

        O $totalAmount tem como valor inicial zero (0),
        e adicona pelo primeiro valor do array que eh 2000 e 
        passa a ter um novo valor resultante do somatorio desses dois valores.

        */
        $totalAmount = $totalAmount + $expense;

        /*

        O $amountOfExpenses tem como valor inicial zero (0), 
        que eh adicionado por um (1) cada vez que eh chamado
        $amountOfExpenses = $amountOfExpenses + 1;

        */
        $amountOfExpenses = $amountOfExpenses + 1;
    }

    echo "O numero de despesas do mes eh <strong>{$amountOfExpenses}</strong>, 
    e o total de despesas corresponde a " . "<strong>" . number_format($totalAmount, 2, ".") . "</strong>" ;
  
    ?>

</body>

</html>