<?php

$altura = 1.78;
$peso = 80;

$imc = $peso / ($altura * $altura);

echo "O seu IMC, levando em consideração o peso $peso e a altura $altura, é: $$imc" . PHP_EOL;
echo "Resultado do índice de massa corporal:" . PHP_EOL;

if ($imc < 18.5) {
    echo "Abaixo do peso.";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Peso normal.";
} elseif ($imc >= 25 && $imc <= 29.9) {
    echo "Sobrepeso.";
} elseif ($imc >= 30 && $imc <= 34.9) {
    echo "Obesidade grau 1.";
} elseif ($imc >= 35 && $imc <= 39.9) {
    echo "Obesidade grau 2.";
} elseif ($imc >= 40) {
    echo "Obesidade grau 3.";
}

echo PHP_EOL;
