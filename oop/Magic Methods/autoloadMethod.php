<?php
// Autoload Method

// require "autoloadFolder/first.php";
// require "autoloadFolder/second.php";

// old version which is depricated
// function __autoload($class){
//     require "autoloadFolder/" . $class . ".php";
// }

// new version
function myAutoloader($class){
    require "autoloadFolder/" . $class . ".php";
}

// Register the autoload function
spl_autoload_register("myAutoloader");

$myObj = new First();
echo "<br>";
$myObjSecond = new Second();


// Why Use Quotes?
// spl_autoload_register("myAutoloader");
// In PHP, function names can be used as strings when passed as callbacks. The quotes are necessary to denote that you are passing the name of the function as a string rather than trying to reference the function directly (which PHP doesn't allow in this context without using a string).