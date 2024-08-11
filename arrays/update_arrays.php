<?php

// Arrays can be updated using their index numbers for indexed arrays
$myArray = [
    "Tuham",
     "Frontend Engineer",
      "Abeokuta"
    ];

echo $myArray[1]; // "Web Designer and Consultant"; 

// Arrays can also be updated by using their key names for named arrays

$mts = [
    "frontend engineer" => "Tuham",
    "data analyst" => "Sir D",
    "data scientist" => "Calculus",
    "copywriter" => "Sir Aleem",
    "interior decorator" => "Walter",
    "mathematician" => "Dayo",
    "mathematician" => "Idris"
];

echo $mts["data scientist"]; // Calculus


// Arrays can be updated with loop by using & and unset()

$cities = [
    "Ibadan",
    "Akure",
    "Lagos",
    "Benin",
    "Abeokuta",
    "Ogbomoso",
    "Osun",
    "Ikire",
    "Ede"
];

foreach ($cities as &$city){
    $city = "Ibadan";
}

unset($city);
var_dump($cities);

?>