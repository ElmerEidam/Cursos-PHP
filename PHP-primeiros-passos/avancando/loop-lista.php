<?php

$idadeList = [24, 15, 78, 36, 41, 29, 11];
$nomesList = ["João", "Maria", "José", "Ana"];

//count(nome_lista) serve para contar quantos itens a lista possui
echo "A lista de idades possui " . count($idadeList) . " itens." . PHP_EOL;

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
};

echo "A lista de nomes possui " . count($nomesList) . " itens." . PHP_EOL;

for ($i = 0; $i < count($nomesList); $i++) {
    echo $nomesList[$i] . PHP_EOL;
};
