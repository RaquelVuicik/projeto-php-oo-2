<?php

require_once 'autoload.php';

use Raquel\Banco\Modelo\{CPF, Endereco};
use Raquel\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Raquel\Banco\Modelo\Conta\Titular;
use Raquel\Banco\Service\Autenticador;


$autenticador = new Autenticador();
$umDiretor = new Gerente(
    'João da Silva',
    new CPF('456.987.231-11'),
    10000
);

$umTitular = new Titular(
    'Maria Oliveira',
    new CPF('123.456.789-00'),
    new Endereco(
        'São Paulo',
        'Centro',
        'Rua das Flores',
        '32'
    )
);

$autenticador->tentarLogin($umTitular, 'abcd');