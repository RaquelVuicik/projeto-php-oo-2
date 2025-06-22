<?php

namespace Raquel\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get(string $nomeAtributo)
    {
        // recuperarRua
        $metodo = 'recuperar' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}