<?php


echo $id        = $_POST["id"];
echo $nome      = $_POST["nomeProduto"];
echo $preco     = $_POST["precoProduto"];
echo $marca      = $_POST["marcaProduto"];



// Criando conexão
include("./conexao/conexao.php");
$pdo = conectar();
$sql = 'UPDATE tblProdutos SET  nomeProduto=?, precoProduto=?, marcaProduto=? WHERE idProduto = ?';
$dados = [$nome,$preco,$marca,$id];
$stmt = $pdo->prepare($sql);


if ($stmt->execute($dados)) {
  echo '<script> alert("Data Updated"); </script>';
  header("Location: listaProdutos.php");
} else {
  echo '<script> alert("DEU RUIM"); </script>';
  echo "Error: " . $sql . "<br>" ;
}

?>