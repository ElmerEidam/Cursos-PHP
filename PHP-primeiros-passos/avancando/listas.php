<?php

$idadeList = [24, 15, 78, 36, 41, 29, 11];

list($idadeElmer, $idadeJoao, $idadeMaria) = $idadeList;

$umaIdade = $idadeList[5];

echo $umaIdade . PHP_EOL;

$idadeList[] = 20;

echo PHP_EOL;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}

echo PHP_EOL;

echo $idadeElmer . PHP_EOL;
echo $idadeJoao . PHP_EOL;
echo $idadeMaria . PHP_EOL;
