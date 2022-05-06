<?php
/** For quer dizer: PARA é utilizado quando você já sabe antecipadamente o número de repetição que você precisa **/

for ($contador = 0; $contador <= 10; $contador++):
    echo "8 x $contador = " .($contador*8)."<br>";
endfor;

echo "<hr>";

//foreach segnifica: para cada

$cores = array("Amarelo", "Vermelho", "Verde", "Branco", "Preto", "Azul");

foreach($cores as $indice => $valor):
    echo $indice. "-" .$valor. "<br>";
endforeach;

