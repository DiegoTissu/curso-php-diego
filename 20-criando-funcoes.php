<?php
//Criandofunções
function exibirNome($nome){
    echo "Nome do aluno é $nome";
}
exibirNome("Diego Miranda");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if($media >= 7):
        echo "$nome foi aprovado(a) com a média $media.<br>";
    else:
        echo "$nome foi reprovado(a)<br>";
    endif;
}

calcularMedia("Diego Miranda", 5, 7, 9, 10);
calcularMedia("Beatriz", 2, 7, 6, 4);