<?php

function my_callback($item){
    return strlen($item) . "<br/>";
}

$strings = ["WordPress", "HTML", "CSS", "JavaScript", "React", "PHP", "Figma"];
$length = array_map("my_callback", $strings);
print_r($length);


// Starting with version 7, PHP can pass anonymous functions as callback functions

$name = ["Tuham", "Habibti", "Yusuf", "Fuad", "Toylak"];
$name_length = array_map(function($item){return strlen($item) . "<br/>";}, $name);
print_r($name_length);

// Callbacks in user defined functions

function exclaim($str){
    echo $str . "!";
}

function ask($str){
    echo $str . "?";
}


function printFormatted($str, $format){
    // Calling the format callback function
    echo $format($str) . "<br/>";
}


// Passing exclaim and ask as a callback function to printFormatted

printFormatted("Welcome to TuhamWorld Official Website", "exclaim");
printFormatted("What type of website would you like to build", "ask");


?>