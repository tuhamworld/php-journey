<?php
// You can create a date from string as well.

$d = strtotime("4:50pm September 22 2024");
echo "The created date is " . date("d/m/y h:i:sa", $d);


// Interestingly, one can put it in various values

$t = strtotime("tomorrow");
echo "Tomorrow's date is " . date("l, d-m-y h:i:sa", $t);
echo "<br/>";

$y = strtotime("next Sunday");
echo "Next Sunday's date is " . date("l, d-m-y h:i:sa", $y);
echo "<br/>";

$z = strtotime("+3 months");
echo "Next 3 Month is " . date("l, d-m-y h:i:sa", $z);
echo "<br/>";



?>