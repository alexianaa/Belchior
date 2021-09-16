<?php

    // text style
    $text = 'Nome: ' . $_POST['nome'] . PHP_EOL . 'E-mail: ' . $_POST['email'] . PHP_EOL . 'Telefone: ' . $_POST['telefone'] . PHP_EOL . 'Tipo: ' . $_POST['tipo'] . PHP_EOL . 'Produtos: ' . $_POST['produto1'] . $_POST['produto2'] . $_POST['produto3'] . PHP_EOL . 'Termos de uso: ' . $_POST['termos-de-uso'] . PHP_EOL .'-----------------------------' . PHP_EOL;
    
    // openning an archive to write the text
    $archive = fopen('callarchive.txt', 'a');

    // writing and then closing the selected archive
    fwrite($archive, $text);
    fclose($archive);

    // return to open_call.php
    header('Location: open_call.php?submit=success');

?>