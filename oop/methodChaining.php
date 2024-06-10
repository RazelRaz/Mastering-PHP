<?php
// Method Chaining

class myClass {
    // methods
    public function showFunc(){
        echo "Hello From showFunc";
        return $this;
    }
    public function showFuncTwo(){
        echo "Hi From showFunc Two";
        return $this;
    }
    public function showFuncThree(){
        echo "Hi From showFunc Three";
    }
}

$test = new myClass();

$test->showFunc()->showFuncTwo()->showFuncThree();