<?php

// For DATE
// The Php date() function is used to format a date and/or a time

// Some characters used to specify in php() date time are;

//  d (day of the month 0 - 31)
//  m (month of the year)
//  Y (year)
//  l (day of the week)


// Other characters such as "/", "." and "-" can be inserted 

echo "Today's date is " . date("d/m/Y") . "<br/>"; // 22/09/2024
echo "The day of the week for today is " . date("l"); // Sunday
echo "<br/>";

// PHP Tip - To automatically update the year of the date;

echo "&copy; NetSocialBlog 2012 - " . date("Y"); // © NetSocialBlog 2012 - 2024
echo "<br/>";

?>