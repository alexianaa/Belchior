<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title><?php echo $nome ?> | Belchior Localizador de Brechós</title>
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

        <?php
            //conexao banco
            $host = 'localhost';
            $user = 'root';
            $pass = '';
            $bd   = 'belchior';

            $conectar = mysqli_connect( $host, $user, $pass, $bd);

            //checar conexao
            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }

            //resultado de busca
            $nome_brecho = $_POST['nome_brecho'];
            $query = "SELECT * FROM cadastro WHERE nome_loja LIKE '%$nome_brecho%' LIMIT 5";
            $result = mysqli_query($conectar, $query) or die(mysqli_error($conectar));;

            while( $row = mysqli_fetch_array($result) ){

            echo "Resultado de busca: " . $row['nome_loja'] . "<br>";

            }
        ?>

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