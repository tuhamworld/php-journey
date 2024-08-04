<?php
// When a function argument is passed by reference using the &, the variable value also changes.


function addTwenty(&$value){
    $value+=20;
}

$year = 2004;
addTwenty($year);
echo $year;


?>