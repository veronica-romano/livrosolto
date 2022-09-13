<?php
use Projeto\ControleDeAcesso;
require_once "../vendor/autoload.php";
$sessao = new ControleDeAcesso;

$sessao->verificaAcessoAdmin();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../visualizacoes/bootstrap.css">
    <title>Area administrativa</title>
</head>

<header>
<?php
require_once "../inc/cabecalho-logado-admin.php";
?>
</header>
<body>




<section class="p-5 my-4 rounded-3 bg-white shadow">
    <div class="container-fluid py-1">        
        <h2 class="display-4 p-5">Olá <?=$_SESSION['nome']?>!</h2>
        <p class="fs-5 p-5">Você está no <b>painel de controle</b> do
		Livro solto e seu <b>tipo de acesso</b> é <span class="badge bg-dark"> <?=$_SESSION['tipo']?> </span>.</p>
        <hr class="my-4">

        <?php if(isset($feedback)){?>
				<p class="my-2 alert alert-primary text-center">
					<?=$feedback?>
				</p>
                <?php } ?>

        <div class="d-grid gap-2 d-md-block text-center">
            <a class="btn btn-dark bg-gradient btn-lg" href="perfil.php">
                <i class="bi bi-person"></i> <br>
               Ver perfil
            </a>
            <?php
            if ($_SESSION['tipo'] == 'admin') {
            ?>
    			<a class="btn btn-dark bg-gradient btn-lg" href="livros.php">
                <i class="bi bi-book"></i> <br>
                Administrar Livros
                </a>
                <a class="btn btn-dark bg-gradient btn-lg" href="usuarios.php">
                <i class="bi bi-people"></i> <br>
                Administrar Usuários
            </a>
            <?php
            }

            ?>
            <div>
    </div>

        </div>
    </div>
</section>
    
</body>
<?php
    require_once "../inc/rodape-geral.php"

?>
<script src="../visualizacoes/bootstrap.bundle.js"></script>
<script src="../js/confirm.js"></script>
</body>
</html>