<?php
// Crie uma função que recebe uma quantidade variável de argumentos numéricos.
// A função deve retornar a média dos números passados como argumento.

function calculaMedia(...$num){
    $soma = array_sum($num);
    $quantidade = count($num);

    return $soma / $quantidade;
}

$resultado = calculaMedia(10, 15, 20);
echo "A media dos numeros é: $resultado";