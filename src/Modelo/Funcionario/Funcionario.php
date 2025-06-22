<?php

namespace Raquel\Banco\Modelo\Funcionario;

use Raquel\Banco\Modelo\Pessoa;
use Raquel\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;

    }

    public function alterarNome(string $nome): void
    {
        $this->validarNome($nome);
        $this->nome = $nome;
    }

    public function receberAumento($valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo.";
            return;
        }

        $this->salario += $valorAumento;
    }

    public function recuperarSalario(): float
    {
        return $this->salario;
    }

    abstract public function calcularBonificacao(): float;
}
