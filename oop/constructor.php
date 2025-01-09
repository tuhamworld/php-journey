<?php

// Using constructor enables PHP to automatically initialize an object's properties upon creation of the object
// This method saves code rather than using set_name() as seen in the "oop_classes" file


class City {
    public $name;
    public $state;


    function __construct($name, $state){
        $this->name = $name;
        $this->state = $state;
    }

    function city_statements(){
        return "$this->name is the capital of $this->state";
    }

    function get_city_name(){
        return "The name of the city is $this->name";
    }

    function get_city_state(){
        return "The state where the city is, in $this->state";
    }
}

$ibadan = new City("Ibadan", "Oyo State");
echo $ibadan->city_statements();
echo "<br/>";
echo $ibadan->get_city_name();
echo "<br/>";
echo $ibadan->get_city_state();

?>