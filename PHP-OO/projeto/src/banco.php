<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$primeiraConta = new Conta(new Titular(new CPF('123.456.789-10'),'Bastião da Silva'));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarSaldo();
echo $primeiraConta->recuperarCpfTitular();
echo $primeiraConta->recuperarNomeTitular();

$segundaConta = new Conta(new Titular(new CPF('089.632.229-77'), 'Elmer Eidam Junior'));
$segundaConta->depositar(10000);

echo Conta::recuperarNumeroDeContas();