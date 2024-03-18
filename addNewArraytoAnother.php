<?php

$fruits = ["apple", "banana", "strawberry", "orange", "Mango", "Jack Fruit", "Ras berry"];

$addFruits1 = array_slice($fruits, 2);
$addFruits2 = array_slice($fruits, 3, null, true);

$buildNewArray = array_merge($addFruits1, $addFruits2);

print_r($addFruits1);
echo "<br>";
print_r($addFruits2);
echo "<br>";

print_r($buildNewArray);
echo "<br>";

$buildNewArray2 = $addFruits1 + $addFruits2;
print_r($buildNewArray2);