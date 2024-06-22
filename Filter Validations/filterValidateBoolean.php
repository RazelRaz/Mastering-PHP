<?php

// FILTER_VALIDATE_BOOLEAN

// yes - is boolean

$var = "dfdsf";

echo filter_var($var, FILTER_VALIDATE_BOOLEAN);

var_dump(filter_var($var, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));


if(filter_var($var, FILTER_VALIDATE_BOOLEAN)){
    echo "$var is BOOLEAN";
} else {
    echo "This $var is Not BOOLEAN";
}