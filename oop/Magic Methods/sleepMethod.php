<?php

// sleep Method

class teams {
    public $league = "EPL";
    private $teamName;
    private $color;

    public function show($tname,$tcolor){
        $this->teamName = $tname;
        $this->color = $tcolor;
    }

    // magic method
    public function __sleep(){
        return array("teamName","color");
    }

}

// object
$obj = new teams();

// setting value of private properties
$obj->show("Manchester City", "Sky Blue");

$serl = serialize($obj);
echo $serl;

