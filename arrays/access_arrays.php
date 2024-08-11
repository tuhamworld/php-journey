<?php

// Arrays can be accessed using index numbers

$months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
echo $months[7];

// Arrays can also be accessed using their keys

$today = ["year"=> 2024, "month"=> "August", "day"=>11, ];
echo $today["day"];

// Function inside arrays can be accessed by calling the index numbers with parenthesis

function greetings($name){
    return "Good Morning, $name";
}

$random = ["Tuham", 2024, $greetings];
echo $random[2]("Habibti");


// Function inside an array with key is  called using the key name

function website(){
    return "Welcome to TuhamWorld.Com";
}

$myArr = [2001, "New World", "site"=> $website];
echo $myArr["message"]();




?>

