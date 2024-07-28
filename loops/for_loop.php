<?php
//  (for loop) is used when you know how many times a script should run

// Printing numbers from 0 to 10

for ($year= 2018; $year < 2024; $year++){
    echo "Tuham has been using WordPress in the year $year <br/>";
}

// Break stop the loop even if its true

for ($year= 2018; $year < 2024; $year++){
    if ($year == 2021) break;
    echo "Tuham has been using WordPress in the year $year <br/>";
}

// Continue stops the loop and continue on the next interation
for ($year= 2018; $year < 2024; $year++){
    if ($year == 2021) continue;
    echo "Tuham has been using WordPress in the year $year <br/>";
}

?>