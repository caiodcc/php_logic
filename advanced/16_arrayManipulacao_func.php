<?php
// Crie uma função que recebe um array de números e retorna um novo array com os números pares.
// Teste a função com um array de sua escolha.


function filtrarNumerosPares($numeros) {
    $numerosPares = array_filter($numeros, function($numero) {
        return $numero % 2 == 0;
    });

    return array_values($numerosPares);
}

$arrayNumeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Chame a função para filtrar números pares
$numerosPares = filtrarNumerosPares($arrayNumeros);

// Exiba o resultado
print_r($numerosPares);