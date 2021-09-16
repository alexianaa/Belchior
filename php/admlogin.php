<?php

    session_start();

    // definir usuários dos administradores (único)
    $adm_users = array(
        array('email' => 'adm@adm.com', 'senha' => 'admin'),
    );

    // variável para identificar se o usuário foi autenticado
    $user_autenticado = false;

    // verificação de login
    foreach ($adm_users as $user) 
    {
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $user_autenticado = true;
        };
    }

    // resultado
    if ($user_autenticado)
    {
        $_SESSION['autenticado'] = 'S';
        header('Location: forms_cadastro_enviados.php');
    }
    else
    {
        $_SESSION['autenticado'] = 'N';
        header('Location: ../html/adm_page.php?login=erro');
    };

?>