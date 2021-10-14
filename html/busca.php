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