<?php
// $SERVER is a super global variable which hold information about headers, paths and script locations
// Listed below are how to use some elements in PHP $SERVER

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


// More elements can be found in https://www.w3schools.com/php/php_superglobals_server.asp


?>