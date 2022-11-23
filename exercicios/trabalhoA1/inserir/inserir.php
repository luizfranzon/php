<?php 

$descricao = $_POST['descricao'];
$preco = (float)$_POST['preco'];
$peso = (int)$_POST['peso'];
$qntEstoque = (int)$_POST['qntEstoque'];

$hostname = "localhost";
$username = "root";
$password = "";
$database = "database";

$conn = new mysqli($hostname,$username,$password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO produtos (descricao, preco, peso, qntEstoque) VALUE ('$descricao', '$preco', '$peso', '$qntEstoque')";

if ($conn->query($sql) === TRUE) {
  echo "<h1 style='font-family: Tahoma;'> Produto: " . $descricao . " inserido com sucesso!</h1>";
  echo "<a href='../index.html'>Voltar</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  echo "<a href='../index.html'>Voltar</a>";
}

?>