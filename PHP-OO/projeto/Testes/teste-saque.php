<?php

use Alura\Banco\Modelo\Conta\{Conta, Titular, ContaCorrente, ContaPoupanca};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoloader.php';

$conta = new Conta(
    new Titular(
        new Cpf('123.456.789-10'),
        'Elmer Eidam',
        new Endereco('Ponta Grossa', 'bairro Teste', 'Rua teste', '13')
    )
);

$conta->depositar(500);
$conta->sacar(100);

echo PHP_EOL;
echo $conta->recuperarSaldo() . PHP_EOL;
