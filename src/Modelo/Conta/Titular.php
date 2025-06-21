<?php

namespace Raquel\Banco\Modelo\Conta;

use Raquel\Banco\Modelo\Pessoa;
use Raquel\Banco\Modelo\CPF;
use Raquel\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    public function __construct(CPF $cpf, string $nome, private Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
    }

    public function recuperarEndereco(): Endereco
    {
        return $this->endereco;
    }
}
