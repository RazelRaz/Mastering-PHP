<?php
//get_class_vars()

class gtcvMyclass {
    public $myvar;
    public $secondVar = "Hello";
    public $thirdvar = 345;
    private $fourthVar;

    public function __construct()
    {
        print_r(get_class_vars(__CLASS__));
    }
}

$gtcObj = new gtcvMyclass();

// gget_class_vars will return a assciative arry & get_class will catch the object
$gtcVar = get_class_vars(get_class($gtcObj));
print_r($gtcVar);