<?php

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


// Inheritance with Access Modifiers

class Orange extends Fruit{
    public function welcome_note(){
        echo "<p>This Fruit is called {$this->name}</p>";
        $this->weight();
    }
}

$orange = new Orange("Orange", "yellow");
$orange -> intro();
$orange -> welcome_note();


// Another example of Inheritance with Access Modifiers

class City {
    public $name;
    public $state;

    public function __construct($name, $state){
        $this->name = $name;
        $this-> state = $state;
    }

    protected function intro(){  // This is set as a public function (by default)
        echo "The {$this->name} is an awesome city";
    }
}


// Inheritance and Access Modifiers
class Abeokuta extends City{
    public function welcome_note(){
        echo "<p>This City is called {$this->name}</p>";
        $this->intro();
    }
}

$abeokuta = new Abeokuta("Abeokuta", "Ogun"); // __construct is public
$abeokuta -> welcome_note();



?>