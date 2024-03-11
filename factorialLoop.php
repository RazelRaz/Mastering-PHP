<?php

$number = 6;

for($i = $number, $factorial = 1; $i > 1; $i--){
  $factorial = $factorial * $i;
}

printf("Factorial of %d is %d", $number, $factorial);