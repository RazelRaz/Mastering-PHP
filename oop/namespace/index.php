<?php
// namespace

require "products.php";
require "testing.php";

function wow(){
    echo "A function from INDEX Page";
}



// $obj1 = new pro\product;
use pro\v1\testing\contrl as cmd;
$obj = new cmd\product();

// pro\wow();