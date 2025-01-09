<?php
// A destructor is called at the end of the script or when the script is exited
// Constructors and Destuctors helps in reducing the amount of code - hence they are useful

Class Fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;

    }

    function __destruct(){
        echo "The name of this fruit is {$this->name}, and it is {$this->color} in Color";
    }
}

$orange = new Fruit("Orange", "Yellow");


?>