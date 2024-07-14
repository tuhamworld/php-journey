<?php
// Casting allows you to change the data types of a variable without changing the values

$x = "Hello World";
echo "$x <br/>";

$x = 5;
echo "$x<br/>";

$x = (string) $x;
var_dump($x);


?>