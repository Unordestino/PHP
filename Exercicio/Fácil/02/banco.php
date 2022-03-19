<?php

class banco{
  private string $numberoConta;
  private string $titular;
  private float $saldo;

	function __construct(string $numberoConta, string $titular) {
	    $this->numberoConta = $numberoConta;
	    $this->titular = $titular;
	    $this->saldo = 0;
	}

  public function Mensagem(){
    echo "Dados da conta atualizados: \n";
    echo "Conta {$this->numberoConta}, Titular: {$this->titular}, Saldo: $ " . number_format($this->saldo, 2, '.', '') . PHP_EOL;
  }

  public function sacar(float $sac){
    
      $this->saldo -= ($sac + 5);
    
  }

  public function depositar(float $dp){
      $this->saldo += $dp; 
  }
//gets
  public function getTitular()
  {
    return $this->titular;
  }

  public function setTitular($titular)
  {
    $this->titular = $titular;
  }

  public function getNumberoConta()
  {
    return $this->numberoConta;
  }

  public function getSaldo()
  {
    return $this->saldo;
  }

}