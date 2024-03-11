<?php

function unlimitedUrguments($x, $y, int ...$numbers):int {
  $result =0;
  for($i = 0; $i < count($numbers); $i++){
    // echo $numbers[$i] . "</br>";
    $result =  $result + $numbers[$i];
  }
  return $result;
}

echo $sum = unlimitedUrguments(4,6,7,8,9,9);