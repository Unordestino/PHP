<?php
require_once 'Produto.php';

$p1 = new Produto();

$p1->nome = readline('Nome: ');
$p1->preco = (float)readline('Preço: ');
$p1->quantidade = (int)readline('Qauntidade no estoque: ');

$p1->mensagem();
$add = readline('Digite o número de produtos a ser adicionado ao estoque: ');
$p1->adicionarProdutos($add);
$p1->mensagem();
$remove = readline('Digite o número de produtos a ser removido do estoque: ');
$p1->removerProdutos($remove);
$p1->mensagem();

?>


