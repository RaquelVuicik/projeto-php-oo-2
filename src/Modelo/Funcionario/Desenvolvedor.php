<?php

namespace Raquel\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function subirDeNivel()
    {
        $this->receberAumento($this->recuperarSalario() * 0.75); // Aumento de 75% do salário atual
    }
}