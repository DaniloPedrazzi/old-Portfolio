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


$emailx = "danilo.justino1@gmail.com"
$assunto = "Mensagem proveniente do portfolio"
$mensagem = "Nome: $nome /n
Email: $Email/n
Mensagem: $Area"
mail ( string $emailx , string $assunto , string $mensagem) : bool

echo "Nome:".$nome."<br>";
echo "Email:".$Email."<br>";
echo "Compra:".$Compra."<br>";
echo "Outro:".$Outro."<br>";
echo "Mensagem:".$Area."<br>";
?>