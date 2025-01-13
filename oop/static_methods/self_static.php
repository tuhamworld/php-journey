<?php

// A method can use the self keyword to call a static from within same class
class City {
    public static function Abeokuta(){
        echo "Abeokuta is the capital of Ogun State.";
    }

    public function __construct(){
        self::Abeokuta();
    }
}

new City();
?>