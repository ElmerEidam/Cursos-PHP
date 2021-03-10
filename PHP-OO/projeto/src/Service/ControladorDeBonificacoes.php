<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private float $totalBonificacoes = 0.0;

    public function adicionarBonificacaoDe(Funcionario $funcionario): void
    {
        $this->totalBonificacoes += $funcionario->calcularBonificacao();
    }

    public function recuperarTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }
}
