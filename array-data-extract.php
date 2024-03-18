<?php

$fruits = ["apple", "banana", "strawberry", "orange", "Mango", "Jack Fruit", "Ras berry"];

// $someFruits = array_slice($fruits, 2, 3);
// $someFruits = array_slice($fruits, 2, -1);
$someFruits = array_slice($fruits, -4, 2,true);
print_r($someFruits);


$assosArray = [
  "a" => "Andy",
  "b" => "Brian",
  "c" => "Cat",
  67=> "Nothing",
  "f" => "Fat"
];

echo "<br>";

$someAssos = array_slice($assosArray,2, null, true);
print_r($someAssos);