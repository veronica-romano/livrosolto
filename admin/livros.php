<?php
use Projeto\ControleDeAcesso;
require_once "../vendor/autoload.php";
$sessao = new ControleDeAcesso;
$sessao->verificaAcessoAdmin();
use Projeto\Livro;
$livro = new Livro;
$listaDeLivros = $livro->listar();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css">
    <title>Usuários</title>
</head>

<header>

</header>

<body>

    <section class="row text-center justify-content-center py-4">
        <article class="col-8 bg-white rounded shadow my-1 py-4">
            <h2 class="text-center">
            Livros <span class="badge bg-secondary"><?=count($listaDeLivros)?></span></h2>

            <p><i class="bi bi-save"></i><a class="btn btn-success" href="livro-insere.php">Inserir novo livro</a></p>

            <table class="table table-hover">
                <thead>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Senac</th>
                    <th>Ações</th>
                    <th></th>
                </thead>
                <tbody>
                <?php foreach($listaDeLivros as $livro){    
				?>
                    <tr>
                        <td><?=$livro['id']?></td>
                        <td><?=$livro['titulo']?></td>
                        <td><?=$livro['genero']?></td>
                        <td><?=$livro['id_usuario_entrega']?></td>
                        <td><?=$livro['id_usuario_recebe']?></td>
                        <td><a href="livro-atualiza.php?id=<?=$livro['id']?>" class="btn btn-primary">Update</a></td>
                        <td><a href="livro-exclui.php?id=<?=$livro['id']?>" class="btn btn-danger excluir" onclick="excluir()">Delete</a></td>
                    </tr>

                <?php
                }
                ?>
                </tbody>
            </table>
        </article >

    </section>
<script src="../visualizacoes/bootstrap.bundle.js"></script>
<script src="./js/confirm.js"></script>
</body>
</html>