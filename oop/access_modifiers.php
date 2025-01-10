<?php
// There are three access modifiers - public, protected and private
// Public is accessible everywhere
// Protected is accesible from within the class and classes derived from that class
// Private is accesible only from the class


// Properties Examples
class Fruit {
    public $name;
    protected $color;
    private $weight;
}

$orange = new Fruit();
$orange -> $name = "Orange"; // OK
$orange -> $color = "Yellow"; // ERROR
$orange -> $weight = "600"; // ERROR


// Methods as Examples

class City {
    public $name;
    public $state;
    public $tribe;


    function set_name($city_name){  // This is set as a public function (by default)
        $this->name = $city_name;
    }

    protected function set_state($city_state){ // This is a protected function
        $this->state = $city_state;
    }

    private function set_tribe($city_tribe){ // This is a private function
        $this->tribe = $city_tribe;
    }
}

$Ibadan = new City();
$Ibadan -> $city_name = "Ibadan"; // OK
$Ibadan -> $city_state = "Oyo State"; // ERROR
$Ibadan -> $city_tribe = "Yoruba"; // ERROR

?>