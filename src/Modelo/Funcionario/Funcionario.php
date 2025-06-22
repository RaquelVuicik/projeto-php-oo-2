<?php

namespace Raquel\Banco\Modelo\Funcionario;

use Raquel\Banco\Modelo\Pessoa;
use Raquel\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;

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

    public function calcularBonificacao(): float
    {
        return $this->salario * 0.1; // 10% de bonificação
    }
}
