<?php
// Crie um arquivo de texto chamado "dados.txt" e escreva nele o seu nome.
// Em seguida, leia o conteúdo do arquivo e exiba-o na tela.

$nomeArquivo = "dados_" . rand()&10 . ".txt";
$conteudo = "Este conteúdo dentro do arquivo";

// Escrever no arquivo
file_put_contents($nomeArquivo, $conteudo);

// Ler e exibir o conteúdo
$conteudoLido = file_get_contents($nomeArquivo);
echo $conteudoLido;