<?php

$altura = 1.70;
$peso = 86.70;

$imc =  $peso / pow($altura, 2);
//$imc = $altura / $


if($imc < 18.5){
  echo "MENOR QUE 18,5	MAGREZA:   $imc";
}
else if($imc < 25.0){
  echo "ENTRE 18,5 E 24,9	NORMAL:   $imc";
}
else if($imc < 30.0){
  echo "ENTRE 25,0 E 29,9	SOBREPESO:   $imc";
}
else if($imc < 40.0){
  echo "ENTRE 30,0 E 39,9	OBESIDADE:   $imc";
}
else{
  echo "MAIOR QUE 40,0	OBESIDADE GRAVE: $imc";
}