<?php

$year = 4000;

if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
  echo "{$year} is a leap year";
} elseif ($year % 4 == 0 && $year % 100 == 0 ){
  echo "{$year} is NOT a leap year";
} elseif ($year % 4 == 0 ) {
  echo "{$year} is a LEAP year";
} else {
  echo "Not a leap year";
}