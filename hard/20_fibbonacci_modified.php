<?php 


$sequenciaModificada = [1, 2, 3];

for($i = 3; $i < 15; $i++){

    $sequenciaFibbonacci = $sequenciaModificada[$i - 3] + $sequenciaModificada[$i - 2] + $sequenciaModificada[$i - 1];
    $sequenciaModificada[] = $sequenciaFibbonacci;
}
print_r($sequenciaModificada);