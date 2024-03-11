<?php

for($i=1; $i <10; $i++){
  // echo $i;
  echo PHP_EOL;
  for($k=0; $k < $i; $k++){
    echo "*";
  }
}


echo PHP_EOL;

$m = 0;
while($m < 10){
  $m++;
  echo $m.PHP_EOL;
}
echo PHP_EOL;

$v=0;
do{
  $v++;
  echo $v;
}while($v < 4);