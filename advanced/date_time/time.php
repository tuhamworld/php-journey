<?php

// For TIME

// Some characters used to specify time

// H - 24 hour (00 - 23)
// h - 12 hour (00 - 12)
// i - minutes (00 - 59)
// s - seconds (00 - 59)
// a - (am or pm)

echo "The time is " . date("h:i:sa");
echo "<br/>";

// To set the time correctly to a specific timezone. See below;

date_default_timezone_set("Africa/Lagos");
echo "The time is " . date("h:i:sa");
echo "<br/>";

?>
