<?php
// In OOP, Variables are called Properties and Functions are called methods.

class Fruits{
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name){
        $this->$name = $name;
    }

    function get_name($name){
        return $this->$name;
    }
}


?>