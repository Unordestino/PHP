<?php

function sacar(array $conta, float $valorASacae) : array{
  if($valorASacae > $conta['saldo']){
    exibeMensagem("Você não pode sacar");
  }else{
    $conta['saldo'] -= $valorASacae;
  }
  return $conta; 
}

function depositar(array $conta, float $valorDeposito) : array{
  if($valorDeposito < 0){
    exibeMensagem("Não é permitidos depositar valores negativos");
  }else{
    $conta['saldo'] += $valorDeposito;
  }
 return $conta;
}

function exibeMensagem(string $mensagem) {
  echo $mensagem . PHP_EOL;
}



$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
//$contasCorrentes['123.456.689-11'] = sacar($contasCorrentes['123.456.689-11'], 500);

$contasCorrentes['123.456.689-11'] = depositar($contasCorrentes['123.456.689-11'], 200);

$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'], 900);



foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
