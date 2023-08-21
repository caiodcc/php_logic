<?php
// Crie uma matriz que represente uma tabela com informações de alunos (nome, nota1, nota2).
// Calcule a média de cada aluno e exiba seus nomes e médias.

$alunos = array(
    array("nome" => "Caio", "nota1" => 8, "nota2" => 7),
    array("nome" => "Mariana", "nota1" => 9, "nota2" => 6),
    array("nome" => "Pedro", "nota1" => 7, "nota2" => 8)
);

foreach ($alunos as $aluno) {
    $media = ($aluno["nota1"] + $aluno["nota2"]) / 2;
    echo "Aluno: " . $aluno["nome"] . ", Média: " . $media . "<br>";
}
?>