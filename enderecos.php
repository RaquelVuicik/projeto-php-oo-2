<?php

use Raquel\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Petrópolis',
    'Navegantes',
    'Rua da hortensias',
    '45'
);

$outroEndereco = new Endereco(
    'Rio de Janeiro',
    'Lapa',
    'Rua da conquista',
    '410'
);

echo $umEndereco->cidade;
$umEndereco->
exit();

echo $umEndereco . PHP_EOL;
echo $outroEndereco;

