<?php

require_once 'autoloader.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    new Cpf('123.456.789-10'),
    'João da Silva',
    10000
);

$autenticador->tryLogin($umDiretor, '1234');
