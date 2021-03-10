<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transferir(float $valorTransferir, Conta $contaDestino)
    {
        if ($valorTransferir >= $this->saldo) {
            echo 'Saldo insuficiente.';
            return;
        }

        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }
}
