<?php

/**
 * () É passado como parâmetro para a função ou argumentos
 * 
 */

function exibirMensagem($nome) { // essa variavel só existe dentro da função, ela é local
    echo "Olá, $nome!";
}

exibirMensagem("Kaiky"); // Chamada da função para exibir a mensagem

echo "\n"; // Quebra de linha

$nome2 = "Kaiky";
var_dump($nome2); // var_dump() exibe o tipo e valor da variável

# Closures são funções anônimas, ou seja, funções sem nome. Elas podem ser atribuídas a variáveis e passadas como argumentos para outras funções.

$exibir_mensagem = function($nome3) { // variavel que armazena uma funcao
    echo $nome3;
};

// Chamada da closure para exibir a mensagem
$exibir_mensagem("Closure Kaiky"); // Chamada da closure para exibir a mensagem