<?php

// A Multidimesional array is an array containing one or more arrays

$profession = [
    ["Tuham", "MTS", "Frontend Engineer"],
    ["Hadeetha", "ARE", "Baker"],
    ["Faizah", "PHS", "HealthTech"],
    ["Fuad", "IPE", "Backend Engineer"]
];

echo "<li> " . $profession[0][0] . " from " . $profession[0][1] . " is a " . $profession[0][2] . " Professional </li> <br/>";
echo "<li> " . $profession[1][0] . " from " . $profession[1][1] . " is a " . $profession[1][2] . " Professional </li> <br/>";
echo "<li> " . $profession[2][0] . " from " . $profession[2][1] . " is a " . $profession[2][2] . " Professional </li> <br/>";
echo "<li> " . $profession[3][0] . " from " . $profession[3][1] . " is a " . $profession[3][2] . " Professional </li> <br/>";



// Using Loop inside Loop

$cars = [
    ["Volvo",22,18],
    ["BMW",15,13],
    ["Saab",5,2],
    ["Land Rover",17,15]
];

for ($row = 0; $row < 4; $row++){
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}

?>