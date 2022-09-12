<?php
use Projeto\Livro;
require_once "../vendor/autoload.php";
$livro = new Livro;
$livro->setId($_GET['id']);
$livro->excluir();
    header("location:listadelivros.php");
?>