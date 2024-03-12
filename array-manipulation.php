<?php

// Array is not immutable
/*

For data entry
array_unshift and array_push

data remove
array_shift and array_pop


*/ 

$names = ["jon","Rob","Kevin","Sion"];

$name = array_pop($names);
echo $name;



$names[] = "Jamal";
$cnt = count($names);
echo "<br>";
for($i = 0; $i < $cnt; $i++){
  echo $names[$i];
}