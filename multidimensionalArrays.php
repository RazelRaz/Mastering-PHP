<?php

// Multidimensional Arrays

$foods = [
  "desert" => explode(",", "cadberry, icecreame, sweets"),
  "drinks" => explode(",", "coke, gatorade, milk shake"),
  "fruits" => explode(",", "banana, apple")
];

// print_r($foods);

array_push($foods["fruits"], "orange, Mango");
print_r($foods);

// echo $foods["drinks"][2];


