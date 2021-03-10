<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular) //método construtor
    {
        echo 'Criando nova conta.' . PHP_EOL;
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    abstract protected function percentualTarifa(): float;

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public static function recuperarNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarCpfTitular(): string
    {
        return $this->titular->recuperarCpf();
    }

    public function recuperarNomeTitular(): string
    {
        return $this->titular->recuperarNome();
    }

    public function sacar(float $valorASacar)
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível.";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorDepositar): void
    {
        if ($valorDepositar < 0) {
            echo 'O valor do depósito deve ser positivo.';
            return;
        }

        $this->saldo += $valorDepositar;
    }
}
