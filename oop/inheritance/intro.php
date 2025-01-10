<?php

// Inheritance in OOP is when a class derives (be it methods or properties) from another class
// In addition, the child class can have its own properties and class as well


// Parent Class
class Fruit {
    public $name;
    public $color;
    
    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo "<p>This {$this->name} fruit whose color is {$this->color} is very sweet.</p>";
    }

    protected function weight(){
        echo "<p>The weight of {$this->name} in this category is 300</p>";

    }
}

// Child class (Strawberry) is inherited from its Parent class (Fruit)

class Strawberry extends Fruit{
    public function message(){
        echo "<p>Am I a fruit or a berry?</p>";
    }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry -> message();
$strawberry -> intro();



?>