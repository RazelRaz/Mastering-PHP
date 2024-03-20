<?php
// arrayFilter.php

$numbers = [1,2,3,4,5,6];

function even($n){
    return $n%2==0;
}

$evenCheck = array_filter($numbers, "even");
print_r($numbers);
echo "<br>";
print_r($evenCheck);

// example
$students = ["Razel","Jacob","Ralf","Zoo","Jerry"];

function filterByR($name){
    return $name[0]=="R";
}

echo "<br>";
$checkNames = array_filter($students, "filterByR");
print_r($checkNames);