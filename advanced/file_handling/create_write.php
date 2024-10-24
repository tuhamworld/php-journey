<?php

// The fopen() function can also be used to create a file with a file that does not exist. Given that the file is opened for writing

$tuhamfile = fopen("helloworld.txt", "w");
fclose($tuhamfile);

// The fwrite() function is used to write to a file whereby the first parameter is the filename, and the second parameter is the text to write.

$myfile = fopen("testfile.txt", "w") or die("Unable to open file");
$txt = "Welcome to Dummy PHP Learn\n";
fwrite($myfile, $txt);
$txt = "This is basically a testing page for learning PHP \n";
fwrite($myfile, $txt);
fclose($myfile);


// PHP Overwriting is whereby you open an existing file, and you overwrite the existing contents in the file

$myfile = fopen("testfile.txt", "w") or die("Unable to open file");
$txt = "Cool Dummy PHP Learn\n";
fwrite($myfile, $txt);
fclose($myfile);



// PHP Append Text - We can append to a text in PHP using the a mode

$myfile = fopen("testfile.txt", "a") or die("Unable to open file");
$txt = "Howdy, Tuham\n";
fwrite($myfile, $txt);
fclose($myfile);


?>