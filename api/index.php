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

echo "Nome:".$nome."<br>";
echo "Email:".$Email."<br>";
echo "Compra:".$Compra."<br>";
echo "Outro:".$Outro."<br>";
echo "Mensagem:".$Area."<br>";
?>