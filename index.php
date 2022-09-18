<?php
use Projeto\ControleDeAcesso;
require_once "./vendor/autoload.php";
$sessao = new ControleDeAcesso;

if(isset($_SESSION['id'])){
    require_once "./inc/cabecalho-logado.php";
    } else {
    require_once "./inc/cabecalho-geral.php";
    }

?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Doe, troque e busque livros com o Livro Solto">
    <meta name="keywords" content="Troca de livros, doação de livros, apoio a leitura, literatura">
    <title>Livro Solto - Apoiando a leitura</title>
</head>

    <section class=" col-8 section-desktop containe-fluid text-center shadow primeira-interacao">

        <h1>Redefina o propósito desse livro!</h1>
        <h2>A gente te ajuda a encontrar alguém para ele.</h2>
        <div class="d-flex justify-content-center pt-5 mt-4 gap-5 botoes-interacao">
            <a href="tela_foto.php" alt="Anunciar livro" class="btn btn-inicial p-2">Anunciar livro</a>
            <a href="listadelivros.php" alt="Buscar livro" class="btn  btn-inicial p-2">Buscar livro</a>
        </div>
        <img src="./imagens/img-index/colecao-de-livros-index.png" alt="Coleção de livros" class="img-primeira-interacao">
    </section>

    <main class="main-index">
        <section class="campoUm pt-4 pb-2 px-3 px-lg-0 justify-content-center d-lg-flex anime">
            <div class="conteudo-um p-2 mt-5 col-lg-6 text-center ">
                <h1>Um significado para a leitura</h1>
                <p>A leitura nos proporciona enxergar a vida de outras formas, a sofisticar o pensamento, a criar um
                    mundo inteiramente nosso. Com a leitura, nos tornamos melhores para os outros e para nós mesmos.</p>
            </div>
            <div class="conteudo-dois pt-2 col-lg-4 text-center">
                <img src="./imagens/img-index/pai-e-filha-com-livro.jpg" alt="Pai e filha realizando a leitura de um livro" class="imgUm ">
            </div>
        </section>

        <section class="campoDois pt-4 px-3 px-lg-0 justify-content-center d-lg-flex anime">
            <div class="conteudo-tres pt-2 col-lg-4 text-center d-none d-md-none d-lg-inline pt-2">
                <img src="./imagens/img-index/garota-lendo-com-fundo-preto-e-branco (2).jpg" alt="Moça lendo livro em uma foto preto e branco"
                    class="imgDois ">
            </div>

            <div class="conteudo-quatro p-2 mt-5 col-lg-6 text-center d-md-block ">
                <h2>Aprender com Livros</h2>
                <p>Podemos aprender com pessoas que já se foram. Que eternizaram sua poesia, seu pensamento, sua criatividade entre as linhas
                    maravilhosas de um livro. Transcedemos o tempo, com uma página, um parágrafo, uma frase.</p>
            </div>

            <div class="conteudo-tres pt-2 col-lg-4 text-center  d-md-block d-lg-none">
                <img src="./imagens/img-index/garota-lendo-com-fundo-preto-e-branco (2).jpg" alt="Moça lendo livro em uma foto preto e branco"
                    class="imgDois ">
            </div>
        </section>

        <section class="campoTres px-3 px-lg-0 pt-4 pb-2 justify-content-center d-lg-flex anime">
            <div class="conteudo-cinco p-2 mt-5 col-lg-6 text-center ">
                <h3>Deite-se no divã</h3>
                <p>Ao ler um livro, podemos passar por um processo de análise, nós nos tornamos o analista e o analisado ao mesmo tempo.
                    Absorver um pensamento, desconstrui-lo e depois transformá-lo em uma nova reflexão é uma experiência que a leitura nos proporciona. 
                    Entregue a oportunidade para outras pessoas, deixe que sintam a transformação de um livro. Tire a poeira e 
                    Solta o livro!
                </p>
            </div>
            <div class="conteudo-seis pt-2 pb-5 col-lg-4 text-center">
                <img src="./imagens/img-index/garota-sentada-lendo.jpg" alt="Garota sentada em sua cama enquanto realiza a leitura do livro" class="imgTres ">
            </div>
        </section>

        <section class="campoQuatro px-2 px-lg-0 pt-4 pb-4 justify-content-center d-lg-flex gap-5 anime">
            <div class="sobreUm p-2 mt-5 col-lg-5 text-center mx-lg-3">
                <h2>Quem somos?</h2>
                <p>A Livro Solto é uma iniciativa que uniu estudantes do Técnico de Informática para Internet do
                    <strong><em>Senac Penha</em></strong> na construção de um projeto que visa acessibilizar o acesso aos livros através da
                    interação da comunidade leitora, que poderá trocar ou doar obras entre si.
                    Enxergamos a leitura como um dos principais fatores de educação de uma civilização. Portanto, toda atitude, mesmo que pequena,
                    é um grande impulsionamento dessa causa. Pessoas que lêem, se educam. E, pessoas educadas, ajudam a mudar a realidade.
                </p>

                <hr>

                <p>Caso queiram compartilhar ideias sobre como podemos melhorar a interação do nosso site, fiquem à vontade para nos contatar 
                    pelo nosso email: <strong><em><a href="mailto:contato@livrosolto.com.br?subject=Assunto da Mensagem" alt="link para email da Livro Solto" target="_blank" rel="external">contato@livrosolto.com.br</a></em></strong>
                </p>

            </div>
            <div class="sobreDois p-2 mt-5 col-lg-4 text-center"><img
                    src="./imagens/img-index/garota-lendo-com-oculos-reduzida.jpg" alt="Garota de óculos, cabelo curto com um livro de capa esverdeada nas mãos" class=" imgQuatro">
            </div>
            </div>

        </section>
    </main>

<?php
    require_once "./inc/equipe.php";
    require_once "./inc/rodape-geral.php";
?>
    
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="anima.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>