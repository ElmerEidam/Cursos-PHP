<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tryLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->autenticar($senha)) {
            echo 'Ok! Usuário logado no sistema.';
        } else {
            echo 'Ops! Senha incorreta.';
        }
    }
}
