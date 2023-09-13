<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto</title>
</head>
<body>
    


<?php 
$id = $_GET['id'];

include("conexao.php");
$pdo = conectar();



$sql = "SELECT nomeProduto,precoProduto,marcaProduto FROM tblProdutos WHERE idProduto= ?";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(1, $id);
$stmt->execute();

while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id        = $produto["idProduto"];
    $nome      = $produto["nomeProduto"];
    $preco     = $produto["precoProduto"];
    $marca     = $produto["marcaProduto"];

    
}

?>

<h1>Alterando produto</h1>

<div class="cotainer">
        <form action="alterarproduto.php" method="post">
            <div>
                <p>Formulário para Editar  Produtos</p>
                <div class="mb-3">
                <label class="form-label">ID</label>
                <input type="number" name="id" id="id" class="form-control" value="<?php echo $id; ?>" min="1" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $nome; ?>" required>
            </div>
                <div class="mb-3">
                    <label class="form-label">Preço do Produto</label>
                    <input type="text" name="precoProduto" id="nome" class="form-control" value="<?php echo $preco; ?> " required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Marca do Produto</label>
                    <input type="text" name="marcaProduto" id="nome" class="form-control"  value="<?php echo $marca; ?> " required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" id="button" class="btn btn-primary">Cadastrar</button>
                </div>
        </form>



        </body>

</html>