<?php

// PHP conditional value are used to set a value depending on set of conditions

$expr1 = "Tunde";
$expr2 = "Sanusi";
$expr3 = "Abdulhamid";


// (if $x = $expr1 is true, sets to $expr2 else sets to $expr3)

$x = $expr1 ? $expr2 : $expr3; // Ternary Operator 




// (Returns the value of $x as expr1 if expr1 exists and is not NULL. But if $x does not exist or it is NULL, returns expr2)

$x = $expr1 ?? $expr2; // Null coalescing







?>