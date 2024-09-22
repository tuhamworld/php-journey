<?php

// One can create an optional timestamp as well.

//  The optional timestamp specifies a timestamp, if not available - make use of the current timestamp.

// mktime(hour, minute, second, month, day, year)


$d = mktime(01, 58, 25, 07, 16, 2024);
echo "Someone's date is " . date("d/m/Y", $d);
echo "<br/>";
echo "While another optional time is "  . date("h:i:sa", $d);



?>