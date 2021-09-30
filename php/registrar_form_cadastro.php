<?php
    // text style
    /*$text = 'Nome: ' . $_POST['nome'] . PHP_EOL .
            'E-mail: ' . $_POST['email'] . PHP_EOL . 
            'Telefone: ' . $_POST['telefone']  . PHP_EOL . 
            'Nome da loja: ' . $_POST['nome_loja'] . PHP_EOL . 
            'Tipo: ' . $_POST['tipo'] . PHP_EOL . 
            'Estado: ' . $_POST['estado'] . PHP_EOL . 
            'Complemento: ' . $_POST['localizacao'] . PHP_EOL . 
            'Link para site: ' . $_POST['link'] . PHP_EOL . 
            'Produtos: ' . $_POST['produto1'] . ', ' . $_POST['produto2'] .', '. $_POST['produto3'] .', '. $_POST['produto4'] . PHP_EOL . 
            'Termos de uso: ' . $_POST['termos-de-uso'] . PHP_EOL .
            '-----------------------------' . PHP_EOL;
    
    // abrindo o arquivo alvo
    $cadastros = fopen('cadastros.txt', 'a');

    // escrevendo no arquivo
    fwrite($cadastros, $text);
    fclose($cadastros);

    // retornar resultado
    header('Location: ../html/cadastro.php?submit=sucesso'); */

    //enviar para o banco de dados
    session_start();

    include_once("conexao.php");

    $nome_completo = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $nome_loja = filter_input(INPUT_POST, 'nome_loja', FILTER_SANITIZE_STRING);
    $formato_loja = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
    //$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $localizacao = filter_input(INPUT_POST, 'localizacao', FILTER_SANITIZE_STRING);
    $link = filter_input(INPUT_POST, 'link', FILTER_SANITIZE_URL);
    //$produtos = filter_input(INPUT_POST, 'produto1', FILTER_SANITIZE_STRING);

    $result_usuario = "INSERT INTO cadastro (nome, email, telefone, nome_loja, formato_loja, localizacao, link)
    VALUES ('$nome_completo', '$email', '$telefone', '$nome_loja', '$formato_loja', '$localizacao', '$link')";
    $resultado_usuario = mysqli_query($conectar, $result_usuario);

    $_SESSION['msg'] = "<p style = 'color: green;'> Usuário cadastrado com sucesso </p>";
    header("Location: ../html/cadastro.php");
?>