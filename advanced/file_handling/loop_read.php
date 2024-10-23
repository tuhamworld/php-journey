<?php

// The below code would output line until the end of line
$mytext = fopen("sample_text.txt", "r") or die ("Unable to open file"); 


while (!feof($mytext)){
    echo fgets($mytext) . "<br/>";
}
fclose($mytext);

?>