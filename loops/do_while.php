<?php
//  The (do..while) loop will execute the code once even if the condition is true.

$year = 2010;

do{
    echo "$year <br/>";
    $year++;
} while ($year < 2024);


// Let us set the condition to be false

$year2 = 2024;

do{
    echo "$year2 <br/>";
    $year2++;
} while ($year > 2024)
?>