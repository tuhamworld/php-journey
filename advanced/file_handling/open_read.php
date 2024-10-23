<?php

// Opening a file using fopen() function and setting an output incase the file becomes unreadable.
$mytext = fopen("sample_text.txt", "r") or die ("Unable to open file"); 


// fread() function is used to read the content of a file while the filesize is used for specifying max number of bytes to read.
echo fread($mytext, filesize("sample_text.txt"));


// The fgets() function outputs only the first line
echo fgets($mytext);

// feof() function checks if it has reached the end of the line
echo feof($mytext);

// It is a good programming practice to close file after reading to avoid having a file being opened and taking up server space.
fclose($mytext);


?>