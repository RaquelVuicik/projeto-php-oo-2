<?php

namespace Raquel\Banco\Modelo\Funcionario;

use Raquel\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calcularBonificacao(): float
    {
        return $this->recuperarSalario(); // Gerentes recebem 100% do salário como bonificação
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}