<!--- COLOCAR HTML DA PÁGINA DE RESULTADOS DE BUSCA -->
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title><?php echo $id ?> | Belchior Localizador de Brechós</title>
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
                <a class="d-inline" href="index.php"><img src="../img/logo.png"></a>
                <!-- Menu compactado (aparece em telas pequenas) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <!-- Navegação (páginas e seus links) -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item me-2">
                            <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
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

        <br><br><br>

        <div id="conteudo" class="pt-5 mt-5 mb-5 text-center">
            <!-- Área de busca -->
            <meta name="viewport" content="width=device-width, user-scalable=no">
            <div id="divBusca" style="text-align: center;" class="pt-3">
                <form action="busca2.php" method="GET">
                    <input type="text" name="nome_brecho" size="23" placeholder="Encontre o brechó ideal" aria-label="buscar" style="height: 30px; padding-left: 2%; border: 2px solid black;" required>
                    <input type="submit" value="Buscar" name="submit" style="border: 2px solid black; background-color: #DE6E4B; height: 30px; width: 70px;"></input>                        
                </form>  
            </div>

            <!-- Textinho -->
            <h3 class="mt-5 mb-3">Resultado da busca:</h3>
            <h5>Sua busca não obteve resultados! Tente outros termos.</h5>
            <h4 class="mt-5 pt-3 mb-3">Sugestões:</h4>

            <!-- Mapa -->
            <div style="border: 3px solid rgba(127, 209, 185, 1); margin-left: 2%; margin-right: 2%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30719.66597683526!2d-47.84938210932007!3d-15.75334788103361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zYnJlY2jDsw!5e0!3m2!1spt-BR!2sbr!4v1628535576889!5m2!1spt-BR!2sbr" width="100%" height="340px" allowfullscreen="" loading="lazy"></iframe>
            </div>     
        </div>                   
        
        <br><br>
        
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>
    </body>

</html>