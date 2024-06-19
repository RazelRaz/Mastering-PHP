<?php
// is_subclass_of

class myParentClass {

}

class myChildClass extends myParentClass {

}

$obj = new myChildClass();

if (is_subclass_of($obj,"myParentClass")) {
    echo "This object is a object of subclass of parent classs: myParentClass";
} else {
    echo "Not found";
}