<?php

$idade = 18;

echo "Você só pode entrar se tiver mais do que 18 anos" .PHP_EOL;

if($idade >= 18){
  echo "Você tem $idade anos. Pode entrar!";
}else{
  echo "Você tem apenas $idade, então você não pode entrar";
}

echo PHP_EOL;
echo PHP_EOL;

echo "Você só pode entrar se tiver mais do que 18 anos" .PHP_EOL;

//operador ternário
echo $idade >= 18 ? "Você tem $idade anos. Pode entrar!" : "Você tem apenas $idade, então você não pode entrar";