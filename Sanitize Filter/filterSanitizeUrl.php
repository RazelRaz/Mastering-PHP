<?php

// FILTER_SANITIZE_URL

$var = "hello() ^^/.com";

$var = filter_var($var, FILTER_SANITIZE_URL);



if(filter_var($var, FILTER_VALIDATE_URL)){
    echo "$var is a valid URL";
} else {
    echo "$var is not Valid";
}