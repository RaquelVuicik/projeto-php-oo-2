<?php

namespace Raquel\Banco\Modelo\Conta;

use Raquel\Banco\Modelo\Conta\Titular;

class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;
    private $tipo;


    /**
     * @param Titular $titular
     * @var int $tipo 1 == Conta Corrente, 2 = Conta Poupança
     */

    public function __construct(Titular $titular, int $tipo)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        $this->tipo = $tipo;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar): void
    {
        if ($this->tipo === 1) {
            $tarifaSaque = $valorASacar * 0.05; // 5% de tarifa Conta Corrente
        } else {
            $tarifaSaque = $valorASacar * 0.03; // 3% de tarifa Conta Poupança
        }

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

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
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
}
