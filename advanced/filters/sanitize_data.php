 <?php

// The filter_var() both validate and sanitize (depreciated from PHP 7.3 and removed from PHP 8.1)
// Due to the depreciation of above, we'll be using strip_tags



// Validating and Sanitizing Strings
$str = "<h2>Tunde Sanusi (Tuham)</h2>";
// $new_str = filter_var($str, FILTER_SANITIZE_STRING); - function depreciated
$new_str = strip_tags($str);
echo" $new_str <br/>";


// Validate and Sanitizing Integers

$int = 2024;

if (!filter_var($int, FILTER_VALIDATE_INT) === false){
    echo "Integer is valid <br/>";
} else {
    echo "Integer is not valid <br/>";
}

// N.B - If integer is 0, you will get an Integer not valid

$int = 0;

if  (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false){
    echo "Integer is valid <br/>";
} else {
    echo "Integer is not valid <br/>";
}




?>