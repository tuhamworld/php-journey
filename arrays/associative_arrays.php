<?php
// Associative arrays are the type of arrays that used named keys to access items

$user_details = array("name"=> "Tuham", "job"=> "Web Designer and Consultant", "year"=> 2024);
var_dump($user_details);


// Accessing the items

echo $user_details["job"] . "<br/>";

// Changing Values

$user_details["job"] = "Frontend Engineering";
echo $user_details["job"] . "<br/>";

// To Loop through an Associative array

foreach ($user_details as $name => $title){
    echo "$name : " . "$title <br/>";
}

?>