<?php

$n = (int) readline('Digite a quantia de pessoas: ');
$altura = [$n];
$media = 0.0;

for($i = 0; $i < $n; $i++ ){
  
  $altura[$i] = (float) readline('Digite a altura da ' . ($i + 1) . 'ª pessoa: ');
  $media += $altura[$i];

}

echo "AVERAGE HEIGHT = " . number_format(($media / $n), 2, '.', '');