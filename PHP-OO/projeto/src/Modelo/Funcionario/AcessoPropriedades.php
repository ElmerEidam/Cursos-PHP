<?php

namespace Alura\Banco\Modelo\Funcionario;

/**
 * 
 */
trait AcessoPropriedades
{
    public function __get($nomeAtributo)
    {
        $metodo = 'recuperar' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

    function __set($nomeAtributo, $valor): void
    {
        $metodo = 'alterar' . ucfirst($nomeAtributo);
        $this->$metodo($valor);
    }
}
