<?php
require_once 'banco.php';

$number = (int) readline('Entre o número da conta: ');
$titular = (string) readline('Entre o titular da conta: ');
$dp = (string) readline('Haverá deposito inicial (s/n)?: ');

$bk  = new banco($number, $titular);
if(strtolower($dp) == 's'){
  $deposito = (float) readline('Entre com o deposito inicial: ');
  $bk->depositar($deposito);
}

$bk->Mensagem();

$deposito  = (float) readline("Entre um valor para depósito: ");
$bk->depositar($deposito);
$bk->Mensagem();

$saque  = (float) readline("Entre um valor para sacar: ");
$bk->sacar($saque);
$bk->Mensagem();