<?php
//primeiro incluimos o arquivo de conexão na nossa página
require('conexao.php');
/**
 * Verificamos se a $_GET['s'] existe( isset), caso exista usamos
 * mysql_real_escape_string para escapar os valores
 * Senão o valor será vazio
 */
$pesq = (isset($_GET['s'])) ? mysql_real_escape_string($_GET['s']) : '';
/**
 * Verificamos se o valor está preenchido, realizando a pesquisa 
 * Senão retornará todos os dados do banco de dados
 */
 
if(!empty($pesq)){
    /**
     * Montamos o SQL, onde selecionamos todos os campos da tabela, 
     * para isso utilizamos o sinal de asteristico
     * E escolhemos a tabela, que no nosso caso se chama artigos
     * Restringimos a busca pelo titulo, e usamos  LIKE para realizar a pesquisa
     * E também pesquisamos no campo conteudo.
     */
     
    $strSQL = "SELECT * FROM lojas  WHERE nome LIKE '%$pesq%' OR localizacao LIKE '%$pesq%'";
}else{
    /**
     * 
     * Caso esteja vazio o valor vindo do formulário, 
     * selecionamos todos os valores da tabela
     * Ordenando pelo id em ordem decrescente
     * Logo vai mostra do mais recente ao mais antigo
     * 
     */  
      
    $strSQL = "SELECT * FROM lojas ORDER BY id DESC";
}
//Executamos o SQL
$qr  = mysql_query($sql) or die(mysql_error());
 
//Contamos o total de registros retornado da pesquisa
$num = mysql_num_rows($qr);
 
?>
 
<!--- COLOCAR HTML DA PÁGINA DE RESULTADOS DE BUSCA -->

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
                            <a class="nav-link text-white" href="cadastro.html">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contato.html">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>     
        </div><!-- Fim do topo da página! -->

<br><br><title>Sistema de Busca</title>
</head>
<body>
    <h1>Resultado da Pesquisa</h1>

<?php 

if($num == 0){
    <div class="text">
    echo '<h2>Nenhum registro encontrado</h2>' </div>;
}else{
    <div class="text">
    echo '<h2>Total de Itens Encontrados: '.$num.'</h2>'</div>;
 
    //imprimi a tag de lista não ordenada
    echo '<ul id="brechos">';
    /**
     * Agora recuperaremos os dados da tabela
     * para isso utilizando um loop
     * Ele retornará um array associativo
     * Sendo que o seu indice será o nome do campo
     */
 
    while($ln = mysql_fetch_assoc($qr)){
        /**
         * Utilizamos a função printf para mostra o link
         * Atribuimos os valores que serão substituidos
         * para isso utilizamos o sinal de porcentagem +  a letra s (%s)
         *       */
        printf('<li><a href="brechos.php?id=%s">%s</a></li>', $ln['id'], $ln['titulo']);
     
 
    }
    //imprime o fechamento da tag ul
    echo '</ul>';
}
?>
</body>
</html>