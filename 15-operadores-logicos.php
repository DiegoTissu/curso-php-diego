<?php
// Operadores lógicos
// Nos permitem fazer comparação entre expressões
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)
// negação (!)

$idade = 31;
$nome = "Diego";

if(($idade == 31) and ($nome == "Diego")):
    echo "É verdadeiro.";
else:
    echo "É falso.";
endif;