<?php
// get_class_methods()
// Gets the class methods' names
// get_class_methods will not return the private or protected methods
//But if we call get_class_methods inside its class than it will return all methods including private and protected

class cmnMyClass {
    public function __construct()
    {
        print_r(get_class_methods($this));
    }
    public function myfunc1(){

    }
    private function myfunc2(){
        
    }
    public function muFunc3(){

    }

}

$cmnObj = new cmnMyClass();

$gtCls = get_class_methods('cmnMyClass');
// get_class_methods returning an array thats why we used print_r below
print_r($gtCls);

foreach ($gtCls as $methods) {
    echo $methods . "<br>";
}

