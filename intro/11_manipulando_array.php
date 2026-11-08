<?php

$lista = [
    "item1" => "Valor 1",
    "item2" => "Valor 2",
    "item3" => "Valor 3"
];

//$search_value = "Valor 2"; // Valor a ser buscado no array $lista

//$result = in_array($search_value, $lista); // Verifica se o valor existe no array $lista -- Retorna true se o valor existir, caso contrário retorna false
//var_dump($result); // Exibe o resultado da verificação (true ou false)

$nome_chave = "item1"; // Nome da chave a ser buscada no array $lista
array_key_exists($nome_chave, $lista); // Verifica se a chave existe no array $lista -- Retorna true se a chave existir, caso contrário retorna false
var_dump(array_key_exists($nome_chave, $lista)); // Exibe o resultado da verificação (true ou false)

// isset - verifica se existe a variavel no codigo, serve pra achar chaves dentro dos arrays tambem

$nome = "Kaiky";
var_dump(isset($nome)); // Retorna true se a variável $nome estiver definida, caso contrário retorna false

//var_dump(isset($lista["item1"])); // Retorna true se a chave "item1" existir no array $lista, caso contrário retorna false 
if (isset($lista['item1'])) {
    echo "A chave item1 existe no array \$lista" . "\n";
} else {
    echo "A chave item1 não existe no array \$lista" . "\n";
}

$values = array_values($lista); // Retorna um array com os valores do array $lista
var_dump($values); // Exibe o array com os valores do array $lista

// os valores vao ser as chaves customizadas
$values2 = array_keys($lista); // Retorna um array com as chaves do array $lista
var_dump($values2); // Exibe o array com as chaves do array $lista