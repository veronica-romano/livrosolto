<?php
use Projeto\ControleDeAcesso;
require_once "./vendor/autoload.php";
$sessao = new ControleDeAcesso;
if(isset($_SESSION['id'])){
    require_once "./inc/cabecalho-logado.php";
    } else {
    require_once "./inc/cabecalho-geral.php"; 
    }
    
?>    
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Livros disponíveis para você agora">
    <meta name="keywords" content="livro, selecionar livro, leitura">
    <title>Livro Solto - Livros Disponíveis</title>
    <link rel="shortcut icon" href="./imagens/logo-e-favicon/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="estilo.css">
<?php

use Projeto\Livro;
$livros = new Livro;
$listaDeLivros = $livros->listar();

?>
    <style>
        .col-3{
    text-align: center;
}
    </style>


<div class="mt-3 ms-3 d-flex justify-content-around">
        <form class="col-6 col-sm-5 col-md-7 " action="">
        <label for="filtrar" class="filtrar "></label>
        <div class="d-flex">
        <select name="filtrar" id="" class="form-select select-livros" >
          <option>Escolha o tema</option>
          <option>Romance</option>
          <option>Terror</option>
          <option>Fantasia</option>
          <option>Ficção</option>
          <option>Filosofia</option>
          <option>Tecnologia</option>
          <option>Saúde</option>
          <option>Linguagem</option>
        </select>
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">OK</button>
</div>
    </form>
    <form autocomplete="off" class="d-flex" action="resultados.php" method="GET">
        <input name="busca" class="form-control me-2" type="search" placeholder="Pesquise aqui" aria-label="Pesquise aqui">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">OK</button>
      </form>

    </div>
    
    <main class="p-3">
        <?php
        foreach ($listaDeLivros as $livros) {
            ?>
            <section class="linhaUm row mb-5 mt-5 card" style="max-width: 30rem;">
            <div class="card-header text-center">
                <h3><?=$livros['titulo']?></h3>
            </div>
            <div class="col-3">
                <figure><img src="./imagem/<?=$livros['capa']?>" ></figure>
            </div>
            <h4><?=$livros['genero']?> de <?=$livros['autor']?></h4>
            <h5>Disponibilidade: <?=$livros['diasEntrega']?> , <?=$livros['horariosEntrega']?></h5>
            <div>
                <p><?=$livros['descricao']?></p>
            </div>
            <div class="card-footer">
                Usuário: <?=$livros['id_usuario_entrega']?> 
                <a class="btn btn-primary" href="detalhes-livro.php?id=<?=$livros['id']?>">Ver detalhes</a>
                <a class="btn btn-success" href="detalhes-livro.php?id=<?=$livros['id']?>">É esse!</a>
            </div>
            </section>
            <?php
            
        }
        ?>

      
    </main>
<?php
require_once "./inc/rodape-geral.php"
?>

</body>

</html>