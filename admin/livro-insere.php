<?php
use Projeto\Livro;
require_once "../vendor/autoload.php";

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
	header("location:livros.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Livro</title>
    <?php
  require_once "../inc/cabecalho-geral.php";
?>
<body>
    <section class="row justify-content-center py-4">
    <article class="col-8 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Inserir novo livro
		</h2>
				
        <form enctype="multipart/form-data" action="" method="post" id="form-inserir" name="form-inserir" class="needs-validation" novalidate>
          <div class="row g-3 mx-auto">
            <div class="col-sm-12 col-md-6 col-lg-4" >
              <label for="firstName" class="form-label title">Título</label>
              <input type="text" class="form-control" id="firstName" name="titulo" placeholder="" value="" required>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
              <label for="autor" class="form-label title">Autor</label>
              <input type="text" class="form-control" id="autor" placeholder="" name="autor" value="" required>


            <div class="col-sm-12 col-md-6 col-lg-4">
              <label for="autor" class="form-label title">Descrição</label>
              <input type="text" class="form-control" id="descricao" placeholder="" name="descricao" value="" required>


            <div class="col-md-6 col-lg-4">
              <label for="country" class="form-label categoria">Gênero</label>
              <select class="form-select" id="country" name="genero" required>
                <option value=""></option>
                <option value="romance">Romance</option>
                <option value="terror">Terror</option>
                <option value="fantasia">Fantasia</option>
                <option value="ficcao">Ficção</option>
                <option value="filosofia">Filosofia</option>
                <option value="tecnologia">Tecnologia</option>
                <option value="saude">Saúde</option>
                <option value="linguagem">Linguagem</option>
              </select>
            </div>

            <div class="col-md-6 col-lg-4">
              <label for="country" class="form-label categoria">Dias de Entrega</label>
              <select class="form-select" id="dias" name="dias" required>
                <option value=""></option>
                <option value="segunda">Segunda</option>
                <option value="terca">Terça</option>
                <option value="quarta">Quarta</option>
                <option value="quinta">Quinta</option>
                <option value="sexta">Sexta</option>

              </select>

            </div>
            <div class="col-md-6 col-lg-4">
              <label for="country" class="form-label categoria">Horários de Entrega</label>
              <select class="form-select" id="country" name="horarios" required>
                <option value=""></option>
                <option value="manha">Manhã</option>
                <option value="tarde">Tarde</option>
                <option value="noite">Noite</option>
              </select>

            </div>
          <hr class="my-4">
          </div>
            <label for="formFile" class="form-label">Escolha um arquivo de imagem para envio</label>
          <div class="mb-3 text-center envio-de-arquivo">
            <input class="form-control" type="file" name="imagem" accept=" image/jpg, image/png" id="upload">
          </div>
          <div class="enviar-foto form-signin mb-5">
            <button class="mt-4 btn btn-success" name="inserir" id="inserir" type="submit">Enviar</button>
          </div>
        </form>
		
	</article>
    </section>
</body>
</html>