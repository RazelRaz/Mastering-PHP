<?php

// for($i = 10; $i <= 20; $i++){
//   echo "Starts from $i <br>";
// }

// echo "<br>";

// for($r=0; $r < 30; $r++){
//   if($r == 13){
//     break;
//   }
//   echo "R number is $r <br>";
// }

// echo "<br>";

for($i = 0, $j = 0; $i < 100; $i+=7, $j+= 11){
  echo $i."\n";
  echo $j < 100 ? $j . "\n":"";
}
