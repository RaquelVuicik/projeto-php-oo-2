<?php

namespace Raquel\Banco\Modelo\Conta;

use Raquel\Banco\Modelo\Autenticavel;
use Raquel\Banco\Modelo\Pessoa;
use Raquel\Banco\Modelo\CPF;
use Raquel\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    public function __construct(string $nome, CPF $cpf, private Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
    }

    public function recuperarEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
