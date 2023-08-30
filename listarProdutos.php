<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Listagem Produtos</title>
</head>

<body>
    <div class="container">
        <table class="table table-striped table-bordered">
            <?php
            //utilizaremos uma tabela para isso
            
            //incluir arquivo da conexao
            include("conexao.php");
            //chamando a funcao para conectar
            $pdo = conectar();
            //Criar SQL, aqui no caso um SELECT 
            $sql = "SELECT * FROM `tblProdutos`";

            //Aqui temos uma variavel para trabalharmos com o SQL
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            //Criamos um array para colocar o resultado do comando SQL
            $produtos = array();

            //aqui para cada linha do SELECT , iremos inserir na array criada acima, o while é usado para verificarmos se tem algo dentro resultado, depois populamos o aray 
            while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                array_push($produtos, $produto);
            }

            //Array, vetor...matriz, com os dados vindo do banco de dados;
            //Aqui foi usado o foreach($array,$linhadoarray ), para percorrer o array, 

            foreach ($produtos as $produto) :
                /*$aluno é cada item da array ($produtos); Se usa $linhadoarray['campodobancodedados'] , caso seja usado algum dado de banco
            para ser utilizado para ser passado como parametro , é concatenado junto com o html
        */
            ?>
                <tr>
                    <td><?= $produto['nomeProduto'] ?></td>
                    <td><?= $produto['precoProduto'] ?></td>
                    <td><?= $produto['marcaProduto'] ?></td>
                    <td><a class="btn btn-primary" href="formAlteraProduto.php?id=<?= $produto['idProduto'] ?>">alterar</a></td>
                    <td>
                        <form action="removeProduto.php" method="post">
                            <input type="hidden" name="id" value="<?= $produto['idProduto'] ?>" />
                            <button class="btn btn-danger">remover</button>
                        </form>
                    </td>
                </tr>
            <?php
            endforeach
            ?>

        </table>

        <div class="d-flex justify-content-center">
            <a class="btn btn-primary" href="cadastro.php" role="button">Voltar</a>
        </div>
    </div>
</body>

</html>