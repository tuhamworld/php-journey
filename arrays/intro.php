<?php
//  An array stores multiple values of different data types in one single variables, and one can access the value by using key index. 

//  In PHP, there are 3 different kinds of arryas: Indexed arrays (numbered), Associative arrays (named), and Multidimensional arrays (arrays containing arrays) 

$fruits = array("Pawpaw", "Watermelon", "Tangerine", "Orange", "Guava");

function addNum($a, $b){
    $c = $a + $b;
    return $c;

}

$myArray = array("Tuham", 2024, ["H.O.G Peanuts", "Fried and Roasted Plantain"], $addNum);

// The strength of arrays is due to because of the built-in functions that comes with Arrays such as count;

echo count($myArray);



?>