<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Funcionario\AcessoPropriedades;

class Pessoa
{
    use AcessoPropriedades;
    
    protected $nome;
    public $cpf;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }
    
    public function alterarNome($novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf->recuperarNumero();
    }

    final public function validarNome(string $nomeTitular): void
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres.";
            exit();
        }
    }
}
