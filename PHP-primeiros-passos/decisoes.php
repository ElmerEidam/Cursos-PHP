<?php

$idade = 24;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 e acompanhado." . PHP_EOL;
echo "Você tem $idade anos." . PHP_EOL;

if ($idade >= 18) {
    echo "Você pode entrar sozinho!" . PHP_EOL;
} elseif ($idade >= 16 && $numeroDePessoas > 2) {
    echo "Você é menor de idade e está acompanhado(a) por mais de 2 pessoas, então pode entrar.";
} else {
    echo "Você não pode entrar!";
}

echo PHP_EOL;
