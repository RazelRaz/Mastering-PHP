<?php

// sum of an array with the help of array_reduce

$numbers = [1,2,3,4,5];

function sum($oldValue,$NewValue){
    $add = $oldValue + $NewValue;
    return $add;
}

$result = array_reduce($numbers, 'sum');
echo $result;

echo "<br>";
echo "<br>";

// sum only even numbers with array_reduce

$newNumbers = [1,2,3,4,5];

function onlyEvens($old, $new){
    if($new%2==0){
        return $old + $new;
    }
    return $old;
}

$result2 = array_reduce($newNumbers, 'onlyEvens');
echo $result2;

echo "<br>";
echo "<br>";

echo count($newNumbers);