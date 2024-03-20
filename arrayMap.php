<?php

$numbers = [1,2,3,4,5];

function cube($n){
    return $n*$n*$n;
}



$nwArray = array_map("cube", $numbers);

echo "<br>";
print_r($numbers);
echo "<br>";
print_r($nwArray);

