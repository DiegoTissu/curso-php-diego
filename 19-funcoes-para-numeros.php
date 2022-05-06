<?php
//Funções para Números
/* 
    number_format
    round
    ceil
    floor
    rand 
 */

 //number_format
 $db = 1234.56;
 $preco = number_format($db, 2, ",", ".");
 echo "Valor do produto é R$ $preco";

 echo "<hr>";

 echo rand(1,2000);

 