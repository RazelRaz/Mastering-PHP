<?php

// type Hinting
// example 2

class school {
    public function getNames(students $names){
        foreach ($names->names() as $name) {
            echo $name . "<br>";
        }
    }
}

class students {
    public function names(){
        return ["John", "Rob", "Simon"];
    }
}

class jusFunc {

}

$jf = new jusFunc();
$sch = new school();
$stu = new students();

$sch->getNames($stu);