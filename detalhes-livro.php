<?php
use Projeto\Livro;
use Projeto\ControleDeAcesso;
require_once "./vendor/autoload.php";
$sessao = new ControleDeAcesso;
if (isset($_SESSION['id'])) {
    require_once "./inc/cabecalho-logado.php";
} else {
    require_once "./inc/cabecalho-geral.php";
}
$detalhe = new Livro;
$detalhe->setId($_GET['id']);
$livro = $detalhe->listarUm();
?>
<article class="row justify-content-evenly ">
    <section class="col-md-8 mb-5 mt-5  card border-light card" style="max-width: 48%;">
        <div class=" card-body">
                <img class="h-100 w-75" src="./imagem/<?= $livro['capa'] ?>" alt="<?= $livro['titulo'] ?>">
        </div>
    </section>

    <section class="col-6 mb-5 mt-5 card border-light" style="max-width: 48%;">
        <h3 class="mb-2 text-center"><?= $livro['titulo'] ?></h3>
        <h4 class="mb-4 mt-2 text-center">Autor: <?= $livro['autor'] ?></h4>
        <h4 class="mb-4 mt-2 text-center">Gênero: <?= $livro['genero'] ?> de <?= $livro['autor'] ?></h4>
        <h5 class="mb-3 mt-3 text-center">Disponibilidade: <?= $livro['diasEntrega'] ?> na parte da <?= $livro['horariosEntrega'] ?></h5>
        <div class="mb-3 mt-3 text-center">
            <h6>Descrição do livro: </h6>
            <p><?= $livro['descricao'] ?></p>
        </div>
        <form action="" method="post">
                <button class="btn btn-success form-control" type="submit" id="inserirRecebedor" name="inserirRecebedor">
                    É esse! 
                </button>
            </form>
    </section>

    <?php
            if(isset($_POST['inserirRecebedor'])) {
              if(!isset($_SESSION['id'])){
                header("location:login.php?acesso_proibido");
              }  else {
                  $detalhe->setIdUsuarioRecebe($_SESSION['id']);
                  $detalhe->inserirRecebedor();
              }
            }
            ?>
</article>
</body>
<?php
require_once "./inc/rodape-geral.php"

?>