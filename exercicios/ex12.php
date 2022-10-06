<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio Rendimento</title>
  <style>
    * {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 1.8rem;
    }
  </style>
</head>

<body>
  <?php
  $valorAplicado = 10000;
  $rendimentoMes = 0.005;
  $tempoAplicadoEmMeses = 3;


  $valorRendido = $valorAplicado;

  echo "<strong>A)</strong> <br>";
  for ($i = 1; $i <= $tempoAplicadoEmMeses; $i++) {
    $valorRendido = $valorRendido + $valorRendido * $rendimentoMes;
    echo "<strong>Valor de dividendos no ${i}° mês:</strong> R$" . round($valorRendido - $valorAplicado, 2) . "<br>";
  }

  echo "<br><strong>B)</strong> <br>";
  echo "<strong>Saldo da aplicação após ${tempoAplicadoEmMeses} meses:</strong> R$" . round($valorRendido, 2) . "<br>";

  $resto = round(fmod($valorRendido, 100), 2);
  $notasParaCadaCalc = ((round($valorRendido, 2) - round($resto, 2)) / 100) / 3;
  $notasParaCada = (int)$notasParaCadaCalc;
  $totalDeNotas = ((round($valorRendido, 2) - round($resto, 2)) / 100);
  $notasQueSobraram = $totalDeNotas - $notasParaCada * 3;
  $valorQueSobrou = $notasQueSobraram * 100;

  echo "<br><strong>C)</strong> <br>";
  echo "Serão <strong>$notasParaCada</strong> notas de R$100 para cada. Equiv: R$" . $notasParaCada * 100 . ".<br>";

  echo "<br><strong>D)</strong> <br>";
  echo "<strong>Sobrou:</strong>  R$" . round($valorQueSobrou + $resto, 2);
  ?>
</body>

</html>