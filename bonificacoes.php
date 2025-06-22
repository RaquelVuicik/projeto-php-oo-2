<?php

require_once 'autoload.php';

use Raquel\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor, EditorVideo};
use Raquel\Banco\Modelo\CPF;
use Raquel\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Vitor Hugo',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->subirDeNivel(); // Aumento de 75% do salário

$umaFuncionaria = new Gerente(
    'Patricia Silva',
    new CPF('987.654.321-10'),
    3000
);

$umDiretor = new Diretor(
    'Ana Costa',
    new CPF('123.952.789-11'),
    5000
);

$umEditor = new EditorVideo(
    'Paulo Souza',
    new CPF('456.987.231-11'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacaoDe($umFuncionario);
$controlador->adicionarBonificacaoDe($umaFuncionaria);
$controlador->adicionarBonificacaoDe($umDiretor);
$controlador->adicionarBonificacaoDe($umEditor);

echo $controlador->recuperarTotal();
