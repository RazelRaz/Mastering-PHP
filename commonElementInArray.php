<?php

// commonElementInArray.php

$arr1 = [22,45,7,3,44,5,555,32,777];
$arr2 = [11,7,5,55,89,31,22,789,33,14];

$box1 = [
  "a" => "Ant",
  "b" => "ball",
  "c" => "cat",
  "d" => "dog",
  "e" => "egg",
];

$box2 = [
  "a" => "apple",
  "b" => "bat",
  "c" => "cute",
  "d" => "dog",
  "e" => "cat",
];

// find common elements from arrays


$calculate = array_intersect($arr1, $arr2);
print_r($calculate);

echo "<br>";
echo "<br>";

// array_intersect always check by value not key
$searchBoxes = array_intersect($box1, $box2);
print_r($searchBoxes);

echo "<br>";
echo "<br>";

// array_intersect_assoc() check by value with key / will show result when key value pair matched
$searchBoxes2 = array_intersect_assoc($box1, $box2);
print_r($searchBoxes2);

echo "<br>";
echo "<br>";

// search differend element in the array
$diff = array_diff($arr1, $arr2);
print_r($diff);
