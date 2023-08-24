<?php
// Crie uma função que recebe uma quantidade variável de argumentos numéricos.
// A função deve retornar a média dos números passados como argumento.

$x = 50;

$sequence = [$x];

while($x > 1){
    if($x % 2 == 0) {
        $x = $x / 2;
    } else {
        $x = 3 * $x + 1; 
    }
    $sequence[] = $x;
  
}

$average = array_sum($sequence) / count($sequence);
echo "Sequência: " . implode(", ", $sequence);
echo "</br>";
echo "Média da sequência: " . $average;