<?php
// Crie um JSON que represente informações sobre produtos (nome, preço, estoque).
// Em seguida, leia o JSON e exiba os dados dos produtos na tela.
$dadosProdutos = '[{"nome": "Produto A", "preco": 10.5, "estoque": 20},
                  {"nome": "Produto B", "preco": 15.0, "estoque": 15},
                  {"nome": "Produto C", "preco": 25.75, "estoque": 30}]';

$produtos = json_decode($dadosProdutos, true);

foreach ($produtos as $produto) {
    echo "Nome: " . $produto["nome"] . ", Preço: $" . $produto["preco"] . ", Estoque: " . $produto["estoque"] . "<br>";
}
