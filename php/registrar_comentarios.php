<?php
    // formatação do texto
    $texto = $_POST['id'] . '/' . $_POST['nome'] . '/' . $_POST['descricao'] . PHP_EOL;
    
    // abrindo o arquivo
    $arquivo = fopen('comentarios.txt', 'a');

    // escrevendo comentário e fechando o arquivo
    fwrite($arquivo, $texto);
    fclose($arquivo);

    // retornar para a página da loja
    header('Location: ../html/paginaloja_frozinhabrecho.php');

?>