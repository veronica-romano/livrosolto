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
  <div class="container">
  <div class="main-body">
    <div class="row gutters-sm">
      <div class="d-grid gap-3">
        <div class="p-2 bg-white "></div>
        <div class="p-2 bg-white ">
          <!-- corpo bg branco de id_usuario_entrega -->
          <div class="row gutters-sm">
            <div class="col-sm-12 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="container">
                    <div class="row accordion" id="accordion">
                      <div class="col-lg-12">
                        <div class="card product_list accordion-item">
                          <div class="card-header accordion-header">
                            <div class="btn btn-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#itemtwo" aria-expanded="false">
                              <h6 class="d-flex align-items-center mb-3">
                                <i class="material-icons text-warning mr-2">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
                                  </svg>
                                </i>Suas doações
                              </h6>
                              <div class="list_block">
                                <div class="list_image"></div>
                                <div class="list_text"></div>
                              </div>
                            </div>
                          </div>
                          <div id="itemtwo" class="accordion-collapse collapse" data-bs-parent="#accordion">
                            <div class="card-body accordion-body">
                              <div class="row">
                                <div class="col-sm-4 col-6">
                                  <div class="list_block_item">
                                    <a href="shop-details.html">
                                      <img src="./imagem/harry-potter-e-a-camara-secreta.jpg" class="image-fit-contain" alt="img" />
                                      <h6 class="title">Harry Potter e a Câmara Secreta</h6>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> <?php 
                                        // foreach ($listaReceber as $livroReceber) {
                                        ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Fim card id_usuario_entrega  -->
        <div class="p-2 bg-white ">
          <!-- corpo bg branco de livros id_usuario_recebe -->
          <!-- Card livro 3  -->
          <div class="row gutters-sm">
            <div class="col-sm-12 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="container">
                    <div class="row accordion" id="accordion">
                      <div class="col-xl-12">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="card product_list accordion-item">
                              <div class="card-header accordion-header">
                                <div class="btn btn-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#itemthree" aria-expanded="false">
                                  <h6 class="d-flex align-items-center mb-2">
                                    <i class="material-icons text-warning mr-2">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
                                        <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                      </svg>
                                    </i>Seus livros
                                  </h6>
                                  <div class="list_block">
                                    <div class="list_image"></div>
                                    <div class="list_text"></div>
                                  </div>
                                </div>
                              </div>
                              <div id="itemthree" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="card-body accordion-body">
                                  <div class="row">
                                    <div class="col-sm-4 col-6">
                                      <div class="list_block_item">
                                        <a href="shop-details.html">
                                          <img src="./imagem/Inferno_livro-min.jpg" class="image-fit-contain" alt="img" />
                                          <h6 class="title">Inferno</h6>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> <?php 
                          //codigo que mostra livros que o usuário da session está como id_usuario_recebe
                          ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Fim card id_usuario_recebe -->
      </div>
    </div>
  </div>

<script src="./bootstrap.bundle.js"></script>
<script src="./nosso.js"></script>
</body>
<!-- Fim do perfil -->
</html>