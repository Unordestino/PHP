<?php

$veto = [];
$Sum;

$a = (int)readline('Quantas posições tem seu vetor: ');

echo "Digite as quantidades: ";
for($i = 0; $i < $a; $i++){
  $veto[$i] = (double)readline();
}



for ($i = 0; $i < count($veto); $i++) {
  $Sum += $veto[$i];
}

echo "O resultado final é: " . ($Sum / $a);


// Input section
// $a = 10
//$a = (int)readline('Enter an integer: ');

