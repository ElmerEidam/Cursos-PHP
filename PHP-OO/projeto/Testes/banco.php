<?php

require_once 'autoloader.php';

use Alura\Banco\Modelo\Conta\{Conta, Titular, ContaCorrente, ContaPoupanca};
use Alura\Banco\Modelo\{CPF, Endereco};

$primeiraConta = new ContaPoupanca(new Titular(new Cpf('123.456.789-10'), 'Bastião da Silva', new Endereco(
    'Ponta Grossa',
    'Jardim Carvalho',
    'Rua Jaime Pinto Rosas',
    '56-25'
)));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarSaldo();
echo $primeiraConta->recuperarCpfTitular();
echo $primeiraConta->recuperarNomeTitular();

$segundaConta = new ContaCorrente(new Titular(new Cpf('089.632.229-77'), 'Elmer Eidam Junior', new Endereco(
    'Ponta Grossa',
    'Jardim Carvalho',
    'Rua Jaime Pinto Rosas',
    '56-25'
)));
$segundaConta->depositar(10000);

echo Conta::recuperarNumeroDeContas();
