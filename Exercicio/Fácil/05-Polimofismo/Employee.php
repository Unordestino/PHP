<?php

class Employee{
  public string $name;
  private int $hours;
  private float $valuePerHour;

  public function payment():float{
    return ($this->valuePerHour * $this->hours);
  }

	function __construct(string $name, int $hours, float $valuePerHour) {
	    $this->name = $name;
	    $this->hours = $hours;
	    $this->valuePerHour = $valuePerHour;
	}
}