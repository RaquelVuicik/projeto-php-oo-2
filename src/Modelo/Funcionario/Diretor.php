<?php

namespace Raquel\Banco\Modelo\Funcionario;

class Diretor extends Funcionario
{
    public function calcularBonificacao(): float
    {
        return $this->recuperarSalario() * 2; // Diretores recebem 2 vezes o salário como bonificação
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234'; // Exemplo de autenticação simples
    }
}