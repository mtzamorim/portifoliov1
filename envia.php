<?php


    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $texto = addslashes($_POST['texto'])

    $para = "matheusfelix.amorim123@gmail.com";
    $assunto = "Cole de dados - Matheus";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$celular."\n"."Mensagem: ".$texto;

    $cabeca = "From: matheusfelix.amorim@hotmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }
?>