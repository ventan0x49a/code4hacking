<?php

function get_name() {
    $name = "Kaiky"; // Variável local
    return $name;
}

$get_name = function() { // Closure (função anônima) que retorna o valor da variável $name
    $name = "Kaiky"; // Variável local
    return $name;
};



function construct_message ($callbackFn) {
    $name = $callbackFn(); // Chamada da função get_name() e atribuição do valor retornado à variável $name
    $frase = "Ola {$name}, bem vindo ao curso de PHP";
    return $frase; // Retorna a frase construída
}

//$message = construct_message('get_name'); // Chamada da função com o argumento "Kaiky"\
$message = construct_message($get_name); // Chamada da Closure com o argumento "Kaiky"
echo $message; // Exibe a mensagem construída

//$mensagem = construct_message("Kaiky"); // Chamada da função com o argumento "Kaiky"
//echo $mensagem; // Exibe a mensagem construída