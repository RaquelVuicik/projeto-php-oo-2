<?php

use Raquel\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Raquel\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-00'),
        'Raquel Vuicik',
        new Endereco('Curitiba', 'Centro', 'Rua da Flores', '37', 'SP', '12345-678')
    )
);
$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperarSaldo();