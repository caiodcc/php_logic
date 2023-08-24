<?php
// Crie uma função que gera a sequência de Fibonacci até o n-ésimo termo.
// Teste a função para gerar a sequência até o 10º termo.

function fibbonacci($n){

    $fibbonacci = array(0, 1);

    for ($i = 2; $i < $n; $i++){
        $fibbonacci[$i] = $fibbonacci[$i - 1] + $fibbonacci[$i - 2];
    }
    return $fibbonacci;

}

$exemplo = 10;
$sequenciaFibbonacci = fibbonacci($exemplo);

echo implode(', ', $sequenciaFibbonacci);
