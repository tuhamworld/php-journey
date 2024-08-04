<?php
// To let a function return a value, use the return statement

function subtract($x, $y){
    $z = $x - $y;
    return $z;
}


echo "500 - 80 = " . subtract(500, 80) . "<br/> ";
echo "50 - 25 = " . subtract(50, 25) . "<br/> ";
echo "125 - 106.5 = " . subtract(125, 106.5) . "<br/> ";
echo "80 - 50 = " . subtract(80, 50) . "<br/> ";

?>