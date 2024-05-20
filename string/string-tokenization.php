<?php

// explode()
// This function breaks the string into array on the basis of delimiter passed.

$string = "A quick, Brown Fox";
$parts = explode(" ",$string);
print_r($parts);

echo PHP_EOL;

$original = implode(" ", $parts);
echo $original;

echo PHP_EOL;

$parts2 = str_split($string);

print_r($parts2);

echo PHP_EOL;
echo "<br>";

$parts3 = strtok($string, " , ");
while ($parts3 !== false) {
    echo $parts3."\n";
    $parts3 = strtok(", ");
}

echo "<br>";
echo "<br>";

$parts4 = preg_split("/ |, /", $string);
print_r($parts4);
