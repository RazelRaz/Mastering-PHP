<?php
// get_called_class

class abc {
    // static method
    static public function show(){
        var_dump(get_called_class());
    }
}

class xyz extends abc {

}

abc::show();
xyz::show();