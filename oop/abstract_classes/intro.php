<?php

// Asbtract classes are when a Parent class had a named method, and then need the child class to fill out the tasks.

// Parent Class
abstract class City {
    public $name;
    public function __construct($name){
        $this->name = $name;
    }

    abstract public function intro() : string;
}

// Child classes

class Ibadan extends City {
    public function intro() : string {
        return "Proud to come from Ibadan! $this->name is the capital of Oyo State";
    }
}

class Abeokuta extends City{
    public function intro(): string{
        return "$this->name is awesome!";
    }
}

// Creating objects from child classes

$ibadan = new Ibadan("Ibadan");
echo $ibadan -> intro();
echo "<br/>";

$abeokuta = new Abeokuta("Abeokuta");
echo $abeokuta->intro();
echo "<br/>";



?>