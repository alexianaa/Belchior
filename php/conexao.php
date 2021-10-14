<?php

//conexao com o banco de dados
$host = 'localhost';
$user = 'root';
$pass = '';
$bd   = 'belchior';

$conectar = mysqli_connect( $host, $user, $pass, $bd);

//enviando informacoes do form de cadastro pro banco
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

$_SESSION['msg'] = "<p style = 'color: green;'> Usuário cadastrado com sucesso </p>"; // mensagem de confirmacao
        
header("Location: ../html/cadastro.php");
?>