<?php

// FILTER_VALIDATE_URL


$var = "https://hello.com/about.php?=test";



var_dump(filter_var($var, FILTER_VALIDATE_URL));

// FILTER_FLAG_PATH_REQUIRED

// if(filter_var($var, FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED)){
//     echo "$var is valid URL";
// } else {
//     echo "Given $var is not a valid URL";
// }



// FILTER_FLAG_QUERY_REQUIRED

if(filter_var($var, FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)){
    echo "$var is valid URL";
} else {
    echo "Given $var is not a valid URL";
}