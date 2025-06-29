<?php

namespace Raquel\Banco\Modelo\Conta;

use Raquel\Banco\Modelo\Conta\Titular;

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;


    /**
     * @param Titular $titular
     */

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->titular->recuperarNome();
    }

    public function recuperarCpfTitular(): string
    {
        return $this->titular->recuperarCpf();
    }

    public static function recuperarNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
}
