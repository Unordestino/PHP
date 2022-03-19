<?php
class Produto {
    public string $nome;
    public float $preco;
    public int $quantidade;

    
    function valorTotalEmEstoque(): float{
        return ($this->preco * $this->quantidade);
    }
    
    function adicionarProdutos(int $quat){
      $this->quantidade += $quat;  
    }
    
    function removerProdutos(int $quat){
        $this->quantidade -= $quat;
    }
    
    function mensagem(){
        echo "\nDados do produto: {$this->nome}, $ " 
        . number_format($this->preco, 2, '.', '') 
        . ", {$this->quantidade} unidades, Total: $ " 
        . number_format($this->valorTotalEmEstoque(), 2, '.', '') . "\n";
    }
    
}
