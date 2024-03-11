<?php

function factorialOfAnyNumber($n)
{
  if (gettype($n) != "integer") {
    return "invalid";
  }
  $result = 1;
  for ($i = $n; $i > 1; $i--) {
    $result = $result * $n;
  }
  return $result;
}

$n = "sdfsd";
$ggetRes = factorialOfAnyNumber($n);

echo $ggetRes;


function doSomething($cook = "coffee", $quantity = "1 cup")
{
  return "Bring {$cook}, $quantity  ";
}

$c = "";
$q = "";

$do = doSomething();
echo $do;


function retTypeFix(int $x, int $y, int $z):int{
    return $x+$y+$z;
}

$total = retTypeFix(4,5,6);
echo $total;
