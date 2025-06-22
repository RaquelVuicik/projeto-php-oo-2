<?php

namespace Raquel\Banco\Modelo\Funcionario;

class Gerente extends Funcionario
{
    public function calcularBonificacao(): float
    {
        return $this->recuperarSalario(); // Gerentes recebem 100% do salário como bonificação
    }
}