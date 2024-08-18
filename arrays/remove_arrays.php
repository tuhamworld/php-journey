<?php

// Arrays can be removed using the splice() function which then automatically reindexed the position
// You specify the array, the index number to start from and how many items to remove.

$devices = ["Mobile", "Laptop", "Tablet", "Computer", "PC", "Macbook"];
array_splice($devices, 0, 3);
var_dump($devices);

// Arrays can also be removed using the unset() function which delete existing index numbers and does not reassign.
$profession = ["Software Engineer", "Online Publisher", "Web Designer and Consultant" ];
unset($profession[1]);
var_dump($profession);



// Unset() can also take multiple parameters hence it can be used to delete multiple items from selected index on arrays

unset($devices[2], $devices[5], $devices[0]);
var_dump($devices);


// Removing Item from an Associative Array by specifying the keys

$user_profile = [
    "name"=> "Tuham",
    "job" => "Frontend Engineer",
    "year" => 2024, 
];

unset($user_profile["year"]);
var_dump($user_profile);


// Removing the last item using array_pop()
$brands = ["WordPress", "Meta", "Adobe", "Microsoft"];
array_pop($brands);

// Removing the first item using array_shift()
$brands = ["WordPress", "Meta", "Adobe", "Microsoft"];
array_shift($brands);

?>