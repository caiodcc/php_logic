<?php
// Crie uma função que recebe uma data no formato "Y-m-d" e retorna o dia da semana correspondente.
// Teste a função com uma data de sua escolha.
function diaSemana($data) {
    $diasSemana = array("Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado");
    $diaSemanaNum = date("w", strtotime($data));
    return $diasSemana[$diaSemanaNum];
}

$data = "2023-08-21";
$diaDaSemana = diaSemana($data);
echo "A data $data corresponde a um(a) $diaDaSemana";

