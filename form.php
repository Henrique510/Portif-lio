<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);]

$para = "riquemdias.510@gmail.com";
$assunto = "Coleta de dados Inteliogia";
$corpo "Nome: ".$nome."\n"."E-mail: ".$email."\n", "message: "$mensagem;

$cabeca = "From: riquem@gmail.com"."\n". "Reply-to: ".$email."\n". "X-Mailer: PHP/".phpversion();
if(mail($para,$assunto,$corpo,$cabeca)){ 
    echo("E-mail enviado com sucesso!");
}else{
echo("Houve um erro ao enviar o email!");
}
?>