<?php
// The While loop continues to run a loop when the condition is still true.
// Remember to increment year or else the loop will continue to loop forever.

$year = 1994;

while($year < 2024){
    echo "$year <br/>";
    $year++;
}


// The (break) statement stops the loop even if the condition is true

$year = 1994;

while($year < 2024){
    if ($year == 1999) break;
    echo "$year <br/>";
    $year++;
}


// The (continue) statement stops the current iteration and continues with the rest

$year = 1994;
while($year < 2024){
    $year++;
    if ($year === 2001) continue;
    echo "$year <br/>";
}

// (While Steps)

$i = 10;
while($i < 100){
    echo "$i <br/>";
    $i+=10;
}

?>