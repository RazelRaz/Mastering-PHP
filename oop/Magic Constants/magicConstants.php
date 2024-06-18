<?php
// Magic Constants
namespace myNamespace;

// __LINE__
echo "Line Number " . __LINE__ . "<br>";

// __FILE__
echo "The full path of the file is " . __FILE__ . "<br>";

// __DIR__
echo "The full path of the directory is " . __DIR__ . "<br>";

// __FUNCTION__
function myFunction(){
    echo "The Function name is " . __FUNCTION__ . "<br>";
}
myFunction();

// __CLASS__ and __METHOD__
// __NAMESPACE__
// __TRAIT__

class myTrait {
    public function getTraitName(){
        return __TRAIT__;
    }
}

class myClass {

    use myTrait;

    // method
    public function nameOfTheClass(){
        return "__CLASS__ name is " . __CLASS__ . "<br>";
    }

    public function getMethodName(){
        return "Name of the __METHOD__ is " . __METHOD__;
    }

    public function getNameSpace(){
        return __NAMESPACE__;
    }

}

$clsObj = new myClass();
echo $clsObj->nameOfTheClass();
echo $clsObj->getMethodName();
echo $clsObj->getNameSpace();

// Trait
echo $clsObj->getTraitName();