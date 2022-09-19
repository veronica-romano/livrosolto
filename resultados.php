<?php
require_once "./vendor/autoload.php";
use Projeto\Livro;
use Projeto\ControleDeAcesso;
$livro = new Livro;
$livro->setTermo($_GET['busca']);
$resultados = $livro->pesquisaLivro();
$sessao = new ControleDeAcesso;
if(isset($_SESSION['id'])){
    require_once "inc/cabecalho-logado.php";
    } else {
    require_once "inc/cabecalho-geral.php"; 
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
    <title>Livro Solto - Resultado da busca</title>
    <link rel="shortcut icon" href="imagens/logo-e-favicon/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="estilo.css">

<div class="row bg-white rounded shadow my-1 py-4">
    <h2 class="col-12 fw-light mb-5 text-center">
        Sua busca por <span class="badge bg-dark"><?=$livro->getTermo()?></span> retornou <span class="badge bg-success"><?=count($resultados)?></span> resultado(s)
    </h2>
    
    <?php
    foreach ($resultados as $livros) {
        ?>
      <section class=" card d-block w-100">
      <div class="carousel-item active d-flex justify-content-around w-50 ">
        <div class="card text-center ">
          <div>
            <img class="limite w-100 " src="./imagem/<?=$livros['capa']?>" alt="livro<?=$livros['titulo']?>">
          </div>
          <div class="card-body w-100 text-center">
            <h5 class="card-title"> <?=$livros['titulo']?> </h5>
            <p class="card-text"> <?=$livros['genero']?> de <?=$livros['autor']?> </p>
            <p> <?=$livros['descricao']?> </p>
            <p>Disponibilidade: <?=$livros['diasEntrega']?> , <?=$livros['horariosEntrega']?> </p>
            <a class="btn btn-primary" href="detalhes-livro.php?id=
              <?=$livros['id']?>">Ver detalhes </a>                 
          </div>
          </div>
      </div>
    </section>
        <?php
    }
    ?>



</div>        

