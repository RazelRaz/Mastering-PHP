<?php
// is_a()

class isaMyclass {

}

$isObj = new isaMyclass();

if(is_a($isObj, 'isaMyclass')){
    echo "This object is from isaMyclass";
} else {
    echo "This object is NOT from isaMyclass";
}