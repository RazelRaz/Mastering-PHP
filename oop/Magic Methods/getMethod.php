<?php
// Get Method
class ABC {
    // property
    private $name = "John Doe";
    private $data = ["Course" => "PHP COURSE", "Price" => "2000", "Author" => "Razel Ahmed"];

    // magic method
    public function __get($key){
        // echo "You are tring to access Non existing or Private property($pro) ";
        if(array_key_exists($key, $this->data)){
            return $this->data[$key];
        } else {
            return " This ($key) is not defined ";
        }
    }
}

// object
$test = new ABC();

// calling property
// $test->name;
print_r($test->Price);



