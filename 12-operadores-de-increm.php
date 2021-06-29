<?php
/**
 * Operadores de incremento e decremento
 * 
 * Servem para somar ou subtrair em (+1 ou -1) qualquer valor numerico ou string
 */

$valor = 20;

echo "Pré incremento:", ++$valor;
echo "<hr>";

echo "Pós incremento:", $valor++;
echo "<br>";
echo $valor;
echo "<hr>";

echo "Pré decremento:", --$valor;
echo "<hr>";

echo "Pós incremento:", $valor--;
echo "<br>";
echo $valor;
echo "<hr>";