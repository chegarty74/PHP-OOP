<?php

//Properties: you declare, populate and access them.
//Note: the $ sign is only used when defining the original property, not when accessing it.

class Inheritance {
    public $id = 23;
    public $name = 'John Doe';

    public function saySomething(){
        echo 'Something!';
    }
}

class Second extends Inheritance {

}

$second = new Second;
echo $second->name . ' is ' . $second->id .' years old. <br>';
echo $second->saySomething();

//If you put the keyword final in front of a class or method, it means it can't be overwritten by a child class or method.
