<?php

$students = [
  "john",
  123,
  "Sam",
  "Andy"
];


// var_dump($students);
// array length
$cnt = count($students);
// for loop in an array
for($i = 0; $i < $cnt; $i++){
  echo $students[$i]."<br>";
}

// loop backward
echo "====================================";
for($i = $cnt-1; $i >= 0; $i--){
  echo $students[$i]."<br>";
}