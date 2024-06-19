<?php
//get_object_vars()


class gtcvMyclass {
    public $myvar;
    public $secondVar = "Hello";
    public $thirdvar = 345;
    private $fourthVar;

    public function __construct()
    {
        $this->myvar = "R";
        $this->secondVar = "A";
        echo "<pre>";
        print_r(get_object_vars($this));
        echo "</pre>";
    }
}

$gtcObj = new gtcvMyclass();

// gget_class_vars will return a assciative arry & get_class will catch the object
$gtcVar = get_object_vars($gtcObj);
print_r($gtcVar);