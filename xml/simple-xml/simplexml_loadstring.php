<?php
$myXMLData = 
"<?xml version = '1.0' encoding = 'UTF-8'?>
<note>
<heading>Reminder</heading>
<body>Don't forget this weekend!</body>
</note>";



$xml = simplexml_load_string($myXMLData) or die("Error: Cannot create object");

print_r($xml);



?>