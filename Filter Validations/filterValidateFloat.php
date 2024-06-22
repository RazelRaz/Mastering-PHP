<?php

$var = "45.gfgfgfg00";

echo filter_var($var, FILTER_VALIDATE_FLOAT);
var_dump(filter_var($var, FILTER_VALIDATE_FLOAT));

if(filter_var($var, FILTER_VALIDATE_FLOAT)){
    echo "$var is a Float";
} else {
    echo "$var is not a Float";
}