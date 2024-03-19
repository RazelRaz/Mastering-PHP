<?php

// arraySorting.php

$numbers = [45,22,1,4,5,7];

// sort($numbers);
sort($numbers, SORT_STRING);

print_r($numbers);

echo "<br>";

$fruits = ["apple", "Apple", "banana", "Banana", "Orange"];
sort($fruits,SORT_STRING | SORT_FLAG_CASE );
print_r($fruits);