<HTML>
<HEAD>
<TITLE>Processa</TITLE>
</HEAD>
<BODY>



<?php

$nome = $_POST["Nome"];
$Email = $_POST["Email"];
$Compra = $_POST["Compra"];
$Outro = $_POST["Outro"];
$Area = $_POST["area"];

require 'Composer/vendor/autoload.php'
$from = new SendGrid\Email(null, "xcuelho@xcuelho.space");
        $subject = "Nova mensagem do portfolio";
        $to = new SendGrid\Email(null, "danilo.justino1@gmail.com");
        $content = new SendGrid\Content("text/html", "Nova mensagem proveniente do portfolio<br><br>
        Nome: $nome<br>
        Email: $email<br>
        Mensagem: $Area<br><br>
        Não responder esse e-mail.");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo $response->statusCode();
        echo $response->headers();
        echo $response->body();

echo "Nome:".$nome."<br>";
echo "Email:".$Email."<br>";
echo "Compra:".$Compra."<br>";
echo "Outro:".$Outro."<br>";
echo "Mensagem:".$Area."<br>";
?>