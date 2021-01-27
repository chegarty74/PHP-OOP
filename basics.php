<?php

//Some array and looping refreshers:
echo "Hello World.<br>";
$numbers = array(12,24,36,48,57,102);
echo $numbers[2] . '<br>';

foreach($numbers as $number){
    echo "This is number " . $number . '<br>';
}

//Create a class
class someUser {
    public $someVariable;
    public function someFunction() {
        echo 'This class works';
    }
}

//Instantiate the class.
//Create a variable and set it equal to new className.
$newUser = new someUser;

//Print a property
echo $newUser->someVariable;
//Call a method
$newUser->someFunction();

//Section 9: Classes and Methods
//Section 10: Properties and Visibility

class User {
    //Properties
    //It is common to keep properties private and methods public.
    private $id;
    private $username;
    private $password;
    private $email;
    //You can access these properties in your methods.

    //Methods
    //Constructor code runs when the object is instantiated.
    //Use it to set up default properties.
    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
        echo 'Constructor was called. </br>';
    }

    public function register(){
        echo 'User is Registered. </br>';
    }
    //You can use "$this" to access any method or property in the class.
    public function login(){
        //When you are passing into a method, you want to set it to your properties.
        //We don't do that here because we do it in the constructor method.
        $this->auth_user();

    }
    public function auth_user(){
        echo $this->username . '\'s password was ' . $this->password . '. ' . $this->username . ' is now authenticated. <br>';
    }
    //Destructor can be used for things like closing database connections.
    //Anything that needs to run at the end of a script.
    public function __destruct(){
        echo 'Destructor was called.';
    }
}

$user = new User('Christopher','123456');

$user->register();
$user->login();

//Another example of setting defaults in the constructor method:

class Student {
    private $name;
    private $email;

    public function __construct($name,$email) {
        $this->name = $name;
        $this->email = $email;
    }
    public function printName(){
        return $this->name;
    }
    public function printEmail() {
        return $this->email;
    }
}

$studentObject = new Student('Larry',"larry@email.com");
echo $studentObject->printName();
echo '<br>';
echo $studentObject->printEmail();
echo '<br>';

//Example #3 of setting defaults in the constructor method:

class BankAccount {
    private $accountNumber;
    private $totalBalance;

    public function __construct($number,$startingAmount){
        $this->accountNumber = $number;
        $this->totalBalance = $startingAmount;
    }
}

$newCustomer = new BankAccount(31707454,'500');

?>
