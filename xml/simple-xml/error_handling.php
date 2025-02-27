<?php

// The libxml functionality  is used to retrieve all XML erros when loading document

libxml_use_internal_errors(true);
$myXMLData = 
"<?xml version='1.0' encoding='UTF-8'?>
<document>
<user>Adio Fuad</wronguser>
<email>proffuad@example.com</wrongemail>
</document>";

$xml = simplexml_load_string($myXMLData);
if ($xml === false){
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error){
        echo "<br/>", $error->message;
    }
} else {
    print_r($xml);
}




?>