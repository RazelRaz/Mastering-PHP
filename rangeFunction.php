<?php

// example 1
$nums = range(10,20,2);
print_r($nums);

echo "<br>";

// example 2
foreach (range(0,50,7) as $newNumbers) {
    if($newNumbers > 0){
        echo $newNumbers;
    }  
}