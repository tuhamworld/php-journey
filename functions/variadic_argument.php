<?php

// Variadic arguments is a funtion that does not know how many arguments  its going to have (represented by ...)
// NB - You can only have one argument with variables


// Method 1

function sumMyNumbers(...$x){
    $number = 0;
    $length = count($x);
    for ($i=0; $i < $length; $i++ ){
        $number += $x[$i];
    }
    return $number;

}

$totalSum = sumMyNumbers(10, 20, 30, 40, 50, 60, 70);
echo $totalSum;


// Method 2

function sum(...$numbers){
    $addition = 0;
    foreach($numbers as $number){
        $addition += $number;

    }
    return $addition;
}

$newNum = sum(1, 2, 3, 4, 5);
echo $newNum;


// Variadic Argument must be in the last argument

function namesDepartment($department, ...$firstnames){
    foreach ($firstnames as $firstname){
        echo "<li>$firstname is in the $department department </li> <br/>";
    }

}

$courseMates = namesDepartment("MTS", "Tuham", "Sir D", "Calculus", "Sir Aleem", "Walter", "Fasco");
echo $courseMates;



?>