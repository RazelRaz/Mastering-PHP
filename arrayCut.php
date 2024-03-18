<?php

//array_splice used for modify original array

$fruits = ["apple", "banana", "strawberry", "orange", "Mango", "Jack Fruit", "Ras berry"];


$assosArray = [
  "a" => "Andy",
  "b" => "Brian",
  "c" => "Cat",
  67=> "Nothing",
  "f" => "Fat"
];

// add new to the aRRAY
$addNewFruits = ["JACK FRUIT", "TAMARIND"];

$someFruits = array_splice($fruits, 2,3, $addNewFruits);
print_r($someFruits);
echo "<br>";
print_r($fruits);