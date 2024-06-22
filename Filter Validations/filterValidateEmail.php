<?PHP


$var = "hello@mail.com";

// echo filter_var($var, FILTER_VALIDATE_EMAIL);

var_dump(filter_var($var, FILTER_VALIDATE_EMAIL));

if(filter_var($var, FILTER_VALIDATE_EMAIL)){
    echo "$var is an Email";
} else {
    echo "$var is not an Email";
}