<?php

// Checking Variable numbers for integers between min and max

$int = 135;
$min = 1;
$max = 400;


if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min range" =>$min, "max_range" => $max))) === false){
    echo ("Variable value is not within the legal range <br/>");
} else {
    echo ("Variable value is within the legal range <br/>");
}

// Validating IPv6 Address

$ip_address = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip_address, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo ("$ip_address is a valid IPv6 Address <br/>");
} else {
    echo "$ip_address is not a valid IPv6 address <br/>";
}


// Validating URL Filters with a Query String

$url = "https://tuhamworld.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false){
    echo ("$url is a valid URL with query strings");
} else {
    echo ("$url is NOT a valid URL with query strings");
}


// Removing Characters With ASCII Value > 127

$str = "<h2>Welcome to TuhamWorldÆØÅ!</h2>";
// Using a  regex below that says everything not matching ASCII value from 0 - 127 will be replaced with an empty string 
$newstr = preg_replace('/[^\x00-\x7F]/', '', $str); 
echo $newstr;



?>