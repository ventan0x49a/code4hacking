<?php

/** 
 * Operadores Aritméticos
 * (+) Adição
 * (-) Subtração
 * (*) Multiplicação
 * (/) Divisão
 * (%) Resto da divisão
 * (**) Exponenciação
 * (=) Atribuição
 * (+=) Adição e atribuição
 * (-=) Subtração e atribuição
 * (*=) Multiplicação e atribuição
 * (/=) Divisão e atribuição
 * 
 */

$valor1 = 10;
$valor2 = 10.50;

//echo $valor1 + $valor2; // Soma de valores
//echo "\n"; // Quebra de linha
//echo $valor1 - $valor2; // Subtração de valores
//echo "\n"; // Quebra de linha
//echo $valor1 * $valor2; // Multiplicação de valores
//echo "\n"; // Quebra de linha
//echo $valor1 / $valor2; // Divisão de valores

$idade_minima = 18;
$idade_1 = 19;
$idade_2 = 15;

//var_dump($idade_1 == $idade_2); // Verifica se a idade_1 é igual a idade_2 - var_dump() exibe o tipo e valor da variável
//print_r($idade_1 != $idade_2); // Verifica se a idade_1 é diferente da idade_2 - print_r() exibe o valor da variável

var_dump($idade_1 > $idade_minima && $idade_2 > $idade_minima); // Verifica se a idade_1 e idade_2 são maiores que a idade_minima
var_dump($idade_1 > $idade_minima || $idade_2 > $idade_minima); // Verifica se a idade_1 ou idade_2 são maiores que a idade_minima