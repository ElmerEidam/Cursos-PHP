<?php

class Conta
{
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular) //método construtor
    {
        echo 'Criando nova conta.' . PHP_EOL;
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

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

    public function sacar(float $valorSacar)
    {
        if ($valorSacar > $this->saldo) {
            echo 'Saldo indisponível!';
            return; //para remover o else é melhor fazer a verificação e utilizar o return
        }

        $this->saldo -= $valorSacar;
    }

    public function depositar(float $valorDepositar): void
    {
        if ($valorDepositar < 0) {
            echo 'O valor do depósito deve ser positivo.';
            return;
        }

        $this->saldo += $valorDepositar;
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
