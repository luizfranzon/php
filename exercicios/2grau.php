<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleresp.css">
    <title>RESPOSTA</title>
</head>

<body>
    <?php

    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];

    $delta = ($b * $b) - (4 * $a * $c);

    if ($delta < 0) {
        echo "Não há raizes reais";
    } else if ($delta == 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        echo "A unica raiz é $x1";
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);

        echo "X1 =" . round($x1) . "<br>";
        echo "X2 =" . round($x2) . "<br>";
    }

    ?>

    <a href="./2grau.html"><button>Voltar</button></a>
</body>

</html>