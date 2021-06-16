<?php
/* Principais arrays
 * is_array($array) = verifica se uma determinada variável é um array.
 * in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array.
 * array_keys($array) = retorna um novo arrays com as chaves do arrays passado como parâmetro.
 * array_values($array) = retorna um novo array com os valores do array passado como parâmetro.
 * array_merge($array1, $array2) = agrega o conteúdo dos dois arrays.
 * array_pop($array) = exlui a ultima posição do array.
 * array_shift($array) = exclui a primeira posição do array.
 * array_unshift($array, "valor") = adiciona um ou mais elementos no início do array.
 * array_push($array, "valor1", "valor2") = adiciona um ou mais elementos no final do array.
 * array_combine($keys, $values) = mescla os dois arrays passados.
 * array_sum() = calcula a soma dos elementos de array.
 * explode("/", "20/01/2001") = transforma strings em array.
 * implode("-", $array) = transforma array em string.
 */

 //in_array
 $nomes = array("Diego", "Jean", "Tiago");

    if(in_array("Anna", $nomes)):
        echo "Existe no array";
else:
        echo "Não existe no array";
endif;

echo "<hr>";

//array_keys
$usuario = array("pai"=>"Miranda", "filha"=>"Anna", "Esposo"=>"Liu");
    
    $keys = array_keys($usuario);
        print_r($keys);

echo "<hr>";

//array_values
$usuario = array("pai"=>"Miranda", "filha"=>"Anna", "Esposo"=>"Liu");

    $values = array_values($usuario);
        print_r($values);

echo "<hr>";

//array_merge
/*$carros = array("HB20", "Compass", "Duster", "Gol");
$motos = array("YBR", "CG", "Hornet", "Ninja");

$veiculos = array_marge($carros, $motos);

    print_r($veiculos);*/

echo "<hr>";

//array_pop
    $carros = array("HB20", "Compass", "Duster", "Gol");
        print_r($carros);
    echo "<br>";
        echo array_pop($carros);
    echo "<br>";
        print_r($carros);

echo "<hr>";

//array_shift
    $carros = array("HB20", "Compass", "Duster", "Gol");
        print_r($carros);
    echo "<br>";
        echo array_shift($carros);
    echo "<br>";
        print_r($carros);

echo "<hr>";

//array_unshift
    $frutas = array("Melancia", "Morango", "Goiaba", "Maçã");
        print_r($frutas);
        array_unshift($frutas, "Manga", "Banana", "Laranja");
    echo "<br>";
        print_r($frutas);

echo "<hr>";

//array_push
    $frutas = array("Melancia", "Morango", "Goiaba", "Maçã");
        print_r($frutas);
        array_push($frutas, "Manga", "Banana", "Laranja");
    echo "<br>";
        print_r($frutas);

echo "<hr>";

//array_combine
    $keys = array("Campeão", "Vice", "Terceiro");
    $values = array("Gama", "Luziânia", "Brasiliense");

    $times = array_combine($keys, $values);
        print_r($times);

echo "<hr>";

//array_sum
    $soma = array(8,9.5,20.6,4,6);
        //echo array_sum($soma);
        $total = array_sum($soma);
        echo ($total);

echo "<hr>";

//explode
    $data = "09/04/1990";
    $novaData = explode('/', $data);
        print_r($novaData);
echo "<br>";
    $frase = "Meu nome não é Diogo";
    $array = explode(' ', $frase);
        print_r($array);
    
echo "<hr>";

//implode
    $nomes = array("Jean", "Tiago", "Miranda", "Calebe");
    $string = implode(', ', $nomes);
        echo $string;