<?php
use Projeto\Livro;
use Projeto\ControleDeAcesso;
use Projeto\Usuario;
require_once "./vendor/autoload.php";
$livros = new Livro;
$listaDeLivros = $livros->listar();
$sessao = new ControleDeAcesso;
$usuario = new Usuario;
$usuario->setId($_SESSION['id']);
$dados = $usuario->listarUm();
?> 
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo-e-favicon/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="perfil.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <title>Perfil </title>   
</head>
<body>
<header>
  <?php
  if(isset($_SESSION['id'])){
    require_once "./inc/cabecalho-logado.php";
    } else {
    require_once "./inc/cabecalho-geral.php";
    }

  ?>
</header>
  <!-- Perfil -->
  <div class="container pt-md-5 mt-md-5">
    <div class="main-body pt-md-5 mt-md-5">
      <!-- User -->
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <!-- Card perfil com foto -->
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="./imagens/img-index/profile.png" alt="Admin" class="rounded-circle" width="150">
                <div class="mt-3">
                  <h4> <?=$dados['nome']?> </h4>
                  <p class="text-muted font-size-sm"> <?=$dados['senac']?> - São Paulo </p>
                  <button class="btn btn-success">Mensagem (indisponível)</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Fim do card Perfil com foto-->
        </div>
        <!-- Card Informações do Usuário -->
        <div class="col-md-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Nome</h6>
                </div>
                <div class="col-sm-9 text-secondary"> <?=$dados['nome']?> </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary"> <?=$dados['email']?> </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Telefone</h6>
                </div>
                <div class="col-sm-9 text-secondary"> (indisponível) </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Cidade</h6>
                </div>
                <div class="col-sm-9 text-secondary"> Senac <?=$dados['senac']?> - São Paulo </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-success " target="__blank" href="">Editar(indisponível)</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Fim do card Informações do Usuário -->
      </div>
    </div>
  </div>


<script src="./bootstrap.bundle.js"></script>
<script src="./nosso.js"></script>
</body>
<!-- Fim do perfil -->
</html>