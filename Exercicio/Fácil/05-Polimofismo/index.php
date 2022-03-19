<?php
require_once 'Employee.php';
require_once 'OutsourcedEmployee.php';

$n = (int)readline('Enter the number og employess: ');
$vec = [$n];
for($i = 1; $i <= $n; $i++){
  echo "Employee #$i data:\n";
  $op = (string) readline("Outsourced (y/n)? ");

  $name = (string)readline("Name: ");
  $hours = (int)readline("Hours: ");
  $vlHours = (float)readline("Value per hour: ");

  if(strtolower($op) == 'y'){
      $additional = (float)readline('Additional charge: ');
      $vec[$i] = new OutsourcedEmployee($name, $hours, $vlHours, $additional);
  }else{
    $vec[$i] = new Employee($name, $hours, $vlHours);
  }

}

echo "PAYMENTS: \n";

for($i = 1; $i <= $n; $i++){
  echo "{$vec[$i]->name} - $ " . number_format($vec[$i]->payment(), 2, '.', '') . PHP_EOL;
}