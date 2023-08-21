<?php
// Crie uma função que recebe um texto e uma palavra-chave.
// A função deve destacar a primeira ocorrência da palavra-chave no texto, envolvendo-a em negrito.
// Teste a função com um texto e uma palavra-chave de sua escolha.

function destacarPalavraChave($texto, $palavraChave) {
    $textoFormatado = preg_replace("/\b$palavraChave\b/i", "<strong>$0</strong>", $texto, 1);
    return $textoFormatado;
}

$texto = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum dolor sit amet.";
$palavraChave = "ipsum";
$textoDestacado = destacarPalavraChave($texto, $palavraChave);
echo $textoDestacado;