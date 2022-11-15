<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informações recebidas</title>

  <style>

  * {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  h1 {
    font-size: 2.5rem;
    background-color: #0377fc;
    border-radius: 8px;
    padding: 8px;
  }

  span {
    font-size: 1.5rem;
  }

  </style>

</head>
<body>
  <h1>Informações recebidas por GET</h1>
  <?php

  echo "<div>";
  echo "<span><strong>Nome</strong>: " . $_GET["nome"] . "</span><br>";
  echo "<span><strong>Idade</strong>: " . $_GET["idade"] . "</span><br>";
  echo "<span><strong>Rua</strong>: " . $_GET["rua"] . "</span><br>";
  echo "<span><strong>Cidade</strong>: " . $_GET["cidade"] . "</span><br>";
  echo "</div>";

  ?>
</body>
</html>