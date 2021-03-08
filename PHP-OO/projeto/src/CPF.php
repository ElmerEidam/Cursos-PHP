<?php

class Cpf //value object
{
    private string $numero;

    public function __construct(string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regex' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($numero == false) {
            echo 'Número de CPF inválido.';
            exit();
        }
        $this->numero = $numero;
    }

    public function recuperarNumero(): string
    {
        return $this->numero;
    }
}
