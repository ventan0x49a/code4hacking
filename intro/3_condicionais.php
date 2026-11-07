<?php

/**
 * Estruturas Condicionais
 * if - Se
 * else - Senão
 * elseif - Senão se
 * switch - Caso
 */
$idade_minima = 18;
$idade_usuario = 15;

if ($idade_usuario >= $idade_minima) {
    echo "Você é maior de idade";
} else {
    echo "Você não é maior de idade";
}