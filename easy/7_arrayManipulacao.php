<?php
// Crie um array numérico com números de 1 a 5.
// Use um loop para calcular a soma dos números no array.

$nums = array(1, 2, 3, 4, 5);
$soma = 0;


foreach($nums as $num){
    $soma += $num;
}

echo "A soma é : $soma";
