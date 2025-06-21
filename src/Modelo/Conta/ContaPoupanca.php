<?php

namespace Raquel\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.03; // 3% de tarifa para saques na conta poupança
    }
}