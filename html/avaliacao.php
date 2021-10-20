<?php
    $nota = $_POST['qtd_estrela'];
    $id = $_POST['id'];
    $output = $id ." ". $nota;
    //echo $output;

    //conexao com o banco de dados
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $bd   = 'belchior';

    $conectar = mysqli_connect( $host, $user, $pass, $bd);

    //enviando avaliacoes para o banco de dados

    $result_usuario = "INSERT INTO avaliacoes (id, qtd_estrela)
    VALUES ('$id', '$nota')";
    $resultado_usuario = mysqli_query($conectar, $result_usuario);

    // executando a query
    $media = mysqli_query($conectar, $medias);
    // filtrando somente o valor da média
    $exibir = mysqli_fetch_assoc($media);
    $exibir = implode('|',$exibir);
    $exibir = floatval($exibir)
?>