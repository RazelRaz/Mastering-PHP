<?php

// example 1
$studentData = ["fname","lname","roll","bdate"];

list($fn,$ln,$rl,$bd) = $studentData;

echo $rl;

echo "<br>";

// example 2
$colours = [233,456,567,789];
list($blue,$green,$red) = $colours;
echo $red;

echo "<br>";
echo "<br>";

// example 3
list($summer, $winter) = ["Mango", "Banana"];
echo $winter;