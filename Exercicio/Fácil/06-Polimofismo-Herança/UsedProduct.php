<?php
namespace Polimofismo;
require_once 'Product.php';
use DateTime;

class UsedProduct extends Product{
  private DateTime $manuFactureDate;
  

 function __construct(string $name,float $price, DateTime $manuFactureDate) {
     parent::__construct($name, $price);
     $this->manuFactureDate = $manuFactureDate;
 }

  public function priceTag(): string{
    return $this->name . " (used) $ ". number_format($this->price, 2, '.',' ') . " (Manufacture date: " . $this->manuFactureDate->format('Y-m-d') . ")";
  }
  
  public function getManuFactureDate()
  {
    return $this->manuFactureDate;
  }

  public function setManuFactureDate($manuFactureDate)
  {
    $this->manuFactureDate = $manuFactureDate;
  }

}