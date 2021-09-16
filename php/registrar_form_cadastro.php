<?php

    // text style
    $text = 'Nome: ' . $_POST['nome'] . PHP_EOL . 'E-mail: ' . $_POST['email'] . PHP_EOL . 'Telefone: ' . $_POST['telefone'] . PHP_EOL . 'Tipo: ' . $_POST['tipo'] . PHP_EOL . 'Produtos: ' . $_POST['produto1'] . ', ' . $_POST['produto2'] .', '. $_POST['produto3'] . PHP_EOL . 'Termos de uso: ' . $_POST['termos-de-uso'] . PHP_EOL .'-----------------------------' . PHP_EOL;
    
    // abrindo o arquivo alvo
    $cadastros = fopen('cadastros.txt', 'a');

    // escrevendo no arquivo
    fwrite($cadastros, $text);
    fclose($cadastros);

    // retornar resultado
    header('Location: ../html/cadastro.php?submit=sucesso');

?>