<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok
$primeiraConta->defineCpfTitular('123.456.789-10');

echo $primeiraConta->recuperarSaldo().PHP_EOL;
echo $primeiraConta->recuperarCpfTitular();