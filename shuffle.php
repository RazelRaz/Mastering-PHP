<?php

$box = [
    "a" => "apple",
    "b" => "ball",
    "c" => "cat",
];

$_box = $box;
shuffle($_box);
//pick array keys
$key = array_rand($box);
echo $key;
echo "<br>";

echo $box[$key];