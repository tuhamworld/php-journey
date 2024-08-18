<?php

// Adding single indexed arrays

$devices = ["Mobile", "Laptop", "Tablet"];
$devices[] = "Smart-watch";


// Adding associative arrays

$user_profile = [
    "name"=> "Tuham",
    "job" => "Frontend Engineer",
    "year" => 2024, 
];

$user_profile["gender"] = "Male";



// Adding Multiple Items to Indexed Arrays using array_push() function

array_push($devices, "Computer", "PC", "Macbook");

// Adding Multiple Items to Associative Arrays using +=
$user_profile+= [
    "religion" => "Islam",
    "food" => "Rice and Beans",
    "computer" => "Windows PC"
];

?>