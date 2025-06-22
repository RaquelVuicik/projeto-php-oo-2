<?php

namespace Raquel\Banco\Service;

use Raquel\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentarLogin(Diretor $diretor, string $senha): void
    {
        if ($diretor->podeAutenticar($senha)) {
            echo "Ok, Usuário logado no sistema";
        } else {
            echo "Ops, senha incorreta";
        }
    }
}