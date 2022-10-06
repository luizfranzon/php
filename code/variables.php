<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>
    <?php

    $name = "Luiz";
    $biography = "\nNão eu não<br>";
    $favorite_food = "\npizza<br>";
    $place = "Brazil";
    $color = "Blue";

    echo $name . "<br>" . $biography . $favorite_food;

    //Variable Parsing

    echo "My name is $name i live in $place and my favorite color is $color<br>";
    echo "My name is ${name} i live in ${place} and my favorite color is ${color}";

    ?>
</body>

</html>