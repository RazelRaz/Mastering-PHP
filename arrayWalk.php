<?php

//array_walk returns nothing

$numbers = [1,2,3,4,5];

function square($n){
    printf("square of %d is %d <br>", $n, $n*$n);
}

array_walk($numbers, 'square');