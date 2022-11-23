<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
  </style>
</head>

<body>
  <a href="../index.html">Voltar</a>
  <?php

  $hostname = "localhost";
  $username = "root";
  $password = "";
  $database = "database";

  $conn = new mysqli($hostname, $username, $password, $database);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM produtos";
  $result = $conn->query($sql);

  echo "<h1>Lista de produtos </h1> <br>";

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<strong>ID:</strong> " . $row["ID"] . " - <strong>Descrição:</strong> " . $row["descricao"] . " | <strong>Preço:</strong> R$" . $row["preco"] . " | <strong>Peso:</strong> " . $row["peso"] . " gramas" . " | <strong>Quantidade em estoque:</strong> " . $row["qntEstoque"] . " unidades" .   "<br>";
    }
  } else {
    echo "Nenhum produto encontrado.";
  }

  ?>
</body>

</html>