<?php
use Projeto\ControleDeAcesso;
require_once "../vendor/autoload.php";
$sessao = new ControleDeAcesso;
$sessao->verificaAcesso();
if(isset($_GET['sair'])) $sessao->logout();
$pagina = basename($_SERVER['PHP_SELF']);
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo-e-favicon/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="../visualizacoes/bootstrap.css">
    <link rel="stylesheet" href="../visualizacoes/estilo.css">
</head>
<header>
<nav class="navbar navbar-expand-md text-center ">
    <div class="container mxe-md-5">
        <h1><a class="navbar-brand pt-2" href="index.php"><img
                    src="../imagens/logo-e-favicon/Logo-sem-fundo-2.png"
                    alt="Letra L com bordas arredondas seguida de Livro Solto, indicando o logo do site"
                    width="80px"></a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse row justify-content-md-end justify-content-sm-center justify-content-center"
            id="navbarSupportedContent">
            <div class="col-6">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 hamb">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../visualizacoes/index.php"
                            alt="Página inicial">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil.php" alt="Link para equipe">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tela-foto.php" alt="Link para equipe">Anunciar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listadelivros.php" alt="Link para equipe">Procurar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/index.php" alt="Link para equipe">Área Administrativa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?sair" alt="Link para equipe">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
</header>
<body>