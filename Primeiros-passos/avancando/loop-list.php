<?php
$idades = [21, 23, 19,25,30,41, 18];

$idades[7] = 'd';

echo $idades[7];

for($i = 0; $i < count($idades); $i++){
  echo $idades[$i].PHP_EOL;
}