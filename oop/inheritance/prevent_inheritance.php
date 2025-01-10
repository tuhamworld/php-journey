<?php
// The final keyword can be used to prevent inheritance or overriding

final class City {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
}




// The below child class cannot inherits the Parent class (City) because of the final keyword
// class Abeokuta extends City{
//     public function intro(){
//         echo "This {$this->name} is awesome";
//     }
    
// }


class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    final public function intro(){      // using the final for methods
        echo "<p>The {$this->name} is {$this->color} in color.</p>";

    }
}


// The below Cannot override the previous function due to final keyword

// class Orange extends Fruit{
//    public function intro(){ 

//     $this->intro();
//    }
// }

$orange = new Orange("orange", "yellow");
$orange ->welcome_note();

?>