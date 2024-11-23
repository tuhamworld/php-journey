<?php
// Classes are nothing without the objects, and we can create multiple objects from a single class.
// All objects have the properties inside the class but with different values

class Fruit{
    public $name;
    public $color;
    function set_properties($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function get_details(){
        return "$this->name : $this->color";
    }
}

// Creating new objects
$apple = new Fruit();
$orange = new Fruit();

$apple->set_properties("Apple", "Green");
$orange->set_properties("Orange", "Yellow");


echo $apple->get_details();
echo "<br/>";
echo $orange->get_details();
echo "<br/>";


//  Changing Values

// There are two ways to change values
// One way is to use the class methods (function) as shown above
// Another way is to change it directly

$orange->name = "Osan";

// Checking if an object is a part of a class (using instanceof)
var_dump($apple instanceof Fruit);

?>