<?php
/*
* Condicionais
* if
* else
* elseif
*/

$numero = 5;

    if ($numero == 10):
        echo "É igual a 10";
    elseif($numero <= 9):
        echo "É menor ou igual a 9";
endif;    
           
echo "<hr>";

$media = 6;

        echo ($media >= 6) ? "Aprovado!" : "Reprovado!";

echo "<hr>";

/*
* Condicionais
* Switch
* Case
*/

$cor = "Amarelo";

    switch ($cor) {
        case 'Branco':
            echo "Sua cor preferida é Branco.";
            break;

        case 'Verde':
            echo "Sua cor preferida é Verde.";
            break;

        case 'Preto':
            echo "Sua cor preferida é Preto.";
            break;

        default:
            echo "Sua cor preferida não está relacionando em nosso banco de dados!";
            break;
    }