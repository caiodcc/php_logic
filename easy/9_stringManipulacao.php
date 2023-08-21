<?php
// Crie uma função que recebe uma string e retorna a mesma string invertida.
// Teste a função com uma string de sua escolha.

function inverterString($str) {
    return strrev($str);
}

$texto = "Olá";
$textoInvertido = inverterString($texto);
echo $textoInvertido;
