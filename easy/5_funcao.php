<?php
// Crie uma função que recebe um número como parâmetro e retorna o dobro desse número.
// Teste a função com um valor de sua escolha e exiba o resultado.

function dobrarNumero($num) {
    return $num * 2;
}

$valor = 5;

$resultado = dobrarNumero($valor);
echo "O dobro do $valor é $resultado";
