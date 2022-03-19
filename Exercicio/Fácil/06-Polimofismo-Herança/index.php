<pre>
<?php

use Polimofismo\ImportedProduct;
use Polimofismo\Product;
use Polimofismo\UsedProduct;

require_once 'ImportedProduct.php';
require_once 'Product.php';
require_once 'UsedProduct.php';

$n = readline('Enter the number of products: ');
$vec = [$n];

for($i = 1; $i <= $n; $i++){

  echo "Product #$i data:\n";
  $op =(string) readline('Common, used or imported (c/u/i)? ');
  $name =(string) readline('Name: ');
  $price =(float) readline('Price: ');

  if($op == 'i'){
    $customs =(float) readline("Curstoms fee: ");
    $vec[$i] = new ImportedProduct($name, $price, $customs);
  }
  else if($op === 'u'){
    $date1 = readline("Manufacture date: ");
    $date = new DateTime($date1);
    $vec[$i] = new UsedProduct($name, $price, $date);
  }
  else{
    $vec[$i] = new Product($name, $price);
  }
}

echo "\n\nPRICE TAGS:" .PHP_EOL;

for($i = 1; $i <= $n; $i++){
  echo $vec[$i]->priceTag(). PHP_EOL;
}


?>



</pre>