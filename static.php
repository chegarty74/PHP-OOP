<?php
class User2 {
    public $username;
    //This property and method are static because you'll always want them to be the same.
    public static $minPassLength = 5;
    //When you use static properties, you don't use "this", you use "self" with two colons.
    //(It is called the "scope resolution operator".)
    public static function checkPassword($password){
        if(strlen($password) >= self::$minPassLength){
            return true;
            } else {
            return false;
        }
    }
}

$password = 'pass';

//Note here that you do not instantiate b/c you don't instantiate static methods or properties.

if(User2::checkPassword($password)){
    echo 'Password is valid.';
} else {
    echo 'Password is NOT valid.';
}
