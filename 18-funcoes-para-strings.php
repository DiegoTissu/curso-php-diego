<?php
/* funçoes para strings
strtoupper
strtolower
substr
str_pad
str_repeat
strlen
str_replace
strpos
*/

//strtoupper
$nome = "diego miranda";
$novoNome = strtoupper($nome);
echo $novoNome;

echo "<br>";

//strtolower
$nome = "DIEGO MIRANDA";
$novoNome = strtolower($nome);
echo $novoNome;

echo "<hr>";

$mensagem = "Olá, Mundo!";
echo substr($mensagem, 4, 6);

echo "<hr>";

$objeto = "iPhone";
$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_LEFT);
echo $novoObjeto;

echo "<hr>";

//str_repeat
$string = str_repeat("Sucesso!", 5);
echo $string; 

echo "<hr>";

//strlen
$mensagem = "Olá, Mundo!";
echo strlen($mensagem);

echo "<hr>";

//str_replace
$texo = "A Seleção Argentina será a campeã da copa do mundo de 2022.";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;

echo "<hr>";

echo strpos($texto, "copa");


