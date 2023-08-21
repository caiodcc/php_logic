<?php

function calcularFatorial($num) {
    if ($num <= 1) {
        return 1; // Caso base: fatorial de 0 e 1 é 1
    } else {
        return $num * calcularFatorial($num - 1); // Chamada recursiva -> ($num -1) se torna tanto parâmetro quanto resultado
    }
}

$numero = 3;
$resultado = calcularFatorial($numero);

echo "O fatorial de $numero é: $resultado";
?>
