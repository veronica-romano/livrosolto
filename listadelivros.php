<?php
use Projeto\ControleDeAcesso;
require_once "./vendor/autoload.php";
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
    <title>Livro Solto - Livros Disponíveis</title>
    <link rel="shortcut icon" href="imagens/logo-e-favicon/favicon-16x16.png" type="image/x-icon">
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

<<<<<<< HEAD
 </div>

 <div>
  <!-- Inicio do carrossel -->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner"> <?php
          foreach ($listaDeLivros as $livros) {
          ?> <div class="carousel-item active bg-primary">
        <div class="cards-wrapper">
          <img src="./imagem/
						<?=$livros['capa']?>" alt="livro amanhecer">
        </div>
        <div class="card-body bg-warning">
          <h5 class="card-title"> <?=$livros['titulo']?> </h5>
          <p class="card-text"> <?=$livros['genero']?> de <?=$livros['autor']?> </p>
          <p> <?=$livros['descricao']?> </p>
          <p>Disponibilidade: <?=$livros['diasEntrega']?> , <?=$livros['horariosEntrega']?> </p>
          <h6>Usuário: <?=$livros['id_usuario_entrega']?> </h6>
          <a class="btn btn-primary" href="detalhes-livro.php?id=
							<?=$livros['id']?>">Ver detalhes </a>
          <a class="btn btn-success" href="detalhes-livro.php?id=
							<?=$livros['id']?>">É esse! </a>
        </div>
      </div>
      <div class="cardCarrossel">
        <div class="image-wrapper"></div>
      </div>
    </div> <?php
          }
        ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
=======
    </div>


     <!-- Inicio do carrossel -->

  <div id="carouselExampleControls" class="carousel carousel-dark slide d-sm-block" data-bs-ride="carousel">
  

 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"> 
   <?php
   foreach ($listaDeLivros as $livros) {
   ?>
   <div class="carousel-inner">
     <div class="carousel-item active">
       <div class="cards-wrapper">
       <div class="cardCarrossel">

       <div class="image-wrapper">
       <img src="./imagem/<?=$livros['capa']?>">
       </div>

         <div class="cardCarrossel-body">
           <h5 class="cardCarrossel-title"><?=$livros['titulo']?></h5>
           <p class="cardCarrossel-text"><?=$livros['genero']?> de <?=$livros['autor']?></p>
           <p><?=$livros['descricao']?></p>
           <p>Disponibilidade: <?=$livros['diasEntrega']?> , <?=$livros['horariosEntrega']?></p>
           <h6>Usuário: <?=$livros['id_usuario_entrega']?></h6>
           <a class="btn btn-primary" href="detalhes-livro.php?id=<?=$livros['id']?>">Ver detalhes</a>
           <a class="btn btn-success" href="detalhes-livro.php?id=<?=$livros['id']?>">É esse!</a>
         </div>
       </div>

      

         </div>
       </div>
     </div>
   </div> 
   <?php
          }
        ?>
 </div>

 <!--  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Previous</span>
 </button>
 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Next</span>
 </button> -->

>>>>>>> d102f559dbd87f3bf9b4722237f48a1d0ff6e20c
</div>
  

<!-- Fim do carrossel -->

      

<?php
require_once "inc/rodape-geral.php"
?>

</body>

</html>