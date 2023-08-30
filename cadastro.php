<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Cadastro de Produtos</title>
</head>

<body>
    <div class="cotainer">
        <form action="insere.php" method="post">
            <div>
                <p>Formulário de Cadastro de Produtos</p>
                <div class="mb-3">
                    <label class="form-label">Nome do Produto</label>
                    <input type="text" name="nomeProduto" id="nome" class="form-control" placeholder="Digite nome do Produto" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Preço do Produto</label>
                    <input type="text" name="precoProduto" id="nome" class="form-control" placeholder="Digite o preço" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Marca do Produto</label>
                    <input type="text" name="marcaProduto" id="nome" class="form-control" placeholder="Digite a marca" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" id="button" class="btn btn-primary">Cadastrar</button>
                </div>
        </form>
    </div>
</body>

</html>