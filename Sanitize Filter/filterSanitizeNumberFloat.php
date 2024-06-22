<?php

// FILTER_SANITIZE_NUMBER_FLOAT

$var = "23.00";

$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);



if(filter_var($var, FILTER_VALIDATE_FLOAT)){
    echo "$var is FLOAT";
} else {
    echo "$var is not valid";
}