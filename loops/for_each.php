<?php
// (for each) loops through an array.


// Indexed arrays
$colors = array("red", "blue", "orange", "pink");

foreach ($colors as $color){
    echo "My favorite color should be $color <br/>";
}


// Associative arrays
$members = array("Tuham"=> "Web Developer", "Habibti"=> "Caterer", "SirD" => "Data Analytics", "Calculus" => "Data Analytics");

foreach($members as $member=>$profession){
    echo "$member is a Professional $profession <br/>";
}


// Objects (to be looked into later)

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
  }
  
  $myCar = new Car("red", "Volvo");
  
  foreach ($myCar as $x => $y) {
    echo "$x: $y <br>";
  }

?>