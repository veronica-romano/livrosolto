<?php
use Projeto\Livro;
use Projeto\Usuario;
use Projeto\ControleDeAcesso;
require_once "../vendor/autoload.php";


  $sessao = new ControledeAcesso;
<<<<<<< Updated upstream
  $sessao->verificaAcessoAdmin();
  $sessao->login($_SESSION['id'], $_SESSION['nome']);
=======
  $sessao->login($_SESSION['id'], $_SESSION['nome'], $_SESSION['tipo']);
>>>>>>> Stashed changes

  $detalhe = new Livro;
  $detalhe->setId($_GET['id']);
  $dados = $detalhe->listarUm();


if (isset($_POST['atualizar'])) {
  $livro = new Livro;
  $livro->setId($_GET['id']);
  $livro->setTitulo($_POST['titulo']);
  $livro->setAutor($_POST['autor']);
  $livro->setDescricao($_POST['descricao']);
  $livro->setGenero($_POST['genero']);
  $livro->setIdUsuarioEntrega($_SESSION['id']);
  $livro->setHorariosEntrega($_POST['horarios']);
  $livro->setDiasEntrega($_POST['dias']);
  if (empty($_FILES['imagem']['name'])) {
        $livro->setCapa($dados['imagem']);
       
    } else {
        $livro->upload($_FILES['imagem']);
        $livro->setCapa($_FILES['imagem']['name']);
    
    }
  $livro->atualizar();
  header("location:livros.php");
}
?>
    <meta name="description" content="Anuncie seu livro para troca ou doação">
    <meta name="keywords" content="Anunciar livro, postar livro">
    <title>Livro Solto - Atualizar livro</title>
  </head>
<?php
  if(isset($_SESSION['id'])){
  require_once "../inc/cabecalho-logado.php";
  } else {
  require_once "../inc/cabecalho-geral.php";
}
?>

  <main class="main-anuncio justify-content-center p-3">
    <div class="container div-anuncio">
      <div>
        <div class="py-5 text-center">
          <h2>Atualização de livro</h2>
          <p class="lead">Insira as informações do livro que será carregado e anunciado para possíveis doações ou trocas</p>
        </div>
        <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last"></div>
          <div class="col-md-12 col-lg-12 text-center">
            <form enctype="multipart/form-data" action="" method="post" id="form-inserir" name="form-inserir" class="needs-validation" novalidate>
              <div class="row g-3 mx-auto">
                <div class="col-sm-12 col-md-6 col-lg-4">
                  <label for="firstName" class="form-label title">Título</label>
                  <input type="text" class="form-control" id="firstName" name="titulo" placeholder="" value="
                    <?= $dados['titulo']?>" required>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                  <label for="autor" class="form-label title">Autor</label>
                  <input type="text" class="form-control" id="autor" placeholder="" name="autor" value="
                      <?= $dados['autor']?>" required>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                  <label for="autor" class="form-label title">Descrição</label>
                  <input type="text" class="form-control" id="descricao" placeholder="" name="descricao" value="
                        <?= $dados['descricao']?>" required>
                </div>
                <div class="col-md-6 col-lg-4">
                  <label for="country" class="form-label categoria">Gênero</label>
                  <select class="form-select" id="country" name="genero" required> <?php
                      if ($livro['genero']) {
                    ?> <option value="
                            <?= $livro['genero']?>" selected> <?= $livro['genero']?> </option> <?php
                  }
                  ?> <option value="romance">Romance</option>
                    <option value="terror">Terror</option>
                    <option value="fantasia">Fantasia</option>
                    <option value="ficcao">Ficção</option>
                    <option value="filosofia">Filosofia</option>
                    <option value="tecnologia">Tecnologia</option>
                    <option value="saude">Saúde</option>
                    <option value="linguagem">Linguagem</option>
                  </select>
                  <div class="invalid-feedback"> Selecione um genero válido. </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <label for="country" class="form-label categoria">Dias de Entrega</label>
                  <select class="form-select" id="dias" name="dias" required> <?php
                      if ($livro['dias']) {
                    ?> <option value="
                            <?= $livro['dias']?>" selected> <?= $livro['dias']?> </option> <?php
                  }
                  ?> <option value="segunda">Segunda</option>
                    <option value="terca">Terça</option>
                    <option value="quarta">Quarta</option>
                    <option value="quinta">Quinta</option>
                    <option value="sexta">Sexta</option>
                  </select>
                </div>
                <div class="col-md-6 col-lg-4">
                  <label for="country" class="form-label categoria">Horários de Entrega</label>
                  <select class="form-select" id="country" name="horarios" required> <?php
                      if ($livro['horarios']) {
                    ?> <option value="
                            <?= $livro['horarios']?>" selected> <?= $livro['horarios']?> </option> <?php
                  }
                  ?> <option value="manha">Manhã</option>
                    <option value="tarde">Tarde</option>
                    <option value="noite">Noite</option>
                  </select>
                  <div class="invalid-feedback"> Selecione um horário válido </div>
                </div>
                <hr class="my-4">
              </div>
              <label for="formFile" class="form-label">Escolha um arquivo de imagem para envio</label>
              <div class="mb-3 text-center envio-de-arquivo">
                <input class="form-control" type="file" name="imagem" accept=" image/jpg, image/png" id="upload">
              </div>
              <div class="enviar-foto form-signin mb-5">
                <button class="mt-4 btn button-foto" name="atualizar" id="atualizar" type="submit">Atualizar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  </main>
  <?php
  require_once "../inc/rodape-geral.php"

  ?>

  </body>

</html>