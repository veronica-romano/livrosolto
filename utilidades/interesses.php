//possível lista de interesses


<div class="container">
    <div class="main-body">
      <div class="row gutters-sm">
        <div class="d-grid gap-3">
          <div class="p-2 bg-white ">
            <div class="row gutters-sm"> <!-- Aqui estão as listas de interesses -->
              <div class="col-sm-12 mb-4"> <!-- Aqui estão as listas de interesses -->
                <div class="card h-100"> <!-- Card interesses -->
                  <div class="card-body"> <!-- Body do card interesses -->
                    <h6 class=" align-items-center mb-3">
                      <i class="material-icons text-warning mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 2 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                      </i>Seus interresses
                    </h6 class="interesses-titulo"> 
                  </div>
                  <div class="p-2 bg-white "> <!-- corpo bg branco de id_usuario_entrega -->
                    <div class="row gutters-sm">
                      <div class="col-sm-12 mb-4">
                        <div class="card h-100">
                          <div class="card-body">
                            <h6 class="d-flex align-items-center mb-3">
                              <i class="material-icons text-warning mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                                  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
                                </svg>
                              </i>Suas doações
                            </h6>
                            <div class="container">
                              <div class="row accordion" id="accordion">
                                <div class="col-lg-12">
                                  <div class="card product_list accordion-item">
                                    <div class="card-header accordion-header">
                                      <div class="btn btn-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#itemtwo" aria-expanded="false">
                                        <div class="list_block">
                                          <div class="list_image"> <?php
                                               //   foreach ($listaDoar as $livroDoar) {
                                                  ?> <img src="./imagem/chamado-cuco-min.jpg" class="image-fit-contain" alt="img" />
                                          </div>
                                          <div class="list_text">
                                            <h5 class="title">O Chamado do Cuco</h5>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div id="itemtwo" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                      <div class="card-body accordion-body">
                                        <div class="row">
                                          <div class="col-sm-4 col-6">
                                            <div class="list_block_item">
                                              <a href="shop-details.html">
                                                <img src="./imagem/harry-potter-e-a-camara-secreta.jpg" class="image-fit-contain" alt="img" />
                                                <h6 class="title">Harry Potter e a Câmara Secreta</h6>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div> <?php 
                                        // foreach ($listaReceber as $livroReceber) {
                                        ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Fim card id_usuario_entrega  -->
                  <div class="p-2 bg-white "> <!-- corpo bg branco de livros id_usuario_recebe -->
                    <!-- Card livro 3  -->
                    <div class="row gutters-sm">
                      <div class="col-sm-12 mb-4">
                        <div class="card h-100">
                          <div class="card-body">
                            <h6 class="d-flex align-items-center mb-3">
                              <i class="material-icons text-warning mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
                                  <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                </svg>
                              </i>Seus livros
                            </h6>
                            <div class="container">
                              <div class="row accordion" id="accordion">
                                <div class="col-xl-12">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="card product_list accordion-item">
                                        <div class="card-header accordion-header">
                                          <div class="btn btn-link accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#itemthree" aria-expanded="false">
                                            <div class="list_block">
                                              <div class="list_image"> <?php
                                                         // foreach ($listaRecebe as $livroRecebe) {
                                                            ?> <img src="./imagem/em-chamas-min.jpg" class="image-fit-contain" alt="img" />
                                              </div>
                                              <div class="list_text">
                                                <h5 class="title">Em Chamas</h5>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div id="itemthree" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                          <div class="card-body accordion-body">
                                            <div class="row">
                                              <div class="col-sm-4 col-6">
                                                <div class="list_block_item">
                                                  <a href="shop-details.html">
                                                    <img src="./imagem/Inferno_livro-min.jpg" class="image-fit-contain" alt="img" />
                                                    <h6 class="title">Inferno</h6>
                                                  </a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div> <?php 
                          //codigo que mostra livros que o usuário da session está como id_usuario_recebe
                          ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Fim card id_usuario_recebe -->
                </div>
              </div>
            </div>