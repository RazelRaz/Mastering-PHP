<?php

$string = "A quick brown fox, jumps over the lazy Dog";

//strpos - case sensitive
$parts = strpos($string, "A");
echo $parts;

echo "<br>";
if($parts !== false){
    echo "\n word found";
} else {
    echo "\n word not found \n";
}



////case insensitive - case sensitive
$parts2 = stripos($string, "dog");
echo $parts2;

echo "<br>";

echo "<br>";
$string2 = "A quick brown fox, jumps over the lazy Dog";
$parts3 = strripos($string2, "jumps");
echo $parts3;
