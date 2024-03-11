<!-- 1. divisible by 4 ? 
  2. divisible by 100 ?
  3. divisible by 400 -->

<?php

// for($i = 1; $i <= 6; $i++){
//   echo $i;
//   echo PHP_EOL;
//   for($f = 0; $f < $i; $f++){
//     echo "*";
//   }
// }

// $i = 0;
// do {
//   $i++;
//   echo $i;
// } while ($i < 20);

// function addition($x, $y){
//   $add = $x + $y;
//   return $add;
// }

// $final = addition(3,3);
// echo $final;


// function isEven($n){
//   if($n % 2 == 0){
//     return true;
//   } 
//   return false;
// }

// $x = 5;
// if(isEven($x)){
//   echo "$x is a even number";
// } else {
//   echo "$x is an ODD number";
// }

function test(&$value){
  $value +=5;

}

$num = 5;
test($num);
echo $num;
