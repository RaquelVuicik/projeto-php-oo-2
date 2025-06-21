<?php

namespace Raquel\Banco\Modelo;
class Endereco
{
    public function __construct(private string $cidade, private string $bairro, private string $rua, private string $numero)
    {
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
}