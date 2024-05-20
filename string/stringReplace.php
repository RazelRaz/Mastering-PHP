<?php

// str_replace()
// The str_replace() function replaces some characters with some other characters in a string.

$string = "A Quick brown Brown fox jumps over the lazy dog";
$stringReplace = str_ireplace("brown","Red", $string, $count);
$string = str_ireplace(array("quick", "slow"), array("fox", "wolf",),  $string);
echo $stringReplace;
echo "<br>";
echo "<br>";
echo $string;
echo "<br>";

$total = "Total Count: {$count}";
echo $total;