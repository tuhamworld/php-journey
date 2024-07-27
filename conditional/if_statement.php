<?php
// The If Statement executes some code if one condition is true;
// In PHP we have the following conditional statements:

// if statement - executes some code if one condition is true
// if...else statement - executes some code if a condition is true and another code if that condition is false
// if...elseif...else statement - executes different codes for more than two conditions
// switch statement - selects one of many blocks of code to be executed


// if statement
if (45 > 30){
    echo "Hello World, Tuham";

}

// if ... else

$month = date("M");

if ($month = "July"){
    echo "Welcome to July";
} else {
    echo "Welcome to another Month";
}


// if ..elseif..else

$time = date("H");

if ($time < "10"){
    echo "Have a good morning";

} else if ($time < "20"){
    echo "Have a good day";
} else {
    echo "Have a good night";
}

?>