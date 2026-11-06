<?php

/**
 * Operadores condicionais
 * (==) Igualdade
 * (!=) Diferente
 * (>) Maior que
 * (<) Menor que
 * (>=) Maior ou igual a
 * (<=) Menor ou igual a
 * (&&) E lógico
 * (||) Ou lógico
 * (!) Negação
 */

$idade_minima = 18;
$idade_maxima = 30;
$idade_usuario = 20;

if ($idade_usuario >= $idade_minima && $idade_usuario <= $idade_maxima) {
    // se for true executa o codigo que esta dentro do bloco do if
    echo "Usuário está na faixa etária permitida";
} else {
    // se for false executa o codigo que esta dentro do bloco do else
    echo "Usuário não está na faixa etária permitida";
}