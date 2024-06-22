<?php

// FILTER_VALIDATE_INT

// true - is not a float

$var = 17;
$minmax = array("options" => array("min_range"=> "20","max_range" => "30"));

var_dump(filter_var($var, FILTER_VALIDATE_INT));
echo filter_var($var, FILTER_VALIDATE_INT);

echo "<br>";

// if(filter_var($var, FILTER_VALIDATE_INT) || filter_var($var, FILTER_VALIDATE_INT) == 0) {
//     echo "$var is a Integer";
// } else {
//     echo "$var Its not an integer";
// }

if(filter_var($var, FILTER_VALIDATE_INT, $minmax)) {
    echo "$var is a Integer";
} else {
    echo "$var Its not an integer";
}