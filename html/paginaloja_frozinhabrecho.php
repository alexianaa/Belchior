<?php

    // lendo arquivo
    $arquivo = fopen('../php/comentarios.txt', 'r');

    while (!feof($arquivo)) {
    $registros = fgets($arquivo);
    $comentario[] = $registros;
    }

    // fechando arquivo
    fclose($arquivo);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title>Belchior</title>
        <link rel="shortcut icon" href="../img/LogoFavicon.ico" type="image/x-icon">
        <meta charset="utf-8">
        <!-- Bootstrap 5.1 -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!-- Normalize CSS -->
        <link rel="stylesheet" type="text/css" href="../css/normalize.css">
        <!-- Estilização da página -->
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <!-- Fonte da página -->
        <link href="https://fonts.googleapis.com/css2?family=Trocchi&display=swap" rel="stylesheet">
        <!-- js das estrelas -->
        <script src="../js/scripts.js"></script>
    </head>

    <body>
        <!-- Topo da página (padrão em todo o site) -->
        <div>
            <!-- Barra de navegação com menu responsivo --> 
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
                <!-- Logo -->
                <a class="d-inline" href="index.html"><img src="../img/logo.png"></a>
                <!-- Menu compactado (aparece em telas pequenas) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <!-- Navegação (páginas e seus links) -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-2">
                            <a class="nav-link text-white" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link text-white" href="sobre.html">Sobre</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="nav-link text-white" href="cupons.html">Cupons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="cadastro.php">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contato.html">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>     
        </div><!-- Fim do topo da página! -->

        <div id="conteudo" class="mt-5 mb-5">

            <!-- Imagem e dados -->
            <div class="container">
                    
                <div class="row align-items-center">

                    <!-- Nome da loja -->
                    <div>
                        <h1 class="nome-loja">Frôzinha Brechó</h1>
                    </div>

                    <!-- Foto principal da loja -->
                    <div class="col-sm-6">
                        <img src="../img/frozinha_brecho/frozinha1.jpeg"  class="img-fluid tam" style="min-width: 200px;">
                    </div>

                    <!-- Contatos e links -->
                    <div class="col-sm-4">
                        <br>

                        <h3 class="pt-5 pb-3">Contato:</h3>
                        <ul>
                            <li><h5>Instagram: <a class="nav-link active" href="https://www.instagram.com/frozinha.brecho" style="color: #E56399;">@frozinha.brecho</a></h5></li>
                        </ul>

                        <h3 class="pt-3 pb-3">Horário de funcionamento:</h3>
                        <br>
                        <ul>
                            <li><h5>Todos os dias</h5></li>
                            <li><h5>10:00 - 22:00</h5></li>
                        </ul>

                    </div>
                </div>

            </div>

            <!-- Avaliação brechó -->
            <div class="container">
                <div class="row align-items-evenly mt-5">

                    <div class="col-sm-5 me-5">
                        <h2 id="rating">Avaliação: </h2>
                        
                        <a href="javascript:void(0)" onclick="Avaliar(1)" >
                        <img class="estrelas" src="../img/star0.png" id="s1"></a>
                                
                        <a href="javascript:void(0)" onclick="Avaliar(2)" >
                        <img class="estrelas" src="../img/star0.png" id="s2"></a>
                                
                        <a href="javascript:void(0)" onclick="Avaliar(3)" >
                        <img class="estrelas" src="../img/star0.png" id="s3"></a>
                                
                        <a href="javascript:void(0)" onclick="Avaliar(4)" >
                        <img class="estrelas" src="../img/star0.png" id="s4"></a>
                                
                        <a href="javascript:void(0)" onclick="Avaliar(5)" >
                        <img class="estrelas" src="../img/star0.png" id="s5"></a>

                        <br>
                        <br>

                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>

                        <div class="row">
                            <!-- Avaliação nota 5 -->
                            <div class="side">
                                <div><h3>5</h3></div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-5"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>150</div>
                            </div>

                            <!-- Avaliação nota 4 -->
                            <div class="side">
                                <div><h3>4</h3></div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-4"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>63</div>
                            </div>
                            
                            <!-- Avaliação nota 3 -->
                            <div class="side">
                                <div><h3>3</h3></div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-3"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>15</div>
                            </div>

                            <!-- Avaliação nota 2 -->
                            <div class="side">
                                <div><h3>2</h3></div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-2"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>6</div>
                            </div>

                            <!-- Avaliação nota 1 -->
                            <div class="side">
                                <div><h3>1</h3></div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-1"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>20</div>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>

                    <!-- Comentários -->
                    <div class="col-sm-4 text-center ms-2">
                        <h3>Comente!</h3>

                        <form method="post" action="../php/registrar_comentarios.php" class="pt-5">
                            <div class="d-none form-group">
                                <input name="id" type="text" class="form-control" placeholder="1">
                            </div>

                            <div class="form-group mb-3">
                                <input name="nome" type="text" class="form-control" placeholder="Nome">
                            </div>
                                
                            <div class="form-group">
                                <textarea name="descricao" class="form-control mt-1" placeholder="Descrição" rows="3"></textarea>
                            </div>

                            <button style="width: 90px; height: 40px; border: 2px solid black;" class="mt-3 botao ms-5 me-5" type="submit">Enviar</button>
                        </form>
                        
                    </div>
                </div>

                <div class="row justify-content-center mt-4">
                    <div class="col text-center" style="min-width: 150px; max-width: 700px;">
                        <h3 class="pb-2">Feedback:</h3>
                        <?php foreach ($comentario as $lines) { ?>
                        
                        <!-- Formatando o arquivo com comentários -->
                        <?php
                            // organizando inputs dos usuários
                            $conteudo = explode('/', $lines);

                            if (count($conteudo) < 3) {
                                continue;
                            };
                        ?>
                    
                        <!-- Mostrar comentários -->
                        <div class="card mb-4 bg-light">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $conteudo[1] ?></h5>
                            <p class="card-text"><?php echo $conteudo[2] ?></p>
                        </div>
                        </div>

                        <?php } ?>
                    </div>

                </div>
                
            </div>

            <!-- Mais imagens da loja -->
            <div>
                <h2 class="mt-5">Fotos:</h2>
                <div id="carouselPagLoja" class="carousel carousel-dark slide" data-bs-ride="carousel">

                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselPagLoja" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselPagLoja" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>

                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="../img/frozinha_brecho/frozinha2.png" class="d-inline-block img-paginaloja" alt="...">
                        <img src="../img/frozinha_brecho/frozinha3.png" class="d-none d-md-inline-block img-paginaloja" alt="...">
                        <img src="../img/frozinha_brecho/frozinha4.png" class="d-none d-md-inline-block img-paginaloja" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="../img/frozinha_brecho/frozinha5.png" class="d-inline-block img-paginaloja" alt="...">
                        <img src="../img/frozinha_brecho/frozinha6.png" class="d-none d-lg-inline-block img-paginaloja" alt="...">
                        <img src="../img/frozinha_brecho/frozinha7.png" class="d-none d-lg-inline-block img-paginaloja" alt="...">
                      </div>
                    </div>

                    <button class="carousel-control-prev d-none d-md-block" type="button" data-bs-target="#carouselPagLoja" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next d-none d-md-block" type="button" data-bs-target="#carouselPagLoja" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
        </div>

        <!-- Rodape -->
        <div id="rodape">
            <div class="d-flex">

                <!-- Link para os termos de uso -->
                <div class="me-auto">
                    <h5><a class="nav-link active text-white pt-4" aria-current="page" href="termos_de_uso.html">Termos de uso</a></h5>
                    <!-- Copyright -->
                    <h6 class="text-white ms-3">Todos os direitos reservados aos criadores ©</h6>
                </div>

                <!-- Logo da UnB -->
                <div>
                    <img class="img-fluid" src="../img/logo-unb.png">
                </div>

            </div>
        </div> <!-- Fim do rodape! -->
    
        <!-- JavaScript Bundle with Popper (coisa pro bootstrap) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>