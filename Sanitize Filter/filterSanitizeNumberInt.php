<?php

// FILTER_SANITIZE_NUMBER_INT

$var = "dsdsds-234//^^^";

$var = filter_var($var, FILTER_SANITIZE_NUMBER_INT);



if(filter_var($var, FILTER_VALIDATE_INT)){
    echo "$var is Valid Number";
} else {
    echo "$var is not validl";
}