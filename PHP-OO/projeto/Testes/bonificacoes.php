<?php

require_once 'autoloader.php';

use Alura\Banco\Modelo\Funcionario\{Funcionario, Diretor, Gerente, Desenvolvedor, EditorVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;

$umFuncionario = new Desenvolvedor(
    new Cpf('123.456.789-10'),
    'Elmer Eidam',
    1000
);


$umaFuncionaria = new Gerente(
    new Cpf('123.456.789-10'),
    'Isabela Mendes',
    3000
);

$umDiretor = new Diretor(
    new Cpf('123.456.789-10'),
    'Bastião',
    5000
);

$umEditor = new EditorVideo(
    new Cpf('123.456.789-10'),
    'Gaveta',
    1000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacaoDe($umFuncionario);
$controlador->adicionarBonificacaoDe($umaFuncionaria);
$controlador->adicionarBonificacaoDe($umDiretor);
