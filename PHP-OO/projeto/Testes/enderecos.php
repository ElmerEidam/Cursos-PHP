<?php

require_once 'autoloader.php';

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco('Ponta Grossa', 'Uvaranas', 'Rua Jaime Pinto Rosas', '56-25');
$outroEndereco = new Endereco('Imbituva', 'Jardim Paraíso', 'Rua João Ulrich Rickli', '585');

echo $umEndereco->bairro . PHP_EOL;
$umEndereco->bairro = 'Jardim Carvalho';
echo PHP_EOL;
echo $umEndereco . PHP_EOL;
echo $outroEndereco;
