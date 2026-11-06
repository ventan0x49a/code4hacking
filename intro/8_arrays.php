<?php

$lista = [
    "fruta1" => "Maça",
    "fruta2" => "Banana",
    "fruta3" => "Laranja",
    "fruta4" => "Uva",
    "frutas5" => [
        "arr_arr1" => "abacaxi",
        "arr_arr2" => "melancia",
        "arr_arr3" => "manga"
    ]
]; // Array de frutas

//var_dump($lista); // Exibe o tipo e valor do array - var_dump usado pra debug

//echo $lista["fruta1"]; // Exibe o primeiro elemento do array

//pegando os valores do array dentro do array (frutas5)
//echo $lista["frutas5"][0]; // Exibe o primeiro elemento do array dentro do array (abacaxi)\
//echo $lista["frutas5"]["arr_arr1"]; // Exibe o primeiro elemento do array dentro do array (abacaxi)

// Loop foreach que percorre o array e exibe os valores
foreach ($lista as $item) {
    echo $item . "\n"; // Exibe o valor de cada elemento do array
}

// verificar as chaves do array
foreach ($lista as $key => $item) {
    echo "$key -> $item" . "\n"; // Exibe a chave e o valor de cada elemento do array
}