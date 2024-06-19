<?php
// method exists

class meMyclass {
    // method
    public function meShow(){

    }
}

// object
$meObj = new meMyclass();

if(method_exists($meObj, "meShow")){
    echo "This Method Exists";
} else {
    echo "No Method Available with this name";
}