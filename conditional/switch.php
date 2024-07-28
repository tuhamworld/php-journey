<?php
// The Switch Statement is used to perform different actions based on condition


$favColor = "blue";

switch($favColor){
    case "blue":
        echo "Your favorite color is blue";
        break;
    case "purple":
        echo "Your favorite color is purple";
        break;
    case "red":
        echo "Your favorite color is red";
        break;
    case "orange":
        echo "Your favorite color is orange";
        break;
    default:
        echo "Your favorite color is neither blue, purple, red nor orange";    
}


// Using more than one case for each block

$day = 3;

switch($day){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "The week feels so long";
        break;
    case 6:
    case 0:
        echo "Weekend is here already here";
        break;
    default:
    echo "What day of the week is it, self?";
}


?>