<?php

/**
 * for é uma estrutura de controle de fluxo que permite executar um bloco de código repetidamente enquanto uma condição for verdadeira. Ele é composto por três partes: inicialização, condição e incremento. O loop for é útil quando se sabe o número exato de iterações que se deseja realizar.
 * for -> para
 */
for ($i = 0; $i <= 10; $i++) { // Loop for que executa 10 vezes ++ acrementar
    echo "O valor de i é: $i" . PHP_EOL; // Exibe o valor de i a cada iteração
}

echo PHP_EOL; // Quebra de linha

for ($i = 10; $i >= 0; $i--) { // Loop for que executa 10 vezes, -- decrementar
    echo "O valor de i é: $i" . PHP_EOL; // Exibe o valor de i a cada iteração
}

/**
*while -> enquanto a condição for verdadeira, o bloco de código será executado
*(.) -> concatenação de strings
*time_sleep_until() -> pausa a execução do script até o tempo especificado
*PHP_EOL -> constante que representa a quebra de linha do sistema operacional
*/

$idade = 10;
// Enquanto a idade for menor que 18, o loop será executado
while ($idade <= 18) {
echo "Você ainda não é maior de idade. Idade atual: $idade\n";
time_sleep_until(time() + 1); // Pausa a execução por 1 segundo
$idade++; // Incrementa a variável $idade em 1 a cada iteração do loop
}