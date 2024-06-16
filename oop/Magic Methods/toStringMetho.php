<?php
// toString Method

/*

> if we treat an object as a string it will give us a fatal error. (if we call an object directly outside class it will through an fatal error).
> Thats why we use __toString Method.

*/

class Base {
    public function __toString(){
        return "You cant print an object as a string of a class" . get_class($this);
    }
}

$obj = new Base();
echo $obj;
