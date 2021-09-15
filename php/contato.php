<?php

if(isset(&_POST['email']) && !empty(&_POST['email'])){

    $nome = addcslashes(&_POST['name']);
    $email = addcslashes(&_POST['email']);
    $mensagem = addcslashes(&_POST['message']);

    $to = "alexiasilvacardosoo@gmail.com";
    $subject = "Contato - Belchior: site localizador";
    $body = "Nome: ".$nome. "\r\n".
            "Email: ".$email. "\r\n".
            "Mensagem: ".$mensagem; 

    $header = "From: alexiasilvacardosoo@gmail.com"."\r\n". "Reply-To:".$email. "\e\n". "X=Mailer:PHP/".phpversion();

    if(mail($to, $subject, $body, $header)){

        echo("Email enviado com sucesso!");

    }else{

        echo("O Email não pode ser enviado");

    }

}

?>