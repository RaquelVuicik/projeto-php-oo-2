<?php

namespace Raquel\Banco\Service;

use Raquel\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;
    public function adicionarBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calcularBonificacao();
    }

    public function recuperarTotal(): float
    {
        return $this->totalBonificacoes;
    }
}