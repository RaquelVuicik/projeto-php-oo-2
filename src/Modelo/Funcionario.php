<?php

namespace Raquel\Banco\Modelo;

use Raquel\Banco\Modelo\Pessoa;
use Raquel\Banco\Modelo\CPF;

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;

    }

    public function recuperarCargo(): string
    {
        return $this->cargo;
    }

    public function alterarNome(string $nome): void
    {
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
    }
}
