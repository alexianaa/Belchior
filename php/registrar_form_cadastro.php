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

    $nome_completo = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nome_loja = $_POST['nome_loja'];
    $formato_loja = $_POST['tipo'];
    $estado = $_POST['estado'];
    $horario_funcionamento = $_POST['horario'];
    $cidade = $_POST['cidade'];
    $rua = $_POST['rua'];
    $complemento = $_POST['complemento'];
    $link = $_POST['link'];

    $result_usuario = "INSERT INTO cadastro (nome, email, telefone, nome_loja, formato_loja, produtos, estado, cidade, horario, rua, complemento, link)
    VALUES ('$nome_completo', '$email', '$telefone', '$nome_loja', '$formato_loja', '$produto', '$estado', '$horario_funcionamento', '$cidade', '$rua', '$complemento', '$link')";
    $resultado_usuario = mysqli_query($conectar, $result_usuario);

    $_SESSION['msg'] = "<p style = 'color: green;'> Usuário cadastrado com sucesso </p>";
    
    header("Location: ../html/cadastro.php");
?>