<?php
// Sometimes you need to change a data type of a variable from one to another. This is done with Casting

// Casting in PHP is done with these statements:
// (string) - Converts to data type String
// (int) - Converts to data type Integer
// (float) - Converts to data type Float
// (bool) - Converts to data type Boolean
// (array) - Converts to data type Array
// (object) - Converts to data type Object
// (unset) - Converts to data type NULL

$a = "Tunde"; // String
$b = 2024; // Integer
$c = 16.07; // Float
$d = true ; // Boolean
$e = NULL; // Null
$f = "25 kilometers"; // String
$g = "kilometers 25"; // String



// Casting to string

$d = (string) $d;
$e = (string) $e;
var_dump($d);
var_dump($e);

// Note that when casting boolean into string, true turns to 1. When casting null to string, it turns to an empty string.


// Casting to Integer
$h = (int) $f;  
$i = (int) $g;
var_dump($h);
var_dump($i);  

// Note that when casting string into integer, if it starts with a number, it shows the number. If it does not starts with a number, it shows 0.


// Casting to Float

$j = (float) $f;
$k = (float) $g;
var_dump($j);
var_dump($k); 

// Note that when casting a string that starts with a number, the (float) function uses that number. If it does not start with a number, the (float) function convert strings into the number 0


// Casting to Boolean
// If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true. Even -1 converts to true.


// Casting to an Array
// When converting into arrays, most data types converts into an indexed array with one element.
// NULL values converts to an empty array object.



// Converting Arrays into Objects
$l = array("Volvo", "BMW", "Toyota"); // indexed array
$m = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

$l = (object) $l;
$m = (object) $m;
var_dump($l);
var_dump($m);

// Indexed arrays converts into objects with the index number as property name and the value as property value.
// Associative arrays converts into objects with the keys as property names and values as property values.


?>