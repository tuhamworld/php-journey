<?php
// Static methods can also be called from methods in other classes (but ensure they are public)

class City {
    public static function Abeokuta(){
        echo "<p>Abeokuta is the capital of Ogun State.</p>";
    }
}

class State {
    public function SouthWest(){
        City::Abeokuta();
        echo "<p>Ogun State is in the South Western region.</p>";
    }
}

$statement = new State();
$statement -> SouthWest();
?>