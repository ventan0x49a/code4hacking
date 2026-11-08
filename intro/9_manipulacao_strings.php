<?php

/**
 * Por baixo dos panos uma string é um array de caracteres, então podemos manipular uma string como se fosse um array.
 */

$nome = "Kaiky"; // String
echo $nome[0] . "\n"; // Exibe o primeiro caractere da string (K)

// Concatenação de strings
$frase = "O {$nome} e um bom programador"; // Concatenação de strings
echo $frase . "\n"; // Exibe a frase concatenada

// Verificar a frase dentro de uma string
$contem = str_contains($frase, "bomttt"); // boolean - Verifica se a frase contém a palavra "bom"

if ($contem == true) {
    echo "A frase existe" . "\n";
} else {
    echo "A frase não existe" . "\n";
}

$contem = str_replace("bom", "ruim", $frase); // Substitui a palavra "bom" por "ruim" na frase

if ($contem == true) {
    echo "A frase existe" . "\n";
} else {
    echo "A frase não existe" . "\n";
}