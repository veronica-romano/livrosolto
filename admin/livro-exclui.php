
<?php
use Projeto\Livro;
require_once "../vendor/autoload.php";
$usuario = new Livro;
$usuario->setId($_GET['id']);
$usuario->excluir();
    header("location:livros.php");