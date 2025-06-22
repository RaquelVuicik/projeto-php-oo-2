<?php

require_once 'autoload.php';

use Raquel\Banco\Modelo\CPF;
use Raquel\Banco\Modelo\Funcionario\Diretor;
use Raquel\Banco\Service\Autenticador;


$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'João da Silva',
    new CPF('456.987.231-11'),
    10000
);

$autenticador->tentarLogin($umDiretor, '1234');