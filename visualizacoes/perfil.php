<?php
use Projeto\Livro;
use Projeto\ControleDeAcesso;
require_once "../vendor/autoload.php";
$sessao = new ControleDeAcesso;
if(isset($_SESSION['id'])){
    require_once "../inc/cabecalho-logado.php";
    } else {
    require_once "../inc/cabecalho-geral.php"; 
    }
?>

    <title>perfil temporário</title>
</head>
<body>
<article class="row d-flex justify-content-evenly ">

</article>
</body>
</html>

<?php
    require_once "../inc/rodape-geral.php"

?>