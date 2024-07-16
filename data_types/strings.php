<?php

// Find out word count
$txt = "Tunde is a Web Designer and Consultant";
echo str_word_count($txt);

// Search for a word inside text
echo strpos($txt, "Tunde");

// Replace strings
$a = "Welcome to TuhamWorld";
echo str_replace("Welcome", "Ekaabo", $a);

// Slicing strings
$b = "Online Presence";
echo substr($b, 5, 9);

// Slicing strings to the End
$c = "Online Presence";
echo substr($c, 5);

// Negative Length Omission
$d = "Compatibility";
echo substr($d, 4, -4);

// Escape characters
$word = "Good Timber does not grow with \"Ease\"  the stronger, the stronger the trees";
echo $word;

// Escape variables
$today = "Tuesday, 16th of July, 2024";
echo "\$today <br/>";
echo "$today";

?>


<!-- Link to String References -->

https://www.w3schools.com/php/php_ref_string.asp