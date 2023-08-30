<?php

$nome=$_POST['nomeProduto'];
$preco=$_POST['precoProduto'];
$marca=$_POST['marcaProduto'];
include("conexao.php");


$pdo = conectar();    
    $query = "insert into tblProdutos (nomeProduto,precoProduto,marcaProduto)
        values (?,?,?)";
$stmt = $pdo->prepare($query);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $preco);
$stmt->bindParam(3, $marca);


if ($stmt->execute()) {
    echo "Registro Cadastrado";
    header("Location:listarProdutos.php");
  }

?>