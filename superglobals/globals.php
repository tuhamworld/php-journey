<?php
// $GLOBALS is an array that contains all global variables

// Global variables are variables that can be accessed from any scope

$name = "Tuham";

function myName(){
    echo $GLOBALS["name"];
}
myName();


// Alternatively, you can use the global keyword

$job = "Web Developer";

function myJob(){
    global $job;
    echo $job;
}
myJob();


// Variables created in the outer scope are global variables either created with $GLOBALS syntax or not

$year = 2024;
echo $GLOBALS["year"];
echo $year;
// Gives the result of "20242024"



// Variables created inside a function belong only to inside the function but you can create global variables inside a function by using $GLOBALS syntax

function whatCity(){
    $GLOBALS["city"] = "Abeokuta";

}

whatCity(); // This calls the function and make the variable city readibly available
echo $GLOBALS["city"]; // The city value gets outputted
echo $city; // The city value also gets outputted even when called without using the $GLOBALS syntax


?>