<?php
// PHP Array operators are used to compare array

$x = array("a" => "blue", "b" => "orange");  
$y = array("c" => "pink", "d" => "blue");  


print_r($x + $y); // Union of $x and $y
print_r($x == $y); // Returns true if both x and y have same key/value pairs
print_r($x === $y); // Returns true if x and y have the same key/valye pairs "in same order"
print_r($x != $y); // Returns true if x and y does not have the same key/value pairs
print_r($x !== $y); // Returns true if x is not identical to y



?>