<?php

// There are three major types of number in PHP which are;
// 1. Integers
// 2. Float
// 3. Number strings
// Also, we have others like
//  4. NaN
//  5. Infinity


$integer = 2024;
$float = 16.07; // Float can also be a number in an exponential Form 
$number_strings = "16072024";

var_dump($integer);
var_dump($float);
var_dump($number_strings);

// PHP functions to determine if a value is an integer

var_dump(is_int(45));

// PHP Infinity 
// A numeric value which is larger than PHP_FLOAT_MAX is considered infinite

var_dump(is_finite(1.9e411));
var_dump(is_infinite(1.9e411));

// PHP NaN
// PHP NaN stands for Not a Number
var_dump(is_nan(acos(8)));

// PHP Numeric Strings
// This is to find out if a PHP value is Numeric or a Numeric strings
$a = 56789;
$b = "56789";
$c = "56789" + 10;

var_dump(is_numeric($a));
var_dump(is_numeric($b));
var_dump(is_numeric($c));


// PHP Casting Floats and Numeric Strings to Integers
// Casting Float to Integer

$d = 1607.2024;
$e = (int)$d;
echo "$e<br/>";

// Casting Numeric strings to Integer

$f = "16072024";
$g = (int)$f;
echo $g;



?>