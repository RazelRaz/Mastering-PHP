<?php

// filter_var_array

$arr = Array (
    "stname"=> "<p>Razel Ahmed</p>",
    "stmarks"=> "979",
    "stemail"=> "razel @mail.com",
);


// custom sanitize function
function custom_sanitize_func($val){
    return strip_tags($val); // Remove HTML tags
}


$filters = array (
    "stname"=> custom_sanitize_func($arr["stname"]),
    "stmarks"=> array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range"=> 1,
            "max_range"=> 100,
            )
        ),
    "stemail"=> FILTER_SANITIZE_EMAIL,
);

echo "<pre>";
print_r(filter_var_array($arr,$filters));
echo "</pre>";