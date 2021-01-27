<?php

//How to take an object and iterate through its properties.
//You can do this in a method within the class, or outside the class.

class People{
    public $person1 = 'Mike';
    public $person2 = 'Tyler';
    public $person3 = 'Jeff';

    protected $person4 = 'Geo';
    private $person5 = 'Blake';
//
//    function iterateObject(){
//        foreach($this as $key => $value){
//            print "$key => $value <br>";
//        }
//    }
}
//You'll be able to iterate through all of these within the class, but not 4 or 5 outside the class.
//Instantiate and run the method, and you'll get all five people:

$people = new People;
//$people->iterateObject();

//Here, you can do it outside the class, but won't get the private or protected properties:

foreach($people as $key => $value){
    print "$key => $value<br> ";
}
