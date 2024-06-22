<?php

//  FILTER_SANITIZE_EMAIL

$var = "hello--/,@mail.com";

$var = filter_var($var, FILTER_SANITIZE_EMAIL);



if(filter_var($var, FILTER_VALIDATE_EMAIL)){
    echo "$var is an Email";
} else {
    echo "$var is not an Email";
}