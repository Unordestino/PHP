<?php 
namespace Polimofismo;
class Product{
  protected string $name;
  protected float $price;
  
  function __construct(string $name, float $price) {
      $this->name = $name;
      $this->price = $price;
  }
  

  public function priceTag(): string{
    return $this->name . " $" . number_format($this->price, 2, '.',' ');
  }


  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function setPrice($price)
  {
    $this->price = $price;
  }
}