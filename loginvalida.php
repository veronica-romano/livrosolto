<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Faça seu login para liberar ou conseguir um livro">
    <meta name="keywords" content="login, entrar na conta, acesso a conta">
    <title>Livro Solto - Login</title>
    <link rel="shortcut icon" href="./imagens/logo-e-favicon/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="estilo.css">
</head>

<body class="body-login" style="background-color: #F2C335">

  
  <main>
    <section class="vh-99" >
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="imagens/login_e_cadastro/garota-com-livro.jpg"
                    alt="Garota de blusa rosa e delineado amarelo com um livro na mão direita" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
    
                    <form>
    
                      <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                        <span class="h1 fw-bold mb-0"><a href="index.php"><img src="imagens/logo-e-favicon/Logo-sem-fundo-2.png" alt="Letra L com bordas arredondas seguida de Livro Solto, indicando o logo do site" width="25%"></a></span>
                      </div>
    
                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Faça login com sua conta</h5>
    
                      <div class="form-outline mb-4">
                        <input type="email" id="form2Example17" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example17">Email</label>
                      </div>
    
                      <div class="form-outline mb-4">
                        <input type="password" id="form2Example27" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example27">Senha</label>
                      </div>
    
                      <div class="pt-1 mb-4">
                       <button class="btn btn-lg btn-block btn-login" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
                      </div>
    
                      <a class="small text-muted esqueceu-a-senha" href="#!" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalSenha" title="recuperar senha">Esqueceu a senha?</a>
                      <a href="cadastro.php" alt="Link para cadastrar uma conta"><p class="mb-5 pb-lg-2 mt-2" >Não possui cadastro? Cadastre-se</p></a>
                      <a class="small text-muted termos mx-3" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalTermos">Termos de uso</a>
                      <a href="#!" class="small text-muted privacidade" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalDois">Política de privacidade</a>
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <div class="modal fade campoModal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Livro Enviado com sucesso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Continue para visualizar livros disponíveis</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary ver-disponiveis"><a href="listadelivros.php" alt="Link para visualizar livros disponíveis e entrar na conta">Ver disponíveis</a></button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade campoModal" id="exampleModalTermos" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Termos de uso</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <ul>
      <li>Não será permitido a utilização do site para fins de vendas de produtos, mesmo de livros. Caso a prática seja identificada,
        a conta será imeditamanete banida.
      </li>
      <hr>
      <li>A LivroSolto preza pela honestidade e respeito, portanto, caso alguma troca ou doação sejam acordados e esse não seja devidamente cumprido,
        nos vemos no direito de suspender a conta pelo prazo de 3 dias úteis.
      </li>
      <hr>
      <li>A LivroSolto condena qualquer prática criminosa de preconceito, racisco, homofobia e assédio. Caso algum desses comportamentos sejam identificados, a LivroSolto
        se encontrará no direito de banir a conta permanentemente e repassar o ocorrido para autoridades.
      </li>
      <hr>
      <li>Não será tolerado contas com identidade fraudulentas. A consequência para tal caso, será o banimento imediato.</li>
      <hr>
      <li>Para todos usuários solicitamos o respeito, a honestidade e compromisso.</li>
    </ul>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
    </div>
  </div>
</div>
</div>

<div class="modal fade campoModal" id="exampleModalDois" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Política de privacidade</h5>
    

    </p>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    <ul>
      <li>A livro solto se compromete com a segurança dos dados de seus usuários com padrões rigorosos.</li>
    <hr>
      <li>A livro solto se dispõe no direito de solicitar dados de seus usuários para efetuação do cadastro que será movimentado na utilização do site</li>
    <hr>
      <li>A livro solto se compromete a não utilizar os dados fornecidos pelos usuários, para realizar envios de propagandas, spam, ou ofertas de produtos.</li>
    <hr>
      <li>Todo e qualquer dado fornecido pelo usuário será utilizado apenas com intuito de utilização site e para a identificação do mesmo.</li>
  </ul>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
  </div>
</div>
</div>
</div>

<div class="modal fade campoModal p-4" id="exampleModalSenha" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog p-4">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Recupere sua senha</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <form class="p-4">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Digite o email cadastrado para a recuperação</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text" aria-placeholder="exemplo@gmail.com.br">exemplo@gmail.com.br</div>
    </div>
    </form>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
    <button type="submit" class="btn btn-primary ver-disponiveis">Recuperar senha</button>
  </div>
</div>
</div>
</div>
  
  
    
    
  
<script src="bootstrap-5.2.0-beta1-dist (1)/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js"></script>
<script src="nosso.js"></script>
</body>

</html>