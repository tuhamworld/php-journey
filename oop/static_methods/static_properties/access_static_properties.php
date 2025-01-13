<?php
// Accessing Static Properties


class MyClass {
    public static $name = "<p>Tuham</p>";

    public function staticName(){
        return self::$name;
    }
}

$coder = new MyClass();
echo $coder -> staticName();


// To call static property from child class, use parent

class NewClass extends MyClass{
    public function callName(){
        return parent::$name;
    }
}


// Getting the value directly from child class
echo NewClass::$name;

// Getting the value via callName() method
$deName = new NewClass();
echo $deName -> callName(); 

?>