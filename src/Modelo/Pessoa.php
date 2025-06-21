<?php

namespace Raquel\Banco\Modelo;

use Raquel\Banco\Modelo\CPF;

class Pessoa
{
    protected string $nome;
    private CPF $cpf;
    public function __construct(string $nome, CPF $cpf)
    {

        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf->recuperarNumero();
    }

    protected function validarNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}