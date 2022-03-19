<?php
require_once 'Employee.php';
class OutsourcedEmployee extends Employee{
  private float $addtionalCharge;

  public function payment():float{
    
    return ($this->valuePerHour * $this->hours) + (1.1 * $this->addtionalCharge);
  }
	
	function __construct(string $name, int $hours, float $valuePerHour, float $addtionalCharge) {
    $this->name = $name;
    $this->hours = $hours;
    $this->valuePerHour = $valuePerHour;
	  $this->addtionalCharge = $addtionalCharge;
	}
}