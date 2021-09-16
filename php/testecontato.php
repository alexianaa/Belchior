<?php
     if (isset($_POST['BTEnvia'])) {
     
          //Variaveis de POST 
          $name = $_POST['name'];
          $email = $_POST['email'];
          $message = $_POST['message'];
          
          //REMETENTE --> email do domínio
          $email_remetente = "alexiasilvacardosoo@gmail.com";
          
          //Configurações do email
          $email_destinatario = "alexiasilvacardosoo@gmail.com"; // email que receberá as mensagens
          $email_reply = "$email"; 
          $email_assunto = "Contato formmail"; // assunto da mensagem
          
          //Monta o Corpo da Mensagem
          $email_conteudo = "Nome = $name \n"; 
          $email_conteudo .= "Email = $email \n";
          $email_conteudo .= "Mensagem = $message \n"; 
          
          //Seta os Headers
          $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
          
          //Enviando o email
          if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers))
          { 
               echo "</b>E-Mail enviado com sucesso!</b>"; 
          } 
          else
          { 
               echo "</b>Falha no envio do E-Mail!</b>"; 
          } 
     } 
?>
