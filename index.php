<?php

//You can include class files with the include keyword:
include 'basics.php';
//But if you have many files, use autoload register function to autoload all your classes.
spl_autoload_register(function($class_name){
    include $class_name . '.php';
});

//Here, we instantiate an object from basics.php and call its method:
$user = new someUser;
$user->someFunction();





?>
