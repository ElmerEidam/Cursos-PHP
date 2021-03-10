<?php

namespace Alura\Banco\Modelo;

interface Autenticavel
{
    public function autenticar(string $senha): bool;
}