<?php 
namespace Polimofismo;

require_once 'Product.php';

class ImportedProduct extends Product{
  private float $customsFee;
  function __construct(string $name, float $price,float $customsFee) {
    parent::__construct($name, $price);
      $this->customsFee = $customsFee;
  }

  public function priceTag():string{
    return $this->name . " $ ". number_format($this->totalPrice(), 2, '.',' ') . " (Customs fee: $ " . number_format($this->price,2, '.', ' ') . ")";
  }

  public function totalPrice(): float{
    $valor = $this->customsFee + $this->price;
    return $valor;
  }


  public function getCustomsFee()
  {
    return $this->customsFee;
  }

  public function setCustomsFee($customsFee)
  {
    $this->customsFee = $customsFee;
  }
}