<?php
require_once "../vendor/autoload.php";
use Projeto\Livro;
use Projeto\Usuario;
$usuario = new Usuario;
if (isset($_POST['inserir'])) {
  $livro = new Livro;
  $livro->setTitulo($_POST['titulo']);
  $livro->setAutor($_POST['autor']);
  $livro->setDescricao($_POST['descricao']);
  $livro->setGenero($_POST['genero']);
  $livro->setIdUsuarioEntrega($_SESSION['id']);
  $livro->setHorariosEntrega($_POST['horarios']);
  $livro->setDiasEntrega($_POST['dias']);
  $imagem = $_FILES['imagem'];
  $livro->setCapa($imagem['name']);
  $livro->upload($imagem);
  $livro->inserir();
  header("location:listadelivros.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta name="description" content="Anuncie seu livro para troca ou doação">
  <meta name="keywords" content="Anunciar livro, postar livro">
  <title>Livro Solto - Anunciar livro</title>
<?php
  require_once "../inc/cabecalho-geral.php";
?>
<main class="main-anuncio justify-content-center p-3">
<div class="container div-anuncio">
  <div>
    <div class="py-5 text-center">
      <div class="border-shadow img-vazia container"><img src="../imagens/aguardando-imagem.png" id="img"
        alt="" class="img-vaziaa d-block mx-auto mb-3" width="140" height="170"></div>
      <!-- <img class="d-block mx-auto mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
      <h2>Postagem de livro</h2>
      <p class="lead">Insira as informações do livro que será carregado e anunciado para possíveis doações ou trocas</p>
    </div>

    <div class="row g-5">
    <div class="col-md-5 col-lg-4 order-md-last">
  
      </div>
      <div class="col-md-12 col-lg-12 text-center">
        <form enctype="multipart/form-data" action="" method="post" id="form-inserir" name="form-inserir" class="needs-validation" novalidate>
          <div class="row g-3 mx-auto">
            <div class="col-sm-12 col-md-6 col-lg-4" >
              <label for="firstName" class="form-label title">Título</label>
              <input type="text" class="form-control" id="firstName" name="titulo" placeholder="" value="" required>
              <div class="invalid-feedback">
                O título é obrigatório.
              </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
              <label for="autor" class="form-label title">Autor</label>
              <input type="text" class="form-control" id="autor" placeholder="" name="autor" value="" required>
              <div class="invalid-feedback">
                O autor é obrigatório.
              </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
              <label for="autor" class="form-label title">Descrição</label>
              <input type="text" class="form-control" id="descricao" placeholder="" name="descricao" value="" required>
              <div class="invalid-feedback">
                O autor é obrigatório.
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <label for="country" class="form-label categoria">Gênero</label>
              <select class="form-select" id="country" name="genero" required>
                <option value=""></option>
                <option value="">Romance</option>
                <option value="">Terror</option>
                <option value="">Fantasia</option>
                <option value="">Ficção</option>
                <option value="">Filosofia</option>
                <option value="">Tecnologia</option>
                <option value="">Saúde</option>
                <option value="">Linguagem</option>
              </select>
              <div class="invalid-feedback">
                Selecione um genero válido.
              </div>
            </div>

            <div class="col-md-6 col-lg-4">
              <label for="country" class="form-label categoria">Dias de Entrega</label>
              <select class="form-select" id="dias" name="dias" required>
                <option value=""></option>
                <option value="">Segunda</option>
                <option value="">Terça</option>
                <option value="">Quarta</option>
                <option value="">Quinta</option>
                <option value="">Sexta</option>

              </select>
              <div class="invalid-feedback">
                Selecione um dia válido
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <label for="country" class="form-label categoria">Horários de Entrega</label>
              <select class="form-select" id="country" name="horarios" required>
                <option value=""></option>
                <option value="">Manhã</option>
                <option value="">Tarde</option>
                <option value="">Noite</option>
              </select>
              <div class="invalid-feedback">
                Selecione um horário válido
              </div>
            </div>
          <hr class="my-4">
          </div>
            <label for="formFile" class="form-label">Escolha um arquivo de imagem para envio</label>
          <div class="mb-3 text-center envio-de-arquivo">
            <input class="form-control" type="file" accept="image/png, image/jpg" id="upload">
          </div>
          <div class="enviar-foto form-signin mb-5">
            <button class="mt-4 btn button-foto" name="inserir" id="inserir" type="button">Enviar</button>
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