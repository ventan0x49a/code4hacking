<?php

/**
 * $_GET é uma variável superglobal do PHP que contém os dados enviados via método GET em uma requisição HTTP. Ela é um array associativo que armazena os parâmetros passados na URL da requisição.
 * Detalhar o tipo de requisição HTTP (GET, POST, PUT, DELETE, etc.) e como acessar os dados enviados na requisição. curl http://localhost:8000/ -X POST
 */

//echo $_GET['nome'] . " " . $_GET['nick'];

//var_dump($_POST); // Exibe os dados enviados via método POST (request body)

//echo $_POST['nick'] . "\n";

//var_dump($_SERVER); // Exibe informações sobre o servidor e a requisição HTTP
echo $_SERVER['HTTP_X_EXAMPLE'] . "\n"; // Exibe o valor do cabeçalho HTTP personalizado "X-Example" enviado na requisição
echo "Método: " . $_SERVER['REQUEST_METHOD'] . "\n"; // Exibe o método da requisição HTTP
echo "URI: " . $_SERVER['REQUEST_URI'] . "\n"; // Exibe a URI da requisição HTTP
