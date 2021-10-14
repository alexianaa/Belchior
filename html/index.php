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
    </head>

    <body>
        <!-- Topo da página (padrão em todo o site) -->
        <div>
            <!-- Barra de navegação com menu responsivo --> 
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
                <!-- Logo -->
                <a class="d-inline" href="index.php"><img src="../img/logo.png"></a>
                <!-- Menu compactado (aparece em telas pequenas) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <!-- Navegação (páginas e seus links) -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-2">
                            <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
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

        <!-- Corpo da página -->
        <div id="conteudo" class="pt-5 pb-5">

            <div class="container-fluid">
                <div class="row">

                    <!-- Título Destaque -->
                    <div class="col-md-3">
                        <h1>Destaques:</h1>
                    </div>

                    <!-- Caixa de busca -->
                    <div class="col-5 ms-auto">

                        <meta name="viewport" content="width=device-width, user-scalable=no">
                        <div id="divBusca" style="text-align: end;" class="pt-3">
                            <form action="busca2.php" method="post">
                                <input type="text" name="nome_brecho" size="23" placeholder="Encontre o brechó ideal" aria-label="buscar" style="height: 30px; padding-left: 2%; border: 2px solid black;" required>
                                <input type="submit" value="Buscar" name="submit" style="border: 2px solid black; background-color: #DE6E4B; height: 30px; width: 70px;"></input>                        
                            </form>  
                        </div>

                    </div>
                </div>
            </div>
            
            <!-- Lojas em destaque -->
            <div id="carouselPagLoja" class="carousel carousel-dark slide pt-5" data-bs-ride="carousel">

                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselPagLoja" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselPagLoja" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselPagLoja" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row mb-5 justify-content-center">
                            <div id="CardLoja" class="card">
                                <img src="../img/Sonho-Brecho/Sonho-Brecho-img1.jpeg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Sonho Brechó</h5>
                                    <p class="card-text">streetstyle - vintage - style</p>
                                    <a id="botao" href="paginaloja_sonho_brecho.php" class="btn">Saiba mais!</a>
                                </div>
                            </div>
                            <div id="CardLoja" class="card  d-none d-md-block ms-4">
                                <img src="../img/frozinha_brecho/frozinha1.jpeg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Frôzinha Brechó</h5>
                                    <p class="card-text">Brechó on-line, DF ♡</p>
                                    <a id="botao" href="paginaloja_frozinhabrecho.php" class="btn">Saiba mais!</a>
                                </div>
                            </div>
                            <div id="CardLoja" class="card d-none d-xl-block ms-4">
                                <img src="../img/Brechoanate/brechoanate1.jpeg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">BrechóAnatê</h5>
                                    <p class="card-text">Enviamos para todo o Brasil</p>
                                    <a id="botao" href="paginaloja_brechoanate.php" class="btn">Saiba mais!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row mb-5 justify-content-center">
                            <div id="CardLoja" class="card">
                                <img src="../img/brecho_ki_achado/ki_achado1.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Brechó Ki Achado</h5>
                                    <p class="card-text">Vista mudança para o futuro!</p>
                                    <a id="botao" href="paginaloja_brechokiachado.php" class="btn">Saiba mais!</a>
                                </div>
                            </div>
                            <div id="CardLoja" class="card  d-none d-md-block ms-4">
                                <img src="../img/brecho_ai_que_lindo/ai_que_lindo.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Brechó Aí, que Lindo!</h5>
                                    <p class="card-text">Que lindo esse brechó!</p>
                                    <a id="botao" href="paginaloja_brechoAiquelindo.php" class="btn">Saiba mais!</a>
                                </div>
                            </div>
                            <div id="CardLoja" class="card d-none d-xl-block ms-4">
                                <img src="../img/uzzadesapego/uzzadesapego.jpeg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Uzza Desapego</h5>
                                    <p class="card-text">Pode se apegar sem medo!</p>
                                    <a id="botao" href="paginaloja_uzzadesapego.php" class="btn">Saiba mais!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row mb-5 justify-content-center">
                            <div id="CardLoja" class="card">
                                <img src="../img/bsb.brecho/bsb.brecho.jpeg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Bsb Brechó</h5>
                                    <p class="card-text">Peças novas e semi novas</p>
                                    <a id="botao" href="paginaloja_bsb.brecho.php" class="btn">Saiba mais!</a>
                                </div>
                            </div>
                            <div id="CardLoja" class="card  d-none d-md-block ms-4">
                                <img src="../img/brecho_mmix/brechommix1.png" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Brechó MMix</h5>
                                    <p class="card-text">Reutilize, troque, doe!</p>
                                    <a id="botao" href="paginaloja_brechommix.php" class="btn">Saiba mais!</a>
                                </div>
                            </div>
                            <div id="CardLoja" class="card d-none d-xl-block ms-4">
                                <img src="../img/amarelo_brecho/amarelo_brecho1.png" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Amarelo Brechó</h5>
                                    <p class="card-text">Consumo consciente? Vem!</p>
                                    <a id="botao" href="paginaloja_amarelobrecho.php" class="btn">Saiba mais!</a>
                                </div>
                            </div>
                        </div>
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

            <!-- Mapa -->
            <div style="border: 3px solid rgba(127, 209, 185, 1); margin-left: 2%; margin-right: 2%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30719.66597683526!2d-47.84938210932007!3d-15.75334788103361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zYnJlY2jDsw!5e0!3m2!1spt-BR!2sbr!4v1628535576889!5m2!1spt-BR!2sbr" width="100%" height="340px" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
        <!-- Rodape -->
        <div id="rodape">
            <div class="d-flex">

                <!-- Link para os termos de uso -->
                <div class="me-auto">
                    <h5><a class="nav-link active text-white pt-4" aria-current="page" href="termos_de_uso.html">Termos de uso</a></h5>
                    <!-- Copyright -->
                    <h6 class="text-white ms-3">Todos os direitos reservados ©</h6>
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