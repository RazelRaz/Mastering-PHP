<?php

$numbers = [22,45,7,3,44,7];
$box = [
  "a" => "Ant",
  "b" => "ball",
  "c" => "cat",
  "d" => "dog",
  "e" => "egg",
];

// search  through an array
if(in_array(3, $numbers, true)){
  echo "3 Is avaibale";
}

echo "<br>";

//get position

$getPost = array_search(44, $numbers, true);
echo $getPost . "Position";

// search keys from an array
echo "<br>";

if(key_exists("c", $box )){
  echo "c is exist";
}