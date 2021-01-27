<?php

//You can include class files with the include keyword:
//include 'basics.php';
//But if you have many files, use autoload register function to autoload all your classes.
//Note: it appears this only works if there is one class per file, and the filename matches the classname.
spl_autoload_register(function($class_name) {
    include $class_name . '.php';
});

//Instantiate the objects:
$autoload1 = new Autoload1;
$autoload2 = new Autoload2;
$inheritance = new Inheritance;

//And call their methods:
$autoload1->sayHello();
$autoload2->sayHello2();
$inheritance->saySomething();

?>
