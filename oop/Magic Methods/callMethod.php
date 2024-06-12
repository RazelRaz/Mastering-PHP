<?php
// call Method
// it used for - Private Methods, if someone call it from outside class.

class Student {
    // properties
    private $firstName;
    private $lastName;

    private function setName($fname, $lname){
        $this->firstName = $fname;
        $this->lastName = $lname;
    }

    public function __call($method, $args){
        // echo "You are tring to access Non existing or Private Method: $method";
        // print_r($args);
        if(method_exists($this, $method)){
            call_user_func_array([$this, $method], $args);
        } else {
            echo "Metod Does not Exists: $method";
        }
    }
}

$obj = new Student();
$obj->setName("Raz", "Ahmed");

echo "<pre>";
print_r($obj);
echo "</pre>";

// non existing method call
// $obj->personal();