<?php
//If a magic method is defined in your class, it is called automatically.
//You just have to define what happens in it.
//You can access private properties through the get and set functions.

class Post {
    private $name;

    public function __set($name, $value){
        echo 'Setting ' . $name . ' to <strong>' . $value . '</strong><br>';
        $this->name = $value;
    }

    public function __get($name){
        echo 'Getting ' . $name . ' <strong>' . $this->name . '</strong><br>';
    }

    public function __isset($name){
        echo 'Is ' . $name . ' set? <br>';
        return isset($this->name);
    }
}

$post = new Post;
$post->name = 'Testing';
//For the get method
echo $post->name;
var_dump( isset($post->name) );