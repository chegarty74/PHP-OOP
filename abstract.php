<?php
//An abstract class is kind of a base class.
//You cannot instantiate it.
//It is made to have other classes extend from and use the properties and methods.
//If you have an abstract method in a class, that class has to be abstract.
//A good example is to have an animal as an abstract class, then have other animals as their own classes.

abstract class Animal {
    public $name;
    public $color;
    public function describe(){
        return $this->name . ' is ' . $this->color . '.<br>';
    }
    abstract public function makeSound();
}

//If there is an abstract function, you have to use that in the child class.

class Duck extends Animal {
    public function describe(){
        return parent::describe();
    }
    public function makeSound(){
        return 'Quack!';
    }
}

class Cat extends Animal {
    public function describe(){
        return parent::describe();
    }
    public function makeSound(){
        return 'Meow';
    }
}

//Instantiation:

$animal = new Duck();
$animal->name = 'Daffy';
$animal->color = 'green';
//Use echo here b/c you only returned in the function.
echo $animal->describe();
echo $animal->makeSound();