<?php

use Raquel\Banco\Modelo\Conta\Conta;
use Raquel\Banco\Modelo\Conta\Titular;
use Raquel\Banco\Modelo\CPF;
use Raquel\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new CPF('123.456.789-00'),
        'Raquel Vuicik',
        new Endereco('Curitiba', 'Centro', 'Rua da Flores', '37', 'SP', '12345-678')
    )
);
$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperarSaldo();