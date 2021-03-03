<?php

$contador = 1;
echo "Laço WHILE:";

while ($contador <= 15) {
    echo "#$contador" . PHP_EOL;
    $contador++;
}

echo PHP_EOL;

$contador = 1;
echo "Laço DO...WHILE:";

do {
    echo "#$contador" . PHP_EOL;
    $contador++;
} while ($contador <= 15);

echo PHP_EOL;

$contador = 1;
echo "Laço FOR:";

for ($contador; $contador <= 15; $contador++) {
    echo "#$contador" . PHP_EOL;
}

echo PHP_EOL;
