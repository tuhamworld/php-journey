<?php declare(strict_types=1); // Strict Requirement
// PHP is a Loosely Types Language. If we do not specify the data type, it will automatically assigned data type

function addNumbers(int $a, int $b){
    return $a + $b;
}

$result = addNumbers(5, "25 weeks");
echo $result;

?>