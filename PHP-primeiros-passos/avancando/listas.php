<?php

$idadeList = [24, 15, 78, 36, 41, 29, 11];

$umaIdade = $idadeList[5];

echo $umaIdade . PHP_EOL;

$idadeList[] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}

