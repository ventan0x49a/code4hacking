<?php

/**
 * Uma aplicacaozinha basica
 * 
 * aula de manipulação de arquivos
 * Criar um arquivo
 * verificar se o arquivo existe
 * ler um arquivo
 * 
 * (!isset) o ! transforma true em false e false em true, ou seja, se nao existir, cria o arquivo
 */

if (!isset($_GET['filename'])) {
    echo "Please provide a filename in the query string";
    die(); # encerra o programa função muito usada
}

$filename = $_GET['filename'];

# Verificar se existe o arquivo enviado pelo usuario
var_dump(file_exists($filename)); # retorna true ou false, o usuario vai informar o arquivo na query string e vamos verificar o se ele existe ou nao

if(!file_exists($filename)) { # se o arquivo nao existir, vamos criar o arquivo
    echo "File does not exist, creating file..."; 
    die(); # encerra o programa
}

# se ele existir - ler o arquivo e retornar o conteudo do arquivo
$content = file_get_contents($filename); #ele lê arquivos em caminhos especificos também, exemplo /etc/passwd, tambem aceita URL

echo $content;
