<?php
function calcularQuadrado() {
    return function($num) {
        return $num * $num;
    };
}

$numero = 7;
$quadrado = calcularQuadrado();
$resultado = $quadrado($numero);
echo "O quadrado de $numero é: $resultado";
?>
