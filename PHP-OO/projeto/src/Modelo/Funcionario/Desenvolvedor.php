<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel(): void
    {
        $this->recebeAumento($this->recuperarSalario() * 0.75);
        
    }

    public function calcularBonificacao(): float
    {
        return 500.00;
    }
}
