<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Funcionario\AcessoPropriedadas;
use Alura\Banco\Modelo\Funcionario\AcessoPropriedades;

class Endereco
{
    use AcessoPropriedades;
    
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperarCidade(): string
    {
        return $this->cidade;
    }

    public function recuperarBairro(): string
    {
        return $this->bairro;
    }

    public function recuperarRua(): string
    {
        return $this->rua;
    }

    public function recuperarNumero(): string
    {
        return $this->numero;
    }

    public function alterarCidade($novaCidade): void
    {
        $this->cidade = $novaCidade;
    }

    public function alterarBairro($novoBairro): void
    {
        $this->bairro = $novoBairro;
    }

    public function alterarRua($novaRua): void
    {
        $this->rua = $novaRua;
    }

    public function alterarNumero($novoNumero): void
    {
        $this->numero = $novoNumero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
}
