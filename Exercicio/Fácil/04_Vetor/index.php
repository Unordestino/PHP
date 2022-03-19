<?php
require_once 'Estudante.php';

$n =(int) readline('Quantos quartos serão alugados? ');

$e1 = [10];
for($i = 1; $i <= $n; $i++){
  echo "Aluguel #$i:" . PHP_EOL;
  $nome = (string)readline('Nome: ');
  $email = (string)readline('Email: ');
  $quarto = (int)readline('Quarto: ');

  $e1[$quarto] = new Estudante($nome, $email);

}


echo "Quatos ocupados: \n";


