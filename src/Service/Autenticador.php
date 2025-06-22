<?php

namespace Raquel\Banco\Service;

use Raquel\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentarLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Ok, Usuário logado no sistema";
        } else {
            echo "Ops, senha incorreta";
        }
    }
}