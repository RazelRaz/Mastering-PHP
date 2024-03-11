<?php

$number = 12;
$rcc = $number % 2;

switch ($rcc) {
  case 0:
    echo "{$number} is an even number";
    break;
  
  default:
    echo "{$number} is an odd number";
}

$color = "khaki ";

switch ($color) {
  case 'red':
    case 'khaki':
    echo "Man utd";
    break;

  case 'blue':
    echo "chelsea";
    break;

  case 'white':
    echo "Spurs";
    break;
  
  default:
    echo "No team has this color";
    break;
}