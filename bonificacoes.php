<?php

require_once 'autoload.php';

use Raquel\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor};
use Raquel\Banco\Modelo\CPF;
use Raquel\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Vitor Hugo',
    new CPF('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$umFuncionario->subirDeNivel(); // Aumento de 75% do salário

$umaFuncionaria = new Gerente(
    'Patricia Silva',
    new CPF('987.654.321-10'),
    'Gerente',
    3000
);

$umDiretor = new Diretor(
    'Ana Costa',
    new CPF('111.222.333-44'),
    'Diretora',
    5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacaoDe($umFuncionario);
$controlador->adicionarBonificacaoDe($umaFuncionaria);
$controlador->adicionarBonificacaoDe($umDiretor);

echo $controlador->recuperarTotal();
