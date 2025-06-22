<?php

namespace Raquel\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}