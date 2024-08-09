<?php

// In indexed arrays, each items has an index number. The first item starts with an index 0 while the second item has an index number 1


$collections = array("Milky Peanuts", 2024, "Website Development", "TuhamWorld.Com");
var_dump($collections);


$snack = $collections[0];
$job = $collections[2];
$website = $collections[3];

echo "$snack" . " $job" . " $website";

// Changing Values

$collections[2] = "Frontend Engineering";
echo $collections[2];


// Looping through an Indexed Arrays
$snacks = array("Milky Peanuts", "Crispy ChinChin", "Donuts", "Meatpie", "Fishpie");
foreach($snacks as $snack){
    echo "$snack <br/>";
}

// New Items when pushed into an existing ordely arrays get an higher index numbers
$cars = array("Volvo", "Toyota", "Pigeot");
array_push($cars, "Lexus");

// A new item pushed into a random index numbers - also gets higher index numbers than the existing highest indexed items


$cars[5] = "Honda";
$cars[9] = "Innosson";
array_push($cars, "Micra");

var_dump($cars)


?>