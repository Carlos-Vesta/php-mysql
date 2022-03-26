<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 07</title>
</head>

<body>
    <h1>Data Types</h1>
    <br><br><br>



    <h4> <u>Exercise 07 - Weather Conditions</u> </h4>

    <!-- Exercise 07 - Weather Conditions -->
    <p> Create any array <strong><em>weather</em></strong>, of weather conditions with the following values:<br>
        - Rain, Sunshine, Clouds, Hail, Sleet, Snow, Wind.<br>
        Using the array variable for all the weather conditions, echo the following statement to be browse:
    </p>

    <p><strong>Expected output:</strong> <em>We've seen all kinds of weather this month.
            At the beginning of the month, we had Snow and Wind.<br>
            Then came Sunshine with a few Clouds and some Rain.
            At least we didn't get an Hail or Sleet.</em></p>



    <?php
        $weather = array(
            "Rain", 
            "Sunshine", 
            "Clouds", 
            "Hail", 
            "Sleet", 
            "Snow", 
            "Wind"
        );

        echo "We've a seen all kinds of weather this month.
        At the beginnin of the month, we had a <strong>{$weather[5]}</strong> and <strong>{$weather[6]}</strong>. <br>
        Then came <strong>{$weather[1]}</strong> with a few of <strong>{$weather[2]}</strong> and some <strong>{$weather[0]}</strong>. <br>
        At least we didn't get an <strong>{$weather[3]}</strong> or <strong>{$weather[4]}</strong>.";

    ?>

</body>

</html>