<?php
// Arrays can be sorted in aphabetical or numerical using array sort functions


// Sorting Arrays in ALPHABETICAL ASCENDING order using sort()

$fruits = array("Pawpaw", "Watermelon", "Tangerine", "Orange", "Guava", "Apple", "Mango", "Banana", "Pineapple", "Dates");
sort($fruits);

$fruits_length = count($fruits);

for ($i = 0; $i< $fruits_length; $i++){
    echo "<li>$fruits[$i] </li> <br/>";
}


// Sort Arrays in NUMERICAL ASCENDING order using sort()

$numbers = [24, 15, 17, 1, 5, 10, 12, 14, 13, 16 ];
sort($numbers);



// Sort Arrays in ALPHABETICAL DESCENDING order using rsort()

$names = array("Abdulhamid", "Hadeetha", "Buliameen", "Yusuf");
rsort($names);


// Sort Arrays in NUMERICAL DESCENDING order using sort()

$numbers = [24, 15, 17, 1, 5, 10, 12, 14, 13, 16 ];
rsort($numbers);


// Sort Associative arrays in ASCENDING orders according to VALUES

$dpt = ["Tuham"=> "Mathematics", "Hadeetha"=> "Agricultural Resources Economics", "Faizah"=> "Physiology"];
asort($dpt);


foreach ($dpt as $y => $y_value){
    echo "<li>$y : $y_value </li> <br/>";
}


// Sort Associative Arrays in ASCENDING order according to KEYS

$user_details = ["name"=> "Tuham", "job"=> "Web Designer and Consultant", "year"=> 2024];
ksort($user_details);


// Sort Associative arrays in DESCENDING orders according to VALUES

$dpt = ["Tuham"=> "Mathematics", "Hadeetha"=> "Agricultural Resources Economics", "Faizah"=> "Physiology"];
arsort($dpt);


// Sort Associative Arrays in DESCENDING order according to KEYS

$user_details = ["name"=> "Tuham", "job"=> "Web Designer and Consultant", "year"=> 2024];
krsort($user_details);

















?>